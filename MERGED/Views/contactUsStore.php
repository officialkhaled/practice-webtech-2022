<?php

  session_start();

  $name = $_POST['name'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  $phoneNo = $_POST['phoneNo'];
  $message = $_POST['message'];

  if($name == "" || $city == "" || $phoneNo == "" || $email == "") {
    header('location: contactUs.php?err=null');
  } 
  else{
    $myFile = fopen("inquiry.txt", "a") or die("Unable to open file!");
    $_SESSION['inquiry'] = $myFile;
    $text = ['name' => $name, 'email' => $email, 'city'=> $city, 'phoneNo' => $phoneNo, 'message'=> $message];
    $text = $name." | ".$email." | ".$city." | ".$phoneNo." | ".$message."\r\n";
    fwrite($myFile, $text);
    fclose($myFile);
    header('location: thankYou.php');
  }

?>
