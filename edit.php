<?php
	session_start();
	$con = new mysqli("localhost", "root", "", "loginsystem");
	if(isset($_GET['faq']))
	{
		$faq=$_GET['faq'];
	}
	if(isset($_POST['del']))
	{
		if($_POST['del'])
		{
			$sql= "DELETE FROM forum WHERE id='".$faq."' LIMIT 1";
			$res=$con->query($sql);
			header("Location: edit.php");
			exit();

		}
	}
	if(isset($_POST['edit']))
	{
		if($_POST['edit'])
		{
			$que=$_POST['que'];
			$ans=$_POST['ans'];
			$sql = "UPDATE forum SET que='".$que."', ans='".$ans."' WHERE id='".$faq."' LIMIT 1";
			$res=$con->query($sql);
			header("Location: forum.php");
			exit();
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<link rel="stylesheet" href="styles/edit.css">
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
			<h3>Answer a question</h3>
			<?php
				$sql= "SELECT * FROM forum";
				$res = $con->query($sql);
				if ($res->num_rows>0)
				{
					while($row =$res->fetch_assoc())
					{
						$id = $row['id'];
						$que = $row['que'];
						$ans = $row['ans'];
						echo '<div class = "faqdetails"><form action="edit.php?faq='.$id.'" method="POST">
						<span>Question: <input type="text" name="que" size="70" value="'.$que.'"></span><br><br>
						<div>Answer:<input type="text" name="ans" size="70" value="'.$ans.'"><br><br></div>
						<input type="submit" name="del" value="Delete question"><input type="submit" name="edit" value="Submit"><br><br><br><br>
						</form></div>';
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