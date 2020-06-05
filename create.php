<?php
	session_start();
	$con = new mysqli("localhost", "root", "", "loginsystem");
	if (isset($_POST['create'])){
		if($_POST['create'])
		{
			$que=$_POST['que'];
			$sql= $con->prepare("INSERT INTO forum (que) VALUES (?)");
			$sql->bind_param("s",$que);
			$sql->execute();
			$res = $con->query($sql);
			header("Location: forum.php");
			exit();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<link rel="stylesheet" href="styles/create.css">
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
	<div class="faqbox">
		<div class="faqdetails" align="center">
			<h1 class="fs"> Forum </h1>
			<p><a href="forum.php">Index</a> | <a href="create.php">Add question</a> | <a href="edit.php">Add Answers</a></p>
			<h3>Add new question</h3>
			<form action="create.php" method="post">
				Question:<input type="text" name="que" size="70"><br><br>
				<input type="submit" name="create" value="Add Question">
			</form>
		</div>
	</div>

</body>
</html>