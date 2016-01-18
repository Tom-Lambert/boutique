<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");
	class Model_Article 
	{
		private $db;
		public function __construct() 
		{
			$this->db = DB::getInstance();
		}
		
		public function listArticleEnceinte()
		{
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 1;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listArticleAmplificateur()
		{
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 2;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function loadArticle($id)
		{
			return "chargement de l'article ".$id;
		}

		public function addArticle($nom,$prix,$id_Marque,$id_SousCategorie)
		{
			$query = 'INSERT INTO articles(nom, prix, id_Marque, id_SousCategorie) VALUES (:nom, :prix, :id_Marque, :id_SousCategorie)';
			$tab = array(
			'nom' => $nom,
			'prix' => $prix,
			'id_Marque' => $id_Marque,
			'id_SousCategorie' => $id_SousCategorie,				
			);

			$this->db->execute($query,$tab);
		}

	}

?>