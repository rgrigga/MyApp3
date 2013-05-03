<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">
<!-- 	<link href="/favicon.ico" rel="icon" type="image/x-icon" /> -->
	<title>G5 Technologies : Technologies for Small Business</title>

    {{Asset::container('bootstrapper')->styles();}}
    {{Asset::container('bootstrapper')->scripts();}}

</head>
<body>

<div class="row">
	<div class="span8">Span 8</div>
	<div class="span4">Span 4</div>

</div>
<div class="row">
	<div class="span2">Span 2</div>
	<div class="span6">Span 6</div>
</div>



	<div class="container">
		@yield('content')
	</div>

</body>
</html>