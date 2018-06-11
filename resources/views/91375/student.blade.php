<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Register a new student</title>
</head>
<body>

<h1>REGISTER A NEW STUDENT</h1>
<nav>
<a href="{{ url('/home') }}">Go back to home</a>
</nav>

  <br>
  <br>
<form method="post" action="{{url('students')}}" enctype="multipart/form-data">
  
  {{ csrf_field()}}
  Student number:<br>
  <input type="text" name="std_no" id="std_no" placeholder="eg. 091375"><br><br>
  
  Full name:<br>
  <input type="text" name="fullname" id="fullname" placeholder="eg. John Doe"><br><br>
  
  Date of birth:<br>
  <input type="date" name="DOBirth" id="DOBirth"><br><br>
  
  Address:<br>
  <input type="text" name="address" id="address" placeholder=""><br><br>
  
  <button type="submit" class="btn btn-success" >Register student</button>
  <input type="reset">

</form>

</body>
</html>