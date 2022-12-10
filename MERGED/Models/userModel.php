<?php

  require_once "databaseCon.php";
  

  function login($user){
    $con = getConnection();

    $sql = "SELECT * FROM users WHERE username='{$user['username']}' AND password='{$user['password']}'";

    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);

    if($user != null){
        return true;
    }else{
        return false;
    }
  }

  function insertUser($user){
    $con = getConnection();

    $sql = "INSERT INTO users VALUES('', '{$user['name']}', '{$user['email']}', '{$user['username']}', '{$user['password']}', 'customer', '{$user['gender']}', '{$user['dob']}', '')";

    $status = mysqli_query($con, $sql);
    return $status;
  }

  function getAllUser(){
    $con = getConnection();

    $sql = "SELECT * FROM users";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function editUser(){
    $con = getConnection();

    $sql = "UPDATE users SET('{$user['username']}', '{$user['password']}', '{$user['email']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function deleteUser(){
    $con = getConnection();

    $sql = "DELETE FROM users WHERE('{$user['id']}')";

    $status = mysqli_query($con, $sql);
    return $status;
  }
  
  function getUserByID(){
    $con = getConnection();

    $sql = "SELECT * FROM users WHERE({$user['id']})";
    
    $status = mysqli_query($con, $sql);
    return $status;
  }

?>