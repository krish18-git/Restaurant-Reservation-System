@extends('layouts.app')
@section('content')

<head>
<link rel="canonical" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
    <script>
      $(document).ready(function(){
      $.ajax({ url: "/destroypast",
              success: function(){
                // alert(result);
              }});
      });
    </script>
    <!-- Custom styles for this template -->
  </head>
<body style="background-image: url('{{ asset('img/back-welcome.jpg')}}');background-size:cover;background-repeat:no-repeat;">
  <br><br>
  
  
  <p style = "padding-left:3%;color:white;font-family: serif;font-size:50px;text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000;">Don't want to wait for a table ?<br>Book a table at your time.</p>
  <div style="padding-left:3%"><button onclick="location.href='/addbooking'" style="color:white;font-family: serif; font-size:45px; text-shadow: 2px 0 0 #000, -2px 0 0 #000, 0 2px 0 #000, 0 -2px 0 #000, 1px 1px #000, -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000; background-color: transparent;border: 7px solid #fff; border-radius:20px;">&nbsp;&nbsp;&nbsp;BOOK NOW!&nbsp;&nbsp;&nbsp;</button>
  </div>
    
       <!-- <table class='table table-bordered'>
        <th>Why Register?</th>
        <tr><td><p>Get Latest Property News and Updates</p></td></tr>
        <tr><td><p>Get Market informtion,reports and Trends</p></td></tr>
        <tr><td><p>Get Market infy Alerts</p></td></tr>
        <tr><td><p>Advertise your property and get it listed for free</p></td></tr>
        <tr><td><p>Easy Buying, Selling and Renting</p></td></tr>
      </table>  -->
  
  <!-- {{-- button class='btn btn-primary' onclick="location.href='/properties'">SHOW ALL PROPERTIES</button> --}}
         
  <footer>©Copyright 2019</footer> -->
</div>
  @endsection
