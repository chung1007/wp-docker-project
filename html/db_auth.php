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
	
	function register($login, $pass, $fname, $lname, $email, 
						$phone, $dob, $address, $state, $apartnum, $zip)
	{
		global $db;
		$sql = "INSERT INTO wp_clients (user_login, user_pass, fname, lname, user_email, user_phone, 
										user_dob, user_address, user_state, user_apartnum, user_zip, vacc_time, vacc_provider) 
										VALUES ('$login', MD5('$pass'), '$fname', '$lname', '$email', '$phone', 
											'$dob', '$address', '$state', '$apartnum', '$zip', '', '')";
		if ($db->query($sql)) {
			echo "<script>console.log('New client registered successfully');</script>";
			closeDB();
			return true;
		} else {
			echo "<script>console.log('could not register user');</script>";
			die(mysqli_error());
			closeDB();
			return false;
		}
	}

	function closeDB()
	{
		global $db;
		$db->close();
	}

	function getLogin ($login, $password, $table)
	{
		global $db;
		
		$db_query = $db->query("SELECT DATABASE()");
		$row = $db_query->fetch_row();
		$default = $row[0];
		echo "<script>console.log('Default DB: $default');</script>";
		
		$result = $db->query("SELECT * FROM $table WHERE user_login = '$login' AND user_pass = MD5('$password')");
		if ($result){
			$row = $result->fetch_array(MYSQLI_NUM);
			if($row[1] && $row[2]){
				echo "<script>console.log('Login success');</script>";
				setcookie($table. '_access', "granted", time()+120);
				closeDB();
				return true;
			}
		}
		closeDB();
		echo "<script>console.log('Login unsuccessful');</script>";
		return false;
	}
?>
