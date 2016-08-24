<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
   		$name = input::get('title');
   		$list = new TodoList();
    	$list->name = $name;
    	$list->save();
    	return Redirect::route('todos.index');
   	}

   	public function update()
   	{

   	}

   	public function destroy()
   	{
   		
   	}
}
