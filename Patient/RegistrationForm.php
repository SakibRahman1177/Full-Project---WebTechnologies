<!DOCTYPE HTML>
<html>

<head>
  <title>Registration</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
<script src="js/jquery.js"></script> 
<script src="js/query.js"></script> 
<script>

    $(document).ready(function(){
      
      $('#username').blur(function(){
        var username = $('#username').val();
        console.log("username =" + username);
        if (username.length == 0) {
              $('#availability').html("<span style='color:red;'>UserName must be Filled-Up</span>");
              $('#username').css("border-color","red");
        }
      });
        $('#username').keyup(function(){
            var username = $(this).val();
            if (username == "") {
              $('#availability').html("<span style='color:red;'>UserName must be Filled-Up</span>");
              $('#username').css("border-color","red");
            }
            else if (username.length<3) {
              $('#availability').html("<span style='color:red;'>UserName must be at least 3 characters long.</span>");
              $('#username').css("border-color","red");
            } 
            else {
            $.ajax({
                url: "model/CheckUsername.php",
                method:"POST",
                data:{uname:username},
                dataType:"text",
                success:function(html)
                { 
                  if (html == "true") {
                     $('#availability').html("<span>Username Already Exists!</span>");
                     $('#username').css("border-color","red"); 
                }
                else if(html == "false") {
                 
                    $('#availability').html(" ");
                    $('#username').css("border-color","green");
                }
                
                }
            });
          }
        });
    });

$(function(){
    var dtToday = new Date();
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
        day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;    
    $('#birthday').attr('max', maxDate);
});
</script>
  <style>
    .error {color: #FF0000;}
    /*add a background picture and declaring a size*/
    body{
    background-image: url('Sources/covid-19.jpg');
    background-repeat: no-repeat;
    background-size: 1600px 1050px;
      }
      form{
        font-size: 18px;
      }
      h1{
        text-align: center;
      }
      /*create a form box*/
      .form{
    font-family: "Arial", sans-serif;
    background: #FFFFFF;
    max-width: 600px;
    margin: 20px auto 50px;
    padding: 10px 45px 30px 45px;
   box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    border-radius: 0px;
   }
  </style>
</head>

<body>
<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>
  <div style="float: right;">
  <a  href="WebHome.php">Home</a>
  <a href="Login.php">Login</a>
  <a class="active" href="RegistrationForm.php">Registration</a></div>
</div>
<div><?php include 'Sources/AccountDesign.php';?></div>
    <div class="form">
<form method="post" action="<?php echo htmlspecialchars('controller/RegistrationFormController.php');?>" autocomplete="off">
      
      <h1>REGISTRATION:</h1><hr>
      <!-- <div style="float: "> -->
      <div class="form-control">
            Name: 
            <input type="text" name="name" id="name" placeholder="Enter Your Name" onkeyup="checkName()" onblur="checkName()">
            <span class="error" id="nameErr"><?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
      </div>
            <br>
           
       <div class="form-control">     
            E-mail:
            <input type="text" name="email" id="email" placeholder="Enter your Email" onkeyup="checkEmail()" onblur="checkEmail()">
            <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
       </div>
            <br>
         
        <div class="form-control">
            User Name: 
            
            <input type="text" name="username" id="username" placeholder="Enter Your Username" >
            <span class="error" id="availability"></span>
            <span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
            <br>
          
        <div class="form-control">
            Password:
            
            <input type="Password" name="Password" id="password" placeholder="Enter Your Password" onkeyup="checkPass()" onblur="checkPass()">
            <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
        </div>
            <br>

         <div class="form-control">
            Confirm Password:
            <input type="Password" name="confirmpass" id="confirmpass" placeholder="Retype Your Password" onkeyup="confirmPass()" onblur="confirmPass()">     
            <span class="error" id="confirmpassErr"><?php if(!empty($_GET['confirmpassErr'])){echo $_GET['confirmpassErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
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
                <input type="date" name="birthday" id="birthday"  max="2014-05-20" onkeyup="checkDOB()" onblur="checkDOB()">
                <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
                <br>
           <br>
           <div class="form-control">
            Address:
                <input type="text" name="address" id="address" placeholder="Write your present address" onkeyup="checkAddress()" onblur="checkAddress()">
                <span class="error" id="address"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span>
            <i class="fas fa-check-circle"></i>
            <i class="fas fa-exclamation-circle"></i>
            <small>Error message</small>
            </div>
            <hr>
            
            <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br>

</form></div></div>

<div><?php include 'Sources/footer.php';?></div><hr>

</div>
</body>
</html>