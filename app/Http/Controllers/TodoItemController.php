<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TodoItemController extends Controller
{
    public function create($list_id)
    {
    	$todo_list = TodoList::findOrFail($list_id);
    	return View::make('items.create')->withTodoList($todo_list);
    }

      public function store()
    {
    	
    }

      public function edit($id)
    {
    	
    }

      public function update($id)
    {
    	
    }

         public function update($id)
    {
    	
    }
}
