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
<body>
<div class="container" style="padding:5%; width:60%">
  <div class="card" style="border-radius:20px;">
      <div class="card-header" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">Search Bookings by Name</div>
        <div class="card-body">
              <form action="/searchnameres" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                <table width=100%><tr>
                    <td width=70%><input type="text" class="form-control" name="name"
                        placeholder="Search Name" style="border-radius:20px;"> <span class="input-group-btn">
                    </td>
                    <td width=30%>
                        <button type="submit" class="btn btn-default" style="width:70%; margin-left:15%; margin-right:15% ; background-color: black; color:white ; border-radius:20px; font-size:15px;">Search
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </td>
                </table></tr>
                </div>
            </form>
        </div>
  </div>
</div >
    {{-- <form action="search" method="post" role='serach'>

            <div class="container">
                        
                    <h1>Enter the details for required property</h1>
                    <label for="address"><b>Address</b></label>
                    <input type="text" placeholder="Enter locality" class='form-control' name="address" required>
                    <label for="area"><b>Area of plot requied</b></label>
                    <input type="number" placeholder="Enter Area in Sq.Ft " class='form-control' name="area" required>
                    <input type="radio" name="type"value="rent" checked>Rent<br>
                    <input type="radio" name="type" value="buy">Buy<br> 
                    <label for="budget"><b>Budget</b></label>
                    <input type="number" placeholder="Enter Budget" class='form-control' name="budget" required>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Search</button>
                  </div>
                  <hr>
      </form> --}}
      {{-- {!!Form::open(['action'=>'SearchesController@show','method'=>'POST'])!!}
      {{Form::label('Address','Location')}}
      {{Form::text('Address','',['class'=>'form-control','placeholder'=>'Location'])}}
      <br />
      {{Form::label('Area','Area')}}
      {{Form::number('Area','',['class'=>'form-control','placeholder'=>'Area in sq.ft'])}}
      <br />
      {{Form::label('Type','Type')}}<br>
      <select name="Type">
              <option value='rent'>Rent</option>
              <option value='sell'>Sell</option>
      </select>
      <br />
      {{Form::label('Price','Budget')}}
      {{Form::number('Price','',['class'=>'form-control','placeholder'=>'Budget'])}}
      
      <br />
      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
      {!!Form::close()!!} --}}
    </div >
@endsection