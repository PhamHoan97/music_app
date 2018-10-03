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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('APP.index');
});

Route::get('profile', function () {
    return view('APP.profile');
});

Route::get('single', function () {
    return view('APP.single');
});

Route::get('browse', function () {
    return view('APP.browse');
});

Route::get('showAllSong', function () {
    return view('APP.showAllSong');
});

Route::get('showAllAlbum', function () {
    return view('APP.showAllAlbum');
});

Route::get('notifications', function () {
    return view('APP.notifications');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');

Route::get('{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::post('sendemail','SendEmail@adminSendEmail')->name('sendemail');