-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 03:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveliooalaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `brods`
--

CREATE TABLE `brods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazivBrod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisBrod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brods`
--

INSERT INTO `brods` (`id`, `nazivBrod`, `opisBrod`, `image`, `created_at`, `updated_at`) VALUES
(5, 'Prvibrod', 'Opissssss', 'image/CLmm2F6DbZ2beyz5zjAdyAqqCatDBkwl4C3PFlXs.jpeg', '2020-06-12 05:21:33', '2020-06-12 11:11:36'),
(6, 'Drugibrod', 'Opissssss', 'image/oPs1DqH9NCwGR47LPPriiCSmOMA9Db2ZROKn8JBY.jpeg', '2020-06-12 05:21:48', '2020-06-12 11:11:22'),
(7, 'Trecibrod', 'BlaBla', 'image/GplIlosspQdTfN7g3kYpeRrZxGEfrOw0E524dxzm.webp', '2020-06-12 07:13:36', '2020-06-12 11:11:10');

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
-- Table structure for table `gosts`
--

CREATE TABLE `gosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oibGost` int(11) NOT NULL,
  `imeGost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezimeGost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datumRodenja` date NOT NULL,
  `idKategorijaGost` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gost_putovanjes`
--

CREATE TABLE `gost_putovanjes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idGost` bigint(20) UNSIGNED NOT NULL,
  `idPutovanje` bigint(20) UNSIGNED NOT NULL,
  `cijenaGosta` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gost_putovanjes`
--

INSERT INTO `gost_putovanjes` (`id`, `idGost`, `idPutovanje`, `cijenaGosta`, `created_at`, `updated_at`) VALUES
(271, 24, 6, 60, '2020-06-12 09:50:12', '2020-06-12 09:50:12'),
(277, 24, 7, 70, '2020-06-12 09:54:29', '2020-06-12 09:54:29'),
(287, 23, 6, 30, '2020-06-12 11:09:39', '2020-06-12 11:09:39'),
(288, 1, 7, 35, '2020-06-12 11:10:08', '2020-06-12 11:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `kategorija_gosts`
--

CREATE TABLE `kategorija_gosts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazivKategorija` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `godinaRodenja` date DEFAULT NULL,
  `tekucaGodina` date DEFAULT NULL,
  `cijena` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2020_05_26_113906_create_brods_table', 1),
(5, '2020_05_26_115956_create_rutas_table', 1),
(6, '2020_05_26_121502_create_zaposleniks_table', 1),
(7, '2020_05_26_121959_create_putovanjes_table', 1),
(8, '2020_05_26_125503_create_kategorija_gosts_table', 1),
(9, '2020_05_26_130000_create_gosts_table', 1),
(10, '2020_05_26_130515_create_gost_putovanjes_table', 1);

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
-- Table structure for table `putovanjes`
--

CREATE TABLE `putovanjes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `datum` date NOT NULL,
  `vrijeme` time NOT NULL,
  `idBrod` bigint(20) UNSIGNED NOT NULL,
  `idRuta` bigint(20) UNSIGNED NOT NULL,
  `idZaposlenik` bigint(20) UNSIGNED DEFAULT NULL,
  `cijena` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `putovanjes`
--

INSERT INTO `putovanjes` (`id`, `datum`, `vrijeme`, `idBrod`, `idRuta`, `idZaposlenik`, `cijena`, `created_at`, `updated_at`) VALUES
(6, '2020-06-20', '23:59:00', 6, 4, NULL, 60, '2020-06-12 05:22:45', '2020-06-12 05:22:45'),
(7, '2020-06-21', '22:59:00', 7, 5, NULL, 70, '2020-06-12 05:22:57', '2020-06-12 07:13:57');

-- --------------------------------------------------------

--
-- Table structure for table `rutas`
--

CREATE TABLE `rutas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nazivRuta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opisRuta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rutas`
--

INSERT INTO `rutas` (`id`, `nazivRuta`, `opisRuta`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Kornati', 'Opissssss', 'image/UUEuM1PTkWLWvTxbAHuz2eWtGwxNa341x1JKVg6k.jpeg', '2020-06-12 05:22:13', '2020-06-12 05:22:13'),
(5, 'Stagod', 'Opissssss', 'image/piYM1Ldqs6aKrn8WMtBuZMLNLo53635PvpEJhZip.jpeg', '2020-06-12 05:22:22', '2020-06-12 05:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `oibUser` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imeUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezimeUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datumRodenja` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `admin`, `oibUser`, `imeUser`, `prezimeUser`, `datumRodenja`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'lkolonic@veleri.hr', NULL, '$2y$10$ZbSEFnCRDNsw2V1.BgpPquowd7IEVcmrxKoDcdJrfYtmsbLTmAW.u', 1, '1234567891', 'laura', 'kolonic', '2020-06-05', NULL, '2020-06-04 09:11:54', '2020-06-04 09:11:54'),
(22, 'petra@gmail.com', NULL, '$2y$10$Er/g03mHg8Yz9WKiuOENJe2yEVmMpeawgdBk./TRKSkrnSZ0ypwYq', 0, '11111111111', 'petra', 'petrovic', '2020-05-09', NULL, '2020-06-12 05:23:38', '2020-06-12 05:23:38'),
(23, 'tinkec@gmail.com', NULL, '$2y$10$rgV0Jq41bQpW31w7GWd/A.3zZ72OxqerX3HZut88cYn1cim3fmziW', 0, '22222222222', 'tin', 'tinkovic', '2020-04-24', NULL, '2020-06-12 05:26:03', '2020-06-12 05:26:03'),
(24, 'pero@gmail.com', NULL, '$2y$10$bzzOj0OS9KSHXcEpNjOxlem32YUxE8SKRjXDVVWoSJWrl.0/YEY6W', 0, '33333333333', 'PERO', 'PERIC', '2003-02-05', NULL, '2020-06-12 06:54:15', '2020-06-12 06:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `zaposleniks`
--

CREATE TABLE `zaposleniks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `oibZaposlenik` int(11) NOT NULL,
  `imeZaposlenik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PrezimeZaposlenik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datumRodenja` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brods`
--
ALTER TABLE `brods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gosts`
--
ALTER TABLE `gosts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gosts_idkategorijagost_foreign` (`idKategorijaGost`);

--
-- Indexes for table `gost_putovanjes`
--
ALTER TABLE `gost_putovanjes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gost_putovanjes_idgost_foreign` (`idGost`),
  ADD KEY `gost_putovanjes_idputovanje_foreign` (`idPutovanje`);

--
-- Indexes for table `kategorija_gosts`
--
ALTER TABLE `kategorija_gosts`
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
-- Indexes for table `putovanjes`
--
ALTER TABLE `putovanjes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `putovanjes_idbrod_foreign` (`idBrod`),
  ADD KEY `putovanjes_idruta_foreign` (`idRuta`),
  ADD KEY `putovanjes_idzaposlenik_foreign` (`idZaposlenik`);

--
-- Indexes for table `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zaposleniks`
--
ALTER TABLE `zaposleniks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brods`
--
ALTER TABLE `brods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gosts`
--
ALTER TABLE `gosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gost_putovanjes`
--
ALTER TABLE `gost_putovanjes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `kategorija_gosts`
--
ALTER TABLE `kategorija_gosts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `putovanjes`
--
ALTER TABLE `putovanjes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `zaposleniks`
--
ALTER TABLE `zaposleniks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gosts`
--
ALTER TABLE `gosts`
  ADD CONSTRAINT `gosts_idkategorijagost_foreign` FOREIGN KEY (`idKategorijaGost`) REFERENCES `kategorija_gosts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `gost_putovanjes`
--
ALTER TABLE `gost_putovanjes`
  ADD CONSTRAINT `gost_putovanjes_idgost_foreign` FOREIGN KEY (`idGost`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `gost_putovanjes_idputovanje_foreign` FOREIGN KEY (`idPutovanje`) REFERENCES `putovanjes` (`id`);

--
-- Constraints for table `putovanjes`
--
ALTER TABLE `putovanjes`
  ADD CONSTRAINT `putovanjes_idbrod_foreign` FOREIGN KEY (`idBrod`) REFERENCES `brods` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `putovanjes_idruta_foreign` FOREIGN KEY (`idRuta`) REFERENCES `rutas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `putovanjes_idzaposlenik_foreign` FOREIGN KEY (`idZaposlenik`) REFERENCES `zaposleniks` (`id`) ON DELETE CASCADE;


--
-- Metadata
--
USE `phpmyadmin`;

--
-- Metadata for table brods
--

--
-- Metadata for table failed_jobs
--

--
-- Metadata for table gosts
--

--
-- Metadata for table gost_putovanjes
--

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'laraveliooalaura', 'gost_putovanjes', '{\"sorted_col\":\"`id`  ASC\"}', '2020-06-12 07:20:14');

--
-- Metadata for table kategorija_gosts
--

--
-- Metadata for table migrations
--

--
-- Metadata for table password_resets
--

--
-- Metadata for table putovanjes
--

--
-- Metadata for table rutas
--

--
-- Metadata for table users
--

--
-- Metadata for table zaposleniks
--

--
-- Metadata for database laraveliooalaura
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
