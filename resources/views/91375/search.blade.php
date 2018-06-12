<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<title>Total fees paid by all students</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	<style>
	html,body{
      background-color: #d8caba;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
    }
#table1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#table1 td, #table1 th {
    border: 1px solid #ddd;
    padding: 8px;
}

#table1 tr:nth-child(even){background-color: #f2f2f2;}

#table1 tr:hover {background-color: #ddd;}

#table1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4286f4;
    color: white;
}
</style>
</head>
<body>
<h1 style="text-align: center;">Search</h1>



<nav>
<a href="{{ url('/home') }}" style="font-weight: 600; color: #000000 "><- GO BACK TO HOME PAGE</a>
</nav>
<br>
<br>

<form  action="/search" method="post" style="text-align: center;">

{{ csrf_field() }}
  
  <label for='search' style="font-weight: 600;"> Search by Student No.</label>
  <input type="number" name="search_id" required placeholder="Student ID"></input>
  <button type="submit"> Search</button>


</form>


{{ csrf_field() }}
    
    <div>
    @if(isset($details))
    <h1 style="text-align: center;">Search results</h1>
    <table id='table1'>
    <thead>
    <tr>
    <th>Admission Number</th>
    <th>Full name</th>
    <th>Amount</th>
    <th>Date of Payment</th>
    </tr>
    </thead>
    
    <tbody>
    @foreach($details as $oneResult)
    <tr>
    <td>{{$oneResult->std_no}}</td>
    <td>{{$oneResult->fullname}}</td>
    <td>{{$oneResult->amount}}</td>
    <td>{{$oneResult->DOPay}}</td>
    </tr>
    @endforeach
    </tbody>
    
    </table>
    @endif
    </div>

</body>
</html>