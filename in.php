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
    <link rel="stylesheet" href="css/in.css " type="text/css">
    </head>
<body>
    
    <div class="titleName"><p>Hi <?php echo $userData['firstName']?></p>
    <div class="dropdown">
    <button class="dropbtn">Account</button>
    <div class="dropdown-content">
        <a href="#" onclick = "profile()"> Profile</a>
        <a href="logout.php">Logout</a>
        <a href="#">about</a>
    </div>
    </div>
    </div>


    <div class = "allvisible" id="allinvisible">

    <div class = "leftBox">
        <p>
        Most of its text is made up On the Boundaries of Goods and Evils; finibus may also be translated as purposes). Neque petur, adipisci re anyone who loves grief itself since it is grief and thus wants to obtain it"). It was found by Richard McClintock, a philologist, director of publications at Hampden-Sydney College in Virginia; he searched for citings of consectetur in classical Latin literature, a term of remarkably low frequency in that literary corpus.
        </p>
    </div>


    <div class="centerBox">
        <p> 
        Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It's also called placeholder (or filler) text. It's a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to
        </p>
        <p>In a professional context it often happens that private or corporate clients corder a publication to be made and presented with the actual content still not being ready. Think of a news blog that's filled with content hourly on the day of going live. However, reviewers tend to be distracted by comprehensible content, say, a random text copied from a newspaper or the internet. The are likely to focus on the text, disregarding the layout and its elements. Besides, random text risks to be unintendedly humorous or offensive, an unacceptable risk in corporate environments. Lorem ipsum and its many variants have been employed since the early 1960ies, and quite likely since the sixteenth century.
        </p>
   </div>

    <div class = "rightBox">
    <p>
    Cicero famously orated against his political opponent Lucius Sergius Catilina. Occasionally the first Oration against Catiline is taken for type specimens: Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet? (How long, O Catiline, will you abuse our patience? And for how long will that madness of yours mock us?)
    </p>
    </div>
    
    <div class = "endBox"><h1>Thank You</h1></div>
    
    </div>

    <div class = "displayProfile" id="disprofile">
    <p>Name  : <?php echo $userData['firstName']; echo " ".$userData['lastName']." "; ?></p>
    <p>Email : <?php echo $userData['email']; ?></p>
    <p>Gender : <?php echo $userData['gender']; ?></p>
    <p>Birthday : <?php echo $userData['birthday']; ?></p>
    <button class = "buttprofile" onclick = "profile()">Close</button>
    </div>

    

<script>
    function profile(){
    var x = document.getElementById("disprofile");
    var y = document.getElementById("allinvisible");
    if (x.style.display === "none") {
       y.style.display = "none";
       x.style.display = "block";
   } else {
       x.style.display = "none";
       y.style.display = "block";
   }
  
    }
   
   
    </script>
    

    
</body>
</body>
</html>