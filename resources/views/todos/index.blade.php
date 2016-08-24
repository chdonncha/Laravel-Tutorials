@extends('layouts.main')
@section('content')
	<h2>Show All Todo Lists</h2>
	@foreach ($todo_lists as $list)
		<h4>{{ link_to_route('todos.show', $list->name, [$list->id]) }}</h4>
	@endforeach
	{{ link_to_route('todos.create', 'Create New List', null, ['class' => 'success button'])}}
@stop