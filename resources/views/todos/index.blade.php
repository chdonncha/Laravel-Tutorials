@extends('layouts.main')
@section('content')
	<h2>Show All Todo Lists</h2>
	@foreach ($todo_lists as $list)
		<h4>{{ link_to_route('todos.show', $list->name, [$list->id]) }}</h4>
		<ul class="no-bullet button-group " >
			<li>
				{{link_to_route('todos.edit', 'edit', [$list->id], ['class' => 'tiny button'])}}
			</li>
		</ul>
	@endforeach
	{{ link_to_route('todos.create', 'Create New List', null, ['class' => 'success button'])}}
@stop