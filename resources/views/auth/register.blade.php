@extends('layouts.app')

@section('content')
<style>
    .quantity::-webkit-inner-spin-button, 
    .quantity::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
    }
</style>
<body style="background-image: url('{{ asset('img/back-login.jpg')}}');background-size:cover;background-repeat:no-repeat;">
<div class="container-fluid" style="padding-top:1.5%;font-size:15px ;width:80%  ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style=" border-radius:20px;">
            <div class="card-header text-center" style=" background-color: black; color:white ; font-size:25px;border-radius:20px;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" style=" border-radius:20px;" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <textarea rows = "3" cols = "50" id="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('addess') }}" required autocomplete="address" style=" border-radius:20px;"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>
    
                            <div class="col-md-6">
                                    <input id="contact" type="tel" class="quantity form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}" required autocomplete="contact" style=" border-radius:20px;">
    
                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="col-md-6 col-form-label text-md-left">
                                    <input type="radio" name="gender" value="male"> &nbsp;&nbsp; Male &nbsp;&nbsp;
                                    <input type="radio" name="gender" value="female"> &nbsp;&nbsp; Female &nbsp;&nbsp;
                                    <input type="radio" name="gender" value="other"> &nbsp;&nbsp; Other<br>            
                                </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style=" border-radius:20px;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password " style=" border-radius:20px;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style=" border-radius:20px;">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn" style=" background-color: black; color:white ; border-radius:20px; font-size:15px;">
                                    &nbsp;&nbsp;{{ __('Register') }}&nbsp;&nbsp;
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<body>
@endsection
