<!DOCTYPE html>
<?php
	ob_start();	
	echo "<script>console.log('reset cookie');</script>";
	setcookie("wp_admins_access", "false", time() + (86400*30), '/');
?>
<html>
	<head>
		<title>Login</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/yui.2.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<h2> Sign in as Admin</h2>
		<script> console.log('this is admin page') </script>
		<form method="post" action="admin_login.php" autocomplete="off" id="login">
			<label for="login">Username:</label><br> 
			<input type="text" name="login" size="15" maxlength="15" required><br><br>
			<label for="password">Password:</label><br> 
			<input type="password" name="password" size="15" required><br><br>
			<p><input type="submit" value="Sign in"> <input type="reset"></p>
		</form>
		<script>document.getElementById("login").reset();</script>
	</body>
</html>


