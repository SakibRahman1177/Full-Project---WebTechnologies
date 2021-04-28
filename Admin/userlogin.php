<!DOCTYPE HTML>  
<html>
<head>
  <title></title>
<script src="js/validation.js"></script>  
<style>
  .error {
        color: #FF0000;
    }
  h2{  font-style: bold;
       font-size: 40px;
       text-align: center; 
     }
  form{ padding-top: 120px;
        text-align: center;
        font-size: 20px;
        border: 5px;
        margin-left: 285px;
        margin-right: 285px;
        border-style: solid;
        border-color: black;
        padding: 1em;
      }
  input{
       height: 20px;
       border: 2px solid #ddd;
       border-radius: 2px;
       padding: 4px;
       background-color: #fff;
       box-shadow: inset 1px 1px 3px rgba(0,0,0,0.1);
  }
    input[type="submit"] {
    padding: 0px 20px;
    background-color: green;
    border: 2px;
    color: #fff;
    border-radius: 2px;
    margin-bottom: 4px;
}

</style>

</head>
<body>  
<div><?php include 'controller/Head.php';?></div>
<?php

// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "*Username is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
      $usernameErr = "*Only letters, white space, period & dash is allowed";
      $username = "";
          }
       else if(strlen($username)<2)
          {
           $usernameErr = "*User Name must contain at least two (2) characters";
           $username = "";

          }
          else {
         $username = test_input($_POST["username"]);
     }

     }


  if (empty($_POST["password"])) {
    $passwordErr = "*Password is required.";
  } else {
    $password = test_input($_POST["password"]);

if(strlen($password)<4){
    $passwordErr = "*Must not be less than eight (4) characters.";
    $password = "";
  }
  
   else if (!preg_match("/[@, #, $,  %]/",$password)) {
      $passwordErr ="*Password must contain at least one of the special characters (@, #, $,  %).";
      $password = "";
    }

  }

}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php 
$msg = " ";
session_start();

$uname="admin";
$pwd="1234@";

if (isset($_POST['username'])) {
  if ($username==$uname && $password==$pwd) {
    $_SESSION['username'] = $uname;

    header("location:Dashboard1.php");
  }
  else {
   
    $msg="username or password invalid";
    //echo "<script>alert('Username or Password incorrect!')</script>";
  }
}
?>



<br>
<form method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<h1>Login</h1>
  <hr>
  Username: <input type="text" size= "30" name="username" placeholder="Enter your name" id="name" onkeyup="checkName()" onblur="checkName()">
  <br><span class="error" id="nameErr">&nbsp; &nbsp;<?php echo $usernameErr;?></span>
  <br>

  Password: <input type="password" size="30" name="password"  placeholder="Enter your password" id="password" onkeyup="checkPass()" onblur="checkPass()"><br>
  <span class="error" id="passwordErr">&nbsp;&nbsp; <?php echo $passwordErr;?></span>
  <br>
  <input type="checkbox"  name="remember" >Remember me<br><br>
  <hr>
  <input type="submit" name="submit" value="Submit" size="30">&nbsp;
  <!-- <a href="RecoveryPassword.php" class="active">Forgot password?</a>  --> 
</form>

<div><?php include 'controller/footer.php';?></div>

</div>
</body>
</html>