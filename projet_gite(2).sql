-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 07 déc. 2023 à 16:28
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet_gite`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id` int(11) NOT NULL,
  `gite_id` int(11) DEFAULT NULL,
  `accepte_animaux` tinyint(1) NOT NULL,
  `tarif_animaux` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(1, 18, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(2, NULL, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(3, NULL, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(4, 8, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(5, 12, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(6, NULL, 1, 20);
INSERT INTO `animaux` (`id`, `gite_id`, `accepte_animaux`, `tarif_animaux`) VALUES(7, 5, 1, 20);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `horaires_disponibilite` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaires_disponibilite`) VALUES(1, 'Suire', 'Enzo', '07/50/88/12/22', 'suire@enzo.fr', '15 h ');
INSERT INTO `contacts` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaires_disponibilite`) VALUES(2, 'Suire', 'Enzo', '07/50/88/12/22', 'suire@enzo.fr', '15 h ');
INSERT INTO `contacts` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaires_disponibilite`) VALUES(3, 'Suire', 'Enzo', '07/50/88/12/22', 'suire@enzo.fr', '15 h ');
INSERT INTO `contacts` (`id`, `nom`, `prenom`, `telephone`, `email`, `horaires_disponibilite`) VALUES(4, 'duliege', 'Bastien', '07/50/88/12/22', 'duliege@bastien.fr', '12 h ');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231204151231', '2023-12-04 16:12:35', 4898);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205100201', '2023-12-05 11:02:16', 116);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205142034', '2023-12-05 15:20:39', 172);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205143057', '2023-12-05 15:31:01', 763);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205144854', '2023-12-05 15:48:59', 269);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231205145230', '2023-12-05 15:52:34', 833);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231206151418', '2023-12-06 16:14:23', 103);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231206151612', '2023-12-06 16:16:15', 609);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231206154153', '2023-12-06 16:41:57', 103);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231207075701', '2023-12-07 08:57:06', 143);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231207101223', '2023-12-07 11:12:31', 69);
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES('DoctrineMigrations\\Version20231207105921', '2023-12-07 11:59:26', 140);

-- --------------------------------------------------------

--
-- Structure de la table `equipements`
--

CREATE TABLE `equipements` (
  `id` int(11) NOT NULL,
  `gite_id` int(11) DEFAULT NULL,
  `lavelinge` tinyint(1) NOT NULL,
  `climatisation` tinyint(1) NOT NULL,
  `television` tinyint(1) NOT NULL,
  `terrasse` tinyint(1) NOT NULL,
  `barbecue` tinyint(1) NOT NULL,
  `piscine_privee` tinyint(1) NOT NULL,
  `piscine_partagee` tinyint(1) NOT NULL,
  `tennis` tinyint(1) NOT NULL,
  `ping_pong` tinyint(1) NOT NULL,
  `lavevaiselle` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipements`
--

INSERT INTO `equipements` (`id`, `gite_id`, `lavelinge`, `climatisation`, `television`, `terrasse`, `barbecue`, `piscine_privee`, `piscine_partagee`, `tennis`, `ping_pong`, `lavevaiselle`) VALUES(1, 8, 1, 1, 1, 1, 1, 0, 1, 1, 1, 0);
INSERT INTO `equipements` (`id`, `gite_id`, `lavelinge`, `climatisation`, `television`, `terrasse`, `barbecue`, `piscine_privee`, `piscine_partagee`, `tennis`, `ping_pong`, `lavevaiselle`) VALUES(2, 3, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `equipements` (`id`, `gite_id`, `lavelinge`, `climatisation`, `television`, `terrasse`, `barbecue`, `piscine_privee`, `piscine_partagee`, `tennis`, `ping_pong`, `lavevaiselle`) VALUES(3, 9, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0);
INSERT INTO `equipements` (`id`, `gite_id`, `lavelinge`, `climatisation`, `television`, `terrasse`, `barbecue`, `piscine_privee`, `piscine_partagee`, `tennis`, `ping_pong`, `lavevaiselle`) VALUES(4, 18, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1);
INSERT INTO `equipements` (`id`, `gite_id`, `lavelinge`, `climatisation`, `television`, `terrasse`, `barbecue`, `piscine_privee`, `piscine_partagee`, `tennis`, `ping_pong`, `lavevaiselle`) VALUES(18, 15, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

CREATE TABLE `gites` (
  `id` int(11) NOT NULL,
  `proprietaire_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `surface_habitable` double NOT NULL,
  `nombre_chambres` int(11) NOT NULL,
  `nombres_couchages` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `gites`
--

INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(1, 2, 2, 100, 3, 6, 'Enzo', 'Angers', 'Pays de la Loire', 'Maine et Loire');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(2, 2, 2, 100, 3, 6, 'Belle', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(3, 2, 2, 100, 3, 6, 'Sun', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(4, 1, 1, 100, 3, 6, 'Lavande', 'Chinon', 'Centre-Val de Loire', 'Indre-et-Loire');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(5, 3, 4, 400, 8, 13, 'Aix-en-Provence', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(6, 3, 4, 400, 8, 13, 'Marseille', '', 'Provence-Alpes-Côte d\'Azur', 'Var');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(7, 3, 4, 400, 8, 13, 'Eclipse', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(8, 3, 4, 400, 8, 13, 'Plage', 'Verdun', 'Grand Est', 'Meuse ');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(9, 3, 4, 400, 8, 13, 'Soleil', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(10, 3, 4, 400, 8, 13, 'Neptune', 'Vannes', 'Bretagne', 'Morbihan');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(11, 3, 4, 400, 8, 13, 'Aleos', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(12, 3, 4, 400, 8, 13, 'Sasuna', 'Versailles', 'Île-de-France', 'Yvelines');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(13, 3, 4, 400, 8, 13, 'Bateau', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(14, 3, 4, 400, 8, 13, 'Bateau', 'Foix', 'Occitanie', 'Ariège');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(15, 3, 4, 400, 8, 13, 'Bateau', 'Biscarrosse', 'Nouvelle-Aquitaine', 'Landes ');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(16, 3, 4, 400, 8, 13, 'Bateau', 'Lyon', 'Auvergne-Rhône-Alpes', 'Rhône');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(17, 3, 4, 400, 8, 13, 'Bateau', '', '', '');
INSERT INTO `gites` (`id`, `proprietaire_id`, `contact_id`, `surface_habitable`, `nombre_chambres`, `nombres_couchages`, `nom`, `ville`, `region`, `departement`) VALUES(18, 3, 4, 400, 8, 13, 'Bateau', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `proprietaire`
--

CREATE TABLE `proprietaire` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `proprietaire`
--

INSERT INTO `proprietaire` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(1, 'Jackie', 'antoine', '5 rue des duranderies ', '07/50/88/12/22', 'antoine@antoine.fr');
INSERT INTO `proprietaire` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(2, 'Jackie', 'antoine', '5 rue des duranderies ', '07/50/88/12/22', 'antoine@antoine.fr');
INSERT INTO `proprietaire` (`id`, `nom`, `prenom`, `adresse`, `telephone`, `email`) VALUES(3, 'Jackie', 'enzo', '5 rue des duranderies ', '07/50/88/12/22', 'enzo@antoine.fr');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `location_linge` tinyint(1) NOT NULL,
  `menage_fin_sejour` tinyint(1) NOT NULL,
  `acces_internet` tinyint(1) NOT NULL,
  `gites_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `location_linge`, `menage_fin_sejour`, `acces_internet`, `gites_id`) VALUES(1, 1, 1, 1, 18);
INSERT INTO `services` (`id`, `location_linge`, `menage_fin_sejour`, `acces_internet`, `gites_id`) VALUES(2, 0, 1, 0, 18);

-- --------------------------------------------------------

--
-- Structure de la table `tarifs`
--

CREATE TABLE `tarifs` (
  `id` int(11) NOT NULL,
  `gite_id` int(11) DEFAULT NULL,
  `periode_debut` date NOT NULL,
  `periode_fin` date NOT NULL,
  `tarif_hebdomadaire` double NOT NULL,
  `saison` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `tarifs`
--

INSERT INTO `tarifs` (`id`, `gite_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`, `saison`) VALUES(1, 1, '2023-01-01', '2023-02-16', 200, 'Hiver');
INSERT INTO `tarifs` (`id`, `gite_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`, `saison`) VALUES(2, 1, '2023-05-17', '2023-05-31', 350, 'Primtemps');
INSERT INTO `tarifs` (`id`, `gite_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`, `saison`) VALUES(3, 1, '2023-08-16', '2024-09-03', 700, 'été');
INSERT INTO `tarifs` (`id`, `gite_id`, `periode_debut`, `periode_fin`, `tarif_hebdomadaire`, `saison`) VALUES(4, 1, '2023-10-18', '2023-11-01', 500, 'Automne');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_9ABE194D652CAE9B` (`gite_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_3F02D86B652CAE9B` (`gite_id`);

--
-- Index pour la table `gites`
--
ALTER TABLE `gites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_29609B2176C50E4A` (`proprietaire_id`),
  ADD KEY `IDX_29609B21E7A1254A` (`contact_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7332E16980C9DB47` (`gites_id`);

--
-- Index pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F9B8C496652CAE9B` (`gite_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `equipements`
--
ALTER TABLE `equipements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `gites`
--
ALTER TABLE `gites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `proprietaire`
--
ALTER TABLE `proprietaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tarifs`
--
ALTER TABLE `tarifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD CONSTRAINT `FK_9ABE194D652CAE9B` FOREIGN KEY (`gite_id`) REFERENCES `gites` (`id`);

--
-- Contraintes pour la table `equipements`
--
ALTER TABLE `equipements`
  ADD CONSTRAINT `FK_3F02D86B652CAE9B` FOREIGN KEY (`gite_id`) REFERENCES `gites` (`id`);

--
-- Contraintes pour la table `gites`
--
ALTER TABLE `gites`
  ADD CONSTRAINT `FK_29609B2176C50E4A` FOREIGN KEY (`proprietaire_id`) REFERENCES `proprietaire` (`id`),
  ADD CONSTRAINT `FK_29609B21E7A1254A` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`);

--
-- Contraintes pour la table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `FK_7332E16980C9DB47` FOREIGN KEY (`gites_id`) REFERENCES `gites` (`id`);

--
-- Contraintes pour la table `tarifs`
--
ALTER TABLE `tarifs`
  ADD CONSTRAINT `FK_F9B8C496652CAE9B` FOREIGN KEY (`gite_id`) REFERENCES `gites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
