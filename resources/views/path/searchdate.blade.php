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
<div class="container" style="padding:5%;width:60%">
  <div class="card" style="border-radius:20px;">
      <div class="card-header" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">Search Bookings by Date</div>
        <div class="card-body">
              <form action="/searchdateres" method="POST" role="search">
                {{ csrf_field() }}
                <div class="input-group">
                <table width=100%><tr>
                    <td width=70%><input type="date" class="form-control" name="date"
                        placeholder="Search Date" style="border-radius:20px;"> <span class="input-group-btn">
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
@endsection