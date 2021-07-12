-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 03:57 PM
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
(1, 'walid', 'admin@gmail.com', '2021-07-09 15:45:37', '$2y$10$Y/WnO9AozaA2/oGe3NpCZ.J8A1WH1tRr0YJdDh8p1WGLnRWfl0nzC', 'xFjrEzetCV3ocltszQfblHqVosCsR9ERILhZi27BPFIEjAP30CC4z2FNpPOj', '2021-07-09 15:45:37', '2021-07-09 15:45:37');

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
(1, 'Et aliquam laborum et sit aliquid non.', 'et-aliquam-laborum-et-sit-aliquid-non', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(2, 'Eum ducimus quis similique est illo ab.', 'eum-ducimus-quis-similique-est-illo-ab', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(3, 'Quia non ut sequi autem et nihil.', 'quia-non-ut-sequi-autem-et-nihil', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(4, 'Modi blanditiis accusamus totam nesciunt et nam sed.', 'modi-blanditiis-accusamus-totam-nesciunt-et-nam-sed', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(5, 'Perspiciatis voluptatem omnis laudantium consequatur est.', 'perspiciatis-voluptatem-omnis-laudantium-consequatur-est', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(6, 'Corrupti rerum voluptas ipsa magni accusantium voluptas.', 'corrupti-rerum-voluptas-ipsa-magni-accusantium-voluptas', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(7, 'Dolorum aliquid maxime fugiat perspiciatis rerum et reiciendis.', 'dolorum-aliquid-maxime-fugiat-perspiciatis-rerum-et-reiciendis', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(8, 'Ut quaerat molestias sunt magnam.', 'ut-quaerat-molestias-sunt-magnam', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(9, 'Sunt occaecati et voluptatem et consequuntur ducimus ut.', 'sunt-occaecati-et-voluptatem-et-consequuntur-ducimus-ut', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(10, 'Quos et velit numquam non at soluta.', 'quos-et-velit-numquam-non-at-soluta', '2021-07-09 15:45:37', '2021-07-09 15:45:37');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_05_085656_create_categories_table', 1),
(5, '2021_07_05_094306_create_products_table', 1),
(6, '2021_07_05_132217_create_orders_table', 1),
(7, '2021_07_05_144527_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT 0,
  `delivered` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_name`, `qty`, `price`, `total`, `paid`, `delivered`, `created_at`, `updated_at`) VALUES
(1, 2, 'Accusantium debitis ex ut similique sint magni.', 5, '781.00', '2403.00', 0, 1, '2021-07-09 15:45:37', '2021-07-11 10:55:11'),
(2, 1, 'Cupiditate nesciunt qui fugiat necessitatibus tempore tempore.', 8, '572.00', '8396.00', 1, 1, '2021-07-09 15:45:37', '2021-07-11 11:35:35');

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
(1, 'Est molestiae aut molestias est eveniet iste praesentium.', 'est-molestiae-aut-molestias-est-eveniet-iste-praesentium', 'Autem consectetur at maiores odio voluptatem. Ducimus inventore laborum et veniam non dicta quaerat. Similique ullam molestiae officiis qui eum eum. Vero rerum omnis voluptas. Totam distinctio animi cupiditate.', '496.00', '152.00', 4, 'https://lorempixel.com/640/480/?10405', 9, '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(2, 'Magnam quaerat assumenda itaque vel sit.', 'magnam-quaerat-assumenda-itaque-vel-sit', 'Ea hic molestiae et ut est dolorum illum. Similique consequatur vel quae iure sunt. Ut dolorum occaecati est excepturi. Atque fugiat aut blanditiis facilis culpa est odit.', '721.00', '677.00', 9, 'images/allproducts/1626096808_199163979_279157230471607_4070459985950598155_n.jpg', 7, '2021-07-09 15:45:37', '2021-07-12 12:33:28'),
(3, 'Deserunt ut nihil temporibus.', 'deserunt-ut-nihil-temporibus', 'Aperiam rem nesciunt placeat facere illum quis. Magni dolorem cum magnam modi. Nihil aut inventore doloribus molestias molestiae.', '377.00', '827.00', 3, 'https://lorempixel.com/640/480/?18892', 3, '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(8, 'Impedit molestiae sint rem aut ducimus delectus odio.', 'impedit-molestiae-sint-rem-aut-ducimus-delectus-odio', 'Nostrum labore qui odit ut facilis dolores. Dolorem autem quaerat repellendus cum consequatur tempore nostrum quia. Enim ut provident minima inventore reprehenderit impedit.', '232.00', '564.00', 3, 'https://lorempixel.com/640/480/?36145', 9, '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(9, 'Est fugit illum blanditiis velit et ipsam.', 'est-fugit-illum-blanditiis-velit-et-ipsam', 'Ut eligendi mollitia eos laudantium distinctio animi omnis. Molestiae sed consequatur quas. Aut voluptas aspernatur libero aut sapiente. Et atque sed reprehenderit accusamus accusantium nemo doloremque.', '423.00', '256.00', 9, 'https://lorempixel.com/640/480/?93009', 4, '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(13, 'APOTHEOSISpppppp', 'apotheosispppppp', 'allproductsallproductsallproductsallproductsallproductsaza', '7.00', '14.00', 10, 'images/allproducts/1626083136_177748872_292015745833675_9128051887261908229_n.jpg', 6, '2021-07-12 08:45:36', '2021-07-12 12:25:32');

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
(1, 'Doug Ward', 'schiller.junius@example.org', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'XMa17SdRZwnzJ3PDezRWzOzABml5Q4U476aIrPaMBSeVrhDuxbRwKIF9wDyC', '2021-07-09 15:45:36', '2021-07-09 15:45:36'),
(2, 'Norberto Rolfson', 'hayley.becker@example.org', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'VNECeruKmF', '2021-07-09 15:45:36', '2021-07-09 15:45:36'),
(3, 'Marcella Powlowski', 'lkihn@example.com', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'WI1aewfcfs', '2021-07-09 15:45:36', '2021-07-09 15:45:36'),
(4, 'Georgette Purdy', 'jazmin.kuhic@example.org', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'N1NYqj0PXG4BZWfsrPpscue8LS0w0I6qP2VaOVoanIzMTTpxz5TzsNZv1G4C', '2021-07-09 15:45:36', '2021-07-09 15:45:36'),
(5, 'Dario Leffler DDS', 'greg.damore@example.net', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'wVRIniAosV', '2021-07-09 15:45:36', '2021-07-09 15:45:36'),
(6, 'Mikayla Ankunding', 'dooley.june@example.org', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'j9EcpEGFXm', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(7, 'Henri Hammes IV', 'earnestine86@example.org', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'uQMXOknAg1', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(8, 'Ms. Kylee Romaguera', 'richie56@example.com', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'm6YGmlPJc5', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(9, 'Prof. Thelma Stark PhD', 'ikoepp@example.com', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'NT1PFaGkGF', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(10, 'Michel Sauer', 'jared69@example.net', '2021-07-09 15:45:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'OzHld3jTsf', '2021-07-09 15:45:37', '2021-07-09 15:45:37'),
(12, 'user', 'user@gmail.com', NULL, '$2y$10$4wG86akPDBaycaG08pvIuOdviuTl.733z92zU92tnWL/d5C.vFcRu', NULL, NULL, NULL, '0', NULL, NULL, '2021-07-10 10:35:43', '2021-07-10 10:35:43');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
