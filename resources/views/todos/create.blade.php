@extends('layouts.main')
@section('content')
	<form method="POST" action="http://localhost/laravel/laravel-basics/public/todos" accept-charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label for="title">List Title</label>
		<input name="title" type="text" id="title"></label>
		<input class="button" type="submit" value="submit"></label>
	</form>
@stop