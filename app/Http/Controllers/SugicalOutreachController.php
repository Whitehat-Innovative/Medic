<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Models\SugicalOutreach;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class SugicalOutreachController extends Controller
{
    //
    public function specialties(){
        $pat = Partners::latest()->get();
        $sug = SugicalOutreach::get();
        return view('admins.specialties', ['pat'=> $pat, 'sug' => $sug]);
    }
    public function addpartners(){
        return view('admins.addpartners');
    }
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

            $image = $request->image;
            $ext = $image->getClientOriginalExtension();
                $filename = time() . uniqid() . '.' . $ext;
                $image->storeAs('public/surgical', $filename);
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
    public function partnerspost(Request $request){

        $request->validate([
            'name_of_firm' => 'string|nullable',
        ]);

        if ($request->logo) {

            $logo = $request->logo;
            $ext = $logo->getClientOriginalExtension();
                $filename = time() . uniqid() . '.' . $ext;
                $logo->storeAs('public/partner', $filename);
        }


            $partners = new Partners();
            $partners->name_of_firm = $request->name_of_firm;
            $partners->logo = $filename;
            $partners->save();

            Alert::success('success', 'New Surgical Outreach added successfully');
            return back();
    }

    public function deletepartner($id){
        $partners = Partners::find($id);
        $partners->delete();
        Alert::success('Deleted', 'Medical Partner Deleted');
        return back();
    }
    public function deletesurgical($id){
        $sugicalOutreach = SugicalOutreach::find($id);
        $sugicalOutreach->delete();
        Alert::success('Deleted', 'Surgical Outreach');
        return back();
    }
}
