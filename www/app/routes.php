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
	return View::make('hello');
});
Route::post('login', 'UsersController@login');
Route::resource('users', 'UsersController');

Route::group(array('before' => 'auth'), function()
{
	Route::get('/reports', function()
	{
		return View::make('issues.reports');
	});
	Route::get('logout', 'UsersController@logout');
	Route::resource('issues', 'IssuesController');
	Route::post('comments', 'CommentsController@store');
	Route::resource('tracks', 'TracksController');
});

