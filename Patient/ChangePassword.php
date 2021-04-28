<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style4.css">
    <script src="js/jquery.js"></script> 
<style >
.error {color: #FF0000;}
body{
  background-image: url('Sources/web.jpg');
      background-repeat: no-repeat;
      background-size: 1640px 880px;
}
.form{
  width:400px;
  height:490px;
  background:#e6e6e6;
  border-radius:8px;
  box-shadow:0 0 40px -10px #000;
  margin:calc(50vh - 300px) auto;
  padding:20px 30px;
  max-width:calc(100vw - 40px);
  box-sizing:border-box;
  font-family:'Montserrat',sans-serif;
  position:relative;
} 
h2{
  width: 340px;
  float: left;
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

</style>
    <meta charset="utf-8">
    <title>Change Password</title>
  </head>
  <body>
    <div class="topnav">
  <a style="float: left;font-style: italic;font-size: 20px;">Covid-19 Test</a>

  <div style="float: right;">
  <a class="active" href="Dashboard.php">Dashboard</a>
  <a href="Profile.php">Profile</a>
  <a href="ApplyForm.php">Apply</a>
  <a href="Report.php">Report</a></div>
</div><br>
 <div><?php include 'Sources/AccountDesign.php';?></div>
    
    <form class="form" method="post" action="controller/ChangePasswordController.php">
      <h2>Change Password</h2><br><br>
        Current Password: <input type="text" id="password" name="cpassword" >
        <span class="error" id="cpasswordErr"><?php if(!empty($_GET['cpasswordErr'])){echo $_GET['cpasswordErr'];}?></span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="npassword" id="password" >
        <span class="error" id="npasswordErr"><?php if(!empty($_GET['npasswordErr'])){echo $_GET['npasswordErr'];}?></span>
        <br><br>
        <span style="color:#1E90FF">Retype New Password:</span>
        <input type="text" name="rnpassword" id="password" >
        <span class="error" id="npasswordErr"><?php if(!empty($_GET['rnpasswordErr'])){echo $_GET['rnpasswordErr'];}?></span>
        <br><br>
        <input class="button" type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    
  </body>
</html>