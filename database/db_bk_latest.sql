/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.1.33-community : Database - db_bk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bk` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bk`;

/*Table structure for table `activities` */

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `event` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `activities` */

/*Table structure for table `background` */

DROP TABLE IF EXISTS `background`;

CREATE TABLE `background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `kode` varchar(75) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `background` */

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `pelanggan` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `industri` int(5) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `detail` text NOT NULL,
  `cover` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `clients` */

/*Table structure for table `content_menu` */

DROP TABLE IF EXISTS `content_menu`;

CREATE TABLE `content_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `sub` varchar(65) NOT NULL,
  `detail` text NOT NULL,
  `background` varchar(65) NOT NULL,
  `menu` char(1) NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `link` varchar(65) NOT NULL,
  `target` varchar(65) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `content_menu` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `start` varchar(25) NOT NULL,
  `end` varchar(25) NOT NULL,
  `perihal` varchar(25) NOT NULL,
  `uraian` text NOT NULL,
  `detail` text NOT NULL,
  `cover` varchar(65) NOT NULL,
  `flayer` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `events` */

/*Table structure for table `expertise` */

DROP TABLE IF EXISTS `expertise`;

CREATE TABLE `expertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `expertise` */

/*Table structure for table `gallery` */

DROP TABLE IF EXISTS `gallery`;

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyek` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `judul` varchar(125) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(25) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `gallery` */

/*Table structure for table `innovation` */

DROP TABLE IF EXISTS `innovation`;

CREATE TABLE `innovation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `event` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `innovation` */

/*Table structure for table `inspirator` */

DROP TABLE IF EXISTS `inspirator`;

CREATE TABLE `inspirator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) NOT NULL,
  `foto` varchar(65) NOT NULL,
  `keahlian` text NOT NULL,
  `uraian` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `inspirator` */

/*Table structure for table `market _analytics` */

DROP TABLE IF EXISTS `market _analytics`;

CREATE TABLE `market _analytics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `market _analytics` */

/*Table structure for table `master_data` */

DROP TABLE IF EXISTS `master_data`;

CREATE TABLE `master_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(5) NOT NULL,
  `kategori` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(25) NOT NULL,
  `urut` varchar(5) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `spesifik` char(1) NOT NULL,
  `target` varchar(65) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `master_data` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(5) NOT NULL,
  `kategori` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `target` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `urut` char(3) NOT NULL,
  `file` varchar(65) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `sumber` varchar(125) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `news` */

/*Table structure for table `proyek` */

DROP TABLE IF EXISTS `proyek`;

CREATE TABLE `proyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `proyek` text NOT NULL,
  `penjelasan` text NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `waktu` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `case_study` text NOT NULL,
  `testimoni` text NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `proyek` */

/*Table structure for table `request_user` */

DROP TABLE IF EXISTS `request_user`;

CREATE TABLE `request_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telp` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `jawaban` text NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `request_user` */

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `services` */

/*Table structure for table `setting` */

DROP TABLE IF EXISTS `setting`;

CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(125) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telp` varchar(65) NOT NULL,
  `fb` varchar(65) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `youtube` varchar(125) NOT NULL,
  `logo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `setting` */

/*Table structure for table `user_admin` */

DROP TABLE IF EXISTS `user_admin`;

CREATE TABLE `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(65) DEFAULT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `kategori` int(5) DEFAULT NULL,
  `keterangan` text,
  `foto` varchar(65) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_by` varchar(65) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user_admin` */

insert  into `user_admin`(`id`,`nama`,`email`,`user`,`pass`,`kategori`,`keterangan`,`foto`,`status`,`created_by`,`created_date`) values (1,'Administrator',NULL,'admin','e10adc3949ba59abbe56e057f20f883e',NULL,NULL,NULL,'1','Administrator','2015-04-12 19:39:56');

/*Table structure for table `user_akses` */

DROP TABLE IF EXISTS `user_akses`;

CREATE TABLE `user_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `akses` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `user_akses` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
