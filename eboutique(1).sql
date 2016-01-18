-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 18 Janvier 2016 à 12:22
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `eboutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `numero_series` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_Marque` int(11) NOT NULL,
  `id_SousCategorie` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`numero_series`),
  KEY `FK_articles_id_Marque` (`id_Marque`),
  KEY `FK_articles_id_SousCategorie` (`id_SousCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`numero_series`, `nom`, `prix`, `id_Marque`, `id_SousCategorie`, `img`) VALUES
(1, 'Elokance - E PRO 15', 699, 1, 1, 'E_PRO_15.jpg'),
(2, 'Behrinher - B1220 Pro', 264, 2, 1, 'B1220_Pro.jpg'),
(3, 'Ibiza - MK15 WH', 199, 3, 1, 'MK15_WH.jpg'),
(4, 'Elokance - HA 3600', 1299, 1, 2, NULL),
(5, 'Behringer - EP4000', 411, 2, 2, NULL),
(6, 'Ibiza - AMP 300', 99, 3, 2, NULL),
(7, 'Behringer - B1520 Pro', 314, 2, 1, 'B1520_Pro.jpg'),
(8, 'Yamaha - DXR 12', 666, 4, 1, 'DXR_12.jpg'),
(14, 'Yamaha - S 115 V', 432, 4, 1, 'S_115_V.jpg'),
(15, 'Yamaha - DXR 15', 779, 4, 1, 'DXR_15.jpg'),
(16, 'Elokance - ELO 10C Moquette', 119, 1, 1, 'ELO_10C_Moquette.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_categorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id_categorie`, `nom`) VALUES
(1, 'Sonorisation'),
(2, 'Deejay'),
(3, 'Eclairage'),
(4, 'HomeStudio'),
(5, 'Structure'),
(6, 'Case'),
(7, 'Cablerie');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE IF NOT EXISTS `commandes` (
  `id_Commande` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` int(11) NOT NULL,
  PRIMARY KEY (`id_Commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE IF NOT EXISTS `liste` (
  `id_article` int(11) NOT NULL,
  `id_Commande` int(11) NOT NULL,
  PRIMARY KEY (`id_article`,`id_Commande`),
  KEY `FK_liste_id_Commande` (`id_Commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE IF NOT EXISTS `marques` (
  `id_Marque` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id_Marque`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `marques`
--

INSERT INTO `marques` (`id_Marque`, `nom`) VALUES
(1, 'Elokance'),
(2, 'Behrinher'),
(3, 'Ibiza'),
(4, 'yamaha');

-- --------------------------------------------------------

--
-- Structure de la table `payee`
--

CREATE TABLE IF NOT EXISTS `payee` (
  `id_Commande` int(11) NOT NULL,
  `id_Utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`id_Commande`,`id_Utilisateur`),
  KEY `FK_payee_id_Utilisateur` (`id_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `souscategories`
--

CREATE TABLE IF NOT EXISTS `souscategories` (
  `id_SousCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id_SousCategorie`),
  KEY `FK_SousCategories_id_categorie` (`id_categorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `souscategories`
--

INSERT INTO `souscategories` (`id_SousCategorie`, `nom`, `id_categorie`) VALUES
(1, 'Enceinte', 1),
(2, 'Amplificateur', 1),
(3, 'Casque', 1),
(4, 'ConsoleDeMixage', 1),
(5, 'EffetEtPeripherique', 1),
(6, 'Accessoire', 2),
(7, 'SacEtHousse', 2),
(8, 'PlatineCD', 2),
(9, 'ControleurEtLogiciel', 2),
(10, 'Mobilier', 2),
(11, 'PlatineVinyle', 2),
(12, 'TableDeMixage', 2),
(13, 'AccesoiresEclairage', 3),
(14, 'ProjecteurArchitecturale', 3),
(15, 'LumiereNoireEtStrobe', 3),
(16, 'BouleAFacette', 3),
(17, 'LyreEtScan', 3),
(18, 'ControleurEtBloc', 3),
(19, 'JeuxDeLumiere', 3),
(20, 'LampeAmpoule', 3),
(21, 'Laser', 3),
(22, 'MachineEtLiquide', 3),
(23, 'Tracer', 3),
(24, 'CasqueEtAmpliCasque', 4),
(25, 'EnregistreurNumerique', 4),
(26, 'EffetEtPeripherique', 4),
(27, 'MicrophoneDeStudio', 4),
(28, 'MobilierDeStudio', 4),
(29, 'Monitoring', 4),
(30, 'StructureTube', 5),
(31, 'StructureEchelle', 5),
(32, 'StructureCarree', 5),
(33, 'EmphasesEtKitDeJonction', 5),
(34, 'StructureEnCercle', 5),
(35, 'CrochetsEtElingue', 5),
(36, 'PiedDeLevage', 5),
(37, 'PiedDeMicro', 5),
(38, 'PiedEnceinte', 5),
(39, 'FlightCase', 6),
(40, 'FlightABS', 6),
(41, 'FlightCaseUtilitaire', 6),
(42, 'FlightCaseDJ', 6),
(43, 'AccessoireCable', 7),
(44, 'AdaptateurConnectique', 7),
(45, 'CableAudioStudio', 7),
(46, 'CableElectriqueLight', 7),
(47, 'CableNu', 7);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id_Utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `nbRue` int(11) NOT NULL,
  `adresse` varchar(80) NOT NULL,
  `codePostal` int(11) NOT NULL,
  PRIMARY KEY (`id_Utilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_Utilisateur`, `nom`, `prenom`, `age`, `pseudo`, `email`, `mdp`, `nbRue`, `adresse`, `codePostal`) VALUES
(1, 'tom', 'lambert', 19, 'admin', 'admin@admin.com', 'azerty', 5, 'rue des admin', 14320),
(2, 'nico', 'nico', 19, 'nico', 'nico@nico.com', 'nicodéception', 5, 'rue des nico', 35000),
(3, 'azefhn', 'sdfghjkl', 520, 'nico', 'zsedrgft@zefsd.com', '85200', 41, 'zsexdcfgvhbj', 0),
(4, 'azefhn', 'sdfghjkl', 520, 'nico', 'zsedrgft@zefsd.com', '85200', 41, 'zsexdcfgvhbj', 0),
(5, '', '', 0, '', '', '85200', 0, '', 0),
(6, 'LAMBERT', 'VERONIQUE', 16, 'VEROBIC', 'veronique.lambert.s@free.fr', 'VEROBIC123', 5, 'RUE DES TROIS URSULINES', 14320);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `FK_articles_id_Marque` FOREIGN KEY (`id_Marque`) REFERENCES `marques` (`id_Marque`),
  ADD CONSTRAINT `FK_articles_id_SousCategorie` FOREIGN KEY (`id_SousCategorie`) REFERENCES `souscategories` (`id_SousCategorie`);

--
-- Contraintes pour la table `liste`
--
ALTER TABLE `liste`
  ADD CONSTRAINT `FK_liste_id_article` FOREIGN KEY (`id_article`) REFERENCES `articles` (`numero_series`),
  ADD CONSTRAINT `FK_liste_id_Commande` FOREIGN KEY (`id_Commande`) REFERENCES `commandes` (`id_Commande`);

--
-- Contraintes pour la table `payee`
--
ALTER TABLE `payee`
  ADD CONSTRAINT `FK_payee_id_Commande` FOREIGN KEY (`id_Commande`) REFERENCES `commandes` (`id_Commande`),
  ADD CONSTRAINT `FK_payee_id_Utilisateur` FOREIGN KEY (`id_Utilisateur`) REFERENCES `utilisateurs` (`id_Utilisateur`);

--
-- Contraintes pour la table `souscategories`
--
ALTER TABLE `souscategories`
  ADD CONSTRAINT `FK_SousCategories_id_categorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id_categorie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
