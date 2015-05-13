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

/**
 * -------------------------------------------------------------------------
 * Reviews Route
 * -------------------------------------------------------------------------
 *
 * This is the homepage route that a user sees upon logging in. It contains 
 * the most recent highly rated reviews of current broadway shows.
 * 
 */

Route::get('/', function() {
    return view('home');
});

/**
 * ------------------------------------------------------------------------
 * Shows Route
 * ------------------------------------------------------------------------
 *
 * This route displays a page of all of the shows you can give your opinion 
 * about.
 * 
 */

Route::get('/shows','NytimesController@create');




Route::get('/post','NytimesController@posttwitter');