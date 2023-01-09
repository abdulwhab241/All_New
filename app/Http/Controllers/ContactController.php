<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact.show');
    }

    public function submit(ContactRequest $request)
    {
        $contact = new  Contact();
        $contact -> name = strip_tags($request->input('name')) ;
        $contact -> email = strip_tags($request->input('email')) ;
        $contact -> mobile = strip_tags($request->input('mobile') );
        $contact -> title = strip_tags($request->input('title') );
        $contact -> message = strip_tags($request->input('content') );

        $contact -> save();
        Mail::to($request->email)->send(new ContactMail($request->name,$request->email,$request->mobile,$request->title, $request->content));
        return back()->with(['message' => 'Email successfully sent!']);
    }
}
