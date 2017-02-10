<?php
if (! isset ( $_SESSION )) {
	session_start ();
}
class HeadController {
	public function head() {
		$titre = "INCEPTIME";
		$styles = [ 
				"views/menu/menu.css" 
		];
		require_once ('views/head/head.php');
	}
}
?>