<!DOCTYPE html>
<html>
<head>
	<title>Payment Details</title>
</head>
<body>
<?php 
	
	require 'config.php';
	
	if(isset($_POST['paybttn']))
	{
		$option = $_POST['payment_method'];
		$cardnum = $_POST['cardnum'];
		$cvvcode = $_POST['cvvcode'];
		$expiredate = $_POST['expiredate'];
	
	}

	$query = "INSERT INTO payment_details (payment_method,cardnum,cvvcode,expiredate) 
	VALUES ('$option','$cardnum','$cvvcode','$expiredate')";
		
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
			<th>Payment ID</th> 
			<th>Payment Option</th> 
			<th>Card Number</th>
			<th>CVV Code</th>
			<th>Expire Date</th> 
		</tr>
 
<?php
       
    include_once("config.php");

	$query = "SELECT * FROM payment_details ORDER BY Payment_ID ASC";
	$result = mysqli_query($con, $query);

    if($result->num_rows > 0) 
	{
        while($row = $result->fetch_assoc()) 
		{
            echo "<tr>";
			echo "<td>".$row['Payment_ID']."</td>";
            echo "<td>".$row['payment_method']."</td>";
            echo "<td>".$row['cardnum']."</td>";
            echo "<td>".$row['cvvcode']."</td>";
            echo "<td>".$row['expiredate']."</td>";
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