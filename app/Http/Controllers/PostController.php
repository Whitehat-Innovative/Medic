<?php

namespace App\Http\Controllers;

use App\Mail\Message as test;
use App\Models\Blog;
use App\Models\Category;
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
        $ct =Category::all();
        return view('admins/addblog', ['cat'=>$ct]);
    }

    public function cat_blog(Category $category)
    {
        $bl= Blog::where('category_id',$category->id);
        return view('admins/cat-blog', ['blo'=>$bl]);
    }

    public function research()
    {
        $ct =Category::all();

        return view('admins/addresearch', ['cat'=>$ct]);
    }

    public function addpost(Request $request, Blog $blog){

        $ext =$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('Blog-image'), $filename);


        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category_id = $request->category;
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
        $research->category_id =$request->category;
        $research->author =$request->author;
        $research->user_id = Auth::user()->id;

        $research->save();
        return back();

    }


    public function addCat(Request $request){

        $ct =new Category();
        $ct ->category =$request->category;
        $ct ->description =$request->description;
        $ct->save();
        return back();

    }
    public function cat(){

        $cat = Category::all();

        return view('/admins/addCatTag', ['cat'=>$cat]);

    }





    public function allpost(){

        $bl= Blog::all();
        $ct = Category::all();
        return view('/admins/allblogs',['blo'=>$bl,'cat'=>$ct]);
    }

        public function editpostview(Blog $blog){

            $bl= Blog::with('category')->find($blog)->first();
            
            return view('/admins/editblog', ['blog'=>$bl]);
            


        }




    public function editpost( Blog $blog, Request $request){

        $ext=$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('Blog-image'), $filename);

        $blog->title =$request->title;
        $blog->user_id =Auth::user()->id;
        $blog->content =$request->content;
        $blog->author =$request->author;
        $blog->category_id =$request->category;
        $blog->image =$filename;

        $blog->save();
        return back();
    }


    // public function message(){

    //    $store = new Message();
    //    $store->title = 'You are Welcome';
    //    $store->content = 'This is the Content Needed';
    //    $store->save();


    //             return view('/messagetest', ['s'=>$store]);

    //             $b= User::all();

    //             $b->each(function ($name) {
            
    //                 $name->name = $name->email;
    //                 Mail::to($name)->send(new MailableClass);
                    
    //             });


    // }


    

    

}
