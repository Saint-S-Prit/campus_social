-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 04 avr. 2021 à 22:03
-- Version du serveur :  8.0.23-0ubuntu0.20.04.1
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
-- Base de données : `campus_sociaux`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `genre` varchar(100) NOT NULL,
  `archive` varchar(10) NOT NULL DEFAULT '1',
  `codifier` varchar(225) NOT NULL,
  `chambre` int DEFAULT NULL,
  `pavillon_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `prenom`, `nom`, `email`, `mdp`, `genre`, `archive`, `codifier`, `chambre`, `pavillon_id`) VALUES
(1, 'magib ahmed', 'biteye', 'magib@gmail.com', '2P411H00M22', 'homme', '1', 'oui', 1, 3),
(2, 'lamine mamadou', 'diop', 'saintespritt@gmail.com', '022M10H412P', 'homme', '1', 'oui', 1, 3),
(3, 'fatou', 'fall', 'fatou@gmail.com', '0P2F1M22011', 'femme', '0', 'oui', 24, 4),
(4, 'issa', 'sall', 'sallissa@gmail.com', '2M20A12210F', 'femme', '0', 'oui', 18, 2),
(5, 'omar', 'camara', 'omar@gmail.com', '0MP2H210122', 'homme', '0', 'oui', 26, 3),
(6, 'may', 'sene', 'may@gmail.com', '2P0F12022M1', 'femme', '1', 'non', 17, 2),
(7, 'ngala', 'thiam', 'ngala@gmail.com', 'MP0012122H2', 'homme', '1', 'oui', 24, 3),
(8, 'thierno', 'ba', 'thierno@gmail.com', '22210P1H20M', 'homme', '1', 'oui', 10, 1),
(9, 'magib', 'diop', 'magib@gmail.com', '0H222012P1M', 'homme', '1', 'oui', 29, 3),
(10, 'saly', 'faye', 'saly@gmail.com', 'P12012F02M2', 'femme', '1', 'oui', 35, 4),
(11, 'momo', 'thiandoum', 'momo@gmail.com', '21MH10P2320', 'homme', '1', 'oui', 15, 1),
(12, 'astou', 'ndiaye', 'astou@gmail.com', '302122F0PM1', 'femme', '1', 'oui', 13, 4),
(13, 'test', 'test', 'test', '120MH2P3210', 'homme', '1', 'oui', 1, 3),
(14, 'etudiant1', 'etudiant1', 'etudiant1', '032P10H22M1', 'homme', '1', 'oui', 3, 1),
(15, 'etudiant2', 'etudiant2', 'etudiant2', 'HP02M301122', 'homme', '1', 'oui', 14, 3),
(16, 'a', 'a', 'a', '12H0MP31202', 'homme', '1', 'oui', 20, 1),
(21, 'd', 'd', 'd', 'M3220021PH1', 'homme', '1', 'oui', 6, 1),
(22, 's', 's', 's', '2H0P2110M23', 'homme', '1', 'oui', 22, 1),
(23, 'yaya', 'ka', 'yay@gmail.com', '101H2M2P302', 'homme', '1', 'oui', 7, 3),
(24, 'fama', 'ba', 'fama@gmail.com', 'M1222300FP1', 'femme', '1', 'oui', 20, 2),
(25, 'oumar', 'ba', 'oumar@gmail.com', 'H1P0223210M', 'homme', '0', 'non', 15, 3),
(26, 'maman', 'sall', 'maman@gmail.com', '3121002M2PF', 'femme', '1', 'oui', 16, 2),
(27, 'testtttt', 'testtttt', 'testtttt', '3101H2M0P22', 'homme', '1', 'oui', 2, 3),
(28, 't', 't', 't', '0210122P4HM', 'homme', '1', 'oui', 16, 1),
(29, 'z', 'z', 'z', '10PH22M4021', 'homme', '1', 'oui', 5, 1),
(30, 'd', 'd', 'd', '210H22M041P', 'homme', '1', 'oui', 12, 1),
(31, 'v', 'v', 'v', '22M40120P1H', 'homme', '1', 'oui', 18, 1),
(32, 'dd', 'dd', 'dd', 'H4M0211220P', 'homme', '1', 'oui', 30, 3),
(33, 'maimouna', 'diallo', 'may@gmail.com', '2122M0FP014', 'femme', '1', 'oui', 11, 2),
(34, 'sidy', 'diallo', 'sidyôgmail.com', '1MP00H42212', 'homme', '1', 'oui', 20, 1),
(35, 'rama', 'dia', 'rama@gmail.com', '02HP042M112', 'homme', '1', 'oui', NULL, NULL),
(36, 'abdou', 'fall', 'abdou@gmail.com', '2120P240M1H', 'homme', '1', 'non', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `mensualite`
--

CREATE TABLE `mensualite` (
  `id` int NOT NULL,
  `mois` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `etudiant_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mensualite`
--

INSERT INTO `mensualite` (`id`, `mois`, `statut`, `etudiant_id`) VALUES
(1, 'janvier', 'payer', 2),
(2, 'janvier', 'payer', 3),
(3, 'mars', 'payer', 7),
(4, 'janvier', 'payer', 24),
(5, 'janvier', 'payer', 23),
(6, 'janvier', 'non_payer', 8),
(7, 'avril', 'payer', 8),
(8, 'janvier', 'payer', 14),
(9, 'avril', 'payer', 8),
(10, 'avril', 'payer', 23),
(11, 'mai', 'payer', 24),
(12, 'janvier', 'choix', 24),
(13, 'janvier', 'choix', 24),
(14, 'avril', 'choix', 24),
(15, 'octobre', 'non_payer', 23),
(16, 'juin', 'payer', 23),
(17, 'descembre', 'payer', 24);

-- --------------------------------------------------------

--
-- Structure de la table `message_etudiant`
--

CREATE TABLE `message_etudiant` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `contenu` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `etudiant_id` int NOT NULL,
  `archive` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `message_etudiant`
--

INSERT INTO `message_etudiant` (`id`, `email`, `contenu`, `etudiant_id`, `archive`) VALUES
(1, 'omar@gmail.com', 'Bonjour !\r\nj\'ai un problème d\"eau depuis une semaine;\r\nMerci §§§', 5, 0),
(2, 'magib@gmail.com', 'bonjour quand est ce que je peux condifier ?', 9, 0),
(3, 'saly@gmail.com', 'saly message', 10, 0),
(4, 'may@gmail.com', 'bonjour !\r\nje voudrais savoir la date des  prochaines codifications', 6, 0),
(5, 'may@gmail.com', 'et encore j\'ai u, probleme de payement', 6, 0),
(6, 'astou@gmail.com', 'bonjour j\'ai un probleme pour choisir un ufr', 12, 0),
(7, 'd', 'merci', 21, 0),
(8, 'fama@gmail.com', 'bonjour thierno je suis fama et j\'ai n probleme de connexion', 24, 0),
(9, 'fama@gmail.com', 'ah thierno j\'ai pu régler mon problème !\r\nmerci', 24, 0),
(10, 'oumar@gmail.com', 'pas encore de codification', 25, 0),
(11, 'magib@gmail.com', 'opzoefpo', 1, 0),
(12, 'magib@gmail.com', 'kef,lmezfmlefmle', 1, 0),
(13, 'magib@gmail.com', 'mlemflmezfezpfez', 1, 0),
(14, 'abdou@gmail.com', 'a quand les prochaines codification ;', 36, 1);

-- --------------------------------------------------------

--
-- Structure de la table `pavillon`
--

CREATE TABLE `pavillon` (
  `id` int NOT NULL,
  `lettre` char(1) NOT NULL,
  `site_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pavillon`
--

INSERT INTO `pavillon` (`id`, `lettre`, `site_id`) VALUES
(1, 'c', 1),
(2, 'd', 1),
(3, 'a', 2),
(4, 'b', 2);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id` int NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `libelle`) VALUES
(1, 'social'),
(2, 'comptable');

-- --------------------------------------------------------

--
-- Structure de la table `site`
--

CREATE TABLE `site` (
  `id` int NOT NULL,
  `nom` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `site`
--

INSERT INTO `site` (`id`, `nom`) VALUES
(1, 'Hôtel du rail'),
(2, 'VCN');

-- --------------------------------------------------------

--
-- Structure de la table `ufr`
--

CREATE TABLE `ufr` (
  `id` int NOT NULL,
  `libelle` varchar(225) NOT NULL,
  `site_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ufr`
--

INSERT INTO `ufr` (`id`, `libelle`, `site_id`) VALUES
(1, 'Set', 1),
(2, 'Si', 1),
(3, 'Iut', 1),
(4, 'Ses', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` text NOT NULL,
  `statut` varchar(225) NOT NULL,
  `archive` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `prenom`, `nom`, `pseudo`, `mdp`, `statut`, `archive`) VALUES
(1, 'thierno', 'admin', 'admin', 'admin', 'admin', 1),
(2, 'social', 'social', 'social', 'social', 'social', 1),
(3, 'comptable', 'comptable', 'comptable', 'comptable', 'comptable', 1),
(4, 'magib', 'biteye', 'magib', 'password', 'comptable', 1),
(6, 'lamine', 'diop', 'lamine', 'password', 'social', 0),
(7, 'lamine', 'diop', 'lamine', '5f4dcc3b5aa765d61d8327deb882cf99', 'social', 1),
(8, 'ablaye', 'diop', 'diobadiouba', '5f4dcc3b5aa765d61d8327deb882cf99', 'social', 1),
(9, 'thierno boubacar ', 'diallo', '17030100460', '5f4dcc3b5aa765d61d8327deb882cf99', 'comptable', 1),
(10, 'mariam', 'fall', 'yama', 'yama', 'social', 1),
(11, 'ndary', 'fall', 'ngary@gmail.com', 'password', 'social', 1),
(12, 'mamadou', 'diallo', 'mamadou@gmail.com', 'password', 'social', 1),
(13, 'matmata', 'ba', 'fatmata@gmail.com', 'password', 'comptable', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Etudiant_Pavillon` (`pavillon_id`);

--
-- Index pour la table `mensualite`
--
ALTER TABLE `mensualite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `etudiant_id` (`etudiant_id`);

--
-- Index pour la table `message_etudiant`
--
ALTER TABLE `message_etudiant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Notification_Etudiant` (`etudiant_id`);

--
-- Index pour la table `pavillon`
--
ALTER TABLE `pavillon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Pavillon_Site` (`site_id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ufr`
--
ALTER TABLE `ufr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Site_Ufr` (`site_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `mensualite`
--
ALTER TABLE `mensualite`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `message_etudiant`
--
ALTER TABLE `message_etudiant`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `pavillon`
--
ALTER TABLE `pavillon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `site`
--
ALTER TABLE `site`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ufr`
--
ALTER TABLE `ufr`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_Etudiant_Pavillon` FOREIGN KEY (`pavillon_id`) REFERENCES `pavillon` (`id`);

--
-- Contraintes pour la table `mensualite`
--
ALTER TABLE `mensualite`
  ADD CONSTRAINT `mensualite_ibfk_1` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`);

--
-- Contraintes pour la table `message_etudiant`
--
ALTER TABLE `message_etudiant`
  ADD CONSTRAINT `FK_Notification_Etudiant` FOREIGN KEY (`etudiant_id`) REFERENCES `etudiant` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `pavillon`
--
ALTER TABLE `pavillon`
  ADD CONSTRAINT `FK_Pavillon_Site` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);

--
-- Contraintes pour la table `ufr`
--
ALTER TABLE `ufr`
  ADD CONSTRAINT `FK_Site_Ufr` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
