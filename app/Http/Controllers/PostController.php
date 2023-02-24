<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;

use App\Mail\Message as test;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Location;
use App\Models\Message;
use App\Models\Reply;
use App\Models\Research;

use Illuminate\Http\Request;
use Illuminate\Mail\Message as MailMessage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function addlocation(Request $request){

        $location= new Location();
        $location->name=$request->name;
        $location->save();
        Alert::success('Success', 'Location added');

        return back();

    }
    public function editlocationview(Location $location){


        return view('admins.editlocationview',['location'=>$location]);

    }
    public function editlocation(Request $request, Location $location){

        $location->name=$request->name;
        $location->save();
        Alert::success('Success', 'Location Edited');

        return back();

    }

    public function alllocationview(){

        $locate=Location::all();

        return view('admins.alllocation',['l'=>$locate]);

    }

    public function deletelocation(Location $location){

       if (Auth::user()->code==007) {
        $location->delete();
        Alert::success('Deleted', 'Location deleted');
        return back();


       }
        Alert::info('Warning', 'Your not an admin');
        return back();

    }

    public function search(Request $request){

        $q= Blog::where('title','like', '%'.$request->search.'%')->paginate(10);
        $popblog= Blog::with('comments')->paginate(2);


        return view('admins.allblogsearch',['search'=>$q, 'p'=>$popblog ]);
    }


    public function allresearch()
    {

            $r= Research::paginate(5);
            return view('admins.allresearch', ['rea'=>$r]);



    }
    public function singleresearch(Research $re)
    {

            $rea= Research::find($re->id);
            return view('admins.singleresearch', ['re'=>$rea]);



    }

    public function destroyresearch(Research $re){


        $check =Auth::user()->code;
        if ($check == 007) {

            $re->delete();
            return view('admins.allresearch');
            Alert::success('Success', 'Research Deleted');
        }
            return back();
            Alert::info('Fail', 'You are not an admin');

    }

    public function blog()
    {
        $ct =Category::all();
        return view('admins/addblog', ['cat'=>$ct]);
    }
    public function singleblog(Blog $blog)
    {
        $blo =Blog::with('comments')->find($blog->id);

        return view('admins/singleblog', ['blog'=>$blo]);
    }

    public function cat_blog(Category $category)
    {
        $bl= Blog::where('category_id', $category->id);
        return view('admins/cat-blog', ['blo'=>$bl]);
    }

    public function research()
    {
        $ct =Category::all();

        return view('admins/addresearch', ['cat'=>$ct]);
    }

    public function addpost(Request $request, Blog $blog){

        $request->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'category_id' => 'integer|required',
            'author' => 'string',
            'user_id' => 'integer',
            // 'images' => 'string|required'
        ]);

        if ($request->hasFile('image')) {

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
        Alert::success('Success', 'Blog Added successfully');
        }


        $blog = new Blog();
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category_id = $request->category;
        $blog->author = $request->author;
        $blog->user_id = Auth::user()->id;
        $blog->save();

        Alert::success('Success', 'Blog Added successfully');
        return back();
    }


    public function deleteblog(Blog $blog){


        $check =Auth::user()->code;
        if ($check == 007) {

            $blog->delete();
            return back();
            Alert::success('Success', 'Blog deleted Successfully');
        }
            return back();
            Alert::info('Fail', 'You are not an admin');

    }


    public function addresearch(Request $request){
        $request->validate([
            // 'image' => 'string|required',
            'content' => 'string|required',
            'title' => 'string|required',
            'reference' => 'string',
            'category_id' => 'integer',
            'author' => 'string|required',
            'user_id' => 'integer'
        ]);
// dd($request->all());
        if ($request->hasFile('image')) {

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
            Alert::success('Research', 'Research added successfully');
            # code...
        }

        $research =new Research();
        $research->title =$request->title;
        $research->content =$request->content;
        $research->reference =$request->reference;
        $research->category =$request->category;
        $research->author =$request->author;
        $research->user_id = Auth::user()->id;

        $research->save();
        Alert::success('Research', 'Research added successfully');
        return back();

    }


    public function addCat(Request $request){
        $request->validate([
            'category' => 'string',
            'description' => 'string'
        ]);

        $ct =new Category();
        $ct ->category =$request->category;
        $ct ->description =$request->description;
        $ct->save();
        Alert::success('Success', 'New Category added');
        return back();

    }

    public function cat(){
        $cat = Category::all();
        return view('/admins/addCatTag', ['cat'=>$cat]);

    }


  public function allpost(){

        $bl= Blog::with('comments')->paginate(3);
        $popblog= Blog::with('comments')->paginate(2);
        $ct = Category::all();

        return view('/admins/allblogs',['blo'=>$bl, 'p'=>$popblog , 'cat'=>$ct]);
    }

 public function editpostview(Blog $blog){

            $bl= Blog::with('category')->find($blog)->first();
            return view('/admins/editblog', ['blog'=>$bl]);

        }


    public function editpost( Blog $blog, Request $request){
        $request->validate([

        ]);

       if ($request->hasFile('image')) {

        $ext=$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('Blog-image'), $filename);

        $blog->title =$request->title;
        $blog->user_id =Auth::user()->id;
        $blog->content =$request->content;
        $blog->author =$request->author;
        $blog->category_id =$request->category;
        $blog->images =$filename;

        $blog->save();
        Alert::success('Edited', 'Blog Edited Successfully');

       }

       $blog->title =$request->title;
       $blog->user_id =Auth::user()->id;
       $blog->content =$request->content;
       $blog->author =$request->author;
       $blog->category_id =$request->category;


       $blog->save();

        Alert::success('Edited', 'Blog Edited Successfully');
        return back();
    }


    public function addcomment(Request $request){
        $request->validate([
            'name' => 'string|required',
            'email' => 'string',
            'blog_id' => 'integer',
            'comment' => 'string|required'
        ]);

            $check=Comment::where('name',$request->name && 'blog_id', $request->blog_id)->exists();

        if ($request->name=='Admin') {
            $comment = new Comment();
            $comment->name =$request->name;
            $comment->email =$request->email;
            $comment->blog_id =$request->blog_id;
            $comment->comment =$request->comment;
            $comment->save();
            Alert::success('Success', 'Admin, your comment has been added successfully');
            return back();
            # code...
        }
        elseif ($check==false) {

        $comment = new Comment();
        $comment->name =$request->name;
        $comment->email =$request->email;
        $comment->blog_id =$request->blog_id;
        $comment->comment =$request->comment;
        $comment->save();
        Alert::success('Success', 'Coment added successfully, you will not be able to add another comment to this blog');
        return back();

        }

        Alert::warning('Failed', "You've already added a comment");

        return back();




    }

    public function allcomment(){

        $comment =Comment::with('replies')->latest()->paginate('2');

        return view('admins.allcomments', ['com'=>$comment]);

    }


    public function approvecomment(Comment $c){

        $c->status = 'Approved';
        $c->save ();

        Alert::success('Approval', 'You Approved this Comment it Will be displayed under the blog for others to see');
        return back();

    }

    public function editcommentview(Comment $c){
        $com= Comment::with('blog')->find($c->id);

        return view('admins.editcommentview', ['comment'=>$com]);

    }


    public function editcomment(Comment $c, Request $request){
        $request->validate([
            'name' => 'string|required',
            'email' => 'string',
            'blog_id' => 'integer',
            'comment' => 'string|required'
        ]);

        $c->name =$request->name;
        $c->email =$request->email;
        $c->blog_id =$request->blog_id;
        $c->status =$request->status;
        $c->comment =$request->comment;
        $c->save();
        Alert::success('Edited', 'Comment Edited');
        return back();

    }


    public function deletecomment(Comment $c, Request $request){


        $check =Auth::user()->code;
        if ($check == 007) {

            $c->delete();
            Alert::success('Deleted', 'Comment Deleted');
            return back();
        }
            return back();

            Alert::info('Fail', 'You are not an admin');

    }


    public function addreply(Request $request, Comment $comment){
        $request->validate([
            'blog_id' => 'integer|required',
            'comment_id' => 'integer|required',
            'reply' => 'string|nullable'
        ]);


        $reply = new Reply();
        $reply->code ='007';
        $reply->blog_id =$comment->blog_id;
        $reply->comment_id =$comment->id;
        $reply->reply =$request->reply;
        $reply->save();
        Alert::success('Success', 'Your reply has been sent');
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
