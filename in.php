<?php
    session_start();
    if($_SESSION['user'] == false)
    {
        header("location: signin.php");
    }
   // echo $_SESSION ['user'];
    //echo "<p>  </p>  ";
    $userData = $_SESSION['data'];
  
?>

<html>
    <head>
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/in.css " type="text/css">
    </head>
<body>
    <a href = "logout.php">logout</a>  
   

    <div class = "displayProfile" id="disprofile">
    <p>Name  : <?php echo $userData['firstName']; echo " ".$userData['lastName']." "; ?></p>
    <p>Email : <?php echo $userData['email']; ?></p>
    <p>Gender : <?php echo $userData['gender']; ?></p>
    <p>Birthday : <?php echo $userData['birthday']; ?></p>
    <button class = "buttprofile" onclick = "profile()">Close</button>
    </div>

<script src="js/in.js"></script>
    
</body>
</body>
</html>