@extends('layouts.app')
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
<body style="background-image: url('{{ asset('img/back-about.jpg')}}');background-size:cover;background-repeat:no-repeat;">
  <br><br>
  
  <div class='container-fluid' style="padding-left:5%;padding-right:36%;color:white;font-family: serif;font-size:20px;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;">
    <span style="font-size:25px">About Us</span><br>
      We believe in preserving quality of our food and providing seemless experience to our customers.<br>
      We have been nationally recognized as one of the city’s best dining experiences. <br>
      Since 1987, we have been authentically inspired with creative interpretations of traditional cuisines.<br><br>
      <span style="font-size:25px">We’re Passionate About Our Food</span><br>
      From adding more balanced options to our dining, to serving up fresh dishes that are cooked when you order, we’re always finding ways to show our commitment to our customers and our food. <br><br>
      <span style="font-size:25px">Commitment to Quality</span><br>
      We're dedicated to improving the way we prepare our quality food and the ingredients that go into it. We take great care to ensure that what we serve every day is safe, great quality and produced in a responsible way. It means real, quality ingredients and always evolving what matters to you.<br>

  </div>
    
</div>
  @endsection
