-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 25, 2019 at 10:46 PM
-- Server version: 10.1.40-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkikaka_tracer`
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
(101, 'menu_form_tracer', '');

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
(99, 5);

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
(1, 'iqbal.revvin@gmail.com', NULL, NULL, 'af685dc72fb22be659eb8624fa160ddf43c0b25f58fc8bcae9d2e806900c2dcc', 'iqbalrevvin', 'Iqbal Revvin', '20190712013923-iqbal.png', 0, '2019-07-24 22:20:56', '2019-07-24 22:20:56', '2019-07-11 18:49:25', NULL, NULL, NULL, NULL, NULL, '::1'),
(2, 'admin@admin.com', NULL, NULL, '52b3a93aac36bd14b3a1c9e7118f79981d14d39c6fd5118884d7544e58232a8d', 'admin', 'Administrator', 'default.png', 0, '2019-07-23 16:43:34', '2019-07-23 16:43:34', '2019-07-12 01:38:10', NULL, NULL, NULL, NULL, NULL, '::1');

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
(131, 2757, 1, 'test', 'test'),
(132, 2761, 1, 'test', 'test');

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
(7145, 2756, 1, 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN'),
(7146, 2756, 1, 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN', 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN'),
(7147, 2756, 1, 'Kira-kira 6-9 Bulan Sebelum LULUS UJIAN', 'Kira-kira 6-9 Bulan Sebelum LULUS UJIAN'),
(7148, 2756, 1, 'Kira-kira 9-12 Bulan Sebelum LULUS UJIAN', 'Kira-kira 9-12 Bulan Sebelum LULUS UJIAN'),
(7149, 2756, 1, 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN'),
(7150, 2756, 1, 'Kira-kira 1-3 Bulan Sesudah LULUS UJIAN', 'Kira-kira 1-3 Bulan Sesudah LULUS UJIAN'),
(7151, 2756, 1, 'Kira-kira 4-6 Bulan Sesudah LULUS UJIAN', 'Kira-kira 4-6 Bulan Sesudah LULUS UJIAN'),
(7152, 2756, 1, 'Kira-kira 6-9 Bulan Sesudah LULUS UJIAN', 'Kira-kira 6-9 Bulan Sesudah LULUS UJIAN'),
(7153, 2756, 1, 'Kira-kira 9-12 Bulan Sesudah LULUS UJIAN', 'Kira-kira 9-12 Bulan Sesudah LULUS UJIAN'),
(7154, 2756, 1, 'Kira-kira 1 Tahun Sesudah LULUS UJIAN', 'Kira-kira 1 Tahun Sesudah LULUS UJIAN'),
(7155, 2757, 1, '[1] Biaya Sendiri', '[1] Biaya Sendiri'),
(7156, 2757, 1, '{2] Keluarga', '{2] Keluarga'),
(7157, 2757, 1, '[3] Beasiswa ADIK', '[3] Beasiswa ADIK'),
(7158, 2757, 1, '[4] Beasiswa Bidikmisi', '[4] Beasiswa Bidikmisi'),
(7159, 2757, 1, '[5[ Beasiswa AFIRMASI', '[5[ Beasiswa AFIRMASI'),
(7160, 2757, 1, '[6] Beasiswa Perusahaan Negeri', '[6] Beasiswa Perusahaan Negeri'),
(7161, 2757, 1, '[7] Beasiswa Perusahaan Swasta', '[7] Beasiswa Perusahaan Swasta'),
(7162, 2757, 1, '[8] Lainnya. . . ', '[8] Lainnya. . . '),
(7163, 2759, 1, 'Sangat Erat', 'Sangat Erat'),
(7164, 2759, 1, 'Erat', 'Erat'),
(7165, 2759, 1, 'Cukup Erat', 'Cukup Erat'),
(7166, 2759, 1, 'Kurang erat', 'Kurang erat'),
(7167, 2759, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7168, 2760, 1, 'Setingkat Lebih Tinggi', 'Setingkat Lebih Tinggi'),
(7169, 2760, 1, 'Tingkat Yg Sama', 'Tingkat Yg Sama'),
(7170, 2760, 1, 'Setingkat Lebih Rendah', 'Setingkat Lebih Rendah'),
(7171, 2760, 1, 'Tidak Perlu Pendidikan Tinggi', 'Tidak Perlu Pendidikan Tinggi'),
(7172, 2764, 1, 'Sangat Besar', 'Sangat Besar'),
(7173, 2764, 1, 'Besar', 'Besar'),
(7174, 2764, 1, 'Cukup Besar', 'Cukup Besar'),
(7175, 2764, 1, 'Kurang', 'Kurang'),
(7176, 2764, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7177, 2765, 1, 'Sangat Besar', 'Sangat Besar'),
(7178, 2765, 1, 'Besar', 'Besar'),
(7179, 2765, 1, 'Cukup Besar', 'Cukup Besar'),
(7180, 2765, 1, 'Kurang', 'Kurang'),
(7181, 2765, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7182, 2766, 1, 'Sangat Besar', 'Sangat Besar'),
(7183, 2766, 1, 'Besar', 'Besar'),
(7184, 2766, 1, 'Cukup Besar', 'Cukup Besar'),
(7185, 2766, 1, 'Kurang', 'Kurang'),
(7186, 2766, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7187, 2767, 1, 'Sangat Besar', 'Sangat Besar'),
(7188, 2767, 1, 'Besar', 'Besar'),
(7189, 2767, 1, 'Cukup Besar', 'Cukup Besar'),
(7190, 2767, 1, 'Kurang', 'Kurang'),
(7191, 2767, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7192, 2768, 1, 'Sangat Besar', 'Sangat Besar'),
(7193, 2768, 1, 'Besar', 'Besar'),
(7194, 2768, 1, 'Cukup Besar', 'Cukup Besar'),
(7195, 2768, 1, 'Kurang', 'Kurang'),
(7196, 2768, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7197, 2769, 1, 'Sangat Besar', 'Sangat Besar'),
(7198, 2769, 1, 'Besar', 'Besar'),
(7199, 2769, 1, 'Cukup Besar', 'Cukup Besar'),
(7200, 2769, 1, 'Kurang', 'Kurang'),
(7201, 2769, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7202, 2770, 1, 'Sangat Besar', 'Sangat Besar'),
(7203, 2770, 1, 'Besar', 'Besar'),
(7204, 2770, 1, 'Cukup Besar', 'Cukup Besar'),
(7205, 2770, 1, 'Kurang', 'Kurang'),
(7206, 2770, 1, 'Tidak Sama Sekali', 'Tidak Sama Sekali'),
(7207, 2771, 1, 'Kira-kira 1-3 bulan Sebelum Lulus', 'Kira-kira 1-3 bulan Sebelum Lulus'),
(7208, 2771, 1, 'Kira-kira 3-6 bulan Sebelum Lulus', 'Kira-kira 3-6 bulan Sebelum Lulus'),
(7209, 2771, 1, 'Kira-kira 6-9 bulan Sebelum Lulus', 'Kira-kira 6-9 bulan Sebelum Lulus'),
(7210, 2771, 1, 'Kira-kira 9-12 bulan Sebelum Lulus', 'Kira-kira 9-12 bulan Sebelum Lulus'),
(7211, 2771, 1, 'Kira-kira 1 Tahun Lebih Sebelum Lulus', ''),
(7212, 2771, 1, 'Kira-kira 1-3 bulan Sesudah Lulus', 'Kira-kira 1-3 bulan Sesudah Lulus'),
(7213, 2771, 1, 'Kira-kira 3-6 bulan Sesudah Lulus', 'Kira-kira 3-6 bulan Sesudah Lulus'),
(7214, 2771, 1, 'Kira-kira 6-9 bulan Sesudah Lulus', 'Kira-kira 6-9 bulan Sesudah Lulus'),
(7215, 2771, 1, 'Kira-kira 9-12 bulan Sesudah Lulus', 'Kira-kira 9-12 bulan Sesudah Lulus'),
(7216, 2771, 1, 'Kira-kira 1 Tahun Lebih Sesudah Lulus', 'Kira-kira 1 Tahun Lebih Sesudah Lulus'),
(7217, 2771, 1, 'Saya Tidak Mencari Pekerjaan', 'Saya Tidak Mencari Pekerjaan'),
(7218, 2772, 1, 'Saya Tidak Mencari Pekerjaan Sebelumnya', 'Saya Tidak Mencari Pekerjaan Sebelumnya'),
(7219, 2772, 1, 'Melalui iklan di koran/majalah, brosur', 'Melalui iklan di koran/majalah, brosur'),
(7220, 2772, 1, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada'),
(7221, 2772, 1, 'Pergi ke bursa/pameran kerja', 'Pergi ke bursa/pameran kerja'),
(7222, 2772, 1, 'Mencari lewat internet/iklan online/milis', 'Mencari lewat internet/iklan online/milis'),
(7223, 2772, 1, 'Dihubungi oleh perusahaan', 'Dihubungi oleh perusahaan'),
(7224, 2772, 1, 'Menghubungi Kemenakertrans', 'Menghubungi Kemenakertrans'),
(7225, 2772, 1, 'Menghubungi agen tenaga kerja komersial/swasta', 'Menghubungi agen tenaga kerja komersial/swasta'),
(7226, 2772, 1, 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas'),
(7227, 2772, 1, 'Menghubungi kantor kemahasiswaan/hubungan alumni', 'Menghubungi kantor kemahasiswaan/hubungan alumni'),
(7228, 2772, 1, 'Membangun jejaring (network) sejak masih kuliah', 'Membangun jejaring (network) sejak masih kuliah'),
(7229, 2772, 1, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)'),
(7230, 2772, 1, 'Membangun bisnis sendiri', 'Membangun bisnis sendiri'),
(7231, 2772, 1, 'Melalui penempatan kerja atau magang  ', 'Melalui penempatan kerja atau magang  '),
(7232, 2772, 1, 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah', 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah'),
(7233, 2772, 1, 'Lainnya', 'Lainnya'),
(7234, 2776, 1, 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana', 'Saya masih belajar/melanjutkan kuliah profesi atau pascasarjana'),
(7235, 2776, 1, 'Saya menikah', 'Saya menikah'),
(7236, 2776, 1, 'Saya sibuk dengan keluarga dan anak-anak ', 'Saya sibuk dengan keluarga dan anak-anak '),
(7237, 2776, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya sekarang sedang mencari pekerjaan'),
(7238, 2776, 1, 'Lainnya ', 'Lainnya '),
(7239, 2777, 1, 'Saya Sudah Bekerja', 'Saya Sudah Bekerja'),
(7240, 2777, 1, 'Saya Sudah Menikah', 'saya Sudah Menikah'),
(7241, 2777, 1, 'Saya Sibuk Dengan Keluarga dan Anak-anak', 'Saya Sibuk Dengan Keluarga dan Anak-anak'),
(7242, 2777, 1, 'Saya Sekarang Sedang Mencari Pekerjaan', 'Saya Sekarang Sedang Mencari Pekerjaan'),
(7243, 2777, 1, 'Lainnya', 'Lainnya'),
(7244, 2778, 1, 'Instansi pemerintah(termasuk BUMN)', 'Instansi pemerintah(termasuk BUMN)'),
(7245, 2778, 1, 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'Organisasi non-profit/Lembaga Swadaya Masyarakat'),
(7246, 2778, 1, 'Perusahaan Swasta', 'Perusahaan Swasta'),
(7247, 2778, 1, 'Wiraswasta/Perusahaan Sendiri', 'Wiraswasta/Perusahaan Sendiri'),
(7248, 2778, 1, 'Lembaga Pendidikan/Sekolah', 'Lembaga Pendidikan/Sekolah'),
(7249, 2778, 1, 'Lainnya', 'Lainnya'),
(7250, 2779, 1, 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya'),
(7251, 2779, 1, 'Saya belum mendapatkan pekerjaan yang lebih sesuai', 'Saya belum mendapatkan pekerjaan yang lebih sesuai'),
(7252, 2779, 1, 'Di pekerjaan ini saya memeroleh prospek karir yang baik', 'Di pekerjaan ini saya memeroleh prospek karir yang baik'),
(7253, 2779, 1, 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya'),
(7254, 2779, 1, 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya', 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya'),
(7255, 2779, 1, 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.', 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini.'),
(7256, 2779, 1, 'Pekerjaan saya saat ini lebih aman/terjamin/secure', 'Pekerjaan saya saat ini lebih aman/terjamin/secure'),
(7257, 2779, 1, 'Pekerjaan saya saat ini lebih menarik', 'Pekerjaan saya saat ini lebih menarik'),
(7258, 2779, 1, 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll', 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll'),
(7259, 2779, 1, 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.', 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya.'),
(7260, 2779, 1, 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya', 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya'),
(7261, 2779, 1, 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.', 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.'),
(7262, 2779, 1, 'Lainnya', 'Lainnya'),
(7263, 2781, 1, '1', '1'),
(7264, 2781, 1, '2', '2'),
(7265, 2781, 1, '3', '3'),
(7266, 2781, 1, '4', '4'),
(7267, 2781, 1, '5', '5'),
(7268, 2782, 1, '1', '1'),
(7269, 2782, 1, '2', '2'),
(7270, 2782, 1, '3', '3'),
(7271, 2782, 1, '4', '4'),
(7272, 2782, 1, '5', '5'),
(7273, 2783, 1, '1', '1'),
(7274, 2783, 1, '2', '2'),
(7275, 2783, 1, '3', '3'),
(7276, 2783, 1, '4', '4'),
(7277, 2783, 1, '5', '5'),
(7278, 2784, 1, '1', '1'),
(7279, 2784, 1, '2', '2'),
(7280, 2784, 1, '3', '3'),
(7281, 2784, 1, '4', '4'),
(7282, 2784, 1, '5', '5'),
(7283, 2785, 1, '1', '1'),
(7284, 2785, 1, '2', '2'),
(7285, 2785, 1, '3', '3'),
(7286, 2785, 1, '4', '4'),
(7287, 2785, 1, '5', '5'),
(7288, 2786, 1, '1', '1'),
(7289, 2786, 1, '2', '2'),
(7290, 2786, 1, '3', '3'),
(7291, 2786, 1, '4', '4'),
(7292, 2786, 1, '5', '5'),
(7293, 2787, 1, '1', '1'),
(7294, 2787, 1, '2', '2'),
(7295, 2787, 1, '3', '3'),
(7296, 2787, 1, '4', '4'),
(7297, 2787, 1, '5', '5'),
(7298, 2788, 1, '1', '1'),
(7299, 2788, 1, '2', '2'),
(7300, 2788, 1, '3', '3'),
(7301, 2788, 1, '4', '4'),
(7302, 2788, 1, '5', '5'),
(7303, 2789, 1, '1', '1'),
(7304, 2789, 1, '2', '2'),
(7305, 2789, 1, '3', '3'),
(7306, 2789, 1, '4', '4'),
(7307, 2789, 1, '5', '5'),
(7308, 2790, 1, '1', '1'),
(7309, 2790, 1, '2', '2'),
(7310, 2790, 1, '3', '3'),
(7311, 2790, 1, '4', '4'),
(7312, 2790, 1, '5', '5'),
(7313, 2791, 1, '1', '1'),
(7314, 2791, 1, '2', '2'),
(7315, 2791, 1, '3', '3'),
(7316, 2791, 1, '4', '4'),
(7317, 2791, 1, '5', '5'),
(7318, 2792, 1, '1', '1'),
(7319, 2792, 1, '2', '2'),
(7320, 2792, 1, '3', '3'),
(7321, 2792, 1, '4', '4'),
(7322, 2792, 1, '5', '5'),
(7323, 2793, 1, '1', '1'),
(7324, 2793, 1, '2', '2'),
(7325, 2793, 1, '3', '3'),
(7326, 2793, 1, '4', '4'),
(7327, 2793, 1, '5', '5'),
(7328, 2794, 1, '1', '1'),
(7329, 2794, 1, '2', '2'),
(7330, 2794, 1, '3', '3'),
(7331, 2794, 1, '4', '4'),
(7332, 2794, 1, '5', '5'),
(7333, 2795, 1, '1', '1'),
(7334, 2795, 1, '2', '2'),
(7335, 2795, 1, '3', '3'),
(7336, 2795, 1, '4', '4'),
(7337, 2795, 1, '5', '5'),
(7338, 2796, 1, '1', '1'),
(7339, 2796, 1, '2', '2'),
(7340, 2796, 1, '3', '3'),
(7341, 2796, 1, '4', '4'),
(7342, 2796, 1, '5', '5'),
(7343, 2797, 1, '1', '1'),
(7344, 2797, 1, '2', '2'),
(7345, 2797, 1, '3', '3'),
(7346, 2797, 1, '4', '4'),
(7347, 2797, 1, '5', '5');

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
(2748, 1, 2698, 'nomor_mahasiswa', 'number', 'Nomor Mahasiswa', '', 'yes', '', '', '', ''),
(2749, 1, 2699, 'kode_pt', 'input', 'Kode PT', '', 'yes', '', '', '', ''),
(2750, 1, 2700, 'tahun_lulus', 'number', 'Tahun Lulus', '', 'yes', '', '', '', ''),
(2751, 1, 2701, 'kode_prodi', 'number', 'Kode Prodi', '', 'yes', '', '', '', ''),
(2752, 1, 2702, 'nama', 'input', 'Nama', '', 'yes', '', '', '', ''),
(2753, 1, 2703, 'nomor_telephone_handphone', 'number', 'Nomor Telephone/ Handphone', '', 'yes', '', '', '', ''),
(2754, 1, 2704, 'alamat_email', 'email', 'Alamat Email', '', 'yes', '', '', '', ''),
(2755, 1, 2705, 'h3', 'heading', 'Kusioner Wajib', '', '', '', '', '', ''),
(2756, 1, 2706, 'waktu_yang_dihabiskan_untuk_memeproleh_pekerjaan', 'custom_option', 'Waktu yang dihabiskan untuk memeproleh pekerjaan', '', 'yes', '', '', '', ''),
(2757, 1, 2707, 'sebutkan_sumberdana_dalam_pembiayaan_kuliah_', 'custom_select', 'Sebutkan sumberdana dalam pembiayaan kuliah?', '', '', 'Sebutkan sumberdana dalam pembiayaan kuliah?', '', '', ''),
(2758, 1, 2708, 'sedang_bekerja_termasuk_kerja_sambilan_dan_wirausaha_', 'yes_no', 'Sedang Bekerja (termasuk kerja sambilan dan wirausaha) ?', '', 'yes', '', '', '', ''),
(2759, 1, 2709, 'hubungan_antara_bidang_studi_dengan_pekerjaan_anda_', 'custom_option', 'Hubungan antara bidang studi dengan pekerjaan anda?', 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?', 'yes', '', '', '', ''),
(2760, 1, 2710, 'tingkat_pendidikan_yang_tepat_sesuai_untuk_pekerjaan_saat_ini_', 'custom_option', 'Tingkat pendidikan yang tepat/sesuai untuk pekerjaan saat ini?', 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', '', '', '', '', ''),
(2761, 1, 2711, 'kira_kira_berapa_pendapatan_anda_setiap_bulannya_', 'input', 'Kira-kira berapa pendapatan anda setiap bulannya?', 'Isi Dengan Angka Saja Tanpa Titik/Koma', '', 'Isi Dengan Angka Saja!', '', '', ''),
(2762, 1, 2712, 'h3', 'heading', 'Kusioner Opsional', '', '', '', '', '', ''),
(2763, 1, 2713, 'h5', 'heading', 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?', '', '', '', '', '', ''),
(2764, 1, 2714, 'perkuliahan', 'custom_option', 'Perkuliahan', '', 'yes', '', '', '', ''),
(2765, 1, 2715, 'desmonstrasi', 'custom_option', 'Desmonstrasi', '', 'yes', '', '', '', ''),
(2766, 1, 2716, 'partisipasi_dalam_proyek_riset', 'custom_option', 'Partisipasi dalam proyek riset', '', 'yes', '', '', '', ''),
(2767, 1, 2717, 'magang', 'custom_option', 'Magang', '', 'yes', '', '', '', ''),
(2768, 1, 2718, 'praktikum', 'custom_option', 'Praktikum', '', 'yes', '', '', '', ''),
(2769, 1, 2719, 'kerja_lapangan', 'custom_option', 'Kerja Lapangan', '', 'yes', '', '', '', ''),
(2770, 1, 2720, 'diskusi', 'custom_option', 'Diskusi', '', 'yes', '', '', '', ''),
(2771, 1, 2721, 'mulai_mencari_pekerjaan_pekerjaan_sambilan_tidak_dimasukan_', 'custom_select', 'Mulai mencari pekerjaan, (pekerjaan sambilan tidak dimasukan)', '', 'yes', '', '', '', ''),
(2772, 1, 2722, 'bagaimana_cara_pekerjaan_tersebut_jawaban_bisa_lebih_dari_satu', 'custom_select_multiple', 'Bagaimana cara pekerjaan tersebut? Jawaban bisa lebih dari satu', '', 'yes', '', '', '', ''),
(2773, 1, 2723, 'berapa_perusahaan_yang_dilamar_lewat_surat_email_', 'number', 'Berapa perusahaan yang dilamar (lewat surat/email)', '', '', 'Isi dengan jumlah perusahaan yang anda lamar sebelum anda memeroleh pekerjaan pertama?', '', '', ''),
(2774, 1, 2724, '_jumlah_perusahaan_yang_merespons_lamaran_anda_', 'number', ' Jumlah perusahaan yang merespons lamaran anda?', '', '', 'Isi dengan jumlah perusahaan/instansi/institusi yang merespons lamaran anda?', '', '', ''),
(2775, 1, 2725, 'jumlah_perusahaan_yang_mengundang_anda_untuk_wawancara_', 'number', 'Jumlah perusahaan yang mengundang anda untuk wawancara?', '', '', 'Jumlah banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', '', '', ''),
(2776, 1, 2726, 'bagaimana_situasi_anda_saat_ini_jawaban_bisa_lebih_dari_satu', 'custom_select_multiple', 'Bagaimana situasi anda saat ini? Jawaban bisa lebih dari satu', '', 'yes', '', '', '', ''),
(2777, 1, 2727, 'apakah_anda_aktif_mencari_pekerjaan_dalam_4_minggu_terkahir_', 'custom_select', 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terkahir?', '', 'yes', '', '', '', ''),
(2778, 1, 2728, 'apa_jenis_perusahaan_tempat_anda_bekerja_sekarang_', 'custom_select', 'Apa jenis perusahaan tempat anda bekerja sekarang?', '', 'yes', '', '', '', ''),
(2779, 1, 2729, 'jika_pekerjaan_tidak_sesuai_kenapa_mengambilnya_', 'custom_select', 'Jika pekerjaan tidak sesuai, kenapa mengambilnya?', '', 'yes', '', '', '', ''),
(2780, 1, 2730, 'h4', 'heading', 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?(1 = Sangat Rendah, 5 = Sangat Tinggi)', '', '', '', '', '', ''),
(2781, 1, 2731, 'pengetahuan_di_bidang_atau_disiplin_ilmu_anda', 'custom_option', 'Pengetahuan di bidang atau disiplin ilmu anda', '', 'yes', '', '', '', ''),
(2782, 1, 2732, 'pengetahuan_di_luar_bidang_atau_disiplin_ilmu_anda', 'custom_option', 'Pengetahuan di luar bidang atau disiplin ilmu anda', '', 'yes', '', '', '', ''),
(2783, 1, 2733, 'pengetahuan_umum', 'custom_option', 'Pengetahuan umum', '', 'yes', '', '', '', ''),
(2784, 1, 2734, 'bahasa_inggris', 'custom_option', 'Bahasa Inggris', '', 'yes', '', '', '', ''),
(2785, 1, 2735, 'ketrampilan_internet_', 'custom_option', 'Ketrampilan internet ', '', 'yes', '', '', '', ''),
(2786, 1, 2736, 'ketrampilan_komputer', 'custom_option', 'Ketrampilan komputer', '', 'yes', '', '', '', ''),
(2787, 1, 2737, 'berpikir_kritis_', 'custom_option', 'Berpikir kritis ', '', 'yes', '', '', '', ''),
(2788, 1, 2738, 'ketrampilan_riset', 'custom_option', 'Ketrampilan riset', '', 'yes', '', '', '', ''),
(2789, 1, 2739, 'kemampuan_belajar', 'custom_option', 'Kemampuan belajar', '', 'yes', '', '', '', ''),
(2790, 1, 2740, 'kemampuan_berkomunikasi', 'custom_option', 'Kemampuan berkomunikasi', '', 'yes', '', '', '', ''),
(2791, 1, 2741, 'bekerja_di_bawah_tekanan', 'custom_option', 'Bekerja di bawah tekanan', '', 'yes', '', '', '', ''),
(2792, 1, 2742, 'manajemen_waktu', 'custom_option', 'Manajemen waktu', '', 'yes', '', '', '', ''),
(2793, 1, 2743, 'bekerja_secara_mandiri', 'custom_option', 'Bekerja secara mandiri', '', 'yes', '', '', '', ''),
(2794, 1, 2744, 'bekerja_dalam_tim_bekerjasama_dengan_orang_lain', 'custom_option', 'Bekerja dalam tim/bekerjasama dengan orang lain', '', 'yes', '', '', '', ''),
(2795, 1, 2745, 'kemampuan_dalam_memecahkan_masalah', 'custom_option', 'Kemampuan dalam memecahkan masalah', '', 'yes', '', '', '', ''),
(2796, 1, 2746, 'negosiasi_', 'custom_option', 'Negosiasi ', '', 'yes', '', '', '', ''),
(2797, 1, 2747, 'kemampuan_untuk_terus_belajar_sepanjang_hayat', 'custom_option', 'Kemampuan untuk terus belajar sepanjang hayat', '', 'yes', '', '', '', '');

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
(3354, 2748, 1, 'required', ''),
(3355, 2748, 1, 'max_length', '7'),
(3356, 2749, 1, 'required', ''),
(3357, 2749, 1, 'max_length', '6'),
(3358, 2749, 1, 'valid_number', ''),
(3359, 2750, 1, 'required', ''),
(3360, 2750, 1, 'max_length', '4'),
(3361, 2751, 1, 'required', ''),
(3362, 2752, 1, 'required', ''),
(3363, 2752, 1, 'max_length', '25'),
(3364, 2753, 1, 'required', ''),
(3365, 2754, 1, 'required', ''),
(3366, 2756, 1, 'required', ''),
(3367, 2757, 1, 'required', ''),
(3368, 2758, 1, 'required', ''),
(3369, 2759, 1, 'required', ''),
(3370, 2760, 1, 'required', ''),
(3371, 2761, 1, 'required', ''),
(3372, 2761, 1, 'valid_number', ''),
(3373, 2764, 1, 'required', ''),
(3374, 2765, 1, 'required', ''),
(3375, 2766, 1, 'required', ''),
(3376, 2767, 1, 'required', ''),
(3377, 2768, 1, 'required', ''),
(3378, 2769, 1, 'required', ''),
(3379, 2770, 1, 'required', ''),
(3380, 2771, 1, 'required', ''),
(3381, 2772, 1, 'required', ''),
(3382, 2773, 1, 'required', ''),
(3383, 2773, 1, 'valid_number', ''),
(3384, 2774, 1, 'required', ''),
(3385, 2774, 1, 'valid_number', ''),
(3386, 2775, 1, 'required', ''),
(3387, 2775, 1, 'valid_number', ''),
(3388, 2776, 1, 'required', ''),
(3389, 2777, 1, 'required', ''),
(3390, 2778, 1, 'required', ''),
(3391, 2779, 1, 'required', ''),
(3392, 2781, 1, 'required', ''),
(3393, 2782, 1, 'required', ''),
(3394, 2783, 1, 'required', ''),
(3395, 2784, 1, 'required', ''),
(3396, 2785, 1, 'required', ''),
(3397, 2786, 1, 'required', ''),
(3398, 2787, 1, 'required', ''),
(3399, 2788, 1, 'required', ''),
(3400, 2789, 1, 'required', ''),
(3401, 2790, 1, 'required', ''),
(3402, 2791, 1, 'required', ''),
(3403, 2792, 1, 'required', ''),
(3404, 2793, 1, 'required', ''),
(3405, 2794, 1, 'required', ''),
(3406, 2795, 1, 'required', ''),
(3407, 2796, 1, 'required', ''),
(3408, 2797, 1, 'required', '');

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
(2, 1406054, '043051', 2019, 55201, 'Fikri Zakaria Rahman', 2147483647, 'fikrizakaria37@gmail.com', 'Kira-kira 4-6 Bulan Sebelum LULUS UJIAN', '{2] Keluarga', 'yes', 'Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 3-6 bulan Sebelum Lulus', 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.),Lainnya', 2, 2, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '1', '5', '2', '2', '1', '1', '1', '1', '1', '3', '3', '1', '2', '1', '1', '2', '2'),
(3, 1406068, '043051', 2018, 55201, 'Irna Restiani', 2147483647, 'irna.restiani@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '{2] Keluarga', 'yes', 'Sangat Erat', 'Tingkat Yg Sama', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Melalui iklan di koran/majalah, brosur,Mencari lewat internet/iklan online/milis', 3, 2, 2, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Di pekerjaan ini saya memeroleh prospek karir yang baik', '2', '2', '2', '1', '1', '1', '2', '1', '2', '2', '2', '1', '2', '2', '2', '2', '2'),
(4, 1406019, '043051', 2018, 55201, 'unknow', 930390, 'jqdjskcjhsclkalkj@gmail.com', 'Kira-kira 1-3 Bulan Sebelum LULUS UJIAN', '[1] Biaya Sendiri', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1000000', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Saya Tidak Mencari Pekerjaan Sebelumnya,Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 3, 3, 1, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Instansi pemerintah(termasuk BUMN)', 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2'),
(5, 1411023, '043051', 2018, 22201, 'unknow 2', 2147483647, 'unknow23@gmail.com', 'Kira-kira 1 Tahun Lebih Sebelum LULUS UJIAN', '{2] Keluarga', 'yes', 'Sangat Erat', 'Setingkat Lebih Tinggi', '1500000', 'Sangat Besar', 'Besar', 'Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kira-kira 1-3 bulan Sebelum Lulus', 'Menghubungi agen tenaga kerja komersial/swasta', 3, 3, 3, 'Saya sekarang sedang mencari pekerjaan', 'Saya Sudah Bekerja', 'Perusahaan Swasta', 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya', '1', '1', '2', '3', '1', '1', '1', '2', '3', '1', '4', '1', '2', '1', '2', '3', '1');

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
(8, 'Menu', 'menu', '', 'administrator/menu', 9, 0, 'fa-bars', 1, 1),
(9, 'Auth', 'menu', '', '', 10, 0, 'fa-shield', 1, 1),
(10, 'User', 'menu', '', 'administrator/user', 11, 9, '', 1, 1),
(11, 'Groups', 'menu', '', 'administrator/group', 12, 9, '', 1, 1),
(12, 'Access', 'menu', '', 'administrator/access', 13, 9, '', 1, 1),
(13, 'Permission', 'menu', '', 'administrator/permission', 14, 9, '', 1, 1),
(14, 'API Keys', 'menu', '', 'administrator/keys', 15, 9, '', 1, 1),
(15, 'Extension', 'menu', 'default', 'administrator/extension', 16, 0, 'fa-puzzle-piece', 1, 1),
(16, 'OTHER', 'label', '', '', 17, 0, '', 1, 1),
(17, 'Settings', 'menu', 'text-red', 'administrator/setting', 18, 0, 'fa-circle-o', 1, 1),
(18, 'Web Documentation', 'menu', 'text-blue', 'administrator/doc/web', 19, 0, 'fa-circle-o', 1, 1),
(19, 'API Documentation', 'menu', 'text-yellow', 'administrator/doc/api', 20, 0, 'fa-circle-o', 1, 1),
(20, 'Home', 'menu', '', '/', 1, 0, '', 2, 1),
(21, 'Berita', 'menu', 'default', 'blog', 3, 0, '', 2, 1),
(22, 'Dashboard', 'menu', '', 'administrator/dashboard', 4, 0, '', 2, 1),
(23, 'Daftar Mahasiswa', 'menu', 'default', '#', 6, 0, 'fa-users', 1, 1),
(24, 'Form Tracer', 'menu', 'default', 'page/tracer-responden', 2, 0, '', 2, 1);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aauth_perms`
--
ALTER TABLE `aauth_perms`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_custom_option`
--
ALTER TABLE `crud_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_field`
--
ALTER TABLE `crud_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `crud_field_validation`
--
ALTER TABLE `crud_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `form_custom_attribute`
--
ALTER TABLE `form_custom_attribute`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `form_custom_option`
--
ALTER TABLE `form_custom_option`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7348;

--
-- AUTO_INCREMENT for table `form_field`
--
ALTER TABLE `form_field`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2798;

--
-- AUTO_INCREMENT for table `form_field_validation`
--
ALTER TABLE `form_field_validation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3409;

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
