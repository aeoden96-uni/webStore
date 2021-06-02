-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2021 at 06:44 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dz2`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_croatian_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_croatian_ci NOT NULL,
  `price` decimal(15,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_user`, `name`, `description`, `price`) VALUES
(1, 1, 'Cell Phone Carbon Fiber Soft Cover Case', 'Your device will be attractive and usable while protected from scratches in this Stylish New case. Protect your phone from scratches, dust or damages. It moulds perfectly to your phone\\\'s shape while providing easy access to vital functions.', '0.99'),
(2, 2, '50mm Foam Pads Headphone Cover Cap', 'Durable and soft The ear foam will enhance the bass performance of your headphones More confortable for your ears.', '2.04'),
(3, 1, 'Phosphor Bronze extra Light Acoustic Guitar Strings', 'Lightest gauge of acoustic strings, ideal for beginners or any player that prefers a softer tone and easy bending. Phosphor Bronze was introduced to string making in 1974 and has become synonymous with warm, bright, and well balanced acoustic tone. Phosphor Bronze strings are precision wound with corrosion resistant phosphor bronze onto a carefully drawn, hexagonally shaped, high carbon steel core. The result is long lasting, bright sounding tone with excellent intonation.', '7.89'),
(9, 1, 'new', 'new', '4.00'),
(4, 3, '30 Used Tennis Balls - Branded. Very Clean.', 'Good condition. All are clean. Branded balls. We have sold over 400,000''
-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(1000) COLLATE utf8_croatian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_product`, `id_user`, `rating`, `comment`) VALUES
(1, 1, 4, 5, 'Excellent. Very happy.'),
(2, 1, 5, 3, 'Could be better...'),
(3, 1, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 1, NULL, NULL),
(6, 3, 5, 5, 'Great guitar strings. Would buy again.'),
(7, 3, 3, 4, 'Pretty good strings.'),
(8, 4, 1, 5, 'Great tennis balls, I can now play for the whole year!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_croatian_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `score` int(11) DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_croatian_ci NOT NULL,
  `registration_sequence` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `has_registered` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `score`, `email`, `registration_sequence`, `has_registered`) VALUES
(1, NULL, 'mirko', '$2y$10$rYAHakHlq.DMpI43DdE/re52anD7ErkLAXLinn5SHpgtcjxIxaZSG', NULL, 'mirko@mirko.mr', 'rpdpnkwzrcfvhcghjnyn', 1),
(2, NULL, 'slavko', '$2y$10$BBjBT.kMCPzO8uYtrG8FeObI04rPd9sHAJNYwJU9TGTz.2LJ2XSvq', NULL, 'slavko@slavko.sl', 'mfpoyidvvtkehwyxrllf', 1),
(3, NULL, 'ana', '$2y$10$ymgSvIf4i1KYhtQ3EnOg.eYI3C9ZCOtLZmpQ0QOfCqD.okf.VbyVO', NULL, 'ana@ana.an', 'vuzvajujomfhfufmeojr', 1),
(4, NULL, 'maja', '$2y$10$eao5/OWJucLGxC2gqC2pLOuGG1D5Uz47QI56Y31Bd7dFDrquU5u2C', NULL, 'maja@maja.mj', 'jhmjqojurxhwkpdwergg', 1),
(5, NULL, 'pero', '$2y$10$knDT.XkpAjQTnE0AuODac.PbYFNKs2QJ45zDMOaJG.ts6UCMej9U.', NULL, 'pero@pero.pr', 'bynhefxhlfksznnoeprz', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
