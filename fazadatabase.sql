-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 08:40 AM
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
-- Database: `fazadatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_21_074445_tbl_login--create=login', 1),
(6, '2024_01_21_074602_tbl_buku--create=buku', 1),
(7, '2024_01_21_075156_tbl_order--create=order', 1),
(8, '2024_01_21_075249_tbl_kelasmenulis--create=kelasmenulis', 1),
(9, '2024_01_21_075327_tbl_event--create=event', 1),
(10, '2024_01_21_075410_tbl_indie--create=indie', 1),
(11, '2024_01_21_075458_tbl_selfpublish--create=selfpublish', 1),
(12, '2024_01_21_075601_tbl_kelasediting--create=kelasediting', 1),
(13, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(14, '2024_01_23_183028_tbl_bestseller--create=bestseller', 2),
(15, '2024_01_23_183155_tbl_comingsoon--create=comingsoon', 2),
(16, '2024_01_23_183236_tbl_recommendation--create=recommendation', 2),
(17, '2024_01_23_183334_tbl_news--create=news', 2),
(18, '2024_01_23_183405_tbl_viewpenjualan--create=viewpenjualan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bestseller`
--

CREATE TABLE `tbl_bestseller` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `img_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `halaman` int(11) NOT NULL,
  `nomer_isbn` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `harga_coret` double NOT NULL,
  `img_review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bestseller`
--

INSERT INTO `tbl_bestseller` (`id`, `judul`, `img_buku`, `penulis`, `halaman`, `nomer_isbn`, `sinopsis`, `harga`, `harga_coret`, `img_review`, `created_at`, `updated_at`) VALUES
(1, 'Kuharap kau jadi milik ku', '1706627869_buku10.png', 'heni suryati', 232, 943859, 'cerita dari ku untuk mu', 123300, 150000, '1706627869_error.png', NULL, '2024-01-30 08:17:49'),
(2, 'Kuharap kau jadi milik ku part 2', '1706627753_buku2.png', 'heni suryati', 232, 943859, 'cerita dari ku untuk mu', 123300, 150000, '1706627753_error.png', NULL, '2024-01-30 08:15:53'),
(3, 'Kuharap kau jadi milik ku part 3', '1706627783_buku2.png', 'heni suryati', 232, 943859, 'cerita terakhir dari ku untuk mu', 123300, 150000, '1706627783_error.png', NULL, '2024-01-30 08:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `halaman` int(11) NOT NULL,
  `harga_coret` double NOT NULL,
  `harga` double NOT NULL,
  `nomer_isbn` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `judul`, `penulis`, `halaman`, `harga_coret`, `harga`, `nomer_isbn`, `sinopsis`, `photo`, `thumbnail`, `created_at`, `updated_at`) VALUES
(3, 'MINE: Sampai Kapanpun, Kau adalah Milikku', 'DEWI WULANSARI', 304, 63200, 63200, 2147483647, 'UHWFGUHFGYUgfrhufggevve', '1706615977_7d0174dbd83173b7de2c519885dd12ce0c1caf5f_s2_n2.png', '1706124455_Screenshot 2024-01-24 021832.jpg', '2024-01-23 12:18:51', '2024-01-30 04:59:37'),
(4, 'si manis jembatan ancol', 'iis setiawati', 213, 134000, 120000, 2147483647, 'yvikuiluoyitur5y', '1706124813_Screenshot 2024-01-24 020818.jpg', '1706124813_Screenshot 2024-01-24 020739.jpg', '2024-01-24 12:33:33', '2024-01-30 04:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comingsoon`
--

CREATE TABLE `tbl_comingsoon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_buku` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `halaman` int(11) NOT NULL,
  `ukuran_buku` varchar(255) NOT NULL,
  `laminasi` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `link_tt` varchar(255) NOT NULL,
  `link_sp` varchar(255) NOT NULL,
  `link_pb` varchar(255) NOT NULL,
  `link_tokped` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_comingsoon`
--

INSERT INTO `tbl_comingsoon` (`id`, `img_buku`, `judul`, `penulis`, `penerbit`, `halaman`, `ukuran_buku`, `laminasi`, `sinopsis`, `link_tt`, `link_sp`, `link_pb`, `link_tokped`, `created_at`, `updated_at`) VALUES
(2, '1706201824_kijang.jpg', 'ujang sang pendaki', 'ujang', 'rere', 33, '54x4', 'kakk', 'ee', 'dffdffd', 'dfddffd', 'fdfdfddf', 'dfdffdfd', '2024-01-24 23:46:28', '2024-01-25 09:57:04'),
(3, '1706242091_images.png', 'angkot horor', 'ujang', 'rere', 99, '54x4', 'kakk', 'l', 'dffdffd', 'dfddffd', 'fdfdfddf', 'dfdffdfd', '2024-01-25 21:08:11', '2024-01-25 21:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_event` varchar(255) NOT NULL,
  `penyelenggara` varchar(255) NOT NULL,
  `jadwal_mulai` date NOT NULL,
  `jadwal_selesai` date NOT NULL,
  `jam_acara` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `deskripsi_event` varchar(255) NOT NULL,
  `harga_tiket` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indie`
--

CREATE TABLE `tbl_indie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unknownfitur` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelasediting`
--

CREATE TABLE `tbl_kelasediting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_e` varchar(255) NOT NULL,
  `intruktur_e` varchar(255) NOT NULL,
  `deskripsi_e` varchar(255) NOT NULL,
  `jadwal_e` date NOT NULL,
  `jam_e` text NOT NULL,
  `listharga_e` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelasmenulis`
--

CREATE TABLE `tbl_kelasmenulis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_m` varchar(255) NOT NULL,
  `intruktur_m` varchar(255) NOT NULL,
  `deskripsi_m` varchar(255) NOT NULL,
  `jadwal_m` date NOT NULL,
  `jam_m` varchar(255) NOT NULL,
  `listharga_m` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_buku` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `paragraf1` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `img_buku`, `judul`, `tanggal`, `paragraf1`, `isi`, `created_at`, `updated_at`) VALUES
(2, '1706464313_20210406_194019.png', 'buku baru rilis', '2024-01-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sit amet vulputate arcu. Donec id erat ligula. Fusce dapibus, dui non lobortis tincidunt, sapien sem sagittis eros, a sollicitudin ex dui at ex. Morbi quis volutpat nunc. Quisque ut justo id ', 'Vivamus dolor tortor, ultricies et pulvinar et, vestibulum nec velit. Aenean finibus ultricies lacus a congue. Nunc eget dolor ullamcorper, vehicula ante et, fringilla ex. Aenean sed dapibus sem. Mauris tempus nulla a metus ullamcorper, at tempus nisi eleifend. Integer accumsan feugiat luctus. Fusce pretium accumsan orci a volutpat. Aliquam vestibulum iaculis diam id consectetur.\r\n\r\nAenean eget semper nunc, fermentum semper nulla. Mauris sit amet tempus nibh. Nulla sed massa cursus, pretium nunc quis, eleifend mauris. Donec ut laoreet justo. Sed vitae magna nisl. In elementum quam orci, a imperdiet nisl fermentum fermentum. Vestibulum sodales malesuada pharetra. In consectetur eleifend varius. Curabitur feugiat nisi metus. Fusce laoreet semper faucibus. Sed gravida rutrum nisl, eu auctor leo finibus at. In placerat elit a blandit ullamcorper. Fusce et lorem vitae odio iaculis eleifend.\r\n\r\nPraesent arcu erat, faucibus a vestibulum ac, efficitur ac ipsum. Etiam sollicitudin arcu et imperdiet ultrices. Donec bibendum vulputate placerat. Morbi vitae mauris ultricies, gravida tortor et, ullamcorper ex. Integer mattis ornare diam. Ut sed metus sodales, finibus est id, viverra magna. Morbi aliquam nec ligula quis convallis. Ut vel nulla mauris. Mauris pulvinar quam ac dictum tristique.\r\n\r\nSed in tellus sodales, tempus felis quis, finibus arcu. Ut vel eros ex. Aenean eleifend purus auctor, molestie est ut, porta augue. Donec non consectetur sem. Pellentesque nibh mauris, viverra non nibh at, commodo sollicitudin nisi. Vivamus rhoncus, odio vel tincidunt mattis, erat velit finibus ligula, eget finibus quam neque eget lacus. Morbi eu massa nulla. Maecenas lobortis dapibus sem et interdum. Ut ultrices lorem semper mi pharetra, egestas volutpat ligula euismod. Morbi fermentum facilisis mauris vitae hendrerit.', NULL, '2024-01-28 10:51:53'),
(3, '1706467085_20210409_221856.png', 'i wish i was him rilis 1 hari lagi!!', '2024-01-31', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id risus in dolor bibendum placerat. Donec vestibulum suscipit est, vel blandit lectus imperdiet ac. In condimentum convallis risus, mattis pharetra felis tempus eu. Nullam suscipit augue pur', 'Nunc arcu nulla, gravida nec maximus in, molestie in ante. Nullam eu leo vitae metus viverra dictum blandit eget tortor. Integer luctus tellus vehicula lacus varius maximus quis quis magna. Nulla quis augue ut nisi vestibulum facilisis. Aenean neque mi, iaculis vel sollicitudin ut, luctus at mi. Aliquam auctor auctor hendrerit. Phasellus vel tempor ligula, et malesuada nunc. Suspendisse egestas orci est, sed accumsan erat gravida scelerisque. Maecenas gravida a nisl at feugiat. Quisque vitae magna suscipit, eleifend turpis eget, malesuada neque. Vivamus at tortor mattis, dictum purus pulvinar, consectetur turpis. Nullam molestie iaculis elit at molestie.\r\n\r\nMaecenas leo mauris, auctor accumsan sollicitudin nec, feugiat eget neque. Donec venenatis, lacus non varius porttitor, risus massa sodales ipsum, non condimentum mauris ante at velit. Mauris finibus velit et felis volutpat bibendum. Proin eget venenatis erat. Fusce non turpis ipsum. Pellentesque elementum, magna at luctus porttitor, ipsum lacus pretium dolor, nec placerat sem magna id ipsum. Vivamus ut lobortis nisi. Aliquam iaculis vitae nisl id viverra. Proin interdum lobortis dolor in rutrum. Curabitur pulvinar luctus eros eu bibendum. In mattis egestas nulla in facilisis. Sed tristique turpis sit amet condimentum aliquet. Suspendisse et velit libero. Maecenas rhoncus, odio eget sollicitudin dignissim, elit diam placerat metus, vel commodo dui nulla non ante. Maecenas egestas euismod lectus, non posuere elit sollicitudin non.\r\n\r\nIn sed posuere elit. Vivamus sed ex vitae libero luctus mollis. Praesent non pharetra justo, id euismod odio. Donec aliquam nisi nisi, vitae viverra lacus blandit eget. Nulla facilisi. Nulla facilisi. Maecenas lacinia est sed semper tincidunt. Quisque commodo tempor quam, ac ultricies velit iaculis eget. Etiam a sem vitae nisi tempor cursus id in nibh. Donec luctus erat id ante ultricies, vitae ullamcorper neque faucibus. Donec faucibus, ex ut fringilla laoreet, enim nisi pulvinar massa, in dictum erat turpis vel quam. Aenean turpis nisi, pretium quis facilisis vel, maximus eu erat.', '2024-01-28 11:36:17', '2024-01-30 05:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `payment` varchar(255) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_recommendation`
--

CREATE TABLE `tbl_recommendation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `img_buku` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `halaman` int(11) NOT NULL,
  `nomer_isbn` int(11) NOT NULL,
  `sinopsis` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `harga_coret` double NOT NULL,
  `img_review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_recommendation`
--

INSERT INTO `tbl_recommendation` (`id`, `judul`, `img_buku`, `penulis`, `halaman`, `nomer_isbn`, `sinopsis`, `harga`, `harga_coret`, `img_review`, `created_at`, `updated_at`) VALUES
(1, 'for you that not mine part 1', '1706615104_20210413_171317.png', 'sastra', 211, 943859667, 'nchjbjhbvnvnv', 123300, 120000, '1706606584_20210406_172310.png', NULL, '2024-01-30 04:46:15'),
(2, 'for you that not mine part 2', '1706300781_0bf7d667bf2397c9a31d15cf65b23f0d8fa47f43_s2_n3_y2.png', 'sastra satria', 311, 943859, 'nckjsnkacndcjc', 123300, 150000, '1706300781_5 Indonesian Islands Black Women Should Visit That Are Not Bali _ Essence.jpg', NULL, '2024-01-26 13:26:21'),
(3, 'for you that not mine', '1706300818_E6ULUo7UUAA4Wq6.jpg', 'sastra satria', 311, 943859, 'nckjsnkacndcjc', 123300, 150000, '1706300818_FB_IMG_16242769560729058.jpg', NULL, '2024-01-26 13:26:58'),
(4, 'Tokyo magnitude', '1706300927_8a3e6c07b4b317509a01c5f16fcc16b8938783ca_s2_n2.png', 'sastra satria', 311, 943859, 'nckjsnkacndcjc', 123300, 150000, '1706300927_7d0174dbd83173b7de2c519885dd12ce0c1caf5f_s2_n2.png', NULL, '2024-01-26 13:28:47'),
(5, 'MAYORITAS', '1706300975_20210327_142551.png', 'sastra satria', 311, 943859, 'nckjsnkacndcjc', 123300, 150000, '1706300975_Screenshot_20210320-121444.png', NULL, '2024-01-26 13:29:35'),
(6, 'Replicant', '1706301099_20210409_162134.png', 'Yoko', 231, 943859, 'nckjsnkacndcjc', 123300, 150000, '1706301099_12TKJ5_RIZALMAULANASYAHRUJAMIL_HASIL2.png', NULL, '2024-01-26 13:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_selfpublish`
--

CREATE TABLE `tbl_selfpublish` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unknownfitur_` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_viewpenjualan`
--

CREATE TABLE `tbl_viewpenjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(225) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_beli` date NOT NULL,
  `harga` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_viewpenjualan`
--

INSERT INTO `tbl_viewpenjualan` (`id`, `judul`, `nama`, `hp`, `alamat`, `tgl_beli`, `harga`, `qty`, `payment`, `total`, `created_at`, `updated_at`) VALUES
(1, 'Kuharap kau jadi milik ku part 3', 'Ujang', '08212333667', 'jl jalan', '2024-01-31', 123300, 2, 'COD', 'Rp 246.600', '2024-01-31 10:41:12', '2024-01-31 10:41:12'),
(3, 'si manis jembatan ancol', 'yuyun', '0816567898', 'jl juned', '2024-01-31', 120000, 3, 'Bank', 'Rp 342.000', '2024-01-31 11:57:47', '2024-01-31 11:57:47'),
(4, 'Kuharap kau jadi milik ku part 3', 'TEST', '08131', 'JL', '2024-02-01', 123300, 2, 'Bank', 'Rp 246.600', '2024-01-31 22:01:56', '2024-01-31 22:01:56'),
(5, 'Kuharap kau jadi milik ku part 3', 'TEST', '08131', 'JL', '2024-02-01', 123300, 2, 'Bank', 'Rp 246.600', '2024-01-31 22:03:25', '2024-01-31 22:03:25'),
(6, 'Kuharap kau jadi milik ku part 3', 'TEST', '08131', 'JL', '2024-02-01', 123300, 2, 'Bank', 'Rp 246.600', '2024-01-31 22:05:41', '2024-01-31 22:05:41'),
(7, 'Kuharap kau jadi milik ku part 3', 'TEST', '08131', 'JL', '2024-02-01', 123300, 2, 'Bank', 'Rp 246.600', '2024-01-31 22:06:57', '2024-01-31 22:06:57'),
(8, 'si manis jembatan ancol', 'TEST', '08131', 'JL', '2024-02-01', 120000, 2, 'COD', 'Rp 240.000', '2024-01-31 22:13:15', '2024-01-31 22:13:15'),
(9, 'Kuharap kau jadi milik ku part 3', 'Ujang', '08131', 'jl jalan', '2024-02-01', 123300, 3, 'Bank', 'Rp 351.405', '2024-01-31 22:15:38', '2024-01-31 22:15:38');

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
(3, 'admin', 'admin@gmail.com', NULL, '$2a$12$y3W/znIin.gEOzQvv4RMgOEs1SBoLbyO/cMm8vDURp0fdnKOU2jVi', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tbl_bestseller`
--
ALTER TABLE `tbl_bestseller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comingsoon`
--
ALTER TABLE `tbl_comingsoon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_indie`
--
ALTER TABLE `tbl_indie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelasediting`
--
ALTER TABLE `tbl_kelasediting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelasmenulis`
--
ALTER TABLE `tbl_kelasmenulis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_recommendation`
--
ALTER TABLE `tbl_recommendation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_selfpublish`
--
ALTER TABLE `tbl_selfpublish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_viewpenjualan`
--
ALTER TABLE `tbl_viewpenjualan`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bestseller`
--
ALTER TABLE `tbl_bestseller`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_comingsoon`
--
ALTER TABLE `tbl_comingsoon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_indie`
--
ALTER TABLE `tbl_indie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelasediting`
--
ALTER TABLE `tbl_kelasediting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kelasmenulis`
--
ALTER TABLE `tbl_kelasmenulis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_recommendation`
--
ALTER TABLE `tbl_recommendation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_selfpublish`
--
ALTER TABLE `tbl_selfpublish`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_viewpenjualan`
--
ALTER TABLE `tbl_viewpenjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
