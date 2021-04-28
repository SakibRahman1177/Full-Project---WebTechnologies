<!DOCTYPE html>
<html>

<head>
  <title>Report</title>
</head>
<body>
<?php
session_start();
require_once ('controller/ReportController.php');

if(isset($_SESSION['name']))
{ 
$data = fetchApplyInfo($_SESSION['name']);


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
  <body>
    <header>
<?php include 'controller/Head1.php';?>
</header>
    <table style="width:97%;margin-right: 25px;margin-left: 25px; border: 2px solid black;"><b>
      Account</b><br><hr><br>
      <div style="float: left; text-align: left;margin-left: 60px;">
      <li><a href="view profile.php">View Profile</a></li><br><br>
      <li><a href="edit profile.php">Edit Profile</a></li><br><br>
      <li><a href="Report.php">Patient List</a></li><br><br>
            <li><a href="setreport.php">Set Report</a></li><br><br>
<br>
</table>
<div><?php include 'Sources/footer.php';?></div><hr>
</body>
</html>