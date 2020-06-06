<?php

  session_start();

  // Check against manual entry
  if(!isset($_SESSION['loggedin'])) {
    header("Location: homepage.php");
  }
  else {
    $t = time();
    $duration = $t - $_COOKIE['login_time'];
    unset($_COOKIE['login_time']);
    //echo "<script>alert('You had been logged in for ".$duration." time')</script>";
    unset($_SESSION['loggedin']);
    header("Location: homepage.php?duration=$duration");
  }

?>