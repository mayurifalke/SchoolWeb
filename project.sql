-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2024 at 02:54 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcircular2`
--

CREATE TABLE `addcircular2` (
  `id` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `notice` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addevent`
--

CREATE TABLE `addevent` (
  `id` int(11) NOT NULL,
  `simage` blob NOT NULL,
  `date` date NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addholidays`
--

CREATE TABLE `addholidays` (
  `id` int(11) NOT NULL,
  `day` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(11) NOT NULL,
  `uimg` blob NOT NULL,
  `pass` int(10) NOT NULL,
  `sname` varchar(300) NOT NULL,
  `birth` date NOT NULL,
  `adate` date NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `pno` int(10) NOT NULL,
  `addr` varchar(300) NOT NULL,
  `imgdata2` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `uimg`, `pass`, `sname`, `birth`, `adate`, `pemail`, `gender`, `pno`, `addr`, `imgdata2`) VALUES
(1, 0x696d61676573312f6d61797572695f332e6a7067, 123, 'Mayuri', '2020-05-05', '2024-07-05', 'mayurifalke222@gmail.com', 'Female', 2147483647, '0', '????\0JFIF\0\0`\0`\0\0???Exif\0\0MM\0*\0\0\0\0?i\0\0\0\0\0\02?\0\0\0\0\0\0&\0\0\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0?\0\0\0\0\0\0??\0\0\0\0\0\0??\0\0\0\0\0\0\0\0??\0\0\0\019\0\0??\0\0\0\019\0\0?\0\0\0\0\0?\0\0\0\0?\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(2, 0x696d61676573312f7374362e6a7067, 98, 'Om', '2020-09-13', '2024-07-05', 'falke12@gmail.com', 'male', 2147483647, '0', '????\0JFIF\0\0\0\0\0\0??\0?\0	\Z( \Z%!1!%)+...\Z383,7(-.+\n\n\n\r/% &+---/-----/+2--0-//5---------/--------/----.------??\0\0?\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0=\0\0\0\0\0!1AQaq???\"2?R??B???br???#s?34C??\0\Z\0\0\0\0\0\0\0\0\0\0\0\0\0??\0/\0\0\0\0\0\0\0\0!12AQq\"a????3B??#????\0\0\0?\0?\0? \0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0j?QNRi%?{\0d\n???4cw?g???}?׸?bq??yJo??v?k?ȍ=TV?rT4?{???n)F.ά/?;?m??????v????[?R1s?tqK??u멆?mo?/ѭH????$-.:??6?P??j+?\0?8??2W?;????>SR?Z??t?2???{???)J???ӻ?nϺKf???gc]?k??~?}T|????_?'),
(3, 0x696d61676573312f7374362e6a7067, 98, 'Om', '2020-09-13', '2024-07-05', 'falke12@gmail.com', 'male', 2147483647, '0', '????\0JFIF\0\0\0\0\0\0??\0?\0	\Z( \Z%!1!%)+...\Z383,7(-.+\n\n\n\r/% &+---/-----/+2--0-//5---------/--------/----.------??\0\0?\"\0??\0\0\0\0\0\0\0\0\0\0\0\0\0??\0=\0\0\0\0\0!1AQaq???\"2?R??B???br???#s?34C??\0\Z\0\0\0\0\0\0\0\0\0\0\0\0\0??\0/\0\0\0\0\0\0\0\0!12AQq\"a????3B??#????\0\0\0?\0?\0? \0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0j?QNRi%?{\0d\n???4cw?g???}?׸?bq??yJo??v?k?ȍ=TV?rT4?{???n)F.ά/?;?m??????v????[?R1s?tqK??u멆?mo?/ѭH????$-.:??6?P??j+?\0?8??2W?;????>SR?Z??t?2???{???)J???ӻ?nϺKf???gc]?k??~?}T|????_?'),
(4, 0x696d61676573312f7374372e6a7067, 321, 'Santosh', '2020-06-07', '2024-07-07', 'santosh11@gmail.com', 'male', 2147483647, 'Mumbai', '????\0JFIF\0\0\0\0\0\0??\0?\0	( \Z%!1!%)+...383-7(-.+\n\n\n\r\Z-----+----------------------------+----------------??\0\0?\0?\0??\0\0\0\0\0\0\0\0\0\0\0\0\0\0??\0?\0\0\0\0\0\0!1AQaq??\"2??BR??#??3br??C?$Sc????\0\Z\0\0\0\0\0\0\0\0\0\0\0\0??\00\0\0\0\0\0\0!1AQ\"2aq??3B????R??#??\0\0\0?\0͵?.??f@\n\n\0?t@?@?\0rCB?u?c?h??Oď??&?MHb?	pLB???\0???!?H??J@r1hs2*HG ޅ\0???Hi:?ZtC?O?i1????:v?<???????/?7?A?[GM<?v_[?. ?r7??iz???Q?z<????w964????wLˑ??O??J??c?$z?_?@|?w?AY?_???Q??\"ş?C?.|?k?{??US{rp?s.cۻ?E');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `name` varchar(600) NOT NULL,
  `comp` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(600) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub` varchar(300) NOT NULL,
  `msg` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `username` varchar(600) NOT NULL,
  `password` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `username`, `password`) VALUES
(1, 'Mayuri', 2747);

-- --------------------------------------------------------

--
-- Table structure for table `registration2`
--

CREATE TABLE `registration2` (
  `id` int(11) NOT NULL,
  `studentname` varchar(600) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `fatherNo` int(10) NOT NULL,
  `Annual` int(60) NOT NULL,
  `nation` varchar(100) NOT NULL,
  `mothertongue` varchar(100) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `std` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration2`
--

INSERT INTO `registration2` (`id`, `studentname`, `birth`, `email`, `gender`, `fatherNo`, `Annual`, `nation`, `mothertongue`, `fathername`, `std`) VALUES
(1, 'mayuri', '2020-05-05', 'mayurifalke222@gmail.com', 'Female', 2147483647, 5000, 'Indian', 'marathi', 'Santosh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcircular2`
--
ALTER TABLE `addcircular2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addevent`
--
ALTER TABLE `addevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addholidays`
--
ALTER TABLE `addholidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration2`
--
ALTER TABLE `registration2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcircular2`
--
ALTER TABLE `addcircular2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addevent`
--
ALTER TABLE `addevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addholidays`
--
ALTER TABLE `addholidays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration2`
--
ALTER TABLE `registration2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
