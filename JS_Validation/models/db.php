<?php

  session_start();

  /* database connection */

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'webtech';

  function getConnection() {
    $con = mysqli_connect($GLOBALS['host'], $GLOBALS['user'], $GLOBALS['password'], $GLOBALS['db']);

    return $con;
  }


?>