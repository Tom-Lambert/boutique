<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/marque.php");
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/sousCategorie.php");


$nbMarque = new Controller_Marque();
$nbrMarques = $nbMarque->nbrMarque();

$listeMarque = new Controller_Marque();
$listeMarques = $listeMarque->listMarque();

$nbSousCategorie = new Controller_SousCategorie();
$nbrSousCategorie = $nbSousCategorie->nbrSousCategorie();

$sousCategorie = new Model_SousCategorie();
$listeSousCategorie = $sousCategorie->listSousCategorie();


?>
<h1 class="titre__first">Ajout d'un article:</h1>
<form method="POST" class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Nom</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="nom" placeholder="nom">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Prix</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="prix" placeholder="prix">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Marque</label>
    <div class="col-sm-2">
			<SELECT name="id_Marque" class="form-control" size="1">
				<?php 
					for ($i=1; $i < $nbrMarques[0]['nbrmarque']+1; $i++) { 
						echo '<OPTION value="' . $i . '">' . $listeMarques[$i-1]['nom'] . '</OPTION>';
					}
				?>
			</SELECT>
	</div>
	<div class="col-sm-1">
  		<a class="form-control" href="/imie/boutique/index.php?c=marque&a=add">Ajouter</a>
  	</div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Sous Catégorie</label>
    <div class="col-sm-3">
			<SELECT name="id_SousCategorie" class="form-control" size="1">
				<?php 
					for ($j=1; $j < $nbrSousCategorie[0]['nbrSousCategorie']+1; $j++) { 
						echo '<OPTION value="' . $j . '">' . $listeSousCategorie[$j-1]['nom'] . '</OPTION>';
					}
				?>
			</SELECT>
		</div>
  	</div>
  	<div class="form-group">
    <label  class="col-sm-4 control-label">Description</label>
    <div class="col-sm-3">
    	<TEXTAREA class="form-control" name="description" rows=5 cols=40 placeholder="Description"></TEXTAREA>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Image</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="img" placeholder="Image.jpg">
    </div>
  </div>
  	<div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <input type="submit" class="btn btn-default" name="valid" value="Ajouter">
    </div>
  </div>



<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>