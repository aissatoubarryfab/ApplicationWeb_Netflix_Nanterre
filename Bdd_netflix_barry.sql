-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 avr. 2020 à 16:45
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `netflix_barry`
--

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `Id_epi` int(11) NOT NULL,
  `Heure_vision` time NOT NULL,
  `refSeri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `Id_serie` int(11) NOT NULL,
  `Intitule` varchar(50) NOT NULL,
  `nb_episode` int(11) NOT NULL,
  `Acteur` varchar(50) NOT NULL,
  `Realisateur` varchar(50) NOT NULL,
  `Annee_sortie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `serie`
--

INSERT INTO `serie` (`Id_serie`, `Intitule`, `nb_episode`, `Acteur`, `Realisateur`, `Annee_sortie`) VALUES
(1, 'Elite', 4, 'Samuel Montero', 'Carlos Dupont', 2018),
(2, 'Vampire diaris', 3, 'Damon salvatore', 'Carlos Montero', 2010),
(3, 'Merlin', 2, 'Merlin Dubois', 'Arthur Jade', 2013),
(4, 'Blacklist', 4, 'Raimond Redinton', 'John Snow', 2015),
(5, 'Game of Thrones', 3, 'Aria Stark', 'Jamie Lanister', 2011),
(6, 'Prison Break', 2, 'Michel Scofileld', 'Baguel Teodor', 2009),
(8, 'Les demoiselles', 4, 'Alba Stark', 'David Dubois', 2015);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Email` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Sexe` varchar(50) DEFAULT NULL,
  `Date_naissance` date NOT NULL,
  `Telephone` varchar(50) NOT NULL,
  `Mot_passe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Email`, `Nom`, `Prenom`, `Sexe`, `Date_naissance`, `Telephone`, `Mot_passe`) VALUES
('barryaissatou@gmail.com', 'Barry', 'Aissatou', 'Femme', '2000-09-10', '0678885648', '15c8c5f2c112bc3f372df241456a27f0039a9eb9'),
('bouba@gmail.com', 'Barry', 'Boubacar', 'Homme', '2001-02-09', '0789889056', '2e0308dbdaaddd891c5b7c12c6e084f53d8b7554'),
('fabi@gmail.com', 'Barry', 'Fatoumata', 'Femme', '1999-02-09', '0779999056', 'b7da82535bd159055e7d068de2e4d772dc3d2023'),
('kairalus@gmail.com', 'Barry', 'Kaira', 'Homme', '2003-01-03', '0779888888', '625c9ef883589c4586b29c8b876340e885c03a3c'),
('mamadou@gmail.com', 'Diallo', 'Mamadou', 'Homme', '1968-04-14', '0677899867', 'c733f032f0b8bc0e730c688c7462d1c956d1ba89'),
('mari@gmail.com', 'Barry', 'Mariam', 'Femme', '2005-03-21', '0766789000', '9ab2c6ac6008b6d10fcf1f6910cf4445adaeb392'),
('marly@gmail.com', 'Diallo', 'Marly', 'Femme', '2008-04-16', '0799999999', 'f957f203b11340132e09b548c23450385c971813'),
('rashi@gmail.com', 'Sow', 'Rashida', 'Femme', '1994-04-09', '0788906545', '0fd9820da6344b5efbe97ab9c4f6733ad45b549c'),
('thierno@gmail.com', 'Diallo', 'Thierno', 'Homme', '2003-03-17', '0755667809', '987cdf83a51d62c252285b346e96ccf68123b171');

-- --------------------------------------------------------

--
-- Structure de la table `visionner`
--

CREATE TABLE `visionner` (
  `refUtil` varchar(50) NOT NULL,
  `refEpi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`Id_epi`),
  ADD KEY `C` (`refSeri`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`Id_serie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Email`);

--
-- Index pour la table `visionner`
--
ALTER TABLE `visionner`
  ADD PRIMARY KEY (`refUtil`,`refEpi`),
  ADD UNIQUE KEY `A` (`refUtil`),
  ADD KEY `B` (`refEpi`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `episode`
--
ALTER TABLE `episode`
  MODIFY `Id_epi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `Id_serie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `C` FOREIGN KEY (`refSeri`) REFERENCES `serie` (`Id_serie`);

--
-- Contraintes pour la table `visionner`
--
ALTER TABLE `visionner`
  ADD CONSTRAINT `A` FOREIGN KEY (`refUtil`) REFERENCES `utilisateur` (`Email`),
  ADD CONSTRAINT `B` FOREIGN KEY (`refEpi`) REFERENCES `episode` (`Id_epi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
