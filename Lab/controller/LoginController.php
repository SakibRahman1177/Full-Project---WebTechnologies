<?php
require_once ('../model/model.php');
$tableName = 'patient_db';
session_start();
if(isset($_POST['submit']))
{
  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

$username = $password = "";
$flag=1;

  if (empty($_POST["username"])) {
    $_SESSION['nameErr'] = "Name is required";
    $flag = 0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $_SESSION['nameErr'] = "Letters and white space allowed";
      $username ="";
      $flag = 0;
    }
    else if (strlen($username)<2) {
            if(strlen($name)<2)
      {
         $_SESSION['nameErr'] = "Name must contains at least two character ";
      }
      else {
        $_SESSION['nameErr']="";
      }
      $username ="";
      $flag = 0;
    }
  }
  
  if (empty($_POST["password"])) {
       $_SESSION['passwordErr'] = "Password is required";
   header('Location: ../Login.php');
    $flag=0;
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password)<5) {
      $_SESSION['passwordErr']="Password must not be less than eight (5) characters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $_SESSION['passwordErr']="Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
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
          echo "Login Successful";
          $_SESSION['username']=$username;
          header('location:../Tester.php');

        }
        else {
          echo "Incorrect Password";
        }
      }else {
        echo "Username not found";
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }

}
else {
  echo "You are not allowed to access this page";
}


?> 