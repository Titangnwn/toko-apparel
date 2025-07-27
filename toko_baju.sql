-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 18, 2025 at 09:12 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_baju`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_0ade7c2cf97f75d009975f4d720d1fa6c19f4897', 'i:1;', 1752655459),
('laravel_cache_0ade7c2cf97f75d009975f4d720d1fa6c19f4897:timer', 'i:1752655459;', 1752655459),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1752827373),
('laravel_cache_livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1752827373;', 1752827373);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_06_28_100326_create_produks_table', 1),
(5, '2025_07_04_014249_create_users_table', 2),
(6, '2025_07_04_021050_add_role_to_users_table', 2),
(7, '2025_07_04_025139_add_role_to_users_table', 3),
(8, '2025_07_16_065830_create_transactions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int NOT NULL,
  `stok` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produks`
--

INSERT INTO `produks` (`id`, `nama`, `deskripsi`, `gambar`, `harga`, `stok`, `created_at`, `updated_at`) VALUES
(5, 'Jersey Panser Home 24/25', 'bahan nyaman', 'produk-gambar/home.webp', 200, 2, '2025-07-16 00:09:13', '2025-07-17 21:29:18'),
(6, 'jersey panser away 24/25', 'bahan nyaman', 'produk-gambar/away.webp', 250, 1, '2025-07-16 00:10:10', '2025-07-16 01:40:16'),
(8, 'jersey special', 'nyaman', 'produk-gambar/special.jpg', 200, 2, '2025-07-16 01:43:34', '2025-07-16 01:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('m5guPu1SgvuGYZl4G54lxeIUse23d4MrHdtAvPsR', 11, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYzZ6b3ozYUttVUxKNW8zd1BSdUo5MUFIMWNYakZyWFNpZVd1YWRSeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZXJhbmphbmciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxMTtzOjQ6ImNhcnQiO2E6MTp7aToxO2E6NDp7czo0OiJuYW1lIjtzOjI0OiJKZXJzZXkgUGFuc2VyIEhvbWUgMjQvMjUiO3M6NToicHJpY2UiO3M6NjoiMjAwMDAwIjtzOjg6InF1YW50aXR5IjtpOjE7czo1OiJpbWFnZSI7czozODoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Fzc2V0cy9ob21lLndlYnAiO319fQ==', 1752829870);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `total` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `product_name`, `price`, `quantity`, `total`, `image`, `user_email`, `created_at`, `updated_at`) VALUES
(1, 'Jersey Panser away 24/25', 250000, 1, 250000, 'http://127.0.0.1:8000/assets/away.webp', 'mimi123@gmail.com', '2025-07-16 00:07:21', '2025-07-16 00:07:21'),
(2, 'Jersey Panser away 24/25', 250000, 1, 250000, 'http://127.0.0.1:8000/assets/away.webp', 'mimi123@gmail.com', '2025-07-16 00:12:19', '2025-07-16 00:12:19'),
(3, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:16:28', '2025-07-16 00:16:28'),
(4, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:17:25', '2025-07-16 00:17:25'),
(5, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:17:33', '2025-07-16 00:17:33'),
(6, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:19:51', '2025-07-16 00:19:51'),
(7, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:25:08', '2025-07-16 00:25:08'),
(8, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:25:17', '2025-07-16 00:25:17'),
(9, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:25:36', '2025-07-16 00:25:36'),
(10, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:25:40', '2025-07-16 00:25:40'),
(11, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:26:14', '2025-07-16 00:26:14'),
(12, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:26:25', '2025-07-16 00:26:25'),
(13, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:28:55', '2025-07-16 00:28:55'),
(14, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:30:02', '2025-07-16 00:30:02'),
(15, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 00:31:21', '2025-07-16 00:31:21'),
(16, 'Jersey Panser away 24/25', 250000, 1, 250000, 'http://127.0.0.1:8000/assets/away.webp', 'asep@gmail.com', '2025-07-16 00:34:34', '2025-07-16 00:34:34'),
(17, 'Jersey Panser away 24/25', 250000, 1, 250000, 'http://127.0.0.1:8000/assets/away.webp', 'asep@gmail.com', '2025-07-16 01:29:24', '2025-07-16 01:29:24'),
(18, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'asep@gmail.com', '2025-07-16 01:30:19', '2025-07-16 01:30:19'),
(19, 'Jersey Panser Home 24/25', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/home.webp', 'mimi123@gmail.com', '2025-07-16 01:38:21', '2025-07-16 01:38:21'),
(20, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 01:38:49', '2025-07-16 01:38:49'),
(21, 'Jersey Panser away 24/25', 250000, 1, 250000, 'http://127.0.0.1:8000/assets/away.webp', 'mimi123@gmail.com', '2025-07-16 01:40:16', '2025-07-16 01:40:16'),
(22, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 01:40:40', '2025-07-16 01:40:40'),
(23, 'Jersey special dari panser', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/special.webp', 'mimi123@gmail.com', '2025-07-16 01:44:07', '2025-07-16 01:44:07'),
(24, 'Jersey Panser Home 24/25', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/home.webp', 'mimi123@gmail.com', '2025-07-17 21:26:04', '2025-07-17 21:26:04'),
(25, 'Jersey Panser Home 24/25', 200000, 1, 200000, 'http://127.0.0.1:8000/assets/home.webp', 'mimi123@gmail.com', '2025-07-17 21:26:38', '2025-07-17 21:26:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@example.com', '$2y$12$ng9l.5NJrxPr9dn16htygekhuh5QuRirrmcq5O9OOI5wtkXa1Y/vq', '2025-07-03 19:17:31', '2025-07-03 19:17:31', 'admin'),
(2, 'zal', 'zeus.farizal@gmail.com', '$2y$12$uCBi/au3x0HYLAqq839KluwvDsuQn9CYLy39FKLyUxR5Uf/2.8csC', '2025-07-03 20:09:41', '2025-07-03 20:09:41', 'user'),
(3, 'udin', 'udin@gmail.com', '$2y$12$cuhJjF9HGk6SWFUuPjeR1uo2nymaNhHW97aCFGGvY6sgMjv3Za3aq', '2025-07-03 20:54:00', '2025-07-03 20:54:00', 'user'),
(6, 'Admin 1', 'admin1@example.com', '$2y$12$0j2gm4fMWO3zAxwz1EyOwuJo7v53YjR74Ckcj3YX2LEsIHNAUKnna', NULL, NULL, 'admin'),
(8, 'Admin 2', 'titan.farizal@gmail.com', '$2y$12$46sTe3.i2Fp57joEuEHMS.bOGFe3NGKTfeaZtZifb2vx8wMmVCUam', NULL, NULL, 'admin'),
(9, 'mimi', 'mimi123@gmail.com', '$2y$12$B7ckL0TgM6qU9xVz581Dyu3xto2m9tx1OFSgxH0Wd1Ci7dP8WggAm', '2025-07-04 03:39:11', '2025-07-10 05:05:41', 'user'),
(10, 'titan', 'titan@gmail.com', '$2y$12$NnUI2R1T.RG/H3pDiGyar.OiN0wj3LRYq94gWmd5J579xiwWrEFXS', '2025-07-09 20:40:23', '2025-07-09 20:41:04', 'user'),
(11, 'asep', 'asep@gmail.com', '$2y$12$TVTXN04Yt7OSAci9.JWOqes1JwU4nefNP99lyzCWIPkclW4TdcBu.', '2025-07-16 00:33:40', '2025-07-16 00:33:40', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
