<?php
session_start();
if(!empty($_POST["submit"])) {
	$conn = mysqli_connect("localhost", "root", "username", "password");
	$sql = "Select * patient_db = '" . $_POST["username"] . "'";
        if(!isset($_COOKIE["username"])) {
            $sql .= " AND password = '" . md5($_POST["password"]) . "'";
	}
        $result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["id"] = $user["id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["username"])) {
					setcookie ("username","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>
