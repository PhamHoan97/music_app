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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
//    session()->forget('data');

    return view('APP.index');
});


// Route::get('profile1', function () {
//     return view('APP.profile1');
// });

// Route::get('browse', function () {
//     return view('APP.browse');
// });

// Route::get('showAllSong1', function () {
//     return view('APP.showAllSong1');
// });

// Route::get('showAllAlbum1', function () {
//     return view('APP.showAllAlbum1');
// });

// Route::get('notifications1', function () {
//     return view('APP.notifications1');
// });

//

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

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::post('loginnormal','App\LoginController@LoginNormal')->name('loginnormal');

Route::get('login/{provider}', 'App\LoginController@redirectToProvider');

Route::get('{provider}/callback', 'App\LoginController@handleProviderCallback');

Route::post('sendemail','App\SendEmail@adminSendEmail')->name('sendemail');

Route::get('logout','App\LoginController@logout')->name('logout');

Route::get('reset','App\SendEmail@redirectSendEmail')->name('resetpassword');



