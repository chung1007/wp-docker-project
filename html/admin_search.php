<?php
	echo "<script>console.log('admin search papge');</script>";
	if ($_COOKIE['wp_admins_access'] === "false") {
        echo '
<html>
<head><title>404 Not Found</title></head>
<body bgcolor="white">
<center><h1>404 Forbidden</h1></center>
<hr><center>Unauthorized Access</center>
</body>
</html>';
		header("Location: admin.php");
		exit();
}?>
<html>
    <head>
        <title> Welcome </title>
    </head>
	<script type="text/javascript">
		function logout(){
			document.cookie = "wp_admins_access" + "=" + "false" + "; path=/";
			window.location = '/admin.php'
		}
	</script>
    <body>
        <center><h1> Administration Search Library </h1></center>
		<a href="javascript:logout();">Logout</a><br><br>
        <form action="main.php">
            <label for="fname">Client first name:</label><br>
            <input type="text" id="fname" name="fname" required><br><br>
            <label for="lname">Client last name:</label><br>
            <input type="text" id="lname" name="lname" required><br><br>
            <label for="bdate">Client date of birth:</label><br>
            <input type="date" id="bdate" name="bdate" required><br><br>
            <input type="submit" value="Search">
    </body>
</html>
