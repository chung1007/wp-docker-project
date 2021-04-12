<?php
	session_start();
	ob_start();
	echo "<script>console.log('main.php');</script>";
	if ($_SESSION['login'] == null)
	{
		header("Location: admin.php");
		exit;
	}
	if ($_COOKIE['wp_admins_access'] === "granted") {
		header("Location: admin_search.php");
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

