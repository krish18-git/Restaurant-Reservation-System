@extends('layouts.app')

@section('content')
<body style="background-image: url('{{ asset('img/back-login.jpg')}}');background-size:cover;background-repeat:no-repeat;">
    <div class="container" style="padding-top:10%;font-size:15px; ">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style=" border-radius:20px;">
                    <div class="card-header text-center" style=" background-color: black; color:white ; font-size:25px  ;border-radius:20px;">{{ __('Log In') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style=" border-radius:20px;" autofocus>

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style=" border-radius:20px;">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" style="width:20px;height:20px;" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                        &nbsp;&nbsp;&nbsp;{{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn" style=" background-color: black; color:white ; border-radius:20px; font-size:15px;">
                                    &nbsp;&nbsp;{{ __('Log In') }}&nbsp;&nbsp;
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}" style="color:black; font-size:15px;">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection