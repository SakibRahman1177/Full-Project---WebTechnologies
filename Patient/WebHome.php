<!DOCTYPE html>
<html lang="en">

<head>
	<title>Project Webpage</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <style>
     h2,p{
  padding: 7px;
    }
  </style> 
</head>
<body>
  <div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;color: white;">Covid-19 Test</a>
  <div style="float: right;">
  <a class="active" href="WebHome.php">Home</a>
  <a href="Login.php">Login</a>
  <a href="RegistrationForm.php">Registration</a></div><br>
</div>
 <div><?php include 'Sources/AccountDesign.php';?></div>
<?php
$page = "";
?>
<div>
  <h2>Covid'19 Test Webpage</h2>
  <hr>
<?php 
  echo "<div>";include 'Sources/homedesign.php';echo "</div>";
 ?>
</div>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>