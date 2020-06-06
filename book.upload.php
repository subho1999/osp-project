<?php
  session_start();
  // require_once 'db_connect.php';
  if (!isset($_POST['bookupload'])) {
    header("Location: book_1.php");
  }
  else {
    
    $file = $_FILES['filename'];
    
    move_uploaded_file($file['tmp_name'], "uploads/books/".$file['name']);
    $con = new mysqli("localhost", "root", "", "loginsystem");
    $query = "INSERT INTO books(file, book, author, subject) VALUES(?, ?, ?, ?)";
    if (!($stmt = $con->prepare($query))) {
      header("Location: book_1.php?upload=sqlerror");
    }
    else {
      $stmt->bind_param('ssss', $file['name'], $_POST['bookname'], $_POST['authorname'], $_POST['subjectname']);
      $stmt->execute();
      $stmt->close();
      header("Location: book_1.php");
    }
    
  }
  $con->close();
?>