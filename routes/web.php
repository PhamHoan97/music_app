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
    return view('APP.index');
});

Route::get('profile', function () {
    return view('APP.profile');
});

Route::get('song', function () {
    return view('APP.song');
});

Route::get('sub', function () {
    return view('APP.sub');
});

Route::get('moreInfor', function () {
    return view('APP.moreInfor');
});

Route::get('album', function () {
    return view('APP.album');
});


Route::get('single', function () {
    return view('APP.single');
});

Route::get('browse', function () {
    return view('APP.browse');
});

Route::post('loginnormal','App\LoginController@LoginNormal')->name('loginnormal');

Route::get('login/{provider}', 'App\LoginController@redirectToProvider');

Route::get('{provider}/callback', 'App\LoginController@handleProviderCallback');

Route::post('sendemail','App\SendEmail@adminSendEmail')->name('sendemail');

Route::get('logout','App\LoginController@logout')->name('logout');

Route::get('reset','App\SendEmail@redirectSendEmail')->name('resetpassword');

// @route of admin 

Route::get('admin', function () {
    return view('ADMIN.admin');
});

Route::get('admin/singer','Admin\SingerAndArtist@redirectSinger')->name('redirectSinger');

Route::get('admin/artist','Admin\SingerAndArtist@redirectArtist')->name('redirectArtist');

Route::post('admin/addsinger','Admin\SingerAndArtist@excuteAddSinger')->name('addsinger')->middleware('checkaddsinger');

Route::post('admin/addartist','Admin\SingerAndArtist@excuteAddArtist')->name('addartist')->middleware('checkaddartist');

Route::get('admin/user','Admin\SingerAndArtist@redirectUser')->name('redirectUser');

Route::get('searchsinger','App\AjaxController@searchSingerAjax')->name('searchsinger');

Route::get('searchartist','App\AjaxController@searchArtistAjax')->name('searchartist');
