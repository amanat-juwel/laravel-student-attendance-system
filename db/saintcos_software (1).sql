-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2019 at 11:10 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saintcos_software`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`) VALUES
(1, 'KG'),
(2, 'Nursary'),
(3, 'Play'),
(4, 'One'),
(5, 'Two'),
(6, 'Three'),
(7, 'Four'),
(8, 'Five');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `address` text,
  `mobile_no` varchar(13) NOT NULL,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `metric_id_type`
--

CREATE TABLE `metric_id_type` (
  `id` int(11) NOT NULL,
  `metric_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `primary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `metric_id_type`
--

INSERT INTO `metric_id_type` (`id`, `metric_id`, `type`, `primary_id`) VALUES
(7, 133, 'student', 5),
(8, 134, 'student', 6),
(9, 135, 'student', 7),
(10, 132, 'student', 8),
(11, 155, 'student', 9),
(12, 138, 'student', 10),
(13, 109, 'student', 11),
(14, 137, 'student', 12),
(15, 161, 'student', 13),
(16, 136, 'student', 14),
(17, 160, 'student', 15),
(18, 159, 'student', 16),
(19, 97, 'student', 17),
(20, 164, 'student', 18),
(21, 20, 'student', 19),
(22, 162, 'student', 20),
(23, 163, 'student', 21),
(24, 3, 'student', 22),
(25, 158, 'student', 23),
(26, 157, 'student', 24),
(27, 156, 'student', 25),
(28, 4, 'student', 26),
(29, 19, 'student', 27),
(30, 24, 'student', 28),
(31, 18, 'student', 29),
(32, 9, 'student', 30),
(33, 16, 'student', 31),
(34, 15, 'student', 32),
(35, 7, 'student', 33),
(36, 14, 'student', 34),
(37, 12, 'student', 35),
(38, 5, 'student', 36),
(39, 25, 'student', 37),
(40, 26, 'student', 38),
(41, 27, 'student', 39),
(42, 13, 'student', 40),
(43, 8, 'student', 41),
(44, 10, 'student', 42),
(45, 6, 'student', 43),
(46, 146, 'student', 44),
(47, 145, 'student', 45),
(48, 144, 'student', 46),
(49, 143, 'student', 47),
(50, 115, 'student', 48),
(51, 141, 'student', 49),
(52, 128, 'student', 50),
(53, 130, 'student', 51),
(54, 116, 'student', 52),
(55, 125, 'student', 53),
(56, 124, 'student', 54),
(57, 131, 'student', 55),
(58, 129, 'student', 56),
(59, 127, 'student', 57),
(60, 142, 'student', 58),
(61, 2, 'student', 59),
(62, 126, 'student', 60),
(63, 123, 'student', 61),
(64, 122, 'student', 62),
(65, 121, 'student', 63),
(66, 120, 'student', 64),
(67, 119, 'student', 65),
(68, 118, 'student', 66),
(69, 147, 'student', 67),
(70, 148, 'student', 68),
(71, 139, 'student', 69),
(72, 140, 'student', 70),
(73, 154, 'student', 71),
(74, 113, 'student', 72),
(75, 43, 'student', 73),
(76, 58, 'student', 74),
(77, 57, 'student', 75),
(78, 102, 'student', 76),
(79, 35, 'student', 77),
(80, 54, 'student', 78),
(81, 34, 'student', 79),
(82, 61, 'student', 80),
(83, 209, 'student', 81),
(84, 209, 'student', 82),
(85, 209, 'student', 83),
(86, 36, 'student', 84),
(87, 55, 'student', 85),
(88, 63, 'student', 86),
(89, 66, 'student', 87),
(90, 62, 'student', 88),
(91, 64, 'student', 89),
(92, 46, 'student', 90),
(93, 38, 'student', 91),
(94, 45, 'student', 92),
(95, 37, 'student', 93),
(96, 52, 'student', 94),
(97, 47, 'student', 95),
(98, 33, 'student', 96),
(99, 53, 'student', 97),
(100, 44, 'student', 98),
(101, 59, 'student', 99),
(102, 32, 'student', 100),
(103, 65, 'student', 101),
(104, 60, 'student', 102),
(105, 48, 'student', 103),
(106, 56, 'student', 104),
(107, 49, 'student', 105),
(108, 50, 'student', 106),
(109, 39, 'student', 107),
(110, 40, 'student', 108),
(111, 41, 'student', 109),
(112, 42, 'student', 110),
(113, 51, 'student', 111),
(114, 28, 'student', 112),
(115, 29, 'student', 113),
(116, 30, 'student', 114),
(117, 31, 'student', 115),
(118, 17, 'student', 116),
(119, 21, 'student', 117),
(120, 22, 'student', 118),
(121, 23, 'student', 119),
(122, 95, 'student', 120),
(123, 96, 'student', 121),
(124, 11, 'student', 122),
(125, 78, 'student', 123),
(126, 106, 'student', 124),
(127, 75, 'student', 125),
(128, 84, 'student', 126),
(129, 306, 'student', 127),
(130, 71, 'student', 128),
(131, 72, 'student', 129),
(132, 68, 'student', 130),
(133, 88, 'student', 131),
(134, 82, 'student', 132),
(135, 73, 'student', 133),
(136, 313, 'student', 134),
(137, 70, 'student', 135),
(138, 89, 'student', 136),
(139, 69, 'student', 137),
(140, 103, 'student', 138),
(141, 81, 'student', 139),
(142, 79, 'student', 140),
(143, 74, 'student', 141),
(144, 67, 'student', 142),
(145, 87, 'student', 143),
(146, 86, 'student', 144),
(147, 93, 'student', 145),
(148, 83, 'student', 146),
(149, 94, 'student', 147),
(150, 85, 'student', 148),
(151, 98, 'student', 149),
(152, 90, 'student', 150),
(153, 80, 'student', 151),
(154, 104, 'student', 152),
(155, 91, 'student', 153),
(156, 92, 'student', 154),
(157, 77, 'student', 155),
(158, 76, 'student', 156),
(159, 105, 'student', 157),
(160, 180, 'teacher', 1),
(161, 177, 'teacher', 2),
(162, 174, 'teacher', 3),
(163, 173, 'teacher', 4),
(164, 178, 'teacher', 5),
(165, 171, 'teacher', 6),
(166, 179, 'teacher', 7),
(167, 166, 'teacher', 8),
(168, 176, 'teacher', 9),
(169, 172, 'teacher', 10),
(170, 1011, 'teacher', 11),
(171, 169, 'teacher', 12),
(172, 165, 'teacher', 13),
(173, 181, 'teacher', 14),
(174, 167, 'teacher', 15),
(175, 168, 'teacher', 16),
(176, 2001, 'staff', 2),
(177, 184, 'staff', 3),
(178, 183, 'staff', 4),
(179, 185, 'staff', 5),
(180, 182, 'staff', 6),
(181, 186, 'staff', 7),
(182, 175, 'teacher', 17),
(183, 101, 'student', 158),
(184, 100, 'student', 159),
(185, 99, 'student', 160),
(186, 419, 'student', 161),
(187, 112, 'student', 162),
(188, 110, 'student', 163),
(189, 111, 'student', 164),
(190, 108, 'student', 165),
(191, 107, 'student', 166),
(192, 114, 'student', 167),
(193, 149, 'student', 168),
(194, 150, 'student', 169),
(195, 117, 'student', 170),
(196, 151, 'student', 171),
(197, 152, 'student', 172),
(198, 153, 'student', 173),
(199, 170, 'teacher', 18),
(200, 187, 'staff', 8);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2018_04_10_095329_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('1d08517b811e732d3328318c8f4ed6adb1e91c950e0899699a2a1a93893243e46f83a24b331423c5', 2, 2, NULL, '[]', 0, '2018-04-10 23:26:23', '2018-04-10 23:26:23', '2019-04-11 05:26:23'),
('c368914a772a636850ac68f178ada773a20691498c855d8481bce63d1de081047371a6c4af263382', 2, 1, 'MyApp', '[]', 0, '2018-04-10 23:23:56', '2018-04-10 23:23:56', '2019-04-11 05:23:56'),
('f37f7b28ec920ab87e109dab8f987bab9f15732dd1691a1ec3ef7def5e99a2674638b30b40cd9da8', 2, 2, NULL, '[]', 0, '2018-04-10 23:30:56', '2018-04-10 23:30:56', '2019-04-11 05:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'RbzHnuRZN9NQ1YBf5QFbxgn0zZplYf4OXbzqieww', 'http://localhost', 1, 0, 0, '2018-04-10 03:51:12', '2018-04-10 03:51:12'),
(2, NULL, 'Laravel Password Grant Client', 'FvQ6W3eWzn64ySY8zeXhNuArPYtQEqmf2GYGEGK3', 'http://localhost', 0, 1, 0, '2018-04-10 03:51:12', '2018-04-10 03:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2018-04-10 03:51:12', '2018-04-10 03:51:12');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('455411fb03ed74512bbb39af713a30eba029177b7c14c381551537b1713ad7de548beed6ec030929', '1d08517b811e732d3328318c8f4ed6adb1e91c950e0899699a2a1a93893243e46f83a24b331423c5', 0, '2019-04-11 05:26:23'),
('9c1426efebfe9d38935d7bf45ab45d5cdc33352cfce276ec7abe405b122cb328a1bb8a8c216ee00d', 'f37f7b28ec920ab87e109dab8f987bab9f15732dd1691a1ec3ef7def5e99a2674638b30b40cd9da8', 0, '2019-04-11 05:30:56');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(10) UNSIGNED NOT NULL,
  `father` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mother` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `father`, `mother`, `address`, `mobile_no`, `email`, `occupation`, `created_at`, `updated_at`) VALUES
(3, 'Shakil Ahmed', 'Amina Sultana', 'Maya Villa, 37 Ward, Munshipara, Ctg.', '8801726502740', 'shakiltanisa@gmail.com', 'Service', NULL, NULL),
(4, 'MD.Fakhrul Islam', 'Tahmina Sultana', 'Dalim meahr bari,Moddom Goshaildanga,36 ward,ctg', '8801868358326', NULL, 'Service holder', NULL, NULL),
(5, 'Aziz mia', 'Jannatul Bokeya', 'CDA road no 6,27 ward,Agrabad,ctg', '8801838507940', NULL, 'Service', NULL, NULL),
(6, 'Ruhul Amin Bablu', 'Aklima Akter', 'Abidarpara,27 ward,ctg', '8801718318924', NULL, 'Business', NULL, NULL),
(7, 'Abu Taher Bhuiyan', 'Fatema Begum', 'Azhar miar building,Abidarpara,27 ward,ctg', '8801712196938', NULL, 'Service', NULL, NULL),
(8, 'MD.Masud Rana', 'Rocsana Akther', 'CDA road no 13,Agrabad,ctg', '8801853013995', NULL, 'service', NULL, NULL),
(9, 'Arafat-E-Karim', 'Shamsun Nahar Irin', 'Mohona building,Hazi thanda miah moshjid.36 ward.ctg', '8801919865173', NULL, 'service', NULL, NULL),
(10, 'MD.Kaimul Hasan', 'MO.Shajeda Begum', 'Hazi Golam Rahman Lane,Beparipara,27 ward,ctg', '8801615663767', NULL, 'Business', NULL, NULL),
(11, 'Syed Mohammad Moin Uddin', 'Syeda Gulshan', 'Sojib bekary building,Moulovipara chowmuhony,24 ward,ctg', '8801817662841', NULL, 'Service', NULL, NULL),
(14, 'MD.Babul Meya', 'Rehena Begum', 'Laila Monzil,Beparipara,27 ward,Agrabad,ctg', '8801827273638', NULL, 'Business', NULL, NULL),
(15, 'MD.Khokon', 'Shiule Akther', 'Monju shaheber bari,Road no 9,36 ward,ctg', '8801818194852', NULL, 'Service', NULL, NULL),
(16, 'Mahabubul Alam Chowdhury', 'Yesmin Akther', 'Hazi Yousuf Ali Sowdagorer bari,Sheikh Mujib road,ctg', '8801819337985', NULL, 'Business', NULL, NULL),
(17, 'Md Shah Alam', 'Nasima Akter', 'Pritiloj Bhabn,Shak Monsur Ali Lane,Agrabad,Ctg.', '8801779736074', NULL, 'Service', NULL, NULL),
(18, 'Jane Alam', 'Nahida Alam', 'Borobari Moddom Goshaildanga,ctg', '8801626977360', NULL, 'service', NULL, NULL),
(19, 'Abdullah al Mamun', 'Irin Sultana', 'CDA road no-12,bari-383,Agrabad,Ctg.', '8801816706021', NULL, 'Service', NULL, NULL),
(20, 'MD.Zahir Uddin', 'Hazera Begum', 'Abul Hossen company building,Road no 3,Goshaildanga fokirhat,36 ward,ctg', '8801879654142', NULL, 'Service', NULL, NULL),
(21, 'Md Liton', 'Tania Akter', 'Abu Hasem bari,Ghoshildanga,36 ward,Ctg.', '8801812883827', NULL, 'Service', NULL, NULL),
(22, 'MD.Abdul Matin', 'Salma Akter', 'Ripon Shaheber bari,Hazipara,ctg', '8801819874786', NULL, 'Service', NULL, NULL),
(23, 'MD.Khorsheed Alam', 'MRS.Sharmin Alam', 'CDA road no 6,Agrabad,ctg', '8801730590358', NULL, 'service', NULL, NULL),
(24, 'Md Forkan', 'Ms.Shaki Akter', 'Mabud showdagor bari,27 no ward,Abedorpara,Ctg.', '8801815566363', NULL, 'Service', NULL, NULL),
(25, 'Ibrahim khalil', 'Shahina Begum', 'Fokir Majhir bari,27 ward,ctg', '8801883811105', NULL, 'Service', NULL, NULL),
(26, 'Sahabuddin', 'Umme Kulsum', 'Hazi Zafor Ahmmed bari,CDA road no 9,36 ward,ctg', '8801630143322', NULL, 'Service', NULL, NULL),
(27, 'MD.Sayed', 'Sharmin Akter', 'Hazi fojol hoque showdagorerbari,Abidarpara,27 ward,ctg', '8801710696311', NULL, 'Service', NULL, NULL),
(28, 'Md Babul Uddin', 'Arjoo Naher', 'Cda-13,Abedorpara,Amin Ahamed bari,Ctg.', '8801816722419', NULL, 'Service', NULL, NULL),
(29, 'MD.Akramul Hoque', 'Minu Ara', 'Hazi Nojir Showdagorere bari.Abidarpara,27 ward,ctg', '8801849172721', NULL, 'Service', NULL, NULL),
(30, 'Farid Ahmmed Sazzad', 'Rumana Jafrin Rupa', 'Munshi mia bari,Abedorpara,Ctg.', '8801741436205', NULL, 'Service', NULL, NULL),
(31, 'Fayez Ahmmed', 'Laila Monowara Lakhi', 'Ali Akkas Vila,Padma Abasik,24 ward,ctg', '8801883584411', NULL, 'Service', NULL, NULL),
(34, 'Md Amran Hossain', 'Rashada Hossain', 'Khulilur Rahman mistri bari,middle goshaildanga,Ctg.', '8801815184599', NULL, 'Service', NULL, NULL),
(37, 'Iqbal Hossain', 'Anika Sultana', 'Haji kasem bari,36 ward,Ctg.', '8801866326581', NULL, 'Service', NULL, NULL),
(40, 'Jane Alam', 'Nahida Alam', 'Borobari Moddom Goshaildanga,ctg', '8801537089886', NULL, 'Service', NULL, NULL),
(41, 'Md Aminul Hoque', 'Lutfur Nahar Lima', 'Bohutala Koloni,Mosjid Market ,Ctg.', '8801815948362', NULL, 'Service', NULL, NULL),
(42, 'MD.Zonayed', 'Zannatul Kawsar', 'Abul Hossen Maneger building,36 ward,ctg', '8801688609030', NULL, 'Service', NULL, NULL),
(43, 'Sumon Baruya', 'Kakoli Baruya', 'Joyshen Baruyabari ,6 no binajuri,Rawzan', '8801818464373', NULL, 'Service', NULL, NULL),
(44, 'MD.Monjurul Alam', 'Jesmin Akter', 'CDA road no 12,Abidarpara,27 ward,ctg', '8801767883354', NULL, 'Service', NULL, NULL),
(45, 'Md Ali Hossain', 'Parul Akter', 'Mowlana ali ahamad bari,5-ward,Mohora, Ctg.', '8801843046442', NULL, 'Service', NULL, NULL),
(46, 'Bidhan Chandra Sutradhar', 'Prionti Rani Roy', 'CDA road no 3,27 ward,Agrabad,ctg', '8801716757906', NULL, 'Service', NULL, NULL),
(47, 'Abdul Mabud Mia', 'Moriom Akter Nishu', 'Hazi Abdul kasemer bari, Goshildanga, Bohutola Mosgider pase, Bandar, Ctg.', '8801758226434', NULL, 'Service', NULL, NULL),
(48, 'Abdur Rashid', 'Farzana Boby Rina', 'Kasem hazir bari,Shishu hospital road,36 no ward, Bandar, Ctg', '8801778044063', NULL, 'Service', NULL, NULL),
(49, 'MD.Mohiuddin', 'Tahmina Akter', 'Hazi Kholilur Rahman Mistribari,36 ward,ctg', '8801819977285', NULL, 'Business', NULL, NULL),
(50, 'MD.Bashir Uddin', 'Bibi Khadiza Mili', 'Razamia Showdagorer bari,Moddom Goshaildangga,ctg', '8801789854070', NULL, 'Service', NULL, NULL),
(51, 'Mohammed Faruk', 'Shellyna akter', 'Ishaq Mp road,Hazipara,24ward,Agrabad,ctg', '8801815511388', NULL, 'Service', NULL, NULL),
(52, 'MD.Mizanur Rahman', 'Khadiza Akther', 'Yakub Mension,road no 5,27 ward,Agrabad,ctg', '8801817781714', NULL, 'Business', NULL, NULL),
(53, 'Abdullah-Al-Mamun', 'Mahmuda Akther', '1461 Hazipara,Uttor Agrabad,Ctg', '8801981116776', NULL, 'Business', NULL, NULL),
(54, 'MD.Abdul Ahad', 'Roksana Akter', 'CDA road no 14,27 ward,Agrabad,ctg', '8801710971383', NULL, 'Service', NULL, NULL),
(55, 'Jahangir Alam', 'Nowshin Farjana', 'Jalal Ahmed bari,Road 11,36 ward,ctg', '8801832816140', NULL, 'Service', NULL, NULL),
(56, 'Immam Hossain', 'Halima Akter Rima', 'Mostafizur Rahman building,Billapara kather moshjid,Abidarpara,27 ward,ctg', '8801770035810', NULL, 'Service', NULL, NULL),
(57, 'MD.Habibul Mannan', 'Monira Begum', 'Samad showdagorer bari,Goshaildangga,ctg', '8801817252854', NULL, 'Service', NULL, NULL),
(61, 'M.A Kashem', 'Shahin Akter', 'Aminul Hoque Memberer bari,CDA road no 1,27 ward,ctg', '8801819673198', NULL, 'Service', NULL, NULL),
(62, 'MD.Sariful Islam', 'Ruma Akther', '254/A,Saiba villa,24 ward,ctg', '8801839505454', NULL, 'Service', NULL, NULL),
(63, 'MD.Nizam Uddin', 'MRS.Maksuda Begum', 'Hamid shaheber bari,Fokirhat Kacabazar,Goshaildangga,36 ward,ctg', '8801749269217', NULL, 'Service', NULL, NULL),
(64, 'Md.Abu Taher', 'Shanaz Akter', 'Hasomtali malumer bari,CDA road no 10,Abidarpara,27 ward,ctg', '8801819924033', NULL, 'Service', NULL, NULL),
(65, 'Dilip Kumur Nath', 'Basana Rani Debi', 'Rahman shaheber building,Goshaildangga Shil colony,36 ward,ctg', '8801794095086', NULL, 'Service', NULL, NULL),
(66, 'MD.Billal Hosen', 'Sumya Sultana', 'Aziz Bhabon,CDA road no 9,Abidarpara,27 ward,ctg', '8801818786867', NULL, 'service', NULL, NULL),
(67, 'Mahmud Russell', 'Farzana Nur Priya', 'Mohona building,Hazi thanda Miar Moshjid lane,fokirhat,ctg', '8801925628099', NULL, 'Service', NULL, NULL),
(68, 'MD.Sirajul Islam Chowdhury', 'Sayeda Parvin Akther', 'Dr.Abu Ahammed Chowdhuryr bari,Abidarpara,27 ward,ctg', '8801819852949', NULL, 'Service', NULL, NULL),
(69, 'MD.Monjurul Alam', 'Rehana Akter', 'Aminul Hoque memberer bari,CDA road no1/1,27 ward,ctg', '8801718598440', NULL, 'Service', NULL, NULL),
(70, 'MD.Mahabub Uddin Chowdhury', 'Nelufa Yesmin', 'Hamela Mension,Saleho ahmmed Damuya pukurpar,Chairman lane,Agrabad,Ctg', '8801850327492', NULL, 'Business', NULL, NULL),
(71, 'MD.Solaiman Hossain', 'Kawsar Akter', 'Late Hazi Kholilur Rahman Mistrir bari,Goshasildangga,36 ward,ctg', '8801819385942', NULL, 'Business', NULL, NULL),
(72, 'MD.Helal Uddin', 'MRS.Munni Helal', 'Agrabad C&B colony,ctg', '8801783718977', NULL, 'Service', NULL, NULL),
(73, 'Abdul Khalek', 'Kohinur Akter', 'Hazi Abdul Mojid bari,CDA road no 13,ctg', '8801824786871', NULL, 'Service', NULL, NULL),
(74, 'Mohammed Shahjahan', 'MRS.Jaria Begum', 'Chowdhury villa 316,CDA road no 14,Agrabad,ctg', '8801673732074', NULL, 'Business', NULL, NULL),
(75, 'MD.Jafar', 'Shamima Akter', 'Hazi Nurul Hoque Chowdhury bari,CDa road no 13 ,ctg', '8801625465823', NULL, 'service', NULL, NULL),
(76, 'Jamal Uddin', 'Kamrunnahar', 'Brickfield road,20 ward,ctg', '8801714407330', NULL, 'Service', NULL, NULL),
(77, 'MD.Gulger Rahman', 'MRS.Alina Akter', 'Kobir Mension,Daiyapara,24 ward,ctg', '8801850374649', NULL, 'Service', NULL, NULL),
(78, 'Md.Amran', 'Shikha Alam', 'CDA 1,Forest colony,27 ward,ctg', '8801710800548', NULL, 'service', NULL, NULL),
(79, 'Mohammed Hanif', 'Miraj Akter', 'Faruk mension,CDA road no 1,Abidarpara,ctg', '8801818633793', NULL, 'Service', NULL, NULL),
(80, 'Joynal Abedin', 'Umme Sayeda', 'Goshaildangga Wadud brothers bari,3 no Fokirhat,36 ward,ctg', '8801877183906', NULL, 'Service', NULL, NULL),
(81, 'MD.Jayed', 'MS.Ummeay Habiba', 'Badsha mia showdagorer bari,Moddom Goshaildangga,36 ward,ctg', '8801822343413', NULL, 'Service', NULL, NULL),
(82, 'Md.Bakir Hossain', 'Asma Begum', 'Johur company building,Goshaildangga,Thanda miar moshjid,36 ward,ctg', '8801712641166', NULL, 'Service', NULL, NULL),
(83, 'Hasan Faruq', 'Nazia Tazrin', 'CDA road no 10,Agrabad, ctg', '8801733744297', NULL, 'Service', NULL, NULL),
(84, 'MD.Monsur Ahamed', 'Rabeya Akther', 'Monju Shaheber bari,road no 9,Abidarpara,ctg', '8801789245195', NULL, 'Service', NULL, NULL),
(85, 'Liton Dhar', 'Bijoy Laxmi Dhar', 'CDA road no 1/1,Forkan tower,27 ward,Agrabad,ctg', '8801817753435', NULL, 'service', NULL, NULL),
(86, 'MD.Hosain', 'Najma Begum', 'CDA road 1/1,Bolirpara,Agrabad,ctg', '8801640701544', NULL, 'Service', NULL, NULL),
(89, 'MD.Omar faruk', 'MRS.Sumona Akter', 'Kobir Monjil,Daiyyapara,ctg', '8801919386120', NULL, 'Service', NULL, NULL),
(90, 'Didarul Alam', 'Sheli Akter', 'Abdul Hoque Showdagorer bari,Abidarpara,27 ward,ctg', '8801817728018', NULL, 'Service', NULL, NULL),
(91, 'Nazir Uddin Muzumdar', 'Naima Tanjina', 'Jalal Ahamed bari,CDA road no 11,ctg', '8801768222066', NULL, 'Service', NULL, NULL),
(92, 'MD.Mahabub Alam', 'Sahanaj Parvin', 'Late Munshi mia showdagorer bari,Abidarpara,27 ward,Agrabad ctg', '8801814997221', NULL, 'Service', NULL, NULL),
(93, 'Safiul Alam', 'Jasmin Akther', 'Jane alamer bari,CDA road no 1/1,27 ward,ctg', '8801885395060', NULL, 'Service', NULL, NULL),
(94, 'Muhammad Mahfuzul haque', 'MST.Zinia Khatun', 'Bohutola colony,Agrabad,ctg', '8801714574857', NULL, 'Service', NULL, NULL),
(95, 'MD.Ferdous Mai', 'Parvin Akther', 'Bohutola colony 14/23,Agrabad,ctg', '8801863220877', NULL, 'Service', NULL, NULL),
(96, 'MD.Nasir Uddin Sharif', 'MRS.Nadira Begum', 'CDA road no 12,27 ward,Agrabad,ctg', '8801716904261', NULL, 'Service', NULL, NULL),
(97, 'MD.Kamrul Huda Kamal', 'Jannatul Ferdous', 'Hazi Thanda miar bari,Abidarpara,36 ward.ctg', '8801815400280', NULL, 'Service', NULL, NULL),
(98, 'Aziz Mia', 'Jannatul Bokeya', 'CDA road no 6,27 ward,Agrabad ctg', '8801823627413', NULL, 'Service', NULL, NULL),
(99, 'MD.Bahar Uddin', 'Jesmin Akter', 'Alam Villa,Abidarpara,ctg', '8801818771700', NULL, 'Service', NULL, NULL),
(100, 'Shekh Ahammad', 'Sadia Soltana Tamanna', 'Hazi sayed Ahammad,Posshim Goshaildangga,ctg', '8801881758226', NULL, 'Service', NULL, NULL),
(101, 'MD.Murad', 'Rahen Akter', 'Habibur Rahmaner Bari,36 ward,ctg', '8801829784950', NULL, 'Service', NULL, NULL),
(102, 'MD.Sariful Islam', 'Tania Begum', 'Moddom Goshaildangga,3no Fokirhat,ctg', '8801851366526', NULL, 'Service', NULL, NULL),
(103, 'Bellal Hosen', 'Salina Akter', 'Road no 1,Shantibag shamoli,ctg', '8801732884124', NULL, 'Service', NULL, NULL),
(104, 'MD.Akram', 'Ranu Akter', 'Mabud Showdagorer bari,CDA road no 10,27 ward,Abidarpara,ctg', '8801825106635', NULL, 'Service', NULL, NULL),
(105, 'MD.Shaiful Alam', 'Romana Nasrin', 'CDA road no 12,Khaleda khanom,27 ward,Agrabad,ctg', '8801626647716', NULL, 'Service', NULL, NULL),
(106, 'MD.Abdullah Al Noman', 'Umme Kulsum Lota', 'Hamid Ali showdagorer bari,3 no Fokirhat,Moddom Goshaildangga,36 ward,ctg', '8801777393150', NULL, 'Service', NULL, NULL),
(107, 'MD.Lokman', 'Shamim Ara Nipa', 'Barik miar Bari,Moddom Goshaildangga36 ward,ctg', '8801689206352', NULL, 'Service', NULL, NULL),
(108, 'MD.Tahidul Islam', 'Taslima Akther', 'Saiba villa 254/a,24 ward,ctg', '8801882902214', NULL, 'Service', NULL, NULL),
(109, 'Mohammad Masum Bhuiyan', 'MRS.Rubiya Begum', 'CDA road no 9,27 ward,Agrabad,ctg', '8801680805073', NULL, 'Service', NULL, NULL),
(110, 'MD.Yousuf', 'Jannatul Ferdous', 'Izhar mia buiding,Fokirhat road,Abidarpara,27 ward,ctg', '8801843228601', NULL, 'Service', NULL, NULL),
(111, 'Ali Afsar', 'Murshida Akter Mita', 'Ali ahammoder bari-1630,road no 3,27 ward,ctg', '8801717734367', NULL, 'Service', NULL, NULL),
(112, 'MD.Arshad Ali', 'MS.Aysha Begum', 'Laila Monjil,Beca shah road,Posshim Goshaildangga,36 ward,ctg', '8801743846570', NULL, 'Service', NULL, NULL),
(113, 'MD.Imran', 'Lucky Akter', 'Moddom Goshaildangga,Forid companyr bari,36 ward,ctg', '8801711448181', NULL, 'Service', NULL, NULL),
(114, 'Tajul Islam', 'Mahmuda Akter rupa', 'T&T store colony E-1/2,27 ward,ctg', '8801678586331', NULL, 'Service', NULL, NULL),
(115, 'MD.Golam Samshouzzaman', 'MRS.Sultana Rajia', 'CDA road no 5,House no 248,27 ward,Agrabad,ctg', '8801711382684', NULL, 'Business', NULL, NULL),
(116, 'MD.Ismaile', 'Jasmin Akthar', 'Hazi Abul Kashem bari,Uttor Goshaildangga,36 ward,ctg', '8801778000831', NULL, 'Service', NULL, NULL),
(117, 'MD.Robiul Awal', 'Jannatul Mawa Sumi', 'Chattogram Ma O Shishu Genaral  Hospital Mawa-2,ctg', '8801704027105', NULL, 'Service', NULL, NULL),
(118, 'Mohammad Belal Ahmed', 'Umme Habiba', 'Hoque Villa,CDA road no 1,ctg', '8801643667825', NULL, 'Service', NULL, NULL),
(119, 'Shujit Kanti Dey', 'Joya Rani Talukder', '14/9 Bohutola Sorkari Colony,Agrabad,ctg', '8801817730045', NULL, 'Service', NULL, NULL),
(120, 'MD.Harunur Rashid', 'Shahanaz Akter', 'Hazi Fojol Hoque bari,Abidarpara,ctg', '8801818876692', NULL, 'Service', NULL, NULL),
(121, 'MD.Mamunur Rashid Liton', 'Juli Akter', 'Barik Miar bari,Posshim Goshaildangga,ctg', '8801680126503', NULL, 'Service', NULL, NULL),
(122, 'Uttam Kumar Bachhar', 'Smriti kona Roy', 'Hamid Villa,Goshaildangga,ctg', '8801616945699', NULL, 'Service', NULL, NULL),
(123, 'MD.Tawahidul Baki', 'MS,Tumpa', 'CDA road no 20,27 ward,Agrabad,ctg', '8801781943211', NULL, 'Service', NULL, NULL),
(124, 'Kamal Uddin', 'Luthfunnesa Rony Uddin', 'CDA road no 4,Agrabad,ctg', '8801883602269', NULL, 'Service', NULL, NULL),
(125, 'Lalu Kumar Nath', 'Konica Rani Devi', 'Bohutola Sorkari Colony B-10/13,Agrabad,ctg', '8801924343869', NULL, 'Service', NULL, NULL),
(126, 'Sunayan Barua', 'Swapna Rani Barua', 'CDA road no 3,House no-721,Agrabad,ctg', '8801812822466', NULL, 'Service', NULL, NULL),
(127, 'MD.Jashim Uddin', 'Samshun Nahar', 'Hazi Abul kashemer bari,Uttor goshaildangga,36 ward,Ctg', '8801813258267', NULL, 'Business', NULL, NULL),
(128, 'Murad Elahi', 'Samina Nowshin', 'Bangladesh Bank Colony G-2/3,ctg', '8801728079869', NULL, 'Servicve', NULL, NULL),
(129, 'MD.abdul azim', 'Dowlot Akter', 'Alamgir Shaheber Building,Road no 1 Ronggipara,ctg', '8801684497990', NULL, 'business', NULL, NULL),
(130, 'Ranjit Chakraboty', 'Shamoly Chakraboty', 'Abul khayer colony,Pilkhana road,Amin jutemills-4211,Ctg', '8801715954479', NULL, 'Service', NULL, NULL),
(131, 'H.M.Halal Uddin', 'Nasima Halali', 'Hazi Shah Mowazzal Hosen D-1225,Abidarpara,27 ward,ctg', '8801773048907', NULL, 'Service', NULL, NULL),
(132, 'MD.Shakir', 'Safia Khatun Popy', 'Abul Hosen Shaheber bari 552-557,Goshaildangga,36 ward,ctg', '8801817207709', NULL, 'Business', NULL, NULL),
(133, 'Mohammad Amdadul Hoque saif', 'Ayesha Akther', 'CDA road no 2 1618/A,27 ward,Agrabad,Ctg', '8801828372950', NULL, 'Business', NULL, NULL),
(134, 'MD.Tofiqul Islam', 'Fatema Johura Hasna', 'Olamia Showdagorer bari,Posshim Goshaildangga,36 ward,Ctg', '8801826571809', NULL, 'Service', NULL, NULL),
(135, 'MD.Aminul Hoque', 'Sharzina Yousof Moni', 'CDA road no 13,27 ward,Agrabad,ctg', '8801832746040', NULL, 'Service', NULL, NULL),
(136, 'MD.Mohiuddin Chowdhury', 'Tania Nahar Kulsuma', 'Jahangir Komishonar Bari,Posshim Goshaildangga,36 ward,ctg', '8801817724762', NULL, 'Business', NULL, NULL),
(137, 'Sumit Kumari Biswas', 'Chaity Biswas', 'Sudir Villa,B Nag Lane,Goshaildangga,36 ward,Ctg', '8801615483572', NULL, 'Service', NULL, NULL),
(138, 'Hazi MD.Nurul Anowar', 'Jasmin akter Baby', 'Anowara building,Aziz miar godown,Goshaidangga,36 ward,ctg', '8801912501326', NULL, 'Service', NULL, NULL),
(139, 'MD.Mohiuddin', 'Yasmin Akter', 'Mia Company bari,road no 9,Posshim goshaildangga,36 ward,ctg', '8801856722910', NULL, 'Service', NULL, NULL),
(140, 'MD.Sohel', 'MRS.Razia Sultana', 'Nurjahan Mension 1497,road no 17/21,Bolirpara,27 ward,Ctg', '8801777223248', NULL, 'Service', NULL, NULL),
(142, 'MD.Enamul Hoque', 'Suraya Ahmed Lucky', 'Hazi Nojir Ahammad Showdagorer bari,Abidarpara,27 ward,Ctg', '8801711236858', NULL, 'Business', NULL, NULL),
(143, 'MD.Rubel Hossain', 'Roksana Begum', 'Yousuf Showdagorer bari,CDA road no 13,27 ward,Ctg', '8801824280663', NULL, 'Service', NULL, NULL),
(144, 'MD.Belal Uddin', 'Kohinoor Akther', 'Morium Monjil,Abidarpara,27 ward,Ctg', '8801628848494', NULL, 'Business', NULL, NULL),
(145, 'MD.Liakat Ali Howlader', 'Rumana Parvin Sumi', 'CDA road no 3,House no 209,Agrabad,Ctg', '8801711895666', NULL, 'Business', NULL, NULL),
(146, 'Nezam Uddin', 'Lipy Akther', 'Kholil Showdagorer bari,Becashah road,36 ward,Ctg', '8801714645773', NULL, 'Service', NULL, NULL),
(147, 'MD.Mamunur Rashid', 'Jasmin Akter', 'CDA road no 4,27 ward,Agrabad,Ctg', '8801815338144', NULL, 'Service', NULL, NULL),
(148, 'MD.Elias Miya', 'MRS.Samonara Begum', 'Beparipara Agrabad,Ctg', '8801819316132', NULL, 'Business', NULL, NULL),
(149, 'Hazi Abul Hashem', 'Aklima Khatun Akhi', 'Boshor Monjil,Posshim Goshaildangga,36 ward,Ctg', '8801976202742', NULL, 'Business', NULL, NULL),
(150, 'MD.Newaz', 'Sahin Sultana', 'Soltan Miar bari ,Posshim Goshaildangga,36 ward,Ctg', '8801720890791', NULL, 'Service', NULL, NULL),
(151, 'MD.Karimul Hoque', 'Sanjida', 'Baccu Showdagorer bari,Fokirhat,Posshim goshaildangga,36 ward,Ctg', '8801812347205', NULL, 'Service', NULL, NULL),
(152, 'MD.Mamunur Rashid', 'Mrs.Sumana Yasmin', 'CDA road no 29,House  no 158,Ctg', '8801631713571', NULL, 'Service', NULL, NULL),
(153, 'Kazi MD.Nurunnobi', 'Roksana Akther', 'C.G.S Moshjid colony,House no F 3/A/16,27 ward,Ctg', '8801819633486', NULL, 'service', NULL, NULL),
(155, 'MD.Jahidul Alam', 'Urmee Akter', 'Joshim Shaheber bari,halishor road,Hazipara,Ctg', '8801790196633', NULL, 'Service', NULL, NULL),
(156, 'MD.Alam', 'Roksana Begum', 'Morium Monjil,road no 1/1,Abidarpara,Agrabad,Ctg', '8801811304092', NULL, 'Service', NULL, NULL),
(157, 'Mohammed Shakir', 'Fatema Tuz Zohura', 'CDA road no 11,House no 933/934', '8801758626969', NULL, 'Service', NULL, NULL),
(158, 'MD.Eddriss Showrob', 'Jhusna Akter', 'CDA road no 17/1,Agrabad,ctg', '8801822242225', NULL, 'Service', NULL, NULL),
(159, 'MD.Emam Hosen', 'Shumi Akter', 'Khan Shaheber building,CDA road no 17,Agrabad,Ctg', '8801630696962', NULL, 'Service', NULL, NULL),
(160, 'MD.Mijanur Rahman', 'MRS.Fahima Begum', 'Sekander Commissioner Lane,Fokirhat Road,Abidarpara,27 ward,Ctg', '8801625060705', NULL, 'Service', NULL, NULL),
(161, 'Shamsul Alam', 'Rozy Akther', 'Boro Bari,Moddom Goshsaildangga,Ctg', '8801740628407', NULL, 'Service', NULL, NULL),
(162, 'MR.Tarikul Islam', 'MRS.Reba Begum', 'Boshor Villa,Billapara,Ctg', '8801745109362', NULL, 'Service', NULL, NULL),
(163, 'MD.Mahabub Alam', 'Kohinoor Akter', 'Jamal Ahmmeder Bari,CDA road no 13,27 ward,Ctg', '8801788855869', NULL, 'Business', NULL, NULL),
(164, 'MD.Mizanur Rahman Chowdhury', 'MRS.Shazu Ara Bagum', 'CDA road no 27,Shopnil 68 no Bari,37 ward,Ctg', '8801671693291', NULL, 'Service', NULL, NULL),
(165, 'Mahabub Alam', 'Farjana Aktar', 'Mowlovi Hashem Shaheber Bari,Barik Miar school Road,Moddom Goshaildangga,36 ward,Ctg', '8801820554499', NULL, 'Business', NULL, NULL),
(166, 'Karim Ullah', 'Momena Akter', 'CDA road no 13,Amader Bari-3718,27 ward,Ctg', '8801851360916', NULL, 'Business', NULL, NULL),
(167, 'Abul Kashem', 'Shireen Sultana', 'Khalek Monjil-2,Abidarpara,27 ward,Agrabad,Ctg', '8801817743246', NULL, 'Business', NULL, NULL),
(168, 'MD.Salauddin', 'Altaz Begum', 'CDA road no 13,27 ward,Agrabad,Ctg', '8801849203989', NULL, 'Service', NULL, NULL),
(169, 'Harun Ur Rashid', 'Nasren Akther', 'Mowlovi Shorif Ullah Bari,36 ward,Ctg', '8801814979595', NULL, 'Service', NULL, NULL),
(170, 'Abdullah Al Mamun', 'Rahima Khanom Rimu', 'Abdul Aziz Sukanur Bari,CDA road no 11,Abidarpara,27 ward,Ctg', '8801614316368', NULL, 'Service', NULL, NULL),
(171, 'Shahadat Hossain Chowdhury', 'Sal-Sabila Nahar', 'Gentry Salam House,Abidarpara,Ctg', '8801819950404', NULL, 'Service', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Rolex Future', 'An elegant watch for men', NULL, NULL),
(2, 'Iphone', 'Best Smart Phone', '2018-04-10 23:35:09', '2018-04-10 23:35:09'),
(3, 'Xiaomi', 'Best Chinese Smart Phone', '2018-04-11 04:03:51', '2018-04-11 04:03:51'),
(5, 'Oppo', 'Selfiw Phone', '2018-04-11 04:05:25', '2018-04-11 04:05:25'),
(7, 'qwewq', 'qwewqe', '2018-04-11 04:18:34', '2018-04-11 04:18:34'),
(8, 'test', 'test', '2018-04-11 04:20:23', '2018-04-11 04:20:23'),
(9, 'Hello', 'Passed Test', '2018-04-11 04:27:02', '2018-04-11 04:27:02'),
(11, 'Hi', 'Test', '2018-04-11 04:28:03', '2018-04-11 04:28:03'),
(14, 'Tv Card', 'For LED tv', '2018-12-11 04:26:53', '2018-12-11 04:26:53'),
(15, 'Fan', 'Ceiling Fan', '2018-12-18 10:36:38', '2018-12-18 10:36:38'),
(16, 'Laptop', 'Laptop Desc.', '2018-12-18 10:41:23', '2018-12-18 10:41:23'),
(17, 'Cart', 'From MVC Application', '2018-12-22 08:21:42', '2018-12-22 08:21:42'),
(18, 'XYZ', 'Dot Net Application', '2018-12-23 07:12:54', '2018-12-23 07:12:54'),
(20, 'Radio', 'From MVC Application', '2018-12-23 07:14:51', '2018-12-23 07:14:51'),
(21, 'Test 180', 'From MVC Application', '2018-12-23 07:17:06', '2018-12-23 13:20:11'),
(22, 'Car', 'From MVC Application', '2018-12-23 07:19:50', '2018-12-23 11:10:07'),
(23, 'Bike', 'From MVC Application', '2018-12-23 07:22:12', '2018-12-23 11:09:25'),
(24, 'Energy Bulb', 'From MVC Application', '2018-12-23 11:00:36', '2018-12-23 11:09:05'),
(25, 'AC', 'Air Conditioner', '2018-12-23 11:11:11', '2018-12-23 11:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `sms_logs`
--

CREATE TABLE `sms_logs` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `type` varchar(50) NOT NULL,
  `numbers_count` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `status` text,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_logs`
--

INSERT INTO `sms_logs` (`id`, `date`, `type`, `numbers_count`, `message`, `status`, `user_id`) VALUES
(1, '2018-12-10 01:00:00', 'students', 17, 'Class is suspended', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sms_templates`
--

CREATE TABLE `sms_templates` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sms_templates`
--

INSERT INTO `sms_templates` (`id`, `subject`, `message`) VALUES
(1, 'Meeting', 'Meeting at 10 am.'),
(2, 'Holiday', 'Tomorrow is holiday');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `metric_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `father` varchar(50) DEFAULT NULL,
  `mother` varchar(50) DEFAULT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `address` text,
  `position` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `metric_id`, `name`, `father`, `mother`, `mobile_no`, `address`, `position`) VALUES
(2, 2001, 'Nurul IslaM', 'Late Amir Ali', 'Late Amena Begum', '8801831570704', 'CDA road no 13,Agrabad,Ctg', 'Security Guard'),
(3, 184, 'Bokul Rani Dash', 'Monindro Kumar Dash', 'Milon Bala Dash', '8801815598576', 'CDA road no 1,Agrabad,Ctg', 'Aaya'),
(4, 183, 'Yasmin', 'Md.Shofi', 'Joshna Akter', '8801814991579', 'CDA road no 24,House no-705,Agrabad,Ctg', 'Aaya'),
(5, 185, 'Kohinoor Begum', 'Raja Mia', 'Sufiya Khatun', '8801680147056', 'CDA road no 1,Bolirpara,Agrabad,Ctg', 'Aaya'),
(6, 182, 'Dipaly Rani Dash', 'Ruhi Dash', 'Jolmoni Dash', '8801884065778', 'Munir Nogor,37 ward,Halishore,Ctg', 'Aaya'),
(7, 186, 'Abdul Karim', 'Azgor Ali', 'Majeda Khatun', '8801850691453', 'CDA road no 1,Bolirpara,Agrabad,Ctg', 'Van Driver'),
(8, 187, 'Md Foyez Uddin', 'Md Mofiz', 'Fozilot Begum', '8801864851257', 'Road 1, Bolir Para, CDA R/A, Agrabad, Ctg.', 'Van Driver');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

CREATE TABLE `staff_attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `staff_id` int(11) NOT NULL,
  `in_time` datetime NOT NULL,
  `out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`id`, `date`, `staff_id`, `in_time`, `out_time`) VALUES
(1, '2019-01-14', 4, '2019-01-14 20:12:36', NULL),
(2, '2019-01-15', 3, '2019-01-15 09:13:46', NULL),
(3, '2019-01-15', 6, '2019-01-15 09:18:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `metric_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `image` text,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `metric_id`, `name`, `dob`, `image`, `parent_id`) VALUES
(5, 133, 'Tanisha Ahmed Maowa', '2011-09-26', 'public/image/avatar.png', 3),
(6, 134, 'Rumaisa Islam Tuba', '2012-07-08', 'public/image/avatar.png', 4),
(7, 135, 'Saima Sharmin Nipa', '2012-11-10', 'public/image/avatar.png', 5),
(8, 132, 'Akibul Hasan Abid', '2012-04-05', 'public/image/avatar.png', 6),
(9, 155, 'Taqwa-ul-Jannat Nuha', '2014-01-20', 'public/image/avatar.png', 7),
(10, 138, 'Nusrat Jahan', '2012-09-23', 'public/image/avatar.png', 8),
(11, 109, 'Fahmida Karim Awshi', '2012-07-02', 'public/image/avatar.png', 9),
(12, 137, 'Sumaida Hasan Riva', '2011-12-15', 'public/image/avatar.png', 10),
(13, 161, 'Mohammad Fayzul Bari', '2013-02-16', 'public/image/avatar.png', 11),
(14, 136, 'Ahammad Ibne Babul Labib', '2011-08-16', 'public/image/avatar.png', 14),
(15, 160, 'MD.Fairuz Fahmid Shaiwon', '2012-04-26', 'public/image/avatar.png', 15),
(16, 159, 'Nuray Marjan', NULL, 'public/image/avatar.png', 16),
(17, 97, 'Md Nubaid Shah', NULL, 'public/image/avatar.png', 17),
(18, 164, 'Umya Mumtaj', '2012-11-23', 'public/image/avatar.png', 18),
(19, 20, 'Adriya Farzin', '2015-04-15', 'public/image/avatar.png', 19),
(20, 162, 'MO.Samia Zaman', '2012-12-16', 'public/image/avatar.png', 20),
(21, 163, 'Mostack Ahmmed', '2012-11-13', 'public/image/avatar.png', 22),
(22, 3, 'Fahim Shariar Alif', '2015-05-15', 'public/image/avatar.png', 21),
(23, 158, 'MD.Marzan Bin Shohan', '2012-12-30', 'public/image/avatar.png', 23),
(24, 157, 'MD.Ikbal Hossen Emon', '2013-05-14', 'public/image/avatar.png', 25),
(25, 156, 'Nure Jannat Tanha', '2012-11-11', 'public/image/avatar.png', 26),
(26, 4, 'Mo.Israt Jahan', '2015-06-04', 'public/image/avatar.png', 24),
(27, 19, 'MD.Muner Tajuar Shahad', '2015-06-04', 'public/image/avatar.png', 27),
(28, 24, 'Md Abu Huraira Umayeer', '2014-01-05', 'public/image/avatar.png', 28),
(29, 18, 'Afrin Jahan Maria', '2015-12-04', 'public/image/avatar.png', 29),
(30, 9, 'Ahmmed Faizan Dowa', '2014-10-09', 'public/image/avatar.png', 30),
(31, 16, 'Ahanaf Abid', '2015-02-09', 'public/image/avatar.png', 31),
(32, 15, 'Md Tahamid Hossain Ayan', '2015-03-08', 'public/image/avatar.png', 34),
(33, 7, 'Ayat Hossain', '2015-03-20', 'public/image/avatar.png', 37),
(34, 14, 'Wajiha Mumtaj', '2015-04-30', 'public/image/avatar.png', 40),
(35, 12, 'MD.Jawad Bin Zonayed', '2014-10-07', 'public/image/avatar.png', 42),
(36, 5, 'Mutahana Aksa', '2015-05-23', 'public/image/avatar.png', 41),
(37, 25, 'Niladri Baruya Sujoy', '2015-01-05', 'public/image/avatar.png', 43),
(38, 26, 'Touhidul Alam', '2014-10-30', 'public/image/avatar.png', 44),
(39, 27, 'Birat Sutradhar Sayan', '2014-10-14', 'public/image/avatar.png', 46),
(40, 13, 'Kifayat Nudar Ali Ameerah', '2016-02-21', 'public/image/avatar.png', 45),
(41, 8, 'Mahadia Jahan Nuzhat', '2014-03-11', 'public/image/avatar.png', 47),
(42, 10, 'Jannatul Nayem Ramisa', NULL, 'public/image/avatar.png', 48),
(43, 6, 'Sidratul Montaha Saba', '2010-04-01', 'public/image/avatar.png', 49),
(44, 146, 'MD.Khalad Mahamud Ayan', '2010-12-09', 'public/image/avatar.png', 6),
(45, 145, 'Jannatul Safia Sujana', '2011-12-20', 'public/image/avatar.png', 50),
(46, 144, 'Mohammed Forhad Ruman Rono', '2009-12-30', 'public/image/avatar.png', 51),
(47, 143, 'Istiak Mahmud', '2011-01-14', 'public/image/avatar.png', 52),
(48, 115, 'Rusnan Muntaka Tasbe', '2011-12-20', 'public/image/avatar.png', 53),
(49, 141, 'Ashiqur Rahman Afif', '2010-11-22', 'public/image/avatar.png', 54),
(50, 128, 'Miskatul Jannat Faiza', '2010-09-04', 'public/image/avatar.png', 55),
(51, 130, 'Delower Hossain Rifat', '2010-04-23', 'public/image/avatar.png', 56),
(52, 116, 'Shekh MD.Hares Uddin', '2010-12-06', 'public/image/avatar.png', 57),
(53, 125, 'MD.Mejbah Ahamed Showdesh', '2010-12-30', 'public/image/avatar.png', 61),
(54, 124, 'Sidratul Muntaha Samia', '2012-07-12', 'public/image/avatar.png', 62),
(55, 131, 'Nishita Nizam Shikha', '2011-06-09', 'public/image/avatar.png', 63),
(56, 129, 'Alifa Binte Taher', '2011-09-20', 'public/image/avatar.png', 64),
(57, 127, 'Sridam Nath', '2011-11-24', 'public/image/avatar.png', 65),
(58, 142, 'Jannatul Maoya', '2011-10-05', 'public/image/avatar.png', 66),
(59, 2, 'Nur Mahmud Proshanto', '2011-08-03', 'public/image/avatar.png', 67),
(60, 126, 'Sadika Umayma Sara', '2011-12-12', 'public/image/avatar.png', 68),
(61, 123, 'MD.Mahinul Alam Rafiu', '2010-09-16', 'public/image/avatar.png', 69),
(62, 122, 'Miskatul Muntaha Aroshi', '2011-08-17', 'public/image/avatar.png', 70),
(63, 121, 'Mohammed Faiaz Hossain', '2011-01-16', 'public/image/avatar.png', 71),
(64, 120, 'MD.Himel', '2013-01-01', 'public/image/avatar.png', 72),
(65, 119, 'Sidratul Montaha Ishpa', '2011-10-04', 'public/image/avatar.png', 73),
(66, 118, 'Sanzana Shamreen Shanju', '2011-06-10', 'public/image/avatar.png', 74),
(67, 147, 'Samaiya Akter sujana', '2011-08-05', 'public/image/avatar.png', 75),
(68, 148, 'Jannatul Ferdows Tahia', '2012-03-31', 'public/image/avatar.png', 76),
(69, 139, 'Rafia Sultana Nijhum', '2013-02-14', 'public/image/avatar.png', 77),
(70, 140, 'Lamiya Jinna Ena', '2011-11-16', 'public/image/avatar.png', 78),
(71, 154, 'Imam Hasan', '2011-08-07', 'public/image/avatar.png', 79),
(72, 113, 'MD.Abdullah', '2011-03-04', 'public/image/avatar.png', 80),
(73, 43, 'Ashraful Rahman', '2013-04-05', 'public/image/avatar.png', 54),
(74, 58, 'Mohammad Abrar Sayem', '2013-03-25', 'public/image/avatar.png', 81),
(75, 57, 'MD.Shafiur Rahman Shafi', '2014-05-18', 'public/image/avatar.png', 82),
(76, 102, 'Nusaib Shah', '2014-12-17', 'public/image/avatar.png', 17),
(77, 35, 'Ateef Faruq', '2014-05-25', 'public/image/avatar.png', 83),
(78, 54, 'MD.Omar Faruq', '2014-07-06', 'public/image/avatar.png', 84),
(79, 34, 'Nandon Dhar Nirob', '2013-08-26', 'public/image/avatar.png', 85),
(80, 61, 'MD.Shah Jabir Rafsan', '2013-09-09', 'public/image/avatar.png', 74),
(84, 36, 'Tasnim Jahan Mim', '2014-08-05', 'public/image/avatar.png', 86),
(85, 55, 'MD.Sakib Al-Hasan', '2014-11-28', 'public/image/avatar.png', 89),
(86, 63, 'Ajijul Hakim Dihan', '2013-02-13', 'public/image/avatar.png', 90),
(87, 66, 'Narmin Muzumder Nahiya', '2014-08-29', 'public/image/avatar.png', 91),
(88, 62, 'Joynob Binte Mahabub Tabassum', '2013-08-30', 'public/image/avatar.png', 92),
(89, 64, 'Umme Farha Alam', '2015-05-16', 'public/image/avatar.png', 93),
(90, 46, 'Mubashwira Jannat', '2015-11-27', 'public/image/avatar.png', 94),
(91, 38, 'Ayesha Siddika Humaira', '2015-09-18', 'public/image/avatar.png', 95),
(92, 45, 'MD.Naimul Islam Najif', '2014-12-28', 'public/image/avatar.png', 96),
(93, 37, 'Fariha Ibnat Tanisha', '2014-09-01', 'public/image/avatar.png', 97),
(94, 52, 'Shakibul Islam', '2014-12-01', 'public/image/avatar.png', 98),
(95, 47, 'Shabikun Nahar Samia', '2014-11-22', 'public/image/avatar.png', 99),
(96, 33, 'Sajida Shek Elham', '2014-02-05', 'public/image/avatar.png', 100),
(97, 53, 'MD.Hasan Ali Arafat', '2015-01-19', 'public/image/avatar.png', 101),
(98, 44, 'Farhana Jannat Arbi', '2014-11-01', 'public/image/avatar.png', 70),
(99, 59, 'MD.Sohanur Rahman Sohan', '2014-04-29', 'public/image/avatar.png', 102),
(100, 32, 'Ariz-ar-Rahman', '2014-05-28', 'public/image/avatar.png', 103),
(101, 65, 'Nusrat Akter', '2013-09-09', 'public/image/avatar.png', 104),
(102, 60, 'MD.Mahin Hossain Zohan', '2014-01-15', 'public/image/avatar.png', 105),
(103, 48, 'Umme Rumaisa', '2014-10-09', 'public/image/avatar.png', 106),
(104, 56, 'Nafisa Lokman Sujaira', '2015-06-15', 'public/image/avatar.png', 107),
(105, 49, 'Wajiha Islam', '2015-12-10', 'public/image/avatar.png', 108),
(106, 50, 'Mohammad Ajharul Islam Bhuiyan', '2013-10-11', 'public/image/avatar.png', 109),
(107, 39, 'Fairooz Sadaf Mahi', '2014-06-24', 'public/image/avatar.png', 110),
(108, 40, 'Achiya Binte afsar Hamida', '2014-09-27', 'public/image/avatar.png', 111),
(109, 41, 'Mahedi Hasan Miraz', '2014-05-26', 'public/image/avatar.png', 112),
(110, 42, 'MD.Imtiaz', '2014-03-26', 'public/image/avatar.png', 113),
(111, 51, 'Tajmin Islam Trima', '2014-09-01', 'public/image/avatar.png', 114),
(112, 28, 'Waziha Noor', '2015-10-25', 'public/image/avatar.png', 115),
(113, 29, 'Majidul Bari', '2015-03-29', 'public/image/avatar.png', 116),
(114, 30, 'Jannatul Ashfia', '2015-05-04', 'public/image/avatar.png', 117),
(115, 31, 'Azowad Bin Belal', '2014-10-30', 'public/image/avatar.png', 118),
(116, 17, 'Toma Dey', '2016-08-03', 'public/image/avatar.png', 119),
(117, 21, 'Sayera Binte Rashid', '2015-06-04', 'public/image/avatar.png', 120),
(118, 22, 'MD.Abdul Hasan', '2015-01-29', 'public/image/avatar.png', 121),
(119, 23, 'Sritoma Bachhar Misti', '2015-02-16', 'public/image/avatar.png', 122),
(120, 95, 'MD.Daniyal Tawsif', '2014-12-04', 'public/image/avatar.png', 123),
(121, 96, 'Afsan Uddin', '2014-12-22', 'public/image/avatar.png', 124),
(122, 11, 'Afsana Mim Ariba', '2015-04-24', 'public/image/avatar.png', 54),
(123, 78, 'Aushmi Devi', '2013-03-24', 'public/image/avatar.png', 125),
(124, 106, 'Progga Barua', '2014-04-09', 'public/image/avatar.png', 126),
(125, 75, 'Nurjahan Akter Ayesha', '2013-11-27', 'public/image/avatar.png', 127),
(126, 84, 'Azraf Elahi', '2014-01-05', 'public/image/avatar.png', 128),
(127, 306, 'MD.Abdul Kaiyum Ahanaf', '2012-03-08', 'public/image/avatar.png', 129),
(128, 71, 'Shommojit Chakraboty', NULL, 'public/image/avatar.png', 130),
(129, 72, 'MD.Abdullah Al Nadim', '2013-02-17', 'public/image/avatar.png', 131),
(130, 68, 'Sobayta Ahmmad Sayba', '2012-07-22', 'public/image/avatar.png', 132),
(131, 88, 'Sabiha Binte Saif', '2012-10-14', 'public/image/avatar.png', 133),
(132, 82, 'Tazrin Humaira', '2012-12-26', 'public/image/avatar.png', 134),
(133, 73, 'MD.Abdulla Al Mahad', '2012-07-05', 'public/image/avatar.png', 135),
(134, 313, 'Mifta Jannat Mithila', '2012-11-01', 'public/image/avatar.png', 136),
(135, 70, 'Promit Biswas', '2014-09-11', 'public/image/avatar.png', 137),
(136, 89, 'Humaira Akter Radiyah', '2013-05-24', 'public/image/avatar.png', 138),
(137, 69, 'MD.Mainuddin', '2013-12-11', 'public/image/avatar.png', 139),
(138, 103, 'MD.Mehedi Hasan Abir', '2015-05-15', 'public/image/avatar.png', 140),
(139, 81, 'Bibi Morium Hridi', '2013-10-19', 'public/image/avatar.png', 56),
(140, 79, 'Jannatul Mawa', '2013-06-16', 'public/image/avatar.png', 142),
(141, 74, 'Rohan Hossain Babu', '2013-04-19', 'public/image/avatar.png', 143),
(142, 67, 'MD.Ifthikhar Uddin', '2014-12-16', 'public/image/avatar.png', 144),
(143, 87, 'MD.Ishan Howlader', '2013-07-20', 'public/image/avatar.png', 145),
(144, 86, 'Nehan Uddin', '2013-04-23', 'public/image/avatar.png', 146),
(145, 93, 'Israt Jahan Nadia', '2012-12-08', 'public/image/avatar.png', 147),
(146, 83, 'MD.Robiul Sunny', '2014-01-13', 'public/image/avatar.png', 148),
(147, 94, 'Zabir Ahmed Bin Hashem', '2013-08-21', 'public/image/avatar.png', 149),
(148, 85, 'Mohammed Saif Newaz', '2012-01-01', 'public/image/avatar.png', 150),
(149, 98, 'Mohammed Ahnaful Hoque', '2014-11-02', 'public/image/avatar.png', 151),
(150, 90, 'MD.Shajid Sarkar Ongkur', '2013-08-14', 'public/image/avatar.png', 152),
(151, 80, 'Kazi MD.Hemayetun Nobi', '2013-06-01', 'public/image/avatar.png', 153),
(152, 104, 'Walid Abedin', '2013-06-21', 'public/image/avatar.png', 80),
(153, 91, 'Yana Nusha', '2013-03-02', 'public/image/avatar.png', 155),
(154, 92, 'Sanjida Alam', NULL, 'public/image/avatar.png', 156),
(155, 77, 'Samrin Binte Shakir', '2014-02-10', 'public/image/avatar.png', 157),
(156, 76, 'Montasir Mohammad Apan', '2014-03-09', 'public/image/avatar.png', 158),
(157, 105, 'Shaidul Islam Shojib', '2011-08-22', 'public/image/avatar.png', 159),
(158, 101, 'Raisa Rahman Mahi', '2014-04-03', 'public/image/avatar.png', 160),
(159, 100, 'Saidul Alam', '2015-03-02', 'public/image/avatar.png', 161),
(160, 99, 'Jannatul Nayeem Sabiha', '2014-07-25', 'public/image/avatar.png', 66),
(161, 419, 'MRS.Tahira Islam', '2012-12-10', 'public/image/avatar.png', 162),
(162, 112, 'MD.Siyam Bin Mahabub Efaz', '2012-08-10', 'public/image/avatar.png', 163),
(163, 110, 'MD.Tahmid Rahman Chowdhury', '2012-05-12', 'public/image/avatar.png', 164),
(164, 111, 'MD.Montasir Alam Sanbir', '2012-01-21', 'public/image/avatar.png', 165),
(165, 108, 'Abdur Rahman Parez', '2012-09-14', 'public/image/avatar.png', 166),
(166, 107, 'Wasifa Maliyat Raida', '2012-03-29', 'public/image/avatar.png', 167),
(167, 114, 'MD.Shahadat Hossain Rohan', '2009-07-12', 'public/image/avatar.png', 168),
(168, 149, 'Sahat All Rashid', NULL, 'public/image/avatar.png', 169),
(169, 150, 'Monyat Rahman Chowdhury', '2009-06-07', 'public/image/avatar.png', 164),
(170, 117, 'Sayma Binte Babul Sara', NULL, 'public/image/avatar.png', 14),
(171, 151, 'Rifatunnisa Marwa', '2010-05-17', 'public/image/avatar.png', 170),
(172, 152, 'MD.Shahadat Hossain', '2009-04-10', 'public/image/avatar.png', 89),
(173, 153, 'Khairul Abrar Chowdhury', '2010-07-10', 'public/image/avatar.png', 171);

-- --------------------------------------------------------

--
-- Table structure for table `student_attendance`
--

CREATE TABLE `student_attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `in_time` datetime NOT NULL,
  `out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_attendance`
--

INSERT INTO `student_attendance` (`id`, `date`, `student_id`, `in_time`, `out_time`) VALUES
(5, '2019-01-08', 59, '2019-01-08 22:03:44', NULL),
(6, '2019-01-08', 22, '2019-01-08 22:08:47', NULL),
(7, '2019-01-08', 26, '2019-01-08 22:08:52', NULL),
(8, '2019-01-08', 43, '2019-01-08 22:27:54', NULL),
(9, '2019-01-13', 155, '2019-01-13 07:50:33', NULL),
(10, '2019-01-13', 156, '2019-01-13 07:55:35', NULL),
(11, '2019-01-13', 118, '2019-01-13 07:59:32', NULL),
(12, '2019-01-13', 136, '2019-01-13 08:00:08', NULL),
(13, '2019-01-13', 119, '2019-01-13 08:00:24', NULL),
(14, '2019-01-13', 62, '2019-01-13 08:00:50', NULL),
(15, '2019-01-13', 98, '2019-01-13 08:01:00', NULL),
(16, '2019-01-13', 99, '2019-01-13 08:03:23', NULL),
(17, '2019-01-13', 60, '2019-01-13 08:38:29', NULL),
(18, '2019-01-13', 26, '2019-01-13 08:39:23', NULL),
(19, '2019-01-13', 39, '2019-01-13 08:39:34', NULL),
(20, '2019-01-13', 59, '2019-01-13 08:39:56', NULL),
(21, '2019-01-13', 144, '2019-01-13 08:40:27', NULL),
(22, '2019-01-13', 69, '2019-01-13 08:40:51', NULL),
(23, '2019-01-13', 21, '2019-01-13 08:41:03', NULL),
(24, '2019-01-13', 75, '2019-01-13 08:41:10', NULL),
(25, '2019-01-13', 15, '2019-01-13 08:43:57', NULL),
(26, '2019-01-13', 9, '2019-01-13 08:44:21', NULL),
(27, '2019-01-13', 94, '2019-01-13 08:45:42', NULL),
(28, '2019-01-13', 7, '2019-01-13 08:45:45', NULL),
(29, '2019-01-13', 38, '2019-01-13 08:47:34', NULL),
(30, '2019-01-13', 110, '2019-01-13 08:50:46', NULL),
(31, '2019-01-14', 96, '2019-01-14 07:44:12', '2019-01-14 10:33:21'),
(32, '2019-01-14', 157, '2019-01-14 07:45:44', NULL),
(33, '2019-01-14', 85, '2019-01-14 09:55:25', NULL),
(34, '2019-01-14', 172, '2019-01-14 09:57:48', '2019-01-14 13:06:03'),
(35, '2019-01-14', 110, '2019-01-14 09:58:00', NULL),
(36, '2019-01-14', 17, '2019-01-14 10:10:23', NULL),
(37, '2019-01-14', 113, '2019-01-14 10:10:26', NULL),
(38, '2019-01-14', 34, '2019-01-14 10:13:30', NULL),
(39, '2019-01-14', 39, '2019-01-14 10:14:49', NULL),
(40, '2019-01-14', 105, '2019-01-14 10:16:58', NULL),
(41, '2019-01-14', 38, '2019-01-14 10:17:22', NULL),
(43, '2019-01-14', 119, '2019-01-14 10:24:13', NULL),
(44, '2019-01-14', 29, '2019-01-14 10:24:44', NULL),
(45, '2019-01-14', 112, '2019-01-14 10:24:50', NULL),
(46, '2019-01-14', 26, '2019-01-14 10:24:53', NULL),
(47, '2019-01-14', 22, '2019-01-14 10:25:24', NULL),
(48, '2019-01-14', 118, '2019-01-14 10:25:28', NULL),
(49, '2019-01-14', 93, '2019-01-14 10:31:07', NULL),
(50, '2019-01-14', 78, '2019-01-14 10:31:13', NULL),
(51, '2019-01-14', 88, '2019-01-14 10:31:25', NULL),
(52, '2019-01-14', 80, '2019-01-14 10:31:39', NULL),
(53, '2019-01-14', 77, '2019-01-14 10:31:44', NULL),
(54, '2019-01-14', 99, '2019-01-14 10:31:53', NULL),
(55, '2019-01-14', 75, '2019-01-14 10:31:57', NULL),
(56, '2019-01-14', 100, '2019-01-14 10:32:01', NULL),
(57, '2019-01-14', 89, '2019-01-14 10:32:11', NULL),
(58, '2019-01-14', 160, '2019-01-14 10:32:18', NULL),
(59, '2019-01-14', 86, '2019-01-14 10:32:23', NULL),
(60, '2019-01-14', 94, '2019-01-14 10:32:26', NULL),
(61, '2019-01-14', 97, '2019-01-14 10:32:38', NULL),
(62, '2019-01-14', 87, '2019-01-14 10:32:52', NULL),
(63, '2019-01-14', 159, '2019-01-14 10:33:03', NULL),
(64, '2019-01-14', 76, '2019-01-14 10:33:12', NULL),
(65, '2019-01-14', 91, '2019-01-14 10:33:28', NULL),
(66, '2019-01-14', 90, '2019-01-14 10:33:33', NULL),
(67, '2019-01-14', 84, '2019-01-14 10:33:37', NULL),
(68, '2019-01-14', 33, '2019-01-14 10:36:35', NULL),
(69, '2019-01-14', 42, '2019-01-14 10:36:45', NULL),
(70, '2019-01-14', 111, '2019-01-14 10:36:54', NULL),
(71, '2019-01-14', 109, '2019-01-14 10:38:43', NULL),
(72, '2019-01-14', 106, '2019-01-14 10:45:52', NULL),
(73, '2019-01-14', 107, '2019-01-14 10:48:45', NULL),
(74, '2019-01-14', 104, '2019-01-14 10:49:00', NULL),
(75, '2019-01-14', 41, '2019-01-14 10:58:59', NULL),
(76, '2019-01-14', 35, '2019-01-14 11:04:16', NULL),
(77, '2019-01-14', 36, '2019-01-14 11:04:17', NULL),
(79, '2019-01-14', 59, '2019-01-14 19:23:30', '2019-01-14 19:42:20'),
(80, '2019-01-14', 122, '2019-01-14 19:23:34', '2019-01-14 19:42:29'),
(81, '2019-01-14', 31, '2019-01-14 19:23:40', '2019-01-14 19:42:25'),
(82, '2019-01-14', 32, '2019-01-14 19:23:44', '2019-01-14 19:42:15'),
(83, '2019-01-14', 37, '2019-01-14 19:23:49', '2019-01-14 19:42:14'),
(84, '2019-01-15', 155, '2019-01-15 07:51:51', NULL),
(85, '2019-01-15', 14, '2019-01-15 07:52:16', NULL),
(86, '2019-01-15', 170, '2019-01-15 07:52:22', NULL),
(87, '2019-01-15', 146, '2019-01-15 07:52:37', NULL),
(88, '2019-01-15', 142, '2019-01-15 07:57:18', NULL),
(89, '2019-01-15', 115, '2019-01-15 07:57:52', '2019-01-15 08:01:27'),
(90, '2019-01-15', 99, '2019-01-15 07:58:05', NULL),
(91, '2019-01-15', 67, '2019-01-15 07:59:35', NULL),
(92, '2019-01-15', 147, '2019-01-15 08:00:04', NULL),
(93, '2019-01-15', 55, '2019-01-15 08:00:23', NULL),
(94, '2019-01-15', 152, '2019-01-15 08:00:28', '2019-01-15 08:03:24'),
(95, '2019-01-15', 53, '2019-01-15 08:00:33', NULL),
(96, '2019-01-15', 125, '2019-01-15 08:01:40', NULL),
(97, '2019-01-15', 6, '2019-01-15 08:01:44', NULL),
(98, '2019-01-15', 171, '2019-01-15 08:01:54', NULL),
(99, '2019-01-15', 154, '2019-01-15 08:02:02', NULL),
(100, '2019-01-15', 157, '2019-01-15 08:02:08', NULL),
(101, '2019-01-15', 173, '2019-01-15 08:02:42', NULL),
(102, '2019-01-15', 156, '2019-01-15 08:02:56', NULL),
(103, '2019-01-15', 57, '2019-01-15 08:03:00', '2019-01-15 08:28:28'),
(104, '2019-01-15', 62, '2019-01-15 08:03:20', NULL),
(105, '2019-01-15', 98, '2019-01-15 08:03:34', NULL),
(106, '2019-01-15', 116, '2019-01-15 08:06:39', NULL),
(107, '2019-01-15', 59, '2019-01-15 08:07:34', NULL),
(108, '2019-01-15', 72, '2019-01-15 08:07:49', NULL),
(109, '2019-01-15', 123, '2019-01-15 08:08:01', NULL),
(110, '2019-01-15', 110, '2019-01-15 08:08:07', '2019-01-15 08:40:02'),
(111, '2019-01-15', 126, '2019-01-15 08:08:18', NULL),
(112, '2019-01-15', 46, '2019-01-15 08:08:34', NULL),
(113, '2019-01-15', 118, '2019-01-15 08:09:56', NULL),
(114, '2019-01-15', 168, '2019-01-15 08:10:17', NULL),
(115, '2019-01-15', 141, '2019-01-15 08:11:18', NULL),
(116, '2019-01-15', 124, '2019-01-15 08:12:05', '2019-01-15 08:28:57'),
(117, '2019-01-15', 51, '2019-01-15 08:12:31', NULL),
(118, '2019-01-15', 139, '2019-01-15 08:12:44', NULL),
(119, '2019-01-15', 137, '2019-01-15 08:13:20', '2019-01-15 08:27:27'),
(120, '2019-01-15', 39, '2019-01-15 08:14:17', NULL),
(121, '2019-01-15', 78, '2019-01-15 08:15:14', NULL),
(122, '2019-01-15', 25, '2019-01-15 08:15:19', NULL),
(123, '2019-01-15', 86, '2019-01-15 08:15:39', NULL),
(124, '2019-01-15', 163, '2019-01-15 08:16:40', NULL),
(125, '2019-01-15', 169, '2019-01-15 08:16:49', NULL),
(126, '2019-01-15', 138, '2019-01-15 08:17:11', NULL),
(127, '2019-01-15', 129, '2019-01-15 08:17:25', NULL),
(128, '2019-01-15', 145, '2019-01-15 08:18:26', NULL),
(129, '2019-01-15', 63, '2019-01-15 08:19:16', NULL),
(130, '2019-01-15', 132, '2019-01-15 08:19:19', NULL),
(131, '2019-01-15', 93, '2019-01-15 08:20:29', NULL),
(132, '2019-01-15', 165, '2019-01-15 08:20:36', NULL),
(133, '2019-01-15', 50, '2019-01-15 08:20:39', NULL),
(134, '2019-01-15', 159, '2019-01-15 08:20:44', NULL),
(135, '2019-01-15', 87, '2019-01-15 08:20:49', NULL),
(136, '2019-01-15', 76, '2019-01-15 08:20:59', NULL),
(137, '2019-01-15', 17, '2019-01-15 08:21:01', NULL),
(138, '2019-01-15', 100, '2019-01-15 08:21:21', NULL),
(139, '2019-01-15', 150, '2019-01-15 08:21:43', NULL),
(140, '2019-01-15', 112, '2019-01-15 08:22:29', NULL),
(141, '2019-01-15', 84, '2019-01-15 08:22:32', NULL),
(142, '2019-01-15', 7, '2019-01-15 08:26:50', NULL),
(143, '2019-01-15', 94, '2019-01-15 08:27:06', NULL),
(144, '2019-01-15', 8, '2019-01-15 08:27:10', NULL),
(145, '2019-01-15', 143, '2019-01-15 08:27:21', NULL),
(146, '2019-01-15', 44, '2019-01-15 08:27:57', NULL),
(147, '2019-01-15', 172, '2019-01-15 08:28:07', NULL),
(148, '2019-01-15', 58, '2019-01-15 08:28:18', NULL),
(149, '2019-01-15', 66, '2019-01-15 08:28:21', NULL),
(150, '2019-01-15', 9, '2019-01-15 08:28:36', NULL),
(151, '2019-01-15', 140, '2019-01-15 08:28:41', NULL),
(152, '2019-01-15', 164, '2019-01-15 08:28:46', NULL),
(153, '2019-01-15', 68, '2019-01-15 08:28:49', NULL),
(154, '2019-01-15', 120, '2019-01-15 08:29:17', NULL),
(155, '2019-01-15', 113, '2019-01-15 08:30:40', NULL),
(156, '2019-01-15', 60, '2019-01-15 08:31:08', NULL),
(157, '2019-01-15', 148, '2019-01-15 08:31:58', NULL),
(158, '2019-01-15', 75, '2019-01-15 08:34:44', NULL),
(159, '2019-01-15', 162, '2019-01-15 08:34:55', NULL),
(160, '2019-01-15', 13, '2019-01-15 08:35:00', NULL),
(161, '2019-01-15', 160, '2019-01-15 08:35:27', NULL),
(162, '2019-01-15', 45, '2019-01-15 08:36:14', NULL),
(163, '2019-01-15', 70, '2019-01-15 08:36:29', NULL),
(164, '2019-01-15', 90, '2019-01-15 08:36:36', NULL),
(165, '2019-01-15', 153, '2019-01-15 08:36:43', NULL),
(166, '2019-01-15', 97, '2019-01-15 08:37:04', NULL),
(167, '2019-01-15', 91, '2019-01-15 08:37:09', NULL),
(168, '2019-01-15', 22, '2019-01-15 08:37:23', NULL),
(169, '2019-01-15', 101, '2019-01-15 08:38:48', NULL),
(170, '2019-01-15', 48, '2019-01-15 08:39:10', NULL),
(171, '2019-01-15', 144, '2019-01-15 08:40:36', NULL),
(172, '2019-01-15', 133, '2019-01-15 08:40:42', NULL),
(173, '2019-01-15', 54, '2019-01-15 08:40:46', NULL),
(174, '2019-01-15', 69, '2019-01-15 08:40:51', NULL),
(175, '2019-01-15', 88, '2019-01-15 08:41:46', NULL),
(176, '2019-01-15', 38, '2019-01-15 08:44:05', NULL),
(177, '2019-01-15', 77, '2019-01-15 09:23:18', NULL),
(178, '2019-01-15', 105, '2019-01-15 10:18:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_class_section`
--

CREATE TABLE `student_class_section` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `roll` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_class_section`
--

INSERT INTO `student_class_section` (`id`, `student_id`, `class_id`, `section_id`, `roll`) VALUES
(1, 1, 1, 1, '1'),
(2, 1, 1, 1, '914464'),
(3, 2, 1, 1, '12'),
(4, 3, 1, 1, '2'),
(5, 4, 1, 1, '1'),
(6, 5, 4, 1, '1'),
(7, 6, 4, 1, '2'),
(8, 7, 4, 1, '3'),
(9, 8, 4, 1, '4'),
(10, 9, 4, 1, '5'),
(11, 10, 4, 1, '6'),
(12, 11, 4, 1, '7'),
(13, 12, 4, 1, '8'),
(14, 13, 4, 1, '9'),
(15, 14, 4, 1, '10'),
(16, 15, 4, 1, '11'),
(17, 16, 4, 1, '12'),
(18, 17, 3, 1, '01'),
(19, 18, 4, 1, '13'),
(20, 19, 3, 1, '02'),
(21, 20, 4, 1, '14'),
(22, 21, 4, 1, '15'),
(23, 22, 3, 1, '03'),
(24, 23, 4, 1, '16'),
(25, 24, 4, 1, '17'),
(26, 25, 4, 1, '18'),
(27, 26, 3, 1, '4'),
(28, 27, 3, 1, '5'),
(29, 28, 3, 2, '01'),
(30, 29, 3, 1, '6'),
(31, 30, 3, 2, '02'),
(32, 31, 3, 1, '7'),
(33, 32, 3, 2, '03'),
(34, 33, 3, 2, '04'),
(35, 34, 3, 1, '8'),
(36, 35, 3, 2, '10'),
(37, 36, 3, 2, '05'),
(38, 37, 3, 1, '10'),
(39, 38, 3, 1, '11'),
(40, 39, 3, 1, '12'),
(41, 40, 3, 2, '06'),
(42, 41, 3, 2, '7'),
(43, 42, 3, 2, '8'),
(44, 43, 6, 1, '1'),
(45, 44, 6, 1, '2'),
(46, 45, 6, 1, '3'),
(47, 46, 6, 1, '4'),
(48, 47, 6, 1, '5'),
(49, 48, 6, 1, '6'),
(50, 49, 6, 1, '7'),
(51, 50, 6, 1, '8'),
(52, 51, 6, 1, '9'),
(53, 52, 6, 1, '10'),
(54, 53, 6, 1, '11'),
(55, 54, 6, 1, '12'),
(56, 55, 5, 1, '1'),
(57, 56, 5, 1, '2'),
(58, 57, 5, 1, '3'),
(59, 58, 5, 1, '4'),
(60, 59, 5, 1, '5'),
(61, 60, 5, 1, '6'),
(62, 61, 5, 1, '7'),
(63, 62, 5, 1, '8'),
(64, 63, 5, 1, '9'),
(65, 64, 5, 1, '10'),
(66, 65, 5, 1, '11'),
(67, 66, 5, 1, '12'),
(68, 67, 5, 1, '13'),
(69, 68, 5, 1, '14'),
(70, 69, 5, 1, '15'),
(71, 70, 5, 1, '16'),
(72, 71, 5, 1, '17'),
(73, 72, 5, 1, '18'),
(74, 73, 2, 1, '1'),
(75, 74, 2, 1, '2'),
(76, 75, 2, 1, '3'),
(77, 76, 2, 1, '4'),
(78, 77, 2, 1, '5'),
(79, 78, 2, 1, '6'),
(80, 79, 2, 1, '7'),
(81, 80, 2, 1, '8'),
(82, 81, 2, 1, '9'),
(83, 82, 2, 1, '9'),
(84, 83, 2, 1, '9'),
(85, 84, 2, 1, '9'),
(86, 85, 2, 1, '10'),
(87, 86, 2, 1, '11'),
(88, 87, 2, 1, '12'),
(89, 88, 2, 1, '13'),
(90, 89, 2, 1, '14'),
(91, 90, 2, 1, '15'),
(92, 91, 2, 1, '16'),
(93, 92, 2, 1, '17'),
(94, 93, 2, 1, '18'),
(95, 94, 2, 1, '19'),
(96, 95, 2, 1, '20'),
(97, 96, 2, 1, '21'),
(98, 97, 2, 1, '22'),
(99, 98, 2, 1, '23'),
(100, 99, 2, 1, '24'),
(101, 100, 2, 1, '25'),
(102, 101, 2, 1, '26'),
(103, 102, 2, 2, '1'),
(104, 103, 2, 2, '2'),
(105, 104, 2, 2, '3'),
(106, 105, 2, 2, '4'),
(107, 106, 2, 2, '5'),
(108, 107, 2, 2, '6'),
(109, 108, 2, 2, '7'),
(110, 109, 2, 2, '8'),
(111, 110, 2, 1, '27'),
(112, 111, 2, 2, '9'),
(113, 112, 3, 1, '13'),
(114, 113, 3, 1, '14'),
(115, 114, 3, 1, '15'),
(116, 115, 3, 1, '16'),
(117, 116, 3, 1, '17'),
(118, 117, 3, 1, '18'),
(119, 118, 3, 1, '19'),
(120, 119, 3, 1, '20'),
(121, 120, 3, 1, '21'),
(122, 121, 3, 1, '22'),
(123, 122, 3, 1, '23'),
(124, 123, 1, 1, '2'),
(125, 124, 1, 1, '3'),
(126, 125, 1, 1, '4'),
(127, 126, 1, 1, '5'),
(128, 127, 1, 1, '6'),
(129, 128, 1, 1, '7'),
(130, 129, 1, 1, '8'),
(131, 130, 1, 1, '9'),
(132, 131, 1, 1, '10'),
(133, 132, 1, 1, '11'),
(134, 133, 1, 1, '12'),
(135, 134, 1, 1, '13'),
(136, 135, 1, 1, '14'),
(137, 136, 1, 1, '15'),
(138, 137, 1, 1, '16'),
(139, 138, 1, 1, '17'),
(140, 139, 1, 1, '18'),
(141, 140, 1, 1, '19'),
(142, 141, 1, 1, '20'),
(143, 142, 1, 1, '21'),
(144, 143, 1, 1, '22'),
(145, 144, 1, 1, '23'),
(146, 145, 1, 1, '24'),
(147, 146, 1, 1, '25'),
(148, 147, 1, 1, '26'),
(149, 148, 1, 1, '27'),
(150, 149, 3, 2, '9'),
(151, 150, 1, 1, '28'),
(152, 151, 1, 1, '29'),
(153, 152, 1, 1, '30'),
(154, 153, 1, 1, '31'),
(155, 154, 1, 1, '32'),
(156, 155, 1, 1, '33'),
(157, 156, 1, 1, '34'),
(158, 157, 1, 1, '35'),
(159, 158, 2, 1, '28'),
(160, 159, 2, 1, '29'),
(161, 160, 2, 1, '30'),
(162, 161, 4, 1, '19'),
(163, 162, 4, 1, '20'),
(164, 163, 4, 1, '21'),
(165, 164, 4, 1, '22'),
(166, 165, 4, 1, '23'),
(167, 166, 4, 1, '24'),
(168, 167, 6, 1, '13'),
(169, 168, 7, 1, '3'),
(170, 169, 7, 1, '4'),
(171, 170, 7, 1, '5'),
(172, 171, 7, 1, '6'),
(173, 172, 7, 1, '7'),
(174, 173, 7, 1, '8');

-- --------------------------------------------------------

--
-- Table structure for table `student_van`
--

CREATE TABLE `student_van` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `van_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_van`
--

INSERT INTO `student_van` (`id`, `student_id`, `van_id`) VALUES
(1, 1, NULL),
(2, 1, NULL),
(3, 2, NULL),
(4, 3, NULL),
(5, 4, 1),
(6, 5, NULL),
(7, 6, NULL),
(8, 7, NULL),
(9, 8, NULL),
(10, 9, NULL),
(11, 10, NULL),
(12, 11, NULL),
(13, 12, NULL),
(14, 13, NULL),
(15, 14, NULL),
(16, 15, NULL),
(17, 16, NULL),
(18, 17, NULL),
(19, 18, NULL),
(20, 19, NULL),
(21, 20, NULL),
(22, 21, NULL),
(23, 22, NULL),
(24, 23, NULL),
(25, 24, NULL),
(26, 25, NULL),
(27, 26, NULL),
(28, 27, NULL),
(29, 28, NULL),
(30, 29, NULL),
(31, 30, NULL),
(32, 31, NULL),
(33, 32, NULL),
(34, 33, NULL),
(35, 34, NULL),
(36, 35, NULL),
(37, 36, NULL),
(38, 37, NULL),
(39, 38, NULL),
(40, 39, NULL),
(41, 40, NULL),
(42, 41, NULL),
(43, 42, NULL),
(44, 43, NULL),
(45, 44, NULL),
(46, 45, NULL),
(47, 46, NULL),
(48, 47, NULL),
(49, 48, NULL),
(50, 49, NULL),
(51, 50, NULL),
(52, 51, NULL),
(53, 52, NULL),
(54, 53, NULL),
(55, 54, NULL),
(56, 55, NULL),
(57, 56, NULL),
(58, 57, NULL),
(59, 58, NULL),
(60, 59, NULL),
(61, 60, NULL),
(62, 61, NULL),
(63, 62, NULL),
(64, 63, NULL),
(65, 64, NULL),
(66, 65, NULL),
(67, 66, NULL),
(68, 67, NULL),
(69, 68, NULL),
(70, 69, NULL),
(71, 70, NULL),
(72, 71, NULL),
(73, 72, NULL),
(74, 73, NULL),
(75, 74, NULL),
(76, 75, NULL),
(77, 76, NULL),
(78, 77, NULL),
(79, 78, NULL),
(80, 79, NULL),
(81, 80, NULL),
(82, 81, NULL),
(83, 82, NULL),
(84, 83, NULL),
(85, 84, NULL),
(86, 85, NULL),
(87, 86, NULL),
(88, 87, NULL),
(89, 88, NULL),
(90, 89, NULL),
(91, 90, NULL),
(92, 91, NULL),
(93, 92, NULL),
(94, 93, NULL),
(95, 94, NULL),
(96, 95, NULL),
(97, 96, NULL),
(98, 97, NULL),
(99, 98, NULL),
(100, 99, NULL),
(101, 100, NULL),
(102, 101, NULL),
(103, 102, NULL),
(104, 103, NULL),
(105, 104, NULL),
(106, 105, NULL),
(107, 106, NULL),
(108, 107, NULL),
(109, 108, NULL),
(110, 109, NULL),
(111, 110, NULL),
(112, 111, NULL),
(113, 112, NULL),
(114, 113, NULL),
(115, 114, NULL),
(116, 115, NULL),
(117, 116, NULL),
(118, 117, NULL),
(119, 118, NULL),
(120, 119, NULL),
(121, 120, NULL),
(122, 121, NULL),
(123, 122, NULL),
(124, 123, NULL),
(125, 124, NULL),
(126, 125, NULL),
(127, 126, NULL),
(128, 127, NULL),
(129, 128, NULL),
(130, 129, NULL),
(131, 130, NULL),
(132, 131, NULL),
(133, 132, NULL),
(134, 133, NULL),
(135, 134, NULL),
(136, 135, NULL),
(137, 136, NULL),
(138, 137, NULL),
(139, 138, NULL),
(140, 139, NULL),
(141, 140, NULL),
(142, 141, NULL),
(143, 142, NULL),
(144, 143, NULL),
(145, 144, NULL),
(146, 145, NULL),
(147, 146, NULL),
(148, 147, NULL),
(149, 148, NULL),
(150, 149, NULL),
(151, 150, NULL),
(152, 151, NULL),
(153, 152, NULL),
(154, 153, NULL),
(155, 154, NULL),
(156, 155, NULL),
(157, 156, NULL),
(158, 157, NULL),
(159, 158, NULL),
(160, 159, NULL),
(161, 160, NULL),
(162, 161, NULL),
(163, 162, NULL),
(164, 163, NULL),
(165, 164, NULL),
(166, 165, NULL),
(167, 166, NULL),
(168, 167, NULL),
(169, 168, NULL),
(170, 169, NULL),
(171, 170, NULL),
(172, 171, NULL),
(173, 172, NULL),
(174, 173, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `metric_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` text,
  `image` text,
  `other_contact_type` varchar(50) DEFAULT NULL,
  `other_contact_name` varchar(50) DEFAULT NULL,
  `other_contact_mobile_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `metric_id`, `name`, `mobile_no`, `designation`, `email`, `address`, `image`, `other_contact_type`, `other_contact_name`, `other_contact_mobile_no`) VALUES
(1, 180, 'Farzana Nur Priya', '8801922513296', 'Vice Principle', NULL, 'Thanda Miar Moshjid road,Mohona Building,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Tapas Mahmud Russell', '01977628099'),
(2, 177, 'Tahmina Begum', '8801793248304', 'Senior Teacher', NULL, 'Shantibag,Uttor Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Md.Naim Uddin', '01957242282'),
(3, 174, 'Dipti Dutta', '8801830142898', 'Senior Teacher', NULL, 'Banani Complex,Uppoher Center,Loknathdham lain,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Ratan Dutta', '01816153503'),
(4, 173, 'Hamida Akter', '8801716084067', 'Assistance Teacher', NULL, 'CDA road no 9,Gentry Salam House,Flat no 4/B,Abidarpara,Ctg', 'public/image/avatar.png', NULL, 'Israt Safia Esha', '01850173540'),
(5, 178, 'Sultana Parvin', '8801742379954', 'Assistance Teacher', NULL, 'CDA road no 13,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'MD.Rahim Uddin', '01712616785'),
(6, 171, 'Nasima Akter', '8801832834787', 'Assistance Teacher', NULL, 'CDA road no 9,Gentry Salam House,1st floor C,Abidarpara,Ctg', 'public/image/avatar.png', NULL, 'Achiya Khatun', '01821329623'),
(7, 179, 'Farzana Akter', '8801825271969', 'Assistance Teacher', NULL, '3 no Fokirhat,Rahman Monjil,Ctg', 'public/image/avatar.png', NULL, 'Shariful Hoque', '01813298330'),
(8, 166, 'Shahinoor Akter Nabila', '8801619947465', 'Assistance Teacher', NULL, 'Islamia Brickfield,Chotopol,Ctg', 'public/image/avatar.png', NULL, 'MRS.Jony Akter', '01817748202'),
(9, 176, 'Fokraz Begum Sonia', '8801869338371', 'Assistance Teacher', NULL, 'CDA road no 25,Poly Mension,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'MD.Osman Goni', '01811203935'),
(10, 172, 'Tahmina Kabir Ripa', '8801677970628', 'Assistance Teacher', NULL, 'CDA road no 13,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Kamrul Hasan', '018125683178'),
(11, 1011, 'Syeada Jaheda', '8801824804159', 'Assistance Teacher', NULL, 'CDA road no 12,Chowdhury Villa,Agrabad,Ctg', 'public/image/avatar.png', 'Husband', 'A.B. Chowdhury', '031-714112'),
(12, 169, 'Fatema Zohora Shiole', '8801787791517', 'Senior Teacher', NULL, 'CDA road no 17/1,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Mizanur Rahman', '01554333543'),
(13, 165, 'Happy Akter', '8801625368520', 'Assistance Teacher', NULL, 'Moddom Goshaildangga,Abul Hossain Building,Ctg', 'public/image/avatar.png', NULL, 'MD.Harun Howlader', '01832833450'),
(14, 181, 'Rabeya Akter', '8801830081936', 'Assistance Teacher', NULL, 'Saiba Villa,Daiyyapara,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Moshiour Rahman', '01819821566'),
(15, 167, 'Rimu Chowdhury', '8801814701054', 'Assistance Teacher', NULL, 'Banani Complex,Upoher center,Loknathdham Lain,Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Jaly Chowdhury', '01855042101'),
(16, 168, 'Taslima Begum', '8801557195578', 'Assistance Teacher', NULL, 'Shantibag,Uttor Agrabad,Ctg', 'public/image/avatar.png', NULL, 'Md,Naim Uddin', '01957242282'),
(17, 175, 'Sabina Yeasmin', '8801869337211', 'Senior Teacher', NULL, 'Islamia Brickfield,Anonto Nil Building,Chotopol,Ctg', 'public/image/avatar.png', NULL, 'Riaz Mahmudun Nobi', '01630641268'),
(18, 170, 'Md Ahsan Ullah', '8801715710650', 'Huzur', NULL, 'Facy Building (3rd floor), 87 Agrabad C/A, Ctg', 'public/image/avatar.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendance`
--

CREATE TABLE `teacher_attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `in_time` datetime NOT NULL,
  `out_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_attendance`
--

INSERT INTO `teacher_attendance` (`id`, `date`, `teacher_id`, `in_time`, `out_time`) VALUES
(1, '2019-01-14', 1, '2019-01-14 20:08:55', NULL),
(2, '2019-01-15', 8, '2019-01-15 07:48:14', NULL),
(3, '2019-01-15', 10, '2019-01-15 07:54:28', NULL),
(4, '2019-01-15', 14, '2019-01-15 07:58:13', NULL),
(5, '2019-01-15', 15, '2019-01-15 08:06:45', NULL),
(6, '2019-01-15', 7, '2019-01-15 08:10:12', NULL),
(7, '2019-01-15', 17, '2019-01-15 08:12:26', NULL),
(8, '2019-01-15', 13, '2019-01-15 08:12:39', NULL),
(9, '2019-01-15', 5, '2019-01-15 08:13:25', NULL),
(10, '2019-01-15', 6, '2019-01-15 08:14:03', NULL),
(11, '2019-01-15', 4, '2019-01-15 08:14:24', NULL),
(12, '2019-01-15', 1, '2019-01-15 08:15:25', NULL),
(13, '2019-01-15', 9, '2019-01-15 08:17:00', NULL),
(14, '2019-01-15', 16, '2019-01-15 08:21:27', NULL),
(15, '2019-01-15', 2, '2019-01-15 08:22:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_class_section`
--

CREATE TABLE `teacher_class_section` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_class_section`
--

INSERT INTO `teacher_class_section` (`id`, `teacher_id`, `class_id`, `section_id`) VALUES
(1, 1, 3, 1),
(2, 2, 1, 1),
(3, 3, 3, 1),
(4, 4, 4, 1),
(5, 5, 5, 1),
(6, 6, 2, 1),
(7, 7, 5, 1),
(8, 8, 6, 1),
(9, 9, 2, 1),
(10, 10, 2, 1),
(11, 11, 1, 1),
(12, 12, 4, 1),
(13, 13, 1, 1),
(14, 14, 7, 1),
(15, 15, 3, 1),
(16, 16, 5, 1),
(17, 17, 3, 1),
(18, 18, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '$2y$10$4VISvfCapdWsbojmiDPINegIxlcrZgd7qEqmPZiPjSTC95AMX/boC', '8QImdF0Nc2I1KPnLQj4inmFCj2YJM2CdymFzPSvtKHWpTWImT0lr4ygRw45x', NULL, '2018-12-03 06:08:41'),
(2, 'Admin', 'russell1978ctg@yahoo.com', '$2y$10$c6LxkVVqZjAs2ERYHoaftOKnMN3PKJCM1onffMzMsUJhsA7WTaIRy', 'xLsrawMFFLD8kZqRze5RjUxWpBH3DUJjKMCEWDnvzPaIHiRSTIp3q5yelNyn', '2018-04-10 23:23:55', '2018-12-25 16:29:40'),
(4, 'admin', 'admin@gmail.com', '$2y$10$oK.G4pIfyGepNF59mPbZSOwUbEXy6A9aF8MCabBJO/PednPPqbKuq', 'RteKtfQPCiyNgwvXNFZj8vbvC7d0v3FmZ5LCCZKBeLbvdKBl3RybpDQumeNl', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vans`
--

CREATE TABLE `vans` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vans`
--

INSERT INTO `vans` (`id`, `name`, `description`) VALUES
(1, 'Van 1', NULL),
(2, 'Van 2', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metric_id_type`
--
ALTER TABLE `metric_id_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `parents_mobile_no_unique` (`mobile_no`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_logs`
--
ALTER TABLE `sms_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms_templates`
--
ALTER TABLE `sms_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_attendance`
--
ALTER TABLE `student_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_class_section`
--
ALTER TABLE `student_class_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_van`
--
ALTER TABLE `student_van`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_class_section`
--
ALTER TABLE `teacher_class_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vans`
--
ALTER TABLE `vans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metric_id_type`
--
ALTER TABLE `metric_id_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sms_logs`
--
ALTER TABLE `sms_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sms_templates`
--
ALTER TABLE `sms_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `student_class_section`
--
ALTER TABLE `student_class_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `student_van`
--
ALTER TABLE `student_van`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `teacher_class_section`
--
ALTER TABLE `teacher_class_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vans`
--
ALTER TABLE `vans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
