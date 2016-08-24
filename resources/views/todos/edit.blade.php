@extends('layouts.main')
@section('content')
	{{ Form::open( array('route' => ['todos.update', $list->id], 'method' => 'PUT') ) }}
		{{ Form::label('name', 'List Title')}}
		{{ Form::text('name') }}
		{!! $errors->first('name', '<small class="error">:message</small>') !!}
		{{ Form::submit('update', array('class' => 'button')) }}
	{{ Form::close() }}

	{{-- <meta name="csrf-token" content="{{ csrf_token() }}" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
@stop