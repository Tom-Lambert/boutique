<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/header.php");
?>

<h1 class="titre__first">une erreur est survenu lors de l'inscription, veuillez <?php echo $error ?> .</h1>
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/views/users/inscription.php");