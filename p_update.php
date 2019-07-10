<?php
session_start();

    
    $idRess = $_SESSION['user_id'];
    
    $uploadph = 'profile/';
    $uploadprofileph = $uploadph . basename($_FILES['user_ka_photo']['name']);

    $connection=mysqli_connect("localhost","root","","zomato");

    $query = "UPDATE `users` SET `image` = '$uploadprofileph' WHERE `user_id` = '$idRess'";
 

    $result = mysqli_query($connection,$query);
    if (move_uploaded_file($_FILES['user_ka_photo']['tmp_name'], $uploadprofileph)) {
        echo "File is valid, and was successfully uploaded.\n";
      
    if(!$result){
        echo("Nahi hua be");
    }else{
        header('Location:edit_profile.php');
    }

} else {
    echo "Upload failed";
 }


?>