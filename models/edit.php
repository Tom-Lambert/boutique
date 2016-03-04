<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");

	class Model_Edit {

		private $db;

		public function __construct() {
			$this->db = DB::getInstance();
		}
		
		public function edit($nom,$prenom,$age,$pseudo,$email,$mdp,$nbRue,$adresse,$ville,$codePostal) {
			$query = "UPDATE utilisateurs SET nom = :nom, prenom = :prenom, age = :age, pseudo = :pseudo, email = :email, mdp = :mdp, nbRue = : nbRue, adresse = :adresse,*/ville = :ville, codePostal = :codePostal 
			WHERE pseudo ='" . $_SESSION['pseudo'] . "';";
			
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

				$resultat = $this->db->execute($query,$tab);
				return $resultat;
		
		}

		public function getIdPseudo($pseudo) {
				$query = "SELECT EXISTS(SELECT id_utilisateur FROM utilisateurs WHERE pseudo ='" . $pseudo . "');";
				$resultat = $this->db->get($query);
				return $resultat;
		}

		public function infoPseudo() {
				$query = "SELECT * FROM utilisateurs WHERE pseudo ='" . $_SESSION['pseudo'] . "';";
				$resultat = $this->db->get($query);
				return $resultat;
			}
	}