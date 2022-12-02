<?php

  session_start();
  require_once "db.php";

  // Add/Insert User
  function insertUser($user) {
    $con = getConnection();

    $sql = "INSERT INTO users VALUES ('', '$_POST[username]', '$_POST[password]')";
    $result = mysqli_query($con, $sql);

    mysqli_close($con);
  }

  // Edit User by ID
  function editUser($user) {
    $con = getConnection();
    
    $sql = "UPDATE users SET username = '$_POST[username]', password = '$_POST[password]' WHERE id = '$_POST[id]'";
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con);
  }
  
  //Delete User by ID
  function deleteUser($user) {
    $con = getConnection();

    $sql = "DELETE FROM users WHERE id = '$_POST[id]'";
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con);
  }
  
  // Search User by Username
  function searchUser($user) {
    $con = getConnection();
    
    $sql = "SELECT * FROM users WHERE username = '$_POST[username]'";
    $result = mysqli_query($con, $sql);
    
    mysqli_close($con);
  }
  
  /*
  // isset Validation Code (if required)
  if (isset($_POST['username']) && isset($_POST['password'])) {
    $con = getConnection();

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "Registration Successful";
    } else {
      echo "Registration Failed";
    }

    mysqli_close($con);
  */

?>