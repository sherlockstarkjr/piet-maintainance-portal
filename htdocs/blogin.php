<?php

session_start();
include "config.php";

$email = $_POST['email'];
$password = $_POST['password'];

$q = " select * from registration where email = '$email' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){

	$_SESSION['email'] = $email;
	$userquery = " insert into user(email) values('$email')";
	$userresult = mysqli_query($con,$userquery) ;
	header('location:index.php');	
}
else{

	header('location:login.html');
}

?>