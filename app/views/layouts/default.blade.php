<!DOCTYPE html>
	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<title>Authors and Books</title>
			<link rel="stylesheet" href="">
	</head>
	<body>
		@if (Session::has('message'))
			<p style="color: green;">{{ Session::get('message') }}</p>
		@endif

		@yield('content')
	</body>
</html>