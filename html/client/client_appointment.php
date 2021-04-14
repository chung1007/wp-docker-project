<?php
	ob_start();
	require_once("../db_auth.php");
	$access = client_appointment($_POST['fname'], $_POST['lname'], 
						$_POST['ssn'], $_POST['hc_provider'],
						$_POST['hc_id']);
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: register_complete.php");
		#header("refresh:5; url=register_complete.php");
	}
	else {
		#header("refresh:5; url=home.php");
		header("Location: home.php");
	}
?>
