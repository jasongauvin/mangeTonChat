-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 01 avr. 2019 à 18:05
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `minichat`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(70) NOT NULL,
  `message` text NOT NULL,
  `date_send` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`id`, `pseudo`, `message`, `date_send`) VALUES
(1, 'jay', 'first message guy', '2019-04-01 17:43:48'),
(2, 'lenapoleon', 'Yes baby', '2019-04-01 17:43:48'),
(3, 'Léa', 'Tu es le plus beauuuuuu', '2019-04-01 17:43:48'),
(4, 'lenapoleon', 'Sa va les girls?', '2019-04-01 17:43:48'),
(5, 'kangourou', 'admin = kangourou', '2019-04-01 17:43:48'),
(6, 'Léa', 'coucou bitchezz', '2019-04-01 17:43:48'),
(7, 'kangourou', 'hey daddy', '2019-04-01 17:43:48'),
(8, 'kangourou', 'Hello you :)', '2019-04-01 17:43:48'),
(9, 'lenapoleon', 'sa va?', '2019-04-01 17:43:48'),
(10, 'Jason', 'HELLOOOO', '2019-04-01 17:43:48'),
(11, 'Jason', 'clop', '2019-04-01 17:46:13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
