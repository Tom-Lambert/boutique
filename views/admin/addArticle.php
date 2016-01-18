<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/models/marque.php");
$nbMarque = new Model_Marque();
$nbMarque->nbrMarque();

$listMarque = new Model_Marque();
$listMarque->listMarque();
?>
<div class="container">
	<div class="row">
		<h1 class="titre__first">Ajout d'un article:</h1>
		<form method="POST">
			<p>nom:</p>
			<input type="text" name="nom" placeholder="xxx">

			<p>prix:</p>
			<input type="number" name="prix" placeholder="xxx">

			<p>marque:</p>
			<SELECT name="id_Marque" size="1">
				<OPTION value="1">elokance</OPTION>
				<OPTION value="2">behrinher</OPTION>
				<OPTION value="3">ibiza</OPTION>
				<OPTION value="4">yamaha</OPTION>
				<?php 
					for ($i=0; $i < $nbMarque; $i++) { 
						echo '<OPTION value="' . $nbMarque . '">' . $listMarque . '</OPTION>';
					}
				?>
				
			</SELECT>
			

			<p>souscategorie:</p>
			<SELECT name="id_SousCategorie" size="1">
				<OPTION value="1">enceinte</OPTION>
				<OPTION value="2">amplificateur</OPTION>
			</SELECT>
			<br>
			<input type="submit" name="valid" value="Valider">
		</form>
	</div>
</div>