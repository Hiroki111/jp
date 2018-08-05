@extends('layout.master')

@section('content')
<section id="banner" style="max-height: 450px;">
    <div class="content">
        <header>
            <h1 style="font-size: 2em;">{{setting('site.title')}}</h1>
        </header>
        <p>{{setting('site.description')}}</p>
    </div>
    <span class="image object">
        <img src="images/top.jpg" alt="" />
    </span>
</section>
<!-- Section -->
<section>
    <header class="major">
        <h2>Ipsum sed dolor</h2>
    </header>
    <div class="posts">
        <article>
            <a href="#" class="image"></a>
            <h3>Interdum aenean</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
        <article>
            <a href="#" class="image"></a>
            <h3>Nulla amet dolore</h3>
            <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </article>
    </div>
</section>

@endsection
