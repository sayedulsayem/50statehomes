-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2019 at 02:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house-landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('superadmin','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Sayedul Sayem', 'sayedulsayemofficial@gmail.com', '$2y$10$zF8U5Hrr44YGch/ZtuzjouyYaHIXNeFnu9YB53iTrIgmeDGM9iE9S', '01515219181', 'panel/images/1555405186.jpg', 'superadmin', 'active', '2019-04-16 01:26:47', '2019-04-16 02:59:46'),
(2, 'robi', 'ronydkbd8@gmail.com', '$2y$10$l9KVH8hy2/UWdVdSz3Fgo.sDphNFjKg1cizX71GuB1EvFvbqMOuki', '123456', 'panel/images/1555499222.jpg', 'admin', 'inactive', '2019-04-17 05:07:02', '2019-04-17 05:07:26');

-- --------------------------------------------------------

--
-- Table structure for table `house_images`
--

CREATE TABLE `house_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_id` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `house_images`
--

INSERT INTO `house_images` (`id`, `house_id`, `image`, `created_at`, `updated_at`) VALUES
(5, 2, 'panel/images/house/download1555408939.jpg', '2019-04-16 04:02:19', '2019-04-16 04:02:19'),
(6, 2, 'panel/images/house/GettyImages_823165612__1_.01555408939.jpg', '2019-04-16 04:02:19', '2019-04-16 04:02:19'),
(7, 2, 'panel/images/house/istockphoto-856794670-612x6121555408939.jpg', '2019-04-16 04:02:19', '2019-04-16 04:02:19'),
(8, 1, 'panel/images/house/450_93f2e39a-4cae-4b2b-b6fe-5daf04ab633f1555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(9, 1, 'panel/images/house/4854_Alonzo_Ave__Encino_FInals_34.01555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(10, 1, 'panel/images/house/download (1)1555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(11, 1, 'panel/images/house/download (2)1555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(12, 1, 'panel/images/house/download1555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(13, 1, 'panel/images/house/GettyImages_823165612__1_.01555409964.jpg', '2019-04-16 04:19:24', '2019-04-16 04:19:24'),
(14, 3, 'panel/images/house/maxresdefault1555499531.jpg', '2019-04-17 05:12:11', '2019-04-17 05:12:11'),
(15, 3, 'panel/images/house/modern-house-design-muzaffarpur-architects-0zf1fjalfn1555499531.jpg', '2019-04-17 05:12:11', '2019-04-17 05:12:11'),
(16, 3, 'panel/images/house/photo-1475855581690-80accde3ae2b1555499531.jpg', '2019-04-17 05:12:11', '2019-04-17 05:12:11'),
(17, 3, 'panel/images/house/photo-1480074568708-e7b720bb3f091555499531.jpg', '2019-04-17 05:12:11', '2019-04-17 05:12:11'),
(18, 3, 'panel/images/house/w10241555499531.jpg', '2019-04-17 05:12:11', '2019-04-17 05:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `landing_houses`
--

CREATE TABLE `landing_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bath` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `landing_houses`
--

INSERT INTO `landing_houses` (`id`, `admin_id`, `street`, `city`, `state`, `zip`, `price`, `bed`, `bath`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '558 Tiber River Way', 'oxnard', 'CA', '93036', '$ 450', '3', '2.5', 'kfdhasd sdfghsdfk sdfgh sdf gsdgh sdfgkjsd gskjg hs g', 'active', '2019-04-16 03:01:08', '2019-04-16 04:19:23'),
(2, 1, '30 North Road', 'Dhanmondi', 'Dhaka', '1205', '$ 530', '5', '3', 'getgsr weryg ey erer ey ey e t ghgfhdfg erhfd h', 'active', '2019-04-16 04:02:18', '2019-04-16 04:02:18'),
(3, 1, 'test', 'test', 'test', '14', '$ 45', '3', '2', 'test', 'active', '2019-04-17 05:12:11', '2019-04-17 05:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `appoint_date` date NOT NULL,
  `appoint_time` time NOT NULL,
  `offer_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_plan` enum('cash','loan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `toured` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `house_id`, `user_id`, `appoint_date`, `appoint_time`, `offer_price`, `comment`, `buying_plan`, `toured`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-04-17', '07:04:00', '$ 325', 'rt', 'cash', 'yes', '2019-04-17 03:19:08', '2019-04-17 03:19:08'),
(2, 2, 1, '2019-04-25', '09:04:00', '$ 256', 'hhbfgf', 'cash', 'no', '2019-04-17 03:20:05', '2019-04-17 03:20:05'),
(3, 2, 1, '2019-04-26', '09:04:00', '$ 325', 'hhm', 'cash', 'no', '2019-04-17 05:05:56', '2019-04-17 05:05:56');

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
(3, '2019_04_03_101158_create_admins_table', 1),
(4, '2019_04_03_101801_create_landing_houses_table', 1),
(5, '2019_04_03_103312_create_house_images_table', 1),
(6, '2019_04_03_103515_create_leads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sayedul@gmail.com', '$2y$10$d/YsHbsM1mKyAxc6tg9px.M1IlavIVyClDlZX0uhBAPdN6otKGkZy', '2019-04-17 04:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verify` enum('verified','unverified') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unverified',
  `type` enum('user','non-user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `provider`, `provider_id`, `password`, `phone`, `otp`, `phone_verify`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sayedul', 'sayedul@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$z.K/jgJSZZ4aX15waBpmbOM095LIt8CwAT0MsOS0nd393TMlpz/Re', '012458745', NULL, 'verified', 'user', NULL, '2019-04-16 02:10:11', '2019-04-16 02:10:11'),
(3, 'user', 'user@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$gZXVdJfzbY8WmH9uFkzO..T1EDTkheLJWQnLF6O4qMS33ALHKEvQO', '0151521918', NULL, 'unverified', 'user', NULL, '2019-04-16 02:40:04', '2019-04-16 02:40:04'),
(6, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$10$GOjp0mlpt0GpH6M9JDIGVusm8GTz5lQISh8NQn4J6aQtkcjNC4702', '123456', NULL, 'unverified', 'user', NULL, '2019-04-16 03:13:49', '2019-04-16 03:13:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `house_images`
--
ALTER TABLE `house_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_houses`
--
ALTER TABLE `landing_houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `house_images`
--
ALTER TABLE `house_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `landing_houses`
--
ALTER TABLE `landing_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
