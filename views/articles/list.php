<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>

<div class="container ">
	<h1 class="titre__first">coucou,je suis la vue listing produit</h1>
	<div class="row article__center">
<?php
	foreach($listeArticle as $article){
?>
<a href="/imie/boutique/index.php?c=article&a=detail&id=<?= $article['numero_series']; ?>" class="col-md-3 col-sm-6 col-xs-12 article ">
	
		
		<div class="article__titre"><?php echo $article['nom']; ?></div>
		<div><?php echo '<img src="/imie/boutique/imgArticles/'.$article['img'].'" class="article__img">'; ?></div>
		<div class="article__prix"><?php echo $article['prix'] . '€'; ?></div>
		
	
</a>
	<?php
	}
	?>
	</div>
</div>

<?php 
	require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
 ?>