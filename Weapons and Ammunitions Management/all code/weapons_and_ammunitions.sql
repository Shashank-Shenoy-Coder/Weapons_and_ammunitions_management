-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2023 at 05:48 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weapons_and_ammunitions`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `MANUFACTURER_WEAPONS_DETAILS` (IN `MNAME` VARCHAR(100))   SELECT MNAME, WNAME, WCATEGORY, WSUBCATEGORY, IMG_NAME1 
FROM manufacturer_company MCMP, manufacturing_company_weapon MCW, weapons_images WI, WEAPONS W
WHERE MCMP.MID = MCW.MID AND MCW.WID = W.WID AND W.WID = WI.WID$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `air_launched_bombs`
--

CREATE TABLE `air_launched_bombs` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `ALAUNCHNAME` varchar(180) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air_launched_bombs`
--

INSERT INTO `air_launched_bombs` (`SUBCATNUM`, `WID`, `ALAUNCHNAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(3, 81, 'American Bomb', '', '0.00', '0.00', '0.00', 0),
(3, 99, 'F90 Fighter Bomb', 'Hello this is an op weapon.', '63.18', '28.13', '15.33', 20);

-- --------------------------------------------------------

--
-- Table structure for table `air_launched_rockets`
--

CREATE TABLE `air_launched_rockets` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `ALNCHRCKT_NAME` varchar(180) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air_launched_rockets`
--

INSERT INTO `air_launched_rockets` (`SUBCATNUM`, `WID`, `ALNCHRCKT_NAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(4, 93, 'Indian Rockets', 'Op weapon.', '28.83', '15.44', '12.33', 20),
(4, 102, 'Sukhoi Rocket', 'hi', '12.23', '15.33', '20.00', 25),
(4, 103, 'Rafale', '', '0.00', '0.00', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_name`, `prod_qty`) VALUES
(17, 7, 'Indian Rockets', 5),
(19, 7, 'Indian Torpedoes', 2),
(20, 7, 'American Bomb', 1),
(21, 7, 'UK Pistols', 3),
(22, 7, 'Indian Machine Gun', 1),
(29, 7, 'Indian Ak 47', 3);

-- --------------------------------------------------------

--
-- Table structure for table `machine_gun`
--

CREATE TABLE `machine_gun` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `MCH_GUN_NAME` varchar(200) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `machine_gun`
--

INSERT INTO `machine_gun` (`SUBCATNUM`, `WID`, `MCH_GUN_NAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(2, 88, 'Indian Machine Gun', 'Hello.', '12.34', '14.83', '15.00', 20),
(2, 97, 'F90MBR', '', '0.00', '0.00', '0.00', 0),
(2, 98, 'F90MBR', '', '0.00', '0.00', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_company`
--

CREATE TABLE `manufacturer_company` (
  `MID` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `MNAME` varchar(200) NOT NULL,
  `MIMAGE` varchar(255) NOT NULL,
  `MDATE` date NOT NULL,
  `MYEAR` int(15) NOT NULL,
  `MLOCATION` varchar(150) NOT NULL,
  `MCATEGORY` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturer_company`
--

INSERT INTO `manufacturer_company` (`MID`, `user_id`, `MNAME`, `MIMAGE`, `MDATE`, `MYEAR`, `MLOCATION`, `MCATEGORY`) VALUES
(84, 1, 'Sample', 'About.jpg', '2023-01-06', 7, 'Bangalore', 'NavyForce'),
(85, 3, 'Test', 'F90MBR.jpg', '2018-06-23', 7, 'Shimogga', 'Landforce');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_profile_img`
--

CREATE TABLE `manufacturer_profile_img` (
  `id` int(11) NOT NULL,
  `mimage` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturing_company_weapon`
--

CREATE TABLE `manufacturing_company_weapon` (
  `SL_NO` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `PRICE` decimal(20,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manufacturing_company_weapon`
--

INSERT INTO `manufacturing_company_weapon` (`SL_NO`, `MID`, `WID`, `PRICE`) VALUES
(34, 1, 79, '50000'),
(36, 1, 81, '50000'),
(37, 1, 82, '20000'),
(43, 3, 88, '10000'),
(44, 3, 89, '1000'),
(46, 6, 91, '30000'),
(47, 3, 92, '50000'),
(48, 3, 93, '20000'),
(49, 6, 94, '51000'),
(51, 3, 96, '20000'),
(52, 3, 97, '15000'),
(53, 6, 97, '20000'),
(54, 3, 99, '25000'),
(56, 6, 101, '15842'),
(57, 6, 102, '20000'),
(58, 3, 103, '41238'),
(59, 3, 104, '15436');

-- --------------------------------------------------------

--
-- Table structure for table `missiles`
--

CREATE TABLE `missiles` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `MNAME` varchar(200) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `missiles`
--

INSERT INTO `missiles` (`SUBCATNUM`, `WID`, `MNAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(6, 94, 'Russian Missile', 'Hello.', '28.34', '15.33', '20.81', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `dealer_name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `ord_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `MID`, `prod_id`, `dealer_id`, `dealer_name`, `address`, `country`, `state`, `phone_no`, `ord_date`) VALUES
(2, 0, 0, 7, 'Test', 'sjdfs,sdfjjd,sdfjjf', 'India', 'Karnataka', '89239722', '2023-01-31 03:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `pistols`
--

CREATE TABLE `pistols` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `PNAME` varchar(180) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pistols`
--

INSERT INTO `pistols` (`SUBCATNUM`, `WID`, `PNAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(1, 79, 'Indian Pistols', 'This is a superb duperb weapon ', '0.00', '0.00', '0.00', 0),
(1, 89, 'UK Pistols', 'Superb Weapon.', '28.33', '15.44', '19.00', 23),
(1, 96, 'Ak 47', 'Hello.', '28.00', '15.00', '13.00', 20),
(1, 101, 'AK 59', '', '0.00', '0.00', '0.00', 0),
(1, 104, 'Indian Ak 47', 'kshdckhdkhcekwhfhewhfhkehfhekhfehfhkfhe.krfhkerhf.ehkw', '12.34', '23.65', '15.88', 20);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_index`
--

CREATE TABLE `sub_category_index` (
  `SUBCATNUM` int(11) NOT NULL,
  `SUBCATNAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category_index`
--

INSERT INTO `sub_category_index` (`SUBCATNUM`, `SUBCATNAME`) VALUES
(1, 'PISTOLS'),
(2, 'MACHINE GUN'),
(3, 'AIR LAUNCHED BOMBS'),
(4, 'AIR LAUNCHED ROCKETS'),
(5, 'TORPEDOES'),
(6, 'MISSILES');

-- --------------------------------------------------------

--
-- Table structure for table `torpedoes`
--

CREATE TABLE `torpedoes` (
  `SUBCATNUM` int(11) NOT NULL,
  `WID` int(20) NOT NULL,
  `TPDNAME` varchar(180) NOT NULL,
  `WDESC` varchar(500) NOT NULL,
  `WGHT` decimal(50,2) NOT NULL,
  `LEN` decimal(50,2) NOT NULL,
  `RNGE` decimal(50,2) NOT NULL,
  `MAX_CAPACITY` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `torpedoes`
--

INSERT INTO `torpedoes` (`SUBCATNUM`, `WID`, `TPDNAME`, `WDESC`, `WGHT`, `LEN`, `RNGE`, `MAX_CAPACITY`) VALUES
(5, 82, 'American Torpedoes', '', '0.00', '0.00', '0.00', 0),
(5, 91, 'American Torpedoes', 'Hello.', '13.33', '28.11', '15.48', 20),
(5, 92, 'Indian Torpedoes', 'Hello.', '20.00', '15.00', '13.00', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `is_admin` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `is_admin`) VALUES
(1, 'hello', 'hello123@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1', 0),
(2, 'hello', 'hello@gmail', '5d41402abc4b2a76b9719d911017c592', 0),
(3, 'test', 'test@gmail.com', 'cc03e747a6afbbcbf8be7668acfebee5', 1),
(6, 'Example', 'example123@gmail.com', '7df065c23f49f57077f9113611d6d877', 1),
(7, 'Sample', 'sample123@gmail.com', '4e91b1cbe42b5c884de47d4c7fda0555', 2),
(8, 'Hi', 'hi123@gmail.com', '30c2138619045a1dd4b1f6cb888f0d67', 2);

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `WID` int(11) NOT NULL,
  `WNAME` varchar(200) NOT NULL,
  `WCATEGORY` varchar(150) NOT NULL,
  `WSUBCATEGORY` varchar(150) NOT NULL,
  `IMG_ID` int(15) NOT NULL,
  `WPOPULAR` tinyint(4) NOT NULL DEFAULT 0,
  `WDATE` date NOT NULL,
  `WQUANTITY` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`WID`, `WNAME`, `WCATEGORY`, `WSUBCATEGORY`, `IMG_ID`, `WPOPULAR`, `WDATE`, `WQUANTITY`) VALUES
(79, 'Indian Pistols', 'Land', 'PISTOLS', 35, 0, '2022-12-27', 3),
(81, 'American Bomb', 'Air', 'AIR LAUNCHED BOMBS', 30, 0, '2022-12-30', 10),
(82, 'Russian Torpedoes', 'Navy', 'TORPEDOES', 31, 0, '2022-12-31', 15),
(88, 'Indian Machine Gun', 'Land', 'MACHINE GUN', 37, 0, '2022-12-28', 3),
(89, 'UK Pistols', 'Land', 'PISTOLS', 38, 0, '2022-12-30', 1),
(91, 'American Torpedoes', 'Navy', 'TORPEDOES', 40, 0, '2022-12-29', 3),
(92, 'Indian Torpedoes', 'Navy', 'TORPEDOES', 41, 0, '2022-12-31', 10),
(93, 'Indian Rockets', 'Air', 'AIR LAUNCHED ROCKETS', 42, 0, '2022-12-28', 9),
(94, 'Russian Missile', 'Navy', 'MISSILES', 43, 0, '2022-12-28', 5),
(96, 'Ak 47', 'Land', 'PISTOLS', 45, 0, '2022-12-30', 15),
(97, 'F90MBR', 'Land', 'MACHINE GUN', 47, 0, '2022-12-29', 30),
(98, 'F90MBR', 'Land', 'MACHINE GUN', 0, 0, '2022-12-29', 15),
(99, 'F90 Fighter Bomb', 'Air', 'AIR LAUNCHED BOMBS', 49, 0, '2022-12-28', 3),
(101, 'AK 59', 'Land', 'PISTOLS', 50, 0, '2022-12-29', 20),
(102, 'Sukhoi Rocket', 'Air', 'AIR LAUNCHED ROCKETS', 51, 0, '2022-12-31', 15),
(103, 'Rafale', 'Air', 'AIR LAUNCHED ROCKETS', 52, 0, '2022-12-27', 4),
(104, 'Indian Ak 47', 'Land', 'PISTOLS', 53, 0, '2022-12-29', 4);

--
-- Triggers `weapons`
--
DELIMITER $$
CREATE TRIGGER `MANUFACTURING_COMPANY_WEAPON_TRIG` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WID) 
THEN
DELETE FROM manufacturing_company_weapon WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_BOMBS_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
INSERT INTO AIR_LAUNCHED_BOMBS(subcatnum,wid,alaunchname) VALUES (3,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_BOMBS_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF (OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
INSERT INTO air_launched_bombs(subcatnum,wid,alaunchname) VALUES (3,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
UPDATE air_launched_bombs SET alaunchname =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_BOMBS_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_RCKTS_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
INSERT INTO air_launched_rockets(subcatnum,wid,alnchrckt_name) VALUES (4,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_RCKTS_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF(OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
INSERT INTO air_launched_rockets(subcatnum,wid,alnchrckt_name) VALUES (4,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
UPDATE air_launched_rockets SET alnchrckt_name =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_AIR_LNCH_RCKTS_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MACHINE_GUN_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="MACHINE GUN") 
THEN
INSERT INTO machine_gun(subcatnum,wid,mch_gun_name) VALUES (2,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MACHINE_GUN_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF(OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="MACHINE GUN") 
THEN
INSERT INTO machine_gun(subcatnum,wid,mch_gun_name) VALUES (2,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="MACHINE GUN") 
THEN
UPDATE machine_gun SET MCH_GUN_NAME =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MACHINE_GUN_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MISSILES_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="MISSILES") 
THEN
INSERT INTO missiles(subcatnum,wid,mname) VALUES (6,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MISSILES_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF(OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="MISSILES") 
THEN
INSERT INTO MISSILES(subcatnum,wid,mname) VALUES (6,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="MISSILES") 
THEN
UPDATE missiles SET mname =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_MISSILES_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_PISTOL_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="PISTOLS") 
THEN
INSERT INTO PISTOLS(subcatnum,wid,pname) VALUES (1,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_PISTOL_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF(OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="PISTOLS") 
THEN
INSERT INTO PISTOLS(subcatnum,wid,pname) VALUES (1,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="PISTOLS") 
THEN
UPDATE pistols SET pname =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_PISTOL_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_TORPEDOES_TRIG` AFTER INSERT ON `weapons` FOR EACH ROW BEGIN
IF (NEW.WSUBCATEGORY="TORPEDOES") 
THEN
INSERT INTO torpedoes(subcatnum,wid,tpdname) VALUES (5,NEW.WID,NEW.WNAME);
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_TORPEDOES_TRIG2` AFTER UPDATE ON `weapons` FOR EACH ROW BEGIN
IF (STRCMP(OLD.WSUBCATEGORY,NEW.WSUBCATEGORY))
THEN
IF(OLD.WSUBCATEGORY="AIR LAUNCHED ROCKETS") 
THEN
DELETE FROM air_launched_rockets WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="PISTOLS") 
THEN
DELETE FROM pistols WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="AIR LAUNCHED BOMBS") 
THEN
DELETE FROM air_launched_bombs WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MISSILES") 
THEN
DELETE FROM missiles WHERE WID = OLD.WID;
ELSEIF (OLD.WSUBCATEGORY="MACHINE GUN") 
THEN
DELETE FROM machine_gun WHERE WID = OLD.WID;
end if;
IF (NEW.WSUBCATEGORY="TORPEDOES") 
THEN
INSERT INTO TORPEDOES(subcatnum,wid,tpdname) VALUES (5,NEW.WID,NEW.WNAME);
end if;
end if;
IF (STRCMP(OLD.WNAME,NEW.WNAME))
THEN
IF (NEW.WSUBCATEGORY="TORPEDOES") 
THEN
UPDATE torpedoes SET tpdname =NEW.WNAME;
end if;
end if;
end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `WEAPONS_TORPEDOES_TRIG3` BEFORE DELETE ON `weapons` FOR EACH ROW BEGIN
IF (OLD.WSUBCATEGORY="TORPEDOES") 
THEN
DELETE FROM torpedoes WHERE WID = OLD.WID;
end if;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_air_launched_bombs`
-- (See below for the actual view)
--
CREATE TABLE `weapons_air_launched_bombs` (
`WNAME` varchar(200)
,`wid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_air_launched_rockets`
-- (See below for the actual view)
--
CREATE TABLE `weapons_air_launched_rockets` (
`WNAME` varchar(200)
,`WID` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `weapons_images`
--

CREATE TABLE `weapons_images` (
  `IMAGE_ID` int(11) NOT NULL,
  `WID` int(11) NOT NULL,
  `IMG_NAME1` varchar(100) NOT NULL,
  `IMG_NAME2` varchar(100) NOT NULL,
  `IMG_NAME3` varchar(100) NOT NULL,
  `IMG_NAME4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weapons_images`
--

INSERT INTO `weapons_images` (`IMAGE_ID`, `WID`, `IMG_NAME1`, `IMG_NAME2`, `IMG_NAME3`, `IMG_NAME4`) VALUES
(28, 79, 'background2.png', 'Jet_trails2-removebg-preview.png', 'Jet_trails1-removebg-preview.png', 'Untitled design.png'),
(30, 81, 'Contact.jpg', 'Contact Us Banner.jpg', 'About us.png', 'background.jpg'),
(31, 82, 'brahmos missile.jpg', 'background.jpg', 'About.jpg', 'About us.png'),
(37, 88, 'Contact.jpg', 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png'),
(38, 89, 'About.jpg', 'background.jpg', 'background2.png', 'Default Avatar.png'),
(40, 91, 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png', 'About.jpg'),
(41, 92, 'Contact.jpg', 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg'),
(42, 93, 'Thales manufacturing company.jpg', 'Default Avatar.png', 'background2.png', 'background.jpg'),
(43, 94, 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png'),
(45, 96, 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png'),
(46, 97, 'About.jpg', 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg'),
(47, 97, 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png', 'About.jpg'),
(48, 99, 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png'),
(50, 101, 'background.jpg', 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg'),
(51, 102, 'background.jpg', 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg'),
(52, 103, 'background2.png', 'Default Avatar.png', 'Thales manufacturing company.jpg', 'About us.png'),
(53, 104, 'About.jpg', 'background.jpg', 'background2.png', 'Default Avatar.png');

--
-- Triggers `weapons_images`
--
DELIMITER $$
CREATE TRIGGER `WEAPONS_IMAGES_TRIG` AFTER INSERT ON `weapons_images` FOR EACH ROW UPDATE WEAPONS SET IMG_ID = NEW.IMAGE_ID WHERE WID = NEW.WID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_machine_gun`
-- (See below for the actual view)
--
CREATE TABLE `weapons_machine_gun` (
`WEAPON_NAME` varchar(200)
,`wid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_missiles`
-- (See below for the actual view)
--
CREATE TABLE `weapons_missiles` (
`WNAME` varchar(200)
,`wid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_pistols`
-- (See below for the actual view)
--
CREATE TABLE `weapons_pistols` (
`WEAPON_NAME` varchar(200)
,`wid` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `weapons_torpedoes`
-- (See below for the actual view)
--
CREATE TABLE `weapons_torpedoes` (
`WNAME` varchar(200)
,`wid` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `weapons_air_launched_bombs`
--
DROP TABLE IF EXISTS `weapons_air_launched_bombs`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_air_launched_bombs`  AS SELECT `weapons`.`WNAME` AS `WNAME`, `weapons`.`WID` AS `wid` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'AIR_LAUNCHED_BOMBS''AIR_LAUNCHED_BOMBS'  ;

-- --------------------------------------------------------

--
-- Structure for view `weapons_air_launched_rockets`
--
DROP TABLE IF EXISTS `weapons_air_launched_rockets`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_air_launched_rockets`  AS SELECT `weapons`.`WNAME` AS `WNAME`, `weapons`.`WID` AS `WID` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'AIR_LAUNCHED_ROCKETS''AIR_LAUNCHED_ROCKETS'  ;

-- --------------------------------------------------------

--
-- Structure for view `weapons_machine_gun`
--
DROP TABLE IF EXISTS `weapons_machine_gun`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_machine_gun`  AS SELECT `weapons`.`WNAME` AS `WEAPON_NAME`, `weapons`.`WID` AS `wid` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'MACHINE_GUN''MACHINE_GUN'  ;

-- --------------------------------------------------------

--
-- Structure for view `weapons_missiles`
--
DROP TABLE IF EXISTS `weapons_missiles`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_missiles`  AS SELECT `weapons`.`WNAME` AS `WNAME`, `weapons`.`WID` AS `wid` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'MISSILES''MISSILES'  ;

-- --------------------------------------------------------

--
-- Structure for view `weapons_pistols`
--
DROP TABLE IF EXISTS `weapons_pistols`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_pistols`  AS SELECT `weapons`.`WNAME` AS `WEAPON_NAME`, `weapons`.`WID` AS `wid` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'PISTOLS''PISTOLS'  ;

-- --------------------------------------------------------

--
-- Structure for view `weapons_torpedoes`
--
DROP TABLE IF EXISTS `weapons_torpedoes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weapons_torpedoes`  AS SELECT `weapons`.`WNAME` AS `WNAME`, `weapons`.`WID` AS `wid` FROM `weapons` WHERE `weapons`.`WSUBCATEGORY` = 'TORPEDOES''TORPEDOES'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air_launched_bombs`
--
ALTER TABLE `air_launched_bombs`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `air_launched_rockets`
--
ALTER TABLE `air_launched_rockets`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machine_gun`
--
ALTER TABLE `machine_gun`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `manufacturer_company`
--
ALTER TABLE `manufacturer_company`
  ADD PRIMARY KEY (`MID`);

--
-- Indexes for table `manufacturer_profile_img`
--
ALTER TABLE `manufacturer_profile_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturing_company_weapon`
--
ALTER TABLE `manufacturing_company_weapon`
  ADD PRIMARY KEY (`SL_NO`),
  ADD KEY `MCW_WID_FK` (`WID`);

--
-- Indexes for table `missiles`
--
ALTER TABLE `missiles`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pistols`
--
ALTER TABLE `pistols`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `sub_category_index`
--
ALTER TABLE `sub_category_index`
  ADD PRIMARY KEY (`SUBCATNUM`);

--
-- Indexes for table `torpedoes`
--
ALTER TABLE `torpedoes`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`WID`);

--
-- Indexes for table `weapons_images`
--
ALTER TABLE `weapons_images`
  ADD PRIMARY KEY (`IMAGE_ID`),
  ADD KEY `WI_FK` (`WID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `manufacturer_company`
--
ALTER TABLE `manufacturer_company`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `manufacturer_profile_img`
--
ALTER TABLE `manufacturer_profile_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `manufacturing_company_weapon`
--
ALTER TABLE `manufacturing_company_weapon`
  MODIFY `SL_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_category_index`
--
ALTER TABLE `sub_category_index`
  MODIFY `SUBCATNUM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `WID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `weapons_images`
--
ALTER TABLE `weapons_images`
  MODIFY `IMAGE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `weapons_images`
--
ALTER TABLE `weapons_images`
  ADD CONSTRAINT `WI_FK` FOREIGN KEY (`WID`) REFERENCES `weapons` (`WID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
