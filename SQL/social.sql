-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2018 at 08:02 AM
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
-- Database: `social`
--

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
(3, '2018_01_12_025851_create_posts_table', 1),
(4, '2018_01_14_221715_user_id_inside_posts', 2),
(5, '2018_01_15_023639_add_post_image_inside_posts', 3);

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
('gida@gmail.com', '$2y$10$Z9rz4teFp6lByRo0LhsoTeXERKaung/8.JVbOVdY29X8G7y7EOzUq', '2018-01-15 04:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `subject`, `firstname`, `lastname`, `body`, `created_at`, `updated_at`, `user_id`, `post_image`) VALUES
(38, 'Laravel', 'Ahmed', 'Hassan', '<h1><q><em><strong>I am a beginner in laravel</strong></em></q></h1>', '2018-01-15 04:25:11', '2018-01-15 04:25:11', 1, '1_1515997511.png'),
(39, 'PHP Developer', 'Ahmed', 'Hassan', '<h1><cite><q><em><strong>I am begenner in PhP MVC</strong></em></q></cite></h1>', '2018-01-15 04:26:16', '2018-01-15 04:26:16', 1, 'php_1515997576.jpg'),
(40, 'SAP Develober', 'Ahmed', 'Hassan', '<h1><kbd><em><strong>Essam Is SAP Developer in Toshiba</strong></em></kbd></h1>', '2018-01-15 04:27:14', '2018-01-15 04:27:14', 1, 'noImage.jpg'),
(41, 'Android Developer', 'Mohamed', 'Abd el Megid', '<h1><samp><span class=\"marker\"><s><em><strong>Gida is Android developer</strong></em></s></span></samp></h1>', '2018-01-15 04:30:45', '2018-01-15 04:30:45', 2, 'slide-1_1515997845.jpg'),
(42, 'IOS Developer', 'Omar', 'Faramawi', '<h1><tt><em><strong>Omar want to be IOS Developer</strong></em></tt></h1>', '2018-01-15 04:32:43', '2018-01-15 04:32:43', 2, 'og_1515997963.png'),
(43, 'SAP Develober', 'Mohammed', 'Essam', '<h2><cite><em><strong>Essam works as Sap developer&nbsp;</strong></em></cite></h2>', '2018-01-15 04:34:58', '2018-01-15 04:34:58', 2, 'unnamed_1515998098.png'),
(44, 'PHP Developer', 'Mohamed', 'HaNa', '<p>Hana is PHP developer</p>', '2018-01-15 04:35:48', '2018-01-15 04:35:48', 2, 'noImage.jpg');

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
(1, 'ahmed', 'ahmed25.ah@gmail.com', '$2y$10$0sJWZBH8/LO.E3jFJLR1zOLRrtkR3emO/E4X3sj.hR2r.UCCi3oIW', 'F9reY5zEdVwb6WcIAZAlWsMo6Dxr0pYlJX42emGdKhOxMCmUEHD3HoCW2o3E', '2018-01-14 19:16:57', '2018-01-14 19:16:57'),
(2, 'gida', 'gida@gmail.com', '$2y$10$zgNhhhjULIqQr3FJe5pTju7DSAh2ms0ydRd2AP9UtGfs/2NPFS6Tu', 'jWBS96yojp0q8f6StMGLZGcLYjKs3AHCPUrY8u3801Z4TWYASeRVn27oxeAU', '2018-01-14 22:19:28', '2018-01-14 22:19:28');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
