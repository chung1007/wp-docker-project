<?php
	echo "<script>console.log('admin search papge');</script>";
	if ($_COOKIE['wp_admins_access'] == "false") {
        echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Forbidden</h1></center>
<hr><center>Unauthorized Access</center>
</body>
</html>';
		#header("Location: admin.php");
		exit();
}else {
	$val = $_COOKIE['wp_admins_access'];
	echo "<script>console.log('access granted: $val');</script>";
}

?>
<html>
    <head>
        <title> Welcome </title>
    </head>
	<script type="text/javascript">
		function logout(){
			document.cookie = "wp_admins_access" + "=" + "false" + "; path=admin/";
			window.location = 'admin.php'
		}
	</script>
    <body>
        <center><h1> Administration Search Library </h1></center>
		<a href="javascript:logout();">Logout</a><br><br>
        <form method="post" action="client_query.php">
            <label for="cfname">Client first name:</label><br>
            <input type="text" id="cfname" name="cfname" required><br><br>
            <label for="clname">Client last name:</label><br>
            <input type="text" id="clname" name="clname" required><br><br>
            <label for="cdob">Client date of birth:</label><br>
            <input type="text" id="cdob" name="cdob" placeholder="mm/dd/yyy" required><br><br>
            <input type="submit" value="Search">
    </body>
</html>
