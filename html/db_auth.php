<?php
	$myUserName = 'root';
	$myPassword = 'password';
	$myDBName = 'wordpress';
	$myHost = 'mysql';
	$db = new mysqli($myHost, $myUserName, $myPassword, $myDBName);
	if ($db->connect_error) {
		die('Cannot connect to the database: ' . $db->connect_error);
	}
	#$db = mysqli_init();
	#if (!$db) {
    #	die('mysqli_init failed');
	#}
	
	#if (!$db->real_connect($myHost, $myUserName, $myPassword, $myDBName)) {
	#	die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	#}

	echo 'Success! ' . $db->host_info . "\n";

	function getDB()
	{
		global $db;
		return $db;
	}

	function getLogin ($login, $password)
	{
		global $db;
		echo "<script>console.log('LOGIN: $login');</script>";
		echo "<script>console.log('PASSWORD: $password');</script>";
		#$result = $db->query("SELECT * FROM users WHERE password = '" . $password . "' and user = '" . $login . "'");
		#$db_query = $db->query("SELECT DATABASE()");
		#$row = $db_query->fetch_row();
		#$default = $row[0];
		#echo "<script>console.log('Default DB: $default');</script>";
		$result = mysqli_query("SELECT * FROM wp_users WHERE user_pass = MD5('$password') AND user_login = '$login'");
		echo "<script>console.log('HEREEEEE');</script>";
		#$result = $db->query($sql);
		echo "<script>console.log('RESULT: $result');</script>";
		if (!$result) {
			echo "<script>console.log('Login Unsuccessful.');</script>";
			$message  = "\nInvalid Login\n";
			echo "<script>console.log('$message');</script>";
		}
		else {
			echo "<script>console.log('Login Successful.');</script>";
			$row = array();
			$row = mysqli_fetch_array($result);
			if (!empty($row)) {
				return $row;
			}
		}
		mysqli_free_result($result);
		return false;
	}
?>
