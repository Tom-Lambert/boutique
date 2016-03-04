<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/models/sousCategorie.php');
class Controller_SousCategorie {

	public function listSousCategorie(){
		$sousCategorie = new Model_SousCategorie();
		$listeSousCategorie = $sousCategorie->listSousCategorie();
	}

	public function idSousCategorie(){
		$idSousCategorie = new Model_SousCategorie();
		$listeIdSousCategorie = $idSousCategorie->listIdSousCategorie();
	}

	public function listSousCategorieSonorisation(){
		$sousCategorieSonorisation = new Model_SousCategorie();
		$listeSousCategorieSonorisation = $sousCategorieSonorisation->listSousCategorieSonorisation();
	}
	public function listSousCategorieDeejay(){
		$sousCategorieDeejay = new Model_SousCategorie();
		$listeSousCategorieDeejay = $sousCategorieDeejay->listSousCategorieDeejay();
	}
	public function listSousCategorieEclairage(){
		$sousCategorieEclairage = new Model_SousCategorie();
		$listeSousCategorieEclairage = $sousCategorieEclairage->listSousCategorieEclairage();
	}

	public function nbrSousCategorie(){ 
		$SousCategorie = new Model_SousCategorie();
		$nbrSousCategorie = $SousCategorie->nbrSousCategorie();
		return $nbrSousCategorie;
	}
}