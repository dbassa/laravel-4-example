@extends('layouts.default')

@section('content')
	<h1>Add New Author</h1>

	@include('common.authors_errors')

	{{ Form::open(array('url' => 'authors/create', 'method' => 'post')) }}

	<p>
		{{ Form::label('name','Name:') }}<br />
		{{ Form::text('name',Input::old('name')) }}
	</p>

	<p>
		{{ Form::label('bio','Biography:') }}<br />
		{{ Form::textarea('bio',Input::old('bio')) }}
	</p>

	<p>{{ Form::submit('Add Author') }}</p>

	{{ Form::close() }}
@stop