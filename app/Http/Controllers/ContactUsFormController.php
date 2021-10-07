<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactUsFormController extends Controller
{
    // Create Contact Form

    public function createForm (Request $request) {
        return view ('contact');
    }

    //Store Contact Form Data

    public function ContactUsForm(Request $request) {
        // Form Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required',
            'services' => 'required'
            //e-mail, phone, subject, message, services
        ]);

        // Store data in database
        Contact::create($request->all());

        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
