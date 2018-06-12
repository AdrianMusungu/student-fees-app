<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
            	
            	/*#f7dab9*/
                background-color: #d8caba;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 50px;
                font-color:#4286f4;
                margin-top: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 130px;
                margin-top: 40px;
            }
        </style>
    </head>
    <body>
        

            <div class="content">
                <div class="title m-b-md">
                    Student Fees Management App
                </div>

                <div class="links">
                    <a href="{{ url('/student') }}" style="color: #fc0000">Student</a>
                    <a href="{{ url('/fees') }}" style="color: #1d00fc">Fees</a>
                </div>
            </div>
        </div>
    </body>
</html>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
<h1 style="text-align: center;">HOME PAGE</h1>
<nav position='centre'>
	<li><a href="{{ url('/student') }}">Student</a></li> <br>
	<li><a href="{{ url('/fees') }}">Fees</a></li>

</nav>

</body>
</html> -->