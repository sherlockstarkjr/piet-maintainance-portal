<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Projects ~ Admin Panel</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body id="style-scroll">
    <?php
    if ($_SESSION["uname"]) {
    ?>

        <div class="container-fluid d-flex justify-content-center mt-4">
            <a id="button" class="btn btn-primary" href="../logout.php">Logout</a>
        </div>

        <section class="mt-4">
            <div class="container">
                <div class="row text-center">
                    <h2 class="fw-bold mb-3">Contact</h2>
                    <div class="heading-line mb-5"></div>
                </div>
            </div>
            <div class="container" style="overflow-x:auto;">
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Message</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT * FROM contact";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['number']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['message']; ?></td>
                                <td><a class="btn btn-danger text-white" href="delcontact.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mt-4">
            <div class="container">
                <div class="row text-center">
                    <h2 class="fw-bold mb-3">MAINTENANCE FORM</h2>
                    <div class="heading-line mb-5"></div>
                </div>
            </div>
            <div class="container" style="overflow-x:auto;">
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Problem In</th>
                            <th scope="col">Problem Type</th>
                            <th scope="col">Problem Description</th>
                            <th scope="col">Rom Number</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT * FROM form";
                        $result = mysqli_query($con, $sql);
                        $i = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['problem_in']; ?></td>
                                <td><?php echo $row['problem_type']; ?></td>
                                <td><?php echo $row['problem_desc']; ?></td>
                                <td><?php echo $row['room']; ?></td>
                                <td><a class="btn btn-danger text-white" href="delform.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="mt-4">
            <div class="container">
                <div class="row text-center">
                    <h2 class="fw-bold mb-3">Update Form</h2>
                    <div class="heading-line mb-5"></div>
                </div>
            </div>
            <div class="container" style="overflow-x:auto;">
            <!-- Add new problem_in, problem_type, room by admin panel -->
                <form method="POST" action="add.php" class="row">
                    <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                        <input name="problem_in" type="text" placeholder="Problem In" class="form-control form-control-lg">
                    </div>
                    <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                        <input name="room" type="text" placeholder="Room Number" class="form-control form-control-lg">
                    </div>
                    <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                        <button type="submit" id="button" class="rounded-pill pt-3 pb-3">Add</button>
                    </div>
                </form>
                <!-- table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Problem In</th>
                            <th scope="col">Room Number</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../config.php';
                        $sql = "SELECT * FROM addnew";
                        $result = mysqli_query($con, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row['problem_in']; ?></td>
                                <td><?php echo $row['room']; ?></td>
                                <td><a class="btn btn-danger text-white" href="deladd.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>

    <?php
    } else header("Location: index.php");
    ?>
</body>

</html>