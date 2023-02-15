<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    //

    public function allappointment(){

        $a =Appointment::latest()->paginate(5);
        return view('admins.allappointments', ['app'=>$a]);
    }
    public function singleappointment(Appointment $a){

        $a =Appointment::find($a->id);
        return view('admins.singleappointment', ['app'=>$a]);
    }
    public function deleteappointment(Appointment $a){


        $check =Auth::user()->code;
        if ($check == 007) {

            $a->delete();
            return view('admins.allappointments');
            Alert::success('Deleted', 'Comment Deleted');
        }
            return view('admins.allappointments');
            Alert::info('Fail', 'You are not an admin');

    }
    public function appointment(Request $request){


<<<<<<< HEAD
        // $request->validate([
        //     'name' => 'string|required',
        //     'email' => 'string|nullable',
        //     'phone' => 'string|required',
        //     'appointment_note' => 'string|required'
        // ]);
=======
         $request->validate([
             'name' => 'string|required',
             'email' => 'string|nullable',
           'phone' => 'string|required',
            'appointment_note' => 'string|required'
         ]);
>>>>>>> f0d109a6d4472cb1b70df64512179e655bf3e37d
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->location = $request->location;
        $appointment->appointment_note = $request->appointment_name;
        $appointment->save();
<<<<<<< HEAD

        Alert::success('Success','Your appointment notice has being sent the Doctor, will get back to you soon');
=======
        Alert::success('Success','Your appointment notice has been sent the Doctor will get back to you');
>>>>>>> f0d109a6d4472cb1b70df64512179e655bf3e37d
        return back();
    }
}
