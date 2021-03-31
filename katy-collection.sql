# ************************************************************
# Sequel Pro SQL dump
# Version 5446
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: katy-collection
# Generation Time: 2021-03-31 15:15:24 +0000
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
  `images` varchar(255) DEFAULT '',
  `price` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `sneakers` WRITE;
/*!40000 ALTER TABLE `sneakers` DISABLE KEYS */;

INSERT INTO `sneakers` (`id`, `name`, `year-released`, `color-way`, `size`, `images`, `price`)
VALUES
	(1,'Neon -nike','2011','black / neon green','4-13','images/neonnike.png',1550),
	(2,'Back To The Future -nike','2020','grey / pink /blue','5-11','images/bttfnike.png',2250),
	(3,'Gold -nike','2015','pure gold','7-13','images/goldnike.png',5590),
	(4,'TMNT -nike','2018','green / red - green / blue - green / orange - green / purple','3-10','images/tmntnike.png',1220),
	(5,'Darth -nike','2019','black / white','6-13','images/darthnike.png',1300),
	(6,'Ben and Jerrys -nike','2021','multi','3-12','images/benjerrynike.png',1900);

/*!40000 ALTER TABLE `sneakers` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
