<?php

namespace App\Http\Controllers;

use App\Mail\Appointment as MailAppointment;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
            return back();
            Alert::success('Deleted', 'Comment Deleted');
        }
            return back();
            Alert::info('Fail', 'You are not an admin');

    }
    public function appointment(Request $request){

         $request->validate([
             'name' => 'string|required',
             'email' => 'string|nullable',
           'phone' => 'string|required',
           'location_id' => 'integer|required',
            'appointment_note' => 'string|required'
         ]);
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->location_id = $request->location_id;
        $appointment->appointment_note = $request->appointment_name;
        $appointment->save();
        Mail::to(Auth::user()->email)->send(new MailAppointment($appointment));
        Alert::success('Success','Your appointment notice has been sent, the Doctor will get back to you');
        return back();
    }
}
