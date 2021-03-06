<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");
		class Model_Inscription 
		{
			private $db;
			
			public function __construct() {
				$this->db = DB::getInstance();
			}

			public function addInscription($nom,$prenom,$age,$pseudo,$email,$mdp,$nbRue,$adresse,$ville,$codePostal)
			{
				$query = 'INSERT INTO utilisateurs(nom, prenom, age, pseudo, email, mdp, nbRue, adresse,ville, codePostal) 
				VALUES (:nom, :prenom, :age, :pseudo, :email, :mdp, :nbRue, :adresse, :ville, :codePostal)';
				$tab = array(
				'nom' => $nom,
				'prenom' => $prenom,
				'age' => $age,
				'pseudo' => $pseudo,
				'email' => $email,
				'mdp' => $mdp,
				'nbRue' => $nbRue,
				'adresse' => $adresse,
				'ville' => $ville,
				'codePostal' =>$codePostal
				);

				$this->db->execute($query,$tab);
			}
			public function getIdPseudo($pseudo)
			{
				$query = "SELECT EXISTS(SELECT id_utilisateur FROM utilisateurs WHERE pseudo ='" . $pseudo . "');";
				$resultat = $this->db->get($query);
				return $resultat;
			}

			public function listUser() {
				$query = "SELECT * FROM utilisateurs;";
				$resultat = $this->db->get($query);
				return $resultat;
			}
	}

?>