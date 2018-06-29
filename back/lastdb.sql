-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 29 juin 2018 à 01:46
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `db_space`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `infirmity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respiratory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mental` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardiac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `aio`
--

CREATE TABLE `aio` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(30) NOT NULL,
  `category` varchar(60) DEFAULT NULL,
  `planet` varchar(50) DEFAULT NULL,
  `module` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `usr` varchar(255) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `type` varchar(1) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `usr`, `pwd`, `name`, `surname`, `type`, `img`) VALUES
(8, 'nicolas.seyha@gmail.com', '$2y$10$JdyaYWJ8PPElnNKaVGi.uu04n5/Vm2ZWmwkOgYKULaxJ3HgmhIdVi', 'MARTIN', 'Nicolas', 'A', 'https://vignette.wikia.nocookie.net/swinkapeppa/images/9/91/C26bfe3ba4576eb1b6ad0eb59d30715a.jpg/revision/latest?cb=20161013183818&path-prefix=pl'),
(9, 'oui@non.com', '$2y$10$CqkN2ABzz4Dsh3jyRvD4guAym/TktB5IFdHtNeaf83J.4zbvZBfHC', 'oui', 'non', 'U', 'https://image.ibb.co/e7CtEo/astronaut.png');

-- --------------------------------------------------------

--
-- Structure de la table `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `air` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wildlife` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flora` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weatherdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wildlifedesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `airdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `planets`
--

INSERT INTO `planets` (`id`, `name`, `size`, `air`, `wildlife`, `flora`, `weather`, `water`, `work`, `link`, `weatherdesc`, `wildlifedesc`, `airdesc`, `workdesc`) VALUES
(41, 'GraviPic', 1000000, 'Non respirable', 'Animaux rampants, insectes', 'Roches, peu de végétation', 'Sec et froid', 'Non potable', 'Obligatoire pour se fournir de l\'eau et de l\'oxygène', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-low1.png', 'Le climat de cette planète est plutôt sec et très froid. La façon de vivre sur cette planète sera difficile pour ceux qui la chercheront. On y retrouve des paysages montagneux et rocheux. De grandes plaines glacées seront également exploitables pour les i', 'Des animaux rampants et insectes y habitent, dans un milieu montagneux et rocheux. La végétation est en retrait sur les terres de Gravipic, certaines seront donc exploitées par des compagnies. ', 'Le niveau d’oxygène sur cette planète est très faible due aux évolutions de cette dernière. Malgré cela, des zones sont fortement exploitables par des civilisations. À vous de vous donner les moyens pour vous en fournir.', 'Vous serez amenés à travailler pour subvenir à vos besoins : obtenir de l’eau potable et de l’oxygène. Vos moyens sur cette planète  dépendent donc de votre capacité à travailler efficacement'),
(42, 'Arid', 1000000, 'Non respirable', 'Animaux féroces', 'Dunes de sables et savanes, peu de végétation', 'Chaud et sec', 'Non potable', 'Obligatoire pour se fournir de l\'eau et de l\'oxygène', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-low2.png', 'L’environnement est désertique, dans un climat chaud et sec.', 'Un mélange d’animaux féroces, de dunes de sables et de savane, avec peu de végétation.\r\n', 'Il n’y a pas de présence d’O2 dans cette atmosphère. A vous de vous donner les moyens pour vous en fournir.', 'Vous serez amenés à travailler pour subvenir à vos besoins : obtenir de l’eau potable et de l’oxygène.'),
(43, 'Tribal', 100000000, 'Air recyclée par des machines', 'Animaux venimeux', 'Jungles, rocheux', 'Chaud et humide', 'Potable', 'Collaboratif', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-middle1.png', 'La planète se constitue d’un climat tropicale : chaud et humide\r\n', 'Le cadre se décrit comme rocheux, hostile, en présence de jungles cachant des animaux venimeux.\r\n', 'L’air est ici recyclé par des machines, cependant elle y est respirable.\r\n', 'Vous serez amenés à travailler en collaboration avec des sociétés et des mafias\r\n'),
(44, 'Enigma', 100000000, 'Air recyclée par des machines', 'Insectes et gibiers', 'Forestier', 'Froid et humide', 'Potable', 'Collaboratif', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-middle2.png', 'La planète se constitue d’un climat froid et humide\r\n', 'Le cadre se décrit comme forestier, on y retrouve des grands arbres et des grottes sans fins ...\r\n', 'L’air est ici recyclé par des systèmes délocalisés tout autour de la planète. \r\n', 'Vous serez amenés à travailler en collaboration avec des sociétés ou vous pourrez essayer de vivre de façon solitaire'),
(45, 'Echo', 900000000, 'Respirable, renouvelé par les nombreux végétaux', 'Elevage de bétail', 'Abondance de verdures, prairies, fleuves, citernes souterraines', 'Tempéré', 'Potable', 'Volontariat', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-luxe1.png', 'Le climat est tempéré et stable, convenable pour l’humanité.\r\n', 'Il y aura de l’élevage de bétail, avec l’abondance de verdures, prairies, fleuves, citernes souterraines.', 'L’air est renouvelé par les innombrables végétaux et systèmes évolués.\r\n', ' Le travail se basera sur le volontariat. L’économie est fiable et progressive, ce qui permets une vie stable pour les populations.\r\n'),
(46, 'Lumi', 900000000, 'Respirable', 'Volatiles', 'Champs de végétaux, cocotiers, palmiers, plages, lacs', 'Méditerranéen', 'Potable', 'Volontariat', 'https://image.noelshack.com/fichiers/2018/26/3/1530095368-luxe2.png', 'Le climat est méditerranéen, d’une moyenne de 20°C, convenable pour l’homme.\r\n', 'Il y aura de gros champs de végétaux, tels que des cocotiers et palmiers avec l’abondance de plages, de lacs, aménagements balnéaires.', 'L’air est renouvelé par les grandes densités de végétaux.', 'Le travail se basera sur le volontariat et certaines sociétés.\r\n'),
(47, 'Test planète', 2123, 'Oxygène', 'Animaux multiples', 'Non', 'Tempéré', 'Oui', 'Travail', 'http://www.pngmart.com/files/3/Space-Planet-Transparent-Background.png', 'Un climat pouvant varier de 0°C à 50°C maximum, dans les régions les plus arides.', 'Présence animale très variée, comprenant des animaux terrestres, ainsi que des animaux marins.', 'Un air plutôt tempéré, très respirable, et semblable à celui présent sur la Terre, permettant une adaptation facile et non dangereuse pour l\'Homme.', 'Du travail partout, oui, j\'ai plus le temps de faire une description donc j\'en laisse une rapide juste ici.');

-- --------------------------------------------------------

--
-- Structure de la table `ship`
--

CREATE TABLE `ship` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `air` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spacing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `installationsdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durationdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spacingdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connectiondesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ship`
--

INSERT INTO `ship` (`id`, `name`, `size`, `air`, `duration`, `spacing`, `connection`, `installations`, `link`, `installationsdesc`, `durationdesc`, `spacingdesc`, `connectiondesc`) VALUES
(5, 'Exploria 1', 5000000, 'Air recyclée par des machines', '35 jours', '10 000 passagers', 'Non', 'Couchette pour 2 passagers', 'https://image.noelshack.com/fichiers/2018/26/3/1530095520-low1.jpg', ' Une couchette à est disposition pour chaque passager.\r\n', 'Un voyage assez long en raison de la machinerie précaire du vaisseau', 'Ce vaisseau peut contenir un grand nombre de personnes, soit 10 000 passagers.\r\n', 'Pas de connexion à la Terre.\r\n'),
(6, 'Exploria 2', 5000000, 'Air recyclée par des machines', '35 jours', '10 000 passagers', 'Non', 'Couchette pour chaque passager', 'https://image.noelshack.com/fichiers/2018/26/3/1530095551-low2.jpg', 'Une couchette est à disposition pour 2 passagers.\r\n', 'Durée assez longue en raison de son retard technologique', 'Ce vaisseau peut contenir un grand nombre de personnes, soit 10 000 passagers.\r\n', 'Pas de connexion à la Terre.\r\n'),
(7, 'Aventura 1\r\n', 500000, 'Air recyclée par des machines', '15 jours', '2000 passagers', 'Partielle', 'Douche, cuisine, couchette', 'https://image.noelshack.com/fichiers/2018/26/3/1530095581-middle1.jpg', 'Nous mettrons à disposition une douche et une cuisine, en plus d’une couchette.\r\n', 'Voyage de durée respectable du à sa technologie moderne', 'Vous réaliserez votre parcours par convoi de 2000 passagers.\r\n', 'Vous aurez une connexion partielle à la planète Terre.\r\n'),
(8, 'Aventura 2', 500000, 'Air recyclée par des machines', '15 jours', '2000 passagers', '30 minutes gratuites puis 50€/h', 'Douche, cuisine, couchette', 'https://image.noelshack.com/fichiers/2018/26/3/1530095581-middle2.jpg', 'Nous mettrons à disposition une douche et une cuisine, en plus d’une couchette.\r\n', 'Durée acceptable en raison de sa machinerie aux normes', 'Vous réaliserez votre parcours par convoi de 2000 passagers.\r\n', 'Vous aurez une connexion avec la planète Terre gratuite pendant 30 minutes puis payante de 50€/h.\r\n'),
(9, 'Eternel 1', 50000, 'Respirable', '6 jours', 'Au choix', 'Oui', 'Salle de bain, cuisine, salle à manger, chambres, home-cinéma', 'https://image.noelshack.com/fichiers/2018/26/3/1530095581-luxe1.jpg', ' Un vaisseau spacieux dernière génération, avec à disposition une salle de bain, une cuisine, une salle à manger et des chambres.\r\n', 'Un trajet rapide en raison de sa machinerie à la pointe de la technologie', 'Autant de personnes que vous souhaitez puisque ce vaisseau vous est personnel. Vous pourrez monter à bord avec votre proches, ou seulement vous.\r\n', 'Vous pourrez vous connecter en permanence avec la planète Terre.\r\n'),
(10, 'Eternel 2.0', 50000, 'Respirable', '6 jours', 'Au choix', 'Oui', 'Douche, cuisine, couchette, salle de sport, home-cinéma, piscine, sauna', 'https://image.noelshack.com/fichiers/2018/26/3/1530095581-luxe2.jpg', ' Un vaisseau spacieux dernière génération, avec à disposition une salle de bain, une cuisine, une salle à manger, des chambres, une salle de sport, une home-cinéma, une piscine et un sauna.\r\n', 'Un trajet très rapide en raison de l\'ergonomie et du nombre de passagers', 'Autant de personnes que vous souhaitez puisque ce vaisseau vous est personnel. Vous pourrez monter à bord avec votre proches, ou seulement vous.\r\n', 'Vous pourrez vous connecter en permanence avec la planète Terre.\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `station`
--

CREATE TABLE `station` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `air` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `residence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `leisure` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `land` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `servicesdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activitydesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `residencedesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `station`
--

INSERT INTO `station` (`id`, `name`, `size`, `air`, `residence`, `activity`, `leisure`, `services`, `land`, `staff`, `link`, `servicesdesc`, `activitydesc`, `residencedesc`) VALUES
(6, 'Comète', 30, 'Non respirable', 'Immeuble', 'Travail', 'Non', 'Non', 'Non', 'Non', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-low1.jpg', 'Il n’y a pas de services proposés.', 'Il n’y a pas d’activités proposés.', 'Logement dans un immeuble'),
(7, 'Spiral', 50, 'Non respirable', 'Immeuble', 'Travail', 'Non', 'Non', 'Non', 'Non', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-low2.jpg', 'Il n\'y a pas de services proposés', 'Il n’y a pas d’activités proposés.\r\n', 'Logement dans un immeuble\r\n'),
(8, 'Luna', 70, 'Air recyclée par des machines', 'Résidence pavillonaire', 'Marché hebdomadaire', 'Non', 'Hôpitaux, écoles', 'Non', 'Non', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-middle1.jpg', 'Vous aurez à disposition des hôpitaux, des écoles. \r\n', 'Un marché matinal est organisé chaque semaine.\r\n', 'Vous serez dans une résidence pavillonaire.'),
(9, 'Meteor', 70, 'Air recyclée par des machines', 'Résidence pavillonaire avec jardin de 45m²', 'Marché hebdomadaire', 'Non', 'Hôpitaux, écoles', 'Non', 'Non', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-middle2.jpg', 'Vous aurez à disposition des hôpitaux, des écoles. ', 'Un marché matinal est organisé chaque semaine.', 'Vous serez dans une maison pavillonnaire avec un jardin.'),
(10, 'Cosmo', 300000, 'Respirable', 'Villa', 'Commerces', 'Evènements sportifs et culturels', 'Hôpitaux, écoles, service civil', 'Oui', 'Oui', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-luxe1.jpg', 'Vous aurez à disposition des hôpitaux, des écoles et services civils. \r\n', 'L’activité est dynamique, par les nombreux commerces, les évènements sportifs et culturels et les espaces publics.', 'Cosmo propose une villa spacieuse.'),
(11, 'Galaxia', 300000, 'Respirable', 'Duplex', 'Commerces', 'Evènements sportifs et culturels, avec accès entrées VIP pour les évènements', 'Hôpitaux, écoles, service civil', 'Oui', 'Oui', 'https://image.noelshack.com/fichiers/2018/26/3/1530095813-luxe2.jpg', 'Vous aurez à disposition des hôpitaux, des écoles et services civils. ', 'L’activité est dynamique, par les nombreux commerces, les évènements sportifs et culturels et les espaces publics. Vous aurez accès aux entrées VIP pour chaque évènements, restaurants, clubs, etc…', 'Galaxia propose un duplex spacieux.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `nationality` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `allergy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `infirmity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respiratory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mental` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardiac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `mail` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `age`, `nationality`, `size`, `weight`, `allergy`, `diet`, `infirmity`, `medication`, `respiratory`, `mental`, `cardiac`, `fear`, `alcohol`, `drug`, `family`, `pregnant`, `professional`, `phone`, `mail`, `address`) VALUES
(1, 'Nicolas', 18, 'Française', 174, 59, 'None', 'Tout va bien', 'Non.', 'Doliprane', 'Je vais bien', 'Bof', 'Des fois quand je cours je fais des points de cotés', 'Jeux d\'horreurs', 'never', 'never', '0', '2', 'Web Dev.', 101010101, 'mail@example.com', '10 avenue Poil, Poil');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `aio`
--
ALTER TABLE `aio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ship`
--
ALTER TABLE `ship`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `aio`
--
ALTER TABLE `aio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `ship`
--
ALTER TABLE `ship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `station`
--
ALTER TABLE `station`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
