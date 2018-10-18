<?php
	session_start();
	if(isset($_POST["loginSubmit"]) && isset($_SESSION["user_name"]))
	{
		if(($_POST["user_name"] == $_SESSION["user_name"]) && ($_POST["password"] == $_SESSION['password']))
		{
			header("Location:homepage.php");
		}
		else
		{
			echo "invalid login request";
		}
	}
	else
	{
		echo "invalid login request";
	}
?>