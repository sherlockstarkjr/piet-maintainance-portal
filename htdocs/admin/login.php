<?php

    session_start();
    include "../config.php";

    if(count($_POST)>0) {
        $result = mysqli_query($con,"SELECT * FROM admin WHERE uname='" . $_POST["uname"] . "' and pass = '". $_POST["pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["uname"] = $row['uname'];
            $_SESSION["pass"] = $row['pass'];
        } else {
            header("Location:../index.php");
        }
    }
    if(isset($_SESSION["uname"])) {
        header("Location:admin.php");
    }
?>