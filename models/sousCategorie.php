<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");
	class Model_SousCategorie {
		private $db;
		public function __construct() {
			$this->db = DB::getInstance();
		}
		
		public function listSousCategorie() {
			$query = "SELECT * FROM souscategories ;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listSousCategorieSonorisation() {
			$query = "SELECT * FROM souscategories WHERE id_Categorie = 1;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listSousCategorieDeejay() {
			$query = "SELECT * FROM souscategories WHERE id_Categorie = 2;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listSousCategorieEclairage() {
			$query = "SELECT * FROM souscategories WHERE id_Categorie = 3;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function nbrSousCategorie(){
			$query = "SELECT COUNT(*) as nbrSousCategorie FROM SousCategories;";
			$resultat = $this->db->get($query);
			return $resultat;
		}
	}
