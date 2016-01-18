<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>

<h1 class="titre__first">une erreur est survenu lors de la connexion, <?php echo $error ?></h1>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/connexion.php");