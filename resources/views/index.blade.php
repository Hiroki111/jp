@extends('layout.master')

@section('content')

<section id="banner" style="padding: 3em 0 3em 0;">
    <div class="content">
        <header>
            <h1 style="font-size: 2em;">ゼロから始める</h1>
            <h1 style="font-size: 2em;">オーストラリア就職</h1>
        </header>
        <p>{{setting('site.description')}}</p>
        <a href="/about" class="button">初めての方はこちらから</a>
    </div>
    <span class="image object" style="max-height: 250px;">
        <img src="images/top.jpg" alt="" />
    </span>
</section>
<!-- Section -->
@foreach($categories as $i => $category)
<section style="padding: 30px 0;">
    <header class="major">
        <h2 style="margin-bottom: 30px;">#{{$i+1}}. {{$category->name}}</h2>
    </header>
    <div class="posts">
    @foreach($category->posts as $i => $post)
        <article>
            <a href="/{{$post->slug}}" class="image">
                <img src="/storage/{{$post->image}}" alt="" style="width: 490px; height: 290px;" />
            </a>
            <h3 style="margin-bottom: 0px;"><a href="/{{$post->slug}}">{{$i+1}}. {{$post->title}}</a></h3>
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
