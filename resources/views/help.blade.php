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
<body style="background-image: url('{{ asset('img/back-help.jpg')}}');background-size:cover;background-repeat:no-repeat;">
<div class="container-fluid" style="padding:4%;width:100%">
<table width=100%>
<tr>

<td width=47%%>
<div class="card" style=" border-radius:20px;">
                  <div class="card-header text-center" style=" background-color: black; color:white ; font-size:25px;border-radius:20px;">CONTACT&nbsp;&nbsp;US
                  </div>

              <div class="card-body">
              <div class="container" style="padding-left:5%;padding-right:5%"> 
                  <table width=100% style="text-align:center ; font-size:20px ;">
                  
                      <tr>
                          <td >Should you require more information about us or like to arrange bookings at our restaurant, please contact us.</td>     
                      </tr>
                      <tr><td><br></td></tr>
                      <tr>
                          <td>Bharat Hotels Limited <br>Barakhamba Avenue, Connaught Place, <br>New Delhi - 110 001, India </td>
                      </tr>
                      <tr><td><br></td></tr>
                      <tr>
                          <td>+91 xx xxxx xxxx</td>
                      </tr>
                      <tr><td><br></td></tr>
                      <tr>
                        	<td>corporate@xxxxxx.com | bookings@xxxxxx.com</td>
                      </tr>
                      
                  </table>
                  </div>
              </div>
              </div>
</td>
<td width=6%></td>
<td width=47%%> 
              <div class="card" style=" border-radius:20px;">
                  <div class="card-header text-center" style=" background-color: black; color:white ; font-size:25px;border-radius:20px;">HOURS&nbsp;&nbsp;OF&nbsp;&nbsp;OPERATION
                  </div>

              <div class="card-body">
              <div class="container" style="padding-left:5%;padding-right:5%"> 
                  <table width=100% style="text-align:center ; font-size:20px ;">
                  <tr><td><br></td></tr>
                      <tr>
                          <td width=25%>Break Fast</td>
                          <td width=25%>10:00 AM to 12:00 AM</td>
                      </tr>
                      <tr><td><br></td></tr>
                      <tr>
                          <td>Lunch</td>
                          <td>12:00 AM - 3:00PM</td>
                      </tr>
                      <tr><td><br></td></tr>
                      <tr>
                          <td>Dinner</td>
                          <td>5:00 PM - 10:00PM</td>
                      </tr>
                      <tr><td><br></td></tr>
                      <tr><td><br></td></tr>
                      <tr>
                          <td colspan="2" style="font-weight:bolder">Brunch &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; Saturday & Sunday &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; 10:00 AM - 3:00 PM </td>
                      </tr>
                      <tr><td><br></td></tr>
                  </table>
                  </div>
              </div>
              </div>
</td></tr>
</table>
</div>
  @endsection
