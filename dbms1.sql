-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2020 at 04:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(255) NOT NULL,
  `pas` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `pas`) VALUES
('abc@gmail', 'abc'),
('sagir.akhtar387@gmail.com', '123'),
('sagir.akhtar387@gmail.com', '123'),
('sani@123.gmail.com', 'sani');

-- --------------------------------------------------------

--
-- Table structure for table `webupload`
--

CREATE TABLE `webupload` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `season` int(11) DEFAULT NULL,
  `episode` int(11) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `imdb` varchar(255) DEFAULT NULL,
  `imageinput` varchar(255) DEFAULT NULL,
  `videoinput` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webupload`
--

INSERT INTO `webupload` (`id`, `name`, `genre`, `season`, `episode`, `duration`, `rating`, `imdb`, `imageinput`, `videoinput`) VALUES
(NULL, 'Mirzapur', 'Thriller', 2, 8, '45 min approx', '4 star', '4 star', 'mirzapur.jpg', 'mirzapur.mp4'),
(NULL, '19mcmc28', 'Drama', 9, 3, '12 min', '1 star', '1 star', 'watchanywhere.jpg', ''),
(NULL, 'rozy Akhtar', 'Drama', 1, -1, '9', '3 star', '4 star', 'watchanywhere.jpg', ''),
(NULL, 'hero', 'Thriller', 1, 5, '3', '2 star', '4 star', 'mirzapur.mp4', 'watchanywhere.jpg'),
(NULL, 'lollypop', 'Comedy', 2, 3, '12 min', '1 star', '1 star', 'kobrakai.jpg', 'Pal Pal Dil Ke Paas – Title Song - Lyrical - Karan Deol, Sahher Bambba - Arijit Singh, Parampara.webm'),
(NULL, 'mirzar', 'Comedy', 12, 14, '12min', '1 star', '1 star', 'mirzapur.jpg', 'mirzapur.mp4'),
(NULL, 'saurabh', 'Sci-fi/Fantacy', 12, 25, '12min', '1 star', '1 star', 'ggtd.jpg', 'mmmmm.mp4'),
(NULL, 'xnxx', 'Drama', 12, 32, '12 min', '1 star', '1 star', '5.jpg', 'VID-20200820-WA0002.mp4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
