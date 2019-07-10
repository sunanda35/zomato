<?php

session_start();

//connect to database
$connection=mysqli_connect("localhost","root","","zomato");

$menuN=$_POST['menu_ka_name'];
$menuP=$_POST['menu_ka_price'];
$menuT=$_POST['mType'];

$partnerID=$_SESSION['partner_id'];
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query19="INSERT INTO `menu` (`m_id`, `r_id`, `m_name`, `m_price`, `m_type`) VALUES (NULL, '$partnerID', '$menuN', '$menuP', '$menuT')";

if (mysqli_query($connection, $query19)) {
    header('Location:restaurant.php');
} else {
    echo "Kuch error a gaya hai, Try again";
}

?>