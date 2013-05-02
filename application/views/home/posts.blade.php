@layout('master')

@section('header')

    <h1>Posts</h1>
    
@endsection

@section('nav')

    <li>Foo</li>
    <li>bar</li>
	@parent
    
@endsection

@section('content')
<hr>
	@foreach ($users as $user)
		{{ $user->email . '<br>'}}
	@endforeach

@endsection


@section('footer')

    Goodbye.
    
@endsection