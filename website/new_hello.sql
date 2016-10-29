-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2016 at 11:23 AM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hello`
--

-- --------------------------------------------------------

--
-- Table structure for table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `location` varchar(150) DEFAULT NULL,
  `member_id` int(11) NOT NULL,
  `product_condition` text,
  `product_description` text NOT NULL,
  `category` text,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adverts`
--

INSERT INTO `adverts` (`id`, `name`, `price`, `location`, `member_id`, `product_condition`, `product_description`, `category`, `date`) VALUES
(8, 'BMW 320i', 120000, 'cars/gold.jpg', 3, 'Used', 'Grey Mercedes Benz for sale', 'Sedan', '2016-10-27 17:11:27'),
(9, 'Mercedes Benz C200', 140000, 'cars/gold.jpg', 3, 'Relatively new', 'Boss!!!', 'Sedan', '2016-10-27 17:16:25'),
(10, 'Honda Civic', 130000, 'cars/gold.jpg', 3, 'Okay', 'White Honda', 'SUV', '2016-10-27 17:18:14'),
(11, 'Nissan Navara', 300000, NULL, 9, 'Relatively new', 'Black nissan bakkie', 'SUV', '2016-10-29 08:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `member_id` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `date_created`, `member_id`) VALUES
(132, 'sdsdssf', '1328613060', '43'),
(133, 'dsdsdsdds', '1328613067', '43'),
(135, 'sds', '1328617260', '50'),
(171, 'awy', '1329664979', '46'),
(103, 'john', '1328370831', '50'),
(155, 'sdsdsd', '1329278523', '43'),
(160, 'sds', '1329283209', '43'),
(161, 'jlsfjjfjjjk', '1329458863', '43'),
(162, 'sdsd', '1329664332', '45'),
(163, 'aaa', '1329664356', '45'),
(172, 'sddd', '1329664988', '46'),
(173, 'dsdsd', '1329665017', '46'),
(180, '', '1477075984', ''),
(179, '', '1477075971', ''),
(178, '', '1477075967', ''),
(177, 'ht', '1476556841', '2'),
(181, 'hi b', '1477320139', '2');

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE `day` (
  `day_id` int(11) NOT NULL,
  `day` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30),
(31, 31);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `member_id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` varchar(11) NOT NULL,
  `friends_with` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`member_id`, `datetime`, `status`, `friends_with`) VALUES
(43, '2012-02-19 18:53:14', 'conf', 46);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `remarksby` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(80) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `ContactNo` varchar(14) DEFAULT NULL,
  `Url` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`, `Address`, `ContactNo`, `Url`) VALUES
(9, 'TM', '123', 'Themba', 'Mbhele', 'Pretoria', '0718854571', 'mbhelethemba4@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `recipient` varchar(40) NOT NULL,
  `datetime` datetime NOT NULL,
  `content` varchar(100) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `receiver`, `recipient`, `datetime`, `content`, `status`) VALUES
(41, '3', '4', '2016-10-27 23:20:56', 'halla', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `location` varchar(200) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `location`, `member_id`) VALUES
(20, 'upload/[large][AnimePaper]wallpapers_Mobile-Suit-Gundam-Seed-Destiny_Rukawa11(1.33)__THISRES__72873.jpg', 43),
(28, 'upload/Iron_Man_Movie_by_anaheim_420.jpg', 43),
(29, 'upload/bleach_48_640.jpg', 46),
(30, 'upload/Jellyfish.jpg', 43),
(31, 'upload/DSC00467.jpg', 43),
(32, 'upload/DSC00497.jpg', 43),
(17, 'upload/a.jpg', 43),
(13, 'upload/12819748323869.jpg', 43),
(14, 'upload/a.jpg', 43),
(21, 'upload/Between_Darkness_and_Wonder_Black_Purity_HD_Wallpaper.jpg', 43),
(22, 'upload/black-abstract-windows7-seven-desktop-wallpaper-1600x1200.jpg', 43),
(23, 'upload/captain-jsck-sparrow.jpg', 43),
(33, 'upload/DSC00476.jpg', 43),
(34, 'upload/img-wallpapers-windows-vista-carbon-lupuce-21748.jpg', 43),
(25, 'upload/a.jpg', 46),
(35, 'upload/Code_Geass__Zero_Vector_by_Reina_Kitsune.jpg', 43),
(48, 'upload/download.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `postcomment`
--

CREATE TABLE `postcomment` (
  `comment_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `commentedby` varchar(30) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` int(40) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postcomment`
--

INSERT INTO `postcomment` (`comment_id`, `content`, `commentedby`, `pic`, `id`, `date_created`) VALUES
(31, 'dsd', '46', 'upload/p.jpg', 171, '1329664982');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(30, 1983),
(29, 1984),
(28, 1985),
(27, 1986),
(26, 1987),
(25, 1988),
(24, 1989),
(23, 1990),
(22, 1991),
(21, 1992),
(20, 1993),
(19, 1994),
(18, 1995),
(17, 1996),
(16, 1997),
(15, 1998),
(14, 1999),
(13, 2000),
(12, 2001),
(11, 2002),
(10, 2003),
(9, 2004),
(8, 2005),
(7, 2006),
(6, 2007),
(5, 2008),
(4, 2009),
(3, 2010),
(2, 2011),
(1, 2012),
(43, 1970),
(42, 1971),
(41, 1972),
(40, 1973),
(39, 1974),
(38, 1975),
(37, 1976),
(36, 1977),
(35, 1978),
(34, 1979),
(33, 1980),
(32, 1981),
(31, 1982);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `day`
--
ALTER TABLE `day`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `postcomment`
--
ALTER TABLE `postcomment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;
--
-- AUTO_INCREMENT for table `day`
--
ALTER TABLE `day`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `postcomment`
--
ALTER TABLE `postcomment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
