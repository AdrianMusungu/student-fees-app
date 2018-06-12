<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>Record fees payment</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <style type="text/css">
    html,body{
      background-color: #d8caba;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 600;
                height: 100vh;
                margin: 0;
    }
    .navlinks > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            input{
   text-align:center;
}
     
  </style>
</head>
<body>

<h1 style="text-align: center;">RECORD FEES PAYMENT</h1>

<nav>

<a href="{{ url('/home') }}" style="font-weight: 600; color: #000000 "><- GO BACK TO HOME PAGE</a>

</nav>
  <br>
  <br>

<form method="post" action="{{url('fees')}}" enctype="multipart/form-data" style="text-align: center;">
  {{ csrf_field()}}

  
  
  Student no:<br>
  <input type="text" name="std_no" id="std_no" placeholder="eg. 91375" style="border-radius: 10px"><br><br>

  Full name:<br>
  <input type="text" name="fullname" id="fullname" placeholder="e.g Adrian Musungu" style="border-radius: 10px"><br><br>
  
  Date of payment:<br>
  <input type="date" name="DOPay" id="DOPay" style="border-radius: 10px"><br><br>
  
  Amount:<br>
  <input type="text" name="amount" id="amount" placeholder="e.g 30000" style="border-radius: 10px"><br><br>
  
  <button type="submit" class="btn btn-success" >Record fees</button>
  <input type="reset" style="">
  <br>
  <br>
  <br>
  <br>
  <nav class="navlinks">
  <a href="{{ url('/totalfees') }}" style="color: #fc0000"> View total fees paid</a></li>
  <a href="{{ url('/search') }}" style="color:  #1d00fc">Search records</a></li>
  </nav>

</form>

</body>
</html>
