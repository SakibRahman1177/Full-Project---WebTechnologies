<?php

//require_once '../model/model.php';

if (isset($_POST['submit'])) {
session_start();
$flag=1;
$nameErr = $passErr = "";
$name = $pass = "";
$message = '';
$msg = " ";  
$error = ''; 
$uname="admin";
$pwd="1234@";


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




if($flag==0){
$args = array(
'nameErr' => $nameErr,
'passErr' => $passErr,

);

}






if (isset($_POST['name'])) {
  if ($name==$uname && $pass==$pwd) {
    $_SESSION['name'] = $uname;

    header("location:../Dashboard.php");
  }
  else {
   
    $msg="username or password invalid";
    //echo "<script>alert('Username or Password incorrect!')</script>";
    echo "<script>alert('Username or Password incorrect!');
              window.location.href='../userlogin.php';
     </script>";
  }
}



// if($flag==1)
// {
// $data['name']=$name;
// $data['address']=$address;
// $data['dob']=$dob;
// $data['phonenum']=$phonenum;
// $data['pass']=$pass;
// $data['gender']=$gender;



// if (addreciptionist($data)) {
//  echo "<script>alert('Successfully added!!');
//               window.location.href='../lablist.php';
//      </script>";
// }
// else {
// echo 'Could not add!!';
// }
// }

}else {
echo "You can not access this page!!";
}

?>
<!-- <?php 
$msg = " ";
session_start();

$uname="admin";
$pwd="1234@";

if (isset($_POST['name'])) {
  if ($name==$uname && $pass==$pwd) {
    $_SESSION['name'] = $uname;

    header("location:../Dashboard.php");
  }
  else {
   
    $msg="username or password invalid";
    //echo "<script>alert('Username or Password incorrect!')</script>";
    echo "<script>alert('Username or Password incorrect!');
              window.location.href='../userlogin.php';
     </script>";
  }
}
?> -->