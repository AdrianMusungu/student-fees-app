<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Register a new student</title>
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
    input{
   text-align:center;
}
  </style>
</head>
<body>

<h1 style="text-align: center; ">REGISTER A NEW STUDENT</h1>
<nav>
<a href="{{ url('/home') }}" style="font-weight: 600; color: #000000 "><- GO BACK TO HOME PAGE</a>
</nav>

  <br>
  <br>
<form method="post" action="{{url('students')}}" enctype="multipart/form-data" style="text-align: center;">
  
  {{ csrf_field()}}
  Student number:<br>
  <input type="text" name="std_no" id="std_no" placeholder="eg. 91375" style="border-radius: 10px"><br><br>
  
  Full name:<br>
  <input type="text" name="fullname" id="fullname" placeholder="eg. Adrian Musungu" style="border-radius: 10px"><br><br>
  
  Date of birth:<br>
  <input type="date" name="DOBirth" id="DOBirth" style="border-radius: 10px"><br><br>
  
  Address:<br>
  <input type="text" name="address" id="address" placeholder="" style="border-radius: 10px">
  <br>
  <br>
  
  <button type="submit" class="btn btn-success" >Register student</button>
  <input type="reset">

</form>

</body>
</html>