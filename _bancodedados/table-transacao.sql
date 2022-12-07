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
-- Table structure for table `transacao`
--

DROP TABLE IF EXISTS `transacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `livro` varchar(50) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `tipo` enum('D','T') DEFAULT NULL,
  `datta` datetime DEFAULT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `transacao_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `cadastro` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transacao`
--

LOCK TABLES `transacao` WRITE;
/*!40000 ALTER TABLE `transacao` DISABLE KEYS */;
INSERT INTO `transacao` VALUES (2,'7984c460dea01550e1f5a8a7eb68d7fe.png','Estou doando esse livro sobre um crime real. É um livro ótimo para entender e se conscientizar sobre os serial killers.','D','2022-12-03 11:59:50',1),(3,'bb50723717cbb7bec43aaaa87844cf90.jpg','muito bom','D','2022-12-03 12:02:42',2),(4,'7282130c4572033375c9f06fc5663b10.jpg','Essa é um leitura obrigatória para todos estadunidenses.','D','2022-12-05 19:18:20',4),(6,'33af00785fe0cce78bc465ee2049c762.jpg','outro bom livro','D','2022-12-06 07:49:12',11),(9,'3b021bcd46936ee39dc6d22b958e6f8c.jpg','Estou doando meu primeiro mangá de One Piece.','D','2022-12-06 14:20:18',10),(10,'3031e4a543a56b529e5242b4cfabef7d.jpg','Estou doando também o 100','D','2022-12-06 14:22:21',10),(11,'1d61f996448ec70d7cb94fc5342655d6.jpg','legal esse','D','2022-12-06 16:23:26',11),(12,'28cf1d56b93d11feef0907c6f7950754.jpg','naruto mt bom','T','2022-12-06 16:24:08',11),(14,'ee9346b106fa539af38ca7e81a28b1b7.jpg','OP é bom. Piratas são tipo vikings.','D','2022-12-06 20:30:03',9),(15,'bba9df5a06dc2d47380084e1bf6acaf1.jpg','It tbm é lgl','D','2022-12-06 20:30:51',9),(32,'ba7a47192a4caf9d0947f5ebf44e5b96.jpg','mt bom','D','2022-12-07 11:27:10',14);
/*!40000 ALTER TABLE `transacao` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 16:14:22
