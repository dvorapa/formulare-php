SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

CREATE DATABASE IF NOT EXISTS `czprihlaskanavs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `czprihlaskanavs`;

CREATE TABLE `AdresaTrvalehoBydliste` (
  `PHPSESSID` varchar(40) NOT NULL,
  `TUlice` varchar(40) NOT NULL,
  `TCislo` varchar(20) NOT NULL,
  `TCast` varchar(40) NOT NULL,
  `TObec` varchar(40) NOT NULL,
  `TOkres` varchar(40) NOT NULL,
  `TPSC` mediumint(8) unsigned NOT NULL,
  `TPosta` varchar(40) NOT NULL,
  `TStat` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `Kontakt` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Telefon` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `KontaktniAdresa` (
  `PHPSESSID` varchar(40) NOT NULL,
  `KUlice` varchar(40) NOT NULL,
  `KCislo` varchar(20) NOT NULL,
  `KCast` varchar(40) NOT NULL,
  `KObec` varchar(40) NOT NULL,
  `KOkres` varchar(40) NOT NULL,
  `KPSC` mediumint(8) unsigned NOT NULL,
  `KPosta` varchar(40) NOT NULL,
  `KStat` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `Narozeni` (
  `PHPSESSID` varchar(40) NOT NULL,
  `DatumNar` date NOT NULL,
  `MistoNar` varchar(40) NOT NULL,
  `OkresNar` varchar(40) NOT NULL,
  `CisloOP` bigint(20) unsigned NOT NULL,
  `RCislo` bigint(20) unsigned NOT NULL,
  `CisloP` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `OsobniUdaje` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Jmeno` varchar(40) NOT NULL,
  `Prijmeni` varchar(40) NOT NULL,
  `Rodne` varchar(40) NOT NULL,
  `Tituly` varchar(40) NOT NULL,
  `Pohlavi` enum('muž','žena') NOT NULL,
  `StatniPris` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `PredchoziVysokaSkola` (
  `PHPSESSID` varchar(40) NOT NULL,
  `PSkola` varchar(40) NOT NULL,
  `PFakulta` varchar(80) NOT NULL,
  `PProgram` varchar(40) NOT NULL,
  `PObor` varchar(40) NOT NULL,
  `POd` date NOT NULL,
  `PDo` date NOT NULL,
  `PTitul` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `Prospech` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Predmet1` varchar(40) NOT NULL,
  `Maturita1` tinyint(5) unsigned NOT NULL,
  `Predmet1Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet1Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet1Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet1Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet1Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet2` varchar(40) NOT NULL,
  `Maturita2` tinyint(5) unsigned NOT NULL,
  `Predmet2Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet2Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet2Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet2Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet2Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet3` varchar(40) NOT NULL,
  `Maturita3` tinyint(5) unsigned NOT NULL,
  `Predmet3Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet3Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet3Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet3Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet3Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet4` varchar(40) NOT NULL,
  `Maturita4` tinyint(5) unsigned NOT NULL,
  `Predmet4Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet4Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet4Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet4Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet4Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet5` varchar(40) NOT NULL,
  `Maturita5` tinyint(5) unsigned NOT NULL,
  `Predmet5Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet5Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet5Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet5Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet5Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet6` varchar(40) NOT NULL,
  `Maturita6` tinyint(5) unsigned NOT NULL,
  `Predmet6Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet6Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet6Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet6Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet6Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet7` varchar(40) NOT NULL,
  `Maturita7` tinyint(5) unsigned NOT NULL,
  `Predmet7Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet7Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet7Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet7Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet7Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet8` varchar(40) NOT NULL,
  `Maturita8` tinyint(5) unsigned NOT NULL,
  `Predmet8Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet8Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet8Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet8Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet8Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet9` varchar(40) NOT NULL,
  `Maturita9` tinyint(5) unsigned NOT NULL,
  `Predmet9Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet9Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet9Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet9Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet9Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet10` varchar(40) NOT NULL,
  `Maturita10` tinyint(5) unsigned NOT NULL,
  `Predmet10Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet10Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet10Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet10Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet10Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet11` varchar(40) NOT NULL,
  `Maturita11` tinyint(5) unsigned NOT NULL,
  `Predmet11Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet11Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet11Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet11Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet11Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet12` varchar(40) NOT NULL,
  `Maturita12` tinyint(5) unsigned NOT NULL,
  `Predmet12Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet12Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet12Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet12Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet12Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet13` varchar(40) NOT NULL,
  `Maturita13` tinyint(5) unsigned NOT NULL,
  `Predmet13Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet13Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet13Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet13Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet13Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet14` varchar(40) NOT NULL,
  `Maturita14` tinyint(5) unsigned NOT NULL,
  `Predmet14Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet14Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet14Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet14Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet14Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet15` varchar(40) NOT NULL,
  `Maturita15` tinyint(5) unsigned NOT NULL,
  `Predmet15Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet15Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet15Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet15Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet15Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet16` varchar(40) NOT NULL,
  `Maturita16` tinyint(5) unsigned NOT NULL,
  `Predmet16Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet16Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet16Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet16Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet16Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet17` varchar(40) NOT NULL,
  `Maturita17` tinyint(5) unsigned NOT NULL,
  `Predmet17Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet17Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet17Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet17Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet17Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet18` varchar(40) NOT NULL,
  `Maturita18` tinyint(5) unsigned NOT NULL,
  `Predmet18Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet18Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet18Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet18Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet18Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet19` varchar(40) NOT NULL,
  `Maturita19` tinyint(5) unsigned NOT NULL,
  `Predmet19Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet19Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet19Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet19Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet19Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet20` varchar(40) NOT NULL,
  `Maturita20` tinyint(5) unsigned NOT NULL,
  `Predmet20Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet20Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet20Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet20Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet20Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet21` varchar(40) NOT NULL,
  `Maturita21` tinyint(5) unsigned NOT NULL,
  `Predmet21Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet21Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet21Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet21Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet21Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet22` varchar(40) NOT NULL,
  `Maturita22` tinyint(5) unsigned NOT NULL,
  `Predmet22Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet22Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet22Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet22Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet22Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet23` varchar(40) NOT NULL,
  `Maturita23` tinyint(5) unsigned NOT NULL,
  `Predmet23Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet23Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet23Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet23Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet23Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet24` varchar(40) NOT NULL,
  `Maturita24` tinyint(5) unsigned NOT NULL,
  `Predmet24Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet24Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet24Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet24Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet24Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet25` varchar(40) NOT NULL,
  `Maturita25` tinyint(5) unsigned NOT NULL,
  `Predmet25Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet25Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet25Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet25Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet25Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet26` varchar(40) NOT NULL,
  `Maturita26` tinyint(5) unsigned NOT NULL,
  `Predmet26Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet26Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet26Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet26Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet26Rocnik5` tinyint(5) unsigned NOT NULL,
  `Predmet27` varchar(40) NOT NULL,
  `Maturita27` tinyint(5) unsigned NOT NULL,
  `Predmet27Rocnik1` tinyint(5) unsigned NOT NULL,
  `Predmet27Rocnik2` tinyint(5) unsigned NOT NULL,
  `Predmet27Rocnik3` tinyint(5) unsigned NOT NULL,
  `Predmet27Rocnik4` tinyint(5) unsigned NOT NULL,
  `Predmet27Rocnik5` tinyint(5) unsigned NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `PrubehZamestnani` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Zamestnavatel` varchar(80) NOT NULL,
  `Zarazeni` varchar(40) NOT NULL,
  `ZOd` date NOT NULL,
  `ZDo` date NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `Stav` (
  `PHPSESSID` varchar(40) NOT NULL,
  `ElPrijat` varchar(7) NOT NULL,
  `PiPrijat` varchar(7) NOT NULL,
  `PlPrijat` varchar(7) NOT NULL,
  `Prijat` varchar(7) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `StredniSkola` (
  `PHPSESSID` varchar(40) NOT NULL,
  `SSkola` varchar(40) NOT NULL,
  `SAdresa` varchar(80) NOT NULL,
  `SObor` varchar(40) NOT NULL,
  `SKKOV` varchar(20) NOT NULL,
  `SIZO` varchar(40) NOT NULL,
  `SRokMat` year(4) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `UchazecSeHlasi` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Odkud` enum('ZŠ','SŠ','VOŠ','VŠ','DZS','Zam','Dom','Voj','Odj') NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `Uvod` (
  `PHPSESSID` varchar(40) NOT NULL,
  `AkadRok` varchar(20) NOT NULL,
  `Program` enum('bakalářský','magisterský') NOT NULL,
  `Forma` enum('prezenční','kombinované','distanční') NOT NULL,
  `Jazyk` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `VysokaSkola` (
  `PHPSESSID` varchar(40) NOT NULL,
  `VSkola` varchar(40) NOT NULL,
  `VFakulta` varchar(80) NOT NULL,
  `VProgram` varchar(40) NOT NULL,
  `VOborA` varchar(40) NOT NULL,
  `VOborB` varchar(40) NOT NULL,
  `VOborC` varchar(40) NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE `ZajmovaCinnost` (
  `PHPSESSID` varchar(40) NOT NULL,
  `Zajmy` text NOT NULL,
  PRIMARY KEY (`PHPSESSID`)
) DEFAULT CHARSET=utf8;

CREATE TABLE Prihlasky AS
SELECT * FROM Uvod
JOIN VysokaSkola USING (PHPSESSID)
JOIN OsobniUdaje USING (PHPSESSID)
JOIN Narozeni USING (PHPSESSID)
JOIN AdresaTrvalehoBydliste USING (PHPSESSID)
JOIN KontaktniAdresa USING (PHPSESSID)
JOIN StredniSkola USING (PHPSESSID)
JOIN UchazecSeHlasi USING (PHPSESSID)
JOIN Prospech USING (PHPSESSID)
JOIN ZajmovaCinnost USING (PHPSESSID)
JOIN PrubehZamestnani USING (PHPSESSID)
JOIN PredchoziVysokaSkola USING (PHPSESSID)
JOIN Kontakt USING (PHPSESSID)
JOIN Stav USING (PHPSESSID);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;