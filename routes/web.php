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
    }
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'role:manager'], function() {
    Route::get('/panel', function() {
        return 'Добро пожаловать, менеджер';
    });
});

Route::group(['middleware' => 'role:client'], function() {
    Route::get('/contact', function() {
        return 'Добро пожаловать, клиент';
    });
});
