-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 10, 2020 at 12:39 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `build_back_beirut`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

DROP TABLE IF EXISTS `property`;
CREATE TABLE IF NOT EXISTS `property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `property_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL,
  `material_1_needed` int(11) NOT NULL,
  `material_1_acquired` int(11) NOT NULL,
  `material_2_needed` int(11) NOT NULL,
  `material_2_acquired` int(11) NOT NULL,
  `material_3_needed` int(11) NOT NULL,
  `material_3_acquired` int(11) NOT NULL,
  `material_4_needed` int(11) NOT NULL,
  `material_4_acquired` int(11) NOT NULL,
  `material_5_needed` int(11) NOT NULL,
  `material_5_acquired` int(11) NOT NULL,
  `material_6_needed` int(11) NOT NULL,
  `material_6_acquired` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `property_name`, `property_description`, `longitude`, `latitude`, `material_1_needed`, `material_1_acquired`, `material_2_needed`, `material_2_acquired`, `material_3_needed`, `material_3_acquired`, `material_4_needed`, `material_4_acquired`, `material_5_needed`, `material_5_acquired`, `material_6_needed`, `material_6_acquired`, `status`) VALUES
(3, 'Gemmayze Holding', 'This is a historic building with dummy data,dummy data,dummy data,dummy data,dummy data,dummy data,dummy data,dummy data,dummy data,dummy data,dummy data.', 33, 35.5099, 200, 140, 500, 460, 300, 140, 780, 440, 260, 100, 600, 220, 2),
(4, 'Mar Mkhayel Residence', 'Dummy data, Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,Dummy data,v', 33.8952, 35.5107, 300, 20, 200, 50, 800, 340, 200, 40, 340, 120, 420, 120, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
