@extends('admin')

@section('title')
    <title>Prod Admin</title>
@endsection

@section('head')
    <script>
        const _CONF = @json($json);

        if (_CONF.session) {
            localStorage.setItem('access_token', _CONF.session.access_token);
            localStorage.setItem('refresh_token', _CONF.session.refresh_token);
            localStorage.setItem('expires_in', parseInt(_CONF.session.expires_in) + Date.now());
        }
    </script>
@endsection