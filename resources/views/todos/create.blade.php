@extends('layouts.main')
@section('content')
	{!! Form::open( array('route' => 'todos.store') )!!}

	{!! Form::close() !!}

	{{-- <meta name="csrf-token" content="{{ csrf_token() }}" >
	<input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
@stop