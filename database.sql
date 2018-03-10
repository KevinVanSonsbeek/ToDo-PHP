-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                5.6.37 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van php_todo wordt geschreven
CREATE DATABASE IF NOT EXISTS `php_todo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `php_todo`;

-- Structuur van  tabel php_todo.lists wordt geschreven
CREATE TABLE IF NOT EXISTS `lists` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_name` varchar(255) NOT NULL,
  `list_description` varchar(255) NOT NULL,
  PRIMARY KEY (`list_id`),
  KEY `list_id` (`list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel php_todo.lists: ~1 rows (ongeveer)
/*!40000 ALTER TABLE `lists` DISABLE KEYS */;
INSERT INTO `lists` (`list_id`, `list_name`, `list_description`) VALUES
	(1, 'List Number unos', 'Small list description');
/*!40000 ALTER TABLE `lists` ENABLE KEYS */;

-- Structuur van  tabel php_todo.tasks wordt geschreven
CREATE TABLE IF NOT EXISTS `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `list_id` int(11) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `task_description` varchar(50) NOT NULL,
  `task_status` enum('Completed','In Progress','Concept') NOT NULL,
  `task_duration` time NOT NULL,
  UNIQUE KEY `task_id` (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel php_todo.tasks: ~2 rows (ongeveer)
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` (`task_id`, `list_id`, `task_name`, `task_description`, `task_status`, `task_duration`) VALUES
	(10, 1, '1', '123123', 'Concept', '00:00:00'),
	(11, 1, '3', '123123', 'Completed', '00:00:00');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
