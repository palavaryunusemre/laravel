
@extends('layouts.app')
@section('content')


    <!-- Custom Theme files -->
    <link href="/assets/css/registerStyle.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //Custom Theme files -->
    <!-- web font -->
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <div class="main-w3layouts wrapper">
        <h1>Creative SignUp Form</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <input class="text form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" placeholder="Username" required="">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <input class="text email form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required="">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <input class="text form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <br>
                    <div>
                        <input id="password-confirm" type="password" name="password_confirmation" placeholder="Password confirm" required autocomplete="new-password">
                    </div>

                    <input type="submit" value="SIGNUP">
                </form>
                <p>Don't have an Account? <a href="{{url('/login')}}"> Login Now!</a></p>
            </div>
        </div>
        <!-- copyright -->
        <div class="colorlibcopy-agile">
            <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p>
        </div>
        <!-- //copyright -->
        <ul class="colorlib-bubbles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


@endsection
