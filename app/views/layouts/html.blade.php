<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel</title>
	<style>
		

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

        .btn-primary {
            background-color : blue;
        }


        .btn-success {
            background-color : green;
        }

		.welcome {
			width: 500px;
			height: 300px;
			position: absolute;
			left: 40%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		
	</style>
</head>
<body>
	<div class="welcome">
        @yield('htmlContent')
    </div>
</body>
</html>