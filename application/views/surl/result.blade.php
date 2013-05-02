@layout('master')

@section('content')
	<h1>Here is your short url:</h1>
    {{ HTML::link("surl/".$surl, "gristech.com/surl/$surl") }}
    
@endsection