<!DOCTYPE html>
<html lang="en">

<head>
	<title>Report</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style3.css">
    <style>

    </style>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a class="active" href="Report.php">Report</a></div>
</div>
<header>
<?php 
session_start();

if (empty($_SESSION['username'])) {
    header("location:Login.php");
    
}

else{
    echo "<div style='float: right;font-size:20px;margin-right: 40px;';>"." Logged in as &nbsp<a class='button1' href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "<a class= 'button2' href='Sources/Logout.php'>Logout</a>";
    echo "</div><hr>";
}
 ?>
 <div><?php include 'Sources/AccountDesign.php';?></div>
</header>
<?php
require_once ('controller/ReportController.php');

if(isset($_SESSION['username']))
{ 
$data = fetchApplyInfo($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $patient):

         $name= $patient['name'] ;
         $email=$patient['email'];
         $Pnumber= $patient['phone'] ;
         $address= $patient['address'] ;
         $gender= $patient['gender'];
    endforeach;


  }
}
else {

  echo "You cannot access this page!!";
}

 ?>
  <body><br><br><br><br>
    <table>
  <tr>
    <th>
      <span>Account</span><hr>
      <div class="account">
      <a href="Dashboard.php"><img src="Sources/logo1.jpg" width="50" height="50">Dashboard</a><br><br>
      <a href="Profile.php"><img src="Sources/logo2.jpg" width="50" height="50">View Profile</a><br><br>
      <a href="ApplyForm.php"><img src="Sources/logo3.jpg" width="50" height="50">Apply for Test</a><br><br>
      <a href="Report.php"><img src="Sources/logo4.jpg" width="50" height="50">Report</a><br><br>
      <a href="Sources/Logout.php" ><img src="Sources/logo5.jpg" width="50" height="40">Logout</a><br><br>
    </th></div>
 <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
  
    echo "<div style='font-size:45px;'>Report:<br><br><div style='font-size:30px;float=left;'<br />Name: $name<hr>";
    echo "<br />Email: $email<hr>";
    echo "<br />Address: $address<hr>";
    echo "<br />Gender: $gender<hr>";
    echo "<br /><span style = 'color:green;'>Result:</span> [ POSITIVE! / NEGATIVE! ]<hr></div></div>";

}
?>
</th>
</table>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>

