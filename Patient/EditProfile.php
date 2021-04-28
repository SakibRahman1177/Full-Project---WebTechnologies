<?php 
session_start();
require_once ('controller/ViewProfileController.php');
$data = fetchPatient($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $patient):

       $name= $patient['name'] ;
       $email=$patient['email'];
       $dob=$patient['dateofbirth'];
       $address= $patient['address'] ;
  endforeach;
}
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/style.css">
	<title>Edit Profile</title>
  <script src="js/jquery.js" type="text/javascript">
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  
  <script>
  $(document).ready(function(){
    $('#search').on('click', 'ul.list-unstyled li', function(){
          var y = $(this).text();
          $('#name').val(y);
    });
$('#name').keyup(function(){
      var datas = $('#name').val();
            $.ajax({
                method: 'GET',
                url: "model/CheckName.php",
                data: {datas:datas},
                dataType: 'text',
                success: function (res) {
                   $('#search').html(res);
                    $("#search").fadeToggle();

                }

            })
            
          });

        });

</script>
  <style>
.error {color: #FF0000;}
.alignment{
  text-align: center;
  margin-top: 20px;
}
.input{
  border: 5px;
  border-style: solid;
  border-color: black;
  padding: 1em;
  margin-left: 250px;
  margin-right: 250px;
  margin-top: 20px;
  font-size: 18px;
}

</style>
</head>
<body>

<div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>

  <div style="float: right;">
  <a href="Dashboard.php">Dashboard</a>
  <a class="active" href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><html>

 <div><?php include 'Sources/AccountDesign.php';?></div>


<form method="post" action="<?php echo htmlspecialchars('controller/EditProfileController.php');?>" autocomplete="off">
  <div class="alignment">
<h1>Edit Profile:</h1>
<div class="input"><br>
  Name: 
  
  <input value="<?php echo $name ?>" type="text" name="name" id="name" onkeyup="checkName()" onblur="checkName()" >
 
 <span class="error" id="nameErr"> <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <div id="search"></div>
  <br><hr>


  E-mail: <input value="<?php echo $email ?>" type="text" name="email" id="email" size="25" onkeyup="checkEmail()" onblur="checkEmail()" onkeyup="checkemail();">
  <span class="error" id="emailErr"><?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];}?></span>
  <br><hr><br>


  Date Of Birth:
  <input value="<?php echo $dob ?>" type="date" name="dateofbirth" id="birthday" max="2021-04-25" onkeyup="checkDOB()" onblur="checkDOB()">
  <span class="error" id="birthdayErr"><?php if(!empty($_GET['dobErr'])){echo $_GET['dobErr'];}?></span>
  <br><hr><br>


  Address:
  <input value="<?php echo $address ?>" type="text" name="address" id="address"  size="35" onkeyup="checkAddress()" onblur="checkAddress()">
  <span class="error" id="addressErr"><?php if(!empty($_GET['addressErr'])){echo $_GET['addressErr'];}?></span>
  <br><br><hr>

  <input type="submit" name="submit" value="Submit"> <input type="reset" value="Reset"><br><br>

</div></div></form>

<div><?php include 'Sources/footer.php';?></div>
</body>
</html>
