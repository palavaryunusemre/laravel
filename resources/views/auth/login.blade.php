@extends('layouts.app')

@section('content')
    <link href="/assets/css/loginStyle.css" rel="stylesheet" type="text/css" media="all" />

    <div class="login-page">
        <div class="form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Your Email Address" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit">login</button>
                <p class="message">Not registered? <a href="{{url('/register')}}">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="/assets/js/login.js"></script>

@endsection
