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
		<link rel="stylesheet" type="text/css" href="client_template.css"/>
		<!-- <link rel="stylesheet" type="text/css" href="css/global.6.css" /> -->
	</head>
	<body class="client-home">
		<div class="header-div">
		<h2 class="vacc-header"> Vaccine Appointment Registration </h2><br>
		</div><br>
		<form method="post" action="client_appointment.php" autocomplete="off">
			<p><strong>First name:&emsp;</strong><input type="text" name="fname" size="15" maxlength="15" placeholder="First" required autocomplete="off"></p>
			<p><strong>Last name:&emsp;</strong><input type="password" name="lname" size="15" maxlength="15" placeholder="Last" required autocomplete="off"></p><br>

			<p><strong>SSN:&emsp;</strong><input type="text" name="ssn" size="15" maxlength="15" placeholder="Your SSN" required autocomplete="off"></p>
			<p><strong>Healthcare Provider:&emsp;</strong><input type="text" name="hc_provider" size="25" maxlength="25" placeholder="Your healthcare provider" required autocomplete="off"></p>
			<p><strong>Healthcare ID:&emsp;</strong><input type="text" name="hc_id" size="25" maxlength="25" placeholder="Your healthcare ID" required autocomplete="off"></p>
			<br><p><input type="submit" value="Register"></p>
		</form>
	</body>
</html>


