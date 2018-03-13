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

    {!! Form::open(['action' => 'Auth\RegisterController@registerAdminWithNewVenue', 'class' => 'registration--form']) !!}
    <h4>You</h4>
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
    <h4>Your Business</h4>
    <div class="row">
        <div class="six columns">
            {{ Form::label('title', 'Business Name') }}
            {{ Form::text('title') }}
        </div>
        <div class="six columns">
            {{ Form::label('subdomain', 'Subdomain (http://subdomain.'.env('APP_DOMAIN').')') }}
            {{ Form::text('subdomain') }}
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            {{ Form::label('phone', 'Business Phone') }}
            {{ Form::text('phone') }}
        </div>
        <div class="six columns">
            {{ Form::label('type', 'Business Type') }}
            {{ Form::select('type', [
                'CSA' => 'CSA Farm',
                'Restaurant' => 'Restaurant Chain',
                'Delivery' => 'Delivery Service',
                'General' => 'General/e-Commerce'
            ], 'CSA') }}
        </div>
    </div>
    <div class="row">
        <div class="six columns">
            {{ Form::label('business_email', 'Newsletter Reply-to Email') }}
            {{ Form::text('business_email') }}
        </div>
    </div>
    <div class="row u-pull-right">
        {{ Form::submit('Let\'s Go!', ['class' => 'u-pull-right']) }}
    </div>
    {!! Form::close() !!}
@endsection
