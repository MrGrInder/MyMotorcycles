-- MySQL dump 10.17  Distrib 10.3.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: 127.0.0.1    Database: motorcycles
-- ------------------------------------------------------
-- Server version	10.3.25-MariaDB-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `moto_nomenclature`
--

DROP TABLE IF EXISTS `moto_nomenclature`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moto_nomenclature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_type` int(11) DEFAULT NULL,
  `is_discontinued` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`id`),
  KEY `moto_nomenclature_moto_type_id_fk` (`id_type`),
  CONSTRAINT `moto_nomenclature_moto_type_id_fk` FOREIGN KEY (`id_type`) REFERENCES `moto_type` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moto_nomenclature`
--

/*!40000 ALTER TABLE `moto_nomenclature` DISABLE KEYS */;
INSERT INTO `moto_nomenclature` VALUES (1,'ARCTIC CAT',1,''),(2,'ATALA',2,'\0'),(3,'AURUS',3,'\0'),(4,'BAJAJ',4,'\0'),(5,'BALTMOTORS',5,''),(6,'BENELLI',6,'\0'),(7,'BENELLI-2',7,'\0'),(8,'BENELLI-3',8,'\0'),(9,'BMW',7,'\0'),(10,'BMW-3',3,''),(11,'BMW-5',5,'\0'),(12,'BMW-11',11,'\0'),(13,'BORILE',8,''),(14,'BULTACO',9,'\0'),(15,'CAGIVA',10,'\0'),(16,'CAIMAN',11,'\0'),(17,'CFMOTO',12,''),(18,'DAMON',1,'\0'),(19,'DB.MOTORS',2,'\0'),(20,'DERBI',3,'\0'),(21,'DUCATI',4,'\0'),(22,'GRC',5,'\0'),(23,'HARLEY-DAVIDSON',6,'\0'),(24,'HONDA',7,''),(25,'HUSQVARNA',8,'\0'),(26,'INDIAN',9,'\0'),(27,'JAWA',10,'\0'),(28,'JONWAY',11,'\0'),(29,'KAWASAKI',12,''),(30,'KORRENT',1,''),(31,'MAHINDRA',2,'\0'),(32,'MAJESTIC',3,'\0'),(33,'MOPEDY',4,'\0'),(34,'MORS',5,'\0'),(35,'MOTO GUZZI',6,''),(36,'MOTOLAND',7,'\0'),(37,'PIAGGIO',8,'\0'),(38,'SCARABEO',9,'\0'),(39,'SUZUKI',10,'\0'),(40,'VESPA',11,'\0'),(41,'VOLCON',12,'\0'),(42,'YAMAHA',1,'\0'),(43,'YAMAHA-1',4,'\0'),(44,'YAMAHA-2',5,'\0'),(45,'YAMAHA-3',2,'\0'),(46,'YAMAHA-4',11,''),(47,'ZANELLA',2,''),(48,'БАЛТМОТОРС',3,'\0'),(49,'ЗИД',4,'\0'),(50,'ИЖ',5,''),(51,'ИРБИС',6,'\0'),(52,'РУССКАЯ МЕХАНИКА',7,'\0'),(53,'УРАЛ',8,'');
/*!40000 ALTER TABLE `moto_nomenclature` ENABLE KEYS */;

--
-- Table structure for table `moto_type`
--

DROP TABLE IF EXISTS `moto_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `moto_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `moto_type`
--

/*!40000 ALTER TABLE `moto_type` DISABLE KEYS */;
INSERT INTO `moto_type` VALUES (1,'Standard'),(2,'Cruiser'),(3,'Touring'),(4,'Sport'),(5,'Off-road'),(6,'Dual-purpose'),(7,'Sport touring'),(8,'Scooters'),(9,'Underbones and mopeds'),(10,'Enclosed and feet forwards'),(11,'Utility'),(12,'Tricycles');
/*!40000 ALTER TABLE `moto_type` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-04 14:40:05
