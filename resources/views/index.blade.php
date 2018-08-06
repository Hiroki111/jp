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
<section>
    <header class="major">
        <h2>{{$category->name}}</h2>
    </header>
    @foreach($category->posts as $post)
    <div class="posts">
        <article>
            <a href="/{{$post->slug}}" class="image"></a>
            <h3>{{$post->title}}</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
    </div>
    @endforeach
</section>
@endforeach

@endsection
