<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/models/marque.php');

class Controller_Marque {

	public function nbrMarque(){ 
		$marques = new Model_Marque();
		$nbrMarque = $marques->nbrMarque();
		return $nbrMarque;
	}

	public function listMarque(){ 
		$marque = new Model_Marque();
		$listMarque = $marque->listMarque();
		return $listMarque;
	}

	public function addMarque(){ 
		if (!empty($_POST)) {	
			$nom = htmlspecialchars($_POST['nom']);

			$marque = new Model_Marque();
			$addMarque = $marque->addMarque($nom);
			require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/admin/addMarque.php");
		}
		else{
			require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/admin/addMarque.php");	
		}

	}

}