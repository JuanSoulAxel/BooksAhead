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
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `chat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `telefone` varchar(20) DEFAULT NULL,
  `nome` varchar(20) DEFAULT NULL,
  `sobrenome` varchar(20) DEFAULT NULL,
  `mensagem` text,
  `imagem` varchar(100) DEFAULT NULL,
  `datta` datetime DEFAULT NULL,
  `iduser` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `cadastro` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chat`
--

LOCK TABLES `chat` WRITE;
/*!40000 ALTER TABLE `chat` DISABLE KEYS */;
INSERT INTO `chat` VALUES (1,'(81) 9666-6666','Santos','Dumont','ola','_fotos-transacao/fotos-usuarios/6)Santos/SantosDumont_perfil_6.jpg','2022-12-03 11:59:50',6),(2,'(81) 9444-4444','Abraham','Lincoln','vixe','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg',NULL,4),(3,'(81) 9555-5555','Pitagoras','de Samos','Qualé','_fotos-transacao/fotos-usuarios/5)Pitagoras/Pitagorasde Samos_perfil_5.jpg',NULL,5),(4,'(81) 9555-5555','Pitagoras','de Samos','kkkkkkkkkkkk','_fotos-transacao/fotos-usuarios/5)Pitagoras/Pitagorasde Samos_perfil_5.jpg',NULL,5),(5,'(81) 9777-7777','Rocky','Balboa','oi','_fotos-transacao/fotos-usuarios/8)Rocky/RockyBalboa_perfil_8.jpg',NULL,8),(6,'(81) 9777-7777','Rocky','Balboa','kkkk','_fotos-transacao/fotos-usuarios/8)Rocky/RockyBalboa_perfil_8.jpg',NULL,8),(7,'(81) 9444-4444','Abraham','Lincoln',' ','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg',NULL,4),(8,'(81) 9444-4444','Abraham','Lincoln','sem querer kkk','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg',NULL,4),(9,'(81) 9999-9999','Eiichiro','Oda','Ohayo','_fotos-transacao/fotos-usuarios/10)Eiichiro/EiichiroOda_perfil_10.jpg',NULL,10),(10,'(81) 9191-9191','Cristiano','Ronaldo','Olá amigos','_fotos-transacao/fotos-usuarios/11)Cristiano/CristianoRonaldo_perfil_11.jpg',NULL,11),(11,'(81) 9191-9192','Lionel','Messi','Semifinal será Brasil x Argentina','_imagens/USER_PADRAO/Foto-Usuario.png',NULL,13),(12,'(81) 9191-9192','Lionel','Messi','oi','_fotos-transacao/fotos-usuarios/13)Lionel/LionelMessi_perfil_13.jpg',NULL,13),(13,'(81) 9444-4444','Abraham','Lincoln','ola','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg',NULL,4),(14,'(81) 9444-4444','Abraham','Lincoln','boa tarde, pessoal!','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg',NULL,4),(15,'(81) 9444-4444','Abraham','Lincoln','tudo bem?','_fotos-transacao/fotos-usuarios/4)Abraham/AbrahamLincoln_perfil_4.jpg','2022-12-06 13:28:12',4),(16,'(81) 9191-9192','Lionel','Messi','Numa nice','_fotos-transacao/fotos-usuarios/13)Lionel/LionelMessi_perfil_13.jpg','2022-12-06 13:55:45',13),(17,'(81) 9999-9999','Eiichiro','Oda','Olá, queridos','_fotos-transacao/fotos-usuarios/10)Eiichiro/EiichiroOda_perfil_10.jpg','2022-12-06 14:22:38',10),(18,'(81) 9191-9191','Cristiano','Ronaldo','o melhor chegou','_fotos-transacao/fotos-usuarios/11)Cristiano/CristianoRonaldo_perfil_11.jpg','2022-12-06 16:24:39',11),(19,'(81) 9191-9192','Lionel','Messi','po$%# nenhuma ','_fotos-transacao/fotos-usuarios/13)Lionel/LionelMessi_perfil_13.jpg','2022-12-06 20:58:47',13),(20,'(81) 9191-9191','Cristiano','Ronaldo','kkkkkkkkkkkk','_fotos-transacao/fotos-usuarios/11)Cristiano/CristianoRonaldo_perfil_11.jpg','2022-12-07 16:05:13',11);
/*!40000 ALTER TABLE `chat` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-07 16:13:34
