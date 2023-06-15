<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FORM</title>
  <!-- bootstrap css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" type="text/css" href="css/form.css">
</head>

<body>
  <div class='signup-container'>
    <div class='left-container'>
      <h1>
        <!-- <i class='fas fa-paw'></i> -->
        PIET MAINTENANCE PORTAL
      </h1>
      <!-- <div class='puppy'>
            <img src='images/A_black_image.jpg.webp'>
          </div> -->
    </div>
    <div class='right-container'>
      <form action="bform.php" method="POST">
        <h1>Post the Problem Here </h1>
        <div class='set'>
          <div class='name'>
            <label for='name'>Name</label>
            <input id='name' name="name" placeholder="Enter your name" type='text' required>
          </div>
        </div>

        <div class='set'>
          <div class='problem'>
            <label for='problem'>Problem in</label>
            <select name="problem_in" id="problem_in">
              <option value="">Select Problem</option>
              <?php
                      include 'config.php'; // Assuming 'config.php' contains your database connection code

                      $sql = "SELECT * FROM `addnew`";
                      $result = mysqli_query($con, $sql);

                      if ($result) { // Check if the query was successful
                        while ($row = mysqli_fetch_assoc($result)) {
                          echo "<option value='" . $row['problem_in'] . "'>" . $row['problem_in'] . "</option>";
                        }
                      } else {
                        echo "Error: " . mysqli_error($con); // Display an error message if the query fails
                      }

                      // Remember to close the database connection when you're done
                      mysqli_close($con);
                    ?>
            </select>

          </div>
          <div class='major'>
            <label for='major'>Major or Minor</label>
            <div class='radio-container'>
              <input checked='' id='major' name='problem_type' type='radio' value='major'>
              <label for='major'>Major</label>
              <input id='minor' name='problem_type' type='radio' value='minor'>
              <label for='minor'>Minor</label>
            </div>
          </div>
        </div>

        <div class='set'>
          <div class='breed'>
            <label for='breed'>Description of problem</label>
            <textarea name="problem_desc" id="" cols="30" rows="2"></textarea>
          </div>
          <!-- <div class='birthday'>
                <label for='birthday'>Major/Minor</label>
                <input id='birthday' placeholder='Major/Minor Problem' type='text'>
              </div> -->
        </div>

        <div class='room'>
          <label for='room'>Room</label>
          <!-- select dropdown and options are from addnew table room column using php -->
          <select name="room" id="room">
            <option value="">Select Room</option>
            <?php
                  include 'config.php';
                  $sql = "SELECT * FROM `addnew`";
                  $result = mysqli_query($con, $sql);
                  while($row = mysqli_fetch_assoc($result)){
                    echo "<option value='".$row['room']."'>".$row['room']."</option>";
                  }
                ?>
          </select>
        </div>
        <div class='set'>
          <a id='back' class="btn btn-secondary" href="index.php">Back</a>
          <button id='next' type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>