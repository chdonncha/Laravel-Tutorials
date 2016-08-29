@extends('layouts.main')
@section('content')
	{{ Form::model($todo_item, array('route' => ['todos.update', $list->id], 'method' => 'PUT') ) }}
		@include('items.partials._form')
	{{ Form::close() }}
@stop