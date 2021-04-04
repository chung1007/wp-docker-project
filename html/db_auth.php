<?php
	$myUserName = 'root';
	$myPassword = 'password';
	$myDBName = 'wordpress';
	$myHost = 'mysql';
	$db = new mysqli($myHost, $myUserName, $myPassword, $myDBName);
	if ($db->connect_error) {
		die('Cannot connect to the database: ' . $db->connect_error);
	}
	echo "<script>console.log('DB Connection successful.');</script>";

	function getDB()
	{
		global $db;
		return $db;
	}

	function getLogin ($login, $password, $table)
	{
		global $db;
		echo "<script>console.log('LOGIN: $login');</script>";
		echo "<script>console.log('PASSWORD: $password');</script>";
		
		$db_query = $db->query("SELECT DATABASE()");
		$row = $db_query->fetch_row();
		$default = $row[0];
		echo "<script>console.log('Default DB: $default');</script>";
		
		$result = $db->query("SELECT * FROM $table WHERE user_login = '$login' AND user_pass = MD5('$password')");
		if ($result){
			$row = $result->fetch_array(MYSQLI_NUM);
			if($row[1] && $row[2]){
				echo "<script>console.log('Login success');</script>";
				return true;
			}
		}
		return false;
	}
?>
