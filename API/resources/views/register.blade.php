@extends('container')

@section('title', 'Register')

@section('content')
    @if ($errors->any())
        <h6>Oops...</h6>
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['action' => 'Auth\RegisterController@create', 'class' => 'registration--form']) !!}
    <div class="row">
        <div class="six columns">
            {{ Form::label('name', 'Your Name') }}
            {{ Form::text('name') }}
        </div>
        <div class="six columns">
            {{ Form::label('email', 'Your Email') }}
            {{ Form::text('email') }}
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </div>
        <div class="six columns">
            {{ Form::label('password', 'Password Confirmation') }}
            {{ Form::password('password_confirmation') }}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="six columns">
            {{ Form::label('business_name', 'Business Name') }}
            {{ Form::text('business_name') }}
        </div>
        <div class="six columns">
            {{ Form::label('subdomain', 'Subdomain (http://subdomain.'.env('APP_DOMAIN').')') }}
            {{ Form::text('subdomain') }}
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            {{ Form::label('business_phone', 'Business Phone') }}
            {{ Form::text('business_phone') }}
        </div>
        <div class="six columns">
            {{ Form::label('business_type', 'Business Type') }}
            {{ Form::select('business_type', [
                'CSA' => 'CSA Farm',
                'Restaurant' => 'Restaurant Chain',
                'Delivery' => 'Delivery Service',
                'General' => 'General/e-Commerce'
            ], 'CSA') }}
        </div>
    </div>
    <div class="row">
        {{ Form::submit('Let\'s Go!', ['class' => 'button-primary u-pull-right']) }}
    </div>
    {!! Form::close() !!}
@endsection
