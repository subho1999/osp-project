<!DOCTYPE html>
<html>
<head>
	<title>Communication Wizard</title>
	<style>
	@font-face {
		    font-family: 'Anurati';
		    src: url("fonts/Anurati-Regular.otf");
		}
		html{
			margin: 0;
			padding: 0;
		}
		body{
			font-family:Bahnschrift Light;
			text-align: center;
			width: 100%;
			margin: 0;
			padding: 0;
		}
		.heading{
			display: flex;
			justify-content: space-between;
			background-color: #404040;
			color: white;
			padding: 1%;
		}
		.topnav {
		background-color: #333;
		overflow: hidden;
		}

		.topnav a {
		float: left;
		color: #f2f2f2;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
		font-size: 125%; 
		}

		.topnav a:hover {
		background-color: rgb(109, 109, 109);
		color: black;
		}

		.topnav a.active {
		background-color: rgb(72, 73, 72);
		color: white;
		margin-left: 660px;
		margin-top:10px;
		}

		#abc{
			margin-left: 40%;
		}
		
		.ab{
			margin-top:10px;
		}
		/* .navbar{
			padding: 1%;
			margin-top: 0.7%;
			width: 60%;
		}
		.navbar a{
			text-decoration: none;
			padding: 3%;
			color: white;
			font-size: 110%;
		}
		.navbar a:hover{
			color: grey;
			background-color: #d9d9d9;
		} */
		.faqdetails{
			text-align: left;
			padding: 2%;
			font-size: 150%;
		}
		.faqbox{
			background-color: #4db8ff;
			padding-top: 2%;
		}
		h1.fs{
			font-family: Anurati;
			font-size: 300%;
			color: #003d66;
		}
		.further{
			text-align: left;
			padding-left: 4%;
			padding-bottom: 2%;
		}
		.further h3{
			font-size: 150%;
		}
		.further p{
			font-size: 130%;
		}
		.innovation{
			background-color: black;
			color: white;
			font-size: 200%;
		}
		.main-slideshow-container{
			position: relative;
			background-image: url("img/8.jpg");
			border-radius: 5px;
		}
	</style>
</head>
<body>

		<div class="topnav">
			<img align="left" src="img/logo1.png">
			<a id="abc"class="ab" href="homepage.php">Home</a>
			<a class="ab" href="aboutus.php">About</a>
			<a class="ab" href="faqs.php">FAQs</a>
			<a class="ab" href="books.php">Books</a>	
			<a class="ab" href="qp.php">Question Papers</a>
			<a class="ab" href="login.php">Login</a>
			<a class="ab" href="signup.php">Signup</a>
		</div>
</body>
</html>