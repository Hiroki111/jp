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
@endsection
