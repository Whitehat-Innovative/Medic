<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    //
    public function appointment(Request $request){

        
        // $request->validate([
        //     'name' => 'string|required',
        //     'email' => 'string|nullable',
        //     'phone' => 'string|required',
        //     'appointment_note' => 'string|required'
        // ]);
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->appointment_note = $request->appointment_name;
        $appointment->save();
        Alert::success('Success','Your appointment notice hs being sent the Doctor will get back to you');
        return back();
    }
}
