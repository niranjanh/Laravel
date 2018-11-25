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

        .blinking{
            animation:blinkingText 0.8s infinite;
        }


        @keyframes blinkingText{
            0%{     color: #000;    }
            49%{    color: transparent; }
            50%{    color: transparent; }
            99%{    color:transparent;  }
            100%{   color: #000;    }
        }
	
	</style>
</head>
<body>
	<div class="blinking">
        @yield('blinkContent')
    </div>
</body>
</html>