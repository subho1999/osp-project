<?php
	session_start();
	$con = new mysqli("localhost", "root", "", "loginsystem");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<link rel="stylesheet" href="styles/forum.css">
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
		</div>
		<div>
			<?php
			$sql="SELECT * FROM forum";
			$res = $con->query($sql);
			if ($res->num_rows>0)
			{
				while($row =$res->fetch_assoc())
				{
					$que = $row['que'];
					$ans = $row['ans'];
					echo '<div class = "faqdetails"><span class= "que"><b>Question:  '.$que.'</b></span><hr><div class="faqdetails">Answer:  '.$ans.'<hr></div></div>';
				}

			}
			else
			{
				echo "There are no questions at this time";
			}
			?>
		</div>
	</div>
</body>
</html>