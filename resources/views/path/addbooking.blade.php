  
@extends('layouts.app ')
@section('content')
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
    <!-- Custom styles for this template -->
   
</head>
<body style="background-image: url('{{ asset('img/back-welcome.jpg')}}');background-size:cover;background-repeat:no-repeat;">
<div class="container" style="width:50%;padding:5%;font-size:20px;">
    
  <div class="card" style="border-radius:20px;">
    <div class="card-header text-center" style=" background-color: black; color:white ; font-size:20px ;border-radius:20px;">NEW BOOKING
    </div>

      <div class="card-body">
     
            {!!Form::open(['action'=>'BookingController@store','method'=>'POST'])!!}
      <table width=100%>
        <tr>
            <td width=50% style="text-align:center;">{{Form::label('date','Date of booking :')}}</td>
            <td width=50%>{{Form::date('date','',['id'=>'date','class'=>'form-control','placeholder'=>'Date','style'=>'border-radius:20px;'])}}</td>
        </tr>
        <tr><td><br></td></tr>
          <div class="col-md-12">
            <div class="form-group">
            <tr>
                <td style="text-align:center;"><label>Time :</label></td>
                <td><select name='time' id="time" class="form-control" style=" border-radius:20px;">
                    <option value="10:00:00">10 am</option>
                    <option value="11:00:00">11 am</option>
                    <option value="12:00:00">12 pm</option>
                    <option value="13:00:00">1 pm</option>
                    <option value="14:00:00">2 pm</option>
                    <option value="15:00:00">3 pm</option>
                    <option value="16:00:00">4 pm</option>
                    <option value="17:00:00">5 pm</option>
                    <option value="18:00:00">6 pm</option>
                    <option value="19:00:00">7 pm</option>
                    <option value="20:00:00">8 pm</option>
                    <option value="21:00:00">9 pm</option>
                    <option value="22:00:00">10 pm</option>
                </select></td>
                </tr>
            </div>
        </div>
        <tr><td><br></td></tr>
          {{-- {{Form::label('time','time')}}
          {{Form::time('time','',['class'=>'form-control','placeholder'=>'Time'])}} --}}
          
          
          <div class="col-md-12">
            <div class="form-group">
            
        <tr>
               <td style="text-align:center;"> <label>Table Number :</label></td>
               <td> <select name='table_number' id="table_number" class="form-control" style=" border-radius:20px;">
                    {{-- <option value=-1>-Select Table Number-</option> --}}
                </select></td></tr>
            </div>
        </div>
        
        <tr><td><br></td></tr>
          {{-- {{Form::label('table_number','table_number')}}
          {{Form::number('table_number','',['id'=>'table_number','class'=>'form-control','placeholder'=>'Table Number'])}} --}}
        
          <tr><td colspan="2">
          {{Form::submit('Submit',['class'=>'btn btn-primary' , 'style' => ' background-color: black; color:white ; border-radius:20px; font-size:15px; width:50%; margin-left:25%; margin-right:25%'])}}
          {!!Form::close()!!}
          </td></tr>
          </table>
</div>
</div>
</div>
</body>
          <script>
            $(function(){
                // $("#table_number").hide();
                $("#time").change(function(){
                    $.ajax({url:"/get-table",
                    data:{time:$("#time").val(),date:$("#date").val()},
                    success:function(result){
                      $("#table_number").html("");
                      // $("#table_number").show();
                        // alert(result);
                        $("#table_number").append(result);
                    },
                });
                });  
            });
            $(function(){
                // $("#table_number").hide();
                $("#date").change(function(){
                    $.ajax({url:"/get-table",
                    data:{time:$("#time").val(),date:$("#date").val()},
                    success:function(result){
                      $("#table_number").html("");
                      // $("#table_number").show();
                        // alert(result);
                        $("#table_number").append(result);
                    },
                });
                });
            });
            
          </script>
@endsection