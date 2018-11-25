-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2018 at 11:22 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

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
(1, 'ঢাকা অঞ্চল', NULL, 1, '2018-08-16 01:07:55', '2018-08-16 01:07:55'),
(2, 'টাঙ্গাইল ', NULL, 1, NULL, NULL),
(3, 'কিশোরগঞ্জ', NULL, 1, NULL, NULL),
(4, 'চাঁদপুর ', NULL, 2, NULL, NULL),
(5, 'চট্টগ্রাম ', NULL, 2, NULL, NULL),
(6, 'বরিশাল ', NULL, 2, NULL, NULL),
(7, 'খুলনা ', NULL, 2, NULL, NULL),
(8, 'টাঙ্গাইল ', NULL, 1, NULL, NULL),
(9, 'ফরিদপুর', NULL, 1, NULL, NULL),
(10, 'কিশোরগঞ্জ', NULL, 1, NULL, NULL),
(11, 'চাঁদপুর ', NULL, 2, NULL, NULL),
(12, 'চট্টগ্রাম ', NULL, 2, NULL, NULL),
(13, 'বরিশাল ', NULL, 2, NULL, NULL),
(14, 'খুলনা ', NULL, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thana_id` int(10) UNSIGNED DEFAULT NULL,
  `fari_id` int(10) UNSIGNED DEFAULT NULL,
  `img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `long` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `phone`, `message`, `district_name`, `thana_id`, `fari_id`, `img`, `audio`, `video`, `lat`, `long`, `created_at`, `updated_at`) VALUES
(3, '0157428877587', 'audio, video, images', NULL, 52, 1, 'images/LuBSfe6es4AUVXJlHJXrIbBv9NMk09UlgKfsllK9.jpeg', 'audios/rEulfEco1P9jcfv8zgvpsD6x7rog6QNT4q5zQQus.wav', 'videos/iDHGAhhmFyb7PkgFsUfrYalFkJMnwnfhUTdQYp7g.mp4', 23.781261, 90.412832, '2018-10-11 17:55:53', '2018-10-11 17:55:53'),
(4, '0176333622222', 'mdsami', NULL, 78, 1, 'images/vpswR4CyXFJ5y2HZNivV15pmWJ2hvk8HDOJ29nTN.jpeg', NULL, NULL, 3.4, 3.4, '2018-11-18 11:50:00', '2018-11-18 11:50:00'),
(5, '0176333622222', 'mdsami', NULL, 78, NULL, 'images/2lWMAiCh4W7MnaiILVifaplY2wFPUSMHO9orNyO2.jpeg', NULL, NULL, 3.4, 3.4, '2018-11-18 11:50:07', '2018-11-18 11:50:07'),
(6, '0176333622222', 'mdsami', NULL, 78, NULL, 'images/eyW2EdkKwFxsAQjwSeFvZeTzqJmcM9qOk8fN2uYh.jpeg', NULL, NULL, NULL, NULL, '2018-11-18 11:52:25', '2018-11-18 11:52:25'),
(7, '0176333622222', 'mdsami', NULL, 78, NULL, 'images/lebDOXER3lzf0kPBHO1RDKbXSoujO3nJReRfE10S.jpeg', NULL, NULL, NULL, NULL, '2018-11-18 11:52:53', '2018-11-18 11:52:53'),
(11, '01763336225', 'mdsami', NULL, 80, NULL, 'images/1cOSisvTaWlbGu5wwOpPc2tOUE21NPXEmpSEHKjC.jpeg', NULL, NULL, NULL, NULL, '2018-11-18 12:03:45', '2018-11-18 12:03:45'),
(13, '01763336225', 'mdsami', NULL, 80, NULL, 'images/AI9T4AcClJBi9JTtMi00xzll5OB5xRT8JXbdIeBV.jpeg', NULL, NULL, NULL, NULL, '2018-11-18 12:04:25', '2018-11-18 12:04:25'),
(14, '01763336225', 'mdsami', 'গাজীপুর', 80, NULL, 'images/AXTELAOAnKv1U6oaR2NX04xzVpg7PWz2dHRjYOpa.jpeg', NULL, NULL, NULL, NULL, '2018-11-18 12:08:36', '2018-11-18 12:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `A` varchar(23) DEFAULT NULL,
  `B` varchar(29) DEFAULT NULL,
  `C` varchar(10) DEFAULT NULL,
  `D` varchar(14) DEFAULT NULL,
  `E` varchar(11) DEFAULT NULL,
  `F` varchar(7) DEFAULT NULL,
  `G` varchar(7) DEFAULT NULL,
  `H` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`A`, `B`, `C`, `D`, `E`, `F`, `G`, `H`) VALUES
('name', 'oc', 'phone', 'thana_name', 'division_id', 'area_id', 'zone_id', 'district_id'),
('বরিশাল সদর নৌ থানা', 'জনাব, বেলাল হোসেন', '১৭৬৯৬৯০৮১৫', 'সদর থানা', '2', '7', '9', '37'),
('পূর্ব ইলিশা নৌ থানা', 'জনাব, পায়েল হোসেন', '১৭৬৯৬৯২৬১৩', 'পূর্ব ইলিশা', '2', '7', '9', '39'),
('নাজিরপুর নৌ ফাঁড়ি', 'মোঃ বাদল ফকির', '১৭৬৯৬৯০৮১৩', 'মুলাদী', '2', '7', '9', '37'),
('চামটা নৌ ফাঁড়ি', 'মোঃ রেহাউল', '১৭৬৯৬৯০৮১৪', 'বাকেরগঞ্জ', '2', '7', '9', '37'),
('হিজলা নৌ ফাঁড়ি, বরিশাল', 'উত্তম', '১৭৬৯৬৯২৬০৮', 'হিজলা', '2', '7', '9', '37'),
('কুয়াকাটা নৌ ফাঁড়ি', 'মোঃ শাখা ও য়াত', '১৭৬৯৬৯০৮১৭', 'কলাপাড়া', '2', '7', '10', '41'),
('কালাইয়া নৌ ফাঁড়ি', 'মোঃ আল-মামুন', '১৭৬৯৬৯০৮১৮', 'বাওফল', '2', '7', '10', '41'),
('পায়রাবন্দর নৌ ফাঁড়ি', 'সারোয়ার,', '১৭৬৯৬৯২৬২২', 'মহিপুর', '2', '7', '10', '41'),
('পায়রাকুঞ্জ নৌ ফাঁড়ি', 'মোঃ- আতিকুর রহমান', '১৭৬৯৬৯২৬২১', 'সদর', '2', '7', '10', '41'),
('দশমিনা নৌ ফাঁড়ি', 'মোঃ সোহাগ ফকির', '১৭৬৯৬৯২৬২৫', 'দশমিনা', '2', '7', '10', '41'),
('চরদুয়ানী নৌ ফাঁড়ি', 'মোঃ রাজ্জাক', '১৭৬৯৬৯০৮২০', 'পাথরঘাটা', '2', '7', '10', '40'),
('কাকচিড়া নৌ ফাঁড়ি', 'সঞ্জয় মণ্ডল', '১৭৬৯৬৯০৮১৯', 'পাথরঘাটা', '2', '7', '10', '40'),
('নিদ্রা সকিনা নৌ ফাঁড়ি', 'আবু আব্দুল্লাহ', '১৭৬৯৬৯২৬১৯', 'পাথরঘাটা', '2', '7', '10', '40'),
('কেএমপি নৌ থানা খুলনা', 'জনাব, মোঃ রাসেল মিয়া', '১৭৬৯৬৯০৭৯৬', 'সদর', '2', '8', '11', '44'),
('নলিয়ান নৌ থানা', 'মোঃ মনিরুল ইসলাম', '১৭৬৯৬৯০৭৯৫', 'দাকোপ', '2', '8', '11', '44'),
('চাঁদপাই নৌ থানা', 'মোঃ আবুল হোসেন শরিফ', '১৭৬৯৬৯০৭৯২', 'মংলা', '2', '8', '11', '45'),
('বুড়ি গোয়ালিনী নৌ থানা', 'জনাব, অনিমেষ হালদার', '১৭৬৯৬৯০৭৯৭', 'শ্যামনগর', '2', '8', '11', '43'),
('ভিলাডাঙ্গা নৌ ফাঁড়ি', 'মোঃ কামাল হোসেন', '১৭৬৯৬৯০৭৯৩', 'দাকোপ', '2', '8', '11', '44'),
('আংটি হারা নৌ ফাঁড়ি', 'আসাদুজ্জামান,', '১৭৬৯৬৯০৭৯৪', 'কয়রী', '2', '8', '11', '44'),
('রূপসা নৌ ফাঁড়ি', 'মোঃ নজরুল ইসলাম', '১৭৬৯৬৯২৫৯৬', 'রূপসা', '2', '8', '11', '44'),
('দাকোপ নৌ ফাঁড়ি', 'মোঃ কামাল হোসেন', '১৭৬৯৬৯২৫৯৪', 'দাকোপ', '2', '8', '11', '44'),
('পাইকগাছা নৌ ফাঁড়ি', 'মোঃ রেজাউল করিম', '১৭৬৯৬৯২৫৯৩', 'পাইকগাছা', '2', '8', '11', '44'),
('রায়নগর নৌ ফাঁড়ি', 'মন্টু কুমার দাশ', '১৭৬৯৬৯২৫৯৭', 'শ্যামনগর', '2', '8', '11', '43'),
('মুন্সিগঞ্জ নৌ ফাঁড়ি', 'অতিরিক্ত দায়িত্বে আইসি রায়নগর', '১৭৬৯৬৯২৫৯৯', 'শ্যামনগর', '2', '8', '11', '43'),
('বাগেরহাট সদর ফাঁড়ি', 'মোঃ আস দুজ্জামান হারুন', '১৭৬৯৬৯০৭৯০', 'সদর থানা', '2', '8', '11', '45'),
('খাঁন সদর নৌ ফাঁড়ি', 'মোঃ বদিউজ্জামান', '১৭৬৯৬৯০৭৯১', 'শরণখোঁলা', '2', '8', '11', '45'),
('মংলা নৌ ফাঁড়ি', 'মোঃ শাহ্‌ আলম', '১৭৬৯৬৯২৬০২', 'মংলা', '2', '8', '11', '45'),
('সন্যাসী নৌ ফাঁড়ী', 'মোঃ শহিদুল', '১৭৬৯৬৯২৬০৩', 'রামপাল', '2', '8', '11', '45'),
('পারেরহাট নৌ ফাঁড়ি', 'মোঃ তৌহিদ হাসান', '১৭৬৯৬৯০৮১৬', 'ইন্দারকানী', '2', '8', '11', '42'),
('নেছারাবাদ নৌ ফাঁড়ী', 'মোঃ আকবর হোসেন', '১৭৬৯৬৯২৫৮৯', 'নেছারাবাদ', '2', '8', '11', '42'),
('দৈহাড়ী বাজার নৌ ফাঁড়ি', 'রাজিব কুমার', '১৭৬৯৬৯২৫৯২', 'নেছারাবাদ', '2', '8', '11', '42'),
('ঝাউখালী নৌ ফাঁড়ি', 'মোঃ মোস্তফা', '১৭৬৯৬৯২৫৯১', 'পিরোজপুর', '2', '8', '11', '42'),
('চাঁঁদপুর সদর নৌ থানা', 'মোঃ রেজাউল করিম ভূইয়া', '১৭৬৯৬৯০৮২১', 'সদর চাঁদপুর', '2', '5', '7', '28'),
('আলুর - বাজার নৌ ফাঁড়ি', 'মোঃ মনিরুল ইসলাম', '১৭৬৯৬৯০৮২২', 'সদর চাঁদপুর', '2', '5', '7', '28'),
('মোহনপুর নৌ ফাঁড়ি', 'জনাব, আবু তাহের', '১৭৬৯৬৯০৮২৪', 'মতলব', '2', '5', '7', '28'),
('নীল - কমল নৌ ফাঁড়ি', 'মোঃ আব্দুর রহমান ঢালি', '১৭৬৯৬৯০৮২৩', 'হাইমচর', '2', '5', '7', '28'),
('হরিশাঘাট নৌ ফাঁড়ি', 'মোঃ গিয়াস উদ্দিন', '১৭৬৯৬৯২৫৮৩', 'সদর চাঁদপুর', '2', '5', '7', '28'),
('বেলাতলী নৌ ফাঁড়ি', 'জুয়েল', '১৭৬৯৬৯২৫৮৪', 'উত্তর মতলব', '2', '5', '7', '28'),
('বড় ক্ষেরী নৌ ফাঁড়ি', 'মোঃ মতিন,', '১৭৬৯৬৯০৮২৫', 'রামগতি', '2', '5', '7', '29'),
('মজু চৌধুরি ঘাট নৌ ফাঁড়ি', 'মোঃ ইব্রাহিম', '১৭৬৯৬৯২৫৮৫', 'সদর লক্ষ্মীপুর', '2', '5', '7', '29'),
('চলি ভাঙ্গা নৌ ফাঁড়ি', 'জে, এম সিরাজুল কবির', '১৭৬৯৬৯২৫৮৬', 'মেঘলা', '2', '5', '7', '31'),
('সুরেশপুর নৌ ফাঁড়ি', 'আলাউদ্দিন-আল মাসুম', '১৭৬৯৬৯০৭৯৮', 'নুড়িয়া', '2', '5', '7', '30'),
('নরসিংহপুর নৌ ফাঁড়ি', 'মোঃ মহাসিন', '১৭৬৯৬৯২৫৮৮', 'শরীয়তপুর সদর', '2', '5', '7', '30'),
('নলাচিড়া নৌ ফাঁড়ি', 'মোঃ আনোয়ার', '১৭৬৯৬৯২৬৩২', 'হাতিয়া', '2', '6', '8', '34'),
('নিজুম দ্বীপ নৌ ফাঁড়ি', 'মোঃ লিয়াকত আলী', '১৭৬৯৬৯২৬৩৪', 'হাতিয়া', '2', '6', '8', '34'),
('বদরখালী নৌ ফাঁড়ি', 'মোঃ গোলাম মুর্শিদ সরকার', '১৭৬৯৬৯২৬৩৬', 'চকরিয়া', '2', '6', '8', '32'),
('মাতারবাড়ি নৌ ফাঁড়ি', 'মোঃ নাছির', '১৭৬৯৬৯২৬৩৭', 'মহেশখালী', '2', '6', '8', '32'),
('রাঙ্গামাটি সদর নৌ ফাঁড়ি', 'এইচ এম সালাহ উদ্দিন', '১৭৬৯৬৯২৬৪০', 'সদর', '2', '6', '8', '35'),
('টেকনাফ নৌ ফাঁড়ি', 'মোঃ ফরিদ', '১৭৬৯৬৯২৬৩৯', 'টেকনাফ', '2', '6', '8', '32'),
('কুমিরা নৌ ফাঁড়ি', 'মোঃ জাহাঙ্গির আলম', '১৭৬৯৬৯২৬২৯', 'সীতাকুণ্ড', '2', '6', '8', '33');

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
(1, 'ঢাকা ', NULL, 1, 1, 1, NULL, NULL),
(2, 'গাজীপুর ', NULL, 1, 1, 1, NULL, NULL),
(3, 'নারায়ণগঞ্জ', NULL, 1, 1, 2, NULL, NULL),
(4, 'মুন্সিগঞ্জ', NULL, 1, 1, 2, NULL, NULL),
(5, 'নরসিংদী ', NULL, 1, 1, 2, NULL, NULL),
(6, 'গাইবান্ধা', NULL, 1, 2, 3, NULL, NULL),
(7, 'সিরাজগঞ্জ', NULL, 1, 2, 3, NULL, NULL),
(8, 'জামালপুর ', NULL, 1, 2, 3, NULL, NULL),
(9, 'কুড়িগ্রাম ', NULL, 1, 2, 3, NULL, NULL),
(10, 'পাবনা', NULL, 1, 2, 4, NULL, NULL),
(11, 'রাজশাহী', NULL, 1, 2, 4, NULL, NULL),
(12, 'নীলফামারী', NULL, 1, 2, 4, NULL, NULL),
(13, 'রংপুর', NULL, 1, 2, 4, NULL, NULL),
(14, 'মাদারীপুর', NULL, 1, 3, 5, NULL, NULL),
(15, 'গোপালগঞ্জ', NULL, 1, 3, 5, NULL, NULL),
(16, 'নড়াইল', NULL, 1, 3, 5, NULL, NULL),
(17, 'মানিকগঞ্জ', NULL, 1, 3, 5, NULL, NULL),
(18, 'ফরিদপুর', NULL, 1, 3, 5, NULL, NULL),
(19, 'রাজবাড়ি', NULL, 1, 3, 5, NULL, NULL),
(20, 'কুষ্টিয়া', NULL, 1, 3, 5, NULL, NULL),
(21, 'যশোর', NULL, 1, 3, 5, NULL, NULL),
(22, 'কিশোরগঞ্জ', NULL, 1, 4, 6, NULL, NULL),
(23, 'সুনামগঞ্জ', NULL, 1, 4, 6, NULL, NULL),
(24, 'হবিগঞ্জ', NULL, 1, 4, 6, NULL, NULL),
(25, 'নেত্রকোনা', NULL, 1, 4, 6, NULL, NULL),
(26, 'ময়মনসিংহ', NULL, 1, 4, 6, NULL, NULL),
(27, 'ব্রাহ্মণবাড়িয়া', NULL, 1, 4, 6, NULL, NULL),
(28, 'চাঁদপুর', NULL, 2, 5, 7, NULL, NULL),
(29, 'লক্ষ্মীপুর', NULL, 2, 5, 7, NULL, NULL),
(30, 'শরীয়তপুর', NULL, 2, 5, 7, NULL, NULL),
(31, 'কুমিল্লা', NULL, 2, 5, 7, NULL, NULL),
(32, 'কক্সবাজার', NULL, 2, 6, 8, NULL, NULL),
(33, 'চট্টগ্রাম', NULL, 2, 6, 8, NULL, NULL),
(34, 'নোয়াখালী', NULL, 2, 6, 8, NULL, NULL),
(35, 'রাঙামাটি', NULL, 2, 6, 8, NULL, NULL),
(36, 'বান্দরবন', NULL, 2, 6, 8, NULL, NULL),
(37, 'বরিশাল', NULL, 2, 7, 9, NULL, NULL),
(38, 'ঝালকাঠি', NULL, 2, 7, 9, NULL, NULL),
(39, 'ভোলা', NULL, 2, 7, 9, NULL, NULL),
(40, 'বরগুনা', NULL, 2, 7, 10, NULL, NULL),
(41, 'পটুয়াখালী', NULL, 2, 7, 10, NULL, NULL),
(42, 'পিরোজপুর', NULL, 2, 8, 11, NULL, NULL),
(43, 'সাতক্ষীরা', NULL, 2, 8, 11, NULL, NULL),
(44, 'খুলনা', NULL, 2, 8, 11, NULL, NULL),
(45, 'বাগেরহাট', NULL, 2, 8, 11, NULL, NULL),
(46, 'টাঙ্গাইল', NULL, 1, 2, 3, NULL, NULL);

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
(1, 'উত্তর বিভাগ', '2018-08-16 01:06:33', '2018-08-16 01:06:33'),
(2, 'দক্ষিণ বিভাগ', '2018-08-16 01:07:09', '2018-08-16 01:07:09');

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
(1, 'হাসনাবাদ নৌ ফাঁড়ি', 'মোঃ লুৎফর রহমান', '০১৭৬৯৬৯২৫২৩', '3.4', '2.3', NULL, 1, 1, 1, 1, 53, '2018-09-03 06:38:51', '2018-09-03 06:38:51');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `thana_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `division_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thana`
--

INSERT INTO `thana` (`id`, `oc`, `name`, `phone`, `address`, `lat`, `long`, `division_id`, `area_id`, `zone_id`, `district_id`, `created_at`, `updated_at`, `thana_name`, `district_name`, `zone_name`, `division_name`) VALUES
(52, 'জনাব, শেখ মোঃ আব্দুর রাজ্জাক', 'সদরঘাট নৌ থানা ', '01769695222', NULL, '23.7047', '90.4161', 1, 1, 1, 1, NULL, NULL, 'কোতয়ালী', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(53, 'মোঃ লুৎফর রহমান', 'হাসনাবাদ নৌ ফাঁড়ি', '01769695223', NULL, '3.4', '2.3', 1, 1, 1, 1, NULL, NULL, 'দক্ষিণ কেরাণীগঞ্জ', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(54, 'মোঃ মিজানুর রহমান', 'কুতুবপুর নৌ ফাঁড়ি', '017696952526', NULL, '3.4', '2.3', 1, 1, 1, 1, NULL, NULL, 'দোহার', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(55, 'মোঃ আমিরুল ইসলাম', 'বরিসুর নৌ ফাঁড়ি', '017696952521', NULL, '3.4', '2.3', 1, 1, 1, 1, NULL, NULL, 'কেরাণীগঞ্জ মডেল', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(56, 'জনাব আনোয়ারুল আজম', 'ডেমরা নৌ ফাঁড়ি', '017696952524', NULL, '3.4', '2.3', 1, 1, 1, 1, NULL, NULL, 'ডেমরা', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(57, 'জনাব, আসদুজ্জামান', 'বসিলা নৌ ফাঁড়ি', '017696952520', NULL, '23.7490457', '90.341252', 1, 1, 1, 1, NULL, NULL, 'কামরাঙ্গিরচর', 'ঢাকা ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(58, 'জনাব, ফেরদৌস আলম', 'টঙ্গি নৌ ফাঁড়ি', '017696952527', NULL, '23.8878084', '90.3951616', 1, 1, 1, 2, NULL, NULL, 'টঙ্গী', 'গাজীপুর ', 'ঢাকা জোন', 'উত্তর বিভাগ'),
(59, 'জনাব, নেওয়াজ উদ্দিন', 'নারায়ণগঞ্জ সদর নৌ থানা', '01769690772', NULL, '23.6313328', '90.4119678', 1, 1, 2, 3, NULL, NULL, 'সদর থানা', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(60, 'জনাব, নাছির উদ্দিন', 'কলাগছিয়া নৌ থানা', '01769690771', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'বন্দর', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(61, 'জনাব রেজাউল ইসলাম', 'বক্তাবলী নৌ ফাঁড়ি', '01769690773', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'ফতুল্লা', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(62, 'জনাব, আব্দুল জলিল খোশনোবিশ', 'খাঁককান্দা নৌ ফাঁড়ি', '01769690774', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'আড়াইহাজর', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(63, 'জনাব, মোঃ মোস্তাফিজুর', 'বৈদ্ধের বাজার নৌ ফাঁড়ি', '017696952530', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'সোনারগাঁ', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(64, 'মোঃ মনিরুজ্জামান', 'কাঁচপুর নৌ ফাঁড়ি', '017696952529', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'সোনারগাঁ', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(65, 'মোঃ তৌহিদুর রহমান', 'ইছাপুর নৌ ফাঁড়ি', '017696952531', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'রূপগঞ্জ', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(66, 'জনাব, মোঃ শাম সুর রহমান', 'পাগলা নৌ ফাঁড়ি', '017696952528', NULL, '3.4', '2.3', 1, 1, 2, 3, NULL, NULL, 'ফতুল্লাহ', 'নারায়ণগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(67, 'মোঃ মেহেদুল', 'বংগারচর নৌ ফাঁড়ি', '01769690776', NULL, '3.4', '2.3', 1, 1, 2, 5, NULL, NULL, 'সদর থানা', 'নরসিংদী ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(68, 'আলমগীর হোসেন', 'করিমপুর নৌ ফাঁড়ি', '017696952532', NULL, '3.4', '2.3', 1, 1, 2, 5, NULL, NULL, 'সদর', 'নরসিংদী ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(69, 'মোঃ সাদিকুল ইসলাম', 'মির্জাচর নৌ ফাঁড়ি', '017696952533', NULL, '3.4', '2.3', 1, 1, 2, 5, NULL, NULL, 'রায়পুরা', 'নরসিংদী ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(70, 'মোঃ আঃ হাসিম সরকারি', 'মুক্তারপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৭৫', NULL, '3.4', '2.3', 1, 1, 2, 4, NULL, NULL, 'সদর থানা', 'মুন্সিগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(71, 'মোঃ আরমান হোসেন', 'মাওয়া নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৯৯', NULL, '3.4', '2.3', 1, 1, 2, 4, NULL, NULL, 'লৌহজং', 'মুন্সিগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(72, 'মোঃ জহিরুল ইসলাম', 'গজারিয়া নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৩৪', NULL, '3.4', '2.3', 1, 1, 2, 4, NULL, NULL, 'গজারিয়া', 'মুন্সিগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(73, 'জনাব মোঃ বাচ্চু মিয়া', 'চরআব্দুল্লাহপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৩৫', NULL, '3.4', '2.3', 1, 1, 2, 4, NULL, NULL, 'সদর', 'মুন্সিগঞ্জ', 'নারায়ণগঞ্জ জোন', 'উত্তর বিভাগ'),
(74, 'মোঃ জমশেদ', 'ভৈরব নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৭৮', NULL, '3.4', '2.3', 1, 4, 6, 22, NULL, NULL, 'ভৈরব', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(75, 'মোখলেছার রহমান', 'মিঠামইন নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৭৯', NULL, '3.4', '2.3', 1, 4, 6, 22, NULL, NULL, 'মিঠামইন', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(76, 'মোঃ আব্দুল হাই', 'চামড়া - বন্দর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭২', NULL, '3.4', '2.3', 1, 4, 6, 22, NULL, NULL, 'করিমপুর', 'কিশোরগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(77, 'মোঃ শামছুল আলম', 'ছলিমগঞ্জ নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৭৭', NULL, '3.4', '2.3', 1, 4, 6, 27, NULL, NULL, 'নীবনগর', 'ব্রাহ্মণবাড়িয়া', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(78, 'মোঃ- রাজু আহম্মদ', 'দুবাজাইল নৌ ফাঁড়ি (পানিশ্বর)', '০১৭৬৯৬৯২৫৮২', NULL, '3.4', '2.3', 1, 4, 6, 27, NULL, NULL, 'সরাইল', 'ব্রাহ্মণবাড়িয়া', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(79, 'মণি সাধ্য', 'মার্কুলী নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৮০', NULL, '3.4', '2.3', 1, 4, 6, 24, NULL, NULL, 'বানিয়াচং', 'হবিগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(80, 'মোঃ হাস নাত', 'মাদনা নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৮১', NULL, '3.4', '2.3', 1, 4, 6, 24, NULL, NULL, 'লাখাই', 'হবিগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(81, 'মোঃ আবু কাউছার', 'কাকাইলছেও নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৮২', NULL, '3.4', '2.3', 1, 4, 6, 24, NULL, NULL, 'আজমেরীগঞ্জ', 'হবিগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(82, 'মোঃ আব্দুল্লাহ আল মামুন', 'শ্যামারচর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭৩', NULL, '3.4', '2.3', 1, 4, 6, 23, NULL, NULL, 'দিরাই', 'সুনামগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(83, 'মিজানুর রহমান', 'শানবাড়ী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭৪', NULL, '3.4', '2.3', 1, 4, 6, 23, NULL, NULL, 'ধর্মপাশা', 'সুনামগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(84, 'মোঃ আনিসুর রহমান', 'লালপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭৫', NULL, '3.4', '2.3', 1, 4, 6, 23, NULL, NULL, 'জামালগঞ্জ', 'সুনামগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(85, 'মোঃ আব্দুর হান্নান', 'টুকের বাজার নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭৭', NULL, '3.4', '2.3', 1, 4, 6, 23, NULL, NULL, 'সদর', 'সুনামগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(86, 'মোঃ ইউনুছ আলী খাঁন', 'ছাতক নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৭৬', NULL, '3.4', '2.3', 1, 4, 6, 23, NULL, NULL, 'ছাতক', 'সুনামগঞ্জ', 'কিশোরগঞ্জ জোন', 'উত্তর বিভাগ'),
(87, 'জনাব, মোঃ আমিনুল ইসলাম', 'পাটুরিয়া নৌ থানা', '০১৭৬৯৬৯০৮০৩', NULL, '3.4', '2.3', 1, 3, 5, 17, NULL, NULL, 'শিবালয়', 'মানিকগঞ্জ', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(88, 'আসাদুজ্জামান', 'দৌলতদিয়া নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮০৪', NULL, '3.4', '2.3', 1, 3, 5, 19, NULL, NULL, 'গোয়ালন্দঘাট', 'রাজবাড়ি', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(89, 'মোঃ নাজমুল', 'কোতয়ালী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৩৬', NULL, '3.4', '2.3', 1, 3, 5, 18, NULL, NULL, 'কোতয়ালী', 'ফরিদপুর', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(90, 'মোঃ মালেক', 'কবিরাজপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮০১', NULL, '3.4', '2.3', 1, 3, 5, 14, NULL, NULL, 'রাজৈর', 'মাদারীপুর', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(91, 'শাহী নাজমুজ্জামান', 'কলাতলা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৩৭', NULL, '3.4', '2.3', 1, 3, 5, 14, NULL, NULL, 'শিবচর', 'মাদারীপুর', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(92, 'মোঃ শফিকুল', 'বড়দিয়া নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৪১', NULL, '3.4', '2.3', 1, 3, 5, 16, NULL, NULL, 'নরাগাতি', 'নড়াইল', 'ফরিদপুর জোন', 'উত্তর বিভাগ'),
(93, 'মোঃ আব্দুল হান্নান', 'বাহাদুরবাদ নৌ থানা', '০১৭৬৯৬৯২৫৫৬', NULL, '3.4', '2.3', 1, 2, 3, 8, NULL, NULL, 'বাহাদুরাবাদ', 'জামালপুর ', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(94, 'মোঃ শরিফুল', 'ভূঞাপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৫৫', NULL, '3.4', '2.3', 1, 2, 3, 46, NULL, NULL, 'ভুয়াপুর', 'টাঙ্গাইল', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(95, 'মোঃ শহিদুল', 'নগরবাড়ী নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮০৫', NULL, '3.4', '2.3', 1, 2, 4, 10, NULL, NULL, 'আমিনপুর', 'পাবনা', 'পাবনা জোন', 'উত্তর বিভাগ'),
(96, 'আশরাফুল ইসলাম', 'বালশিঘাট নৌ ফাঁড়ি', ' ০১৭৬৯৬৯২৫৫৮', NULL, '3.4', '2.3', 1, 2, 3, 6, NULL, NULL, 'সদর', 'গাইবান্ধা', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(97, 'জনাব, মোঃ- আতাউর রহমান', 'ফুলছড়ি নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৫৯', NULL, '3.4', '2.3', 1, 2, 3, 6, NULL, NULL, 'ফুলছড়ি', 'গাইবান্ধা', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(98, 'জনাব, বাবর আলী খান', 'বঙ্গবন্ধু সেতু পূর্ব নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৫৪', NULL, '3.4', '2.3', 1, 2, 3, 46, NULL, NULL, 'বঙ্গবন্ধু সেতু পূর্ব থানা', 'টাঙ্গাইল', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(99, 'মোঃ আবুল কালাম আজাদ', 'বঙ্গবন্ধু সেতু পশ্চিম নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৫০', NULL, '3.4', '2.3', 1, 2, 3, 7, NULL, NULL, 'বঙ্গবন্ধু সেতু পশ্চিম থানা', 'সিরাজগঞ্জ', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(100, 'মোঃ তাজিমুল', 'চৌহালি নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৫৩', NULL, '3.4', '2.3', 1, 2, 3, 7, NULL, NULL, 'চৌহালি', 'সিরাজগঞ্জ', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(101, 'জনাব, মোঃ গোলাম মস্থফা', 'চিলমারী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৬১', NULL, '3.4', '2.3', 1, 2, 3, 9, NULL, NULL, 'চিলমারী', 'কুড়িগ্রাম ', 'জামালপুর জোন', 'উত্তর বিভাগ'),
(103, 'জনাব, বেলাল হোসেন', 'বরিশাল সদর নৌ থানা', '০১৭৬৯৬৯০৮১৫', NULL, NULL, NULL, 2, 7, 9, 37, NULL, NULL, 'সদর থানা', 'বরিশাল', 'বরিশাল জোন', 'দক্ষিণ বিভাগ'),
(104, 'জনাব, পায়েল হোসেন', 'পূর্ব ইলিশা নৌ থানা', '০১৭৬৯৬৯২৬১৩', NULL, NULL, NULL, 2, 7, 9, 39, NULL, NULL, 'পূর্ব ইলিশা', 'ভোলা', 'বরিশাল জোন', 'দক্ষিণ বিভাগ'),
(105, 'মোঃ বাদল ফকির', 'নাজিরপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৩', NULL, NULL, NULL, 2, 7, 9, 37, NULL, NULL, 'মুলাদী', 'বরিশাল', 'বরিশাল জোন', 'দক্ষিণ বিভাগ'),
(106, 'মোঃ রেহাউল', 'চামটা নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৪', NULL, NULL, NULL, 2, 7, 9, 37, NULL, NULL, 'বাকেরগঞ্জ', 'বরিশাল', 'বরিশাল জোন', 'দক্ষিণ বিভাগ'),
(107, 'উত্তম', 'হিজলা নৌ ফাঁড়ি, বরিশাল', '০১৭৬৯৬৯২৬০৮', NULL, NULL, NULL, 2, 7, 9, 37, NULL, NULL, 'হিজলা', 'বরিশাল', 'বরিশাল জোন', 'দক্ষিণ বিভাগ'),
(108, 'মোঃ শাখা ও য়াত', 'কুয়াকাটা নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৭', NULL, NULL, NULL, 2, 7, 10, 41, NULL, NULL, 'কলাপাড়া', 'পটুয়াখালী', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(109, 'মোঃ আল-মামুন', 'কালাইয়া নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৮', NULL, NULL, NULL, 2, 7, 10, 41, NULL, NULL, 'বাওফল', 'পটুয়াখালী', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(110, 'সারোয়ার,', 'পায়রাবন্দর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬২২', NULL, NULL, NULL, 2, 7, 10, 41, NULL, NULL, 'মহিপুর', 'পটুয়াখালী', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(111, 'মোঃ- আতিকুর রহমান', 'পায়রাকুঞ্জ নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬২১', NULL, NULL, NULL, 2, 7, 10, 41, NULL, NULL, 'সদর', 'পটুয়াখালী', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(112, 'মোঃ সোহাগ ফকির', 'দশমিনা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬২৫', NULL, NULL, NULL, 2, 7, 10, 41, NULL, NULL, 'দশমিনা', 'পটুয়াখালী', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(113, 'মোঃ রাজ্জাক', 'চরদুয়ানী নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮২০', NULL, NULL, NULL, 2, 7, 10, 40, NULL, NULL, 'পাথরঘাটা', 'বরগুনা', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(114, 'সঞ্জয় মণ্ডল', 'কাকচিড়া নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৯', NULL, NULL, NULL, 2, 7, 10, 40, NULL, NULL, 'পাথরঘাটা', 'বরগুনা', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(115, 'আবু আব্দুল্লাহ', 'নিদ্রা সকিনা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬১৯', NULL, NULL, NULL, 2, 7, 10, 40, NULL, NULL, 'পাথরঘাটা', 'বরগুনা', 'পটুয়াখালী জোন', 'দক্ষিণ বিভাগ'),
(116, 'জনাব, মোঃ রাসেল মিয়া', 'কেএমপি নৌ থানা খুলনা', '০১৭৬৯৬৯০৭৯৬', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'সদর', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(117, 'মোঃ মনিরুল ইসলাম', 'নলিয়ান নৌ থানা', '০১৭৬৯৬৯০৭৯৫', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'দাকোপ', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(118, 'মোঃ আবুল হোসেন শরিফ', 'চাঁদপাই নৌ থানা', '০১৭৬৯৬৯০৭৯২', NULL, NULL, NULL, 2, 8, 11, 45, NULL, NULL, 'মংলা', 'বাগেরহাট', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(119, 'জনাব, অনিমেষ হালদার', 'বুড়ি গোয়ালিনী নৌ থানা', '০১৭৬৯৬৯০৭৯৭', NULL, NULL, NULL, 2, 8, 11, 43, NULL, NULL, 'শ্যামনগর', 'সাতক্ষীরা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(120, 'মোঃ কামাল হোসেন', 'ভিলাডাঙ্গা নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৯৩', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'দাকোপ', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(121, 'আসাদুজ্জামান,', 'আংটি হারা নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৯৪', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'কয়রী', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(122, 'মোঃ নজরুল ইসলাম', 'রূপসা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯৬', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'রূপসা', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(123, 'মোঃ কামাল হোসেন', 'দাকোপ নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯৪', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'দাকোপ', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(124, 'মোঃ রেজাউল করিম', 'পাইকগাছা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯৩', NULL, NULL, NULL, 2, 8, 11, 44, NULL, NULL, 'পাইকগাছা', 'খুলনা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(125, 'মন্টু কুমার দাশ', 'রায়নগর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯৭', NULL, NULL, NULL, 2, 8, 11, 43, NULL, NULL, 'শ্যামনগর', 'সাতক্ষীরা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(126, 'অতিরিক্ত দায়িত্বে আইসি রায়নগর', 'মুন্সিগঞ্জ নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯৯', NULL, NULL, NULL, 2, 8, 11, 43, NULL, NULL, 'শ্যামনগর', 'সাতক্ষীরা', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(127, 'মোঃ আস দুজ্জামান হারুন', 'বাগেরহাট সদর ফাঁড়ি', '০১৭৬৯৬৯০৭৯০', NULL, NULL, NULL, 2, 8, 11, 45, NULL, NULL, 'সদর থানা', 'বাগেরহাট', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(128, 'মোঃ বদিউজ্জামান', 'খাঁন সদর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৯১', NULL, NULL, NULL, 2, 8, 11, 45, NULL, NULL, 'শরণখোঁলা', 'বাগেরহাট', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(129, 'মোঃ শাহ্‌ আলম', 'মংলা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬০২', NULL, NULL, NULL, 2, 8, 11, 45, NULL, NULL, 'মংলা', 'বাগেরহাট', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(130, 'মোঃ শহিদুল', 'সন্যাসী নৌ ফাঁড়ী', '০১৭৬৯৬৯২৬০৩', NULL, NULL, NULL, 2, 8, 11, 45, NULL, NULL, 'রামপাল', 'বাগেরহাট', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(131, 'মোঃ তৌহিদ হাসান', 'পারেরহাট নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮১৬', NULL, NULL, NULL, 2, 8, 11, 42, NULL, NULL, 'ইন্দারকানী', 'পিরোজপুর', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(132, 'মোঃ আকবর হোসেন', 'নেছারাবাদ নৌ ফাঁড়ী', '০১৭৬৯৬৯২৫৮৯', NULL, NULL, NULL, 2, 8, 11, 42, NULL, NULL, 'নেছারাবাদ', 'পিরোজপুর', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(133, 'রাজিব কুমার', 'দৈহাড়ী বাজার নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯২', NULL, NULL, NULL, 2, 8, 11, 42, NULL, NULL, 'নেছারাবাদ', 'পিরোজপুর', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(134, 'মোঃ মোস্তফা', 'ঝাউখালী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৯১', NULL, NULL, NULL, 2, 8, 11, 42, NULL, NULL, 'পিরোজপুর', 'পিরোজপুর', 'খুলনা জোন', 'দক্ষিণ বিভাগ'),
(135, 'মোঃ রেজাউল করিম ভূইয়া', 'চাঁঁদপুর সদর নৌ থানা', '০১৭৬৯৬৯০৮২১', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'সদর চাঁদপুর', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(136, 'মোঃ মনিরুল ইসলাম', 'আলুর - বাজার নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮২২', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'সদর চাঁদপুর', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(137, 'জনাব, আবু তাহের', 'মোহনপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮২৪', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'মতলব', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(138, 'মোঃ আব্দুর রহমান ঢালি', 'নীল - কমল নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮২৩', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'হাইমচর', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(139, 'মোঃ গিয়াস উদ্দিন', 'হরিশাঘাট নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৮৩', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'সদর চাঁদপুর', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(140, 'জুয়েল', 'বেলাতলী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৮৪', NULL, NULL, NULL, 2, 5, 7, 28, NULL, NULL, 'উত্তর মতলব', 'চাঁদপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(141, 'মোঃ মতিন,', 'বড় ক্ষেরী নৌ ফাঁড়ি', '০১৭৬৯৬৯০৮২৫', NULL, NULL, NULL, 2, 5, 7, 29, NULL, NULL, 'রামগতি', 'লক্ষ্মীপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(142, 'মোঃ ইব্রাহিম', 'মজু চৌধুরি ঘাট নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৮৫', NULL, NULL, NULL, 2, 5, 7, 29, NULL, NULL, 'সদর লক্ষ্মীপুর', 'লক্ষ্মীপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(143, 'জে, এম সিরাজুল কবির', 'চলি ভাঙ্গা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৮৬', NULL, NULL, NULL, 2, 5, 7, 31, NULL, NULL, 'মেঘলা', 'কুমিল্লা', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(144, 'আলাউদ্দিন-আল মাসুম', 'সুরেশপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯০৭৯৮', NULL, NULL, NULL, 2, 5, 7, 30, NULL, NULL, 'নুড়িয়া', 'শরীয়তপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(145, 'মোঃ মহাসিন', 'নরসিংহপুর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৫৮৮', NULL, NULL, NULL, 2, 5, 7, 30, NULL, NULL, 'শরীয়তপুর সদর', 'শরীয়তপুর', 'চাঁদপুর জোন', 'দক্ষিণ বিভাগ'),
(146, 'মোঃ আনোয়ার', 'নলাচিড়া নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৩২', NULL, NULL, NULL, 2, 6, 8, 34, NULL, NULL, 'হাতিয়া', 'নোয়াখালী', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(147, 'মোঃ লিয়াকত আলী', 'নিজুম দ্বীপ নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৩৪', NULL, NULL, NULL, 2, 6, 8, 34, NULL, NULL, 'হাতিয়া', 'নোয়াখালী', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(148, 'মোঃ গোলাম মুর্শিদ সরকার', 'বদরখালী নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৩৬', NULL, NULL, NULL, 2, 6, 8, 32, NULL, NULL, 'চকরিয়া', 'কক্সবাজার', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(149, 'মোঃ নাছির', 'মাতারবাড়ি নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৩৭', NULL, NULL, NULL, 2, 6, 8, 32, NULL, NULL, 'মহেশখালী', 'কক্সবাজার', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(150, 'এইচ এম সালাহ উদ্দিন', 'রাঙ্গামাটি সদর নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৪০', NULL, NULL, NULL, 2, 6, 8, 35, NULL, NULL, 'সদর', 'রাঙামাটি', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(151, 'মোঃ ফরিদ', 'টেকনাফ নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬৩৯', NULL, NULL, NULL, 2, 6, 8, 32, NULL, NULL, 'টেকনাফ', 'কক্সবাজার', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ'),
(152, 'মোঃ জাহাঙ্গির আলম', 'কুমিরা নৌ ফাঁড়ি', '০১৭৬৯৬৯২৬২৯', NULL, NULL, NULL, 2, 6, 8, 33, NULL, NULL, 'সীতাকুণ্ড', 'চট্টগ্রাম', 'চট্টগ্রাম জোন', 'দক্ষিণ বিভাগ');

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
(1, 'Admin', 'admin@gmail.com', '$2y$10$5CmhoLKIV9CFWI0dx.wK5OrvzrOqrdzH9v6cTEwPhFwsHj1f/.CDy', 'diKtO3Ja5XcaM0QiB2dwChO6iwbphmkCjmEBgSr8UTySZvOSalH1YHTt09pC', '2018-08-13 02:19:05', '2018-08-13 02:19:05');

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
(1, 'ঢাকা জোন', NULL, 1, 1, NULL, NULL),
(2, 'নারায়ণগঞ্জ জোন', NULL, 1, 1, NULL, NULL),
(3, 'জামালপুর জোন', NULL, 1, 2, NULL, NULL),
(4, 'পাবনা জোন', NULL, 1, 2, NULL, NULL),
(5, 'ফরিদপুর জোন', NULL, 1, 3, NULL, NULL),
(6, 'কিশোরগঞ্জ জোন', NULL, 1, 4, NULL, NULL),
(7, 'চাঁদপুর জোন', NULL, 2, 5, NULL, NULL),
(8, 'চট্টগ্রাম জোন', NULL, 2, 6, NULL, NULL),
(9, 'বরিশাল জোন', NULL, 2, 7, NULL, NULL),
(10, 'পটুয়াখালী জোন', NULL, 2, 7, NULL, NULL),
(11, 'খুলনা জোন', NULL, 2, 8, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fari`
--
ALTER TABLE `fari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `thana`
--
ALTER TABLE `thana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
