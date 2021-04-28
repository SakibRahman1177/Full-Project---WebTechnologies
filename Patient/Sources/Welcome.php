<?php
session_start();
if (isset($_SESSION['username'])) {
$name = $_SESSION['name'];
	
	
}
else{
		$msg="error";
		header("location:Login.php");
}
?>
<html>
	<body>
		<class style="float:right;color:blue;"><?php echo "Logged in as ".$name; ?>&nbsp;|&nbsp;&nbsp;<a href='Login.php'>Logout</a></class>
		<h2>Covid-19 Test</h2>
		<br><br><hr><br><br>
		
		<class style="float:left;"><?php include 'Account.php';?></class>
		<fieldset>
						<legend> PROFILE:</legend>
						<br><br><h2>Welcome <?php echo $name; ?></h2>
		</fieldset>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><hr>
		<div><?php include 'Sources/footer.php';?></div>
		
		
	</body>
</html>