<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- 	<link href="/favicon.ico" rel="icon" type="image/x-icon" /> -->
	<title>G5 Technologies : Technologies for Small Business</title>
	<meta name="viewport" content="width=device-width">
<!--     <meta name="viewport" content="width=device-width, initial-scale=1"> -->

<!-- <title></title> -->
</head>
<body>

	<!-- @section('header') -->
	
	    <!-- @yield('header') -->
	    
	<!-- @endsection -->



	<nav>
		@section('nav')
<!-- 			<li>Home</li>
			<li>About</li> -->
			<li>app/views/master.blade</li>
		@yield_section
	</nav>

	<div class="container">
		@yield('content')
	</div>

<!-- 	<div class="footer">
		@yield('footer')
	</div> -->

</body>
</html>