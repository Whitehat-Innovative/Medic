<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    public function addimageview()
    {
        $tags = Tag::all();
        return view('admins.addimagetogalleryview', ['tagg' => $tags]);
    }

    /* working */
    public function addimage(Request $request)
    {
        $request->validate([
            'details' => 'string|required',
            'tag_id' => 'string|required'
        ]);

        $t = Tag::where('id', $request->tag_id)->first()->tag;

        $image = [];

        foreach ($request->image as $photo) {
            $ext = $photo->getClientOriginalExtension();
            $rand = \Str::random(2).uniqid();
            $imagename = \Str::slug($request->tag).time().$rand . '.' . $ext;
            $photo->move(public_path('gallery'), $imagename);
            $image[]=$imagename;
        }
            $gallery = new Gallery();
            $gallery->details = $request->details;
            $gallery->tag = $t;
            $gallery->tag_id = $request->tag_id;
            $gallery->image = implode('|',$image);
            $gallery->save();

             Alert::success('Photos', 'Photos added successfully');

        return back();
    }
    public function imageview(Gallery $images)
    {


        // dd($images);
        $img = Gallery::find($images->id);

        $imagg = explode('|', $img->image);

        return view('admins.imageview', ['image' => $img, 'ima' => $imagg]);
    }



    public function editimageview( $photo, Gallery $images){

        return view('admins.editgalleryimageview', ['photoo'=>$photo, 'imagess'=>$images]);

    }
    public function addtagtogallery(Request $request){

        $tags = new Tag();
        $tags->tag=$request->tag;
        $tags->save();
        Alert::success('Success', 'Tag added to gallery');
       return back();
    }
    public function addtagtogalleryview(){

        $tags =Tag::all();

        return view('admins.addgallerytag', ['tag'=>$tags]);

    }




    public function editgalleryimage( $photoo, Gallery $imagess, Request $request){

        $ext =$request->file('image')->getClientOriginalExtension();
        $rand = \Str::random(2).uniqid();
        $newimage= \Str::slug($imagess->tag).time().$rand.'.'.$ext;
        $request->image->move(public_path('gallery'), $newimage);


        $im = $imagess->image;
        $imm=explode('|',$im);

        $index=array_search($photoo,$imm,true);
        $imm[$index]=$newimage;

        $imagess->image= implode('|',$imm);
        $imagess->save();
        Alert::success('Success', 'Image edited successfully');

        return back();


    }


    public function deleteimage(Gallery $images)
    {


        if (Auth::user()->code == 007) {
            $images->delete();
            Alert::info('Deleted', 'Image deleted');
            return back();
        }
        Alert::warning('Failed', 'You are not an admin');
        return back();
    }



    public function allimageview()
    {

        $images = Gallery::all();
        return view('admins.allimagesaddedtogallery', ['image' => $images]);
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
