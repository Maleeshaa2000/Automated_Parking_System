<?php

	session_start();
	
?>
   
<!DOCTYPE html>
<html>
<head>
	<title>	Welcome </title>
</head>
<body>

<center>

<?php 

	echo "Welcome " . $_SESSION['username'] . " to uPark"; 
	echo "<a href = 'logout.php'>Log out</a>";
		
?>
		
</center>
</body>
</html>