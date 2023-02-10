<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Patient;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $blo = Blog::latest()->take(5);
        return view('users.welcome', ['blo'=>$blo]);
    }
    public function about()
    {
        return view('users.about');
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

    public function gallery()
    {
        return view('users.gallery');
    }
    public function appointment()
    {
        return view ('users.appointment');
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
        // dd($blog);

        // $bl= Blog::with('comments','replies')->find($blog)->first();
        $bl= Blog::with('comments')->find($blog->id);
        // dd($bl->reply);
        $c =Comment::with('replies')->where('blog_id',$bl->id)->paginate(2);

        // $r=Reply::where('comment_id',$c);

        // $c =$bl->comments->all();


// foreach($c as $b){

//     $d = $b->replies;
// }

        // $c->each(function($c, $bl){
        //     $c->blue=$bl->reply->all();
        // });

        // dd($c->blue);


        // dd($c);

        // $c= $bl->replies->where('id',$blog);

        return view('users.single_blog',['blog'=>$bl,'c'=>$c ]);
    }
    // this is for the donate
    public function donate()
    {
        $p=Patient::all();
        return view('users.donate', ['p'=>$p]);
    }
    public function pay(Patient $p)


    {

        $pat= Patient::find($p->id);


        return view('users.pay' , ['p'=>$pat]);
    }

}
