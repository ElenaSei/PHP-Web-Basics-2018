-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.36-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for softuni
CREATE DATABASE IF NOT EXISTS `exam` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `exam`;

-- Dumping structure for table softuni.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping structure for table softuni.genre
CREATE TABLE IF NOT EXISTS `genre` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping structure for table softuni.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `genre_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `genre_bookFK` (`genre_id`),
  KEY `user_bookFK` (`user_id`),
  CONSTRAINT `genre_bookFK` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  CONSTRAINT `user_bookFK` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*
-- Dumping data for table softuni.books: ~5 rows (approximately)
DELETE FROM `books`;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `genre_id`, `user_id`, `added_on`) VALUES
	(13, 'titanic', '4112', '', '', 1, 16, '2018-11-06 16:47:47');
INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `genre_id`, `user_id`, `added_on`) VALUES
	(14, 'Titanik2', 'Mark Tven', 'Mnogo qka kniga brato', 'https://www.google.bg/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwiSl_L0j8DeAhUSaVAKHZt0CUYQjRx6BAgBEAU&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FRMS_Titanic&psig=AOvVaw3cLdAbb_52uUwf5SUMHkaS&ust=1541605970076074', 1, 16, '2018-11-06 17:53:11');
INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `genre_id`, `user_id`, `added_on`) VALUES
	(15, 'titanik', 'Jamie Oliver', 'Mnogo qka kniga chovek!!!', 'https://i2.wp.com/www.titanicuniverse.com/wp-content/uploads/2009/10/titanic11.jpg', 1, 17, '2018-11-08 16:40:49');
INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `genre_id`, `user_id`, `added_on`) VALUES
	(16, 'title2', 'ÐœÐ°Ñ€Ñ‚Ð¸Ð½ Ð“ÐµÐ¾Ñ€Ð³Ð¸ÐµÐ²', 're', 'fdsfd', 1, 19, '2018-11-08 17:49:51');
INSERT INTO `books` (`id`, `title`, `author`, `description`, `image`, `genre_id`, `user_id`, `added_on`) VALUES
	(17, 'sa', 'dsad', 'dsa', 'das', 3, 19, '2018-11-08 17:50:09');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;


-- Dumping data for table softuni.genre: ~3 rows (approximately)
DELETE FROM `genre`;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` (`genre_id`, `name`) VALUES
	(1, 'Horror');
INSERT INTO `genre` (`genre_id`, `name`) VALUES
	(2, 'Educational');
INSERT INTO `genre` (`genre_id`, `name`) VALUES
	(3, 'Adventure');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;



-- Dumping data for table softuni.users: ~4 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
	(16, 'a', '$2y$10$qoS.i1r4JBXDamBCfcWiKeGU9cWQ7VvrSez/nj0kbK1LJzputYgQm', 'a', 'a');
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
	(17, 'z', '$2y$10$7/Mm3cU0HgnQnTBPyiQjk.JsFv9legMoXEuz2EnIojx492OpUq4X2', 'z', 'z');
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
	(18, 's', '$2y$10$he48R/sarnd3kr9cffCfRunC37gquPEsgo2upbuktlnclG4OPS.kq', 's', 's');
INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
	(19, 'nakov', '$2y$10$Jh9OV7LsbiCBeRRQ1koL9OEpYDu29UtcrZkcaMWSuFvrfbUOA9re2', 'Svetlin', 'Nakov');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
*/