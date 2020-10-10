<?php

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
    return view('user.main.mainPage');
})->name('home');

Route::get('/upload', function () {
    return view('user.video.upload');
})->name('upload');

Route::get('/channel', function () {
    return view('user.channel.channel');
})->name('channel');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
