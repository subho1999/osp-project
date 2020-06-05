<?php
if(isset($_POST['login-submit'])) {

  $con = new mysqli("localhost", "root", "", "loginsystem");
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header("Location: login.php?login=emptyfields");
  }
  else {
    $sql = "SELECT usnm, pswd FROM users WHERE usnm=?";
    if ($stmt = $con->prepare($sql)) {
      $stmt->bind_param('s', $username);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows == 0) {
        header("Location: login.php?login=notexists");
      }
      else {
        $row = $result->fetch_assoc();
        if (!password_verify($password, $row['pswd'])) {
          header("Location: login.php?login=wrongpass&username=$username");
        }
        else {
          header("Location: login.php?login=success");
        }
      }
      $stmt->close();
    }
    else {
      header("Location: login.php?login=sqlerror");
    }
  }
  $con->close();
}
else{
  header("Location: login.php");
}
?>