-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 167.99.41.93    Database: ppv0008003
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.18.04.1

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
-- Current Database: `ppv0008003`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ppv0008003` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ppv0008003`;

--
-- Temporary view structure for view `NeedRamdomKey`
--

DROP TABLE IF EXISTS `NeedRamdomKey`;
/*!50001 DROP VIEW IF EXISTS `NeedRamdomKey`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `NeedRamdomKey` AS SELECT 
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `EmailAddress`,
 1 AS `StudentID`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `allpickupscurrentsemester`
--

DROP TABLE IF EXISTS `allpickupscurrentsemester`;
/*!50001 DROP VIEW IF EXISTS `allpickupscurrentsemester`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `allpickupscurrentsemester` AS SELECT 
 1 AS `EventName`,
 1 AS `EventDate`,
 1 AS `currentsemester`,
 1 AS `scannerlinkaddressouter`,
 1 AS `email`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `alltimepointcalculations`
--

DROP TABLE IF EXISTS `alltimepointcalculations`;
/*!50001 DROP VIEW IF EXISTS `alltimepointcalculations`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `alltimepointcalculations` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Senator`,
 1 AS `Faculty`,
 1 AS `CheckSort`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `alltimepointcalculationsordered`
--

DROP TABLE IF EXISTS `alltimepointcalculationsordered`;
/*!50001 DROP VIEW IF EXISTS `alltimepointcalculationsordered`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `alltimepointcalculationsordered` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `currentranking`
--

DROP TABLE IF EXISTS `currentranking`;
/*!50001 DROP VIEW IF EXISTS `currentranking`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `currentranking` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`,
 1 AS `ranking`,
 1 AS `currentrankingtableid`,
 1 AS `modtime`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `currentrankingallsemestersmax`
--

DROP TABLE IF EXISTS `currentrankingallsemestersmax`;
/*!50001 DROP VIEW IF EXISTS `currentrankingallsemestersmax`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `currentrankingallsemestersmax` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`,
 1 AS `ranking`,
 1 AS `currentrankingtableid`,
 1 AS `modtime`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `currentrankingraw`
--

DROP TABLE IF EXISTS `currentrankingraw`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currentrankingraw` (
  `EmailAddress` varchar(255) NOT NULL,
  `Points` int(11) NOT NULL,
  `Semester` varchar(12) NOT NULL,
  `Faculty` tinyint(1) NOT NULL,
  `Senator` tinyint(1) NOT NULL,
  `CheckSort` tinyint(1) NOT NULL,
  `ranking` int(11) NOT NULL,
  `currentrankingtableid` int(11) NOT NULL AUTO_INCREMENT,
  `modtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`currentrankingtableid`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `currentsemester`
--

DROP TABLE IF EXISTS `currentsemester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currentsemester` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currentsemester` varchar(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `currentsemesteractual`
--

DROP TABLE IF EXISTS `currentsemesteractual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currentsemesteractual` (
  `idactualcurrentsemester` int(11) NOT NULL AUTO_INCREMENT,
  `currentsemesteractual` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`idactualcurrentsemester`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datestosemesters`
--

DROP TABLE IF EXISTS `datestosemesters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datestosemesters` (
  `Date` date NOT NULL,
  `Semester` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Date`),
  KEY `Semtosem_idx` (`Semester`),
  CONSTRAINT `Semtosem` FOREIGN KEY (`Semester`) REFERENCES `semester` (`Semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `duplicates`
--

DROP TABLE IF EXISTS `duplicates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `duplicates` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ScanIDNew` int(11) NOT NULL,
  `EventIDNew` int(11) NOT NULL DEFAULT '340',
  `EventIDOld` int(11) DEFAULT NULL,
  `mod` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID_UNIQUE` (`ID`),
  KEY `ScanIDNew_index` (`ScanIDNew`),
  KEY `EventIDNew_index` (`EventIDNew`)
) ENGINE=InnoDB AUTO_INCREMENT=3512 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `duplicatescannerids`
--

DROP TABLE IF EXISTS `duplicatescannerids`;
/*!50001 DROP VIEW IF EXISTS `duplicatescannerids`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `duplicatescannerids` AS SELECT 
 1 AS `oldyear`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `duplicatesfull`
--

DROP TABLE IF EXISTS `duplicatesfull`;
/*!50001 DROP VIEW IF EXISTS `duplicatesfull`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `duplicatesfull` AS SELECT 
 1 AS `oldyear`,
 1 AS `eventidnew`,
 1 AS `EventID`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `eventhosts`
--

DROP TABLE IF EXISTS `eventhosts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventhosts` (
  `HostID` int(11) NOT NULL AUTO_INCREMENT,
  `HostName` varchar(255) NOT NULL,
  `HostType` varchar(25) DEFAULT NULL,
  `HostEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`HostID`),
  KEY `hosttypefor_idx` (`HostType`),
  CONSTRAINT `hosttypefor` FOREIGN KEY (`HostType`) REFERENCES `eventhosttype` (`HostType`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `eventhosttype`
--

DROP TABLE IF EXISTS `eventhosttype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventhosttype` (
  `HostType` varchar(255) NOT NULL,
  PRIMARY KEY (`HostType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `eventnames`
--

DROP TABLE IF EXISTS `eventnames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventnames` (
  `EventID` int(11) NOT NULL AUTO_INCREMENT,
  `EventName` varchar(255) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `PointValue` int(11) NOT NULL,
  `DoublePoints` tinyint(1) DEFAULT '0',
  `SemesterGiveaway` tinyint(1) DEFAULT '0',
  `DoNotTotal` tinyint(1) DEFAULT '0',
  `HostID` int(11) DEFAULT NULL,
  PRIMARY KEY (`EventID`),
  KEY `PointValue_index` (`PointValue`),
  KEY `datetoevent_idx` (`EventDate`),
  KEY `hosttoevent_idx` (`HostID`),
  CONSTRAINT `eventtodate` FOREIGN KEY (`EventDate`) REFERENCES `datestosemesters` (`Date`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `hosttoevent` FOREIGN KEY (`HostID`) REFERENCES `eventhosts` (`HostID`)
) ENGINE=InnoDB AUTO_INCREMENT=699 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `eventsperperson`
--

DROP TABLE IF EXISTS `eventsperperson`;
/*!50001 DROP VIEW IF EXISTS `eventsperperson`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `eventsperperson` AS SELECT 
 1 AS `events`,
 1 AS `semester`,
 1 AS `EmailAddress`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `finaltiers`
--

DROP TABLE IF EXISTS `finaltiers`;
/*!50001 DROP VIEW IF EXISTS `finaltiers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `finaltiers` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`,
 1 AS `ranking`,
 1 AS `tierone`,
 1 AS `tiertwo`,
 1 AS `tierthree`,
 1 AS `tier`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `finaltiersall`
--

DROP TABLE IF EXISTS `finaltiersall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `finaltiersall` (
  `EmailAddress` varchar(255) DEFAULT NULL,
  `Points` int(11) DEFAULT NULL,
  `Semester` varchar(12) DEFAULT NULL,
  `Faculty` tinyint(1) DEFAULT NULL,
  `Senator` tinyint(1) DEFAULT NULL,
  `CheckSort` tinyint(1) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `tierone` int(11) DEFAULT NULL,
  `tiertwo` int(11) DEFAULT NULL,
  `tierthree` int(11) DEFAULT NULL,
  `tier` varchar(28) DEFAULT NULL,
  `tableidfinaltiers` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `finaltiersallid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`finaltiersallid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `finaltiersscaled`
--

DROP TABLE IF EXISTS `finaltiersscaled`;
/*!50001 DROP VIEW IF EXISTS `finaltiersscaled`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `finaltiersscaled` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `tier`,
 1 AS `StudentFirstName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `idflags`
--

DROP TABLE IF EXISTS `idflags`;
/*!50001 DROP VIEW IF EXISTS `idflags`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `idflags` AS SELECT 
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `EmailAddress`,
 1 AS `Senator`,
 1 AS `Faculty`,
 1 AS `StudentID`,
 1 AS `idflag`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `osiexport`
--

DROP TABLE IF EXISTS `osiexport`;
/*!50001 DROP VIEW IF EXISTS `osiexport`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `osiexport` AS SELECT 
 1 AS `ScannerLinkAddressOuter`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pointpickupmerged`
--

DROP TABLE IF EXISTS `pointpickupmerged`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pointpickupmerged` (
  `EmailAddress` varchar(255) NOT NULL,
  `Points` int(11) DEFAULT NULL,
  `Semester` varchar(12) DEFAULT NULL,
  `Faculty` tinyint(1) DEFAULT NULL,
  `Senator` tinyint(1) DEFAULT NULL,
  `CheckSort` tinyint(1) DEFAULT NULL,
  `ranking` int(11) DEFAULT NULL,
  `tierone` int(11) DEFAULT NULL,
  `tiertwo` int(11) DEFAULT NULL,
  `tierthree` int(11) DEFAULT NULL,
  `tier` varchar(28) DEFAULT NULL,
  `EmailAddress2` varchar(255) DEFAULT NULL,
  `Points2` int(11) DEFAULT NULL,
  `tier2` varchar(28) DEFAULT NULL,
  `EventName` varchar(255) DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `currentsemester` varchar(12) DEFAULT NULL,
  `StudentLastName` varchar(255) DEFAULT NULL,
  `StudentFirstName` varchar(255) DEFAULT NULL,
  `StudentID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EmailAddress`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `pointpickupsalltogether`
--

DROP TABLE IF EXISTS `pointpickupsalltogether`;
/*!50001 DROP VIEW IF EXISTS `pointpickupsalltogether`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointpickupsalltogether` AS SELECT 
 1 AS `EmailAddress2`,
 1 AS `Points2`,
 1 AS `tier2`,
 1 AS `EventName`,
 1 AS `EventDate`,
 1 AS `currentsemester`,
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `StudentID`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pointpickupsalltogethermerged`
--

DROP TABLE IF EXISTS `pointpickupsalltogethermerged`;
/*!50001 DROP VIEW IF EXISTS `pointpickupsalltogethermerged`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointpickupsalltogethermerged` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`,
 1 AS `ranking`,
 1 AS `tierone`,
 1 AS `tiertwo`,
 1 AS `tierthree`,
 1 AS `tier`,
 1 AS `EmailAddress2`,
 1 AS `Points2`,
 1 AS `tier2`,
 1 AS `EventName`,
 1 AS `EventDate`,
 1 AS `currentsemester`,
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `StudentID`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pointsattierone`
--

DROP TABLE IF EXISTS `pointsattierone`;
/*!50001 DROP VIEW IF EXISTS `pointsattierone`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointsattierone` AS SELECT 
 1 AS `tierone`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pointsattierthree`
--

DROP TABLE IF EXISTS `pointsattierthree`;
/*!50001 DROP VIEW IF EXISTS `pointsattierthree`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointsattierthree` AS SELECT 
 1 AS `tierthree`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pointsattiertwo`
--

DROP TABLE IF EXISTS `pointsattiertwo`;
/*!50001 DROP VIEW IF EXISTS `pointsattiertwo`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointsattiertwo` AS SELECT 
 1 AS `tiertwo`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `prizes`
--

DROP TABLE IF EXISTS `prizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prizes` (
  `Semester` varchar(12) DEFAULT NULL,
  `TierName` varchar(12) DEFAULT NULL,
  `TierNum` int(11) NOT NULL,
  `PrizeDescription` varchar(255) DEFAULT NULL,
  `PrizeAmount` decimal(12,2) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `TierNum_index` (`TierNum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `prizesfinaltotals`
--

DROP TABLE IF EXISTS `prizesfinaltotals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prizesfinaltotals` (
  `ID` int(11) NOT NULL,
  `Semester` varchar(12) DEFAULT NULL,
  `StudentEmail` varchar(255) DEFAULT NULL,
  `TotalPoints` int(11) NOT NULL,
  `Tier` varchar(255) DEFAULT NULL,
  `ReceivedPrize` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `TotalPoints_index` (`TotalPoints`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `randomkeys`
--

DROP TABLE IF EXISTS `randomkeys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `randomkeys` (
  `email` varchar(255) NOT NULL,
  `randomkeycol` text,
  PRIMARY KEY (`email`),
  CONSTRAINT `EmailLinktoRandom` FOREIGN KEY (`email`) REFERENCES `studentlisting` (`EmailAddress`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `randomkeysscannerlisting`
--

DROP TABLE IF EXISTS `randomkeysscannerlisting`;
/*!50001 DROP VIEW IF EXISTS `randomkeysscannerlisting`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `randomkeysscannerlisting` AS SELECT 
 1 AS `EventName`,
 1 AS `EventDate`,
 1 AS `PointValue`,
 1 AS `Semester`,
 1 AS `randomkeycol`,
 1 AS `HostName`,
 1 AS `StudentFirstName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `randomkeyswithlink`
--

DROP TABLE IF EXISTS `randomkeyswithlink`;
/*!50001 DROP VIEW IF EXISTS `randomkeyswithlink`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `randomkeyswithlink` AS SELECT 
 1 AS `email`,
 1 AS `StudentID`,
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `Senator`,
 1 AS `Faculty`,
 1 AS `link`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `scanner`
--

DROP TABLE IF EXISTS `scanner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scanner` (
  `ScanNumID` int(11) NOT NULL AUTO_INCREMENT,
  `EventID` int(11) NOT NULL,
  `Scanner` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ScanNumID`),
  KEY `EventID_index` (`EventID`),
  CONSTRAINT `scannertoevent` FOREIGN KEY (`EventID`) REFERENCES `eventnames` (`EventID`)
) ENGINE=InnoDB AUTO_INCREMENT=52758 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `scannerinnerhasid`
--

DROP TABLE IF EXISTS `scannerinnerhasid`;
/*!50001 DROP VIEW IF EXISTS `scannerinnerhasid`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `scannerinnerhasid` AS SELECT 
 1 AS `Email`,
 1 AS `ScannerLinkAddress`,
 1 AS `EmailAddress`,
 1 AS `StudentID`,
 1 AS `checking`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `scannerinnerneedsid`
--

DROP TABLE IF EXISTS `scannerinnerneedsid`;
/*!50001 DROP VIEW IF EXISTS `scannerinnerneedsid`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `scannerinnerneedsid` AS SELECT 
 1 AS `Email`,
 1 AS `ScannerLinkAddress`,
 1 AS `EmailAddress`,
 1 AS `StudentID`,
 1 AS `checking`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `scannerlinkinner`
--

DROP TABLE IF EXISTS `scannerlinkinner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scannerlinkinner` (
  `Email` varchar(255) DEFAULT NULL,
  `ScannerLinkAddress` varchar(255) NOT NULL,
  PRIMARY KEY (`ScannerLinkAddress`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `scannerlinkouter`
--

DROP TABLE IF EXISTS `scannerlinkouter`;
/*!50001 DROP VIEW IF EXISTS `scannerlinkouter`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `scannerlinkouter` AS SELECT 
 1 AS `Scanner`,
 1 AS `ScannerLinkAddressOuter`,
 1 AS `Scan`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `scanneroutertoinnerlink`
--

DROP TABLE IF EXISTS `scanneroutertoinnerlink`;
/*!50001 DROP VIEW IF EXISTS `scanneroutertoinnerlink`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `scanneroutertoinnerlink` AS SELECT 
 1 AS `innerlink`,
 1 AS `outerlink`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `scriptruns`
--

DROP TABLE IF EXISTS `scriptruns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scriptruns` (
  `ScriptID` int(11) NOT NULL AUTO_INCREMENT,
  `ScriptRunDateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ScriptNum` int(11) NOT NULL,
  `manualzeroautoone` tinyint(1) DEFAULT '1',
  `beginzeroendone` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ScriptID`)
) ENGINE=InnoDB AUTO_INCREMENT=5199 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `scriptrunsdictionary`
--

DROP TABLE IF EXISTS `scriptrunsdictionary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scriptrunsdictionary` (
  `idscriptrunsdictionary` int(11) NOT NULL AUTO_INCREMENT,
  `Script Name` varchar(255) NOT NULL,
  `scriptcall` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idscriptrunsdictionary`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `semester`
--

DROP TABLE IF EXISTS `semester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semester` (
  `Semester` varchar(12) NOT NULL,
  `BeginDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `Goal` int(11) NOT NULL,
  `SchoolYear` varchar(12) DEFAULT NULL,
  `SemType` varchar(12) DEFAULT NULL,
  `SemShort` varchar(12) DEFAULT NULL,
  `SemIDNum` int(11) DEFAULT NULL,
  PRIMARY KEY (`Semester`),
  UNIQUE KEY `SemIDNum_UNIQUE` (`SemIDNum`),
  KEY `Goal_index` (`Goal`),
  KEY `SemtypeFor_idx` (`SemType`),
  KEY `Semtoyear_idx` (`SchoolYear`),
  CONSTRAINT `Semtoyear` FOREIGN KEY (`SchoolYear`) REFERENCES `years` (`SchoolYear`),
  CONSTRAINT `SemtypeFor` FOREIGN KEY (`SemType`) REFERENCES `semestertype` (`SemesterType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `semesterpoints`
--

DROP TABLE IF EXISTS `semesterpoints`;
/*!50001 DROP VIEW IF EXISTS `semesterpoints`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `semesterpoints` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `semesterpointsranked`
--

DROP TABLE IF EXISTS `semesterpointsranked`;
/*!50001 DROP VIEW IF EXISTS `semesterpointsranked`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `semesterpointsranked` AS SELECT 
 1 AS `EmailAddress`,
 1 AS `Points`,
 1 AS `Semester`,
 1 AS `Faculty`,
 1 AS `Senator`,
 1 AS `CheckSort`,
 1 AS `ranking`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `semestertype`
--

DROP TABLE IF EXISTS `semestertype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semestertype` (
  `SemesterType` varchar(12) NOT NULL,
  PRIMARY KEY (`SemesterType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `studentlisting`
--

DROP TABLE IF EXISTS `studentlisting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `studentlisting` (
  `StudentLastName` varchar(255) DEFAULT NULL,
  `StudentFirstName` varchar(255) DEFAULT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Senator` tinyint(1) DEFAULT NULL,
  `Faculty` tinyint(1) DEFAULT NULL,
  `StudentID` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`EmailAddress`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `studentlistinglink`
--

DROP TABLE IF EXISTS `studentlistinglink`;
/*!50001 DROP VIEW IF EXISTS `studentlistinglink`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `studentlistinglink` AS SELECT 
 1 AS `StudentLastName`,
 1 AS `StudentFirstName`,
 1 AS `EmailAddress`,
 1 AS `Senator`,
 1 AS `Faculty`,
 1 AS `StudentID`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tieramounts`
--

DROP TABLE IF EXISTS `tieramounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tieramounts` (
  `TierAmount` int(11) DEFAULT NULL,
  `TierType` varchar(45) NOT NULL,
  PRIMARY KEY (`TierType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `tierpickeduppercentages`
--

DROP TABLE IF EXISTS `tierpickeduppercentages`;
/*!50001 DROP VIEW IF EXISTS `tierpickeduppercentages`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tierpickeduppercentages` AS SELECT 
 1 AS `tier`,
 1 AS `pickedup`,
 1 AS `eligible`,
 1 AS `percentpickedup`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `updatescannerbreaks`
--

DROP TABLE IF EXISTS `updatescannerbreaks`;
/*!50001 DROP VIEW IF EXISTS `updatescannerbreaks`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `updatescannerbreaks` AS SELECT 
 1 AS `Scanner`,
 1 AS `IDNum`,
 1 AS `Checks`,
 1 AS `Len`,
 1 AS `Six`,
 1 AS `Sixlen`,
 1 AS `ScanID`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `updatescannerbreaksscanid`
--

DROP TABLE IF EXISTS `updatescannerbreaksscanid`;
/*!50001 DROP VIEW IF EXISTS `updatescannerbreaksscanid`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `updatescannerbreaksscanid` AS SELECT 
 1 AS `ScanID`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `years`
--

DROP TABLE IF EXISTS `years`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `years` (
  `SchoolYear` varchar(12) NOT NULL,
  `end` year(4) NOT NULL,
  `begin` year(4) NOT NULL,
  PRIMARY KEY (`SchoolYear`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'ppv0008003'
--
/*!50106 SET @save_time_zone= @@TIME_ZONE */ ;
/*!50106 DROP EVENT IF EXISTS `createstudentlisting` */;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`rce423`@`%`*/ /*!50106 EVENT `createstudentlisting` ON SCHEDULE EVERY 4 HOUR STARTS '2018-09-18 01:28:23' ENDS '2022-09-18 01:28:23' ON COMPLETION NOT PRESERVE ENABLE DO CALL `ppv0008003`.`updatestudentlisting`() */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
/*!50106 DROP EVENT IF EXISTS `duplicateelimination` */;;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`root`@`localhost`*/ /*!50106 EVENT `duplicateelimination` ON SCHEDULE EVERY 2 HOUR STARTS '2017-02-10 01:00:00' ENDS '2020-02-28 01:00:00' ON COMPLETION NOT PRESERVE ENABLE DO begin
      CALL duplicatesauto();
      end */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
/*!50106 DROP EVENT IF EXISTS `scannertopubliccreation` */;;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`rce423`@`%`*/ /*!50106 EVENT `scannertopubliccreation` ON SCHEDULE EVERY 2 HOUR STARTS '2018-09-18 01:19:38' ENDS '2021-09-18 01:19:38' ON COMPLETION NOT PRESERVE ENABLE DO CALL `ppv0008003`.`scannertopublicmanual`() */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
DELIMITER ;
/*!50106 SET TIME_ZONE= @save_time_zone */ ;

--
-- Dumping routines for database 'ppv0008003'
--
/*!50003 DROP FUNCTION IF EXISTS `func_inc_var_session` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `func_inc_var_session`() RETURNS int(11)
    NO SQL
begin
      SET @var := @var + 1;
      return @var;
     end ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP FUNCTION IF EXISTS `numbergone` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `numbergone`(oldstring VARCHAR(255)) RETURNS varchar(255) CHARSET utf8
    NO SQL
BEGIN
DECLARE endstring varchar(1);
declare gotoif tinyint(1);
declare exportme varchar(255);
set endstring =right(oldstring, 1);
set gotoif=0;
if endstring='1' then
set gotoif=1;
end if;
if endstring='2' then
set gotoif=1;
end if;
if endstring='3' then
set gotoif=1;
end if;
if endstring='4' then
set gotoif=1;
end if;
if endstring='5' then
set gotoif=1;
end if;
if endstring='6' then
set gotoif=1;
end if;
if endstring='7' then
set gotoif=1;
end if;
if endstring='0' then
set gotoif=1;
end if;
if endstring='8' then
set gotoif=1;
end if;
if endstring='9' then
set gotoif=1;
end if;
if gotoif=0 then
set exportme = oldstring;
end if;
if gotoif=1 then
while gotoif=1 do
set oldstring = left(oldstring, length(oldstring)-1);
set endstring =right(oldstring, 1);
set gotoif=0;
if endstring='1' then
set gotoif=1;
end if;
if endstring='2' then
set gotoif=1;
end if;
if endstring='3' then
set gotoif=1;
end if;
if endstring='4' then
set gotoif=1;
end if;
if endstring='5' then
set gotoif=1;
end if;
if endstring='6' then
set gotoif=1;
end if;
if endstring='7' then
set gotoif=1;
end if;
if endstring='0' then
set gotoif=1;
end if;
if endstring='8' then
set gotoif=1;
end if;
if endstring='9' then
set gotoif=1;
end if;
if gotoif=0 then
set exportme = oldstring;
end if;
end while;
end if;
RETURN exportme;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `builddates` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `builddates`()
BEGIN
 INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (6,0);
truncate datestosemesters;
set @varsemesters = (select count(*) from semester where SemType!='Other');
set @varloopsem=@varsemesters;
while @varloopsem!=0 do
set @varsemname= (select semester from semester where SemIDNum=@varloopsem);
set @varsemend= (select EndDate from semester where SemIDNum=@varloopsem);
set @varsembegin = (select BeginDate from semester where SemIDNum=@varloopsem);
set @vardiff = (SELECT DATEDIFF(@varsemend, @varsembegin));
if @vardiff>0 then 
set @vardiffloop = @vardiff;
while @vardiffloop>=0 do
set @vardate= (SELECT DATE_ADD(@varsembegin, INTERVAL @vardiffloop DAY));
set @vardiffloop = @vardiffloop - 1;
INSERT INTO `ppv0008003`.`datestosemesters` (`Date`, `Semester`) VALUES (@vardate, @varsemname);
end while;
set @varloopsem=@varloopsem-1;
end if;
end while;
 INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (6,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buildsems` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buildsems`()
BEGIN
set @varcountofyears=(select count(*) from years where begin !=0);
set @varcountofsems=(select count(*) from semester where SemType!='Other');
set @varshouldhavesems=@varcountofyears*3;
select @varcountofyears, @varcountofsems, @varshouldhavesems;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buildyears` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buildyears`()
BEGIN
TRUNCATE TABLE ppv0008003.years;
INSERT INTO `ppv0008003`.`years` (`SchoolYear`, `end`, `begin`) VALUES ('2013-2014', 2014, 2013);
INSERT INTO `ppv0008003`.`years` (`SchoolYear`, `end`, `begin`) VALUES ('0000-0000', 0, 0);
SET @varbegin= (select min(years.begin) as oldyear from years where end!=0);
SET @varcurrent= (SELECT YEAR(curdate()) as oldyear)+1;
SET @varcountyears= (SELECT count(*) as oldyear from years where end!=0);
SET @varsuposedamountofyears= @varcurrent-@varbegin;
SET @varloop=@varbegin;
IF (@varsuposedamountofyears>@varcountyears) THEN
    WHILE (@varsuposedamountofyears>@varcountyears) DO
		
        SET @varverify= (SELECT count(*) as oldyear from years where begin= (@varloop) );
        if (@varverify=0) THEN
			SET @varend=@varloop+1;
			SET @varname=CONCAT(@varloop, '-', @varend);
			INSERT INTO `ppv0008003`.`years`(`SchoolYear`, `end`, `begin`) VALUES (@varname, @varend, @varloop);
        END IF;
        SET @varloop=@varloop+1;
        SET @varbegin= (select min(years.begin) as oldyear from years where end!=0);
		SET @varcountyears= (SELECT count(*) as oldyear from years where end!=0);
		SET @varsuposedamountofyears= @varcurrent-@varbegin;
	END WHILE;
  END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `buildyearsandsems` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `buildyearsandsems`()
BEGIN
call buildyears();
call buildsems();
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `duplicates` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `duplicates`()
BEGIN
set @varwhilebreak =0;
set @varwhilebreak= (select count(*) from duplicatescannerids);
if @varwhilebreak!=0 then
WHILE @varwhilebreak!=0 DO
   INSERT INTO `ppv0008003`.`duplicates`
(`ScanIDNew`,
`EventIDNew`,
`EventIDOld`)
SELECT *
FROM duplicatesfull order by oldyear limit 1;
   UPDATE `ppv0008003`.`scanner`
SET
`EventID` = 340
WHERE `ScanNumID` = (select oldyear from duplicatescannerids order by oldyear limit 1);
set @varwhilebreak=@varwhilebreak-1;
if @varwhilebreak=1 then
set @varwhilebreak= (select count(*) from duplicatescannerids);
end if;
END WHILE;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `duplicatesauto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `duplicatesauto`()
BEGIN
 INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (1,0);
call duplicates();

    INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (1,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `duplicatesmanual` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `duplicatesmanual`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (8,0);
call duplicates();
   INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (8,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `finaltiersappend` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`ryan.evaul@snhu.edu`@`%` PROCEDURE `finaltiersappend`()
BEGIN
call pullranks();
INSERT INTO `ppv0008003`.`finaltiersall`(`EmailAddress`,`Points`,`Semester`,`Faculty`,`Senator`,`CheckSort`,`ranking`,`tierone`,`tiertwo`,`tierthree`,`tier`) select * from finaltiers;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `pullranks` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `pullranks`()
BEGIN
SET @var=0;
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (2,0);
INSERT INTO `ppv0008003`.`currentrankingraw`
(`EmailAddress`,
`Points`,
`Semester`,
`Faculty`,
`Senator`,
`CheckSort`,
`ranking`)
SELECT *
FROM semesterpointsranked order by points desc;
    INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (2,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `pulltierinfo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `pulltierinfo`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (3,0);
call duplicatesmanual();
call pullranks();
    INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (3,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `scannertopublic` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`rce423`@`%` PROCEDURE `scannertopublic`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (7,0);
truncate ppv0008004.pubscanner;
INSERT INTO ppv0008004.pubscanner (PubEventName, PubEventDate, PubPointValue, PubSemester, Pubrandomkeycol, PubFirstName, PubEventHost) 
SELECT EventName, EventDate, PointValue, Semester, randomkeycol, StudentFirstName, HostName FROM ppv0008003.randomkeysscannerlisting;
truncate ppv0008004.pubscannergraphs;
INSERT INTO ppv0008004.pubscannergraphs (PubEventName, PubEventDate, PubPointValue, PubSemester, Pubrandomkeycol, PubFirstName, PubEventHost) 
SELECT EventName, EventDate, PointValue, Semester, randomkeycol, StudentFirstName, HostName FROM ppv0008003.randomkeysscannerlisting;
truncate ppv0008004.currentsem;
INSERT INTO ppv0008004.currentsem (sem) 
SELECT currentsemesteractual.currentsemesteractual FROM ppv0008003.currentsemesteractual;

INSERT INTO ppv0008004.pubscanner (PubEventName, PubEventDate, PubPointValue, PubSemester, Pubrandomkeycol, PubFirstName, PubEventHost) 
SELECT 'No Events This Semester', NOW(), 0, sem, Pubrandomkeycol, PubFirstName, 'None'  FROM ppv0008004.allpeopleincurrentsemesterwithsem;

truncate ppv0008004.pubsemester;
INSERT INTO ppv0008004.pubsemester (Semester, BeginDate, EndDate, SchoolYear) 
SELECT Semester, BeginDate, EndDate, SchoolYear FROM ppv0008003.semester;

INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (7,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `scannertopublicauto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `scannertopublicauto`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (10,0);
call scannertopublic();
   INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (10,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `scannertopublicmanual` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `scannertopublicmanual`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (9,0);
call scannertopublic();
   INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (9,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `updatecurrentrankingraw` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`ryan.evaul@snhu.edu`@`%` PROCEDURE `updatecurrentrankingraw`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (4,0);
truncate currentrankingraw;
call pulltierinfo();
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (4,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `updatestudentlisting` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `updatestudentlisting`()
BEGIN
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (5,0);
INSERT INTO `ppv0008003`.`scannerlinkinner`
(`Email`,
`ScannerLinkAddress`)
select * from scanneroutertoinnerlink;

SET SQL_SAFE_UPDATES = 0;
delete FROM ppv0008003.studentlisting where senator=0 and faculty =0;
SET SQL_SAFE_UPDATES = 1;
INSERT INTO `ppv0008003`.`studentlisting`
(`StudentLastName`,
`StudentFirstName`,
`EmailAddress`,
`Senator`,
`Faculty`,
`StudentID`)
select * from studentlistinglink;
INSERT INTO `ppv0008003`.`scriptruns` (`ScriptNum`, beginzeroendone) VALUES (5,1);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Current Database: `ppv0008004`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ppv0008004` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ppv0008004`;

--
-- Temporary view structure for view `allpeople`
--

DROP TABLE IF EXISTS `allpeople`;
/*!50001 DROP VIEW IF EXISTS `allpeople`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `allpeople` AS SELECT 
 1 AS `Pubrandomkeycol`,
 1 AS `PubFirstName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `allpeopleincurrentsem`
--

DROP TABLE IF EXISTS `allpeopleincurrentsem`;
/*!50001 DROP VIEW IF EXISTS `allpeopleincurrentsem`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `allpeopleincurrentsem` AS SELECT 
 1 AS `Pubrandomkeycol`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `allpeopleincurrentsemesterwithsem`
--

DROP TABLE IF EXISTS `allpeopleincurrentsemesterwithsem`;
/*!50001 DROP VIEW IF EXISTS `allpeopleincurrentsemesterwithsem`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `allpeopleincurrentsemesterwithsem` AS SELECT 
 1 AS `Pubrandomkeycol`,
 1 AS `sem`,
 1 AS `PubFirstName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `allpeoplenotincurrentsem`
--

DROP TABLE IF EXISTS `allpeoplenotincurrentsem`;
/*!50001 DROP VIEW IF EXISTS `allpeoplenotincurrentsem`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `allpeoplenotincurrentsem` AS SELECT 
 1 AS `Pubrandomkeycol`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `currentsem`
--

DROP TABLE IF EXISTS `currentsem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `currentsem` (
  `sem` varchar(12) NOT NULL,
  PRIMARY KEY (`sem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `pointspersemester`
--

DROP TABLE IF EXISTS `pointspersemester`;
/*!50001 DROP VIEW IF EXISTS `pointspersemester`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointspersemester` AS SELECT 
 1 AS `Pubrandomkeycol`,
 1 AS `PubSemester`,
 1 AS `totpoints`,
 1 AS `totevents`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pointspersemesterordered`
--

DROP TABLE IF EXISTS `pointspersemesterordered`;
/*!50001 DROP VIEW IF EXISTS `pointspersemesterordered`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pointspersemesterordered` AS SELECT 
 1 AS `Pubrandomkeycol`,
 1 AS `PubSemester`,
 1 AS `totpoints`,
 1 AS `totevents`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `pubscanner`
--

DROP TABLE IF EXISTS `pubscanner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pubscanner` (
  `PubEventName` varchar(255) DEFAULT NULL,
  `PubEventDate` date DEFAULT NULL,
  `PubPointValue` int(11) DEFAULT NULL,
  `PubSemester` varchar(12) DEFAULT NULL,
  `Pubrandomkeycol` text,
  `PubID` int(11) NOT NULL AUTO_INCREMENT,
  `PubFirstName` varchar(255) DEFAULT NULL,
  `PubEventHost` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PubID`)
) ENGINE=InnoDB AUTO_INCREMENT=71809 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pubscannergraphs`
--

DROP TABLE IF EXISTS `pubscannergraphs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pubscannergraphs` (
  `PubEventName` varchar(255) DEFAULT NULL,
  `PubEventDate` date DEFAULT NULL,
  `PubPointValue` int(11) DEFAULT NULL,
  `PubSemester` varchar(12) DEFAULT NULL,
  `Pubrandomkeycol` text,
  `PubID` int(11) NOT NULL AUTO_INCREMENT,
  `PubFirstName` varchar(255) DEFAULT NULL,
  `PubEventHost` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PubID`)
) ENGINE=InnoDB AUTO_INCREMENT=45403 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pubsemester`
--

DROP TABLE IF EXISTS `pubsemester`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pubsemester` (
  `Semester` varchar(12) NOT NULL,
  `BeginDate` date DEFAULT NULL,
  `EndDate` date DEFAULT NULL,
  `SchoolYear` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`Semester`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Temporary view structure for view `pubtotalpointsandeventcurrentsem`
--

DROP TABLE IF EXISTS `pubtotalpointsandeventcurrentsem`;
/*!50001 DROP VIEW IF EXISTS `pubtotalpointsandeventcurrentsem`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pubtotalpointsandeventcurrentsem` AS SELECT 
 1 AS `TotalEvents`,
 1 AS `TotalPoints`,
 1 AS `Pubrandomkeycol`,
 1 AS `PubSemester`,
 1 AS `PubFirstName`,
 1 AS `sem`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `pubtotalpointsandevents`
--

DROP TABLE IF EXISTS `pubtotalpointsandevents`;
/*!50001 DROP VIEW IF EXISTS `pubtotalpointsandevents`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `pubtotalpointsandevents` AS SELECT 
 1 AS `TotalEvents`,
 1 AS `TotalPoints`,
 1 AS `Pubrandomkeycol`,
 1 AS `PubSemester`,
 1 AS `PubFirstName`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `totpointsever`
--

DROP TABLE IF EXISTS `totpointsever`;
/*!50001 DROP VIEW IF EXISTS `totpointsever`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `totpointsever` AS SELECT 
 1 AS `Pubrandomkeycol`,
 1 AS `totpoints`,
 1 AS `totevents`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'ppv0008004'
--

--
-- Dumping routines for database 'ppv0008004'
--

--
-- Current Database: `loginsystem`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `loginsystem` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `loginsystem`;

--
-- Temporary view structure for view `adminmembers`
--

DROP TABLE IF EXISTS `adminmembers`;
/*!50001 DROP VIEW IF EXISTS `adminmembers`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `adminmembers` AS SELECT 
 1 AS `id`,
 1 AS `username`,
 1 AS `password`,
 1 AS `email`,
 1 AS `verified`,
 1 AS `mod_timestamp`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `loginattempts`
--

DROP TABLE IF EXISTS `loginattempts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loginattempts` (
  `IP` varchar(20) NOT NULL,
  `Attempts` int(11) NOT NULL,
  `LastLogin` datetime NOT NULL,
  `Username` varchar(65) DEFAULT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` char(23) NOT NULL,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(65) NOT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `mod_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping events for database 'loginsystem'
--
/*!50106 SET @save_time_zone= @@TIME_ZONE */ ;
/*!50106 DROP EVENT IF EXISTS `cleanupOldDeleted` */;
DELIMITER ;;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;;
/*!50003 SET character_set_client  = utf8 */ ;;
/*!50003 SET character_set_results = utf8 */ ;;
/*!50003 SET collation_connection  = utf8_general_ci */ ;;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;;
/*!50003 SET @saved_time_zone      = @@time_zone */ ;;
/*!50003 SET time_zone             = 'SYSTEM' */ ;;
/*!50106 CREATE*/ /*!50117 DEFINER=`setup`@`%`*/ /*!50106 EVENT `cleanupOldDeleted` ON SCHEDULE EVERY 1 DAY STARTS '2017-11-30 21:44:35' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Removes deleted records older than 30 days.' DO BEGIN DELETE FROM loginsystemdeleted_members WHERE mod_timestamp < DATE_SUB(NOW(), INTERVAL 30 DAY); END */ ;;
/*!50003 SET time_zone             = @saved_time_zone */ ;;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;;
/*!50003 SET character_set_client  = @saved_cs_client */ ;;
/*!50003 SET character_set_results = @saved_cs_results */ ;;
/*!50003 SET collation_connection  = @saved_col_connection */ ;;
DELIMITER ;
/*!50106 SET TIME_ZONE= @save_time_zone */ ;

--
-- Dumping routines for database 'loginsystem'
--

--
-- Current Database: `ppv0008003`
--

USE `ppv0008003`;

--
-- Final view structure for view `NeedRamdomKey`
--

/*!50001 DROP VIEW IF EXISTS `NeedRamdomKey`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `NeedRamdomKey` AS select `studentlisting`.`StudentLastName` AS `StudentLastName`,`studentlisting`.`StudentFirstName` AS `StudentFirstName`,`studentlisting`.`EmailAddress` AS `EmailAddress`,`studentlisting`.`StudentID` AS `StudentID` from (`studentlisting` left join `randomkeys` on((`randomkeys`.`email` = `studentlisting`.`EmailAddress`))) where isnull(`randomkeys`.`email`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `allpickupscurrentsemester`
--

/*!50001 DROP VIEW IF EXISTS `allpickupscurrentsemester`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `allpickupscurrentsemester` AS select `eventnames`.`EventName` AS `EventName`,`eventnames`.`EventDate` AS `EventDate`,`currentsemester`.`currentsemester` AS `currentsemester`,`scannerlinkouter`.`ScannerLinkAddressOuter` AS `scannerlinkaddressouter`,`scannerlinkinner`.`Email` AS `email` from (((((`eventnames` join `datestosemesters` on((`datestosemesters`.`Date` = `eventnames`.`EventDate`))) join `currentsemester` on((`datestosemesters`.`Semester` = `currentsemester`.`currentsemester`))) join `scanner` on((`scanner`.`EventID` = `eventnames`.`EventID`))) join `scannerlinkouter` on((`scanner`.`Scanner` = `scannerlinkouter`.`Scanner`))) join `scannerlinkinner` on((`scannerlinkinner`.`ScannerLinkAddress` = `scannerlinkouter`.`ScannerLinkAddressOuter`))) where (`eventnames`.`SemesterGiveaway` = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `alltimepointcalculations`
--

/*!50001 DROP VIEW IF EXISTS `alltimepointcalculations`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `alltimepointcalculations` AS select `studentlisting`.`EmailAddress` AS `EmailAddress`,sum(`eventnames`.`PointValue`) AS `Points`,`datestosemesters`.`Semester` AS `Semester`,`studentlisting`.`Senator` AS `Senator`,`studentlisting`.`Faculty` AS `Faculty`,if((`studentlisting`.`Senator` = 1),1,if((`studentlisting`.`Faculty` = 1),1,0)) AS `CheckSort` from (((((`scanner` join `scannerlinkouter` on((`scanner`.`Scanner` = `scannerlinkouter`.`Scanner`))) join `scannerlinkinner` on((`scannerlinkouter`.`ScannerLinkAddressOuter` = `scannerlinkinner`.`ScannerLinkAddress`))) join `studentlisting` on((`scannerlinkinner`.`Email` = `studentlisting`.`EmailAddress`))) join `eventnames` on((`scanner`.`EventID` = `eventnames`.`EventID`))) join `datestosemesters` on((`eventnames`.`EventDate` = `datestosemesters`.`Date`))) where (`eventnames`.`DoNotTotal` = 0) group by `studentlisting`.`EmailAddress`,`datestosemesters`.`Semester` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `alltimepointcalculationsordered`
--

/*!50001 DROP VIEW IF EXISTS `alltimepointcalculationsordered`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `alltimepointcalculationsordered` AS select `alltimepointcalculations`.`EmailAddress` AS `EmailAddress`,`alltimepointcalculations`.`Points` AS `Points`,`alltimepointcalculations`.`Semester` AS `Semester`,`alltimepointcalculations`.`Faculty` AS `Faculty`,`alltimepointcalculations`.`Senator` AS `Senator`,`alltimepointcalculations`.`CheckSort` AS `CheckSort` from `alltimepointcalculations` order by `alltimepointcalculations`.`Points` desc,`alltimepointcalculations`.`EmailAddress` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `currentranking`
--

/*!50001 DROP VIEW IF EXISTS `currentranking`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `currentranking` AS select `currentrankingallsemestersmax`.`EmailAddress` AS `EmailAddress`,`currentrankingallsemestersmax`.`Points` AS `Points`,`currentrankingallsemestersmax`.`Semester` AS `Semester`,`currentrankingallsemestersmax`.`Faculty` AS `Faculty`,`currentrankingallsemestersmax`.`Senator` AS `Senator`,`currentrankingallsemestersmax`.`CheckSort` AS `CheckSort`,`currentrankingallsemestersmax`.`ranking` AS `ranking`,`currentrankingallsemestersmax`.`currentrankingtableid` AS `currentrankingtableid`,`currentrankingallsemestersmax`.`modtime` AS `modtime` from `currentrankingallsemestersmax` where (`currentrankingallsemestersmax`.`Semester` = (select `currentrankingallsemestersmax`.`Semester` from `currentsemester` limit 1)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `currentrankingallsemestersmax`
--

/*!50001 DROP VIEW IF EXISTS `currentrankingallsemestersmax`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `currentrankingallsemestersmax` AS select `currentrankingraw`.`EmailAddress` AS `EmailAddress`,`currentrankingraw`.`Points` AS `Points`,`currentrankingraw`.`Semester` AS `Semester`,`currentrankingraw`.`Faculty` AS `Faculty`,`currentrankingraw`.`Senator` AS `Senator`,`currentrankingraw`.`CheckSort` AS `CheckSort`,`currentrankingraw`.`ranking` AS `ranking`,`currentrankingraw`.`currentrankingtableid` AS `currentrankingtableid`,`currentrankingraw`.`modtime` AS `modtime` from `currentrankingraw` where `currentrankingraw`.`modtime` in (select max(`currentrankingraw`.`modtime`) AS `modtime` from `currentrankingraw`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `duplicatescannerids`
--

/*!50001 DROP VIEW IF EXISTS `duplicatescannerids`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `duplicatescannerids` AS select min(`scanner`.`ScanNumID`) AS `oldyear` from (((`scanner` join `scannerlinkouter` on((`scanner`.`Scanner` = `scannerlinkouter`.`Scanner`))) join `scannerlinkinner` on((`scannerlinkouter`.`ScannerLinkAddressOuter` = `scannerlinkinner`.`ScannerLinkAddress`))) join `studentlisting` on((`scannerlinkinner`.`Email` = `studentlisting`.`EmailAddress`))) where (`scanner`.`EventID` <> 340) group by `studentlisting`.`EmailAddress`,`scanner`.`EventID` having (count(`scanner`.`ScanNumID`) > 1) order by `oldyear` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `duplicatesfull`
--

/*!50001 DROP VIEW IF EXISTS `duplicatesfull`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `duplicatesfull` AS select `duplicatescannerids`.`oldyear` AS `oldyear`,340 AS `eventidnew`,`scanner`.`EventID` AS `EventID` from (`duplicatescannerids` join `scanner` on((`scanner`.`ScanNumID` = `duplicatescannerids`.`oldyear`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `eventsperperson`
--

/*!50001 DROP VIEW IF EXISTS `eventsperperson`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `eventsperperson` AS select count(0) AS `events`,`datestosemesters`.`Semester` AS `semester`,`studentlisting`.`EmailAddress` AS `EmailAddress` from (((((`scanner` join `scannerlinkouter` on((`scannerlinkouter`.`Scanner` = `scanner`.`Scanner`))) join `scannerlinkinner` on((`scannerlinkinner`.`ScannerLinkAddress` = `scannerlinkouter`.`ScannerLinkAddressOuter`))) join `studentlisting` on((`studentlisting`.`EmailAddress` = `scannerlinkinner`.`Email`))) join `eventnames` on((`scanner`.`EventID` = `eventnames`.`EventID`))) join `datestosemesters` on((`eventnames`.`EventDate` = `datestosemesters`.`Date`))) group by `studentlisting`.`EmailAddress`,`datestosemesters`.`Semester` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `finaltiers`
--

/*!50001 DROP VIEW IF EXISTS `finaltiers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `finaltiers` AS select `currentranking`.`EmailAddress` AS `EmailAddress`,`currentranking`.`Points` AS `Points`,`currentranking`.`Semester` AS `Semester`,`currentranking`.`Faculty` AS `Faculty`,`currentranking`.`Senator` AS `Senator`,`currentranking`.`CheckSort` AS `CheckSort`,`currentranking`.`ranking` AS `ranking`,`pointsattierone`.`tierone` AS `tierone`,`pointsattiertwo`.`tiertwo` AS `tiertwo`,`pointsattierthree`.`tierthree` AS `tierthree`,if((`currentranking`.`Points` >= `pointsattierone`.`tierone`),'Tier One',if((`currentranking`.`Points` >= `pointsattiertwo`.`tiertwo`),'Tier Two',if((`currentranking`.`Points` >= `pointsattierthree`.`tierthree`),'Tier Three','Not Eligible: Points Too Low'))) AS `tier` from (((`currentranking` join `pointsattierone`) join `pointsattiertwo`) join `pointsattierthree`) order by `currentranking`.`ranking` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `finaltiersscaled`
--

/*!50001 DROP VIEW IF EXISTS `finaltiersscaled`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `finaltiersscaled` AS select `finaltiers`.`EmailAddress` AS `EmailAddress`,`finaltiers`.`Points` AS `Points`,`finaltiers`.`Semester` AS `Semester`,`finaltiers`.`tier` AS `tier`,`studentlisting`.`StudentFirstName` AS `StudentFirstName` from (`finaltiers` join `studentlisting` on((`studentlisting`.`EmailAddress` = `finaltiers`.`EmailAddress`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `idflags`
--

/*!50001 DROP VIEW IF EXISTS `idflags`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `idflags` AS select `studentlisting`.`StudentLastName` AS `StudentLastName`,`studentlisting`.`StudentFirstName` AS `StudentFirstName`,`studentlisting`.`EmailAddress` AS `EmailAddress`,`studentlisting`.`Senator` AS `Senator`,`studentlisting`.`Faculty` AS `Faculty`,`studentlisting`.`StudentID` AS `StudentID`,if((left(`studentlisting`.`StudentID`,1) = '0'),1,if((left(`studentlisting`.`StudentID`,1) = '1'),1,if((left(`studentlisting`.`StudentID`,1) = '2'),1,if((left(`studentlisting`.`StudentID`,1) = '3'),1,if((left(`studentlisting`.`StudentID`,1) = '4'),1,if((left(`studentlisting`.`StudentID`,1) = '5'),1,if((left(`studentlisting`.`StudentID`,1) = '6'),1,if((left(`studentlisting`.`StudentID`,1) = '7'),1,if((left(`studentlisting`.`StudentID`,1) = '8'),1,if((left(`studentlisting`.`StudentID`,1) = '9'),1,0)))))))))) AS `idflag` from `studentlisting` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `osiexport`
--

/*!50001 DROP VIEW IF EXISTS `osiexport`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `osiexport` AS select `scannerlinkouter`.`ScannerLinkAddressOuter` AS `ScannerLinkAddressOuter` from (`scannerlinkouter` left join `scannerlinkinner` on((`scannerlinkouter`.`ScannerLinkAddressOuter` = `scannerlinkinner`.`ScannerLinkAddress`))) where isnull(`scannerlinkinner`.`ScannerLinkAddress`) group by `scannerlinkouter`.`ScannerLinkAddressOuter` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointpickupsalltogether`
--

/*!50001 DROP VIEW IF EXISTS `pointpickupsalltogether`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pointpickupsalltogether` AS select `studentlisting`.`EmailAddress` AS `EmailAddress2`,`finaltiers`.`Points` AS `Points2`,`finaltiers`.`tier` AS `tier2`,`allpickupscurrentsemester`.`EventName` AS `EventName`,`allpickupscurrentsemester`.`EventDate` AS `EventDate`,`allpickupscurrentsemester`.`currentsemester` AS `currentsemester`,`studentlisting`.`StudentLastName` AS `StudentLastName`,`studentlisting`.`StudentFirstName` AS `StudentFirstName`,`studentlisting`.`StudentID` AS `StudentID` from ((`finaltiers` join `allpickupscurrentsemester` on((`allpickupscurrentsemester`.`email` = `finaltiers`.`EmailAddress`))) join `studentlisting` on((`allpickupscurrentsemester`.`email` = `studentlisting`.`EmailAddress`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointpickupsalltogethermerged`
--

/*!50001 DROP VIEW IF EXISTS `pointpickupsalltogethermerged`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pointpickupsalltogethermerged` AS select `finaltiers`.`EmailAddress` AS `EmailAddress`,`finaltiers`.`Points` AS `Points`,`finaltiers`.`Semester` AS `Semester`,`finaltiers`.`Faculty` AS `Faculty`,`finaltiers`.`Senator` AS `Senator`,`finaltiers`.`CheckSort` AS `CheckSort`,`finaltiers`.`ranking` AS `ranking`,`finaltiers`.`tierone` AS `tierone`,`finaltiers`.`tiertwo` AS `tiertwo`,`finaltiers`.`tierthree` AS `tierthree`,`finaltiers`.`tier` AS `tier`,`pointpickupsalltogether`.`EmailAddress2` AS `EmailAddress2`,`pointpickupsalltogether`.`Points2` AS `Points2`,`pointpickupsalltogether`.`tier2` AS `tier2`,`pointpickupsalltogether`.`EventName` AS `EventName`,`pointpickupsalltogether`.`EventDate` AS `EventDate`,`pointpickupsalltogether`.`currentsemester` AS `currentsemester`,`pointpickupsalltogether`.`StudentLastName` AS `StudentLastName`,`pointpickupsalltogether`.`StudentFirstName` AS `StudentFirstName`,`pointpickupsalltogether`.`StudentID` AS `StudentID` from (`finaltiers` left join `pointpickupsalltogether` on((`finaltiers`.`EmailAddress` = `pointpickupsalltogether`.`EmailAddress2`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointsattierone`
--

/*!50001 DROP VIEW IF EXISTS `pointsattierone`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pointsattierone` AS select `currentranking`.`Points` AS `tierone` from `currentranking` where (`currentranking`.`ranking` = (select `tieramounts`.`TierAmount` from `tieramounts` where (`tieramounts`.`TierType` = 'TierOne'))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointsattierthree`
--

/*!50001 DROP VIEW IF EXISTS `pointsattierthree`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pointsattierthree` AS select `currentranking`.`Points` AS `tierthree` from `currentranking` where (`currentranking`.`ranking` = (select `tieramounts`.`TierAmount` from `tieramounts` where (`tieramounts`.`TierType` = 'TierThree'))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointsattiertwo`
--

/*!50001 DROP VIEW IF EXISTS `pointsattiertwo`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `pointsattiertwo` AS select `currentranking`.`Points` AS `tiertwo` from `currentranking` where (`currentranking`.`ranking` = (select `tieramounts`.`TierAmount` from `tieramounts` where (`tieramounts`.`TierType` = 'TierTwo'))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `randomkeysscannerlisting`
--

/*!50001 DROP VIEW IF EXISTS `randomkeysscannerlisting`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `randomkeysscannerlisting` AS select `eventnames`.`EventName` AS `EventName`,`eventnames`.`EventDate` AS `EventDate`,`eventnames`.`PointValue` AS `PointValue`,`semester`.`Semester` AS `Semester`,`randomkeys`.`randomkeycol` AS `randomkeycol`,`eventhosts`.`HostName` AS `HostName`,`studentlisting`.`StudentFirstName` AS `StudentFirstName` from ((((((((`scanner` join `scannerlinkouter` on((`scanner`.`Scanner` = `scannerlinkouter`.`Scanner`))) join `scannerlinkinner` on((`scannerlinkouter`.`ScannerLinkAddressOuter` = `scannerlinkinner`.`ScannerLinkAddress`))) join `studentlisting` on((`studentlisting`.`EmailAddress` = `scannerlinkinner`.`Email`))) join `eventnames` on((`scanner`.`EventID` = `eventnames`.`EventID`))) join `datestosemesters` on((`eventnames`.`EventDate` = `datestosemesters`.`Date`))) join `semester` on((`semester`.`Semester` = `datestosemesters`.`Semester`))) join `randomkeys` on((`studentlisting`.`EmailAddress` = `randomkeys`.`email`))) join `eventhosts` on((`eventnames`.`HostID` = `eventhosts`.`HostID`))) where ((`eventnames`.`SemesterGiveaway` <> 1) and (`eventnames`.`EventID` <> 340) and (`eventnames`.`DoNotTotal` <> 1)) order by `eventnames`.`EventDate` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `randomkeyswithlink`
--

/*!50001 DROP VIEW IF EXISTS `randomkeyswithlink`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `randomkeyswithlink` AS select `randomkeys`.`email` AS `email`,`studentlisting`.`StudentID` AS `StudentID`,`studentlisting`.`StudentLastName` AS `StudentLastName`,`studentlisting`.`StudentFirstName` AS `StudentFirstName`,`studentlisting`.`Senator` AS `Senator`,`studentlisting`.`Faculty` AS `Faculty`,concat('http://penmenpride.snhusga.org/public/?id=',`randomkeys`.`randomkeycol`) AS `link` from (`randomkeys` join `studentlisting` on((`randomkeys`.`email` = `studentlisting`.`EmailAddress`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `scannerinnerhasid`
--

/*!50001 DROP VIEW IF EXISTS `scannerinnerhasid`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `scannerinnerhasid` AS select `scannerlinkinner`.`Email` AS `Email`,`scannerlinkinner`.`ScannerLinkAddress` AS `ScannerLinkAddress`,`studentlisting`.`EmailAddress` AS `EmailAddress`,`studentlisting`.`StudentID` AS `StudentID`,if((substr(`scannerlinkinner`.`ScannerLinkAddress`,1,1) = '1'),1,if((substr(`scannerlinkinner`.`ScannerLinkAddress`,1,1) = '0'),1,0)) AS `checking` from (`scannerlinkinner` join `studentlisting` on((`scannerlinkinner`.`Email` = `studentlisting`.`EmailAddress`))) where (if((substr(`scannerlinkinner`.`ScannerLinkAddress`,1,1) = '1'),1,if((substr(`scannerlinkinner`.`ScannerLinkAddress`,1,1) = '0'),1,0)) = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `scannerinnerneedsid`
--

/*!50001 DROP VIEW IF EXISTS `scannerinnerneedsid`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `scannerinnerneedsid` AS select `scannerinnerhasid`.`Email` AS `Email`,`scannerinnerhasid`.`ScannerLinkAddress` AS `ScannerLinkAddress`,`scannerinnerhasid`.`EmailAddress` AS `EmailAddress`,`scannerinnerhasid`.`StudentID` AS `StudentID`,`scannerinnerhasid`.`checking` AS `checking` from `scannerinnerhasid` where isnull(`scannerinnerhasid`.`StudentID`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `scannerlinkouter`
--

/*!50001 DROP VIEW IF EXISTS `scannerlinkouter`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `scannerlinkouter` AS select `scanner`.`Scanner` AS `Scanner`,if((substr(`scanner`.`Scanner`,1,1) = ';'),if((substr(`scanner`.`Scanner`,4,1) = '9'),'sga@snhu.edu',substr(`scanner`.`Scanner`,4,7)),if((substr(`scanner`.`Scanner`,1,1) = '+'),if((substr(`scanner`.`Scanner`,4,1) = '9'),'sga@snhu.edu',substr(`scanner`.`Scanner`,4,7)),if((substr(`scanner`.`Scanner`,1,1) = '7'),if((substr(`scanner`.`Scanner`,3,1) = '9'),'sga@snhu',substr(`scanner`.`Scanner`,3,7)),`scanner`.`Scanner`))) AS `ScannerLinkAddressOuter`,min(`scanner`.`ScanNumID`) AS `Scan` from `scanner` group by `scanner`.`Scanner` order by `scanner`.`Scanner` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `scanneroutertoinnerlink`
--

/*!50001 DROP VIEW IF EXISTS `scanneroutertoinnerlink`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `scanneroutertoinnerlink` AS select lower(`osiexport`.`ScannerLinkAddressOuter`) AS `innerlink`,lower(`osiexport`.`ScannerLinkAddressOuter`) AS `outerlink` from `osiexport` where (if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '0'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '1'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '2'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '3'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '4'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '5'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '6'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '7'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '8'),0,if((substr(`osiexport`.`ScannerLinkAddressOuter`,1,1) = '9'),0,1)))))))))) = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `semesterpoints`
--

/*!50001 DROP VIEW IF EXISTS `semesterpoints`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `semesterpoints` AS select `alltimepointcalculationsordered`.`EmailAddress` AS `EmailAddress`,`alltimepointcalculationsordered`.`Points` AS `Points`,`alltimepointcalculationsordered`.`Semester` AS `Semester`,`alltimepointcalculationsordered`.`Faculty` AS `Faculty`,`alltimepointcalculationsordered`.`Senator` AS `Senator`,`alltimepointcalculationsordered`.`CheckSort` AS `CheckSort` from `alltimepointcalculationsordered` where ((`alltimepointcalculationsordered`.`CheckSort` = 0) and (`alltimepointcalculationsordered`.`Semester` = (select `currentsemester`.`currentsemester` from `currentsemester` where (`currentsemester`.`id` = 1)))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `semesterpointsranked`
--

/*!50001 DROP VIEW IF EXISTS `semesterpointsranked`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `semesterpointsranked` AS select `semesterpoints`.`EmailAddress` AS `EmailAddress`,`semesterpoints`.`Points` AS `Points`,`semesterpoints`.`Semester` AS `Semester`,`semesterpoints`.`Faculty` AS `Faculty`,`semesterpoints`.`Senator` AS `Senator`,`semesterpoints`.`CheckSort` AS `CheckSort`,`func_inc_var_session`() AS `ranking` from `semesterpoints` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `studentlistinglink`
--

/*!50001 DROP VIEW IF EXISTS `studentlistinglink`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `studentlistinglink` AS select `numbergone`(concat(upper(substr(substr(`scannerlinkinner`.`Email`,(locate('.',`scannerlinkinner`.`Email`) + 1),(locate('@',`scannerlinkinner`.`Email`) - (locate('.',`scannerlinkinner`.`Email`) + 1))),1,1)),substr(`scannerlinkinner`.`Email`,(locate('.',`scannerlinkinner`.`Email`) + 2),(locate('@',`scannerlinkinner`.`Email`) - (locate('.',`scannerlinkinner`.`Email`) + 2))))) AS `StudentLastName`,concat(upper(substr(`scannerlinkinner`.`Email`,1,1)),substr(`scannerlinkinner`.`Email`,2,(locate('.',`scannerlinkinner`.`Email`) - 2))) AS `StudentFirstName`,`scannerlinkinner`.`Email` AS `EmailAddress`,0 AS `Senator`,if((locate('.',`scannerlinkinner`.`Email`) = 2),1,0) AS `Faculty`,min(`scannerlinkinner`.`ScannerLinkAddress`) AS `StudentID` from (`scannerlinkinner` left join `studentlisting` on((`scannerlinkinner`.`Email` = `studentlisting`.`EmailAddress`))) where isnull(`studentlisting`.`EmailAddress`) group by `scannerlinkinner`.`Email` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tierpickeduppercentages`
--

/*!50001 DROP VIEW IF EXISTS `tierpickeduppercentages`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tierpickeduppercentages` AS select `pointpickupmerged`.`tier` AS `tier`,count(`pointpickupmerged`.`EmailAddress2`) AS `pickedup`,count(`pointpickupmerged`.`EmailAddress`) AS `eligible`,round(((count(`pointpickupmerged`.`EmailAddress2`) / count(`pointpickupmerged`.`EmailAddress`)) * 100),2) AS `percentpickedup` from `pointpickupmerged` group by `pointpickupmerged`.`tier` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `updatescannerbreaks`
--

/*!50001 DROP VIEW IF EXISTS `updatescannerbreaks`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `updatescannerbreaks` AS select `scanner`.`Scanner` AS `Scanner`,if((substr(`scanner`.`Scanner`,1,1) = ';'),if((substr(`scanner`.`Scanner`,4,1) = '9'),'sga@snhu.edu',substr(`scanner`.`Scanner`,4,7)),if((substr(`scanner`.`Scanner`,1,1) = '+'),if((substr(`scanner`.`Scanner`,4,1) = '9'),'sga@snhu.edu',substr(`scanner`.`Scanner`,3,7)),if((substr(`scanner`.`Scanner`,1,1) = '7'),if((substr(`scanner`.`Scanner`,3,1) = '9'),'sga@snhu',substr(`scanner`.`Scanner`,3,7)),`scanner`.`Scanner`))) AS `IDNum`,if((substr(`scanner`.`Scanner`,1,1) = ';'),1,0) AS `Checks`,length(`scanner`.`Scanner`) AS `Len`,substr(`scanner`.`Scanner`,1,16) AS `Six`,length(substr(`scanner`.`Scanner`,1,16)) AS `Sixlen`,min(`scanner`.`ScanNumID`) AS `ScanID` from (`scanner` left join `scannerlinkouter` on((`scanner`.`Scanner` = `scannerlinkouter`.`Scanner`))) where ((if((substr(`scanner`.`Scanner`,1,1) = ';'),1,0) = 1) and (length(`scanner`.`Scanner`) = 18)) group by `scanner`.`Scanner` order by `scanner`.`Scanner` desc */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `updatescannerbreaksscanid`
--

/*!50001 DROP VIEW IF EXISTS `updatescannerbreaksscanid`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `updatescannerbreaksscanid` AS select `updatescannerbreaks`.`ScanID` AS `ScanID` from `updatescannerbreaks` limit 1 */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Current Database: `ppv0008004`
--

USE `ppv0008004`;

--
-- Final view structure for view `allpeople`
--

/*!50001 DROP VIEW IF EXISTS `allpeople`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `allpeople` AS select `pubscanner`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`pubscanner`.`PubFirstName` AS `PubFirstName` from `pubscanner` group by `pubscanner`.`Pubrandomkeycol`,`pubscanner`.`PubFirstName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `allpeopleincurrentsem`
--

/*!50001 DROP VIEW IF EXISTS `allpeopleincurrentsem`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `allpeopleincurrentsem` AS select `pubtotalpointsandeventcurrentsem`.`Pubrandomkeycol` AS `Pubrandomkeycol` from `pubtotalpointsandeventcurrentsem` group by `pubtotalpointsandeventcurrentsem`.`Pubrandomkeycol` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `allpeopleincurrentsemesterwithsem`
--

/*!50001 DROP VIEW IF EXISTS `allpeopleincurrentsemesterwithsem`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `allpeopleincurrentsemesterwithsem` AS select `allpeoplenotincurrentsem`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`currentsem`.`sem` AS `sem`,`allpeople`.`PubFirstName` AS `PubFirstName` from ((`allpeoplenotincurrentsem` join `currentsem`) join `allpeople` on((`allpeople`.`Pubrandomkeycol` = `allpeoplenotincurrentsem`.`Pubrandomkeycol`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `allpeoplenotincurrentsem`
--

/*!50001 DROP VIEW IF EXISTS `allpeoplenotincurrentsem`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `allpeoplenotincurrentsem` AS select `allpeople`.`Pubrandomkeycol` AS `Pubrandomkeycol` from (`allpeople` left join `allpeopleincurrentsem` on((`allpeopleincurrentsem`.`Pubrandomkeycol` = `allpeople`.`Pubrandomkeycol`))) where isnull(`allpeopleincurrentsem`.`Pubrandomkeycol`) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointspersemester`
--

/*!50001 DROP VIEW IF EXISTS `pointspersemester`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `pointspersemester` AS select `pubscanner`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`pubscanner`.`PubSemester` AS `PubSemester`,sum(`pubscanner`.`PubPointValue`) AS `totpoints`,count(`pubscanner`.`PubEventName`) AS `totevents` from `pubscanner` group by `pubscanner`.`Pubrandomkeycol`,`pubscanner`.`PubSemester` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pointspersemesterordered`
--

/*!50001 DROP VIEW IF EXISTS `pointspersemesterordered`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `pointspersemesterordered` AS select `pointspersemester`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`pointspersemester`.`PubSemester` AS `PubSemester`,`pointspersemester`.`totpoints` AS `totpoints`,`pointspersemester`.`totevents` AS `totevents` from (`pointspersemester` join `pubsemester` on((convert(`pointspersemester`.`PubSemester` using utf8) = `pubsemester`.`Semester`))) order by `pubsemester`.`BeginDate` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pubtotalpointsandeventcurrentsem`
--

/*!50001 DROP VIEW IF EXISTS `pubtotalpointsandeventcurrentsem`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `pubtotalpointsandeventcurrentsem` AS select `pubtotalpointsandevents`.`TotalEvents` AS `TotalEvents`,`pubtotalpointsandevents`.`TotalPoints` AS `TotalPoints`,`pubtotalpointsandevents`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`pubtotalpointsandevents`.`PubSemester` AS `PubSemester`,`pubtotalpointsandevents`.`PubFirstName` AS `PubFirstName`,`currentsem`.`sem` AS `sem` from (`pubtotalpointsandevents` join `currentsem` on((`pubtotalpointsandevents`.`PubSemester` = `currentsem`.`sem`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `pubtotalpointsandevents`
--

/*!50001 DROP VIEW IF EXISTS `pubtotalpointsandevents`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `pubtotalpointsandevents` AS select count(0) AS `TotalEvents`,sum(`pubscanner`.`PubPointValue`) AS `TotalPoints`,`pubscanner`.`Pubrandomkeycol` AS `Pubrandomkeycol`,`pubscanner`.`PubSemester` AS `PubSemester`,`pubscanner`.`PubFirstName` AS `PubFirstName` from `pubscanner` group by `pubscanner`.`PubSemester`,`pubscanner`.`Pubrandomkeycol`,`pubscanner`.`PubFirstName` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `totpointsever`
--

/*!50001 DROP VIEW IF EXISTS `totpointsever`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`rce423`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `totpointsever` AS select `pubscanner`.`Pubrandomkeycol` AS `Pubrandomkeycol`,sum(`pubscanner`.`PubPointValue`) AS `totpoints`,count(`pubscanner`.`PubEventName`) AS `totevents` from `pubscanner` group by `pubscanner`.`Pubrandomkeycol` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Current Database: `loginsystem`
--

USE `loginsystem`;

--
-- Final view structure for view `adminmembers`
--

/*!50001 DROP VIEW IF EXISTS `adminmembers`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `adminmembers` AS select `members`.`id` AS `id`,`members`.`username` AS `username`,`members`.`password` AS `password`,`members`.`email` AS `email`,`members`.`verified` AS `verified`,`members`.`mod_timestamp` AS `mod_timestamp` from `members` where (`members`.`admin` = 1) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-19 13:48:11
