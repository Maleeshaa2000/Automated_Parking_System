<!DOCTYPE html>
<html>
<head>
    <title> Contacts </title>
</head>

<body>

<?php 
	
	require 'config.php';
	
	if(isset($_POST['submit']))
	{
		$passion = $_POST['passion'];
		$first_name = $_POST['firstName'];
		$last_name = $_POST['lastName'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$message = $_POST['message'];
	}

	$query = "INSERT INTO contacts(Passion, First_Name, Last_Name, Email, Mobile_No, Message) 
	VALUES('$passion', '$first_name', '$last_name', '$email', '$mobile', '$message')";
		
	if($con->query($query))
	{
		echo "<script> alert('Record inserted successfully!') </script>";
	}
	else
	{
		echo "ERROR: " . $con->error;
	}
	
	//header("Location:index.html");

 ?>

	<table width='85%' border = 1;>

		<tr>
			<th>Customer ID</th> 
			<th>Passion</th> 
			<th>First Name</th> 
			<th>Last Name</th> 
			<th>Email</th>
			<th>Mobile Number</th>
			<th>Message or Feedback</th>
		</tr>
 
<?php
       
    include_once("config.php");

	$query = "SELECT * FROM contacts ORDER BY Customer_ID ASC";
	$result = mysqli_query($con, $query);

    if($result->num_rows > 0) 
	{
        while($row = $result->fetch_assoc()) 
		{
            echo "<tr>";
			echo "<td>".$row['Customer_ID']."</td>";
            echo "<td>".$row['Passion']."</td>";
            echo "<td>".$row['First_Name']."</td>";
            echo "<td>".$row['Last_Name']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Mobile_No']."</td>";
			echo "<td>".$row['Message']."</td>";
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