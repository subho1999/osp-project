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
      <a class="ab" href="faqs.php">FAQs</a>
      <a class="ab" href="books.php">Books</a>	
      <a class="ab" href="qp.php">Question Papers</a>
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
      <button id="upload-modal-btn">Upload Books</button>
    </div>
    
    <div class="modal">
      <div class="modal-content">
        <span class="close-btn">&times;</span>
        <p>Some text</p>
      </div>
    </div>

    <hr>
    <div>
      <ul>
        <li>item1</li>
        <li>item2</li>
      </ul>
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