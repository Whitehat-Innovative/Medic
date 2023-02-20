<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Location;
use App\Models\Patient;
use App\Models\Research;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $loc = Location::all();
        $blo = Blog::latest()->take(5);
        $test = Testimonial::latest()->get();
        return view('users.welcome', ['blo'=>$blo, 'tes'=>$test, 'loc'=>$loc]);
    }
    public function about()
    {
        $blo = Blog::latest()->take(5);
        return view('users.about', ['blo'=>$blo]);
    }
    public function contact()
    {
        return view ('users.contact');
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
        return back();
    }
    public function gallery()
    {
        $gallery = Gallery::latest()->get();

        return view('users.gallery',
         ['gal'=> $gallery]);
    }
    public function appointment()
    {
        $loc = Location::all();
        return view ('users.appointment',['loc'=>$loc]);
    }
    public function research()
    {
        $rea= Research::latest()->get();
        return view ('users.research', ['rea'=>$rea]);
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
    public function single_blog(Blog $blog)
    {



        $bl= Blog::with('comments')->find($blog->id);
        // dd($bl->reply);
        $c =Comment::with('replies')->where('blog_id',$bl->id)->latest();


        return view('users.single_blog',['blog'=>$bl,'c'=>$c ]);
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
