<!DOCTYPE html>
<html>
	<head> 
	<title>Sign Up</title>
	</head>
	
	<body>
	
<?php
		require 'config.php';
		
		if(isset($_POST['SUBMIT']))
		{
			$username = $_POST['username'];
			$Email = $_POST['Email'];
			$password = $_POST['password'];
			$RePassword = $_POST['repassword'];
		}
		
		$sql = "INSERT INTO sign_up_users(UserName, Email, Password, ReEnter_Password)
		VALUES('$username', '$Email', '$password', '$RePassword')";
		
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
			<th>User ID</th>
			<th>User Name</th>
			<th>Email</th>
			<th>Password</th>
			<th>Re-Enter Password</th>
		</tr>

<?php

		include_once("config.php");

		$query = "SELECT * FROM sign_up_users ORDER BY User_ID ASC";
		$result = mysqli_query($con, $query);

		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				echo "<tr>";
				echo "<td>".$row['User_ID']."</td>";
				echo "<td>".$row['UserName']."</td>";
				echo "<td>".$row['Email']."</td>";
				echo "<td>".$row['Password']."</td>";
				echo "<td>".$row['ReEnter_Password']."</td>";
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