-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 07, 2022 at 07:23 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal_det`
--

DROP TABLE IF EXISTS `animal_det`;
CREATE TABLE IF NOT EXISTS `animal_det` (
  `name` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `image` longblob NOT NULL,
  `description` varchar(255) NOT NULL,
  `life` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animal_det`
--

INSERT INTO `animal_det` (`name`, `category`, `image`, `description`, `life`) VALUES
('cat', 'carnivores', 0x636174312e6a7067, 'cats are furry animals that have got four legs and a tail.', '10+ years'),
('lion', 'carnivores', 0x6c696f6e2e6a7067, 'The lion is famous for his roar,his large body and hunting ability.', '10+ years');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
