<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/models/inscription.php");
	class Controller_Inscription
	{
		public function addInscriptions()
		{
			if (!empty($_POST)) 
			{	
				$nom = htmlspecialchars($_POST['nom']);
				$prenom = htmlspecialchars($_POST['prenom']);
				$age = htmlspecialchars($_POST['age']);
				$pseudo = htmlspecialchars($_POST['pseudo']);
				$email = htmlspecialchars($_POST['email']);
				$mdp = htmlspecialchars($_POST['mdp']);
				$check_password = htmlspecialchars($_POST['check_password']);
				$nbRue = htmlspecialchars($_POST['nbRue']);
				$adresse = htmlspecialchars($_POST['adresse']);
				$codePostal = htmlspecialchars($_POST['codePostal']);

				$id = new Model_Inscription();
				$idPseudo = $id->getIdPseudo($pseudo);

				if 
				( 					
					strlen($nom) == 0 ||
					strlen($prenom) == 0 ||
					$idPseudo[0][0] == 1 ||

					strlen($mdp) < 5 ||
					$mdp != $check_password
				){
					if (strlen($nom) == 0) {
						$error = 'renseigner votre nom';
					}
					elseif (strlen($prenom) == 0) {
						$error = 'renseigner votre prenom';
					}
					elseif ($mdp != $check_password) {
						$error = 'retapper le mot de passe';
					}
					elseif (strlen($mdp) < 5) {
						$error = 'saisir un mot de passe plus long';
					}
					elseif ($idPseudo[0][0] == 1) {
						$error = 'saisir un autre pseudo';
					}
					require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/inscrit/error.php");
				}
				else
				{
					$inscription = new Model_Inscription();
					$DetailInscription = $inscription->addInscription($nom,$prenom,$age,$pseudo,$email,$mdp,$nbRue,$adresse,$codePostal);
					require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/inscrit/bravo.php");
				}
			}
			else
			{
				require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/inscription.php");	
			}	
		}
	}
?>