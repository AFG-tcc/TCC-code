-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: formulario-guilherme
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(110) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `data_nasc` date NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'aqvq','guilhermenerychristofano036@gmail.com','123','18998076712','masculino','2024-07-25','Alfredo Marcondes','AC','endereco'),(2,'WLADIMIR DE','guilhermenerychristofano036@gmail.com','123','18996178198','masculino','2024-07-24','Alfredo Marcondes','AC','endereco'),(3,'','','','','','0000-00-00','','','endereco'),(4,'','','','','','0000-00-00','','','endereco'),(5,'','','','','','0000-00-00','','','endereco'),(6,'','','','','','0000-00-00','','','endereco'),(7,'','','','','','0000-00-00','','','endereco'),(8,'','','','','','0000-00-00','','','endereco'),(9,'','','','','','0000-00-00','','','endereco'),(10,'Gui','Guilherme@gmail.com','123','123','masculino','2024-07-09','vvwve','AC','vevev'),(11,'gui','Guilherme@gmail.com','','424252','masculino','2024-07-03','g3g3g3','AC','g3g3'),(12,'gui','Guilherme@gmail.com','','18996178198','masculino','0000-00-00','Alfredo Marcondes','AC','Rua José Salate'),(13,'gui','Guilherme@gmail.com','','18996178198','masculino','0000-00-00','Alfredo Marcondes','AC','Rua José Salate'),(14,'gui','Guilherme@gmail.com','','18996178198','masculino','0000-00-00','Alfredo Marcondes','AC','Rua José Salate'),(15,'123','Guilherme@gmail.com','','1899076712','masculino','2024-07-02','v2v3v','AC','3f3g3'),(16,'123','seila@gmail.com','123','18998076712','masculino','2024-07-03','Alfredo Marcondes','AC','Rua José Salate'),(17,'123','Guilherme@gmail.com','','18996178198','masculino','0000-00-00','Alfredo Marcondes','','Rua José Salate'),(18,'123','Guilherme@gmail.com','','18998076712','masculino','2024-07-25','alfredo marcondes','AC','rua jose salate'),(19,'111','Guilhermenerychristofano@gmail.com','','18998076712','masculino','2024-07-10','Alfredo Marcondes','AC','Rua José Salate'),(20,'111','Guilhermenerychristofano@gmail.com','','18998076712','masculino','2024-07-16','Alfredo Marcondes','AC','Rua José Salate'),(21,'111','vb3b3b3@wv3','','18996178198','masculino','2024-07-01','Alfredo Marcondes','AC','Rua José Salate'),(22,'vwvw','wvw@fw','','vwvw','masculino','2024-07-07','wvwv','AC','vwvw'),(23,'bbverer','ebb@vfb3','11123','18996178198','masculino','2024-07-07','Alfredo Marcondes','AC','Rua José Salate');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-24 13:06:35
