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

Route::get('/', function ()
{
	$data = [
		'name' => 'jane',
		'email' => 'jane@doe.com',
		'location' => 'Florida',
		'last_name' => 'Doe'
		];
	return view('welcome')->withData($data);
});

/*Route::get('/', function () 
{
	$data = ['name' => 'jane', 'email' => 'jane@doe.com']
    return view('welcome')->with('name', 'friend');
});

Route::get('/welcome/{name?}', function($name = 'world') 
{
    return view('welcome')->with('name', $name);
});*/