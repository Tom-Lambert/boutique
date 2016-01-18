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
    </head>
    <body> 
        <header>
                
                    <ul class="menu">
                        <li class="menu__left house"><a href="/imie/boutique/index.php" id="link"></a></li>
                        <li class="menu__left titre break__right">sono-shop</li>
                        
                        <li><a href="#" class="menu__categorie">Sonorisation</a>
                            <ul>
                                <li><a href="/imie/boutique/index.php?c=article&a=enceinte">Enceinte</a></li>
                                <li><a href="/imie/boutique/index.php?c=article&a=amplificateur">Amplificateur</a></li>
                                <li><a href="/imie/boutique/index.php?c=article&a=casque">Casque</a></li>
                                <li><a href="/imie/boutique/index.php?c=article&a=consoleDeMixage">Console De Mixage</a></li>
                                <li><a href="/imie/boutique/index.php?c=article&a=effetPeripherique">Effet et périphérique</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">Deejay</a>
                            <ul>
                                <li><a href="#">Accessoire</a></li>
                                <li><a href="#">Sac et housse</a></li>
                                <li><a href="#">Platine CD</a></li>
                                <li><a href="#">Controleur et logiciel</a></li>
                                <li><a href="#">Mobilier</a></li>
                                <li><a href="#">Platine Vinyle</a></li>
                                <li><a href="#">Table de mixage</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">Eclairage</a>
                            <ul>
                                <li><a href="#">Accesoires</a></li>
                                <li><a href="#">Projecteur rchitectural</a></li>
                                <li><a href="#">Lumière noire et strobe</a></li>
                                <li><a href="#">Boule à facette</a></li>
                                <li><a href="#">Lyre et scan</a></li>
                                <li><a href="#">Controleur et bloc</a></li>
                                <li><a href="#">Jeux de lumière</a></li>
                                <li><a href="#">Lampe/Ampoule</a></li>
                                <li><a href="#">Laser</a></li>
                                <li><a href="#">Machine et liquide</a></li>
                                <li><a href="#">Tracer</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">HomeStudio</a>
                            <ul>
                                <li><a href="#">Casque et ampli casque</a></li>
                                <li><a href="#">Enregistreur numérique</a></li>
                                <li><a href="#">Effet et périphérique</a></li>
                                <li><a href="#">Microphone de studio</a></li>
                                <li><a href="#">Mobilier de studio</a></li>
                                <li><a href="#">Monitoring</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">Structure</a>
                            <ul>
                                <li><a href="#">Structure tube</a></li>
                                <li><a href="#">Structure échelle</a></li>
                                <li><a href="#">Structure carrée</a></li>
                                <li><a href="#">Emphases et kit de jonction</a></li>
                                <li><a href="#">Structure en cercle</a></li>
                                <li><a href="#">Crochets et élingue</a></li>
                                <li><a href="#">Pied de levage</a></li>
                                <li><a href="#">Pied de micro</a></li>
                                <li><a href="#">Pied d'enceinte</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">Case</a>
                            <ul>
                                <li><a href="#">Flight case</a></li>
                                <li><a href="#">Flight ABS</a></li>
                                <li><a href="#">Flight case utilitaire</a></li>
                                <li><a href="#">Flight case DJ</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="menu__categorie">Cablerie</a>
                            <ul>
                                <li><a href="#">Accessoire cable</a></li>
                                <li><a href="#">Adaptateur/connectique</a></li>
                                <li><a href="#">Cable audio studio</a></li>
                                <li><a href="#">Cable electrique/light</a></li>
                                <li><a href="#">Cable nu</a></li>
                            </ul>
                        </li>
                    
               
                        <?php if (isset($_SESSION['pseudo'])) {
                            echo '<li class="menu__right"><a href="#" class="menu__sidebar">bonjour '.$_SESSION['pseudo'].'</a>' ;
                            echo '<li class="menu__right"><a href="#" class="menu__sidebar option" id="link__option"></a>';
                            echo '<ul>
                                    <li><a href="/imie/boutique/index.php?c=user&a=deconnexion">Déconnexion</a></li>
                                    <li><a href="/imie/boutique/index.php?c=user&a=edit">Modifier</a></li>
                                  </ul>';
                        }
                        else
                        { ?>
                        <li class="menu__right"><a href="#" class="menu__sidebar">Connexion</a>
                            <ul>
                                <li><a href="/imie/boutique/index.php?c=user&a=connexion">Connexion</a></li>
                                <li><a href="/imie/boutique/index.php?c=user&a=inscription">Inscription</a></li>
                            </ul>
                        </li>
                        <?php } ?>
                        <li class="menu__right break__left"><a href="" class="menu__sidebar">Contact</a></li>
                        </li>

                    </ul>
                
           
        </header>  
    <div class="container container__background">
        <div class="row">