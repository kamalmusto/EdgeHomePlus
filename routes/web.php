<?php

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
use \Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;



Auth::routes();

Route::get('/', function () {
    return view('index');
})->name('EdgeHome');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('door','DoorController');
