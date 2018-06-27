-- MySQL dump 10.13  Distrib 5.7.21, for macos10.13 (x86_64)
--
-- Host: localhost    Database: db_space
-- ------------------------------------------------------
-- Server version	5.7.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

CREATE SCHEMA `db_space`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE `db_space`;

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `infirmity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `respiratory` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mental` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cardiac` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fear` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usr` varchar(255) NOT NULL,
  `pwd` varchar(300) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(30) DEFAULT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (8,'nicolas.seyha@gmail.com','$2y$10$JdyaYWJ8PPElnNKaVGi.uu04n5/Vm2ZWmwkOgYKULaxJ3HgmhIdVi','MARTIN','Nicolas','A');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `planets`
--

DROP TABLE IF EXISTS `planets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `planets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `air` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wildlife` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flora` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weather` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `planets`
--

LOCK TABLES `planets` WRITE;
/*!40000 ALTER TABLE `planets` DISABLE KEYS */;
INSERT INTO `planets` VALUES (41,'GraviPic',1000000,'Non respirable','Animaux rampants, insectes','Roches, peu de végétation','Sec et froid','Non potable','Obligatoire pour se fournir de l\'eau et de l\'oxygène','https://image.noelshack.com/fichiers/2018/26/3/1530095368-low1.png'),(42,'Arid',1000000,'Non respirable','Animaux féroces','Dunes de sables et savanes, peu de végétation','Chaud et sec','Non potable','Obligatoire pour se fournir de l\'eau et de l\'oxygène','https://image.noelshack.com/fichiers/2018/26/3/1530095368-low2.png'),(43,'Tribal',100000000,'Air recyclée par des machines','Animaux venimeux','Jungles, rocheux','Chaud et humide','Potable','Collaboratif','https://image.noelshack.com/fichiers/2018/26/3/1530095368-middle1.png'),(44,'Enigma',100000000,'Air recyclée par des machines','Insectes et gibiers','Forestier','Froid et humide','Potable','Collaboratif','https://image.noelshack.com/fichiers/2018/26/3/1530095368-middle2.png'),(45,'Echo',900000000,'Respirable, renouvelé par les nombreux végétaux','Elevage de bétail','Abondance de verdures, prairies, fleuves, citernes souterraines','Tempéré','Potable','Volontariat','https://image.noelshack.com/fichiers/2018/26/3/1530095368-luxe1.png'),(46,'Lumi',900000000,'Respirable','Volatiles','Champs de végétaux, cocotiers, palmiers, plages, lacs','Méditerranéen','Potable','Volontariat','https://image.noelshack.com/fichiers/2018/26/3/1530095368-luxe2.png');
/*!40000 ALTER TABLE `planets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ship`
--

DROP TABLE IF EXISTS `ship`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ship` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) NOT NULL,
  `air` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spacing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `connection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `installations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ship`
--

LOCK TABLES `ship` WRITE;
/*!40000 ALTER TABLE `ship` DISABLE KEYS */;
INSERT INTO `ship` VALUES (5,'Exploria 1.0',5000000,'Air recyclée par des machines','35 jours','10 000 passagers','Non','Couchette pour 2 passagers','https://image.noelshack.com/fichiers/2018/26/3/1530095520-low1.jpg'),(6,'Exploria 2.0',5000000,'Air recyclée par des machines','35 jours','10 000 passagers','Non','Couchette pour chaque passager','https://image.noelshack.com/fichiers/2018/26/3/1530095551-low2.jpg'),(7,'Aventura 1.0',500000,'Air recyclée par des machines','15 jours','2000 passagers','Partielle','Douche, cuisine, couchette','https://image.noelshack.com/fichiers/2018/26/3/1530095581-middle1.jpg'),(8,'Aventura 2.0',500000,'Air recyclée par des machines','15 jours','2000 passagers','30 minutes gratuites puis 50€/h','Douche, cuisine, couchette','https://image.noelshack.com/fichiers/2018/26/3/1530095581-middle2.jpg'),(9,'Eternel 1.0',50000,'Respirable','6 jours','Au choix','Oui','Salle de bain, cuisine, salle à manger, chambres, home-cinéma','https://image.noelshack.com/fichiers/2018/26/3/1530095581-luxe1.jpg'),(10,'Eternel 2.0',50000,'Respirable','6 jours','Au choix','Oui','Douche, cuisine, couchette, salle de sport, home-cinéma, piscine, sauna','https://image.noelshack.com/fichiers/2018/26/3/1530095581-luxe2.jpg');
/*!40000 ALTER TABLE `ship` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `station` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `station`
--

LOCK TABLES `station` WRITE;
/*!40000 ALTER TABLE `station` DISABLE KEYS */;
INSERT INTO `station` VALUES (6,'Comete',30,'Non respirable','Immeuble','Travail','Non','Non','Non','Non','https://image.noelshack.com/fichiers/2018/26/3/1530095813-low1.jpg'),(7,'Spiral',50,'Non respirable','Immeuble','Travail','Non','Non','Non','Non','https://image.noelshack.com/fichiers/2018/26/3/1530095813-low2.jpg'),(8,'Luna',70,'Air recyclée par des machines','Résidence pavillonaire','Marché hebdomadaire','Non','Hôpitaux, écoles','Non','Non','https://image.noelshack.com/fichiers/2018/26/3/1530095813-middle1.jpg'),(9,'Meteor',70,'Air recyclée par des machines','Résidence pavillonaire avec jardin de 45m²','Marché hebdomadaire','Non','Hôpitaux, écoles','Non','Non','https://image.noelshack.com/fichiers/2018/26/3/1530095813-middle2.jpg'),(10,'Cosmo',300000,'Respirable','Villa','Commerces','Evènements sportifs et culturels','Hôpitaux, écoles, service civil','Oui','Oui','https://image.noelshack.com/fichiers/2018/26/3/1530095813-luxe1.jpg'),(11,'Galaxia',300000,'Respirable','Duplex','Commerces','Evènements sportifs et culturels, avec accès entrées VIP pour les évènements','Hôpitaux, écoles, service civil','Oui','Oui','https://image.noelshack.com/fichiers/2018/26/3/1530095813-luxe2.jpg');
/*!40000 ALTER TABLE `station` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Nicolas',18,'Française',174,59,'None','Tout va bien','Non.','Doliprane','Je vais bien','Bof','Des fois quand je cours je fais des points de cotés','Jeux d\'horreurs','never','never','0','2','Web Dev.',101010101,'mail@example.com','10 avenue Poil, Poil');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-27 13:59:13
