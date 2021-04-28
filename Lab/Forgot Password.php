<!DOCTYPE html>
<html>
<head>
<title>Lab Task4</title>
</head>
<body>
 <?php?>
 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<form action="/action_page.php">
<fieldset>
 <legend><b>FORGET PASSWORD</b></legend>
 <b>Enter Email:</b>
 <label for="email"></label>
 <input type="email" id="email" name="email"> <br><hr>
 <b>New Password:</b>
 <label for="New Password"></label>
 <input type="New Password" id="New Password" name="New Password"> <br><hr>
 <b>Confirm Password:</b>
<label for="Confirm Password"></label>
 <input type="Confirm Password" id="Confirm Password" name="Confirm Password"> <br><hr>
 <input type="submit" name="submit" value="Submit"><br>
</fieldset>
<?php?>
</body>
</html> 
