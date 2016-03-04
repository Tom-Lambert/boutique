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

/*require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/controllers/sousCategorie.php');
	$sousCategorieSonorisation = new Model_SousCategorie();
    $listeSousCategorieSonorisation = $sousCategorieSonorisation->listSousCategorieSonorisation();

    echo $sousCategorieSonorisation[0][0];
	foreach($listeSousCategorieSonorisation as $sousCategorieSonorisation){
		
		if ($controller == "article" && $action == $sousCategorieSonorisation['nom']){
    		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
			$controller_article = new Controller_Article();
			$controller_article->listArticleSousCategorie($id);
		}
	}*/
	// envois à la liste des enceintes
	elseif ($controller == "article" && $action == "Enceinte")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticleEnceinte();
	}
	// envois à la liste des amplis
	elseif ($controller == "article" && $action == "Amplificateur")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticleAmplificateur();
	}

	elseif ($controller == "article" && $action == "Platine CD")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticlePlatineCD();
	}

	elseif ($controller == "article" && $action == "Tracer")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticleTracer();
	}
	// envois à la description d'un article
	elseif ($controller == "article" &&  $action == "view" )
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

	elseif ($controller == "user" && $action == "view") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/edit.php");
		$controllerView = new Controller_Edit();
		$controllerView->infoProfil();
	}

	elseif ($controller == "user" && $action == "edit") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/edit.php");
		$controllerEdit = new Controller_Edit();
		$controllerEdit->edit();
	}
	// envois à la page d'ajout d'un article
	elseif ($controller == "article" && $action == "add") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
			$controller_Article = new Controller_Article();
			$controller_Article->addArticle();
	}

	elseif ($controller == "article" && $action == "delete") 
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
			$controller_Article = new Controller_Article();
			$controller_Article->deleteArticle();
	}

	elseif ($controller == "article" && $action == "detail")
	{
		$id = $_GET['id'];
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->detailArticle($id);
	}

	elseif ($controller == "article" && $action == "list")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/article.php");
		$controller_article = new Controller_Article();
		$controller_article->listArticle();
	}

	elseif ($controller == "user" && $action == "list")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/inscription.php");
		$Controller_Inscription = new Controller_Inscription();
		$Controller_Inscription->listUser();
	}

	elseif ($controller == "contact" && $action == "contact")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/contact.php");
		$Controller_Contact = new Controller_Contact();
		$Controller_Contact->contact();
	}

	elseif ($controller == "marque" && $action == "add")
	{
		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/marque.php");
		$Controller_Marque = new Controller_Marque();
		$Controller_Marque->addMarque();
	}
?>