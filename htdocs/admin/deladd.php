<?php
    include '../config.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "DELETE FROM addnew WHERE id='$id'";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Problem Deleted Successfully')</script>";
            header('location:admin.php');
        } else {
            echo "<script>alert('Problem Not Deleted')</script>";
            header('location:admin.php');
        }
    }
?>