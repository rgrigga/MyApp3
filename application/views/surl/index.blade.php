@layout('master')



@section('content')

<h1>Make it Short</h1>

{{Form::open('/surl/')}}

	{{ Form::text('url', 'http://') }}

{{Form::close() }}

{{$errors->first('url', '<p class="error">:message</p>')}}

<h2>What I'm reading</h2>
<div>
	<a class="twitter-timeline"  href="https://twitter.com/ryangrissinger/favorites"  data-widget-id="330243075756658691">Favorite Tweets by @ryangrissinger</a>

	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>

@endsection
