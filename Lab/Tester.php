<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Tester</title>
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
<header>
<?php 
session_start();
if (empty($_SESSION['username'])) {
    header("location:Login.php");
    
}

else{
    echo "<div style='float: right';>"." Logged in as ".$_SESSION['username']." | ";
    echo "<a href='Tester.php'>Dashboard</a> | " ;
    echo "<a href='Sources/Logout.php'>Logout</a>" ;
    echo "</div><br><hr>";
   
}

 ?>
</header>
</div>
    <th><?php if (isset($_SESSION['username'])) {
    echo "<div style= 'margin-right: 850px;font-size: 30px;'> Welcome ".$_SESSION['username']."</div>";

}

?>
<table>
  <tr>
    <th class="a">
        Tester<hr><br>
        <div class="a">
        <li><a href="view Profile.php" class="a">View Profile</a></li><br><br>
        <li><a href="edit profile.php" class="a">Edit Profile</a></li><br><br>
        <li><a href="Report.php" class="a">Patient List</a></li><br><br>
        <li><a href="setreport.php" class="a">Set Report</a></li><br><br>
    </div>
    </th>


</th>
  </tr> 
</table>

<div><?php include 'Sources/footer.php';?></div><hr>

</body>
</html>

