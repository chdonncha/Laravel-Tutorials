@extends('layouts.main')
@section('content')
	{!! Form::open( array('route' => 'todos.store') ) !!}
		{!! Form::label('title', 'List Title') !!}
		{!! Form::text('title') !!}
		{!! $errors->first('title', '<small class="error">:message</small>') !!}
		{!! Form::submit('submit', array('class' => 'button')) !!}
	{!! Form::close() !!}

	{{-- <meta name="csrf-token" content="{{ csrf_token() }}" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
@stop