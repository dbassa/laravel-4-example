@extends('layouts.default')

@section('content')
	<h1>Authors Page</h1>

	@if (isset($name))
		{{ $name }}<br />
	@else 
		No name<br />
	@endif

	{{ $edat }}<br />
	{{ $poblacio }}<br />
@stop