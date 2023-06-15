<?php
    include "config.php";
    $name = $_POST['name'];
    $problem_in = $_POST['problem_in'];
    $problem_type = $_POST['problem_type'];
    $problem_desc = $_POST['problem_desc'];
    $room = $_POST['room'];
    $q = "insert into form(name, problem_in, problem_type, problem_desc, room) VALUES('$name','$problem_in','$problem_type','$problem_desc','$room')"  ;
    $result = mysqli_query($con,$q);
    if(!$result){

        die('Error: ' . mysqli_error($con));
        echo "database is not connected";
    }
    else {	
        header('location: form.php');
        exit();
    } 
?>