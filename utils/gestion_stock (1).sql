-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2023 at 06:24 AM
-- Server version: 8.0.27
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` decimal(10,2) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id`, `title`, `price`, `quantity`, `category`) VALUES
(1, 'title', '10.00', '10.00', '10'),
(2, 'title', '10.00', '10.00', 'ppp'),
(3, 'TIT11', '10.00', '10.00', 'ppp'),
(4, 'TIT11', '10.00', '10.00', 'ppp'),
(5, 'TIT11', '10.00', '10.00', 'ppp'),
(6, 'TIT11', '10.00', '10.00', 'ppp'),
(7, 'TIT11', '10.00', '10.00', 'ppp'),
(8, 'TIT11', '10.00', '10.00', 'ppp'),
(9, 'TIT11', '10.00', '10.00', 'ppp'),
(10, 'tit112', NULL, NULL, NULL),
(11, 'tit112', NULL, NULL, NULL),
(12, 'tryuioj', '10.00', '1.00', 'dfg'),
(13, 'tryuioj', '10.00', '1.00', 'dfg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `telephone`, `address`) VALUES
(1, 'anas', 'anas', 'anas@gmail.com', '', ''),
(2, 'aissa', 'aissa', 'aissa@gmail.com', '', ''),
(3, 'aissa', 'aissa', 'aissa@gmail.com', '', ''),
(4, 'mounaim', 'mounaim', 'mounaim@gmail.com', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
