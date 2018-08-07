@extends('layout.master')

@section('content')
<section id="banner" style="max-height: 450px;">
    <div class="content">
        <header>
            <h1 style="font-size: 2em;">{{setting('site.title')}}</h1>
        </header>
        <p>{{setting('site.description')}}</p>
        <a href="/about" class="button">初めての方はこちらから</a>
    </div>
    <span class="image object">
        <img src="images/top.jpg" alt="" />
    </span>
</section>
<!-- Section -->
@foreach($categories as $category)
<section style="padding: 60px 0;">
    <header class="major">
        <h2 style="margin-bottom: 30px;">{{$category->name}}</h2>
    </header>
    <div class="posts">
    @foreach($category->posts as $post)
        <article>
            <h3 style="margin-bottom: 0px;"><a href="/{{$post->slug}}">{{$post->title}}</a></h3>
            <div class="post_excerpt">
                <p>{!! $post->body !!}</p>
            </div>
            <ul class="actions" style="margin-top: 15px;">
                <li><a href="/{{$post->slug}}" class="button">More</a></li>
            </ul>
        </article>
    @endforeach
    </div>
</section>
@endforeach

@endsection
