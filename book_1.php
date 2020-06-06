<?php
  session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Communication Wizard</title>
    <link rel="stylesheet" href="styles/book_1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
  </head>
  <body>  
    <div class="topnav">
      <img align="left" src="img/logo1.png">
      <a id="abc"class="ab" href="homepage.php">Home</a>
      <a class="ab" href="aboutus.php">About</a>
      <!-- <a class="ab" href="faqs.php">FAQs</a> -->
		  <a class="ab" href="forum.php">Forum</a>
      <a class="ab" href="books.php">Books</a>	
      <!-- <a class="ab" href="qp.php">Question Papers</a> -->
      <?php
        if(isset($_SESSION['loggedin'])){
          echo '<a class="ab" href="signout.php">Welcome '.$_SESSION['loggedin'].'</a>';
        }
        else {
          echo '<a class="ab" href="login.php">Login</a>
                <a class="ab" href="signup.php">Signup</a>';
        }
      ?>
    </div>
      
    <!-- <div class="box is-bordered">
      <form action="book.upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="book">
        <input type="submit" name="bookupload" value="Upload">
      </form>
    </div> -->
    <div class="box is-bordered">
      <button id="upload-modal-btn">Upload Book</button>
    </div>
    
    <div class="modal">
      <div class="modal-content">
        <span class="close-btn">&times;</span>
        <p>Upload Books</p>
        <!-- <div class="box is-bordered"> -->
          <form action="book.upload.php" method="post" enctype="multipart/form-data" id="form">
            <table cellspacing=10 cellpadding=10>
              <tr>
                <td>File: </td>
                <td><input type="file" name="filename" id="fileinput"></td>
              </tr>
              <tr>
                <td>Book: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td><input type="text" name="bookname" id="bookinput"></td>
              </tr>
              <tr>
                <td>Author: </td>
                <td><input type="text" name="authorname" id="authorinput"></td>
              </tr>
              <tr>
                <td>Subject: </td>
                <td><input type="text" name="subjectname" id="subjectinput"></td>
              </tr>
              <tr>
                <td></td>
                <td><input type="submit" name="bookupload" value="Upload Book"></td>
              </tr>
            </table>
          </form>
        <!-- </div> -->
      </div>
    </div>

    <hr>
    <div>
      <!-- <ul>
        <li>item1</li>
        <li>item2</li>
      </ul> -->
      <?php

        $con = new mysqli("localhost", "root", "", "loginsystem");
        $query = "SELECT * FROM books ORDER BY subject";
        $res = $con->query($query);
        if (!$res || $res->num_rows == 0) {
          ?>
            <center>
              <div class="box is-bordered">
                <h2>No Books currently in server!</h2>
              </div>
            </center>
          <?php
          
        }
        else {
          ?>
            <center>
              <div class="box is-bordered">
                <h2>List of Books that are currently available: </h2>
                <hr>
                <table cellspacing=10 cellpadding=10 border=3>
                  <tr>
                    <th>File Name</th>
                    <th>Book Name</th>
                    <th>Author Name</th>
                    <th>Subject</th>
                  </tr>
                  <?php
                  while ($row = $res->fetch_assoc()) {
                    // Print all the files with a download link
                    // TODO: Group the files by catgory
                    ?>
                    <tr>
                      <td>
                        <a href="uploads/books/<?php echo $row['file']; ?>" download><?php echo $row['file']; ?></a>
                      </td>
                      <td>
                        <?php echo $row['book']; ?>
                      </td>
                      <td>
                        <?php echo $row['author']; ?>
                      </td>
                      <td>
                        <?php echo $row['subject']; ?>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>
                </table>
              </div>
            <center>
          <?php
        }
      ?>
    </div>
  </body>
  <script>
    let modalBtn = document.getElementById("upload-modal-btn")
    let modal = document.querySelector(".modal")
    let closeBtn = document.querySelector(".close-btn")
    modalBtn.onclick = function(){
      modal.style.display = "block"
    }
    closeBtn.onclick = function(){
      modal.style.display = "none"
    }
    window.onclick = function(e){
      if(e.target == modal){
        modal.style.display = "none"
      }
    }
  </script>
</html>