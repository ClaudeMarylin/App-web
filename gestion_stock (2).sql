-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 avr. 2023 à 22:27
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `idarticle` int(11) NOT NULL,
  `nomarticle` varchar(50) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix_unitaire` int(11) NOT NULL,
  `date_fabrication` datetime NOT NULL,
  `date_expiration` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `nomarticle`, `categorie`, `quantite`, `prix_unitaire`, `date_fabrication`, `date_expiration`) VALUES
(1, 'coton', 'produit', 58, 450, '2023-03-10 04:47:00', '2023-03-24 04:47:00'),
(2, 'betadine', 'produit', 7, 200, '2023-03-01 04:47:00', '2023-04-14 04:47:00'),
(3, 'comprime', 'produit', 5, 200, '2023-03-01 04:47:00', '2023-04-14 04:47:00'),
(4, 'betadine', 'produit', 7, 700, '2023-03-04 11:27:00', '2023-03-25 11:27:00'),
(5, 'alcool', 'produit', 8, 200, '2023-03-02 12:35:00', '2023-03-25 12:35:00'),
(6, 'petit_sac', 'kit', 4, 2, '2023-04-08 02:37:00', '2023-04-09 02:37:00'),
(7, 'betadine', 'produit', 18, 700, '2023-03-04 11:27:00', '2023-03-30 11:27:00'),
(8, 'rose', 'appareil', 2, 700, '2023-04-01 00:30:00', '2023-03-30 00:30:00');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `idclient` int(11) NOT NULL,
  `nomclient` varchar(30) NOT NULL,
  `prenomclient` varchar(30) NOT NULL,
  `telephoneclient` varchar(30) NOT NULL,
  `adresseclient` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idclient`, `nomclient`, `prenomclient`, `telephoneclient`, `adresseclient`) VALUES
(1, 'valentin', 'simon', '237 698988787', 'kotto'),
(2, 'arthur', 'Gaitan', '2376876743545', 'village'),
(3, 'rosin', 'aldo', '237687674', 'dschang'),
(4, 'wanso', 'loic', '0676789309', 'bouda'),
(5, 'taka', 'jean', '678732312', 'kotto'),
(6, 'tajefot', 'wamba', '657732123', 'bouda');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(11) NOT NULL,
  `idarticle` int(11) NOT NULL,
  `idfournisseur` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `datecommande` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`idcommande`, `idarticle`, `idfournisseur`, `quantite`, `prix`, `datecommande`) VALUES
(1, 5, 4, 5, 4000, '2023-03-21 10:16:14'),
(2, 1, 6, 70, 70000, '2023-03-21 10:26:57'),
(3, 7, 1, 30, 30000, '2023-03-21 16:27:44'),
(4, 1, 1, 7, 1000, '2023-03-23 06:49:52'),
(5, 1, 5, 12, 12500, '2023-03-23 08:52:57'),
(6, 1, 1, 11, 2000, '2023-03-24 14:54:48'),
(7, 1, 1, 20, 30000, '2023-04-06 13:26:31');

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idfournisseur` int(11) NOT NULL,
  `nomfournisseur` varchar(30) NOT NULL,
  `prenomfournisseur` varchar(30) NOT NULL,
  `telephonefournisseur` varchar(30) NOT NULL,
  `adressefournisseur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idfournisseur`, `nomfournisseur`, `prenomfournisseur`, `telephonefournisseur`, `adressefournisseur`) VALUES
(1, 'arthur', 'Gaitan', '+237657738213', 'bertoua'),
(2, 'arthur', 'Gaitan', '+237657738213', 'bertoua'),
(3, 'arthur', 'Gaitan', '+237657738213', 'bertoua'),
(4, 'arthur', 'Gaitan', '+237657738213', 'bertoua'),
(5, 'demone', 'simone', '+237657736776', 'koumassi'),
(6, 'king', 'george', '+237687765664', 'kousserti');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `User` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `User`, `Pass`) VALUES
(1, 'admin ', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

CREATE TABLE `vente` (
  `idvente` int(11) NOT NULL,
  `idarticle` int(11) NOT NULL,
  `idclient` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `date_vente` timestamp NOT NULL DEFAULT current_timestamp(),
  `etat` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vente`
--

INSERT INTO `vente` (`idvente`, `idarticle`, `idclient`, `quantite`, `prix`, `date_vente`, `etat`) VALUES
(1, 2, 2, 5, 300000, '2023-03-18 05:41:45', '0'),
(2, 2, 2, 5, 300000, '2023-03-18 05:43:26', '0'),
(3, 3, 1, 3, 54666, '2023-03-18 15:05:14', '0'),
(4, 1, 1, 3, 78900, '2023-03-18 23:29:06', '0'),
(5, 1, 1, 2, 23446, '2023-03-19 08:55:01', '0'),
(6, 7, 1, 6, 3600, '2023-03-20 19:01:46', '0'),
(7, 1, 1, 5, 5600, '2023-03-21 12:18:20', '0'),
(8, 1, 1, 8, 23446, '2023-03-21 16:25:08', '0'),
(9, 2, 3, 6, 3200, '2023-03-21 16:26:23', '1'),
(10, 1, 1, 40, 56000, '2023-03-22 14:34:20', '0'),
(11, 6, 1, 2, 1000, '2023-03-23 06:45:02', '0'),
(12, 1, 1, 10, 4500, '2023-03-23 08:50:42', '1'),
(13, 7, 4, 12, 25000, '2023-03-24 14:52:23', '0'),
(14, 7, 4, 20, 2500, '2023-04-04 21:01:43', '1'),
(15, 1, 5, 10, 4300, '2023-04-06 02:39:08', '1'),
(16, 1, 5, 8, 5000, '2023-04-06 02:40:04', '0'),
(17, 1, 5, 10, 3400, '2023-04-06 02:53:19', '0'),
(18, 1, 1, 30, 3400, '2023-04-06 05:53:04', '1'),
(19, 1, 1, 10, 50000, '2023-04-06 05:53:54', '0'),
(20, 1, 1, 10, 45000, '2023-04-06 06:08:19', '1'),
(21, 1, 1, 4, 23456, '2023-04-06 06:16:24', '1'),
(22, 1, 1, 3, 23445, '2023-04-06 13:25:28', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`idarticle`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`idclient`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `idarticle` (`idarticle`),
  ADD KEY `idfournisseur` (`idfournisseur`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idfournisseur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `vente`
--
ALTER TABLE `vente`
  ADD PRIMARY KEY (`idvente`),
  ADD KEY `idclient` (`idclient`),
  ADD KEY `idarticle` (`idarticle`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `idarticle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `idclient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `idfournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `vente`
--
ALTER TABLE `vente`
  MODIFY `idvente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idfournisseur`) REFERENCES `fournisseur` (`idfournisseur`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idarticle`) REFERENCES `article` (`idarticle`);

--
-- Contraintes pour la table `vente`
--
ALTER TABLE `vente`
  ADD CONSTRAINT `vente_ibfk_1` FOREIGN KEY (`idclient`) REFERENCES `client` (`idclient`),
  ADD CONSTRAINT `vente_ibfk_2` FOREIGN KEY (`idarticle`) REFERENCES `article` (`idarticle`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
