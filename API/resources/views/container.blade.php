<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env("APP_NAME") }} - @yield('title')</title>

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,600" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/skeleton.css">
    <link rel="stylesheet" href="/css/app.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png">
</head>
<body>
<div class="container">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <header class="header">
        <div class="title">
            <h1>{{ env("APP_NAME") }}.</h1>
            <span>Grow &#9758; Market &#9758; Distribute</span>
        </div>
        <nav class="nav-links">
            <a href="/">About Us</a>
            <a href="{{ url('/marketplace/comingsoon') }}">Marketplace</a>
            <a href="{{ url('/blog/comingsoon') }}">Blog</a>
            <a href="{{ url('/support/comingsoon') }}">Support</a>
            <a href="{{ url('/contribution/comingsoon') }}">Contribute</a>
            <a href="{{ url('/register') }}">Register</a>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>
