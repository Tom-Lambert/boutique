<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");
	class Model_Categorie {
		private $db;
		public function __construct() {
			$this->db = DB::getInstance();
		}
		
		public function listCategorie() {
			$query = "SELECT * FROM categories;";
			$resultat = $this->db->get($query);
			return $resultat;
		}
	}