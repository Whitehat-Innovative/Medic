<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{
    //
    public function appointment(Request $request, Appointment $appointment){
        $appointment = new Appointment();
        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->phone = $request->phone;
        $appointment->appointment_note = $request->appointment_note;
        $appointment->save();
        return back();
    }
}
