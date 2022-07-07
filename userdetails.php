<!DOCTYPE html>
<html>
<head>
	<title>User Details</title>
</head>
<body>
<?php 
	
	require 'config.php';
	
	if(isset($_POST['Save_and_Continue']))
	{
		$mobilenum = $_POST['mobilenum'];
		$platenum = $_POST['platenum'];
	
	}

	$query = "INSERT INTO personal_details (mobilenum,platenum) VALUES ('$mobilenum','$platenum')";
		
	if($con->query($query))
	{
		echo "<script> alert('Record inserted successfully!') </script>";
	}
	else
	{
		echo "ERROR: " . $con->error;
	}
	
?>

	<table width='85%' border = 1;>

		<tr>
			<th>Personal ID</th> 
			<th>Mobile Number</th> 
			<th>Plate Number</th> 
		</tr>
 
<?php
       
    include_once("config.php");

	$query = "SELECT * FROM personal_details ORDER BY Personal_ID ASC";
	$result = mysqli_query($con, $query);

    if($result->num_rows > 0) 
	{
        while($row = $result->fetch_assoc()) 
		{
            echo "<tr>";
			echo "<td>".$row['Personal_ID']."</td>";
            echo "<td>".$row['mobilenum']."</td>";
            echo "<td>".$row['platenum']."</td>";
            echo "</tr>";
        }
    }
	else 
	{
		echo "<script> alert('No Records...') </script>";
	}
	
	$con->close();

?>

	</table>
</body>
</html>