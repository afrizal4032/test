-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for gbt
CREATE DATABASE IF NOT EXISTS `gbt` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gbt`;

-- Dumping structure for table gbt.lomba
CREATE TABLE IF NOT EXISTS `lomba` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(256) DEFAULT NULL,
  `penyelenggara` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table gbt.lomba: ~1 rows (approximately)
DELETE FROM `lomba`;
INSERT INTO `lomba` (`id`, `nama`, `penyelenggara`) VALUES
	(12, 'Rythem game', 'I.S.I.R');

-- Dumping structure for table gbt.pendaftaran
CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lomba` varchar(256) DEFAULT NULL,
  `pendaftar` varchar(256) DEFAULT NULL,
  `kelas` varchar(256) DEFAULT NULL,
  `nohp` varchar(256) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table gbt.pendaftaran: ~1 rows (approximately)
DELETE FROM `pendaftaran`;
INSERT INTO `pendaftaran` (`id`, `lomba`, `pendaftar`, `kelas`, `nohp`, `tanggal`) VALUES
	(9, 'Rythem game', 'afrizal', '1', '1234', '2024-11-11');

-- Dumping structure for table gbt.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table gbt.user: ~1 rows (approximately)
DELETE FROM `user`;
INSERT INTO `user` (`id`, `username`, `password`) VALUES
	(8, 'afrizal', '$2y$10$97E0Ov7dCuFp6wma8ElK.e60LjaStoqNRhZOFMQ8E0Rmh9rAJwRG6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
