@extends('layouts.app')


    
@section('content')

<div class="container" style="padding:2%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="border-radius:20px;">
                <div class="card-header text-center" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">Booking Details</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($bookings) > 0)
                        <table class="table table-striped border" style="text-align:center;">
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Table Number</th>
                                <th></th>
                            </tr>
                            @foreach($bookings as $booking)
                                <tr>
                                    <td>{{$booking->name}}</td>
                                    <td>{{$booking->date}}</td>
                                    <td>{{$booking->time}}</td>
                                    <td>{{$booking->table_number}}</td>
                                    {{-- <td><a href="/properties/{{$booking->id}}/edit" class="btn btn-default">Edit</a></td> --}}
                                    <td style="padding:0px; margin:0px;padding-top:1%;padding-bottom:1%">
                                        {!!Form::open(['action' => ['BookingController@destroy', $booking->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Cancel Booking', ['class' => 'btn btn-danger' , 'style' => 'border-radius:15px'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>No bookings</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

