<?php

$conn = mysqli_connect("localhost","root","","student");

if(isset($_POST["uname"])) {
$query = "SELECT * FROM `lab_info` WHERE Name ='" . $_POST["uname"] . "'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0) {
echo "<span style='color:red;' class='status-not-available'>Name Exist! </span>";
}else{
echo "<span style='color:green;' class='status-available'></span>";
}
}
else if(isset($_POST["name"])) {
$query = "SELECT * FROM `user_info` WHERE Name ='" . $_POST["name"] . "'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0) {
echo "<span style='color:red;' class='status-not-available'>Name Exist! </span>";
}else{
echo "<span style='color:green;' class='status-available'></span>";
}
}
?>