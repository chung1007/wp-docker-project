<?php
	ob_start();
	require_once("../db_auth.php");
	$access = client_search($_POST['cfname'], $_POST['clname'], 
						$_POST['cdob']);
	
	if ($access != false)
	{
		session_start();
		$_SESSION['login'] = $access;
		#echo "RESULT: $access[11], $access[12]";
		#header("refresh:5; url=admin_search.php");
		#$result = 'Vaccination Time: '.$access[11].', Provider: '.$access[12];
		foreach($access as $item){
			print_r($item);
			#echo '<br/>';
		}
	}
	else {
		header("Location: admin_search.php");
	}
?>
