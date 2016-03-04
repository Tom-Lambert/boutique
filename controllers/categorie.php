<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/models/categorie.php');
class Controller_Categorie {

	public function listCategorie(){
		$categorie = new Model_Categorie();
		$listeCategorie = $categorie->listCategorie();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/header.php');
	}
}