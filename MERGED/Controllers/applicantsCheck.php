<?php 

    session_start();

    $addEmp = $_POST['addEmp'];
    $updateEmp = $_POST['updateEmp'];
    $deleteEmp = $_POST['deleteEmp'];

    if($addEmp == 'addEmp') {
      header('hireEmp.php');
    } else if($updateEmp == 'updateEmp') {
      header('updateEmp.php');
    } else if($deleteEmp == 'deleteEmp') {
      header('fireEmp.php');
    }

    /*
        $myUser = fopen("users.txt", "a") or die("Unable to open file!");
        $_SESSION['users'] = $myUser;

        $info = ['username' => $username, 'password'=> $password, 'name' => $name, 'email' => $email, 'gender'=> $gender, 'dob' => $dob];

        $info = $username." | ".$password." | ".$name." | ".$email." | ".$gender." | ".$dob."\r\n";

        fwrite($myUser, $info);
        fclose($myUser);
        header('location: login.php');
    */

?>