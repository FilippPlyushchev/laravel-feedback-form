<?php

namespace App\Http\Controllers;

use App\Contact;
use App\User;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function submit(ContactRequest $req){

        if (! Auth::user()->canSend()) {
            return redirect()
                ->route('contact')
                ->with('danger', 'Отправка сообщений возможна не больше 1 раза в сутки');
        }

        $contact = new Contact();
        $contact->topic = $req->input('topic');
        $contact->message = $req->input('message');
        $contact->email = $req->input('email');

        if($req->hasFile('file')) {
            $file = $req->file('file');
            $file->move(public_path() . '/path', $req->file('file')->getClientOriginalName());
        }

        $contact->file = $req->file('file')->getClientOriginalName();
        $contact->save();

        Auth::user()->updateLastTopic();

        return redirect()->route('contact')->with('success', 'Сообщение было отправлено');
    }
}
