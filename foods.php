<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Foods</title>
<link rel="shortcut icon" href="views/pictures/sablier.ico">

</head>
<body class="body" >

	<header class="header">

		<button class="hamburger">&#9776;</button>
		<button class="cross">&#735;</button>

	</header>

	<div class="menu">
		<ul>
			<a href="homepage.php"><li>Accueil</li></a>
			<a href="categories.php"><li>Catégories</li></a>
			<a href="panier.php"><li>Votre panier</li></a>
			<a href="connexion.php"><li>Connexion</li></a>
			<a href="signin.php"><li>Enregistrement</li></a>
		</ul>
	</div>

	<div class="titre">
		<p>Nourritures</p>
	</div>

	<div class="loader"></div>

<div class="all">

	<div class="img">
	<div class="container">
  <a target="_blank" href="views/pictures/apple.jpg">
    <img src="views/pictures/apple.jpg" alt="Apple" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 2 min</div>
  </div>
  </div>
  <div class="desc">Apple</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/hamburger.jpg">
    <img src="views/pictures/hamburger.jpg" alt="Hamburger" width="600" height="600">
  </a>
   <div class="overlay">
  	<div class="price">Cost : 10 min</div>
  </div>
  </div>
  <div class="desc">Hamburger</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/burritos.jpg">
    <img src="views/pictures/burritos.jpg" alt="Burritos" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 7 min</div>
  </div>
  </div>
  <div class="desc">Burritos</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/water.jpg">
    <img src="views/pictures/water.jpg" alt="Water" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 min</div>
  </div>
  </div>
  <div class="desc">Water</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/banana.jpg">
    <img src="views/pictures/banana.jpg" alt="Banane" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 6 min</div>
  </div>
  </div>
  <div class="desc">Banane</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/galette.jpg">
    <img src="views/pictures/galette.jpg" alt="Galette" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 10 min</div>
  </div>
  </div>
  <div class="desc">Galette</div>
	</div>

<div class="img" >
<div class="container">
  <a target="_blank" href="views/pictures/raclette.jpg">
    <img src="views/pictures/raclette.jpg" alt="Fromage" width="600" height="600">
  </a>
  <div class="overlay">
    <div class="price">Cost : 10 min</div>
  </div>
  </div>
  <div class="desc">Fromage</div>
  </div>

	</div>

	<footer class="footer">Voici la boutique de nourritures</footer>

</body>
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<script type="text/javascript"
		src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
		$(".loader").fadeOut("1000");
		})
</script>
</html>