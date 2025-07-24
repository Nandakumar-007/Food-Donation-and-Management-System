-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2024 at 09:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickup`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `aid`) VALUES
('admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `cid` varchar(10) NOT NULL,
  `mes` varchar(10) NOT NULL,
  `wid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`cid`, `mes`, `wid`) VALUES
('2', 'hello', ''),
('2', 'mysore', 'rohit'),
('3', 'please com', 'rohit'),
('5', 'donation r', 'rohit'),
('8', 'thank you ', 'rohit'),
('8', 'pls collec', 'Sumit'),
('13', 'please col', 'sinchana'),
('5', 'please col', 'sinchana'),
('15', 'anfa', 'donar'),
('15', 'please col', 'sinchana'),
('18', 'please col', 'sinchana'),
('11', 'please col', 'sim'),
('19', 'please col', 'sinchana'),
('19', 'please col', 'sinchana'),
('16', 'please col', 'afna'),
('11', 'please col', 'sinchana'),
('20', 'veg pulav', 'sinchana'),
('16', 'biryani', 'afna'),
('19', 'please col', 'afna'),
('22', 'please col', 'bavini'),
('23', 'please col', 'bavini'),
('24', 'please col', 'bavini'),
('25', 'please col', 'bavini'),
('23', 'please col', '7204479121'),
('25', 'please col', 'kavitha'),
('27', 'your food ', 'aaaa'),
('29', 'availiable', 'afna'),
('29', 'please col', 'shahi'),
('30', 'need food', '1'),
('30', 'need food', 'r');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `cid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `cd` varchar(100) NOT NULL,
  `sd` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`cid`, `username`, `name`, `phone`, `address`, `cd`, `sd`, `image`, `latitude`, `longitude`) VALUES
(30, 's', 'sandy', '8765438765', 'mysore', 'food', 'Medium', 'z.jpg', '', ''),
(31, 'r', 'Raju', '8976543212', 'vijayanagar', 'food', 'Medium', '', '', ''),
(32, 'r', 'raji', '8796543212', 'mysore', 'FOOD', 'Medium', 'z.jpg', '', ''),
(33, 'a', 'aaa', '8765432123', 'vijaynagar', 'food', 'Less', '', '', ''),
(34, 'a', 'sachin', '7090225253', 'vijaynagar, mysore', 'foods', 'Medium', 'cropper.jpg', '', ''),
(35, 'a', 'sachin', '7090225253', 'Letspro Training Institute in Vijaynagar 2nd Stage,Mysore', 'hgfyu', 'Medium', 'cropper.jpg', '', ''),
(36, 'a', 'sachin', '7090222131', 'myr', 'wfwe', 'Less', '', '12.291499', '76.628945'),
(37, 'a', 'asda', '2342342342', 'vwew', 'efwe', 'Less', '', '', ''),
(38, 'a', 'vwve', '8787687657', 'wdvw', 'wv', 'Less', '', '', ''),
(39, 'a', 'wewef', '8758235482', 'wvevwwre', ' fvw', 'Less', '', '12.313549', '12.313549'),
(40, 'a', 'fwd', '7647625348', 'wvqwv', 'wvw', 'Less', '', '12.313549', '76.678137');

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE `confirm` (
  `did` varchar(100) NOT NULL,
  `dmid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`did`, `dmid`) VALUES
('1', 'suma'),
('4', 'nishchith'),
('5', 'nishchith');

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `cid` int(11) NOT NULL,
  `zone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `ss` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`cid`, `zone`, `address`, `ss`) VALUES
(9, 'hebbal', 'mysore', 'Medium'),
(10, 'hebbal', 'hebbal', 'Less'),
(11, 'vijayanagar', 'mysore', 'Medium');

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `username` varchar(100) NOT NULL,
  `did` varchar(100) NOT NULL,
  `dusername` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`username`, `did`, `dusername`, `cost`) VALUES
('sudha', '1', 'suma', '22'),
('', '', '', ''),
('sachin', '4', 'nishchith', '13'),
('dileep', '5', 'nishchith', '13'),
('2', 'hello please do work', '', 'rohit');

-- --------------------------------------------------------

--
-- Table structure for table `deliver_request`
--

CREATE TABLE `deliver_request` (
  `did` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `dphone` varchar(50) NOT NULL,
  `daddress` varchar(550) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `pphone` varchar(50) NOT NULL,
  `paddress` varchar(550) NOT NULL,
  `item` varchar(50) NOT NULL,
  `pdate` varchar(50) NOT NULL,
  `ptype` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deliver_request`
--

INSERT INTO `deliver_request` (`did`, `username`, `dname`, `dphone`, `daddress`, `pname`, `pphone`, `paddress`, `item`, `pdate`, `ptype`) VALUES
(1, 'suma', 'sudha', '8884436043', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'manu', '8884644589', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'book', '2019-02-02', 'Normal'),
(2, 'sudha', 'suresh', '8884436043', 'ayush pg\r\nblock A1,stage 2 vijayanagar', 'manu', '8884644589', 'Mysore palace', 'book', '2019-02-05', 'Fastrack'),
(3, 'sudha', 'kushal', '8884644589', 'Mysore Bus Stand KSRTC, Lashkar Mohalla, Mandi Mohalla, Mysuru, Karnataka', 'suresh', '7026469873', 'Jagan Mohan Palace Road, Subbarayanakere, Chamrajpura, Mysuru, Karnataka', 'refrigerate', '2019-02-06', 'Normal'),
(4, 'sachin', 'ramu', '8884644589', 'JSS Hospital Road, Agrahara, Fort Mohalla, Mysuru, Karnataka, India', 'ravi', '8884644458', 'Mysore Palace, Agrahara, Chamrajpura, Mysuru, Karnataka', 'book', '2019-03-01', 'Normal'),
(5, 'dileep', 'nishchith', '8884644589', 'Mysore Bus Stand KSRTC, Lashkar Mohalla, Mandi Mohalla, Mysuru, Karnataka', 'sumanth', '8884644458', 'Mysore Palace, Agrahara, Chamrajpura, Mysuru, Karnataka', 'book', '2019-03-03', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `dusers`
--

CREATE TABLE `dusers` (
  `id` int(11) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dusers`
--

INSERT INTO `dusers` (`id`, `dusername`, `fullname`, `email`, `phone`, `address`, `password`, `status`, `trn_date`) VALUES
(4, 'prasad', 'm', 'prasad@gmail.com', '8884644589', 'Mysuru, Karnataka, India', 'e10adc3949ba59abbe56e057f20f883e', 'Active', '2019-02-28 20:01:38'),
(5, 'nishchith', 'bishchith m', 'nishchith@gmail.com', '8884644589', 'kuvempunagar', 'e10adc3949ba59abbe56e057f20f883e', 'Active', '2019-03-01 08:25:17'),
(6, 'rohit', 'rohit h ', 'mpsuresh77@gmail.com', '8884644589', 'Kuvempunagar', '202cb962ac59075b964b07152d234b70', 'Active', '2022-06-28 21:55:02'),
(7, 'Sumit', 'Sumit Rao', 'sumit09841@gmail.com', '9113992527', 'Kuvempunagar', 'c886063a3952812c0601003c4fbe025c', 'Active', '2022-08-11 21:09:02'),
(8, 'sagar', 'sagar D', 'sagar@gmail.com', '9071198727', 'Vijaynagara', '202cb962ac59075b964b07152d234b70', 'Active', '2023-05-31 11:36:53'),
(9, 'sinchana', 'daf', 'sinhsinch5@gmail.com', '7204479121', 'Select-area', '38f629170ac3ab74b9d6d2cc411c2f3c', 'Engage', '2023-05-31 18:21:13'),
(10, 'afna', 'shireen', 'afnashareen215@gmail.com', '7204479121', 'Kuvempunagar', '81dc9bdb52d04dc20036dbd8313ed055', 'Active', '2023-06-02 08:35:17'),
(11, 'sinchana', 'daf', 'sinhsinch5@gmail.com', '7204479121', 'Select-area', '202cb962ac59075b964b07152d234b70', 'Engage', '2023-06-09 09:21:20'),
(20, '123', 'shireen', 'afnashareen215@gmail.com', '8904467452', 'Mumbai, Maharashtra, India', 'e10adc3949ba59abbe56e057f20f883e', 'NULL', '2023-06-16 10:53:39'),
(21, 'shahifa', 'sheikh', 'afeeafeefa786@gmail.com', '6360428771', 'Select-area', '25d55ad283aa400af464c76d713c07ad', 'Active', '2023-06-20 11:28:00'),
(22, 'rec1', 'reciever', 'raju@gmail.com', '9071198727', 'Select-area', '202cb962ac59075b964b07152d234b70', 'Active', '2023-06-20 11:49:53'),
(23, 'usha', 'shetty', 'usha@gmail.com', '7204479121', 'Select-area', '698d51a19d8a121ce581499d7b701668', 'Active', '2023-06-20 15:34:38'),
(24, 'bavini', '556', 'bavinikrishnan3@gmail.com', '8884644587', 'Select-area', '2be9bd7a3434f7038ca27d1918de58bd', 'Active', '2023-06-26 08:37:21'),
(25, '12', '123', 'wqrrq2222@5t', '7896543234', 'Bangalore, Karnataka, India', 'b4b147bc522828731f1a016bfa72c073', 'NULL', '2023-06-26 09:40:10'),
(26, '12', '11', 'afnashareen215@gmail.com', 'sdfg', 'Vijayanagar, Mysuru, Karnataka, India', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'NULL', '2023-06-26 09:40:58'),
(27, 'sinchana', 'shireen', 'afnashareen215@gmail.com', '7899', 'Ghousia Nagar, Mysuru, Karnataka, India', '60d31eb37595dd44584be5ef363283e3', 'NULL', '2023-06-26 10:48:07'),
(28, 'sinchana', 'shireen', 'afnashareen215@gmail.com', '7899', 'Aanakkampoyil, Kerala, India', '249b48faaf74729603556b29a22234f5', 'NULL', '2023-06-26 11:06:49'),
(29, '900', 'jujik', 'afnashareen215@gmail.com', '1234567890', 'Mysore, Karnataka, India', '8613985ec49eb8f757ae6439e879bb2a', 'NULL', '2023-06-27 10:34:37'),
(30, 'Kavitha', 'Kavitha', 'kavithans@gmail.com', '9188888888', 'Select-area', '84912c96989b25e37ffc82d232ae482f', 'Active', '2023-06-27 11:29:13'),
(31, 'aaaa', 'aaaa', 'aa@gmail.com', '7896543234', 'Select-area', '698d51a19d8a121ce581499d7b701668', 'Active', '2023-06-28 14:51:29'),
(32, 'sia', 'ram', 'sia34@gmail.com', '8809876759', 'Bangalore, Karnataka, India', 'c386a991b656fe82f9c699285c56b2c3', 'NULL', '2023-06-29 13:02:53'),
(33, 'anu', 'das', 'asd2@gmail.com', 'asdfghjkuy', '45', '8613985ec49eb8f757ae6439e879bb2a', 'NULL', '2023-06-30 06:28:04'),
(34, 'shahi', 'shahid', 'shahi3@gmail.com', '8899007788', 'Select-area', 'a591024321c5e2bdbd23ed35f0574dde', 'Active', '2023-07-03 07:49:00'),
(35, 'r', 'r', 'r@gmail.com', '9876543234', 'mysore', 'f354b384c0d334606e004c5880b99d7e', 'NULL', '2024-03-21 07:41:31'),
(36, 'a', 'a', 'a@gmail.com', '9876543222', 'Select-area', 'f354b384c0d334606e004c5880b99d7e', 'Active', '2024-05-28 08:14:33'),
(37, 'r', 'r', 'r@gmail.com', '8765432123', 'mysore', '9fddee966e95eabdf2d8cea24594083f', 'NULL', '2024-05-28 08:46:16'),
(38, 's', 'suresh', 's@gmail.com', '7865676545', 'Vijaynagara', 'ae65ee34e4eec8163b8b4f3d0b84a8e9', 'Active', '2024-05-28 08:47:13'),
(39, 'S', 'S', 's@gmail.com', '7896756453', 'mysore', 'ae65ee34e4eec8163b8b4f3d0b84a8e9', 'NULL', '2024-05-30 09:06:00'),
(40, 'a', 'a', 'a@gmail.com', '9876543222', 'Select-area', '9c1eccab05f6189c7f71d682d4f2935c', 'Active', '2024-05-30 09:07:22'),
(41, 'r', 'r', 'r@gmail.com', '9345678876', 'mysore', 'ae65ee34e4eec8163b8b4f3d0b84a8e9', 'NULL', '2024-05-31 11:53:46'),
(42, 'p', 'p', 'p@gmail.com', '7089890789', 'myr', '202cb962ac59075b964b07152d234b70', 'NULL', '2024-06-01 01:22:12'),
(43, 's', 's', 'sachin@gmail.com', '7090225253', 'mysore', '1455494c9f58563769b601366047c030', 'NULL', '2024-06-01 07:03:30');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(50) NOT NULL,
  `dmid` varchar(50) NOT NULL,
  `feed` varchar(100) NOT NULL,
  `impr` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `dmid`, `feed`, `impr`) VALUES
('vijeth', 'rohit', 'good service', 'Good'),
('vijeth', 'Farheen', 'good service ', 'Poor'),
('joe', 'rohit', 'good work', 'Good'),
('rohit', 'hi', 'Poor', ''),
('rohit', 'hi', 'Poor', ''),
('rohit', 'Farheen', 'mysore', 'Poor'),
('kulsum', 'rohit', 'good work', 'Excellent'),
('sinchana', 'anfa', 'good serices', 'Good'),
('afna', 'sinchana', 'hi', 'Good'),
('sinchana', 'sandra', 'please collect food', 'Poor'),
('afna', 'anfa', 'please collect food', 'Good'),
('sandy', 'bavini', 'great service', 'Excellent'),
('s', '1', 'good', 'Poor'),
('s', 'r', 'good', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `rfb`
--

CREATE TABLE `rfb` (
  `rid` int(11) NOT NULL,
  `reid` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `mes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rfb`
--

INSERT INTO `rfb` (`rid`, `reid`, `title`, `mes`) VALUES
(1, 'rohit', 'kjb', 'Not-Satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `sid` int(11) NOT NULL,
  `cid` varchar(100) NOT NULL,
  `wid` varchar(100) NOT NULL,
  `mes` varchar(250) NOT NULL,
  `sdate` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`sid`, `cid`, `wid`, `mes`, `sdate`, `status`, `otp`, `address`) VALUES
(19, '33', 's', 'we need food', 'Saturday 1st of June 2024 08:32:25 AM', 'accepted', '820155 ', ''),
(20, '35', 's', 'we need', 'Saturday 1st of June 2024 08:50:27 AM', 'delivered', '468983 ', 'Letspro Training Institute in Vijaynagar 2nd Stage,Mysore'),
(21, '36', 's', 'scaca', 'Saturday 1st of June 2024 09:21:46 AM', 'requested', '', '12.291499,76.628945'),
(22, '40', 's', 'efwef', 'Saturday 1st of June 2024 09:30:27 AM', 'requested', '', '12.313549,76.678137');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `did` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `dmid` varchar(550) NOT NULL,
  `status` varchar(400) NOT NULL,
  `dtime` varchar(50) NOT NULL,
  `ddate` varchar(100) NOT NULL,
  `longi` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`did`, `username`, `email`, `phone`, `dmid`, `status`, `dtime`, `ddate`, `longi`, `lati`) VALUES
('1', 'suma', 'suma1@gmail.com', '8884436043', 'suma1', 'Successfully Pick-Up', '22:10', '2019-02-26', '76.6223406', '12.3397331'),
('4', 'sachin', 'nishchith@gmail.com', '8846444589', 'nishchith', 'Successfully Pick-Up', '10:10', '2019-03-02', '77.59872', '12.9728512'),
('5', 'dileep', 'nishchith@gmail.com', '8846444589', 'nishchith', 'Successfully Pick-Up', '12:03', '2019-03-03', '76.649003', '12.3058815');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `phone`, `address`, `password`, `trn_date`) VALUES
(25, 'r', 'r', 'r@gmail.com', '8976543212', 'mysore', '2ab9978fdc3fd85fa90417911f42df24', '2024-05-28 08:48:06'),
(26, 'r', 'r', 'r@gmail.com', '9876543212', 'mysore', '250cf8b51c773f3f8dc8b4be867a9a02', '2024-05-30 09:03:32'),
(27, 'a', 'a', 'a@gmail.com', '8767686756', 'mysore', '202cb962ac59075b964b07152d234b70', '2024-05-31 11:51:51'),
(24, 's', 's', 's@gmail.com', '8765432345', 'mysore', 'f1b5a149b72512dffa7774d6a793b41b', '2024-03-21 07:42:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `deliver_request`
--
ALTER TABLE `deliver_request`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `dusers`
--
ALTER TABLE `dusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rfb`
--
ALTER TABLE `rfb`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deliver_request`
--
ALTER TABLE `deliver_request`
  MODIFY `did` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dusers`
--
ALTER TABLE `dusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `rfb`
--
ALTER TABLE `rfb`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
