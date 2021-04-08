<!DOCTYPE html>

<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="css/template.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<h2> Client Registration </h2><br>
		<form method="post" action="client_register.php">
			<h3> Login Information </h3>
			<hr><br>
			<p>Username:  <input type="text" name="login" size="15" maxlength="15"></p>
			<p>Password:  <input type="password" name="pass" size="15"></p><br>

			<h3> Client Information </h3>
			<hr><br>
			<p> First Name:  <input type="text" name="fname" size="20" maxlength="15" required></p>
			<p> Last Name:  <input type="text" name="lname" size="20" maxlength="15" required></p>
			<p> Email Adress:  <input type="text" name="email" size="25" maxlength="25" required></p>
			<p> Phone Number:  <input type="text" name="phone" size="15" maxlength="15" required></p>
			<p> Date of Birth:  <input type="text" name="dob" size="15" maxlength="15" placeholder="mm/dd/yyyy" required></p>
			<p> Street Adress:  <input type="text" name="address" size="25" maxlength="25" required></p>
			<p> Apartment/Suite:  <input type="text" name="apartnum" size="5" maxlength="5" required></p>
			<p> State:  <input type="text" name="state" size="2" maxlength="2"></p>
			<p> Zip Code:  <input type="text" name="zip" size="6" maxlength="6" required></p>
			<br><p><input type="submit" value="Register"></p>
		</form>
	</body>
</html>


