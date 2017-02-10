<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Clothes</title>
<link rel="shortcut icon" href="views/pictures/sablier.ico">
</head>
<body class="body">

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
		<p>Vêtements</p>
	</div>

	<div class="loader"></div>

	<div class="all">
	<div class="img">
	<div class="container">
  <a target="_blank" href="views/pictures/sweat.jpg">
    <img src="views/pictures/sweat.jpg" alt="Sweat" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 h</div>
  </div>
  </div>
  <div class="desc">Sweat</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/jean.jpg">
    <img src="views/pictures/jean.jpg" alt="Jean" width="600" height="600">
  </a>
   <div class="overlay">
  	<div class="price">Cost :  1 h 30m</div>
  </div>
  </div>
  <div class="desc">Jean</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/shoes.jpg">
    <img src="views/pictures/shoes.jpg" alt="Shoes" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 h 10m</div>
  </div>
  </div>
  <div class="desc">Shoes</div>
	</div>
</div>

	

	<footer class="footer">Voici la boutique de vêtements</footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<script type="text/javascript"
		src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
		$(".loader").fadeOut("1000");
		})
</script>


</html>