@layout('master')



@section('content')

<h1>Make it Short</h1>

{{Form::open('/surl/')}}

	{{ Form::text('url', 'http://') }}

{{Form::close() }}

{{$errors->first('url', '<p class="error">:message</p>')}}

@endsection
