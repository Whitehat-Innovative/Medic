<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function addimageview(){
        $tags = Gallery::all('id','tags');
        return view('admins.addimagetogalleryview',['tags'=>$tags]);

    }
    public function addimage(Request $request){
        $request->validate([
            'details' => 'string|required',
            'tags' => 'integer|required'
        ]);

        $image=[];
        foreach($request->image as $photo){
            $ext = $photo->getClientOriginalExtension();
            $rand= \Str::random(2).uniqid();
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
    public function deleteimage(Gallery $image){

        if (Auth::user()->code==007) {
          $image->delete();
          Alert::info('Deleted','Image deleted');
          return back();
        }
        Alert::warning('Failed','You are not an admin');
        return back();

    }

    public function allimageview(){

        $images=Gallery::all();
        return view('admins.allimagesaddedtogallery',['image'=>$images]);
    }
    public function imageview(Gallery $images){

        $img=Gallery::find($images->id);

        $imagg =explode('|',$img->image);

        return view('admins.imageview',['image'=>$img, 'ima'=>$imagg]);
    }

    // public function editimage(Gallery $imag, Request $request){
    //     if ($request->hasFile('image')) {
    //         $img=[];
    //         foreach($request->image as $photo){
    //             $ext = $photo->getClientOriginalExtension();
    //             $rand= \Str::random(2).uniqid();
    //             $imagename = \Str::slug($request->tag).time().$rand.'.'.$ext;
    //             $photo->move(public_path('gallery'),$imagename);
    //             $img[]=$imagename;
    //         }

    //         $imag->image = implode('|',$img );

    //     }
    //     $imag->details = $request->details;
    //     $imag->tags = $request->tags;
    //     $imag->save();
    //     Alert::success('Photos', 'Photos edited successfully');
    //     return back();

    // }

//     public function editimageview(Gallery $image){
//         $img=Gallery::find($image->id);
//         return view('admin.editimageview',['image'=>$img]);
//     }
}
