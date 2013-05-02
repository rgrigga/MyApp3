@layout('master')

@section('container')
<h1>My URL Shortener</h1>

{{Form::open('/surl')}}

	{{ Form::text('url') }}
	{{ Form::submit('Shorten') }}

{{Form::close() }}
@endsection
