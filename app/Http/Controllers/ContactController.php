<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store()
    {
        Contact::create(
            request()->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ])
        );
        Mail::to("icelariosa18@gmail.com")->send(new ContactMail("bem-bem"));
        
        return back()->with('success', 'your message has been sent');
    }
}

