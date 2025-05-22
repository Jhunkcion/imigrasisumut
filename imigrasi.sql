-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2025 at 04:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imigrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Kantor Imigrasi Sumatera Utara merupakan unit pelaksana teknis di bawah naungan Direktorat Jenderal Imigrasi, Kementerian Hukum dan Hak Asasi Manusia Republik Indonesia. Kantor ini memiliki peran strategis dalam menyelenggarakan layanan keimigrasian serta pengawasan terhadap lalu lintas orang, baik Warga Negara Indonesia (WNI) maupun Warga Negara Asing (WNA) yang keluar masuk wilayah Sumatera Utara.\r\nSebagai gerbang utama dalam hal administrasi dan pengawasan keimigrasian, Kantor Imigrasi Sumut terus berkomitmen untuk memberikan pelayanan publik yang cepat, transparan, akuntabel, dan humanis, sejalan dengan semangat reformasi birokrasi dan peningkatan kualitas pelayanan publik.\r\nTugas dan Fungsi:\r\nPelayanan Keimigrasian, seperti penerbitan paspor bagi WNI dan dokumen izin tinggal bagi WNA.\r\nPengawasan Keimigrasian, yang mencakup pengawasan terhadap orang asing dan penegakan hukum keimigrasian.\r\nPemberian Izin Tinggal dan Alih Status Keimigrasian bagi orang asing.\r\nPelayanan Keimigrasian di Pelabuhan dan Bandara yang berada di wilayah kerja Kantor Imigrasi Sumut.\r\nEdukasi dan Sosialisasi mengenai aturan dan kebijakan keimigrasian kepada masyarakat.\r\nVisi:\r\n“Menjadi institusi keimigrasian yang profesional, terpercaya, dan berstandar dunia.”\r\nMisi:\r\nMemberikan pelayanan keimigrasian yang berkualitas, cepat, dan tanpa diskriminasi.\r\nMeningkatkan pengawasan terhadap keberadaan dan kegiatan orang asing di wilayah Sumatera Utara.\r\nMenegakkan hukum keimigrasian secara tegas dan adil.\r\nMendorong peran serta masyarakat dalam pengawasan keimigrasian.', '1747556243_logo2.png', NULL, '2025-05-18 01:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `content`, `tanggal`, `created_at`, `updated_at`) VALUES
(2, 'Hari Kebangkitan Nasional', 'Testing', '2025-05-20', '2025-05-20 09:15:47', '2025-05-20 09:15:47');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('PUBLISH','DRAFT') NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('draft','publish') NOT NULL DEFAULT 'draft',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `judul`, `konten`, `gambar`, `tanggal`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Kebanjiran', 'sdsdsd', 'beritas/M8iOYHeQidumOR4AosG2NRXRXsguYzNk5Ov24pXJ.jpg', '2025-05-21', 'publish', '2025-05-21 20:56:21', '2025-05-21 20:56:31'),
(4, 'dasda', 'asdssa', 'beritas/QBgS4xp9O09zvmt9IX29Q5AqwjgA5vboxQZFZcVE.jpg', '2025-05-30', 'publish', '2025-05-21 21:04:42', '2025-05-21 21:12:21'),
(5, 'Kebanjiran', 'sdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddadsdsadaddad', 'beritas/487ZkoFTikgxr6FcmqLLvYayMfGICiJv2xIWz0NG.jpg', '2025-05-24', 'publish', '2025-05-21 21:33:33', '2025-05-22 01:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('PUBLISH','DRAFT') NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `delete_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_11_075559_create_categories_table', 1),
(5, '2020_01_15_073458_create_articles_table', 1),
(6, '2020_01_22_031636_create_article_category_table', 1),
(7, '2020_01_23_045449_create_abouts_table', 1),
(8, '2020_02_04_154106_add_description_table_categories', 1),
(9, '2020_02_06_142620_create_destinations_table', 1),
(10, '2025_05_15_162640_create_beritas_table', 1),
(11, '2025_05_17_183122_create_pengumumen_table', 2),
(12, '2025_05_18_052141_create_services_table', 3),
(13, '2025_05_20_035017_update_pengumuman_table', 4),
(15, '2025_05_20_035124__pengumuman_table', 5),
(16, '2025_05_20_040310_create_pengumuman_table', 6),
(17, '2025_05_20_151514_create_announcements_table', 7),
(18, '2025_05_20_155046_create_visitors_table', 8),
(19, '2025_05_22_045530_add_user_agent_and_url_to_visitors_table', 9),
(20, '2025_05_22_050736_add_user_agent_and_url_to_visitors_table', 10),
(21, '2025_05_22_062747_add_device_to_visitors_table', 11),
(22, '2025_05_22_065643_add_platform_browser_to_visitors_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$fm8aWddTlemt38pophVJsOXKT5c32ZR9puiiWjzbCvygbnUwVePH.', '2025-05-20 08:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` enum('WNA','WNI') NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `category`, `content`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Surat Dinas Ke Jepang', 'WNA', 'MELAKUKAN  KUNJUNGAN KE DESA SAKURA', 'services/CMoSS2dsSxUtxy6H383hApZwGunIUlvJtE0IasfZ.jpg', '2025-05-17 22:33:00', '2025-05-17 22:33:00'),
(3, 'Surat Dinas Ke Nias', 'WNI', 'Melakukan Interaksi Bersama KANWIL', 'services/BW65eMFq0VU9YddMV1xnUvyMi0SRqGNDplQCP0Et.jpg', '2025-05-17 22:42:07', '2025-05-17 22:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', NULL, '$2y$10$..F0/mP/h7khpXT8WjQg5O4ON9JNdyqtVE1Bf2dQ7y5KsFNg231IK', NULL, '2025-05-17 23:52:47', '2025-05-20 08:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` text DEFAULT NULL,
  `device` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `url` text DEFAULT NULL,
  `visited_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `user_agent`, `device`, `platform`, `browser`, `url`, `visited_at`) VALUES
(1, '127.0.0.1', NULL, NULL, NULL, NULL, NULL, '2025-05-22 00:14:32'),
(2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36 Edg/136.0.0.0', 'WebKit', 'Windows', 'Edge', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app', '2025-05-22 00:14:32'),
(3, '127.0.0.1', 'WhatsApp/2.2518.3 W', 'Unknown Device', 'Unknown Platform', 'Unknown Browser', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app', '2025-05-22 00:14:53'),
(4, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 18_1_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/18.1.1 Mobile/15E148 Safari/604.1', 'iPhone', 'iOS', 'Safari', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app', '2025-05-22 00:15:08'),
(5, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Mobile Safari/537.36', 'WebKit', 'AndroidOS', 'Chrome', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app', '2025-05-22 00:16:25'),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36', 'WebKit', 'Windows', 'Chrome', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app', '2025-05-22 00:19:47'),
(7, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 16_6 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.6 Mobile/15E148 Safari/604.1', 'iPhone', 'iOS', 'Safari', 'http://f65a-2001-448a-8072-1bd-5002-5585-59b-4f36.ngrok-free.app/lakip', '2025-05-22 00:21:17'),
(8, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Mobile Safari/537.36', 'WebKit', 'AndroidOS', 'Chrome', 'http://a190-2001-448a-1070-ebf7-149-2710-7d01-ec86.ngrok-free.app', '2025-05-22 06:34:44'),
(9, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.5 Mobile/15E148 Safari/604.1', 'iPhone', 'iOS', 'Safari', 'http://a190-2001-448a-1070-ebf7-149-2710-7d01-ec86.ngrok-free.app', '2025-05-22 06:38:51'),
(10, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 15_5 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/99.0.4844.59 Mobile/15E148 Safari/604.1', 'iPhone', 'iOS', 'Chrome', 'http://a190-2001-448a-1070-ebf7-149-2710-7d01-ec86.ngrok-free.app', '2025-05-22 06:40:28'),
(11, '127.0.0.1', 'WhatsApp/2.23.20.0', 'Unknown Device', 'Unknown Platform', 'Unknown Browser', 'http://4206-2001-448a-1070-ebf7-149-2710-7d01-ec86.ngrok-free.app', '2025-05-22 07:13:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_article_id_foreign` (`article_id`),
  ADD KEY `article_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article_category`
--
ALTER TABLE `article_category`
  ADD CONSTRAINT `article_category_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `article_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
