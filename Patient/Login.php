<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">

<script src="js/jquery.js"></script>  
<style>
  /*create a form box*/
  .form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 450px;
    margin: 50px auto 100px;
    padding: 15px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  /*add a background picture and declaring a size*/
  body{
    background-image: url('Sources/covid-19.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 780px;
    }
  label{
    float: left;
    
  }
</style>
</head>
<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="WebHome.php">Home</a>
  <a class="active" href="Login.php">Login</a>
  <a href="RegistrationForm.php">Registration</a></div>
</div>
 <div><?php include 'Sources/AccountDesign.php';?></div>  
<div class="form">
<form method="post" action="<?php echo htmlspecialchars('controller/LoginController.php');?>" autocomplete="off">

 
<h1 style="font-size: 50px;text-align: center;">Login</h1>
  <hr>
   <div class="form-control">
  <label> User Name: </label>
  <input type="text" size= "30" name="username" id="username" placeholder="Enter your name" onkeyup="checkUsername()" onblur="checkUsername()" >
  <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span></div>
  <br>

 <div class="form-control">
  <label>Password:</label>
  <input type="password" size="30" name="password" id="password" placeholder="Enter your password" onkeyup="checkPass()" onblur="checkPass()" >
  <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span></div>
  <br>
  <hr>

  <input type="submit" name="submit" value="Submit" size="30">&nbsp;

   
  <a href="ForgotPassword.php" class="active" style="font-size: 17px;color: #4169E1;">Forgot password?</a><br><br><br>
  <p style="font-style: italic;font-size: 15px;">Don't have an account?&nbsp;<a href="RegistrationForm.php" class="active" style="font-size: 15px;color: #4169E1;">Sign Up</a></p>
  <a href="../Recieptionist/login.php" style="color: dodgerblue;font-size: 15px;text-align: center;">Recieptionist Login</a> 


</form></div><br>
<div>
  <?php include 'Sources/footer.php';?></div><hr>
</div>

</body>
</html>