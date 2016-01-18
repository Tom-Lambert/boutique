<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");

	class Model_Connexion
	{
		
		private $db;
			
		public function __construct() {
			$this->db = DB::getInstance();
		}

		public function getLog($pseudo)
			{
				$query = "SELECT mdp FROM utilisateurs WHERE pseudo ='" . $pseudo . "';";
				$resultat = $this->db->get($query);
				return $resultat;
			}
	}

?>
