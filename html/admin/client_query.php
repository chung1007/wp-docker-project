<?php
	ob_start();
	require_once("../db_auth.php");
	$access = client_search($_POST['cfname'], $_POST['clname'], 
						$_POST['cdob']);
	
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		header("Location: admin_search.php");
	}
	else {
		header("Location: admin.php");
	}
?>
