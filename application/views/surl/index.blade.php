@layout('master')

	<nav>
		@section('nav')
 	@parent
<!--		<li>Home</li>
			<li>About</li> -->
			<li>views/surl/index</li>
		@yield_section
	</nav>

@section('content')
<h1>My URL Shortener</h1>

{{Form::open('/surl/')}}

	{{ Form::text('url') }}
	{{ Form::submit('Shorten') }}

{{Form::close() }}
@endsection
