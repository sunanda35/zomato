<?php

session_start();

//connect to database
$connection=mysqli_connect("localhost","root","","zomato");

$email=$_POST['partner_ka_email'];
$password=$_POST['partner_ka_password'];

$query7="SELECT * FROM `restaurant` WHERE `p_email` LIKE '$email' AND `p_password` LIKE '$password'";


$result=mysqli_query($connection,$query7);

$result=mysqli_fetch_assoc($result);

if(count($result)==11){
header('Location:restaurant.php');
$_SESSION['partner_id']=$result['r_id'];
$_SESSION['p_name']=$result['p_name'];
$_SESSION['p_photo']=$result['p_image'];
$_SESSION['p_email']=$result['p_email'];
$_SESSION['p_about']=$result['p_about'];
$_SESSION['p_pass']=$result['p_password'];
$_SESSION['p_phone']=$result['p_phone'];
$_SESSION['r_name']=$result['r_name'];
$_SESSION['r_Qui']=$result['r_cuisine'];
$_SESSION['r_photo']=$result['r_bg'];
}else{
header('Location:index.php?msg=6');
//pass a get variable through "?msg=1"

}


?>