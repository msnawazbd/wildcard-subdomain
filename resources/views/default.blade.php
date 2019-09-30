<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Clustercoding</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5d8bd95d0080f50012d940b5&product=inline-share-buttons' async='async'></script>

        <!-- Styles -->
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="https://www.clustercoding.com/">Clustercoding</a>
            <button aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                    data-target="#navbarsExampleDefault" data-toggle="collapse" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-4 mt-5">Main Site Under Construction!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                    jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                    unique.</p>
                <p>
                    <button class="btn btn-info">clustercoding@gmail.com</button>
                </p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Clustercoding 2015-2019</p>
    </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                xfbml: true,
                version: 'v4.0'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <!-- Your customer chat code -->
    <div attribution=setup_tool
         class="fb-customerchat"
         page_id="1605357679748937"
         theme_color="#44bec7">
    </div>
    </body>
</html>
