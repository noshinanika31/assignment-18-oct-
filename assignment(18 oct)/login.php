<?php
	session_start();
?>
<html>
	<head>
		<title>Login Validation </title>
	</head>
	<body>
	<form action='loginValidation.php' method='post'>
		<table align= "center">
			<tr>
				 <td>
				<fieldset>
					<legend> LOGIN </legend>
					User Name : 
					<input type="text" name="user_name"/><br>
					<br>
					Password  :
					<input type="password" name="password"/><br>
					<hr/>
					<input type = "checkbox"/> Remember Me<br>
					<br>
					<input type="submit" name = "loginSubmit" value="submit"/><br>
					<a href="forgotPass.php">Forgot Password?</a><br>
				</fieldset>
			   </td>
		   </tr>
		</table>
	<form>
	</body>
</html>
