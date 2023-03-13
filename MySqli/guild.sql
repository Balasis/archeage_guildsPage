-- MySQL dump 10.13  Distrib 5.6.49, for Win64 (x86_64)
--
-- Host: localhost    Database: guild
-- ------------------------------------------------------
-- Server version	5.6.49-log

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
-- Current Database: `guild`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `guild` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `guild`;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(200) DEFAULT NULL,
  `Password` text,
  `PlayerName` varchar(150) DEFAULT NULL,
  `NoDoubleLogin` text,
  `Rank` int(11) DEFAULT '0',
  `RankInGame` varchar(50) DEFAULT 'member',
  `NumberOfPosts` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Username_UNIQUE` (`Username`),
  UNIQUE KEY `PlayerName_UNIQUE` (`PlayerName`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (1,'angelhollow','82468246a','Vastolorde','19967',0,'member',10),(2,'Oathkeeper','82468246a','Oathkeeper','16021',0,'member',0),(5,'Damn','82468246a','mouskoulbani','',0,'member',0),(6,'Vastolorde','82468246a!','VforVendetta','',0,'member',0),(7,'Gasolina','gasfsa','sdfgsfds','',0,'member',0),(9,'Giovani','82468246','werrew','14027',0,'member',0),(10,'Maura','Thrasos','Mesanixta','',0,'member',0),(11,'asdfa','2352','fasdfads','',0,'member',0),(12,'aldfsa','3252','asfaadfs','',0,'member',0),(13,'534634','sdfgs','gsdfsds','',0,'member',0),(14,'53','325','dsfa','',0,'member',0),(15,'dsfasdf','sadfsa','fsadfa','',0,'member',0),(17,'Admin','82468246a!!','Admin','',0,'member',0),(22,'asd','123','asd','19173',0,'member',35),(23,'qwertyuiop','123456789','otinaneleme','16863',NULL,NULL,NULL);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminaccounts`
--

DROP TABLE IF EXISTS `adminaccounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminaccounts` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(150) DEFAULT NULL,
  `Password` text,
  `PlayerName` varchar(100) DEFAULT NULL,
  `NoDoubleLogin` int(11) DEFAULT NULL,
  `Rank` int(11) DEFAULT '5',
  `RankInGame` varchar(50) DEFAULT 'officer',
  `NumberOfPosts` int(11) DEFAULT '0',
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Username_UNIQUE` (`Username`),
  UNIQUE KEY `PlayerName_UNIQUE` (`PlayerName`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminaccounts`
--

LOCK TABLES `adminaccounts` WRITE;
/*!40000 ALTER TABLE `adminaccounts` DISABLE KEYS */;
INSERT INTO `adminaccounts` VALUES (1,'Admin','82468246a!','Admin',11976,5,'officer',4);
/*!40000 ALTER TABLE `adminaccounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text,
  `LastTopic` text,
  `categoryInfo` text,
  `LastTopicBy` varchar(50) DEFAULT NULL,
  `LastTopicDateTime` datetime DEFAULT NULL,
  `AllowCreateTopic` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'News','HellowThereCanYouTellMe','Check the latest news and announcement of guild','Vastolorde','2020-04-16 17:00:00',1),(2,'Guild Rules','Basic Rules','What is an army without rules right?','Admin','2020-04-15 20:28:00',1),(3,'General','speedOfIt','Here you can create topic about anything you like','Vastolorde','2020-04-26 10:13:47',0);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificationtopic`
--

DROP TABLE IF EXISTS `notificationtopic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notificationtopic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `whichTopic` int(11) DEFAULT NULL,
  `OwnerOfTopic` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificationtopic`
--

LOCK TABLES `notificationtopic` WRITE;
/*!40000 ALTER TABLE `notificationtopic` DISABLE KEYS */;
INSERT INTO `notificationtopic` VALUES (1,27,'Vastolorde');
/*!40000 ALTER TABLE `notificationtopic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postedBy` text,
  `postedAt` datetime DEFAULT NULL,
  `postText` longtext,
  `GroupOfPost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (3,'dfaasf','2020-04-16 17:00:00',' fdsa f',1),(4,'Admin','2020-04-16 17:00:00','f dsaf ',27),(5,'fasd','2020-04-16 17:00:00','fadsa',1),(11,'Oathkeeper','2020-04-16 17:00:00','',27),(12,'Oathkeeper','2020-04-16 17:00:00','',27),(13,'Oathkeeper','2020-04-16 17:00:00','',27),(14,'Oathkeeper','2020-04-16 17:00:00','',27),(15,'Oathkeeper','2020-04-16 17:00:00','',27),(26,'asd','2020-04-18 04:39:12','why<br>why<br>why<br>',40),(27,'Admin','2020-04-18 04:41:29','hello<br>yo<br>hi<br>',41),(28,'Admin','2020-04-18 04:44:20','jghf<br>jhhh<br><div align=\"center\"\"><i>hello</i></div><div align=\"\"left\"\"><i>is it me<u> youre </u><br></i></div>\"',42),(30,'Admin','2020-04-18 09:56:20','sada<br><blockquote> example quote /n </blockquote><br>asdfas<br>',44),(31,'asd','2020-04-24 01:01:08','<div align=\"center\"\"><u><i>is that shit working?</i></u><br></div>\"',27),(32,'asd','2020-04-24 01:05:09','	ok it worked but I wanna know why the fuck it didnt at the first place<br>',27),(33,'Admin','2020-04-24 01:09:29','<div align=\"center\"\">what can you tell me about that<br></div><br>\"',27),(34,'Admin','2020-04-24 01:10:20','	post 1 wtf<br>',27),(35,'asd','2020-04-25 02:55:20','	asdfgdfs',27),(36,'asd','2020-04-25 04:25:38','hellow<br>I dant knwo hwo tow tipe<br>LaLa<br>',45),(37,'asd','2020-04-26 12:28:12','hello there are you going to add it?<br>',27),(38,'asd','2020-04-26 12:31:18','	HERE we go again<br>',27),(39,'asd','2020-04-26 12:32:00','more Give me more<br>',27),(40,'asd','2020-04-26 01:39:46','	Im here Again<br>',27),(41,'asd','2020-04-26 01:46:44','you should not add now<br>',27),(42,'Vastolorde','2020-04-26 10:13:15','Hello<br>hello<br>hello<br>',46),(43,'Vastolorde','2020-04-26 10:13:30','hello<br>helaf<br>heas<br>',47),(44,'Vastolorde','2020-04-26 10:13:47','speedOfIt<br>or q of it<br>propably<br>',48),(45,'Vastolorde','2020-04-26 10:29:47','fgdsd<br>',48),(46,'Vastolorde','2020-04-26 10:30:49','sada<br>',47),(47,'Vastolorde','2020-04-26 10:31:26','asdg<br>',46),(48,'Vastolorde','2020-04-28 03:08:03','afsdfads<br>',48),(49,'Vastolorde','2020-04-28 03:31:19','fdsafs<br>',48),(50,'Vastolorde','2020-04-28 03:33:00','<div align=\"center\"\">asdfdas<u> dfasd sda <br></u></div><div align=\"\"left\"\"><u>fgsdfg f sdfgs<br></u></div>\"',48),(51,'Vastolorde','2020-04-28 03:40:43','gsdfg sdf sdf dsf sdf<br>',48),(52,'asd','2020-05-01 12:17:42','dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad dsa fds f sdaf sa fd dssdfdsafdasfsadf sadfdsa sda sddsa s dafdsa fsad ',27),(57,'asd','2020-05-01 06:25:57','<div> 	&nbsp;</div>\r\n\r\n<div>&nbsp; 	safdas</div>\r\n	 ',27),(59,'asd','2020-05-01 06:26:34','<div> 	&nbsp;</div>\r\n\r\n<div>&nbsp; 	fsdafas</div>\r\n	 ',27),(74,'Admin','2020-05-08 08:58:39','n1<br>',14),(75,'Admin','2020-09-27 05:47:54','Refreshing My Mind...had a long time to get busy with this .<br>',27);
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reply`
--

DROP TABLE IF EXISTS `reply`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ReplyTo` varchar(45) DEFAULT NULL,
  `InTopic` int(11) DEFAULT NULL,
  `ReplyFrom` varchar(45) DEFAULT NULL,
  `postedAt` datetime DEFAULT NULL,
  `ReplyText` longtext,
  `IdOfPostTable` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reply`
--

LOCK TABLES `reply` WRITE;
/*!40000 ALTER TABLE `reply` DISABLE KEYS */;
/*!40000 ALTER TABLE `reply` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serialkeys`
--

DROP TABLE IF EXISTS `serialkeys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serialkeys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serialKeys` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `serialKeys_UNIQUE` (`serialKeys`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serialkeys`
--

LOCK TABLES `serialkeys` WRITE;
/*!40000 ALTER TABLE `serialkeys` DISABLE KEYS */;
INSERT INTO `serialkeys` VALUES (1,5656);
/*!40000 ALTER TABLE `serialkeys` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameOfTopic` text,
  `GroupOfTopic` int(11) DEFAULT NULL,
  `LastPost` longtext,
  `AdminPost` int(11) DEFAULT NULL,
  `StartedBy` text,
  `LastPostDateTime` text,
  `StartedAt` datetime DEFAULT NULL,
  `Subject` text,
  `Notify` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (1,'New Hiram',1,'',0,'Admin','','2020-04-15 20:28:00','gdfsfasdfasfasdfdhffgdhg asdf sdfgh sd gfdsg fds htewsaf fsdaf asfsad sdafsd fdsa dsa fdsae as',0),(14,'Basic Rules',2,'',1,'Admin','','2020-04-15 20:28:00','gsfd',1),(17,'WTS potatoes',3,'',0,'Angelhollow','','2020-04-15 22:00:00','sdfg',0),(18,'SwseMe',1,'',0,'OlaEnaM','','2020-04-16 17:00:00','fdgs',0),(19,'Hello',1,'',0,'Angelhollow','','2020-04-16 17:00:00','fdsg',0),(20,'niaj',1,'',0,'Angelhollow','','2020-04-16 17:00:00','fdsg',0),(21,'ohmy',1,'',0,'Angelhollow','','2020-04-16 17:00:00','fghdh',0),(22,'ser',1,'',0,'Angelhollow','','2020-04-16 17:00:00','ghjg',0),(23,'dsgs',1,'',0,'Angelhollow','','2020-04-16 17:00:00','ergre',0),(24,'sgfs',1,'',0,'Angelhollow','','2020-04-16 17:00:00','fghfd',0),(25,'gsd',1,'',0,'Angelhollow','','2020-04-16 17:00:00','hfdgh',0),(26,'fsda',1,'',0,'Angelhollow','','2020-04-16 17:00:00','ergts',0),(27,'HellowThereCanYouTellMe',1,'',3,'Vastolorde','','2020-04-16 17:00:00','gdfsfasdfasfasdfdhffgdhg asdf sdfgh sd gfdsg fds htewsaf fsdaf asfsad sdafsd fdsa dsa fdsae as as fasfsadgdg dsfg dfsg dsfg dgfds gfds gfds gfds gds gfds gds gdsfg dsfgwfewa w sdf',0),(30,'sad',3,'',0,'asd','','2020-04-18 04:08:44','fasd',0),(31,'ohcomon',3,'',0,'asd','','2020-04-18 04:09:28','cant',0),(32,'why',3,'',0,'asd','','2020-04-18 04:23:21','not',0),(33,'why',3,'',0,'asd','','2020-04-18 04:24:36','why',0),(34,'why',3,'',0,'asd','','2020-04-18 04:26:16','why',0),(35,'why',3,'',0,'asd','','2020-04-18 04:29:38','why',0),(36,'why',3,'',0,'asd','','2020-04-18 04:30:42','why',0),(37,'why',3,'',0,'asd','','2020-04-18 04:31:35','why',0),(38,'why',3,'',0,'asd','','2020-04-18 04:33:18','why',0),(39,'why',3,'',0,'asd','','2020-04-18 04:33:59','why',0),(40,'why',3,'',0,'asd','','2020-04-18 04:39:12','why',0),(41,'hello',3,'',1,'Admin','','2020-04-18 04:41:29','yo',0),(42,'jghf',3,'',1,'Admin','','2020-04-18 04:44:20','jhhh',0),(43,'Geia',3,'',1,'Admin','','2020-04-18 09:54:58','xarantan',0),(44,'sada',3,'',1,'Admin','','2020-04-18 09:56:20','<blockquote> example quote /n </blockquote>',0),(45,'hellow',3,'',0,'asd','','2020-04-25 04:25:38','I dant knwo hwo tow tipe',0),(46,'Hello',3,'',0,'Vastolorde','','2020-04-26 10:13:15','hello',0),(47,'hello',3,'',0,'Vastolorde','','2020-04-26 10:13:30','helaf',1),(48,'speedOfIt',3,'',0,'Vastolorde','','2020-04-26 10:13:47','or q of it',0);
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-30 13:01:28
