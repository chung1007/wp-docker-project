<?php

	session_start();
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if (!isset($_COOKIE['lg'])) {
	   setcookie('lg', 'false');
	   $_COOKIE['lg'] = 'false';
	   echo '
	<html>
		<head>
			<title> HELLO WORLD!</title>
		</head>
		<body>
			<center><h1>Vintage watches rock!</h1></center>
		</body>
	</html>';}
?>
