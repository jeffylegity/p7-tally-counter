-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 01:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p8_tally_counter_db_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `model_name`, `created_at`, `updated_at`) VALUES
(1, 'DAI-0501G\r\n', NULL, NULL),
(2, 'FAN-0140G\r\n', NULL, NULL),
(3, 'FAN-0143G\r\n', NULL, NULL),
(4, 'FAN-0183G\r\n', NULL, NULL),
(5, 'FAN-0185G\r\n', NULL, NULL),
(6, 'FAN-0799G\r\n', NULL, NULL),
(7, 'HYU-0550G\r\n', NULL, NULL),
(8, 'HYU-0727G\r\n', NULL, NULL),
(9, 'HYU-0839G\r\n', NULL, NULL),
(10, 'MIE-0860G\r\n', NULL, NULL),
(11, 'MIS-0292G\r\n', NULL, NULL),
(12, 'MIS-0509G\r\n', NULL, NULL),
(13, 'MIS-0510G\r\n', NULL, NULL),
(14, 'MIS-0511G\r\n', NULL, NULL),
(15, 'MIS-0518G\r\n', NULL, NULL),
(16, 'MIS-0519G\r\n', NULL, NULL),
(17, 'MIN-0771D\r\n', NULL, NULL),
(18, 'MIN-0772D\r\n', NULL, NULL),
(19, 'MIN-0776D\r\n', NULL, NULL),
(20, 'MIS-0766G\r\n', NULL, NULL),
(21, 'MIR-0505G\r\n', NULL, NULL),
(22, 'PAS-0297G\r\n', NULL, NULL),
(23, 'PCT-0293G\r\n', NULL, NULL),
(24, 'TIC-0169G\r\n', NULL, NULL),
(25, 'TIC-0282G\r\n', NULL, NULL),
(26, 'TIC-0336G\r\n', NULL, NULL),
(27, 'TIC-0755G\r\n', NULL, NULL),
(28, 'TOC-0433G\r\n', NULL, NULL),
(29, 'TOC-0609G\r\n', NULL, NULL),
(30, 'TOC-0610G\r\n', NULL, NULL),
(31, 'TOC-0611G\r\n', NULL, NULL),
(32, 'TOC-0612G\r\n', NULL, NULL),
(33, 'TOC-0613G\r\n', NULL, NULL),
(34, 'TOP-0864G\r\n', NULL, NULL),
(35, 'TTM-0664D\r\n', NULL, NULL),
(36, 'TTM-0824D\r\n', NULL, NULL),
(37, 'TTM-0825D\r\n', NULL, NULL),
(38, 'TTM-0862D\r\n', NULL, NULL),
(39, 'TTM-0857D\r\n', NULL, NULL),
(40, 'TTM-0872D\r\n', NULL, NULL),
(41, 'TTM-0873D\r\n', NULL, NULL),
(42, 'MIE-0751G\r\n', NULL, NULL),
(43, 'MED-0697G\r\n', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
