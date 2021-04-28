<?php
require_once 'db_connect.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "student");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM `user_info` WHERE name LIKE ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array

                    echo "<br><table>";
echo "<tr>";

   echo  "<th>Name</th>";
   echo "<th>Address</th>";
   echo "<th>Phone Number</th>";
   echo "<th>Date of Birth</th>";
   echo "<th>Password</th>";
   echo "<th>Gender</th>";
   
echo "</tr>";
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

echo "<tr>";

                    echo "<td>" . $row["Name"] . "</td>";
                    echo "<td>" . $row["Address"] . "</td>";
                    echo "<td>" . $row["PhoneNumber"] . "</td>";
                    echo "<td>" . $row["Birthday"] . "</td>";
                    echo "<td>" . $row["Password"] . "</td>";
                    echo "<td>" . $row["Gender"] . "</td>";

echo "</tr>";



                  
                }
                echo "</table>";
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($link);
?>