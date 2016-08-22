<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodoListController extends Controller
{
    public function index()
    {
    	return view('todos.index');
    }

    public function show($id)
    {
    	return view('todos.show')->withId($id);
    }
}
