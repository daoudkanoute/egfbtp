-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: egfbtp_dev
-- ------------------------------------------------------
-- Server version	5.5.54-0+deb7u1

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
-- Table structure for table `QCMs`
--

DROP TABLE IF EXISTS `QCMs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QCMs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `success_minimum` double DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QCMs`
--

LOCK TABLES `QCMs` WRITE;
/*!40000 ALTER TABLE `QCMs` DISABLE KEYS */;
INSERT INTO `QCMs` VALUES (1,'QCM Principale',1,'2017-02-12 16:31:11','2017-05-21 18:08:53');
/*!40000 ALTER TABLE `QCMs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QCMs_questions`
--

DROP TABLE IF EXISTS `QCMs_questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QCMs_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `sound_id` int(11) DEFAULT NULL,
  `qcm_id` int(11) DEFAULT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_863EB11B3DA5256D` (`image_id`),
  UNIQUE KEY `UNIQ_863EB11B6AAA5C3E` (`sound_id`),
  KEY `IDX_863EB11BFF6241A6` (`qcm_id`),
  CONSTRAINT `FK_863EB11BFF6241A6` FOREIGN KEY (`qcm_id`) REFERENCES `QCMs` (`id`),
  CONSTRAINT `FK_863EB11B3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`),
  CONSTRAINT `FK_863EB11B6AAA5C3E` FOREIGN KEY (`sound_id`) REFERENCES `sound` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QCMs_questions`
--

LOCK TABLES `QCMs_questions` WRITE;
/*!40000 ALTER TABLE `QCMs_questions` DISABLE KEYS */;
INSERT INTO `QCMs_questions` VALUES (1,1,1,1,'multiple','Q1 : Au chantier, où dois-je prendre mes repas ?','2017-02-12 16:49:31','2017-02-21 21:27:22'),(2,2,2,1,'multiple','Q2 : Que veut dire ce symbole ?','2017-02-18 17:29:31','2017-02-21 21:27:22'),(3,12,3,1,'multiple','Q3 : La consommation d’alcool est-elle autorisée au poste de travail sur le chantier ?','2017-02-21 19:36:34','2017-03-07 15:29:13'),(5,14,4,1,'multiple','Q4 : La consommation de drogue est interdite en France ! Quels effets provoquerait-elle au travail ?','2017-02-21 19:39:40','2017-03-07 15:29:23'),(6,15,5,1,'multiple','Q5 : Qui est responsable du port des EPI des compagnons ?','2017-02-21 19:41:39','2017-03-07 15:29:33'),(7,16,6,1,'multiple','Q6 : A la découverte d’un grillage avertisseur de présence de réseaux enterrés dans le sol, que dois-je faire ?','2017-02-21 19:47:12','2017-03-07 15:29:44'),(8,17,7,1,'multiple','Q7 : Qui peut réparer un fil d’alimentation électrique sur le chantier ?','2017-02-21 20:27:00','2017-03-07 15:29:55'),(9,18,8,1,'multiple','Q8 : Dans cette situation , que faites-vous ?','2017-02-21 20:28:55','2017-03-07 15:30:05'),(10,19,9,1,'multiple','Q9 : Je peux conduire un engin sur le chantier si :','2017-02-21 20:30:57','2017-03-07 15:30:14'),(11,20,10,1,'multiple','Q10 : Quels comportements adopter quand je me déplace près d’une mini pelle :','2017-02-21 20:33:05','2017-03-07 15:30:26'),(12,21,11,1,'multiple','Q11 : Mon chef me demande d’aller piocher à 3 mètres de haut :','2017-02-21 20:37:13','2017-03-07 15:30:41'),(13,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:39:30','2017-02-21 20:39:30'),(14,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:39:41','2017-02-21 20:39:41'),(15,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:39:48','2017-02-21 20:39:48'),(16,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:39:55','2017-02-21 20:39:55'),(17,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:42:30','2017-02-21 20:42:30'),(18,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:42:42','2017-02-21 20:42:42'),(19,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:42:59','2017-02-21 20:42:59'),(20,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:43:12','2017-02-21 20:43:12'),(21,78,12,1,'multiple','Q12 : Parmi ces situations A, B, C et D, lesquelles sont correctes pour travailler en sécurité à proximité ?','2017-02-21 20:43:55','2017-05-21 17:49:12'),(22,34,13,1,'multiple','Q13 : Pour assurer une bonne stabilité de l’échafaudage roulant , que dois-je faire ?','2017-02-21 20:51:52','2017-03-07 15:31:04'),(23,35,14,1,'multiple','Q14 : Je peux monter, démonter ou modifier un échafaudage sur le chantier :','2017-02-21 20:52:53','2017-03-07 15:31:10'),(24,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:55:18','2017-02-21 20:55:18'),(25,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:55:34','2017-02-21 20:55:34'),(26,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:55:49','2017-02-21 20:55:49'),(27,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:56:22','2017-02-21 20:56:22'),(28,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:56:25','2017-02-21 20:56:25'),(29,NULL,NULL,NULL,NULL,NULL,'2017-02-21 20:56:28','2017-02-21 20:56:28'),(30,71,15,1,'multiple','Q15 : Parmi ces situations A, B et C, lesquelles sont correctes pour accéder en sécurité au poste de travail en fond de fouille ?','2017-02-21 20:56:32','2017-05-21 17:38:42'),(31,45,16,1,'multiple','Q16 : La méthode de travail prévue ne fonctionne pas, que faites-vous ?','2017-02-21 21:00:32','2017-03-07 15:31:25'),(32,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:02:55','2017-02-21 21:02:55'),(33,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:03:03','2017-02-21 21:03:03'),(34,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:03:17','2017-02-21 21:03:17'),(35,72,17,1,'multiple','Q17 : Parmi ces situations A, B et C, lesquelles sont correctes pour travailler en sécurité sans risque d’ensevelissement ?','2017-02-21 21:03:27','2017-05-21 17:33:29'),(36,52,18,1,'multiple','Q18 : Mon chef me demande de monter sur cette banche pour la décrocher ; que faites-vous ?','2017-02-21 21:07:25','2017-03-07 15:31:41'),(37,53,19,1,'multiple','Q19 : Ce préfabriqué est-il suffisamment stabilisé pour éviter tout risque de renversement ?','2017-02-21 21:08:45','2017-03-07 15:31:47'),(38,54,20,1,'multiple','Q20 : Pour utiliser ces matériels électroportatifs , il suffit :','2017-02-21 21:09:31','2017-03-07 15:31:55'),(39,55,21,1,'multiple','Q21 : Qui doit guider le grutier lors des manœuvres  ?','2017-02-21 21:11:36','2017-03-07 15:32:04'),(40,56,22,1,'multiple','Q22 : Lorsque la manutention est terminée, que dois-je faire de cette sangle à usage unique ?','2017-02-21 21:15:47','2017-03-07 15:32:13'),(41,57,23,1,'multiple','Q23 : Cette opération de levage vous paraît-elle sécurisante ?','2017-02-21 21:18:10','2017-03-07 15:32:20'),(42,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:21:22','2017-02-21 21:21:22'),(43,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:21:30','2017-02-21 21:21:30'),(44,NULL,NULL,NULL,NULL,NULL,'2017-02-21 21:21:41','2017-02-21 21:21:41'),(45,73,24,1,'multiple','Q24 : Parmi ces situations A, B et C, lesquelles sont correctes pour travailler en sécurité sans risque de heurt vis-à-vis de la circulation ?','2017-02-21 21:21:46','2017-05-21 17:41:25'),(46,64,25,1,'multiple','Q25 : Mon chef d’équipe me demande de mettre en œuvre ce nouveau produit . Que dois-je faire ?','2017-02-21 21:23:42','2017-03-07 15:32:36');
/*!40000 ALTER TABLE `QCMs_questions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `QCMs_responses`
--

DROP TABLE IF EXISTS `QCMs_responses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QCMs_responses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image_id` int(11) DEFAULT NULL,
  `question_id` int(11) DEFAULT NULL,
  `response` longtext COLLATE utf8_unicode_ci,
  `is_true` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3DBD7A5A3DA5256D` (`image_id`),
  KEY `IDX_3DBD7A5A1E27F6BF` (`question_id`),
  CONSTRAINT `FK_3DBD7A5A1E27F6BF` FOREIGN KEY (`question_id`) REFERENCES `QCMs_questions` (`id`),
  CONSTRAINT `FK_3DBD7A5A3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=95 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QCMs_responses`
--

LOCK TABLES `QCMs_responses` WRITE;
/*!40000 ALTER TABLE `QCMs_responses` DISABLE KEYS */;
INSERT INTO `QCMs_responses` VALUES (1,NULL,1,'Au réfectoire des cantonnements du personnel.',1,'2017-02-12 16:50:09','2017-02-21 19:29:10'),(2,NULL,1,'N’importe où sur le chantier.',0,'2017-02-12 16:50:09','2017-02-21 19:29:10'),(3,NULL,1,'Je ne sais pas.',0,'2017-02-12 16:50:09','2017-02-21 19:29:10'),(4,3,NULL,NULL,0,'2017-02-18 17:29:56','2017-02-18 17:29:56'),(5,4,NULL,NULL,0,'2017-02-18 17:30:04','2017-02-18 17:30:04'),(6,NULL,2,'Point de rassemblement en cas d’urgence.',1,'2017-02-18 17:30:28','2017-02-22 12:31:28'),(7,NULL,2,'Passage obligatoire.',0,'2017-02-18 17:30:28','2017-02-22 12:31:30'),(8,NULL,2,'Sortie de secours.',0,'2017-02-21 19:29:10','2017-02-21 19:29:10'),(9,NULL,3,'Oui',0,'2017-02-21 19:38:31','2017-02-21 19:41:39'),(10,NULL,3,'Non',1,'2017-02-21 19:38:31','2017-02-21 19:41:39'),(11,NULL,5,'Un temps de réaction modifié et rallongé.',1,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(12,NULL,5,'Aucun, si j’ai consommé la veille chez moi.',0,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(13,NULL,5,'Une mauvaise appréciation des risques.',1,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(14,NULL,6,'Moi tout seul',0,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(15,NULL,6,'Moi et mon chef',1,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(16,NULL,6,'Mon chef seulement',0,'2017-02-21 19:41:39','2017-02-21 19:41:39'),(17,NULL,7,'Arrêter mon travail',1,'2017-02-21 19:48:06','2017-02-21 19:48:06'),(18,NULL,7,'Continuer à travailler',0,'2017-02-21 19:48:06','2017-02-21 19:48:06'),(19,NULL,7,'Alerter mon chef',1,'2017-02-21 19:48:06','2017-02-21 19:48:06'),(20,NULL,8,'Tout le monde.',0,'2017-02-21 20:27:28','2017-02-21 20:27:28'),(21,NULL,8,'Une personne habilitée ou le fournisseur.',1,'2017-02-21 20:27:28','2017-02-21 20:27:28'),(22,NULL,9,'Rien, car cela ne me concerne pas.',0,'2017-02-21 20:30:12','2017-02-21 20:30:12'),(23,NULL,9,'J’alerte mon chef pour trouver une solution ensemble.',1,'2017-02-21 20:30:12','2017-02-21 20:30:12'),(24,NULL,9,'Je répare tout seul la protection et ne préviens personne.',0,'2017-02-21 20:30:12','2017-02-21 20:30:12'),(25,NULL,10,'On me le demande exceptionnellement.',0,'2017-02-21 20:31:58','2017-02-21 20:31:58'),(26,NULL,10,'J’ai reçu une Autorisation de conduite écrite pour conduire cet engin sur CE chantier',1,'2017-02-21 20:31:58','2017-02-21 20:31:58'),(27,NULL,10,'J’ai l’accord de mon chef',0,'2017-02-21 20:31:58','2017-02-21 20:31:58'),(28,NULL,11,'Je passe rapidement derrière.',0,'2017-02-21 20:34:55','2017-02-21 20:34:55'),(29,NULL,11,'Je ne reste pas dans les angles morts',1,'2017-02-21 20:34:55','2017-02-21 20:34:55'),(30,NULL,11,'Je vérifie que le conducteur m’a vu avant tout déplacement autour de la mini pelle.',1,'2017-02-21 20:34:55','2017-02-21 20:34:55'),(31,NULL,11,'Aucun, c’est au conducteur de faire attention aux piétons.',0,'2017-02-21 20:34:55','2017-02-21 20:34:55'),(32,NULL,12,'Je monte à l’échelle.',0,'2017-02-21 20:38:31','2017-02-21 20:38:31'),(33,NULL,12,'Je la bloque en pied , je monte à l’ échelle et l’accroche en haut.',0,'2017-02-21 20:38:31','2017-02-21 20:38:31'),(34,NULL,12,'Je lui demande une PIRL (gazelle) ou un échafaudage pour travailler.',1,'2017-02-21 20:38:31','2017-02-21 20:38:31'),(35,22,13,NULL,0,'2017-02-21 20:39:30','2017-02-21 20:39:30'),(36,23,14,NULL,0,'2017-02-21 20:39:41','2017-02-21 20:39:41'),(37,24,15,NULL,0,'2017-02-21 20:39:48','2017-02-21 20:39:48'),(38,25,16,NULL,0,'2017-02-21 20:39:55','2017-02-21 20:39:55'),(39,26,17,NULL,0,'2017-02-21 20:42:30','2017-02-21 20:42:30'),(40,27,18,NULL,0,'2017-02-21 20:42:42','2017-02-21 20:42:42'),(41,28,19,NULL,0,'2017-02-21 20:42:59','2017-02-21 20:42:59'),(42,29,20,NULL,0,'2017-02-21 20:43:12','2017-02-21 20:43:12'),(43,NULL,21,'Réponse A',1,'2017-02-21 20:43:55','2017-05-21 17:49:23'),(44,NULL,21,'Réponse B',1,'2017-02-21 20:43:55','2017-05-21 17:49:23'),(45,NULL,21,'Réponse C',0,'2017-02-21 20:43:55','2017-05-21 17:49:23'),(46,NULL,21,'Réponse D',0,'2017-02-21 20:43:55','2017-05-21 17:49:23'),(47,NULL,22,'Bloquer les freins et mettre les stabilisateurs en fonction de la hauteur de travail.',1,'2017-02-21 20:53:56','2017-02-21 20:53:56'),(48,NULL,22,'Vérifier l’état du sol.',1,'2017-02-21 20:53:56','2017-02-21 20:53:56'),(49,NULL,22,'Demander à un collègue de tenir l’échafaudage.',0,'2017-02-21 20:53:56','2017-02-21 20:53:56'),(50,NULL,23,'Sur ordre de mon chef seulement.',0,'2017-02-21 20:53:56','2017-02-21 20:53:56'),(51,NULL,23,'Si j’ai reçu une formation spécifique et que je suis habilité par mon chef',1,'2017-02-21 20:53:56','2017-02-21 20:53:56'),(52,36,24,NULL,0,'2017-02-21 20:55:18','2017-02-21 20:55:18'),(53,37,25,NULL,0,'2017-02-21 20:55:34','2017-02-21 20:55:34'),(54,38,26,NULL,0,'2017-02-21 20:55:49','2017-02-21 20:55:49'),(55,39,27,NULL,0,'2017-02-21 20:56:22','2017-02-21 20:56:22'),(56,40,28,NULL,0,'2017-02-21 20:56:25','2017-02-21 20:56:25'),(57,41,29,NULL,0,'2017-02-21 20:56:28','2017-02-21 20:56:28'),(58,NULL,30,'Réponse A',1,'2017-02-21 20:56:32','2017-05-21 17:39:34'),(59,NULL,30,'Réponse B',1,'2017-02-21 20:56:32','2017-05-21 17:39:34'),(60,NULL,30,'Réponse C',0,'2017-02-21 20:56:32','2017-05-21 17:39:34'),(61,NULL,31,'Je m’adapte à la situation.',0,'2017-02-21 21:01:31','2017-02-21 21:01:31'),(62,NULL,31,'J’enlève la sécurité qui me gêne',0,'2017-02-21 21:01:31','2017-02-21 21:01:31'),(63,NULL,31,'J’arrête ma tâche et j’alerte mon chef pour adapter le mode opératoire',1,'2017-02-21 21:01:31','2017-02-21 21:01:31'),(64,46,32,NULL,0,'2017-02-21 21:02:55','2017-02-21 21:02:55'),(65,47,33,NULL,0,'2017-02-21 21:03:03','2017-02-21 21:03:03'),(66,48,34,NULL,0,'2017-02-21 21:03:17','2017-02-21 21:03:17'),(67,NULL,35,'Réponse A',1,'2017-02-21 21:03:27','2017-05-21 17:33:29'),(68,NULL,35,'Réponse B',0,'2017-02-21 21:03:27','2017-05-21 17:33:29'),(69,NULL,35,'Réponse C',1,'2017-02-21 21:03:27','2017-05-21 17:33:29'),(70,NULL,36,'Je monte',0,'2017-02-21 21:07:32','2017-02-21 21:07:32'),(71,NULL,36,'Je stabilise la banche avec mon chef avant de monter pour la décrocher.',1,'2017-02-21 21:07:32','2017-02-21 21:07:32'),(72,NULL,37,'Oui',0,'2017-02-21 21:08:49','2017-02-21 21:08:49'),(73,NULL,37,'Non',1,'2017-02-21 21:08:49','2017-02-21 21:08:49'),(74,NULL,38,'De savoir s’en servir.',0,'2017-02-21 21:10:08','2017-02-21 21:10:08'),(75,NULL,38,'D’avoir l’autorisation de l’encadrement qui vérifie mes compétences avant utilisation.',1,'2017-02-21 21:10:08','2017-02-21 21:10:08'),(76,NULL,38,'De faire attention.',0,'2017-02-21 21:10:08','2017-02-21 21:10:08'),(77,NULL,39,'Le chef de chantier ou le chef d’équipe.',0,'2017-02-21 21:12:27','2017-02-21 21:12:27'),(78,NULL,39,'L‘élingueur.',0,'2017-02-21 21:12:27','2017-02-21 21:12:27'),(79,NULL,39,'Un chef de manœuvre habilité par sa hiérarchie     compétent et formé.',1,'2017-02-21 21:12:27','2017-02-21 21:12:27'),(80,NULL,40,'Je la jette dans la benne à déchets.',1,'2017-02-21 21:15:52','2017-02-21 21:15:52'),(81,NULL,40,'Je la conserve , elle peut toujours servir.',0,'2017-02-21 21:15:52','2017-02-21 21:15:52'),(82,NULL,40,'J’accroche une autre charge avec.',0,'2017-02-21 21:15:52','2017-02-21 21:15:52'),(83,NULL,41,'Oui',0,'2017-02-21 21:18:30','2017-02-21 21:18:30'),(84,NULL,41,'Non',1,'2017-02-21 21:18:30','2017-02-21 21:18:30'),(85,NULL,41,'Je ne sais pas.',0,'2017-02-21 21:18:30','2017-02-21 21:18:30'),(86,58,42,NULL,0,'2017-02-21 21:21:22','2017-02-21 21:21:22'),(87,59,43,NULL,0,'2017-02-21 21:21:30','2017-02-21 21:21:30'),(88,60,44,NULL,0,'2017-02-21 21:21:41','2017-02-21 21:21:41'),(89,NULL,45,'Réponse A',1,'2017-02-21 21:21:46','2017-05-21 17:41:25'),(90,NULL,45,'Réponse B',0,'2017-02-21 21:21:46','2017-05-21 17:41:25'),(91,NULL,45,'Réponse C',1,'2017-02-21 21:21:46','2017-05-21 17:41:25'),(92,NULL,46,'Je l’applique comme les autres produits.',0,'2017-02-21 21:27:22','2017-02-21 21:27:22'),(93,NULL,46,'Je demande à mon chef les précautions spécifiques.',1,'2017-02-21 21:27:22','2017-02-21 21:27:22'),(94,NULL,46,'Je l’applique comme les autres produits\r\nJe demande à mon chef les précautions spécifiques\r\nJe consulte les consignes de sécurité indiquées sur l’ étiquette de danger.',1,'2017-02-21 21:27:22','2017-02-21 21:27:22');
/*!40000 ALTER TABLE `QCMs_responses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `apprenants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ett_id` int(11) DEFAULT NULL,
  `of_id` int(11) DEFAULT NULL,
  `attestation_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C71C298277153098` (`code`),
  UNIQUE KEY `UNIQ_C71C29827EDC5B38` (`attestation_id`),
  KEY `IDX_C71C298298F452AC` (`ett_id`),
  KEY `IDX_C71C29825A0DA37C` (`of_id`),
  CONSTRAINT `FK_C71C298298F452AC` FOREIGN KEY (`ett_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C71C29825A0DA37C` FOREIGN KEY (`of_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `FK_C71C29827EDC5B38` FOREIGN KEY (`attestation_id`) REFERENCES `attestations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apprenants`
--

LOCK TABLES `apprenants` WRITE;
/*!40000 ALTER TABLE `apprenants` DISABLE KEYS */;
INSERT INTO `apprenants` VALUES (2,6,7,NULL,'Nom','Prénom','1985-10-22 00:00:00','UXBFFARMXDNVKOKE','2017-02-18 17:32:24','2017-02-18 17:32:24'),(18,6,4,16,'Borg','Alexia','2016-09-28 00:00:00','YZGBRFYVBTCCQJCV','2017-02-18 23:16:35','2017-02-22 19:35:46'),(19,NULL,4,NULL,'Borg','Lucas','2016-09-14 00:00:00','IXCXPYPVATAUDUJU','2017-02-18 23:17:48','2017-02-18 23:17:48'),(22,13,2,NULL,'Chakroun','Yesser','1988-12-22 00:00:00','ATYQTEOGSIJEEAYN','2017-02-22 12:24:29','2017-02-22 12:24:29'),(26,3,1,86,'Hello','Yesser','2017-03-14 00:00:00','YYTDJHIYAMEBCVIN','2017-03-07 17:16:23','2017-05-22 09:53:27'),(34,NULL,1,30,'Borg','Alexia','2017-04-03 00:00:00','LJZMQYSHRFCEKVGG','2017-04-19 14:04:36','2017-04-19 14:20:35'),(39,NULL,12,NULL,'SOUZA','Lucas','2017-04-12 00:00:00','ZPNENHDANPCKDQSP','2017-04-19 14:46:32','2017-04-19 14:46:32'),(40,NULL,12,34,NULL,NULL,NULL,'ZUVFWYETBUGXTQGS','2017-04-19 15:41:29','2017-04-19 15:41:29'),(70,NULL,12,64,'Lemaire','Louis','2017-04-05 00:00:00','SUQCSCZVSHFLJERQ','2017-04-25 21:09:19','2017-04-25 21:10:07'),(85,NULL,NULL,79,'Paulo','Andrade','2015-01-26 00:00:00','HBIEJSCXBJNZMWSO','2017-05-21 19:06:23','2017-05-21 19:06:45'),(88,3,NULL,83,'BASTIDE','Karine','1970-08-19 00:00:00','YBNCSUEONGCRXPGD','2017-05-21 20:05:36','2017-05-21 20:16:01'),(89,NULL,NULL,82,'BORG','Alexia','2017-05-13 00:00:00','PZKGZGDUSHPJYQLM','2017-05-21 20:12:35','2017-05-21 20:12:58'),(91,NULL,1,85,NULL,NULL,NULL,'LOWSGAJVEQKLHJEH','2017-05-22 09:38:24','2017-05-22 09:38:24'),(92,NULL,1,87,NULL,NULL,NULL,'KGYIQRVIZOQLKFQQ','2017-05-22 09:55:18','2017-05-22 09:55:18'),(93,NULL,1,88,NULL,NULL,NULL,'ZNCKVUIWZABNPCJR','2017-05-22 09:55:20','2017-05-22 09:55:20'),(94,NULL,1,89,NULL,NULL,NULL,'MAUKSYRFJPPWKQLF','2017-05-22 10:01:42','2017-05-22 10:01:42'),(95,NULL,1,90,NULL,NULL,NULL,'EHBFGREAXXVXLGHV','2017-05-22 10:03:52','2017-05-22 10:03:52'),(96,NULL,1,91,NULL,NULL,NULL,'OHHJCBFCSSCRJAYK','2017-05-22 10:29:43','2017-05-22 10:29:43'),(97,NULL,1,92,NULL,NULL,NULL,'RKDZCSPFQTHNDWDV','2017-05-22 10:38:39','2017-05-22 10:38:39'),(98,NULL,1,93,NULL,NULL,NULL,'YBHNWFNHNRWVKOVB','2017-06-12 18:56:50','2017-06-12 18:56:50'),(99,NULL,1,94,NULL,NULL,NULL,'FEESTSPNHRAOYPZB','2017-06-27 15:12:23','2017-06-27 15:12:23'),(100,21,1,95,'Test final','Alexia','2016-12-11 00:00:00','XEOUEZSRZQTTVEES','2017-06-27 15:15:28','2017-06-27 15:19:00'),(101,NULL,1,96,NULL,NULL,NULL,'LPXBUJJQAIYOLJRZ','2017-06-27 15:40:25','2017-06-27 15:40:25'),(102,NULL,1,97,NULL,NULL,NULL,'ONYBUAXXCANKOMMF','2017-06-27 15:41:20','2017-06-27 15:41:20'),(103,21,1,98,'123','456','2017-06-06 00:00:00','QROPKRXWVBUDUEXQ','2017-06-27 15:45:09','2017-06-27 15:46:00'),(104,NULL,1,99,NULL,NULL,NULL,'TIWZXDQSVWTYWQMO','2017-06-27 16:44:07','2017-06-27 16:44:07'),(105,21,2,100,'AAAAAAAAAA','BBBBBBBBb','2017-06-17 00:00:00','UJYYYGMFYUKCHPBE','2017-06-27 16:44:23','2017-06-27 16:44:46'),(106,NULL,1,101,NULL,NULL,NULL,'CTDOPEVOBZCDYGVF','2017-06-27 18:25:11','2017-06-27 18:25:11'),(107,21,1,102,'TestJuin','TestJuin','2017-06-17 00:00:00','RRLYJYWTKLWKNUQL','2017-06-27 18:29:09','2017-06-27 18:29:54'),(108,21,1,103,'Chakroun','Gdf',NULL,'SBHWLADVQUIYZMQW','2017-06-28 10:20:16','2017-06-28 10:22:06'),(109,21,1,104,'Test','Test 5','2017-07-01 00:00:00','DPIGTSTVRNQBWNBE','2017-06-28 10:23:08','2017-06-28 10:23:22'),(110,NULL,1,105,'Test Juillet','Juillet 2017','2017-07-03 00:00:00','BULDLLTOLFZQNIYF','2017-07-04 11:18:27','2017-07-04 11:19:22'),(112,21,25,NULL,'Ferreira','Ricardo','2017-01-04 00:00:00','RRDYFZFSDWHLIUKO','2017-07-09 19:03:05','2017-07-09 19:03:56'),(113,21,25,106,'Dubosque','Jean','2017-03-14 00:00:00','ATFIEGSRNDQPAUJU','2017-07-09 19:04:32','2017-07-09 19:05:29'),(115,NULL,25,108,NULL,NULL,NULL,'WJKISSHEZJVCGSJB','2017-07-09 19:29:19','2017-07-09 19:29:19'),(116,NULL,25,109,NULL,NULL,NULL,'NQOWERKDEFETAWIW','2017-07-09 19:58:30','2017-07-09 19:58:30'),(117,NULL,1,110,NULL,NULL,NULL,'CCJYWCYQUAGPBEWU','2017-07-10 11:03:39','2017-07-10 11:03:39'),(118,NULL,1,111,NULL,NULL,NULL,'VRKZUZOJXJDCDPNW','2017-07-10 11:05:29','2017-07-10 11:05:29'),(119,21,1,NULL,'test alex et yasser','test alex et yasser','2017-07-05 00:00:00','TEOPKMIHMHSDOPCF','2017-07-10 11:08:02','2017-07-10 11:08:02'),(120,NULL,1,112,NULL,NULL,NULL,'JAXTJPVSUDYGUCYE','2017-07-10 11:08:34','2017-07-10 11:08:34'),(121,NULL,1,113,NULL,NULL,NULL,'ORIMPNMFZSZXJOTC','2017-07-10 11:08:56','2017-07-10 11:08:56'),(122,NULL,1,114,NULL,NULL,NULL,'ZJBDYLRSXRQCKOEJ','2017-07-10 11:12:13','2017-07-10 11:12:13');
/*!40000 ALTER TABLE `apprenants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attestations`
--

DROP TABLE IF EXISTS `attestations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attestations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `note` double DEFAULT NULL,
  `successed` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `image_of_id` int(11) DEFAULT NULL,
  `percent` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_AD5A8CF04D4827D5` (`image_of_id`),
  CONSTRAINT `FK_AD5A8CF04D4827D5` FOREIGN KEY (`image_of_id`) REFERENCES `image` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attestations`
--

LOCK TABLES `attestations` WRITE;
/*!40000 ALTER TABLE `attestations` DISABLE KEYS */;
INSERT INTO `attestations` VALUES (16,'2017-02-19 19:35:46',1,1,'2017-02-19 00:33:32','2017-02-22 19:35:46',11,NULL),(30,'2017-04-19 14:40:36',1,1,'2017-04-19 14:20:35','2017-04-19 14:40:36',67,NULL),(34,'2017-04-19 00:00:00',NULL,NULL,'2017-04-19 15:41:29','2017-04-19 15:41:29',NULL,NULL),(64,'2017-04-25 21:10:07',NULL,0,'2017-04-25 21:09:19','2017-04-25 21:10:07',69,NULL),(79,'2017-05-21 19:13:11',-1,0,'2017-05-21 19:06:45','2017-05-21 19:14:09',79,NULL),(82,'2017-05-21 20:18:43',1,1,'2017-05-21 20:12:58','2017-05-21 20:19:43',81,NULL),(83,'2017-05-21 00:00:00',21.5,1,'2017-05-21 20:16:01','2017-05-21 20:16:01',NULL,NULL),(85,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 09:38:24','2017-05-22 09:38:24',NULL,NULL),(86,'2017-05-22 09:54:42',1,1,'2017-05-22 09:53:27','2017-05-22 09:54:42',NULL,NULL),(87,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 09:55:18','2017-05-22 09:55:18',NULL,NULL),(88,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 09:55:20','2017-05-22 09:55:20',NULL,NULL),(89,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 10:01:42','2017-05-22 10:01:42',NULL,NULL),(90,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 10:03:52','2017-05-22 10:03:52',NULL,NULL),(91,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 10:29:43','2017-05-22 10:29:43',NULL,NULL),(92,'2017-05-22 00:00:00',NULL,NULL,'2017-05-22 10:38:39','2017-05-22 10:38:39',NULL,NULL),(93,'2017-06-12 00:00:00',NULL,NULL,'2017-06-12 18:56:50','2017-06-12 18:56:50',NULL,NULL),(94,'2017-06-27 00:00:00',NULL,NULL,'2017-06-27 15:12:23','2017-06-27 15:12:23',NULL,NULL),(95,'2017-06-27 00:00:00',1,1,'2017-06-27 15:19:00','2017-06-27 15:19:00',NULL,4),(96,'2017-06-27 00:00:00',NULL,NULL,'2017-06-27 15:40:25','2017-06-27 15:40:25',NULL,NULL),(97,'2017-06-27 00:00:00',NULL,NULL,'2017-06-27 15:41:20','2017-06-27 15:41:20',NULL,NULL),(98,'2017-06-27 00:00:00',0,0,'2017-06-27 15:46:00','2017-06-27 15:46:00',NULL,0),(99,'2017-06-27 00:00:00',NULL,NULL,'2017-06-27 16:44:07','2017-06-27 16:44:07',NULL,NULL),(100,'2017-06-27 16:44:46',NULL,1,'2017-06-27 16:44:23','2017-06-27 16:44:46',83,NULL),(101,'2017-06-27 00:00:00',NULL,NULL,'2017-06-27 18:25:11','2017-06-27 18:25:11',NULL,NULL),(102,'2017-06-27 00:00:00',1,1,'2017-06-27 18:29:54','2017-06-27 18:29:54',NULL,4),(103,'2017-06-28 10:22:30',NULL,1,'2017-06-28 10:20:16','2017-06-28 10:22:30',NULL,NULL),(104,'2017-06-28 10:26:18',NULL,0,'2017-06-28 10:23:08','2017-06-28 10:26:18',NULL,NULL),(105,'2017-07-04 00:00:00',1,1,'2017-07-04 11:19:22','2017-07-04 11:19:22',NULL,4),(106,'2017-07-09 00:00:00',1,1,'2017-07-09 19:05:29','2017-07-09 19:05:29',NULL,4),(108,'2017-07-09 00:00:00',NULL,NULL,'2017-07-09 19:29:19','2017-07-09 19:29:19',NULL,NULL),(109,'2017-07-09 00:00:00',NULL,NULL,'2017-07-09 19:58:30','2017-07-09 19:58:30',NULL,NULL),(110,'2017-07-10 00:00:00',NULL,NULL,'2017-07-10 11:03:39','2017-07-10 11:03:39',NULL,NULL),(111,'2017-07-10 00:00:00',NULL,NULL,'2017-07-10 11:05:29','2017-07-10 11:05:29',NULL,NULL),(112,'2017-07-10 00:00:00',NULL,NULL,'2017-07-10 11:08:34','2017-07-10 11:08:34',NULL,NULL),(113,'2017-07-10 00:00:00',NULL,NULL,'2017-07-10 11:08:56','2017-07-10 11:08:56',NULL,NULL),(114,'2017-07-10 00:00:00',NULL,NULL,'2017-07-10 11:12:13','2017-07-10 11:12:13',NULL,NULL);
/*!40000 ALTER TABLE `attestations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'png','Refectoire.png','Refectoire.png','images/58ac85ba81fde.png','Refectoire-luEK.png'),(2,'png','Rassemblement.png','Rassemblement.png','images/58ac86b75a42e.png','Rassemblement-0iqH.png'),(3,'jpg','img04.jpg','img04.jpg','images/58a876849c0bf.jpg','img04-2uqb.jpg'),(4,'jpg','img08.jpg','img08.jpg','images/58a8768c19eb6.jpg','img08-iou7.jpg'),(11,'pptx','Cycle de vie du salarié.pptx','Cycle de vie du salarié.pptx','images/58a8db3ecb9da.pptx','Cycle de vie du salarié-abd9.pptx'),(12,'png','Boissons.png','Boissons.png','images/58ac88b24efc1.png','Boissons-Xxmo.png'),(14,'png','canabis1.png','canabis1.png','images/58ac8aae5e67a.png','canabis1-MTAI.png'),(15,'png','Capture d’écran 2017-05-21 à 16.56.18.png','Capture d’écran 2017-05-21 à 16.56.18.png','images/5921ab1fca58f.png','Capture d’écran 2017-05-21 à 16.56.18-4lym.png'),(16,'png','grillage avertisseur.png','grillage avertisseur.png','images/58ac8b3090d5b.png','grillage avertisseur-viS4.png'),(17,'png','prise electrique.png','prise electrique.png','images/58ac9484a08e1.png','prise electrique-H5c5.png'),(18,'png','trou au sol.png','trou au sol.png','images/58ac94f77b139.png','trou au sol-Z1g4.png'),(19,'png','tracteur.png','tracteur.png','images/58ac9571a2409.png','tracteur-387y.png'),(20,'png','mini pelle.png','mini pelle.png','images/58ac95f15a62d.png','mini pelle-4884.png'),(21,'png','echelle 3m.png','echelle 3m.png','images/58ac96e9208ea.png','echelle 3m-LQYf.png'),(22,'png','image correct1.png','image correct1.png','images/58ac97720057a.png','image correct1-aH1y.png'),(23,'png','image pas correcte.png','image pas correcte.png','images/58ac977d4fe71.png','image pas correcte-l2Xx.png'),(24,'png','image correcte 2.png','image correcte 2.png','images/58ac97840390d.png','image correcte 2-lkMG.png'),(25,'png','image pas correcte 2.png','image pas correcte 2.png','images/58ac978b064f5.png','image pas correcte 2-KjZU.png'),(26,'png','image correct1.png','image correct1.png','images/58ac9826353be.png','image correct1-Zr2n.png'),(27,'png','image pas correcte.png','image pas correcte.png','images/58ac9831f3eaa.png','image pas correcte-PG9w.png'),(28,'png','image correcte 2.png','image correcte 2.png','images/58ac98434f5e3.png','image correcte 2-Sb4P.png'),(29,'png','image pas correcte 2.png','image pas correcte 2.png','images/58ac9850dd4fc.png','image pas correcte 2-s4ha.png'),(34,'png','échafaudage.png','échafaudage.png','images/58ac9a58aae9f.png','échafaudage-491g.png'),(35,'png','Q16-Echafaudage chantier.png','Q16-Echafaudage chantier.png','images/58ac9a95ebf27.png','Q16-Echafaudage chantier-EMeU.png'),(36,'png','Q17Correcte1.png','Q17Correcte1.png','images/58ac9b261c260.png','Q17Correcte1-AJ8b.png'),(37,'png','Q17Correcte2.png','Q17Correcte2.png','images/58ac9b3694a9d.png','Q17Correcte2-cFrz.png'),(38,'png','Q17Pascorrecte.png','Q17Pascorrecte.png','images/58ac9b4515057.png','Q17Pascorrecte-GABd.png'),(39,'png','Q17Correcte1.png','Q17Correcte1.png','images/58ac9b6631907.png','Q17Correcte1-yZbY.png'),(40,'png','Q17Correcte2.png','Q17Correcte2.png','images/58ac9b696035e.png','Q17Correcte2-bDx0.png'),(41,'png','Q17Pascorrecte.png','Q17Pascorrecte.png','images/58ac9b6cbeb5b.png','Q17Pascorrecte-c9B9.png'),(45,'png','Q18.png','Q18.png','images/58ac9c6047851.png','Q18-zpPv.png'),(46,'png','Q19Correcte1.png','Q19Correcte1.png','images/58ac9cefcbb75.png','Q19Correcte1-l0Ds.png'),(47,'png','Q19Pascorrect.png','Q19Pascorrect.png','images/58ac9cf7c1eac.png','Q19Pascorrect-Jk3B.png'),(48,'png','Q17Correcte2.png','Q17Correcte2.png','images/58ac9d059a9ef.png','Q17Correcte2-UK1x.png'),(52,'png','Q20.png','Q20.png','images/58ac9dfdb7a4e.png','Q20-n9Ob.png'),(53,'png','Q21.png','Q21.png','images/58ac9e4cf0c52.png','Q21-9Tf2.png'),(54,'png','Q22.png','Q22.png','images/58ac9e7b4c3a5.png','Q22-ZOjB.png'),(55,'png','Q23.png','Q23.png','images/58ac9ef82a5dc.png','Q23-skIG.png'),(56,'png','Q24.png','Q24.png','images/58ac9ff341c50.png','Q24-yv2t.png'),(57,'png','Q25.png','Q25.png','images/58aca08211982.png','Q25-2g8I.png'),(58,'png','Q26correcte1.png','Q26correcte1.png','images/58aca14221365.png','Q26correcte1-98w0.png'),(59,'png','Q26PAScorrecte.png','Q26PAScorrecte.png','images/58aca14a90263.png','Q26PAScorrecte-PEEt.png'),(60,'png','Q26correcte2.png','Q26correcte2.png','images/58aca155a37c4.png','Q26correcte2-v6im.png'),(64,'png','Q27.png','Q27.png','images/58aca1ce03a5f.png','Q27-Cf9w.png'),(67,'pdf','AB-signé par OF.pdf','AB-signé par OF.pdf','images/58f75ac225379.pdf','AB-signé par OF-QAn9.pdf'),(69,'pdf','AB-signé par OF.pdf','AB-signé par OF.pdf','images/58ff9f08d607d.pdf','AB-signé par OF-TVNn.pdf'),(71,'png','Capture d’écran 2017-05-21 à 18.02.19.png','Capture d’écran 2017-05-21 à 18.02.19.png','images/5921ba9fc2016.png','Capture d’écran 2017-05-21 à 18.02.19-bWx8.png'),(72,'png','Capture d’écran 2017-05-21 à 18.06.14.png','Capture d’écran 2017-05-21 à 18.06.14.png','images/5921bb8e5f2f6.png','Capture d’écran 2017-05-21 à 18.06.14-TLRA.png'),(73,'png','Capture d’écran 2017-05-21 à 17.39.04.png','Capture d’écran 2017-05-21 à 17.39.04.png','images/5921b51fd241b.png','Capture d’écran 2017-05-21 à 17.39.04-qsKS.png'),(78,'png','Capture d’écran 2017-05-21 à 17.53.22.png','Capture d’écran 2017-05-21 à 17.53.22.png','images/5921b91350110.png','Capture d’écran 2017-05-21 à 17.53.22-1Nrt.png'),(79,'jpeg','PASI-ECHEC.jpeg','PASI-ECHEC.jpeg','images/5921caa21abe3.jpeg','PASI-ECHEC-1SDx.jpeg'),(80,'jpeg','PASI-ECHEC.jpeg','PASI-ECHEC.jpeg','images/5921cae1dbadc.jpeg','PASI-ECHEC-2FaM.jpeg'),(81,'jpeg','PASI-Reussite.jpeg','PASI-Reussite.jpeg','images/5921d9ffdb384.jpeg','PASI-Reussite-pGZp.jpeg'),(82,'jpeg','PASI-Reussite.jpeg','PASI-Reussite.jpeg','images/5921da3fba82a.jpeg','PASI-Reussite-ggTP.jpeg'),(83,'pdf','UJYYYGMFYUKCHPBE2017-06-27.pdf','UJYYYGMFYUKCHPBE2017-06-27.pdf','images/59526f5d3a11c.pdf','UJYYYGMFYUKCHPBE2017-06-27-YjQF.pdf');
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search_per_day`
--

DROP TABLE IF EXISTS `search_per_day`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search_per_day` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_AE7122FFA76ED395` (`user_id`),
  CONSTRAINT `FK_AE7122FFA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search_per_day`
--

LOCK TABLES `search_per_day` WRITE;
/*!40000 ALTER TABLE `search_per_day` DISABLE KEYS */;
INSERT INTO `search_per_day` VALUES (1,6,'2017-02-18 00:00:00',3),(2,1,'2017-02-18 00:00:00',1),(3,4,'2017-02-18 00:00:00',8),(4,4,'2017-02-19 00:00:00',2),(5,4,'2017-02-21 00:00:00',2),(6,13,'2017-02-22 00:00:00',8),(7,1,'2017-03-27 00:00:00',10),(8,1,'2017-04-25 00:00:00',10),(9,19,'2017-05-21 00:00:00',4),(10,1,'2017-05-21 00:00:00',4);
/*!40000 ALTER TABLE `search_per_day` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sound`
--

DROP TABLE IF EXISTS `sound`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sound` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `original_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `converted` tinyint(1) NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sound`
--

LOCK TABLES `sound` WRITE;
/*!40000 ALTER TABLE `sound` DISABLE KEYS */;
INSERT INTO `sound` VALUES (1,'Question1Passeport.m4a','sounds/58bea9b8d809e.m4a',0,NULL,NULL),(2,'Q2Passport.m4a','sounds/58bec3acbb42e.m4a',0,NULL,NULL),(3,'Q3Passport.m4a','sounds/58bec3b99cd37.m4a',0,NULL,NULL),(4,'Q4Passport.m4a','sounds/58bec3c36e3eb.m4a',0,NULL,NULL),(5,'Q5Passport.m4a','sounds/58bec3cdd9603.m4a',0,NULL,NULL),(6,'Q6Passport.m4a','sounds/58bec3d814357.m4a',0,NULL,NULL),(7,'Q7Passport.m4a','sounds/58bec3e3588fc.m4a',0,NULL,NULL),(8,'Q8Passport.m4a','sounds/58bec3edddd2f.m4a',0,NULL,NULL),(9,'Q9Passport.m4a','sounds/58bec3f66dfca.m4a',0,NULL,NULL),(10,'Q10Passport.m4a','sounds/58bec402a39e8.m4a',0,NULL,NULL),(11,'Q11Passport.m4a','sounds/58bec41142ad6.m4a',0,NULL,NULL),(12,'Q12Passport.m4a','sounds/58bec41fb3a39.m4a',0,NULL,NULL),(13,'Q13Passport.m4a','sounds/58bec42823f32.m4a',0,NULL,NULL),(14,'Q14Passport.m4a','sounds/58bec42e54576.m4a',0,NULL,NULL),(15,'Q15Passport.m4a','sounds/58bec4361bb70.m4a',0,NULL,NULL),(16,'Q16Passport.m4a','sounds/58bec43d34c81.m4a',0,NULL,NULL),(17,'Q17Passport.m4a','sounds/58bec4440b3f6.m4a',0,NULL,NULL),(18,'Q18Passport.m4a','sounds/58bec44d409d8.m4a',0,NULL,NULL),(19,'Q19Passport.m4a','sounds/58bec45369bdf.m4a',0,NULL,NULL),(20,'Q20Passport.m4a','sounds/58bec45b491ef.m4a',0,NULL,NULL),(21,'Q21Passport.m4a','sounds/58bec4645dd97.m4a',0,NULL,NULL),(22,'Q22Passport.m4a','sounds/58bec46d87556.m4a',0,NULL,NULL),(23,'Q23Passport.m4a','sounds/58bec474dab3f.m4a',0,NULL,NULL),(24,'Q24Passport.m4a','sounds/58bec47c0aee5.m4a',0,NULL,NULL),(25,'Q25Passport.m4a','sounds/58bec4841324d.m4a',0,NULL,NULL);
/*!40000 ALTER TABLE `sound` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `societe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `siret` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telephone` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_enabled` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1483A5E992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_1483A5E9C05FB297` (`confirmation_token`),
  UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`),
  UNIQUE KEY `UNIQ_1483A5E9A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin',1,NULL,'$2y$13$YVQwNYuiWE8Kl1Nha9eXruF/3w1wHf/ym7wHZMMH.ToKKSfTHBOT6','2017-07-10 11:11:17',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}',NULL,NULL,NULL,NULL,0,'2017-02-12 16:24:35','2017-07-10 11:11:17','chakroun.yesser@gmail.com','chakroun.yesser@gmail.com'),(2,'organisme01','organisme01',1,NULL,'$2y$13$PnfLZ1FnlfcFWvdOQ2L4Y.YTyT2oxAuW.5lMn3nhK6cq8xKbuBcU6','2017-02-22 12:57:53',NULL,NULL,'a:1:{i:0;s:7:\"ROLE_OF\";}','Organisme 01',NULL,'Rue de France','0644742433',0,'2017-02-12 17:58:10','2017-02-22 12:57:53','organisme01@gmail.com','organisme01@gmail.com'),(3,'ett01@gmail.com','ett01@gmail.com',1,NULL,'$2y$13$z91v7cUXFykom.meJ/c5buYD3SOm49F9N3ysC/Gy4KqEP/lN9CU6e',NULL,NULL,NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','ETT 01',NULL,'Rue de France',NULL,0,'2017-02-12 17:59:35','2017-02-12 17:59:35','ett01@gmail.com','ett01@gmail.com'),(4,'alexia','alexia',1,NULL,'$2y$13$79woHZ8YUgacGSvofL0SMeRecPZ1KIlhuljzgmajNi5jDOqN6Pzua','2017-03-07 13:17:55',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}',NULL,NULL,NULL,NULL,0,'2017-02-18 14:36:27','2017-03-07 13:17:55','alexia.borg@atoms-france.com','alexia.borg@atoms-france.com'),(6,'agence02@gmail.com','agence02@gmail.com',1,NULL,'$2y$13$bkBdEQzWNnK5.V2WlduYtuiggfXMjo7PoMypRux9DhHVos21.hrra','2017-02-22 19:36:25',NULL,NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','Agence 02',NULL,'Rue Faubourg',NULL,0,'2017-02-18 17:26:16','2017-02-22 19:36:25','agence02@gmail.com','agence02@gmail.com'),(7,'organisme02','organisme02',1,NULL,'$2y$13$7uqSPN/9Cs.iJbFDehKJquAau5rN3ugyUIyJELCQHUr/xroE0RgY6','2017-02-18 17:31:58',NULL,NULL,'a:1:{i:0;s:7:\"ROLE_OF\";}','Organisme 02',NULL,'1 rue de Paris 7008','0122334455',0,'2017-02-18 17:28:31','2017-04-19 14:09:35','adressemail@gnail.com','adressemail@gnail.com'),(10,'ADECCO1@test.com','adecco1@test.com',1,NULL,'$2y$13$A8ROtRJrr0xJJPPqUBU3QekIYCQS.haoaoCK7ZiK2DOLDIPN9.P06',NULL,NULL,NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','ADECCO','13 456 87 38 299','1 rue des Champs 75008 Paris',NULL,0,'2017-02-18 18:06:47','2017-02-18 18:27:11','ADECCO1@test.com','adecco1@test.com'),(12,'CESAMEMAROLLES','cesamemarolles',1,NULL,'$2y$13$u0k6/iDEVlM5SiTGVIzPkeRQmLhjZyyPT6qN7Fii.5CEM3m4ZPaK2','2017-02-22 17:51:35',NULL,NULL,'a:1:{i:0;s:7:\"ROLE_OF\";}','CESAME',NULL,'15 ROUTE DE CHEPTAINVILLE  - 9','0133703370',0,'2017-02-18 20:09:52','2017-04-19 14:08:48','cesametest@test.com','cesametest@test.com'),(13,'alexiaborg1@gmail.com','alexiaborg1@gmail.com',1,NULL,'$2y$13$ITgNlaPIo/aIGp0fYXyEVu/ik4zRaLaP2c0zHRJI6vr8SIopnu8JW','2017-02-21 22:10:32',NULL,NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','Interim France','1234567890','11 rue de France 75008',NULL,1,'2017-02-19 00:24:55','2017-02-22 14:06:34','alexiaborg1@gmail.com','alexiaborg1@gmail.com'),(15,'societe01','societe01',1,NULL,'$2y$13$llLdoW3j0i/jKP4N4TRTs.W74/f8CTdckes4Uymon6QuaWS2JrWFi','2017-02-22 11:30:40',NULL,NULL,'a:1:{i:0;s:7:\"ROLE_OF\";}','Société Yesser',NULL,'Rue de France','0120404040',0,'2017-02-22 11:30:32','2017-04-19 14:08:24','sociétéyeser@test.com','sociétéyeser@test.com'),(16,'olivier_t777@hotmail.co.uk','olivier_t777@hotmail.co.uk',1,NULL,'$2y$13$9Jp0H8gKHi8E4wrJE99PheA9/5Ctf6k2OgvAXb329Sk/f5L1GSUIu',NULL,'s1OhOlDWyzHblXp1abUbN2sdEP0We03hx5eHtyOhw0w',NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','AZB','455445652','15 rue des goults',NULL,0,'2017-03-02 10:23:29','2017-03-27 15:25:04','olivier_t777@hotmail.co.uk','olivier_t777@hotmail.co.uk'),(17,'chakroun.yesser+01@gmail.com','chakroun.yesser+01@gmail.com',1,NULL,'$2y$13$7uYUYbeQKNAbfvIUMFjFy.32T9ItDmUY/sfMaMmcqXx5D49v91uoq',NULL,'_6cLkKqMdP9wuAZSTBsQs8uSGJoJh3YO1gN4dJpo3vU',NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','lkahzje','test','test',NULL,0,'2017-04-05 17:24:18','2017-07-09 20:37:06','chakroun.yesser+01@gmail.com','chakroun.yesser+01@gmail.com'),(19,'alexia_borg@hotmail.com','alexia_borg@hotmail.com',1,NULL,'$2y$13$lc1MuHccD7nJYcj3wgLmGe05pFVVkFudcB5KNbO7/SfGGwKiEc8M.','2017-05-02 11:28:58',NULL,NULL,'a:1:{i:0;s:8:\"ROLE_BTP\";}','Test BTP','12345678910','102 avenue des Champs Ely',NULL,1,'2017-05-02 11:19:48','2017-05-02 11:28:58','alexia_borg@hotmail.com','alexia_borg@hotmail.com'),(21,'alexiaborg102@gmail.com','alexiaborg102@gmail.com',1,NULL,'$2y$13$PScvQa2alKvQdcooPr3D5ur/U.PvDEdbUYukb067.JuUVS3YQb9cu',NULL,'250sdWvb41EBR6liWtTOf1EYCnz3g2D24r9Lm8wJLIo',NULL,'a:1:{i:0;s:11:\"ROLE_VIEWER\";}','ETT ATOMS Intérim','12345678987654321','rue de l\'adresse',NULL,0,'2017-05-21 20:29:45','2017-05-21 20:31:26','alexiaborg102@gmail.com','alexiaborg102@gmail.com'),(25,'Karine Bastide','karine bastide',1,NULL,'$2y$13$sSNOAUqXskOzlaKVyGhCqugslEtlBRaaK6y7/jNLVfLhJa/tn5z02','2017-07-05 19:04:09',NULL,NULL,'a:1:{i:0;s:7:\"ROLE_OF\";}','CESAME VINCI',NULL,'61 Avenue Jules Quentin, 92000','01 46 95 70 00',0,'2017-07-05 19:03:48','2017-07-05 19:04:09','karine.bastide@vinci-construction.fr','karine.bastide@vinci-construction.fr'),(26,'Bouygues Construction siège','bouygues construction siège',1,NULL,'$2y$13$fFNRO6fNGBHnOFEYgdztWuUCLl8hOnjih7rmgEovKhQkcsMCaGwgu','2017-07-05 19:10:28',NULL,NULL,'a:1:{i:0;s:8:\"ROLE_BTP\";}','BOUYGUES CONSTRUCTION',NULL,'1 avenue Eugène FREYSSINET - G','01 30 60 46 29',0,'2017-07-05 19:09:51','2017-07-05 19:10:28','p.villain@bouygues-construction.com','p.villain@bouygues-construction.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-10 12:50:04
