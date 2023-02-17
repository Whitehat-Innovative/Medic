<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Patient;
use App\Models\User;
use App\Models\User as ModelsUser;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class   UserController extends Controller
{


    /* All users function */
    public function allusers(){

        $users = User::paginate(20);

        return view('admins/allusers',['u'=>$users]);
    }


    public function search(Request $request){

        $s = Patient::where('name','like','%'.$request->search.'%')->paginate(10);

        return view('admins.patientsearch', ['search'=>$s]);
    }


    public function edituserview( User $users){

        return view('admins/editview',['u'=>$users]);
    }


    public function edit( User $users, Request $request){

        if ($request->hasFile('image')) {

        $ext=$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->title).time().'.'.$ext;
        $request->image->move(public_path('User-image'), $filename);

        $users->name =$request->name;
        $users->code =$request->code;
        $users->email =$request->email;
        $users->image =$filename;

        $users->save($request->except(['password']));
        Alert::success('Edited', 'Edited user');
        return back();
        }



        $users->name =$request->name;
        $users->code =$request->code;
        $users->email =$request->email;


        $users->save($request->except(['password']));
        Alert::success('Edited', 'Edited user');


        return back();
    }



    public function destroy(Request $request, User $users){


        $check =Auth::user()->code;
        if ($check == 007) {

            $users->delete();
            Alert::success('Delteted', 'Deleted user');
            return back();

        }

        Alert::info('Fail', 'Your are not an admin');
            return back();

    }


    ///* All donations functions */
    public function alldonation(){

        $d = Donation::with('patient')->latest()->paginate(20);

        // dd($d);

        return view('admins/alldonations',['don'=>$d]);
    }


    public function deletedonation(Request $request, Donation $donation){


        $check =Auth::user()->code;
        if ($check == 007) {

            $donation->delete();
            Alert::success('Delteted', 'Deleted donation');
            return back();
        }
        Alert::info('Fail', 'You are not an admin');
            return back();

    }


/* All patients */
    public function allpatient(){

        $p = Patient::with('donations')->paginate(20);



        // $p -> each(function ($get){
        //                 $get->get= $get->donations->count();
        //             });
        //             dd($p->get);

        return view('admins/allpatient',['pat'=>$p]);
    }


    public function singlepatient(Patient $patient){

        $p = Patient::find($patient->id);
        $d = Donation::where('patient_id',$patient->id)->where('status','success')->latest()->first();
        $dd = $d->current_fund;
        return view('admins/singlepatient',['patient'=>$p, 'donation'=>$dd]);
    }



    public function editpatientview(Patient $patient){

        return view('admins/editpatientview',['patient'=>$patient]);
    }

    public function editpatient(Patient $patient, Request $request){

        if($request->hasFile('image')){

            $ext=$request->file('image')->getClientOriginalExtension();
            $filename= \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('Patient-image'), $filename);

            $patient->name =$request->name;
            $patient->sex =$request->sex;
            $patient->email =$request->email;
            $patient->illness_description =$request->illness_description;
            $patient->illness_name =$request->illness_name;
            $patient->age =$request->age;
            $patient->target_fund =$request->target_fund;
            $patient->image =$filename;

            $patient->save();

            Alert::success('Edited', 'Patient Edited' );

            return back();


        }


        $patient->name =$request->name;
        $patient->sex =$request->sex;
        $patient->email =$request->email;
        $patient->illness_description =$request->illness_description;
        $patient->illness_name =$request->illness_name;
        $patient->age =$request->age;
        $patient->target_fund =$request->target_fund;

        $patient->save();
        Alert::success('Edited', 'Patient Edited' );

        return back();
    }

    public function deletepatient(Request $request, Patient $patient){


        $check =Auth::user()->code;
        if ($check == 007) {

            $patient->delete();
            return back();
            Alert::success('Deleted', 'Patient Deleted' );
        }
        Alert::info('fail', 'You are not an admin' );
            return back();

    }


    public function addpatient(){

        return view('admins/addpatient');
    }

    public function makepatient(Request $request){

        if ($request->hasFile('image')){

        $ext=$request->file('image')->getClientOriginalExtension();
        $filename= \Str::slug($request->name).time().'.'.$ext;
        $request->image->move(public_path('Patient-image'), $filename);

        $patient = new Patient();
        $patient->name =$request->name;
        $patient->sex =$request->sex;
        $patient->email =$request->email;
        $patient->illness_description =$request->illness_description;
        $patient->illness_name =$request->illness_name;
        $patient->age =$request->age;
        $patient->target_fund =$request->target_fund;
        $patient->image =$filename;

        $patient->save();
        Alert::success('Success','You added a new patient');


        }

        $patient = new Patient();
        $patient->name =$request->name;
        $patient->sex =$request->sex;
        $patient->email =$request->email;
        $patient->illness_description =$request->illness_description;
        $patient->illness_name =$request->illness_name;
        $patient->age =$request->age;
        $patient->target_fund =$request->target_fund;
        $patient->save();
        Alert::success('Success','You added a new patient');

        return back();
    }










}
