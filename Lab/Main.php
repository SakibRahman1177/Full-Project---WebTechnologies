<!DOCTYPE html>
<html>
<head>
  <title></title>
  	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
		}
		body{
			background-image: url(Sources/a.jpg);
			background-repeat: no-repeat;
			background-size: cover; 
			background-position: center;
		}
		.a{
			width: 450px;
			padding: 40px;
			text-align: center;
			margin: auto;
			margin-top: 5%;
			color: yellow;
			font-family: 'Century Gothic', sans-serif;
		}
		.b{
			width: 450px;
			background: rgba(0,0,0,0.4);
			padding: 40px;
			text-align: center;
			margin: auto;
			margin-top: 5%;
			color: white;
			font-family: 'Century Gothic', sans-serif;
		}

	</style>
</head>
<body>
  <div class="b">
    <h1><b>Covid-19 Test</b></h1> 
    </div>
    <div class="a">
    	 <meta><a href="Login.php">Log-in</a></meta><br>
	 <meta><a href="RegistrationForm.php">Register</a></meta><br>
	 <br>
   <?php include 'Sources/footer.php';?></div>
</div>
</body>
</html>