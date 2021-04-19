<!DOCTYPE html>

<html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="../css/template.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body>
		<h2> Client Portal </h2><br>
		<form method="post" action="client_appointment.php" autocomplete="off">
			<h3> Vaccine Appoinment Registration </h3>
			<hr><br>
			<p>First name:  <input type="text" name="fname" size="15" maxlength="15" required autocomplete="off"></p>
			<p>Last name:  <input type="password" name="lname" size="15" maxlength="15" required autocomplete="off"></p><br>

			<p> SSN:  <input type="text" name="ssn" size="15" maxlength="15" required autocomplete="off"></p>
			<p> Healthcare Provider:  <input type="text" name="hc_provider" size="25" maxlength="25" required autocomplete="off"></p>
			<p> Healthcare ID:  <input type="text" name="hc_id" size="25" maxlength="25" required autocomplete="off"></p>
			<br><p><input type="submit" value="Register"></p>
		</form>
	</body>
</html>


