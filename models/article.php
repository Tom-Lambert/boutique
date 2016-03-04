<?php
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/library/db.php");
	class Model_Article {
		private $db;
		public function __construct() {
			$this->db = DB::getInstance();
		}

		public function listArticleSousCategorie($id) {
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie =" . $id . ";";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listArticleEnceinte() {
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 1;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listArticleAmplificateur() {
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 2;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listArticlePlatineCD() {
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 6;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function listArticleTracer() {
			$query = "SELECT * FROM articles WHERE articles.id_SousCategorie = 18;";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function loadArticle($id) {
			$query = "SELECT * FROM articles WHERE articles.numero_series =" . $id . ";";
			$resultat = $this->db->get($query);
			return $resultat;
		}

		public function addArticle($nom,$prix,$id_Marque,$id_SousCategorie,$description,$img) {
			$query = 'INSERT INTO articles(nom, prix, id_Marque, id_SousCategorie, description, img) VALUES (:nom, :prix, :id_Marque, :id_SousCategorie, :description, :img)';
			$tab = array(
			'nom' => $nom,
			'prix' => $prix,
			'id_Marque' => $id_Marque,
			'id_SousCategorie' => $id_SousCategorie,
			'description' => $description,
			'img' => $img	
			);

			$resultat = $this->db->execute($query,$tab);
			return $resultat;
		}

		public function listArticle() {
				$query = "SELECT * FROM articles;";
				$resultat = $this->db->get($query);
				return $resultat;
			}

		public function deleteArticle($numero_series) {
				$query = "DELETE FROM articles WHERE numero_series = :numero_series";
				$tab = array(
					'numero_series' => $numero_series
					);
				$resultat = $this->db->execute($query,$tab);
				return $resultat;

		}
}

?>