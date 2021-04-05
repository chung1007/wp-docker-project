<?php
	ob_start();
	require_once("db_auth.php");
	echo "yoooo";
	$access = register($_POST['login'], $_POST['pass'], 
						$_POST['fname'], $_POST['lname'],
						$_POST['email'], $_POST['phone'],
						$_POST['dob'], $_POST['address'],
						$_POST['apartnum'], $_POST['state'],
						$_POST['zip']);
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: register_complete.php");
	}
	else {
		header("Location: register.php");
	}
?>
