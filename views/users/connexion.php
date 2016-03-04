<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
<h1 class="titre__first">Connectez-vous:</h1>

	<form method="POST" class="form-horizontal">
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Pseudo</label>
	    <div class="col-sm-3">
	      <input type="text" class="form-control"  name="pseudo" placeholder="pseudo">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Mot de passe</label>
	    <div class="col-sm-3">
	      <input type="password" class="form-control"  name="mdp" placeholder="password">
	    </div>
	  </div>
	  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <input type="submit" class="btn btn-default" name="valid" value="Connexion">
    </div>
  </div>
</form>

<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>