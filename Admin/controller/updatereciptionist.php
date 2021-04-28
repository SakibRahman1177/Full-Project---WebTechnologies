<?php  
require_once '../model/model.php';


if (isset($_POST['updatereciptionist'])) {
	  $data['name'] = $_POST['name'];
    $data['address'] = $_POST['address'];
    $data['phonenum'] = $_POST['phonenum'];
    $data['dob'] = $_POST['dob'];
    //$data['gender'] = $_POST['gender'];
    //$data['pass'] = $_POST['pass'];
	// $data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);;

  if (updatereciptionist($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showreciptionist.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>
