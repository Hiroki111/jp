@extends('layout.master')

@section('content')
<section>
	<header class="main">
		<h1>{{$post->title}}</h1>
	</header>

	<span class="image main"></span>
	{!!$post->body!!}
</section>

@endsection
