-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 08:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectfw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pengguna_id`, `created_at`, `updated_at`) VALUES
(1, 'tini', 1, '2017-05-07 16:00:00', '2017-05-15 09:07:47');

-- --------------------------------------------------------

--
-- Table structure for table `aslab`
--

CREATE TABLE IF NOT EXISTS `aslab` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` int(5) NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aslab`
--

INSERT INTO `aslab` (`id`, `nama`, `nim`, `pengguna_id`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'Asdar', 1415015078, 3, '2017-05-07 18:39:39', '2017-05-19 20:14:51', 'kharis.JPEG'),
(2, 'Ananda Nur s', 1415015020, 9, '2017-05-15 08:53:11', '2017-05-18 08:25:42', 'sri.png'),
(3, 'Hilmy Ady', 1415015077, 10, '2017-05-15 08:54:21', '2017-05-15 08:54:21', ''),
(4, 'Noval Bayu S', 1415015080, 11, '2017-05-15 08:55:21', '2017-05-15 08:55:21', ''),
(5, 'Rizky Arista', 1415015086, 17, '2017-05-18 07:57:48', '2017-05-18 07:57:48', ''),
(6, 'Iin Nurkarima', 1415015056, 20, '2017-05-19 20:21:01', '2017-05-19 20:21:01', '');

-- --------------------------------------------------------

--
-- Table structure for table `aslab_pratikum`
--

CREATE TABLE IF NOT EXISTS `aslab_pratikum` (
`id` int(10) unsigned NOT NULL,
  `aslab_id` int(10) unsigned NOT NULL,
  `matakuliah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `aslab_pratikum`
--

INSERT INTO `aslab_pratikum` (`id`, `aslab_id`, `matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-05-07 18:39:49', '2017-05-07 18:39:49'),
(2, 2, 4, '2017-05-15 09:10:39', '2017-05-15 09:10:39'),
(3, 3, 2, '2017-05-15 09:10:51', '2017-05-15 09:10:51'),
(4, 4, 3, '2017-05-15 09:11:03', '2017-05-15 09:11:03'),
(5, 5, 1, '2017-05-18 07:58:09', '2017-05-18 07:58:09'),
(6, 6, 3, '2017-05-19 20:21:41', '2017-05-19 20:21:41'),
(8, 2, 1, '2017-05-22 21:37:37', '2017-05-22 21:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nip` int(5) NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `nip`, `alamat`, `pengguna_id`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'hario jati', 1234981512, 'jln. cinta damai', 4, '2017-05-08 19:01:07', '2017-05-19 20:16:41', 'kharis.JPEG'),
(2, 'edi budiman', 1234568214, 'jln . kesatuan fkti', 5, '2017-05-08 19:01:53', '2017-05-08 19:01:53', ''),
(3, 'Masnawati', 1213151718, 'jl.pahlawan', 12, '2017-05-15 08:56:07', '2017-05-18 07:39:49', '1494985951815.JPEG'),
(4, 'Rosmasari', 1234541214, 'samarinda sebrang', 13, '2017-05-15 08:57:37', '2017-05-15 08:57:37', ''),
(5, 'Abas Saudek', 1234556789, 'lambung mangkurat', 18, '2017-05-18 08:10:04', '2017-05-18 08:10:04', ''),
(6, 'Novi', 1234567809, 'jl cinta damai', 21, '2017-05-19 20:23:11', '2017-05-19 20:23:11', ''),
(7, 'saya', 1234567890, 'fghjk', 27, '2017-05-22 21:41:41', '2017-05-22 21:41:41', '');

-- --------------------------------------------------------

--
-- Table structure for table `dosen_matakuliah`
--

CREATE TABLE IF NOT EXISTS `dosen_matakuliah` (
`id` int(10) unsigned NOT NULL,
  `dosen_id` int(10) unsigned NOT NULL,
  `matakuliah_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dosen_matakuliah`
--

INSERT INTO `dosen_matakuliah` (`id`, `dosen_id`, `matakuliah_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-05-08 22:52:04', '2017-05-08 22:52:04'),
(2, 2, 4, '2017-05-15 09:15:30', '2017-05-15 09:15:30'),
(3, 3, 2, '2017-05-15 09:15:41', '2017-05-15 09:15:41'),
(4, 4, 3, '2017-05-15 09:15:53', '2017-05-15 09:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pratikum`
--

CREATE TABLE IF NOT EXISTS `jadwal_pratikum` (
`id` int(10) unsigned NOT NULL,
  `mahasiswa_id` int(10) unsigned NOT NULL,
  `ruangan_id` int(10) unsigned NOT NULL,
  `aslab_pratikum_id` int(10) unsigned NOT NULL,
  `hari` enum('senin','selasa','rabu','kamis','jumat') COLLATE utf8_unicode_ci NOT NULL,
  `jam` time NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwal_pratikum`
--

INSERT INTO `jadwal_pratikum` (`id`, `mahasiswa_id`, `ruangan_id`, `aslab_pratikum_id`, `hari`, `jam`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'senin', '13:00:00', 80, '2017-05-07 18:40:31', '2017-05-19 20:14:36'),
(2, 1, 1, 2, 'selasa', '09:00:00', 85, '2017-05-15 09:12:33', '2017-05-15 09:36:22'),
(3, 1, 1, 3, 'kamis', '12:30:00', 75, '2017-05-15 09:14:33', '2017-05-15 09:38:13'),
(4, 1, 2, 4, 'jumat', '10:00:00', 80, '2017-05-15 09:14:59', '2017-05-15 09:37:25'),
(5, 2, 2, 1, 'senin', '10:00:00', 75, '2017-05-15 09:19:10', '2017-05-15 09:29:29'),
(6, 4, 1, 1, 'selasa', '07:31:00', 76, '2017-05-15 09:19:47', '2017-05-19 21:53:01'),
(7, 2, 3, 3, 'rabu', '09:00:00', 75, '2017-05-15 09:20:34', '2017-05-15 09:38:23'),
(8, 2, 2, 4, 'jumat', '10:00:00', 80, '2017-05-15 09:21:21', '2017-05-15 09:37:35'),
(9, 3, 2, 1, 'senin', '08:08:00', 0, '2017-05-19 20:19:34', '2017-05-19 20:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nim` int(5) NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `pengguna_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `foto` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`, `pengguna_id`, `created_at`, `updated_at`, `foto`) VALUES
(1, 'hartini indriani', 1515015025, 'Jl. Pramuka2', 2, '2017-05-07 16:00:00', '2017-05-19 21:47:16', 'kharis.JPEG'),
(2, 'Sri Marsiah', 1515015021, 'bengkuring', 6, '2017-05-15 08:50:17', '2017-05-15 08:50:17', ''),
(3, 'Muhammad kharis', 1515015010, 'perjuangan', 7, '2017-05-15 08:51:22', '2017-05-18 08:21:47', '1494985944331.jpg'),
(4, 'Dinda Izmiya N', 1515015028, 'Pramuka', 8, '2017-05-15 08:52:35', '2017-05-18 08:24:48', 'dinda.jpg'),
(5, 'rizki afriani', 1515015031, 'jl panjaitan', 15, '2017-05-15 09:55:56', '2017-05-15 09:55:56', ''),
(6, 'nur suryani', 1515015047, 'Samarinda ulu hati (maagh)', 16, '2017-05-18 07:56:54', '2017-05-18 07:56:54', ''),
(7, 'Wiji Astuti', 1515015040, 'jl. alamsegar', 19, '2017-05-19 20:18:58', '2017-05-19 20:18:58', '');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE IF NOT EXISTS `matakuliah` (
`id` int(10) unsigned NOT NULL,
  `nama_mk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id`, `nama_mk`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Framework', 'Semester 4', '2017-05-07 18:38:24', '2017-05-15 08:59:50'),
(2, 'Kecerdasan Buatan', 'Semester 4', '2017-05-15 08:59:37', '2017-05-15 08:59:37'),
(3, 'SMBD', 'Semester 4', '2017-05-15 09:00:05', '2017-05-15 09:00:05'),
(4, 'Visual', 'Semester 4', '2017-05-15 09:00:16', '2017-05-15 09:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_04_18_115600_buat_table_pengguna', 1),
('2017_04_18_115631_buat_table_ruangan', 1),
('2017_04_18_115704_buat_table_matakuliah', 1),
('2017_04_18_115723_buat_table_admin', 1),
('2017_04_18_115755_buat_table_mahasiswa', 1),
('2017_04_18_115823_buat_table_aslab', 1),
('2017_04_18_115839_buat_table_dosen', 1),
('2017_04_18_115918_buat_table_dosen_matakuliah', 1),
('2017_04_18_115959_buat_table_aslab_pratikum', 1),
('2017_04_18_120043_buat_table_jadwal_pratikum', 1),
('2017_05_07_132411_tambah_field', 1),
('2017_05_17_164054_tambah_foto', 2),
('2017_05_17_182001_tambah_foto_aslab', 3),
('2017_05_17_182214_tambah_foto_dosen', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` enum('admin','dosen','aslab','mahasiswa') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `level`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 't.admin', 'admintini', 'admin', '2017-05-07 16:00:00', '2017-05-22 21:44:02', 'x4nuD6Iw9yOmZdmgPqyuoFEjPEdObGqhbZhjY8WvKu4PiySe3rlsRvQ7tfCd'),
(2, 'tini', 'tini123', 'mahasiswa', '2017-05-07 16:00:00', '2017-05-22 21:10:09', '0WvNsmanoa6t7e0chbYTvjGhp4OpfA9UetQMJmnaAShncgmi2SBUmsFfHXcq'),
(3, 'asdar1', 'asdar123', 'aslab', '2017-05-07 18:39:39', '2017-05-19 22:18:01', 'pDJFoHMEYBiweEcJnm6yOPF4QnlDLMkvWogUGubYefUwYWKie57ABt3JdGvC'),
(4, 'hario', 'hario123', 'dosen', '2017-05-08 19:01:07', '2017-05-22 21:10:53', 'M68qymagyjC5S8LmsGvIJbQLZnEXmSeEu8NIj6mDIHL3IsV9Tw8HNCYaYAdj'),
(5, 'edi', 'edi123', 'dosen', '2017-05-08 19:01:53', '2017-05-22 21:40:27', '7mEogcWU3BBprJBFs9TiTEGSFoqPwFwP3c9BiUUTWQ5KbzrnNo3CiT4kcMpN'),
(6, 'sri', 'sri123', 'mahasiswa', '2017-05-15 08:50:17', '2017-05-15 09:22:22', 'WktzVVGl2X1xrqqP363u4ebkGQzGZu2kTEIKxONlQVW4tAuAMbXkNDK4s9X0'),
(7, 'kharis', 'kharis123', 'mahasiswa', '2017-05-15 08:51:22', '2017-05-18 08:21:54', 'LSudm2pCJoYl7oHrvwaY3n6H3XSlgW5os3KTYOpSVOLWdAHITP0YAVYhWYeE'),
(8, 'dinda', 'dinda123', 'mahasiswa', '2017-05-15 08:52:35', '2017-05-18 08:24:53', 'HbkIOkZl7OsJi4rbAlY6uysw6shfBAwRlTHmQ5gv1f3Ixyh8FoA9Yx0G8Gtm'),
(9, 'aan', 'aan123', 'aslab', '2017-05-15 08:53:11', '2017-05-22 21:39:34', 'Ue2LCkcfTv3EXC1AZY6I8NQTn9OBorSTEQy4FfZAR6QuVvCEj13TeHZ1Gw5g'),
(10, 'hilmy', 'hilmy123', 'aslab', '2017-05-15 08:54:21', '2017-05-18 07:02:41', 'JtAcwgb3tZa7sRLb7WovjjmmZM4PfF6fcQr6H5JjYp9Q3RBwkgaORxSdqb1J'),
(11, 'bayu', 'bayu123', 'aslab', '2017-05-15 08:55:21', '2017-05-15 09:37:40', 'pwuoaeSwtXm8phpBkbRLKLLMB0mjw0bB20EG23AqIgQJYGvlFCrrALVMZF7i'),
(12, 'masna', 'masna123', 'dosen', '2017-05-15 08:56:07', '2017-05-18 07:45:17', 'NFkjpSq5LW9TKHT1P3WWlayhnCk7oSkCwFC8Ok9uY82G1NQIvVH1iW9TjVR4'),
(13, 'ros1', 'ros123', 'dosen', '2017-05-15 08:57:37', '2017-05-15 19:34:03', 'IijeAR2Rn9JIbEDcwM1KdWKugplMt3yGzW5aKeajnuHcPqWAQvoqRdrrpOFd'),
(15, 'iki', 'iki123', 'mahasiswa', '2017-05-15 09:55:56', '2017-05-15 09:55:56', NULL),
(16, 'suryani', 'surya123', 'mahasiswa', '2017-05-18 07:56:54', '2017-05-18 07:56:54', NULL),
(17, 'kiki', 'kiki123', 'aslab', '2017-05-18 07:57:47', '2017-05-18 07:57:47', NULL),
(18, 'abas', 'abas123', 'dosen', '2017-05-18 08:10:04', '2017-05-18 08:10:04', NULL),
(19, 'wiji', 'wiji123', 'mahasiswa', '2017-05-19 20:18:58', '2017-05-19 20:18:58', NULL),
(20, 'iin', 'iin123', 'aslab', '2017-05-19 20:21:01', '2017-05-19 20:21:01', NULL),
(21, 'novi', 'novi123', 'dosen', '2017-05-19 20:23:11', '2017-05-19 20:23:11', NULL),
(27, 'aku', '1234567890', 'dosen', '2017-05-22 21:41:41', '2017-05-22 21:41:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE IF NOT EXISTS `ruangan` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Puskom1', '2017-05-07 18:38:07', '2017-05-07 18:38:07'),
(2, 'Lab bp', '2017-05-15 08:58:43', '2017-05-15 08:58:43'),
(3, 'puskom 2', '2017-05-15 08:58:53', '2017-05-15 08:58:53'),
(4, '407', '2017-05-19 20:23:36', '2017-05-19 20:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`), ADD KEY `admin_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `aslab`
--
ALTER TABLE `aslab`
 ADD PRIMARY KEY (`id`), ADD KEY `aslab_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `aslab_pratikum`
--
ALTER TABLE `aslab_pratikum`
 ADD PRIMARY KEY (`id`), ADD KEY `aslab_pratikum_aslab_id_foreign` (`aslab_id`), ADD KEY `aslab_pratikum_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`id`), ADD KEY `dosen_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
 ADD PRIMARY KEY (`id`), ADD KEY `dosen_matakuliah_dosen_id_foreign` (`dosen_id`), ADD KEY `dosen_matakuliah_matakuliah_id_foreign` (`matakuliah_id`);

--
-- Indexes for table `jadwal_pratikum`
--
ALTER TABLE `jadwal_pratikum`
 ADD PRIMARY KEY (`id`), ADD KEY `jadwal_pratikum_mahasiswa_id_foreign` (`mahasiswa_id`), ADD KEY `jadwal_pratikum_ruangan_id_foreign` (`ruangan_id`), ADD KEY `jadwal_pratikum_aslab_pratikum_id_foreign` (`aslab_pratikum_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id`), ADD KEY `mahasiswa_pengguna_id_foreign` (`pengguna_id`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `aslab`
--
ALTER TABLE `aslab`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `aslab_pratikum`
--
ALTER TABLE `aslab_pratikum`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal_pratikum`
--
ALTER TABLE `jadwal_pratikum`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `ruangan`
--
ALTER TABLE `ruangan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
ADD CONSTRAINT `admin_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aslab`
--
ALTER TABLE `aslab`
ADD CONSTRAINT `aslab_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aslab_pratikum`
--
ALTER TABLE `aslab_pratikum`
ADD CONSTRAINT `aslab_pratikum_aslab_id_foreign` FOREIGN KEY (`aslab_id`) REFERENCES `aslab` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `aslab_pratikum_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
ADD CONSTRAINT `dosen_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen_matakuliah`
--
ALTER TABLE `dosen_matakuliah`
ADD CONSTRAINT `dosen_matakuliah_dosen_id_foreign` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `dosen_matakuliah_matakuliah_id_foreign` FOREIGN KEY (`matakuliah_id`) REFERENCES `matakuliah` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal_pratikum`
--
ALTER TABLE `jadwal_pratikum`
ADD CONSTRAINT `jadwal_pratikum_aslab_pratikum_id_foreign` FOREIGN KEY (`aslab_pratikum_id`) REFERENCES `aslab_pratikum` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `jadwal_pratikum_mahasiswa_id_foreign` FOREIGN KEY (`mahasiswa_id`) REFERENCES `mahasiswa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `jadwal_pratikum_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_pengguna_id_foreign` FOREIGN KEY (`pengguna_id`) REFERENCES `pengguna` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
