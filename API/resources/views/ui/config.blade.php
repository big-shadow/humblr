@extends('ui')

@section('title')
<title>User Site</title>
@endsection

@section('head')
<script>
    const _CONF = {
        siteName: "User Site",
        apiUrl: "{{ env('APP_URL') }}",
        clientSecret: "ifUXlMBm1kZYy2rwgiXBhV2UywPEp5ck2w2ndP2N"
    }
</script>
@endsection