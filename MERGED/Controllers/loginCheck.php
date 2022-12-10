<?php

    session_start();
    require_once "../models/userModel.php";
    require_once "../assets/alertMsg.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $user =['username'=>$username, 'password'=>$password, 'usertype'=>$usertype];
    $status = login($user);

    if($username == "" || $password == "" || $usertype =="") {
        alertMessage("Invalid Username/Password!");
        header('location: ../views/login.php?err=null');
    }else if($status){
        $_SESSION['status'] = "true";
        setcookie('status', 'true', time() + 3000, '/');
        if($user['usertype'] == 'admin'){
            header('location: ../views/adminHome.php');
        } else if($user['usertype'] == 'employee'){
            header('location: ../views/empHome.php');
        } else if($user['usertype'] == 'customer'){
            header('location: ../views/cusHome.php');
        }
        
    }else{
        alertMessage("Invalid User! Please go back and input correct information");
        echo "<center><a href=\"../views/login.php\" \"><h1>Go Back</h1></a></center>";
    }

    /*


  //Login using file (.txt)

    if ($username == "" || $password == "" || $usertype == "") {
    header('location: login.php?err=null');
    } else {
        $myUser = fopen('users.txt', "r");
        while (!feof($myUser)) {
            $data = fgets($myUser);
            $user = explode(" | ", $data);
            if ($user[0] == $username && $user[1] == $password && $user[2] == $usertype) {
                setcookie('status', 'true', time() + 3000, '/');
                if($usertype == 'admin') {
                    header('location: adminHome.php');
                } else if($usertype == 'employee') {
                    header('location: empHome.php');
                } else if($usertype == 'customer') {
                    header('location: cusHome.php');
            }
        }
    }
    echo "<h2> 
    Invalid User <br>
    Please provide correct login information
    </h2>";

    }




    if($user['username'] == "") {
        echo '<script>alert("Username is missing!")</script>';
    } else if($user['password']  == "") {
        echo '<script>alert("Password is missing!")</script>';
    } else if($user['usertype']  == "") {
        echo '<script>alert("Usertype is missing!")</script>';

    } else if($status != null){
        if(strlen($user['username'])<2) {
            echo '<script>alert("Username must be at least 2 characters long!")</script>';
        } else if((substr_count($user['username'],'@')>0) || (substr_count($user['username'],'#')>0) || (substr_count($user['username'],'$')>0) || (substr_count($user['username'],'%')>0) || (substr_count($user['username'],'/')>0) || (substr_count($user['username'],'*')>0) || (substr_count($user['username'],'+')>0) || (substr_count($user['username'],'(')>0) || (substr_count($user['username'],')')>0) || (substr_count($user['username'],'!')>0) || (substr_count($user['username'],'^')>0)) {
            echo '<script>alert("Username can contain alpha numeric characters, period, dash or underscore only!")</script>';
        } else if(strlen($user['password'])<8) {
            echo '<script>alert("Password must be at least 8 characters long!")</script>';
        } else if((substr_count($user['password'],'@')<1) && (substr_count($user['password'],'#')<1) && (substr_count($user['password'],'$')<1) && (substr_count($user['password'],'%')<1)) {
            echo '<script>alert("Password must contain at least one special character (@, #, $, %)!")</script>';
        } else {
            if($user['usertype'] == "admin"){
                header('location: ../views/adminHome.php');
            } else if($user['usertype'] == "customer"){
                header('location: ../views/cusHome.php');
            } else if($user['usertype'] == "employee"){
                header('location: ../views/empHome.php');
            }

    }
}


    if ($username == "" || $password == "" || $usertype == "") {
        //echo "<h2> Validation failed: Username or Password is missing! </h2>";
        echo '<script>alert("Username or Password is missing!")</script>';
        //header('location: ../views/login.php?err=null');

    } else if(strlen($user['username'])<2){
        //$_SESSION["message"] = "Validation failed: Username must be at least 2 characters long!";
        //echo "<h2>Validation failed: Username must be at least 2 characters long! </h2>";
        echo '<script>alert("Username must be at least 2 characters long!")</script>';
        
    } else if((substr_count($user['username'],'@')>0) || (substr_count($user['username'],'#')>0) || (substr_count($user['username'],'$')>0) || (substr_count($user['username'],'%')>0) || (substr_count($user['username'],'/')>0) || (substr_count($user['username'],'*')>0) || (substr_count($user['username'],'+')>0) || (substr_count($user['username'],'(')>0) || (substr_count($user['username'],')')>0) || (substr_count($user['username'],'!')>0) || (substr_count($user['username'],'^')>0)){
        //$_SESSION["message"] = "Validation failed: Username can contain alpha numeric characters, period, dash or underscore only!";
        //echo "<h2> Validation failed: Username can contain alpha numeric characters, period, dash or underscore only! </h2>";
        echo '<script>alert("Username can contain alpha numeric characters, period, dash or underscore only!")</script>';

    } else if(strlen($user['password'])<8){
        //$_SESSION["message"] = "Validation failed: Password must be at least 8 characters long!";
        //echo "<h2> Validation failed: Password must be at least 8 characters long! </h2>";
        echo '<script>alert("Password must be at least 8 characters long!")</script>';

    } else if((substr_count($user['password'],'@')<1) && (substr_count($user['password'],'#')<1) && (substr_count($user['password'],'$')<1) && (substr_count($user['password'],'%')<1)){
        //$_SESSION["message"] = "Validation failed: Password must contain at least one special character (@, #, $, %) ";
        //echo "<h2> Validation failed: Password must contain at least one special character (@, #, $, %) </h2>";
        echo '<script>alert("Password must contain at least one special character (@, #, $, %)!")</script>';

    } else if($user['usertype'] == "") {
        //echo "<h2> Validation failed: Usertype is missing! Please select your usertype. </h2>";
        echo '<script>alert("Usertype is missing! Please select your usertype.")</script>';
    } else if($_SESSION['status'] = "true" && $user['usertype'] == 'admin'){
        //$_SESSION['status'] = "true";
        header('location: ../views/adminHome.php');

    } else if($_SESSION['status'] = "true" && $user['usertype'] == 'customer') {
        header('location: ../views/cusHome.php');

    } else if($_SESSION['status'] = "true" && $user['usertype'] == 'employee') {
        header('location: ../views/empHome.php');
    }
    */

/*

else if($status){
        $_SESSION['status'] = "true";
        header('location: ../views/cusHome.php');
} else{
        echo "invalid user";
    }

  
*/

?>