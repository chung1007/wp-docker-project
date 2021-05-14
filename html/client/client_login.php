<?php
	ob_start();
	require_once("../db_auth.php");
	setcookie('wp_clients_access', "false");
	$access = getLogin($_POST['login'], $_POST['password'], "wp_clients");
	echo "<script>console.log('access: $access');</script>";	
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: home.php");
	}
	else {
		header("Location: client.php");
		#header("refresh:30;url=client.php");
	}
?>
