-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 07 oct. 2022 à 07:59
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `annonces`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jobname` varchar(30) NOT NULL,
  `companyname` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `salary` int NOT NULL,
  `descrip1` varchar(5000) NOT NULL,
  `descrip2` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `jobname`, `companyname`, `location`, `salary`, `descrip1`, `descrip2`) VALUES
(1, 'Développeur Front-End UI', 'Radancy', 'Paris (75)', 50000, 'Rejoignez le leader mondial des technologies d\'acquisition de talents qui s\'engage à trouver de nouvelles façons de tirer parti des logiciels, de la stratégie et de la créativité pour améliorer les marques employeur de nos clients - à tous les points de connexion. Nous recherchons des penseurs non conventionnels. Des collaborateurs infatigables. Et des innovateurs féroces. Des personnes talentueuses prêtes à travailler à des solutions qui transforment la façon dont les employeurs et les demandeurs d\'emploi se connectent.\r\n\r\n', 'Radancy est un employeur garantissant l\'égalité des chances et accueille tous les candidats qualifiés, sans distinction de race, d\'origine ethnique, de religion, de sexe, d\'identité de genre, d\'orientation sexuelle, de statut d\'invalidité, de statut d\'ancien combattant protégé ou de toute autre caractéristique protégée par la loi. Nous travaillons activement à créer un environnement inclusif où tous nos employés peuvent s\'épanouir.'),
(2, 'Développeur Java Junior (F/H)', 'Novencia', 'Issy-les-Moulineaux', 45000, 'Développeur.euse Back-end Java avec une première expérience réussie, tu as une appétence pour la finance et tu es à la recherche de nouveaux défis. Encore quelques scrolls et tu sauras tout\r\n\r\nNos nombreux référencements offrent un large champ des possibles ! Évidemment, nous privilégions les environnements innovants et donc organisés autour de méthodologies Agiles et de philosophie DevOps.', 'Tu intègres l’équipe d’un de nos clients de la Finance au sein de laquelle tes alliés principaux seront Java ainsi que les méthodes Agile, les bonnes pratiques, les outils de test et collaboratifs.'),
(3, 'Développeur Odoo/Python (H/F)', 'Eyetech Solutions', 'Marseille (Remote)', 75000, 'Sous la direction du CTO en charge du développement, tu prendras part aux actions de test et amélioration du notre produit.\r\nTu travailleras également sur le déploiement d’apis Nodejs dans le cloud.\r\nDes missions annexes te seront également confiés au fur et a mesure de ton expérience !', 'Avec 6 sociétés réparties sur l’ensemble du territoire et un patrimoine de plus de 95 000 logements qui conjugue logements sociaux, intermédiaires, à loyer libre et résidences adaptées à des publics spécifiques, ICF Habitat compte parmi les plus grands opérateurs de logements en France, en logeant près de 210 000 personnes. Présent à l’échelle nationale, en particulier dans les grands centres urbains, le Groupe œuvre à la réalisation des politiques logement de l’État, des collectivités territoriales et de SNCF, son actionnaire');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
