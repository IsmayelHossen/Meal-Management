-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2020 at 12:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10041508_mm`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT 'NOT NULL',
  `phone` varchar(20) DEFAULT NULL,
  `blood` varchar(100) NOT NULL,
  `address` varchar(80) NOT NULL,
  `email` text NOT NULL,
  `rent` float NOT NULL DEFAULT 0,
  `net` float DEFAULT 0,
  `gass` float NOT NULL DEFAULT 0,
  `khala` float NOT NULL DEFAULT 0,
  `water` float NOT NULL DEFAULT 0,
  `current1` float NOT NULL DEFAULT 0,
  `others` float NOT NULL DEFAULT 0,
  `fine` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`id`, `name`, `phone`, `blood`, `address`, `email`, `rent`, `net`, `gass`, `khala`, `water`, `current1`, `others`, `fine`) VALUES
(11, 'Ismayel Hossen', '01952152883', 'ismayelhossen123@gmail.com', 'Comilla', 'black@gmail.com', 1712, 112, 100, 322, 0, 0, 0, 0),
(12, 'Ismayel Hossen', '01831426198', '0+', 'Comilla', 'kawsar@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0),
(13, 'Zahid Hasan', '01952152884', 'AB+', 'Dhaka', 'kawsar@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0),
(14, 'Khaled Hasan Manna', '01755260752', 'khaledhasanmanna011@gmail.com', 'Rangpur', 'black@gmail.com', 1512, 112, 100, 322, 0, 0, 0, 0),
(15, 'Abdullah Al Mamun', '01626311400', '', 'Tangail', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 0),
(16, 'Wazid Ullah Murad', '01685222158', 'wazidullahmurad1@gmail.com', 'Mymensingh', 'black@gmail.com', 1512, 112, 100, 322, 0, 0, 0, 0),
(17, 'Wahidul Hasan Pial', '01777208881', '', 'Mymensingh', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 0),
(18, 'Azharul Islam Sajeeb', '01631268680', '', 'Mymensingh', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 0),
(19, 'Zahid Hasan', '01517140368', '', 'Dhaka', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 0),
(20, 'Pritom Saha', '01714230981', '', 'Rangpur', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 50),
(21, 'Ismayel Hossen', '01952152880', '0+', 'Comilla', 'ismayelhossen123@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0),
(22, 'Zahid Hasan', '01952152881', 'A+', 'Dhaka', 'ismayelhossen123@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0),
(23, 'Tuhin', '01952152887', 'golamkibriatuhin4@gmail.com', '', 'golamkibriatuhin4@gmail.com', 0, 0, 0, 0, 0, 0, 0, 0),
(24, 'Salman Khan', '01750131515', 'salman131515@gmail.com', 'Sakhipur, Tangail', 'black@gmail.com', 1046, 112, 100, 322, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`, `id`) VALUES
('ismayelhossen123@gmail.com', 'ismayel45012', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bazarcost`
--

CREATE TABLE `bazarcost` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `email` varchar(200) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bazarcost`
--

INSERT INTO `bazarcost` (`id`, `amount`, `email`, `date1`, `name`, `phone`) VALUES
(173, 1310, 'black@gmail.com', '11/03/20', 'Zahid Hasan', '01517140368'),
(174, 790, 'black@gmail.com', '14/03/20', 'Ismayel Hossen', '01952152883'),
(175, 455, 'black@gmail.com', '15/03/20', 'Ismayel Hossen', '01952152883'),
(176, 1410, 'black@gmail.com', '8/03/20', 'Wazid Ullah Murad', '01685222158');

-- --------------------------------------------------------

--
-- Table structure for table `bazardate`
--

CREATE TABLE `bazardate` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `date1` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `text1` text NOT NULL,
  `identiy` varchar(200) NOT NULL,
  `time1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `email`, `phone`, `text1`, `identiy`, `time1`) VALUES
(112, 'black@gmail.com', '01952152883', 'hi', 'member', '2019-07-16 03:52:17'),
(113, 'black@gmail.com', '01952152883', 'jklkljl', 'Manager', '2019-07-16 03:52:53'),
(114, 'black@gmail.com', 'true', '######@@@@@@@@@@#222222', 'Manager', '2019-11-18 19:22:28'),
(115, 'black@gmail.com', ' 964345334', '###########$$$$$$$$$$^^^^^^^^^^^^^^^^^^^^^^', 'Manager', '2019-11-18 19:23:10'),
(116, 'black@gmail.com', '01952152883', 'fuck off', 'Manager', '2019-12-28 17:36:50'),
(117, 'black@gmail.com', '01685222158', 'hi\r\n', 'Manager', '2020-02-06 20:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `chat1`
--

CREATE TABLE `chat1` (
  `id` int(11) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text1` text COLLATE utf8_unicode_ci NOT NULL,
  `identiy` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `time1` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat1`
--

INSERT INTO `chat1` (`id`, `email`, `phone`, `text1`, `identiy`, `time1`) VALUES
(4, 'black@gmail.com', NULL, 'Fuck Off', 'user', '2019-10-05 15:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `it` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `meal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `phone` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` float NOT NULL,
  `date1` varchar(200) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`phone`, `name`, `amount`, `date1`, `id`, `email`) VALUES
('01517140368', 'Zahid Hasan', 1310, '11/03/20', 155, 'black@gmail.com'),
('01952152883', 'Ismayel Hossen', 790, '14/03/20', 156, 'black@gmail.com'),
('01952152883', 'Ismayel Hossen', 455, '15/03/20', 157, 'black@gmail.com'),
('01685222158', 'Wazid Ullah Murad', 1410, '8/03/20', 158, 'black@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mealcount`
--

CREATE TABLE `mealcount` (
  `phone` varchar(200) NOT NULL,
  `meal` float NOT NULL,
  `date1` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mealcount`
--

INSERT INTO `mealcount` (`phone`, `meal`, `date1`, `email`, `id`) VALUES
('01952152883', 2, '11/03/20', 'black@gmail.com', 2371),
('01755260752', 2, '11/03/20', 'black@gmail.com', 2372),
('01626311400', 2, '11/03/20', 'black@gmail.com', 2373),
('01685222158', 2, '11/03/20', 'black@gmail.com', 2374),
('01777208881', 2, '11/03/20', 'black@gmail.com', 2375),
('01631268680', 2, '11/03/20', 'black@gmail.com', 2376),
('01517140368', 2, '11/03/20', 'black@gmail.com', 2377),
('01714230981', 2, '11/03/20', 'black@gmail.com', 2378),
('01750131515', 0, '11/03/20', 'black@gmail.com', 2379),
('01952152883', 2.5, '12/03/20', 'black@gmail.com', 2380),
('01755260752', 2, '12/03/20', 'black@gmail.com', 2381),
('01626311400', 2.5, '12/03/20', 'black@gmail.com', 2382),
('01685222158', 0, '12/03/20', 'black@gmail.com', 2383),
('01777208881', 1, '12/03/20', 'black@gmail.com', 2384),
('01631268680', 2, '12/03/20', 'black@gmail.com', 2385),
('01517140368', 2, '12/03/20', 'black@gmail.com', 2386),
('01714230981', 2, '12/03/20', 'black@gmail.com', 2387),
('01750131515', 0, '12/03/20', 'black@gmail.com', 2388),
('01952152883', 2, '13/03/20', 'black@gmail.com', 2389),
('01755260752', 2, '13/03/20', 'black@gmail.com', 2390),
('01626311400', 2, '13/03/20', 'black@gmail.com', 2391),
('01685222158', 0, '13/03/20', 'black@gmail.com', 2392),
('01777208881', 2, '13/03/20', 'black@gmail.com', 2393),
('01631268680', 2, '13/03/20', 'black@gmail.com', 2394),
('01517140368', 2, '13/03/20', 'black@gmail.com', 2395),
('01714230981', 2, '13/03/20', 'black@gmail.com', 2396),
('01750131515', 0, '13/03/20', 'black@gmail.com', 2397),
('01952152883', 2.5, '14/03/20', 'black@gmail.com', 2398),
('01755260752', 2, '14/03/20', 'black@gmail.com', 2399),
('01626311400', 2.5, '14/03/20', 'black@gmail.com', 2400),
('01685222158', 2, '14/03/20', 'black@gmail.com', 2401),
('01777208881', 2, '14/03/20', 'black@gmail.com', 2402),
('01631268680', 2, '14/03/20', 'black@gmail.com', 2403),
('01517140368', 2, '14/03/20', 'black@gmail.com', 2404),
('01714230981', 2, '14/03/20', 'black@gmail.com', 2405),
('01750131515', 0, '14/03/20', 'black@gmail.com', 2406),
('01952152883', 2.5, '15/03/20', 'black@gmail.com', 2407),
('01755260752', 2, '15/03/20', 'black@gmail.com', 2408),
('01626311400', 2.5, '15/03/20', 'black@gmail.com', 2409),
('01685222158', 2.5, '15/03/20', 'black@gmail.com', 2410),
('01777208881', 1, '15/03/20', 'black@gmail.com', 2411),
('01631268680', 2, '15/03/20', 'black@gmail.com', 2412),
('01517140368', 2, '15/03/20', 'black@gmail.com', 2413),
('01714230981', 2, '15/03/20', 'black@gmail.com', 2414),
('01750131515', 0, '15/03/20', 'black@gmail.com', 2415),
('01952152883', 2.5, '16/03/20', 'black@gmail.com', 2416),
('01755260752', 0, '16/03/20', 'black@gmail.com', 2417),
('01626311400', 1.5, '16/03/20', 'black@gmail.com', 2418),
('01685222158', 2.5, '16/03/20', 'black@gmail.com', 2419),
('01777208881', 1, '16/03/20', 'black@gmail.com', 2420),
('01631268680', 2, '16/03/20', 'black@gmail.com', 2421),
('01517140368', 2, '16/03/20', 'black@gmail.com', 2422),
('01714230981', 2, '16/03/20', 'black@gmail.com', 2423),
('01750131515', 0, '16/03/20', 'black@gmail.com', 2424),
('01952152883', 2.5, '17/03/20', 'black@gmail.com', 2425),
('01755260752', 0, '17/03/20', 'black@gmail.com', 2426),
('01626311400', 0, '17/03/20', 'black@gmail.com', 2427),
('01685222158', 1.5, '17/03/20', 'black@gmail.com', 2428),
('01777208881', 1, '17/03/20', 'black@gmail.com', 2429),
('01631268680', 2, '17/03/20', 'black@gmail.com', 2430),
('01517140368', 2, '17/03/20', 'black@gmail.com', 2431),
('01714230981', 2, '17/03/20', 'black@gmail.com', 2432),
('01750131515', 0, '17/03/20', 'black@gmail.com', 2433),
('01952152883', 0, '08/03/20', 'black@gmail.com', 2434),
('01755260752', 1, '08/03/20', 'black@gmail.com', 2435),
('01626311400', 1, '08/03/20', 'black@gmail.com', 2436),
('01685222158', 1, '08/03/20', 'black@gmail.com', 2437),
('01777208881', 0, '08/03/20', 'black@gmail.com', 2438),
('01631268680', 1, '08/03/20', 'black@gmail.com', 2439),
('01517140368', 1, '08/03/20', 'black@gmail.com', 2440),
('01714230981', 1, '08/03/20', 'black@gmail.com', 2441),
('01750131515', 0, '08/03/20', 'black@gmail.com', 2442),
('01952152883', 2, '09/03/20', 'black@gmail.com', 2443),
('01755260752', 2, '09/03/20', 'black@gmail.com', 2444),
('01626311400', 2, '09/03/20', 'black@gmail.com', 2445),
('01685222158', 2.5, '09/03/20', 'black@gmail.com', 2446),
('01777208881', 0, '09/03/20', 'black@gmail.com', 2447),
('01631268680', 2, '09/03/20', 'black@gmail.com', 2448),
('01517140368', 2, '09/03/20', 'black@gmail.com', 2449),
('01714230981', 1, '09/03/20', 'black@gmail.com', 2450),
('01750131515', 0, '09/03/20', 'black@gmail.com', 2451),
('01952152883', 2.5, '10/03/20', 'black@gmail.com', 2452),
('01755260752', 1, '10/03/20', 'black@gmail.com', 2453),
('01626311400', 2.5, '10/03/20', 'black@gmail.com', 2454),
('01685222158', 2.5, '10/03/20', 'black@gmail.com', 2455),
('01777208881', 2, '10/03/20', 'black@gmail.com', 2456),
('01631268680', 2, '10/03/20', 'black@gmail.com', 2457),
('01517140368', 2, '10/03/20', 'black@gmail.com', 2458),
('01714230981', 1, '10/03/20', 'black@gmail.com', 2459),
('01750131515', 2, '10/03/20', 'black@gmail.com', 2460),
('01952152883', 0, '04/11/2020', 'black@gmail.com', 2461),
('01755260752', 0, '04/11/2020', 'black@gmail.com', 2462),
('01626311400', 0, '04/11/2020', 'black@gmail.com', 2463),
('01685222158', 0, '04/11/2020', 'black@gmail.com', 2464),
('01777208881', 0, '04/11/2020', 'black@gmail.com', 2465),
('01631268680', 0, '04/11/2020', 'black@gmail.com', 2466),
('01517140368', 0, '04/11/2020', 'black@gmail.com', 2467),
('01714230981', 0, '04/11/2020', 'black@gmail.com', 2468),
('01750131515', 0, '04/11/2020', 'black@gmail.com', 2469);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `messname` varchar(200) NOT NULL,
  `mname` varchar(200) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `active` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `email`, `password`, `messname`, `mname`, `code`, `active`) VALUES
(2, 'black@gmail.com', 'ict12345', 'Black lock', 'XYZ', NULL, 1),
(17, 'ismayelhossen123@gmail.com', '12345678', 'ismayel', 'Rahim', '38457', 1),
(18, 'bbb@gmail.com', '12345678', 'bbbb', NULL, '41000', 0),
(19, 'hello@gmail.com', '12345678', 'hello', NULL, '33837', 0),
(20, 'ppp@gmail.com', '12345678', 'ppp', NULL, '27902', 0),
(21, 'oo@gmail.com', '12345678', 'ooo', NULL, '37366', 0),
(22, 'jjj@gmail.com', '12345678', 'jjjj', NULL, '26188', 0),
(24, 'azharulislam1613@gmail.com', '12345678', 'Rokeya eye care center', NULL, '59349', 1),
(25, 'ismayelhossen124@gmail.com', '12345678', 'Ismayel Hossen', NULL, '74659', 0),
(26, 'golamkibriatuhin4@gmail.com', '12345678', 'ABC', NULL, '69769', 1),
(27, 'abc@gmail.com', '12345678', 'abc', NULL, '95938', 0),
(28, 'abc@gmail.com', '12345678', 'abc', NULL, '81775', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bazarcost`
--
ALTER TABLE `bazarcost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bazardate`
--
ALTER TABLE `bazardate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat1`
--
ALTER TABLE `chat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`it`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealcount`
--
ALTER TABLE `mealcount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmember`
--
ALTER TABLE `addmember`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bazarcost`
--
ALTER TABLE `bazarcost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `bazardate`
--
ALTER TABLE `bazardate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `chat1`
--
ALTER TABLE `chat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `it` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `mealcount`
--
ALTER TABLE `mealcount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2479;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
