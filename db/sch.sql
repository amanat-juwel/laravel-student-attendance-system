-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 02:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sch`
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
(1, 'Class 1'),
(2, 'Class 2');

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

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `father`, `mother`, `address`, `mobile_no`, `position`) VALUES
(1, 'Hedayetul Alam', NULL, NULL, NULL, '8801675711884', NULL);

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
(1, 17, 'student', 12),
(3, 18, 'teacher', 5),
(4, 20, 'staff', 2);

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
(1, 'Md Ayub', 'Ruby Akter', 'ColonelHat', '8801675711884', 'amanat@gmail.com', 'Service Holder', NULL, NULL),
(2, 'MR. NUR ALAM', 'MRS. NUR ALAM', 'CHITTAGONG', '8801571738989', 'nuralamctg@gmail.com', 'job holder', NULL, NULL);

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
  `metric_id` varchar(20) DEFAULT NULL,
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
(1, NULL, 'Shakil', NULL, NULL, '8801675711884', NULL, NULL),
(2, '20', 'Yasin', 'Yadin', 'Akhi', '8801675711884', 'Ctg', 'Chief');

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
(1, '2018-12-01', 1, '2018-12-01 08:00:00', '2018-12-01 13:00:00'),
(2, '2018-12-02', 1, '2018-12-02 09:12:00', '2018-12-02 13:16:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `metric_id` varchar(20) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `image` text,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `metric_id`, `name`, `dob`, `image`, `parent_id`) VALUES
(1, 'C133008', 'John Doe', '2018-12-10', 'public/image/avatar.png', 1),
(2, 'C133009', 'Peter Smith', NULL, 'public/image/avatar.png', 2),
(3, 'C133010', 'Ricky Martina', '1998-12-18', 'public/image/avatar.png', 2),
(4, 'C133015', 'Alvin Jr.', NULL, 'public/image/avatar.png', 3),
(5, 'C133012', 'Taiser', '1994-12-13', 'public/image/avatar.png', 1),
(6, 'C1330020', 'Nishi', '1996-12-19', 'public/image/avatar.png', 2),
(7, 'C133026', 'Arnab Barua', '1996-12-13', 'public/image/avatar.png', 2),
(8, 'C133001', 'Imran Khan', '2018-12-19', 'public/image/avatar.png', 2),
(9, '17', 'Fahim Khan', '2018-12-04', 'public/image/avatar.png', 1),
(10, '17', 'Fahim Khan', '2018-12-04', 'public/image/avatar.png', 1),
(11, '17', 'Fahim Khan', '2018-12-04', 'public/image/avatar.png', 1),
(12, '17', 'Fahim Khan', '2018-12-04', 'public/image/avatar.png', 1),
(13, '18', 'Polash', '2018-12-12', 'public/image/avatar.png', 2);

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
(1, '2018-12-01', 1, '2018-12-01 10:00:00', '2018-12-09 12:00:00'),
(2, '2018-12-02', 1, '2018-12-02 10:00:00', '2018-12-02 12:00:00'),
(3, '2018-12-03', 1, '2018-12-03 10:00:00', '2018-12-03 12:00:00'),
(4, '2018-12-04', 1, '2018-12-04 10:00:00', '2018-12-04 12:00:00'),
(5, '2018-12-05', 1, '2018-12-05 10:00:00', '2018-12-05 12:00:00'),
(6, '2018-12-05', 2, '2018-12-05 09:03:00', '2018-12-05 14:21:00'),
(75, '2018-12-11', 1, '2018-12-11 07:32:37', NULL),
(76, '2018-12-17', 1, '2018-12-17 02:14:15', NULL);

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
(2, 2, 1, 1, '2'),
(3, 3, 2, 1, '1'),
(4, 4, 1, 2, '1'),
(5, 5, 1, 2, '2'),
(6, 6, 2, 1, '2'),
(7, 7, 2, 1, '3'),
(8, 8, 1, 1, '3'),
(9, 10, 1, 2, NULL),
(10, 11, 1, 2, NULL),
(11, 12, 1, 2, NULL),
(12, 13, 2, 2, '2');

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
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 4, 2),
(5, 7, 2),
(6, 11, NULL),
(7, 12, NULL),
(8, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `metric_id` varchar(20) DEFAULT NULL,
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
(1, 'T10001', 'Tanveer Ahsan', '8801675711884', 'Sr. Teacher', NULL, NULL, 'public/image/avatar.PNG', 'Father', 'Hamid Ahsan', '8801819333514'),
(2, 'T10002', 'Shahidul Islam Khan', '8801622464318', 'As. Teacher', NULL, NULL, 'public/image/avatar.png', 'Brother', 'Farhadul Islam', '8801675711884'),
(3, 'T01', 'Ovi', '8801675711884', 'HM', NULL, NULL, 'public/image/avatar.png', 'Father', 'Hasan', '8801675711884'),
(4, '101', 'Amanat Juwel', '8801675711884', 'S.T', 'amanatjuwel@gmail.com', 'Cornelhat, Prosanti R/A, Road#1, House# 56, 5th Floor', 'public/image/teacher/1545471569male_avatar.png', 'Father', 'Hamid', '8801675711884'),
(5, '18', 'Sohel', '8801675711884', 'CEO', NULL, NULL, 'public/image/avatar.png', NULL, 'SS', NULL);

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
(1, '2018-12-01', 1, '2018-12-01 09:00:00', '2018-12-01 13:00:00'),
(2, '2018-12-02', 1, '2018-12-02 09:00:00', '2018-12-02 13:00:00'),
(3, '2018-12-03', 1, '2018-12-03 08:00:00', '2018-12-03 14:00:00'),
(4, '2018-12-04', 1, '2018-12-04 08:45:00', '2018-12-04 13:15:00');

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
(1, 4, 1, 1),
(2, 2, 1, 2),
(3, 5, 1, 2);

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
(1, 'Admin', 'admin@admin.com', '$2y$10$4VISvfCapdWsbojmiDPINegIxlcrZgd7qEqmPZiPjSTC95AMX/boC', NULL, NULL, '2018-12-03 06:08:41'),
(2, 'Juwel', 'admin@gmail.com', '$2y$10$fesHLG6KZNdeJmZ/wwpUIex1MlnKJ4u7JHrcnGyOPJu8bxFD47Dc2', NULL, '2018-04-10 23:23:55', '2018-04-10 23:23:55'),
(3, 'John Doe', 'johndoe@admin.com', '$2y$10$FbuPhbW5pn8PQyvPkEYvBeVmQ/Vc4z8aQXxppy4ftwMStqKR19i3K', NULL, '2018-12-02 06:17:04', '2018-12-02 06:17:04');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `metric_id_type`
--
ALTER TABLE `metric_id_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_attendance`
--
ALTER TABLE `staff_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student_attendance`
--
ALTER TABLE `student_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `student_class_section`
--
ALTER TABLE `student_class_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_van`
--
ALTER TABLE `student_van`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teacher_attendance`
--
ALTER TABLE `teacher_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_class_section`
--
ALTER TABLE `teacher_class_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vans`
--
ALTER TABLE `vans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
