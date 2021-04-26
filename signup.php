<?php

include "databaseConnect.php";
include "submit_function.php";

if(array_key_exists('submit',$_POST)){
	submit();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="stylesheet" href="css/signUp.css " type="text/css"> 
		
	</head>
<body>
<div class = "centerForm">
	<form action="" method = "POST" autocomplete="on">
		<br>
		<lable>Name : </lable>
		<input type="text" name="firstName" placeholder="First Name" value="<?php echo htmlspecialchars($_POST['firstName'] ?? '', ENT_QUOTES); ?>">
		<input type="text" name="lastName" placeholder="Last Name"value="<?php echo htmlspecialchars($_POST['lastName'] ?? '', ENT_QUOTES); ?>">
		
		<br><br>

		Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  

		<br><br>

		<label>Birthday : </label>
		<input type="date" name="birthday"value="<?php echo htmlspecialchars($_POST['birthday'] ?? '', ENT_QUOTES); ?>">
		<br><br>

		<label>Enter your email : </label>
		<input type="email" name="email">
		<br><br>

		<lable>Enter Password : </lable>
		<input type="password" name="password">
		<br><br>
		<lable>Re -enter Password : </lable>
		<input type="password" name="confirmPassword" >
		<br><br>

		<input type="submit" value="Signup " name="submit" class = "but">
		<p>
		<a href = "signin.php">Already as account ?</a>
	</form>
</div>
</body>
</html>





