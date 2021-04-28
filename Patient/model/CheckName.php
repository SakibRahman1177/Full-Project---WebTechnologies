<?php
 
$conn = mysqli_connect("localhost","root","","patient");
 
$output = '';
$query = "SELECT * FROM patient_db WHERE name LIKE '%".$_GET["datas"]."%'";
$result = mysqli_query($conn, $query);
$output .= '<ul class="list-unstyled">';

 if(mysqli_num_rows($result)>0) {
    
   while($row= mysqli_fetch_array($result)){
	$output .= '<li style="list-style:none;">'. $row["name"].'</li>';
   } 
}
else{
   $output .= '<li>List Not Found</li>';
}
  $output .='</ul>';
  echo $output;
// return ['success'=>true,'message'=> $output];
?>