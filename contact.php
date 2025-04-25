<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact Us - Digitize</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<style type="text/css">
		header{
			background-color: bisque;
			color: green;
			padding: 20px 0;
		}
		nav ul{
			list-style-type: none;
			margin: 1;
			padding: 1;
			display: flex;
			justify-content: space-evenly;
		}
		nav ul li a{
			color: green;
			text-decoration: blink;
			padding: 10px 20px;
			display: block;
		}
		nav ul li a:hover{
			background-color: bisque;
		}
		footer{
			background-color: dimgrey;
			font-weight: bold;
			padding: 10px 0;
		}
	</style>
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="williams.portfolio">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="services.php">Services</a></li>
			</ul>
		</nav>
	</header>
<main>
	<section>
		<h1>Contact Us</h1>
		<form action="submit_contact.php" method="POST">
			<label>Your Name</label>
			<input type="text" name="name" placeholder="enter your name" required><br>

			<label>e-Mail</label>
			<input type="e-Mail" name="e-Mail" placeholder="@gmail.com" required><br>

			<label>Message</label><br>
			<textarea name="Message" placeholder="enter text" rows="8" required></textarea><br><br>

			<button type="submit">Send Message</button>
		</form>
	</section>
</main>

    <footer>
    	<p>&copy; 2024 Digitize Graphics Design Company. All Rights Reserved.</p>
    </footer>
    <script src="js/script.js"></script>

</body>
</html>