<?php

class Controller_Deconnexion
{
	public function deconnexion(){
		session_destroy();
		header('Location: ../boutique/index.php');
	}
	
}