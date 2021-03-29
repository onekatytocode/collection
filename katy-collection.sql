# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: katy-collection
# Generation Time: 2021-03-29 12:50:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table sneakers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sneakers`;

CREATE TABLE `sneakers` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `year-released` year(4) DEFAULT NULL,
  `color-way` varchar(200) DEFAULT NULL,
  `size` varchar(10) DEFAULT '',
  `price` varchar(50) DEFAULT NULL,
  `images` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `sneakers` WRITE;
/*!40000 ALTER TABLE `sneakers` DISABLE KEYS */;

INSERT INTO `sneakers` (`id`, `name`, `year-released`, `color-way`, `size`, `price`, `images`)
VALUES
	(1,'neon-nike','2011','black / neon green','4-13','£1550',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F6E656F6E6E696B652E706E67'),
	(2,'backtothefuture-nike','2020','grey / pink /blue','5-11','£2290',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F627474666E696B652E706E67'),
	(3,'gold-nike','2015','pure gold','7-13','£5150',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F676F6C646E696B652E706E67'),
	(4,'tmnt-nike','2018','green / red - green / blue - green / orange - green / purple','3-10','£1600',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F746D6E746E696B652E706E67'),
	(5,'darth-nike','2019','black / white','6-13','£1800',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F64617274686E696B652E706E67'),
	(6,'benandjerry-nike','2021','multi','3-12','£2500',X'70726F6A656374322F636F6C6C656374696F6E2F696D616765732F62656E6A657272796E696B652E706E67');

/*!40000 ALTER TABLE `sneakers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;