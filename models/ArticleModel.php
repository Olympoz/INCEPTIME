<?php
class ArticleModel {
	public function listArticles() {
		require_once ('classes/database.php');
		$instancedb = DB::getinstance ();
		$requete = $instancedb->bdd->query ( "SELECT * FROM articles ORDER BY id DESC LIMIT 5" );
		$resultat = $requete->fetchAll ();
		return $resultat;
	}
}
?>