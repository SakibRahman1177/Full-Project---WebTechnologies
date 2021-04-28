<?php 

require_once 'controller/labinfo.php';
$user = fetchuser($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
$(function(){ 
  console.log('swarnab');
  var dtToday = new Date();
   var month = dtToday.getMonth() + 1; 
   var day = dtToday.getDate(); 
   var year = dtToday.getFullYear(); 
   if(month < 10) month = '0' + month.toString(); 
   if(day < 10) day = '0' + day.toString(); 
   var maxDate = year + '-' + month + '-' + day; 
   $('#dob').attr('max', maxDate); });
</script>
</head>
<body>
<!--
 <form action="controller/updatereciptionist.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="buyingprice">BuyingPrice:</label><br>
  <input value="<?php echo $product['BuyingPrice'] ?>" type="number" id="buyingprice" name="buyingprice"><br>
  <label for="sellingprice">SellingPrice:</label><br>
  <input value="<?php echo $product['SellingPrice'] ?>" type="number" id="sellingprice" name="sellingprice"><br>



  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="checkbox" name="display" value="Display">
  <label for="display">Display</label><br><br>
  <input type="submit" name = "updatereciptionist" value="Save">
</form> 
-->

<div><?php include 'controller/Head.php';?></div>
<?php include 'controller/Head1.php';?>
<!--
<?php
require_once 'model/model.php';
$flag=1;
$nameErr = $addressErr = $phonenumErr = $dobErr = $passErr= $genderErr = "";
$name = $address = $phonenum = $dob = $pass = $gender =  "";
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
  
if (empty($_POST["address"])) {
    $addressErr = "*Address is required";
    $flag=0;
  } else {
    $address = test_input($_POST["address"]);
  }


if (empty($_POST["phonenum"])) {
    $phonenumErr = "*Phone Number is required";
    $flag=0;
  } else {
    $phonenum = test_input($_POST["phonenum"]);
    if (!preg_match("/[0-9]/",$phonenum)) {
      $phonenumErr = "*Only numeric characters allowed";
      $phonenum ="";
      $flag=0;
    }
  }


  if (empty($_POST["dob"])) {
    $dobErr = "*Date of birth is required";
    $flag=0;
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["pass"])) {
    $passErr = "*Password is required";
    $flag=0;
  } else {
    $pass = test_input($_POST["pass"]);
    if (strlen($pass)<4) {
      $passErr = "*Password must be 8 charecters";
      $pass ="";
      $flag=0;
    }
    else if (!preg_match("/[@,#,$,%]/",$pass)) {
      $passErr = "*Password must contain at least one of the special characters (@, #, $,%)";
      $pass ="";
      $flag=0;
    }
  }


  if (empty($_POST["gender"])) {
    $genderErr = "*Select gender";
    $flag=0;
  } else {
    $gender = test_input($_POST["gender"]);
  }
/*
if ($flag==1) {
if (isset($_POST['create'])) {
  $data['name'] = $_POST['name'];
  $data['address'] = $_POST['address'];
  $data['phonenum'] = $_POST['phonenum'];
  $data['dob'] = $_POST['dob'];
  $data['gender'] = $_POST['gender'];
  $data['pass'] = $_POST['pass'];

  if (addlab($data)) {
    echo 'Successfully added!!';
  }
  
} else {
  echo 'You are not allowed to access this page.';
}
}
*/

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
-->

    <form action="controller/updatelab.php" method="POST" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <h1><span style="font-weight: bold;font-size: 25px;">Edit Profile</span></h1>  <hr>
            
            <label for="name">Name:</label><input value="<?php echo $user['Name'] ?>" type="text" name="name" placeholder="Enter Your Name" id="username" onkeyup="checkName()" onblur="checkName()" required>
            <span class="error" id="usernameErr"> <?php echo $nameErr;?></span>
            <br><br>

            <label for="address">Address:</label><input value="<?php echo $user['Address'] ?>" type="text"  name="address" placeholder="Enter your Address" id="address" onkeyup="checkAddress()" onblur="checkAddress()" required>
            <span class="error" id="addressErr"> <?php echo $addressErr;?></span>
            <br><br>

            <label for="phonenum">Phone NO:</label><input value="<?php echo $user['PhoneNumber'] ?>" type="number"  name="phonenum" placeholder="Enter Your Phone number" id="phonenum" onkeyup="checkNumber()" onblur="checkNumber()" required>
            <span class="error" id="phonenumErr"> <?php echo $phonenumErr;?></span>
            <br><br>

           <fieldset>
            <legend><label for="dob">Date Of Birth</label></legend>
            <input value="<?php echo $user['Birthday'] ?>" type="date"  name="dob" id="dob" max="" onkeyup="checkDob()" onblur="checkDob()" required>
            <span class="error" id="dobErr"> <?php echo $dobErr;?></span>
            <br>
           </fieldset>
            <br>
<!--
            Password:<input value="<?php echo $user['Password'] ?>" type="Password" id="pass" name="pass" placeholder="Enter Your Password">
            <span class="error"> <?php echo $passErr;?></span>
            <br><br>

           <fieldset>
            <legend>Gender</legend>
            Gender:
            <input value="<?php echo $user['Gender'] ?>" type="radio" id="gender" name="gender" value="male">Male
            <input value="<?php echo $user['Gender'] ?>" type="radio" id="gender" name="gender" value="female">Female
            <input value="<?php echo $user['Gender'] ?>" type="radio" id="gender" name="gender" value="other">Other
            <span class="error"> <?php echo $genderErr;?></span>    
           </fieldset>
            <br>-->
            <hr>
            <br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name = "updatelab" value="Save">
            <input type="reset" name="reset" value="Reset">
       
    </form>

<div><?php include 'controller/footer.php';?></div>
</div>
</body>
</html>

