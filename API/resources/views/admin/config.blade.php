@extends('admin')

@section('title')
<title>Prod Admin</title>
@endsection

@section('head')
<script>
    const _CONF = @json($json);
</script>
@endsection