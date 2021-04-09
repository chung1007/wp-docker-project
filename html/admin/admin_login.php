<?php
	ob_start();
	require_once("../db_auth.php");
	setcookie('wp_admins_access', "false");
	$access = getLogin($_POST['login'], $_POST['password'], "wp_admins");
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: main.php");
	}
	else {
		header("Location: admin.php");
	}
?>
