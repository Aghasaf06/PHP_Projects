-- MySqlBackup.NET 2.2.1
-- Dump Time: 2023-01-24 02:27:04
-- --------------------------------------
-- Server version 5.7.15-log MySQL Community Server (GPL)


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- 
-- Definition of admins
-- 

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table admins
-- 

/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins`(`id`,`name`,`email`,`password`,`role`) VALUES
(1,'Admin','admin','21232f297a57a5a743894a0e4a801fc3',1);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- 
-- Definition of eduexp
-- 

DROP TABLE IF EXISTS `eduexp`;
CREATE TABLE IF NOT EXISTS `eduexp` (
  `id` int(3) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `loc` varchar(100) DEFAULT NULL,
  `interval` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table eduexp
-- 

/*!40000 ALTER TABLE `eduexp` DISABLE KEYS */;
INSERT INTO `eduexp`(`id`,`title`,`loc`,`interval`) VALUES
(1,'Bachelor of Science in Information Technology','Baku Engineering University','2020 - 2024'),
(3,'Middle School','6 Number School of Lankaran',' 2013 - 2020'),
(4,'Primary School','Ashagy Nuvadi School of Lankaran','2009 - 2013'),
(5,'Java Backend Developer','International Bank of Azerbaijan','06 October, 2022 - Current'),
(6,'Accountant','Carnaval Hotel Lankaran','01 July - 01 September, 2022\n'),
(7,'Contractor','Formula 1 Azerbaijan Grand Prix','09 - 12 June, 2022'),
(8,'Waiter','Khazar Palace & Hotel  Restoran','30 May - 26 September, 2021'),
(9,'Question Author','Prometey Intellectual Games Club','2021 - Current'),
(10,'Question Author','Lankaran Intellectual Games Club','2020 - Current'),
(2,'Applicant','Cenub Preparation Center','2017 - 2020');
/*!40000 ALTER TABLE `eduexp` ENABLE KEYS */;

-- 
-- Definition of images
-- 

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(3) NOT NULL,
  `imageName` varchar(50) DEFAULT NULL,
  `imageLocation` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table images
-- 

/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images`(`id`,`imageName`,`imageLocation`) VALUES
(1,'header photo','img/myprofile.jpg'),
(2,'about photo','img/myabout.jpg'),
(3,'g1','img/galery1.jpg'),
(4,'g2','img/galery2.jpg'),
(5,'g3','img/galery3.jpg'),
(6,'g4','img/galery4.jpg'),
(7,'g5','img/galery5.jpg'),
(8,'g6','img/galery6.jpg'),
(9,'g7','img/galery7.jpg'),
(10,'g8','img/galery8.jpg'),
(11,'g9','img/galery9.jpg');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- 
-- Definition of languages
-- 

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(3) NOT NULL,
  `language` varchar(30) DEFAULT NULL,
  `percent` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table languages
-- 

/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages`(`id`,`language`,`percent`) VALUES
(1,'Azerbaijani',95),
(2,'Talysh',90),
(3,'English',75),
(4,'Turkish',70),
(5,'Russian',15),
(6,'Persian',10);
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- 
-- Definition of main
-- 

DROP TABLE IF EXISTS `main`;
CREATE TABLE IF NOT EXISTS `main` (
  `name` varchar(30) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `nameSurname` varchar(40) DEFAULT NULL,
  `degree` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `experience` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table main
-- 

/*!40000 ALTER TABLE `main` DISABLE KEYS */;
INSERT INTO `main`(`name`,`surname`,`nameSurname`,`degree`,`phone`,`address`,`birthday`,`experience`,`email`,`id`) VALUES
('Aghasaf','Maharramov','Aghasaf Maharramov','Beginner','+994 50 465 44 97','Kamran Aliyev Street, Ashaghi Nuvadi, Lankaran, Az','6 October 2002','1 Years','agasfm90@gmail.com',1);
/*!40000 ALTER TABLE `main` ENABLE KEYS */;

-- 
-- Definition of skills
-- 

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(3) NOT NULL,
  `skillname` varchar(20) DEFAULT NULL,
  `percent` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table skills
-- 

/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills`(`id`,`skillname`,`percent`) VALUES
(1,'HTML / CSS',80),
(2,'Javascript',65),
(3,'MySQL',50),
(4,'PHP',90),
(5,'C',85),
(6,'C++',75),
(7,'Java',80),
(8,'AutoCAD',99);
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;

-- 
-- Definition of urls
-- 

DROP TABLE IF EXISTS `urls`;
CREATE TABLE IF NOT EXISTS `urls` (
  `Instagram` varchar(50) DEFAULT NULL,
  `Facebook` varchar(100) DEFAULT NULL,
  `Linkedin` varchar(100) DEFAULT NULL,
  `id` int(3) NOT NULL,
  `CVdownload` varchar(50) DEFAULT NULL,
  `domain` varchar(30) NOT NULL,
  `domainName` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table urls
-- 

/*!40000 ALTER TABLE `urls` DISABLE KEYS */;
INSERT INTO `urls`(`Instagram`,`Facebook`,`Linkedin`,`id`,`CVdownload`,`domain`,`domainName`) VALUES
('https://www.instagram.com/agha_mn_6/','https://www.facebook.com/profile.php?id=100012586427444','https://www.linkedin.com/in/aghasaf-maharramov-0610ma2002/',1,'https://www.mediafire.com/file/n9stvusvtzoytfb/Blu','a','a');
/*!40000 ALTER TABLE `urls` ENABLE KEYS */;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;


-- Dump completed on 2023-01-24 02:27:05
-- Total time: 0:0:0:0:917 (d:h:m:s:ms)
-- Database Controller v1.3.8 / b231
