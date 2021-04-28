<?php 
session_start();
require_once ('controller/ViewProfileController.php');
$data = fetchPatient($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $patient):

       $name= $patient['name'] ;
       $email=$patient['email'];
       $dob=$patient['dateofbirth'];
       $address= $patient['address'] ;
  endforeach;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
  <script src="js/jquery.js" type="text/javascript"></script>
<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
  <?php include 'controller/Head1.php';?>
</header>
    <table style="width:97%;margin-right: 25px;margin-left: 25px; border: 2px solid black;"><b>
      Account</b><br><hr><br>
      <div>
      <li><a href="view profile.php">View Profile</a></li><br><br>
      <li><a href="edit profile.php">Edit Profile</a></li><br><br>
      <li><a href="Report.php">Patient List</a></li><br><br>
            <li><a href="setreport.php">Set Report</a></li><br><br>
    </th></div>
 <th style="border: 1px black;"><?php if (isset($_SESSION['username'])) {
  
    echo "<div style='font-size:25px;'>Profile:<br><br><div style='font-size:25px;float=left;'<br />Name: $name<hr>";
    echo "<br />Email: $email<hr>";
    echo "<br />Username: $username<hr>";
    echo "<br />Date of Birth: $dob<hr>";
    echo "<br />Address: $address</div></div>";

}
?>
<fieldset>
<html>



<form method="post" action="<?php echo htmlspecialchars('controller/EditProfileController.php');?>" autocomplete="off">
  <div class="alignment">
<h1>Edit Profile:</h1>
<div class="input"><br>
  Name: <input value="<?php echo $name ?>" type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()">
 <span class="error" id="nameErr"> <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br><hr><br>


  E-mail: <input value="<?php echo $email ?>" type="text" name="email" id="email" size="25" onkeyup="checkEmail()" onblur="checkEmail()">
  <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
  <br><hr><br>


  Date Of Birth:
  <input value="<?php echo $dob ?>" type="date" name="dateofbirth" id="birthday" onkeyup="checkDOB()" onblur="checkDOB()">
  <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
  <br><hr><br>


  Address:
  <input value="<?php echo $address ?>" type="text" name="address" id="address"  size="35" onkeyup="checkAddress()" onblur="checkAddress()">
  <span class="error" id="addressErr"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span>
  <br><br><hr>

  <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"></div></div></form>
  </fieldset>

<div><?php include 'Sources/footer.php';?></div>
</body>
</html>
