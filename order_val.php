<?php
    session_start();
//connect to database
$connection=mysqli_connect("localhost","root","","zomato");

$UiD=$_SESSION['user_id'];
$order=$_SESSION['vagBSDK'];
$makaadd=$_POST['user_ka_address'];



$query9999="INSERT INTO `orders` (`order_id`, `user_id`, `order`, `address`) VALUES (NULL, '$UiD', '$order', '$makaadd')";
$result = mysqli_query($connection,$query9999);


if(!$result){
    echo("Nahi hua be");
}else{
    header('Location:payment.php');
}



?>