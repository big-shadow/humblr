@extends('admin')

@section('title')
<title>Prod Admin</title>
@endsection

@section('head')
<script>
    const _CONF = {
        siteName: "Prod Admin",
        apiUrl: "{{ env('APP_URL') }}",
        clientSecret: "ifUXlMBm1kZYy2rwgiXBhV2UywPEp5ck2w2ndP2N"
    }
</script>
@endsection