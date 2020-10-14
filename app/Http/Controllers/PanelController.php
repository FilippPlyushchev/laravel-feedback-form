<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PanelController extends Controller
{
    public function index(){
        $topics = DB::table('contacts')
            ->join('users', 'users.id', '=', 'contacts.user_id')
            ->select('contacts.*', 'users.name', 'users.email')
            ->get();
        return view('panel', compact('topics'));
    }

    public function update($id){
        DB::table('contacts')->where('id', $id)->update(['status' => true]);
        return redirect()->route('panel');
    }
}
