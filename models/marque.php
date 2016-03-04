<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");

class Model_Marque
	{
		private $db;
		public function __construct() 
		{
			$this->db = DB::getInstance();
		}
		
		public function nbrMarque()
		{
			$query = "SELECT COUNT(*) as nbrmarque FROM marques;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listMarque()
		{
			$query = "SELECT * FROM marques;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function addMarque($nom){
			$query = 'INSERT INTO marques(nom) VALUES (:nom)';
			$tab = array('nom' => $nom);
			$this->db->execute($query,$tab);
		}
	}