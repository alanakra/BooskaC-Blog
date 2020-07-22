-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `intitule` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datepost` date DEFAULT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `intitule`, `datepost`, `contenu`) VALUES
(1, 'Bonjour, c\'est mon premier billet', '2020-03-24', ''),
(2, 'ghjkhjil\r\n', '2020-03-24', ''),
(5, 'Bonjour', '2020-03-24', 'Modif'),
(6, 'Dans avec les escocs', '2020-03-24', 'Chris Marques n\'est pas champion du monde de danse latine bordel'),
(7, 'Bonjour', '2020-03-24', 'Modif'),
(8, 'Timal', '2020-03-28', 'Timal naÃ®t le 10 juillet 1997 Ã  Saint-Denis, en Seine-Saint-Denis, et grandit Ã  Champs-sur-Marne, en Seine-et-Marne2. Ses origines guadeloupÃ©ennes lui inspirent son nom de scÃ¨ne Â« Timal Â». En 2016, Timal commence Ã  poster des titres inÃ©dits et divers freestyles sur la chaÃ®ne YouTube Daymolition ; chaÃ®ne qui offre de l\'exposition aux jeunes rappeurs, et se fait connaÃ®tre avec la sÃ©rie de freestyle Â« Rapport Â»[source insuffisante]3. Le 27 avril 2018, Timal sort son premier album studio sous une version double album intitulÃ© Trop chaud, lequel s\'Ã©coule Ã  10 446 exemplaires vendus au cours de sa premiÃ¨re semaine d\'exploitation4. Un premier CD comprend l\'album en lui-mÃªme, tandis que le second compile les freestyles qui l\'ont fait connaÃ®tre. Au mois de juillet 2018, l\'album est certifiÃ© disque d\'or5,6, puis disque de platine en fin 2019.Et enfin le 28 FÃ©vrier, Timal sort son deuxiÃ¨me album avec la participation de Maes, Leto et PLK . '),
(9, 'Lacrim', '2020-03-29', 'Lacrim, de son vrai nom Karim Zenoud, nÃ© le 19 avril 1985 Ã  Paris, est un rappeur franÃ§ais. En 2009, Lacrim s\'installe Ã  Marseille. C\'est lÃ  qu\'il dÃ©cide de se lancer dans une carriÃ¨re musicale, faisant ses dÃ©buts par le biais de featurings sur des titres de Mister You. '),
(10, 'Ninho et Hos Copperfield, les Â« Pirates Â» la B.O de Â« ValidÃ© Â» [VIDEO]', '2020-03-29', 'Depuis sa sortie, c\'est peu dire que la sÃ©rie ValidÃ© secoue le game. PremiÃ¨re oeuvre de ce style Ã  s\'intÃ©resser de prÃ¨s aux coulisses du rap franÃ§ais, elle a mis en Ã©vidence le talent face camÃ©ra des rappeurs tels que Hatik, Sam\'s ou encore Bosh, sans nommer un sacrÃ© nombre de guests au casting. En plus de cela, elle a signÃ© des records de streams ! Et pour que la boucle soit bouclÃ©e, Frank Gastambide et son Ã©quipe ont tout prÃ©vu, avec une bande originale (dÃ©jÃ  disponible) au menu. Aujourd\'hui, rendez-vous avec un nouvel extrait de celle-ci... \r\nUne combinaison gagnante \r\n\r\nUne semaine aprÃ¨s la sortie de ValidÃ© sur les antennes du groupe Canal+, c\'est donc le titre Pirate, qui se livre, fruit d\'une combinaison entre Ninho et Hos Copperfield. Deux rappeurs qui se connaissent bien, le second Ã©tant d\'ailleurs signÃ© sur le label du premier, TTR. AprÃ¨s avoir rÃ©alisÃ© plusieurs morceaux tous les deux tels que Dita ou Ma Guapa, ils remettent aujourd\'hui le couvert avec une rÃ©alisation qui fait la part belle Ã  leur Ã©criture proche du bitume. Un extrait envoyÃ© sous forme de lyrics videos, mais qui laisse apprÃ©cier de nombreuses scÃ¨nes issues de ValidÃ©. '),
(11, 'DA Uzi veut aller Â« Autre part Â» [VIDEOCLIP]', '2020-03-29', 'Le rappeur fait la diffÃ©rence dans un registre inÃ©dit.\r\nDifficile de passer Ã  cÃ´tÃ© de DA Uzi en ce dÃ©but d\'annÃ©e 2020. En effet, entre une participation Ã  la deuxiÃ¨me Ã©dition de notre Booska Classico et une grosse prestation dans le freestyle Booska New York, le bonhomme a annoncÃ© l\'arrivÃ©e prochaine de son album Architecte. Un projet qui fera la part belle aux featurings et dans lequel il se livrera encore d\'avantage... Comme le prouve le clip du jour dont il est extrait, Autre part. \r\nQuand DA Uzi se confie \r\n\r\nC\'est un fait, DA Uzi est souvent synonyme de rap virulent, nerveux Ã  souhait. DÃ©couvert avec sa sÃ©rie de freestyles La D en personne, il avait avec son projet Mexico rÃ©ussi Ã  surprendre son monde, tentant de s\'ouvrir sur des titres plus tubesques tels que Bonita. Aujourd\'hui, changement d\'ambiance pour celui qui s\'est fait une spÃ©cialitÃ© des partitions violentes. Avec Autre part, il ajoute une nouvelle pierre prÃ©cieuse Ã  son Ã©difice, gagnant le pari d\'un son oÃ¹ l\'Ã©motion est au rendez-vous, avec notamment des parties plus chantÃ©es. Une preuve de sa polyvalence, lui qui se confie aujourd\'hui en compagnie d\'une jolie petite famille devant la camÃ©ra... \r\nPlus quelques jours Ã  patienter avant la sortie de son album Â« Architecte Â»\r\n\r\nLe 3 avril prochain, ce sera donc au tour du projet Architecte de se dÃ©voiler. Un album qui a Ã©tÃ© teasÃ© avec de savoureux extraits tels que Le Dire featuring Maes, mais aussi Plus belle la vie et enfin Autre part, partagÃ© aujourd\'hui. Cependant, DA Uzi a tout prÃ©vu pour rÃ©galer son public avec pas moins de 23 morceaux inscrits Ã  sa tracklist. Ainsi, vous aurez tout le temps d\'apprÃ©cier des collaborations avec Imen Es (Les traÃ®tres), SCH (Ni amour ni amitiÃ©), Alonzo (F.L.P), Mister You (Culiacan) et enfin Ninho (Crois-moi). Rien de mieux sachant pour l\'instant, il va falloir faire avec le confinement... '),
(13, 'Test suppression', '2020-03-31', ''),
(14, 'DÃ©monstration PHP', '2020-04-01', 'Coucou'),
(15, 'Titre de mon billet', '2020-04-01', 'Contenu de mon super Billet');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datepost` date DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `billet_id` int(11) NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_67F068BCFB88E14F` (`utilisateur_id`),
  KEY `IDX_67F068BC44973C78` (`billet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `datepost`, `utilisateur_id`, `billet_id`, `contenu`) VALUES
(1, '2020-03-24', 3, 6, 'GOGO'),
(2, '2020-03-24', 3, 1, 'Other'),
(3, '2020-03-27', 3, 1, 'Un commentaire sur formulaire'),
(4, '2020-03-28', 1, 2, 'Le commentaire de Titi'),
(5, '2020-03-30', 3, 11, 'Un com de Kaaris'),
(6, '2020-03-30', 3, 10, 'âœ…'),
(7, '2020-03-31', 3, 13, 'Ceci est une commentaire pour le post de test de suppression'),
(8, '2020-04-01', 1, 13, 'Heu Bonsoir'),
(9, '2020-04-01', 1, 14, 'Salut'),
(10, '2020-04-01', 1, 9, 'libÃ©rez Lacrim');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `datepost` date DEFAULT NULL,
  `utilisateur_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_DB021E96FB88E14F` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `text`, `datepost`, `utilisateur_id`) VALUES
(1, 'Bonjour c\'est mon nouveau message', NULL, 1),
(2, 'Bonjour c\'est mon nouveau nouveau message', NULL, 1),
(3, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 1),
(4, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 1),
(5, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 2),
(6, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 2),
(7, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 2),
(8, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 2),
(9, 'Bonjour c\'est encore mon nouveau nouveau message', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `passwd`, `categorie`) VALUES
(1, 'Titi', 'titi01', 'logue'),
(2, 'Tutu', 'tutu01', 'non_logue'),
(3, 'Tyty', 'tyty01', 'proprietaire');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC44973C78` FOREIGN KEY (`billet_id`) REFERENCES `billet` (`id`),
  ADD CONSTRAINT `FK_67F068BCFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `FK_DB021E96FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
