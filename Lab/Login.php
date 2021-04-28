<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
      <style type="text/css">
    *{
      margin: 0;
      padding: 0;
    }
    body{
      background-image: url(Sources/a.jpg);
      background-repeat: no-repeat;
      background-size: cover; 
      background-position: center;
    }
    .a{
      width: 450px;
      padding: 40px;
      text-align: center;
      margin: auto;
      margin-top: 5%;
      color: yellow;
      font-family: 'Century Gothic', sans-serif;
    }
    .b{
      width: 450px;
      background: rgba(0,0,0,0.4);
      padding: 40px;
      text-align: center;
      margin: auto;
      margin-top: 5%;
      color: white;
      font-family: 'Century Gothic', sans-serif;
    }

  </style>


<script src="js/jquery.js"></script>  

</head>
<body>
  <fieldset>
 <div> 
<div class="form">
<form method="post" action="<?php echo htmlspecialchars('controller/LoginController.php');?>" autocomplete="off">
  <div class="b">
<h1>Login</h1>
</div>
  <br>
   <div class="a">
  <label> User Name:  </label>
  <input type="text" size= "30" name="username" id="username" placeholder="Enter your name" onkeyup="checkUsername()" onblur="checkUsername()" >
  <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
<br>
<br>
  <label>Password:</label>
  <input type="password" size="30" name="password" id="password" placeholder="Enter your password" onkeyup="checkPass()" onblur="checkPass()" >
  <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span>
  <br>
  <br>
  <hr>
<br>
  <input type="submit" name="submit" value="Submit" size="40">&nbsp;

   
  <a href="ForgotPassword.php" class="active" style="font-size: 20px;color: white;">Forgot password?</a><br><br><br>


</form><br>
  <?php include 'Sources/footer.php';?></div><hr>

</body>
</html>