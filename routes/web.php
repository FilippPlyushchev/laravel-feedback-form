<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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
    Route::get('/panel', 'PanelController@index')->name('panel');
    Route::get('/panel/update/{id}', 'PanelController@update')->name('update-status');
});

Route::group(['middleware' => 'role:client'], function() {
    Route::get('/contact', function() {
        return view('contact');
    })->name('contact');

    Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');
});
