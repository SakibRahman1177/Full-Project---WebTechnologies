<?php 
session_start();
require_once '../model/model.php';
$tableName = 'patient_db';


if (isset($_POST['submit']) && isset($_SESSION['username'])) {
$flag=1;
$nameErr = $emailErr = $usernameErr = $dobErr = $addressErr = $name = $email = $dob = $username = $address ="";
$message = '';  
$error = ''; 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "Only letters white space, period & dash allowed";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "At least two words needed";
      $flag=0;
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
  }

  if (empty($_POST["dateofbirth"])) {
    $dobErr = "DOB is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["dateofbirth"]);
  }

   if (empty($_POST["address"])) {
    $addressErr = "Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }


   if($flag==0){
    $args = array(
    'nameErr' => $nameErr,
    'emailErr' => $emailErr,
    'dobErr' => $dobErr,
    'addressErr' => $addressErr
);
      header("location:../edit profile.php?" . http_build_query($args));
   }
}

if($flag == 1) {
	$data['name'] = $name;
	$data['email'] = $email;
  $data['dateofbirth'] = $dob;
	$data['address'] = $address;

  if (EditPatient($_SESSION['username'], $data)) {
     echo 'Successfully added!!';
  }

  else {
    echo 'Could not add!!';
  }
}


} else {
  echo 'You are not allowed to access this page.';
}
 ?>