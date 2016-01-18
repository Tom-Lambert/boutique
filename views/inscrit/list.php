<h1>coucou,je suis la vue listing des inscrit</h1>
<?php
	foreach($listeUser as $inscription){
?>
		<h2><?php echo $inscription['pseudo']; ?></h2>
		<p><?php echo $inscription['nom']; ?></p>
		<p><?php echo $inscription['prenomx']; ?></p>
		<p><?php echo $inscription['age']; ?></p>
	<?php
	}
	?>