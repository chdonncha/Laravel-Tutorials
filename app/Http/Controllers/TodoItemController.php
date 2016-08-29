<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use App\TodoList;
use App\User;

class TodoItemController extends Controller
{
    public function create($list_id)
    {
    	$todo_list = TodoList::findOrFail($list_id);
    	return View::make('items.create')->withTodoList($todo_list);
    }

      public function store($list_id)
    {
    	$todo_list = TodoList::findOrFail($list_id);


   		// define rules
   		$rules = array(
   				'content' => array('required')
   			);

   		// pass input to validator
   		$validator = Validator::make(Input::all(), $rules);

   		// test if input is valid
   		if ($validator->fails()) {
   			return Redirect::route('todos.items.create', $list_id)->withErrors($validator)->withInput();
   		}

   		$item = new TodoItem();
    	$item->content = Input::get('content');
    	$todo_list->listItems()->save($item);
    	return Redirect::route('todos.show', $todo_list->id)->withMessage('Item Was Added!');

    }

      public function edit($id)
    {
    	
    }

      public function update($id)
    {
    	
    }

}
