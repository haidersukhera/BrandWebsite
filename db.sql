-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 12:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practice1`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(38, 'Apple', 'image/brand/1728166166924503.jpg', '2022-03-24 02:41:27', NULL),
(39, 'Appleee', 'image/brand/1728166184018032.jpg', '2022-03-24 02:41:44', NULL),
(40, 'App', 'image/brand/1728166195017403.jpg', '2022-03-24 02:41:54', NULL),
(41, 'aa', 'image/brand/1728166205691331.jpg', '2022-03-24 02:42:04', NULL),
(43, 'aa', 'image/brand/1728166248632035.jpg', '2022-03-24 02:42:45', NULL),
(44, 'Appleeeaa', 'image/brand/1728166261193610.jpg', '2022-03-24 02:42:57', NULL),
(45, 'aaq', 'image/brand/1728166281931520.jpg', '2022-03-24 02:43:17', NULL),
(47, 'JHGFss', 'image/brand/1728166352817358.jpg', '2022-03-24 02:44:25', '2022-03-28 03:10:42'),
(48, 'YTRF', 'image/brand/1728531549306307.jpg', '2022-03-28 03:13:12', '2022-03-28 03:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `category_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 1, 'hi how are you ahmad', '2022-03-08 03:32:21', '2022-03-08 04:55:45', NULL),
(36, 1, 'that is so good', '2022-03-08 03:35:41', '2022-03-08 04:55:48', NULL),
(37, 1, 'hi how are you', '2022-03-08 04:54:47', '2022-03-16 02:18:29', NULL),
(38, 4, 'dsd', '2022-03-08 04:54:51', '2022-03-14 02:23:22', NULL),
(39, 1, 'hi how are you ali', '2022-03-08 04:54:56', '2022-03-08 04:55:37', NULL),
(40, 1, 'dskfjlkjn', '2022-03-08 04:55:00', '2022-03-08 04:55:36', NULL),
(45, 1, 'that is so goodsd', '2022-03-16 02:18:37', '2022-03-16 02:18:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(3, 'PAKPATTAN ,PUNJAB', 'haidersukhera556@gmail.com', '03008750110', '2022-03-25 01:47:35', '2022-03-28 05:33:36'),
(5, 'Lahore,Pakistan', '15@gmail.com', '03008750110', '2022-03-25 02:37:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE IF NOT EXISTS `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'haider', 'haidersukhera555@gmail.com', 'This is the test message', 'This is the test message', '2022-03-25 04:48:46', NULL),
(9, 'faizan', 'haidersukhera555@gmail.com', 'This is the test message', 'This is the test message', '2022-03-25 04:57:45', NULL),
(10, 'haider', 'haidersukhera555@gmail.com', 'This is the test message', 'This is the test message', '2022-03-25 04:58:09', NULL),
(13, 'haider', 'haidersukhera555@gmail.com', 'This is the test message', 'This is the test message', '2022-03-25 05:23:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_abouts`
--

CREATE TABLE IF NOT EXISTS `home_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_abouts`
--

INSERT INTO `home_abouts` (`id`, `title`, `short_des`, `long_des`, `created_at`, `updated_at`) VALUES
(4, 'Search & Find Info on Any Company', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut', 'Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.', '2022-03-22 04:33:13', '2022-03-22 04:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_03_04_075005_create_sessions_table', 1),
(7, '2022_03_04_100933_create_categories_table', 2),
(8, '2022_03_08_101027_create_brands_table', 3),
(9, '2022_03_10_105341_create_multi_pics_table', 4),
(10, '2022_03_21_080129_create_sliders_table', 5),
(11, '2022_03_21_135739_create_home_abouts_table', 6),
(12, '2022_03_24_081111_create_services_table', 7),
(13, '2022_03_24_115322_create_contacts_table', 8),
(14, '2022_03_25_075501_create_contact_forms_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `multi_pics`
--

CREATE TABLE IF NOT EXISTS `multi_pics` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_pics`
--

INSERT INTO `multi_pics` (`id`, `image`, `created_at`, `updated_at`) VALUES
(36, 'image/multi/1728166101025576.jpg', '2022-03-24 02:40:25', NULL),
(39, 'image/multi/1728166101077178.jpg', '2022-03-24 02:40:25', NULL),
(40, 'image/multi/1728166101088874.jpg', '2022-03-24 02:40:25', NULL),
(41, 'image/multi/1728166101098683.jpg', '2022-03-24 02:40:25', NULL),
(42, 'image/multi/1728166101110484.jpg', '2022-03-24 02:40:25', NULL),
(43, 'image/multi/1728166101121799.jpg', '2022-03-24 02:40:25', NULL),
(44, 'image/multi/1728166101133538.jpg', '2022-03-24 02:40:25', NULL),
(45, 'image/multi/1728166101145232.jpg', '2022-03-24 02:40:25', NULL),
(46, 'image/multi/1728166101158448.jpg', '2022-03-24 02:40:25', NULL),
(48, 'image/multi/1728179059315211.jpg', '2022-03-24 06:06:23', NULL),
(49, 'image/multi/1728179110767322.jpg', '2022-03-24 06:07:12', NULL),
(54, 'image/multi/1728179572553151.jpg', '2022-03-24 06:14:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('haidersukhera556@gmail.com', '$2y$10$VcQi4gdFKQLrJkH4GRhZkOnUNXxcSZg8Pi7DmOpzJbqlvxsYAbsXy', '2022-03-14 02:49:21'),
('15@gmail.com', '$2y$10$SO9ixdY1ncMpQChshpqWH.5cJgmtGsMzMjV9lT3.2eVqDhJuaVD.W', '2022-03-14 05:26:44'),
('haidersukhera555@gmail.com', '$2y$10$FIwHnyKZKddFurOFj4ywCehOGH.8buaqs/CvHToXGH324j78RJBXK', '2022-03-21 04:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'Education.', 'Business services are activities that benefit companies without supplying physical products. Companies rely on these services for marketing, production, safety, cost and convenience purposes—especially l', '2022-03-24 04:32:48', NULL),
(6, 'Software services', 'Software services enhance features and upgrade the security for a company or individual\'s technological devices, such as computers and phones. These services provide anti-virus protection and update applications to be more user-friendly and effective.', '2022-03-24 04:33:14', NULL),
(7, 'Training services', 'A company may benefit from hiring a training company to teach employees specific computer skills or soft skills. In these cases, the company may hire an outside party to lead training sessions, workshops or presentations to help team members improve or learn a certain skill.', '2022-03-24 04:33:55', NULL),
(8, 'Event planning services', 'Companies can hire an event planning service for office parties, fundraising events and other corporate functions. The event management service is responsible for finding venues, supplies, staff and catering, if applicable.', '2022-03-24 04:34:16', NULL),
(9, 'Marketing services', 'If a company wants to gain more business and public attention, it may consider outsourcing marketing services. Marketing services help companies advertise their products, services and brand by creating marketing campaigns. Though some companies have internal marketing departments, others outsource this labor in order to receive faster and higher-quality results.', '2022-03-24 04:34:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uSKIrPDkDdGTQXgVDovVs0AZliHgcuRho7Vqq4tN', 8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUDlUN1BiaUVIRTZ3SENSRHhTSFRpWWdSckVPaUZMQkZSZU0xR081QyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRneE4zSEpjQW5nUmlmVmFieS55VlIuRml4dTNkaEFvM0dXYjhEa21KZ2o3dDR1VFN3R1hydSI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkZ3hOM0hKY0FuZ1JpZlZhYnkueVZSLkZpeHUzZGhBbzNHV2I4RGttSmdqN3Q0dVRTd0dYcnUiO3M6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo4O30=', 1648463617);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(23, 'Education.', 'Software services enhance features and upgrade the security for a company or individual\'s technological devices, such as computers and phones. These services provide anti-virus protection and update applications to be more user-friendly and effective.', 'image/slider/1728173840266226.jpg', '2022-03-24 04:43:25', NULL),
(24, 'Construction services', 'If a company is interested in expanding or renovating its office space, it may need to hire a construction team to build the space. Hiring a team of experienced construction workers ensures that they complete any office renovations or expansions in a safe and efficient manner.', 'image/slider/1728173884360887.webp', '2022-03-24 04:44:07', NULL),
(25, 'Legal service', 'A company may want to hire legal services if they need to draft business agreements, ask for advice or navigate a legal issue. Legal teams or individuals can offer guidance, advice and expertise to a company to ensure its legally binding documents uphold the organization\'s original intentions.', 'image/slider/1728173912498272.jpg', '2022-03-24 04:44:34', '2022-03-28 03:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(8, 'haider ali', 'haidersukhera555@gmail.com', '2022-03-26 07:45:35', '$2y$10$gxN3HJcAngRifVaby.yVR.Fixu3dhAo3GWb8DkmJgj7t4uTSwGXru', NULL, NULL, NULL, NULL, NULL, '2022-03-26 07:10:43', '2022-03-26 08:20:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
