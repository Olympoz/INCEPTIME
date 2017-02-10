<?php
class MenuModel {
	public function listMenus() {
		$resultat = [ 
				
				[ 
						"lien" => "connexion.php",
						"textLien" => "Connexion",
						"visibility" => 1 
				],
				[ 
						"lien" => "x.php",
						"textLien" => "Admin",
						"visibility" => 3 
				],
				[ 
						"lien" => "connexion.php?unlog=true",
						"textLien" => "Déconnection",
						"visibility" => 2 
				],
				[ 
						"lien" => "signin.php",
						"textLien" => "S'enregistrer",
						"visibility" => 1 
				] 
		]
		;
		return $resultat;
	}
}
?>