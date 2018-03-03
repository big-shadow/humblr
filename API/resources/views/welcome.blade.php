<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env("APP_NAME") }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="position-ref">
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

    <div class="content">
        <div class="title m-b-md">
            {{ env("APP_NAME") }}
        </div>

        <div class="links">
            <a href="#">About Us</a>
            <a href="#">Register</a>
        </div>
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
