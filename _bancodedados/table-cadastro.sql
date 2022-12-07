CREATE DATABASE  IF NOT EXISTS `booksahead` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `booksahead`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: booksahead
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `telefone` varchar(40) DEFAULT NULL,
  `senha` varchar(20) DEFAULT NULL,
  `sexo` enum('M','F','N') NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `capa` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `TELEFONE` (`telefone`),
  UNIQUE KEY `telefone_2` (`telefone`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro`
--

LOCK TABLES `cadastro` WRITE;
/*!40000 ALTER TABLE `cadastro` DISABLE KEYS */;
INSERT INTO `cadastro` VALUES (1,'Juan','Axel','juan@gmail.com','(81) 9111-1111','123','M','JuanAxel_perfil_1.jpg','JuanAxel_capa_1.jpg'),(2,'Rislainne','Augusta','ris@gmail.com','(81) 9222-2222','321','F','RislainneAugusta_perfil_2.jpg','RislainneAugusta_capa_2.jpg'),(3,'Jack','Balboa','jack@gmail.com','(81) 9333-3333','111','M',NULL,NULL),(4,'Abraham','Lincoln','abraham@gmail.com','(81) 9444-4444','222','M','AbrahamLincoln_perfil_4.jpg','AbrahamLincoln_capa_4.jpg'),(5,'Pitagoras','de Samos','pita@gmail.com','(81) 9555-5555','pita','N','Pitagorasde Samos_perfil_5.jpg','Pitagorasde Samos_capa_5.jpg'),(6,'Santos','Dumont','dumont@gmail.com','(81) 9666-6666','santos','M','SantosDumont_perfil_6.jpg','SantosDumont_capa_6.jpg'),(8,'Rocky','Balboa','rocky@gmail.com','(81) 9777-7777','rocky','M','RockyBalboa_perfil_8.jpg','RockyBalboa_capa_8.jpg'),(9,'Bjorn','Ironside','bjron@gmail.com','(81) 9888-8888','bjorn','M','BjornIronside_perfil_9.jpg','BjornIronside_capa_9.jpg'),(10,'Eiichiro','Oda','oda@gmail.com','(81) 9999-9999','oda','M','EiichiroOda_perfil_10.jpg','EiichiroOda_capa_10.jpg'),(11,'Cristiano','Ronaldo','cr7@gmail.com','(81) 9191-9191','cr7','M','CristianoRonaldo_perfil_11.jpg','CristianoRonaldo_capa_11.jpg'),(13,'Lionel','Messi','messi@gmail.com','(81) 9191-9192','messi','M','LionelMessi_perfil_13.jpg','LionelMessi_capa_13.jpg'),(14,'Cristovão','Colombo','cristovao@gmail.com','(92) 9292-9292','colombo','M','CristovãoColombo_perfil_14.jpg','CristovãoColombo_capa_14.jpg'),(15,'Indiana','Jones','indiana@gmail.com','(81) 9393-9393','indiana','M',NULL,NULL);
/*!40000 ALTER TABLE `cadastro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 16:13:16
