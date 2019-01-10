-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 03:46 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `body`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `contact_fname` varchar(250) NOT NULL,
  `contact_lname` varchar(250) NOT NULL,
  `contact_nickname` varchar(250) NOT NULL,
  `contact_profile` text NOT NULL,
  `contact_cphone` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_fname`, `contact_lname`, `contact_nickname`, `contact_profile`, `contact_cphone`, `username`) VALUES
(3, 'qwe', 'baluyos', 'wew', 'Myprofile.jpg', '12', ''),
(4, 'ronil', 'cajan', 'ron', 'Screenshot from 2019-01-09 14-16-38.png', '0987654321', ''),
(9, 'ron', 'cajan', 'ghhgh', 'Screenshot from 2019-01-09 14-00-23.png', '435345345', 'cajan'),
(10, 'ayaay', 'rupert', 'tambok', 'Screenshot from 2019-01-09 14-00-23.png', '12345', 'cajan'),
(11, 'john', 'baluyos', 'boang', '', '12342145', 'cajan'),
(12, 'steve', 'bolodo', 'gwapo', 'Screenshot from 2019-01-09 14-00-23.png', '0987654321', 'cajan'),
(13, 'wew', 'boang', 'siya', '', '123', 'cajan'),
(14, 'ewr', 'steeve', 'wew', '', '123456', 'cajan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'steve', 'steve@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'cajan', 'cajanr02@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'baluyos', 'baluyos@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'boang', 'aaa@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
