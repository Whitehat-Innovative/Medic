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
    public function surgerypost(Request $request){

        $request->validate([
            'description' => 'string|nullable',
            'start_date' => 'string|required',
            'end_date' => 'string|required',
        ]);

        if ($request->image) {

            $ext= $request->image->getClientOriginalExtension();
            $filename = \Str::slug('surgical_image').time().'.'.$ext;
            $request->image->move(public_path('SurgicalOutreach') , $filename);
        }
        

            $sugicalOutreach = new SugicalOutreach();
            $sugicalOutreach->description = $request->description;
            $sugicalOutreach->image = $filename;
            $sugicalOutreach->start_date = $request->start_date;
            $sugicalOutreach->end_date = $request->end_date;
            $sugicalOutreach->save();

            Alert::success('success', 'New Surgical Outreach added successfully');
            return back();


    }
}
