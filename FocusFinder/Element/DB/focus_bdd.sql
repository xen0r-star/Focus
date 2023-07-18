-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql-focus.alwaysdata.net
-- Généré le : dim. 28 mai 2023 à 11:41
-- Version du serveur : 10.6.11-MariaDB
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `focus_bdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `Client`
--

CREATE TABLE `Client` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_professionnel` int(11) NOT NULL,
  `Score` int(5) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Client`
--

INSERT INTO `Client` (`id`, `id_utilisateur`, `id_professionnel`, `Score`, `Date`) VALUES
(2, 4, 6, 28, '2023-05-21'),
(3, 6, 11, 44, '2023-05-21'),
(4, 18, 5, 24, '2023-05-21'),
(5, 6, 18, 38, '2023-05-21'),
(6, 12, 25, 25, '2023-05-21'),
(7, 4, 4, 15, '2023-05-21'),
(8, 18, 3, 21, '2023-05-21'),
(9, 26, 8, 9, '2023-05-21'),
(10, 9, 6, 20, '2023-05-21'),
(11, 10, 11, 15, '2023-05-21'),
(12, 5, 10, 35, '2023-05-21'),
(13, 9, 21, 32, '2023-05-21'),
(14, 9, 9, 38, '2023-05-21'),
(15, 10, 17, 24, '2023-05-21'),
(16, 13, 6, 27, '2023-05-21'),
(17, 16, 11, 3, '2023-05-21'),
(18, 18, 6, 9, '2023-05-21'),
(19, 10, 22, 17, '2023-05-21'),
(20, 11, 4, 41, '2023-05-21'),
(21, 7, 3, 43, '2023-05-21'),
(22, 1, 19, 36, '2023-05-21'),
(23, 14, 24, 37, '2023-05-21'),
(24, 26, 20, 31, '2023-05-21'),
(25, 11, 24, 32, '2023-05-21'),
(26, 1, 18, 40, '2023-05-21'),
(33, 18, 19, 9, '2023-05-21'),
(34, 16, 25, 36, '2023-05-21'),
(35, 17, 26, 18, '2023-05-21'),
(36, 1, 23, 49, '2023-05-21'),
(37, 18, 18, 46, '2023-05-21'),
(38, 3, 9, 47, '2023-05-21'),
(39, 12, 6, 15, '2023-05-21'),
(40, 19, 3, 48, '2023-05-21'),
(41, 23, 3, 39, '2023-05-21'),
(42, 19, 4, 38, '2023-05-21'),
(43, 26, 3, 2, '2023-05-21'),
(44, 19, 10, 27, '2023-05-21'),
(45, 14, 8, 1, '2023-05-21'),
(46, 14, 25, 39, '2023-05-21'),
(47, 3, 11, 23, '2023-05-21'),
(48, 4, 7, 13, '2023-05-21'),
(49, 24, 24, 35, '2023-05-21'),
(50, 7, 2, 36, '2023-05-21'),
(51, 20, 3, 25, '2023-05-21'),
(52, 26, 24, 36, '2023-05-21'),
(53, 13, 21, 32, '2023-05-21'),
(54, 6, 6, 24, '2023-05-21'),
(55, 17, 24, 7, '2023-05-21'),
(56, 8, 4, 45, '2023-05-21'),
(57, 4, 2, 38, '2023-05-21');

-- --------------------------------------------------------

--
-- Structure de la table `Professionnel`
--

CREATE TABLE `Professionnel` (
  `id` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `metier` enum('Généraliste','Pédiatre','Psychologue','Psychiatre','Therapeute','Neurologue','Orthophoniste','Ergothérapeute','Autre') DEFAULT 'Autre',
  `telephone_entreprise` text NOT NULL DEFAULT '\'Inconnue\'',
  `email_entreprise` text NOT NULL DEFAULT '\'Inconnue\'',
  `adresse_entreprise` text NOT NULL DEFAULT '\'Inconnue\''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Professionnel`
--

INSERT INTO `Professionnel` (`id`, `id_utilisateur`, `metier`, `telephone_entreprise`, `email_entreprise`, `adresse_entreprise`) VALUES
(2, 28, 'Therapeute', '+32 951256657', 'marie_durand.pro@gmail.com', '922 Rue de Rivoli , 7000 - Mons'),
(3, 29, 'Orthophoniste', '+32 352924416', 'pierre_lefevre.pro@gmail.com', '548 Rue des Champs-Élysées , 2800 - Malines'),
(4, 30, 'Orthophoniste', '+32 408183813', 'sophie_dubois.pro@gmail.com', '354 Avenue de Rennes , 3600 - Genk'),
(5, 31, 'Généraliste', '+32 310529579', 'lucas_martin.pro@gmail.com', '121 Avenue Saint-Denis , 9100 - Saint-Nicolas'),
(6, 32, 'Ergothérapeute', '+32 842501212', 'valerie_leroy.pro@gmail.com', '562 Rue de la Grande-Armée , 8500 - Courtrai'),
(7, 33, 'Neurologue', '+32 230638693', 'juan_garcia.pro@gmail.com', '119 Boulevard de la Roquette , 6000 - Charleroi'),
(8, 34, 'Orthophoniste', '+32 464315767', 'mireille_cohen.pro@gmail.com', '139 Avenue Montaigne , 3600 - Genk'),
(9, 35, 'Généraliste', '+32 820592913', 'antoine_thomas.pro@gmail.com', '28 Boulevard Saint-Germain , 3600 - Genk'),
(10, 36, 'Psychiatre', '+32 545853823', 'camille_perrin.pro@gmail.com', '84 Boulevard des Champs-Élysées , 8800 - Roulers'),
(11, 37, 'Psychologue', '+32 730350125', 'sylvain_lambert.pro@gmail.com', '615 Avenue de la Grande-Armée , 8500 - Courtrai'),
(17, 47, 'Psychiatre', '+32 150466865', 'olivier_moreau.pro@gmail.com', '176 Avenue de Rivoli , 3600 - Genk'),
(18, 46, 'Therapeute', '+32 758316056', 'hélène_girard.pro@gmail.com', '353 Avenue Saint-Germain , 8800 - Roulers'),
(19, 45, 'Pédiatre', '+32 997389935', 'vincent_fernandez.pro@gmail.com', '791 Avenue de Charonne , 8500 - Courtrai'),
(20, 44, 'Neurologue', '+32 647703198', 'anais_royer.pro@gmail.com', '714 Boulevard Montaigne , 8400 - Ostende'),
(21, 43, 'Pédiatre', '+32 355410969', 'thomas_mercier.pro@gmail.com', '44 Rue de Rennes , 8800 - Roulers'),
(22, 42, 'Orthophoniste', '+32 134088535', 'alice_robinson.pro@gmail.com', '43 Avenue Saint-Germain , 1000 - Bruxelles'),
(23, 41, 'Orthophoniste', '+32 989404186', 'guillaume_perrault.pro@gmail.com', '201 Boulevard Haussmann , 3600 - Genk'),
(24, 40, 'Neurologue', '+32 622374998', 'sandra_rodriguez.pro@gmail.com', '455 Boulevard de Rennes , 7100 - La Louvière'),
(25, 39, 'Psychiatre', '+32 872484591', 'julien_bernard.pro@gmail.com', '609 Boulevard Montaigne , 4000 - Liège'),
(26, 38, 'Pédiatre', '+32 137005907', 'pascaline_dupont.pro@gmail.com', '272 Rue de la Convention , 7000 - Mons');

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `type` enum('Utilisateur','Professionnel') NOT NULL DEFAULT 'Utilisateur',
  `nom` text NOT NULL DEFAULT '\'\\\'inconnue\\\'\'',
  `prenom` text NOT NULL DEFAULT '\'\\\'inconnue\\\'\'',
  `TDAH` enum('Oui','Non','Absent','Inconnu') NOT NULL,
  `age` int(3) NOT NULL,
  `sexe` enum('Homme','Femme','Non-binaire') DEFAULT NULL,
  `pronom` enum('Il','Elle','Iel','Autre') NOT NULL,
  `mdp` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`id`, `email`, `type`, `nom`, `prenom`, `TDAH`, `age`, `sexe`, `pronom`, `mdp`, `date`) VALUES
(1, 'florian@gmail.com', 'Utilisateur', 'Tortue', 'Florian', 'Non', 25, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(2, 'scottkelly123@gmail.com', 'Utilisateur', 'Kelly', 'Scott', 'Inconnu', 58, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(3, 'sheryl.sandberg_1@gmail.com', 'Utilisateur', 'Sandberg', 'Sheryl', 'Non', 53, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(4, 'marissa.mayer_42@gmail.com', 'Utilisateur', 'Mayer', 'Marissa', 'Oui', 47, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(5, 'tim.cook.007@gmail.com', 'Utilisateur', 'Cook', 'Tim', 'Non', 62, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(6, 'jeff_bezos_2023@gmail.com', 'Utilisateur', 'Bezos', 'Jeff', 'Non', 59, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(7, 'russellbarkley.99@gmail.com', 'Utilisateur', 'Barkley', 'Russell', 'Non', 71, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(8, 'edwardhallowell34@gmail.com', 'Utilisateur', 'Hallowell', 'Edward', 'Non', 70, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(9, 'sari.solden_22@gmail.com', 'Utilisateur', 'Solden', 'Sari', 'Non', 67, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(10, 'ari_tuckman_11@gmail.com', 'Utilisateur', 'Tuckman', 'Ari', 'Oui', 54, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(11, 'stephanie_sarkis.55@gmail.com', 'Utilisateur', 'Sarkis', 'Stephanie', 'Non', 48, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(12, 'johnratey1970@gmail.com', 'Utilisateur', 'Ratey', 'John', 'Oui', 74, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(13, 'thomhartmann@gmail.com', 'Utilisateur', 'Hartmann', 'Thom', 'Non', 70, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(14, 'daniel-amen-5@gmail.com', 'Utilisateur', 'Amen', 'Daniel', 'Non', 68, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(15, 'nedhallowell321@gmail.com', 'Utilisateur', 'Hallowell', 'Ned', 'Inconnu', 71, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(16, 'kevin.murphy_27@yahoo.com', 'Utilisateur', 'Murphy', 'Kevin', 'Oui', 53, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(17, 'katherine.noyes55@gmail.com', 'Utilisateur', 'Noyes', 'Katherine', 'Oui', 62, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(18, 'timbernerslee.1990@gmail.com', 'Utilisateur', 'Berners-Lee', 'Tim', 'Oui', 68, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(19, 'linus.torvalds1979@gmail.com', 'Utilisateur', 'Torvalds', 'Linus', 'Non', 53, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(20, 'grace_hopper_77@gmail.com', 'Utilisateur', 'Hopper', 'Grace', 'Oui', 47, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(21, 'ada.lovelace_1842@gmail.com', 'Utilisateur', 'Lovelace', 'Ada', 'Inconnu', 42, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(22, 'alan.turing_1912@gmail.com', 'Utilisateur', 'Turing', 'Alan', 'Inconnu', 35, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(23, 'steve.jobs10@yahoo.com', 'Utilisateur', 'Jobs', 'Steve', 'Non', 25, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(24, 'bill.gates2023@gmail.com', 'Utilisateur', 'Gates', 'Bill', 'Non', 67, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(25, 'mark_zuckerberg_1984@gmail.com', 'Utilisateur', 'Zuckerberg', 'Mark', 'Inconnu', 38, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(26, 'elon-musk-tesla@hotmail.com', 'Utilisateur', 'Musk', 'Elon', 'Oui', 51, 'Homme', 'Il', 'motdepasse', '2023-04-22'),
(27, 'eva.grijht99@gmail.com', 'Utilisateur', 'Grijht', 'Eva', 'Inconnu', 18, 'Femme', 'Elle', 'motdepasse', '2023-04-22'),
(28, 'marie.durand@example.com', 'Professionnel', 'Durand', 'Marie', 'Inconnu', 34, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(29, 'pierre.lefevre@example.com', 'Professionnel', 'Lefevre', 'Pierre', 'Inconnu', 48, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(30, 'sophie.dubois@example.com', 'Professionnel', 'Dubois', 'Sophie', 'Inconnu', 28, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(31, 'lucas.martin@example.com', 'Professionnel', 'Martin', 'Lucas', 'Inconnu', 41, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(32, 'valerie.leroy@example.com', 'Professionnel', 'Leroy', 'Valérie', 'Inconnu', 55, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(33, 'juan.garcia@example.com', 'Professionnel', 'Garcia', 'Juan', 'Inconnu', 37, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(34, 'mireille.cohen@example.com', 'Professionnel', 'Cohen', 'Mireille', 'Inconnu', 44, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(35, 'antoine.thomas@example.com', 'Professionnel', 'Thomas', 'Antoine', 'Inconnu', 52, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(36, 'camille.perrin@example.com', 'Professionnel', 'Perrin', 'Camille', 'Inconnu', 31, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(37, 'sylvain.lambert@example.com', 'Professionnel', 'Lambert', 'Sylvain', 'Inconnu', 46, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(38, 'pascaline.dupont@example.com', 'Professionnel', 'Dupont', 'Pascaline', 'Inconnu', 29, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(39, 'julien.bernard@example.com', 'Professionnel', 'Bernard', 'Julien', 'Inconnu', 37, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(40, 'sandra.rodriguez@example.com', 'Professionnel', 'Rodriguez', 'Sandra', 'Inconnu', 42, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(41, 'guillaume.perrault@example.com', 'Professionnel', 'Perrault', 'Guillaume', 'Inconnu', 51, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(42, 'alice.robinson@example.com', 'Professionnel', 'Robinson', 'Alice', 'Inconnu', 26, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(43, 'thomas.mercier@example.com', 'Professionnel', 'Mercier', 'Thomas', 'Inconnu', 44, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(44, 'anais.royer@example.com', 'Professionnel', 'Royer', 'Anais', 'Inconnu', 35, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(45, 'vincent.fernandez@example.com', 'Professionnel', 'Fernandez', 'Vincent', 'Inconnu', 39, 'Homme', 'Il', 'motdepasse', '2023-04-30'),
(46, 'helene.girard@example.com', 'Professionnel', 'Girard', 'Helene', 'Inconnu', 48, 'Femme', 'Elle', 'motdepasse', '2023-04-30'),
(47, 'olivier.moreau@example.com', 'Professionnel', 'Moreau', 'Olivier', 'Inconnu', 56, 'Homme', 'Il', 'motdepasse', '2023-04-30');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`,`id_professionnel`),
  ADD KEY `id_professionnel` (`id_professionnel`);

--
-- Index pour la table `Professionnel`
--
ALTER TABLE `Professionnel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Client`
--
ALTER TABLE `Client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `Professionnel`
--
ALTER TABLE `Professionnel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Client`
--
ALTER TABLE `Client`
  ADD CONSTRAINT `Client_ibfk_1` FOREIGN KEY (`id_professionnel`) REFERENCES `Professionnel` (`id`),
  ADD CONSTRAINT `Client_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id`);

--
-- Contraintes pour la table `Professionnel`
--
ALTER TABLE `Professionnel`
  ADD CONSTRAINT `Professionnel_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
