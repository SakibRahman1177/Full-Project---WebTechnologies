<?php
require_once '../model/model.php';
$tableName = 'patient_db';

if(isset($_POST["submit"])){  
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $addressErr= $id = $name = $email = $dob = $gender = $address = "";
$username = $password = "";
$userNameErr = $passErr = $confirmpassErr = $confirmpass = "";
$message = '';  
$error = '';


 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required!";
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

  if (empty($_POST["birthday"])) {
    $dobErr = "DOB is required";
    $flag=0;
    } 
    else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
 if (empty($_POST["address"])) {
    $addressErr = "Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }

  if (empty($_POST["username"])) {
    $userNameErr = "UserName is required";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
    $flag=0;
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<5) {
      $passErr = "Password must be 5 charecters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "Retype The Current Password";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (strcmp($password, $confirmpass)==1) {
      $confirmpassErr = "Password & Retyped Password Dosen't Match";
      $confirmpass ="";
      $flag=0;
       }
  }
if($flag==0){
    $args = array(
    'nameErr' => $nameErr,
    'emailErr' => $emailErr,
    'userNameErr' => $userNameErr,
    'passErr' => $passErr,
    'confirmpassErr' => $confirmpassErr,
    'genderErr' => $genderErr,
    'dobErr' => $dobErr
);
      header("location:../RegistrationForm.php?" . http_build_query($args));
   }

if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['username']=$username;
  $data['password']=$password;
  $data['dateofbirth']=$dob;
  $data['address']=$address;

  if (register($data)) {
    echo "<script>alert('Successfully added!!');
    window.location.href = '../RegistrationForm.php';
    </script>";
  }

  else {
    echo "<script>alert('Oopps!! Couldn't add!);
    window.location.href = '../RegistrationForm.php';
    </script>";  }
}
}
}
else {
  echo "<script>alert('<h1>You can not access this page!!</h1>')</script>";
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 } 

 ?>
