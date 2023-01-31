<?php

namespace App\Http\Controllers;

use App\Mail\Message as test;
use App\Models\Blog;

use App\Models\CatTag;
use App\Models\Message;
use App\Models\Research;

use Illuminate\Http\Request;
use Illuminate\Mail\Message as MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{


    public function blog()
    {
        return view('admins/addblog');
    }

    public function research()
    {
        return view('admins/addresearch');
    }

    public function addpost(Request $request, Blog $blog){

        $ext =$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('Blog-image'), $filename);


        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->tags = $request->tags;
        $blog->author = $request->author;
        $blog->user_id = Auth::user()->id;
        $blog->images = $filename;
        $blog->save();
        return back();


    }



    public function addresearch(Request $request){


        $ext= $request->file('image')->getClientOriginalExtension();
        $filename = \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('Research-image') , $filename);


        $research =new Research();
        $research->image =$filename;
        $research->title =$request->title;
        $research->content =$request->content;
        $research->reference =$request->reference;
        $research->category =$request->category;
        $research->author =$request->author;
        $research->user_id = Auth::user()->id;

        $research->save();
        return back();

    }





    public function addCatTag(Request $request){

        $ct =new CatTag();
        $ct ->category =$request->category;
        $ct ->tag =$request->tag;
        $ct->save();
        return back();

    }
    public function CatTag(){

        $ct = CatTag::all();

        return view('/admins/addCatTag', ['ct'=>$ct]);

    }


    // public function message(){

    //    $store = new Message();
    //    $store->title = 'You are Welcome';
    //    $store->content = 'This is the Content Needed';
    //    $store->save();


    //             return view('/messagetest', ['s'=>$email]);




    // }

}
