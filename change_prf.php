<?php
    session_start();
    $username = $_POST['username'];
    $email = $_POST['email'];
    $bio = $_POST['about'];
    $phone = $_POST['phone']; 
    $ids = $_SESSION['user_id'];
    include "includes/dbhelper.php";

    $query = "UPDATE `users` SET `name` = '$username', `email` = '$email', `about` = '$bio', `phone` = '$phone' WHERE `user_id` = '$ids'";
 

    $result = mysqli_query($connection,$query);
    
    if(!$result){
        echo("Nahi hua be");
    }else{
       
       header('Location:edit_profile.php');
    }




?>