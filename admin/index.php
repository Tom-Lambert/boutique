<?php
	$controller = "";
	$action = "";
	if(!empty($_GET['c']) && !empty($_GET['a'])){
		$controller = $_GET['c'];
		$action = $_GET['a'];
	}
	if($controller == "article" && $action == "add"){
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
	}
	elseif ($controller == "inscription" && $action == "add") 
	{
			require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/inscription.php");
			$controller_Inscription = new Controller_Inscription();
			$controller_Inscription->addInscription();
	}
?>
