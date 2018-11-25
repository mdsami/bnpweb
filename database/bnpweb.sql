-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2018 at 10:00 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnpweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `address`, `division_id`, `created_at`, `updated_at`) VALUES
(1, 'Area 1', 'Area 1 Address', 1, '2018-08-30 04:40:20', '2018-08-30 04:40:20'),
(2, 'Area 2', 'Area 2 Address', 2, '2018-08-30 04:40:33', '2018-08-30 04:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana_id` int(10) UNSIGNED DEFAULT NULL,
  `fari_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `phone`, `message`, `img`, `audio`, `video`, `thana_id`, `fari_id`, `created_at`, `updated_at`) VALUES
(7, '123456789', 'My Complain', 'images/9DS9cB9UYf9hZLrmkPIjNgVZ8pg1wvVLuUFSFJ01.jpeg', 'audios/bbv7TzU3RzBIniBN10RIvcCQqiXXmYhxWq3AsI8c.mpga', 'videos/rEvy4vf0xhoCsRz0CMLlTQ3EMFdQFN3UwDxJNffs.mp4', 1, NULL, '2018-09-29 01:40:07', '2018-09-29 01:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`, `address`, `division_id`, `area_id`, `zone_id`, `created_at`, `updated_at`) VALUES
(1, 'District 1', 'District 1 Address', 1, 1, 1, '2018-08-30 04:41:37', '2018-08-30 04:41:37'),
(2, 'District 2', 'District 2 Address', 2, 2, 2, '2018-08-30 04:41:59', '2018-08-30 04:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Division 1', '2018-08-30 04:39:52', '2018-08-30 04:39:52'),
(2, 'Division 2', '2018-08-30 04:39:58', '2018-08-30 04:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `fari`
--

CREATE TABLE `fari` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `thana_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fari`
--

INSERT INTO `fari` (`id`, `name`, `oc`, `phone`, `lat`, `long`, `address`, `division_id`, `area_id`, `zone_id`, `district_id`, `thana_id`, `created_at`, `updated_at`) VALUES
(1, 'Fari 1', 'Fari 1 OC', '123456789', '1.2', '1.1', 'Fari 1 Address', 1, 1, 1, 1, 1, '2018-08-30 04:45:35', '2018-08-30 04:45:35'),
(2, 'Fari 2', 'Fari 2 OC', '987654321', '2.2', '2.1', 'Fari 2 Address', 2, 2, 2, 2, 2, '2018-08-30 04:46:11', '2018-08-30 04:46:11');

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
(10, '2018_07_19_101035_create_division_table', 2),
(11, '2018_07_19_101219_create_area_table', 2),
(12, '2018_07_19_101254_create_zone_table', 2),
(13, '2018_07_19_101341_create_district_table', 2),
(14, '2018_07_19_105031_create_thana_table', 2),
(15, '2018_07_19_105249_create_fari_table', 2),
(17, '2018_07_19_105845_create_complain_table', 3);

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
-- Table structure for table `thana`
--

CREATE TABLE `thana` (
  `id` int(10) UNSIGNED NOT NULL,
  `oc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `zone_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`id`, `oc`, `name`, `phone`, `address`, `lat`, `long`, `division_id`, `area_id`, `zone_id`, `district_id`, `created_at`, `updated_at`) VALUES
(1, 'Thana 1 OC', 'Thana 1', '123456789', 'Thana 1 Address', '1.2', '1.1', 1, 1, 1, 1, '2018-08-30 04:44:04', '2018-08-30 04:44:04'),
(2, 'Thana 2 OC', 'Thana 2', '987654321', 'Thana 2 Address', '2.2', '2.1', 2, 2, 2, 2, '2018-08-30 04:44:53', '2018-08-30 04:44:53');

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$5CmhoLKIV9CFWI0dx.wK5OrvzrOqrdzH9v6cTEwPhFwsHj1f/.CDy', 'QqmrQlB97h2Uj5iMELbYGVGgayq3xS8IdrWwfbe2metge07eeNYXlVCAq9K6', '2018-08-13 02:19:05', '2018-08-13 02:19:05');

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `area_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `name`, `address`, `division_id`, `area_id`, `created_at`, `updated_at`) VALUES
(1, 'Zone 1', 'Zone 1 Address', 1, 1, '2018-08-30 04:41:00', '2018-08-30 04:41:00'),
(2, 'Zone 2', 'Zone 2 ADdress', 2, 2, '2018-08-30 04:41:13', '2018-08-30 04:41:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `area_division_id_foreign` (`division_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complain_thana_id_foreign` (`thana_id`),
  ADD KEY `complain_fari_id_foreign` (`fari_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_division_id_foreign` (`division_id`),
  ADD KEY `district_area_id_foreign` (`area_id`),
  ADD KEY `district_zone_id_foreign` (`zone_id`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fari`
--
ALTER TABLE `fari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fari_division_id_foreign` (`division_id`),
  ADD KEY `fari_area_id_foreign` (`area_id`),
  ADD KEY `fari_zone_id_foreign` (`zone_id`),
  ADD KEY `fari_district_id_foreign` (`district_id`),
  ADD KEY `fari_thana_id_foreign` (`thana_id`);

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
-- Indexes for table `thana`
--
ALTER TABLE `thana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thana_division_id_foreign` (`division_id`),
  ADD KEY `thana_area_id_foreign` (`area_id`),
  ADD KEY `thana_zone_id_foreign` (`zone_id`),
  ADD KEY `thana_district_id_foreign` (`district_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `zone_division_id_foreign` (`division_id`),
  ADD KEY `zone_area_id_foreign` (`area_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fari`
--
ALTER TABLE `fari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_fari_id_foreign` FOREIGN KEY (`fari_id`) REFERENCES `fari` (`id`),
  ADD CONSTRAINT `complain_thana_id_foreign` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `district_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `district_zone_id_foreign` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fari`
--
ALTER TABLE `fari`
  ADD CONSTRAINT `fari_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fari_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fari_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fari_thana_id_foreign` FOREIGN KEY (`thana_id`) REFERENCES `thana` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fari_zone_id_foreign` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `thana`
--
ALTER TABLE `thana`
  ADD CONSTRAINT `thana_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `thana_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `district` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `thana_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `thana_zone_id_foreign` FOREIGN KEY (`zone_id`) REFERENCES `zone` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `zone`
--
ALTER TABLE `zone`
  ADD CONSTRAINT `zone_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `area` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `zone_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `division` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
