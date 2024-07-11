<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\SendContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PostController extends Controller
{
    public function savecontact(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'email_subject' => 'required',
            'email_message' => 'required',
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->email_subject = $request->input('email_subject');
        $contact->email_message = $request->input('email_message');

        $contact->save();

        $this->email = ['info@aogomfbltd.com'];

        Mail::to($this->email)->send(new SendContact($contact));

        \Session::flash('Success_message', '✔ Thank you for reaching out to us. We will get in touch with you shortly.');

        return back();
    }
}
