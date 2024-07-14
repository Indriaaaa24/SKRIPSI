-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2024 at 03:11 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'superadmin', ''),
(2, 'admin', ''),
(3, 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 2),
(1, 10),
(3, 1),
(3, 3),
(3, 4),
(3, 10),
(3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'dhimas@gmail.com', 1, '2022-11-12 01:04:52', 1),
(2, '::1', 'superadmin@gmail.com', 2, '2022-11-12 01:26:38', 1),
(3, '::1', 'superadmin', NULL, '2022-11-12 01:37:27', 0),
(4, '::1', 'superadmin@gmail.com', 2, '2022-11-12 01:37:34', 1),
(5, '::1', 'superadmin@gmail.com', 2, '2022-11-12 01:38:03', 1),
(6, '::1', 'superadmin@gmail.com', 2, '2022-11-12 01:39:51', 1),
(7, '::1', 'superadmin@gmail.com', 2, '2022-11-12 01:41:17', 1),
(8, '::1', 'superadmin', NULL, '2022-11-12 02:16:43', 0),
(9, '::1', 'superadmin@gmail.com', 2, '2022-11-12 02:16:52', 1),
(10, '::1', 'dhimas46', NULL, '2022-11-12 02:37:07', 0),
(11, '::1', 'dhimas@gmail.com', 1, '2022-11-12 02:37:13', 1),
(12, '::1', 'superadmin@gmail.com', 2, '2022-11-12 02:37:27', 1),
(13, '::1', 'dhimas@gmail.com', 1, '2022-11-12 04:05:20', 1),
(14, '::1', 'superadmin@gmail.com', 2, '2022-11-12 04:32:09', 1),
(15, '::1', 'superadmin@gmail.com', 2, '2022-11-12 04:35:21', 1),
(16, '::1', 'dhimas@gmail.com', 1, '2022-11-12 23:34:22', 1),
(17, '::1', 'superadmin@gmail.com', 2, '2022-11-13 20:08:08', 1),
(18, '::1', 'superadmin@gmail.com', 2, '2022-11-14 03:35:58', 1),
(19, '::1', 'superadmin@gmail.com', 2, '2022-11-14 03:36:43', 1),
(20, '::1', 'superadmin@gmail.com', 2, '2022-11-14 20:37:44', 1),
(21, '::1', 'superadmin@gmail.com', 2, '2022-11-15 19:43:30', 1),
(22, '::1', 'superadmin@gmail.com', 2, '2022-11-17 20:05:50', 1),
(23, '::1', 'superadmin', NULL, '2022-11-17 20:38:20', 0),
(24, '::1', 'superadmin@gmail.com', 2, '2022-11-17 20:38:27', 1),
(25, '::1', 'dhimas@gmail.com', 1, '2022-11-17 20:52:18', 1),
(26, '::1', 'superadmin@gmail.com', 2, '2022-11-24 04:27:47', 1),
(27, '::1', 'superadmin@gmail.com', 2, '2022-11-24 17:51:22', 1),
(28, '::1', 'dhimas', NULL, '2022-11-24 19:11:31', 0),
(29, '::1', 'dhimas@gmail.com', 1, '2022-11-24 19:11:47', 1),
(30, '::1', 'dhimas@gmail.com', 1, '2022-11-24 19:13:25', 1),
(31, '::1', 'superadmin@gmail.com', 2, '2022-11-24 19:16:08', 1),
(32, '::1', 'dhimas@gmail.com', 1, '2022-11-24 19:16:42', 1),
(33, '::1', 'superadmin@gmail.com', 2, '2022-11-24 19:18:11', 1),
(34, '::1', 'superadmin@gmail.com', 2, '2022-11-25 00:54:42', 1),
(35, '::1', 'superadmin@gmail.com', 2, '2022-11-25 21:25:55', 1),
(36, '::1', 'superadmin@gmail.com', 2, '2022-11-26 03:00:52', 1),
(37, '::1', 'superadmin@gmail.com', 2, '2022-11-26 21:57:57', 1),
(38, '::1', 'superadmin@gmail.com', 2, '2022-11-27 20:35:37', 1),
(39, '::1', 'superadmin@gmail.com', 2, '2022-11-27 21:03:34', 1),
(40, '::1', 'superadmin@gmail.com', 2, '2022-11-27 21:09:34', 1),
(41, '::1', 'superadmin@gmail.com', 2, '2022-11-27 22:00:46', 1),
(42, '::1', 'superadmin@gmail.com', 2, '2022-11-27 22:53:42', 1),
(43, '::1', 'superadmin@gmail.com', 2, '2022-11-28 01:40:06', 1),
(44, '::1', 'superadmin@gmail.com', 2, '2022-11-28 01:56:45', 1),
(45, '::1', 'dhimas@gmail.com', 1, '2022-11-28 01:57:43', 1),
(46, '::1', 'superadmin@gmail.com', 2, '2022-11-28 01:59:56', 1),
(47, '::1', 'dhimas@gmail.com', 1, '2022-11-28 02:01:47', 1),
(48, '::1', 'superadmin', NULL, '2022-11-28 02:02:55', 0),
(49, '::1', 'superadmin@gmail.com', 2, '2022-11-28 02:03:04', 1),
(50, '::1', 'superadmin@gmail.com', 2, '2022-11-28 19:12:14', 1),
(51, '::1', 'superadmin@gmail.com', 2, '2022-11-28 19:17:25', 1),
(52, '::1', 'user@gmail.com', 3, '2022-11-28 19:19:33', 1),
(53, '::1', 'superadmin@gmail.com', 2, '2022-11-28 19:33:15', 1),
(54, '::1', 'user@gmail.com', 3, '2022-11-28 19:33:34', 1),
(55, '::1', 'superadmin@gmail.com', 2, '2022-11-29 00:17:13', 1),
(56, '::1', 'user@gmail.com', 3, '2022-11-29 18:51:25', 1),
(57, '::1', 'superadmin@gmail.com', 2, '2022-11-29 19:02:20', 1),
(58, '::1', 'superadmin@gmail.com', 2, '2022-11-29 19:08:43', 1),
(59, '::1', 'superadmin@gmail.com', 2, '2022-11-29 19:32:26', 1),
(60, '::1', 'superadmin@gmail.com', 2, '2022-11-29 20:31:04', 1),
(61, '::1', 'superadmin@gmail.com', 2, '2022-11-30 03:20:06', 1),
(62, '::1', 'superadmin@gmail.com', 2, '2022-12-01 20:03:53', 1),
(63, '::1', 'superadmin@gmail.com', 2, '2022-12-01 20:17:18', 1),
(64, '::1', 'superadmin@gmail.com', 2, '2022-12-02 00:33:07', 1),
(65, '::1', 'dhimas@gmail.com', 1, '2022-12-02 04:07:58', 1),
(66, '::1', 'superadmin@gmail.com', 2, '2022-12-02 04:08:30', 1),
(67, '::1', 'user@gmail.com', 3, '2022-12-02 04:08:51', 1),
(68, '::1', 'user', NULL, '2022-12-02 04:09:48', 0),
(69, '::1', 'user@gmail.com', 3, '2022-12-02 04:09:53', 1),
(70, '::1', 'superadmin@gmail.com', 2, '2022-12-02 04:23:13', 1),
(71, '::1', 'admin', NULL, '2022-12-02 05:18:51', 0),
(72, '::1', 'dhimas@gmail.com', 1, '2022-12-02 05:18:58', 1),
(73, '::1', 'superadmin', NULL, '2022-12-02 05:30:25', 0),
(74, '::1', 'superadmin@gmail.com', 2, '2022-12-02 05:30:31', 1),
(75, '::1', 'dhimas@gmail.com', 1, '2022-12-02 05:31:38', 1),
(76, '::1', 'superadmin@gmail.com', 2, '2022-12-02 05:35:51', 1),
(77, '::1', 'superadmin@gmail.com', 2, '2022-12-02 18:16:11', 1),
(78, '::1', 'dhimas@gmail.com', 1, '2022-12-02 20:01:28', 1),
(79, '::1', 'superadmin@gmail.com', 2, '2022-12-02 20:03:26', 1),
(80, '::1', 'dhimas@gmail.com', 1, '2022-12-02 20:04:22', 1),
(81, '::1', 'dhimas@gmail.com', 1, '2022-12-02 20:04:43', 1),
(82, '::1', 'superadmin@gmail.com', 2, '2022-12-02 20:24:35', 1),
(83, '::1', 'dhimas@gmail.com', 1, '2022-12-02 20:31:32', 1),
(84, '::1', 'superadmin@gmail.com', 2, '2022-12-03 01:34:01', 1),
(85, '::1', 'user@gmail.com', 3, '2022-12-03 01:37:22', 1),
(86, '::1', 'superadmin@gmail.com', 2, '2022-12-11 22:06:27', 1),
(87, '::1', 'superadmin@gmail.com', 2, '2022-12-11 22:42:50', 1),
(88, '::1', 'dhimas@gmail.com', 1, '2022-12-11 22:45:43', 1),
(89, '::1', 'dhimas@gmail.com', 1, '2022-12-11 22:47:52', 1),
(90, '::1', 'dhimas@gmail.com', 1, '2022-12-11 23:56:25', 1),
(91, '::1', 'user@gmail.com', 3, '2022-12-12 00:14:58', 1),
(92, '::1', 'superadmin@gmail.com', 2, '2022-12-12 00:36:16', 1),
(93, '::1', 'superadmin@gmail.com', 2, '2022-12-19 04:30:43', 1),
(94, '::1', 'superadmin@gmail.com', NULL, '2024-07-08 01:29:29', 0),
(95, '::1', 'superadmin', NULL, '2024-07-08 01:29:38', 0),
(96, '::1', 'superadmin', NULL, '2024-07-08 01:29:42', 0),
(97, '::1', 'cek@gmail.com', NULL, '2024-07-08 01:35:05', 0),
(98, '::1', 'cek@gmail.com', NULL, '2024-07-08 01:41:31', 0),
(99, '::1', 'superadmin@gmail.com', NULL, '2024-07-08 01:42:54', 0),
(100, '::1', 'superadmin@gmail.com', NULL, '2024-07-08 01:44:37', 0),
(101, '::1', 'superadmin@gmail.com', NULL, '2024-07-08 01:45:03', 0),
(102, '::1', 'superadmin@gmail.com', NULL, '2024-07-08 01:45:21', 0),
(103, '::1', 'user@gmail.com', NULL, '2024-07-08 01:45:43', 0),
(104, '::1', 'mchansws103@gmail.com', 9, '2024-07-08 01:48:22', 0),
(105, '::1', 'superadmin@gmail.com', 2, '2024-07-08 01:48:57', 1),
(106, '::1', 'cek@gmail.com', NULL, '2024-07-08 03:14:45', 0),
(107, '::1', 'mchansws103@gmail.com', 9, '2024-07-08 03:14:50', 0),
(108, '::1', 'cek@gmail.com', 8, '2024-07-08 03:15:11', 1),
(109, '::1', 'superadmin@gmail.com', 2, '2024-07-08 03:15:53', 1),
(110, '::1', 'superadmin@gmail.com', 2, '2024-07-08 04:49:46', 1),
(111, '::1', 'superadmin@gmail.com', NULL, '2024-07-09 08:41:05', 0),
(112, '::1', 'superadmin@gmail.com', 2, '2024-07-09 08:41:10', 1),
(113, '::1', 'superadmin@gmail.com', 2, '2024-07-09 09:07:47', 1),
(114, '::1', 'cek@gmail.com', 8, '2024-07-09 09:54:16', 1),
(115, '::1', 'user@gmail.com', 3, '2024-07-09 09:56:57', 1),
(116, '::1', 'superadmin@gmail.com', 2, '2024-07-10 02:14:07', 1),
(117, '::1', 'superadmin@gmail.com', 2, '2024-07-10 06:16:10', 1),
(118, '::1', 'theok@email.com', 10, '2024-07-13 02:04:37', 0),
(119, '::1', 'theok@email.com', 10, '2024-07-13 02:05:38', 1),
(120, '::1', 'theok@email.com', 10, '2024-07-13 02:43:56', 1),
(121, '::1', 'theok@email.com', 10, '2024-07-13 11:02:43', 1),
(122, '::1', 'theok@email.com', 10, '2024-07-13 20:33:56', 1),
(123, '::1', 'superadmin@gmail.com', 2, '2024-07-14 01:22:35', 1),
(124, '::1', 'superadmin@gmail.com', 2, '2024-07-14 03:30:36', 1),
(125, '::1', 'superadmin@gmail.com', 2, '2024-07-14 03:53:13', 1),
(126, '::1', 'superadmin@gmail.com', 2, '2024-07-14 04:26:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-system', 'manage all system'),
(2, 'manage-user', 'manage all user'),
(3, 'manage-profile', 'Manage User\'s Profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int NOT NULL,
  `id_transaksi` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `id_product` int NOT NULL,
  `qty` int NOT NULL,
  `harga` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int NOT NULL,
  `transaksi_id` int NOT NULL,
  `detail_transaksi_id` int NOT NULL,
  `product_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int NOT NULL,
  `nama_kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(10, 'cek'),
(11, 'paket wedding');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1668236199, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `harga` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama`, `harga`, `gambar`, `deskripsi`, `id_kategori`) VALUES
(15, 'dgdfg', '234234', '1720533895_3212ab73315be5f355b4.png', 'fggfhfg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int NOT NULL,
  `product_id` int NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` int NOT NULL,
  `harga` int NOT NULL,
  `bukti` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci,
  `payment` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qty` int NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_acara` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `product_id`, `order_status`, `user_id`, `harga`, `bukti`, `keterangan`, `payment`, `alamat`, `qty`, `no_hp`, `tgl_acara`) VALUES
(1, 15, 'dipesan', 10, 117117, '1720929562_457a9cfabccdf18a5a6e.png', NULL, 'dp', 'nknk', 1, 'mlmll', '2024-07-10'),
(2, 15, 'dipesan', 10, 117117, '1720929799_98c25870ca8258de5c99.png', NULL, 'dp', 'Pugera., Kec Depok Sleman Yogyakarta', 1, '08126303192', '2024-07-18'),
(3, 15, 'dipesan', 2, 117117, '1720938211_3b4bb4307d71d83a9b44.png', NULL, 'dp', 'SUMEDANG', 1, '0822322107746', '1232-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `alamat` text,
  `telp` varchar(13) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `alamat`, `telp`, `image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dhimas@gmail.com', 'Dhimas46', 'Feby Berliana', 'Malang', '082273346154', '1668317701_ece1dc01ef8f03735ed7.png', '$2y$10$A12L0wtVPSGGu44IpwVN8ONEeJmWXLa45KGLkU54AFallsBhocepW', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-12 01:04:37', '2022-11-12 01:04:37', NULL),
(2, 'superadmin@gmail.com', 'indriani123', 'Indriani Astuti', 'SUMEDANG', '0822322107746', '1668247163_1cc7bceb377d2d902467.png', '$2y$10$XhNhLQ61Q.NUIy3xt5Ulk.MNlm.iVsCb8ewB1/YaV1Rc20qgeO11O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-12 01:26:30', '2022-11-12 01:26:30', NULL),
(3, 'user@gmail.com', 'user', 'Andhika Galih', 'Jl.Ketanggawade Malang', '082234457651', '1670053834_0f4b3d6ab2b39ad9ee33.png', '$2y$10$XhNhLQ61Q.NUIy3xt5Ulk.MNlm.iVsCb8ewB1/YaV1Rc20qgeO11O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-28 19:19:26', '2022-11-28 19:19:26', NULL),
(4, 'erland@gmail.com', 'erland', NULL, NULL, NULL, NULL, '$2y$10$CD4rqdcl8mbdOivAeYh8A.SU5aBoLEgFEYu4KaKg.iaQ/z4E65y82', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-12-16 19:34:16', '2022-12-16 19:34:16', NULL),
(8, 'cek@gmail.com', 'cek123', 'Dhimas Wahyu Prayogi', 'Sidorejo', '0822322107746', '1668247163_1cc7bceb377d2d902467.png', '$2y$10$XhNhLQ61Q.NUIy3xt5Ulk.MNlm.iVsCb8ewB1/YaV1Rc20qgeO11O', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-12 01:26:30', '2022-11-12 01:26:30', NULL),
(9, 'mchansws103@gmail.com', 'mchansws103', NULL, NULL, NULL, NULL, '$2y$10$XhNhLQ61Q.NUIy3xt5Ulk.MNlm.iVsCb8ewB1/YaV1Rc20qgeO11O', NULL, NULL, NULL, 'f73cf72edb1a4379440935c934497ef7', NULL, NULL, 0, 0, '2024-07-08 01:48:15', '2024-07-08 01:48:15', NULL),
(10, 'theok@email.com', 'theok', NULL, NULL, NULL, NULL, '$2y$10$iToLcJoo9qOqKsQ0yyqRgey5zfDKleuyxvoYZa7akdn/vzQy6uRwi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-07-13 02:04:20', '2024-07-13 02:04:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `detail_transaksi_id` (`detail_transaksi_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
