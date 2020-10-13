<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index(){
        $topics = Contact::all();
        return view('panel', compact('topics'));
    }

    public function update($id){
        DB::table('contacts')->where('id', $id)->update(['status' => true]);
        return redirect()->route('panel');
    }
}
