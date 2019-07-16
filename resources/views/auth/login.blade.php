<link href="{{ asset('css/beautiful-checkbox.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="public/css/beautiful-checkbox.css">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <div style="font-size:26px;font-weight: bold; text-align: center;margin-top: 20px; margin-bottom: 20px">
                     SIMULOR
                    </div>
                    <p style="margin-right: 40px; margin-left: 40px; text-align: center; color: gray" >Enter your email address and password to access admin panel</p>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-md-12">
                                <label for="email" style="font-weight: bold;" >{{ __('E-Mail Address') }}</label>
                                <input placeholder="Enter your Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row" style="margin-top: 25px;">

                            <div class="col-md-12">
                            <label style="font-weight: bold;" for="password" >{{ __('Password') }}</label>
                            <input placeholder="Enter your password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row checkbox tiny" style="margin-top: 25px; font-weight: bold">
                            <div class="col-md-12">
                                <div class="form-check">
                                    <div class="checkbox-container">
                                    <input checked class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <div class="checkbox-checkmark"></div>
                                    </div>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="width:  100%">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col-md-12" style="margin-top: 35px; text-align: center;">    
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div>
                                    Don't have an account ? <a style="font-weight: bold" href="{{ route('register') }}"> Sign Up</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
