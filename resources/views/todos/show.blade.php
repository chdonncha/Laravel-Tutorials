@extends('layouts.main')
@section('content')
	<div class=="large-12 columns">
		<h1>{{{ $list->name }}}</h1>
		@foreach ($items as $item)
			<h4>{{{ $item->content }}}</h4>
		@endforeach
		<ul class="no-bullet button-group">
			<li>
				{{ link_to_route('todos.items.create', 'add new item', [$list->id], ['class' => 'button success'])}}
			</li>
		</ul>
		<p>{{ link_to_route('todos.index', 'back', null, ['class' => 'button'])}}</p>
	</div>
@stop