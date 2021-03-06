@extends('layouts.basic')
@section('content')

<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Bootstrap core CSS -->

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    
  </head>
  <body class="text-center" >    <div class='container'>
      <h1 class='bg-primary'>
          <img src="data:image/png;base64,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" width="50" alt="Logo">
          WORKPLACE
          <br>
        </h1>
  <form class="form-signin">
  <h1 >Please Sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  <p class="mt-5 mb-3 text-muted">&copy;2019</p>
</form>
</div>
<div class="container signin">
    <br>
  <p>Don't have an account?</p>
  <a href='/register'>Sign Up</a>
</div>
@endsection
