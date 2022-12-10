<?php 

  session_start();

  $selectEmp = $_POST['selectEmp'];

  if($selectEmp == "") {
    header('location: fireEmp.php?err=null');
  } else if($selectEmp = "") {
    $myUser = 'users.txt';
    $info = file_get_contents('users.txt');

    echo "Employees before firing ". "preg_replace() function<br>";
    echo $info;

    echo "<br><br>Employees after firing ". "preg_replace() function<br>";

    $newInfo = preg_replace('//', '', $info);
    file_put_contents($myUser, $newInfo);
    
    header('location: viewApplicants.php');
  }


/*
    $myUser = fopen("users.txt", "r") or die("Unable to open file!");
    $_SESSION['users'] = $myUser;

    $info = ['username' => $username, 'password'=> $password, 'usertype' => $usertype, 'name' => $name, 'email' => $email, 'gender'=> $gender, 'dob' => $dob];

    $info = $username." | ".$password." | ".$usertype." | ".$name." | ".$email." | ".$gender." | ".$dob."\r\n";

    fwrite($myUser, $info);
    fclose($myUser);
    header('location: viewApplicants.php');
*/
  
?>