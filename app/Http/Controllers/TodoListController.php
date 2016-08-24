<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\TodoList;
use App\User;

class TodoListController extends Controller
{

	public function _construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}

    public function index()
    {
    	$todo_lists = TodoList::all();
    	return view('todos.index')->with('todo_lists', $todo_lists);
    }

    public function show($id)
    {
    	$list = TodoList::find($id);
    	return view('todos.show')->withList($list);
    }

    public function create()
    {
    	return view('todos.create');
    }

   	public function store()
   	{
   		// define rules
   		$rules = array(
   				'title' => array('required', 'unique:todo_lists,name')
   			);

   		// pass input to validator
   		$validator = Validator::make(Input::all(), $rules);

   		// test if input is valid
   		if ($validator->fails()) {
   			return Redirect::route('todos.create')->withErrors($validator)->withInput();
   		}

   		$name = input::get('title');
   		$list = new TodoList();
    	$list->name = $name;
    	$list->save();
    	return Redirect::route('todos.index')->withMessage('List Was Created');
   	}

   	public function update()
   	{

   	}

   	public function destroy()
   	{

   	}
}
