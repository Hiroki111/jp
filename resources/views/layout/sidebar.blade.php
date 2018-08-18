<div id="sidebar">
    <div class="inner">

        <!-- Search -->
        <section id="search" class="alt">
            <form method="post" action="#">
                <input type="text" name="query" id="query" placeholder="Search" />
            </form>
        </section>

        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <ul class="my-sidebar">
                <li><a href="/" style="">Home</a></li>
                <li><a href="/about" style="font-weight: bold;">このサイトについて</a></li>
                <li><a href="/author" style="font-weight: bold;">著者について</a></li>
                @foreach($categories as $category)
                <li>
                    <span>{{$category->name}}</span>
                    <ul style="display: block;">
                        @foreach($category->posts as $post)
                        <li><a href="/{{$post->slug}}">{{$post->title}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
                <li>
                    <span>おまけ</span>
                    <ul style="display: block;">
                        <li><a href="/jobs">オーストラリアで不足している職業</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; {{setting('site.title')}} All rights reserved. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
        </footer>

    </div>
</div>
