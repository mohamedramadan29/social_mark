-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2021 at 08:21 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myform`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `info_id` int(11) NOT NULL,
  `info_name` varchar(200) NOT NULL,
  `info_mobile` varchar(100) NOT NULL,
  `info_email` varchar(200) NOT NULL,
  `info_store` varchar(300) NOT NULL,
  `info_info` varchar(300) NOT NULL,
  `info_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`info_id`, `info_name`, `info_mobile`, `info_email`, `info_store`, `info_info`, `info_date`) VALUES
(6, 'mohamed ramadan', '01011642731', 'mr319242@gmail.com', 'freeancer', 'hello my name is mohamed ', '2021-10-27 09:15:19'),
(13, 'hassan', '01011642731', 'mr319242@gmail.com', 'healthy', 'this is new heathy', '2021-10-27 09:15:19'),
(14, 'shima', '01011642731', 'mr319242@gmail.com', 'shima', 'ihih;ihuoih', '2021-10-27 09:23:57'),
(15, 'mohamed ramadan', '01011642731', 'mr319242@gmail.com', 'heloo', 'hello my  name is mohamed ', '2021-10-27 14:39:14'),
(16, 'mohamed ramadan', '01011642731', 'mr319242@gmail.com', 'asczx', 'wqdasczx', '2021-10-28 07:17:38');

-- --------------------------------------------------------

--
-- Table structure for table `serv`
--

CREATE TABLE `serv` (
  `serv_id` int(11) NOT NULL,
  `serv_name` varchar(200) NOT NULL,
  `serv_desc` varchar(300) NOT NULL,
  `serv_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serv`
--

INSERT INTO `serv` (`serv_id`, `serv_name`, `serv_desc`, `serv_image`) VALUES
(5, 'عرض اليوم الوطني', '', '31048584.A1.jpg'),
(6, 'اعلان دورة', '', '91958619.A2.png'),
(7, 'اعلان افتتاح', '', '90850830.A3.png'),
(9, 'اعلان توصيل', '', '89434815.A4.jpg'),
(10, 'دعوة شركة', '', '60034180.A5.png'),
(11, 'تصميم بوست انستقرام', '', '20443725.A6.png'),
(12, 'تصميم انستقرام ', '', '43899536.A7.png'),
(13, 'اعلان عطور', '', '86352539.A8.png'),
(14, 'اعلان ساعات العمل لرمضان', '', '8660888.A9.png'),
(15, 'حملة توعية سرطان الثدي', '', '37600708.A10.png'),
(16, 'اعلان العودة للمدرسة ', '', '22335815.A11.png'),
(17, 'اعلان شاغر وظيفي', '', '47088623.A12.png'),
(18, 'اعلان توصيل جاهز', '', '73840332.A13.png'),
(19, 'بوست انستقرام ', '', '35958862.A14.jpg'),
(20, 'بوست انستقرام', '', '30020141.A15.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `serv`
--
ALTER TABLE `serv`
  ADD PRIMARY KEY (`serv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `serv`
--
ALTER TABLE `serv`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
