<?php 

session_start();

if (isset($_SESSION['username'])) {
	session_destroy();
	header("location:../../Patient/Login.php");
	
}
else{
	header("location:../../Patient/Login.php");
}
 ?>