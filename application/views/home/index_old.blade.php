<!doctype html>

<?php
//uncomment for the ultimate debugger:
//php phpinfo(); 
?>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<!-- 	<link href="/favicon.ico" rel="icon" type="image/x-icon" /> -->
	<title>G5 Technologies : Technologies for Small Business</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('css/main.css') }}

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "b2380d7d-a742-4526-80ce-997b2d1e962d", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

</head>
<body>
	<div class="wrapper">
		<header>
			<h1>G5</h1>
			<h2>Supporting small business</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
				<h2>Howdy.</h2>

				<p>
					You've landed yourself on our default home page. The route that
					is generating this page lives at:
				</p>

				<pre>{{ path('app') }}routes.php</pre>

				<p>And the view sitting before you can be found at:</p>

				<pre>{{ path('app') }}views/home/index.blade.php</pre>

				<h2>Grow in knowledge.</h2>

				<p>
					Learning to use Laravel is amazingly simple thanks to
					its {{ HTML::link('docs', 'wonderful documentation') }}.
				</p>

				<h2>Create something beautiful.</h2>

				<p>
					Now that you're up and running, it's time to start creating!
					Here are some links to help you get started:
				</p>

				<ul class="out-links">
					<li><a href="http://laravel.com">Official Website</a></li>
					<li><a href="http://forums.laravel.com">Laravel Forums</a></li>
					<li><a href="http://github.com/laravel/laravel">GitHub Repository</a></li>
				</ul>

<!-- 				<div>
	<span class='st_sharethis_large' displayText='ShareThis'></span>
<span class='st_facebook_large' displayText='Facebook'></span>
<span class='st_twitter_large' displayText='Tweet'></span>
<span class='st_linkedin_large' displayText='LinkedIn'></span>
<span class='st_fblike_large' displayText='Facebook Like'></span>
<span class='st_twitterfollow_large' displayText='Twitter Follow' st_username='ryangrissinger'></span>
<span class='st_email_large' displayText='Email'></span>
</div> -->
			</div>
		</div>
	</div>



</body>
</html>
