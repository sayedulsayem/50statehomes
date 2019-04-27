-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 02:17 PM
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
-- Database: `50statehomes`
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
(1, 'Sayedul Sayem', 'sayedulsayemofficial@gmail.com', '$2y$10$vKM4APLivqYn9gBijSR2teI/PbePbMZRF8.YnsYra0rCMcXLNeHCu', '01515219181', 'panel/images/1556187041.jpg', 'superadmin', 'active', '2019-04-24 07:03:07', '2019-04-25 04:10:41');

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
(1, 1, 'panel/images/house/450_93f2e39a-4cae-4b2b-b6fe-5daf04ab633f1556112871.jpg', '2019-04-24 07:34:31', '2019-04-24 07:34:31'),
(2, 1, 'panel/images/house/4854_Alonzo_Ave__Encino_FInals_34.01556112871.jpg', '2019-04-24 07:34:31', '2019-04-24 07:34:31'),
(3, 1, 'panel/images/house/download (1)1556112871.jpg', '2019-04-24 07:34:31', '2019-04-24 07:34:31'),
(4, 1, 'panel/images/house/download (2)1556112871.jpg', '2019-04-24 07:34:31', '2019-04-24 07:34:31'),
(9, 3, 'user/images/house/download (1)1556345021.jpg', '2019-04-27 00:03:41', '2019-04-27 00:03:41'),
(10, 3, 'user/images/house/download (2)1556345021.jpg', '2019-04-27 00:03:41', '2019-04-27 00:03:41'),
(17, 5, 'panel/images/house/photo-1475855581690-80accde3ae2b1556364425.jpg', '2019-04-27 05:27:05', '2019-04-27 05:27:05'),
(18, 5, 'panel/images/house/photo-1480074568708-e7b720bb3f091556364425.jpg', '2019-04-27 05:27:05', '2019-04-27 05:27:05'),
(19, 5, 'panel/images/house/w10241556364425.jpg', '2019-04-27 05:27:05', '2019-04-27 05:27:05');

-- --------------------------------------------------------

--
-- Table structure for table `landing_houses`
--

CREATE TABLE `landing_houses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
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

INSERT INTO `landing_houses` (`id`, `admin_id`, `user_id`, `street`, `city`, `state`, `zip`, `price`, `bed`, `bath`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, '558 Tiber River Way', 'Ca', 'CA', '93036', '$ 450', '3', '2.5', 'dshgdfhdfhdgh', 'active', '2019-04-24 07:34:31', '2019-04-27 05:26:39'),
(3, NULL, 2, '558 Tiber River Way', 'Dhanmondi', 'Dhaka', '1205', '45', '5', '6', '2222222222222222222222222', 'active', '2019-04-27 00:03:41', '2019-04-27 04:00:00'),
(5, 1, 2, '30 North Road', 'oxnard', 'Dhaka', '14', '45', '3', '6', 'jhntngj', 'active', '2019-04-27 05:27:05', '2019-04-27 06:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `house_id` bigint(20) NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lemail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lphone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `leads` (`id`, `house_id`, `lname`, `lemail`, `lphone`, `appoint_date`, `appoint_time`, `offer_price`, `comment`, `buying_plan`, `toured`, `created_at`, `updated_at`) VALUES
(1, 1, 'sayem', 'sayem@gmail.com', '012457890', '2019-04-27', '08:04:00', '$ 325', 'gfjkggfg t gfsdfg sfg rsg sreg dsfg', 'cash', 'yes', '2019-04-27 03:09:20', '2019-04-27 03:24:02'),
(8, 2, 'fddddddddddd', 'update@gmail.com', 'drgdrgrgdrgrfg', '2019-04-27', '07:04:00', '$ 3252222', 'drghbg', 'cash', 'yes', '2019-04-27 05:24:03', '2019-04-27 05:25:37'),
(10, 3, 'test 22', 'test2@gmail.com', '02164622222', '2019-05-10', '08:04:00', '$ 325', 'fghnjhdfhj', 'cash', 'no', '2019-04-27 05:28:59', '2019-04-27 05:31:26'),
(11, 5, 'babu vai', 'babuvai@gmail.com', '01245789624653233', '2019-05-16', '09:04:00', '$ 3258', 'ftghdjhgdg', 'cash', 'yes', '2019-04-27 06:09:57', '2019-04-27 06:09:57');

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
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `provider`, `provider_id`, `password`, `phone`, `otp`, `phone_verify`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sayedul sa', 'sayedul@gmail.com', NULL, 'user/images/1556192919.jpg', NULL, NULL, '$2y$10$17l0.bqf46v.myrZUvb2dess3mMnFLRPC00a1foFtZDLcMFsxMk46', '01515219181', NULL, 'unverified', 'user', 'active', NULL, '2019-04-25 05:48:39', '2019-04-27 05:27:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `landing_houses`
--
ALTER TABLE `landing_houses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
