-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 07:10 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(10) NOT NULL,
  `iname` varchar(40) NOT NULL,
  `filename` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `iname`, `filename`) VALUES
(3, 'Death Knight', 'indexPics/DeathKnight.jpg'),
(4, 'Demon Hunter', 'indexPics/Demon_Hunter.jpg'),
(5, 'Druid', 'indexPics/Druid2.jpg'),
(6, 'Hunter', 'indexPics/Hunter.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `name` varchar(20) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`name`, `comment`, `date`) VALUES
('Trent', 'Hi, my name is Trent and I would like to make this comment so that people can hear the things that I have to say. I believe this should work on the database so here goes nothing!', '0000-00-00 00:00:00'),
('Bob', 'Yea that is the same thing that I was thinking. I am really glad that this actually works!!!', '0000-00-00 00:00:00'),
('ok`', 'y4wwok\n', '0000-00-00 00:00:00'),
('Jeff', 'How do I get better at PvP?', '0000-00-00 00:00:00'),
('Trenton', 'First you will need to go to my website and learn the basics!\nHere is a link! \nhttp://localhost:8080/WoW/', '0000-00-00 00:00:00'),
('Edward', 'Nice your ini works! good job', '0000-00-00 00:00:00'),
('Trent ', 'They feter.kjtrwe;kljte ;rl', '0000-00-00 00:00:00'),
('Tretntntn', 'GHKreklgherer\n', '0000-00-00 00:00:00'),
('rjklergeh', 'HItrehiter', '2018-05-16 14:18:24'),
('Thank you', ':)', '2018-05-16 14:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`) VALUES
(25, 'admin', 'admin@test.com', '$2y$10$FqCbHJcQfUs2581iVtssbeCe/aSyOxdFaYyvtdW1I9h.YuU7su1QO'),
(26, 'trent', 'trentclark@gmail.com', '$2y$10$UYDO5cxNh1EbYcfpvadufeXsP11Lm93lwnBQFugJIOCpvmrSVN86K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
