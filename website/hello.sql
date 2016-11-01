-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2016 at 03:27 PM
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
(20, 'BMW 320i', 195000, 'pics/Moses.jpg', 14, 'Used', 'Black BMW up for sale. It is in good condition and has little mileage', 'Sedan', '2016-11-01 07:18:07'),
(22, 'Yamaha', 90000, 'pics/2012-quad-core-phones.jpg', 17, 'Used', 'Fresh', 'Bike', '2016-11-01 11:17:54');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'SUV'),
(2, 'Sedan'),
(4, 'Bike'),
(5, 'Bakkie');

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
  `Url` varchar(100) NOT NULL,
  `Image` text,
  `interests` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `UserName`, `Password`, `FirstName`, `LastName`, `Address`, `ContactNo`, `Url`, `Image`, `interests`) VALUES
(15, 'JP', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Themba', 'Mbhele', NULL, NULL, 'mbhelethemba4@gmail.com', NULL, ''),
(11, 'admin', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'admin', 'admin', '', '', '', NULL, ''),
(17, 'Preyan', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Preyan', 'Naidoo', NULL, NULL, 'p@gmail.com', NULL, ''),
(14, 'Mbali', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Mbali', 'Nkosi', NULL, NULL, 'mbhelethemba4@gmail.com', 'pics/Themba.jpg', ''),
(16, 'BI', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'Bilal', 'Muhammad', NULL, NULL, 'mbhelethemba4@gmail.com', 'pics/Themba.jpg', '');

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
(41, '3', '4', '2016-10-27 23:20:56', 'halla', 'unread'),
(42, '16', '14', '2016-11-01 11:08:39', 'Interested in buying', 'unread'),
(43, '16', '', '2016-11-01 11:18:29', 'Interested', 'unread'),
(44, '14', '', '2016-11-01 13:14:10', 'jkhdsakj', 'unread'),
(45, '14', '', '2016-11-01 13:14:41', 'asd', 'unread'),
(46, '14', '17', '2016-11-01 13:30:52', 'hbkjdsa', 'unread'),
(47, '14', '17', '2016-11-01 13:31:27', 'woza', 'unread'),
(48, '17', '14', '2016-11-01 13:33:09', 'hi mbali your so hot', 'unread'),
(49, '16', '17', '2016-11-01 13:59:28', 'Yo dude, this better pop up on your side hey?', 'unread'),
(50, '17', '16', '2016-11-01 14:01:29', 'Cool dude, it seems to be working ', 'unread'),
(51, '16', '17', '2016-11-01 14:02:27', 'This is yet another message', 'unread'),
(52, '16', '17', '2016-11-01 14:03:08', 'I am about to spam you', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `idOfUserPosted` int(50) NOT NULL,
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `productname` text NOT NULL,
  `price` int(50) NOT NULL,
  `memberidOfLiked` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `idOfUserPosted`, `name`, `lastname`, `productname`, `price`, `memberidOfLiked`) VALUES
(2, 16, 'Bilal', 'Muhammad', 'Nissan', 150000, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
