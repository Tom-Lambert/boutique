<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");

class Model_Marque
	{
		private $db;
		public function __construct() 
		{
			$this->db = DB::getInstance();
		}

		public function listMarque()
		{
			$query = "SELECT * FROM marques;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		
			$query = "SELECT COUNT(*) FROM marques;";
			$resultat = $this->db->get($query);
			return $resultat;
		}
	}