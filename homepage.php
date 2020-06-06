<?php
	session_start();
?>

<html>
    <head>
        <title>College collaboration platform</title>
        <link rel="stylesheet" href="styles/homepage.css">
    </head>
    <link rel="shortcut icon" href="img/9c.ico" />
    <body>
        
        <div class="topnav">
            <img align="left" src="img/logo1.png">
            <a id="abc"class="ab" href="homepage.php">Home</a>
			<a class="ab" href="aboutus.php">About</a>
			<!-- <a class="ab" href="faqs.php">FAQs</a> -->
		    <a class="ab" href="forum.php">Forum</a>
			<!-- <a href="#">Chat</a> -->
			<a class="ab" href="book_1.php">Books</a>	
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
 
            <!--<img src="students.jpg" width="1567px" height="720px">-->
            
        </div>
        <div class="bg-image"></div>
            <div class="bg-text">
            <p class="heading" align="center"><b>Communication Wizard</b></p>
            <p>Your top destination for interaction <br>
              Ease of access to all course books and previous year question papers!!!</p>
        </div>
        
            
        <div class="benefits">
            <ul class="ul">
                <li>Solution to all your problems at one place</li>
                <hr  class="hr" color="#726d6c">
                <li>Interaction made easy</li>
                <hr  class="hr" color="#726d6c"> 
                <li>Books at cheapest prices</li>
                <hr  class="hr" color="#726d6c">
                <li>One to one communication with seniors</li>
                <hr  class="hr" color="#726d6c">
                <li>Access all previous year question papers</li>
                <hr  class="hr" color="#726d6c">
            </ul>
        </div>
        <div class="main-slideshow-container">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="img/1.jpeg" style="width:100%">
                    <div class="text">“Everyone we interact with becomes a part of us.” 
                    </div>
                </div>
                
                <div class="mySlides fade">
                    <img src="img/2.jpg" style="width:100%">
                    <div class="text">"The beautiful thing about learning is that no one can take it from you."</div>
                </div>
                
                <div class="mySlides fade">
                    <img src="img/3.jpg" style="width:100%">
                    <div class="text">"I swear to you, you would not be able to live your college right, if you don't use this site."</div>
                </div>
                
            </div>
        </div>
        <div class="main-slideshow-container">
            <div class="innovation">
                <p>BEYOND IMAGINATION, OUR INNOVATION</p>
            </div>
            <div class="footer">
                <p align="center">&copy 2019</p>
            </div>
        </div>
    </body>
</html>