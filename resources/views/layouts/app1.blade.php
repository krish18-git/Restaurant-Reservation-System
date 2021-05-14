<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Restaurent Reservation System</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .nav-link{
        font-size:20px;
    }
    </style>

</head>
<body >
    <div id="app">
    <nav class="navbar navbar-expand-lg navbar-light z-depth-3 border-none" style="background-color: #ffffff; padding-top: 12px; padding-bottom: 12px;">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}"><h1>
                    <img src="/img/logo.jpeg" width="50" alt="Logo">
                    Restaurent Reservation System</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                          
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">


                                <li class="nav-item active">
                                    <a class="nav-link" href="/home">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="/about">&nbsp;&nbsp;About&nbsp;&nbsp;</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="#">&nbsp;&nbsp;Help&nbsp;&nbsp;</a>
                                  </li>
                                  <li class="nav-item">
                        
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">&nbsp;&nbsp;{{ __('Login') }}&nbsp;&nbsp;</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">&nbsp;&nbsp;{{ __('Register') }}&nbsp;&nbsp;</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;&nbsp;{{ Auth::user()->name }}&nbsp;&nbsp;<span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<div class='container-fluid'style="padding:0;" >
        <main >
            @include('inc.message')
            @yield('content')
        </main>
    </div></div>
</body>
</html>
