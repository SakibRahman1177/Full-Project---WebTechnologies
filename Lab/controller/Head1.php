<?php 

if (empty($_SESSION['username'])) {
    header("location:Login.php");
    
}

else{
    echo "<div style='float: right';>"." Logged in as ".$_SESSION['username']." | ";
    echo "<a href='Tester.php'>Dashboard</a> | " ;
    echo "<a href='Sources/Logout.php'>Logout</a>" ;
    echo "</div><br><hr>";
   
}

 ?>