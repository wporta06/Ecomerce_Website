-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 05:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'walid', 'admin@gmail.com', '2021-07-09 14:45:37', '$2y$10$Y/WnO9AozaA2/oGe3NpCZ.J8A1WH1tRr0YJdDh8p1WGLnRWfl0nzC', 'unuaIdWoFMoesMyJqSMuDELk9JYwzGga9Frrn6TBYe53FRx3QSpMemrz14Pr', '2021-07-09 14:45:37', '2021-07-09 14:45:37');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Hiking Bags', 'hiking-bags', NULL, NULL),
(2, 'Boots', 'boots', NULL, NULL),
(3, 'Tents Sleeping Bag', 'tents-sleeping-bag', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2021_07_05_085656_create_categories_table', 1),
(26, '2021_07_05_094306_create_products_table', 1),
(27, '2021_07_05_132217_create_orders_table', 1),
(28, '2021_07_05_144527_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `total` decimal(8,2) DEFAULT NULL,
  `delivered` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `fullname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonenumber` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_name`, `qty`, `price`, `total`, `delivered`, `created_at`, `updated_at`, `fullname`, `address`, `phonenumber`, `note`) VALUES
(127, 2, 'Alterra fg gtx hiking boots mens', 1, '150.00', '150.00', 0, '2021-07-29 07:58:40', '2021-07-29 08:39:56', 'walid bouhlla', 'bloc kristina n s4', '+212620014314', 'sasa'),
(128, 2, 'Terra 65 Backpack', 1, '300.00', '300.00', 0, '2021-07-29 07:58:40', '2021-07-29 08:39:56', 'walid bouhlla', 'bloc kristina n s4', '+212620014314', 'sasa'),
(129, 2, 'Alterra fg gtx hiking boots mens', 1, '150.00', '150.00', 0, '2021-07-29 08:40:13', '2021-07-29 08:40:20', 'walid bouhlla', 'bloc kristina n s4', '+212620014314', 'eara'),
(130, 2, 'Terra 65 Backpack', 1, '300.00', '300.00', 0, '2021-07-29 10:25:43', '2021-07-29 10:25:43', NULL, NULL, NULL, NULL),
(131, 2, 'outback 500 gtx hiking boots mens', 2, '150.00', '300.00', 0, '2021-07-29 10:25:43', '2021-07-29 10:25:43', NULL, NULL, NULL, NULL),
(132, 2, 'Futura Vario 45 + 10 SL Pack - Women\'s', 1, '350.00', '350.00', 0, '2021-07-29 10:25:43', '2021-07-29 10:25:43', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `old_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `inStock` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `price`, `old_price`, `inStock`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Terra 65 Backpack', 'terra-65-backpack', 'Bulk-free technical pack made lighter for all-day comfort on the move.', '300.00', '350.00', 9, 'images/allproducts/1627308446_1626893946_bc1.jpg', 1, '2021-07-26 13:07:26', '2021-07-26 13:07:26'),
(2, 'outback 500 gtx hiking boots mens', 'outback-500-gtx-hiking-boots-mens', 'The women\'s Salomon Outback 500 GTX hiking boots combine the rugged protection you expect with the nimbleness you want to keep hiking, mile after mile. Tough as nails. Light as a feather.', '150.00', '200.00', 10, 'images/allproducts/1627310901_1626894418_b1.jpg', 2, '2021-07-26 13:48:21', '2021-07-26 13:48:21'),
(3, 'Weekender tent 3', 'weekender-tent-3', 'For car camping or even backpacking, the Alpine Mountain Gear Weekender', '250.00', '300.00', 9, 'images/allproducts/1627311383_1626894967_tent.jpg', 3, '2021-07-26 13:56:23', '2021-07-26 13:57:16'),
(4, 'Alterra fg gtx hiking boots mens', 'alterra-fg-gtx-hiking-boots-mens', 'Versatile trekking model, designed for medium difficulty and duration trekking over mixed terrain.', '150.00', '199.00', 10, 'images/allproducts/1627311560_1626896602_ad.jpg', 2, '2021-07-26 13:59:20', '2021-07-26 13:59:20'),
(5, 'SCARPA - ZG Trek GTX', 'scarpa-zg-trek-gtx', 'A waterproof walking boot for those difficult trips - the ZG Trek GTX from Scarpa is a reliable boot built for all-year-round use on tough trails.', '129.00', '179.00', 9, 'images/allproducts/1627311658_1626896520_kl.jpg', 2, '2021-07-26 14:00:58', '2021-07-26 14:00:58'),
(7, 'DRAGON BALL SUPER', 'dragon-ball-super', 'zaazd', '11.00', '4.00', 3, 'images/allproducts/1627315163_1626895470_T2.jpg', 3, '2021-07-26 14:59:23', '2021-07-29 07:44:09'),
(8, 'Futura Vario 45 + 10 SL Pack - Women\'s', 'futura-vario-45-10-sl-pack-womens', 'A spacious women’s backpack for long mountain tours or pilgrimages and trekking tours. The VariSlide System guarantees', '350.00', '400.00', 7, 'images/allproducts/1627546779_1626896262_b2.jpg', 1, '2021-07-29 07:19:39', '2021-07-29 07:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `city`, `country`, `active`, `code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user@gmail.com', NULL, '$2y$10$d5TD5oFpaKtou5NwL1S7E.c/Us5SshxhcX6UiG8mHFkGuS/LMxEwy', NULL, NULL, NULL, '0', NULL, NULL, '2021-07-26 13:08:23', '2021-07-26 13:08:23'),
(2, 'user2', 'user2@gmail.com', NULL, '$2y$10$zgAD9xweU.ksGxq.EXx9M.504yV5vmuCHSlFngR0xTfEM17B1shRW', NULL, NULL, NULL, '0', NULL, NULL, '2021-07-28 07:14:41', '2021-07-28 07:14:41');

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
