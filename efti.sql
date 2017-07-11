-- MySQL dump 10.16  Distrib 10.1.22-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: eaglyfly_db
-- ------------------------------------------------------
-- Server version	10.1.22-MariaDB

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
-- Table structure for table `accounttable`
--

DROP TABLE IF EXISTS `accounttable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounttable` (
  `account_id` int(11) NOT NULL AUTO_INCREMENT,
  `account_username` varchar(255) NOT NULL,
  `account_password` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  PRIMARY KEY (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounttable`
--

LOCK TABLES `accounttable` WRITE;
/*!40000 ALTER TABLE `accounttable` DISABLE KEYS */;
INSERT INTO `accounttable` VALUES (26,'asdfas','dfasdfasdfa','sdfasdfasdfa'),(28,'eaglyfly@gmail.com','P@ssw0rd','mau');
/*!40000 ALTER TABLE `accounttable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companytable`
--

DROP TABLE IF EXISTS `companytable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companytable` (
  `CompanyId` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `CompanyDownpaymentPercent` double(10,2) NOT NULL,
  `CompanyProgressPercent` double(10,2) NOT NULL,
  `CompanyFinalPercent` double(10,2) NOT NULL,
  `CompanyRetentionPercent` double NOT NULL,
  `DownpaymentLimitDays` int(11) NOT NULL,
  `ProgressLimitDays` int(11) NOT NULL,
  `FinalLimitDays` int(11) NOT NULL,
  `RetentionLimitDays` int(11) NOT NULL,
  PRIMARY KEY (`CompanyId`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companytable`
--

LOCK TABLES `companytable` WRITE;
/*!40000 ALTER TABLE `companytable` DISABLE KEYS */;
INSERT INTO `companytable` VALUES (41,'Eigis',49.00,49.00,49.00,49,49,49,49,49),(44,'Bamacom',30.00,30.00,30.00,10,7,45,45,90);
/*!40000 ALTER TABLE `companytable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `potable`
--

DROP TABLE IF EXISTS `potable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `potable` (
  `POID` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyName` varchar(255) NOT NULL,
  `PO_number` varchar(255) DEFAULT NULL,
  `Site_code` varchar(255) NOT NULL,
  `Site` varchar(255) DEFAULT NULL,
  `Nature_of_work` text,
  `PO_amount` double(10,2) DEFAULT NULL,
  `PO_dp` double(10,2) DEFAULT NULL,
  `PO_pb` double(10,2) DEFAULT NULL,
  `PO_fb` double(10,2) DEFAULT NULL,
  `PO_ret` double(10,2) DEFAULT NULL,
  `PO_input_date` date NOT NULL,
  PRIMARY KEY (`POID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `potable`
--

LOCK TABLES `potable` WRITE;
/*!40000 ALTER TABLE `potable` DISABLE KEYS */;
INSERT INTO `potable` VALUES (2,'Eigis','FirstPO','FirstPO','FirstPO','FirstPO',21233.00,10404.17,10404.17,10404.17,10404.17,'2017-07-15');
/*!40000 ALTER TABLE `potable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tableinvoice`
--

DROP TABLE IF EXISTS `tableinvoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tableinvoice` (
  `CompanyName` varchar(255) NOT NULL,
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `Invoice_no` varchar(255) DEFAULT NULL,
  `Invoice_date` date DEFAULT NULL,
  `Invoice_due_date` date DEFAULT NULL,
  `site_code` varchar(255) DEFAULT NULL,
  `po_no` varchar(255) DEFAULT NULL,
  `level` double(10,2) DEFAULT NULL,
  `billedAmount` double(10,2) DEFAULT NULL,
  `input_date` date DEFAULT NULL,
  `user_id_input` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tableinvoice`
--

LOCK TABLES `tableinvoice` WRITE;
/*!40000 ALTER TABLE `tableinvoice` DISABLE KEYS */;
INSERT INTO `tableinvoice` VALUES ('Eigis',21,'201711','2017-07-21','2017-07-21','asdf','2017041017',NULL,NULL,'2017-07-05','null','unpaid'),('Eigis',29,'201712','2017-07-21','2017-07-21','asf','asdfasdf',NULL,NULL,'2017-07-06','null','unpaid');
/*!40000 ALTER TABLE `tableinvoice` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-07-11 21:12:11
