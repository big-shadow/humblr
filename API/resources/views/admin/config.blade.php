@extends('admin')

@section('title')
    <title>Prod Admin</title>
@endsection

@section('head')
    <script>
        const _CONF = @json($json);

        if (_CONF.accessToken) {
            localStorage.setItem('access_token', _CONF.accessToken);
            localStorage.setItem('expires_in', parseInt(_CONF.expiresIn) + Date.now());
        }
    </script>
@endsection