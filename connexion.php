<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<title>Connexion</title>
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

$head->head ();
$menu->menu ();

if (! isset ( $_SESSION ['login'] ) || $_SESSION ['login'] == 0) { // Si non connecté
	
	if (isset ( $_GET ['verify'] ) && $_GET ['verify'] == true && isset ( $_POST ["id"] ) && isset ( $_POST ["pwd"] )) { // si demande de connection et informations presentes
		echo "<h2>Verification des information de connection</h2>";
		
		require_once ('classes/database.php');
		$instancedb = DB::getinstance ();
		$req = $instancedb->bdd->query ( "SELECT * FROM user WHERE user_email LIKE '" . $_POST ["id"] . "'" );
		$result = $req->fetch ();
		echo "req = ";
		echo $result ['user_password'] . "<br>User grade = ";
		echo $result ['user_grade'] . "<br>Mot de passe = ";
		echo $_POST ['pwd'] . "<br>";
		if (password_verify ( $_POST ["pwd"], $result ['user_password'] )) {
			echo "Bon mot de passe";
			$_SESSION ['login'] = $result ['user_grade'] + 1;
		} else {
			echo "Mauvais identifiant ou mot de passe";
			$_SESSION ['login'] = 0;
		}
	} else {
		echo "<h1>Formulaire de connexion</h1>";
		require_once ('views/login/form.php');
	}
} elseif ($_SESSION ['login'] == 1 || $_SESSION ['login'] == 2) { // si connecte en temps qu'admin ou utilisateur
	
	if (isset ( $_GET ['unlog'] ) && $_GET ['unlog'] == true) {
		echo "<h2>Déconnection</h2>";
		$_SESSION ['login'] = 0;
	} else {
		echo "<h2>Redirection vers  l'acceuil</h2>";
	}
} else {
	echo "ERREUR 404";
}
?>
	</div>

	<div class="loader"></div>

	<footer class="footer">Ici vous devez vous connecter</footer>

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