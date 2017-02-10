<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Meubles</title>
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
		<p>Meubles</p>
	</div>

	<div class="all">
	<div class="img">
	<div class="container">
  <a target="_blank" href="views/pictures/lavabo.jpg">
    <img src="views/pictures/lavabo.jpg" alt="Lavabo" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 h</div>
  </div>
  </div>
  <div class="desc">Lavabo</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/bureau.jpg">
    <img src="views/pictures/bureau.jpg" alt="Bureau" width="600" height="600">
  </a>
   <div class="overlay">
  	<div class="price">Cost :  1 h 30m</div>
  </div>
  </div>
  <div class="desc">Bureau</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/table1.jpg">
    <img src="views/pictures/table1.jpg" alt="Shoes" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 h 10m</div>
  </div>
  </div>
  <div class="desc">Table</div>
	</div>
</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/chevet.jpg">
    <img src="views/pictures/chevet.jpg" alt="Bureau" width="600" height="600">
  </a>
   <div class="overlay">
  	<div class="price">Cost :  1 h 30m</div>
  </div>
  </div>
  <div class="desc">Chevet</div>
	</div>

<div class="img">
<div class="container">
  <a target="_blank" href="views/pictures/buffet.jpg">
    <img src="views/pictures/buffet.jpg" alt="Shoes" width="600" height="600">
  </a>
  <div class="overlay">
  	<div class="price">Cost : 1 h 10m</div>
  </div>
  </div>
  <div class="desc">Buffet</div>
	</div>
</div>


	<div class="loader"></div>

	<footer class="footer">Voici la boutique de meubles</footer>

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
</script>
</html>

