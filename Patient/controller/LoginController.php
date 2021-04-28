<?php
require_once ('../model/model.php');
$tableName = 'patient_db';
session_start();
if(isset($_POST['submit'])){

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
$usernameErr = $passErr = "";
$username = $password = "";
$msg="";
$flag=1;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "UserName is required";
    $flag = 0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $usernameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag = 0;
    }
    else if (strlen($username)<2) {
      $usernameErr =  "At least two charecters needed";
      $username ="";
      $flag = 0;
    }
  }
  
  if (empty($_POST["password"])) {
    $passErr = "Password is required";
    $flag=0;
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password)<5) {
      $passErr = "Password must be 5 charecters";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)<br>";
      $flag=0;
    }
  }
if($flag==0){
    $args = array(
    'usernameErr' => $usernameErr,
    'passErr' => $passErr
);
      header("location:../Login.php?" . http_build_query($args));
   } 

if($flag==1)
  {
    try {

      $data = loginSearch($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['password'] ;
        endforeach;
        if($password==$passwordFromDB)
        {
        
          $_SESSION['username']=$username;
          echo "<script>alert('Login Successful');
               window.location.href = '../Dashboard.php';
          </script>" ;

        }
        else {
              echo "<script>alert('Incorrect Username or Password!');
                         window.location.href = '../Login.php';
              </script>" ;
        
        }
      }

    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }

 }
}
else {
  echo "You are not allowed to access this page";
}

?> 

<!-- Admin Login -->

<?php 
$msg = " ";
session_start();

$uname="Admin";
$pwd="1234@";

if (isset($_POST['username'])) {
  if ($username==$uname && $password==$pwd) {
    $_SESSION['username'] = $uname;

    header("location:../../Admin/Dashboard1.php");
  }
  else {
   
    $msg="username or password invalid";
    //echo "<script>alert('Username or Password incorrect!')</script>";
  }
}
?>

<!-- Lab Login -->

<?php 
$msg = " ";
session_start();

$uname="Lab";
$pwd="lab12@";

if (isset($_POST['username'])) {
  if ($username==$uname && $password==$pwd) {
    $_SESSION['username'] = $uname;

    header("location:../../Lab/Tester.php");
  }
  else {
   
    $msg="username or password invalid";
    //echo "<script>alert('Username or Password incorrect!')</script>";
  }
}
?>