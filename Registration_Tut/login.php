<?php
  // username: shihab, password: abc
  // username: khaled, password: 123
  session_start();
  require_once "partials/connect.php";

  if(isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query
    $query = "SELECT * FROM user_data WHERE username = '$username'";
    $result = mysqli_query($con, $query);
    // Fetching data
    $fetch_data = mysqli_fetch_assoc($result);
    $num_rows = mysqli_num_rows($result);
    if ($username == "" or $password == "") {
      echo "<script>alert('Please fill all the fields')</script>";
      echo "<script>window.open('login.php','_self')</script>";
      exit();
    }
    if ($num_rows == 0) {
      echo "<script>alert('Username does not exist')</script>";
      echo "<script>window.open('login.php','_self')</script>";
      exit();
    } else if($num_rows > 0) {
      if(password_verify($password, $fetch_data['password'])) {
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Successful!')</script>";
        echo "<script>window.open('home.php','_self')</script>";
      } else {
        echo "<script>alert('Incorrect Password!')</script>";
        echo "<script>window.open('login.php','_self')</script>";
      }
    } else {
      echo "<script>alert('Incorrect Username!')</script>";
      echo "<script>window.open('login.php','_self')</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- stylesheet -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container d-flex align-items-center justify-content-center">
    <div class="card signin_card">

      <!-- card header -->
      <div class="card-header">
        <h3 class="text-center">Login</h3>
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
              <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
              <input type="password" class="form-control" placeholder="Enter your password" autocomplete="off" name="password" aria-label="password" aria-describedby="basic-addon1">
            </div>
          <!-- signup button -->
            <div class="form-group">
              <input type="submit" name="signin" value="Sign In" class="btn registration_btn">
            </div>
        </form>
      </div>

      <!-- card footer -->
      <div class="card-footer signin">
        <p class="text-center">Don't have an account? <a href="registration.php">Sign Up</a></p>
      </div>
    </div>
  </div>
</body>
</html>