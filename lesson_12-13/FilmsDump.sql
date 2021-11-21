-- MySQL dump 10.13  Distrib 5.7.33, for Win64 (x86_64)
--
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	5.7.33

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
-- Table structure for table `actors_tab`
--

DROP TABLE IF EXISTS `actors_tab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actors_tab` (
  `actor_id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noname',
  PRIMARY KEY (`actor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors_tab`
--

LOCK TABLES `actors_tab` WRITE;
/*!40000 ALTER TABLE `actors_tab` DISABLE KEYS */;
INSERT INTO `actors_tab` VALUES (1,'S.Stalone'),(2,'Keanu Reeves'),(3,'Jason Statham'),(4,'Toby Kebbell'),(5,'Robert Downey Jr.'),(6,'Charles Hunnam');
/*!40000 ALTER TABLE `actors_tab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors_tab`
--

DROP TABLE IF EXISTS `directors_tab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directors_tab` (
  `director_id` int(11) NOT NULL AUTO_INCREMENT,
  `director_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noname',
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors_tab`
--

LOCK TABLES `directors_tab` WRITE;
/*!40000 ALTER TABLE `directors_tab` DISABLE KEYS */;
INSERT INTO `directors_tab` VALUES (1,'Sylvester Stallone'),(2,'Guy Ritchie'),(3,'Br. Wachowski');
/*!40000 ALTER TABLE `directors_tab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films_tab`
--

DROP TABLE IF EXISTS `films_tab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noname',
  `actor_id` int(11) NOT NULL DEFAULT '0',
  `director_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films_tab`
--

LOCK TABLES `films_tab` WRITE;
/*!40000 ALTER TABLE `films_tab` DISABLE KEYS */;
INSERT INTO `films_tab` VALUES (1,'Rambo',1,1),(2,'Rambo 2',1,1),(3,'Rambo 3',1,1),(4,'Rambo 4',1,1),(5,'Matrix',2,3),(6,'Matrix 2',2,3),(7,'Matrix 3',2,3),(8,'Matrix 4',2,3),(11,'Lock, Stock and Two Smoking Barrels',3,2),(12,'RocknRolla',4,2),(13,'Sherlock Holmes',5,2),(14,'Sherlock Holmes: A Game of Shadows',5,2),(15,'The Gentlemen',6,2),(16,'Snatch',3,2);
/*!40000 ALTER TABLE `films_tab` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-21 16:23:15
