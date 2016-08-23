<?php

namespace App\Http\Controllers;



use App\TodoList;
use App\User;

class TodoListController extends Controller
{
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
   		return "Creating new list";
   		// $list = new TodoList();
    	// $list->name = "Another List";
    	// $list->save();
    	// return "Create a new List";
   	}
}
