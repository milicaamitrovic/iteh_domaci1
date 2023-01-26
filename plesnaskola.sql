-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 09:22 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plesnaskola`
--

-- --------------------------------------------------------

--
-- Table structure for table `koreograf`
--

CREATE TABLE `koreograf` (
  `id` bigint(20) NOT NULL,
  `imePrezime` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koreograf`
--

INSERT INTO `koreograf` (`id`, `imePrezime`) VALUES
(1, 'Marko Jankovic'),
(2, 'Andrea Petrovic'),
(3, 'Maja Minic'),
(4, 'Nikola Tosic');

-- --------------------------------------------------------

--
-- Table structure for table `termin`
--

CREATE TABLE `termin` (
  `id` bigint(20) NOT NULL,
  `vrsta_plesa` bigint(20) NOT NULL,
  `polaznik` varchar(50) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `prostorija` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `termin`
--

INSERT INTO `termin` (`id`, `vrsta_plesa`, `polaznik`, `datum`, `prostorija`) VALUES
(1, 2, 'Milica Mitrovic', '2023-01-14', 19),
(2, 3, 'Olja Mitrovic', '2023-01-11', 3),
(3, 5, 'Mladen Jovic', '2023-01-16', 16),
(4, 4, 'Dusica Sujdovic', '2023-01-18', 2),
(5, 3, 'Anja Cirkovic', '2023-01-20', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vrsta_plesa`
--

CREATE TABLE `vrsta_plesa` (
  `id` bigint(20) NOT NULL,
  `naziv` varchar(30) DEFAULT NULL,
  `koreograf` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vrsta_plesa`
--

INSERT INTO `vrsta_plesa` (`id`, `naziv`, `koreograf`) VALUES
(1, 'Tango', 1),
(2, 'Bachata', 3),
(3, 'Salsa', 3),
(4, 'Zumba', 2),
(5, 'Hip-hop dance', 4),
(6, 'Valcer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `koreograf`
--
ALTER TABLE `koreograf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `termin`
--
ALTER TABLE `termin`
  ADD PRIMARY KEY (`id`,`vrsta_plesa`),
  ADD KEY `vrsta_plesa` (`vrsta_plesa`);

--
-- Indexes for table `vrsta_plesa`
--
ALTER TABLE `vrsta_plesa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `koreograf` (`koreograf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `koreograf`
--
ALTER TABLE `koreograf`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `termin`
--
ALTER TABLE `termin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vrsta_plesa`
--
ALTER TABLE `vrsta_plesa`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `termin`
--
ALTER TABLE `termin`
  ADD CONSTRAINT `termin_vrsta_plesa_fk` FOREIGN KEY (`vrsta_plesa`) REFERENCES `vrsta_plesa` (`id`);

--
-- Constraints for table `vrsta_plesa`
--
ALTER TABLE `vrsta_plesa`
  ADD CONSTRAINT `vrsta_plesa_koreograf_fk` FOREIGN KEY (`koreograf`) REFERENCES `koreograf` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
