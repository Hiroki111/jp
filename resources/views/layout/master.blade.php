<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/main.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/browser.min.js"></script>
    <script src="js/breakpoints.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/main.js"></script>

    <title>{{setting('site.title')}}</title>
</head>
<body class="is-preload">
    <div id="wrapper">
        <div id="main">
            <div class="inner" style="padding: 0 4em 0.1em 4em;">
                @yield('content')
            </div>
        </div>
        @include('layout.sidebar')
    </div>
</body>
</html>
