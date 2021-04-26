<?php
session_start();
if(session_status() == PHP_SESSION_ACTIVE){
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
	// echo "destroyed";
	session_start();
}

include "databaseConnect.php";
include "signCheck.php";

if(array_key_exists('submit',$_POST)){
	signIn();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>signIn</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/signIn.css " type="text/css"> 
	</head>
<body>

	<div class = "centerForm">
    <form action="" method="POST">
	<label for="email">Email : </label>
	<input type="email" name="email">
	<br><br>
	<label for="password">Password : </label>
	<input type="password" name="password">
	<br><br>
	<input type="submit" value="SignIn" name="submit" class = "but">
	<input type="button" value="Registration" onclick="location.href='signup.php';" class = "but">
	<br>
	<a href = "forgot.php">Forgot Passowrd?</a>	
	</form>
</div>


</body>
</html>


