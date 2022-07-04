-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 06:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumdes_km(3)`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) NOT NULL,
  `pengelola` varchar(30) NOT NULL,
  `contact` char(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `pengelola`, `contact`, `address`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Yoga Andrian', '085234567890', 'Balung', 'Bumdes adalah usaha kerajinan yang menyediakan jenis-jenis karya seni yang diolah dengan sistem daerah yang bertempat di Balung, Jember.', 'assets/about/qFCj2ZAjfOCg7rz2jw0ulbdpoUILGIbwcw5A8o3d.jpg', NULL, '2022-05-31 00:06:02', '2022-05-31 00:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `id_product`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 5, 'assets/gallery/hKHVpaXMGJvce6EWRq6ObIW41nvx6at1QJ4BBytd.jpg', '2022-05-30 20:42:48', '2022-05-25 11:43:08', '2022-05-30 20:42:48'),
(5, 5, 'assets/gallery/jtxJL5YHPlsIRiUVzSA1enXJUikQZpEB3EWNhkUY.jpg', '2022-05-30 20:42:51', '2022-05-25 11:43:32', '2022-05-30 20:42:51'),
(6, 5, 'assets/gallery/jGxQKQi4IDrEclzpCNAECsGijbSz2L5LV4S8bpsR.jpg', '2022-05-30 20:42:53', '2022-05-25 11:43:51', '2022-05-30 20:42:53'),
(7, 5, 'assets/gallery/qjPEh7lLSyilvIPSU6bbcuMJOrBPZf4xGrTTNsjP.jpg', '2022-05-30 20:42:56', '2022-05-25 11:44:48', '2022-05-30 20:42:56'),
(8, 6, 'assets/gallery/jsC5fmv9pukxNbwatMTvQtlkAtdlNKcKwkHwKNgQ.jpg', NULL, '2022-05-26 01:38:15', '2022-05-26 01:38:15'),
(9, 6, 'assets/gallery/kt20O2u8DTZDrsZJVEvJhtkMeGJFbEtYcDRlYkwN.jpg', NULL, '2022-05-29 01:45:19', '2022-05-29 01:45:19'),
(10, 6, 'assets/gallery/Vv6wQmQrkXw8WMbZjMjp4gquWp6O4Avf1JWR4PLR.jpg', NULL, '2022-05-29 01:46:02', '2022-05-29 01:46:02'),
(11, 5, 'assets/gallery/0JSQ0zD3S05MUhZEqeiY76gwvgNcOYMl0AMAExib.jpg', NULL, '2022-05-30 20:43:35', '2022-05-30 20:43:35'),
(12, 5, 'assets/gallery/9Tl0iZyu0ZS78TUjxxZDPw1yD7icrL21MERFbsQn.jpg', NULL, '2022-05-30 20:44:25', '2022-05-30 20:44:25'),
(13, 5, 'assets/gallery/xWHmONtATatHxg7O9Ki148eLMH5unTsa8tRufMn2.jpg', NULL, '2022-05-30 20:44:43', '2022-05-30 20:44:43'),
(14, 7, 'assets/gallery/VwKKcMvclDn924PnwoDC8OuVYPAMFAyM7t8SBSn5.jpg', NULL, '2022-06-03 01:13:59', '2022-06-03 01:13:59'),
(15, 7, 'assets/gallery/RGQnzh3TrOim8HPu71CLpNvEMKBJhyVTOcEWySsY.jpg', NULL, '2022-06-03 01:14:24', '2022-06-03 01:14:24'),
(16, 7, 'assets/gallery/wtIghFWs5Fs7eWexeREJOXyEeML0wDn25LcjqGBa.jpg', NULL, '2022-06-03 01:14:46', '2022-06-03 01:14:46'),
(17, 8, 'assets/gallery/nBrH0iEcCq9fhenewSR71DEpafIfIE6DkcBdDwcV.jpg', NULL, '2022-06-06 02:15:02', '2022-06-06 02:15:02'),
(18, 9, 'assets/gallery/q6sKr4qHywkbj2pB213P8GNEFn9PPSwFLq5xIrRx.jpg', NULL, '2022-06-06 02:21:23', '2022-06-06 02:21:23'),
(19, 10, 'assets/gallery/f1YuVVAG1RS4lVmAY72qnLtr59XAhscMQelZNKG8.jpg', NULL, '2022-06-06 02:21:47', '2022-06-06 02:21:47');

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
(4, '2022_05_16_084120_create_product_table', 1),
(5, '2022_05_16_092546_create_galleries_table', 2),
(6, '2022_05_16_094549_create_mitra_table', 3),
(7, '2022_05_17_023654_create_transactions_table', 4),
(8, '2022_05_17_024704_create_transactions_out_table', 5),
(9, '2022_05_17_030749_create_user_table', 6),
(10, '2022_05_17_031255_create_transaction_out_details_table', 7),
(11, '2022_05_17_032541_create_report_masuk_table', 8),
(12, '2022_05_17_032825_create_report_keluar_table', 9),
(13, '2022_05_17_033743_create_report_keluar_details_table', 10),
(14, '2022_05_19_055148_add_roles_field_to_users_table', 11),
(15, '2022_05_19_145548_add_username_field_to_users_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `mitras`
--

CREATE TABLE `mitras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mtr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_gabung` date NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitras`
--

INSERT INTO `mitras` (`id`, `nama_mtr`, `alamat`, `no_telp`, `tgl_gabung`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'BumdesKM', 'Balung', '085731379167', '2022-05-25', 'assets/mitra/w7S6vVGsPcgvHLzYXAIMXVGasTdWUqO9OPoDjtFW.jpg', NULL, '2022-05-25 09:00:51', '2022-05-30 20:51:10');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'QzxcqET0HgoNFJ8ouRR5VLsVSepBLyuqIsn6FWmf', NULL, 'http://localhost', 1, 0, 0, '2022-05-30 20:14:23', '2022-05-30 20:14:23'),
(2, NULL, 'Laravel Password Grant Client', 'sCiNCTTihkdxAgq7HwV2Z6plYRUQS5a4ECr59feO', 'users', 'http://localhost', 0, 1, 0, '2022-05-30 20:14:24', '2022-05-30 20:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-05-30 20:14:24', '2022-05-30 20:14:24');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaction` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_transaction`, `date`, `payment`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-06-11 08:30:18', 'OKE', 'VALID', NULL, NULL, '2022-06-11 01:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `materials` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_buy` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `sold` int(11) NOT NULL DEFAULT 0,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `materials`, `price_buy`, `price`, `stock`, `weight`, `sold`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(5, 'Korek Api', 'Bagus', 'Alumunium', 15000, 20000, 60, 1, 0, 'assets/gallery/RlgG7nDxyfgFCVofvFyGDEvOJY8aqnVkSZyu896h.jpg', NULL, '2022-05-25 02:30:41', '2022-06-02 01:23:01'),
(6, 'Kotak Kayu', 'Bagus', 'Kayu', 15000, 20000, 60, 1, 0, 'assets/gallery/vuuPXepgydly83SAWbnV011ulCgSmVH0MxlaLoqA.jpg', NULL, '2022-05-26 01:37:50', '2022-06-02 02:40:38'),
(7, 'Asbak', 'Mantab', 'Kayu', 15000, 20000, 50, 1, 0, 'assets/gallery/1s7CHC6rJ2WNlqmpkyKe2iMS3IxMumVymOEvkJdc.jpg', NULL, '2022-06-03 00:04:49', '2022-06-03 00:04:49'),
(8, 'Casing Hp', 'Siip', 'Plastik', 15000, 20000, 50, 1, 0, 'assets/gallery/D5DMmoCPp75yBC1XnbrVS73NSYSxaigsiZgaTkJF.jpg', NULL, '2022-06-06 02:14:38', '2022-06-06 02:14:38'),
(9, 'Botol', 'Oke', 'Plastik', 10000, 15000, 50, 1, 0, 'assets/gallery/WLYYn8pEacV3NU2GeuD5XRKXR66rOIuzJYPGSOk7.jpg', NULL, '2022-06-06 02:15:47', '2022-06-06 02:15:47'),
(10, 'Tas', 'Kain', 'Kain', 50000, 75000, 50, 1, 0, 'assets/gallery/gWGMUOcqx8HuzOze33Cy4qnPIP9aXWEKr2mSyD4H.jpg', NULL, '2022-06-06 02:16:33', '2022-06-06 02:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `report_ins`
--

CREATE TABLE `report_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `jml_stok` int(11) NOT NULL,
  `hrg_total` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_keluar_details`
--

CREATE TABLE `report_keluar_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transactions_out_id` int(11) NOT NULL,
  `transactions_out_details_id` int(11) NOT NULL,
  `id_transaksi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `kd_brg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_brg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hrg_jual` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `sub_ttl` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `report_outs`
--

CREATE TABLE `report_outs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaction_outs` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `ttl_hrg` int(11) NOT NULL,
  `transactions_status` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaction` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `id_transaction`, `id_user`, `date`, `comment`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2022-06-06 01:56:54', 'bagus sekali', NULL, NULL, NULL),
(2, 1, 3, '2022-06-07 10:05:21', 'Oke siip', NULL, NULL, NULL),
(3, 1, 6, '2022-06-07 10:05:21', 'Anjay', NULL, NULL, NULL),
(4, 1, 3, '2022-06-07 10:24:06', 'Mantab', NULL, NULL, NULL),
(5, 1, 5, '2022-06-07 10:24:06', 'wokeh', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_details`
--

CREATE TABLE `transaction_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_transaction` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_details`
--

INSERT INTO `transaction_details` (`id`, `id_transaction`, `id_product`, `qty`, `price`, `subtotal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 5, 10, 0, 200000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_ins`
--

CREATE TABLE `transaction_ins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `hrg_beli` int(11) NOT NULL,
  `jml_stok` int(11) NOT NULL,
  `hrg_total` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_ins`
--

INSERT INTO `transaction_ins` (`id`, `id_product`, `tgl_masuk`, `hrg_beli`, `jml_stok`, `hrg_total`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, '2022-06-02', 15000, 4, 60000, NULL, '2022-06-01 19:56:43', '2022-06-02 01:23:01'),
(2, 6, '2022-06-02', 15000, 0, 0, '2022-06-02 02:36:25', '2022-06-01 20:07:22', '2022-06-02 02:36:25'),
(3, 6, '2022-06-02', 15000, 4, 60000, NULL, '2022-06-02 02:40:09', '2022-06-02 02:40:09'),
(4, 6, '2022-06-03', 15000, 4, 60000, NULL, '2022-06-02 02:40:38', '2022-06-02 02:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_outs`
--

CREATE TABLE `transaction_outs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `recipient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` int(11) NOT NULL,
  `shipment` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `resi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '-',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaction_outs`
--

INSERT INTO `transaction_outs` (`id`, `id_user`, `date`, `recipient`, `address`, `phone`, `subtotal`, `shipment`, `total`, `resi`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, '2022-06-07 14:40:15', 'prakoso', 'pasuruan', '085234567897', 0, 0, 200000, '0', 'ON_PROCESS', NULL, NULL, '2022-06-07 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '''NOT SET''',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `email`, `email_verified_at`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`, `roles`, `username`, `image`) VALUES
(3, 'yuda', 'NOT SET', 'yudha2@gmail.com', NULL, '$2y$10$p8yG/V/3RODDjtFZdbxbQeMUdKQML1p5TsI/bIVYa/h7IqPpz3vni', NULL, NULL, '2022-05-19 06:57:22', '2022-05-19 06:57:22', 'ADMIN', '', ''),
(5, 'prakoso', 'NOT SET', 'polije@gmail.com', NULL, '$2y$10$viQI.wB6CbNRFyryX6QAgOWFE0NEEtBMI57qR3bkMlQLKfb/iCSb6', NULL, NULL, '2022-05-19 08:07:51', '2022-06-02 08:33:25', 'ADMIN', 'cepot', ''),
(6, 'Aliffrianto Yudha Prakoso', 'NOT SET', 'prakoso2@gmail.com', NULL, '$2y$10$g7Os0iVE35UKq5guqjr8C.TK0tfXDU/uhH1HIRww7XxvNTWixjnZq', NULL, NULL, '2022-05-30 10:21:56', '2022-05-30 10:21:56', 'USER', 'alif', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitras`
--
ALTER TABLE `mitras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_ins`
--
ALTER TABLE `report_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_keluar_details`
--
ALTER TABLE `report_keluar_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report_outs`
--
ALTER TABLE `report_outs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_details`
--
ALTER TABLE `transaction_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_ins`
--
ALTER TABLE `transaction_ins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_outs`
--
ALTER TABLE `transaction_outs`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mitras`
--
ALTER TABLE `mitras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `report_ins`
--
ALTER TABLE `report_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_keluar_details`
--
ALTER TABLE `report_keluar_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_outs`
--
ALTER TABLE `report_outs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction_details`
--
ALTER TABLE `transaction_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction_ins`
--
ALTER TABLE `transaction_ins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaction_outs`
--
ALTER TABLE `transaction_outs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
