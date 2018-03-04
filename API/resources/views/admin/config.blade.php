@extends('admin')

@section('title')
<title>Prod Admin</title>
@endsection

@section('head')
<script>
    const _CONF = {
        siteName: "Prod Admin",
        apiUrl: "http://humbler.localhost:8000/"
    }
</script>
@endsection