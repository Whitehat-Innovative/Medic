<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function addimageview(){
        return view('admins.addimagetogalleryview');

    }
    public function addimage(Request $request){
        $request->validate([
            'details' => 'string|required'
        ]);

        $image=[];
        foreach($request->image as $photo){
            $ext = $photo->getClientOriginalExtension();
            $rand= \Str::random(2);
            $imagename = \Str::slug($request->tag).time().$rand.'.'.$ext;
            $photo->move(public_path('gallery'),$imagename);
            $image[]=$imagename;
        }



        $gallery = new Gallery();
        $gallery->details = $request->details;
        $gallery->tags = $request->tags;
        $gallery->image = implode('|',$image );
        $gallery->save();
        Alert::success('Photos', 'Photos added successfully');

        return back();

    }
    
}
