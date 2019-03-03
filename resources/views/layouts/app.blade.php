<!DOCTYPE html>
<html>
<head>
	<title>Photo Album</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	
</head>
<body>
	@include('inc.topbar')
	@include('inc.messages')
	@yield('content')
</body>
</html>