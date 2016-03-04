<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/models/article.php');
class Controller_Article {

	public function listArticleSousCategorie($id){
		$sousCategorieSonorisation = new Model_Article();
		$listeSousCategorieSonorisation = $sousCategorieSonorisation->listArticleSousCategorie($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/list.php');
	}

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

	public function listArticlePlatineCD(){
		$article = new Model_Article();
		$listeArticle = $article->listArticlePlatineCD();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/list.php');
	}

	public function listArticleTracer(){
		$article = new Model_Article();
		$listeArticle = $article->listArticleTracer();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/list.php');
	}

	public function detailArticle($id){
		$articles = new Model_Article();
		$detailArticle = $articles->loadArticle($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/articles/detail.php');
	}
	
	public function addArticle(){

		require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/admin/addArticle.php");
		if (!empty($_POST)) 
		{	
			$nom = htmlspecialchars($_POST['nom']);
			$prix = htmlspecialchars($_POST['prix']);
			$id_Marque = htmlspecialchars($_POST['id_Marque']);
			$id_SousCategorie = htmlspecialchars($_POST['id_SousCategorie']);
			$description = htmlspecialchars($_POST['description']);
			$img = htmlspecialchars($_POST['img']);

			$article = new Model_Article();
			$NewArticle = $article->addArticle($nom,$prix,$id_Marque,$id_SousCategorie,$description,$img);
			require_once($_SERVER['DOCUMENT_ROOT']."imie/boutique/views/admin/addArticleTrue.php");
		}
	}

	public function listArticle(){
		$article = new Model_Article();
		$listeArticle = $article->listArticle();
		require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/views/admin/article.php');
	}
	
	public function deleteArticle($numero_series) {
		$article = new Model_Article();
		$deleteArticle = $article->deleteArticle($numero_series);
		if(!empty($deleteArticle)){
			header('Location : /imie/boutique/index.php?c=article&a=list');
		} else {
			var_dump($deleteArticle);
		}
	}
}
?>