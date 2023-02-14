-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2023 at 07:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Brando', 'Mueller', 'porter.mertz@example.net', '85ae950f386cc86bdd8ed0cce523fda18f8f566a', '2011-10-16 19:11:04', '1984-06-17 04:19:34'),
(2, 'Javonte', 'Stokes', 'ipurdy@example.net', 'b1b9c57e73c7ea9254e45bd1007fd882d19610df', '2013-04-08 14:59:13', '2006-01-06 14:48:08'),
(3, 'Alanis', 'Bernier', 'hildegard75@example.org', 'acafc0d82987cca261520f1af9e665b4a9f2584b', '1997-10-06 04:30:22', '2003-11-16 22:03:45'),
(4, 'Jayda', 'Turcotte', 'botsford.preston@example.com', 'd70d60e312cef6e9d3ea1db9c753da2c44f0a13d', '1970-11-01 07:53:39', '1979-03-02 16:46:06'),
(5, 'Leonard', 'Kling', 'volkman.merle@example.com', 'f179d5cdc9ef507a165f62f84927311a3d06c78e', '2003-10-19 22:42:03', '1999-06-25 00:57:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
