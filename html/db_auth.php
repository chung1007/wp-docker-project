<?php
	$myUserName = 'root';
	$myPassword = 'password';
	$myDBName = 'wordpress';
	$myHost = 'mysql';
	echo "<script>console.log('mysql init');</script>";
	$db = new mysqli($myHost, $myUserName, $myPassword, $myDBName);
	echo "<script>console.log('db connecting..');</script>";
	if ($db->connect_error) {
		die('Cannot connect to the database: ' . $db->connect_error);
	}
	echo "Connected successfully";

	function getDB()
	{
		global $db;
		return $db;
	}

	function getLogin ($login, $password)
	{
		echo "<script>console.log('getLogin called!');</script>";
		global $db;
		$result = mysql_query("SELECT id FROM users WHERE password = SHA1('" . $password . "') and login = '" . $login . "'");
		if (!result) {
			$message  = 'Invalid query: ' . mysql_error() . "\n";
			$message .= 'Whole query: ' . $query;
			die($message);
		}
		else {
			$row = array();
			$row = mysql_fetch_array($result);
			if (!empty($row)) {
				return $row;
			}
		}
		mysql_free_result($result);
		return false;
	}
?>
