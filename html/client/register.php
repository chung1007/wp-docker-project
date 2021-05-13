<!DOCTYPE html>

<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" type="text/css" href="client_template.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<br>
		<h2 class="reg-header"> Register</h2><br>
		<div class="reg_container">
			<form method="post" action="client_register.php" autocomplete="off">
				<!-- <h3> Login Information </h3>
				<hr><br> -->
				<p><strong>Username:&emsp;</strong><input type="text" name="login" size="15" maxlength="15" placeholder="Choose your username"></p>
				<p><strong>Password:&emsp;</strong><input type="password" name="pass" size="15" placeholder="Choose your password"></p><br>

				<!--<h3> Client Information </h3>
				<hr><br>-->
				<p><strong>First Name:&emsp;</strong><input type="text" name="fname" size="20" maxlength="15" placeholder="Enter your first name" required></p>
				<p><strong>Last Name:&emsp;</strong><input type="text" name="lname" size="20" maxlength="15" placeholder="Enter your last name" required></p>
				<p><strong>Email Adress:&emsp;</strong><input type="text" name="email" size="25" maxlength="25" placeholder="Enter your email" required></p>
				<p><strong>Phone Number:&emsp;</strong><input type="text" name="phone" size="15" maxlength="15" placeholder="Enter your phone number" required></p>
				<p><strong>Date of Birth:&emsp;</strong><input type="text" name="dob" size="15" maxlength="15" placeholder="mm/dd/yyyy" required></p>
				<p><strong>Street Adress:&emsp;</strong><input type="text" name="address" size="25" maxlength="25" placeholder="Enter your address" required></p>
				<p><strong>Apartment/Suite:&emsp;</strong><input type="text" name="apartnum" size="5" maxlength="5"></p>
				<p><strong>State:&emsp;</strong><input type="text" name="state" size="2" maxlength="2"></p>
				<p><strong>Zip Code:&emsp;</strong><input type="text" name="zip" size="6" maxlength="6" required></p>
				<br><p><input type="submit" value="Register"></p>
			</form>
		</div>
	</body>
</html>


