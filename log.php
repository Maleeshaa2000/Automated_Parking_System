<!DOCTYPE html>
<html>
	<head> 
	<title> Log in </title>
	</head>
	
	<body>
<?php 
	require 'config.php';
	
	if(isset($_POST['SUBMIT']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$remember = $_POST['remember'];
		}
	$sql = "INSERT INTO login_users(UserName, Password, Remember)
	VALUES('$username','$password','$remember')";
	
	if($con->)sql($sql)
		{
			echo"<script> alert('Record inserted successfully!')</script>";
		}
		else
		{
			echo "ERROR: ".$con->error;
		}
?>
<table width='85%' border = 1;>
		<tr>
			<th>User_ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Remember</th>
		</tr>

<?php

		include_once("config.php");

		$query = "SELECT * FROM login_users ORDER BY UserID ASC";
		$result = mysqli_query($con, $query);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row['UserID']."</td>";
				echo "<td>".$row['UserName']."</td>";
				echo "<td>".$row['Password']."</td>";
				echo "<td>".$row['Remember']."</td>";
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