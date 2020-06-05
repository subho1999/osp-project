<?php

  $dbname = "loginsystem";
  $con = new mysqli("localhost", "root", "", $dbname);
  
  if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }

?>