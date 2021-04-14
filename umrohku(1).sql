-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 03:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umrohku`
--

-- --------------------------------------------------------

--
-- Table structure for table `umrohku_article`
--

CREATE TABLE `umrohku_article` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `id_publisher` int(11) DEFAULT NULL,
  `id_category` int(10) NOT NULL,
  `id_tags` int(10) NOT NULL,
  `date_publish` date DEFAULT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `date_create` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `date_update` varchar(50) DEFAULT NULL,
  `user_delete` varchar(50) DEFAULT NULL,
  `date_delete` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umrohku_article_category`
--

CREATE TABLE `umrohku_article_category` (
  `id` int(10) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `user_create` varchar(100) DEFAULT NULL,
  `date_create` varchar(100) DEFAULT NULL,
  `user_update` varchar(100) DEFAULT NULL,
  `date_update` varchar(100) DEFAULT NULL,
  `user_delete` varchar(100) DEFAULT NULL,
  `date_delete` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umrohku_article_tags`
--

CREATE TABLE `umrohku_article_tags` (
  `id` int(10) NOT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `user_create` varchar(100) DEFAULT NULL,
  `date_create` varchar(100) DEFAULT NULL,
  `user_update` varchar(100) DEFAULT NULL,
  `date_update` varchar(100) DEFAULT NULL,
  `user_delete` varchar(100) DEFAULT NULL,
  `date_delete` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umrohku_article_tags`
--

INSERT INTO `umrohku_article_tags` (`id`, `tags`, `user_create`, `date_create`, `user_update`, `date_update`, `user_delete`, `date_delete`) VALUES
(1, 'oke', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'yuhu', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `umrohku_users`
--

CREATE TABLE `umrohku_users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `id_employee` int(10) DEFAULT NULL,
  `roles` int(10) DEFAULT NULL,
  `user_create` varchar(100) DEFAULT NULL,
  `date_create` varchar(100) DEFAULT NULL,
  `user_update` varchar(100) DEFAULT NULL,
  `date_update` varchar(100) DEFAULT NULL,
  `user_delete` varchar(100) DEFAULT NULL,
  `date_delete` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umrohku_users`
--

INSERT INTO `umrohku_users` (`id`, `username`, `password`, `id_employee`, `roles`, `user_create`, `date_create`, `user_update`, `date_update`, `user_delete`, `date_delete`) VALUES
(1, 'admin', 'YQ==', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `umrohku_article`
--
ALTER TABLE `umrohku_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umrohku_article_category`
--
ALTER TABLE `umrohku_article_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umrohku_article_tags`
--
ALTER TABLE `umrohku_article_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umrohku_users`
--
ALTER TABLE `umrohku_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `umrohku_article`
--
ALTER TABLE `umrohku_article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umrohku_article_category`
--
ALTER TABLE `umrohku_article_category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `umrohku_article_tags`
--
ALTER TABLE `umrohku_article_tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `umrohku_users`
--
ALTER TABLE `umrohku_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
