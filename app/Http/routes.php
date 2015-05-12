<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Routes
// '/'
// 

Route::get('/', function() {
    return view('home');
});
/*
Route::get('/shows', function() {
    return view('showlist');
});*/
Route::get('/shows','NytimesController@create');

Route::get('/post','NytimesController@posttwitter');