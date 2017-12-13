/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 5.6.21 : Database - bimbel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bimbel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bimbel`;

/*Table structure for table `grup_bimbel` */

DROP TABLE IF EXISTS `grup_bimbel`;

CREATE TABLE `grup_bimbel` (
  `ID_BIMBEL` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `NAMA_BIMBEL` varchar(100) DEFAULT NULL,
  `ALAMAT_BIMBEL` text,
  `TELEPON_BIMBEL` varchar(12) DEFAULT NULL,
  `EMAIL_BIMBEL` varchar(100) DEFAULT NULL,
  `KONSENTRASI_BIMBEL` text,
  `STATUS_BIMBEL` varchar(10) DEFAULT NULL,
  `RATING_BIMBEL` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_BIMBEL`),
  KEY `FK_MEMPUNYAI` (`ID_USER`),
  CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `grup_bimbel` */

/*Table structure for table `jadwal` */

DROP TABLE IF EXISTS `jadwal`;

CREATE TABLE `jadwal` (
  `IDJADWAL` int(11) NOT NULL,
  `ID_BIMBEL` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TGLJADWAL` date DEFAULT NULL,
  `LOKASIJADWAL` varchar(100) DEFAULT NULL,
  `JAMMULAI` time DEFAULT NULL,
  `JAMSELESAI` time DEFAULT NULL,
  `MATERI` text,
  PRIMARY KEY (`IDJADWAL`),
  KEY `FK_BERTANGGUNG_JAWAB` (`ID_USER`),
  KEY `FK_MEMBUAT_JADWAL_LES` (`ID_BIMBEL`),
  CONSTRAINT `FK_BERTANGGUNG_JAWAB` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`),
  CONSTRAINT `FK_MEMBUAT_JADWAL_LES` FOREIGN KEY (`ID_BIMBEL`) REFERENCES `grup_bimbel` (`ID_BIMBEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `jadwal` */

/*Table structure for table `kelas_umum` */

DROP TABLE IF EXISTS `kelas_umum`;

CREATE TABLE `kelas_umum` (
  `ID_KELAS` int(11) NOT NULL,
  `ID_BIMBEL` int(11) DEFAULT NULL,
  `NAMA_KELAS` varchar(100) DEFAULT NULL,
  `KUOTA_KELAS` int(11) DEFAULT NULL,
  `HARI_PELAKSANA` varchar(20) DEFAULT NULL,
  `JUMLAH_PERTEMUAN` int(11) DEFAULT NULL,
  `TANGGAL_PELAKSANAAN` date DEFAULT NULL,
  `TANGGAL_SELESAI` date DEFAULT NULL,
  `STATUS_KELAS` varchar(10) DEFAULT NULL,
  `LOKASI_KELAS` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_KELAS`),
  KEY `FK_MEMBUAT_KELAS_UMUM` (`ID_BIMBEL`),
  CONSTRAINT `FK_MEMBUAT_KELAS_UMUM` FOREIGN KEY (`ID_BIMBEL`) REFERENCES `grup_bimbel` (`ID_BIMBEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kelas_umum` */

/*Table structure for table `kotak_saran` */

DROP TABLE IF EXISTS `kotak_saran`;

CREATE TABLE `kotak_saran` (
  `ID_SARAN` int(11) NOT NULL,
  `TGL_INPUT` date DEFAULT NULL,
  `NAMA_PENGIRIM` varchar(100) DEFAULT NULL,
  `EMAIL_PENGIRIM` varchar(100) DEFAULT NULL,
  `TENTANG` varchar(100) DEFAULT NULL,
  `ISI_SARAN` text,
  `STATUS_SARAN` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID_SARAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kotak_saran` */

/*Table structure for table `memership` */

DROP TABLE IF EXISTS `memership`;

CREATE TABLE `memership` (
  `IDMEMBER` int(11) NOT NULL,
  `ID_BIMBEL` int(11) DEFAULT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `TANGGALJOIN` date DEFAULT NULL,
  PRIMARY KEY (`IDMEMBER`),
  KEY `FK_BERGABUNG_DENGAN_GRUP` (`ID_USER`),
  KEY `FK_MEMPUNYAI_MEMBER` (`ID_BIMBEL`),
  CONSTRAINT `FK_BERGABUNG_DENGAN_GRUP` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`),
  CONSTRAINT `FK_MEMPUNYAI_MEMBER` FOREIGN KEY (`ID_BIMBEL`) REFERENCES `grup_bimbel` (`ID_BIMBEL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `memership` */

/*Table structure for table `pengumuman` */

DROP TABLE IF EXISTS `pengumuman`;

CREATE TABLE `pengumuman` (
  `ID_PENGUMUMAN` int(11) NOT NULL,
  `JUDUL_PENGUMUMAN` varchar(100) DEFAULT NULL,
  `KONTEN_PENGUMUMAN` text,
  `TEMPAT_PELAKSANAAN` varchar(100) DEFAULT NULL,
  `TANGGAL_PENGUMUMAN` date DEFAULT NULL,
  `STATUS_PENGUMUMAN` varchar(50) DEFAULT NULL,
  `NAMA_PEMBUAT` varchar(100) DEFAULT NULL,
  `EMAIL_PEMBUAT` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_PENGUMUMAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pengumuman` */

/*Table structure for table `reward` */

DROP TABLE IF EXISTS `reward`;

CREATE TABLE `reward` (
  `ID_REWARD` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `POINT_REWARD` float DEFAULT NULL,
  `KETERANGAN_REWARD` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_REWARD`),
  KEY `FK_MENDAPATKAN` (`ID_USER`),
  CONSTRAINT `FK_MENDAPATKAN` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reward` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_LENGKAP` varchar(100) DEFAULT NULL,
  `ALAMAT` text,
  `TELEPON` varchar(12) DEFAULT NULL,
  `EMAILUSER` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(12) DEFAULT NULL,
  `PASSWORD_LOG` text,
  `GRADE_USER` varchar(50) DEFAULT NULL,
  `STATUS_AKTIF` varchar(20) DEFAULT NULL,
  `KONFIRMASI` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
