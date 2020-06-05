<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login - Communication Wizard</title>
	<link rel="stylesheet" href="styles/login.css">
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
		<a class="ab" href="login.php">Login</a>
		<a class="ab" href="signup.php">Signup</a>
	</div>

	<div class="loginBox">

		<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<p id="error-message"></p>
		</div>
		</div>

		<form method="post" action="login.inc.php">
			<h1 class="explore">LOG I N &nbsp TO EXPLORE</h1>
			<?php 
				if (isset($_GET['username'])){
					$username = $_GET['username'];
					echo '<input type="text" name="username" placeholder="Username" value='.$username.'><br><br>';
				}
				else {
					echo '<input type="text" name="username" placeholder="Username"><br><br>';
				}
			?>
			<input type="password" name="password" placeholder="Password"><br><br>
			<input type="submit" name="login-submit" value="Login" class="submit">
		</form>

		<?php
			if (isset($_GET['login'])){
				$loginCode = $_GET['login'];
				if ($loginCode == "emptyfields") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Please fill all entries';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($loginCode == "notexists") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Sorry, this username doesnot exist. Please recheck or Signup for a new account';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($loginCode == "wrongpass") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Invalid password! Please check.';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($loginCode == "sqlerror") {
					echo "<script>
							document.getElementById('error-message').innerText = 'SQL Connection Error';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($loginCode == "success") {
					header("Location: homepage.php?homepage=loginsuccess");
				}
				elseif ($loginCode == "signupsuccess") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Congrats You are now signed up! Login to continue.';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
			}
		?>
	</div>

	<div class="innovation">
      	<p>BEYOND IMAGINATION, OUR INNOVATION</p>
    </div>

    <div class="footer">
       	<p>&copy 2019</p>
    </div>
</body>
<script>
		var modal = document.getElementById("myModal");
		var span = document.getElementsByClassName("close")[0];
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</html>