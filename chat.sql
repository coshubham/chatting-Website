-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 05:35 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `password`) VALUES
(1, 'shubham kumar yadav', 'shubham16122001');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `email` varchar(280) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(24, 'shubham@gmail.com', 'I do Not Able to send photos '),
(25, 'afak@gmail.com', 'Good Website.'),
(26, 'sam@gmail.com', 'I Enjoy a lot in this chatting website I Love It'),
(29, 'binny@gmail.com', 'hdie kjil njffff jkjfr');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_id` int(255) NOT NULL,
  `outgoing_id` int(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_id`, `outgoing_id`, `message`) VALUES
(392, 590385736, 680572858, 'cvv'),
(393, 590385736, 680572858, 'fff'),
(394, 590385736, 680572858, 'f'),
(395, 590385736, 680572858, 'f'),
(396, 590385736, 680572858, 'f'),
(397, 590385736, 680572858, 'f'),
(398, 590385736, 680572858, 'f'),
(399, 590385736, 680572858, 'f'),
(400, 590385736, 680572858, 'f'),
(401, 590385736, 680572858, 'v'),
(402, 590385736, 680572858, 'v'),
(403, 590385736, 680572858, 'vv'),
(404, 590385736, 680572858, 'v'),
(405, 590385736, 680572858, 'vv'),
(406, 590385736, 680572858, 'v'),
(407, 590385736, 680572858, 'v'),
(408, 590385736, 680572858, 'vg'),
(409, 590385736, 680572858, 'v'),
(410, 590385736, 680572858, 'f'),
(411, 590385736, 680572858, 'f'),
(412, 590385736, 680572858, 'f'),
(413, 590385736, 680572858, 'f'),
(414, 590385736, 680572858, 'f'),
(415, 590385736, 680572858, 'f'),
(416, 590385736, 680572858, 'f'),
(417, 376988267, 680572858, 'hi'),
(418, 680572858, 1133142880, 'hi'),
(419, 1133142880, 680572858, 'hello ruchi ji'),
(420, 1133142880, 680572858, 'rfgfff'),
(421, 680572858, 1133142880, 'dfferr');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(40) NOT NULL,
  `img` varchar(1300) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(0, 590385736, 'binny ', 'Patel ', 'binny@gmail.com', 'binny', '1677034026background.jpg', 'Offline now'),
(0, 680572858, 'Shubham ', 'Kumar Yadav', 'Shubhamky1612@gmail.com', '16122001', '167703416953347_8484.jpg', 'Offline now'),
(0, 1367268592, 'Affu', 'Khan', 'affu@gmail.com', 'affu', '167703423130190_8448.jpg', 'Offline now'),
(0, 919884978, 'Rohit', 'Singh', 'rohit@gmail.com', 'rohit', '167703432661084_987654678.jpg', 'Active Now'),
(0, 200248378, 'Shivam', 'Kumar Yadav', 'shivam@gmail.com', '2707', '167703439053931_Spiderman.jpg', 'Offline now'),
(0, 376988267, 'Spider ', 'Man', 'spiderman@gmail.com', 'SpiderMan', '1677048475JGTBJBG.jpg', 'Active Now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=422;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
