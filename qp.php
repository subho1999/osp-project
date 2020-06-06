<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<link rel="stylesheet" href="styles/qp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
</head>
<body>

	<div class="topnav">
		<img align="left" src="img/logo1.png">
		<a id="abc"class="ab" href="homepage.php">Home</a>
		<a class="ab" href="aboutus.php">About</a>
		<!-- <a class="ab" href="faqs.php">FAQs</a> -->
		<a class="ab" href="forum.php">Forum</a>
		<a class="ab" href="book_1.php">Books</a>	
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

	<!-- <div class="heading1">
		<div class="logo1">
			<img src="img/logo1.PNG">
		</div>
		<div class="navbar1">
			<a href="homepage.html">Home</a>
			<a href="aboutus.html">About</a>
			<a href="faqs.html">FAQs</a>
			<a href="books.html">Books</a>	
			<a href="qp.html">Question Papers</a>
			<a href="login.html">Login</a>
			<a href="signup.html">Signup</a>
		</div>
	</div> -->

	<div class="box is-bordered colored">
		<hr>
		<h2 class="subtitle">Basic Electrical and Electronics Engineering(EEE 1001) </h2>
		<div class="columns">

			<div class="column">
				<a href="Papers/EEE 2.pdf"><img src="img/E1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/EEE 1.pdf"><img src="img/E2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/EEE 3.pdf"><img src="img/E3.PNG" alt=""></a>
			</div>
		</div>
		<hr>
		<h2 class="subtitle">Engineering Physics(PHY 1701) </h2>
		<div class="columns">
			<div class="column">
				<a href="Papers/P1.pdf"><img src="img/P1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/P2.pdf"><img src="img/P2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/P3.pdf"><img src="img/P3.PNG" alt=""></a>
			</div>
		</div>
		<hr>
		<h2 class="subtitle">Engineering Chemistry(CHY 1701) </h2>
		<div class="columns">
			<div class="column">
				<a href="Papers/C1.pdf"><img src="img/C1.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/C2.pdf"><img src="img/C2.PNG" alt=""></a>
			</div>
			<div class="column">
				<a href="Papers/C3.pdf"><img src="img/C3.PNG" alt=""></a>
			</div>
		</div>
		<hr> 
	</div>

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