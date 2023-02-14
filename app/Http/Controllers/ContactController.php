<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function make_controller(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'string|required',
            'email' => 'string',
            'phone' => 'string',
            'message' => 'string|required'
         ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();
        return back();
    }
    //
}
