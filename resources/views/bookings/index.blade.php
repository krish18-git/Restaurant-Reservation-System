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
        <div class="container">
        <h1>All Bookings</h1>
        @if(count($bookings)>0)
        @foreach($bookings as $booking)
          <div class='card' style="border-radius:20px;">
              
              <div class="card-header" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;"><h4>{{$booking->name}}</h4></div>  
              <div class="card-body">
              <table width=100%><tr>
                <td width=25%><h5>Date : {{$booking->date}}</h5></td>
                <td width=25%><h5>Time : {{$booking->time}} </h5></td>
                <td width=25%><h5>Table Number :{{$booking->table_number}}</h5></td>
                <td width=25%><h5>
                  {!!Form::open(['action' => ['BookingController@destroy', $booking->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                      {{Form::hidden('_method', 'DELETE')}}
                      {{Form::submit('Cancel Booking', ['class' => 'btn btn-danger' , 'style' => 'border-radius:15px ;'])}}
                  {!!Form::close()!!}
                </h5></td>
                </tr></table>
                </div>
            
          </div>
        
        <br>
        @endforeach
        <div class="container" style="text-align:centre;"> {{$bookings->links()}} <div>
        </div>  
        
        @else
        <p>No Bookings Found</p>
        @endif
        <div>
        </div>
</body>
@endsection 
{{-- /properties/{{$add->id}} --}}