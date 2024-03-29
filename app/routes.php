<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::to('/login');
});

// Route::get('/login', function()
// {
// 	return Redirect::to('user');
// });
Route::get('/login','UserController@getIndex');

Route::controller('home', 'HomeController');
Route::controller('user', 'UserController');
