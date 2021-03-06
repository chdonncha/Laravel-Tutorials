<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\TodoList;
use App\User;

class TodoListController extends Controller
{

	public function _construct($id)
	{
		$this->beforeFilter('csrf', array('on' => ['post', 'put', 'delete']));
	}

    public function index()
    {
    	$todo_lists = TodoList::all();
    	return view('todos.index')->with('todo_lists', $todo_lists);
    }

    public function show($id)
    {
    	$list = TodoList::findOrFail($id);
    	$items = $list->listItems()->get();
       	return view('todos.show')
       		->withList($list)
       		->withItems($items);
    }

    	public function edit($id)
	{
		$list = TodoList::findOrFail($id);
		return View::make('todos.edit')->withList($list);
	}

    public function create()
    {
    	return view('todos.create');
    }

   	public function store()
   	{
   		// define rules
   		$rules = array(
   				'name' => array('required', 'unique:todo_lists')
   			);

   		// pass input to validator
   		$validator = Validator::make(Input::all(), $rules);

   		// test if input is valid
   		if ($validator->fails()) {
   			return Redirect::route('todos.create')->withErrors($validator)->withInput();
   		}

   		$name = input::get('name');
   		$list = new TodoList();
    	$list->name = $name;
    	$list->save();
    	return Redirect::route('todos.index')->withMessage('List Was Created');
   	}

   	public function update($id)
   	{
   		// define rules
   		$rules = array(
   				'name' => array('required', 'unique:todo_lists')
   			);

   		// pass input to validator
   		$validator = Validator::make(Input::all(), $rules);

   		// test if input is valid
   		if ($validator->fails()) {
   			return Redirect::route('todos.edit', $id)->withErrors($validator)->withInput();
   		}

   		$name = input::get('name');
   		$list = TodoList::findOrFail($id);
    	$list->name = $name;
    	$list->update();
    	return Redirect::route('todos.index')->withMessage('List Was Updated');
   	}

   	public function destroy($id)
   	{
   		$todo_list = TodoList::findOrFail($id)->delete();

   		return Redirect::route('todos.index')->withMessage('item Deleted!');
   	}
}
