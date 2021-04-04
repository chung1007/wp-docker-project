<?php
	ob_start();
	require_once("db_auth.php");
	$access = getLogin($_POST['login'], $_POST['password'], "wp_clients");
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: home.php");
	}
	else {
		header("Location: client.php");
	}
?>
