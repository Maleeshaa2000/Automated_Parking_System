<?php
	
	

		if(isset($_POST['login']))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			if($username ==   and $password == )
			{
				if(isset($_POST['remember'])
				{
					setcookie('username', $username, time() + (60 * 60 * 7));
					setcookie('password', $password, time() + (60 * 60 * 7));
				}
				
				session_start();
				$_SESSION['username'] = $username;
				header("location: welcome.php");
			}
			else 
			{
				echo "Username or Password is Invalid.<br> Click here to <a href = 'login.php'>try again </a>";
			}
		}
		else
		{
			header("location: index.html");
		}
?>		