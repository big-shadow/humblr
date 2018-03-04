@extends('container')

@section('title', 'Register')

@section('content')
    {!! Form::open(['action' => 'Auth\RegisterController@create', 'class' => 'registration--form']) !!}
    <div class="row">
        <div class="six columns">
            {{ Form::label('email', 'E-Mail Address') }}
            {{ Form::text('email', 'example@gmail.com') }}
        </div>
        <div class="six columns">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </div>
    </div>
    <div class="row">
        {{ Form::submit('Let\'s Go!', ['class' => 'button-primary u-pull-right']) }}
    </div>
    {!! Form::close() !!}
@endsection
