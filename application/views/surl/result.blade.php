@layout('master')

@section('content')
	<h1>Here is your short url:</h1>
    {{ HTML::link("surl/".$surl, "gristech.com/surl/$surl") }}

    <p>You can use that instead of<p>
    <p><? echo $url ?></p>
    
    {{ HTML::image("img/thinker_head_square.png", "thinker") }}
@endsection