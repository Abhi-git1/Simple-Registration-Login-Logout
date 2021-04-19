<?php

function submit(){

    include "databaseConnect.php";
    
    
    $f_name = $_POST['firstName'] ??'';
    $l_name = $_POST['lastName'] ??'';
    $gender = $_POST['gender'] ??'';
    $birthday = $_POST['birthday'] ??'';
    $email = $_POST['email'] ??'';
    $password = $_POST['password'] ??'';
    $confirm_password = $_POST['confirmPassword'] ??'';
    
    
    
    if($f_name == "" and $l_name == "" and$gender == "" and $birthday == ""and $email == "" and $password == ""){
        echo "<p>Please Fill the form to sign up</p>";
    }else{
    
    if($f_name == ""){
        echo "<p>Enter First Name</p>";
    }
    if($l_name == ""){
        echo "<p>Enter Last Name</p>";
    }
    if($gender == ""){
        echo "<p>Select Gender</p>";
    }
    if($birthday == ""){
        echo "<p>Enter birthday</p>";
    }
    if($email == ""){
        echo "<p>Enter email</p>";
    }
    if($password == ""){
        echo "<p>Enter password</p>";
    }
    }
    
    if($password != ""){
        if($password != $confirm_password){
            echo "<p>Confirm password failed</p>";
        }elseif($password == $confirm_password){
            if($f_name != "" and $l_name != "" and$gender != "" and $birthday != ""and $email != "" and $password != ""){
    
                $check_email = "SELECT `id` FROM `users` WHERE email = '".mysqli_real_escape_string($link,$email)."' ";
                $result = mysqli_query($link,$check_email);
                $row = mysqli_num_rows($result);
                if($row==0){

                $query = " INSERT INTO `users` (`firstName`,`lastName`,`gender`,`birthday`,`email`,`password`) VALUES (
                    '".mysqli_real_escape_string($link,$f_name)."','".mysqli_real_escape_string($link,$l_name)."',
                    '".mysqli_real_escape_string($link,$gender)."','".mysqli_real_escape_string($link,$birthday)."',
                    '".mysqli_real_escape_string($link,$email)."','".mysqli_real_escape_string($link,md5($password))."') ";
    
                    if(mysqli_query($link,$query)){
                        header("Location:signin.php");
                   
                        
                    }else{
                        echo "<p>opps something went worng try again</p>";
                    }
                }else{
                    echo "<p>Email already used</p>";
                }
            }
        }
    }
        
    }
?>