<link href="{{ asset('css/beautiful-checkbox.css') }}" rel="stylesheet">

@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header tieude" >MicroOffice</div>
                
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h4 style="color: #006699">Registration form</h4>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <input placeholder="First name" id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input placeholder="Last name" id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                           

                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="Email address" id="email" type="email" class="input-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="Nick Name" id="email" type="text" class="form-control @error('nick_name') is-invalid @enderror" name="nick_name" value="{{ old('nick_name') }}" required autocomplete="nick_name">

                                @error('nick_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input placeholder="Creaate a password" id="password" type="password" class="input-field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                        <strong>{{ $message }}</strong>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input Placeholder="Nhập lại mật khẩu" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <br>

                        <div class="form-group row checkbox tiny">
                            <div class="col-md-7">	
                                <div class="checkbox-container">				
                                <input type="checkbox" id="checkbox" name="checkbox" class="@error('checkbox') is-invalid @enderror" checked >
                                <div class="checkbox-checkmark"></div>
                                </div>
                                <label style="font-size: 18px">I agree to the <a href="#">teams of use.</a>
                                @error('checkbox')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-5">
                                <button type="submit" class="btn btn-primary" style="font-size: 11px; font-weight: bold;">
                                    I ACCPEPT - CREATE ACCOUNT
                                    
                            </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
