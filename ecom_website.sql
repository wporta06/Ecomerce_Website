-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 10:21 AM
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
(1, 'walid', 'admin@gmail.com', '2021-07-05 21:55:59', '$2y$10$LgJ6dfWuGvAjj/TtNXNHl.j6zmbYEBO0xGBrFkbO1hGage7N0YwN6', 'SWwu10CM0X', '2021-07-05 21:56:00', '2021-07-05 21:56:00');

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
(1, 'Voluptatem ducimus amet illo nihil sit debitis.', 'voluptatem-ducimus-amet-illo-nihil-sit-debitis', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(2, 'Corporis quo perferendis et nam et eum repellat.', 'corporis-quo-perferendis-et-nam-et-eum-repellat', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(3, 'Hic officia error recusandae ipsum.', 'hic-officia-error-recusandae-ipsum', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(4, 'Ut et voluptates commodi quasi vero sapiente cum aut.', 'ut-et-voluptates-commodi-quasi-vero-sapiente-cum-aut', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(5, 'Placeat recusandae quaerat pariatur id eligendi.', 'placeat-recusandae-quaerat-pariatur-id-eligendi', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(6, 'Illo et praesentium iste.', 'illo-et-praesentium-iste', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(7, 'Tenetur nulla dolor culpa.', 'tenetur-nulla-dolor-culpa', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(8, 'Ut ad qui libero dignissimos dolor.', 'ut-ad-qui-libero-dignissimos-dolor', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(9, 'Ea doloribus eos asperiores incidunt ut ea.', 'ea-doloribus-eos-asperiores-incidunt-ut-ea', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(10, 'Minima quam quod quam omnis fuga illo.', 'minima-quam-quod-quam-omnis-fuga-illo', '2021-07-05 21:51:36', '2021-07-05 21:51:36');

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

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Rem reprehenderit doloremque modi explicabo veritatis esse consequuntur.', 'rem-reprehenderit-doloremque-modi-explicabo-veritatis-esse-consequuntur', 'Dolorem nemo quisquam inventore in. Dolores recusandae suscipit voluptas vel aut repellendus.', '253.00', '812.00', 3, 'https://lorempixel.com/640/480/?64244', 4, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(2, 'Impedit repellat qui consequatur et.', 'impedit-repellat-qui-consequatur-et', 'Magnam sit sint enim rerum reiciendis debitis. Quia ut et corporis recusandae corrupti. Maiores non exercitationem culpa qui.', '872.00', '345.00', 4, 'https://lorempixel.com/640/480/?30741', 7, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(3, 'Recusandae et architecto incidunt facilis atque sit et.', 'recusandae-et-architecto-incidunt-facilis-atque-sit-et', 'Qui ut quia ut porro. Hic odit vero ut sunt.', '299.00', '530.00', 3, 'https://lorempixel.com/640/480/?44930', 8, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(4, 'Facilis voluptate aperiam et velit dolores odit itaque.', 'facilis-voluptate-aperiam-et-velit-dolores-odit-itaque', 'Veniam omnis aut omnis ut qui corporis sed. Repellat voluptas accusantium adipisci asperiores odio blanditiis autem sequi. Perferendis inventore incidunt doloremque quis.', '148.00', '192.00', 5, 'https://lorempixel.com/640/480/?90684', 2, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(5, 'Illo accusantium est numquam qui ullam libero sit.', 'illo-accusantium-est-numquam-qui-ullam-libero-sit', 'Vero laudantium ut qui asperiores possimus voluptates explicabo. Recusandae voluptatum ut quod. Eos recusandae et possimus optio. Eum rerum omnis incidunt aliquid.', '424.00', '840.00', 10, 'https://lorempixel.com/640/480/?80032', 6, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(6, 'Maiores non consectetur illum dolor.', 'maiores-non-consectetur-illum-dolor', 'Possimus tempora maiores in unde omnis. Totam incidunt ducimus non qui dignissimos doloremque. Adipisci et inventore enim in repudiandae sed quam est. Ut modi rem consequatur.', '224.00', '409.00', 6, 'https://lorempixel.com/640/480/?98006', 9, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(7, 'Aut vel et officiis nemo sint maxime.', 'aut-vel-et-officiis-nemo-sint-maxime', 'Repudiandae ut ut in autem quos quas. Ducimus vero earum facere nam. Voluptas qui eligendi quo voluptatem quia. Molestias provident incidunt velit.', '122.00', '685.00', 1, 'https://lorempixel.com/640/480/?17990', 3, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(8, 'Dignissimos veniam ut deleniti quasi.', 'dignissimos-veniam-ut-deleniti-quasi', 'Ratione expedita est id hic enim. Quia nam rem ipsam. Sed culpa sit labore voluptas voluptatem voluptatem temporibus quas. Id quo tempore ad consectetur.', '240.00', '552.00', 3, 'https://lorempixel.com/640/480/?34448', 7, '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(9, 'Optio sed unde sunt dignissimos.', 'optio-sed-unde-sunt-dignissimos', 'Suscipit accusantium delectus fuga non sit nostrum animi. Ut aut aspernatur quas officia distinctio porro. Nisi consequatur velit exercitationem sit temporibus modi maiores.', '589.00', '312.00', 9, 'https://lorempixel.com/640/480/?29714', 7, '2021-07-05 21:51:36', '2021-07-05 21:51:36');

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
(1, 'Raymond Satterfield', 'declan.miller@example.org', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'hBCFeDmZlD', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(2, 'Sigrid Hintz', 'edwina56@example.org', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'PJEhLyHaLY', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(3, 'Mrs. Betty Barrows III', 'kohler.kassandra@example.com', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'lD32gqaTY7', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(4, 'Albin Kautzer IV', 'yquitzon@example.org', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'yw1S7ahXvB', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(5, 'Keely Ferry', 'stanley30@example.net', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'xIJygBn4to', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(6, 'Joel Morissette Sr.', 'chaim.walter@example.com', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'NkLXswwuEQ', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(7, 'Consuelo Klein', 'fay.nichole@example.com', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, '0CvPrMX1NH', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(8, 'Tanner Langworth', 'lorenzo.goldner@example.net', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'cEMr08kHhx', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(9, 'Prof. Wanda Legros', 'keshawn.schiller@example.com', '2021-07-05 21:51:36', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, '0', NULL, 'QTTNEA5dPd', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(10, 'Carole Hermiston IV', 'erdman.catherine@example.net', '2021-07-05 21:51:36', 'walid', NULL, NULL, NULL, '0', NULL, 'wYCAhEMlN4', '2021-07-05 21:51:36', '2021-07-05 21:51:36'),
(11, 'walid bouhlla', 'portawalid@gmail.com', NULL, '$2y$10$wwf1XW7JALU2wXG/TboWvOpnVPSZuENra6z4IuteMLm2mj5Zx5KwK', NULL, NULL, NULL, '0', NULL, 'MPE7URHvoLsElhn122n222PVVcxLLEWX3fHoqHo6t357mxteUVdvHbmZMVnG', '2021-07-07 09:34:11', '2021-07-07 09:34:11'),
(12, 'walid', 'walid@gmail.com', NULL, '$2y$10$RZbHocLsx0Zr4FKfmBBOgOQOcAPx7m0k0.fA/y7h2bJp/j0j9nCxm', NULL, NULL, NULL, '0', NULL, NULL, '2021-07-07 09:45:18', '2021-07-07 09:45:18'),
(13, 'walid2', 'walid2@gmail.com', NULL, '$2y$10$2xxaC6BkdyYnM7ENlg6.veFtPrpXExTL7crCpuqZ2m2zNKD2BVSgq', NULL, NULL, NULL, '0', NULL, NULL, '2021-07-07 09:50:11', '2021-07-07 09:50:11');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
