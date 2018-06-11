<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Total fees paid by all students</title>
</head>
<body>
<h1>TOTAL FEES PAID BY ALL STUDENTS</h1>
@csrf

{{ $total}}

<nav>
<a href="{{ url('/home') }}"> Go back to home</a>
</nav>
<br>
<br>
<form class="example" action="action_page.php">
  <input type="text" placeholder="Search for student..." name="search">
  <button type="submit"><i class="fa fa-search"> Search</i></button>
</form>

</body>
</html>