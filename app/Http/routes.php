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

/*
* / = home
* /todos - all lists
* /todos/1 - show
* /todos/1/edit - edit and update
* /todos/create - create new list
*/

Route::get('/', function ()
{
	return view('todos.index');
});

Route::get('/todos', function ()
{
	return view('todos.index');
});

Route::get('/todos/{id}', function($id)
{
	return view('todos.show')->withId($id);
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