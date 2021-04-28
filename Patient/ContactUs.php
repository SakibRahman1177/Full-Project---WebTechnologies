<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style4.css">
  <style type="text/css">
    .error{
      color: #FF0000;
    }
    th.top{
      background-image: url('Sources/web.jpg');
      background-repeat: no-repeat;
      background-size: 1550px 880px;
    }
      .button{
  float:right;
  padding:3px 8px;
  margin:5px 0 0;
  font-family:'Montserrat',sans-serif;
  border:2px solid #78788c;
  background:0;
  color:#5a5a6e;
  cursor:pointer;
  transition:all .3s
}
.button:hover{
  background:#78788c;
  color:#fff
}
.form{
  height: 500px;
}
span{
  font-size: 12px;
}
  p{
    float: left;
    font-size: 15px;
    color: grey;
  }  
  </style>
</head>
<body>
    <?php
    $flag=1;
    $nameErr = $emailErr = $msgErr = $name = $email = $msg = "";
    $message = $error = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
    } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) {
    $nameErr = "Only letters white space, period & dash allowed";
    $name ="";
    $flag=0;
    }
    else if (str_word_count($name)<2) {
    $nameErr = "At least two words needed";
    $name ="";
    $flag=0;
    }
    }
    
    if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
    } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid Email Format";
    $email ="";
    $flag=0;
    }
    }
    if (empty($_POST["msg"])) {
    $msgErr = "Message is required";
    $flag=0;
    } else {
    $msg = test_input($_POST["msg"]);
    }
    }
    if ($flag==1) {
      if(isset($_POST["submit"]))
    {
      if(file_exists('Contact.json'))
        {
          $current_data = file_get_contents('Contact.json');
    $array_data = json_decode($current_data, true);
    $extra = array(
    'name'               =>     $_POST['name'],
    'email'          =>     $_POST["email"],
    'msg'          =>     $_POST["msg"]
    );
    $array_data[] = $extra;
    $final_data = json_encode($array_data);
    if(file_put_contents('Contact.json', $final_data))
    {
  echo "<script>alert('Thanks for Contacting Us!')</script>";
  header('location:Dashboard.php');
  }
  }
  else
  {
  echo '<script>alert("JSON File not exits")</script>';
  header('location:Dashboard.php');
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
  <table>
    <th class="top">
<form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h2>CONTACT US</h2>
  <p>Name:</p> <input type="text" name="name" placeholder="Write your name here..">
  <span class="error"><?php echo $nameErr;?></span><br>
  <p>Email:</p><input type="text" name="email" placeholder="Let us know how to contact you back..">
  <span class="error"><?php echo $emailErr;?></span><br>
  <p>Message:</p><input type="text" name="msg" placeholder="What would you like to tell us..">
  <span class="error"><?php echo $msgErr;?></span>
  <input class="button" type="submit" name="submit" value="Send">

</form>

</th></table>
</div>
</body>
</html>