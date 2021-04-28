
 <!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<html>
 <?php
session_start();
include 'controller/ViewProfileController.php';

if(isset($_SESSION['username']))
{ 
$data = fetchPatient($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $patient):

         $name= $patient['name'] ;
         $email=$patient['email'];
         $username= $patient['username'] ;
         $dob=$patient['dateofbirth'];
         $address= $patient['address'] ;
    endforeach;

  }

}
else {
  echo "You cannot access this page!!";
}

 ?>
  <body>
    <header>
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
</th>
</table>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>



 
 