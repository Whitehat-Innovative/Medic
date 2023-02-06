<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
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

        $bl = Blog::latest()->paginate(10);

        return view ('users.blog', ['blo'=>$bl]);
    }
    public function single_blog(Blog $blog)
    {

        $bl= Blog::find($blog)->first();
        return view('users.single_blog',['blog'=>$bl]);
    }
    // this is for the donate
    public function donate()
    {
        return view('users.donate');
    }
    public function pay()
    {
        return view('users.pay');
    }

}
