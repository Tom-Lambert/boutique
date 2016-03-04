<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/models/edit.php");
	class Controller_Edit{

		public function edit() {

			if (!empty($_POST)) {	
				$nom = htmlspecialchars($_POST['nom']);
				$prenom = htmlspecialchars($_POST['prenom']);
				$age = htmlspecialchars($_POST['age']);
				$pseudo = htmlspecialchars($_POST['pseudo']);
				$email = htmlspecialchars($_POST['email']);
				$mdp = htmlspecialchars($_POST['mdp']);
				$check_password = htmlspecialchars($_POST['check_password']);
				$nbRue = htmlspecialchars($_POST['nbRue']);
				$adresse = htmlspecialchars($_POST['adresse']);
				$ville = htmlspecialchars($_POST['ville']);
				$codePostal = htmlspecialchars($_POST['codePostal']);

				$id = new Model_Edit();
				$idPseudo = $id->getIdPseudo($pseudo);
				
				if(strlen($mdp) < 5 || $mdp != $check_password){

					if ($mdp != $check_password) {
						$error = 'retapper le mot de passe';
					}
					elseif (strlen($mdp) < 5) {
						$error = 'saisir un mot de passe plus long';
					}
				}
				else{
					$edit = new Model_Edit();
					$EditProfil = $edit->edit($nom,$prenom,$age,$pseudo,$email,$mdp,$nbRue,$adresse,$ville,$codePostal);
					require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/editSuccess.php");
				}
			}
			else{
				require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/edit.php");
			}
		}
		public function infoProfil() {
			$profil = new Model_Edit();
			$infoProfil = $profil->infoPseudo();
			require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/users/edit.php');
		}
	}