<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us - Communication Wizard</title>
	<link rel="stylesheet" href="styles/aboutus.css">
</head>
<body>

	<div class="topnav">
		<img align="left" src="img/logo1.png">
		<a id="abc"class="ab" href="homepage.php">Home</a>
		<a class="ab" href="aboutus.php">About</a>
		<!-- <a class="ab" href="faqs.php">FAQs</a> -->
		<a class="ab" href="forum.php">Forum</a>
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

	<div class="slideshow">
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

	<div class="aboutusBox">
		<div class="content">
		<p class="aboutusDetails">We, at Communication Wizard, provide a platform for all kinds of Students to solve all of their problem by means of interaction with their Seniors and fellow Classmates. We also help in getting them the books that they may require. More than this, the most highlighted thing is that there is also a section where a lot of previous year question papers can be found. So, all students should Signin and take the advantage of Communication Wizard.</p>
		</div>
		<div class="aboutImg">
			<img src="img/aboutusimg.jpg" class="img1">
		</div>
	</div>

    <script>
            var slideIndex = 0;
            showSlides();
            
            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                //dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
		</script>
		
	<div class="main-slideshow-container">
		<div class="innovation">
				<p>BEYOND IMAGINATION, OUR INNOVATION</p>
		</div>
	
		<div class="footer">
				<p>&copy 2019</p>
		</div>
	</div>
</body>
</html>