/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.14-MariaDB : Database - tkd_yhc
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tkd_yhc` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `tkd_yhc`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`id_admin`,`username`,`password`,`update`) values 
(1,'admin-1','admin-1','2023-01-23 22:32:06'),
(2,'admin-2','admin-2','2023-01-23 22:32:06');

/*Table structure for table `daftar_mahasiswa` */

DROP TABLE IF EXISTS `daftar_mahasiswa`;

CREATE TABLE `daftar_mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama_mahasiswa` varchar(50) DEFAULT NULL,
  `program_studi` enum('Teknik Informatika','Sistem Informasi','Ilmu Komputer') NOT NULL,
  `semester` enum('1','2','3','4','5','6','7','8','9','10') DEFAULT NULL,
  `kelas` enum('A','B','C') DEFAULT NULL,
  `tahun_angkatan` year(4) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `daftar_mahasiswa` */

insert  into `daftar_mahasiswa`(`nim`,`nama_mahasiswa`,`program_studi`,`semester`,`kelas`,`tahun_angkatan`) values 
(191011,'Thomas Nurhuda','Teknik Informatika','8','A',2019),
(191016,'Ade Shofy','Teknik Informatika','8','A',2019),
(192017,'Ferdha Pratama','Sistem Informasi','8','B',2019),
(193011,'Firdaus Zailani','Ilmu Komputer','8','A',2019),
(201014,'Steven Suling','Sistem Informasi','6','C',2020),
(202011,'Jorgi Excel','Teknik Informatika','6','A',2020),
(203045,'zaky','Sistem Informasi','8','A',2020),
(213015,'Zidan Ramadhan','Ilmu Komputer','4','B',2021);

/*Table structure for table `detail_mahasiswa` */

DROP TABLE IF EXISTS `detail_mahasiswa`;

CREATE TABLE `detail_mahasiswa` (
  `id_detail` int(5) NOT NULL,
  `nim` int(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `nim` (`nim`),
  CONSTRAINT `detail_mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `daftar_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_mahasiswa` */

insert  into `detail_mahasiswa`(`id_detail`,`nim`,`tanggal_lahir`,`jenis_kelamin`,`alamat`,`no_hp`) values 
(201,191011,'2000-11-04','Laki-Laki','Jl. B Koetin Kecamatan Jekan Raya',815227305),
(202,191016,'2001-01-01','Laki-Laki','Jl. Surya 1 Galaksi Raya',823512823),
(203,192017,'2001-01-15','Laki-Laki','Jl Kenanga 3 Kecamatan Jekan Raya',833778899),
(204,193011,'2000-08-17','Laki-Laki','Jl. RTA Milono KM 2,5',812337722),
(205,201014,'2002-06-12','Laki-Laki','Kereng Bingkarai Palangka Raya',877665544),
(206,202011,'2001-01-15','Laki-Laki','Jl Badak Bercula ',8567890),
(207,213015,'2003-07-18','Laki-Laki','Jl. Ahmad Yani Palangka Raya',8243526);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
