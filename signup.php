
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Journey</title>
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<!-- Section: Design Block -->
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<section class=""
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start vh-100" style="background-color: hsl(0, 0%, 96%)">
    <div class="container h-100">
      <div class="row gx-lg-5 align-items-center h-100">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h1 class="my-5 display-3 fw-bold ls-tight">
            <span class="text-primary">Bliss Journey</span>
          </h1>
          <p style="color: hsl(217, 10%, 50.8%)">
            When your world moves too fast and you lose yourself in the chaos, introduce yourself to each color of the sunset. Reacquaint yourself with the earth beneath your feet. Thank the air that surrounds you with every breath you take. Find yourself in the appreciation of life.
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card">
            <div class="card-body py-5 px-md-5">
              <form action="signup.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="fname" name="fname" class="form-control" />
                      <label class="form-label" for="form3Example1">First name</label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div data-mdb-input-init class="form-outline">
                      <input type="text" id="lname" name="lname" class="form-control" />
                      <label class="form-label" for="form3Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" id="email" name="email" class="form-control" />
                  <label class="form-label" for="form3Example3">Email address</label>
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" id="pass" name="pass" class="form-control" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
                </div>

                <!-- Submit button -->
                <input type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" value="Sign up">

                <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already have an account?</p>
                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger"><a href="login.php">Login</a></button>
                    </div>
                

                <!-- Register buttons -->
                <!-- <div class="text-center">
                  <p>or sign up with:</p>
                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>

                  <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?php
include('inc/header.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $pass = $_POST["pass"];

  // Check if email or username already exists
  $check_sql = "SELECT * FROM signup WHERE email = '$email'";
  // $check_username_sql = "SELECT * FROM signup WHERE username = ''";

  $result = $conn->query($check_sql);
  // $username_result = $conn->query($check_username_sql);

  if ($result->num_rows > 0) {
      echo '<script>
      alert("Email already exist");
     
      </script>';
  // } elseif ($username_result->num_rows > 0) {
      // echo "Username already exists.";
  } else {
      // Prepare the SQL statement
      $sql = "INSERT INTO signup VALUES ( ' ','$fname', '$lname','$email', '$pass' )";

      // Execute the SQL statement
      if ($conn->query($sql) === TRUE) {
          // Redirect to the sign-in page
          echo '<script>
      alert("You Registered Successfully");
       window.location.href = "login.php";
      </script>';
          header("Location: login.php");
          // echo "Connection Successfull";
          exit();
                                      }
           else {
          echo "Something went wrong. Please try again later.";
      }
  }
}

?>
</body>
</html>