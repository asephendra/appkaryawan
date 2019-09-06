/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.36-MariaDB : Database - crudmysqli
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `karyawan` */

CREATE TABLE `karyawan` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `karyawan` */

insert  into `karyawan`(`id`,`nama`,`jenkel`,`jabatan`,`no_hp`,`alamat`) values (3,'Heru','on','Jabatan','081290000000','Jakarta'),(4,'Gungun','Pria','Jabatan','0820000000','Jakarta'),(5,'Yuyun','Wanita','Admin','081200000','Bandung');

/*Table structure for table `kehadiran` */

CREATE TABLE `kehadiran` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(3) NOT NULL,
  `tgl` date NOT NULL,
  `datang` time NOT NULL,
  `pulang` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `karyawan_id` (`karyawan_id`),
  CONSTRAINT `kehadiran_ibfk_1` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawan` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `kehadiran` */

insert  into `kehadiran`(`id`,`karyawan_id`,`tgl`,`datang`,`pulang`) values (3,3,'2019-02-28','02:20:00','16:00:00'),(4,5,'2019-08-17','05:00:00','16:00:00'),(5,4,'2000-01-25','01:02:00','16:00:00'),(6,5,'2001-03-29','00:00:00','16:00:00'),(7,3,'2010-01-30','07:00:00','16:00:00'),(8,4,'2019-09-05','07:00:00','16:00:00'),(9,3,'2019-09-01','02:20:00','16:00:00'),(10,3,'2019-01-31','02:20:00','16:00:00');

/*Table structure for table `user` */

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `edit_via` varchar(60) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`userid`,`firstname`,`lastname`,`edit_via`) values (1,'neovic','devierte','MySQLi Object-oriented'),(2,'lee','ann','MySQLi Procedural');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
