<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<!--<script src="jquery.js"></script>-->
	<title>Sign Up - Communication Wizard</title>
	<link rel="stylesheet" href="styles/signup.css">
</head>

<body>

	<div class="topnav">
		<img align="left" src="img/logo1.png">
		<a id="abc" class="ab" href="homepage.php">Home</a>
		<a class="ab" href="aboutus.php">About</a>
		<a class="ab" href="faqs.php">FAQs</a>
		<a class="ab" href="books.php">Books</a>
		<a class="ab" href="qp.php">Question Papers</a>
		<a class="ab" href="login.php">Login</a>
		<a class="ab" href="signup.php">Signup</a>
	</div>

	<div class="signupBox">

		<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<p id="error-message"></p>
		</div>
		</div>

		<form action="signup.inc.php" method="post">
			<h1 class="benefits">SI GN UP FOR IBENEFI TS</S></h1>
			<?php 
				if (isset($_GET['name'])) {
					$name = $_GET['name'];
					echo 'Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name" value="'.$name.'"><br><br>';
				}
				else {
					echo 'Name : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" id="name"><br><br>';
				}

				if (isset($_GET['regno'])) {
					$regno = $_GET['regno'];
					echo 'Reg. No.: &nbsp&nbsp&nbsp&nbsp<input type="text" name="reg" id="reg" value="'.$regno.'"><br><br>';
				}
				else {
					echo 'Reg. No.: &nbsp&nbsp&nbsp&nbsp<input type="text" name="reg" id="reg"><br><br>';
				}

				if (isset($_GET['email'])) {
					$email = $_GET['email'];
					echo 'Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" id="email" value="'.$email.'"><br><br>';
				}
				else {
					echo 'Email : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" id="email"><br><br>';
				}

				if (isset($_GET['username'])) {
					$username = $_GET['username'];
					echo 'Username : <input type="text" name="username" id="username" value="'.$username.'"><br><br>';
				}
				else {
					echo 'Username : <input type="text" name="username" id="username"><br><br>';
				}

				if (isset($_GET['password'])) {
					$password = $_GET['password'];
					echo 'Password : &nbsp<input type="password" name="password" id="password" value="'.$password.'"><br><br>';
				}
				else {
					echo 'Password : &nbsp<input type="password" name="password" id="password"><br><br>';
				}

				if (isset($_GET['branch'])) {
					$branch = $_GET['branch'];
					echo 'Branch : &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="branch" id="branch" value="'.$branch.'"><br><br>';
				}
				else {
					echo 'Branch : &nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="branch" id="branch"><br><br>';
				}
			?>
			<input type="submit" name="signup-submit" value="Sign Up" class="signup" id="submit">

		</form>

		<?php
			if (isset($_GET['signup'])) {
				$signupCode = $_GET['signup'];
				if ($signupCode == "emptyfields") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Please fill all entries';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($signupCode == "invalidemail") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Invalid email';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($signupCode == "invalidusername") {
					echo "<script>
							document.getElementById('error-message').innerText = 'Username should have only Alphanumeric characters';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($signupCode == "usertaken") {
					echo "<script>
							document.getElementById('error-message').innerText = 'This username is taken, try with a different one';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($signupCode == "sqlerror") {
					echo "<script>
							document.getElementById('error-message').innerText = 'SQL Connection Error';
							document.getElementById('myModal').style.display = 'block';
							</script>";
				}
				elseif ($signupCode == "success") {
					header("Location: login.php?login=signupsuccess");
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