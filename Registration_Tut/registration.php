<?php

  require_once "partials/connect.php";

  if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];

    // Exist query
    $exist_query = "SELECT * FROM user_data WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($con, $exist_query);
    $num_rows = mysqli_num_rows($result);

    if($username == "" or $email == "" or $password == "" or $confirm_password == "") {
      echo "<script>alert('Please fill all the fields')</script>";
      echo "<script>window.open('registration.php','_self')</script>";
      exit();
    }
    
    if($num_rows > 0) {
      echo "<script>alert('Username or Email already exist')</script>";
      echo "<script>window.open('registration.php','_self')</script>";
      exit();
    }
    
    // Insert operation   
    // Password and Confirm Password condition
    else if($password != $confirm_password) {
      echo "<script>alert('Passwords do not match!')</script>";
    } else {
      $insertquery = "INSERT INTO `user_data`(username, password, email) VALUES ('$username', '$password_hash', '$email')";

      $result = mysqli_query($con, $insertquery);

      if($result) {
        echo "<script>alert('Registration Successful!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
      } else {
        echo "<script>alert('Registration Failed!')</script>";
      } 
    }
    
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="card">

      <!-- card header -->
      <div class="card-header">
        <h3 class="text-center">Registration</h3>
      </div>

      <!-- card body -->
      <div class="card-body">
        <form action="" method="post" enctype="">
          <!-- first field -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
              <input type="text" class="form-control" placeholder="Enter your username" autocomplete="off" name="username" aria-label="username" aria-describedby="basic-addon1">
            </div>
          <!-- second field -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-envelope"></i></span>
              <input type="email" class="form-control" placeholder="Enter your email" autocomplete="off" name="email" aria-label="email"aria-describedby="basic-addon1">
            </div>
          <!-- third field -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
              <input type="password" class="form-control" placeholder="Enter your password" autocomplete="off" name="password" aria-label="password" aria-describedby="basic-addon1">
            </div>
          <!-- fourth field -->
            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
              <input type="password" class="form-control" placeholder="Confirm password" autocomplete="off" name="confirm_password" aria-label="confirm_password" aria-describedby="basic-addon1">
            </div>
          <!-- signup button -->
            <div class="form-group">
              <input type="submit" name="register" value="Sign Up" class="btn registration_btn">
            </div>
        </form>
      </div>

      <!-- card footer -->
      <div class="card-footer signup">
        <p class="text-center">Already have an account? <a href="login.php">Sign In</a></p>
      </div>
    </div>
  </div>
</body>
</html>