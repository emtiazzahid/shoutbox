-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 07:59 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_shout`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shouts`
--

CREATE TABLE `tbl_shouts` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sms` text NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shouts`
--

INSERT INTO `tbl_shouts` (`id`, `name`, `sms`, `time`) VALUES
(1, 'zahid', 'hi i am zahid', '10:35:00'),
(2, 'emtiaz', 'hi i am emtiaz', '10:36:00'),
(3, 'antora', 'hi i am antora', '10:37:00'),
(4, 'parvin', 'hi i am parvin', '10:39:00'),
(5, 'atia', 'hi i am atia', '10:40:00'),
(6, 'zahid', 'hi i am zahid', '10:35:00'),
(7, 'emtiaz', 'hi i am emtiaz', '10:36:00'),
(8, 'antora', 'hi i am antora', '10:37:00'),
(9, 'parvin', 'hi i am parvin', '10:39:00'),
(10, 'atia', 'hi i am atia', '10:40:00'),
(11, 'antora', 'zzzzzzzzzzzzzzzzz', '11:54:44'),
(12, 'antora', 'aaa', '11:55:47'),
(13, 'zahid', 'zzzzzzzzzzzzzzzzz', '11:56:37'),
(14, 'antora', 'hello', '11:57:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_shouts`
--
ALTER TABLE `tbl_shouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_shouts`
--
ALTER TABLE `tbl_shouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
