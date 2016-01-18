<?php
	$controller = "";
	$action = "";

	session_start();

	if(!empty($_GET['c']) && !empty($_GET['a'])){
		$controller = $_GET['c'];
		$action = $_GET['a'];
	}
	//si les champs sont vide nous envois à la page d'accueil
	if ($controller == "" && $action == "") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/home.php");
	}

	// envois à la liste des enceintes
	elseif ($controller == "article" && $action == "enceinte")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticleEnceinte();
	}
	// envois à la liste des amplis
	elseif ($controller == "article" && $action == "amplificateur")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticleAmplificateur();
	}
	// envois à la description d'un article
	elseif ($controller == "article" &&  $action == "view")
	{
		if (empty($_GET['id']))
		{
			echo "<p>il manque l'id du produit</p>";
		}
		else
		{
			require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
			$controller_Article = new Controller_Article();
			$id = intval($_GET['id']);
			$controller_Article->viewArticle($id);
		}
	}
	// envois à la page d'inscription
	elseif ($controller == "user" && $action == "inscription") 
	{
			require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/inscription.php");
			$controllerInscription = new Controller_Inscription();
			$controllerInscription->addInscriptions();
	}
	// envois à la page de connexion
	elseif ($controller == "user" && $action == "connexion") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/connexion.php");
		$controllerConnexion = new Controller_Connexion();
		$controllerConnexion->connexion();
	}
	// envois à la page de déconnexion
	elseif ($controller == "user" && $action == "deconnexion") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/deconnexion.php");
		$controllerDeconnexion = new Controller_Deconnexion();
		$controllerDeconnexion->deconnexion();
	}
	// envois à la page d'ajout d'un article
	elseif ($controller == "article" && $action == "add") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
			$controller_Article = new Controller_Article();
			$controller_Article->addArticle();
	}
?>