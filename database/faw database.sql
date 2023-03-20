-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 20 mars 2023 à 01:49
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
-- Base de données : `faw`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `Id_admin` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `EmailAdmin` text NOT NULL,
  `PasswordAdmin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`Id_admin`, `Nom`, `Prenom`, `EmailAdmin`, `PasswordAdmin`) VALUES
(1, 'Najam', 'Anass', 'contact.anassnajam@gmail.com', 'a.najam'),
(2, 'Ouadih', 'Adnane', 'adnaneouadih@gmail.com', 'a.ouadih');

-- --------------------------------------------------------

--
-- Structure de la table `base_de_donnees`
--

CREATE TABLE `base_de_donnees` (
  `Id_bdd` int(11) NOT NULL,
  `NomBdd` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `candidats`
--

CREATE TABLE `candidats` (
  `Id_cand` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Telephone` int(11) NOT NULL,
  `EmailCandidat` text NOT NULL,
  `PasswordCandidat` text NOT NULL,
  `DatedeNaissance` date NOT NULL,
  `Ville` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `count_login`
--

CREATE TABLE `count_login` (
  `id_count` int(11) NOT NULL,
  `EmailLogin` text NOT NULL,
  `PsswdLogin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `Id_cv` int(11) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `NiveauEtude` text NOT NULL,
  `Score` int(11) NOT NULL,
  `Photo` varchar(20) NOT NULL COMMENT 'Photo du Candidat',
  `Description` text NOT NULL,
  `categorie` text DEFAULT NULL,
  `LinkedIn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `Id_experience` int(11) NOT NULL,
  `Poste` varchar(30) NOT NULL,
  `Societe` varchar(30) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `AnneeDebut` year(4) NOT NULL,
  `AnneeFin` year(4) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `Id_formation` int(11) NOT NULL,
  `Diplome` varchar(10) NOT NULL,
  `Etablissement` varchar(30) NOT NULL,
  `Ville` varchar(20) NOT NULL,
  `AnneeDebut` year(4) NOT NULL,
  `AnneeFin` year(4) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `frameworks`
--

CREATE TABLE `frameworks` (
  `Id_framework` int(11) NOT NULL,
  `NomFramework` varchar(10) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `langages_de_programmation`
--

CREATE TABLE `langages_de_programmation` (
  `id_lng_prog` int(11) NOT NULL,
  `Langage` varchar(10) NOT NULL,
  `Id_Candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `Id_langue` int(11) NOT NULL,
  `Langue` varchar(10) NOT NULL,
  `Niveau` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE `offres` (
  `Id_offre` int(11) NOT NULL,
  `Id_recruteur` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Domaine` text NOT NULL,
  `Type` text NOT NULL,
  `Duree` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offres_acceptes`
--

CREATE TABLE `offres_acceptes` (
  `id_offre_accepte` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  `Id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offres_postules`
--

CREATE TABLE `offres_postules` (
  `id_offre_postule` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL,
  `id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `offres_recus`
--

CREATE TABLE `offres_recus` (
  `Id_offre_recu` int(11) NOT NULL,
  `id_offre` int(11) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `id_recruteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruteurs`
--

CREATE TABLE `recruteurs` (
  `Id_rec` int(11) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `EmailRecruteur` text NOT NULL,
  `PasswordRecruteur` text NOT NULL,
  `Telephone` int(11) NOT NULL,
  `LinkedIn` text NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Societe` varchar(30) NOT NULL,
  `Poste` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `systeme_d'exploitaion`
--

CREATE TABLE `systeme_d'exploitaion` (
  `Id_se` int(11) NOT NULL,
  `NomSystemeExploitation` varchar(10) NOT NULL,
  `Id_candidat` int(11) NOT NULL,
  `Id_cv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Index pour la table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  ADD PRIMARY KEY (`Id_bdd`),
  ADD KEY `fk` (`Id_cv`),
  ADD KEY `Id_candidat` (`Id_candidat`);

--
-- Index pour la table `candidats`
--
ALTER TABLE `candidats`
  ADD PRIMARY KEY (`Id_cand`);

--
-- Index pour la table `count_login`
--
ALTER TABLE `count_login`
  ADD PRIMARY KEY (`id_count`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`Id_cv`),
  ADD KEY `cv_ibfk_1` (`Id_candidat`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`Id_experience`),
  ADD KEY `experiences_ibfk_3` (`Id_Candidat`),
  ADD KEY `experiences_ibfk_4` (`Id_cv`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`Id_formation`),
  ADD KEY `formations_ibfk_3` (`Id_Candidat`),
  ADD KEY `formations_ibfk_4` (`Id_cv`);

--
-- Index pour la table `frameworks`
--
ALTER TABLE `frameworks`
  ADD PRIMARY KEY (`Id_framework`),
  ADD KEY `frameworks_ibfk_4` (`Id_cv`),
  ADD KEY `frameworks_ibfk_3` (`Id_Candidat`);

--
-- Index pour la table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  ADD PRIMARY KEY (`id_lng_prog`),
  ADD KEY `langages_de_programmation_ibfk_3` (`Id_Candidat`),
  ADD KEY `langages_de_programmation_ibfk_4` (`Id_cv`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`Id_langue`),
  ADD KEY `langues_ibfk_3` (`Id_candidat`),
  ADD KEY `langues_ibfk_4` (`Id_cv`);

--
-- Index pour la table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`Id_offre`),
  ADD KEY `Id_recruteur` (`Id_recruteur`);

--
-- Index pour la table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  ADD PRIMARY KEY (`id_offre_accepte`),
  ADD KEY `id_rec` (`Id_recruteur`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `offres_acceptes_ibfk_4` (`id_candidat`);

--
-- Index pour la table `offres_postules`
--
ALTER TABLE `offres_postules`
  ADD PRIMARY KEY (`id_offre_postule`),
  ADD KEY `id_candidat` (`id_candidat`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `id_recruteur` (`id_recruteur`);

--
-- Index pour la table `offres_recus`
--
ALTER TABLE `offres_recus`
  ADD PRIMARY KEY (`Id_offre_recu`),
  ADD KEY `id_recruteur` (`id_recruteur`),
  ADD KEY `id_offre` (`id_offre`),
  ADD KEY `offres_recus_ibfk_4` (`Id_candidat`);

--
-- Index pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  ADD PRIMARY KEY (`Id_rec`);

--
-- Index pour la table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  ADD PRIMARY KEY (`Id_se`),
  ADD KEY `systeme_d'exploitaion_ibfk_3` (`Id_candidat`),
  ADD KEY `systeme_d'exploitaion_ibfk_4` (`Id_cv`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  MODIFY `Id_bdd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `candidats`
--
ALTER TABLE `candidats`
  MODIFY `Id_cand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `count_login`
--
ALTER TABLE `count_login`
  MODIFY `id_count` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `Id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `Id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `Id_formation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `frameworks`
--
ALTER TABLE `frameworks`
  MODIFY `Id_framework` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  MODIFY `id_lng_prog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `Id_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `offres`
--
ALTER TABLE `offres`
  MODIFY `Id_offre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  MODIFY `id_offre_accepte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `offres_postules`
--
ALTER TABLE `offres_postules`
  MODIFY `id_offre_postule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `offres_recus`
--
ALTER TABLE `offres_recus`
  MODIFY `Id_offre_recu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `recruteurs`
--
ALTER TABLE `recruteurs`
  MODIFY `Id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  MODIFY `Id_se` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `base_de_donnees`
--
ALTER TABLE `base_de_donnees`
  ADD CONSTRAINT `base_de_donnees_ibfk_1` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `experiences_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `formations`
--
ALTER TABLE `formations`
  ADD CONSTRAINT `formations_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `formations_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `frameworks`
--
ALTER TABLE `frameworks`
  ADD CONSTRAINT `frameworks_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `frameworks_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `langages_de_programmation`
--
ALTER TABLE `langages_de_programmation`
  ADD CONSTRAINT `langages_de_programmation_ibfk_3` FOREIGN KEY (`Id_Candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `langages_de_programmation_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `langues`
--
ALTER TABLE `langues`
  ADD CONSTRAINT `langues_ibfk_3` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `langues_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres`
--
ALTER TABLE `offres`
  ADD CONSTRAINT `offres_ibfk_1` FOREIGN KEY (`Id_recruteur`) REFERENCES `recruteurs` (`Id_rec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres_acceptes`
--
ALTER TABLE `offres_acceptes`
  ADD CONSTRAINT `offres_acceptes_ibfk_3` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_acceptes_ibfk_4` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres_postules`
--
ALTER TABLE `offres_postules`
  ADD CONSTRAINT `offres_postules_ibfk_1` FOREIGN KEY (`id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_postules_ibfk_2` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_postules_ibfk_3` FOREIGN KEY (`id_recruteur`) REFERENCES `recruteurs` (`Id_rec`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `offres_recus`
--
ALTER TABLE `offres_recus`
  ADD CONSTRAINT `offres_recus_ibfk_3` FOREIGN KEY (`id_offre`) REFERENCES `offres` (`Id_offre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `offres_recus_ibfk_4` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `systeme_d'exploitaion`
--
ALTER TABLE `systeme_d'exploitaion`
  ADD CONSTRAINT `systeme_d'exploitaion_ibfk_3` FOREIGN KEY (`Id_candidat`) REFERENCES `candidats` (`Id_cand`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `systeme_d'exploitaion_ibfk_4` FOREIGN KEY (`Id_cv`) REFERENCES `cv` (`Id_cv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
