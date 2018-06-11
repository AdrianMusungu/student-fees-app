<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	<title>Record fees payment</title>
</head>
<body>

<h1>RECORD FEES PAYMENT</h1>

<nav>
<a href="{{ url('/home') }}"> Go back to home</a>
</nav>
  <br>
  <br>

<form method="post" action="{{url('fees')}}" enctype="multipart/form-data" >
  {{ csrf_field()}}
  
  Full name:<br>
  <input type="text" name="fullname" id="fullname" placeholder="eg. Adrian Musungu"><br><br>
  
  Date of payment:<br>
  <input type="date" name="DOPay" id="DOPay"><br><br>
  
  Amount:<br>
  <input type="text" name="amount" id="amount" placeholder="e.g 30000"><br><br>
  
  <button type="submit" class="btn btn-success" >Record fees</button>
  <input type="reset">
  <br>
  <br>
  <nav>
  <a href="{{ url('/totalfees') }}"> View total fees paid</a>
  </nav>

</form>

</body>
</html>
