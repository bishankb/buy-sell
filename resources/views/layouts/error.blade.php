<!DOCTYPE HTML>
<html>
<head>
<title>Error Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="{{ asset('/images/logo.png') }}">
<link href="{{ asset('/css/error.css') }}" rel="stylesheet" type="text/css">
<link href='//fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="wrap">

	@yield('content')
	
	<div class="footer">
		<p>&copy; {{ date('Y') }} {{ env('APP_NAME') }}. All Rights Reserved</p>
    </div>
  </div>
</body>
</html>
