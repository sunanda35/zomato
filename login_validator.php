<?php

session_start();

//connect to database
$connection=mysqli_connect("localhost","root","","zomato");

$email=$_POST['user_ka_email'];
$password=$_POST['user_ka_password'];

$query="SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$password'";

$result=mysqli_query($connection,$query);

$result=mysqli_fetch_assoc($result);

if(count($result)==7){
header('Location:home.php');
$_SESSION['user_id']=$result['user_id'];
$_SESSION['name']=$result['name'];
$_SESSION['photo']=$result['image'];
$_SESSION['email']=$result['email'];
$_SESSION['about']=$result['about'];
$_SESSION['pass']=$result['password'];
$_SESSION['phone']=$result['phone'];
}else{
header('Location:index.php?msg=1');
//pass a get variable through "?msg=1"

}


?>