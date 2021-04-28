<?php

require_once '../model/model.php';

if (isset($_POST['create'])) {

$flag=1;
$nameErr = $addressErr = $phonenumErr = $dobErr = $passErr= $genderErr = "";
$name = $address = $phonenum = $dob = $pass = $gender =  "";
$message = '';  
$error = ''; 
;
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}



if (empty($_POST["name"])) {
    $nameErr = "*Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
      $nameErr = "*Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (str_word_count($name)<2) {
      $nameErr = "*At least two words needed";
      $name ="";
      $flag=0;
    }
  }
  
if (empty($_POST["address"])) {
    $addressErr = "*Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }


if (empty($_POST["phonenum"])) {
    $phonenumErr = "*Phone Number is required";
    $flag=0;
  } else {
    $phonenum = test_input($_POST["phonenum"]);
    if (!preg_match("/[0-9]/",$phonenum)) {
      $phonenumErr = "*Only numeric characters allowed";
      $phonenum ="";
      $flag=0;
    }
  }


  if (empty($_POST["dob"])) {
    $dobErr = "*Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["pass"])) {
    $passErr = "*Password is required";
    $flag=0;
  } else {
    $pass = test_input($_POST["pass"]);
    if (strlen($pass)<4) {
      $passErr = "*Password must be 8 charecters";
      $pass ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$pass)) {
      $passErr = "*Password must contain at least one of the special characters (@, #, $,%)";
      $pass ="";
      $flag=0;
    }
  }


  if (empty($_POST["gender"])) {
    $genderErr = "*Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }




if($flag==0){
$args = array(
'nameErr' => $nameErr,
'addressErr' => $addressErr,
'phonenumErr' => $phonenumErr,
'passErr' => $passErr,
'dobErr' => $dobErr,
'genderErr' => $genderErr,
);

header("location:../addlab.php?" .
http_build_query($args));
}



if($flag==1)
{
$data['name']=$name;
$data['address']=$address;
$data['dob']=$dob;
$data['phonenum']=$phonenum;
$data['pass']=$pass;
$data['gender']=$gender;



if (addlab($data)) {
 echo "<script>alert('Successfully added!!');
              window.location.href='../lablist.php';
     </script>";
}
else {
echo 'Could not add!!';
}
}

}else {
echo "You can not access this page!!";
}

?>