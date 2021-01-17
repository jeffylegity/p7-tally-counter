-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 03:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p7_tally_counter_db_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_12_18_071234_create_slicing_model_area1', 1),
(3, '2020_01_03_062627_create_slicing_logs_area1', 1),
(4, '2020_01_22_093244_create_slicing_data_area1', 1),
(5, '2020_01_29_112708_create_slicing_data_area2', 1),
(6, '2020_01_30_074237_create_slicing_model_area2', 1),
(7, '2020_01_30_074246_create_slicing_logs_area2', 1),
(8, '2020_01_30_074315_create_slicing_data_area3', 1),
(9, '2020_01_30_074345_create_slicing_logs_area3', 1),
(10, '2020_01_30_074356_create_slicing_model_area3', 1),
(11, '2020_01_30_074404_create_slicing_model_area4', 1),
(12, '2020_01_30_074428_create_slicing_data_area4', 1),
(13, '2020_01_30_074442_create_slicing_logs_area4', 1),
(14, '2020_02_09_132622_create_models', 1),
(15, '2020_11_23_085841_create_slicing_model_area5', 1),
(16, '2020_11_23_085855_create_slicing_data_area5', 1),
(17, '2020_11_23_085905_create_slicing_logs_area5', 1),
(18, '2020_11_23_135232_create_slicing_actual_area1', 1),
(19, '2020_11_23_135239_create_slicing_actual_area2', 1),
(20, '2020_11_23_135245_create_slicing_actual_area3', 1),
(21, '2020_11_23_135251_create_slicing_actual_area4', 1),
(22, '2020_11_23_135257_create_slicing_actual_area5', 1),
(23, '2020_11_23_135318_create_slicing_test_block_area1', 1),
(24, '2020_11_23_135324_create_slicing_test_block_area2', 1),
(25, '2020_11_23_135329_create_slicing_test_block_area3', 1),
(26, '2020_11_23_135335_create_slicing_test_block_area4', 1),
(27, '2020_11_23_135342_create_slicing_test_block_area5', 1);

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
(43, 'MED-0697G\r\n', NULL, NULL),
(44, 'HYU0896G', NULL, NULL),
(45, 'HYU0897G', NULL, NULL),
(46, 'HYU0898G', NULL, NULL),
(47, 'HYU0899G', NULL, NULL),
(48, 'MIE0860G', NULL, NULL),
(49, 'MIE0770D', NULL, NULL),
(50, 'TSI0858G', NULL, NULL),
(51, 'TTM0869D', NULL, NULL),
(52, 'YAE0887G', NULL, NULL),
(53, 'PROTO', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_actual_area1`
--

CREATE TABLE `slicing_actual_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl88_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl90_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl89_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl93_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl91_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl94_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl92_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl95_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl97_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl98_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl102_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl105_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl103_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl104_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl106_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl107_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_actual_area1`
--

INSERT INTO `slicing_actual_area1` (`id`, `sl88_actual`, `sl90_actual`, `sl89_actual`, `sl93_actual`, `sl91_actual`, `sl94_actual`, `sl92_actual`, `sl95_actual`, `sl97_actual`, `sl98_actual`, `sl102_actual`, `sl105_actual`, `sl103_actual`, `sl104_actual`, `sl106_actual`, `sl107_actual`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_actual_area2`
--

CREATE TABLE `slicing_actual_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl52_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl55_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl53_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl60_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl114_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl113_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl117_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl122_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl123_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl121_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl141_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl139_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl142_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl140_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl187_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_actual_area2`
--

INSERT INTO `slicing_actual_area2` (`id`, `sl52_actual`, `sl55_actual`, `sl53_actual`, `sl60_actual`, `sl114_actual`, `sl113_actual`, `sl117_actual`, `sl122_actual`, `sl123_actual`, `sl121_actual`, `sl141_actual`, `sl139_actual`, `sl142_actual`, `sl140_actual`, `sl187_actual`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_actual_area3`
--

CREATE TABLE `slicing_actual_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl96_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl101_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl84_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl100_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl64_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl59_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl57_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl58_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl99_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl111_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl109_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl112_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl110_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl143_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl108_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_actual_area3`
--

INSERT INTO `slicing_actual_area3` (`id`, `sl96_actual`, `sl101_actual`, `sl84_actual`, `sl100_actual`, `sl64_actual`, `sl59_actual`, `sl57_actual`, `sl58_actual`, `sl99_actual`, `sl111_actual`, `sl109_actual`, `sl112_actual`, `sl110_actual`, `sl143_actual`, `sl108_actual`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_actual_area4`
--

CREATE TABLE `slicing_actual_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl56_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl136_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl63_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl135_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl116_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl134_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl120_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl133_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl119_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl132_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl131_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl137_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl138_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl192_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_actual_area4`
--

INSERT INTO `slicing_actual_area4` (`id`, `sl56_actual`, `sl136_actual`, `sl63_actual`, `sl135_actual`, `sl116_actual`, `sl134_actual`, `sl120_actual`, `sl133_actual`, `sl119_actual`, `sl132_actual`, `sl131_actual`, `sl137_actual`, `sl138_actual`, `sl192_actual`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_actual_area5`
--

CREATE TABLE `slicing_actual_area5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl144_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl148_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl145_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl149_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl146_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl150_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl147_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl151_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl152_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl153_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl154_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl155_actual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_actual_area5`
--

INSERT INTO `slicing_actual_area5` (`id`, `sl144_actual`, `sl148_actual`, `sl145_actual`, `sl149_actual`, `sl146_actual`, `sl150_actual`, `sl147_actual`, `sl151_actual`, `sl152_actual`, `sl153_actual`, `sl154_actual`, `sl155_actual`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area1`
--

CREATE TABLE `slicing_data_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl88_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl90_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl89_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl93_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl91_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl94_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl92_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl95_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl97_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl98_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl102_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl105_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl103_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl104_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl106_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl107_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl88_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl90_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl89_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl93_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl91_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl94_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl92_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl95_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl97_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl98_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl102_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl105_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl103_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl104_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl106_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl107_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data_area1`
--

INSERT INTO `slicing_data_area1` (`id`, `sl88_target`, `sl90_target`, `sl89_target`, `sl93_target`, `sl91_target`, `sl94_target`, `sl92_target`, `sl95_target`, `sl97_target`, `sl98_target`, `sl102_target`, `sl105_target`, `sl103_target`, `sl104_target`, `sl106_target`, `sl107_target`, `sl88_model`, `sl90_model`, `sl89_model`, `sl93_model`, `sl91_model`, `sl94_model`, `sl92_model`, `sl95_model`, `sl97_model`, `sl98_model`, `sl102_model`, `sl105_model`, `sl103_model`, `sl104_model`, `sl106_model`, `sl107_model`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(6, '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 18:13:44', 'E', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area2`
--

CREATE TABLE `slicing_data_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl52_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl55_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl53_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl60_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl114_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl113_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl117_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl122_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl123_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl121_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl141_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl139_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl142_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl140_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl187_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl52_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl55_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl53_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl60_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl114_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl113_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl117_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl122_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl123_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl121_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl141_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl139_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl142_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl140_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl187_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data_area2`
--

INSERT INTO `slicing_data_area2` (`id`, `sl52_target`, `sl55_target`, `sl53_target`, `sl60_target`, `sl114_target`, `sl113_target`, `sl117_target`, `sl122_target`, `sl123_target`, `sl121_target`, `sl141_target`, `sl139_target`, `sl142_target`, `sl140_target`, `sl187_target`, `sl52_model`, `sl55_model`, `sl53_model`, `sl60_model`, `sl114_model`, `sl113_model`, `sl117_model`, `sl122_model`, `sl123_model`, `sl121_model`, `sl141_model`, `sl139_model`, `sl142_model`, `sl140_model`, `sl187_model`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(1, '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 18:13:44', 'E', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area3`
--

CREATE TABLE `slicing_data_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl96_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl101_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl84_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl100_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl64_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl59_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl57_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl58_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl99_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl111_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl109_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl112_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl110_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl143_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl108_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl96_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl101_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl84_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl100_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl64_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl59_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl57_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl58_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl99_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl111_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl109_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl112_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl110_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl143_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl108_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data_area3`
--

INSERT INTO `slicing_data_area3` (`id`, `sl96_target`, `sl101_target`, `sl84_target`, `sl100_target`, `sl64_target`, `sl59_target`, `sl57_target`, `sl58_target`, `sl99_target`, `sl111_target`, `sl109_target`, `sl112_target`, `sl110_target`, `sl143_target`, `sl108_target`, `sl96_model`, `sl101_model`, `sl84_model`, `sl100_model`, `sl64_model`, `sl59_model`, `sl57_model`, `sl58_model`, `sl99_model`, `sl111_model`, `sl109_model`, `sl112_model`, `sl110_model`, `sl143_model`, `sl108_model`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 18:13:44', 'E', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area4`
--

CREATE TABLE `slicing_data_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl56_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl136_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl63_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl135_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl116_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl134_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl120_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl133_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl119_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl132_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl131_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl137_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl138_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl192_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl56_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl136_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl63_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl135_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl116_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl134_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl120_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl133_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl119_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl132_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl131_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl137_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl138_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl192_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data_area4`
--

INSERT INTO `slicing_data_area4` (`id`, `sl56_target`, `sl136_target`, `sl63_target`, `sl135_target`, `sl116_target`, `sl134_target`, `sl120_target`, `sl133_target`, `sl119_target`, `sl132_target`, `sl131_target`, `sl137_target`, `sl138_target`, `sl192_target`, `sl56_model`, `sl136_model`, `sl63_model`, `sl135_model`, `sl116_model`, `sl134_model`, `sl120_model`, `sl133_model`, `sl119_model`, `sl132_model`, `sl131_model`, `sl137_model`, `sl138_model`, `sl192_model`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', NULL, '1', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 18:13:44', 'E', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_data_area5`
--

CREATE TABLE `slicing_data_area5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl144_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl148_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl145_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl149_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl146_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl150_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl147_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl151_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl152_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl153_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl154_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl155_target` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl144_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl148_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl145_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl149_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl146_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl150_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl147_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl151_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl152_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl153_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl154_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl155_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_data_area5`
--

INSERT INTO `slicing_data_area5` (`id`, `sl144_target`, `sl148_target`, `sl145_target`, `sl149_target`, `sl146_target`, `sl150_target`, `sl147_target`, `sl151_target`, `sl152_target`, `sl153_target`, `sl154_target`, `sl155_target`, `sl144_model`, `sl148_model`, `sl145_model`, `sl149_model`, `sl146_model`, `sl150_model`, `sl147_model`, `sl151_model`, `sl152_model`, `sl153_model`, `sl154_model`, `sl155_model`, `date_generated`, `shift`, `data_stored`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-04 18:13:44', 'E', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area1`
--

CREATE TABLE `slicing_logs_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area2`
--

CREATE TABLE `slicing_logs_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_logs_area2`
--

INSERT INTO `slicing_logs_area2` (`id`, `data_id`, `machine_no`, `action`, `type`, `model_output`, `created_at`) VALUES
(1, 1, 'SL-52', '+1', 'test_block', '---', '2021-01-05 13:26:02'),
(2, 1, 'SL-55', '+1', 'test_block', '---', '2021-01-05 13:26:04'),
(3, 1, 'SL-53', '+1', 'test_block', '---', '2021-01-05 13:26:07'),
(4, 1, 'SL-60', '+1', 'test_block', '---', '2021-01-05 13:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area3`
--

CREATE TABLE `slicing_logs_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_logs_area3`
--

INSERT INTO `slicing_logs_area3` (`id`, `data_id`, `machine_no`, `action`, `type`, `model_output`, `created_at`) VALUES
(1, 1, 'SL-96', '+1', 'actual', '---', '2021-01-04 18:33:01'),
(2, 1, 'SL-101', '+1', 'actual', '---', '2021-01-04 18:33:05'),
(3, 1, 'SL-84', '+1', 'actual', '---', '2021-01-04 18:33:06'),
(4, 1, 'SL-96', '+1', 'test_block', '---', '2021-01-05 13:16:26'),
(5, 1, 'SL-101', '+1', 'test_block', '---', '2021-01-05 13:16:28'),
(6, 1, 'SL-84', '+1', 'test_block', '---', '2021-01-05 13:16:30'),
(7, 1, 'SL-100', '+1', 'test_block', '---', '2021-01-05 13:16:32'),
(8, 1, 'SL-64', '+1', 'test_block', '---', '2021-01-05 13:16:34'),
(9, 1, 'SL-59', '+1', 'test_block', '---', '2021-01-05 13:16:37'),
(10, 1, 'SL-96', '+1', 'test_block', '---', '2021-01-05 13:16:43'),
(11, 1, 'SL-101', '+1', 'test_block', '---', '2021-01-05 13:17:08'),
(12, 1, 'SL-84', '+1', 'test_block', '---', '2021-01-05 13:17:47'),
(13, 1, 'SL-100', '+1', 'test_block', '---', '2021-01-05 13:17:49'),
(14, 1, 'SL-64', '+1', 'test_block', '---', '2021-01-05 13:17:51'),
(15, 1, 'SL-59', '+1', 'test_block', '---', '2021-01-05 13:17:52'),
(16, 1, 'SL-57', '+1', 'test_block', '---', '2021-01-05 13:17:54'),
(17, 1, 'SL-57', '+1', 'test_block', '---', '2021-01-05 13:24:06');

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area4`
--

CREATE TABLE `slicing_logs_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_logs_area4`
--

INSERT INTO `slicing_logs_area4` (`id`, `data_id`, `machine_no`, `action`, `type`, `model_output`, `created_at`) VALUES
(1, 1, 'SL-56', '+1', 'actual', '---', '2021-01-04 18:38:29'),
(2, 1, 'SL-136', '+1', 'actual', '---', '2021-01-04 18:38:31'),
(3, 1, 'SL-63', '+1', 'actual', '---', '2021-01-04 18:38:33'),
(4, 1, 'SL-135', '+1', 'actual', '---', '2021-01-04 18:38:38'),
(5, 1, 'SL-116', '+1', 'actual', '---', '2021-01-04 18:38:39'),
(6, 1, 'SL-134', '+1', 'actual', '---', '2021-01-04 18:38:41'),
(7, 1, 'SL-120', '+1', 'actual', '---', '2021-01-04 18:38:42'),
(8, 1, 'SL-119', '+1', 'actual', '---', '2021-01-04 18:38:44'),
(9, 1, 'SL-133', '+1', 'actual', '---', '2021-01-04 18:38:46'),
(10, 1, 'SL-192', '+1', 'actual', '---', '2021-01-04 18:38:48'),
(11, 1, 'SL-138', '+1', 'actual', '---', '2021-01-04 18:38:49'),
(12, 1, 'SL-137', '+1', 'actual', '---', '2021-01-04 18:38:50'),
(13, 1, 'SL-131', '+1', 'actual', '---', '2021-01-04 18:38:51'),
(14, 1, 'SL-132', '+1', 'actual', '---', '2021-01-04 18:38:53'),
(15, 1, 'SL-136', '+1', 'actual', '---', '2021-01-04 18:39:10'),
(16, 1, 'SL-56', '+1', 'test_block', '---', '2021-01-05 13:14:43'),
(17, 1, 'SL-136', '+1', 'test_block', '---', '2021-01-05 13:15:23'),
(18, 1, 'SL-63', '+1', 'test_block', '---', '2021-01-05 13:15:25'),
(19, 1, 'SL-135', '+1', 'test_block', '---', '2021-01-05 13:15:27'),
(20, 1, 'SL-116', '+1', 'test_block', '---', '2021-01-05 13:15:28'),
(21, 1, 'SL-134', '+1', 'test_block', '---', '2021-01-05 13:15:30'),
(22, 1, 'SL-120', '+1', 'test_block', '---', '2021-01-05 13:15:32'),
(23, 1, 'SL-133', '+1', 'test_block', '---', '2021-01-05 13:15:34'),
(24, 1, 'SL-119', '+1', 'test_block', '---', '2021-01-05 13:15:36');

-- --------------------------------------------------------

--
-- Table structure for table `slicing_logs_area5`
--

CREATE TABLE `slicing_logs_area5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `data_id` int(11) NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_output` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area1`
--

CREATE TABLE `slicing_model_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area1`
--

INSERT INTO `slicing_model_area1` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-88', NULL, NULL),
(2, '---', 'SL-90', NULL, NULL),
(3, '---', 'SL-89', NULL, NULL),
(4, '---', 'SL-93', NULL, NULL),
(5, '---', 'SL-91', NULL, NULL),
(6, '---', 'SL-94', NULL, NULL),
(7, '---', 'SL-92', NULL, NULL),
(8, '---', 'SL-95', NULL, NULL),
(9, '---', 'SL-97', NULL, NULL),
(10, '---', 'SL-98', NULL, NULL),
(11, '---', 'SL-102', NULL, NULL),
(12, '---', 'SL-105', NULL, NULL),
(13, '---', 'SL-103', NULL, NULL),
(14, '---', 'SL-104', NULL, NULL),
(15, '---', 'SL-106', NULL, NULL),
(16, '---', 'SL-107', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area2`
--

CREATE TABLE `slicing_model_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area2`
--

INSERT INTO `slicing_model_area2` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-52', NULL, NULL),
(2, '---', 'SL-55', NULL, NULL),
(3, '---', 'SL-53', NULL, NULL),
(4, '---', 'SL-60', NULL, NULL),
(5, '---', 'SL-114', NULL, NULL),
(6, '---', 'SL-113', NULL, NULL),
(7, '---', 'SL-117', NULL, NULL),
(8, '---', 'SL-122', NULL, NULL),
(9, '---', 'SL-123', NULL, NULL),
(10, '---', 'SL-121', NULL, NULL),
(11, '---', 'SL-141', NULL, NULL),
(12, '---', 'SL-139', NULL, NULL),
(13, '---', 'SL-142', NULL, NULL),
(14, '---', 'SL-140', NULL, NULL),
(15, '---', 'SL-187', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area3`
--

CREATE TABLE `slicing_model_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area3`
--

INSERT INTO `slicing_model_area3` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-96', NULL, NULL),
(2, '---', 'SL-101', NULL, NULL),
(3, '---', 'SL-84', NULL, NULL),
(4, '---', 'SL-100', NULL, NULL),
(5, '---', 'SL-64', NULL, NULL),
(6, '---', 'SL-59', NULL, NULL),
(7, '---', 'SL-57', NULL, NULL),
(8, '---', 'SL-58', NULL, NULL),
(9, '---', 'SL-99', NULL, NULL),
(10, '---', 'SL-111', NULL, NULL),
(11, '---', 'SL-109', NULL, NULL),
(12, '---', 'SL-112', NULL, NULL),
(13, '---', 'SL-110', NULL, NULL),
(14, '---', 'SL-143', NULL, NULL),
(15, '---', 'SL-108', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area4`
--

CREATE TABLE `slicing_model_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area4`
--

INSERT INTO `slicing_model_area4` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-56', NULL, NULL),
(2, '---', 'SL-136', NULL, NULL),
(3, '---', 'SL-63', NULL, NULL),
(4, '---', 'SL-135', NULL, NULL),
(5, 'MED-0697G', 'SL-116', NULL, NULL),
(6, '---', 'SL-134', NULL, NULL),
(7, '---', 'SL-120', NULL, NULL),
(8, '---', 'SL-133', NULL, NULL),
(9, '---', 'SL-119', NULL, NULL),
(10, '---', 'SL-132', NULL, NULL),
(11, '---', 'SL-131', NULL, NULL),
(12, '---', 'SL-137', NULL, NULL),
(13, '---', 'SL-138', NULL, NULL),
(14, '---', 'SL-192', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_model_area5`
--

CREATE TABLE `slicing_model_area5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `machine_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_model_area5`
--

INSERT INTO `slicing_model_area5` (`id`, `model_name`, `machine_no`, `created_at`, `updated_at`) VALUES
(1, '---', 'SL-144', NULL, NULL),
(2, '---', 'SL-148', NULL, NULL),
(3, '---', 'SL-145', NULL, NULL),
(4, '---', 'SL-149', NULL, NULL),
(5, '---', 'SL-146', NULL, NULL),
(6, '---', 'SL-150', NULL, NULL),
(7, '---', 'SL-147', NULL, NULL),
(8, '---', 'SL-151', NULL, NULL),
(9, '---', 'SL-152', NULL, NULL),
(10, '---', 'SL-153', NULL, NULL),
(11, '---', 'SL-154', NULL, NULL),
(12, '---', 'SL-155', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_test_block_area1`
--

CREATE TABLE `slicing_test_block_area1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl88_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl90_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl89_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl93_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl91_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl94_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl92_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl95_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl97_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl98_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl102_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl105_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl103_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl104_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl106_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl107_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_test_block_area1`
--

INSERT INTO `slicing_test_block_area1` (`id`, `sl88_test_block`, `sl90_test_block`, `sl89_test_block`, `sl93_test_block`, `sl91_test_block`, `sl94_test_block`, `sl92_test_block`, `sl95_test_block`, `sl97_test_block`, `sl98_test_block`, `sl102_test_block`, `sl105_test_block`, `sl103_test_block`, `sl104_test_block`, `sl106_test_block`, `sl107_test_block`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(6, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_test_block_area2`
--

CREATE TABLE `slicing_test_block_area2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl52_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl55_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl53_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl60_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl114_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl113_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl117_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl122_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl123_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl121_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl141_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl139_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl142_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl140_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl187_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_test_block_area2`
--

INSERT INTO `slicing_test_block_area2` (`id`, `sl52_test_block`, `sl55_test_block`, `sl53_test_block`, `sl60_test_block`, `sl114_test_block`, `sl113_test_block`, `sl117_test_block`, `sl122_test_block`, `sl123_test_block`, `sl121_test_block`, `sl141_test_block`, `sl139_test_block`, `sl142_test_block`, `sl140_test_block`, `sl187_test_block`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_test_block_area3`
--

CREATE TABLE `slicing_test_block_area3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl96_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl101_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl84_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl100_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl64_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl59_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl57_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl58_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl99_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl111_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl109_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl112_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl110_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl143_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl108_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_test_block_area3`
--

INSERT INTO `slicing_test_block_area3` (`id`, `sl96_test_block`, `sl101_test_block`, `sl84_test_block`, `sl100_test_block`, `sl64_test_block`, `sl59_test_block`, `sl57_test_block`, `sl58_test_block`, `sl99_test_block`, `sl111_test_block`, `sl109_test_block`, `sl112_test_block`, `sl110_test_block`, `sl143_test_block`, `sl108_test_block`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '2', '2', '2', '2', '2', '2', '2', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_test_block_area4`
--

CREATE TABLE `slicing_test_block_area4` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl56_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl136_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl63_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl135_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl116_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl134_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl120_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl133_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl119_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl132_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl131_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl137_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl138_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl192_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_test_block_area4`
--

INSERT INTO `slicing_test_block_area4` (`id`, `sl56_test_block`, `sl136_test_block`, `sl63_test_block`, `sl135_test_block`, `sl116_test_block`, `sl134_test_block`, `sl120_test_block`, `sl133_test_block`, `sl119_test_block`, `sl132_test_block`, `sl131_test_block`, `sl137_test_block`, `sl138_test_block`, `sl192_test_block`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slicing_test_block_area5`
--

CREATE TABLE `slicing_test_block_area5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sl144_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl148_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl145_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl149_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl146_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl150_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl147_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl151_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl152_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl153_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl154_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl155_test_block` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_generated` datetime DEFAULT NULL,
  `shift` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_stored` tinyint(1) DEFAULT NULL,
  `foreign_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slicing_test_block_area5`
--

INSERT INTO `slicing_test_block_area5` (`id`, `sl144_test_block`, `sl148_test_block`, `sl145_test_block`, `sl149_test_block`, `sl146_test_block`, `sl150_test_block`, `sl147_test_block`, `sl151_test_block`, `sl152_test_block`, `sl153_test_block`, `sl154_test_block`, `sl155_test_block`, `date_generated`, `shift`, `data_stored`, `foreign_key`, `created_at`, `updated_at`) VALUES
(1, '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '2021-01-04 18:13:44', 'E', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_hired` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `password`, `date_hired`, `gender`, `status`, `emp_status`, `division`, `department`, `section`, `position`, `role`, `area`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'p7-admin', 'P7 Administrator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'P7', 'P7 MACHINING', 'ENGINEER', 1, NULL, NULL, NULL, NULL, NULL),
(2, 'tc-area1', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'SLICING', 'SLICING', 'OPERATOR', NULL, '1', NULL, NULL, NULL, NULL),
(3, 'tc-area2', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'SLICING', 'SLICING', 'OPERATOR', NULL, '2', NULL, NULL, NULL, NULL),
(4, 'tc-area3', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'SLICING', 'SLICING', 'OPERATOR', NULL, '3', NULL, NULL, NULL, NULL),
(5, 'tc-area4', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'SLICING', 'SLICING', 'OPERATOR', NULL, '4', NULL, NULL, NULL, NULL),
(7, 'tc-area5', 'Slicing Operator', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N/A', 'N/A', 'N/A', 'SMP', 'PLANT 7', 'SLICING', 'SLICING', 'OPERATOR', NULL, '5', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_actual_area1`
--
ALTER TABLE `slicing_actual_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_actual_area2`
--
ALTER TABLE `slicing_actual_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_actual_area3`
--
ALTER TABLE `slicing_actual_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_actual_area4`
--
ALTER TABLE `slicing_actual_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_actual_area5`
--
ALTER TABLE `slicing_actual_area5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area1`
--
ALTER TABLE `slicing_data_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area2`
--
ALTER TABLE `slicing_data_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area3`
--
ALTER TABLE `slicing_data_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area4`
--
ALTER TABLE `slicing_data_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_data_area5`
--
ALTER TABLE `slicing_data_area5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area1`
--
ALTER TABLE `slicing_logs_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area2`
--
ALTER TABLE `slicing_logs_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area3`
--
ALTER TABLE `slicing_logs_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area4`
--
ALTER TABLE `slicing_logs_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_logs_area5`
--
ALTER TABLE `slicing_logs_area5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area1`
--
ALTER TABLE `slicing_model_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area3`
--
ALTER TABLE `slicing_model_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area4`
--
ALTER TABLE `slicing_model_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_model_area5`
--
ALTER TABLE `slicing_model_area5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_test_block_area1`
--
ALTER TABLE `slicing_test_block_area1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_test_block_area2`
--
ALTER TABLE `slicing_test_block_area2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_test_block_area3`
--
ALTER TABLE `slicing_test_block_area3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_test_block_area4`
--
ALTER TABLE `slicing_test_block_area4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slicing_test_block_area5`
--
ALTER TABLE `slicing_test_block_area5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `slicing_actual_area1`
--
ALTER TABLE `slicing_actual_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slicing_actual_area2`
--
ALTER TABLE `slicing_actual_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_actual_area3`
--
ALTER TABLE `slicing_actual_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_actual_area4`
--
ALTER TABLE `slicing_actual_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_actual_area5`
--
ALTER TABLE `slicing_actual_area5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_data_area1`
--
ALTER TABLE `slicing_data_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slicing_data_area2`
--
ALTER TABLE `slicing_data_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_data_area3`
--
ALTER TABLE `slicing_data_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_data_area4`
--
ALTER TABLE `slicing_data_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_data_area5`
--
ALTER TABLE `slicing_data_area5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_logs_area1`
--
ALTER TABLE `slicing_logs_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slicing_logs_area2`
--
ALTER TABLE `slicing_logs_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slicing_logs_area3`
--
ALTER TABLE `slicing_logs_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slicing_logs_area4`
--
ALTER TABLE `slicing_logs_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `slicing_logs_area5`
--
ALTER TABLE `slicing_logs_area5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slicing_model_area1`
--
ALTER TABLE `slicing_model_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `slicing_model_area2`
--
ALTER TABLE `slicing_model_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slicing_model_area3`
--
ALTER TABLE `slicing_model_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slicing_model_area4`
--
ALTER TABLE `slicing_model_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slicing_model_area5`
--
ALTER TABLE `slicing_model_area5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slicing_test_block_area1`
--
ALTER TABLE `slicing_test_block_area1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slicing_test_block_area2`
--
ALTER TABLE `slicing_test_block_area2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_test_block_area3`
--
ALTER TABLE `slicing_test_block_area3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_test_block_area4`
--
ALTER TABLE `slicing_test_block_area4`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slicing_test_block_area5`
--
ALTER TABLE `slicing_test_block_area5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
