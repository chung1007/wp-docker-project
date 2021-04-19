<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/yui.2.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<h2> Sign in as Client </h2>
		<script>console.log('client login page')</script>
		<form method="post" action="client_login.php" autocomplete="off">
			<label for="login">Username:</label><br> 
			<input type="text" name="login" size="15" maxlength="15" required><br><br>
			<label for="password">Password:</label><br> 
			<input type="password" name="password" size="15" required autocomplete="new-password"><br><br>
			<p><input type="submit" value="Sign in"> <a href="register.php">Create Account</a>
		</form>
	</body>
</html>


