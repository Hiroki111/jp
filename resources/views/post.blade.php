@extends('layout.master')

@section('content')

@include('layout.header')

<section style="padding-top: 60px;">
	<header class="main">
		<h1 style="font-size: 2em;">{{$post->title}}</h1>
	</header>
	<div class="post_body_div">
		{!!$post->body!!}
	</div>
	<div style="margin-top: 70px;">
		@if(!empty($next))
		<div>
			<p style="font-weight: bold;">次の記事 : <a href="/{{ $next->slug }}">{{ $next->title }}</a></p>
		</div>
		@endif
		@if(!empty($prev))
		<div>
			<p style="font-weight: bold;">前の記事 : <a href="/{{ $prev->slug }}">{{ $prev->title }}</a></p>
		</div>
		@endif
	</div>
</section>
<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "{{env('APP_URL').'/'.$post->slug}}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "{{env('APP_URL').'/'.$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
	var d = document, s = d.createElement('script');
	s.src = 'https://jp-site.disqus.com/embed.js';
	s.setAttribute('data-timestamp', +new Date());
	(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection
