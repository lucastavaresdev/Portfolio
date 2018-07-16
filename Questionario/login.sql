-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: login
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
-- Table structure for table `lista_de_pacientes`
--

DROP TABLE IF EXISTS `lista_de_pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista_de_pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) DEFAULT NULL,
  `DI Hospitalar` varchar(45) DEFAULT NULL,
  `IH` varchar(45) DEFAULT NULL,
  `Procedimento` varchar(45) DEFAULT NULL,
  `Sigla_procedimento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista_de_pacientes`
--

LOCK TABLES `lista_de_pacientes` WRITE;
/*!40000 ALTER TABLE `lista_de_pacientes` DISABLE KEYS */;
INSERT INTO `lista_de_pacientes` VALUES (1,'Carla Ribeiro Martins','1234','1234','eletrocardiograma','ECG'),(2,'Júlia Correia Barros','123','123','Raio X','RAIO-X'),(3,'Felipe Souza Rocha','123','123','Cirurgia','CIR');
/*!40000 ALTER TABLE `lista_de_pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subtitulo_questionario`
--

DROP TABLE IF EXISTS `subtitulo_questionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subtitulo_questionario` (
  `id_sub-titulo` int(11) NOT NULL AUTO_INCREMENT,
  `sub_titulo` varchar(200) DEFAULT NULL,
  `id_titulo_questionario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id_sub-titulo`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subtitulo_questionario`
--

LOCK TABLES `subtitulo_questionario` WRITE;
/*!40000 ALTER TABLE `subtitulo_questionario` DISABLE KEYS */;
INSERT INTO `subtitulo_questionario` VALUES (1,'teste',0),(2,'t',0),(3,'v',0),(4,'v',1),(5,'v',1),(6,'b',2),(7,'b',1),(8,'b',1),(9,'j',18),(10,'j',19),(11,'teste',20);
/*!40000 ALTER TABLE `subtitulo_questionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `titulo_questionario`
--

DROP TABLE IF EXISTS `titulo_questionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `titulo_questionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_questionario` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `titulo_questionario`
--

LOCK TABLES `titulo_questionario` WRITE;
/*!40000 ALTER TABLE `titulo_questionario` DISABLE KEYS */;
INSERT INTO `titulo_questionario` VALUES (1,'teste'),(2,':mtitulo'),(3,':mtitulo'),(4,'teste 5'),(5,'teste de titulo'),(6,'teste de titulo'),(7,'teste 11'),(8,'teste de titulo'),(9,'teste de titulo'),(10,'teste 45'),(11,'teste 88'),(12,'form'),(13,'form'),(14,'form'),(15,'form'),(16,'form'),(17,'abc'),(18,'dfg'),(19,'teste de titulo 100'),(20,'teste de titulo 99');
/*!40000 ALTER TABLE `titulo_questionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `perfil` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','123',1),(2,'usuario','123',2),(3,'Teste','1234',1),(4,'itech','adcd7048512e64b48da55b027577886ee5a36350',1),(5,'teste','10470c3b4b1fed12c3baac014be15fac67c6e815',1),(6,'admin1','10470c3b4b1fed12c3baac014be15fac67c6e815',1),(7,'usu','10470c3b4b1fed12c3baac014be15fac67c6e815',2),(8,'usuario','adcd7048512e64b48da55b027577886ee5a36350',2),(9,'teste','fe703d258c7ef5f50b71e06565a65aa07194907f',1),(10,'f','0937afa17f4dc08f3c0e5dc908158370ce64df86',1),(11,NULL,NULL,NULL),(12,NULL,NULL,NULL),(13,NULL,NULL,NULL),(14,NULL,NULL,NULL),(15,NULL,NULL,NULL),(16,NULL,NULL,NULL),(17,NULL,NULL,NULL),(18,'123456','10470c3b4b1fed12c3baac014be15fac67c6e815',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-16 10:46:08
