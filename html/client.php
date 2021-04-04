<!DOCTYPE html>

<html>
	<head>
		<title>Login</title>
		<!-- <link rel="stylesheet" type="text/css" href="css/yui.2.css" /> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<h2> Sign in as Client </h2>
		<form method="post" action="client_login.php">
			<label for="login">Username:</label><br> 
			<input type="text" name="login" size="15" maxlength="15" required><br><br>
			<label for="password">Password:</label><br> 
			<input type="password" name="password" size="15" required><br><br>
			<p><input type="submit" value="Sign in"> <input type="reset"></p>
		</form>
	</body>
</html>


