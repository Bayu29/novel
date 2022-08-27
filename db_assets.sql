-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2022 at 03:16 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_assets`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangunan`
--

CREATE TABLE `bangunan` (
  `bangunan_id` int(11) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `masa_manfaat` varchar(50) NOT NULL,
  `tahun_pembangunan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bangunan`
--

INSERT INTO `bangunan` (`bangunan_id`, `kode_aset`, `nama_aset`, `lokasi`, `luas`, `harga`, `masa_manfaat`, `tahun_pembangunan`) VALUES
(2, 'B001', 'Bangunan AB', 'Bogor', '100 M', '1000000', '5 Tahun', '2022-08-18');

-- --------------------------------------------------------

--
-- Table structure for table `history_login`
--

CREATE TABLE `history_login` (
  `history_login_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `info` text NOT NULL,
  `user_agent` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_login`
--

INSERT INTO `history_login` (`history_login_id`, `user_id`, `info`, `user_agent`, `tanggal`) VALUES
(12, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 07:51:09'),
(13, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 08:05:05'),
(14, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 08:51:31'),
(15, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 08:51:41'),
(16, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 08:52:04'),
(17, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 08:52:43'),
(18, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:16:12'),
(19, 5, 'superadmin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:23:26'),
(20, 5, 'superadmin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:26:01'),
(21, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:28:45'),
(22, 5, 'superadmin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:32:16'),
(23, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 10:48:27'),
(24, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 11:20:19'),
(25, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 14:49:34'),
(26, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 15:13:16'),
(27, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 15:35:35'),
(28, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-11 16:09:22'),
(29, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 14:09:10'),
(30, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 14:47:12'),
(31, 8, 'supervisor Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 14:50:40'),
(32, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 14:57:58'),
(33, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:12:55'),
(34, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:17:58'),
(35, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:37:49'),
(36, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:38:43'),
(37, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:48:29'),
(38, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-12 15:49:11'),
(39, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-13 04:44:09'),
(40, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-13 07:36:07'),
(41, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-13 10:27:40'),
(42, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 08:49:02'),
(43, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 08:49:35'),
(44, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 10:48:05'),
(45, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 16:48:58'),
(46, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 16:49:35'),
(47, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-14 19:10:47'),
(48, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 01:59:48'),
(49, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 02:06:25'),
(50, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 03:09:54'),
(51, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 03:19:37'),
(52, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 03:21:46'),
(53, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-15 03:22:06'),
(54, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 10:30:25'),
(55, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 10:49:09'),
(56, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 10:54:45'),
(57, 12, '2017310023 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 10:55:49'),
(58, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 10:58:52'),
(59, 20, '22008960 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:02:10'),
(60, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:04:50'),
(61, 21, '22008961 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:08:40'),
(62, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:17:02'),
(63, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:36:51'),
(64, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.63 Safari/537.36', '2022-06-16 11:58:05'),
(65, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.5005.115 Safari/537.36', '2022-06-18 05:45:00'),
(66, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 00:07:32'),
(67, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 02:56:26'),
(68, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:19:23'),
(69, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:28:07'),
(70, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:32:32'),
(71, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:38:36'),
(72, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:43:30'),
(73, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 11:52:05'),
(74, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 12:19:06'),
(75, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 12:39:31'),
(76, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 12:44:16'),
(77, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 12:51:20'),
(78, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-20 12:54:26'),
(79, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-21 09:29:06'),
(80, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-21 09:51:45'),
(81, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-21 09:52:51'),
(82, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-21 10:22:44'),
(83, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-22 09:26:42'),
(84, 29, '22008963 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-22 09:32:50'),
(85, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-22 09:36:12'),
(86, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-22 14:29:47'),
(87, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-23 01:17:47'),
(88, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-23 01:29:46'),
(89, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-23 09:42:15'),
(90, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-24 08:48:41'),
(91, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-24 12:37:27'),
(92, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 09:41:05'),
(93, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 10:12:32'),
(94, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 10:35:05'),
(95, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 11:06:32'),
(96, 28, '22008990 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 11:09:04'),
(97, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 11:25:25'),
(98, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-25 11:30:42'),
(99, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-26 10:53:23'),
(100, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-06-29 08:48:08'),
(101, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:15:25'),
(102, 31, '22008966 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:16:00'),
(103, 31, '22008966 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:19:38'),
(104, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:27:54'),
(105, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:28:38'),
(106, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 11:29:49'),
(107, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-01 12:07:36'),
(108, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-02 09:44:03'),
(109, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-02 11:08:19'),
(110, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-02 11:24:16'),
(111, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-02 11:39:24'),
(112, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', '2022-07-02 11:43:25'),
(113, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 23:21:56'),
(114, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 23:27:04'),
(115, 24, '22008962 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 23:30:06'),
(116, 24, '22008962 Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 23:30:57'),
(117, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-08 23:38:40'),
(118, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-12 10:26:56'),
(119, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-12 15:01:43'),
(120, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-12 15:03:07'),
(121, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-12 15:43:57'),
(122, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-07-12 16:21:08'),
(123, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-08-01 14:35:41'),
(124, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-08-01 14:43:21'),
(125, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', '2022-08-01 14:52:29'),
(126, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-11 14:28:36'),
(127, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 08:11:18'),
(128, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 08:13:30'),
(129, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 10:01:18'),
(130, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 10:02:06'),
(131, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 10:02:26'),
(132, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 10:38:41'),
(133, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 13:24:53'),
(134, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 14:15:48'),
(135, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 14:19:12'),
(136, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 14:26:00'),
(137, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 14:26:35'),
(138, 58, 'keuangan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-18 14:26:56'),
(139, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 00:33:36'),
(140, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 00:54:25'),
(141, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 00:58:11'),
(142, 58, 'keuangan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 01:23:04'),
(143, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 01:24:18'),
(144, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 02:00:56'),
(145, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 03:30:13'),
(146, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 03:30:34'),
(147, 58, 'keuangan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 03:40:02'),
(148, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 03:41:24'),
(149, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:05:35'),
(150, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:05:50'),
(151, 58, 'keuangan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:06:12'),
(152, 59, 'pimpinan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:06:32'),
(153, 57, 'karyawan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:14:58'),
(154, 58, 'keuangan Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:20:49'),
(155, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 04:36:41'),
(156, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 07:58:02'),
(157, 1, 'admin Telah melakukan login', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', '2022-08-19 08:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `kendaraan_id` int(11) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `kategori_kendaraan` varchar(200) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tahun_pembuatan` date NOT NULL,
  `tahun_pembelian` date NOT NULL,
  `no_rangka` varchar(100) NOT NULL,
  `no_mesin` varchar(100) NOT NULL,
  `no_bpkb` varchar(100) NOT NULL,
  `masa_manfaat` varchar(50) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `nomor_polisi` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `isi_slinder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`kendaraan_id`, `kode_aset`, `kategori_kendaraan`, `nama_aset`, `harga`, `tahun_pembuatan`, `tahun_pembelian`, `no_rangka`, `no_mesin`, `no_bpkb`, `masa_manfaat`, `warna`, `tipe`, `nomor_polisi`, `kondisi`, `isi_slinder`) VALUES
(1, 'Quod voluptatem et', 'Motor', 'Reiciendis culpa atq', 0, '1978-09-14', '2018-01-11', 'Minima omnis quas no', 'Et sed error proiden', 'Duis anim aliquip pa', 'Excepturi accusamus', 'Praesentium voluptat', 'Enim laboriosam ea', 'Illum ut sunt minim', 'Esse eum sunt quas e', 'Cupiditate reiciendi');

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan`
--

CREATE TABLE `pemeliharaan` (
  `pemeliharaan_id` int(11) NOT NULL,
  `kode_pemeliharaan` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `referensi_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `biaya_pemeliharaan` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_periksa` date DEFAULT NULL,
  `nota` varchar(200) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeliharaan`
--

INSERT INTO `pemeliharaan` (`pemeliharaan_id`, `kode_pemeliharaan`, `kategori`, `referensi_id`, `tanggal`, `deskripsi`, `biaya_pemeliharaan`, `status`, `tanggal_periksa`, `nota`, `user_id`) VALUES
(9, 'Officiis et aut lore', 'Bangunan', 2, '1973-09-18', 'Dolore aut ea atque', 1000000, 'Waiting Approved', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_aset`
--

CREATE TABLE `peminjaman_aset` (
  `peminjaman_aset_id` int(11) NOT NULL,
  `kode_peminjaman` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `referensi_id` int(11) NOT NULL,
  `tanggal_awal_pinjam` date NOT NULL,
  `tanggal_akhir_pinjam` date NOT NULL,
  `deskripsi_keperluan` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_periksa` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman_aset`
--

INSERT INTO `peminjaman_aset` (`peminjaman_aset_id`, `kode_peminjaman`, `kategori`, `referensi_id`, `tanggal_awal_pinjam`, `tanggal_akhir_pinjam`, `deskripsi_keperluan`, `status`, `tanggal_periksa`, `user_id`) VALUES
(9, 'Dolore nobis laborio', 'Bangunan', 2, '1998-05-07', '2000-09-09', 'Laboris reiciendis q', 'Waiting Approved', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengadaan_aset`
--

CREATE TABLE `pengadaan_aset` (
  `pengadaan_aset_id` int(11) NOT NULL,
  `kode_pengadaan_aset` varchar(50) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `tgl_req_permintaan` date NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(200) NOT NULL,
  `tanggal_periksa` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengadaan_aset`
--

INSERT INTO `pengadaan_aset` (`pengadaan_aset_id`, `kode_pengadaan_aset`, `kategori`, `tgl_req_permintaan`, `deskripsi`, `status`, `tanggal_periksa`, `user_id`) VALUES
(6, 'Quibusdam sed sed co', 'Bangunan', '2022-08-19', 'Ut quas illum in es', 'Waiting Approved', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `peralatan_id` int(11) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `tahun_beli` date NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanah`
--

CREATE TABLE `tanah` (
  `tanah_id` int(11) NOT NULL,
  `kode_aset` varchar(50) NOT NULL,
  `nama_aset` varchar(200) NOT NULL,
  `nama_pemilik_tanah` varchar(200) NOT NULL,
  `luas` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanah`
--

INSERT INTO `tanah` (`tanah_id`, `kode_aset`, `nama_aset`, `nama_pemilik_tanah`, `luas`, `harga`) VALUES
(1, 'T001', '', 'Ramdan', '100 Meter Persegi', '50000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `level_id` int(2) NOT NULL COMMENT '1:admin,2:pimpinan,3:keuangan;4:karyawan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama_lengkap`, `username`, `password`, `no_hp`, `level_id`) VALUES
(1, 'Super Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '083874731480', 1),
(57, 'Karyawan', 'karyawan', '87c78b8da768468c4f3826791496385536c11dad', '083874731480', 4),
(58, 'Keuangan', 'keuangan', '1f931595786f2f178358d0af5fe4d75eaee46819', '083874731480', 3),
(59, 'Pimpinan', 'pimpinan', '59335c9f58c78597ff73f6706c6c8fa278e08b3a', '083874731480', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangunan`
--
ALTER TABLE `bangunan`
  ADD PRIMARY KEY (`bangunan_id`);

--
-- Indexes for table `history_login`
--
ALTER TABLE `history_login`
  ADD PRIMARY KEY (`history_login_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`kendaraan_id`);

--
-- Indexes for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  ADD PRIMARY KEY (`pemeliharaan_id`);

--
-- Indexes for table `peminjaman_aset`
--
ALTER TABLE `peminjaman_aset`
  ADD PRIMARY KEY (`peminjaman_aset_id`);

--
-- Indexes for table `pengadaan_aset`
--
ALTER TABLE `pengadaan_aset`
  ADD PRIMARY KEY (`pengadaan_aset_id`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`peralatan_id`);

--
-- Indexes for table `tanah`
--
ALTER TABLE `tanah`
  ADD PRIMARY KEY (`tanah_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangunan`
--
ALTER TABLE `bangunan`
  MODIFY `bangunan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_login`
--
ALTER TABLE `history_login`
  MODIFY `history_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `kendaraan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pemeliharaan`
--
ALTER TABLE `pemeliharaan`
  MODIFY `pemeliharaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `peminjaman_aset`
--
ALTER TABLE `peminjaman_aset`
  MODIFY `peminjaman_aset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengadaan_aset`
--
ALTER TABLE `pengadaan_aset`
  MODIFY `pengadaan_aset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `peralatan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tanah`
--
ALTER TABLE `tanah`
  MODIFY `tanah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
