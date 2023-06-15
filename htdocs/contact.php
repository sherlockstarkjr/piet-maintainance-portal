<?php

    session_start();

    include "config.php";

    $name = $_POST['name']; 

    $number = $_POST['number']; 

    $email = $_POST['email'];

    $message = $_POST['message'];

    $q = "insert into contact(name, number, email, message) VALUES('$name','$number','$email','$message')";
    $result = mysqli_query($con,$q);

    if(!$result){
        die('Error: ' . mysqli_error($con));
        echo '<script type ="text/javascript"> alert("Database is not connected");window.location= "index.php"</script>';
    }

    else {	
        echo '<script type ="text/javascript"> alert("Form Submitted...");window.location= "index.php"</script>';
    } 
?>