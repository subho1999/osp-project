<?php
if(isset($_POST['login-submit'])) {

  require 'dbh.inc.php';

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location: login.php?login=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT usnm FROM users WHERE usnm=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: login.php?login=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck == 0) {
        header("Location: login.php?login=usernotfound");
        exit();
      }
      else {
        
      }
    }
  }
}

?>