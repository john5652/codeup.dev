<?php 
session_start();

if (!$_SESSION['Logged_In']) {
    header('Location: http://codeup.dev/codeup/php/login.php');
    exit();
}

 ?>
	
<!DOCTYPE html>
<html>
<head>
	<title>authorized</title>
</head>
<body>
	<h1>AUTHORIZED!</h1>
	<h3>Your username is <?= $_SESSION['Username'] ?> </h3>
	<a href="logout.php">Logout</a>
</body>
</html>
	

