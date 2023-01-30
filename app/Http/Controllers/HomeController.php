<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('users.welcome');
    }
    public function about()
    {
        return view('users.about');
    }
    public function contact()
    {
        return view ('users.contact');
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
        return view ('users.blog');
    }
    public function single_blog()
    {
        return view('users.single_blog');
    }

}
