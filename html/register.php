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
			<p>Username:  <input type="text" name="login" size="15" maxlength="15" required></p>
			<p>Password:  <input type="password" name="pass" size="15" required></p><br>

			<h3> Client Information </h3>
			<hr><br>
			<p> First Name:  <input type="text" name="fname" size="20" maxlength="15" required></p>
			<p> Last Name:  <input type="text" name="lname" size="20" maxlength="15" required></p>
			<p> Email Adress:  <input type="text" name="email" size="25" maxlength="25" required></p>
			<p> Phone Number:  <input type="tel" name="phone" size="15" maxlength="15" required></p>
			<p> Date of Birth:  <input type="date" name="dob" size="15" maxlength="15" required></p>
			<p> Street Adress:  <input type="text" name="address" size="30" maxlength="30" required></p>
			<p> Apartment/Suite:  <input type="number" name="apartnum" size="5" maxlength="5" required></p>
			<p> State:  <input type="text" name="state" size="2" maxlength="2" required></p>
			<p> Zip Code:  <input type="number" name="zip" size="15" maxlength="15" required></p>
			<br><p><input type="submit" value="Register"></p>
		</form>
	</body>
</html>


