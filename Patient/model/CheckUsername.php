<?php
 
$conn = mysqli_connect("localhost","root","","patient");
 
if(isset($_POST["uname"])) {
	
  $query = "SELECT * FROM patient_db WHERE username ='" . $_POST["uname"] . "'";
  $result = mysqli_query($conn, $query);
  if(mysqli_num_rows($result)>0) {
     echo "true";

  }else{
      echo "false";
  }
 
}
?>