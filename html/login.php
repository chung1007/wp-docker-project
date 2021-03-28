<?php
	echo "<script>console.log('flag0');</script>";
	require_once("db_auth.php");
	echo "<script>console.log('flag1');</script>";
	$access = getLogin($_POST['login'], $_POST['password']);
	echo "<script>console.log('flag2');</script>";
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: main.php");
	}
	else {
		echo "<script>console.log('flag3');</script>";
		header("Location: admin.php?error");
	}
?>
