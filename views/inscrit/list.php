<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>

<div class="container ">
	<h1 class="titre__first">Gestion des Utilisateurs</h1>
	<div class="table-responsive">
	<table class="table">
		<tr>
			<th>Pseudo</th>
			<th>Nom</th>
			<th>Prenom</th>
			<th>Age</th>
			<th>Modifier/Supprimer</th>
		</tr>
<?php

	foreach($listeUser as $inscription){
?>
		
			<tr>
				<td><?php echo $inscription['pseudo']; ?></td>
				<td><?php echo $inscription['nom']; ?></td>
				<td><?php echo $inscription['prenom']; ?></td>
				<td><?php echo $inscription['age']; ?></td>
				<td><a href="">modifier/supprimer</a></td>
			</tr>
		

	<?php
	}
	?>
		</table>
	</div>
</div>
<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>