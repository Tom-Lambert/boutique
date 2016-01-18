<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/models/article.php');
class Controller_Article {

	public function listArticleEnceinte(){
		$article = new Model_Article();
		$listeArticle = $article->listArticleEnceinte();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/list.php');
	}

	public function listArticleAmplificateur(){
		$article = new Model_Article();
		$listeArticle = $article->listArticleAmplificateur();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/list.php');
	}

	public function viewArticle($id){
		$articles = new Model_Article();
		$articleDetails = $articles->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/view.php');
	}
	
	public function addArticle()
		{
			if (!empty($_POST)) 
			{	
				$nom = htmlspecialchars($_POST['nom']);
				$prix = htmlspecialchars($_POST['prix']);
				$id_Marque = htmlspecialchars($_POST['id_Marque']);
				$id_SousCategorie = htmlspecialchars($_POST['id_SousCategorie']);


				$article = new Model_Article();
				$NewArticle = $article->addArticle($nom,$prix,$id_Marque,$id_SousCategorie);
				require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/admin/addArticleTrue.php");
			}
			else
			{
				require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/admin/addArticle.php");	
			}
					
		}
	
}
?>