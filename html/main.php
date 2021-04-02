<?php
	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	echo '
		<html>
			<head>
				<title> HELLO WORLD!</title>
			</head>
			<body>
				<center><h1>Welcome to the main page :)</h1></center>
			</body>
		</html>';
?>
