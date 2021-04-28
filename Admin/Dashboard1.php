<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title></title>
    <link rel="stylesheet" href="css/style.css">
<style>
     table{
      margin-left: 250px;
      width: 83%; 
      border: 2px solid black;
     }  
     tr{
        border: 2px solid black;
     }
     th{
        border: 1px black;
     }


</style>
</head>
<body>

    <div><?php include 'controller/Head2.php';?></div>
    <?php include 'controller/Head1.php';?>
<header>

 
</header>
<table>
  <tr>
        <th><?php if (isset($_SESSION['username'])) {
	echo "<div style= 'margin-left:500px; margin-right: 50px;font-size: 30px;'> Welcome ".$_SESSION['username']."</div>";

}

?>

</th>
  </tr> 
</table>
<div><?php include 'controller/dashboarddesign.php';?></div><hr>


</body>
</html>