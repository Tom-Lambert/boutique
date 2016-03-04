<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/imie/boutique/controllers/sousCategorie.php');


    $sousCategorieSonorisation = new Model_SousCategorie();
    $listeSousCategorieSonorisation = $sousCategorieSonorisation->listSousCategorieSonorisation();

    $sousCategorieDeejay = new Model_SousCategorie();
    $listeSousCategorieDeejay = $sousCategorieDeejay->listSousCategorieDeejay();

    $sousCategorieEclairage = new Model_SousCategorie();
    $listeSousCategorieEclairage = $sousCategorieEclairage->listSousCategorieEclairage();

   
?>
<!DOCTYPE html> 
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Sono-Shop
        </title>

        <link rel="stylesheet" href="bootstrap.css">
        <link rel="stylesheet" href="home.css">
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    </head>
    <body> 
        <header>
                

                    <ul class="menu">
           
                        <li class="menu__left house menu__list"><a href="/imie/boutique/index.php" class="menu__link--sidebar" id="link"></a></li>
                        <li class="menu__left titre break__right">sono-shop</li>
                        <li class="menu__list"><a href="#" class="menu__categorie menu__link--sidebar">Sonorisation</a>
                            <ul class="menu__list--souscategorie">
                                <?php   
                                    foreach($listeSousCategorieSonorisation as $sousCategorieSonorisation){
                                        echo'<li class="menu__list--link"><a href="/imie/boutique/index.php?c=article&a='.$sousCategorieSonorisation['nom'].'" class="menu__link">'.$sousCategorieSonorisation['nom'].'</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu__list"><a href="#" class="menu__categorie menu__link--sidebar">Deejay</a>
                            <ul class="menu__list--souscategorie">
                                <?php   
                                    foreach($listeSousCategorieDeejay as $sousCategorieDeejay){
                                        echo'<li class="menu__list--link"><a href="/imie/boutique/index.php?c=article&a='.$sousCategorieDeejay['nom'].'" class="menu__link">'.$sousCategorieDeejay['nom'].'</a></li>';
                                    }
                                ?>
                            </ul>
                        </li>
                        <li class="menu__list"><a href="#" class="menu__categorie menu__link--sidebar">Eclairage</a>
                            <ul class="menu__list--souscategorie">
                                <?php   
                                    foreach($listeSousCategorieEclairage as $sousCategorieEclairage){
                                        echo'<li class="menu__list--link"><a href="/imie/boutique/index.php?c=article&a='.$sousCategorieEclairage['nom'].'" class="menu__link">'.$sousCategorieEclairage['nom'].'</a></li>';
                                    }
                                ?>    
                            </ul>
                        </li>
                        
                    
                        
                        <?php if (isset($_SESSION['pseudo'])) {
                                                        echo '<li class="menu__right hello">bonjour '.$_SESSION['pseudo'].'</li>';
                            echo '<li class="menu__right menu__list"><a href="#" class="menu__sidebar option menu__link--sidebar" id="link__option"></a>';
                            echo '<ul class="menu__list--souscategorie">
                                    <li class="menu__list--link"><a href="/imie/boutique/index.php?c=user&a=deconnexion" class="menu__link">Déconnexion</a></li>
                                    <li class="menu__list--link"><a href="/imie/boutique/index.php?c=user&a=view" class="menu__link">Modifier profil</a></li>';

                            if ($_SESSION['pseudo'] == 'admin') {
                                

                                echo '<li class="menu__list--link"><a href="/imie/boutique/index.php?c=article&a=list" class="menu__link">Gérer articles</a></li>';
                                echo '<li class="menu__list--link"><a href="/imie/boutique/index.php?c=user&a=list" class="menu__link">Gérer Profils</a></li>';
                            }
                            echo '</ul></li>';
                        }
                        else
                        { ?>
                        <li class="menu__right menu__list"><a href="#" class="menu__sidebar menu__link--sidebar">Connexion</a>
                            <ul class="menu__list--souscategorie ">
                                <li class="menu__list--link"><a href="/imie/boutique/index.php?c=user&a=connexion" class="menu__link">Connexion</a></li>
                                <li class="menu__list--link"><a href="/imie/boutique/index.php?c=user&a=inscription" class="menu__link">Inscription</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="menu__right break__left menu__list"><a href="/imie/boutique/index.php?c=contact&a=contact" class="menu__sidebar menu__link--sidebar">Contact</a></li>
                        </li>

                    </ul>
                
           
        </header>  
        <div class="footer__position">
            <div class="container container__background">
                <div class="row">

