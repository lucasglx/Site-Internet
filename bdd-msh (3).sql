-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 24 Juin 2017 à 15:48
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd-msh`
--

-- --------------------------------------------------------

--
-- Structure de la table `capteur2`
--

CREATE TABLE `capteur2` (
  `piece` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `num_serie` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

CREATE TABLE `capteurs` (
  `id` int(20) NOT NULL,
  `id_pièce` int(255) NOT NULL,
  `type` int(200) NOT NULL,
  `état` int(200) NOT NULL,
  `série` int(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etat_logement`
--

CREATE TABLE `etat_logement` (
  `id` int(255) NOT NULL,
  `moyenne_temperature` int(11) NOT NULL,
  `moyenne_hum` int(11) NOT NULL,
  `etat_lumiere` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etat_logement`
--

INSERT INTO `etat_logement` (`id`, `moyenne_temperature`, `moyenne_hum`, `etat_lumiere`) VALUES
(0, 12, 10, 'ON'),
(10, 15, 2, 'OFF');

-- --------------------------------------------------------

--
-- Structure de la table `pièces`
--

CREATE TABLE `pièces` (
  `nom` varchar(255) NOT NULL,
  `superficie` int(255) NOT NULL,
  `n_capteurs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `pièces`
--

INSERT INTO `pièces` (`nom`, `superficie`, `n_capteurs`) VALUES
('ATINE', 120, 5),
('ATINE', 120, 5),
('Salon', 50, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `prénom` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ville` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code_postal` int(11) NOT NULL,
  `pays` varchar(255) CHARACTER SET utf8 NOT NULL,
  `numero_tel` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `nom`, `prénom`, `mail`, `mdp`, `adresse`, `ville`, `code_postal`, `pays`, `numero_tel`) VALUES
(6, 'jeanoo75', 'luc', 'jean', 'jean.thierry@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '34 rue des champs', 'Cassis', 13260, 'France', 654325467),
(7, 'LuLu_24', 'Gallix', 'Lucas', 'lucas.gallix@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '99 rue de la Faisanderie', 'Paris', 75116, 'France', 669053275),
(8, 'JujuDu78', 'Lembourg', 'Julie', 'julie.lembourg@gmail.com', 'de271790913ea81742b7d31a70d85f50a3d3e5ae', '6 Square de Grandschamps', 'Marly-Le-Roi', 78160, 'France', 601415820),
(10, 'satine', 'ATINE', 'Sara', 'saraatine@hotmail.fr', '7e020785ae2f0168dedf9f6ef9b4de2a713c04f4', '17 Rue Tony Garnier', 'Boulogne Billancourt', 92100, 'France', 146055092),
(11, 'Asmaa', 'atine', 'asmaa', 'atine2@free.fr', '7e020785ae2f0168dedf9f6ef9b4de2a713c04f4', '17 Rue Tony Garnier ', 'Boulogne Billancourt', 92100, 'France', 146055092);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_logement`
--

CREATE TABLE `utilisateur_logement` (
  `id` varchar(255) NOT NULL,
  `id_logement` varchar(255) NOT NULL,
  `n_capteurs` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_pièces`
--

CREATE TABLE `utilisateur_pièces` (
  `id` int(11) NOT NULL,
  `id_pieces` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur_logement`
--
ALTER TABLE `utilisateur_logement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
