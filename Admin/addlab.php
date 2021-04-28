<!DOCTYPE HTML>
<html>

<head>
  <script src="js/validation.js"></script> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript">
$(document).ready(function(){
$('#name').keyup(function(){
var name = $(this).val();
$.ajax({
url: "model/check.php",
method:"POST",
data:{uname:name},
dataType:"text",
success:function(html)
{
$('#availability').html(html);
}
});
});
});

$(function(){ 
  
  var dtToday = new Date();
   var month = dtToday.getMonth() + 1; 
   var day = dtToday.getDate(); 
   var year = dtToday.getFullYear(); 
   if(month < 10) month = '0' + month.toString(); 
   if(day < 10) day = '0' + day.toString(); 
   var maxDate = year + '-' + month + '-' + day; 
   $('#dob').attr('max', maxDate); });

    function validateform(){  
      var name=document.myform.name.value;
        
      }    
  

            function checkName() {
      if (document.getElementById("name").value == "") {
          document.getElementById("nameErr").innerHTML = "Name can't be blank";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "red";
      }
      else if(document.getElementById("name").value.length<2){
          document.getElementById("nameErr").innerHTML = "Name must contain at least 2 words.";
          document.getElementById("name").style.borderColor = "red";
          document.getElementById("nameErr").style.color = "red";
        
      }
      else{
          document.getElementById("nameErr").innerHTML = "";
          document.getElementById("nameErr").style.color = "red";
          document.getElementById("name").style.borderColor = "black";
      }      
        }


</script>
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
<?php include 'controller/Head1.php';?>

    <hr>
    <form method="post" action="<?php echo htmlspecialchars('controller/labcontroller.php');?>">
      
      <h1><span style="font-weight: bold;font-size: 25px;">LAB</span></h1>  <hr>
            
            Name:<input type="text" name="name" placeholder="Enter Your Name" id="name" onkeyup="showHint(this.value)" onkeyup="checkName()" onblur="checkName()">
            <span  id="availability" ></span>
            <span class="error" id="nameErr"> <?php if (!empty($_GET['nameErr'])) {echo $_GET['nameErr'];} ?> </span>
            <br><br>

            Address:<input type="text" name="address" placeholder="Enter your Address" id="address" onkeyup="checkAddress()" onblur="checkAddress()">
            <span class="error" id="addressErr"> <?php if (!empty($_GET['addressErr'])) {echo $_GET['addressErr'];} ?> </span>
            <br><br>

            Phone NO:<input type="number" name="phonenum" placeholder="Enter Your Phone number" id="phonenum" onkeyup="checkNumber()" onblur="checkNumber()">
            <span class="error" id="phonenumErr"> <?php if (!empty($_GET['phonenumErr'])) {echo $_GET['phonenumErr'];} ?></span>
            <br><br>

           <fieldset>
            <legend>Date Of Birth</legend>
            <input type="date" name="dob" id="dob" max="" onkeyup="checkDob()" onblur="checkDob()" >
            <span class="error" id="dobErr"> <?php if (!empty($_GET['dobErr'])) {echo $_GET['dobErr'];} ?> </span> 
            <br>
           </fieldset>
            <br>

            Password:<input type="Password" name="pass" placeholder="Enter Your Password" id="password" onkeyup="checkPass()" onblur="checkPass()">
            <span class="error" id="passwordErr"> <?php if (!empty($_GET['passErr'])) {echo $_GET['passErr'];} ?></span>
            <br><br>

           <fieldset>
            <legend>Gender</legend>
            Gender:
            <input type="radio" name="gender" value="male" id="gender" onkeyup="checkGender()" onblur="checkGender()">Male
            <input type="radio" name="gender" value="female" id="gender" onkeyup="checkGender()" onblur="checkGender()">Female
            <input type="radio" name="gender" value="other" id="gender" onkeyup="checkGender()" onblur="checkGender()">Other
            <span class="error" id="genderErr"> <?php if (!empty($_GET['genderErr'])) {echo $_GET['genderErr'];} ?></span>    
           </fieldset>
            <br>
            <hr>
            <br>
            
            <input type="submit" name = "create" value="Save">
            <input type="reset" name="reset" value="Reset">
       
    </form>
    <div><?php include 'controller/footer.php';?></div>
</div>
</body>

</html>