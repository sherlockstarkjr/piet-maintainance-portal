<?php
    include '../config.php';
    if (isset($_POST['problem_in']) && isset($_POST['room'])) {
        $problem_in = $_POST['problem_in'];
        $room = $_POST['room'];
        $sql = "INSERT INTO addnew (problem_in, room) VALUES ('$problem_in', '$room')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            echo "<script>alert('Problem Added Successfully')</script>";
            header('location:admin.php');
        } else {
            echo "<script>alert('Problem Not Added')</script>";
            header('location:admin.php');
        }
    }
?>