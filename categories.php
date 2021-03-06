<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<title>Catégories</title>
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
		<p>Catégories</p>
	</div>

	<div class="loader"></div>
	

	<div class="w3-content" style="max-width: 1000px">
		<a href="meubles.php"> <img class="mySlides" src="views/pictures/table.jpg" href>
		</a> <a href=clothes.php> <img class="mySlides" src="views/pictures/clothes.jpg">
		</a> <a href="foods.php"> <img class="mySlides" src="views/pictures/miel.jpg">
		</a>
		<div class="w3-row-padding w3-section">
			<div class="w3-col s4">

				<img class="demo w3-opacity w3-hover-opacity-off" src="views/pictures/table.jpg"
					style="width: 100%" alt="meubles" onclick="currentDiv(1)">

			</div>
			<div class="w3-col s4">

				<img class="demo w3-opacity w3-hover-opacity-off" src="views/pictures/clothes.jpg"
					style="width: 100%" onclick="currentDiv(2)">
			</div>
			<div class="w3-col s4">

				<img class="demo w3-opacity w3-hover-opacity-off" src="views/pictures/miel.jpg"
					style="width: 100%" onclick="currentDiv(3)">

			</div>
		</div>
	</div>

	<footer class="footer">Vous devez choisir entre la boutique de MEUBLES, de VÊTEMENTS ou de NOURRITURES </footer>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="main.js"></script>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

<script type="text/javascript"
		src="http://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
		$(".loader").fadeOut("1000");
		})
</script>



</html>

