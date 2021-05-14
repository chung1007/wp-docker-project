<?php
	session_start();
	ob_start();
	echo "<script>console.log('main.php');</script>";
	if ($_SESSION['login'] == null)
	{
		header("Location: client.php");
		exit;
	}
	if ($_COOKIE['wp_clients_access'] === "granted") {
		header("Location: home.php");
	}
	else {
		echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Forbidden</h1></center>
<hr><center>Unauthorized Access</center>
</body>
</html>';}
?>

