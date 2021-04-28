<!DOCTYPE HTML>
<html>

<head>
  <title>Registration</title>
<script src="js/jquery.js"></script> 
<script>function showHint(str) {
if (str.length == 0) {
document.getElementById("txtHint").innerHTML = "";
return;
} else {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("txtHint").innerHTML = this.responseText;
}
};
xmlhttp.open("GET", "namesuggestion.php?q=" + str, true);
xmlhttp.send();
}
}
</script>
</head>

<body>
	<fieldset>
<div>
    <div class="form">
<form method="post" action="<?php echo htmlspecialchars('controller/RegistrationFormController.php');?>" autocomplete="off">
      
      <h1>REGISTRATION:</h1><hr>
      <!-- <div style="float: "> -->
      <div class="form-control">
            Name: 
            <input type="text" name="name" id="name" onkeyup="showHint(this.value)" placeholder="Enter Your Name" onkeyup="checkName()" onblur="checkName()">
            <span id="txtHint"></span>
            <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            
      </div>
            <br>
           
       <div class="form-control">     
            E-mail:
            <input type="text" name="email" id="email" placeholder="Enter your Email" onkeyup="checkEmail()" onblur="checkEmail()">
            <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            
       </div>
            <br>
         
        <div class="form-control">
            User Name: 
            
            <input type="text" name="username" id="username" placeholder="Enter Your Username" onkeyup="checkUsername()" onblur="checkUsername()">
            <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
           
        </div>
            <br>
          
        <div class="form-control">
            Password:
            
            <input type="Password" name="Password" id="password" placeholder="Enter Your Password" onkeyup="checkPass()" onblur="checkPass()">
            <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            
        </div>
            <br>

         <div class="form-control">
            Confirm Password:
            <input type="Password" name="confirmpass" id="confirmpass" placeholder="Retype Your Password" onkeyup="confirmPass()" onblur="confirmPass()">     
            <span class="error" id="confirmpassErr"><?php if(!empty($_GET['confirmpassErr'])){echo $_GET['confirmpassErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
          
          </div>
            <br>
          
            Gender: &nbsp;&nbsp;
            <span class="required error" ></span>
              <input type="radio" name="gender" id="gender" value="female" onkeyup="checkGender()" onblur="checkGender()">Female&nbsp;&nbsp;
              <input type="radio" name="gender" id="gender" value="male" onkeyup="checkGender()" onblur="checkGender()">Male&nbsp;&nbsp;
              <input type="radio" name="gender" id="gender" value="other" onkeyup="checkGender()" onblur="checkGender()">Other&nbsp;&nbsp;
              <span class="error" id="gender"><?php  if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];}?></span>
             <br>   
            <br>
            Date Of Birth
            <span class="required error" ></span>
                <input type="date" name="birthday" id="birthday" onkeyup="checkDOB()" onblur="checkDOB()">
                <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
                <br>
           <br>
           <div class="form-control">
            Address:
                <input type="text" name="address" id="address" placeholder="Write your present address" onkeyup="checkAddress()" onblur="checkAddress()">
                <span class="error" id="address"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            
            </div>
            <hr>
            
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>


</form></div></div>

<div><?php include 'Sources/footer.php';?></div><hr>

</div>
</body>
</html>