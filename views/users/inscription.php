<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
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
			<p>Code Postal:</p>
			<input type="text" name="codePostal" placeholder="xxx">
			<br>
			<input type="submit" name="valid" value="Valider">
		</form>
	</div>
</div>