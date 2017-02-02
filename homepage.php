<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>INCEPTIME</title>
</head>
<body class="body">

	<header>

		<button class="hamburger">&#9776;</button>
		<button class="cross">&#735;</button>

	</header>

	<div class="menu">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="categories.php"><li>Catégories</li></a>
			<a href="panier.php"><li>Votre panier</li></a>
			<a href="aboutus.php"><li>About us</li></a>
		</ul>
	</div>

	<p class="title">INCEPTIME</p>
	<div class="loader"></div>
	<footer class="footer">I often find myself designing a website where
		the footer must rest at the bottom of the page, even if the content
		above it is too short to push it to the bottom of the viewport
		naturally.</footer>

	<script type="text/javascript"
		src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
$(window).load(function() {
$(".loader").fadeOut("1000");
})

</script>
</body>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>
</html>