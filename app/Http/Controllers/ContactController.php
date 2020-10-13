<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->topic = $req->input('topic');
        $contact->message = $req->input('message');
        $contact->email = $req->input('email');
        $contact->file = $req->input('file');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было отправлено');
    }
}
