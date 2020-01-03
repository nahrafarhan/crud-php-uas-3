-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.37-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for jaya_hospital
CREATE DATABASE IF NOT EXISTS `jaya_hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jaya_hospital`;

-- Dumping structure for table jaya_hospital.assets
CREATE TABLE IF NOT EXISTS `assets` (
  `asset_id` varchar(30) NOT NULL,
  `asset_cat` varchar(30) DEFAULT NULL,
  `asset_name` varchar(50) DEFAULT NULL,
  `lokasi` varchar(30) DEFAULT NULL,
  `condition` tinytext,
  PRIMARY KEY (`asset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table jaya_hospital.usergroup
CREATE TABLE IF NOT EXISTS `usergroup` (
  `group_code` varchar(20) NOT NULL DEFAULT '',
  `group_name` varchar(30) NOT NULL DEFAULT '',
  `created_by` varchar(50) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT NULL,
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `modified_by` varchar(50) NOT NULL,
  PRIMARY KEY (`group_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table jaya_hospital.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` varchar(20) NOT NULL DEFAULT '',
  `first_name` varchar(20) NOT NULL DEFAULT '',
  `last_name` varchar(20) NOT NULL DEFAULT '',
  `email` varchar(30) NOT NULL DEFAULT '',
  `password` varbinary(50) NOT NULL DEFAULT '',
  `created_by` varchar(30) NOT NULL DEFAULT '',
  `created_date` datetime DEFAULT NULL,
  `modified_by` varchar(50) NOT NULL DEFAULT '',
  `modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `user_group` varchar(20) DEFAULT '',
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
