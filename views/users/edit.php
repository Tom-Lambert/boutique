<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
<h1 class="titre__first">Profil</h1>

<?php
foreach($infoProfil as $profil){
}


?>



<form method="POST" class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Nom</label>
    <div class="col-sm-3">
    <?php  echo '<input type="text" class="form-control"  name="nom" placeholder="nom" value="'. $profil['nom'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Prenom</label>
    <div class="col-sm-3">
      <?php  echo '<input type="text" class="form-control"  name="prenom" placeholder="prenom" value="'. $profil['prenom'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Age</label>
    <div class="col-sm-3">
      <?php  echo '<input type="number" class="form-control"  name="age" placeholder="age" value="'. $profil['age'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Pseudo</label>
    <div class="col-sm-3">
      <?php  echo '<input type="text" class="form-control"  name="pseudo" placeholder="pseudo" value="'. $profil['pseudo'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Email</label>
    <div class="col-sm-3">
      <?php  echo '<input type="email" class="form-control"  name="email" placeholder="email" value="'. $profil['email'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Mot de passe</label>
    <div class="col-sm-3">
      <input type="password" class="form-control" name="mdp" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Confirmation</label>
    <div class="col-sm-3">
      <input type="password" class="form-control"  name="check_password" placeholder="Confirmation">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Adresse</label>
    <div class="col-sm-1">
      	<?php  echo '<input type="number" class="form-control" placeholder="nbRue" name="nbRue" value="'. $profil['nbRue'].'">' ;?>
    </div>
    <div class="col-sm-2">
		<?php  echo '<input type="text" class="form-control" placeholder="adresse" name="adresse" value="'. $profil['adresse'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Ville</label>
    <div class="col-sm-3">
      <?php  echo '<input type="text" class="form-control"  placeholder="ville" name="ville" value="'. $profil['ville'].'">' ;?>
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Code Postal</label>
    <div class="col-sm-3">
      <?php  echo '<input type="number" class="form-control"  placeholder="codePostal" name="codePostal" value="'. $profil['codePostal'].'">' ;?>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <input type="submit" class="btn btn-default" name="valid" value="Modifier">
    </div>
  </div>
</form>
<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>