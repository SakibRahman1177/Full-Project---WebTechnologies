<?php
require_once '../model/model.php';

if(isset($_POST["submit"])){
$flag=1;
$nameErr = $emailErr = $genderErr = $PnumberErr = $addressErr = "";
$usernameErr = $passwordErr = "";
$name = $email = $gender = $Pnumber = $address = "";
$username = $password = "";

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["username"])) {
      $usernameErr = "UserName is required";
      $flag=0;
    } else {
        $username = test_input($_POST["username"]);
        if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
        $usernameErr = "Only alpha numeric characters, period, dash or underscore allowed";
        $username ="";
        $flag=0;
    }
      else if (strlen($username)<2) {
        $usernameErr = "At least two charecters needed";
        $username ="";
        $flag=0;
    }
 
}

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
      $emailErr ="Invalid email format";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["phone"])) {
    $PnumberErr = "Phone number is required";
    $flag=0;
  }else {
    $Pnumber = test_input($_POST["phone"]);
   if (strlen($Pnumber)>11 || strlen($Pnumber)<11) {
      $PnumberErr = "Enter Only 11 digit Phone number";
      $Pnumber ="";
      $flag=0;
    }
  }
   if (empty($_POST["address"])) {
    $addressErr = "Present Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  } 

  if (empty($_POST["gender"])) {
    $genderErr = "Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  
if($flag==0){
    $args = array(
    'usernameErr' => $usernameErr,
    'nameErr' => $nameErr,
    'emailErr' => $emailErr,
    'PnumberErr' => $PnumberErr,
    'addressErr' => $addressErr,
    'genderErr' => $genderErr  
);
      header("location:../ApplyForm.php?" . http_build_query($args));
   } 
 if ($flag==1) {
  $data['username']=$username;
 	$data['name']=$name;
  $data['email']=$email;
  $data['phone']=$Pnumber;
  $data['address']=$address;
  $data['gender']=$gender;

  if (Apply($data)) {
    echo "<script>alert('Successfully added!!');
    window.location.href = '../ApplyForm.php';
    </script>";
  }

  else {
   echo "<script>alert('Couldn't Add!!');
    window.location.href = '../ApplyForm.php';
    </script>";
  }
}
}
}
else {
  echo "<script>alert('You can not access this page!!')</script>";
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>