<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>
<h1 class="titre__first">Connectez-vous:</h1>
	<form method="POST">
		
		<p>Pseudo:</p>
		<input type="text" name="pseudo" placeholder="xxx">
		<p>Mot de passe:</p>
		<input type="password" name="mdp" placeholder="xxx"><br>
		<input type="submit" name="valid" value="Connexion">
	</form>
</body>
</html>