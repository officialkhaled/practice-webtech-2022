<?php 

  session_start();

  $name = $_POST['name'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $usertype = "employee";
  $gender = $_POST['gender'];
  $dob = $_POST['dob'];


  if($name == "" || $email == "" || $username == "" || $password == "" || $usertype == "" || $gender == "" || $dob == "") {
    header('location: hireEmp.php?err=null');
  } 
  else{
    $myUser = fopen("users.txt", "a") or die("Unable to open file!");
    $_SESSION['users'] = $myUser;
    
    $info = ['username' => $username, 'password'=> $password, 'usertype' => $usertype, 'name' => $name, 'email' => $email, 'gender'=> $gender, 'dob' => $dob];

    $info = $username." | ".$password." | ".$usertype." | ".$name." | ".$email." | ".$gender." | ".$dob."\r\n";

    fwrite($myUser, $info);
    fclose($myUser);
    header('location: viewApplicants.php');
  }

?>