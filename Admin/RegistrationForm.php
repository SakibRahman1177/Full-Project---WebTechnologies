<!DOCTYPE HTML>
<html>

<head>
  <script src="js/validation.js"></script>  
    <style>
    .error {
        color: #FF0000;
    }
    h2{
       text-align: center; }
  form{ padding-top: 20px;
        text-align: center;
        font-size: 20px;}
  input{
       padding: 5px 12px;
       border: 1px solid #ddd;
       border-radius: 2px;
       background-color: #fff;
       box-shadow: inset 1px 1px 5px rgba(0,0,0,0.2);
  }
  input[type="submit"] {
    padding: 5px 15px;
    background-color: green;
    border: 8px;
    color: #fff;
    border-radius: 8px;
}  
  input[type="reset"] {
    padding: 5px 15px;
    background-color: gray;
    border: 8px;
    color: #fff;
    border-radius: 8px;

}

  span{ font-size: 15px;
        text-align: center;  
      }

      form{
        border: 5px;
        margin-top: 10px;
        margin-bottom: 0px;
        margin-left: 300px;
        margin-right: 300px;
        border-style: solid;
        border-color: black;
        padding: 1em;
        
      }
      fieldset{
        border-color: black;
      }
    </style>
</head>

<body>
 <div><?php include 'controller/Head.php';?></div>

    <?php
$flag=1;
$nameErr = $emailErr = $genderErr = $dobErr = $name = $email = $dob = $gender = "";
$username = $password = "";
$userNameErr = $passwordErr = $confirmpassErr = $confirmpass = "";
$message = '';  
$error = ''; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
  
  if (empty($_POST["email"])) {
    $emailErr = "*Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "*Invalid email format";
      $email ="";
      $flag=0;
    }
  }

  if (empty($_POST["birthday"])) {
    $dobErr = "*Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["birthday"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "*Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["username"])) {
    $userNameErr = "*Username is required";
    $flag=0;
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "*Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
      $flag=0;
    }
    else if (strlen($username)<2) {
      $userNameErr = "*At least two charecters needed";
      $username ="";
      $flag=0;
    }
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "*Password is required";
    $flag=0;
  } else {
    $password = test_input($_POST["password"]);
    if (strlen($password)<8) {
      $passwordErr = "*Password must be 8 charecters";
      $password ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passwordErr = "*Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
      $flag=0;
    }
  }
  if (empty($_POST["confirmpass"])) {
    $confirmpassErr = "*Retype the Password";
    $flag=0;
  } else {
    $confirmpass = test_input($_POST["confirmpass"]);
    if (!strcmp($password, $confirmpass)==0) {
      $confirmpassErr = "*Password & Retyped Password Must be Same!";
      $confirmpass ="";
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
    
    <form name= "myform" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <h1><span style="font-weight: bold;font-size: 25px;">REGISTRATION</span></h1>  <hr>
            
            Name: <input type="text" name="name" placeholder="Enter Your Name" id="name"  onkeyup="checkName()" onblur="checkName()">
            <span class="error" id="nameErr"> <?php echo $nameErr;?></span>
            <br>
            <br>
            E-mail: <input type="text" name="email" placeholder="Enter your Email" id="email" onkeyup="checkEmail()" onblur="checkEmail()">
            <span class="error" id="emailErr"> <?php echo $emailErr;?></span>
            <br>
            <br>
            Username: <input type="text" name="username" placeholder="Enter Your Username" id="username"  onkeyup="checkUName()" onblur="checkUName()">
            <span class="error" id="usernameErr"> <?php echo $userNameErr;?></span>
            <br>
            <br>
            Password: <input type="Password" name="password" placeholder="Enter Your Password" id="password" onkeyup="checkPass()" onblur="checkPass()">
            <span class="error" id="passwordErr"> <?php echo $passwordErr;?></span>
            <br>
            <br>
            Confirm Password: <input type="Password" name="confirmpass" placeholder="Retype Your Password" id="confirmpass" onkeyup="confirmPass()" onblur="confirmPass()">
            <span class="error" id="confirmpassErr"> <?php echo $confirmpassErr;?></span>
            <br>
            <br>
            <fieldset>
                <legend>Gender</legend>
                Gender:
                <input type="radio" name="gender" value="female" id="gender" onkeyup="checkGender()" onblur="checkGender()">Female
                <input type="radio" name="gender" value="male" id="gender" onkeyup="checkGender()" onblur="checkGender()">Male
                <input type="radio" name="gender" value="other" id="gender" onkeyup="checkGender()" onblur="checkGender()">Other
                <span class="error" id="genderErr"> <?php echo $genderErr;?></span>
                </fieldset>
            
            <fieldset>
                <legend>Date Of Birth</legend>
                <input type="date" name="birthday" id="dob" onkeyup="checkDob()" onblur="checkDob()">
                <span class="error" id="dobErr"> <?php echo $dobErr;?></span>
                <br>
            </fieldset>
            <br>
            <hr>
            <br>
            <input type="submit" name="registration" value="Submit"> <input type="reset" value="Reset">
       
    </form>
    <div><?php include 'controller/footer.php';?></div>
    <?php
echo $error;
echo "<br>";
echo $message;
echo "<br>";
?>
</div>
</body>

</html>