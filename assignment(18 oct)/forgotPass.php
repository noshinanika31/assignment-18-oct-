<?php
	session_start();
?>
<html>
	<head>
		<title>Forgot Password </title>
	</head>
	<body>
	<form action='test.php' method='post'>
		<table align="center">
			<tr>
				 <td>
				<fieldset>
					<legend> Forgot Password </legend>
					Email: 
					<input type="text" name="user_name"/>
					<br><br>
					<input type="submit" name = "loginSubmit" value="submit"/>
				</fieldset>
			   </td>
		   </tr>
		</table>
	<form>
	</body>
</html>