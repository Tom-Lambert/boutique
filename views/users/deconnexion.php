<?php

session_destroy(); //On détruit le cookie de l'identifiant.
require_once($_SERVER['DOCUMENT_ROOT']."/imie/boutique/index.php"); //On revient au départ.
?>