-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 07:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get_shohan`
--

-- --------------------------------------------------------

--
-- Table structure for table `collab`
--

CREATE TABLE `collab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collab`
--

INSERT INTO `collab` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'get.png', NULL, '2023-03-16 02:05:52'),
(2, 'getlink.png', '2023-03-08 15:22:42', '2023-03-16 02:06:19'),
(3, 'getpos.png', '2023-03-08 16:49:52', '2023-03-16 02:06:24'),
(4, 'getschool.png', '2023-03-08 16:56:06', '2023-03-16 02:06:30'),
(7, 'humagold.png', '2023-03-09 12:22:17', '2023-03-16 02:06:35');

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
-- Table structure for table `getlink`
--

CREATE TABLE `getlink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `getlink`
--

INSERT INTO `getlink` (`id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Get Link', 'Pendekkan Link Panjang Anda Menjadi Lebih RIngkas Dan Enak Di Pandang Serta Lebih Mudah Untuk Menghafalkannya', '1681353009.jpg', NULL, '2023-04-12 19:30:10'),
(2, 'Short Link.', 'Memendekkan link yang panjang agar mudah di akses', 'shortlink.png', NULL, '2023-03-27 14:39:25'),
(3, 'Gratis Semua Pengguna', 'Memendekkan link yang panjang agar mudah di akses', 'gear.png', NULL, '2023-03-16 02:10:23'),
(4, 'Gratis Semua Pengguna', 'Memendekkan link yang panjang agar mudah di akses', 'person.png', NULL, '2023-03-16 02:11:05'),
(5, 'Content Managament System.', 'Buat landing page anda tanpa perlu ngoding', NULL, NULL, NULL),
(6, 'Penggunaan yang mudah', NULL, NULL, NULL, NULL),
(7, 'Desain yang responsive', NULL, NULL, NULL, NULL),
(8, 'Banyak pilihan template', NULL, NULL, NULL, NULL),
(9, 'Mudah Digunakan', 'Tanpa perlu skill coding sedikitpun untuk membuat website dan microsite anda.', 'gear2.png', NULL, '2023-03-16 02:15:05'),
(10, '10.000+ Pengguna', 'Lebih dari 10.000 pengguna dari segala penjuru dunia.', 'persons.png', NULL, '2023-03-16 02:15:21'),
(11, 'Tanpa Batas', 'Tidak ada batasan apapun untuk link anda.', 'sacf.png', NULL, '2023-03-16 02:15:18'),
(12, '1M+ Links Shorten', 'Jutaan link telah dipendekkan.', 'link.png', NULL, '2023-03-16 02:15:27'),
(13, 'Cepat', 'Kecepatan dalam membangun dan mengakses link maupun wesbite anda.', 'ener.png', NULL, '2023-03-16 02:15:30'),
(14, 'Manajemen Link', 'Sangat mudah dan praktis dalam memanajemen dan mengakses seluruh link anda.', 'grafik.png', NULL, '2023-03-16 02:15:34'),
(15, 'GetLink', NULL, NULL, NULL, NULL),
(16, 'Microsite', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategoris`
--

INSERT INTO `kategoris` (`id`, `name`, `color`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Personal Branding', '#00678b', 'b.png', NULL, NULL),
(2, 'Komunitas', '#800ea0', 'komu.png', NULL, NULL),
(3, 'Marketing', '#ca2fb8', 'marketing.png', NULL, NULL),
(4, 'UMKM', '#d1c323', 'c.png', NULL, NULL),
(5, 'Curriculum Vitae', '#3743e1', 'cv.png', NULL, NULL),
(6, 'galih', '#ff0000', '1681096648.png', '2023-04-09 20:17:28', '2023-04-09 20:17:28'),
(7, 'asfd', '#ff0000', '1681096657.png', '2023-04-09 20:17:37', '2023-04-09 20:17:37'),
(8, 'wahda', '#00ff7b', '1681096677.png', '2023-04-09 20:17:57', '2023-04-09 20:17:57');

-- --------------------------------------------------------

--
-- Table structure for table `komponens`
--

CREATE TABLE `komponens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `code` longtext NOT NULL,
  `value` varchar(255) NOT NULL,
  `code_input` longtext NOT NULL,
  `unique` varchar(255) NOT NULL,
  `width` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komponens`
--

INSERT INTO `komponens` (`id`, `name`, `icon`, `desc`, `code`, `value`, `code_input`, `unique`, `width`, `created_at`, `updated_at`) VALUES
(1, 'icon', 'fa-image', 'icon profile', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://127.0.0.1:8000/microsite/icon/rai.png\" alt=\"\">\n</div>', 'rai.png', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://127.0.0.1:8000/microsite/icon/rai.png\"/>', 'no', 100, NULL, NULL),
(2, 'title', 'fa-align-justify', 'title profile', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummi</h4>\n</div>', 'Qulbi Khutsi Azummi', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummi\">                                 </textarea>', 'no', 100, NULL, NULL),
(8, 'link', 'fa-link', 'link youtube', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', 'YudHcBIxlYw', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 'no', 100, NULL, NULL),
(9, 'konten', 'fa-align-justify', 'konten', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 'null', 'yes', 20, NULL, NULL),
(10, 'deskripsi', 'fa-align-justify', 'deskripsi', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak</p>\n</div>', 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak\">                                 </textarea>', 'no', 100, NULL, NULL),
(11, 'medsos', 'fa-instagram', 'yyy', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 'no', 100, NULL, NULL),
(12, 'konten_detail', 'null', 'Untuk Anaknya Konten', '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\">\r\n   <img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\">\r\n</a>', 'okk.jpg,https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" /> <br>\n<input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'yes', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `microsites`
--

CREATE TABLE `microsites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_template` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `cover` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `background` varchar(255) NOT NULL,
  `type_background` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `microsites`
--

INSERT INTO `microsites` (`id`, `id_user`, `name`, `link`, `id_template`, `id_kategori`, `status`, `cover`, `created_at`, `background`, `type_background`, `updated_at`) VALUES
(108, 1, 'jbjb', 'jnkj', 5, 1, 'on', NULL, '2023-04-13 20:56:24', '#0b3af4', 'color', '2023-04-14 04:46:33'),
(128, 7, 'testing', 'adsf', 3, 1, 'on', NULL, '2023-04-15 20:57:59', 'bg_gaming.jpg', 'image', '2023-04-15 20:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `microsite_details`
--

CREATE TABLE `microsite_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `id_komponen` int(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `code` longtext NOT NULL,
  `code_input` longtext NOT NULL,
  `id_template` bigint(20) UNSIGNED DEFAULT NULL,
  `id_microsite` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `microsite_details`
--

INSERT INTO `microsite_details` (`id`, `order`, `status`, `title`, `icon`, `id_komponen`, `value`, `code`, `code_input`, `id_template`, `id_microsite`, `created_at`, `updated_at`) VALUES
(661, 1, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://127.0.0.1:8000/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://127.0.0.1:8000/microsite/icon/rai.png\"/>', 5, 108, '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(662, 2, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummihh', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummihh</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummihh\">                                 </textarea>', 5, 108, '2023-04-13 20:56:24', '2023-04-14 04:44:13'),
(663, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 5, 108, '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(664, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunakyahahahahah', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunakyahahahahah</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunakyahahahahah\">                                 </textarea>', 5, 108, '2023-04-13 20:56:24', '2023-04-14 04:44:22'),
(665, 5, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 5, 108, '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(666, 6, 'on', 'konten', 'fa-align-justify', 9, '102,103,104,105,106,107,', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 5, 108, '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(667, 7, 'on', 'title', 'fa-align-justify', 2, 'wahda adella', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">wahda adella</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"wahda adella\">                                 </textarea>', 5, 108, '2023-04-14 04:44:28', '2023-04-14 04:45:09'),
(753, 1, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://127.0.0.1:8000/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://127.0.0.1:8000/microsite/icon/rai.png\"/>', 3, 128, '2023-04-15 20:57:59', '2023-04-15 20:57:59'),
(754, 2, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummi</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummi\">                                 </textarea>', 3, 128, '2023-04-15 20:57:59', '2023-04-15 20:57:59'),
(755, 3, 'on', 'deskripsi', 'fa-align-justify', 10, 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak\">                                 </textarea>', 3, 128, '2023-04-15 20:57:59', '2023-04-15 20:57:59'),
(756, 4, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 3, 128, '2023-04-15 20:57:59', '2023-04-15 20:57:59'),
(757, 5, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 3, 128, '2023-04-15 20:57:59', '2023-04-15 20:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `microsite_detail_kontens`
--

CREATE TABLE `microsite_detail_kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_microsite` bigint(20) UNSIGNED DEFAULT NULL,
  `id_microsite_detail` bigint(20) UNSIGNED DEFAULT NULL,
  `code` longtext NOT NULL,
  `code_input` longtext NOT NULL,
  `value` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `microsite_detail_kontens`
--

INSERT INTO `microsite_detail_kontens` (`id`, `id_microsite`, `id_microsite_detail`, `code`, `code_input`, `value`, `image`, `created_at`, `updated_at`) VALUES
(102, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(103, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(104, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(105, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(106, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24'),
(107, 108, 666, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-13 20:56:24', '2023-04-13 20:56:24');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_26_111417_create_kategoris_table', 1),
(6, '2023_03_26_111458_create_komponens_table', 1),
(7, '2023_03_26_111510_create_templates_table', 1),
(8, '2023_03_26_111707_create_microsites_table', 1),
(9, '2023_03_26_111726_create_microsite_details_table', 1),
(10, '2023_03_28_080018_create_kontens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_microsites`
--

CREATE TABLE `paket_microsites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paket_microsites`
--

INSERT INTO `paket_microsites` (`id`, `name`, `type`, `harga`, `slot`, `updated_at`, `created_at`) VALUES
(1, 'paket 1', 'microsite', 12000, 12, '2023-03-30', '2023-03-30'),
(2, 'paket 2', 'microsite', 10000, 5, '2023-03-30', '2023-03-30'),
(3, 'paket 3', 'microsite', 5000, 1, '2023-03-30', '2023-03-30');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shortlinks`
--

CREATE TABLE `shortlinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `clicks` bigint(20) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shortlinks`
--

INSERT INTO `shortlinks` (`id`, `code`, `link`, `id_user`, `clicks`, `created_at`, `updated_at`) VALUES
(1, 'YTggMV', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 17:18:22', '2023-03-28 17:18:22'),
(2, 'sodBUS', 'http://localhost:8000/YTggMV', 0, 0, '2023-03-28 17:18:24', '2023-03-28 17:18:24'),
(3, 'qFE5Is', 'https://web.whatsapp.com/', 0, 1, '2023-03-28 17:18:27', '2023-03-28 17:18:35'),
(82, 'v9EDkT', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:42:05', '2023-03-28 00:42:05'),
(83, 'rjR8sQ', 'http://localhostv9EDkT', 0, 0, '2023-03-28 00:43:17', '2023-03-28 00:43:17'),
(84, 'FMPrM9', 'http://localhostv9EDkT', 0, 0, '2023-03-28 00:43:17', '2023-03-28 00:43:17'),
(85, '8Pcdxj', 'http://localhostFMPrM9', 0, 0, '2023-03-28 00:43:21', '2023-03-28 00:43:21'),
(86, '8A6yl9', 'https://openai.com/blog/chatgpt', 0, 0, '2023-03-28 00:45:05', '2023-03-28 00:45:05'),
(87, '0EFcvQ', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:45:16', '2023-03-28 00:45:16'),
(88, 'knDIDs', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:46:29', '2023-03-28 00:46:29'),
(89, 'wYNoBP', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:59:41', '2023-03-28 00:59:41'),
(90, 'v9KXZ0', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:07:10', '2023-03-28 01:07:10'),
(91, 'cIhOks', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:08:52', '2023-03-28 01:08:52'),
(92, 'l5bQcV', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:09:37', '2023-03-28 01:09:37'),
(93, 'mnDVO9', 'https://meet.google.com/hwm-fbhn-nke', 0, 0, '2023-03-28 01:12:11', '2023-03-28 01:12:11'),
(94, 'Hq4eL1', 'https://meet.google.com/hwm-fbhn-nke', 0, 0, '2023-03-28 01:13:00', '2023-03-28 01:13:00'),
(95, 'KB55T7', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:18:13', '2023-03-28 01:18:13'),
(96, 'fA56v2', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:19:58', '2023-03-28 01:19:58'),
(97, 'bk3WOc', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:28:57', '2023-03-28 01:28:57'),
(98, 'y7tVG8', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:29:54', '2023-03-28 01:29:54'),
(99, 'hLLwAa', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:37:41', '2023-03-28 01:37:41'),
(100, '6d50MJ', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:44:50', '2023-03-28 01:44:50'),
(101, 'NftHRp', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:47:08', '2023-03-28 01:47:08'),
(102, 'vGre65', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:52:22', '2023-03-28 01:52:22'),
(103, 'QrNMrT', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:54:03', '2023-03-28 01:54:03'),
(104, 'FEYXp6', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 02:01:56', '2023-03-28 02:01:56'),
(105, 'PvADwh', 'https://www.instagram.com/', 0, 1, '2023-03-28 15:07:39', '2023-03-28 15:07:46'),
(106, '14dpT0', 'http://localhost:8000/PvADwh', 0, 0, '2023-03-28 15:08:00', '2023-03-28 15:08:00'),
(107, 'vamUdU', 'https://www.instagram.com/', 0, 2, '2023-03-28 15:42:10', '2023-03-28 15:42:45'),
(108, 'xSE7l0', 'https://www.google.com/search?q=translete&rlz=1C1JJTC_enID1048ID1048&oq=&aqs=chrome.1.69i57j69i59j35i39j0i131i433i512j0i67i650l2j0i131i433i512j69i61.2120j0j7&sourceid=chrome&ie=UTF-8', 0, 1, '2023-03-28 15:47:46', '2023-03-28 15:47:55'),
(109, 'BvdDMg', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:28:59', '2023-03-28 18:28:59'),
(110, 'sgwnYl', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:00', '2023-03-28 18:29:00'),
(111, 'EOnxoj', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:00', '2023-03-28 18:29:00'),
(112, 'rIljBC', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:01', '2023-03-28 18:29:01'),
(113, 'TxzPrl', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:11', '2023-03-28 18:29:11'),
(114, 'Dtb4fV', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:06:20', '2023-03-29 14:06:20'),
(115, 'A5ypbY', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:07:40', '2023-03-29 14:07:40'),
(116, 'ktCF7x', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:09:14', '2023-03-29 14:09:14'),
(117, 'CfNLzA', 'https://mail.google.com/mail/u/0/#inbox/FMfcgzGslkpLzdPGXqXPsMpDCZGFLLCV', 0, 0, '2023-03-29 16:30:15', '2023-03-29 16:30:15'),
(118, '8OlpWx', 'http://localhost:8000/short/CfNLzA', 0, 0, '2023-03-29 16:30:18', '2023-03-29 16:30:18'),
(119, 'nzTYqb', 'https://www.figma.com/file/JjdlyJxpsIMDbbf9RFU0xS/Website_GetLink?node-id=7-9&t=TU0x6z4XUiR42xrM-0', 0, 0, '2023-04-09 06:45:11', '2023-04-09 06:45:11'),
(120, 'naDgjL', 'http://localhost:8000/short/nzTYqb', 0, 0, '2023-04-09 06:45:28', '2023-04-09 06:45:28'),
(121, 'osicb6', 'https://checkout-staging.xendit.co/web/6435083ae7e27fdf72120566', 0, 0, '2023-04-11 01:00:02', '2023-04-11 01:00:02'),
(122, 'cgi4YC', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:01:59', '2023-04-11 01:01:59'),
(123, '68JtwD', 'https://web.whatsapp.com/', 0, 0, '2023-04-11 01:08:58', '2023-04-11 01:08:58'),
(124, 'afuny0', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:17:23', '2023-04-11 01:17:23'),
(125, 'vDhaeB', 'http://localhost:8000/gafuny0', 0, 0, '2023-04-11 01:17:51', '2023-04-11 01:17:51'),
(126, 'iLsA7y', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:18:02', '2023-04-11 01:18:02'),
(127, 'hpRcgl', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:21:23', '2023-04-11 01:21:23'),
(128, 'slkU7E', 'http://localhost:8000/ghpRcgl', 0, 0, '2023-04-11 01:23:35', '2023-04-11 01:23:35'),
(129, 'yOSPeM', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-04-11 01:23:41', '2023-04-11 01:23:41'),
(130, 'x3RxVJ', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=get_jefry&table=transaksi', 0, 0, '2023-04-11 19:08:47', '2023-04-11 19:08:47'),
(131, 'rQaBbw', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:09:43', '2023-04-11 19:09:43'),
(132, 'TQxp0r', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:10:31', '2023-04-11 19:10:31'),
(133, 'e60oxL', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:11:03', '2023-04-11 19:11:03'),
(134, 'vwY369', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:11:28', '2023-04-11 19:11:28'),
(135, 'cSLIfw', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:12:05', '2023-04-11 19:12:05'),
(136, 'CKFj3d', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-04-11 19:24:57', '2023-04-11 19:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `id_komponen` varchar(255) NOT NULL,
  `status_komponen` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `background` varchar(255) NOT NULL,
  `type_background` varchar(255) NOT NULL,
  `value_konten_detail` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `id_kategori`, `id_komponen`, `status_komponen`, `image`, `title`, `background`, `type_background`, `value_konten_detail`, `created_at`, `updated_at`) VALUES
(1, 1, '2,1,11,9,8,10,', 'off,on,on,on,on,on,', 'basic.png', 'basic', '#e6e6e6', 'color', 3, NULL, '2023-04-13 09:13:38'),
(2, 1, '1,2,11,10,8', 'on,on,on,on,on,', 'partai.png', 'Partai', '#9e3030', 'color', 0, NULL, NULL),
(3, 1, '1,2,10,8,11', 'on,on,on,on,on,', 'gamer.png', 'Gamer', 'bg_gaming.jpg', 'image', 0, NULL, NULL),
(4, 1, '1,2,11,10', 'on,on,on,on,', 'namecard.png', 'Name Card', 'babu.png', 'image', 0, NULL, NULL),
(5, 1, '1,2,11,10,8,9', 'on,on,on,on,on,on,', 'portofolio.png', 'Portofolio', 'orange.png', 'image', 6, NULL, NULL),
(6, 3, '1,8,9,10', 'on,on,on,on,', '1681095623.png', 'partai2', '1681095623.png', 'image', 0, '2023-04-09 20:00:23', '2023-04-09 20:00:23'),
(7, 2, '1', 'on,', '1681095852.png', 'partai3', '#ff0000', 'color', 0, '2023-04-09 20:04:12', '2023-04-13 09:23:22'),
(8, 3, '1,8,8,9,', 'on,on,on,on,', '1681096709.png', 'wahda', '1681425343.jpg', 'image', 3, '2023-04-09 20:18:29', '2023-04-13 15:40:22');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `external_id` varchar(255) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `slot` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_gateway` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `external_id`, `id_user`, `type`, `slot`, `total`, `payment_gateway`, `url`, `status`, `flag`, `updated_at`, `created_at`) VALUES
(1, 'y45PoqCXZ0', 7, 'microsite', 1, 5000, NULL, '', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(2, 'gHru3qUXSf', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64336df27dfc9c1a316dfcd0', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(3, 'tFmt6Ol3Jj', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643370967dfc9c2d8f6e0220', 'PAID', 1, '2023-04-10', '2023-04-10'),
(4, 'TmvdupESPG', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64337437e7e27f491810748f', 'PAID', 1, '2023-04-10', '2023-04-10'),
(5, 'DLrYLB0NnH', 7, 'microsite', 5, 10000, NULL, 'https://checkout-staging.xendit.co/web/643383617dfc9c4db66e1c53', 'PAID', 1, '2023-04-10', '2023-04-10'),
(6, 'ocMAC54fEh', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64339b487dfc9c553a6e3286', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(7, 'B0TI7ctkVp', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64339c38ffd2b9ab73b48e31', 'PAID', 1, '2023-04-10', '2023-04-10'),
(8, 'CfCFDTmTcd', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64339cdde7e27f050710a6a6', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(9, '7nsuCKf9Uv', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64339d0be7e27f44cc10a6d5', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(10, 'lwILhMcXUL', 7, 'microsite', 5, 10000, NULL, 'https://checkout-staging.xendit.co/web/6433d5dfffd2b9b61eb4c097', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(11, 'BjDQoDyn7c', 7, 'microsite', 5, 10000, NULL, 'https://checkout-staging.xendit.co/web/6433d6bb7dfc9c49b46e624a', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(12, 'p1u3LVulBk', 7, 'microsite', 12, 12000, NULL, 'https://checkout-staging.xendit.co/web/6433d705ffd2b982bcb4c1a6', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(13, 'Vis1TUO0N3', 7, 'microsite', 12, 12000, NULL, 'https://checkout-staging.xendit.co/web/6433d71202f2fc31e1f82e81', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(14, 'AzIP607774', 7, 'microsite', 12, 12000, NULL, 'https://checkout-staging.xendit.co/web/6433d783ffd2b9e811b4c244', 'PENDING', 0, '2023-04-10', '2023-04-10'),
(15, 'oG0TzFq0Va', 7, 'microsite', 12, 12000, NULL, 'https://checkout-staging.xendit.co/web/6433d7eae7e27f302210ddea', 'PAID', 1, '2023-04-10', '2023-04-10'),
(16, 'cAqJ6QoEkj', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6434ea971a7de629fef40952', 'PAID', 1, '2023-04-11', '2023-04-11'),
(17, '14iVF66jUY', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6435083ae7e27fdf72120566', 'PAID', 1, '2023-04-11', '2023-04-11'),
(18, 'kA8imBPr1V', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64350fbb7ff61483a426944d', 'PENDING', 0, '2023-04-11', '2023-04-11'),
(19, '1qhIuhWf21', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643510147ff61415fe2694de', 'PAID', 1, '2023-04-11', '2023-04-11'),
(20, 'wFfjiorOIy', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 'PAID', 1, '2023-04-11', '2023-04-11'),
(21, 'QGciDchDsO', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64351d231a7de64e40f43f67', 'PENDING', 0, '2023-04-11', '2023-04-11'),
(22, 'Ad6i3eh19Y', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64351e8d1a7de60105f4424e', 'PAID', 1, '2023-04-11', '2023-04-11'),
(23, 'YFLvoxm5Ul', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643608cf7ff6142b1a276e1a', 'PAID', 1, '2023-04-12', '2023-04-12'),
(24, 'LwsInNblBv', 1, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643608d1e7e27fa9cb12db97', 'PAID', 1, '2023-04-12', '2023-04-12'),
(25, '2ne7DuyfXI', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643610447ff61442ab2774fd', 'PAID', 1, '2023-04-12', '2023-04-12'),
(26, 'xgBEOLJHEt', 1, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6436108e7ff614717327754c', 'PAID', 1, '2023-04-12', '2023-04-12'),
(27, 'eGFE13ESAe', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 'PAID', 1, '2023-04-12', '2023-04-12'),
(28, 'aIYJ5WVZrP', 1, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643610d27dfc9c019e7052b5', 'PAID', 1, '2023-04-12', '2023-04-12'),
(29, 'Wfu4GnfCe9', 1, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6436128ee7e27f4e4012e624', 'PAID', 1, '2023-04-12', '2023-04-12'),
(30, 'ZZCKlIyOIn', 1, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6436146a1a7de66f13f5129c', 'PAID', 1, '2023-04-12', '2023-04-12'),
(31, 'mhX5pf2C8b', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6436182be7e27f4b0412ef97', 'PAID', 1, '2023-04-12', '2023-04-12'),
(32, 'AFkJWSX19w', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6436183b7ff61452d4278215', 'PAID', 1, '2023-04-12', '2023-04-12'),
(33, 'FJO282rWiS', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643619f37dfc9c7a06706177', 'PAID', 1, '2023-04-12', '2023-04-12'),
(34, 'FlFUTkqoR2', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/643619fb1a7de62120f51a21', 'PAID', 1, '2023-04-12', '2023-04-12'),
(35, 'pQpeWATDHP', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64361cdae7e27fa66b12f45b', 'PAID', 1, '2023-04-12', '2023-04-12'),
(36, 'S1KEKh0yAy', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64361cdd1a7de60360f51c9d', 'PAID', 1, '2023-04-12', '2023-04-12'),
(37, '3TuP6V79Lk', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64371c1d6f9986250bba4032', 'PAID', 1, '2023-04-12', '2023-04-12'),
(38, 'dBpcYNkGOm', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/64371db76f99865c67ba4160', 'PAID', 1, '2023-04-12', '2023-04-12'),
(39, '6oY6HPRHLP', 7, 'microsite', 1, 5000, NULL, 'https://checkout-staging.xendit.co/web/6437217c67856efee165a3e8', 'PAID', 1, '2023-04-12', '2023-04-12'),
(40, 'aZNj6yc6SF', 7, 'microsite', 5, 10000, NULL, 'https://checkout-staging.xendit.co/web/643b54f46f9986261abe109d', 'PAID', 1, '2023-04-16', '2023-04-16');

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
  `jumlah_microsite` varchar(255) NOT NULL DEFAULT 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9',
  `batas_microsite` varchar(255) NOT NULL DEFAULT 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9',
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `google_id` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jumlah_microsite`, `batas_microsite`, `role`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wahda@gmail.com', 'wahda@gmail.com', NULL, '$2y$10$RKlnwgWoOatX.RyH.SzSQ.rPOwXq1JKoCqaZ9RhlAXfghEIKUh6F2', 'eyJpdiI6IitEZVc3aEtybFZUb0hhMzJGclZsSFE9PSIsInZhbHVlIjoicjJUNCtiQjJ3cGR4K3NYVlFZR2U4QT09IiwibWFjIjoiZDk1ZmM0ZDcyZGJmZjNmMzRiZTY4ZTFlMDY3NzBlZWRlYmMwNjdjYTg0NjY5M2M5MDBkN2E5MWFjMjRlNzJkNyIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9	', 'user', '', NULL, '2023-03-27 23:28:32', '2023-04-13 20:56:24'),
(2, 'Jefry Putra', 'jefry@mu.com', NULL, '$2y$10$E8g12.9GZIycIlklwfU8QeyCn04ohZZfGRYS2i/Z/b5/2qjWpsLCu', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', NULL, '2023-03-28 02:35:38', '2023-03-28 02:35:38'),
(3, 'Jcoding', 'jcoding@gmail.com', NULL, '$2y$10$0FpHZ4paXA8vqiXWibVSze3pmuGfD3G0Py2N1PLpwCPqud7ScrY0u', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', NULL, '2023-03-28 02:40:20', '2023-03-28 12:40:51'),
(4, 'Admin1', 'admin@admin.com', NULL, '$2y$10$uTdEorAz8nNUiotyolG47uhCE367v8DFrmP4bn2vgwoxdCfCA2txS', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', '', NULL, '2023-03-28 12:47:33', '2023-03-28 12:47:33'),
(5, 'member1', 'member1@member.com', NULL, '$2y$10$ggyAHRdoK1iBunqobap7yeTis/rG.lEq3PBApLE9vHQtEStqudWNy', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', NULL, '2023-03-29 12:06:58', '2023-03-29 13:15:28'),
(6, 'galih@gmail.com', 'galih@gmail.com', NULL, '$2y$10$EVJa3PcX2EDGZ3is4Fil3eQP7vecPB7GNzsIrk5z2zx8Le.Ots3ra', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', NULL, NULL, '2023-03-29 12:42:03', '2023-03-29 12:42:03'),
(7, '08_GALIH_AGUNG_RAHARJO', 'akikazenoqwaserqwaser@gmail.com', NULL, '$2y$10$tP.59erwdyvsra5/nu0CC.vHCRZGFDAn7.mmxEvZSFGHZQ7K/7EIG', 'eyJpdiI6IjdacHJzcEFVWmNRNUt0MmYrN09RS1E9PSIsInZhbHVlIjoidTl3Rll6T3BsMHROczlLVEo5YlkrZz09IiwibWFjIjoiNWFjYThlMzEwY2FiOWIwNjkyMWE2ZWNjNDk0OGZiOThhOTAyOGVlNjg5OTQ5OGE2ODIwN2I1YzY5YTk1ODM1MyIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '103768099696790035204', NULL, '2023-03-29 13:01:08', '2023-04-15 20:57:59'),
(8, 'testing@gmail.com', 'testing@gmail.com', NULL, '$2y$10$FTSYZ92aBs0s3uuOd/L2PeCRRYryjb5jVyo/L3q7IBXsOMltCxKc6', 'eyJpdiI6InVRajhoQ2dvU1UxT0RDU2M3Y0VzQ3c9PSIsInZhbHVlIjoiOWNDdkNBV3cwQU5tRlR0UDh1eU5KUT09IiwibWFjIjoiMmYxMDEzNTQzODczMTBlYjY1ZWY0NDUyYjUyYzQ5OWE0ODRkZmUwY2VmMzkzMmU1NjkwMTYxZGM0ZDRhNzVmMSIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', NULL, NULL, '2023-04-12 14:32:25', '2023-04-12 14:39:03');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `id_microsite` bigint(20) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `id_microsite`, `ip_address`, `date`, `browser`, `created_at`, `updated_at`) VALUES
(175, 75, '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12'),
(176, 75, '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12'),
(177, 75, '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_chart`
--

CREATE TABLE `visitor_chart` (
  `id` int(11) NOT NULL,
  `total_visitor` text NOT NULL,
  `id_microsite` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor_chart`
--

INSERT INTO `visitor_chart` (`id`, `total_visitor`, `id_microsite`, `created_at`, `updated_at`) VALUES
(5, '2,0,1,8,7,0,0,0,0,0,0,1,2023', 'testing', '2023-04-15', '2023-04-15'),
(9, '10,0,0,5,0,0,2,0,0,0,0,0,2022', 'testing2', '2023-04-15', '2023-04-15'),
(11, '0,0,0,5,0,0,10,0,0,0,0,0,2021', 'testing3', '2021-04-15', '2023-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collab`
--
ALTER TABLE `collab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `getlink`
--
ALTER TABLE `getlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komponens`
--
ALTER TABLE `komponens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `microsites`
--
ALTER TABLE `microsites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsites_id_user_foreign` (`id_user`),
  ADD KEY `microsites_id_template_foreign` (`id_template`),
  ADD KEY `microsites_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `microsite_details`
--
ALTER TABLE `microsite_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsite_details_id_template_foreign` (`id_template`),
  ADD KEY `microsite_details_id_microsite_foreign` (`id_microsite`);

--
-- Indexes for table `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsite_detail_kontens_id_microsite_foreign` (`id_microsite`),
  ADD KEY `microsite_detail_kontens_id_microsite_detail_foreign` (`id_microsite_detail`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_microsites`
--
ALTER TABLE `paket_microsites`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `shortlinks`
--
ALTER TABLE `shortlinks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shortlinks_code_unique` (`code`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `templates_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_chart`
--
ALTER TABLE `visitor_chart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collab`
--
ALTER TABLE `collab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `getlink`
--
ALTER TABLE `getlink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komponens`
--
ALTER TABLE `komponens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `microsites`
--
ALTER TABLE `microsites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `microsite_details`
--
ALTER TABLE `microsite_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=758;

--
-- AUTO_INCREMENT for table `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `paket_microsites`
--
ALTER TABLE `paket_microsites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shortlinks`
--
ALTER TABLE `shortlinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;

--
-- AUTO_INCREMENT for table `visitor_chart`
--
ALTER TABLE `visitor_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `microsites`
--
ALTER TABLE `microsites`
  ADD CONSTRAINT `microsites_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsites_id_template_foreign` FOREIGN KEY (`id_template`) REFERENCES `templates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsites_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `microsite_details`
--
ALTER TABLE `microsite_details`
  ADD CONSTRAINT `microsite_details_id_microsite_foreign` FOREIGN KEY (`id_microsite`) REFERENCES `microsites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsite_details_id_template_foreign` FOREIGN KEY (`id_template`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  ADD CONSTRAINT `microsite_detail_kontens_id_microsite_detail_foreign` FOREIGN KEY (`id_microsite_detail`) REFERENCES `microsite_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `microsite_detail_kontens_id_microsite_foreign` FOREIGN KEY (`id_microsite`) REFERENCES `microsites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
