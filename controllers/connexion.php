<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/models/connexion.php");
	class Controller_Connexion
	{
		public function connexion()
		{
			if (!empty($_POST)) 
			{	
				$pseudo = htmlspecialchars($_POST['pseudo']);
				$mdp = htmlspecialchars($_POST['mdp']);

				$log = new Model_Connexion();
				$logUser = $log->getLog($pseudo);
				if ($mdp == $logUser[0][0]) 
				{
					$_SESSION['pseudo'] = $pseudo;
					require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/home.php");
					

				}
				else
				{
					$error = "votre pseudo ou votre mot de passe n'est pas valide.";
					require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/connexion/error.php");
				}
			} 
			else 
			{
				require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/connexion.php");
			}
		}
	}