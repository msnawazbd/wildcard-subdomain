<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $user->company }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
    </head>
    <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
        <div class="container">
            <a class="navbar-brand text-uppercase" href="https://www.clustercoding.com/">{{ $user->company }}</a>
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
                <h1 class="display-4 mt-5">Custom Site Under Construction!</h1>
                <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                    jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                    unique.
                    <a href="{{ $user->url }}">{{ $user->url }}</a>
                </p>
                <p><strong>Mobile: {{ $user->mobile }}</strong></p>
                <p>
                    <button class="btn btn-info">{{ $user->email }}</button>
                </p>
            </div>
        </div>
    </main>

    <footer class="container">
        <p>&copy; Clustercoding 2015-2019</p>
    </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
