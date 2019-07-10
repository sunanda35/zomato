<?php
session_start();

    $username = $_POST['username'];
    $email = $_POST['email'];
    $bio = $_POST['about'];
    $phone = $_POST['phone']; 
    $ids = $_SESSION['partner_id'];

    $connection=mysqli_connect("localhost","root","","zomato");

    $query = "UPDATE `restaurant` SET `p_name` = '$username', `p_email` = '$email', `p_about` = '$bio', `p_phone` = '$phone' WHERE `r_id` = '$ids'";
 

    $result = mysqli_query($connection,$query);
    
    if(!$result){
        echo("Nahi hua be");
    }else{
       header('Location:partner_profile.php');
    }




?>