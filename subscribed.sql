-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2021 at 02:34 PM
-- Server version: 10.3.29-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magebit_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribed`
--

CREATE TABLE `subscribed` (
  `id` int(4) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribed`
--

INSERT INTO `subscribed` (`id`, `date`, `email`) VALUES
(77, '2021-07-06', 'a@mail.com'),
(79, '2021-07-04', 'g@mail.com'),
(81, '2021-07-05', 'c@mail.com'),
(82, '2021-07-01', 'f@mail.com'),
(83, '2021-07-07', 'd@mail.com'),
(84, '2021-07-05', 'me@inbox.lv'),
(85, '2021-07-07', 'go@inbox.lv'),
(86, '2021-07-08', 'myemail@gmail.com'),
(87, '2021-07-08', 'drwho@targis.lv'),
(88, '2021-07-08', 'someone@somewhere.lv'),
(89, '2021-07-08', 'onemore@new.lv'),
(90, '2021-07-08', 'kc@bal.lv'),
(91, '2021-07-08', 'me@home.com'),
(92, '2021-07-13', 'hellofrom@here.lv'),
(93, '2021-07-13', 'mail@mail.com'),
(94, '2021-07-13', 'mail@mail.com'),
(95, '2021-07-14', 'jhdjfskf@kdsf.lv'),
(96, '2021-07-14', 'sdsdsfsfs@com.com'),
(97, '2021-07-14', 'kjdskddbfs@kjsdhfkdk.com'),
(98, '2021-07-14', 'kngfhfh@klhcvkc.com'),
(99, '2021-07-14', 'kjdhjsfjsf@dkshkjfhksdfkdf.lv'),
(100, '2021-07-14', 'mail@mail.com'),
(101, '2021-07-14', 'mail@mail.col'),
(102, '2021-07-14', 'kc@bal.lv'),
(103, '2021-07-14', 'kc@bal.lv'),
(104, '2021-07-14', 'new@new.lv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribed`
--
ALTER TABLE `subscribed`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribed`
--
ALTER TABLE `subscribed`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
