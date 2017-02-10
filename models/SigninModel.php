<?php
class SigninModel {
	public function addUser() {
		require_once ('classes/database.php');
		$instancedb = DB::getinstance ();
		$requete = $instancedb->bdd->prepare ( 'INSERT INTO user(user_nom,user_prenom,user_email,user_adress,user_password) VALUES (:nom,:prenom,:email,:adress,:password)' );
		
		if (isset ( $_POST ['nom'] ) && isset ( $_POST ['prenom'] ) && isset ( $_POST ['email'] ) && isset ( $_POST ['adress'] ) && isset ( $_POST ['user_password'] )) {
			echo "Vous venez de remplir le formulaire";
			$requete->execute ( array (
					'nom' => $_POST ['nom'],
					'prenom' => $_POST ['prenom'],
					'email' => $_POST ['email'],
					'adress' => $_POST ['adress'],
					'password' => password_hash ( $_POST ['user_password'], PASSWORD_DEFAULT ) 
			) );
		} else {
			echo "Vous devez remplir le formulaire s'il vous plaît";
		}
		
		// $resultat = $requete->fetchAll();
		// return $resultat;
	}
}
?>