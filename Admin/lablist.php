<?php  
require_once 'controller/labinfo.php';

$users = fetchAllusers();
?>
<!DOCTYPE html>
<html>
<head>
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
      h1{
      	font-weight: bold;
      	font-size: 25px;
      }
            table {
			
			margin: center;
            border-collapse: collapse;
            width: 100%;
            font-size: 20px;
}
		th, td{
            text-align: center;
            padding: 8px;
		}
		tr:nth-child(even) {background-color: silver;}
		th {
  background-color: black;
  color: white;
}
    </style>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("model/labsearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>

<div><?php include 'controller/Head.php';?></div>
<?php include 'controller/Head1.php';?>
 <form>
      <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search Lab..." />
        <div class="result"></div>
    </div>

    </form>


    <br>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      
      <h1>All Lab Information</h1><hr>
<table>
	<thead>
		<tr>
			<th>Name</th>
		<th>Address</th>
		<th>Phone Number</th>
		<th>Date of Birth</th>
		<th>Password</th>
		<th>Gender</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><a href="showlab.php?id=<?php echo $user['ID'] ?>"><?php echo $user['Name'] ?></a></td>
				<td><?php echo $user['Address'] ?></td>
		<td><?php echo $user['PhoneNumber'] ?></td>
		<td><?php echo $user['Birthday'] ?></td>
		<td><?php echo $user['Password'] ?></td>
		<td><?php echo $user['Gender'] ?></td>
<td><a href="editlab.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp
	<a href="controller/deletelab.php?id=<?php echo $user['ID'] ?>">Delete</a></td>
				
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</form>
<div><?php include 'controller/footer.php';?></div>
</body>
</html>