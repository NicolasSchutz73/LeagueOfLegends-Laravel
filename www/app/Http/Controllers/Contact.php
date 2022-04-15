<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
    public function index() {
        return view('pages/contact');
    }

    public function send(Request $request) {
        $contact = array();
        $contact['firstname'] = $request->firstname;
        $contact['lastname'] = $request->lastname;
        $contact['email'] = $request->email;
        $contact['message'] = $request->message;

        Mail::to('nicolas1.schutz@gmail.com')
            ->send(new ContactMail($contact));
        return view('pages/contact');

    }
}
