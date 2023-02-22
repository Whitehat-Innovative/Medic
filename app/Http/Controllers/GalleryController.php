<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photos (Request $request){
        $request->validate([
            'details' => 'string|required'
        ]);
        foreach($request->more_images as $image){
            $ext = $image->getClientOriginalExtension();
            $filename = time() . uniqid() . '.' . $ext;
            $image->storeAs('public/gallery', $filename);

        $gallery = new Gallery();
        $gallery->details = $request->details;
        $gallery->image = $filename;
        $gallery->save();
        Alert::success('Photos', 'Photos added successfully');

    }
    //
}
