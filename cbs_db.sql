-- MySQL dump 10.13  Distrib 8.0.25, for Linux (x86_64)
--
-- Host: localhost    Database: cbs_db
-- ------------------------------------------------------
-- Server version	8.0.25-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Account`
--

DROP TABLE IF EXISTS `Account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Account` (
  `AID` varchar(16) NOT NULL,
  `Passwd` varchar(32) NOT NULL,
  `identity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Account`
--

LOCK TABLES `Account` WRITE;
/*!40000 ALTER TABLE `Account` DISABLE KEYS */;
INSERT INTO `Account` VALUES ('A1075511','A1075511',0),('A1075521','A1075521',3),('A1075522','A1075522',1),('A1075535','A1075535',3),('A1075541','A1075541',2),('A1075543','A1075543',4);
/*!40000 ALTER TABLE `Account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Announcement`
--

DROP TABLE IF EXISTS `Announcement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Announcement` (
  `identity` int NOT NULL,
  `AnnounceID` varchar(10) NOT NULL,
  `ReleaseTime` timestamp NOT NULL,
  `Title` varchar(32) NOT NULL,
  `Text` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Announcement`
--

LOCK TABLES `Announcement` WRITE;
/*!40000 ALTER TABLE `Announcement` DISABLE KEYS */;
INSERT INTO `Announcement` VALUES (1,'place1','2019-06-01 00:00:00','公告系統上線','公告系統上線'),(1,'place2','2019-07-01 01:00:00','暑假租借通知','暑假期間，高大場地不提供租借'),(1,'place3','2019-09-17 01:00:00','開放租借通知','新學期已開始，開放場地租借'),(1,'place4','2020-04-05 00:00:00','租借系統維修通知','近期租借系統異常，將於 04/07 上午8時關閉系統並維修'),(1,'place5','2020-04-07 09:15:32','租借系統開放通知','系統已維修完畢，已開放系統'),(1,'place6','2021-06-18 02:58:55','2021 暑假租借通知','適逢疫情期間，高大場地暫停租借使用');
/*!40000 ALTER TABLE `Announcement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Application_Form`
--

DROP TABLE IF EXISTS `Application_Form`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Application_Form` (
  `AID` varchar(16) NOT NULL,
  `ApplicationID` varchar(16) NOT NULL,
  `PeopleNumber` int NOT NULL,
  `ApplicationTime` timestamp NOT NULL,
  `UniformNumber` varchar(16) DEFAULT NULL,
  `Company` varchar(16) DEFAULT NULL,
  `TaxNumber` varchar(16) DEFAULT NULL,
  `OvenNumber` int NOT NULL,
  `CampNumber` int NOT NULL,
  `RefundState` int NOT NULL,
  `CheckState` int NOT NULL,
  `PayState` int NOT NULL,
  PRIMARY KEY (`ApplicationID`),
  KEY `AID` (`AID`),
  CONSTRAINT `Application_Form_ibfk_1` FOREIGN KEY (`AID`) REFERENCES `Normal_User` (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Application_Form`
--

LOCK TABLES `Application_Form` WRITE;
/*!40000 ALTER TABLE `Application_Form` DISABLE KEYS */;
/*!40000 ALTER TABLE `Application_Form` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `In_School_User`
--

DROP TABLE IF EXISTS `In_School_User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `In_School_User` (
  `AID` varchar(16) NOT NULL,
  `DeparementLevel` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `In_School_User`
--

LOCK TABLES `In_School_User` WRITE;
/*!40000 ALTER TABLE `In_School_User` DISABLE KEYS */;
INSERT INTO `In_School_User` VALUES ('A1075521',''),('A1075535','');
/*!40000 ALTER TABLE `In_School_User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Normal_User`
--

DROP TABLE IF EXISTS `Normal_User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Normal_User` (
  `AID` varchar(16) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Normal_User`
--

LOCK TABLES `Normal_User` WRITE;
/*!40000 ALTER TABLE `Normal_User` DISABLE KEYS */;
INSERT INTO `Normal_User` VALUES ('A1075521','高嘉君','a1075521@mail.nuk.edu.tw','0000000000','桃園市'),('A1075535','曹瑋庭','a1075535@mail.nuk.edu.tw','0000000000','？？'),('A1075543','侯德威','a1075543@mail.nuk.edu.tw','0000000000','高雄市');
/*!40000 ALTER TABLE `Normal_User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Out_School_User`
--

DROP TABLE IF EXISTS `Out_School_User`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Out_School_User` (
  `AID` varchar(16) NOT NULL,
  `ServiceUnit` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Out_School_User`
--

LOCK TABLES `Out_School_User` WRITE;
/*!40000 ALTER TABLE `Out_School_User` DISABLE KEYS */;
INSERT INTO `Out_School_User` VALUES ('A1075543','');
/*!40000 ALTER TABLE `Out_School_User` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Place`
--

DROP TABLE IF EXISTS `Place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Place` (
  `Place_ID` varchar(8) NOT NULL,
  `Price` int NOT NULL,
  PRIMARY KEY (`Place_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Place`
--

LOCK TABLES `Place` WRITE;
/*!40000 ALTER TABLE `Place` DISABLE KEYS */;
INSERT INTO `Place` VALUES ('BBQ001',300),('BBQ002',300),('BBQ003',300),('Camp001',300),('Camp002',300),('Camp003',300);
/*!40000 ALTER TABLE `Place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Rent_Detail`
--

DROP TABLE IF EXISTS `Rent_Detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Rent_Detail` (
  `ApplicationID` varchar(16) NOT NULL,
  `Place_ID` varchar(8) NOT NULL,
  `StartDate` timestamp NOT NULL,
  `EndDate` timestamp NOT NULL,
  PRIMARY KEY (`ApplicationID`,`Place_ID`),
  KEY `Place_ID` (`Place_ID`),
  CONSTRAINT `Rent_Detail_ibfk_1` FOREIGN KEY (`ApplicationID`) REFERENCES `Application_Form` (`ApplicationID`),
  CONSTRAINT `Rent_Detail_ibfk_2` FOREIGN KEY (`Place_ID`) REFERENCES `Place` (`Place_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Rent_Detail`
--

LOCK TABLES `Rent_Detail` WRITE;
/*!40000 ALTER TABLE `Rent_Detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `Rent_Detail` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-18 16:19:09
