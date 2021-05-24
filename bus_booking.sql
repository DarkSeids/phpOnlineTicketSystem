-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2019 at 03:51 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Daily buses'),
(3, 'night buses'),
(4, 'weekly buses'),
(5, 'Monthly Bus'),
(6, '');

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

DROP TABLE IF EXISTS `cost`;
CREATE TABLE IF NOT EXISTS `cost` (
  `cost_id` int(11) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL,
  `stopage` varchar(255) NOT NULL,
  `category` int(3) NOT NULL,
  `cost` int(3) NOT NULL,
  PRIMARY KEY (`cost_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`cost_id`, `start`, `stopage`, `category`, `cost`) VALUES
(8, 'Thankot', 'Mustang', 5, 500),
(12, 'kathmandu', 'Delhi', 4, 500),
(10, 'Janakpur', 'Kathmandu', 2, 600),
(11, 'Pokhara', 'Kathmandu', 3, 600);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_age` int(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `cost` int(11) NOT NULL,
  `status` varchar(1000) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `bus_id`, `user_id`, `user_name`, `user_age`, `source`, `destination`, `date`, `cost`, `status`) VALUES
(36, 23, 14, 'diwas', 22, 'balkot', 'kalanki', '2019-08-13', 0, 'Ticket Approved'),
(35, 23, 14, 'raqeeb', 22, 'balkot', 'kalanki', '2019-08-13', 0, 'Ticket Cancelled'),
(51, 20, 11, 'raqeeb', 22, 'kathmandu', 'Delhi', '2019-08-14', 500, 'Ticket Cancelled');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(200) NOT NULL AUTO_INCREMENT,
  `post_category_id` int(200) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post_author` varchar(200) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_source` varchar(200) NOT NULL,
  `post_destination` varchar(200) NOT NULL,
  `post_via` varchar(200) NOT NULL,
  `post_via_time` varchar(200) NOT NULL,
  `max_seats` int(200) NOT NULL,
  `available_seats` int(200) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_source`, `post_destination`, `post_via`, `post_via_time`, `max_seats`, `available_seats`) VALUES
(23, 3, 'balkot to kalanki', 'raqeeb', '2019-08-22', 'bus4.jpg', 'Normal Bus', 'balkot', 'kalanki', 'koteshwor', '12 AM', 15, -1),
(21, 4, 'Thankot to Mustang', 'raqeeb', '2019-08-25', 'project.jpeg', 'Normal Bus With AC', 'Thankot', 'Mustang', 'pokhara', '05 PM', 20, -1),
(20, 5, 'kathmandu to Delhi', 'sushant', '2019-08-25', 'bus5.jpg', 'Super Delux With Bathroom And Wifi', 'kathmandu', 'Delhi', 'Birgunj', '05 AM', 40, 32),
(18, 2, 'Janakpur to Kathmandu', 'raqeeb', '2019-08-22', 'bus1.jpg', 'Super AC Bus With Free Wifi', 'Janakpur', 'Kathmandu', 'Sindhuli', '08 PM', 20, 14),
(19, 2, 'Pokhara to Kathmandu', 'sushant', '2019-08-25', 'suspensor.jpg', 'Delux Bus', 'Pokhara', 'Kathmandu', 'muglin', '06 AM', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_phoneno` varchar(200) NOT NULL,
  `user_role` varchar(200) NOT NULL,
  `user_image` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phoneno`, `user_role`, `user_image`) VALUES
(8, 'sushant', 'snuff1231', 'sushant', 'karki', 'sushant42@gmail.com', '8785787789', 'admin', 'avatar.jpg'),
(11, 'raqeeb', 'snuff1231', 'raqeeb', 'giri', 'raqeebgiri78@gmail.com', '8785787789', 'admin', 'avatar.jpg'),
(14, 'diwas', 'snuff1231', 'diwas', 'paudel', 'diwas123@gmail.com', '8785787789', 'subscriber', 'avatar.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
