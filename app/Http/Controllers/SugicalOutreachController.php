<?php

namespace App\Http\Controllers;

use App\Models\SugicalOutreach;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SugicalOutreachController extends Controller
{
    //
    public function surgeryadd(){
        return view('admins.surgical');
    }
    public function surgerypost(Request $request, SugicalOutreach $sugicalOutreach){

        $request->validate([
            'description' => 'string|nullable',
            'image' => 'string|nullable',
            'duration' => 'string|required'
        ]);

        if ($request->hasFile('image')) {

            $ext= $request->file('image')->getClientOriginalExtension();
            $filename = \Str::slug($request->title).time().'.'.$ext;
            $request->image->move(public_path('SurgicalOutreach') , $filename);
        }

        $sugicalOutreach = SugicalOutreach::updateOrCreate(
            [
                'id'=>1
            ],
            [
                'description' => $request->description,
                'duration' => $request->duration,
                'image' => $filename
            ]);
         Alert::success('New Surgical Outreach', 'New Surgical Outreach added successfully');
}
}
