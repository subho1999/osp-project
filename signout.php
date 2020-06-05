<?php

  session_start();

  // Check against manual entry
  if(!isset($_SESSION['loggedin'])) {
    header("Location: homepage.php");
  }
  else {
    unset($_SESSION['loggedin']);
    header("Location: homepage.php");
  }

?>