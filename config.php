<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "my_parking";
	
	//create connection 
	$con = new mysqli($servername, $username, $password, $dbname);
	
	//check connection
	if($con->connect_error)
	{
		die("Database connection failed: " . $con->connect_error);
	}
	else 
	{
		echo "<script> alert('Connected Successfully!') </script>";
	}
	
?>