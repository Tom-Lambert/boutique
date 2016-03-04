<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
<h1 class="titre__first">Inscription:</h1>
<form method="POST" class="form-horizontal">
  <div class="form-group">
    <label  class="col-sm-4 control-label">Nom</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="nom" placeholder="nom">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Prenom</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="prenom" placeholder="prenom">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Age</label>
    <div class="col-sm-3">
      <input type="number" class="form-control"  name="age" placeholder="age">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Pseudo</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="pseudo" placeholder="pseudo">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Email</label>
    <div class="col-sm-3">
      <input type="email" class="form-control"  name="email" placeholder="email">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Mot de passe</label>
    <div class="col-sm-3">
      <input type="password" class="form-control"  name="mdp" placeholder="mot de passe">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Confirmation</label>
    <div class="col-sm-3">
      <input type="password" class="form-control"  name="check_password" placeholder="confirmation">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Adresse</label>
    <div class="col-sm-1">
      	<input type="number" class="form-control" name="nbRue" placeholder="num">
    </div>
    <div class="col-sm-2">
		<input type="text" class="form-control" name="adresse" placeholder="xxx">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Ville</label>
    <div class="col-sm-3">
      <input type="text" class="form-control"  name="ville" placeholder="ville">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-4 control-label">Code Postal</label>
    <div class="col-sm-3">
      <input type="number" class="form-control"  name="codePostal" placeholder="Code Postal">
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <input type="submit" class="btn btn-default" name="valid" value="Inscription">
    </div>
  </div>
  <!--
<div class="container">
	<div class="row">
		<h1 class="titre__first">Inscription:</h1>
		<form method="POST">
			<p>nom:</p>
			<input type="text" name="nom" placeholder="xxx">

			<p>prenom:</p>
			<input type="text" name="prenom" placeholder="xxx">

			<p>age:</p>
			<input type="number" name="age" placeholder="xxx">

			<p>pseudo:</p>
			<input type="text" name="pseudo" placeholder="xxx">

			<p>Email:</p>
			<input type="email" name="email" placeholder="xxx@xxx.com">

			<p>mot de passe:</p>
			<input type="password" name="mdp" placeholder="xxx">

			<p>retapper le mot de passe:</p>
			<input type="password" name="check_password" placeholder="xxx">

			<p>Adresse:</p>
			<p>
				<input type="number" name="nbRue" placeholder="xxx">,
				<input type="text" name="adresse" placeholder="xxx"><br>
			</p>
			<p>ville:</p>
			<input type="text" name="ville" placeholder="xxx">
			<p>Code Postal:</p>
			<input type="text" name="codePostal" placeholder="xxx">
			<br>
			<input type="submit" name="valid" value="Valider">
		</form>
	</div>
</div>-->
<?php 
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/footer.php");
?>