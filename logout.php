<?php

	session_start();
	session_destroy();
	
	if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		setcookie('username', $username, time() -1);
		setcookie('password', $password, time() -1);
	}
	
	echo "You successfully logout. Click here to <a href = 'login.php'>login again </a>";

?>