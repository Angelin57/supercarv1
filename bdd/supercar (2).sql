-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 14 mai 2023 à 12:28
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `supercar`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `mail`, `objet`, `message`) VALUES
(1, 'angelin', 'fehizoroscania@gmail.com', 'commande', 'achat'),
(2, 'fehizoro', 'actros@gmail.com', 'ddddddddddd', 'dddddddd'),
(3, 'fehizoro', 'actros@gmail.com', 'ddddddddddd', 'dddddddd'),
(4, 'fehizoro', 'actros@gmail.com', 'commande', 'ffff'),
(5, 'fehizoro', 'actros@gmail.com', 'commande', 'voiture'),
(6, 'manoa', 'manoa@gmail.com', 'demande de stage', 'stagiaire'),
(7, 'joyce', 'joyce@gmail.com', 'joyce', 'joyce'),
(8, 'joyce', 'joyce@gmail.com', 'joyce', 'joyce'),
(9, 'g', 'gggg@gmail.com', 'aa', 'zee'),
(10, '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `dmdessai`
--

DROP TABLE IF EXISTS `dmdessai`;
CREATE TABLE IF NOT EXISTS `dmdessai` (
  `id_dmdessai` int NOT NULL AUTO_INCREMENT,
  `civilite` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_as_ci DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `heure` varchar(100) DEFAULT NULL,
  `marque` varchar(100) DEFAULT NULL,
  `v_nom` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `transmission` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_dmdessai`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `dmdessai`
--

INSERT INTO `dmdessai` (`id_dmdessai`, `civilite`, `nom`, `prenom`, `dates`, `heure`, `marque`, `v_nom`, `type`, `transmission`) VALUES
(1, '1', 'fehizoro', 'alias', '0000-00-00', '10:43:00', NULL, NULL, NULL, NULL),
(38, '', 'fff', 'ffff', '2023-05-09', '9h-10h', NULL, NULL, NULL, NULL),
(37, '', 'angelin', 'angelin', '2023-05-18', '9h-10h', NULL, NULL, NULL, NULL),
(36, '', 'angelin', 'Fehizoro', '2023-04-28', '11h-12h', NULL, NULL, NULL, NULL),
(35, '', 'RAZAFINDRATSIMBA', 'Angelin', '2023-03-31', '13h-14h', NULL, NULL, NULL, NULL),
(39, '', 'zefzGGZ', 'zgzerg', '2023-05-02', '13h-14h', 'azdfzf', 'zdazfaz', 'azdazfd', 'dfzqef'),
(40, '', 'angelo', 'yfzgzei', '2023-06-04', '11h-12h', 'Toyota', 'yaris', 'cuv', 'manuel'),
(41, '', 'fzFz', 'zegRERG', '2023-06-02', '11h-12h', 'qfzef', 'zefZZf', 'Egg', 'zefgZZ'),
(42, 'Mme', 'GZSGV', 'ZRGRGZ', '2023-05-28', '13h-14h', 'Toyota', 'yaris', 'cuv', 'manuel');

-- --------------------------------------------------------

--
-- Structure de la table `image_voiture`
--

DROP TABLE IF EXISTS `image_voiture`;
CREATE TABLE IF NOT EXISTS `image_voiture` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `sre` varchar(100) DEFAULT NULL,
  `id_voiture` int DEFAULT NULL,
  PRIMARY KEY (`id_image`),
  KEY `id_voiture` (`id_voiture`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image_voiture`
--

INSERT INTO `image_voiture` (`id_image`, `sre`, `id_voiture`) VALUES
(89, 'img/voitures/519ll (4).jpg', 12),
(88, 'img/voitures/519ll (3).jpg', 12),
(87, 'img/voitures/519ll (2).jpg', 12),
(86, 'img/voitures/519ll (1).jpg', 12),
(85, 'img/voitures/519l (4).jpg', 10),
(84, 'img/voitures/519l (3).jpg', 10),
(83, 'img/voitures/519l (1).jpg', 10),
(82, 'img/voitures/519l(2).jpg', 10),
(81, 'img/voitures/519 (4).jpg', 9),
(80, 'img/voitures/519 (3).jpg', 9),
(79, 'img/voitures/519 (2).jpg', 9),
(78, 'img/voitures/519 (1).jpg', 9),
(77, 'img/voitures/208_1 (4).jpg', 15),
(76, 'img/voitures/208_1 (3).jpg', 15),
(75, 'img/voitures/208_1 (2).jpg', 15),
(74, 'img/voitures/208_1 (1).jpg', 15),
(73, 'img/voitures/yaris (4).jpg', 16),
(72, 'img/voitures/yaris (3).jpg', 16),
(71, 'img/voitures/yaris (2).jpg', 16),
(70, 'img/voitures/yaris (1).jpg', 16),
(69, 'img/voitures/raptor (6).jpg', 5),
(68, 'img/voitures/raptor (5).jpg', 5),
(67, 'img/voitures/raptor (4).jpg', 5),
(66, 'img/voitures/raptor (3).jpg', 5),
(65, 'img/voitures/raptor (2).jpg', 5),
(64, 'img/voitures/raptor (1).jpg', 5),
(63, 'img/voitures/ranger (6).jpg', 6),
(62, 'img/voitures/ranger (5).jpg', 6),
(61, 'img/voitures/ranger (4).jpg', 6),
(60, 'img/voitures/ranger (3).jpg', 6),
(59, 'img/voitures/ranger (2).jpg', 6),
(57, 'img/voitures/navara (5).jpeg', 3),
(58, 'img/voitures/ranger (1).jpg', 6),
(56, 'img/voitures/navara (4).jpeg', 3),
(54, 'img/voitures/navara (2).jpeg', 3),
(55, 'img/voitures/navara (3).jpeg', 3),
(53, 'img/voitures/navara (1).jpeg', 3),
(52, 'img/voitures/mitsubishi (7).jpg', 1),
(51, 'img/voitures/mitsubishi (6).jpg', 1),
(50, 'img/voitures/mitsubishi (5).jpg', 1),
(49, 'img/voitures/mitsubishi (3).jpg', 1),
(48, 'img/voitures/mitsubishi (2).jpg', 1),
(47, 'img/voitures/mitsubishi (1).jpg', 1),
(46, 'img/voitures/mazda (5).jpg', 4),
(45, 'img/voitures/mazda (4).jpg', 4),
(44, 'img/voitures/mazda (3).jpg', 4),
(43, 'img/voitures/mazda (2).jpg', 4),
(42, 'img/voitures/mazda (1).jpg', 4),
(41, 'img/voitures/march (4).jpg', 17),
(40, 'img/voitures/march (3).jpg', 17),
(39, 'img/voitures/march (2).jpg', 17),
(38, 'img/voitures/march (1).jpg', 17),
(37, 'img/voitures/man (5).jpg', 8),
(36, 'img/voitures/man (4).jpg', 8),
(35, 'img/voitures/man (3).jpg', 8),
(34, 'img/voitures/man (2).jpg', 8),
(33, 'img/voitures/man (1).jpg', 8),
(32, 'img/voitures/hilux (6).jpg', 2),
(31, 'img/voitures/hilux (5).jpg', 2),
(30, 'img/voitures/hilux (4).jpg', 2),
(29, 'img/voitures/hilux (3).jpg', 2),
(28, 'img/voitures/hilux (2).jpg', 2),
(27, 'img/voitures/hilux (1).jpg', 2),
(26, 'img/voitures/golf (5).jpg', 14),
(25, 'img/voitures/golf (4).jpg', 14),
(24, 'img/voitures/golf (3).jpg', 14),
(23, 'img/voitures/golf (2).jpg', 14),
(22, 'img/voitures/golf (1).jpg', 14),
(21, 'img/voitures/focus (4).jpg', 18),
(20, 'img/voitures/focus (3).jpg', 18),
(19, 'img/voitures/focus (2).jpg', 18),
(18, 'img/voitures/focus (1).jpg', 18),
(16, 'img/voitures/crafter_1 (6).jpg', 11),
(15, 'img/voitures/crafter_1 (5).jpg', 11),
(14, 'img/voitures/crafter_1 (4).jpg', 11),
(13, 'img/voitures/crafter_1 (3).jpg', 11),
(12, 'img/voitures/crafter_1 (2).jpg', 11),
(11, 'img/voitures/crafter_1 (1).jpg', 11),
(10, 'img/voitures/crafter (5).jpg', 7),
(9, 'img/voitures/crafter (4).jpg', 7),
(8, 'img/voitures/crafter (3).jpg', 7),
(7, 'img/voitures/crafter (2).jpg', 7),
(6, 'img/voitures/crafter (1).jpeg', 7),
(5, 'img/voitures/clio (5).jpg', 13),
(4, 'img/voitures/clio (4).jpg', 13),
(3, 'img/voitures/clio (3).jpg', 13),
(2, 'img/voitures/clio (2).jpg', 13),
(1, 'img/voitures/clio (1).jpeg', 13),
(90, 'img/voitures/519ll (5).jpg', 12),
(91, 'img/voitures/mitsubishi (4).jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `idco` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `telephone` varchar(12) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `naissance` date DEFAULT NULL,
  `sexe` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idco`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`idco`, `nom`, `prenom`, `mail`, `telephone`, `adresse`, `naissance`, `sexe`, `password`) VALUES
(1, 'RAZAFINDRATSIMBA', 'Angelin', 'angelin@gmail.com', NULL, 'Quatre Bornes ', '2023-04-27', '', 'angelin'),
(2, 'fitia', 'Neymar', 'actros@gmail.com', NULL, 'Quatre Bornes ', '2023-04-16', '', 'aaaaaaa'),
(3, 'fitia', 'Neymar', 'fitianeymar@gmail.com', NULL, 'trianon', '2023-05-05', '', '123'),
(4, 'Actros', 'Volvo', 'volvo@gmail.com', NULL, 'trianon', '2023-05-05', '', '123'),
(5, 'Masculin', 'Feminin', 'masculin@gmail.com', NULL, 'Quatre Bornes ', '2023-04-15', 'Femme', '456'),
(6, 'mercedes', 'benz', 'benz@gmail.com', '+123456', 'trianon', '2023-04-22', 'Homme', '789'),
(7, 'rakoto', 'rabe', 'rabe@gmail.com', '123456', 'mada', '2023-04-21', 'Homme', 'rabe'),
(8, 'randria', 'jean', 'jean@gmail.com', '7894561', 'france', '2023-04-21', 'Homme', '789'),
(9, 'doda', 'dada', 'doda@gmail.com', '44444444', 'allemange', '2023-05-07', 'Homme', '0000'),
(10, 'volvo', 'volvo', 'gg@gmail.com', '12346', 'france', '2023-04-19', 'Femme', '111'),
(11, 'manoa', 'Manoa', 'manoa00@gmail.com', '0123456', 'Quatre Bornes ', '2023-04-14', 'Homme', '000'),
(12, 'angelin', 'lllllll', 'angelin@gmail.com', '5555', 'dddd', '2023-05-27', 'Homme', 'angelin'),
(13, 'az', 'az', 'az@gmaill.com', '123', 'AZ', '2023-05-24', 'Homme', 'az'),
(14, 'bolo', 'bolo', 'bolo@gmail.com', '13', 'ffff', '2023-05-13', 'Homme', 'bolo');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `titre`, `libelle`) VALUES
(1, 'LIVRAISION GRATUITE PARTOUT À MAURICE', 'Notre équipe s\'engage à vous livrer votre voiture en toute sécurité si vous ne pouviez pas venir le recupérer vous-même.'),
(2, 'FACILITÉ DE PAIEMENT', 'Il est tout à fait possible de négocier pour trancher les versement et vous faciliter le paiement.'),
(3, 'GARANTIE SUPERCAR DE 6 MOIS', 'Si votre voiture subit une défaillance des pièces ou une panne pendant les six premiers mois, Supercar s\'engage à vous dépanner gratuitement.'),
(4, 'DEMANDE D\'ESSAI GRATUIT', 'Vous pouvez prendre rendez-vous gratuitement sur le site pour un essai de la voiture de votre choix, sans aucun frais.'),
(5, 'ENTRETIENT GRATUITE', 'Six mois à compté de l\'achat de votre voiture, Supercar vous propose un entretient complet de votre voiture en plus d\'un lavage , et tout cela sans payer ne serais-ce qu\'un centime.'),
(6, 'CONSEILLER CLIENT', 'Notre équipe peut également vous fournir des conseils et des explications sur les voitures si vous en avez besoin.');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `id_voiture` int NOT NULL AUTO_INCREMENT,
  `voiture_marque` varchar(255) DEFAULT NULL,
  `voiture_name` varchar(255) DEFAULT NULL,
  `voiture_transmission` varchar(255) DEFAULT NULL,
  `voiture_carburant` varchar(255) DEFAULT NULL,
  `voiture_type` varchar(255) DEFAULT NULL,
  `id_categorie` int DEFAULT NULL,
  `voiture_km` varchar(100) DEFAULT NULL,
  `voiture_puissance` varchar(100) DEFAULT NULL,
  `voiture_annee` int DEFAULT NULL,
  `voiture_place` varchar(100) DEFAULT NULL,
  `voiture_porte` varchar(100) DEFAULT NULL,
  `voiture_prix` varchar(100) DEFAULT NULL,
  `provenance` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_voiture`),
  KEY `id_categorie` (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`id_voiture`, `voiture_marque`, `voiture_name`, `voiture_transmission`, `voiture_carburant`, `voiture_type`, `id_categorie`, `voiture_km`, `voiture_puissance`, `voiture_annee`, `voiture_place`, `voiture_porte`, `voiture_prix`, `provenance`) VALUES
(1, 'Mitsubishi', 'l200', 'automatique', 'diesel', 'pickup', 2, '20 000km', '170ch', 2021, '5', '5', '400 000Rs', 'Thaïlande'),
(2, 'Toyota', 'hilux', 'automatique', 'diesel', 'pickup', 2, '29 000km', '204ch', 2020, '5', '5', '500 000Rs', 'Japonais'),
(3, 'Nissan', 'navara', 'automatique', 'diesel', 'pickup', 2, '40 000km', '180ch', 2019, '5', '5', '350 000Rs', 'Japonais'),
(4, 'Mazda', 'bt50', 'automatique', 'diesel', 'pickup', 2, '15 000km', '190ch', 2021, '5', '5', '450 000Rs', 'Japonais'),
(5, 'Ford', 'raptor', 'automatique', 'essence', 'pickup', 2, '10 000km', '292ch', 2022, '5', '5', '550 000Rs', 'Espagne'),
(6, 'Ford', 'ranger', 'automatique', 'diesel', 'pickup', 2, '35 000km', '200ch', 2020, '5', '5', '250 000Rs', 'Australie'),
(7, 'Volkswagen', 'crafter', 'manuel', 'diesel', 'fourgon', 3, '124 000km', '163ch', 2012, '3', '4', '200 000Rs', 'Allemagne'),
(8, 'Man', 'tge', 'automatique', 'diesel', 'fourgon', 3, '98 000km', '190ch', 2015, '3', '4', '202 000Rs', 'Inde'),
(9, 'Mercedes-benz', 'sprinter', 'manuel', 'diesel', 'fourgon', 3, '150 000km', '190ch', 2014, '7', '4', '250 000Rs', 'Allemagne'),
(10, 'Mercedes-benz', 'sprinter', 'automatique', 'diesel', 'fourgon', 3, '94 000km', '180ch', 2015, '3', '4', '200 000Rs', 'Allemagne'),
(11, 'Volkswagen', 'crafter', 'automatique', 'diesel', 'fourgon', 3, '106 000km', '136ch', 2013, '3', '4', '180 000Rs', 'Allemagne'),
(12, 'Mercedes-benz', 'sprinter', 'manuel', 'diesel', 'fourgon', 3, '190 000km', '190ch', 2012, '3', '4', '230 000Rs', 'Allemagne'),
(13, 'Renault', 'clio', 'automatique', 'essence', 'cuv', 1, '126 000km', '130ch', 2015, '5', '5', '190 000Rs', 'France'),
(14, 'Volkswagen', 'golf', 'manuel', 'diesel', 'cuv', 1, '80  000km', '180ch', 2017, '5', '5', '125 000Rs', 'Allemagne'),
(15, 'Peugeot', '208', 'automatique', 'essence', 'cuv', 1, '60  000km', '160ch', 2020, '5', '5', '150 000Rs', 'France'),
(16, 'Toyota', 'yaris', 'manuel', 'essence', 'cuv', 1, '70  000km', '150ch', 2015, '5', '5', '130 000Rs', 'Japonais'),
(17, 'Nissan', 'march', 'automatique', 'essence', 'cuv', 1, '110  000km', '130ch', 2013, '5', '5', '160 000Rs', 'Japonais'),
(18, 'Ford', 'focus', 'automatique', 'diesel', 'cuv', 1, '88  000km', '140ch', 2016, '5', '5', '170 000Rs', 'Allemagne');

-- --------------------------------------------------------

--
-- Structure de la table `voiture_categorie`
--

DROP TABLE IF EXISTS `voiture_categorie`;
CREATE TABLE IF NOT EXISTS `voiture_categorie` (
  `id_categorie` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `voiture_categorie`
--

INSERT INTO `voiture_categorie` (`id_categorie`, `nom_categorie`) VALUES
(1, 'cuv'),
(2, '4x4'),
(3, 'fourgon');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
