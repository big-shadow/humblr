@extends('container')

@section('title', ucwords($title))

@section('content')
    <div class="text--body">
        <h5 class="center-text">The <b>{{ $title }}</b> feature is <b>coming soon</b>.</h5>
        <hr>
        {!! Form::open(['action' => 'Auth\RegisterController@registerNewsletterReceipent', 'class' => 'registration--form']) !!}
        <div class="row">
            <div class="six columns">
                <p>In the meanwhile, you can sign up for our newsletter, to get updates on our journey.</p>
                @if (session('success'))
                    <h6>Hooray!</h6>
                    <div class="success">
                        <ul>
                            <li>{{ session('success') }}</li>
                        </ul>
                    </div>
                @endif
            </div>
            <div class="six columns">
                <div class="six columns">
                    {{ Form::label('name', 'Your Name') }}
                    {{ Form::text('name') }}
                </div>
                <div class="six columns">
                    {{ Form::label('email', 'Your Email') }}
                    {{ Form::text('email') }}
                </div>
            </div>
        </div>
        <div class="row">
            {{ Form::submit('Subscribe Me!', ['class' => 'u-pull-right']) }}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
