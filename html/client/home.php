<?php
    ob_start();
    echo "<script>console.log('Vaccine Appt. Registration');</script>";
    if (!$_COOKIE['wp_clients_access'] || $_COOKIE['wp_clients_access'] == "false") {
        echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Forbidden</h1></center>
<hr><center>Unauthorized Access</center>
</body>
</html>';
        exit();
}
?>
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
			<p>First name:  <input type="text" name="fname" size="15" maxlength="15" placeholder="First" required autocomplete="off"></p>
			<p>Last name:  <input type="password" name="lname" size="15" maxlength="15" placeholder="Last" required autocomplete="off"></p><br>

			<p> SSN:  <input type="text" name="ssn" size="15" maxlength="15" placeholder="Your SSN" required autocomplete="off"></p>
			<p> Healthcare Provider:  <input type="text" name="hc_provider" size="25" maxlength="25" placeholder="Your healthcare provider" required autocomplete="off"></p>
			<p> Healthcare ID:  <input type="text" name="hc_id" size="25" maxlength="25" placeholder="Your healthcare ID" required autocomplete="off"></p>
			<br><p><input type="submit" value="Register"></p>
		</form>
	</body>
</html>


