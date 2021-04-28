<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }
  $cpasswordErr=$npasswordErr=$rnpasswordErr="";
$cpassword=$npassword=$rnpassword="";
  $username=$password="";
  $flag=1;


  if (empty($_POST["cpassword"])) {
       $cpasswordErr= "Current Password is required";
       $flag=0;
     }
     else {
      $cpassword = test_input($_POST["cpassword"]);


        }


 if(empty($_POST["npassword"]))
 {
   $npasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $npassword=test_input($_POST["npassword"]);
   if(strlen($npassword)<5)
   {
     $npasswordErr= "Password must be 5 charecters";
     $flag=0;
   }
   else {
     if(!preg_match("/[@,#,$,%]/",$npassword))
     {
       $npasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["rnpassword"]))
 {
   $rnpasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $rnpassword=test_input($_POST["rnpassword"]);
   if(strlen($rnpassword)<5)
   {
     $rnpasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(!preg_match("/[@,#,$,%]/",$rnpassword))
     {
       $rnpasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

if($flag==0){
    $args = array(
    'cpasswordErr' => $cpasswordErr,
    'npasswordErr' => $npasswordErr,
    'rnpasswordErr' => $rnpasswordErr
);
      header("location:../ChangePassword.php?" . http_build_query($args));
   }


  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {
        foreach ($data as $i => $patient):

             $passwordFromDB= $patient['password'] ;
        endforeach;
        if($cpassword==$passwordFromDB)
        {
          if($npassword==$rnpassword){
          if (updatePasswordStudent($_SESSION['username'], $npassword)) {
            echo '<script>alert("Successfully updated!!")</script>';
           session_destroy();
            header('Location: ../Login.php');
          }
          else {
            echo "Update Unsuccessful!!";
          }
        }
        else {
          echo "<script>alert('New password and retype password is not same!!');
          window.location.href = '../ChangePassword.php';</script>";
        }
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