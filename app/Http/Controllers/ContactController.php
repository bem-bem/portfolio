<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailMarkdown;
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
        $contact = Contact::create(
            request()->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ])
        );
        Mail::to('icelariosa18@gmail.com')->send(new ContactMailMarkdown($contact));
        return back()->with('success', 'your message has been sent');
    }
}

