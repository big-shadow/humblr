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
    <link href="//fonts.googleapis.com/css?family=Raleway:100,400,300,600" rel="stylesheet" type="text/css">

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
            {{ env("APP_NAME") }}
        </div>
        <hr>
        <nav class="nav-links">
            <a href="/">About Us</a>
            <a href="/">Marketplace</a>
            <a href="/">Blog</a>
            <a href="/">Support</a>
            <a href="{{ url('/register') }}">Register</a>
        </nav>
        <hr>
    </header>

    <div class="content">
        @yield('content')
    </div>
</div>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    // axios.get('/oauth/scopes')
    //     .then(response => {
    //         console.log(response.data);
    //     });
    // axios.get('/oauth/clients')
    //     .then(response => {
    //         console.log(response.data);
    //     });
</script>
</body>
</html>
