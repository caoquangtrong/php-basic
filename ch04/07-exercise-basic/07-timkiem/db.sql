/*
SQLyog Ultimate - MySQL GUI v8.21 
MySQL - 5.5.20 : Database - basic
*********************************************************************
*/
 
 
/*!40101 SET NAMES utf8 */;
 
/*!40101 SET SQL_MODE=''*/;
 
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`basic` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
 
USE `basic`;
 
/*Table structure for table `users` */
 
DROP TABLE IF EXISTS `users`;
 
CREATE TABLE `users` (
  `user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 
/*Data for the table `users` */
 
insert  into `users`(`user_id`,`username`,`password`,`email`,`address`) values 
(1,'kaito','456','kaito@freetuts.net','House USA'),
(2,'thehaftheart','456','thehaftheart@freetuts.net','House USA'),
(3,'superkaito','456','superkaito@gmail.com','House Viet Nam'),
(4,'kaitosolo','1789','kaito@yahô.com','abc/fdc'),
(5,'van canh','798','vancanh@freetuts.net','Bien hoa'),
(6,'yongc','789','yongc@freetuts.net','Bien Hoa'),
(7,'haftheart789','789','haftheart789@yahoo.com','Ha tinh'),
(8,'yongc456','56465','yongc789@gmail.com','Bien Hoa 2'),
(9,'van canh456','564564','vancanh@gmail.com','Bien Hoa 3'),
(10,'kaitocode','87897','kaitocode@yahoo.com','TPHCM');
 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;