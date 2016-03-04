<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>

<div class="container ">
	<h1 class="titre__first">Gestion des produits</h1>
	<a href="/imie/boutique/index.php?c=article&a=add">Ajouter un article</a>
	<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Nom</th>
			<th>Image</th>
			<th>Prix</th>
			<th>Description</th>
		</tr>
<?php

	foreach($listeArticle as $article){

		echo "<tr>";
		echo '<td class="col-xs-2">'.$article['nom'].'</td>';
		echo '<td class="col-xs-1"><img src="/imie/boutique/imgArticles/'.$article['img'].'" class="admin__article--img"></td>';
		echo '<td class="col-xs-1">'.$article['prix'] . '€</td>'; 
		echo '<td class="col-xs-6">'.$article['description'].'</td>';
		echo '<td class="col-xs-6">'.$article['description'].'</td>';
		echo "</tr>";

	}
	
	?>
	</table>
	</div>
</div>

<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>