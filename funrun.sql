-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2021 at 08:28 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `length` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `length`, `price`) VALUES
(1, 'FUN RUN', '3KM', 550),
(2, 'MINI MARATHON', '10KM', 550),
(3, 'VIP', '3/10KM', 1000),
(4, 'Super VIP', '15KM', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_card`, `name`, `age`, `email`, `password`) VALUES
('1234567890000', 'domtao', 8, 'domtao@gmail.com', '5ef143ce09adb81fb485ac241b2f80ca'),
('123456789011', 'จิรายุส สหพรอุดมการ', 20, 'chirayut345@gmail.com', '$2y$10$AjulEKs.e9dGO64ucWaIxeLQe9mPK5eyWxcqpAOUMdohna0uinusq'),
('1234567890123', ' kalum', 2, 'kalum@mail.com', 'e807f1fcf82d132f9bb018ca6738a19f'),
('1710400062706', 'Mike Namchaisuk', 21, '604259003@webmail.npru.ac.th', 'd6f36bd154cf89560f0a1f542825aad2'),
('9874563210123', ' kalumplee', 3, 'kalumplee@mail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `ID` int(10) NOT NULL,
  `member` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_run` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`ID`, `member`, `category_run`) VALUES
(1, '1710400062706', 1),
(2, '123456789011', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_card`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `member` (`member`),
  ADD KEY `category_run` (`category_run`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `regis`
--
ALTER TABLE `regis`
  ADD CONSTRAINT `regis_ibfk_1` FOREIGN KEY (`member`) REFERENCES `member` (`id_card`),
  ADD CONSTRAINT `regis_ibfk_2` FOREIGN KEY (`category_run`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
