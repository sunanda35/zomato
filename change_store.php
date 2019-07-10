<?php
session_start();

    $rname = $_POST['restaurant_ka_name'];
    $rating = $_POST['restaurant_ka_rating'];
    $cuisine = $_POST['restaurant_ka_cuisine'];
    $idRes = $_SESSION['partner_id'];
    
    $uploadCvv = 'restaurant/cover/';
$uploadCoverrr = $uploadCvv . basename($_FILES['restaurant_ka_photo']['name']);

    $connection=mysqli_connect("localhost","root","","zomato");

    $query = "UPDATE `restaurant` SET `r_name` = '$rname', `r_rating` = '$rating', `r_cuisine` = '$cuisine', `r_bg` = '$uploadCoverrr' WHERE `r_id` = '$idRes'";
 
    if (move_uploaded_file($_FILES['restaurant_ka_photo']['tmp_name'], $uploadCoverrr)) {
    $result = mysqli_query($connection,$query);
    
    if(!$result){
        echo("Nahi hua be");
    }else{
        header('Location:restaurant.php');
    }


    }

?>