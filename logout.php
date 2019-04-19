<?php

session_start();
session_destroy();
echo "You have been logged out successfully ".$_SESSION['stud'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Logout</title>
</head>
<body>
	<br><br><br>
<a href="stulogin.php">Sign in</a> 
</body>
</html>