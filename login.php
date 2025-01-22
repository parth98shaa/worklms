<!doctype html>
<html lang="en">
  <head>
    <?php 
include('inc/header.php');
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bliss Journey</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .gradient-custom-2 {
/* fallback for old browsers */
background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}
.img{
    width: 30px;
}

    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container p-3 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-3 mx-md-4">
  
                  <div class="text-center">
                    <img src="assets/img/meditate.jpg" style="width: 185px;" alt="logo"  class="rounded-3">
                     
                    <h4 class="sitename" >  <img src="assets/img/logo.png" style="width: 32px; height: 27px;">   Bliss Journey</h4>
                  </div>
  
                  <form action="" method="POST">
                    <p>Please login to your account</p>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control"
                        placeholder="email address" required/>
                      <label class="form-label" for="form2Example11">E-Mail</label>
                    </div>
  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="pass" name="pass" class="form-control" placeholder="password" required/>
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <input type="submit" value="Login"data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                      <!-- <a class="text-muted" href="#!">Forgot password?</a> -->
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger"><a href="signup.php">Create new</a></button>
                    </div>
                    <div class="row pt-1 mb-4">
                    
                    <a href="./" class="col-md-6 text-end">Go to website </a>
                  </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4" style="text-align: center;">The present moment is the only moment available to us.</h4>
                  <p class="small mb-0" style="text-align: center;">Meditation is not about having yet another new strategy of self-help plan, but rather providing a framework in which to see yourself more clearly.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    

    // Check if username and password are correct
    $sql = "SELECT * FROM signup WHERE email = '$email' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION['email'] = $email;
      echo '<script>
      alert("You Logged succesfully");
      window.location.href = "index.php";
      </script>';
       
    } else {
        echo '<script>
        alert("Invalid Credential");
        </script>';
    }
}
?>
</body>
</html>