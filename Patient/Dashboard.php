<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
  <style>
    .box{
      background-color: rgba(0,0,0,0.8);
  width: 90%;
  font-size: 18px;
  border-radius: 10px;
  border: 1px soid rgba(255,255,255,0.3);
  box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
  color: #fff;
    }
    button{
      padding: 3px 80px;
    background-color: black;
    border: 8px;
    color: #fff;
    border-radius: 8px;
    }
    .account{
      float: left;
      margin-left: 40px;
    }
  </style>
</head>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>

  <div style="float: right;">
  <a class="active" href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
<header>
<?php 
session_start();

if (empty($_SESSION['username'])) {
    header("location:Login.php");
    
}

else{
    echo "<div style='float: right;font-size:20px;margin-right: 40px;';>"." Logged in as&nbsp; <a class='button1' href='Profile.php'>".$_SESSION['username']."</a> | ";
    echo "<a class='button1' href='Sources/Logout.php'>Logout</a>";
    echo "</div><br><hr>";
}
 ?>
 <div><?php include 'Sources/AccountDesign.php';?></div>
</header>

<table>
  <tr>
    <th>
    	<span>Account</span><hr>
      <div class="account">
    	<a href="Dashboard.php"><img src="Sources/logo1.jpg" width="60" height="60">Dashboard</a><br><br>
    	<a href="Profile.php"><img src="Sources/logo2.jpg" width="50" height="50">View Profile</a><br><br>
      <a href="ChangePassword.php"><img src="Sources/logo6.png" width="35" height="35">Change Password</a><br><br>
    	<a href="ApplyForm.php"><img src="Sources/logo3.jpg" width="50" height="50">Apply for Test</a><br><br>
    	<a href="Report.php"><img src="Sources/logo4.jpg" width="50" height="50">Report</a><br><br>
    	<a href="Sources/Logout.php" ><img src="Sources/logo5.jpg" width="50" height="40">Logout</a><br><br>
    </th>
    <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
	echo "<div class='box' style= 'text-align: center;margin-right: 50px;margin-left: 60px;font-size: 35px;'><h1> Thanks For Sign-In! <br>Welcome ".$_SESSION['username']."</h1></div><hr>";
 
  echo "<img src='Sources/dashcover.jpg' width='1100' height='400'>";

}
?>
</th>
  </tr> 
</table><hr>
<div id='demo'>
  <h1 style="float: middle;margin-left: 678px;">CONTACT US</h1><br>
  <button style="float: middle;margin-left: 675px;" type='button' onclick='loadDoc()'>Click Here</button>
</div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ContactUs.php", true);
  xhttp.send();
}
</script>

<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>