-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 fév. 2025 à 14:27
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lato_gei`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(3) NOT NULL,
  `email` varchar(80) NOT NULL,
  `coordonnees` text NOT NULL,
  `num_tel` varchar(10) NOT NULL,
  `domaine` text NOT NULL,
  `region` varchar(80) NOT NULL,
  `nom_entreprise` varchar(60) NOT NULL,
  `chef_ent` varchar(150) NOT NULL,
  `actus` varchar(1055) DEFAULT NULL,
  `ca` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `email`, `coordonnees`, `num_tel`, `domaine`, `region`, `nom_entreprise`, `chef_ent`, `actus`, `ca`) VALUES
(1, 'contact@idologis.fr', '175 Avenue de la République,Douchy-Les-Mines,59282', '0327644185', 'Agence immobilière', 'Hauts-De-France', 'IdoLogis', 'Lucas Deudon', NULL, NULL),
(2, 'jean-philippe.marchant@adecco-pme.fr', '18 Avenue des Dentellières,59300,Valenciennes', '0327469743', 'Cabinet et conseil en recrutement', 'Hauts-De-France', 'Adecco', 'Alexandre Viros', NULL, NULL),
(3, 'vuln@airbus.com', '1 Rond-point Maurice Bellonte,31707,Blagnac Cedex', '0561935555', 'Aéronautique et aérospatiale', 'Occitanie', 'Airbus', 'Guillaume Faury', NULL, NULL),
(4, 'contact@wallon.fr', '16 Place de la république, 59300 Valenciennes', '03 27 00 0', 'Ecole de zinzin', 'Hauts-De-France', 'Lycée Wallon', 'Pascale Schneider', NULL, NULL),
(6, 'entreprise@test.fr', '12 Rue Gambetta,59282, Douchy-Les-Mines', '03 27 56 2', 'Construction de batiments', 'Hauts-De-France', 'Entreprise de test', 'Lucas Deudon', NULL, NULL),
(7, 'mail@test.com', '5 Rue du Général de Gaule,75009,Paris', '04 55 80 2', 'Création de gourmandises', 'Ile-De-France', 'Gourmandiseries', 'Gaston Lagaffe', NULL, NULL),
(8, 'encore@email.fr', '5 Rue Vincent Lagaffe,59300,Valenciennes', '03 56 22 2', 'Divers', 'Hauts-De-France', 'Gastonnerie', 'Lucas Deudon', 'Nous somme une jeune entreprise qui crée des maillots on dirais l\'HUMAINE FC sur Twitter', '15642000.00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
