<?php

  session_start();
  require_once "../models/userModel.php";

  /* Login validation using PHP */
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    /* username validation with conditions */
    if (empty($username)) {
      echo "Username is required";
    } else if (empty($password)) {
      echo "Password is required";
    } else if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: index.php");
    } else {
      echo "Invalid username or password";
    }

    /* 
    if (mysqli_num_rows($result) > 0) {
      $_SESSION['username'] = $username;
      header("Location: index.php");
    } else {
      echo "Invalid username or password";
    }
    */

    mysqli_close($con);
  }



?>