<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
    ?>
    <h1 class="titre__first"><?php echo $detailArticle[0]['nom']; ?></h1>
    <?php 

	$detailArticle[0][0];
	

	echo '<div class="col-xs-12 col-md-6"><img src="/imie/boutique/imgArticles/'.$detailArticle[0]['img'].'" class="article__img"></div>';
	 
		echo '<div class="col-xs-12 col-md-6">'.$detailArticle[0]['description'];
		echo $detailArticle[0]['prix'] . '€'.'</div>';
?>

<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>