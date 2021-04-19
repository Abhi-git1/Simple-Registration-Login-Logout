<?php

function signIn(){
    include 'databaseConnect.php';


$email = $_POST['email'] ??'';
$password =$_POST['password'] ??'';


if($email == "" and $password == ""){
	echo '<p>Enter Password and email to login</p>';
}else{
	if($email == ""){
		echo "Email is required";
	}
	if($password == ""){
		echo  "Password is required";
	}
}

if($email != "" and $password != ""){
	$query = " SELECT `id` FROM `users` WHERE `email` = '".mysqli_real_escape_string($link,$email)."' AND 
	`password` = '".mysqli_real_escape_string($link,md5($password))."' ";
	$result = mysqli_query($link,$query);
	$row = mysqli_num_rows($result);

	if($row == 1){
		
		$query = "SELECT `firstName`,`lastName`,`gender`,`birthday`,`email` FROM `users` 
				WHERE `email` = '".mysqli_real_escape_string($link,$email)."'
				ORDER BY `firstName` LIMIT 1  
				";
		$result = mysqli_query($link,$query);
		$row = mysqli_fetch_array($result);

		$_SESSION ['user'] = $_POST['email'];
		$_SESSION ['data'] = $row;
		header("Location:in.php");
		
	}else{
		echo "no";
	}


	
}
  
}

?>