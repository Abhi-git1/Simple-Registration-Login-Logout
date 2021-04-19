<?php
session_start();

if(session_status() == PHP_SESSION_ACTIVE){
	// remove all session variables
	session_unset();
	// destroy the session
	session_destroy();
	
	
    header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    header("Location:index.html");
 }

?>