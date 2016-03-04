<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/controllers/marque.php");
?>

<h1 class="titre__first">Ajout d'une marque:</h1>
<form method="POST" class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Nom</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="nom" placeholder="nom">
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