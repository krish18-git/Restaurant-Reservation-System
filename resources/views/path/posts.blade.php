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
<body >
        <br>
        <h1>Bookings</h1>
        <div class='card'>
            <div class='container'>
            <h3>Name={{$user->name}}</h3>
            <h5>Date={{$bookings->date}}</h5>
            <h5>Time= {{$bookings->time}}</h5>
            <h5>Table Number={{$bookings->table_number}}</h5>
            <h5>
              {!!Form::open(['action' => ['BookingController@destroy', $bookings->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                  {{Form::hidden('_method', 'DELETE')}}
                  {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
              {!!Form::close()!!}
          ``</h5>        </div>
        </div>
        <br>
        
@endsection 