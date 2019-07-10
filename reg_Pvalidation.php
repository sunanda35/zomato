<?php

//connect to database
$connection=mysqli_connect("localhost","root","","zomato");

$name=$_POST['user_ka_name'];
$email=$_POST['user_ka_email'];
$reason=$_POST['user_ka_reason'];
$password=$_POST['user_ka_password'];
$phone=$_POST['user_ka_phone'];

$uploadCv = 'restaurant/cover/';
$uploadCover = $uploadCv . basename($_FILES['restaurant_ka_photo']['name']);

$uploadPr = 'restaurant/';
$uploadProfile = $uploadPr . basename($_FILES['user_ka_photo']['name']);

$Rname=$_POST['restaurant_ka_name'];
$Rrating=$_POST['restaurant_ka_rating'];
$Rcuisine=$_POST['restaurant_ka_cuisine'];


        $query3="SELECT * FROM `restaurant` WHERE `p_email` LIKE '$email'";

        $result=mysqli_query($connection,$query3);
        if ((move_uploaded_file($_FILES['user_ka_photo']['tmp_name'], $uploadProfile)) && (move_uploaded_file($_FILES['restaurant_ka_photo']['tmp_name'], $uploadCover))) {
        $result=mysqli_fetch_assoc($result);

            if(count($result)==11){
            header('Location:index.php?msg=4');
            }else{
$query="INSERT INTO `restaurant` (`r_id`, `p_name`, `p_email`, `p_about`, `p_password`, `p_phone`, `p_image`, `r_name`, `r_rating`, `r_cuisine`, `r_bg`) VALUES (NULL, '$name', '$email', '$reason', '$password', '$phone', '$uploadCover', '$Rname', '$Rrating', '$Rcuisine', '$uploadProfile')";

    if(mysqli_query($connection,$query)){
    //You have to made your resstaurant...
    header('Location:restaurant.php');
    }else{
    //echo "Some error occured";
    header('Location:index.php?msg=5');
    }

}
    
        }

?>