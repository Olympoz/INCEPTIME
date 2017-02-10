

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Enregistrement</title>
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

	<div>
		
		<?php
		require_once ("controllers/HeadController.php");
			$head = new HeadController ();
		require_once ('controllers/MenuController.php');
			$menu = new MenuController ();
		require_once ('controllers/SigninController.php');
			$signin = new SigninController ();
			$head->head ();
			$menu->menu ();
			$signin->signin ();
		?>
	</div>

	<div class="loader"></div>



	<footer class="footer">Ici vous devez vous enregistrer</footer>

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