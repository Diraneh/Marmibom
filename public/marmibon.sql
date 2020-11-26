-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 26 nov. 2020 à 07:27
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `marmibon`
--

-- --------------------------------------------------------

--
-- Structure de la table `directive`
--

DROP TABLE IF EXISTS `directive`;
CREATE TABLE IF NOT EXISTS `directive` (
  `Id_recette_directive` bigint(255) NOT NULL,
  `dir1_directive` text DEFAULT NULL,
  `dir2_directive` text DEFAULT NULL,
  `dir3_directive` text DEFAULT NULL,
  `dir4_directive` text DEFAULT NULL,
  `dir5_directive` text DEFAULT NULL,
  `dir6_directive` text DEFAULT NULL,
  `dir7_directive` text DEFAULT NULL,
  `dir8_directive` text DEFAULT NULL,
  `dir9_directive` text DEFAULT NULL,
  `dir10_directive` text DEFAULT NULL,
  PRIMARY KEY (`Id_recette_directive`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `directive`
--

INSERT INTO `directive` (`Id_recette_directive`, `dir1_directive`, `dir2_directive`, `dir3_directive`, `dir4_directive`, `dir5_directive`, `dir6_directive`, `dir7_directive`, `dir8_directive`, `dir9_directive`, `dir10_directive`) VALUES
(1, 'dnfdfdkjghjfdkg', 'fdhgkfjgklfd', 'fjgkldfjglkfd', 'jfdgkjdfglkd', '', '', '', '', '', ''),
(2, '1 - Faite griller le pain', '2 - Faite cuir les saucisses', '3 - Assemblez le tout en rajoutant les sauces puis les oignons frit', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '1 - Faite cuir les pommes de terres\r\npuis coupez les', '2 - Disposez les rondelles de pomme de terres dans un plat', '3 - Ajoutez y le fromage et la crème', '4 - Faite cuir pendant 30 minutes à 220 degré', NULL, NULL, NULL, NULL, NULL, NULL),
(4, '1 - Disposez les lamelle de pâtes dans un plat adapté', '2 - incorporer la sauce tomates, la crème et la viande', '3 - Salé et faite cuir la préparation 45 min à 210 degré', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '1 - Faite Cuir les noodles', '2 - Faite cuir le poulet, ajoutez y la sauce', '3 - mélanger le tout et servez', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '1 - préparez votre pâtes', ' 2 - mettre votre sauce', '3 - disposez votre viande', '4 - faite cuir pendant 20 minutes à 220 degré', NULL, NULL, NULL, NULL, NULL, NULL),
(7, '1 - Préchaffer le four à feu doux (150°C- thermostat 5).', '2 - Beurrer et sucrer un moule rectangle.', '3 - Faire fondre la pralinoise au bain-marie.', '4 - Battre ensemble le beurre et le sucre jusqu\'à ce que le mélange blanchisse.', '5 - Ajouter les oeufs un par un et la farine en 3 fois (après chaque oeuf).', '6 - Ajouter la pralinoise fondue, bien mélanger l\'ensemble.', '7 - Verser la préparation dans un moule, lisser à la spatule.', '8 - Laisser cuire 20 min environ : le gâteau doit être très moelleux. Ne pas hésiter à le sortir même si le couteau ne ressort pas sec.', '9 - Laisser refroidir avant de démouler et de découper en carrés réguliers.', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `Id_recette_ingredient` bigint(255) NOT NULL,
  `srv` bigint(255) NOT NULL,
  `ing1_ingredient` varchar(255) DEFAULT NULL,
  `ing2_ingredient` varchar(255) DEFAULT NULL,
  `ing3_ingredient` varchar(255) DEFAULT NULL,
  `ing4_ingredient` varchar(255) DEFAULT NULL,
  `ing5_ingredient` varchar(255) DEFAULT NULL,
  `ing6_ingredient` varchar(255) DEFAULT NULL,
  `ing7_ingredient` varchar(255) DEFAULT NULL,
  `ing8_ingredient` varchar(255) DEFAULT NULL,
  `ing9_ingredient` varchar(255) DEFAULT NULL,
  `ing10_ingredient` varchar(255) DEFAULT NULL,
  `qty1` decimal(10,1) DEFAULT NULL,
  `qty2` decimal(10,1) DEFAULT NULL,
  `qty3` decimal(10,1) DEFAULT NULL,
  `qty4` decimal(10,1) DEFAULT NULL,
  `qty5` decimal(10,1) DEFAULT NULL,
  `qty6` decimal(10,1) DEFAULT NULL,
  `tqty1` decimal(10,1) DEFAULT NULL,
  `tqty2` decimal(10,1) DEFAULT NULL,
  `tqty3` decimal(10,1) DEFAULT NULL,
  `tqty4` decimal(10,1) DEFAULT NULL,
  `tqty5` decimal(10,1) DEFAULT NULL,
  `tqty6` decimal(10,1) DEFAULT NULL,
  PRIMARY KEY (`Id_recette_ingredient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ingredient`
--

INSERT INTO `ingredient` (`Id_recette_ingredient`, `srv`, `ing1_ingredient`, `ing2_ingredient`, `ing3_ingredient`, `ing4_ingredient`, `ing5_ingredient`, `ing6_ingredient`, `ing7_ingredient`, `ing8_ingredient`, `ing9_ingredient`, `ing10_ingredient`, `qty1`, `qty2`, `qty3`, `qty4`, `qty5`, `qty6`, `tqty1`, `tqty2`, `tqty3`, `tqty4`, `tqty5`, `tqty6`) VALUES
(1, 8, 'tomate', 'tomate', 'tomate', 'tomate', 'tomate', 'tomate', NULL, NULL, NULL, NULL, '0.0', '0.0', '0.0', '0.0', '0.0', '0.0', '3.0', '18.0', '3.0', '18.0', '18.0', '15.0'),
(2, 1, 'Pain', 'Saucisse', 'Oignons frit', 'Ketchup', 'Moutarde', NULL, NULL, NULL, NULL, NULL, '2.0', '5.0', '2.0', '5.0', '5.0', '3.0', '2.0', '5.0', '2.0', '5.0', '5.0', '3.0'),
(3, 2, 'Pomme de terre', 'Fromage', 'Crème fraiche', 'sel', 'poivre', 'Beurre', NULL, NULL, NULL, NULL, '3.0', '4.0', '3.0', '4.0', '4.0', '5.0', '6.0', '8.0', '6.0', '8.0', '8.0', '10.0'),
(4, 2, 'Pâtes', 'Concentré de tomates', 'crème fraiche', 'Viande hachés', 'sel', NULL, NULL, NULL, NULL, NULL, '4.0', '3.0', '4.0', '3.0', '3.0', '4.0', '8.0', '6.0', '8.0', '6.0', '6.0', '8.0'),
(5, 3, 'Noodles', 'Poulet', 'Sauce teriyaki', 'poivrons', 'sel', NULL, NULL, NULL, NULL, NULL, '5.0', '2.0', '5.0', '2.0', '2.0', '8.0', '15.0', '6.0', '15.0', '6.0', '6.0', '24.0'),
(6, 4, 'Pâte à pain', 'Sauce tomates', 'Viande hachés', 'poivre', 'sel', NULL, NULL, NULL, NULL, NULL, '6.0', '1.0', '6.0', '1.0', '1.0', '1.0', '24.0', '4.0', '24.0', '4.0', '4.0', '4.0'),
(7, 6, 'g de pralinoise', 'g de beurre ramolli', 'g de sucre en poudre\r\n', 'g de farine', 'oeufs', NULL, NULL, NULL, NULL, NULL, '33.0', '25.0', '25.0', '8.0', '0.5', NULL, '198.0', '150.0', '150.0', '48.0', '3.0', '0.0'),
(9, 1, 'tomate', 'ali', 'oinion', 'sjdlks', 'jsdlkjls', 'sjdks', NULL, NULL, NULL, NULL, '1.0', '2.0', '3.0', '4.0', '5.0', '6.0', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 1, 'tomate', 'ali', 'oinion', 'sjdlks', 'jsdlkjls', 'sjdks', NULL, NULL, NULL, NULL, '1.0', '2.0', '3.0', '4.0', '5.0', '6.0', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 1, 'tomate', 'ali', 'oinion', 'sjdlks', 'jsdlkjls', 'sjdks', NULL, NULL, NULL, NULL, '1.0', '2.0', '3.0', '4.0', '5.0', '6.0', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 1, 'tomate', 'ali', 'oinion', '', '', '', NULL, NULL, NULL, NULL, '1.0', '2.0', '3.0', '0.0', '0.0', '0.0', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `Id_recette` bigint(255) NOT NULL AUTO_INCREMENT,
  `Name_recette` varchar(255) DEFAULT NULL,
  `img_recette` varchar(255) NOT NULL,
  `time_recette` varchar(255) DEFAULT NULL,
  `number_recette` bigint(255) DEFAULT NULL,
  `level_recette` varchar(255) DEFAULT NULL,
  `cost_recette` varchar(255) DEFAULT NULL,
  `description_recette` text NOT NULL,
  `Id_Ingredient` bigint(255) NOT NULL,
  `likes` int(255) NOT NULL,
  `dislikes` int(255) NOT NULL,
  PRIMARY KEY (`Id_recette`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`Id_recette`, `Name_recette`, `img_recette`, `time_recette`, `number_recette`, `level_recette`, `cost_recette`, `description_recette`, `Id_Ingredient`, `likes`, `dislikes`) VALUES
(1, 'ELMI Diraneh', 'public/img/bg-img/r1.jpg', '45', 9, 'facile', '80 euros', 'dbckndbvfkbvdnfv', 9, 0, 0),
(2, 'Tartiflette', 'public/img/bg-img/r3.jpg', '50 minutes', 6, 'Moyen', '15.20 euros', 'La tartiflette est un plat d\'origine savoyarde qui se déguste généralement en hiver. Ses ingrédients principaux sont les pommes de terre et le reblochon, mais on peut aussi y ajouter des lardons et de la crème.', 3, 0, 0),
(3, 'Poulet Teriyaki', 'public/img/bg-img/r5.jpg', '45 minutes', 2, 'Difficile', '17.10 euros', 'Le poulet teriyaki consiste à mariner et cuire du poulet dans de la sauce teriyaki, ce qui lui donne sa saveur, mais aussi un extérieur coloré.', 5, 0, 0),
(4, 'Pizza', 'public/img/bg-img/r6.jpg', '30 minutes', 4, 'Facile', '8 euros', 'La pizza est une recette de cuisine traditionnelle de la cuisine italienne, originaire de Naples en Italie (cuisine napolitaine)', 6, 0, 0),
(5, 'Brownie fondant praliné', 'public/img/bg-img/r7.jpg', '50 minutes', 1, 'Facile', '5 euros', 'Selon nos informations, cette recette est compatible avec le régime suivant : végétarien', 7, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
