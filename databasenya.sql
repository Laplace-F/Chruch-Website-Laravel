-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 24, 2025 at 09:27 AM
-- Server version: 10.11.10-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u788832395_gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `idkegiatan` int(11) NOT NULL,
  `judulkegiatan` varchar(250) NOT NULL,
  `deskripsikegiatan` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `tanggalkegiatan` date NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`idkegiatan`, `judulkegiatan`, `deskripsikegiatan`, `lokasi`, `tanggalkegiatan`, `foto`) VALUES
(10, 'SUNDAY SERVICE', '<p>Penuh sukacita dan firman Tuhan.</p>', 'Ruko Apartemen Scientia Blok 006', '2024-12-21', '20250612141543_tes.png'),
(11, 'KIDS CHURCH', '<p>Ibadah seru untuk anak-anak.</p>', 'Ruko Apartemen Scientia Blok 006', '2024-12-21', '20250525133248_kids.png'),
(12, 'PRAYER NIGHT', '<p>Bersama berdoa dan mengalami hadirat Tuhan.</p>', 'Ruko Apartemen Scientia Blok 006', '2025-05-24', '20250525133325_prayer.png'),
(23, 'Faith-Filled Gatherings for Every Generation', '<p>Be Part of What God is Doing</p>', 'Ruko Apartemen Scientia Blok 006', '2025-03-03', 'tes.png');

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

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
-- Table structure for table `prayer`
--

CREATE TABLE `prayer` (
  `idpray` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `hopepray` text NOT NULL,
  `answerpray` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prayer`
--

INSERT INTO `prayer` (`idpray`, `name`, `phonenumber`, `hopepray`, `answerpray`) VALUES
(10, 'Harun', '082272734545', 'Pengen Lulus Elfun', 'Masih hidup sampai sekarang'),
(11, 'Harun Al Rasyid', '082273316767', 'Saya Pengen dapat Nilai 100 Di UAS Mata Kuliah Web Programming', 'Saya Udah dapat Nilai 97 Di UTS Webprog'),
(12, 'Maria Sitorus', '081234567891', 'Mohon dukungan doa untuk kesehatan ibu saya yang sedang sakit.', 'Belum'),
(13, 'Andi Gunawan', '082198765432', 'Doakan saya agar mendapat pekerjaan yang sesuai dengan panggilan Tuhan.', 'Saya diterima kerja di perusahaan impian saya.'),
(14, 'Rina Oktaviani', '082198765432', 'Mohon dukungan doa untuk studi saya agar bisa lulus tepat waktu.', 'Saya berhasil menyelesaikan skripsi saya.'),
(15, 'David Silalahi', '089876543210', 'Mohon doa untuk hubungan saya dengan pasangan agar dipulihkan.', 'Kami sudah berdamai dan kembali menjalin komunikasi.'),
(16, 'Lidia Tambunan', '081234123412', 'Doakan saya bisa memiliki keturunan.', 'Puji Tuhan, saya hamil anak pertama.'),
(17, 'Samuel Wijaya', '081298765432', 'Doakan agar keluarga saya mengalami pemulihan relasi.', 'Kami mulai kembali membangun kebersamaan.'),
(18, 'Melisa Gunawan', '089998877665', 'Mohon dukungan doa untuk operasi yang akan dijalani minggu depan.', 'Operasi berjalan lancar dan saya pulih dengan cepat.'),
(19, 'Daniel Halim', '083812345678', 'Doakan saya untuk lebih taat dan tekun dalam ibadah.', 'Saya mulai disiplin saat teduh dan ikut pelayanan.'),
(20, 'Clarissa Anggi', '082255667788', 'Mohon doa agar saya bisa menemukan komunitas rohani yang sehat.', 'Saya bergabung dengan Connect Group dan merasa diterima.'),
(21, 'Enrique Fortune', '99582877', '\" Boost your [\'www.everynationserpong.com] with \'Money Robot AI\' – an advanced automated link building software, now available with a 7-day free trial! \"\r\n\r\nSign up today for free trial :-  http://moneyrobot.marketinghelp.online/\r\n\r\n✅ No credit card required\r\n✅ Easy to use\r\n✅ Fully automated SEO solution\r\n\r\nTo know more : https://marketing-help-money-robot.blogspot.com/2025/05/ai-seo-tool-secret-weapon-in-2025.html\r\n\r\n\r\nNote: Kindly ignore if found irrelevant', '\" Boost your [\'www.everynationserpong.com] with \'Money Robot AI\' – an advanced automated link building software, now available with a 7-day free trial! \"\r\n\r\nSign up today for free trial :-  http://moneyrobot.marketinghelp.online/\r\n\r\n✅ No credit card required\r\n✅ Easy to use\r\n✅ Fully automated SEO solution\r\n\r\nTo know more : https://marketing-help-money-robot.blogspot.com/2025/05/ai-seo-tool-secret-weapon-in-2025.html\r\n\r\n\r\nNote: Kindly ignore if found irrelevant'),
(22, 'Deepa Kumari', '8146753972', 'Hy,\r\n\r\nI was going through your website have looked at your website and realized your website has nice design but your website ranking is not good on major search engines Google, Yahoo and Bing. Our main focus will be to help generate more conversations & online Views.\r\n\r\nWe can place your website on Google\'s 1st page. We will improve your website’s position on all search engines and getting more Views.\r\n\r\nPls share your Website, Email Id and Contact number if you are interested.\r\n\r\nKind Regards,\r\nDeepa', 'Hy,\r\n\r\nI was going through your website have looked at your website and realized your website has nice design but your website ranking is not good on major search engines Google, Yahoo and Bing. Our main focus will be to help generate more conversations & online Views.\r\n\r\nWe can place your website on Google\'s 1st page. We will improve your website’s position on all search engines and getting more Views.\r\n\r\nPls share your Website, Email Id and Contact number if you are interested.\r\n\r\nKind Regards,\r\nDeepa'),
(23, 'bapak arya', '62123456789', 'luluskan saia', 'luluskannn'),
(24, 'RaymondGiz', '87339948593', 'Good morning! everynationserpong.com \r\n \r\nNow you have the opportunity to send corporate offers securely and in accordance with legal standards, guaranteeing message reception. \r\nWhen these messages are submitted, no personal data is used, and submissions are made to official inquiry forms intended for business communication. \r\nBecause Contact Forms are designed for legitimate messages, submissions made through them are more likely to be seen by recipients. \r\nEnjoy a free trial and see the benefits for yourself. \r\nYou can count on us to send up to 50,000 messages reliably. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.', 'Good morning! everynationserpong.com \r\n \r\nNow you have the opportunity to send corporate offers securely and in accordance with legal standards, guaranteeing message reception. \r\nWhen these messages are submitted, no personal data is used, and submissions are made to official inquiry forms intended for business communication. \r\nBecause Contact Forms are designed for legitimate messages, submissions made through them are more likely to be seen by recipients. \r\nEnjoy a free trial and see the benefits for yourself. \r\nYou can count on us to send up to 50,000 messages reliably. \r\n \r\nThe cost of sending one million messages is $59. \r\n \r\nThis message was automatically generated. \r\n \r\nContact us. \r\nTelegram - https://t.me/FeedbackFormEU \r\nWhatsApp - +375259112693 \r\nWhatsApp  https://wa.me/+375259112693 \r\nWe only use chat for communication.');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4C4lVAsDJyS1IVJDIk1lXAs0dquxQyVqOOnWQftB', NULL, '43.130.102.223', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSmd3ZkFWVkYxTTdRMGQ0T0t0d0hJQ2NhN0NiRXZFdHJVOFk4S1ltaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753322520),
('65OPC0R3j0ZA5qMyUnwUUboAKCmmmDKq6lfu0tmt', NULL, '43.134.48.119', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVDFBM3BZVXJEcGEzYkZuWW43WEpYOGxlWFRPMkM2VTY2OU1YRjRxOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753293746),
('6iit5HqrRaxbZErObozfr0pB4unqDgKkFfZiKNA6', NULL, '43.157.172.39', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS3FSVDNGM1hYd3NsSHpVUTBTR05qb1dPRTJ0ZXVTY05xNGVJMTVhayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbS9zaGVybW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753256550),
('8eVVvwDfdQroQ9gc5GI709PNg8NwDKYwjOKpBj9Z', NULL, '162.62.213.151', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic2RaVHJmN3BOQ2lkR3ljdnpvanFLNjFjTWxBVVdpbjh2VGpZNDRNQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753327815),
('8pQScKFdKjFxb51IeqTLHF1stQ3nSdDYCbS2AZkW', NULL, '64.227.171.92', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGpiMlJ3QzNIRmVKdVlhT0lKaVg0ZGw2b0MzUzhOdmxYTk1ya29DQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753258675),
('8RVJiIJ5BdzqalahCtGfS9JqZZdNkaSRqOr1XATg', NULL, '17.241.219.24', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/17.4 Safari/605.1.15 (Applebot/0.1; +http://www.apple.com/go/applebot)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXRaNzM0eG1CeTRncE5KSDdMeFVTS2s2SzJ2emRETktiYmhqQTVMbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbS9ldmVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753301668),
('FFC1K3KdJQzQXoyWjpcJHkVXRDQa4fu345EflD94', NULL, '43.152.72.247', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienVKcDdFT2o4VHJkUWhLZUoxVHFaeDg3aFplaktzRmN6Uk5ZRFVaZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753275693),
('FIBTewzdveCnwfZGmd4HzPl0Fa6PnuLyBftlsvee', NULL, '43.134.250.55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEhkWUg2MmxLQ3FJM29lUTM3eGdGNnpCV291OEdLY25TMkthZUxnNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753275916),
('FYmOfIEKPVHDSQLhbgpRDm4JgSN0BLIA69Cuvtcj', NULL, '43.133.60.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkJzcEZhbEdvaTVSZnlCN0VVeHlNZXVJMEUzcUNpNHU2SmMzSHlWbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753305127),
('gYB8qQhHsmSCIEu7PZGHT0YncnNUbUEkyBEzTIOC', NULL, '43.156.202.34', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMk9wcDlTTEJLZHh1ZmFuNGJXM3RaSVdnb0Ftb3QzcW9wNTJ3aTVSNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753293930),
('hkB2GjFL5JClOHOEsIhgV7ks40VXKvYQeIeTaHDm', NULL, '43.131.48.133', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmc0WmM0TnBSUmx4RFExMXFUaXpUWXo0emlybThVS21KUkJTWmpaUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753333467),
('HRB0aOZwXP87NfYCVpzLXDvhbsbQjHDTiGzrHpto', NULL, '172.253.15.226', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmM1djJ0clFQdXhjRDVSbldGMGE1UVZXNkhzZVhPajBOdUFkTjF6VSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbS9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753335123),
('jHGF0chXPcwaMPSfsbgMssdlsMR82ovvAbiNOSGO', 2, '114.122.43.46', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVWtFMnZhY2JPU3VjMEl6V2hZWmxkWEh6NkxybnYxdDNFQjMycXZ1MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbS9hZG1pbi9wcmF5ZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6NDoicm9sZSI7czoxMToiU3VwZXIgQWRtaW4iO30=', 1753339764),
('jtY1y7CrcvJsBktaCJpZk1lNLHqKx88dblbMIe8Z', NULL, '2a02:4780:6:c0de::8', 'Go-http-client/2.0', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiNGxqZVJRRlVON2R4MFVBcU45ek16V2djMk42ak9zYlpYTjhyT0FQTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753329440),
('kqjd1T5WBJj4PkhLFw5LkNLuGx14AjpEMXdKUSWh', NULL, '43.156.44.119', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGo4Z0tFeEREeG9MaWphVFBBRzFha0l6dDRJUk04VVlsME9kNUpSSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753281937),
('LrIsHbSIbT1kshJB4pLNQtMXN1AE6cYgpTl8FPpG', NULL, '49.51.252.146', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT2VKVUFpNkh4TVV3VUdJbG1oMnJybzQ5MmdJalNKS2IwSUdjWGZDRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753254353),
('Mnu8KopphGU5d5EZV3HCFyTIkVzIkfde3Sq5HEl5', NULL, '43.128.102.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTVNBR2YweDdKaVp4M25kRDlzdXF3cVhTdDJ5ZUdmM3FJeTlOMnRJeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753263452),
('mNVTBw5zKtsq18CtP4UgVzoPUJRBwoOd054sCdgl', NULL, '129.226.193.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmFQN1Y4bnFsNERGRTFJb2lVc1FtWXd4OFlXN1dPWG9sMEN3cXFORiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753322099),
('mTl0n5nIRvX5hV1kEk0s5BQs4AqbpRyhV2uaCljK', NULL, '129.226.193.201', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib29LMW92RGxjVU9jSWZrWnFQeFNhcVBmY1M0Z1pmdzk5SGw3eUo5TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753257566),
('OgDe1N44GajD6SdLVBImPW94JAmKXT9q7GlQNtxn', NULL, '43.134.250.55', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2IwZG5XOUxZNkFmdnRJZ3BzYm5jSmdlVGJFbFphVXZMSGRzU1BiMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753310795),
('p0nWDBeJMWC4AOlQ6hQbCzvMzSs6TChW1C0Gcmg7', NULL, '43.153.123.4', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWUzcHd3WVBtRXJOZjYxWTNuOWJmcVJWclp6S2Fmd0IxdDhwendPWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753297995),
('p1nObGtacyn4KcPE7dnDqKSVNVDKPDyjNwBPR0Ak', NULL, '43.133.60.102', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVUExT1I3dldJajJZTlRzNmhkbnN6emozb2ltY3A3UExpRHMzc0tsRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753299461),
('pATwC1AhUugk8zSiBFMhdQwoe3C0Z7mpiiilKQeZ', NULL, '44.248.33.214', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.181 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmZGZEVmNVE1OHpPUUl0WHo5M2ZkdDdsWWtrQ2VtM21oVXpIVnlneiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753319167),
('PGf5UOrzgP3DW0t05FF6F7FKIOWOB84fIN5nsf6a', NULL, '43.156.12.81', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia0xSaFpzZUE2Y2lUcjhTYmFkNGhtc0VENjVGR0xtQ2hVQktBTFIyNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753287916),
('qGrYLkvlwO2DWN0B8BR2lmr8CkYjS69YIeQpiuPq', NULL, '118.89.233.234', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQU1YOVZlNjU3Tm1FeDZ1VDRDalNFdkU2SmVGWm9kdkhyb2Q4S1BBWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753331976),
('qIYtHSgDVrh06jvld7vxH1y4Xq1RWgRoP5UbfhyX', NULL, '43.156.17.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXcyNGpudUJrRWx0T1psRm1yTXl2bTdVemZZRDVsV0ludVh5d2ZRYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753251803),
('QSCkleTmAo62QtJgtT4SdH934YpvhwSiPFxcuT00', NULL, '124.156.196.149', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSWdWWDFselNiM0luN0dHakd4Njdxa2pGcGFUY0JGZGhCVE96b1hRSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753345591),
('R04mR03181eboK5MLgberquUy3WlqmMiUFQlf2ZF', NULL, '43.156.17.174', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3N2NEpBZWZKYWtoSk9XckFzZ3d1WEhTZ2VTYU5lUnFaSFpFM3FQVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753269691),
('rDBDKZTdkI8CbkWGiyOzLiLuIWF69FzihAlQX12s', NULL, '137.226.113.44', 'Mozilla/5.0 researchscan.comsys.rwth-aachen.de', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2RpUUswWTZHcU8xRFZKa3FlZnpYcUlwNVVxZEJ3V2pjM2xTNk9kdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmV2ZXJ5bmF0aW9uc2VycG9uZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753311046),
('RkIIPlh7Uk2Ad3XR53zMRpV6ZTdrsZf1YDKzbOuM', NULL, '54.36.148.152', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXVNblRPa0ttZ04zWnZ4UzB1eHJ3RVBjTkI4a05Md0NtWmoyZlBweiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753270376),
('rKPbR0eeFBbVQexCoSrjkYvIglcm3DK04kd6qGWN', NULL, '43.153.47.201', 'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkFnYUlhZVpFc3pqbzZZR25SeUx2WUF5Q2ZrTTRmOE1RSlg1aUNRdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbS93aG9yc2lwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1753255782),
('twU6Bk593hLfuMLXcvUgSNTmCv4JVYwbcL7Ev9Eq', NULL, '43.128.102.45', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMG9pMVpNMWJ5QVFzTWtnTFUydERhenBMRk0yek5JM2wyNldKb21ueSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753316437),
('wbCmL9WQjhKW34XOm42jKuFDCjM24moAP1wKS6We', NULL, '43.131.46.251', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidEx2OWloVVR4OXNEQXZmMWNMSG16a3ZyNTFHZkpaMzJKU1pzVW0wZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHBzOi8vZXZlcnluYXRpb25zZXJwb25nLmNvbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1753339539),
('wLA9jFivqzl5lFTnNC1IgmxvEMqCVx1rCwUe7PrR', NULL, '137.226.113.44', 'Mozilla/5.0 researchscan.comsys.rwth-aachen.de', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0R4Y0pqZ1RhNnp0VER6WDZmTllsc0FpUmRhY1ZJM2pVckpvUjJwUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHBzOi8vd3d3LmV2ZXJ5bmF0aW9uc2VycG9uZy5jb20iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1753311047);

-- --------------------------------------------------------

--
-- Table structure for table `shermon`
--

CREATE TABLE `shermon` (
  `idshermon` int(11) NOT NULL,
  `namashermon` varchar(255) NOT NULL,
  `tanggalshermon` date NOT NULL,
  `deskripsishermon` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shermon`
--

INSERT INTO `shermon` (`idshermon`, `namashermon`, `tanggalshermon`, `deskripsishermon`, `link`) VALUES
(4, 'My God, My God – Ps Agus Sukwanto [Khotbah / Sermon]', '2025-05-25', '2', 'https://www.youtube.com/embed/J7Z9AXMfUG8?si=E8hvf4NcCvcw2O_r'),
(5, 'Place of Grace: House of Prayer for The Nation – Ps. Agus Sukwanto [Sermon / Khotbah]', '2025-06-04', '-', 'https://www.youtube.com/embed/SX-_l493zSs?si=F9Vt1d9ip4-uduBo'),
(6, 'Ongoing Missions: The Everyday Gospel - Justin Tjoandi [Sermon / Khotbah]', '2025-05-13', 'INI SERMON', 'https://www.youtube.com/embed/VJxycYVgXuY?si=in9BVj0VWm2JzfD-'),
(7, 'Mother\'s Day Celebration - Ps.Agus Sukwanto [Sermon / Khotbah]', '2025-06-01', 'Khotbah ini dibagikan khusus untuk hari ibu oleh Every Nation Serpong Lead Pastor, Agus Sukwanto, pada tanggal 11 Mei 2025 di ibadah minggu Every Nation Serpong.', 'https://www.youtube.com/embed/gZWu18V2eDc?si=U_KfnzdrqK3GFxwI'),
(8, 'Lest We Forget – Justin Tjoandi [Khotbah / Sermon]', '2025-06-18', '-', 'https://www.youtube.com/embed/X3tWIy4XhBo?si=a_y00_Ieay8ULraN'),
(9, 'The Passover Lamb – Ps. Agus Sukwanto [Khotbah / Sermon]', '2025-08-14', 'Melalui kuasa-Nya yang dahsyat, Allah kita yang sejati membebaskan kita. Allah memenuhi janji-Nya untuk membebaskan umat-Nya dari situasi sulit dan pertentangan. Dia menuntun kita menuju pekerjaan, rencana, dan tujuan-Nya, tanpa ada yang menghalangi kita.', 'https://www.youtube.com/embed/EGnxXlDiszw?si=jtChJdTFNiOdts1l'),
(10, 'Ongoing Missions: Beautiful Feet in Ordinary Places – Ps. Agus Sukwanto [Sermon / Khotbah]', '2026-06-05', 'Khotbah ini dibagikan dari Roma 10:12-17 oleh Every Nation Serpong Lead Pastor, Agus Sukwanto, pada tanggal 27 April 2025 di ibadah minggu Every Nation Serpong.', 'https://www.youtube.com/embed/nK2Tm9DEzvU?si=YYamG8KhHGPFEBgS');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$k4OuVGDSS3Fe08ZfVZbW.Oh7xsaUfbchhyTrmSvRmpwebfDOmJgUa', NULL, NULL, '2024-12-20 12:38:32', 'Admin'),
(2, 'Super Admin', 'superadmin@gmail.com', NULL, '$2y$12$k4OuVGDSS3Fe08ZfVZbW.Oh7xsaUfbchhyTrmSvRmpwebfDOmJgUa', NULL, NULL, NULL, 'Super Admin'),
(3, 'Super Admin 2', 'everynat@gmail.com', NULL, '$2y$12$k4OuVGDSS3Fe08ZfVZbW.Oh7xsaUfbchhyTrmSvRmpwebfDOmJgUa', NULL, NULL, NULL, 'Super Admin'),
(13, 'admin2', 'admin2@gmail.com', NULL, '$2y$12$k4OuVGDSS3Fe08ZfVZbW.Oh7xsaUfbchhyTrmSvRmpwebfDOmJgUa', NULL, NULL, NULL, 'Admin'),
(14, 'rayden', 'rayden@gmail.com', NULL, '$2y$12$k4OuVGDSS3Fe08ZfVZbW.Oh7xsaUfbchhyTrmSvRmpwebfDOmJgUa', NULL, NULL, NULL, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `whorsip`
--

CREATE TABLE `whorsip` (
  `idwhorsip` int(11) NOT NULL,
  `judulwhorsip` varchar(250) NOT NULL,
  `foto` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `jam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `whorsip`
--

INSERT INTO `whorsip` (`idwhorsip`, `judulwhorsip`, `foto`, `lokasi`, `jam`) VALUES
(1, 'Sunday Service', '20250525133722_sudnay.png', 'Ruko Apartemen Scientia Blok 006', '2025-06-04 10:00:00'),
(2, 'Kids Church', '20250525133656_kids churc.png', 'Vega Hotel Gading Serpong Acapella 4', '2025-06-04 20:00:00'),
(3, 'Prayer Weekly', '20250612124709_tes.png', 'Ruko Scientia Resident Blok R006', '2025-06-04 20:00:00');

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
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`idkegiatan`);

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
-- Indexes for table `prayer`
--
ALTER TABLE `prayer`
  ADD PRIMARY KEY (`idpray`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shermon`
--
ALTER TABLE `shermon`
  ADD PRIMARY KEY (`idshermon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whorsip`
--
ALTER TABLE `whorsip`
  ADD PRIMARY KEY (`idwhorsip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `idkegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prayer`
--
ALTER TABLE `prayer`
  MODIFY `idpray` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shermon`
--
ALTER TABLE `shermon`
  MODIFY `idshermon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `whorsip`
--
ALTER TABLE `whorsip`
  MODIFY `idwhorsip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
