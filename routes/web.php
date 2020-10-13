<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if (Auth::guest()) {
        return redirect('login');
    }elseif(auth()->check() && auth()->user()->hasRole('manager')){
        return redirect('panel');
    }elseif(auth()->check() && auth()->user()->hasRole('client')){
        return redirect('contact');
    }
});

Auth::routes();

Route::group(['middleware' => 'role:manager'], function() {
    Route::get('/panel', function() {
        return view('panel');
    });
});

Route::group(['middleware' => 'role:client'], function() {
    Route::get('/contact', function() {
        return view('contact');
    });
});
