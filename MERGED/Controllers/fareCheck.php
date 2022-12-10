<?php

    session_start();
    $class = $_POST['class'];
    //$slots = $_POST['slots'];
    $fare = $_POST['fare'];
    $passengers = $_POST['noOfPassengers'];

    $sum = 0;

    if($passengers <= 15){
        if($class == "" || $fare == "" || $passengers == "") {
            header('location: viewFare.php?err=null');
        } else{
            $myTicket = fopen('ticket.txt', "r");
            while (!feof($myTicket)) {
                $data = fgets($myTicket);

                if($class == 'AC_S') {
                    //$slots = $slots - $passengers;
                    $sum = $passengers[0] * 300;

                } else if($class == 'AC_B') {
                    //$slots = $slots - $passengers;
                    $sum = $passengers * 280;
            
                } else if($class == 'SNIGDHA') {
                    //$slots = $slots - $passengers;
                    $sum = $passengers * 400;
            
                } else if($class == 'F_SEAT') {
                    //$slots = $slots - $passengers;
                    $sum = $passengers * 350;
            
                } else if($class == 'S_CHAIR') {
                    //$slots = $slots - $passengers;
                    $sum = $passengers * 250;
                }
                header('location: payTheFare.php');
            }
        }

        echo "<h2> 
        Invalid User <br>
        Please provide correct login information
        </h2>";
        //header('location: login.php');

    } else if($passengers > 15) {
        echo "<h2> Number of passengers cannot exceed more than 15! </h2>";
    }

            /*
            if ($info[0] == $username && $info[1] == $password && $info[2] == $usertype) {
                setcookie('status', 'true', time() + 3600, '/');
                if($usertype == 'admin') {
                    header('location: adminHome.php');
                } else if($usertype == 'employee') {
                    header('location: empHome.php');
                } else if($usertype == 'customer') {
                    header('location: cusHome.php');
                }
                //header('location: cusHome.php');
            }
            */

?>
