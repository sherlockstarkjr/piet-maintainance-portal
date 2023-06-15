<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Portal</title>
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body id="style-scroll">

  <!-- Contact -->
  <section id="contact" class="get-started pt-2">
    <div class="container">
      <div class="row text-center">
        <h2 class="fw-bold mb-3">Admin Login</h2>
        <div class="heading-line"></div>
      </div>

      <!-- START THE CTA CONTENT  -->
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-6 col-md-12 bg-white p-3">
          <div class="form w-100 pb-2">
            <form method="POST" action="login.php" class="row">
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="uname" type="text" placeholder="Admin Username" class="form-control form-control-lg">
              </div>
              <div class="col-12 mb-3" data-aos="fade-down" data-aos-duration="8000">
                <input name="pass" type="password" placeholder="Admin Password" class="form-control form-control-lg">
              </div>
              <div class="col-lg-12 col-md-12 mb-3 d-grid text-center">
                <button type="submit" id="button" class="rounded-pill pt-3 pb-3">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>

</html>