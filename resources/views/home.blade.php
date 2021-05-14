@extends('layouts.app')
@section('content')
<body style="background-image: url('{{ asset('img/back-welcome.jpg')}}');background-size:cover;background-repeat:no-repeat;">
@if (auth()->user()->status==0)
<div class="container" style="padding:2%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius:20px;">
                <div class="card-header text-center" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">BOOKINGS</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($bookings) > 0)
                        <table class="table table-striped border" style="text-align:center;" >
                            <tr >
                                <th>Date</th>
                                <th>Time</th>
                                <th>Table Number</th>
                                <th></th>
                            </tr>
                            @foreach($bookings as $booking)
                                <tr >
                                    <td >{{$booking->date}}</td>
                                    <td>{{$booking->time}}</td>
                                    <td>{{$booking->table_number}}</td>
                                    {{-- <td><a href="/properties/{{$booking->id}}/edit" class="btn btn-default">Edit</a></td> --}}
                                    <td style="padding:0px; margin:0px;padding-top:1%;padding-bottom:1%">
                                        {!!Form::open(['action' => ['BookingController@destroy', $booking->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Cancel Booking', ['class' => 'btn btn-danger', 'style' => 'border-radius:15px'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no bookings</p>
                    @endif
                    <button class='btn btn-primary ' style=" background-color: black; color:white ; border-radius:20px; font-size:15px; width:50%; margin-left:25%; margin-right:25%" onclick="location.href='/addbooking'">ADD BOOKING</button>
                </div>
            </div>
        </div>
    </div>
</div>

@else
<div class="container">
    <div class="card" style="margin:5%;border-radius:20px;">
        <div class="card-header text-center" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">Booking Stats
        </div>
        <div class="card-body">
            <table width=100%><tr>
            <td><button class='btn btn-primary ' onclick="location.href='/bookings'" style="background-color: black; color:white ; border-radius:20px; font-size:15px;width:80%; margin-left:10%; margin-right:10% ">ALL BOOKINGS</button></td>
            <td><button class='btn btn-primary ' onclick="location.href='/addbooking'" style="background-color: black; color:white ; border-radius:20px; font-size:15px;width:80%; margin-left:10%; margin-right:10%">ADD BOOKING</button></td>
            </tr></table>
        </div>
    </div>
    <div class="card" style="margin:5%;border-radius:20px;">
        <div class="card-header text-center" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">Search Bookings
        </div>
        <div class="card-body">
        <table width=100%><tr>
            <td><button class='btn btn-primary ' onclick="location.href='/search_name'" style="background-color: black; color:white ; border-radius:20px; font-size:15px;width:80%; margin-left:10%; margin-right:10% ">SEARCH BY NAME</button></td>
            <td><button class='btn btn-primary ' onclick="location.href='/search_date'" style="background-color: black; color:white ; border-radius:20px; font-size:15px;width:80%; margin-left:10%; margin-right:10%">SEARCH BY DATE</button></td>
        </tr></table>
        </div>
    </div>
</div>


@endif
@endsection

</body>