<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class PanelController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function index(){
        $topics = DB::table('contacts')
            ->join('users', 'users.id', '=', 'contacts.user_id')
            ->select('contacts.*', 'users.name', 'users.email')
            ->get();
        return view('panel', compact('topics'));
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function update($id){
        DB::table('contacts')->where('id', $id)->update(['status' => true]);
        return redirect()->route('panel');
    }
}
