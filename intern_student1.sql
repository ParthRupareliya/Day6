-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 08:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern_student1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student11`
--

CREATE TABLE `tbl_student11` (
  `s_id` int(10) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_gender` varchar(20) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_mobile` bigint(20) NOT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_city` varchar(20) NOT NULL,
  `s_collage` varchar(30) NOT NULL,
  `s_branch` varchar(50) NOT NULL,
  `s_sem` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student11`
--

INSERT INTO `tbl_student11` (`s_id`, `s_name`, `s_gender`, `s_email`, `s_mobile`, `s_address`, `s_city`, `s_collage`, `s_branch`, `s_sem`) VALUES
(0, '', 'male', '', 0, '', '', '', '', 0),
(0, '', 'male', '', 0, '', '', '', '', 0),
(201, 'parth', 'male', 'suraj@gmail.com', 9664780136, 'vanzari chowk ', 'junagadh', 'dstc', 'computer', 5),
(120, 'parth', 'male', 'parth@gmail.com', 9664780136, 'vanzari chowk ', 'junagadh', 'dstc', 'computer', 5),
(121, 'shyam', 'male', 'shyam@gmail.com', 9664780136, 'joshipara', 'junagadh', 'dstc', 'computer', 9),
(101, 'hitesh', 'male', 'parth@gmail.com', 9664780136, 'moti tanki', 'Veraval', 'dstc', 'computer', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
