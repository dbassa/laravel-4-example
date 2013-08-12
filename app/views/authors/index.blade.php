@extends('layouts.default')

@section('content')
	<h1>Authors Page</h1>

	<ul>
	@foreach($authors as $author)
		<li>{{ HTML::linkRoute('author',
								$author->name,
								array($author->id)) }}</li>
	@endforeach
	</ul>

	<p>{{ HTML::linkRoute('newAuthor','New Author') }}</p>
@stop