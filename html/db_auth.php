<?php
	$myUserName = 'root';
	$myPassword = 'password';
	$myDBName = 'wordpress';
	$myHost = 'mysql';
	$db = new mysqli($myHost, $myUserName, $myPassword, $myDBName);
	if ($db->connect_error) {
		die('Cannot connect to the database: ' . $db->connect_error);
	}
	echo "<script>console.log('Connected successfully');</script>";

	function getDB()
	{
		global $db;
		return $db;
	}

	function getLogin ($login, $password)
	{
		global $db;
		$result = $db->query("SELECT id FROM users WHERE password = SHA1('" . $password . "') and login = '" . $login . "'");
		if (!$result) {
			echo "<script>console.log('Login Unsuccessful.');</script>";
			$message  = "Invalid Login\n";
			echo $message;
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
