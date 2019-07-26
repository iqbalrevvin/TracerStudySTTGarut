-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 10:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer_study`
--

-- --------------------------------------------------------

--
-- Table structure for table `aauth_groups`
--

CREATE TABLE `aauth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_groups`
--

INSERT INTO `aauth_groups` (`id`, `name`, `definition`) VALUES
(1, 'Admin', 'Developer System'),
(5, 'Administrator', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_group_to_group`
--

CREATE TABLE `aauth_group_to_group` (
  `group_id` int(11) UNSIGNED NOT NULL,
  `subgroup_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_login_attempts`
--

CREATE TABLE `aauth_login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(39) DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  `login_attempts` tinyint(2) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_login_attempts`
--

INSERT INTO `aauth_login_attempts` (`id`, `ip_address`, `timestamp`, `login_attempts`) VALUES
(1, '::1', '2019-07-22 11:31:57', 15),
(2, '::1', '2019-07-22 17:40:31', 5);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perms`
--

CREATE TABLE `aauth_perms` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_perms`
--

INSERT INTO `aauth_perms` (`id`, `name`, `definition`) VALUES
(1, 'menu_dashboard', NULL),
(2, 'menu_crud_builder', NULL),
(3, 'menu_api_builder', NULL),
(4, 'menu_page_builder', NULL),
(5, 'menu_form_builder', NULL),
(6, 'menu_menu', NULL),
(7, 'menu_auth', NULL),
(8, 'menu_user', NULL),
(9, 'menu_group', NULL),
(10, 'menu_access', NULL),
(11, 'menu_permission', NULL),
(12, 'menu_api_documentation', NULL),
(13, 'menu_web_documentation', NULL),
(14, 'menu_settings', NULL),
(15, 'user_list', NULL),
(16, 'user_update_status', NULL),
(17, 'user_export', NULL),
(18, 'user_add', NULL),
(19, 'user_update', NULL),
(20, 'user_update_profile', NULL),
(21, 'user_update_password', NULL),
(22, 'user_profile', NULL),
(23, 'user_view', NULL),
(24, 'user_delete', NULL),
(25, 'blog_list', NULL),
(26, 'blog_export', NULL),
(27, 'blog_add', NULL),
(28, 'blog_update', NULL),
(29, 'blog_view', NULL),
(30, 'blog_delete', NULL),
(31, 'form_list', NULL),
(32, 'form_export', NULL),
(33, 'form_add', NULL),
(34, 'form_update', NULL),
(35, 'form_view', NULL),
(36, 'form_manage', NULL),
(37, 'form_delete', NULL),
(38, 'crud_list', NULL),
(39, 'crud_export', NULL),
(40, 'crud_add', NULL),
(41, 'crud_update', NULL),
(42, 'crud_view', NULL),
(43, 'crud_delete', NULL),
(44, 'rest_list', NULL),
(45, 'rest_export', NULL),
(46, 'rest_add', NULL),
(47, 'rest_update', NULL),
(48, 'rest_view', NULL),
(49, 'rest_delete', NULL),
(50, 'group_list', NULL),
(51, 'group_export', NULL),
(52, 'group_add', NULL),
(53, 'group_update', NULL),
(54, 'group_view', NULL),
(55, 'group_delete', NULL),
(56, 'permission_list', NULL),
(57, 'permission_export', NULL),
(58, 'permission_add', NULL),
(59, 'permission_update', NULL),
(60, 'permission_view', NULL),
(61, 'permission_delete', NULL),
(62, 'access_list', NULL),
(63, 'access_add', NULL),
(64, 'access_update', NULL),
(65, 'menu_list', NULL),
(66, 'menu_add', NULL),
(67, 'menu_update', NULL),
(68, 'menu_delete', NULL),
(69, 'menu_save_ordering', NULL),
(70, 'menu_type_add', NULL),
(71, 'page_list', NULL),
(72, 'page_export', NULL),
(73, 'page_add', NULL),
(74, 'page_update', NULL),
(75, 'page_view', NULL),
(76, 'page_delete', NULL),
(77, 'blog_list', NULL),
(78, 'blog_export', NULL),
(79, 'blog_add', NULL),
(80, 'blog_update', NULL),
(81, 'blog_view', NULL),
(82, 'blog_delete', NULL),
(83, 'setting', NULL),
(84, 'setting_update', NULL),
(85, 'dashboard', NULL),
(86, 'extension_list', NULL),
(87, 'extension_activate', NULL),
(88, 'extension_deactivate', NULL),
(89, 'form_formtracer_add', ''),
(90, 'form_formtracer_update', ''),
(91, 'form_formtracer_view', ''),
(92, 'form_formtracer_delete', ''),
(93, 'menu_blog', ''),
(94, 'menu_form_tracer_builder', ''),
(95, 'menu_form_tracer_builderd', ''),
(96, 'menu_front_page_builder', ''),
(97, 'menu_daftar_mahasiswa', ''),
(98, 'menu_extension', ''),
(99, 'menu_berita', ''),
(100, 'menu_testpage', ''),
(101, 'menu_form_tracer', ''),
(102, 'menu_report', ''),
(103, 'menu_report_grafik', ''),
(104, 'formtracer_view', ''),
(105, 'formtracer_delete', ''),
(106, 'formtracer_list', '');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_group`
--

CREATE TABLE `aauth_perm_to_group` (
  `perm_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_perm_to_group`
--

INSERT INTO `aauth_perm_to_group` (`perm_id`, `group_id`) VALUES
(1, 4),
(2, 4),
(3, 4),
(4, 4),
(5, 4),
(6, 4),
(7, 4),
(8, 4),
(9, 4),
(10, 4),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(65, 4),
(66, 4),
(67, 4),
(68, 4),
(69, 4),
(70, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 4),
(21, 4),
(22, 4),
(23, 4),
(24, 4),
(25, 4),
(26, 4),
(27, 4),
(28, 4),
(29, 4),
(30, 4),
(77, 4),
(78, 4),
(79, 4),
(80, 4),
(81, 4),
(82, 4),
(31, 4),
(32, 4),
(33, 4),
(34, 4),
(35, 4),
(36, 4),
(37, 4),
(89, 4),
(90, 4),
(91, 4),
(92, 4),
(38, 4),
(39, 4),
(40, 4),
(41, 4),
(42, 4),
(43, 4),
(44, 4),
(45, 4),
(46, 4),
(47, 4),
(48, 4),
(49, 4),
(50, 4),
(51, 4),
(52, 4),
(53, 4),
(54, 4),
(55, 4),
(56, 4),
(57, 4),
(58, 4),
(59, 4),
(60, 4),
(61, 4),
(62, 4),
(63, 4),
(64, 4),
(71, 4),
(72, 4),
(73, 4),
(74, 4),
(75, 4),
(76, 4),
(83, 4),
(84, 4),
(85, 4),
(86, 4),
(87, 4),
(88, 4),
(83, 1),
(1, 5),
(3, 5),
(4, 5),
(5, 5),
(7, 5),
(8, 5),
(9, 5),
(14, 5),
(15, 5),
(16, 5),
(17, 5),
(18, 5),
(19, 5),
(20, 5),
(21, 5),
(22, 5),
(23, 5),
(24, 5),
(25, 5),
(26, 5),
(27, 5),
(28, 5),
(29, 5),
(30, 5),
(77, 5),
(78, 5),
(79, 5),
(80, 5),
(81, 5),
(82, 5),
(31, 5),
(32, 5),
(33, 5),
(34, 5),
(35, 5),
(36, 5),
(37, 5),
(89, 5),
(90, 5),
(91, 5),
(92, 5),
(44, 5),
(45, 5),
(46, 5),
(47, 5),
(48, 5),
(49, 5),
(71, 5),
(72, 5),
(73, 5),
(74, 5),
(75, 5),
(76, 5),
(83, 5),
(84, 5),
(85, 5),
(94, 5),
(95, 5),
(96, 5),
(97, 5),
(98, 1),
(99, 1),
(99, 5),
(102, 1),
(102, 5),
(103, 1),
(103, 5),
(97, 1),
(97, 5);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_perm_to_user`
--

CREATE TABLE `aauth_perm_to_user` (
  `perm_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_pms`
--

CREATE TABLE `aauth_pms` (
  `id` int(11) UNSIGNED NOT NULL,
  `sender_id` int(11) UNSIGNED NOT NULL,
  `receiver_id` int(11) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `message` text,
  `date_sent` datetime DEFAULT NULL,
  `date_read` datetime DEFAULT NULL,
  `pm_deleted_sender` int(1) DEFAULT NULL,
  `pm_deleted_receiver` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user`
--

CREATE TABLE `aauth_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `aauth_users`
--

CREATE TABLE `aauth_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(100) NOT NULL,
  `oauth_uid` text,
  `oauth_provider` varchar(100) DEFAULT NULL,
  `pass` varchar(64) NOT NULL,
  `username` varchar(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `avatar` text NOT NULL,
  `banned` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_activity` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `forgot_exp` text,
  `remember_time` datetime DEFAULT NULL,
  `remember_exp` text,
  `verification_code` text,
  `top_secret` varchar(16) DEFAULT NULL,
  `ip_address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_users`
--

INSERT INTO `aauth_users` (`id`, `email`, `oauth_uid`, `oauth_provider`, `pass`, `username`, `full_name`, `avatar`, `banned`, `last_login`, `last_activity`, `date_created`, `forgot_exp`, `remember_time`, `remember_exp`, `verification_code`, `top_secret`, `ip_address`) VALUES
(1, 'iqbal.revvin@gmail.com', NULL, NULL, 'af685dc72fb22be659eb8624fa160ddf43c0b25f58fc8bcae9d2e806900c2dcc', 'iqbalrevvin', 'Iqbal Revvin', '20190712013923-iqbal.png', 0, '2019-07-26 23:26:46', '2019-07-26 23:26:46', '2019-07-11 18:49:25', NULL, NULL, NULL, NULL, NULL, '::1'),
(2, 'admin@admin.com', NULL, NULL, '52b3a93aac36bd14b3a1c9e7118f79981d14d39c6fd5118884d7544e58232a8d', 'admin', 'Administrator', 'default.png', 0, '2019-07-26 23:26:27', '2019-07-26 23:26:27', '2019-07-12 01:38:10', NULL, NULL, NULL, NULL, NULL, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_to_group`
--

CREATE TABLE `aauth_user_to_group` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aauth_user_to_group`
--

INSERT INTO `aauth_user_to_group` (`user_id`, `group_id`) VALUES
(1, 1),
(2, 5),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `aauth_user_variables`
--

CREATE TABLE `aauth_user_variables` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `data_key` varchar(100) NOT NULL,
  `value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `tags` text NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `viewers` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `slug`, `content`, `image`, `tags`, `category`, `status`, `author`, `viewers`, `created_at`, `updated_at`) VALUES
(1, 'Hello Wellcome To Cicool Builder', 'Hello-Wellcome-To-Ciool-Builder', 'greetings from our team I hope to be happy! ', 'wellcome.jpg', 'greetings', '1', 'publish', 'admin', 3, '2019-07-11 18:49:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `category_id` int(11) UNSIGNED NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`category_id`, `category_name`, `category_desc`) VALUES
(1, 'Technology', ''),
(2, 'Lifestyle', '');

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` int(11) UNSIGNED NOT NULL,
  `captcha_time` int(10) DEFAULT NULL,
  `ip_address` varchar(45) NOT NULL,
  `word` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(4, 1563696598, '141.8.132.17', 'WYJB');

-- --------------------------------------------------------

--
-- Table structure for table `cc_options`
--

CREATE TABLE `cc_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `option_name` varchar(200) NOT NULL,
  `option_value` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cc_options`
--

INSERT INTO `cc_options` (`id`, `option_name`, `option_value`) VALUES
(1, 'active_theme', 'cicool'),
(2, 'favicon', 'default.png'),
(3, 'site_name', 'Tracer Study STTGarut'),
(4, 'enable_disqus', NULL),
(5, 'disqus_id', ''),
(6, 'email', 'tracer@sttgarut.ac.id'),
(7, 'author', 'Leni Fitriani, M.Kom'),
(8, 'site_description', 'Situs Resmi Tracer Study STTGarut'),
(9, 'keywords', 'Tracer Study STTGarut'),
(10, 'landing_page_id', 'default'),
(11, 'timezone', 'Asia/Jakarta'),
(12, 'google_id', ''),
(13, 'google_secret', '');

-- --------------------------------------------------------

--
-- Table structure for table `cc_session`
--

CREATE TABLE `cc_session` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) NOT NULL,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `page_read` varchar(20) DEFAULT NULL,
  `page_create` varchar(20) DEFAULT NULL,
  `page_update` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `title`, `subject`, `table_name`, `primary_key`, `page_read`, `page_create`, `page_update`) VALUES
(1, 'Formtracer', 'Formtracer', 'formtracer', 'id', 'yes', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crud_custom_option`
--

CREATE TABLE `crud_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crud_field`
--

CREATE TABLE `crud_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_form` varchar(10) DEFAULT NULL,
  `show_update_form` varchar(10) DEFAULT NULL,
  `show_detail_page` varchar(10) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_field`
--

INSERT INTO `crud_field` (`id`, `crud_id`, `field_name`, `field_label`, `input_type`, `show_column`, `show_add_form`, `show_update_form`, `show_detail_page`, `sort`, `relation_table`, `relation_value`, `relation_label`) VALUES
(1, 1, 'id', 'id', 'number', '', '', '', '', 1, '', '', ''),
(2, 1, 'nomor_mahasiswa', 'nomor_mahasiswa', 'number', 'yes', '', '', 'yes', 2, '', '', ''),
(3, 1, 'kode_pt', 'kode_pt', 'input', 'yes', '', '', 'yes', 3, '', '', ''),
(4, 1, 'tahun_lulus', 'tahun_lulus', 'number', 'yes', '', '', 'yes', 4, '', '', ''),
(5, 1, 'kode_prodi', 'kode_prodi', 'number', 'yes', '', '', 'yes', 5, '', '', ''),
(6, 1, 'nama', 'nama', 'input', 'yes', '', '', 'yes', 6, '', '', ''),
(7, 1, 'nomor_telephone_handphone', 'nomor_telephone_handphone', 'number', '', '', '', '', 7, '', '', ''),
(8, 1, 'alamat_email', 'alamat_email', 'input', '', '', '', '', 8, '', '', ''),
(9, 1, 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'editor_wysiwyg', '', '', '', '', 9, '', '', ''),
(10, 1, 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'editor_wysiwyg', '', '', '', '', 10, '', '', ''),
(11, 1, 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'input', '', '', '', '', 11, '', '', ''),
(12, 1, 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'editor_wysiwyg', '', '', '', '', 12, '', '', ''),
(13, 1, 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'editor_wysiwyg', '', '', '', '', 13, '', '', ''),
(14, 1, 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'input', '', '', '', '', 14, '', '', ''),
(15, 1, 'perkuliahan', 'perkuliahan', 'editor_wysiwyg', '', '', '', '', 15, '', '', ''),
(16, 1, 'desmonstrasi', 'desmonstrasi', 'editor_wysiwyg', '', '', '', '', 16, '', '', ''),
(17, 1, 'partisipasi_dalam_proyek_riset', 'partisipasi_dalam_proyek_riset', 'editor_wysiwyg', '', '', '', '', 17, '', '', ''),
(18, 1, 'magang', 'magang', 'editor_wysiwyg', '', '', '', '', 18, '', '', ''),
(19, 1, 'praktikum', 'praktikum', 'editor_wysiwyg', '', '', '', '', 19, '', '', ''),
(20, 1, 'kerja_lapangan', 'kerja_lapangan', 'editor_wysiwyg', '', '', '', '', 20, '', '', ''),
(21, 1, 'diskusi', 'diskusi', 'editor_wysiwyg', '', '', '', '', 21, '', '', ''),
(22, 1, 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'editor_wysiwyg', '', '', '', '', 22, '', '', ''),
(23, 1, 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu', 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu', 'editor_wysiwyg', '', '', '', '', 23, '', '', ''),
(24, 1, 'berapa_perusahaan_yang_dilamar_lewat_surat_email_', 'berapa_perusahaan_yang_dilamar_lewat_surat_email_', 'number', '', '', '', '', 24, '', '', ''),
(25, 1, '_jumlah_perusahaan_yang_merespons_lamaran_anda_', '_jumlah_perusahaan_yang_merespons_lamaran_anda_', 'number', '', '', '', '', 25, '', '', ''),
(26, 1, 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'number', '', '', '', '', 26, '', '', ''),
(27, 1, 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu', 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu', 'editor_wysiwyg', '', '', '', '', 27, '', '', ''),
(28, 1, 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'editor_wysiwyg', '', '', '', '', 28, '', '', ''),
(29, 1, 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'editor_wysiwyg', '', '', '', '', 29, '', '', ''),
(30, 1, 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'editor_wysiwyg', '', '', '', '', 30, '', '', ''),
(31, 1, 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'editor_wysiwyg', '', '', '', '', 31, '', '', ''),
(32, 1, 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'editor_wysiwyg', '', '', '', '', 32, '', '', ''),
(33, 1, 'pengetahuan_umum', 'pengetahuan_umum', 'editor_wysiwyg', '', '', '', '', 33, '', '', ''),
(34, 1, 'bahasa_inggris', 'bahasa_inggris', 'editor_wysiwyg', '', '', '', '', 34, '', '', ''),
(35, 1, 'ketrampilan_internet_', 'ketrampilan_internet_', 'editor_wysiwyg', '', '', '', '', 35, '', '', ''),
(36, 1, 'ketrampilan_komputer', 'ketrampilan_komputer', 'editor_wysiwyg', '', '', '', '', 36, '', '', ''),
(37, 1, 'berpikir_kritis_', 'berpikir_kritis_', 'editor_wysiwyg', '', '', '', '', 37, '', '', ''),
(38, 1, 'ketrampilan_riset', 'ketrampilan_riset', 'editor_wysiwyg', '', '', '', '', 38, '', '', ''),
(39, 1, 'kemampuan_belajar', 'kemampuan_belajar', 'editor_wysiwyg', '', '', '', '', 39, '', '', ''),
(40, 1, 'kemampuan_berkomunikasi', 'kemampuan_berkomunikasi', 'editor_wysiwyg', '', '', '', '', 40, '', '', ''),
(41, 1, 'bekerja_di_bawah_tekanan', 'bekerja_di_bawah_tekanan', 'editor_wysiwyg', '', '', '', '', 41, '', '', ''),
(42, 1, 'manajemen_waktu', 'manajemen_waktu', 'editor_wysiwyg', '', '', '', '', 42, '', '', ''),
(43, 1, 'bekerja_secara_mandiri', 'bekerja_secara_mandiri', 'editor_wysiwyg', '', '', '', '', 43, '', '', ''),
(44, 1, 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'editor_wysiwyg', '', '', '', '', 44, '', '', ''),
(45, 1, 'kemampuan_dalam_memecahkan_masalah', 'kemampuan_dalam_memecahkan_masalah', 'editor_wysiwyg', '', '', '', '', 45, '', '', ''),
(46, 1, 'negosiasi_', 'negosiasi_', 'editor_wysiwyg', '', '', '', '', 46, '', '', ''),
(47, 1, 'kemampuan_untuk_terus_belajar_sepanjang_hayat', 'kemampuan_untuk_terus_belajar_sepanjang_hayat', 'editor_wysiwyg', '', '', '', '', 47, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud_field_validation`
--

CREATE TABLE `crud_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `crud_field_id` int(11) NOT NULL,
  `crud_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_field_validation`
--

INSERT INTO `crud_field_validation` (`id`, `crud_field_id`, `crud_id`, `validation_name`, `validation_value`) VALUES
(1, 2, 1, 'required', ''),
(2, 2, 1, 'max_length', '7'),
(3, 3, 1, 'required', ''),
(4, 3, 1, 'max_length', '6'),
(5, 4, 1, 'required', ''),
(6, 4, 1, 'max_length', '4'),
(7, 5, 1, 'required', ''),
(8, 5, 1, 'max_length', '11'),
(9, 6, 1, 'required', ''),
(10, 6, 1, 'max_length', '25'),
(11, 7, 1, 'required', ''),
(12, 7, 1, 'max_length', '11'),
(13, 8, 1, 'required', ''),
(14, 8, 1, 'max_length', '225'),
(15, 9, 1, 'required', ''),
(16, 10, 1, 'required', ''),
(17, 11, 1, 'required', ''),
(18, 11, 1, 'max_length', '225'),
(19, 12, 1, 'required', ''),
(20, 13, 1, 'required', ''),
(21, 14, 1, 'required', ''),
(22, 14, 1, 'max_length', '225'),
(23, 15, 1, 'required', ''),
(24, 16, 1, 'required', ''),
(25, 17, 1, 'required', ''),
(26, 18, 1, 'required', ''),
(27, 19, 1, 'required', ''),
(28, 20, 1, 'required', ''),
(29, 21, 1, 'required', ''),
(30, 22, 1, 'required', ''),
(31, 23, 1, 'required', ''),
(32, 24, 1, 'required', ''),
(33, 24, 1, 'max_length', '11'),
(34, 25, 1, 'required', ''),
(35, 25, 1, 'max_length', '11'),
(36, 26, 1, 'required', ''),
(37, 26, 1, 'max_length', '11'),
(38, 27, 1, 'required', ''),
(39, 28, 1, 'required', ''),
(40, 29, 1, 'required', ''),
(41, 30, 1, 'required', ''),
(42, 31, 1, 'required', ''),
(43, 32, 1, 'required', ''),
(44, 33, 1, 'required', ''),
(45, 34, 1, 'required', ''),
(46, 35, 1, 'required', ''),
(47, 36, 1, 'required', ''),
(48, 37, 1, 'required', ''),
(49, 38, 1, 'required', ''),
(50, 39, 1, 'required', ''),
(51, 40, 1, 'required', ''),
(52, 41, 1, 'required', ''),
(53, 42, 1, 'required', ''),
(54, 43, 1, 'required', ''),
(55, 44, 1, 'required', ''),
(56, 45, 1, 'required', ''),
(57, 46, 1, 'required', ''),
(58, 47, 1, 'required', '');

-- --------------------------------------------------------

--
-- Table structure for table `crud_input_type`
--

CREATE TABLE `crud_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `custom_value` int(11) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_input_type`
--

INSERT INTO `crud_input_type` (`id`, `type`, `relation`, `custom_value`, `validation_group`) VALUES
(1, 'input', '0', 0, 'input'),
(2, 'textarea', '0', 0, 'text'),
(3, 'select', '1', 0, 'select'),
(4, 'editor_wysiwyg', '0', 0, 'editor'),
(5, 'password', '0', 0, 'password'),
(6, 'email', '0', 0, 'email'),
(7, 'address_map', '0', 0, 'address_map'),
(8, 'file', '0', 0, 'file'),
(9, 'file_multiple', '0', 0, 'file_multiple'),
(10, 'datetime', '0', 0, 'datetime'),
(11, 'date', '0', 0, 'date'),
(12, 'timestamp', '0', 0, 'timestamp'),
(13, 'number', '0', 0, 'number'),
(14, 'yes_no', '0', 0, 'yes_no'),
(15, 'time', '0', 0, 'time'),
(16, 'year', '0', 0, 'year'),
(17, 'select_multiple', '1', 0, 'select_multiple'),
(18, 'checkboxes', '1', 0, 'checkboxes'),
(19, 'options', '1', 0, 'options'),
(20, 'true_false', '0', 0, 'true_false'),
(21, 'current_user_username', '0', 0, 'user_username'),
(22, 'current_user_id', '0', 0, 'current_user_id'),
(23, 'custom_option', '0', 1, 'custom_option'),
(24, 'custom_checkbox', '0', 1, 'custom_checkbox'),
(25, 'custom_select_multiple', '0', 1, 'custom_select_multiple'),
(26, 'custom_select', '0', 1, 'custom_select');

-- --------------------------------------------------------

--
-- Table structure for table `crud_input_validation`
--

CREATE TABLE `crud_input_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `validation` varchar(200) NOT NULL,
  `input_able` varchar(20) NOT NULL,
  `group_input` text NOT NULL,
  `input_placeholder` text NOT NULL,
  `call_back` varchar(10) NOT NULL,
  `input_validation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_input_validation`
--

INSERT INTO `crud_input_validation` (`id`, `validation`, `input_able`, `group_input`, `input_placeholder`, `call_back`, `input_validation`) VALUES
(1, 'required', 'no', 'input, file, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes, true_false, address_map, custom_option, custom_checkbox, custom_select_multiple, custom_select, file_multiple', '', '', ''),
(2, 'max_length', 'yes', 'input, number, text, select, password, email, editor, yes_no, time, year, select_multiple, options, checkboxes, address_map', '', '', 'numeric'),
(3, 'min_length', 'yes', 'input, number, text, select, password, email, editor, time, year, select_multiple, address_map', '', '', 'numeric'),
(4, 'valid_email', 'no', 'input, email', '', '', ''),
(5, 'valid_emails', 'no', 'input, email', '', '', ''),
(6, 'regex', 'yes', 'input, number, text, datetime, select, password, email, editor, date, yes_no, time, year, select_multiple, options, checkboxes', '', 'yes', 'callback_valid_regex'),
(7, 'decimal', 'no', 'input, number, text, select', '', '', ''),
(8, 'allowed_extension', 'yes', 'file, file_multiple', 'ex : jpg,png,..', '', 'callback_valid_extension_list'),
(9, 'max_width', 'yes', 'file, file_multiple', '', '', 'numeric'),
(10, 'max_height', 'yes', 'file, file_multiple', '', '', 'numeric'),
(11, 'max_size', 'yes', 'file, file_multiple', '... kb', '', 'numeric'),
(12, 'max_item', 'yes', 'file_multiple', '', '', 'numeric'),
(13, 'valid_url', 'no', 'input, text', '', '', ''),
(14, 'alpha', 'no', 'input, text, select, password, editor, yes_no', '', '', ''),
(15, 'alpha_numeric', 'no', 'input, number, text, select, password, editor', '', '', ''),
(16, 'alpha_numeric_spaces', 'no', 'input, number, text,select, password, editor', '', '', ''),
(17, 'valid_number', 'no', 'input, number, text, password, editor, true_false', '', 'yes', ''),
(18, 'valid_datetime', 'no', 'input, datetime, text', '', 'yes', ''),
(19, 'valid_date', 'no', 'input, datetime, date, text', '', 'yes', ''),
(20, 'valid_max_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(21, 'valid_min_selected_option', 'yes', 'select_multiple, custom_select_multiple, custom_checkbox, checkboxes', '', 'yes', 'numeric'),
(22, 'valid_alpha_numeric_spaces_underscores', 'no', 'input, text,select, password, editor', '', 'yes', ''),
(23, 'matches', 'yes', 'input, number, text, password, email', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(24, 'valid_json', 'no', 'input, text, editor', '', 'yes', ' '),
(25, 'valid_url', 'no', 'input, text, editor', '', 'no', ' '),
(26, 'exact_length', 'yes', 'input, text, number', '0 - 99999*', 'no', 'numeric'),
(27, 'alpha_dash', 'no', 'input, text', '', 'no', ''),
(28, 'integer', 'no', 'input, text, number', '', 'no', ''),
(29, 'differs', 'yes', 'input, text, number, email, password, editor, options, select', 'any field', 'no', 'callback_valid_alpha_numeric_spaces_underscores'),
(30, 'is_natural', 'no', 'input, text, number', '', 'no', ''),
(31, 'is_natural_no_zero', 'no', 'input, text, number', '', 'no', ''),
(32, 'less_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(33, 'less_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(34, 'greater_than', 'yes', 'input, text, number', '', 'no', 'numeric'),
(35, 'greater_than_equal_to', 'yes', 'input, text, number', '', 'no', 'numeric'),
(36, 'in_list', 'yes', 'input, text, number, select, options', '', 'no', 'callback_valid_multiple_value'),
(37, 'valid_ip', 'no', 'input, text', '', 'no', '');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `title`, `subject`, `table_name`) VALUES
(1, 'Form Tracer Study', 'FormTracer', 'form_formtracer');

-- --------------------------------------------------------

--
-- Table structure for table `formtracer`
--

CREATE TABLE `formtracer` (
  `id` int(11) UNSIGNED NOT NULL,
  `nomor_mahasiswa` int(7) NOT NULL,
  `kode_pt` varchar(6) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_telephone_handphone` int(11) NOT NULL,
  `alamat_email` varchar(225) NOT NULL,
  `waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan` text NOT NULL,
  `sebutkan_sumberdana_dalam_pembiayaan_kuliah_` text NOT NULL,
  `sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_` varchar(225) NOT NULL,
  `hubungan_antara_bidang_studi_dengan_pekerjaan_anda_` text NOT NULL,
  `tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_` text NOT NULL,
  `kira_kira_berapa_pendapatan_anda_setiap_bulannya_` varchar(225) NOT NULL,
  `perkuliahan` text NOT NULL,
  `desmonstrasi` text NOT NULL,
  `partisipasi_dalam_proyek_riset` text NOT NULL,
  `magang` text NOT NULL,
  `praktikum` text NOT NULL,
  `kerja_lapangan` text NOT NULL,
  `diskusi` text NOT NULL,
  `mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_` text NOT NULL,
  `bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `berapa_perusahaan_yang_dilamar_lewat_surat_email_` int(11) NOT NULL,
  `_jumlah_perusahaan_yang_merespons_lamaran_anda_` int(11) NOT NULL,
  `jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_` int(11) NOT NULL,
  `bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_` text NOT NULL,
  `apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_` text NOT NULL,
  `jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_` text NOT NULL,
  `pengetahuan_di_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_umum` text NOT NULL,
  `bahasa_inggris` text NOT NULL,
  `ketrampilan_internet_` text NOT NULL,
  `ketrampilan_komputer` text NOT NULL,
  `berpikir_kritis_` text NOT NULL,
  `ketrampilan_riset` text NOT NULL,
  `kemampuan_belajar` text NOT NULL,
  `kemampuan_berkomunikasi` text NOT NULL,
  `bekerja_di_bawah_tekanan` text NOT NULL,
  `manajemen_waktu` text NOT NULL,
  `bekerja_secara_mandiri` text NOT NULL,
  `bekerja_dalam_tim_bekerjasama_dengan_orang_lain` text NOT NULL,
  `kemampuan_dalam_memecahkan_masalah` text NOT NULL,
  `negosiasi_` text NOT NULL,
  `kemampuan_untuk_terus_belajar_sepanjang_hayat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `formtracer`
--

INSERT INTO `formtracer` (`id`, `nomor_mahasiswa`, `kode_pt`, `tahun_lulus`, `kode_prodi`, `nama`, `nomor_telephone_handphone`, `alamat_email`, `waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan`, `sebutkan_sumberdana_dalam_pembiayaan_kuliah_`, `sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_`, `hubungan_antara_bidang_studi_dengan_pekerjaan_anda_`, `tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_`, `kira_kira_berapa_pendapatan_anda_setiap_bulannya_`, `perkuliahan`, `desmonstrasi`, `partisipasi_dalam_proyek_riset`, `magang`, `praktikum`, `kerja_lapangan`, `diskusi`, `mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_`, `bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu`, `berapa_perusahaan_yang_dilamar_lewat_surat_email_`, `_jumlah_perusahaan_yang_merespons_lamaran_anda_`, `jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_`, `bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu`, `apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_`, `apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_`, `jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_`, `pengetahuan_di_bidang_atau_disiplin_ilmu_anda`, `pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda`, `pengetahuan_umum`, `bahasa_inggris`, `ketrampilan_internet_`, `ketrampilan_komputer`, `berpikir_kritis_`, `ketrampilan_riset`, `kemampuan_belajar`, `kemampuan_berkomunikasi`, `bekerja_di_bawah_tekanan`, `manajemen_waktu`, `bekerja_secara_mandiri`, `bekerja_dalam_tim_bekerjasama_dengan_orang_lain`, `kemampuan_dalam_memecahkan_masalah`, `negosiasi_`, `kemampuan_untuk_terus_belajar_sepanjang_hayat`) VALUES
(1, 1406082, '123456', 2014, 55201, 'Iqbal Revvin', 2147483647, 'iqbal.revvin@gmail.com', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', '[3] Beasiswa ADIK', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1000000', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sesudah Lulus', 'Pergi ke bursa/pameran kerja', 2, 2, 2, 'Saya menikah,Saya sekarang sedang mencari pekerjaan', 'Saya Sibuk Dengan Keluarga dan Anak-anak', 'Perusahaan Swasta', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 1406054, '043051', 2019, 55201, 'Fikri Zakaria Rahman', 2147483647, 'fikrizakaria37@gmail.com', 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 3-6 bulan Sebelum Lulus', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.),Lainnya', 2, 2, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '1', '5', '2', '2', '1', '1', '1', '1', '1', '3', '3', '1', '2', '1', '1', '2', '2'),
(3, 1406068, '043051', 2018, 55201, 'Irna Restiani', 2147483647, 'irna.restiani@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Sangat Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Melalui iklan di koran/majalah, brosur,Mencari lewat internet/iklan online/milis', 3, 2, 2, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '2', '2', '2', '1', '1', '1', '2', '1', '2', '2', '2', '1', '2', '2', '2', '2', '2'),
(4, 1406019, '043051', 2018, 55201, 'unknow', 930390, 'jqdjskcjhsclkalkj@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '[1] Biaya Sendiri', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Saya Tidak Mencari Pekerjaan Sebelumnya,Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 3, 3, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2'),
(5, 1411023, '043051', 2018, 22201, 'unknow 2', 2147483647, 'unknow23@gmail.com', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1500000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Menghubungi agen tenaga kerja komersial/swasta', 3, 3, 3, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Perusahaan Swasta', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', '1', '1', '2', '3', '1', '1', '1', '2', '3', '1', '4', '1', '2', '1', '2', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form_custom_attribute`
--

CREATE TABLE `form_custom_attribute` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `attribute_value` text NOT NULL,
  `attribute_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_custom_attribute`
--

INSERT INTO `form_custom_attribute` (`id`, `form_field_id`, `form_id`, `attribute_value`, `attribute_label`) VALUES
(133, 2807, 1, 'test', 'test'),
(134, 2811, 1, 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `form_custom_option`
--

CREATE TABLE `form_custom_option` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `option_value` text NOT NULL,
  `option_label` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_custom_option`
--

INSERT INTO `form_custom_option` (`id`, `form_field_id`, `form_id`, `option_value`, `option_label`) VALUES
(7348, 2806, 1, 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN'),
(7349, 2806, 1, 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN', 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN'),
(7350, 2806, 1, 'Kira-kira 6-9 Bulan Sebelum LULUS UJIAN', 'Kira-kira 6-9 Bulan Sebelum LULUS UJIAN'),
(7351, 2806, 1, 'Kira-kira 9-12 Bulan Sebelum LULUS UJIAN', 'Kira-kira 9-12 Bulan Sebelum LULUS UJIAN'),
(7352, 2806, 1, 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN'),
(7353, 2806, 1, 'Kira-kira 1-3 Bulan Sesudah LULUS UJIAN', 'Kira-kira 1-3 Bulan Sesudah LULUS UJIAN'),
(7354, 2806, 1, 'Kira-kira 4-6 Bulan Sesudah LULUS UJIAN', 'Kira-kira 4-6 Bulan Sesudah LULUS UJIAN'),
(7355, 2806, 1, 'Kira-kira 6-9 Bulan Sesudah LULUS UJIAN', 'Kira-kira 6-9 Bulan Sesudah LULUS UJIAN'),
(7356, 2806, 1, 'Kira-kira 9-12 Bulan Sesudah LULUS UJIAN', 'Kira-kira 9-12 Bulan Sesudah LULUS UJIAN'),
(7357, 2806, 1, 'Kira-kira 1 Tahun Sesudah LULUS UJIAN', 'Kira-kira 1 Tahun Sesudah LULUS UJIAN'),
(7358, 2807, 1, '[1] Biaya Sendiri', '[1] Biaya Sendiri'),
(7359, 2807, 1, '[2] Keluarga', '[2] Keluarga'),
(7360, 2807, 1, '[3] Beasiswa ADIK', '[3] Beasiswa ADIK'),
(7361, 2807, 1, '[4] Beasiswa Bidikmisi', '[4] Beasiswa Bidikmisi'),
(7362, 2807, 1, '[5] Beasiswa AFIRMASI', '[5] Beasiswa AFIRMASI'),
(7363, 2807, 1, '[6] Beasiswa Perusahaan Negeri', '[6] Beasiswa Perusahaan Negeri'),
(7364, 2807, 1, '[7] Beasiswa Perusahaan Swasta', '[7] Beasiswa Perusahaan Swasta'),
(7365, 2807, 1, '[8] Lainnya. . . ', '[8] Lainnya. . . '),
(7366, 2809, 1, 'Sangat Erat', 'Sangat Erat'),
(7367, 2809, 1, 'Erat', 'Erat'),
(7368, 2809, 1, 'Cukup Erat', 'Cukup Erat'),
(7369, 2809, 1, 'Kurang erat', 'Kurang erat'),
(7370, 2809, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7371, 2810, 1, 'Setingkat Lebih Tinggi', 'Setingkat Lebih Tinggi'),
(7372, 2810, 1, 'Tingkat Yg Sama', 'Tingkat Yg Sama'),
(7373, 2810, 1, 'Setingkat Lebih Rendah', 'Setingkat Lebih Rendah'),
(7374, 2810, 1, 'Tidak Perlu Pendidikan Tinggi', 'Tidak Perlu Pendidikan Tinggi'),
(7375, 2814, 1, 'Sangat Besar', 'Sangat Besar'),
(7376, 2814, 1, 'Besar', 'Besar'),
(7377, 2814, 1, 'Cukup Besar', 'Cukup Besar'),
(7378, 2814, 1, 'Kurang', 'Kurang'),
(7379, 2814, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7380, 2815, 1, 'Sangat Besar', 'Sangat Besar'),
(7381, 2815, 1, 'Besar', 'Besar'),
(7382, 2815, 1, 'Cukup Besar', 'Cukup Besar'),
(7383, 2815, 1, 'Kurang', 'Kurang'),
(7384, 2815, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7385, 2816, 1, 'Sangat Besar', 'Sangat Besar'),
(7386, 2816, 1, 'Besar', 'Besar'),
(7387, 2816, 1, 'Cukup Besar', 'Cukup Besar'),
(7388, 2816, 1, 'Kurang', 'Kurang'),
(7389, 2816, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7390, 2817, 1, 'Sangat Besar', 'Sangat Besar'),
(7391, 2817, 1, 'Besar', 'Besar'),
(7392, 2817, 1, 'Cukup Besar', 'Cukup Besar'),
(7393, 2817, 1, 'Kurang', 'Kurang'),
(7394, 2817, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7395, 2818, 1, 'Sangat Besar', 'Sangat Besar'),
(7396, 2818, 1, 'Besar', 'Besar'),
(7397, 2818, 1, 'Cukup Besar', 'Cukup Besar'),
(7398, 2818, 1, 'Kurang', 'Kurang'),
(7399, 2818, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7400, 2819, 1, 'Sangat Besar', 'Sangat Besar'),
(7401, 2819, 1, 'Besar', 'Besar'),
(7402, 2819, 1, 'Cukup Besar', 'Cukup Besar'),
(7403, 2819, 1, 'Kurang', 'Kurang'),
(7404, 2819, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7405, 2820, 1, 'Sangat Besar', 'Sangat Besar'),
(7406, 2820, 1, 'Besar', 'Besar'),
(7407, 2820, 1, 'Cukup Besar', 'Cukup Besar'),
(7408, 2820, 1, 'Kurang', 'Kurang'),
(7409, 2820, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7410, 2821, 1, 'Kira-kira 1-3 bulan Sebelum Lulus', 'Kira-kira 1-3 bulan Sebelum Lulus'),
(7411, 2821, 1, 'Kira-kira 3-6 bulan Sebelum Lulus', 'Kira-kira 3-6 bulan Sebelum Lulus'),
(7412, 2821, 1, 'Kira-kira 6-9 bulan Sebelum Lulus', 'Kira-kira 6-9 bulan Sebelum Lulus'),
(7413, 2821, 1, 'Kira-kira 9-12 bulan Sebelum Lulus', 'Kira-kira 9-12 bulan Sebelum Lulus'),
(7414, 2821, 1, 'Kira-kira 1 Tahun Lebih Sebelum Lulus', ''),
(7415, 2821, 1, 'Kira-kira 1-3 bulan Sesudah Lulus', 'Kira-kira 1-3 bulan Sesudah Lulus'),
(7416, 2821, 1, 'Kira-kira 3-6 bulan Sesudah Lulus', 'Kira-kira 3-6 bulan Sesudah Lulus'),
(7417, 2821, 1, 'Kira-kira 6-9 bulan Sesudah Lulus', 'Kira-kira 6-9 bulan Sesudah Lulus'),
(7418, 2821, 1, 'Kira-kira 9-12 bulan Sesudah Lulus', 'Kira-kira 9-12 bulan Sesudah Lulus'),
(7419, 2821, 1, 'Kira-kira 1 Tahun Lebih Sesudah Lulus', 'Kira-kira 1 Tahun Lebih Sesudah Lulus'),
(7420, 2821, 1, 'Saya Tidak Mencari Pekerjaan', 'Saya Tidak Mencari Pekerjaan'),
(7421, 2822, 1, 'Saya Tidak Mencari Pekerjaan Sebelumnya', 'Saya Tidak Mencari Pekerjaan Sebelumnya'),
(7422, 2822, 1, 'Melalui iklan di koran/majalah, brosur', 'Melalui iklan di koran/majalah, brosur'),
(7423, 2822, 1, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada'),
(7424, 2822, 1, 'Pergi ke bursa/pameran kerja', 'Pergi ke bursa/pameran kerja'),
(7425, 2822, 1, 'Mencari lewat internet/iklan online/milis', 'Mencari lewat internet/iklan online/milis'),
(7426, 2822, 1, 'Dihubungi oleh perusahaan', 'Dihubungi oleh perusahaan'),
(7427, 2822, 1, 'Menghubungi Kemenakertrans', 'Menghubungi Kemenakertrans'),
(7428, 2822, 1, 'Menghubungi agen tenaga kerja komersial/swasta', 'Menghubungi agen tenaga kerja komersial/swasta'),
(7429, 2822, 1, 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas'),
(7430, 2822, 1, 'Menghubungi kantor kemahasiswaan/hubungan alumni', 'Menghubungi kantor kemahasiswaan/hubungan alumni'),
(7431, 2822, 1, 'Membangun jejaring (network) sejak masih kuliah', 'Membangun jejaring (network) sejak masih kuliah'),
(7432, 2822, 1, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)'),
(7433, 2822, 1, 'Membangun bisnis sendiri', 'Membangun bisnis sendiri'),
(7434, 2822, 1, 'Melalui penempatan kerja atau magang  ', 'Melalui penempatan kerja atau magang  '),
(7435, 2822, 1, 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah', 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah'),
(7436, 2822, 1, 'Lainnya', 'Lainnya'),
(7437, 2826, 1, 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana', 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana'),
(7438, 2826, 1, 'Saya menikah', 'Saya menikah'),
(7439, 2826, 1, 'Saya sibuk dengan keluarga dan anak-anak ', 'Saya sibuk dengan keluarga dan anak-anak '),
(7440, 2826, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya sekarang sedang mencari pekerjaan'),
(7441, 2826, 1, 'Lainnya ', 'Lainnya '),
(7442, 2827, 1, 'Saya Sudah Bekerja', 'Saya Sudah Bekerja'),
(7443, 2827, 1, 'Saya Sudah Menikah', 'saya Sudah Menikah'),
(7444, 2827, 1, 'Saya Sibuk Dengan Keluarga dan Anak-anak', 'Saya Sibuk Dengan Keluarga dan Anak-anak'),
(7445, 2827, 1, 'Saya Sekarang Sedang Mencari Pekerjaan', 'Saya Sekarang Sedang Mencari Pekerjaan'),
(7446, 2827, 1, 'Lainnya', 'Lainnya'),
(7447, 2828, 1, 'Instansi pemerintah(termasuk BUMN)', 'Instansi pemerintah(termasuk BUMN)'),
(7448, 2828, 1, 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'Organisasi non-profit/Lembaga Swadaya Masyarakat'),
(7449, 2828, 1, 'Perusahaan Swasta', 'Perusahaan Swasta'),
(7450, 2828, 1, 'Wiraswasta/Perusahaan Sendiri', 'Wiraswasta/Perusahaan Sendiri'),
(7451, 2828, 1, 'Lembaga Pendidikan/Sekolah', 'Lembaga Pendidikan/Sekolah'),
(7452, 2828, 1, 'Lainnya', 'Lainnya'),
(7453, 2829, 1, 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya'),
(7454, 2829, 1, 'Saya belum mendapatkan pekerjaan yang lebih sesuai', 'Saya belum mendapatkan pekerjaan yang lebih sesuai'),
(7455, 2829, 1, 'Di pekerjaan ini saya memeroleh prospek karir yang baik', 'Di pekerjaan ini saya memeroleh prospek karir yang baik'),
(7456, 2829, 1, 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya'),
(7457, 2829, 1, 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya', 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya'),
(7458, 2829, 1, 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.', 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.'),
(7459, 2829, 1, 'Pekerjaan saya saat ini lebih aman/terjamin/secure', 'Pekerjaan saya saat ini lebih aman/terjamin/secure'),
(7460, 2829, 1, 'Pekerjaan saya saat ini lebih menarik', 'Pekerjaan saya saat ini lebih menarik'),
(7461, 2829, 1, 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll', 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll'),
(7462, 2829, 1, 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.', 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.'),
(7463, 2829, 1, 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya', 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya'),
(7464, 2829, 1, 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.', 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.'),
(7465, 2829, 1, 'Lainnya', 'Lainnya'),
(7466, 2831, 1, '1', '1'),
(7467, 2831, 1, '2', '2'),
(7468, 2831, 1, '3', '3'),
(7469, 2831, 1, '4', '4'),
(7470, 2831, 1, '5', '5'),
(7471, 2832, 1, '1', '1'),
(7472, 2832, 1, '2', '2'),
(7473, 2832, 1, '3', '3'),
(7474, 2832, 1, '4', '4'),
(7475, 2832, 1, '5', '5'),
(7476, 2833, 1, '1', '1'),
(7477, 2833, 1, '2', '2'),
(7478, 2833, 1, '3', '3'),
(7479, 2833, 1, '4', '4'),
(7480, 2833, 1, '5', '5'),
(7481, 2834, 1, '1', '1'),
(7482, 2834, 1, '2', '2'),
(7483, 2834, 1, '3', '3'),
(7484, 2834, 1, '4', '4'),
(7485, 2834, 1, '5', '5'),
(7486, 2835, 1, '1', '1'),
(7487, 2835, 1, '2', '2'),
(7488, 2835, 1, '3', '3'),
(7489, 2835, 1, '4', '4'),
(7490, 2835, 1, '5', '5'),
(7491, 2836, 1, '1', '1'),
(7492, 2836, 1, '2', '2'),
(7493, 2836, 1, '3', '3'),
(7494, 2836, 1, '4', '4'),
(7495, 2836, 1, '5', '5'),
(7496, 2837, 1, '1', '1'),
(7497, 2837, 1, '2', '2'),
(7498, 2837, 1, '3', '3'),
(7499, 2837, 1, '4', '4'),
(7500, 2837, 1, '5', '5'),
(7501, 2838, 1, '1', '1'),
(7502, 2838, 1, '2', '2'),
(7503, 2838, 1, '3', '3'),
(7504, 2838, 1, '4', '4'),
(7505, 2838, 1, '5', '5'),
(7506, 2839, 1, '1', '1'),
(7507, 2839, 1, '2', '2'),
(7508, 2839, 1, '3', '3'),
(7509, 2839, 1, '4', '4'),
(7510, 2839, 1, '5', '5'),
(7511, 2840, 1, '1', '1'),
(7512, 2840, 1, '2', '2'),
(7513, 2840, 1, '3', '3'),
(7514, 2840, 1, '4', '4'),
(7515, 2840, 1, '5', '5'),
(7516, 2841, 1, '1', '1'),
(7517, 2841, 1, '2', '2'),
(7518, 2841, 1, '3', '3'),
(7519, 2841, 1, '4', '4'),
(7520, 2841, 1, '5', '5'),
(7521, 2842, 1, '1', '1'),
(7522, 2842, 1, '2', '2'),
(7523, 2842, 1, '3', '3'),
(7524, 2842, 1, '4', '4'),
(7525, 2842, 1, '5', '5'),
(7526, 2843, 1, '1', '1'),
(7527, 2843, 1, '2', '2'),
(7528, 2843, 1, '3', '3'),
(7529, 2843, 1, '4', '4'),
(7530, 2843, 1, '5', '5'),
(7531, 2844, 1, '1', '1'),
(7532, 2844, 1, '2', '2'),
(7533, 2844, 1, '3', '3'),
(7534, 2844, 1, '4', '4'),
(7535, 2844, 1, '5', '5'),
(7536, 2845, 1, '1', '1'),
(7537, 2845, 1, '2', '2'),
(7538, 2845, 1, '3', '3'),
(7539, 2845, 1, '4', '4'),
(7540, 2845, 1, '5', '5'),
(7541, 2846, 1, '1', '1'),
(7542, 2846, 1, '2', '2'),
(7543, 2846, 1, '3', '3'),
(7544, 2846, 1, '4', '4'),
(7545, 2846, 1, '5', '5'),
(7546, 2847, 1, '1', '1'),
(7547, 2847, 1, '2', '2'),
(7548, 2847, 1, '3', '3'),
(7549, 2847, 1, '4', '4'),
(7550, 2847, 1, '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `form_field`
--

CREATE TABLE `form_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `input_type` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `placeholder` text,
  `auto_generate_help_block` varchar(10) DEFAULT NULL,
  `help_block` text,
  `relation_table` varchar(200) DEFAULT NULL,
  `relation_value` varchar(200) DEFAULT NULL,
  `relation_label` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_field`
--

INSERT INTO `form_field` (`id`, `form_id`, `sort`, `field_name`, `input_type`, `field_label`, `placeholder`, `auto_generate_help_block`, `help_block`, `relation_table`, `relation_value`, `relation_label`) VALUES
(2798, 1, 2748, 'nomor_mahasiswa', 'number', 'Nomor Mahasiswa', '', 'yes', '', '', '', ''),
(2799, 1, 2749, 'kode_pt', 'input', 'Kode PT', '', 'yes', '', '', '', ''),
(2800, 1, 2750, 'tahun_lulus', 'number', 'Tahun Lulus', '', 'yes', '', '', '', ''),
(2801, 1, 2751, 'kode_prodi', 'number', 'Kode Prodi', '', 'yes', '', '', '', ''),
(2802, 1, 2752, 'nama', 'input', 'Nama', '', 'yes', '', '', '', ''),
(2803, 1, 2753, 'nomor_telephone_handphone', 'number', 'Nomor Telephone/ Handphone', '', 'yes', '', '', '', ''),
(2804, 1, 2754, 'alamat_email', 'email', 'Alamat Email', '', 'yes', '', '', '', ''),
(2805, 1, 2755, 'h3', 'heading', 'Kusioner Wajib', '', '', '', '', '', ''),
(2806, 1, 2756, 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'custom_option', 'Waktu yang dihabiskan untuk memeproleh pekerjaan', '', 'yes', '', '', '', ''),
(2807, 1, 2757, 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'custom_select', 'Sebutkan sumberdana dalam pembiayaan kuliah?', '', '', 'Sebutkan sumberdana dalam pembiayaan kuliah?', '', '', ''),
(2808, 1, 2758, 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'yes_no', 'Sedang Bekerja (termasuk kerja sambilan dan wirausaha) ?', '', 'yes', '', '', '', ''),
(2809, 1, 2759, 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'custom_option', 'Hubungan antara bidang studi dengan pekerjaan anda?', 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?', 'yes', '', '', '', ''),
(2810, 1, 2760, 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'custom_option', 'Tingkat pendidikan yang tepat/sesuai untuk pekerjaan saat ini?', 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', '', '', '', '', ''),
(2811, 1, 2761, 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'input', 'Kira-kira berapa pendapatan anda setiap bulannya?', 'Isi Dengan Angka Saja Tanpa Titik/Koma', '', 'Isi Dengan Angka Saja!', '', '', ''),
(2812, 1, 2762, 'h3', 'heading', 'Kusioner Opsional', '', '', '', '', '', ''),
(2813, 1, 2763, 'h5', 'heading', 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?', '', '', '', '', '', ''),
(2814, 1, 2764, 'perkuliahan', 'custom_option', 'Perkuliahan', '', 'yes', '', '', '', ''),
(2815, 1, 2765, 'desmonstrasi', 'custom_option', 'Desmonstrasi', '', 'yes', '', '', '', ''),
(2816, 1, 2766, 'partisipasi_dalam_proyek_riset', 'custom_option', 'Partisipasi dalam proyek riset', '', 'yes', '', '', '', ''),
(2817, 1, 2767, 'magang', 'custom_option', 'Magang', '', 'yes', '', '', '', ''),
(2818, 1, 2768, 'praktikum', 'custom_option', 'Praktikum', '', 'yes', '', '', '', ''),
(2819, 1, 2769, 'kerja_lapangan', 'custom_option', 'Kerja Lapangan', '', 'yes', '', '', '', ''),
(2820, 1, 2770, 'diskusi', 'custom_option', 'Diskusi', '', 'yes', '', '', '', ''),
(2821, 1, 2771, 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'custom_select', 'Mulai mencari pekerjaan, (pekerjaan sambilan tidak dimasukan)', '', 'yes', '', '', '', ''),
(2822, 1, 2772, 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu', 'custom_select_multiple', 'Bagaimana cara pekerjaan tersebut? Jawaban bisa lebih dari satu', '', 'yes', '', '', '', ''),
(2823, 1, 2773, 'berapa_perusahaan_yang_dilamar_lewat_surat_email_', 'number', 'Berapa perusahaan yang dilamar (lewat surat/email)', '', '', 'Isi dengan jumlah perusahaan yang anda lamar sebelum anda memeroleh pekerjaan pertama?', '', '', ''),
(2824, 1, 2774, '_jumlah_perusahaan_yang_merespons_lamaran_anda_', 'number', ' Jumlah perusahaan yang merespons lamaran anda?', '', '', 'Isi dengan jumlah perusahaan/instansi/institusi yang merespons lamaran anda?', '', '', ''),
(2825, 1, 2775, 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'number', 'Jumlah perusahaan yang mengundang anda untuk wawancara?', '', '', 'Jumlah banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', '', '', ''),
(2826, 1, 2776, 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu', 'custom_select_multiple', 'Bagaimana situasi anda saat ini? Jawaban bisa lebih dari satu', '', 'yes', '', '', '', ''),
(2827, 1, 2777, 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'custom_select', 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terkahir?', '', 'yes', '', '', '', ''),
(2828, 1, 2778, 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'custom_select', 'Apa jenis perusahaan tempat anda bekerja sekarang?', '', 'yes', '', '', '', ''),
(2829, 1, 2779, 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'custom_select', 'Jika pekerjaan tidak sesuai, kenapa mengambilnya?', '', 'yes', '', '', '', ''),
(2830, 1, 2780, 'h4', 'heading', 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?(1 = Sangat Rendah, 5 = Sangat Tinggi)', '', '', '', '', '', ''),
(2831, 1, 2781, 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'custom_option', 'Pengetahuan di bidang atau disiplin ilmu anda', '', 'yes', '', '', '', ''),
(2832, 1, 2782, 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'custom_option', 'Pengetahuan di luar bidang atau disiplin ilmu anda', '', 'yes', '', '', '', ''),
(2833, 1, 2783, 'pengetahuan_umum', 'custom_option', 'Pengetahuan umum', '', 'yes', '', '', '', ''),
(2834, 1, 2784, 'bahasa_inggris', 'custom_option', 'Bahasa Inggris', '', 'yes', '', '', '', ''),
(2835, 1, 2785, 'ketrampilan_internet_', 'custom_option', 'Ketrampilan internet ', '', 'yes', '', '', '', ''),
(2836, 1, 2786, 'ketrampilan_komputer', 'custom_option', 'Ketrampilan komputer', '', 'yes', '', '', '', ''),
(2837, 1, 2787, 'berpikir_kritis_', 'custom_option', 'Berpikir kritis ', '', 'yes', '', '', '', ''),
(2838, 1, 2788, 'ketrampilan_riset', 'custom_option', 'Ketrampilan riset', '', 'yes', '', '', '', ''),
(2839, 1, 2789, 'kemampuan_belajar', 'custom_option', 'Kemampuan belajar', '', 'yes', '', '', '', ''),
(2840, 1, 2790, 'kemampuan_berkomunikasi', 'custom_option', 'Kemampuan berkomunikasi', '', 'yes', '', '', '', ''),
(2841, 1, 2791, 'bekerja_di_bawah_tekanan', 'custom_option', 'Bekerja di bawah tekanan', '', 'yes', '', '', '', ''),
(2842, 1, 2792, 'manajemen_waktu', 'custom_option', 'Manajemen waktu', '', 'yes', '', '', '', ''),
(2843, 1, 2793, 'bekerja_secara_mandiri', 'custom_option', 'Bekerja secara mandiri', '', 'yes', '', '', '', ''),
(2844, 1, 2794, 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'custom_option', 'Bekerja dalam tim/bekerjasama dengan orang lain', '', 'yes', '', '', '', ''),
(2845, 1, 2795, 'kemampuan_dalam_memecahkan_masalah', 'custom_option', 'Kemampuan dalam memecahkan masalah', '', 'yes', '', '', '', ''),
(2846, 1, 2796, 'negosiasi_', 'custom_option', 'Negosiasi ', '', 'yes', '', '', '', ''),
(2847, 1, 2797, 'kemampuan_untuk_terus_belajar_sepanjang_hayat', 'custom_option', 'Kemampuan untuk terus belajar sepanjang hayat', '', 'yes', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_field_validation`
--

CREATE TABLE `form_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `form_field_id` int(11) NOT NULL,
  `form_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_field_validation`
--

INSERT INTO `form_field_validation` (`id`, `form_field_id`, `form_id`, `validation_name`, `validation_value`) VALUES
(3409, 2798, 1, 'required', ''),
(3410, 2798, 1, 'max_length', '7'),
(3411, 2799, 1, 'required', ''),
(3412, 2799, 1, 'max_length', '6'),
(3413, 2799, 1, 'valid_number', ''),
(3414, 2800, 1, 'required', ''),
(3415, 2800, 1, 'max_length', '4'),
(3416, 2801, 1, 'required', ''),
(3417, 2802, 1, 'required', ''),
(3418, 2802, 1, 'max_length', '25'),
(3419, 2803, 1, 'required', ''),
(3420, 2804, 1, 'required', ''),
(3421, 2806, 1, 'required', ''),
(3422, 2807, 1, 'required', ''),
(3423, 2808, 1, 'required', ''),
(3424, 2809, 1, 'required', ''),
(3425, 2810, 1, 'required', ''),
(3426, 2811, 1, 'required', ''),
(3427, 2811, 1, 'valid_number', ''),
(3428, 2814, 1, 'required', ''),
(3429, 2815, 1, 'required', ''),
(3430, 2816, 1, 'required', ''),
(3431, 2817, 1, 'required', ''),
(3432, 2818, 1, 'required', ''),
(3433, 2819, 1, 'required', ''),
(3434, 2820, 1, 'required', ''),
(3435, 2821, 1, 'required', ''),
(3436, 2822, 1, 'required', ''),
(3437, 2823, 1, 'required', ''),
(3438, 2823, 1, 'valid_number', ''),
(3439, 2824, 1, 'required', ''),
(3440, 2824, 1, 'valid_number', ''),
(3441, 2825, 1, 'required', ''),
(3442, 2825, 1, 'valid_number', ''),
(3443, 2826, 1, 'required', ''),
(3444, 2827, 1, 'required', ''),
(3445, 2828, 1, 'required', ''),
(3446, 2829, 1, 'required', ''),
(3447, 2831, 1, 'required', ''),
(3448, 2832, 1, 'required', ''),
(3449, 2833, 1, 'required', ''),
(3450, 2834, 1, 'required', ''),
(3451, 2835, 1, 'required', ''),
(3452, 2836, 1, 'required', ''),
(3453, 2837, 1, 'required', ''),
(3454, 2838, 1, 'required', ''),
(3455, 2839, 1, 'required', ''),
(3456, 2840, 1, 'required', ''),
(3457, 2841, 1, 'required', ''),
(3458, 2842, 1, 'required', ''),
(3459, 2843, 1, 'required', ''),
(3460, 2844, 1, 'required', ''),
(3461, 2845, 1, 'required', ''),
(3462, 2846, 1, 'required', ''),
(3463, 2847, 1, 'required', '');

-- --------------------------------------------------------

--
-- Table structure for table `form_formtracer`
--

CREATE TABLE `form_formtracer` (
  `id` int(11) UNSIGNED NOT NULL,
  `nomor_mahasiswa` int(7) NOT NULL,
  `kode_pt` varchar(6) NOT NULL,
  `tahun_lulus` int(4) NOT NULL,
  `kode_prodi` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `nomor_telephone_handphone` int(11) NOT NULL,
  `alamat_email` varchar(225) NOT NULL,
  `waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan` text NOT NULL,
  `sebutkan_sumberdana_dalam_pembiayaan_kuliah_` text NOT NULL,
  `sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_` varchar(225) NOT NULL,
  `hubungan_antara_bidang_studi_dengan_pekerjaan_anda_` text NOT NULL,
  `tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_` text NOT NULL,
  `kira_kira_berapa_pendapatan_anda_setiap_bulannya_` varchar(225) NOT NULL,
  `perkuliahan` text NOT NULL,
  `desmonstrasi` text NOT NULL,
  `partisipasi_dalam_proyek_riset` text NOT NULL,
  `magang` text NOT NULL,
  `praktikum` text NOT NULL,
  `kerja_lapangan` text NOT NULL,
  `diskusi` text NOT NULL,
  `mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_` text NOT NULL,
  `bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `berapa_perusahaan_yang_dilamar_lewat_surat_email_` int(11) NOT NULL,
  `_jumlah_perusahaan_yang_merespons_lamaran_anda_` int(11) NOT NULL,
  `jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_` int(11) NOT NULL,
  `bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu` text NOT NULL,
  `apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_` text NOT NULL,
  `apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_` text NOT NULL,
  `jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_` text NOT NULL,
  `pengetahuan_di_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda` text NOT NULL,
  `pengetahuan_umum` text NOT NULL,
  `bahasa_inggris` text NOT NULL,
  `ketrampilan_internet_` text NOT NULL,
  `ketrampilan_komputer` text NOT NULL,
  `berpikir_kritis_` text NOT NULL,
  `ketrampilan_riset` text NOT NULL,
  `kemampuan_belajar` text NOT NULL,
  `kemampuan_berkomunikasi` text NOT NULL,
  `bekerja_di_bawah_tekanan` text NOT NULL,
  `manajemen_waktu` text NOT NULL,
  `bekerja_secara_mandiri` text NOT NULL,
  `bekerja_dalam_tim_bekerjasama_dengan_orang_lain` text NOT NULL,
  `kemampuan_dalam_memecahkan_masalah` text NOT NULL,
  `negosiasi_` text NOT NULL,
  `kemampuan_untuk_terus_belajar_sepanjang_hayat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form_formtracer`
--

INSERT INTO `form_formtracer` (`id`, `nomor_mahasiswa`, `kode_pt`, `tahun_lulus`, `kode_prodi`, `nama`, `nomor_telephone_handphone`, `alamat_email`, `waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan`, `sebutkan_sumberdana_dalam_pembiayaan_kuliah_`, `sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_`, `hubungan_antara_bidang_studi_dengan_pekerjaan_anda_`, `tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_`, `kira_kira_berapa_pendapatan_anda_setiap_bulannya_`, `perkuliahan`, `desmonstrasi`, `partisipasi_dalam_proyek_riset`, `magang`, `praktikum`, `kerja_lapangan`, `diskusi`, `mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_`, `bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu`, `berapa_perusahaan_yang_dilamar_lewat_surat_email_`, `_jumlah_perusahaan_yang_merespons_lamaran_anda_`, `jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_`, `bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu`, `apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_`, `apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_`, `jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_`, `pengetahuan_di_bidang_atau_disiplin_ilmu_anda`, `pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda`, `pengetahuan_umum`, `bahasa_inggris`, `ketrampilan_internet_`, `ketrampilan_komputer`, `berpikir_kritis_`, `ketrampilan_riset`, `kemampuan_belajar`, `kemampuan_berkomunikasi`, `bekerja_di_bawah_tekanan`, `manajemen_waktu`, `bekerja_secara_mandiri`, `bekerja_dalam_tim_bekerjasama_dengan_orang_lain`, `kemampuan_dalam_memecahkan_masalah`, `negosiasi_`, `kemampuan_untuk_terus_belajar_sepanjang_hayat`) VALUES
(1, 1406082, '123456', 2014, 55201, 'Iqbal Revvin', 2147483647, 'iqbal.revvin@gmail.com', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', '[3] Beasiswa ADIK', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1000000', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sesudah Lulus', 'Pergi ke bursa/pameran kerja', 2, 2, 2, 'Saya menikah,Saya sekarang sedang mencari pekerjaan', 'Saya Sibuk Dengan Keluarga dan Anak-anak', 'Perusahaan Swasta', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(2, 1406054, '043051', 2019, 55201, 'Fikri Zakaria Rahman', 2147483647, 'fikrizakaria37@gmail.com', 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 3-6 bulan Sebelum Lulus', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.),Lainnya', 2, 2, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '1', '5', '2', '2', '1', '1', '1', '1', '1', '3', '3', '1', '2', '1', '1', '2', '2'),
(3, 1406068, '043051', 2018, 55201, 'Irna Restiani', 2147483647, 'irna.restiani@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Sangat Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Melalui iklan di koran/majalah, brosur,Mencari lewat internet/iklan online/milis', 3, 2, 2, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '2', '2', '2', '1', '1', '1', '2', '1', '2', '2', '2', '1', '2', '2', '2', '2', '2'),
(4, 1406019, '043051', 2018, 55201, 'unknow', 930390, 'jqdjskcjhsclkalkj@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '[1] Biaya Sendiri', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Saya Tidak Mencari Pekerjaan Sebelumnya,Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 3, 3, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2'),
(5, 1411023, '043051', 2018, 22201, 'unknow 2', 2147483647, 'unknow23@gmail.com', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', '[2] Keluarga', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1500000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Menghubungi agen tenaga kerja komersial/swasta', 3, 3, 3, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Perusahaan Swasta', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', '1', '1', '2', '3', '1', '1', '1', '2', '3', '1', '4', '1', '2', '1', '2', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` text,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `user_id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 0, '37681EE17580A6B81336C1565A365486', 0, 0, 0, NULL, '2019-07-11 11:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `label` varchar(200) DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `icon_color` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `menu_type_id` int(11) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `label`, `type`, `icon_color`, `link`, `sort`, `parent`, `icon`, `menu_type_id`, `active`) VALUES
(1, 'MAIN NAVIGATION', 'label', '', 'administrator/dashboard', 1, 0, '', 1, 1),
(2, 'Dashboard', 'menu', '', 'administrator/dashboard', 2, 0, 'fa-dashboard', 1, 1),
(3, 'CRUD Builder', 'menu', 'default', 'administrator/crud', 3, 0, 'fa-table', 1, 1),
(4, 'API Builder', 'menu', '', 'administrator/rest', 4, 0, 'fa-code', 1, 1),
(5, 'Front Page Builder', 'menu', 'default', 'administrator/page', 5, 0, 'fa-file-o', 1, 1),
(6, 'Form Tracer Builder', 'menu', 'default', 'administrator/form', 7, 0, 'fa-newspaper-o', 1, 1),
(7, 'Berita', 'menu', 'default', 'administrator/blog', 8, 0, 'fa-file-text-o', 1, 1),
(8, 'Menu', 'menu', '', 'administrator/menu', 10, 0, 'fa-bars', 1, 1),
(9, 'Auth', 'menu', '', '', 11, 0, 'fa-shield', 1, 1),
(10, 'User', 'menu', '', 'administrator/user', 12, 9, '', 1, 1),
(11, 'Groups', 'menu', '', 'administrator/group', 13, 9, '', 1, 1),
(12, 'Access', 'menu', '', 'administrator/access', 14, 9, '', 1, 1),
(13, 'Permission', 'menu', '', 'administrator/permission', 15, 9, '', 1, 1),
(14, 'API Keys', 'menu', '', 'administrator/keys', 16, 9, '', 1, 1),
(15, 'Extension', 'menu', 'default', 'administrator/extension', 17, 0, 'fa-puzzle-piece', 1, 1),
(16, 'OTHER', 'label', '', '', 18, 0, '', 1, 1),
(17, 'Settings', 'menu', 'text-red', 'administrator/setting', 19, 0, 'fa-circle-o', 1, 1),
(18, 'Web Documentation', 'menu', 'text-blue', 'administrator/doc/web', 20, 0, 'fa-circle-o', 1, 1),
(19, 'API Documentation', 'menu', 'text-yellow', 'administrator/doc/api', 21, 0, 'fa-circle-o', 1, 1),
(20, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
(21, 'Berita', 'menu', 'default', 'blog', 3, 0, '', 2, 1),
(22, 'Dashboard', 'menu', '', 'administrator/dashboard', 4, 0, '', 2, 1),
(23, 'Daftar Mahasiswa', 'menu', 'default', 'administrator/formtracer', 6, 0, 'fa-users', 1, 1),
(24, 'Form Tracer', 'menu', 'default', 'page/tracer-responden', 2, 0, '', 2, 1),
(25, 'Report', 'menu', 'default', '#', 9, 0, 'fa-bar-chart', 1, 1),
(26, 'Report Grafik', 'menu', 'default', 'administrator/report/grafik', 25, 25, 'fa-pie-chart', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `definition` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `definition`) VALUES
(1, 'side menu', NULL),
(2, 'top menu', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `version` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `fresh_content` text NOT NULL,
  `keyword` text,
  `description` text,
  `link` varchar(200) DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `title`, `type`, `content`, `fresh_content`, `keyword`, `description`, `link`, `template`, `created_at`) VALUES
(1, 'tracer responden', 'frontend', '<cc-element cc-id=\"style\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"{base_url}cc-content/page-element/portofolio\\/package/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n    <link data-src=\"stylesheet-freelancer\" href=\"{base_url}cc-content/page-element/portofolio\\/package/css/freelancer.min.css\" rel=\"stylesheet\">\n    <link data-src=\"stylesheet-font-awesome\" href=\"{base_url}cc-content/page-element/portofolio\\/package/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">\n</cc-element>\n\n<cc-element cc-id=\"content\">\n     <section id=\"contact\" style=\"font-size: 14px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-family: &quot;Roboto Slab&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; outline: rgba(233, 94, 94, 0.5) solid 2px; outline-offset: -2px;\" class=\"\">\n        <div class=\"container ui-sortable\" style=\"\">\n            <div class=\"row ui-sortable\" style=\"\">\n                <div class=\"col-lg-12 text-center ui-sortable\" style=\"\">\n                    <h2 class=\"\" style=\"\">Formulir tracer</h2>\n                    <hr class=\"star-primary\" style=\"\">\n                </div>\n            </div>\n            <div class=\"row ui-sortable\" style=\"\">\n                <div class=\"col-lg-12 ui-sortable\" style=\"\">\n                    <div class=\"form-builder ui-sortable\" style=\"\">{form_builder(1)}</div>\n                </div>\n            </div>\n        </div>\n    </section>\n</cc-element>\n\n\n<cc-element cc-id=\"script\" cc-placement=\"top\">\n    <script_widged class=\"display-none\" src=\"{base_url}cc-content/page-element/portofolio\\/package/vendor/bootstrap/js/bootstrap.min.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"{base_url}cc-content/page-element/portofolio\\/package/js/jqBootstrapValidation.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"{base_url}cc-content/page-element/portofolio\\/package/js/contact_me.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"{base_url}cc-content/page-element/portofolio\\/package/js/freelancer.min.js\"></script_widged>\n    <script_widged class=\"display-none\" type=\"text/javascript\">\n    </script_widged>\n</cc-element>', '\n                                    \n                                    \n                                    \n                                    \n                                    \n                                    \n                                                                         <li class=\"block-item ui-draggable ui-draggable-handle block-item-loaded\" data-src=\"portofolio\\/contact.php\" data-block-name=\"portofolio\\\" style=\"width: 200px; right: auto; height: 110px; bottom: auto; display: list-item;\">\n				                <div class=\"nav-content-wrapper noselect ui-sortable\" style=\"display: block;\">\n				                  <i class=\"fa fa-gear\"></i>\n				                  <div class=\"tool-nav delete ui-sortable\">\n				                    <i class=\"fa fa-trash\"></i> <span class=\"info-nav\">Delete</span>\n				                  </div>\n				                  <div class=\"tool-nav source ui-sortable\">\n				                    <i class=\"fa fa-code\"></i> <span class=\"info-nav\">Source</span>\n				                  </div>\n				                  <div class=\"tool-nav copy ui-sortable\">\n				                    <i class=\"fa fa-copy\"></i> <span class=\"info-nav\">Copy</span>\n				                  </div>\n				                  <div class=\"tool-nav handle ui-sortable ui-sortable-handle\">\n				                    <i class=\"fa fa-arrows\"></i> <span class=\"info-nav\">Move</span>\n				                  </div>\n				                </div>\n				              \n				              <div class=\"block-content editable ui-sortable\" style=\"display: block;\"><cc-element cc-id=\"style\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">\n    <link data-src=\"stylesheet-freelancer\" href=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/css/freelancer.min.css\" rel=\"stylesheet\">\n    <link data-src=\"stylesheet-font-awesome\" href=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/vendor/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"https://fonts.googleapis.com/css?family=Montserrat:400,700\" rel=\"stylesheet\" type=\"text/css\">\n    <link data-src=\"stylesheet-bootstrap\" href=\"https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic\" rel=\"stylesheet\" type=\"text/css\">\n</cc-element>\n\n<cc-element cc-id=\"content\">\n     <section id=\"contact\" style=\"font-size: 14px; color: rgb(51, 51, 51); background-color: rgb(255, 255, 255); font-family: &quot;Roboto Slab&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; outline: rgba(233, 94, 94, 0.5) solid 2px; outline-offset: -2px;\" class=\"\">\n        <div class=\"container ui-sortable\" style=\"\">\n            <div class=\"row ui-sortable\" style=\"\">\n                <div class=\"col-lg-12 text-center ui-sortable\" style=\"\">\n                    <h2 class=\"\" style=\"\">Formulir tracer</h2>\n                    <hr class=\"star-primary\" style=\"\">\n                </div>\n            </div>\n            <div class=\"row ui-sortable\" style=\"\">\n                <div class=\"col-lg-12 ui-sortable\" style=\"\">\n                    <div class=\"form-builder ui-sortable\" style=\"\">{form_builder(1)}</div>\n                </div>\n            </div>\n        </div>\n    </section>\n</cc-element>\n\n\n<cc-element cc-id=\"script\" cc-placement=\"top\">\n    <script_widged class=\"display-none\" src=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/vendor/bootstrap/js/bootstrap.min.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/js/jqBootstrapValidation.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/js/contact_me.js\"></script_widged>\n    <script_widged class=\"display-none\" src=\"http://localhost:80/TracerStudySTTGarut/cc-content/page-element/portofolio\\/package/js/freelancer.min.js\"></script_widged>\n    <script_widged class=\"display-none\" type=\"text/javascript\">\n    </script_widged>\n</cc-element></div>\n				            </li>                                                                                                                                                                                    ', 'Tracer Study STTGarut', 'Formulir Tracer Study STTGarut', 'tracer-responden', 'default', '2019-07-23 15:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `page_block_element`
--

CREATE TABLE `page_block_element` (
  `id` int(11) UNSIGNED NOT NULL,
  `group_name` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `image_preview` varchar(200) NOT NULL,
  `block_name` varchar(200) NOT NULL,
  `content_type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rest`
--

CREATE TABLE `rest` (
  `id` int(11) UNSIGNED NOT NULL,
  `subject` varchar(200) NOT NULL,
  `table_name` varchar(200) NOT NULL,
  `primary_key` varchar(200) NOT NULL,
  `x_api_key` varchar(20) DEFAULT NULL,
  `x_token` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rest_field`
--

CREATE TABLE `rest_field` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_id` int(11) NOT NULL,
  `field_name` varchar(200) NOT NULL,
  `field_label` varchar(200) DEFAULT NULL,
  `input_type` varchar(200) NOT NULL,
  `show_column` varchar(10) DEFAULT NULL,
  `show_add_api` varchar(10) DEFAULT NULL,
  `show_update_api` varchar(10) DEFAULT NULL,
  `show_detail_api` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rest_field_validation`
--

CREATE TABLE `rest_field_validation` (
  `id` int(11) UNSIGNED NOT NULL,
  `rest_field_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `validation_name` varchar(200) NOT NULL,
  `validation_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rest_input_type`
--

CREATE TABLE `rest_input_type` (
  `id` int(11) UNSIGNED NOT NULL,
  `type` varchar(200) NOT NULL,
  `relation` varchar(20) NOT NULL,
  `validation_group` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rest_input_type`
--

INSERT INTO `rest_input_type` (`id`, `type`, `relation`, `validation_group`) VALUES
(1, 'input', '0', 'input'),
(2, 'timestamp', '0', 'timestamp'),
(3, 'file', '0', 'file');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_group_to_group`
--
ALTER TABLE `aauth_group_to_group`
  ADD PRIMARY KEY (`group_id`,`subgroup_id`);

--
-- Indexes for table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_perm_to_user`
--
ALTER TABLE `aauth_perm_to_user`
  ADD PRIMARY KEY (`user_id`,`perm_id`);

--
-- Indexes for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_user`
--
ALTER TABLE `aauth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_users`
--
ALTER TABLE `aauth_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aauth_user_to_group`
--
ALTER TABLE `aauth_user_to_group`
  ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `cc_options`
--
ALTER TABLE `cc_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field`
--
ALTER TABLE `crud_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `formtracer`
--
ALTER TABLE `formtracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field`
--
ALTER TABLE `form_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_formtracer`
--
ALTER TABLE `form_formtracer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_block_element`
--
ALTER TABLE `page_block_element`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest`
--
ALTER TABLE `rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_field`
--
ALTER TABLE `rest_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aauth_groups`
--
ALTER TABLE `aauth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `aauth_login_attempts`
--
ALTER TABLE `aauth_login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `aauth_pms`
--
ALTER TABLE `aauth_pms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_user`
--
ALTER TABLE `aauth_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aauth_users`
--
ALTER TABLE `aauth_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aauth_user_variables`
--
ALTER TABLE `aauth_user_variables`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `category_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cc_options`
--
ALTER TABLE `cc_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_field`
--
ALTER TABLE `crud_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `crud_input_type`
--
ALTER TABLE `crud_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `crud_input_validation`
--
ALTER TABLE `crud_input_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `formtracer`
--
ALTER TABLE `formtracer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7551;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2848;

--
-- AUTO_INCREMENT for table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3464;

--
-- AUTO_INCREMENT for table `form_formtracer`
--
ALTER TABLE `form_formtracer`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_block_element`
--
ALTER TABLE `page_block_element`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rest`
--
ALTER TABLE `rest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rest_field`
--
ALTER TABLE `rest_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rest_field_validation`
--
ALTER TABLE `rest_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rest_input_type`
--
ALTER TABLE `rest_input_type`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
