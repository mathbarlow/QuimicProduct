/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - jac
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jac` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`description`,`code`,`status`) values (29,'TINNER\r\n','NAFTA  SOLVENTE\nADELGAZANTE DE PINTURAS','64742-89-3\r\n',''),(30,'LUBRICANTE CRC','LUBRICANTE PENETRANTE','124-38-9 _ 64742-47-8',''),(31,'GAS PROPANO \r\n','LPG GAS PETROLATO GAS - LIQUIDO \r\n','Mezclas',''),(32,'LUBRICANTE PVC','DETERGENTE BASE DE OLEO\r\n','112-80-1','');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `profile` int(11) DEFAULT NULL,
  `status` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`profile`,`status`) values (1,'jorge','202cb962ac59075b964b07152d234b70',3,''),(2,'andres','202cb962ac59075b964b07152d234b70',2,''),(3,'cardenas','202cb962ac59075b964b07152d234b70',1,''),(4,'Juan Perry','a53cf34b6f20b5d8a7170774c44f55c3',1,''),(5,'Pedro','d41d8cd98f00b204e9800998ecf8427e',1,'\0'),(6,'Luis Fernando','d41d8cd98f00b204e9800998ecf8427e',2,'\0'),(7,'Luisa Fernanda','c8ecb22638a3867ab1474d3e5a3d1d37',2,''),(8,'Katherine','d41d8cd98f00b204e9800998ecf8427e',1,''),(9,'Kilombo','d41d8cd98f00b204e9800998ecf8427e',1,''),(10,'Rosa','d41d8cd98f00b204e9800998ecf8427e',2,''),(11,'Patricio','d41d8cd98f00b204e9800998ecf8427e',2323,''),(12,'rafael','d41d8cd98f00b204e9800998ecf8427e',22,''),(13,'Angie Karen','d41d8cd98f00b204e9800998ecf8427e',2,''),(14,'Jenny','d41d8cd98f00b204e9800998ecf8427e',2,''),(15,'leo','d41d8cd98f00b204e9800998ecf8427e',1,''),(16,'Oer','d41d8cd98f00b204e9800998ecf8427e',21,''),(17,'karen','d41d8cd98f00b204e9800998ecf8427e',1,''),(18,'juliana','d41d8cd98f00b204e9800998ecf8427e',12,''),(19,'karenth','d41d8cd98f00b204e9800998ecf8427e',23,''),(20,'rasputin con pepos','202cb962ac59075b964b07152d234b70',2,''),(21,'dfgdfg','d41d8cd98f00b204e9800998ecf8427e',1,''),(22,'kosl','d41d8cd98f00b204e9800998ecf8427e',2,''),(23,'keripos','d41d8cd98f00b204e9800998ecf8427e',1,''),(24,'mansjd','d41d8cd98f00b204e9800998ecf8427e',3434,''),(25,'john','d41d8cd98f00b204e9800998ecf8427e',1,''),(26,'perra hijueputa','acf7ef943fdeb3cbfed8dd0d8f584731',1,''),(27,'Angelica bibiana','74be16979710d4c4e7c6647856088456',1,''),(28,'lucho','d41d8cd98f00b204e9800998ecf8427e',1,''),(29,'TINNER','d41d8cd98f00b204e9800998ecf8427e',64742,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
