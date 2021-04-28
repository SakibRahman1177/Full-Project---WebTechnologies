<!DOCTYPE HTML>  
<html>
<head>
  <title>Change Password</title>
  <link rel="stylesheet" href="css/style.css">
<style>
.error {color: #FF0000;
        font-size: 14px;}
.form{
    font-family: "Roboto", sans-serif;
    background: #FFFFFF;
    max-width: 400px;
    margin: 100px auto 100px;
    padding: 10px 45px 30px 45px;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 10px;
  }
  body{
    background-image: url(Sources/covid-19.jpg);
    background-repeat: no-repeat;
    background-size: 1600px 780px;
      }
  h2{  font-style: bold;
       font-size: 30px;
        }
  form{ padding-top: 20px;
        font-size: 20px;}
  input{
       height: 20px;
       border: 2px solid #ddd;
       border-radius: 2px;
       padding: 4px;
       background-color: #fff;
       box-shadow: inset 1px 1px 3px rgba(0,0,0,0.2);
  }
    input[type="submit"] {
    padding: 0px 25px;
    background-color: green;
    border: 2px;
    color: #fff;
    margin-left: 5px;
    border-radius: 2px;
    margin-bottom: 4px;
}

</style>
</head>
<body>  
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a href="WebHome.php">Home</a>
  <a class="active" href="">Login</a>
  <a href="">Registration</a></div>
</div>
<?php
// define variables and set to empty values

$email = $emailErr = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
 
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 



<div class="form">
<form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><a href="Login.php" style="float: right; font-style: italic;font-size: 15px;">Go Back</a> 
 <h2>Forgot Password</h2><br><hr><br> 
 Email: 
 <input type="text" name="email" id="email" size="35"placeholder="Enter your Email" onkeyup="checkEmail()" onblur="checkEmail()">
            <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
            <br>

  <input type="submit" name="submit" value="Submit" size="30">

</form></div><br>
</body>
</html>