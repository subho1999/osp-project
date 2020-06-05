<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<link rel="stylesheet" href="styles/faqs.css">
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

	<!-- <div class="heading">
		<div class="logo">
			<img src="img/logo1.PNG">
		</div>
		<div class="navbar">
			<a href="homepage.html">Home</a>
			<a href="aboutus.html">About</a>
			<a href="faqs.html">FAQs</a>
			<a href="books.html">Books</a>	
			<a href="qp.html">Question Papers</a>
			<a href="login.html">Login</a>
			<a href="signup.html">Signup</a>
		</div>
	</div> -->

	<div class="faqbox">
		<h1 class="fs">FAQs</h1>
		<div class="faqdetails">
			<ul>
				<li>
					<b>What are the benefits of being a 9 pointer?</b><br>
					Exemption from 75% attendence Criteria and it will also benefit you during your Placements.
				</li>
				<hr>
				<li>
					<b>Does this Exemption also include SoftSkills as well as Lab?</b><br>
					Yes, but instead of worrying for this thing, focus on getting a 9 CGPA.
				</li>
				<hr>
				<li>
					<b>Is is mandatory to be part of a Clubs and Chapters?</b><br>
					No, it is totally upto you.But it is better to be atleast in one Club/Chapter.It increases your social interaction with fellow students.
				</li>
				<hr>
				<li>
					<b>When does hostel room allotment takes place?</b><br>
					It generally takes place in March end(Winter Semester).
				</li>
				<hr>
				<li>
					<b>On what basis is room alloted and does gpa play any role in it?</b><br>
					Yes, hostel rooms are alloted on the basis of your NCGPA rank which is calculated based on your CGPA only.
				</li>
				<hr>
				<li>
					<b>What is FFCS?</b><br>
					It stands for Fully Flexible Credit System. It helps you to build your timetable as per your wish and let you choose subjects of your wish too.
				</li>
				<hr>
				<li>
					<b>How to regiser for extra co-curricular activities?</b><br>
					It can be done by logging in to your vtop account and then go to extra co-curricular tab present in the left hand side and you will see the various activities provided by VIT.
				</li>
				<hr>
				<li>
					<b>What is QCM?</b><br>
					It stands for Quality Circle Meeting where you can discuss your problems regarding any subject or the faculty with your HOD and School Co-ordinator.
				</li>
				<hr>
				<li>
					<b>Where to go if I have a start-up idea?</b><br>
					VIT has its own start-up incubation center which is located in TT Ground Floor. If your idea is good enough they will provide you with funds and all basic requirements.
				</li>

				<hr>
				<!-- <?php 
					if(isset($_POST['postbutton'])){
						echo "<li>".$_POST['que']."<li>";
					}
				?> -->
			</ul>
		</div>

		<p style="font-size: 150%;"><b>Post your Questions following:</b></p>
		<div>
			<form method="POST" action="<?php $_PHP_SELF ?>">
				<input type="text" name="que" placeholder="Question">
				<input type="submit" name="postbutton" value="Post">
			</form>	
		</div>

		<div class="further">
			<h3>Got some more Queries?</h3>
			<p>Contact us on : +91 7728968988</p>
			<p>Mail us on : communication_wizard@gmail.com</p>
		</div>
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