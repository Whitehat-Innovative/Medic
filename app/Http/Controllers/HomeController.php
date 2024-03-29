<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\Partners;
use App\Models\Patient;
use App\Models\Research;
use App\Models\SugicalOutreach;
use App\Models\Tag;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    //
    public function index()
    {
                // use Carbon\Carbon;
        $now = strtotime('now');



        $myDate = \App\Models\SugicalOutreach::pluck('end_date');

        $date = strtotime($myDate);
        $events = \App\Models\SugicalOutreach::whereDate('end_date', '>=', $now)->latest()->get()->take(1);
        $loc = Location::all();
        $part = Partners::latest()->get();
        $blo = Blog::latest()->get()->take(5);
        $test = Testimonial::where('action', 'approved')->latest()->get();
        return view('users.welcome', [ 'events' => $events,'blo'=>$blo, 'tes'=>$test, 'loc'=>$loc, 'part'=> $part]);
    }
    public function about()
    {
        $blo = Blog::latest()->take(5);
        return view('users.about', ['blo'=>$blo]);
    }
    public function contact()
    {
        $loc = Location::all();
        return view ('users.contact', ['loc'=>$loc]);
    }
    public function make_contact(Contact $contact, Request $request){
        $request->validate([
            'name' => 'string|required',
            'email' => 'string|nullable',
            'phone' => 'string|nullable',
            'subject' => 'string|nullable',
            'message' => 'string|required'
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        Alert::success('Contact', 'Thank you for contacting us');

        return back();
    }

    public function make_testimonial(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'string|required',
            'message' => 'string|required'
        ]);

        $testimonial = new Testimonial();
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->save();
        Alert::success('Thank you for your Patronage');

        return back();
    }


    public function gallery()
    {

        $gallery = Gallery::all();
        $im = '';
        foreach ($gallery as $g) {
           $im=explode('|',$g->image);
        }

        $tagg=Tag::all();

        return view('users.gallery',
         ['gal'=> $gallery, 'im1'=>$im, 'tag'=>$tagg]);
    }

    public function imageviewlayout(Tag $tag){


        $tagg= Tag::all();
        $img =Gallery::where('tag_id', $tag->id)->get();
        return view('users.imageview', ['taggg'=>$tagg, 'gal'=>$img]);

    }
    public function appointment()
    {
        $location = Location::all();
        return view ('users.appointment',['loc'=>$location]);
    }
    public function research()
    {
        $rea= Research::latest()->get();
        return view ('users.research', ['re'=>$rea]);
    }
    public function services()
    {
        return view ('users.services');
    }

//  These two functions are for the blog
    public function blog()
    {

        $bl = Blog::with('comments')->latest()->paginate(10);

        return view ('users.blog', ['blo'=>$bl]);
    }

    public function single_research(Research $rea)
    {
        $re= Research::find($rea->id);
        return view('users.single_research',['r'=>$re,]);
    }


    public function single_blog(Blog $blog)
    {

        $bl= Blog::with('comments')->find($blog->id);
        // dd($bl->reply);
        $c =Comment::with('replies')->where('blog_id',$bl->id)->latest();


        return view('users.single_blog',['blog'=>$bl,'c'=>$c ]);
    }

    function event($id) {
        $surgical = SugicalOutreach::where('id',$id)->first();
        //dd($surgical);
        return view('users.event',with(['id' => $id,'surgical'=>$surgical]));
    }

    // this is for the donate
    public function donate()
    {
        $p=Patient::all();
        return view('users.donate', ['p'=>$p]);
    }
    public function pay()


    {

        // $pat= Patient::find($p->id);


        return view('users.pay' );
    }

}
