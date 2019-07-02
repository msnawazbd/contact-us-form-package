<?php

namespace Clustercoding\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Clustercoding\Contact\Mail\ContactMailable;
use Clustercoding\Contact\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        Mail::to(config('contact.sent_email_to'))->send(new ContactMailable($request->message, $request->name));
        Contact::create($request->all());
        return redirect()->back();
    }
}
