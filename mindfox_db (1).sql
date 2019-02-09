-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 12:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mindfox_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_tbl`
--

CREATE TABLE `address_tbl` (
  `id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` int(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address_tbl`
--

INSERT INTO `address_tbl` (`id`, `address`, `type`, `date_added`) VALUES
(1, 'F. Manalo St. Malinao, Pasig City\r\n\r\n', 1, '2017-08-10 14:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'vince villafuerte', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contactno_tbl`
--

CREATE TABLE `contactno_tbl` (
  `id` int(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `type` int(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactno_tbl`
--

INSERT INTO `contactno_tbl` (`id`, `contact_no`, `type`, `date_added`) VALUES
(1, '+63 9565881011', 1, '2017-08-10 14:04:40'),
(2, '+63 9565881008', 1, '2017-08-10 14:04:40'),
(3, '+63 9565881011', 2, '2017-08-10 14:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `emails_tbl`
--

CREATE TABLE `emails_tbl` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emails_tbl`
--

INSERT INTO `emails_tbl` (`id`, `email`, `Type`, `date_added`) VALUES
(1, 'mindfox.works@gmail.com', '1', '2017-08-10 14:00:53'),
(2, 'happy@mindfoxworks.com', '1', '2017-08-10 14:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `mail_receive`
--

CREATE TABLE `mail_receive` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(700) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_receive`
--

INSERT INTO `mail_receive` (`id`, `name`, `email`, `phone`, `subject`, `message`, `datetime`) VALUES
(21, 'vincent marc estante villafuerte', 'sdfsdfsdsdffsdf@yahoo', 'sdfsdfsdfsdfsf', 'sdfsdf', 'sdfsdf', '2017-08-05 02:33:16'),
(22, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', 'vsdfsd', 'vince', 'v', '2017-08-05 02:57:56'),
(23, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', 'sdfsdfs', 'sdfsdfsdfsdfdf', 'sdfsdf', '2017-08-05 03:01:00'),
(24, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', 'vsdfsd', 'vince', 'sdfsdf', '2017-08-05 03:01:46'),
(25, 'mindfox test', 'mindfoxwebsite@gmail.com', '09123', 'test', 'test mesage mindfox', '2017-08-05 03:03:21'),
(26, 'mindfox', 'mindfoxwebsite@gmail.com', '09123123', 'test', 'haha', '2017-08-05 03:04:54'),
(27, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '123123', 'sdfsdfsd', 'sdfsdf', '2017-08-05 03:06:50'),
(28, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', 'test', 'haha', 'sdfsdf', '2017-08-05 03:09:46'),
(29, 'vincent marc estante villafuerte', 'sdfsdfsdsdffsdf@yahoo', 'sdfsdfsdf', 'sdfsdfsdfsdfdf', 'sdf', '2017-08-05 03:10:41'),
(30, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '09123', 'sadfdsf', 'sfsdfsdf', '2017-08-05 03:13:54'),
(31, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '09123', 'sdfsadf', 'sdfsdf', '2017-08-05 03:14:59'),
(32, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '09123', 'sdfsdf', 'sdfsdf', '2017-08-05 04:25:19'),
(33, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '09123132', 'sdfsdf123', 'sdfsdf', '2017-08-05 04:27:21'),
(34, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', '123', '123123', '123', '2017-08-05 04:28:47'),
(35, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', 'tset', 'sdf', 'sdfsdf', '2017-08-05 04:34:33'),
(36, 'vincent marc estante villafuerte', 'mindfoxwebsite@gmail.com', 'sdfsdfssdfsdf', 'fsdfsdf', 'sdfsd', '2017-08-05 04:37:56'),
(37, 'Vincent', 'vincemavill@gmail.com', '0911111', 'test', 'test', '2017-08-05 05:44:02'),
(38, 'macmac', 'vincemavill@gmail.com', '09152723521', 'hi testing', 'testing message', '2017-08-10 13:19:30'),
(39, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', '09152723521', 'test', 'sdfsdfsdf', '2017-08-10 13:30:24'),
(40, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', '09123123', '123', '123', '2017-08-10 13:31:31'),
(41, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', '09152723521', 'test subject', 'message', '2017-08-10 13:32:41'),
(42, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', '09123123', '123', 'message', '2017-08-10 13:38:26'),
(43, 'vincent marc estante villafuerte', 'vincemavill@gmail.com', '123123', 'subject', 'message message', '2017-08-10 13:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo_prod`
--

CREATE TABLE `whatwedo_prod` (
  `id` int(11) NOT NULL,
  `product_no` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatwedo_prod`
--

INSERT INTO `whatwedo_prod` (`id`, `product_no`, `product_name`, `description`, `category`) VALUES
(1, '', 'Bags', '', 'giveaways'),
(2, '', 'Drinkware', '', 'giveaways'),
(3, '', 'Clothing\r\n', '', 'giveaways'),
(4, '', 'Paper & Desk', '', 'giveaways'),
(5, '', 'Food\r\n', '', 'giveaways'),
(6, '', 'Technology', '', 'giveaways'),
(7, '', 'Stickers & Labels', '\r\n', 'printing'),
(8, '', 'Signs & Signages\r\n', '', 'printing'),
(9, '', 'Digital Printing', '', 'printing'),
(11, '', 'Custom Props', '', 'production'),
(12, '', 'Kiosks, Booths & Carts', '', 'production'),
(13, '', 'Branding\r\n', '', 'production'),
(14, '', 'Brochures & Flyers', '', 'design'),
(15, '', 'Digital Designs\r\n', '', 'design');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_tbl`
--
ALTER TABLE `address_tbl`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `contactno_tbl`
--
ALTER TABLE `contactno_tbl`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `emails_tbl`
--
ALTER TABLE `emails_tbl`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mail_receive`
--
ALTER TABLE `mail_receive`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `whatwedo_prod`
--
ALTER TABLE `whatwedo_prod`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_tbl`
--
ALTER TABLE `address_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contactno_tbl`
--
ALTER TABLE `contactno_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `emails_tbl`
--
ALTER TABLE `emails_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mail_receive`
--
ALTER TABLE `mail_receive`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `whatwedo_prod`
--
ALTER TABLE `whatwedo_prod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
