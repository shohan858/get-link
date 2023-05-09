-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 05.18
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getl_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `budget` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `budget`
--

INSERT INTO `budget` (`id`, `budget`, `created_at`, `updated_at`) VALUES
(1, 1001077910, '2023-04-17', '2023-04-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `collab`
--

CREATE TABLE `collab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `collab`
--

INSERT INTO `collab` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'get.png', NULL, '2023-03-16 02:05:52'),
(2, 'getlink.png', '2023-03-08 15:22:42', '2023-03-16 02:06:19'),
(3, 'getpos.png', '2023-03-08 16:49:52', '2023-03-16 02:06:24'),
(4, 'getschool.png', '2023-03-08 16:56:06', '2023-03-16 02:06:30'),
(7, 'humagold.png', '2023-03-09 12:22:17', '2023-03-16 02:06:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `getlink`
--

CREATE TABLE `getlink` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `getlink`
--

INSERT INTO `getlink` (`id`, `title`, `subtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Get Link', 'Pendekkan Link Panjang Anda Menjadi Lebih RIngkas Dan Enak Di Pandang Serta Lebih Mudah Untuk Menghafalkannya', '1683187266.png', NULL, '2023-05-04 01:01:06'),
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
-- Struktur dari tabel `kategoris`
--

CREATE TABLE `kategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategoris`
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
-- Struktur dari tabel `komponens`
--

CREATE TABLE `komponens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_input` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `unique` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `komponens`
--

INSERT INTO `komponens` (`id`, `name`, `icon`, `desc`, `code`, `value`, `code_input`, `unique`, `width`, `created_at`, `updated_at`) VALUES
(1, 'icon', 'fa-image', 'icon profile', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/rai.png\" alt=\"\">\n</div>', 'rai.png', '<input type=\"file\" class=\"dropify\" data-allowed-file-extensions=\"png jpg jpeg\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/rai.png\"/>', 'no', 100, NULL, NULL),
(2, 'title', 'fa-align-justify', 'title profile', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Lorem ipsum eiusmod</h4>\n</div>', 'Qulbi Khutsi Azummi', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum eiusmod.\" required>                                 </textarea>\n', 'no', 100, NULL, NULL),
(8, 'link', 'fa-link', 'link youtube', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/_EO27gxRMKk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', '_EO27gxRMKk', '<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"_EO27gxRMKk\" required/>', 'no', 100, NULL, NULL),
(9, 'konten', 'fa-align-justify', 'konten', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 'null', 'yes', 20, NULL, NULL),
(10, 'deskripsi', 'fa-align-justify', 'deskripsi', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n</div>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\" required>                                 </textarea>', 'no', 100, NULL, NULL),
(11, 'medsos', 'fa-instagram', 'yyy', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<label>Masukkan Nama Instagram</label><br>\n<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Twitter</label><br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Facebook</label><br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Youtube</label><br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Tiktok</label><br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br><br>', 'no', 100, NULL, NULL),
(12, 'konten_detail', 'null', 'Untuk Anaknya Konten', '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\">\n   <img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\">\n</a>', 'okk.jpg,https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', '<label>Masukkan Tautan</label><br>\n<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" required/> <br>\n<label>Masukkan Gambar</label><br>\n<input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'yes', 100, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `microsites`
--

CREATE TABLE `microsites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_template` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `microsites`
--

INSERT INTO `microsites` (`id`, `id_user`, `name`, `link`, `id_template`, `id_kategori`, `status`, `cover`, `created_at`, `background`, `type_background`, `updated_at`) VALUES
(120, 12, 'qulbi', 'qulbi', 1, 1, 'on', NULL, '2023-04-19 12:27:07', '#e6e6e6', 'color', '2023-04-19 12:27:07'),
(121, 11, 'okehhhhh', 'okehhhhhh', 1, 1, 'on', NULL, '2023-04-19 12:43:19', '#e6e6e6', 'color', '2023-04-19 12:43:19'),
(122, 13, 'Haha', 'Haha', 9, 1, 'on', '1681911446.png', '2023-04-19 13:33:54', '#8c5bc8', 'color', '2023-04-19 13:37:26'),
(124, 1, 'testing', 'testing', 5, 1, 'on', NULL, '2023-05-03 04:35:10', 'orange.png', 'image', '2023-05-03 04:35:10'),
(133, 3, 'jefry@io.com', 'asdf', 2, 1, 'on', NULL, '2023-05-04 20:07:43', '#9e3030', 'color', '2023-05-04 20:07:43'),
(134, 3, 'das', 'sdsvf', 2, 1, 'on', NULL, '2023-05-04 20:11:29', '#9e3030', 'color', '2023-05-04 20:11:29'),
(135, 3, 'sadas', 'dfsdfdsf', 1, 1, 'on', NULL, '2023-05-04 20:17:06', '#e6e6e6', 'color', '2023-05-04 20:17:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `microsite_details`
--

CREATE TABLE `microsite_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_komponen` int(255) NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_input` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_template` bigint(20) UNSIGNED DEFAULT NULL,
  `id_microsite` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `microsite_details`
--

INSERT INTO `microsite_details` (`id`, `order`, `status`, `title`, `icon`, `id_komponen`, `value`, `code`, `code_input`, `id_template`, `id_microsite`, `created_at`, `updated_at`) VALUES
(745, 1, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummi</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummi\">                                 </textarea>', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(746, 2, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://127.0.0.1:8000/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://127.0.0.1:8000/microsite/icon/rai.png\"/>', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(747, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(748, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak\">                                 </textarea>', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(749, 5, 'on', 'konten', 'fa-align-justify', 9, '144,145,146,', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(750, 6, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 1, 120, '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(751, 1, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummi</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummi\">                                 </textarea>', 1, 121, '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(752, 2, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/rai.png\"/>', 1, 121, '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(753, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 1, 121, '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(754, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak\">                                 </textarea>', 1, 121, '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(755, 5, 'on', 'konten', 'fa-align-justify', 9, 'https://trello.com/b/z5tWoh2u/getlink', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 1, 121, '2023-04-19 12:43:19', '2023-04-19 13:43:51'),
(756, 6, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 1, 121, '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(757, 1, 'on', 'icon', 'fa-image', 1, '1681911374.mp4', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/1681911374.mp4\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/1681911374.mp4\"/>', 9, 122, '2023-04-19 13:33:54', '2023-04-19 13:36:14'),
(758, 2, 'on', 'konten', 'fa-align-justify', 9, 'https://youtu.be/GCdwKhTtNNw', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 9, 122, '2023-04-19 13:33:54', '2023-04-19 13:36:36'),
(759, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br>', 9, 122, '2023-04-19 13:33:54', '2023-04-19 13:33:54'),
(766, 1, 'on', 'icon', 'fa-image', 1, '1683168250.txt', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/1683168250.txt\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/1683168250.txt\"/>', 5, 124, '2023-05-03 04:35:10', '2023-05-03 19:44:11'),
(767, 2, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Qulbi Khutsi Azummi</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Qulbi Khutsi Azummi\">                                 </textarea>', 5, 124, '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(769, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Perkenalkan Nama Saya Qulbi Khutsi Azummi. Saya Kelas XI RPL 1, Jurusan Rekayasa Perangkat Lunak\">                                 </textarea>', 5, 124, '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(770, 5, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', ' <input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 5, 124, '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(771, 6, 'on', 'konten', 'fa-align-justify', 9, '159,160,161,162,163,164,165,166,167,', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 5, 124, '2023-05-03 04:35:10', '2023-05-03 04:56:36'),
(774, 7, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<label>Masukkan Tautan Instagram</label><br>\n<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Twitter</label><br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Facebook</label><br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Tiktok</label><br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br><br>', 5, 124, '2023-05-03 04:52:48', '2023-05-03 04:52:48'),
(775, 8, 'on', 'link', 'fa-link', 8, 'YudHcBIxlYw', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/YudHcBIxlYw\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', '<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"YudHcBIxlYw\" />', 5, 124, '2023-05-03 04:54:02', '2023-05-03 04:54:02'),
(822, 1, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" data-allowed-file-extensions=\"png jpg jpeg\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/rai.png\"/>', 2, 133, '2023-05-04 20:07:44', '2023-05-04 20:07:44'),
(823, 2, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Lorem ipsum eiusmod</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum eiusmod.\" required>                                 </textarea>\n', 2, 133, '2023-05-04 20:07:44', '2023-05-04 20:07:44'),
(824, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<label>Masukkan Tautan Instagram</label><br>\n<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Twitter</label><br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Facebook</label><br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Tiktok</label><br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br><br>', 2, 133, '2023-05-04 20:07:44', '2023-05-04 20:07:44'),
(825, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\" required>                                 </textarea>', 2, 133, '2023-05-04 20:07:44', '2023-05-04 20:07:44'),
(826, 5, 'on', 'link', 'fa-link', 8, 'eAyQf9KQktE', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/_EO27gxRMKk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', '<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"eAyQf9KQktE\" required/>', 2, 133, '2023-05-04 20:07:44', '2023-05-04 20:08:39'),
(827, 1, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" data-allowed-file-extensions=\"png jpg jpeg\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/rai.png\"/>', 2, 134, '2023-05-04 20:11:29', '2023-05-04 20:11:29'),
(828, 2, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Lorem ipsum eiusmod</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum eiusmod.\" required>                                 </textarea>\n', 2, 134, '2023-05-04 20:11:29', '2023-05-04 20:11:29'),
(829, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<label>Masukkan Tautan Instagram</label><br>\n<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Twitter</label><br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Facebook</label><br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br><br>\n<label>Masukkan Tautan Tiktok</label><br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br><br>', 2, 134, '2023-05-04 20:11:29', '2023-05-04 20:11:29'),
(830, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\" required>                                 </textarea>', 2, 134, '2023-05-04 20:11:29', '2023-05-04 20:11:29'),
(831, 5, 'on', 'link', 'fa-link', 8, 'pIWVqgtg-Js', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/pIWVqgtg-Js\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', '<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"pIWVqgtg-Js\" required/>', 2, 134, '2023-05-04 20:11:29', '2023-05-04 20:12:16'),
(832, 1, 'on', 'title', 'fa-align-justify', 2, 'Qulbi Khutsi Azummi', '<div class=\"bungkus-anak\">\n  <h4 id=\"title\" class=\"title-template\">Lorem ipsum eiusmod</h4>\n</div>', '<textarea name=\"title[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum eiusmod.\" required>                                 </textarea>\n', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(833, 2, 'on', 'icon', 'fa-image', 1, 'rai.png', '<div class=\"bungkus-anak\">\n  <img id=\"image\" class=\"icon-template\" src=\"http://getlink.id/microsite/icon/rai.png\" alt=\"\">\n</div>', '<input type=\"file\" class=\"dropify\" data-allowed-file-extensions=\"png jpg jpeg\" name=\"icon[]\" id=\"iamge\" data-default-file=\"http://getlink.id/microsite/icon/rai.png\"/>', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(834, 3, 'on', 'medsos', 'fa-instagram', 11, 'testing_instagram,testing_twitter,testing_facebook,testing_youtube,testing_tiktok', '<div class=\"bungkus-anak\">\n   <a href=\"https://www.instagram.com/testing_instagram\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/ig.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.twitter.com/testing_twitter\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/twit.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.facebook.com/testing_facebook\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/fb.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.youtube.com/tetsing_youtube\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/yt.png\" alt=\"\">\n   </a>\n   <a href=\"https://www.tiktok.com/testing_tiktok\" class=\"medsos-template\">\n      <img src=\"microsite/medsos/tiktod.png\" alt=\"\">\n   </a>\n</div>', '<label>Masukkan Nama Instagram</label><br>\n<input class=\"component-input-style\" name=\"instagram[]\" value=\"testing_instagram\" type=\"text\" /> <br><br>\n<label>Masukkan NamaTwitter</label><br>\n<input class=\"component-input-style\" name=\"twitter[]\" value=\"testing_twitter\" type=\"text\" /> <br><br>\n<label>Masukkan NamaFacebook</label><br>\n<input class=\"component-input-style\" name=\"facebook[]\" value=\"testing_facebook\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Youtube</label><br>\n<input class=\"component-input-style\" name=\"youtube[]\" value=\"testing_youtube\" type=\"text\" /> <br><br>\n<label>Masukkan Nama Tiktok</label><br>\n<input class=\"component-input-style\" name=\"tiktok[]\" value=\"testing_tiktok\" type=\"text\" /> <br><br>', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(835, 4, 'on', 'deskripsi', 'fa-align-justify', 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '<div class=\"bungkus-anak\">\n   <p class=\"deskripsi\" id=\"deskripsi\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n</div>', ' <textarea name=\"descripsi[]\" class=\"summernote\" cols=\"30\" rows=\"10\" data-value=\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\" required>                                 </textarea>', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(836, 5, 'on', 'konten', 'fa-align-justify', 9, '182,183,184,', '<div class=\"bungkus-anak\" id=\"bungkus-template-konten\"></div>', 'null', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(837, 6, 'on', 'link', 'fa-link', 8, '_EO27gxRMKk', '<div class=\"bungkus-anak\">\n   <iframe width=\"350\" height=\"200\" src=\"https://www.youtube.com/embed/_EO27gxRMKk\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n</div>', '<label>Masukkan Tautan Youtube</label><br>\n<input class=\"component-input-style\" name=\"link[]\" type=\"text\" \n value=\"_EO27gxRMKk\" required/>', 1, 135, '2023-05-04 20:17:06', '2023-05-04 20:17:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `microsite_detail_kontens`
--

CREATE TABLE `microsite_detail_kontens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_microsite` bigint(20) UNSIGNED DEFAULT NULL,
  `id_microsite_detail` bigint(20) UNSIGNED DEFAULT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code_input` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `microsite_detail_kontens`
--

INSERT INTO `microsite_detail_kontens` (`id`, `id_microsite`, `id_microsite_detail`, `code`, `code_input`, `value`, `image`, `created_at`, `updated_at`) VALUES
(144, 120, 749, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(145, 120, 749, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(146, 120, 749, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-19 12:27:07', '2023-04-19 12:27:07'),
(147, 121, 755, '<a href=\"https://trello.com/b/z5tWoh2u/getlink\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/1681908226.png\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://trello.com/b/z5tWoh2u/getlink\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://trello.com/b/z5tWoh2u/getlink', '1681908226.png', '2023-04-19 12:43:19', '2023-04-19 13:43:54'),
(148, 121, 755, '<a href=\"https://trello.com/b/z5tWoh2u/getlink\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://trello.com/b/z5tWoh2u/getlink\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://trello.com/b/z5tWoh2u/getlink', 'okk.jpg', '2023-04-19 12:43:19', '2023-04-19 13:44:32'),
(149, 121, 755, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-19 12:43:19', '2023-04-19 12:43:19'),
(150, 122, 758, '<a href=\"https://youtu.be/GCdwKhTtNNw\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/1681911403.png\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://youtu.be/GCdwKhTtNNw\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://youtu.be/GCdwKhTtNNw', '1681911403.png', '2023-04-19 13:33:54', '2023-04-19 13:36:43'),
(152, 122, 758, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-04-19 13:33:54', '2023-04-19 13:33:54'),
(159, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(160, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(161, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(162, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(163, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(164, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:35:10', '2023-05-03 04:35:10'),
(165, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:51:43', '2023-05-03 04:51:43'),
(166, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:55:20', '2023-05-03 04:55:20'),
(167, 124, 771, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<label>Masukkan Tautan</label><br><input class=\"component-input-style\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" name=\"linkkonten[]\" type=\"text\" /> <br>\n                <label>Masukkan Gambar</label><br><input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-03 04:56:36', '2023-05-03 04:56:36'),
(182, 135, 836, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(183, 135, 836, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-04 20:17:06', '2023-05-04 20:17:06'),
(184, 135, 836, '<a href=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" class=\"konten-template\"><img class=\"img-template\" src=\"microsite/konten/okk.jpg\" alt=\"\"></a>', '<input class=\"component-input-style\" name=\"linkkonten[]\" type=\"text\" value=\"https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4\" placeholder=\"Masukkan Tautan\" /> <br>\n                    <input class=\"component-input-style\" name=\"imagekonten[]\" type=\"file\" /> <br>', 'https://www.youtube.com/watch?v=utxbrAGXhPQ&list=PLc8sZNVA7ZMmP22T-8ILKIwVulDtYlmux&index=4', 'okk.jpg', '2023-05-04 20:17:06', '2023-05-04 20:17:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
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
-- Struktur dari tabel `paket_microsites`
--

CREATE TABLE `paket_microsites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `slot` int(11) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_microsites`
--

INSERT INTO `paket_microsites` (`id`, `name`, `type`, `harga`, `slot`, `updated_at`, `created_at`) VALUES
(1, 'paket 1', 'microsite', 12000, 12, '2023-03-30', '2023-03-30'),
(2, 'paket 2', 'microsite', 10000, 5, '2023-03-30', '2023-03-30'),
(3, 'paket 3', 'microsite', 5000, 1, '2023-03-30', '2023-03-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `shortlinks`
--

CREATE TABLE `shortlinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL DEFAULT 0,
  `clicks` bigint(20) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `shortlinks`
--

INSERT INTO `shortlinks` (`id`, `code`, `link`, `id_user`, `clicks`, `created_at`, `updated_at`, `status`) VALUES
(1, 'YTggMV', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 17:18:22', '2023-03-28 17:18:22', 'on'),
(2, 'sodBUS', 'http://localhost:8000/YTggMV', 0, 0, '2023-03-28 17:18:24', '2023-03-28 17:18:24', 'on'),
(3, 'qFE5Is', 'https://web.whatsapp.com/', 0, 1, '2023-03-28 17:18:27', '2023-03-28 17:18:35', 'on'),
(82, 'v9EDkT', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:42:05', '2023-03-28 00:42:05', 'on'),
(83, 'rjR8sQ', 'http://localhostv9EDkT', 0, 0, '2023-03-28 00:43:17', '2023-03-28 00:43:17', 'on'),
(84, 'FMPrM9', 'http://localhostv9EDkT', 0, 0, '2023-03-28 00:43:17', '2023-03-28 00:43:17', 'on'),
(85, '8Pcdxj', 'http://localhostFMPrM9', 0, 0, '2023-03-28 00:43:21', '2023-03-28 00:43:21', 'on'),
(86, '8A6yl9', 'https://openai.com/blog/chatgpt', 0, 0, '2023-03-28 00:45:05', '2023-03-28 00:45:05', 'on'),
(87, '0EFcvQ', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:45:16', '2023-03-28 00:45:16', 'on'),
(88, 'knDIDs', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:46:29', '2023-03-28 00:46:29', 'on'),
(89, 'wYNoBP', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 00:59:41', '2023-03-28 00:59:41', 'on'),
(90, 'v9KXZ0', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:07:10', '2023-03-28 01:07:10', 'on'),
(91, 'cIhOks', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:08:52', '2023-03-28 01:08:52', 'on'),
(92, 'l5bQcV', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:09:37', '2023-03-28 01:09:37', 'on'),
(93, 'mnDVO9', 'https://meet.google.com/hwm-fbhn-nke', 0, 0, '2023-03-28 01:12:11', '2023-03-28 01:12:11', 'on'),
(94, 'Hq4eL1', 'https://meet.google.com/hwm-fbhn-nke', 0, 0, '2023-03-28 01:13:00', '2023-03-28 01:13:00', 'on'),
(95, 'KB55T7', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:18:13', '2023-03-28 01:18:13', 'on'),
(96, 'fA56v2', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:19:58', '2023-03-28 01:19:58', 'on'),
(97, 'bk3WOc', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:28:57', '2023-03-28 01:28:57', 'on'),
(98, 'y7tVG8', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:29:54', '2023-03-28 01:29:54', 'on'),
(99, 'hLLwAa', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:37:41', '2023-03-28 01:37:41', 'on'),
(100, '6d50MJ', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 01:44:50', '2023-03-28 01:44:50', 'on'),
(101, 'NftHRp', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:47:08', '2023-03-28 01:47:08', 'on'),
(102, 'vGre65', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:52:22', '2023-03-28 01:52:22', 'on'),
(103, 'QrNMrT', 'https://web.whatsapp.com/', 7, 0, '2023-03-28 01:54:03', '2023-03-28 01:54:03', 'on'),
(104, 'FEYXp6', 'https://web.whatsapp.com/', 0, 0, '2023-03-28 02:01:56', '2023-03-28 02:01:56', 'on'),
(105, 'PvADwh', 'https://www.instagram.com/', 0, 1, '2023-03-28 15:07:39', '2023-03-28 15:07:46', 'on'),
(106, '14dpT0', 'http://localhost:8000/PvADwh', 0, 0, '2023-03-28 15:08:00', '2023-03-28 15:08:00', 'on'),
(107, 'vamUdU', 'https://www.instagram.com/', 0, 2, '2023-03-28 15:42:10', '2023-03-28 15:42:45', 'on'),
(108, 'xSE7l0', 'https://www.google.com/search?q=translete&rlz=1C1JJTC_enID1048ID1048&oq=&aqs=chrome.1.69i57j69i59j35i39j0i131i433i512j0i67i650l2j0i131i433i512j69i61.2120j0j7&sourceid=chrome&ie=UTF-8', 0, 1, '2023-03-28 15:47:46', '2023-03-28 15:47:55', 'on'),
(109, 'BvdDMg', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:28:59', '2023-03-28 18:28:59', 'on'),
(110, 'sgwnYl', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:00', '2023-03-28 18:29:00', 'on'),
(111, 'EOnxoj', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:00', '2023-03-28 18:29:00', 'on'),
(112, 'rIljBC', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:01', '2023-03-28 18:29:01', 'on'),
(113, 'TxzPrl', 'https://www.google.com/search?q=translate&rlz=1C1ASRM_enID937ID937&oq=translate&aqs=chrome..69i57j69i59.5023j0j1&sourceid=chrome&ie=UTF-8', 0, 0, '2023-03-28 18:29:11', '2023-03-28 18:29:11', 'on'),
(114, 'Dtb4fV', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:06:20', '2023-03-29 14:06:20', 'on'),
(115, 'A5ypbY', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:07:40', '2023-03-29 14:07:40', 'on'),
(116, 'ktCF7x', 'https://chat.openai.com/chat/48e3054f-1d41-43bb-b985-f0e635eea082', 0, 0, '2023-03-29 14:09:14', '2023-03-29 14:09:14', 'on'),
(117, 'CfNLzA', 'https://mail.google.com/mail/u/0/#inbox/FMfcgzGslkpLzdPGXqXPsMpDCZGFLLCV', 0, 0, '2023-03-29 16:30:15', '2023-03-29 16:30:15', 'on'),
(118, '8OlpWx', 'http://localhost:8000/short/CfNLzA', 0, 0, '2023-03-29 16:30:18', '2023-03-29 16:30:18', 'on'),
(119, 'nzTYqb', 'https://www.figma.com/file/JjdlyJxpsIMDbbf9RFU0xS/Website_GetLink?node-id=7-9&t=TU0x6z4XUiR42xrM-0', 0, 0, '2023-04-09 06:45:11', '2023-04-09 06:45:11', 'on'),
(120, 'naDgjL', 'http://localhost:8000/short/nzTYqb', 0, 0, '2023-04-09 06:45:28', '2023-04-09 06:45:28', 'on'),
(121, 'osicb6', 'https://checkout-staging.xendit.co/web/6435083ae7e27fdf72120566', 0, 0, '2023-04-11 01:00:02', '2023-04-11 01:00:02', 'on'),
(122, 'cgi4YC', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:01:59', '2023-04-11 01:01:59', 'on'),
(123, '68JtwD', 'https://web.whatsapp.com/', 0, 0, '2023-04-11 01:08:58', '2023-04-11 01:08:58', 'on'),
(124, 'afuny0', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:17:23', '2023-04-11 01:17:23', 'on'),
(125, 'vDhaeB', 'http://localhost:8000/gafuny0', 0, 0, '2023-04-11 01:17:51', '2023-04-11 01:17:51', 'on'),
(126, 'iLsA7y', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:18:02', '2023-04-11 01:18:02', 'on'),
(127, 'hpRcgl', 'https://checkout-staging.xendit.co/web/64351049e7e27fede6120dca', 0, 0, '2023-04-11 01:21:23', '2023-04-11 01:21:23', 'on'),
(128, 'slkU7E', 'http://localhost:8000/ghpRcgl', 0, 0, '2023-04-11 01:23:35', '2023-04-11 01:23:35', 'on'),
(129, 'yOSPeM', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-04-11 01:23:41', '2023-04-11 01:23:41', 'on'),
(130, 'x3RxVJ', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=get_jefry&table=transaksi', 0, 0, '2023-04-11 19:08:47', '2023-04-11 19:08:47', 'on'),
(131, 'rQaBbw', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:09:43', '2023-04-11 19:09:43', 'on'),
(132, 'TQxp0r', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:10:31', '2023-04-11 19:10:31', 'on'),
(133, 'e60oxL', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:11:03', '2023-04-11 19:11:03', 'on'),
(134, 'vwY369', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:11:28', '2023-04-11 19:11:28', 'on'),
(135, 'cSLIfw', 'https://checkout-staging.xendit.co/web/643610bd7ff6142118277588', 0, 0, '2023-04-11 19:12:05', '2023-04-11 19:12:05', 'on'),
(136, 'CKFj3d', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-04-11 19:24:57', '2023-04-11 19:24:57', 'on'),
(137, 'h6hKvo', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=get_shohan&table=transaksi', 0, 0, '2023-04-16 23:22:54', '2023-04-16 23:22:54', 'on'),
(138, 'OvXqXE', 'http://localhost:8000/short/h6hKvo', 0, 0, '2023-04-16 23:23:04', '2023-04-16 23:23:04', 'on'),
(139, 'WBXZNX', 'http://localhost:8000/buat_tautan', 0, 0, '2023-04-17 02:00:51', '2023-04-17 02:00:51', 'on'),
(140, 'jlzxu7', 'https://github.com/shohan858/get-link/tree/main/project_final', 7, 0, '2023-04-17 02:05:20', '2023-04-17 02:05:20', 'on'),
(141, 'BT84i5', 'https://github.com/shohan858/get-link/tree/main/project_final', 0, 0, '2023-04-17 03:23:00', '2023-04-17 03:23:00', 'on'),
(142, 'u1Fhul', 'https://chat.openai.com/', 0, 0, '2023-04-17 03:24:00', '2023-04-17 03:24:00', 'on'),
(143, 'dqJE2D', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-04-17 03:57:24', '2023-04-17 03:57:24', 'on'),
(144, 'HQFrpV', 'https://chat.openai.com/', 0, 0, '2023-04-17 05:16:00', '2023-04-17 05:16:00', 'on'),
(145, 'L2bEDY', 'https://web.whatsapp.com/', 0, 0, '2023-04-17 05:17:13', '2023-04-17 05:17:13', 'on'),
(146, '2zW6qh', 'https://chat.openai.com/', 0, 0, '2023-04-17 05:22:40', '2023-04-17 05:22:40', 'on'),
(147, 'hiuLw6', 'https://meet.google.com/mmg-hxei-cif', 7, 0, '2023-04-17 05:24:17', '2023-04-17 05:24:17', 'on'),
(148, 'C2ESfV', 'https://meet.google.com/uds-uxrk-vvm', 7, 0, '2023-04-17 06:21:18', '2023-04-17 06:21:18', 'on'),
(149, 'a4sdw5', 'https://meet.google.com/uds-uxrk-vvm', 0, 0, '2023-04-17 06:36:46', '2023-04-17 06:36:46', 'on'),
(150, 'ENHPHd', 'https://10fastfingers.com/typing-test/english', 7, 0, '2023-04-17 06:37:36', '2023-04-17 06:37:36', 'on'),
(151, '48djPK', 'https://dosenit.com/kuliah-it/pemrograman/contoh-program-pascal', 9, 0, '2023-04-17 06:38:53', '2023-04-17 06:38:53', 'on'),
(152, '3P6HbV', 'https://jalantikus.com/tips/35-ebook-hacking-gratis/', 7, 0, '2023-04-17 06:40:56', '2023-04-17 06:40:56', 'on'),
(153, 'aS7HD0', 'https://www.youtube.com/watch?v=Oextk-If8HQ&list=PLc8sZNVA7ZMlU9b_rhSWdxVkNEt50QH4m&index=7', 1, 0, '2023-04-18 19:15:24', '2023-05-03 18:31:10', 'on'),
(154, 'Zt072V', 'https://www.youtube.com/watch?v=Oextk-If8HQ&list=PLc8sZNVA7ZMlU9b_rhSWdxVkNEt50QH4m&index=7', 1, 0, '2023-04-18 19:16:30', '2023-05-03 18:31:20', 'on'),
(155, 'uvMeW9', 'https://vt.tiktok.com/ZS8nGcx5t/', 12, 0, '2023-04-19 12:24:12', '2023-04-19 12:24:12', 'on'),
(156, 'PkNnXz', 'http://localhost:8000/layout', 0, 0, '2023-04-20 00:59:08', '2023-04-20 00:59:08', 'on'),
(157, 'nDOXW5', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-24 13:22:50', '2023-04-24 13:22:50', 'on'),
(158, 'BtaYv3', 'https://chat.openai.com/c/e852bbfe-660f-4c56-a821-acd9537d4e83', 0, 0, '2023-04-24 13:30:16', '2023-04-24 13:30:16', 'on'),
(159, 'njljXH', 'http://localhost:8000/gBtaYv3', 0, 0, '2023-04-24 13:30:28', '2023-04-24 13:30:28', 'on'),
(160, 'efnT5H', 'https://www.google.com/search?q=translate&rlz=1C1JJTC_enID1048ID1048&oq=tra&aqs=chrome.1.69i57j0i131i433i512j0i67i650j46i67i175i199i650j0i67i650j0i131i433i512j0i67i650j69i60.2279j0j7&sourceid=chrome&ie=UTF-8', 0, 0, '2023-04-24 13:30:33', '2023-04-24 13:30:33', 'off'),
(161, 'roKfS7', 'https://www.halodoc.com/', 0, 0, '2023-04-24 13:35:39', '2023-04-24 13:35:39', 'on'),
(162, 'p8xXSH', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:37:15', '2023-04-24 13:37:15', 'on'),
(163, 'K6iV0n', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:37:34', '2023-04-24 13:37:34', 'on'),
(164, 'qM7Wu8', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:05', '2023-04-24 13:38:05', 'on'),
(165, 'rDAz0O', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:13', '2023-04-24 13:38:13', 'on'),
(166, 'uAXSn0', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:18', '2023-04-24 13:38:18', 'on'),
(167, 'eNxiB4', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:22', '2023-04-24 13:38:22', 'on'),
(168, 'WUV7wa', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:27', '2023-04-24 13:38:27', 'on'),
(169, 'IHDgJz', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:31', '2023-04-24 13:38:31', 'on'),
(170, 'O3GkRy', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:36', '2023-04-24 13:38:36', 'on'),
(171, 'pO09uh', 'https://www.halodoc.com/', 15, 0, '2023-04-24 13:38:40', '2023-04-24 13:38:40', 'on'),
(172, '7UDKXT', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 15, 0, '2023-04-24 13:38:57', '2023-04-24 13:38:57', 'on'),
(173, 'C8nanJ', 'https://www.halodoc.com/', 0, 0, '2023-04-24 13:44:07', '2023-04-24 13:44:07', 'on'),
(174, 'zrZSvL', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 0, 0, '2023-04-24 13:46:55', '2023-04-24 13:46:55', 'on'),
(175, 'o70OtR', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:49:47', '2023-04-24 13:49:47', 'off'),
(176, 'QtnfSx', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:25', '2023-04-24 13:51:25', 'on'),
(177, 'p0Qbvo', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:30', '2023-04-24 13:51:30', 'on'),
(178, 'SAMekw', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:34', '2023-04-24 13:51:34', 'on'),
(179, 'mTGD8W', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:38', '2023-04-24 13:51:38', 'on'),
(180, 'DG95GF', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:44', '2023-04-24 13:51:44', 'on'),
(181, 'HI6PNd', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:48', '2023-04-24 13:51:48', 'on'),
(182, '3rKezO', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:52', '2023-04-24 13:51:52', 'on'),
(183, 'Db46yn', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:56', '2023-04-24 13:51:56', 'on'),
(184, 'fixvMD', 'https://www.google.com/recaptcha/admin/site/632609586/setup', 16, 0, '2023-04-24 13:51:59', '2023-04-24 13:51:59', 'on'),
(185, 'qY0gxo', 'https://www.halodoc.com/', 16, 0, '2023-04-24 13:52:21', '2023-04-24 13:52:21', 'on'),
(186, 'tneQ4g', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-27 22:10:34', '2023-04-27 22:10:34', 'on'),
(187, 'IEzKRu', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 15:35:52', '2023-04-29 15:35:52', 'on'),
(188, 'Q9cb6h', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 15:37:41', '2023-04-29 15:37:41', 'on'),
(189, 'ZWnrRa', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:40:32', '2023-04-29 15:40:32', 'on'),
(190, '8nCFPE', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:03', '2023-04-29 15:41:03', 'on'),
(191, 'AfRFRj', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:08', '2023-04-29 15:41:08', 'on'),
(192, 'VxsXqj', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:12', '2023-04-29 15:41:12', 'on'),
(193, 'iJvTnS', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:15', '2023-04-29 15:41:15', 'on'),
(194, '8jN9AI', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:19', '2023-04-29 15:41:19', 'on'),
(195, 'fqOViI', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:22', '2023-04-29 15:41:22', 'on'),
(196, '090Svv', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:26', '2023-04-29 15:41:26', 'on'),
(197, 'qVEXOz', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:29', '2023-04-29 15:41:29', 'on'),
(198, 'cltWMC', 'https://www.halodoc.com/', 17, 0, '2023-04-29 15:41:34', '2023-04-29 15:41:34', 'on'),
(199, '0SlWxw', 'https://github.com/', 17, 0, '2023-04-29 15:42:05', '2023-04-29 15:42:05', 'on'),
(200, 'ZGfLeo', 'https://web.whatsapp.com/', 17, 0, '2023-04-29 15:44:18', '2023-04-29 15:44:18', 'off'),
(201, '5xRNe9', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 17, 0, '2023-04-29 16:00:43', '2023-04-29 16:00:43', 'on'),
(202, 'RG99uF', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 17, 0, '2023-04-29 16:03:53', '2023-04-29 16:03:53', 'on'),
(203, '4smmQc', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 17, 0, '2023-04-29 16:05:02', '2023-04-29 16:05:02', 'on'),
(204, 'tiWYLR', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 17, 0, '2023-04-29 16:09:23', '2023-04-29 16:09:23', 'on'),
(205, 'OLRLl8', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:11:15', '2023-04-29 16:11:15', 'on'),
(206, 'NJRQJ5', 'https://github.com/', 18, 0, '2023-04-29 16:13:20', '2023-04-29 16:13:20', 'off'),
(207, 'C5WDQK', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 18, 0, '2023-04-29 16:15:25', '2023-04-29 16:15:25', 'on'),
(208, 'VHtJLa', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 18, 0, '2023-04-29 16:16:53', '2023-04-29 16:16:53', 'on'),
(209, 'Xg7CLK', 'https://github.com/', 18, 0, '2023-04-29 16:18:51', '2023-04-29 16:18:51', 'off'),
(210, 'vpvkPi', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 18, 0, '2023-04-29 16:24:29', '2023-04-29 16:24:29', 'off'),
(211, 'rwE1Yo', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 18, 0, '2023-04-29 16:24:48', '2023-04-29 16:24:48', 'off'),
(212, '8wCWpX', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:34:27', '2023-04-29 16:34:27', 'on'),
(213, '1pZ2E6', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:36:51', '2023-04-29 16:36:51', 'on'),
(214, 'BClMpw', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:37:31', '2023-04-29 16:37:31', 'on'),
(215, 'zyVua0', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:41:58', '2023-04-29 16:41:58', 'on'),
(216, 'gJBZyY', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 16:42:36', '2023-04-29 16:42:36', 'on'),
(217, 'aq0dS4', 'http://localhost:8000/ggJBZyY', 0, 0, '2023-04-29 17:03:13', '2023-04-29 17:03:13', 'on'),
(218, 'nsQvS9', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 17:28:31', '2023-04-29 17:28:31', 'on'),
(219, 'eOAxLv', 'http://localhost:8000/gnsQvS9', 0, 0, '2023-04-29 17:28:36', '2023-04-29 17:28:36', 'on'),
(220, 'pocVAr', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 17:31:20', '2023-04-29 17:31:20', 'on'),
(221, '7LQkyS', 'http://localhost:8000/gpocVAr', 0, 0, '2023-04-29 17:31:23', '2023-04-29 17:31:23', 'on'),
(222, 'ccN5Hl', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-29 17:32:24', '2023-04-29 17:32:24', 'on'),
(223, 'rNZgW0', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-30 13:45:35', '2023-04-30 13:45:35', 'on'),
(224, 'FYB4FQ', 'http://localhost:8000/grNZgW0', 0, 0, '2023-04-30 13:45:38', '2023-04-30 13:45:38', 'on'),
(225, 'NyDU9T', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-30 13:46:35', '2023-04-30 13:46:35', 'on'),
(226, 'A3wcMu', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-30 13:48:05', '2023-04-30 13:48:05', 'on'),
(227, '811n4G', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-04-30 13:49:52', '2023-04-30 13:49:52', 'on'),
(228, 'TFYpER', 'http://localhost:8000/g811n4G', 0, 0, '2023-04-30 13:50:02', '2023-04-30 13:50:02', 'on'),
(229, 'KVLILO', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-05-01 20:36:08', '2023-05-01 20:36:08', 'on'),
(230, 'AYbfEy', 'http://localhost:8000/gKVLILO', 0, 0, '2023-05-01 20:36:13', '2023-05-01 20:36:13', 'on'),
(231, 'j8s7vg', 'https://trello.com/b/z5tWoh2u/getlink', 19, 0, '2023-05-01 20:39:34', '2023-05-01 20:39:34', 'off'),
(232, 'reAL2W', 'https://trello.com/b/z5tWoh2u/getlink', 0, 0, '2023-05-01 20:42:00', '2023-05-01 20:42:00', 'on'),
(233, 'bIXa70', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 19, 0, '2023-05-01 21:02:26', '2023-05-01 21:02:26', 'off'),
(234, 'SFih4B', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 19, 0, '2023-05-01 21:16:38', '2023-05-01 21:16:38', 'off'),
(235, '0DSqAl', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 19, 0, '2023-05-01 21:19:11', '2023-05-01 21:19:11', 'on'),
(236, 'UbuGjq', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-05-01 21:20:37', '2023-05-01 21:20:37', 'on'),
(237, 'e7fkOK', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:21:25', '2023-05-01 21:21:25', 'on'),
(238, 'MJGcwa', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:21:54', '2023-05-01 21:21:54', 'on'),
(239, 'oifC67', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:21:59', '2023-05-01 21:21:59', 'on'),
(240, '54QI58', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:04', '2023-05-01 21:22:04', 'on'),
(241, 'Il1Hqw', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:07', '2023-05-01 21:22:07', 'on'),
(242, 'bDbTml', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:11', '2023-05-01 21:22:11', 'on'),
(243, 'YilUz3', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:15', '2023-05-01 21:22:15', 'on'),
(244, 'ymkjZm', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:18', '2023-05-01 21:22:18', 'on'),
(245, 'e7PKjl', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:22', '2023-05-01 21:22:22', 'on'),
(246, 'U9Uznn', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:22:26', '2023-05-01 21:22:26', 'on'),
(247, 'A7fhGy', 'https://www.halodoc.com/', 20, 0, '2023-05-01 21:22:34', '2023-05-01 21:22:34', 'on'),
(248, 'e1we9R', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:25:05', '2023-05-01 21:25:05', 'on'),
(249, 'FE4Qsy', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:28:33', '2023-05-01 21:28:33', 'on'),
(250, 'dQizRv', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 20, 0, '2023-05-01 21:31:07', '2023-05-01 21:31:07', 'on'),
(251, 'H4GdUS', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:32:15', '2023-05-01 21:32:15', 'on'),
(252, '1bzWY4', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:36:47', '2023-05-01 21:36:47', 'on'),
(253, 'OCvA3e', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 20, 0, '2023-05-01 21:37:47', '2023-05-01 21:37:47', 'on'),
(254, 'p0JBJV', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:42:30', '2023-05-01 21:42:30', 'on'),
(255, 'PscrzU', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:33', '2023-05-01 21:43:33', 'on'),
(256, 'swgf7o', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:37', '2023-05-01 21:43:37', 'on'),
(257, 'pxgKao', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:40', '2023-05-01 21:43:40', 'on'),
(258, 'GEhYoD', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:44', '2023-05-01 21:43:44', 'on'),
(259, 'wmiSa3', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:48', '2023-05-01 21:43:48', 'on'),
(260, 'bZkDCw', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:51', '2023-05-01 21:43:51', 'on'),
(261, 'KQVxc2', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:55', '2023-05-01 21:43:55', 'on'),
(262, '7PyzoY', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:43:58', '2023-05-01 21:43:58', 'on'),
(263, 'v4GDvE', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 21, 0, '2023-05-01 21:44:02', '2023-05-01 21:44:02', 'off'),
(264, '6laKu2', 'https://www.halodoc.com/', 21, 0, '2023-05-01 21:44:09', '2023-05-01 21:44:09', 'off'),
(265, 'hCwJqB', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-05-01 21:45:25', '2023-05-01 21:45:25', 'on'),
(266, 'u23pEy', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:50:00', '2023-05-01 21:50:00', 'on'),
(267, 'WeuHFa', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:52:38', '2023-05-01 21:52:38', 'on'),
(268, 'F8A1Jk', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:53:11', '2023-05-01 21:53:11', 'on'),
(269, 'u1b4ca', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:02', '2023-05-01 21:54:02', 'on'),
(270, 'Hx8Ymz', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:07', '2023-05-01 21:54:07', 'on'),
(271, 'LcgDIy', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:15', '2023-05-01 21:54:15', 'on'),
(272, 'ISpzXt', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:23', '2023-05-01 21:54:23', 'on'),
(273, 'qK2eKM', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:27', '2023-05-01 21:54:27', 'on'),
(274, 'O6e89s', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:31', '2023-05-01 21:54:31', 'on'),
(275, 'H8gHrI', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-01 21:54:34', '2023-05-01 21:54:34', 'off'),
(277, 'UOC2QJ', 'https://shopee.co.id/?gclid=CjwKCAjw586hBhBrEiwAQYEnHe9oNfCTNoqQqB37lwhoELwQt7oNoKIpePYzSsaoONzVbmhfcrp3pRoCQygQAvD_BwE', 0, 0, '2023-05-01 21:58:20', '2023-05-01 21:58:20', 'on'),
(278, 'UMFAMg', 'http://localhost:8000/gUOC2QJ', 0, 0, '2023-05-01 22:01:55', '2023-05-01 22:01:55', 'on'),
(280, 'sKRNKZ', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:45:34', '2023-05-02 20:45:34', 'off'),
(281, 'meSIFt', 'http://localhost:8000/gz2RDYR', 22, 0, '2023-05-02 20:45:47', '2023-05-02 20:45:47', 'off'),
(282, 'qtCGVW', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:45:54', '2023-05-02 20:45:54', 'off'),
(283, 'o0T8HK', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 22, 0, '2023-05-02 20:46:05', '2023-05-02 20:46:05', 'off'),
(284, 'jagSZ0', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:46:12', '2023-05-02 20:46:12', 'off'),
(285, 'y1hW2w', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:46:30', '2023-05-02 20:46:30', 'off'),
(286, 'apqq7e', 'http://localhost:8000/gz2RDYR', 22, 0, '2023-05-02 20:46:38', '2023-05-02 20:46:38', 'off'),
(287, 'dIpwDZ', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:50:09', '2023-05-02 20:50:09', 'off'),
(288, '2rTvDA', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:56:11', '2023-05-02 20:56:11', 'off'),
(289, 'hLe5xp', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 22, 0, '2023-05-02 20:56:23', '2023-05-02 20:56:23', 'off'),
(290, 'vZhlZ3', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 22, 0, '2023-05-02 20:58:09', '2023-05-02 20:58:09', 'off'),
(291, 'z2Npkd', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:44:18', '2023-05-02 22:13:58', 'off'),
(292, 'OhTE7l', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:44:24', '2023-05-02 22:13:58', 'off'),
(293, 'Ljb5Xf', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:44:31', '2023-05-02 21:44:31', 'on'),
(294, 'LQqHzA', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:44:37', '2023-05-02 21:44:37', 'on'),
(295, 'G13RLl', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:44:56', '2023-05-02 21:44:56', 'on'),
(296, 'qxqViT', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:45:04', '2023-05-02 21:45:04', 'on'),
(297, 'sfoyFp', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:45:09', '2023-05-02 21:45:09', 'on'),
(298, 'uZfVox', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:45:14', '2023-05-02 21:45:14', 'on'),
(299, '486s6F', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:45:20', '2023-05-02 21:45:20', 'on'),
(300, 'yWetbj', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:45:47', '2023-05-02 21:45:47', 'on'),
(301, 'oe8Uok', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 21:46:13', '2023-05-02 21:46:13', 'off'),
(302, 'IbVGKg', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 23, 0, '2023-05-02 22:13:58', '2023-05-02 22:13:58', 'off'),
(303, 'FaaybZ', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:15:29', '2023-05-02 22:17:04', 'off'),
(304, 'B4TB5o', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:15:51', '2023-05-03 00:12:20', 'off'),
(305, 'HTJcc4', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:15:56', '2023-05-03 00:22:12', 'off'),
(306, 'iaFj54', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:05', '2023-05-02 22:16:05', 'on'),
(307, '8P4Dse', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:10', '2023-05-02 22:16:10', 'on'),
(308, 'SXQEwj', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:16', '2023-05-02 22:16:16', 'on'),
(309, 'XhB7oB', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:22', '2023-05-02 22:16:22', 'on'),
(310, 'zs6h0q', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:29', '2023-05-02 22:16:29', 'on'),
(311, 'Q3o3cX', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:50', '2023-05-02 22:16:50', 'on'),
(312, 'VCtwKS', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:16:57', '2023-05-02 22:16:57', 'on'),
(313, 'h8kf5E', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 24, 0, '2023-05-02 22:17:04', '2023-05-02 22:17:04', 'off'),
(314, 'ZVkB84', 'https://chat.openai.com/c/57096fa2-0e36-45f0-83aa-0ee37082a2a0', 24, 0, '2023-05-03 00:12:20', '2023-05-03 00:12:20', 'on'),
(316, 'RtiQVf', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:27:31', '2023-05-03 00:29:25', 'off'),
(317, 'FxgOXl', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:13', '2023-05-03 00:30:28', 'off'),
(318, 'pchSdp', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:21', '2023-05-03 00:28:21', 'on'),
(319, 'WYkdwV', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:27', '2023-05-03 00:28:27', 'on'),
(320, 'HyoqPX', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:34', '2023-05-03 00:28:34', 'on'),
(321, 'KM71Wf', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:41', '2023-05-03 00:28:41', 'on'),
(322, 'UkhPCI', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:48', '2023-05-03 00:28:48', 'on'),
(323, 'ZIjOEZ', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:28:54', '2023-05-03 00:28:54', 'on'),
(324, 'ISQnmd', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:29:00', '2023-05-03 00:29:00', 'on'),
(325, 'g2ULSy', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:29:07', '2023-05-03 00:29:07', 'on'),
(326, 'biLR5T', 'https://github.com/shohan858/get-link', 25, 0, '2023-05-03 00:29:25', '2023-05-03 00:29:25', 'on'),
(327, 'ioYri4', 'https://open.spotify.com/track/1fuPxyKfvLsP3FyaoExDDj', 25, 0, '2023-05-03 00:30:28', '2023-05-03 00:30:28', 'on'),
(328, 'pKKEeJ', 'http://localhost:8000/', 0, 0, '2023-05-04 00:14:20', '2023-05-04 00:14:20', 'on'),
(329, 'jt8kur', 'http://localhost:8000/', 0, 0, '2023-05-04 00:16:48', '2023-05-04 00:16:48', 'on'),
(330, 'kEzww5', 'http://localhost:8000/layout', 0, 0, '2023-05-04 00:18:45', '2023-05-04 00:18:45', 'on'),
(331, 'dlq9Gx', 'http://localhost:8000/gkEzww5', 0, 0, '2023-05-04 00:18:48', '2023-05-04 00:18:48', 'on'),
(333, 'Lh20Sr', 'http://youtube.com', 3, 0, '2023-05-04 18:22:06', '2023-05-04 18:22:06', 'on'),
(334, 'fMICPO', 'http://localhost:8000/gLh20Sr', 3, 0, '2023-05-04 18:22:13', '2023-05-04 18:22:13', 'on');

-- --------------------------------------------------------

--
-- Struktur dari tabel `templates`
--

CREATE TABLE `templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` bigint(20) UNSIGNED DEFAULT NULL,
  `id_komponen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_komponen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_background` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_konten_detail` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `templates`
--

INSERT INTO `templates` (`id`, `id_kategori`, `id_komponen`, `status_komponen`, `image`, `title`, `background`, `type_background`, `value_konten_detail`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2,1,11,10,9,8,', 'on,on,on,on,on,on,', 'basic.png', 'basic', '#e6e6e6', 'color', 3, 'on', NULL, '2023-04-18 03:14:50'),
(2, 1, '1,2,11,10,8', 'on,on,on,on,on,', 'partai.png', 'Partai', '#9e3030', 'color', 0, 'on', NULL, NULL),
(3, 1, '1,2,10,8,11', 'on,on,on,on,on,', 'gamer.png', 'Gamer', 'bg_gaming.jpg', 'image', 0, 'on', NULL, NULL),
(4, 1, '1,2,11,10', 'on,on,on,on,', 'namecard.png', 'Name Card', 'babu.png', 'image', 0, 'on', NULL, NULL),
(5, 1, '1,2,11,10,8,9', 'on,on,on,on,on,on,', 'portofolio.png', 'Portofolio', 'orange.png', 'image', 6, 'on', NULL, NULL),
(6, 3, '1,8,9,10', 'on,on,on,on,', '1681095623.png', 'partai2', '1681095623.png', 'image', 0, 'on', '2023-04-09 20:00:23', '2023-04-09 20:00:23'),
(7, 2, '1', 'on,', '1681095852.png', 'partai3', '#ff0000', 'color', 0, 'on', '2023-04-09 20:04:12', '2023-04-13 09:23:22'),
(8, 3, '1,8,8,9,', 'on,on,on,on,', '1681096709.png', 'wahda', '1681425343.jpg', 'image', 3, 'on', '2023-04-09 20:18:29', '2023-04-13 15:40:22'),
(9, 1, '1,9,11,', 'on,on,on,', '1681816464.png', 'wahda testing', '#8c5bc8', 'color', 3, 'on', '2023-04-18 04:14:24', '2023-04-18 05:38:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `external_id` varchar(255) NOT NULL,
  `invoice_id` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `slot` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_gateway` varchar(255) DEFAULT NULL,
  `ref_id` bigint(11) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `external_id`, `invoice_id`, `id_user`, `type`, `slot`, `total`, `payment_gateway`, `ref_id`, `url`, `status`, `flag`, `updated_at`, `created_at`) VALUES
(46, 'DLB41edbhB', '6438f6d36f998608dbbbfcfb', 7, 'microsite', 1, 5000, NULL, 0, 'https://checkout-staging.xendit.co/web/6438f6d36f998608dbbbfcfb', 'PAID', 1, '2023-04-14', '2023-04-14'),
(47, '3hmjbLuKH7', '643902a492279a33d6337914', 7, 'microsite', 1, 5000, NULL, 0, 'https://checkout-staging.xendit.co/web/643902a492279a33d6337914', 'PAID', 1, '2023-04-14', '2023-04-14'),
(48, 'K423SoqfTV', '643934de67856e2f226787c5', 7, 'microsite', 1, 5000, NULL, 0, 'https://checkout-staging.xendit.co/web/643934de67856e2f226787c5', 'PAID', 1, '2023-04-14', '2023-04-14'),
(49, 'XBchMaSQQo', '643a99b45686cf70f1276dd8', 7, 'microsite', 1, 5000, NULL, 3, 'https://checkout-staging.xendit.co/web/643a99b45686cf70f1276dd8', 'PAID', 1, '2023-04-15', '2023-04-15'),
(50, '9FvDThS8p8', '643ab92a92279a249b34f26c', 7, 'microsite', 1, 5000, 'DANA', 3, 'https://checkout-staging.xendit.co/web/643ab92a92279a249b34f26c', 'PAID', 1, '2023-04-15', '2023-04-15'),
(51, 'XFUmKsNzPd', '643cef846f9986bdc7bf877f', 7, 'microsite', 1, 5000, 'DANA', 3, 'https://checkout-staging.xendit.co/web/643cef846f9986bdc7bf877f', 'PAID', 1, '2023-04-17', '2023-04-17'),
(52, 'KMpyndeWXn', '643cf0136f99863d12bf8820', 7, 'microsite', 12, 12000, 'DANA', 1, 'https://checkout-staging.xendit.co/web/643cf0136f99863d12bf8820', 'PAID', 1, '2023-04-17', '2023-04-17'),
(53, 'gakUUwaV5I', '643fb66892279a28a539bea1', 11, 'microsite', 1, 5000, 'MANDIRI', 3, 'https://checkout-staging.xendit.co/web/643fb66892279a28a539bea1', 'SETTLED', 0, '2023-04-19', '2023-04-19'),
(54, 'elS9JeERX0', '643fb7d192279a04d639bfdf', 11, 'microsite', 1, 5000, 'MANDIRI', 3, 'https://checkout-staging.xendit.co/web/643fb7d192279a04d639bfdf', 'SETTLED', 0, '2023-04-19', '2023-04-19'),
(55, '52qGa6519V', '643fb88767856eb8046db759', 11, 'microsite', 1, 5000, 'MANDIRI', 3, 'https://checkout-staging.xendit.co/web/643fb88767856eb8046db759', 'SETTLED', 0, '2023-04-19', '2023-04-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_chart`
--

CREATE TABLE `transaksi_chart` (
  `id` int(11) NOT NULL,
  `total_pendapatan` varchar(255) NOT NULL,
  `total_penjualan` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_chart`
--

INSERT INTO `transaksi_chart` (`id`, `total_pendapatan`, `total_penjualan`, `created_at`, `updated_at`) VALUES
(41, '0,0,0,42000,42000,0,0,0,0,0,0,0', '0,0,0,7,7,0,0,0,0,0,0,0', '2023-04-17', '2023-05-04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_microsite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9',
  `batas_microsite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `google_id` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_visitor_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_visitor_total2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `all_visitor_total3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shortlink_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `jumlah_microsite`, `batas_microsite`, `role`, `google_id`, `img`, `all_visitor_total`, `all_visitor_total2`, `all_visitor_total3`, `remember_token`, `created_at`, `updated_at`, `shortlink_count`) VALUES
(1, 'wahda@gmail.com', 'wahda@gmail.com', NULL, '$2y$10$RKlnwgWoOatX.RyH.SzSQ.rPOwXq1JKoCqaZ9RhlAXfghEIKUh6F2', 'eyJpdiI6InhrM2RUSkNLL09PL0ZoMXQ0ME96MFE9PSIsInZhbHVlIjoiTW5CVzI2RTZKc2xQSlFYS2RmeEd0UT09IiwibWFjIjoiNjZlNzRjNDhmODliZTYyM2U3MjY5MjUzYTM2MzVjY2IzM2ViNDBjNTdiMWQyZGNmOGY4YmNkZWMxNWUzMDk4ZSIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9	', 'user', '', NULL, '0,0,0,1,3,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-27 23:28:32', '2023-05-03 04:46:23', 0),
(2, 'Jefry Putra', 'jefry@mu.com', NULL, '$2y$10$E8g12.9GZIycIlklwfU8QeyCn04ohZZfGRYS2i/Z/b5/2qjWpsLCu', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', NULL, '', '', NULL, NULL, '2023-03-28 02:35:38', '2023-03-28 02:35:38', 0),
(3, 'Jcoding', 'jcoding@gmail.com', NULL, '$2y$10$0FpHZ4paXA8vqiXWibVSze3pmuGfD3G0Py2N1PLpwCPqud7ScrY0u', 'eyJpdiI6IlJQS1NrbUZyaDJuV1R1ZXdLbmxmQ1E9PSIsInZhbHVlIjoiMVp2RUFYNTk4eXlhSlZKa0lMNXdUdz09IiwibWFjIjoiOTkxMzA1NzM5N2I1YzMzYzI3ZTRjODRhYzU1YjhlNGNmY2NlOGE1ZTk5Mzk3NGE0NTk0OWRhOWY2YzY0MWQ0OCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', '1683187975.jpg', '0,0,0,0,1,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-28 02:40:20', '2023-05-04 20:17:06', 3),
(4, 'Admin1', 'admin@admin.com', NULL, '$2y$10$uTdEorAz8nNUiotyolG47uhCE367v8DFrmP4bn2vgwoxdCfCA2txS', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', '', NULL, '0,0,0,142999990,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-28 12:47:33', '2023-05-04 01:06:12', 0),
(5, 'member1', 'member1@member.com', NULL, '$2y$10$ggyAHRdoK1iBunqobap7yeTis/rG.lEq3PBApLE9vHQtEStqudWNy', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', '', NULL, '0,0,0,1,0,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-29 12:06:58', '2023-04-17 03:43:59', 0),
(6, 'galih@gmail.com', 'galih@gmail.com', NULL, '$2y$10$EVJa3PcX2EDGZ3is4Fil3eQP7vecPB7GNzsIrk5z2zx8Le.Ots3ra', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', NULL, NULL, '0,0,0,6,0,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-29 12:42:03', '2023-04-17 22:18:50', 0),
(7, '08_GALIH_AGUNG_RAHARJO', 'akikazenoqwaserqwaser@gmail.com', NULL, '$2y$10$tP.59erwdyvsra5/nu0CC.vHCRZGFDAn7.mmxEvZSFGHZQ7K/7EIG', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6IitLV09iY3MwdElqUGJZcGpWa0lUQ3c9PSIsInZhbHVlIjoicW5uOGFzb0ZNNzhCUFJibzNoK3d3UT09IiwibWFjIjoiMmRmZGJiOWVjNTc5YmI1OTA2NDJlYzRjODM0NWRiYjBmNzQ2NGY4ZWQ4MzFkOGU1OGM2M2RkNzc3YmNmNDIyNiIsInRhZyI6IiJ9', 'user', '103768099696790035204', '1681732572.png', '0,0,0,3,0,0,0,0,0,0,0,0,2023', '', NULL, NULL, '2023-03-29 13:01:08', '2023-04-17 23:47:01', 0),
(8, 'testing@gmail.com', 'testing@gmail.com', NULL, '$2y$10$FTSYZ92aBs0s3uuOd/L2PeCRRYryjb5jVyo/L3q7IBXsOMltCxKc6', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'admin', NULL, '1681780523.jpg', '0,0,0,6,0,0,0,0,0,0,0,0,2023', '0,0,0,0,0,12,0,0,0,0,0,0,2022', '0,0,0,0,0,23,0,0,0,0,0,0,2021', NULL, '2023-04-12 14:32:25', '2023-04-17 18:16:20', 0),
(9, 'felix@gmail.com', 'felix@gmail.com', NULL, '$2y$10$Ugzdfdh2fwCwP1R2KMLApODYw2nLAFb37PPZ1XOs7g9Qs3uAMlm4y', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-17 06:36:30', '2023-04-17 06:38:30', 0),
(10, 'test', 'test@gmail.com', NULL, '$2y$10$mFjs7FxcYRoufpyH2cNPOOu4SB0KAQ37r9Of0IvzCqsvyMY8IGXxa', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-18 02:16:38', '2023-04-18 02:16:44', 0),
(11, 'wahda', 'wahdaadella.ba@gmail.com', NULL, '$2y$10$0gaaLqcpxaOuXp5dWHTX7OKAO0bBPgiui9Etd2kngMs0eYD4epYay', 'eyJpdiI6InBRcHNEQkhsTmFpcHlJNFd2N1J3ZGc9PSIsInZhbHVlIjoic1R5Ull4NGZvQXRxWVpKcmNxbmFkZz09IiwibWFjIjoiYjFlZGQ2NTNiYzJlMjRjY2M5OGRlMDM1ZDQ2ZjAxOWY1OTYyOTY0YjliNDU1NDY1M2E3NWQzODg0MDE4Y2RjZiIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-19 02:36:47', '2023-04-19 12:43:19', 0),
(12, 'qulbi', 'qulbyazzumy@gmail.com', NULL, '$2y$10$P1G2UAgiD9eFJQ2tsqi8AuMXE9m4Uc3eE9/ZNCu8VogQ7TNV3ltMa', 'eyJpdiI6IkpSRmFBRGRSaDhtVVdZOVpYNEF3K0E9PSIsInZhbHVlIjoiSW5MMDNRNDVJVlk4a2RxTTh3UFZjdz09IiwibWFjIjoiNmZmMTA4NGM5M2MzMmFiMmE5ODg5NzYxYWE1ODEyMDY0Njk5NjUzMTVkYzhkZmE0MmE2MDZkYmJjNmYzY2E0MSIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,1,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-19 12:20:43', '2023-04-19 14:05:57', 0),
(13, 'TRI ALDI MAHENDRA', 'trialdi333@gmail.com', NULL, '$2y$10$act0acVpGg0dr8pCq6EsJOY1xRbR.2WqMhFPABBbelUeSC36OBX8y', 'eyJpdiI6IjR3UnQ4RUQrZHpzcmV4cEtGUzVWa2c9PSIsInZhbHVlIjoielNZbzRjUG5FYVhORVNmdktXK2YzQT09IiwibWFjIjoiYjM2MjZjYTQ0OTI4ZDYwMzFjYzFhYzkzN2FkMzI1MTM0NDE2MWMzYmYwN2Q3ODEwY2QyNDg4MGViM2VlNzZjMSIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, '1681911141.png', '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-19 13:29:17', '2023-04-19 13:33:54', 0),
(14, 'Jefry Putra', 'jefryalbukhori23@gmail.com', NULL, '$2y$10$W.2f94Jm4QEsMyOQslkIqOw0TaPXiYHlzf8F07H0wh9DaAEp0cuPG', 'eyJpdiI6IldCMlZ1Z2ZIOWxPQjF4dGM2N0lVVHc9PSIsInZhbHVlIjoiTm0wZWtrckNsZWpnVU1BdG5PamljZz09IiwibWFjIjoiYTJkZTgzZjYzMTI1OWY1YmYxMjQ0Y2FkNjc3OTcyYmI2MDYyY2M3ZTczZmIxN2NjYjIyMTAyZDEyODVjZjUyMCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, '1681951860.jpg', '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-20 00:49:13', '2023-04-20 00:58:50', 0),
(15, 'akses5', 'akses5@io.com', NULL, '$2y$10$RJzLXObN7Z38TIlnSlMPXO7XnwIQJctCvHr2m2UFJMsfAgLq8bC7a', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-24 13:36:38', '2023-04-24 13:36:52', 0),
(16, 'akses6', 'akses6@io.com', NULL, '$2y$10$5ShcPRURa./8YVbAeRfAsuTIY1sr8IIdbfzR/ZT8wEyylmDqAFN1G', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-24 13:48:42', '2023-04-24 13:48:53', 0),
(17, 'cio', 'cio@io.com', NULL, '$2y$10$bz0QG.Vj5UFv2Rab0c6uEez3vy3AS2xwmgPLrBhdBoZPg5V8eFU0q', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-29 15:39:07', '2023-04-29 15:39:23', 0),
(18, 'cioo', 'cioo@io.com', NULL, '$2y$10$0maxgpyHyG/igyzoCuZn3Obki1K2ZfyDDGR8sYDWMG8caHHzO5Ifi', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-04-29 16:11:48', '2023-04-29 16:12:02', 0),
(19, 'cio2', 'cio2@io.com', NULL, '$2y$10$k.rm5IhKYUy4u8OaWfSihexFXJE5d2ssaJXpN6njxR6BiqT7bCx.u', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-01 20:38:41', '2023-05-01 20:39:08', 0),
(20, 'yayuk', 'yayuk@io.com', NULL, '$2y$10$PXqBhzzHvI5101FW8XeD6O6F7cLK0Wera81ZxKxyKeiFM2HmUkbvW', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-01 21:21:06', '2023-05-01 21:37:47', 2),
(21, 'sh', 'sh@io.com', NULL, '$2y$10$gftDJTohfFWcrgJeOW04Le4yShM5jOx5RnSee1mQFw9MhEzARGkKm', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-01 21:31:50', '2023-05-01 21:44:09', 11),
(22, 'juna', 'juna@gmail.com', NULL, '$2y$10$xIp49xdDQvJPSAU5YP5wGuRjhopTy5Y1HluXfBjjZkE7zdeb1mvW6', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-01 21:48:29', '2023-05-02 20:58:09', 23),
(23, 'hafidz', 'hafidz@io.com', NULL, '$2y$10$PoKkVrj/D8hbkLb2kSnLDO8iyP9tYufRE0sZ6QCHomi0FQru.UnHS', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-02 21:43:32', '2023-05-02 22:13:58', 12),
(24, 'hamdan', 'hamdan@io.com', NULL, '$2y$10$k4PCNOpm0nSRwZP1qm9Tf.Ju5Pv/OZbmJDndfyghkUKsrtVFdr9R6', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-02 22:14:58', '2023-05-03 00:22:12', 13),
(25, 'gilang', 'gilang@io.com', NULL, '$2y$10$/P8x4zrL9GVuWVFawmD6gO.ZrSTn8VJLn3p5eY2ILDo5otQwy1ByS', 'eyJpdiI6IkEyT0JGb0tpUmN2M1ZXaGdOM0dVOFE9PSIsInZhbHVlIjoic0k3U0hYQWhPWmlnOUdRTFg5VS8wdz09IiwibWFjIjoiODA4OTkwZmY3YzM4MDViMjM0MjdlZGYzOTdmMmMxNDhmNGQ4MDk5ZTMzZTQ2M2RhMWJmZDk2NTJhNzY4NzZlNCIsInRhZyI6IiJ9', 'eyJpdiI6InBndVBxQjlMN2xkcThUcFlzT2Z5R1E9PSIsInZhbHVlIjoidVJFY283NTQyNzZhVS96U25uTW81UT09IiwibWFjIjoiZmM1MGM0MmNmNDc5M2UzN2QwMjE3MjhiMzZmODhiZmY0OTQxMDM0NDhmNTc1MDg2YjhhMGI5OGMyMjc5ZGU0YSIsInRhZyI6IiJ9', 'user', NULL, NULL, '0,0,0,0,0,0,0,0,0,0,0,0,2023', NULL, NULL, NULL, '2023-05-03 00:25:57', '2023-05-03 00:30:28', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `id_microsite` varchar(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor`
--

INSERT INTO `visitor` (`id`, `id_microsite`, `ip_address`, `date`, `browser`, `created_at`, `updated_at`) VALUES
(175, '0', '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12'),
(176, '75', '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12'),
(177, '75', '192.168.0.3', '2023-04-12', 'Chrome', '2023-04-12', '2023-04-12'),
(178, 'adsf', '127.0.0.1', '2023-04-16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-16', '2023-04-16'),
(179, 'landing_page', '127.0.0.1', '2023-04-16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-16', '2023-04-16'),
(180, 'adsf', '127.0.0.1', '2023-04-16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.39', '2023-04-16', '2023-04-16'),
(181, 'testing', '127.0.0.1', '2023-04-15', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-16', '2023-04-16'),
(182, 'testing', '127.0.0.1', '2023-04-16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-16', '2023-04-16'),
(183, 'landing_page', '127.0.0.1', '2023-04-16', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-17', '2023-04-17'),
(184, 'landing_page', '127.0.0.1', '2023-04-17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-17', '2023-04-17'),
(185, 'landing_page', '127.0.0.1', '2023-04-17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.48', '2023-04-17', '2023-04-17'),
(186, 'testing3', '127.0.0.1', '2023-04-17', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-17', '2023-04-17'),
(187, 'landing_page', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-18', '2023-04-18'),
(188, 'landing_page', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36 Edg/112.0.1722.48', '2023-04-18', '2023-04-18'),
(189, 'jnkj', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-18', '2023-04-18'),
(190, 'testing3', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-18', '2023-04-18'),
(191, 'testing', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-18', '2023-04-18'),
(192, 'tttt', '127.0.0.1', '2023-04-18', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-18', '2023-04-18'),
(193, 'landing_page', '127.0.0.1', '2023-04-19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-19', '2023-04-19'),
(194, 'landing_page', '120.188.77.74', '2023-04-19', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-19', '2023-04-19'),
(195, 'landing_page', '54.36.149.0', '2023-04-19', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', '2023-04-19', '2023-04-19'),
(196, 'landing_page', '114.5.102.11', '2023-04-19', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/534.24 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/534.24 XiaoMi/MiuiBrowser/13.20.0-gn', '2023-04-19', '2023-04-19'),
(197, 'landing_page', '125.163.124.152', '2023-04-19', 'Mozilla/5.0 (Linux; Android 10; CPH2185) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(198, 'qulbi', '125.163.124.152', '2023-04-19', 'Mozilla/5.0 (Linux; Android 10; CPH2185) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(199, 'landing_page', '120.188.80.176', '2023-04-19', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(200, 'Haha', '120.188.80.176', '2023-04-19', 'Mozilla/5.0 (Linux; Android 10; K) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(201, 'landing_page', '157.55.39.217', '2023-04-19', 'Mozilla/5.0 AppleWebKit/537.36 (KHTML, like Gecko; compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm) Chrome/103.0.5060.134 Safari/537.36', '2023-04-19', '2023-04-19'),
(202, 'landing_page', '114.5.242.74', '2023-04-19', 'Mozilla/5.0 (Linux; Android 9; CPH2083) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(203, 'landing_page', '43.134.38.10', '2023-04-19', 'Mozilla/5.0 (Linux; Android 11; M2010J19SI) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/109.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(204, 'landing_page', '103.175.237.19', '2023-04-19', 'Mozilla/5.0 (Linux; Android 9; CPH2083) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(205, 'landing_page', '42.236.10.84', '2023-04-19', 'Mozilla/5.0 (Linux; Android 8.0; Pixel 2 Build/OPD3.170816.012) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(206, 'landing_page', '167.248.133.51', '2023-04-19', 'Mozilla/5.0 (compatible; CensysInspect/1.1; +https://about.censys.io/)', '2023-04-19', '2023-04-19'),
(207, 'landing_page', '103.105.76.167', '2023-04-19', 'Mozilla/5.0 (Linux; Android 11; SM-A127F) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-19', '2023-04-19'),
(208, 'landing_page', '54.36.148.51', '2023-04-19', 'Mozilla/5.0 (compatible; AhrefsBot/7.0; +http://ahrefs.com/robot/)', '2023-04-19', '2023-04-19'),
(209, 'landing_page', '114.5.242.74', '2023-04-20', 'Mozilla/5.0 (Linux; Android 9; CPH2083) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-20', '2023-04-20'),
(210, 'jcoding', '114.5.242.74', '2023-04-20', 'Mozilla/5.0 (Linux; Android 9; CPH2083) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-20', '2023-04-20'),
(211, 'landing_page', '127.0.0.1', '2023-04-24', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-24', '2023-04-24'),
(212, 'landing_page', '127.0.0.1', '2023-04-28', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-28', '2023-04-28'),
(213, 'landing_page', '127.0.0.1', '2023-04-29', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-29', '2023-04-29'),
(214, 'landing_page', '127.0.0.1', '2023-04-30', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-04-30', '2023-04-30'),
(215, 'landing_page', '127.0.0.1', '2023-04-30', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Mobile Safari/537.36', '2023-04-30', '2023-04-30'),
(216, 'landing_page', '127.0.0.1', '2023-05-02', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-02', '2023-05-02'),
(217, 'landing_page', '127.0.0.1', '2023-05-03', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-03', '2023-05-03'),
(218, 'landing_page', '127.0.0.1', '2023-05-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04', '2023-05-04'),
(219, 'dfgdf', '127.0.0.1', '2023-05-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04', '2023-05-04'),
(220, 'hvj', '127.0.0.1', '2023-05-04', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-04', '2023-05-04'),
(221, 'landing_page', '127.0.0.1', '2023-05-05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-05', '2023-05-05'),
(222, 'landing_page', '192.168.1.27', '2023-05-05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-05', '2023-05-05'),
(223, 'sadas', '127.0.0.1', '2023-05-05', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/112.0.0.0 Safari/537.36', '2023-05-05', '2023-05-05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visitor_chart`
--

CREATE TABLE `visitor_chart` (
  `id` int(11) NOT NULL,
  `total_visitor` text NOT NULL,
  `id_microsite` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visitor_chart`
--

INSERT INTO `visitor_chart` (`id`, `total_visitor`, `id_microsite`, `created_at`, `updated_at`) VALUES
(15, '0,0,0,2,2,0,0,0,0,0,0,0,2023', 'adsf', '2023-04-16', '2023-04-16'),
(16, '0,0,0,11,0,0,0,0,0,0,0,0,2023', 'testing', '2023-04-16', '2023-04-17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `collab`
--
ALTER TABLE `collab`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `getlink`
--
ALTER TABLE `getlink`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komponens`
--
ALTER TABLE `komponens`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `microsites`
--
ALTER TABLE `microsites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsites_id_user_foreign` (`id_user`),
  ADD KEY `microsites_id_template_foreign` (`id_template`),
  ADD KEY `microsites_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `microsite_details`
--
ALTER TABLE `microsite_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsite_details_id_template_foreign` (`id_template`),
  ADD KEY `microsite_details_id_microsite_foreign` (`id_microsite`);

--
-- Indeks untuk tabel `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `microsite_detail_kontens_id_microsite_foreign` (`id_microsite`),
  ADD KEY `microsite_detail_kontens_id_microsite_detail_foreign` (`id_microsite_detail`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paket_microsites`
--
ALTER TABLE `paket_microsites`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `shortlinks`
--
ALTER TABLE `shortlinks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shortlinks_code_unique` (`code`);

--
-- Indeks untuk tabel `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `templates_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi_chart`
--
ALTER TABLE `transaksi_chart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visitor_chart`
--
ALTER TABLE `visitor_chart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `collab`
--
ALTER TABLE `collab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `getlink`
--
ALTER TABLE `getlink`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kategoris`
--
ALTER TABLE `kategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `komponens`
--
ALTER TABLE `komponens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `microsites`
--
ALTER TABLE `microsites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT untuk tabel `microsite_details`
--
ALTER TABLE `microsite_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838;

--
-- AUTO_INCREMENT untuk tabel `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paket_microsites`
--
ALTER TABLE `paket_microsites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `shortlinks`
--
ALTER TABLE `shortlinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT untuk tabel `templates`
--
ALTER TABLE `templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `transaksi_chart`
--
ALTER TABLE `transaksi_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=224;

--
-- AUTO_INCREMENT untuk tabel `visitor_chart`
--
ALTER TABLE `visitor_chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `microsites`
--
ALTER TABLE `microsites`
  ADD CONSTRAINT `microsites_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsites_id_template_foreign` FOREIGN KEY (`id_template`) REFERENCES `templates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsites_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `microsite_details`
--
ALTER TABLE `microsite_details`
  ADD CONSTRAINT `microsite_details_id_microsite_foreign` FOREIGN KEY (`id_microsite`) REFERENCES `microsites` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `microsite_details_id_template_foreign` FOREIGN KEY (`id_template`) REFERENCES `templates` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `microsite_detail_kontens`
--
ALTER TABLE `microsite_detail_kontens`
  ADD CONSTRAINT `microsite_detail_kontens_id_microsite_detail_foreign` FOREIGN KEY (`id_microsite_detail`) REFERENCES `microsite_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `microsite_detail_kontens_id_microsite_foreign` FOREIGN KEY (`id_microsite`) REFERENCES `microsites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `templates`
--
ALTER TABLE `templates`
  ADD CONSTRAINT `templates_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;