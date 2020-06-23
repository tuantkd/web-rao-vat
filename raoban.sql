-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 04:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raoban`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Bất động sản', NULL, '2020-06-18 07:26:46', '2020-06-18 07:26:46'),
(2, 'Xe cộ', NULL, '2020-06-18 07:39:15', '2020-06-18 07:39:15'),
(3, 'Đồ điện tử', NULL, '2020-06-18 07:39:27', '2020-06-18 07:39:27'),
(4, 'Việc làm, tuyển sinh', NULL, '2020-06-18 07:39:37', '2020-06-18 07:39:37'),
(5, 'Thú cưng', NULL, '2020-06-18 07:39:47', '2020-06-18 07:39:47'),
(6, 'Đồ ăn, thực phẩm và loại khác', NULL, '2020-06-18 07:39:57', '2020-06-18 07:39:57'),
(7, 'Tủ lạnh, máy lạnh, máy giặt', NULL, '2020-06-18 07:40:20', '2020-06-18 07:40:20'),
(8, 'Đồ gia dụng, nội thất, cây cảnh', NULL, '2020-06-18 07:40:31', '2020-06-18 07:40:31'),
(9, 'Thời trang, đồ dùng cá nhân', NULL, '2020-06-18 07:40:41', '2020-06-18 07:40:41'),
(10, 'Giải trí, thể thao, sở thích', NULL, '2020-06-18 07:43:27', '2020-06-18 07:43:27'),
(11, 'Đồ văn phòng, công nông nghiệp', NULL, '2020-06-18 07:43:39', '2020-06-18 07:43:39'),
(12, 'Dịch vụ, du lịch', NULL, '2020-06-18 07:43:49', '2020-06-18 07:43:49'),
(13, 'Mẹ và bé', NULL, '2020-06-19 09:46:39', '2020-06-19 09:46:39');

-- --------------------------------------------------------

--
-- Table structure for table `category_child_firsts`
--

CREATE TABLE `category_child_firsts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_child_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_child_firsts`
--

INSERT INTO `category_child_firsts` (`id`, `category_id`, `category_child_name`, `created_at`, `updated_at`) VALUES
(109, 1, 'Mua nhà, bán nhà', '2020-06-18 13:47:26', '2020-06-18 13:47:26'),
(110, 1, 'Thuê và cho thuê nhà', '2020-06-18 13:47:49', '2020-06-18 13:47:49'),
(111, 1, 'Mua đất, bán đất', '2020-06-18 13:48:00', '2020-06-18 13:48:00'),
(112, 1, 'Vật liệu xây dựng', '2020-06-18 13:48:20', '2020-06-18 13:48:20'),
(113, 1, 'Thi công xây dựng', '2020-06-18 13:48:30', '2020-06-18 13:48:30'),
(114, 1, 'Sang nhượng QSD', '2020-06-18 13:48:42', '2020-06-18 13:48:42'),
(115, 1, 'Nội Thất', '2020-06-18 13:48:51', '2020-06-18 13:48:51'),
(116, 1, 'Ngoại thất', '2020-06-18 13:49:13', '2020-06-18 13:49:13'),
(117, 1, 'Kiến trúc', '2020-06-18 13:49:23', '2020-06-18 13:49:23'),
(118, 1, 'Các loại khác', '2020-06-18 13:49:33', '2020-06-18 13:49:33'),
(119, 2, 'Ô tô', '2020-06-18 13:50:47', '2020-06-18 13:50:47'),
(120, 2, 'Xe tải', '2020-06-18 13:51:01', '2020-06-18 13:51:01'),
(121, 2, 'Nội thất, đồ chơi Ô tô', '2020-06-18 13:51:11', '2020-06-18 13:51:11'),
(122, 2, 'Xe máy', '2020-06-18 13:51:23', '2020-06-18 13:51:23'),
(123, 2, 'Xe đạp điện', '2020-06-18 13:51:36', '2020-06-18 13:51:36'),
(124, 2, 'Mũ bảo hiểm xe máy', '2020-06-18 13:52:11', '2020-06-18 13:52:11'),
(125, 2, 'Phương tiện khác', '2020-06-18 13:54:53', '2020-06-18 13:54:53'),
(126, 2, 'Phụ tùng xe', '2020-06-18 13:55:11', '2020-06-18 13:55:11'),
(127, 4, 'Việc tìm người', '2020-06-18 14:00:30', '2020-06-18 14:00:30'),
(128, 4, 'Tuyển sinh', '2020-06-18 14:00:43', '2020-06-18 14:00:43'),
(129, 4, 'Dạy kèm', '2020-06-18 14:00:59', '2020-06-18 14:00:59'),
(130, 4, 'Học hành', '2020-06-18 14:01:08', '2020-06-18 14:01:08'),
(131, 4, 'Người tìm việc', '2020-06-18 14:01:19', '2020-06-18 14:01:19'),
(132, 4, 'Giáo dục, đào tạo', '2020-06-18 14:01:33', '2020-06-18 14:01:33'),
(133, 4, 'Dịch vụ lao động', '2020-06-18 14:01:55', '2020-06-18 14:01:55'),
(134, 3, 'Điện tử', '2020-06-18 14:05:44', '2020-06-18 14:05:44'),
(135, 3, 'Điện gia dụng', '2020-06-18 14:05:56', '2020-06-18 14:05:56'),
(136, 3, 'Điện lạnh', '2020-06-18 14:06:05', '2020-06-18 14:06:05'),
(137, 3, 'Thiết bị số khác', '2020-06-18 14:06:16', '2020-06-18 14:06:16'),
(138, 3, 'Thiết bị trình chiếu', '2020-06-18 14:06:31', '2020-06-18 14:06:31'),
(139, 3, 'Máy nghe nhạc', '2020-06-18 14:06:51', '2020-06-18 14:06:51'),
(140, 3, 'Máy ảnh số', '2020-06-18 14:33:36', '2020-06-18 14:33:36'),
(141, 3, 'Máy chơi game', '2020-06-18 14:34:13', '2020-06-18 14:34:13'),
(142, 3, 'Linh kiện (Ram, Card)', '2020-06-18 14:36:34', '2020-06-18 14:36:34'),
(143, 3, 'Phụ kiện (Màn hình, Chuột)', '2020-06-18 14:37:16', '2020-06-18 14:37:16'),
(144, 3, 'Điện thoại', '2020-06-18 14:38:05', '2020-06-18 14:38:05'),
(145, 3, 'Máy tính bảng', '2020-06-18 14:38:32', '2020-06-18 14:38:32'),
(146, 3, 'Máy tính để bàn, Laptop', '2020-06-18 14:39:18', '2020-06-18 14:39:18'),
(147, 3, 'Máy ảnh, Máy quay', '2020-06-18 14:40:45', '2020-06-18 14:40:45'),
(148, 3, 'Tivi, Âm thanh', '2020-06-18 14:41:04', '2020-06-18 14:41:04'),
(149, 3, 'Thiết bị đeo thông minh', '2020-06-18 14:41:21', '2020-06-18 14:41:21'),
(150, 5, 'Mèo', '2020-06-18 14:42:43', '2020-06-18 14:42:43'),
(151, 5, 'Chó', '2020-06-18 14:42:54', '2020-06-18 14:42:54'),
(152, 5, 'Gà', '2020-06-18 14:43:02', '2020-06-18 14:43:02'),
(153, 5, 'Chim', '2020-06-18 15:17:45', '2020-06-18 15:17:45'),
(154, 5, 'Thú cưng khác', '2020-06-18 15:18:11', '2020-06-18 15:18:11'),
(155, 5, 'Phụ kiện, Thức ăn, Dịch vụ', '2020-06-18 15:18:47', '2020-06-18 15:18:47'),
(156, 7, 'Tủ lạnh', '2020-06-19 03:05:12', '2020-06-19 03:05:12'),
(157, 7, 'Máy lạnh, Điều hòa', '2020-06-19 03:05:29', '2020-06-19 03:05:29'),
(158, 7, 'Máy giặt', '2020-06-19 03:05:39', '2020-06-19 03:05:39'),
(159, 8, 'Đèn', '2020-06-19 03:06:19', '2020-06-19 03:06:19'),
(160, 8, 'Bàn ghế', '2020-06-19 03:06:32', '2020-06-19 03:06:32'),
(161, 8, 'Tủ, kệ gia đình', '2020-06-19 03:06:47', '2020-06-19 03:06:47'),
(162, 8, 'Bếp, lò, đồ điện nhà bếp', '2020-06-19 03:07:28', '2020-06-19 03:07:28'),
(163, 8, 'Dụng cụ nhà bếp', '2020-06-19 03:08:24', '2020-06-19 03:08:24'),
(164, 8, 'Quạt', '2020-06-19 03:08:34', '2020-06-19 03:08:34'),
(165, 8, 'Cây cảnh, đồ trang trí', '2020-06-19 03:09:05', '2020-06-19 03:09:05'),
(166, 8, 'Thiết bị vệ sinh, nhà tắm', '2020-06-19 03:09:31', '2020-06-19 03:09:31'),
(167, 8, 'Nội thất, đồ gia dụng khác', '2020-06-19 03:09:53', '2020-06-19 03:09:53'),
(168, 9, 'Quần áo', '2020-06-19 03:34:41', '2020-06-19 03:34:41'),
(169, 9, 'Đồng hồ', '2020-06-19 03:34:54', '2020-06-19 03:34:54'),
(170, 9, 'Giày dép', '2020-06-19 03:35:47', '2020-06-19 03:35:47'),
(171, 9, 'Túi xách', '2020-06-19 03:36:03', '2020-06-19 03:36:03'),
(172, 9, 'Nước hoa', '2020-06-19 03:36:18', '2020-06-19 03:36:18'),
(173, 9, 'Phụ kiện thời trang khác', '2020-06-19 03:36:35', '2020-06-19 03:36:35'),
(174, 10, 'Nhạc cụ', '2020-06-19 03:40:39', '2020-06-19 03:40:39'),
(175, 10, 'Sách', '2020-06-19 03:40:48', '2020-06-19 03:40:48'),
(176, 10, 'Đồ thể thao, Dã ngoại', '2020-06-19 03:41:06', '2020-06-19 03:41:06'),
(177, 10, 'Đồ sưu tầm, đồ cổ', '2020-06-19 03:41:30', '2020-06-19 03:41:30'),
(178, 10, 'Thiết bị chơi game', '2020-06-19 03:41:45', '2020-06-19 03:41:45'),
(179, 10, 'Sở thích khác', '2020-06-19 03:42:05', '2020-06-19 03:42:05'),
(180, 11, 'Đồ dùng văn phòng', '2020-06-19 03:43:50', '2020-06-19 03:43:50'),
(181, 11, 'Đồ dùng chuyên dụng, Giống nuôi trồng', '2020-06-19 03:44:13', '2020-06-19 03:44:13'),
(182, 12, 'Tổ chức sự kiện', '2020-06-19 03:44:50', '2020-06-19 03:44:50'),
(183, 12, 'Dịch vụ vận chuyển', '2020-06-19 03:45:00', '2020-06-19 03:45:00'),
(184, 12, 'Dịch vụ chuyến phát', '2020-06-19 03:45:23', '2020-06-19 03:45:23'),
(185, 12, 'An ninh, bảo vệ', '2020-06-19 03:45:35', '2020-06-19 03:45:35'),
(186, 12, 'Du lịch', '2020-06-19 03:45:46', '2020-06-19 03:45:46'),
(187, 12, 'Sửa chữa, bảo trì', '2020-06-19 03:45:54', '2020-06-19 03:45:54'),
(188, 12, 'Vận tải, vận chuyển', '2020-06-19 03:46:03', '2020-06-19 03:46:03'),
(189, 6, 'Thực phẩm dinh dưỡng', '2020-06-19 12:54:29', '2020-06-19 12:54:29'),
(190, 6, 'Tiệc cưới', '2020-06-19 12:54:39', '2020-06-19 12:54:39'),
(191, 6, 'Ẩm thực khác', '2020-06-19 12:54:50', '2020-06-19 12:54:50'),
(192, 10, 'Nhạc cụ', '2020-06-19 12:56:35', '2020-06-19 12:56:35'),
(193, 10, 'Sách', '2020-06-19 12:56:51', '2020-06-19 12:56:51'),
(194, 10, 'Đồ thể thao, Dã ngoại', '2020-06-19 12:57:08', '2020-06-19 12:57:08'),
(195, 10, 'Đồ sưu tầm, đồ cổ', '2020-06-19 12:57:36', '2020-06-19 12:57:36'),
(196, 10, 'Thiết bị chơi game', '2020-06-19 12:57:56', '2020-06-19 12:57:56'),
(197, 10, 'Sở thích khác', '2020-06-19 12:58:09', '2020-06-19 12:58:09'),
(198, 13, 'Thời trang trẻ em', '2020-06-22 13:56:08', '2020-06-22 13:56:08'),
(199, 13, 'Thời trang cho mẹ', '2020-06-22 13:56:50', '2020-06-22 13:56:50'),
(200, 13, 'Giải trí cho bé', '2020-06-22 13:57:31', '2020-06-22 13:57:31'),
(201, 13, 'Xe cho bé', '2020-06-22 13:57:47', '2020-06-22 13:57:47');

-- --------------------------------------------------------

--
-- Table structure for table `category_child_seconds`
--

CREATE TABLE `category_child_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_first_id` bigint(20) UNSIGNED NOT NULL,
  `estate_category` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_address` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_name_project` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_land_area` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_floor` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_bedroom` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_bathroom` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_area_used` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `estate_juridical` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_color` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_version` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_origin` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_produce_name` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_model_name` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_register_year` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_category` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_number_kilometer` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_fuel` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `electron_manufacturer` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `electron_model_machine` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `electron_color` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `electron_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_type` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_old` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_sex` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_certificate` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_foreign_language` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_position` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_job` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_experience` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `work_salary_level` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `food_origin` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `food_expiration` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `refrigerator_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `refrigerator_manufacturer` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `furniture_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `fashion_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `fashion_type_product` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `sport_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `office_furniture_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_type_work` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_experience_work` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `mom_baby_status` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `mom_baby_type_product` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category_child_seconds`
--

INSERT INTO `category_child_seconds` (`id`, `category_first_id`, `estate_category`, `estate_address`, `estate_name_project`, `estate_land_area`, `estate_floor`, `estate_bedroom`, `estate_bathroom`, `estate_area_used`, `estate_juridical`, `car_color`, `car_version`, `car_origin`, `car_status`, `car_produce_name`, `car_model_name`, `car_register_year`, `car_category`, `car_number_kilometer`, `car_fuel`, `electron_manufacturer`, `electron_model_machine`, `electron_color`, `electron_status`, `work_type`, `work_old`, `work_sex`, `work_certificate`, `work_foreign_language`, `work_position`, `work_job`, `work_experience`, `work_salary_level`, `food_origin`, `food_expiration`, `refrigerator_status`, `refrigerator_manufacturer`, `furniture_status`, `fashion_status`, `fashion_type_product`, `sport_status`, `office_furniture_status`, `service_type_work`, `service_experience_work`, `mom_baby_status`, `mom_baby_type_product`, `created_at`, `updated_at`) VALUES
(1, 109, 'Biệt thự, Villa, Penthouse', 'Thị xã Phú Mỹ, tỉnh Bà Rịa - Vũng Tàu', NULL, '3200m2', '1', '3', '2', NULL, 'Giấy tờ đầy đủ, chính chủ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:02:46', '2020-06-22 13:02:46'),
(2, 109, 'Biệt thự, Villa, Penthouse', 'Thị xã Phú Mỹ, tỉnh Bà Rịa - Vũng Tàu', NULL, '3200m2', '1', '3', '2', NULL, 'Giấy tờ đầy đủ, chính chủ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:04:36', '2020-06-22 13:04:36'),
(3, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đỏ', 'Tôi không rõ', 'Nhật Bản', 'Mới', 'Mazda', 'Mazda CX-5', '2020', 'Xe số', NULL, 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:07:46', '2020-06-22 13:07:46'),
(4, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đỏ', 'Tôi không rõ', 'Nhật Bản', 'Mới', 'Mazda', 'Mazda CX-5', '2020', 'Xe số', NULL, 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:08:33', '2020-06-22 13:08:33'),
(5, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đỏ', 'Tôi không rõ', 'Nhật Bản', 'Mới', 'Mazda', 'Mazda CX-5', '2020', 'Xe số', NULL, 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:10:27', '2020-06-22 13:10:27'),
(6, 119, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đỏ', 'Tôi không rõ', 'Nhật Bản', 'Mới', 'Mazda', 'Mazda CX-5', '2020', 'Xe số', NULL, 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:13:35', '2020-06-22 13:13:35'),
(7, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đen', 'Đã sử dụng (chưa sửa chữa)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:18:49', '2020-06-22 13:18:49'),
(8, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khác', NULL, NULL, NULL, NULL, NULL, 'Làm việc bán thời gian', NULL, '18000/Giờ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:25:08', '2020-06-22 13:25:08'),
(9, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:28:29', '2020-06-22 13:28:29'),
(10, 191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:30:55', '2020-06-22 13:30:55'),
(11, 156, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:34:06', '2020-06-22 13:34:06'),
(12, 167, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:37:48', '2020-06-22 13:37:48'),
(13, 170, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', 'Đồ Nữ', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:40:52', '2020-06-22 13:40:52'),
(14, 174, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:43:53', '2020-06-22 13:43:53'),
(15, 180, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đã sử dụng', NULL, NULL, NULL, NULL, '2020-06-22 13:47:04', '2020-06-22 13:47:04'),
(16, 182, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khác', NULL, NULL, NULL, '2020-06-22 13:50:37', '2020-06-22 13:50:37'),
(17, 198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', 'Đồ cho bé', '2020-06-22 13:59:09', '2020-06-22 13:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `devvn_tinhthanhpho`
--

CREATE TABLE `devvn_tinhthanhpho` (
  `matp` varchar(5) CHARACTER SET utf8 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `type` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `devvn_tinhthanhpho`
--

INSERT INTO `devvn_tinhthanhpho` (`matp`, `name`, `type`) VALUES
('2', 'Thành phố Hà Nội', 'Thành phố Trung ương'),
('3', 'Tỉnh Hà Giang', 'Tỉnh'),
('4', 'Tỉnh Cao Bằng', 'Tỉnh'),
('5', 'Tỉnh Bắc Kạn', 'Tỉnh'),
('6', 'Tỉnh Tuyên Quang', 'Tỉnh'),
('7', 'Tỉnh Lào Cai', 'Tỉnh'),
('8', 'Tỉnh Điện Biên', 'Tỉnh'),
('9', 'Tỉnh Lai Châu', 'Tỉnh'),
('10', 'Tỉnh Sơn La', 'Tỉnh'),
('11', 'Tỉnh Yên Bái', 'Tỉnh'),
('12', 'Tỉnh Hoà Bình', 'Tỉnh'),
('13', 'Tỉnh Thái Nguyên', 'Tỉnh'),
('14', 'Tỉnh Lạng Sơn', 'Tỉnh'),
('15', 'Tỉnh Quảng Ninh', 'Tỉnh'),
('16', 'Tỉnh Bắc Giang', 'Tỉnh'),
('17', 'Tỉnh Phú Thọ', 'Tỉnh'),
('18', 'Tỉnh Vĩnh Phúc', 'Tỉnh'),
('19', 'Tỉnh Bắc Ninh', 'Tỉnh'),
('20', 'Tỉnh Hải Dương', 'Tỉnh'),
('21', 'Thành phố Hải Phòng', 'Thành phố Trung ương'),
('22', 'Tỉnh Hưng Yên', 'Tỉnh'),
('23', 'Tỉnh Thái Bình', 'Tỉnh'),
('24', 'Tỉnh Hà Nam', 'Tỉnh'),
('25', 'Tỉnh Nam Định', 'Tỉnh'),
('26', 'Tỉnh Ninh Bình', 'Tỉnh'),
('27', 'Tỉnh Thanh Hóa', 'Tỉnh'),
('28', 'Tỉnh Nghệ An', 'Tỉnh'),
('29', 'Tỉnh Hà Tĩnh', 'Tỉnh'),
('30', 'Tỉnh Quảng Bình', 'Tỉnh'),
('31', 'Tỉnh Quảng Trị', 'Tỉnh'),
('32', 'Tỉnh Thừa Thiên Huế', 'Tỉnh'),
('33', 'Thành phố Đà Nẵng', 'Thành phố Trung ương'),
('34', 'Tỉnh Quảng Nam', 'Tỉnh'),
('35', 'Tỉnh Quảng Ngãi', 'Tỉnh'),
('36', 'Tỉnh Bình Định', 'Tỉnh'),
('37', 'Tỉnh Phú Yên', 'Tỉnh'),
('38', 'Tỉnh Khánh Hòa', 'Tỉnh'),
('39', 'Tỉnh Ninh Thuận', 'Tỉnh'),
('40', 'Tỉnh Bình Thuận', 'Tỉnh'),
('41', 'Tỉnh Kon Tum', 'Tỉnh'),
('42', 'Tỉnh Gia Lai', 'Tỉnh'),
('43', 'Tỉnh Đắk Lắk', 'Tỉnh'),
('44', 'Tỉnh Đắk Nông', 'Tỉnh'),
('45', 'Tỉnh Lâm Đồng', 'Tỉnh'),
('46', 'Tỉnh Bình Phước', 'Tỉnh'),
('47', 'Tỉnh Tây Ninh', 'Tỉnh'),
('48', 'Tỉnh Bình Dương', 'Tỉnh'),
('49', 'Tỉnh Đồng Nai', 'Tỉnh'),
('50', 'Tỉnh Bà Rịa - Vũng Tàu', 'Tỉnh'),
('51', 'Thành phố Hồ Chí Minh', 'Thành phố Trung ương'),
('52', 'Tỉnh Long An', 'Tỉnh'),
('53', 'Tỉnh Tiền Giang', 'Tỉnh'),
('54', 'Tỉnh Bến Tre', 'Tỉnh'),
('55', 'Tỉnh Trà Vinh', 'Tỉnh'),
('56', 'Tỉnh Vĩnh Long', 'Tỉnh'),
('57', 'Tỉnh Đồng Tháp', 'Tỉnh'),
('58', 'Tỉnh An Giang', 'Tỉnh'),
('59', 'Tỉnh Kiên Giang', 'Tỉnh'),
('60', 'Thành phố Cần Thơ', 'Thành phố Trung ương'),
('61', 'Tỉnh Hậu Giang', 'Tỉnh'),
('62', 'Tỉnh Sóc Trăng', 'Tỉnh'),
('63', 'Tỉnh Bạc Liêu', 'Tỉnh'),
('64', 'Tỉnh Cà Mau', 'Tỉnh');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `district_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `province_id`, `district_name`, `created_at`, `updated_at`) VALUES
(714, 2, 'Quận Ba Đình', NULL, NULL),
(715, 2, 'Quận Hoàn Kiếm', NULL, NULL),
(716, 2, 'Quận Tây Hồ', NULL, NULL),
(717, 2, 'Quận Long Biên', NULL, NULL),
(718, 2, 'Quận Cầu Giấy', NULL, NULL),
(719, 2, 'Quận Đống Đa', NULL, NULL),
(720, 2, 'Quận Hai Bà Trưng', NULL, NULL),
(721, 2, 'Quận Hoàng Mai', NULL, NULL),
(722, 2, 'Quận Thanh Xuân', NULL, NULL),
(723, 2, 'Huyện Sóc Sơn', NULL, NULL),
(724, 2, 'Huyện Đông Anh', NULL, NULL),
(725, 2, 'Huyện Gia Lâm', NULL, NULL),
(726, 2, 'Quận Nam Từ Liêm', NULL, NULL),
(727, 2, 'Huyện Thanh Trì', NULL, NULL),
(728, 2, 'Quận Bắc Từ Liêm', NULL, NULL),
(729, 3, 'Thành phố Hà Giang', NULL, NULL),
(730, 3, 'Huyện Đồng Văn', NULL, NULL),
(731, 3, 'Huyện Mèo Vạc', NULL, NULL),
(732, 3, 'Huyện Yên Minh', NULL, NULL),
(733, 3, 'Huyện Quản Bạ', NULL, NULL),
(734, 3, 'Huyện Vị Xuyên', NULL, NULL),
(735, 3, 'Huyện Bắc Mê', NULL, NULL),
(736, 3, 'Huyện Hoàng Su Phì', NULL, NULL),
(737, 3, 'Huyện Xín Mần', NULL, NULL),
(738, 3, 'Huyện Bắc Quang', NULL, NULL),
(739, 3, 'Huyện Quang Bình', NULL, NULL),
(740, 4, 'Thành phố Cao Bằng', NULL, NULL),
(741, 4, 'Huyện Bảo Lâm', NULL, NULL),
(742, 4, 'Huyện Bảo Lạc', NULL, NULL),
(743, 4, 'Huyện Thông Nông', NULL, NULL),
(744, 4, 'Huyện Hà Quảng', NULL, NULL),
(745, 4, 'Huyện Trà Lĩnh', NULL, NULL),
(746, 4, 'Huyện Trùng Khánh', NULL, NULL),
(747, 4, 'Huyện Hạ Lang', NULL, NULL),
(748, 4, 'Huyện Quảng Uyên', NULL, NULL),
(749, 4, 'Huyện Phục Hoà', NULL, NULL),
(750, 4, 'Huyện Hoà An', NULL, NULL),
(751, 4, 'Huyện Nguyên Bình', NULL, NULL),
(752, 4, 'Huyện Thạch An', NULL, NULL),
(753, 5, 'Thành Phố Bắc Kạn', NULL, NULL),
(754, 5, 'Huyện Pác Nặm', NULL, NULL),
(755, 5, 'Huyện Ba Bể', NULL, NULL),
(756, 5, 'Huyện Ngân Sơn', NULL, NULL),
(757, 5, 'Huyện Bạch Thông', NULL, NULL),
(758, 5, 'Huyện Chợ Đồn', NULL, NULL),
(759, 5, 'Huyện Chợ Mới', NULL, NULL),
(760, 5, 'Huyện Na Rì', NULL, NULL),
(761, 6, 'Thành phố Tuyên Quang', NULL, NULL),
(762, 6, 'Huyện Lâm Bình', NULL, NULL),
(763, 6, 'Huyện Nà Hang', NULL, NULL),
(764, 6, 'Huyện Chiêm Hóa', NULL, NULL),
(765, 6, 'Huyện Hàm Yên', NULL, NULL),
(766, 6, 'Huyện Yên Sơn', NULL, NULL),
(767, 6, 'Huyện Sơn Dương', NULL, NULL),
(768, 7, 'Thành phố Lào Cai', NULL, NULL),
(769, 7, 'Huyện Bát Xát', NULL, NULL),
(770, 7, 'Huyện Mường Khương', NULL, NULL),
(771, 7, 'Huyện Si Ma Cai', NULL, NULL),
(772, 7, 'Huyện Bắc Hà', NULL, NULL),
(773, 7, 'Huyện Bảo Thắng', NULL, NULL),
(774, 7, 'Huyện Bảo Yên', NULL, NULL),
(775, 7, 'Huyện Sa Pa', NULL, NULL),
(776, 7, 'Huyện Văn Bàn', NULL, NULL),
(777, 8, 'Thành phố Điện Biên Phủ', NULL, NULL),
(778, 8, 'Thị Xã Mường Lay', NULL, NULL),
(779, 8, 'Huyện Mường Nhé', NULL, NULL),
(780, 8, 'Huyện Mường Chà', NULL, NULL),
(781, 8, 'Huyện Tủa Chùa', NULL, NULL),
(782, 8, 'Huyện Tuần Giáo', NULL, NULL),
(783, 8, 'Huyện Điện Biên', NULL, NULL),
(784, 8, 'Huyện Điện Biên Đông', NULL, NULL),
(785, 8, 'Huyện Mường Ảng', NULL, NULL),
(786, 8, 'Huyện Nậm Pồ', NULL, NULL),
(787, 9, 'Thành phố Lai Châu', NULL, NULL),
(788, 9, 'Huyện Tam Đường', NULL, NULL),
(789, 9, 'Huyện Mường Tè', NULL, NULL),
(790, 9, 'Huyện Sìn Hồ', NULL, NULL),
(791, 9, 'Huyện Phong Thổ', NULL, NULL),
(792, 9, 'Huyện Than Uyên', NULL, NULL),
(793, 9, 'Huyện Tân Uyên', NULL, NULL),
(794, 9, 'Huyện Nậm Nhùn', NULL, NULL),
(795, 10, 'Thành phố Sơn La', NULL, NULL),
(796, 10, 'Huyện Quỳnh Nhai', NULL, NULL),
(797, 10, 'Huyện Thuận Châu', NULL, NULL),
(798, 10, 'Huyện Mường La', NULL, NULL),
(799, 10, 'Huyện Bắc Yên', NULL, NULL),
(800, 10, 'Huyện Phù Yên', NULL, NULL),
(801, 10, 'Huyện Mộc Châu', NULL, NULL),
(802, 10, 'Huyện Yên Châu', NULL, NULL),
(803, 10, 'Huyện Mai Sơn', NULL, NULL),
(804, 10, 'Huyện Sông Mã', NULL, NULL),
(805, 10, 'Huyện Sốp Cộp', NULL, NULL),
(806, 10, 'Huyện Vân Hồ', NULL, NULL),
(807, 11, 'Thành phố Yên Bái', NULL, NULL),
(808, 11, 'Thị xã Nghĩa Lộ', NULL, NULL),
(809, 11, 'Huyện Lục Yên', NULL, NULL),
(810, 11, 'Huyện Văn Yên', NULL, NULL),
(811, 11, 'Huyện Mù Căng Chải', NULL, NULL),
(812, 11, 'Huyện Trấn Yên', NULL, NULL),
(813, 11, 'Huyện Trạm Tấu', NULL, NULL),
(814, 11, 'Huyện Văn Chấn', NULL, NULL),
(815, 11, 'Huyện Yên Bình', NULL, NULL),
(816, 12, 'Thành phố Hòa Bình', NULL, NULL),
(817, 12, 'Huyện Đà Bắc', NULL, NULL),
(818, 12, 'Huyện Kỳ Sơn', NULL, NULL),
(819, 12, 'Huyện Lương Sơn', NULL, NULL),
(820, 12, 'Huyện Kim Bôi', NULL, NULL),
(821, 12, 'Huyện Cao Phong', NULL, NULL),
(822, 12, 'Huyện Tân Lạc', NULL, NULL),
(823, 12, 'Huyện Mai Châu', NULL, NULL),
(824, 12, 'Huyện Lạc Sơn', NULL, NULL),
(825, 12, 'Huyện Yên Thủy', NULL, NULL),
(826, 12, 'Huyện Lạc Thủy', NULL, NULL),
(827, 13, 'Thành phố Thái Nguyên', NULL, NULL),
(828, 13, 'Thành phố Sông Công', NULL, NULL),
(829, 13, 'Huyện Định Hóa', NULL, NULL),
(830, 13, 'Huyện Phú Lương', NULL, NULL),
(831, 13, 'Huyện Đồng Hỷ', NULL, NULL),
(832, 13, 'Huyện Võ Nhai', NULL, NULL),
(833, 13, 'Huyện Đại Từ', NULL, NULL),
(834, 13, 'Thị xã Phổ Yên', NULL, NULL),
(835, 13, 'Huyện Phú Bình', NULL, NULL),
(836, 14, 'Thành phố Lạng Sơn', NULL, NULL),
(837, 14, 'Huyện Tràng Định', NULL, NULL),
(838, 14, 'Huyện Bình Gia', NULL, NULL),
(839, 14, 'Huyện Văn Lãng', NULL, NULL),
(840, 14, 'Huyện Cao Lộc', NULL, NULL),
(841, 14, 'Huyện Văn Quan', NULL, NULL),
(842, 14, 'Huyện Bắc Sơn', NULL, NULL),
(843, 14, 'Huyện Hữu Lũng', NULL, NULL),
(844, 14, 'Huyện Chi Lăng', NULL, NULL),
(845, 14, 'Huyện Lộc Bình', NULL, NULL),
(846, 14, 'Huyện Đình Lập', NULL, NULL),
(847, 15, 'Thành phố Hạ Long', NULL, NULL),
(848, 15, 'Thành phố Móng Cái', NULL, NULL),
(849, 15, 'Thành phố Cẩm Phả', NULL, NULL),
(850, 15, 'Thành phố Uông Bí', NULL, NULL),
(851, 15, 'Huyện Bình Liêu', NULL, NULL),
(852, 15, 'Huyện Tiên Yên', NULL, NULL),
(853, 15, 'Huyện Đầm Hà', NULL, NULL),
(854, 15, 'Huyện Hải Hà', NULL, NULL),
(855, 15, 'Huyện Ba Chẽ', NULL, NULL),
(856, 15, 'Huyện Vân Đồn', NULL, NULL),
(857, 15, 'Huyện Hoành Bồ', NULL, NULL),
(858, 15, 'Thị xã Đông Triều', NULL, NULL),
(859, 15, 'Thị xã Quảng Yên', NULL, NULL),
(860, 15, 'Huyện Cô Tô', NULL, NULL),
(861, 16, 'Thành phố Bắc Giang', NULL, NULL),
(862, 16, 'Huyện Yên Thế', NULL, NULL),
(863, 16, 'Huyện Tân Yên', NULL, NULL),
(864, 16, 'Huyện Lạng Giang', NULL, NULL),
(865, 16, 'Huyện Lục Nam', NULL, NULL),
(866, 16, 'Huyện Lục Ngạn', NULL, NULL),
(867, 16, 'Huyện Sơn Động', NULL, NULL),
(868, 16, 'Huyện Yên Dũng', NULL, NULL),
(869, 16, 'Huyện Việt Yên', NULL, NULL),
(870, 16, 'Huyện Hiệp Hòa', NULL, NULL),
(871, 17, 'Thành phố Việt Trì', NULL, NULL),
(872, 17, 'Thị xã Phú Thọ', NULL, NULL),
(873, 17, 'Huyện Đoan Hùng', NULL, NULL),
(874, 17, 'Huyện Hạ Hoà', NULL, NULL),
(875, 17, 'Huyện Thanh Ba', NULL, NULL),
(876, 17, 'Huyện Phù Ninh', NULL, NULL),
(877, 17, 'Huyện Yên Lập', NULL, NULL),
(878, 17, 'Huyện Cẩm Khê', NULL, NULL),
(879, 17, 'Huyện Tam Nông', NULL, NULL),
(880, 17, 'Huyện Lâm Thao', NULL, NULL),
(881, 17, 'Huyện Thanh Sơn', NULL, NULL),
(882, 17, 'Huyện Thanh Thuỷ', NULL, NULL),
(883, 17, 'Huyện Tân Sơn', NULL, NULL),
(884, 18, 'Thành phố Vĩnh Yên', NULL, NULL),
(885, 18, 'Thị xã Phúc Yên', NULL, NULL),
(886, 18, 'Huyện Lập Thạch', NULL, NULL),
(887, 18, 'Huyện Tam Dương', NULL, NULL),
(888, 18, 'Huyện Tam Đảo', NULL, NULL),
(889, 18, 'Huyện Bình Xuyên', NULL, NULL),
(890, 2, 'Huyện Mê Linh', NULL, NULL),
(891, 18, 'Huyện Yên Lạc', NULL, NULL),
(892, 18, 'Huyện Vĩnh Tường', NULL, NULL),
(893, 18, 'Huyện Sông Lô', NULL, NULL),
(894, 19, 'Thành phố Bắc Ninh', NULL, NULL),
(895, 19, 'Huyện Yên Phong', NULL, NULL),
(896, 19, 'Huyện Quế Võ', NULL, NULL),
(897, 19, 'Huyện Tiên Du', NULL, NULL),
(898, 19, 'Thị xã Từ Sơn', NULL, NULL),
(899, 19, 'Huyện Thuận Thành', NULL, NULL),
(900, 19, 'Huyện Gia Bình', NULL, NULL),
(901, 19, 'Huyện Lương Tài', NULL, NULL),
(902, 2, 'Quận Hà Đông', NULL, NULL),
(903, 2, 'Thị xã Sơn Tây', NULL, NULL),
(904, 2, 'Huyện Ba Vì', NULL, NULL),
(905, 2, 'Huyện Phúc Thọ', NULL, NULL),
(906, 2, 'Huyện Đan Phượng', NULL, NULL),
(907, 2, 'Huyện Hoài Đức', NULL, NULL),
(908, 2, 'Huyện Quốc Oai', NULL, NULL),
(909, 2, 'Huyện Thạch Thất', NULL, NULL),
(910, 2, 'Huyện Chương Mỹ', NULL, NULL),
(911, 2, 'Huyện Thanh Oai', NULL, NULL),
(912, 2, 'Huyện Thường Tín', NULL, NULL),
(913, 2, 'Huyện Phú Xuyên', NULL, NULL),
(914, 2, 'Huyện Ứng Hòa', NULL, NULL),
(915, 2, 'Huyện Mỹ Đức', NULL, NULL),
(916, 20, 'Thành phố Hải Dương', NULL, NULL),
(917, 20, 'Thị xã Chí Linh', NULL, NULL),
(918, 20, 'Huyện Nam Sách', NULL, NULL),
(919, 20, 'Huyện Kinh Môn', NULL, NULL),
(920, 20, 'Huyện Kim Thành', NULL, NULL),
(921, 20, 'Huyện Thanh Hà', NULL, NULL),
(922, 20, 'Huyện Cẩm Giàng', NULL, NULL),
(923, 20, 'Huyện Bình Giang', NULL, NULL),
(924, 20, 'Huyện Gia Lộc', NULL, NULL),
(925, 20, 'Huyện Tứ Kỳ', NULL, NULL),
(926, 20, 'Huyện Ninh Giang', NULL, NULL),
(927, 20, 'Huyện Thanh Miện', NULL, NULL),
(928, 21, 'Quận Hồng Bàng', NULL, NULL),
(929, 21, 'Quận Ngô Quyền', NULL, NULL),
(930, 21, 'Quận Lê Chân', NULL, NULL),
(931, 21, 'Quận Hải An', NULL, NULL),
(932, 21, 'Quận Kiến An', NULL, NULL),
(933, 21, 'Quận Đồ Sơn', NULL, NULL),
(934, 21, 'Quận Dương Kinh', NULL, NULL),
(935, 21, 'Huyện Thuỷ Nguyên', NULL, NULL),
(936, 21, 'Huyện An Dương', NULL, NULL),
(937, 21, 'Huyện An Lão', NULL, NULL),
(938, 21, 'Huyện Kiến Thuỵ', NULL, NULL),
(939, 21, 'Huyện Tiên Lãng', NULL, NULL),
(940, 21, 'Huyện Vĩnh Bảo', NULL, NULL),
(941, 21, 'Huyện Cát Hải', NULL, NULL),
(942, 21, 'Huyện Bạch Long Vĩ', NULL, NULL),
(943, 22, 'Thành phố Hưng Yên', NULL, NULL),
(944, 22, 'Huyện Văn Lâm', NULL, NULL),
(945, 22, 'Huyện Văn Giang', NULL, NULL),
(946, 22, 'Huyện Yên Mỹ', NULL, NULL),
(947, 22, 'Huyện Mỹ Hào', NULL, NULL),
(948, 22, 'Huyện Ân Thi', NULL, NULL),
(949, 22, 'Huyện Khoái Châu', NULL, NULL),
(950, 22, 'Huyện Kim Động', NULL, NULL),
(951, 22, 'Huyện Tiên Lữ', NULL, NULL),
(952, 22, 'Huyện Phù Cừ', NULL, NULL),
(953, 23, 'Thành phố Thái Bình', NULL, NULL),
(954, 23, 'Huyện Quỳnh Phụ', NULL, NULL),
(955, 23, 'Huyện Hưng Hà', NULL, NULL),
(956, 23, 'Huyện Đông Hưng', NULL, NULL),
(957, 23, 'Huyện Thái Thụy', NULL, NULL),
(958, 23, 'Huyện Tiền Hải', NULL, NULL),
(959, 23, 'Huyện Kiến Xương', NULL, NULL),
(960, 23, 'Huyện Vũ Thư', NULL, NULL),
(961, 24, 'Thành phố Phủ Lý', NULL, NULL),
(962, 24, 'Huyện Duy Tiên', NULL, NULL),
(963, 24, 'Huyện Kim Bảng', NULL, NULL),
(964, 24, 'Huyện Thanh Liêm', NULL, NULL),
(965, 24, 'Huyện Bình Lục', NULL, NULL),
(966, 24, 'Huyện Lý Nhân', NULL, NULL),
(967, 25, 'Thành phố Nam Định', NULL, NULL),
(968, 25, 'Huyện Mỹ Lộc', NULL, NULL),
(969, 25, 'Huyện Vụ Bản', NULL, NULL),
(970, 25, 'Huyện Ý Yên', NULL, NULL),
(971, 25, 'Huyện Nghĩa Hưng', NULL, NULL),
(972, 25, 'Huyện Nam Trực', NULL, NULL),
(973, 25, 'Huyện Trực Ninh', NULL, NULL),
(974, 25, 'Huyện Xuân Trường', NULL, NULL),
(975, 25, 'Huyện Giao Thủy', NULL, NULL),
(976, 25, 'Huyện Hải Hậu', NULL, NULL),
(977, 26, 'Thành phố Ninh Bình', NULL, NULL),
(978, 26, 'Thành phố Tam Điệp', NULL, NULL),
(979, 26, 'Huyện Nho Quan', NULL, NULL),
(980, 26, 'Huyện Gia Viễn', NULL, NULL),
(981, 26, 'Huyện Hoa Lư', NULL, NULL),
(982, 26, 'Huyện Yên Khánh', NULL, NULL),
(983, 26, 'Huyện Kim Sơn', NULL, NULL),
(984, 26, 'Huyện Yên Mô', NULL, NULL),
(985, 27, 'Thành phố Thanh Hóa', NULL, NULL),
(986, 27, 'Thị xã Bỉm Sơn', NULL, NULL),
(987, 27, 'Thị xã Sầm Sơn', NULL, NULL),
(988, 27, 'Huyện Mường Lát', NULL, NULL),
(989, 27, 'Huyện Quan Hóa', NULL, NULL),
(990, 27, 'Huyện Bá Thước', NULL, NULL),
(991, 27, 'Huyện Quan Sơn', NULL, NULL),
(992, 27, 'Huyện Lang Chánh', NULL, NULL),
(993, 27, 'Huyện Ngọc Lặc', NULL, NULL),
(994, 27, 'Huyện Cẩm Thủy', NULL, NULL),
(995, 27, 'Huyện Thạch Thành', NULL, NULL),
(996, 27, 'Huyện Hà Trung', NULL, NULL),
(997, 27, 'Huyện Vĩnh Lộc', NULL, NULL),
(998, 27, 'Huyện Yên Định', NULL, NULL),
(999, 27, 'Huyện Thọ Xuân', NULL, NULL),
(1000, 27, 'Huyện Thường Xuân', NULL, NULL),
(1001, 27, 'Huyện Triệu Sơn', NULL, NULL),
(1002, 27, 'Huyện Thiệu Hóa', NULL, NULL),
(1003, 27, 'Huyện Hoằng Hóa', NULL, NULL),
(1004, 27, 'Huyện Hậu Lộc', NULL, NULL),
(1005, 27, 'Huyện Nga Sơn', NULL, NULL),
(1006, 27, 'Huyện Như Xuân', NULL, NULL),
(1007, 27, 'Huyện Như Thanh', NULL, NULL),
(1008, 27, 'Huyện Nông Cống', NULL, NULL),
(1009, 27, 'Huyện Đông Sơn', NULL, NULL),
(1010, 27, 'Huyện Quảng Xương', NULL, NULL),
(1011, 27, 'Huyện Tĩnh Gia', NULL, NULL),
(1012, 28, 'Thành phố Vinh', NULL, NULL),
(1013, 28, 'Thị xã Cửa Lò', NULL, NULL),
(1014, 28, 'Thị xã Thái Hoà', NULL, NULL),
(1015, 28, 'Huyện Quế Phong', NULL, NULL),
(1016, 28, 'Huyện Quỳ Châu', NULL, NULL),
(1017, 28, 'Huyện Kỳ Sơn', NULL, NULL),
(1018, 28, 'Huyện Tương Dương', NULL, NULL),
(1019, 28, 'Huyện Nghĩa Đàn', NULL, NULL),
(1020, 28, 'Huyện Quỳ Hợp', NULL, NULL),
(1021, 28, 'Huyện Quỳnh Lưu', NULL, NULL),
(1022, 28, 'Huyện Con Cuông', NULL, NULL),
(1023, 28, 'Huyện Tân Kỳ', NULL, NULL),
(1024, 28, 'Huyện Anh Sơn', NULL, NULL),
(1025, 28, 'Huyện Diễn Châu', NULL, NULL),
(1026, 28, 'Huyện Yên Thành', NULL, NULL),
(1027, 28, 'Huyện Đô Lương', NULL, NULL),
(1028, 28, 'Huyện Thanh Chương', NULL, NULL),
(1029, 28, 'Huyện Nghi Lộc', NULL, NULL),
(1030, 28, 'Huyện Nam Đàn', NULL, NULL),
(1031, 28, 'Huyện Hưng Nguyên', NULL, NULL),
(1032, 28, 'Thị xã Hoàng Mai', NULL, NULL),
(1033, 29, 'Thành phố Hà Tĩnh', NULL, NULL),
(1034, 29, 'Thị xã Hồng Lĩnh', NULL, NULL),
(1035, 29, 'Huyện Hương Sơn', NULL, NULL),
(1036, 29, 'Huyện Đức Thọ', NULL, NULL),
(1037, 29, 'Huyện Vũ Quang', NULL, NULL),
(1038, 29, 'Huyện Nghi Xuân', NULL, NULL),
(1039, 29, 'Huyện Can Lộc', NULL, NULL),
(1040, 29, 'Huyện Hương Khê', NULL, NULL),
(1041, 29, 'Huyện Thạch Hà', NULL, NULL),
(1042, 29, 'Huyện Cẩm Xuyên', NULL, NULL),
(1043, 29, 'Huyện Kỳ Anh', NULL, NULL),
(1044, 29, 'Huyện Lộc Hà', NULL, NULL),
(1045, 29, 'Thị xã Kỳ Anh', NULL, NULL),
(1046, 30, 'Thành Phố Đồng Hới', NULL, NULL),
(1047, 30, 'Huyện Minh Hóa', NULL, NULL),
(1048, 30, 'Huyện Tuyên Hóa', NULL, NULL),
(1049, 30, 'Huyện Quảng Trạch', NULL, NULL),
(1050, 30, 'Huyện Bố Trạch', NULL, NULL),
(1051, 30, 'Huyện Quảng Ninh', NULL, NULL),
(1052, 30, 'Huyện Lệ Thủy', NULL, NULL),
(1053, 30, 'Thị xã Ba Đồn', NULL, NULL),
(1054, 31, 'Thành phố Đông Hà', NULL, NULL),
(1055, 31, 'Thị xã Quảng Trị', NULL, NULL),
(1056, 31, 'Huyện Vĩnh Linh', NULL, NULL),
(1057, 31, 'Huyện Hướng Hóa', NULL, NULL),
(1058, 31, 'Huyện Gio Linh', NULL, NULL),
(1059, 31, 'Huyện Đa Krông', NULL, NULL),
(1060, 31, 'Huyện Cam Lộ', NULL, NULL),
(1061, 31, 'Huyện Triệu Phong', NULL, NULL),
(1062, 31, 'Huyện Hải Lăng', NULL, NULL),
(1063, 31, 'Huyện Cồn Cỏ', NULL, NULL),
(1064, 32, 'Thành phố Huế', NULL, NULL),
(1065, 32, 'Huyện Phong Điền', NULL, NULL),
(1066, 32, 'Huyện Quảng Điền', NULL, NULL),
(1067, 32, 'Huyện Phú Vang', NULL, NULL),
(1068, 32, 'Thị xã Hương Thủy', NULL, NULL),
(1069, 32, 'Thị xã Hương Trà', NULL, NULL),
(1070, 32, 'Huyện A Lưới', NULL, NULL),
(1071, 32, 'Huyện Phú Lộc', NULL, NULL),
(1072, 32, 'Huyện Nam Đông', NULL, NULL),
(1073, 33, 'Quận Liên Chiểu', NULL, NULL),
(1074, 33, 'Quận Thanh Khê', NULL, NULL),
(1075, 33, 'Quận Hải Châu', NULL, NULL),
(1076, 33, 'Quận Sơn Trà', NULL, NULL),
(1077, 33, 'Quận Ngũ Hành Sơn', NULL, NULL),
(1078, 33, 'Quận Cẩm Lệ', NULL, NULL),
(1079, 33, 'Huyện Hòa Vang', NULL, NULL),
(1080, 33, 'Huyện Hoàng Sa', NULL, NULL),
(1081, 34, 'Thành phố Tam Kỳ', NULL, NULL),
(1082, 34, 'Thành phố Hội An', NULL, NULL),
(1083, 34, 'Huyện Tây Giang', NULL, NULL),
(1084, 34, 'Huyện Đông Giang', NULL, NULL),
(1085, 34, 'Huyện Đại Lộc', NULL, NULL),
(1086, 34, 'Thị xã Điện Bàn', NULL, NULL),
(1087, 34, 'Huyện Duy Xuyên', NULL, NULL),
(1088, 34, 'Huyện Quế Sơn', NULL, NULL),
(1089, 34, 'Huyện Nam Giang', NULL, NULL),
(1090, 34, 'Huyện Phước Sơn', NULL, NULL),
(1091, 34, 'Huyện Hiệp Đức', NULL, NULL),
(1092, 34, 'Huyện Thăng Bình', NULL, NULL),
(1093, 34, 'Huyện Tiên Phước', NULL, NULL),
(1094, 34, 'Huyện Bắc Trà My', NULL, NULL),
(1095, 34, 'Huyện Nam Trà My', NULL, NULL),
(1096, 34, 'Huyện Núi Thành', NULL, NULL),
(1097, 34, 'Huyện Phú Ninh', NULL, NULL),
(1098, 34, 'Huyện Nông Sơn', NULL, NULL),
(1099, 35, 'Thành phố Quảng Ngãi', NULL, NULL),
(1100, 35, 'Huyện Bình Sơn', NULL, NULL),
(1101, 35, 'Huyện Trà Bồng', NULL, NULL),
(1102, 35, 'Huyện Tây Trà', NULL, NULL),
(1103, 35, 'Huyện Sơn Tịnh', NULL, NULL),
(1104, 35, 'Huyện Tư Nghĩa', NULL, NULL),
(1105, 35, 'Huyện Sơn Hà', NULL, NULL),
(1106, 35, 'Huyện Sơn Tây', NULL, NULL),
(1107, 35, 'Huyện Minh Long', NULL, NULL),
(1108, 35, 'Huyện Nghĩa Hành', NULL, NULL),
(1109, 35, 'Huyện Mộ Đức', NULL, NULL),
(1110, 35, 'Huyện Đức Phổ', NULL, NULL),
(1111, 35, 'Huyện Ba Tơ', NULL, NULL),
(1112, 35, 'Huyện Lý Sơn', NULL, NULL),
(1113, 36, 'Thành phố Qui Nhơn', NULL, NULL),
(1114, 36, 'Huyện An Lão', NULL, NULL),
(1115, 36, 'Huyện Hoài Nhơn', NULL, NULL),
(1116, 36, 'Huyện Hoài Ân', NULL, NULL),
(1117, 36, 'Huyện Phù Mỹ', NULL, NULL),
(1118, 36, 'Huyện Vĩnh Thạnh', NULL, NULL),
(1119, 36, 'Huyện Tây Sơn', NULL, NULL),
(1120, 36, 'Huyện Phù Cát', NULL, NULL),
(1121, 36, 'Thị xã An Nhơn', NULL, NULL),
(1122, 36, 'Huyện Tuy Phước', NULL, NULL),
(1123, 36, 'Huyện Vân Canh', NULL, NULL),
(1124, 37, 'Thành phố Tuy Hoà', NULL, NULL),
(1125, 37, 'Thị xã Sông Cầu', NULL, NULL),
(1126, 37, 'Huyện Đồng Xuân', NULL, NULL),
(1127, 37, 'Huyện Tuy An', NULL, NULL),
(1128, 37, 'Huyện Sơn Hòa', NULL, NULL),
(1129, 37, 'Huyện Sông Hinh', NULL, NULL),
(1130, 37, 'Huyện Tây Hoà', NULL, NULL),
(1131, 37, 'Huyện Phú Hoà', NULL, NULL),
(1132, 37, 'Huyện Đông Hòa', NULL, NULL),
(1133, 38, 'Thành phố Nha Trang', NULL, NULL),
(1134, 38, 'Thành phố Cam Ranh', NULL, NULL),
(1135, 38, 'Huyện Cam Lâm', NULL, NULL),
(1136, 38, 'Huyện Vạn Ninh', NULL, NULL),
(1137, 38, 'Thị xã Ninh Hòa', NULL, NULL),
(1138, 38, 'Huyện Khánh Vĩnh', NULL, NULL),
(1139, 38, 'Huyện Diên Khánh', NULL, NULL),
(1140, 38, 'Huyện Khánh Sơn', NULL, NULL),
(1141, 38, 'Huyện Trường Sa', NULL, NULL),
(1142, 39, 'Thành phố Phan Rang-Tháp Chàm', NULL, NULL),
(1143, 39, 'Huyện Bác Ái', NULL, NULL),
(1144, 39, 'Huyện Ninh Sơn', NULL, NULL),
(1145, 39, 'Huyện Ninh Hải', NULL, NULL),
(1146, 39, 'Huyện Ninh Phước', NULL, NULL),
(1147, 39, 'Huyện Thuận Bắc', NULL, NULL),
(1148, 39, 'Huyện Thuận Nam', NULL, NULL),
(1149, 40, 'Thành phố Phan Thiết', NULL, NULL),
(1150, 40, 'Thị xã La Gi', NULL, NULL),
(1151, 40, 'Huyện Tuy Phong', NULL, NULL),
(1152, 40, 'Huyện Bắc Bình', NULL, NULL),
(1153, 40, 'Huyện Hàm Thuận Bắc', NULL, NULL),
(1154, 40, 'Huyện Hàm Thuận Nam', NULL, NULL),
(1155, 40, 'Huyện Tánh Linh', NULL, NULL),
(1156, 40, 'Huyện Đức Linh', NULL, NULL),
(1157, 40, 'Huyện Hàm Tân', NULL, NULL),
(1158, 40, 'Huyện Phú Quí', NULL, NULL),
(1159, 41, 'Thành phố Kon Tum', NULL, NULL),
(1160, 41, 'Huyện Đắk Glei', NULL, NULL),
(1161, 41, 'Huyện Ngọc Hồi', NULL, NULL),
(1162, 41, 'Huyện Đắk Tô', NULL, NULL),
(1163, 41, 'Huyện Kon Plông', NULL, NULL),
(1164, 41, 'Huyện Kon Rẫy', NULL, NULL),
(1165, 41, 'Huyện Đắk Hà', NULL, NULL),
(1166, 41, 'Huyện Sa Thầy', NULL, NULL),
(1167, 41, 'Huyện Tu Mơ Rông', NULL, NULL),
(1168, 41, 'Huyện Ia H\' Drai', NULL, NULL),
(1169, 42, 'Thành phố Pleiku', NULL, NULL),
(1170, 42, 'Thị xã An Khê', NULL, NULL),
(1171, 42, 'Thị xã Ayun Pa', NULL, NULL),
(1172, 42, 'Huyện KBang', NULL, NULL),
(1173, 42, 'Huyện Đăk Đoa', NULL, NULL),
(1174, 42, 'Huyện Chư Păh', NULL, NULL),
(1175, 42, 'Huyện Ia Grai', NULL, NULL),
(1176, 42, 'Huyện Mang Yang', NULL, NULL),
(1177, 42, 'Huyện Kông Chro', NULL, NULL),
(1178, 42, 'Huyện Đức Cơ', NULL, NULL),
(1179, 42, 'Huyện Chư Prông', NULL, NULL),
(1180, 42, 'Huyện Chư Sê', NULL, NULL),
(1181, 42, 'Huyện Đăk Pơ', NULL, NULL),
(1182, 42, 'Huyện Ia Pa', NULL, NULL),
(1183, 42, 'Huyện Krông Pa', NULL, NULL),
(1184, 42, 'Huyện Phú Thiện', NULL, NULL),
(1185, 42, 'Huyện Chư Pưh', NULL, NULL),
(1186, 43, 'Thành phố Buôn Ma Thuột', NULL, NULL),
(1187, 43, 'Thị Xã Buôn Hồ', NULL, NULL),
(1188, 43, 'Huyện Ea H\'leo', NULL, NULL),
(1189, 43, 'Huyện Ea Súp', NULL, NULL),
(1190, 43, 'Huyện Buôn Đôn', NULL, NULL),
(1191, 43, 'Huyện Cư M\'gar', NULL, NULL),
(1192, 43, 'Huyện Krông Búk', NULL, NULL),
(1193, 43, 'Huyện Krông Năng', NULL, NULL),
(1194, 43, 'Huyện Ea Kar', NULL, NULL),
(1195, 43, 'Huyện M\'Đrắk', NULL, NULL),
(1196, 43, 'Huyện Krông Bông', NULL, NULL),
(1197, 43, 'Huyện Krông Pắc', NULL, NULL),
(1198, 43, 'Huyện Krông A Na', NULL, NULL),
(1199, 43, 'Huyện Lắk', NULL, NULL),
(1200, 43, 'Huyện Cư Kuin', NULL, NULL),
(1201, 44, 'Thị xã Gia Nghĩa', NULL, NULL),
(1202, 44, 'Huyện Đăk Glong', NULL, NULL),
(1203, 44, 'Huyện Cư Jút', NULL, NULL),
(1204, 44, 'Huyện Đắk Mil', NULL, NULL),
(1205, 44, 'Huyện Krông Nô', NULL, NULL),
(1206, 44, 'Huyện Đắk Song', NULL, NULL),
(1207, 44, 'Huyện Đắk R\'Lấp', NULL, NULL),
(1208, 44, 'Huyện Tuy Đức', NULL, NULL),
(1209, 45, 'Thành phố Đà Lạt', NULL, NULL),
(1210, 45, 'Thành phố Bảo Lộc', NULL, NULL),
(1211, 45, 'Huyện Đam Rông', NULL, NULL),
(1212, 45, 'Huyện Lạc Dương', NULL, NULL),
(1213, 45, 'Huyện Lâm Hà', NULL, NULL),
(1214, 45, 'Huyện Đơn Dương', NULL, NULL),
(1215, 45, 'Huyện Đức Trọng', NULL, NULL),
(1216, 45, 'Huyện Di Linh', NULL, NULL),
(1217, 45, 'Huyện Bảo Lâm', NULL, NULL),
(1218, 45, 'Huyện Đạ Huoai', NULL, NULL),
(1219, 45, 'Huyện Đạ Tẻh', NULL, NULL),
(1220, 45, 'Huyện Cát Tiên', NULL, NULL),
(1221, 46, 'Thị xã Phước Long', NULL, NULL),
(1222, 46, 'Thị xã Đồng Xoài', NULL, NULL),
(1223, 46, 'Thị xã Bình Long', NULL, NULL),
(1224, 46, 'Huyện Bù Gia Mập', NULL, NULL),
(1225, 46, 'Huyện Lộc Ninh', NULL, NULL),
(1226, 46, 'Huyện Bù Đốp', NULL, NULL),
(1227, 46, 'Huyện Hớn Quản', NULL, NULL),
(1228, 46, 'Huyện Đồng Phú', NULL, NULL),
(1229, 46, 'Huyện Bù Đăng', NULL, NULL),
(1230, 46, 'Huyện Chơn Thành', NULL, NULL),
(1231, 46, 'Huyện Phú Riềng', NULL, NULL),
(1232, 47, 'Thành phố Tây Ninh', NULL, NULL),
(1233, 47, 'Huyện Tân Biên', NULL, NULL),
(1234, 47, 'Huyện Tân Châu', NULL, NULL),
(1235, 47, 'Huyện Dương Minh Châu', NULL, NULL),
(1236, 47, 'Huyện Châu Thành', NULL, NULL),
(1237, 47, 'Huyện Hòa Thành', NULL, NULL),
(1238, 47, 'Huyện Gò Dầu', NULL, NULL),
(1239, 47, 'Huyện Bến Cầu', NULL, NULL),
(1240, 47, 'Huyện Trảng Bàng', NULL, NULL),
(1241, 48, 'Thành phố Thủ Dầu Một', NULL, NULL),
(1242, 48, 'Huyện Bàu Bàng', NULL, NULL),
(1243, 48, 'Huyện Dầu Tiếng', NULL, NULL),
(1244, 48, 'Thị xã Bến Cát', NULL, NULL),
(1245, 48, 'Huyện Phú Giáo', NULL, NULL),
(1246, 48, 'Thị xã Tân Uyên', NULL, NULL),
(1247, 48, 'Thị xã Dĩ An', NULL, NULL),
(1248, 48, 'Thị xã Thuận An', NULL, NULL),
(1249, 48, 'Huyện Bắc Tân Uyên', NULL, NULL),
(1250, 49, 'Thành phố Biên Hòa', NULL, NULL),
(1251, 49, 'Thị xã Long Khánh', NULL, NULL),
(1252, 49, 'Huyện Tân Phú', NULL, NULL),
(1253, 49, 'Huyện Vĩnh Cửu', NULL, NULL),
(1254, 49, 'Huyện Định Quán', NULL, NULL),
(1255, 49, 'Huyện Trảng Bom', NULL, NULL),
(1256, 49, 'Huyện Thống Nhất', NULL, NULL),
(1257, 49, 'Huyện Cẩm Mỹ', NULL, NULL),
(1258, 49, 'Huyện Long Thành', NULL, NULL),
(1259, 49, 'Huyện Xuân Lộc', NULL, NULL),
(1260, 49, 'Huyện Nhơn Trạch', NULL, NULL),
(1261, 50, 'Thành phố Vũng Tàu', NULL, NULL),
(1262, 50, 'Thành phố Bà Rịa', NULL, NULL),
(1263, 50, 'Huyện Châu Đức', NULL, NULL),
(1264, 50, 'Huyện Xuyên Mộc', NULL, NULL),
(1265, 50, 'Huyện Long Điền', NULL, NULL),
(1266, 50, 'Huyện Đất Đỏ', NULL, NULL),
(1267, 50, 'Huyện Tân Thành', NULL, NULL),
(1268, 50, 'Huyện Côn Đảo', NULL, NULL),
(1269, 51, 'Quận 1', NULL, NULL),
(1270, 51, 'Quận 12', NULL, NULL),
(1271, 51, 'Quận Thủ Đức', NULL, NULL),
(1272, 51, 'Quận 9', NULL, NULL),
(1273, 51, 'Quận Gò Vấp', NULL, NULL),
(1274, 51, 'Quận Bình Thạnh', NULL, NULL),
(1275, 51, 'Quận Tân Bình', NULL, NULL),
(1276, 51, 'Quận Tân Phú', NULL, NULL),
(1277, 51, 'Quận Phú Nhuận', NULL, NULL),
(1278, 51, 'Quận 2', NULL, NULL),
(1279, 51, 'Quận 3', NULL, NULL),
(1280, 51, 'Quận 10', NULL, NULL),
(1281, 51, 'Quận 11', NULL, NULL),
(1282, 51, 'Quận 4', NULL, NULL),
(1283, 51, 'Quận 5', NULL, NULL),
(1284, 51, 'Quận 6', NULL, NULL),
(1285, 51, 'Quận 8', NULL, NULL),
(1286, 51, 'Quận Bình Tân', NULL, NULL),
(1287, 51, 'Quận 7', NULL, NULL),
(1288, 51, 'Huyện Củ Chi', NULL, NULL),
(1289, 51, 'Huyện Hóc Môn', NULL, NULL),
(1290, 51, 'Huyện Bình Chánh', NULL, NULL),
(1291, 51, 'Huyện Nhà Bè', NULL, NULL),
(1292, 51, 'Huyện Cần Giờ', NULL, NULL),
(1293, 52, 'Thành phố Tân An', NULL, NULL),
(1294, 52, 'Thị xã Kiến Tường', NULL, NULL),
(1295, 52, 'Huyện Tân Hưng', NULL, NULL),
(1296, 52, 'Huyện Vĩnh Hưng', NULL, NULL),
(1297, 52, 'Huyện Mộc Hóa', NULL, NULL),
(1298, 52, 'Huyện Tân Thạnh', NULL, NULL),
(1299, 52, 'Huyện Thạnh Hóa', NULL, NULL),
(1300, 52, 'Huyện Đức Huệ', NULL, NULL),
(1301, 52, 'Huyện Đức Hòa', NULL, NULL),
(1302, 52, 'Huyện Bến Lức', NULL, NULL),
(1303, 52, 'Huyện Thủ Thừa', NULL, NULL),
(1304, 52, 'Huyện Tân Trụ', NULL, NULL),
(1305, 52, 'Huyện Cần Đước', NULL, NULL),
(1306, 52, 'Huyện Cần Giuộc', NULL, NULL),
(1307, 52, 'Huyện Châu Thành', NULL, NULL),
(1308, 53, 'Thành phố Mỹ Tho', NULL, NULL),
(1309, 53, 'Thị xã Gò Công', NULL, NULL),
(1310, 53, 'Thị xã Cai Lậy', NULL, NULL),
(1311, 53, 'Huyện Tân Phước', NULL, NULL),
(1312, 53, 'Huyện Cái Bè', NULL, NULL),
(1313, 53, 'Huyện Cai Lậy', NULL, NULL),
(1314, 53, 'Huyện Châu Thành', NULL, NULL),
(1315, 53, 'Huyện Chợ Gạo', NULL, NULL),
(1316, 53, 'Huyện Gò Công Tây', NULL, NULL),
(1317, 53, 'Huyện Gò Công Đông', NULL, NULL),
(1318, 53, 'Huyện Tân Phú Đông', NULL, NULL),
(1319, 54, 'Thành phố Bến Tre', NULL, NULL),
(1320, 54, 'Huyện Châu Thành', NULL, NULL),
(1321, 54, 'Huyện Chợ Lách', NULL, NULL),
(1322, 54, 'Huyện Mỏ Cày Nam', NULL, NULL),
(1323, 54, 'Huyện Giồng Trôm', NULL, NULL),
(1324, 54, 'Huyện Bình Đại', NULL, NULL),
(1325, 54, 'Huyện Ba Tri', NULL, NULL),
(1326, 54, 'Huyện Thạnh Phú', NULL, NULL),
(1327, 54, 'Huyện Mỏ Cày Bắc', NULL, NULL),
(1328, 55, 'Thành phố Trà Vinh', NULL, NULL),
(1329, 55, 'Huyện Càng Long', NULL, NULL),
(1330, 55, 'Huyện Cầu Kè', NULL, NULL),
(1331, 55, 'Huyện Tiểu Cần', NULL, NULL),
(1332, 55, 'Huyện Châu Thành', NULL, NULL),
(1333, 55, 'Huyện Cầu Ngang', NULL, NULL),
(1334, 55, 'Huyện Trà Cú', NULL, NULL),
(1335, 55, 'Huyện Duyên Hải', NULL, NULL),
(1336, 55, 'Thị xã Duyên Hải', NULL, NULL),
(1337, 56, 'Thành phố Vĩnh Long', NULL, NULL),
(1338, 56, 'Huyện Long Hồ', NULL, NULL),
(1339, 56, 'Huyện Mang Thít', NULL, NULL),
(1340, 56, 'Huyện  Vũng Liêm', NULL, NULL),
(1341, 56, 'Huyện Tam Bình', NULL, NULL),
(1342, 56, 'Thị xã Bình Minh', NULL, NULL),
(1343, 56, 'Huyện Trà Ôn', NULL, NULL),
(1344, 56, 'Huyện Bình Tân', NULL, NULL),
(1345, 57, 'Thành phố Cao Lãnh', NULL, NULL),
(1346, 57, 'Thành phố Sa Đéc', NULL, NULL),
(1347, 57, 'Thị xã Hồng Ngự', NULL, NULL),
(1348, 57, 'Huyện Tân Hồng', NULL, NULL),
(1349, 57, 'Huyện Hồng Ngự', NULL, NULL),
(1350, 57, 'Huyện Tam Nông', NULL, NULL),
(1351, 57, 'Huyện Tháp Mười', NULL, NULL),
(1352, 57, 'Huyện Cao Lãnh', NULL, NULL),
(1353, 57, 'Huyện Thanh Bình', NULL, NULL),
(1354, 57, 'Huyện Lấp Vò', NULL, NULL),
(1355, 57, 'Huyện Lai Vung', NULL, NULL),
(1356, 57, 'Huyện Châu Thành', NULL, NULL),
(1357, 58, 'Thành phố Long Xuyên', NULL, NULL),
(1358, 58, 'Thành phố Châu Đốc', NULL, NULL),
(1359, 58, 'Huyện An Phú', NULL, NULL),
(1360, 58, 'Thị xã Tân Châu', NULL, NULL),
(1361, 58, 'Huyện Phú Tân', NULL, NULL),
(1362, 58, 'Huyện Châu Phú', NULL, NULL),
(1363, 58, 'Huyện Tịnh Biên', NULL, NULL),
(1364, 58, 'Huyện Tri Tôn', NULL, NULL),
(1365, 58, 'Huyện Châu Thành', NULL, NULL),
(1366, 58, 'Huyện Chợ Mới', NULL, NULL),
(1367, 58, 'Huyện Thoại Sơn', NULL, NULL),
(1368, 59, 'Thành phố Rạch Giá', NULL, NULL),
(1369, 59, 'Thị xã Hà Tiên', NULL, NULL),
(1370, 59, 'Huyện Kiên Lương', NULL, NULL),
(1371, 59, 'Huyện Hòn Đất', NULL, NULL),
(1372, 59, 'Huyện Tân Hiệp', NULL, NULL),
(1373, 59, 'Huyện Châu Thành', NULL, NULL),
(1374, 59, 'Huyện Giồng Riềng', NULL, NULL),
(1375, 59, 'Huyện Gò Quao', NULL, NULL),
(1376, 59, 'Huyện An Biên', NULL, NULL),
(1377, 59, 'Huyện An Minh', NULL, NULL),
(1378, 59, 'Huyện Vĩnh Thuận', NULL, NULL),
(1379, 59, 'Huyện Phú Quốc', NULL, NULL),
(1380, 59, 'Huyện Kiên Hải', NULL, NULL),
(1381, 59, 'Huyện U Minh Thượng', NULL, NULL),
(1382, 59, 'Huyện Giang Thành', NULL, NULL),
(1383, 60, 'Quận Ninh Kiều', NULL, NULL),
(1384, 60, 'Quận Ô Môn', NULL, NULL),
(1385, 60, 'Quận Bình Thuỷ', NULL, NULL),
(1386, 60, 'Quận Cái Răng', NULL, NULL),
(1387, 60, 'Quận Thốt Nốt', NULL, NULL),
(1388, 60, 'Huyện Vĩnh Thạnh', NULL, NULL),
(1389, 60, 'Huyện Cờ Đỏ', NULL, NULL),
(1390, 60, 'Huyện Phong Điền', NULL, NULL),
(1391, 60, 'Huyện Thới Lai', NULL, NULL),
(1392, 61, 'Thành phố Vị Thanh', NULL, NULL),
(1393, 61, 'Thị xã Ngã Bảy', NULL, NULL),
(1394, 61, 'Huyện Châu Thành A', NULL, NULL),
(1395, 61, 'Huyện Châu Thành', NULL, NULL),
(1396, 61, 'Huyện Phụng Hiệp', NULL, NULL),
(1397, 61, 'Huyện Vị Thuỷ', NULL, NULL),
(1398, 61, 'Huyện Long Mỹ', NULL, NULL),
(1399, 61, 'Thị xã Long Mỹ', NULL, NULL),
(1400, 62, 'Thành phố Sóc Trăng', NULL, NULL),
(1401, 62, 'Huyện Châu Thành', NULL, NULL),
(1402, 62, 'Huyện Kế Sách', NULL, NULL),
(1403, 62, 'Huyện Mỹ Tú', NULL, NULL),
(1404, 62, 'Huyện Cù Lao Dung', NULL, NULL),
(1405, 62, 'Huyện Long Phú', NULL, NULL),
(1406, 62, 'Huyện Mỹ Xuyên', NULL, NULL),
(1407, 62, 'Thị xã Ngã Năm', NULL, NULL),
(1408, 62, 'Huyện Thạnh Trị', NULL, NULL),
(1409, 62, 'Thị xã Vĩnh Châu', NULL, NULL),
(1410, 62, 'Huyện Trần Đề', NULL, NULL),
(1411, 63, 'Thành phố Bạc Liêu', NULL, NULL),
(1412, 63, 'Huyện Hồng Dân', NULL, NULL),
(1413, 63, 'Huyện Phước Long', NULL, NULL),
(1414, 63, 'Huyện Vĩnh Lợi', NULL, NULL),
(1415, 63, 'Thị xã Giá Rai', NULL, NULL),
(1416, 63, 'Huyện Đông Hải', NULL, NULL),
(1417, 63, 'Huyện Hoà Bình', NULL, NULL),
(1418, 64, 'Thành phố Cà Mau', NULL, NULL),
(1419, 64, 'Huyện U Minh', NULL, NULL),
(1420, 64, 'Huyện Thới Bình', NULL, NULL),
(1421, 64, 'Huyện Trần Văn Thời', NULL, NULL),
(1422, 64, 'Huyện Cái Nước', NULL, NULL),
(1423, 64, 'Huyện Đầm Dơi', NULL, NULL),
(1424, 64, 'Huyện Năm Căn', NULL, NULL),
(1425, 64, 'Huyện Phú Tân', NULL, NULL),
(1426, 64, 'Huyện Ngọc Hiển', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_level` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discribe` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name_level`, `discribe`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'Admin là từ viết tắt của “Administrator” dịch ra là người quản trị, người quản trị hay là quản trị viên. Đây là quyền cao nhất đối với quản lý viên. Với các website thì admin là người điều hành. Admin chủ yếu là online là chính với nhiều kiểu khác nhau như Admin website, diễn đàn, fanpage, blog, Admin facebook, Admin máy tính. Hoặc trong kinh doanh có Sale Admin tức là trợ lý kinh doanh.', '2020-06-05 21:21:31', '2020-06-05 21:21:31'),
(5, 'Thành viên', 'Người dùng thường của hệ thống', '2020-06-05 21:35:13', '2020-06-05 21:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_05_071002_create_levels_table', 1),
(4, '2020_06_05_072023_create_post_types_table', 1),
(5, '2020_06_05_072052_create_provinces_table', 1),
(7, '2020_06_05_072525_create_banners_table', 1),
(8, '2020_06_05_072554_create_news_table', 1),
(9, '2020_06_05_072632_create_category_child_firsts_table', 1),
(14, '2020_06_05_072710_create_districts_table', 3),
(16, '2014_10_12_100000_create_password_resets_table', 5),
(17, '2020_06_09_080644_create_banners_table', 6),
(20, '2014_10_12_000000_create_users_table', 7),
(22, '2020_06_05_072227_create_categorys_table', 8),
(29, '2020_06_05_072905_create_post_news_table', 13),
(30, '2020_06_05_072650_create_category_child_seconds_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_news`
--

CREATE TABLE `post_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_first_id` bigint(20) UNSIGNED DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` float DEFAULT NULL,
  `unit_price` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag_search` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `images` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_date_expired` int(11) DEFAULT NULL,
  `hidden_new` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `save_post` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_news`
--

INSERT INTO `post_news` (`id`, `post_type_id`, `user_id`, `category_first_id`, `province_id`, `district_id`, `title`, `price`, `unit_price`, `currency`, `content`, `tag_search`, `images`, `number_date_expired`, `hidden_new`, `status`, `save_post`, `created_at`, `updated_at`) VALUES
(1, 2, 8, 109, 50, 1262, 'Bán Villa 2 diện tích 3200m2 - Phú Mỹ, Bà Rịa Vũng Tàu', 5000000000, 'Nền', 'Đ', '<p>Cần cho thu&ecirc; hay b&aacute;n con villa 2 đầy đủ tiện nghi, s&acirc;n vườn cực rộng v&agrave; quang cảnh xung quanh tuyệt vời, rất y&ecirc;n tĩnh:<br />\r\n✅&nbsp;C&oacute; thể ở ngay để tr&aacute;nh dịch v&agrave; l&agrave;m nơi nghỉ dưỡng tuyệt vời.<br />\r\n✅&nbsp;Nếu bạn muốn mua th&igrave; xem như l&agrave; khoảng đầu tư cũng tốt (c&aacute;ch s&acirc;n bay Long Th&agrave;nh hơn 15km) trong hiện tại v&agrave; tương lai.<br />\r\n✅&nbsp;Vị tr&iacute; đẹp gần Hồ Đ&aacute; Đen<br />\r\n✅&nbsp;C&aacute;ch S&agrave;i G&ograve;n 65km, c&aacute;ch Vũng T&agrave;u 50km<br />\r\n????&nbsp;Xem to&agrave;n cảnh từ h&igrave;nh chụp flycam&nbsp;<a href=\"https://maps.app.goo.gl/TT7NtTvZPg37ecqX8\" rel=\"noopener nofollow\" target=\"_blank\">https://maps.app.goo.gl/TT7NtTvZPg37ecqX8</a><br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br />\r\n*** Diện t&iacute;ch: khoảng 3200m2<br />\r\n*** C&oacute; vườn rau đẹp, trong v&ograve;ng 10-20 ng&agrave;y c&oacute; rau sạch ăn<br />\r\n*** C&oacute; 2 cổng ở 2 mặt tiền đường, xe hơi v&agrave;o tận b&ecirc;n trong.<br />\r\n*** H&agrave;ng r&agrave;o bao quanh to&agrave;n bộ khu đất, h&agrave;ng r&agrave;o gần cổng x&acirc;y bằng đ&aacute; rất chắc chắn.<br />\r\n*** Giấy tờ đầy đủ, kh&ocirc;ng thuộc diện giải tỏa, gần đường v&agrave;nh đai 4 trong tương lai.<br />\r\n*** C&oacute; 1 căn nh&agrave; lớn gần giữa khu đất, đẹp nhưng cực kỳ chắn chắc, an to&agrave;n v&agrave; đầy đủ tiện nghi, nh&agrave; gồm:<br />\r\n➡️&nbsp;Trệt: c&oacute; 2 PN, 1 PK, 1 toilet, 1 bếp, 1 kho, 1 nh&agrave; trồng nấm b&agrave;o ngư). Đồ d&ugrave;ng nh&agrave; bếp v&agrave; b&agrave;n ghế đầy đủ cho 8 người ở, 1 b&igrave;nh lọc nước bằng gốm c&ocirc;ng nghệ cao (nước lọc c&oacute; thể uống m&agrave; kh&ocirc;ng cần đun s&ocirc;i, c&ocirc;ng nghệ của Unicef viện trợ)<br />\r\n➡️&nbsp;Lầu: được chế tạo từ container loại lớn theo thiết kế ri&ecirc;ng, rất tiện nghi v&agrave; tho&aacute;ng m&aacute;t, c&oacute; đầy đủ toilet, bếp, m&aacute;y giặt, tủ lạnh với 6 cửa sổ, 2 cửa ra v&agrave;o loại 1 c&aacute;nh v&agrave; 1 cửa lớn 2 c&aacute;nh. B&ecirc;n ngo&agrave;i l&agrave; ban c&ocirc;ng lớn, c&oacute; thể tổ chức tiệc cho 20-30 người.C&oacute; wifi (4G)<br />\r\n➡️&nbsp;S&acirc;n thượng lớn, ngắm cảnh hay dựng lều ngủ ngo&agrave;i trời rất l&yacute; tưởng v&agrave; an to&agrave;n.<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br />\r\n*** Quang cảnh xung quanh con Villa 2:<br />\r\n✅&nbsp;Đầy c&acirc;y xanh<br />\r\n✅&nbsp;Gần hồ Đ&aacute; Đen (hồ cung cấp nước cho cả Tp Vũng T&agrave;u) n&ecirc;n m&ocirc;i trường trong l&agrave;nh, xanh m&aacute;t với rất nhiều chim ch&oacute;c, c&ocirc;n tr&ugrave;ng. C&oacute; thể đạp xe quanh hồ hay đi bộ ra hồ ngắm cảnh v&agrave;o buổi chiều.<br />\r\n✅&nbsp;Đất đ&atilde; được thải độc (h&oacute;a chất n&ocirc;ng nghiệp độc hại) hơn 1 năm nay<br />\r\n✅&nbsp;Được trồng đa dạng c&acirc;y ăn tr&aacute;i (hơn chục loại c&acirc;y ăn tr&aacute;i kh&aacute;c nhau, một số loại chưa tới 1 năm nữa l&agrave; đ&atilde; c&oacute; tr&aacute;i ăn.).<br />\r\n✅&nbsp;M&ocirc;i trường tốt cho sự sống n&ecirc;n c&ocirc;n tr&ugrave;ng, chim ch&oacute;c kh&aacute; nhiều, v&agrave;o m&ugrave;a mưa c&oacute; thể thấy đom đ&oacute;m.<br />\r\n✅&nbsp;To&agrave;n bộ vườn đ&atilde; l&agrave;m hệ thống tưới nước tự động, c&oacute; thể điều khiển qua smartphone hay lập tr&igrave;nh tưới v&agrave;o thời gian quy định.<br />\r\n✅&nbsp;Rau sạch c&oacute; thể trồng v&agrave; thu hoạch sau khoảng 2-4 tuần.<br />\r\n✅&nbsp;C&oacute; 1 hồ sen nở rất đẹp<br />\r\n✅&nbsp;C&oacute; 1 giếng nước khoan rất s&acirc;u (gần 70m) qua nhiều tầng đ&aacute; đen, n&ecirc;n nước ngon v&agrave; c&oacute; độ pH gần như nước Lavie. Xung quanh gần như kh&ocirc;ng c&oacute; nguồn &ocirc; nhiễm n&agrave;o<br />\r\n*** Con villa 2 nằm ở khu vực c&oacute; độ cao hơn trăm m&eacute;t so với mực nước biển n&ecirc;n chưa bao giờ c&oacute; t&igrave;nh trạng ngập nước.<br />\r\n&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;<br />\r\n&ldquo;Những l&uacute;c khủng hoảng như vậy, nếu giữ tiền chưa chắc gi&uacute;p bạn sống s&oacute;t v&agrave; tiền c&oacute; thể mất gi&aacute; do lạm ph&aacute;t, nhưng nếu bạn c&oacute; một căn nh&agrave; tr&aacute;nh dịch với một vườn đầy rau quả th&igrave; bạn vẫn c&oacute; thể ung dung vượt qua dịch.&rdquo;<br />\r\n????&nbsp;Gi&aacute; cho thu&ecirc; 16 triệu/ th&aacute;ng<br />\r\n????&nbsp;Gi&aacute; b&aacute;n : 4,8 tỷ đồng (1,5tr/m2)<br />\r\n????&nbsp;Li&ecirc;n hệ: Minh Bảo - 0913732102 (Viber / Zalo / Whatsapp)<br />\r\nP/s: m&igrave;nh vẫn c&ograve;n 1 con villa 1 gần đ&oacute;, nếu bạn thu&ecirc; hay, mua v&agrave; cần hỗ trợ để quen với nơi n&agrave;y th&igrave; m&igrave;nh sẽ hỗ trợ. Hỗ trợ người chăm vườn 3 th&aacute;ng.<br />\r\n*** Nếu bạn nghĩ người quen của m&igrave;nh c&oacute; nhu cầu muốn thu&ecirc; hay mua th&igrave; share gi&uacute;p nh&eacute;. Cảm ơn rất nhiều.</p>', 'Villa 2 diện tích', '[\"biet_thu1.jpg\",\"biet_thu2.jpg\",\"biet_thu3.png\"]', 1, NULL, 0, 0, '2020-06-22 13:04:36', '2020-06-22 13:04:36'),
(2, 2, 8, 119, 51, 1287, 'MAZDA CX-5-Trả trước 291 triệu-Tặng Bảo hiểm-VAY NHANH', 824000000, 'Chiếc', 'Đ', '<p><span style=\"font-size:18px\">NEW Mazda CX-5 hiện giảm gi&aacute; tiền mặt l&ecirc;n đến 85 triệu, trả trước 291 triệu nhận ngay xe, gi&aacute;<br />\r\nxe chỉ từ 824 triệu đồng.<br />\r\nLI&Ecirc;N HỆ TRỰC TIẾP ĐỂ ĐƯỢC HỖ TRỢ HỒ SƠ VAY NHANH CH&Oacute;NG. VAY TỐI ĐA ĐẾN&nbsp;8<br />\r\nNĂM K&Egrave;M LOẠT ƯU Đ&Atilde;I KH&Aacute;C.<br />\r\n<br />\r\nN&acirc;ng cấp an to&agrave;n đ&aacute;ng ch&uacute; &yacute; ch&iacute;nh l&agrave; g&oacute;i trang bị an to&agrave;n i-Activsense với<br />\r\nh&agrave;ng loạt t&iacute;nh năng nổi trội.<br />\r\nThay đổi về nội thất v&agrave; tiện nghi:<br />\r\n&bull; Đồng hồ l&aacute;i th&ecirc;m m&agrave;n h&igrave;nh kỹ thuật số 7inch ở giữa, hiển thị nhiều th&ocirc;ng tin vận h&agrave;nh hơn.<br />\r\n&bull; Cụm điều khiến Mazda Connect v&agrave; c&aacute;c n&uacute;t bấm được trau chuốt gọn g&agrave;ng hơn.<br />\r\n&bull; H&agrave;ng ghế trước t&iacute;ch hợp t&iacute;nh năng l&agrave;m m&aacute;t<br />\r\n&bull; M&agrave;n h&igrave;nh giải tr&iacute; trung t&acirc;m hiển thị tốt hơn, kết nối Apple Carplay v&agrave; Android Auto<br />\r\n&bull; &Acirc;m thanh 10 loa Bose cao cấp<br />\r\nQU&Agrave; TẶNG K&Egrave;M KHI MUA XE: Thảm l&oacute;t ch&acirc;n, t&uacute;i cứu hộ, Phim c&aacute;ch nhiệt Llumar bảo h&agrave;nh 5<br />\r\nnăm, Pagamui, thẻ GPS Navigation</span></p>', 'MAZDA CX-5', '[\"car-2.jpg\",\"car-3.jpg\",\"car-4.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:13:35', '2020-06-22 13:13:35'),
(3, 2, 8, 148, 51, 1271, 'Loa có kệ treo JBL F-450 dành cho Quán Cafe, Shop thời trang', 1450000, 'Cái', 'Đ', '<p>Loa treo tường JBL-F450 hay c&ograve;n c&ograve;n l&agrave; loa hộp treo tường c&oacute; thiết kế nhỏ gọn, chuy&ecirc;n được<br />\r\ntreo tường v&agrave; thường được lựa chọn sử dụng trong c&aacute;c hệ thống &acirc;m thanh:<br />\r\n- &Acirc;m thanh hội thảo,<br />\r\n- &Acirc;m thanh th&ocirc;ng b&aacute;o<br />\r\n- &Acirc;m thanh ph&ograve;ng tr&agrave;<br />\r\n- &Acirc;m thanh qu&aacute;n cafe,<br />\r\n- &Acirc;m thanh Shop cửa h&agrave;ng<br />\r\n- &Acirc;m thanh ph&ograve;ng tập Gym<br />\r\n- &Acirc;m thanh nh&agrave; h&agrave;ng...<br />\r\nLoa JBL F-450 được Cửa H&agrave;ng Hải b&aacute;n giảm gi&aacute; đến 10%, từ gi&aacute; gốc l&agrave; 1,600K, giảm chỉ c&ograve;n<br />\r\n1,450K/ cặp. Bảo đảm với Qu&yacute; kh&aacute;ch đ&acirc;y l&agrave; gi&aacute; rẻ hơn nhiều so với gi&aacute; b&aacute;n tại c&aacute;c Trung t&acirc;m v&agrave;<br />\r\nSi&ecirc;u thị xung quanh Thủ Đức.<br />\r\nĐiện M&aacute;y Hải số 41 L&ecirc; văn Ninh, P Linh T&acirc;y, Chợ Thủ Đức l&agrave; địa chỉ tin cậy m&agrave; Qu&yacute; Kh&aacute;ch c&oacute;<br />\r\nthể đặt niềm tin để mua Loa cũng như nhiều sản phẩm &acirc;m thanh kh&aacute;c. Với tr&ecirc;n 20 năm gắn b&oacute;<br />\r\nvới thị trường &acirc;m thanh TPHCM Cửa h&agrave;ng Hải lu&ocirc;n chọn b&aacute;n những sản phẩm chất lượng gi&aacute;<br />\r\ntốt, vừa l&agrave;m h&agrave;i l&ograve;ng kh&aacute;ch h&agrave;ng v&agrave; tăng th&ecirc;m uy t&iacute;n của Điện M&aacute;y Hải.<br />\r\nTh&ocirc;ng số kỹ thuật:<br />\r\nLoa treo tường JBL F-450<br />\r\nC&ocirc;ng suất 80W/ 8 ohms<br />\r\nLoa nhựa treo<br />\r\nBass loa 10cm<br />\r\nQui c&aacute;ch: 28 x 16.5 x 16cm/c&aacute;i<br />\r\nBộ sản phẩm gồm 1 x Cặp loa<br />\r\nC&ocirc;ng suất tối đa: 160W<br />\r\nPhạm vi: 90dB 1W, 1M<br />\r\nTrọng lượng: Đơn: 5 kg, Đ&ocirc;i: 10 kg<br />\r\nBảo h&agrave;nh: 12 th&aacute;ng.<br />\r\nLưu &Yacute;: Cửa h&agrave;ng HẢI c&oacute; b&aacute;n trả g&oacute;p tất cả c&aacute;c Loại loa vali k&eacute;o, c&aacute;c mặt h&agrave;ng Điện Tử, M&aacute;y<br />\r\nt&iacute;nh, Thủ tục đơn giản, dể d&agrave;ng cho Qu&yacute; kh&aacute;ch mua g&oacute;p,<br />\r\nXin gọi 028 37205732 hoặc 0903 389026 gặp A Hải.<br />\r\nVui l&ograve;ng đặt h&agrave;ng theo số Điện thoại tr&ecirc;n<br />\r\nĐịa chỉ: 41 L&ecirc; Văn Ninh, P Linh T&acirc;y, Chợ Thủ Đức. ( Đối diện bưu điện Thủ Đức )<br />\r\nWebsite tham khảo: http://dienmayhaithuduc.com.<br />\r\nGmail: dienmayhai64@gmail.com.<br />\r\nZalo: 0903 389026 ( Trần Linh Hải Điện M&aacute;y Hải )<br />\r\nRất h&acirc;n hạnh phục vụ Qu&yacute; Kh&aacute;ch.<br />\r\nQu&yacute; kh&aacute;ch n&ecirc;n mua h&agrave;ng nơi Điện m&aacute;y Hải bởi:<br />\r\n-Tư vấn lựa chọn sản phẩm đ&uacute;ng nhu cầu<br />\r\n-Cam kết sản phẩm chọn lọc chất lượng tốt<br />\r\n-Cam kết 100% h&agrave;i l&ograve;ng với dịch vụ<br />\r\n-Dịch vụ thử sản phẩm tận nơi miễn ph&iacute; trước khi chọn mua<br />\r\n-Ch&iacute;nh s&aacute;ch chăm s&oacute;c hỗ trợ kh&aacute;ch h&agrave;ng tận t&acirc;m<br />\r\n-Bảo h&agrave;nh 06-12 th&aacute;ng.<br />\r\n-Giao h&agrave;ng nhanh ch&oacute;ng v&agrave; miễn ph&iacute;, đổi trả h&agrave;ng dễ d&agrave;ng<br />\r\nCHẤT LƯỢNG BẢO ĐẢM l&agrave; UY T&Iacute;N 20 năm kinh nghiệm của Cửa H&agrave;ng Hải mua b&aacute;n tại chợ<br />\r\nThủ Đức.<br />\r\nH&Acirc;N HẠNH PHỤC VỤ QU&Yacute; KH&Aacute;CH<br />\r\nTh&ocirc;ng tin t&agrave;i khoản ng&acirc;n h&agrave;ng:<br />\r\nT&ecirc;n TK: Hộ Kinh Doanh Cửa H&agrave;ng Điện M&aacute;y Hải.<br />\r\nNg&acirc;n h&agrave;ng ACB, Thủ Đức, TPHCM<br />\r\nSố Tk: 4452747<br />\r\nC&aacute;m ơn Qu&yacute; Kh&aacute;ch đ&atilde; ủng hộ Điện M&aacute;y Hải</p>', 'Loa có kệ treo JBL F-450', '[\"loa_1.jpg\",\"loa_2.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:18:49', '2020-06-22 13:18:49'),
(4, 8, 8, 127, 51, 1273, 'Tuyển bảo vệ coi xe tại gò vấp', 18000, 'Giờ', 'Đ', '<p>Tuyển nh&acirc;n vi&ecirc;n bảo vệ tại CET g&ograve; vấp<br />\r\nTrung T&acirc;m Ngoại ngữ Kiến Tạo cần tuyển<br />\r\n<br />\r\n+ Vị tr&iacute; bảo vệ :<br />\r\n- Ưu ti&ecirc;n c&aacute;c bạn NAM ở khu vực G&ograve; Vấp (l&agrave;m việc nghi&ecirc;m chỉnh)<br />\r\n- Số lượng tuyển: 2 Nam từ&nbsp;18 &ndash; 26 tuổi ( tin tuyển gấp, kh&ocirc;ng m&ocirc;i giới hay đa<br />\r\ncấp )<br />\r\n- LƯU &Yacute;: Lương t&iacute;nh theo giờ l&agrave;m việc khởi điểm (18.500đ/ giờ). C&oacute; thỏa thuận<br />\r\nc&aacute;c phụ cấp bao<br />\r\ngồm trong qu&aacute; tr&igrave;nh l&agrave;m việc nếu cộng t&aacute;c l&acirc;u d&agrave;i.<br />\r\n<br />\r\n+ Thời gian l&agrave;m việc:<br />\r\n- Ca 1: từ 1h chiều đến 5h chiều<br />\r\n- Ca 2: từ 3h chiều đến 9h tối (ưu ti&ecirc;n buổi tối)<br />\r\n- L&agrave;m việc từ thứ Hai đến thứ Bảy (chủ nhật v&agrave; c&aacute;c ng&agrave;y lễ được nghỉ)<br />\r\n- Địa điểm l&agrave;m việc: 628/7 Phan Văn Trị, phường 10, G&ograve; Vấp<br />\r\n<br />\r\n+ C&ocirc;ng việc sẽ được hướng dẫn khi được nhận hồ sơ<br />\r\n_ Hồ sơ gồm:<br />\r\n1. Đơn xin việc<br />\r\n2. Sơ yếu l&yacute; lịch<br />\r\n3. CMND photo (c&oacute; sao y)<br />\r\n4. Sổ Hộ Khẩu photo (c&oacute; sao y)<br />\r\n5. Bằng tốt nghiệp cấp 3 photo (c&oacute; sao y) hoặc bằng đại học hoặc cao đẳng<br />\r\n<br />\r\nNộp tại địa điểm tr&ecirc;n (nơi l&agrave;m việc trực tiếp) từ 2h chiều đến 8h tối c&aacute;c ng&agrave;y<br />\r\ntrong tuần<br />\r\nThời gian nhận hồ sơ đến 31/10/2020</p>', 'Tuyển bảo vệ', '[\"work_job.png\"]', 1, NULL, 0, 0, '2020-06-22 13:25:08', '2020-06-22 13:25:08'),
(5, 3, 8, 151, 51, 1278, 'Phối Giống chó Poodle', 1000000, 'con', 'Đ', '<p>Nhận phối giống Poodle N&acirc;u đỏ teacup tiny bao đỡ bao đậu , đưa đ&oacute;n tận nơi, lưu chuồng chờ phối miễn ph&iacute; cho c&aacute;c b&eacute; ở xa. Nh&agrave; c&oacute; nhiều b&eacute; đực đẹp tha hồ cho c&aacute;c bạn chọn lựa.</p>\r\n\r\n<p>Nhấn để hiện số:&nbsp;<strong>0972918612</strong></p>', 'Phối Giống chó Poodle', '[\"Thu_cung.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:28:29', '2020-06-22 13:28:29'),
(6, 2, 8, 191, 65, 890, 'Chuyên sỉ lẻ bột Cacao nguyên chất toàn quốc Lhe 0916004117', 40000, 'Bịt', 'Đ', '<p>Chuy&ecirc;n sỉ lẻ to&agrave;n quốc. Nhận sỉ chỉ từ 5kg.<br />\r\nBột Cacao 100% nguy&ecirc;n chất Đăk Lăk kh&ocirc;ng đường th&iacute;ch hợp d&ugrave;ng v&agrave;o buổi tối, cho người<br />\r\nuống dễ d&agrave;ng c&oacute; được giấc ngủ ngon.<br />\r\nSản phẩm thuần khiết&nbsp;thi&ecirc;n nhi&ecirc;n, kh&ocirc;ng đường, m&ugrave;i vị v&agrave; hương thơm đậm đ&agrave;.<br />\r\n<br />\r\nHotline: 0916 004 117 Uy&ecirc;n<br />\r\n<br />\r\n**Hướng dẫn bảo quản: Bảo quản nơi kh&ocirc; r&aacute;o v&agrave; tho&aacute;ng m&aacute;t ở nhiệt độ 250C - 300C.<br />\r\n**Hướng dẫn sử dụng:<br />\r\n- Uống n&oacute;ng: 2 muỗng bột ca cao + 1 muỗng sữa đặc + 75ml nước s&ocirc;i.<br />\r\n- Uống lạnh: 2 muỗng bột ca cao + 1 muỗng sữa đặc + 75ml nước s&ocirc;i, th&ecirc;m nước đ&aacute; t&ugrave;y th&iacute;ch.<br />\r\n<br />\r\nCam kết ho&agrave;n tiền gấp 2 nếu sản phẩm k&eacute;m chất lượng.<br />\r\n<br />\r\nĐẶT MUA H&Agrave;NG - GIAO H&Agrave;NG NHANH TẬN NƠI<br />\r\nHotline: 0916 004 117 (Mua c&agrave;ng nhiều gi&aacute; c&agrave;ng rẻ)<br />\r\nGIAO H&Agrave;NG TẬN NƠI TẠI TP.HCM, SHIP H&Agrave;NG TO&Agrave;N QUỐC</p>', 'Cacao nguyên chất', '[\"ca_cao.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:30:55', '2020-06-22 13:30:55'),
(7, 2, 8, 156, 51, 1288, 'CUNG CẤP Máy Lạnh Âm Trần Daikin FCNQ26MV1/RNQ26MV19', 29300000, 'Cái', 'Đ', '<p>ĐẠI L&Yacute; CHUY&Ecirc;N CUNG CẤP M&aacute;y Lạnh &Acirc;m Trần Daikin FCNQ26MV1/RNQ26MV19- GI&Aacute; RẺ<br />\r\nCẠNH TRANH<br />\r\n<br />\r\n<br />\r\n<br />\r\nHOTLINE: 0909 333 162 MS H&Agrave;<br />\r\n<br />\r\nTrong h&igrave;nh ảnh c&oacute; thể c&oacute;: m&agrave;n h&igrave;nh v&agrave; trong nh&agrave;<br />\r\n<br />\r\nƯu điểm của Điều H&ograve;a &Acirc;m Trần</p>', 'Máy Lạnh Âm Trần Daikin', '[\"may_lanh.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:34:06', '2020-06-22 13:34:06'),
(8, 2, 8, 167, 21, 933, 'Báo giá Thùng gỗ sồi chuẩn', 111000, 'Thùng', 'Đ', '<p>GI&Aacute; TRỊ CỐT L&Otilde;I CỦA TH&Ugrave;NG GỖ SỒI<br />\r\nNhưng điều quan trọng nhất cũng ch&iacute;nh l&agrave; điểm kh&aacute;ch nhau giữa th&ugrave;ng sồi loại k&eacute;m chất lượng<br />\r\nv&agrave; loại tốt l&agrave; khoảng c&aacute;ch giữa những thanh gỗ.<br />\r\nNhững thanh gỗ&nbsp;kh&ocirc;ng được l&agrave;m cẩn thận sẽ tạo ra lỗ hổng v&agrave; l&agrave;m r&ograve; rượu, tuy nhi&ecirc;n nếu sử<br />\r\ndụng keo d&aacute;n để bịt k&iacute;n những khe hở giữa c&aacute;c thanh gỗ th&igrave; sẽ l&agrave;m mất đi bản chất vốn c&oacute; của<br />\r\nrượu ủ th&ugrave;ng gỗ sồi. Bởi v&igrave; lượng hơi nước trong rượu sẽ bay hơi qua thời gian, l&agrave;m tăng nồng<br />\r\nđộ rượu (alcohol) l&ecirc;n b&ecirc;n cạnh đ&oacute; c&ograve;n giảm nồng độ aldehyde trong rượu.<br />\r\nThương hiệu KAG Việt Nam &ndash; doanh nghiệp c&oacute; uy t&iacute;n trong ng&agrave;nh rượu, chuy&ecirc;n sản xuất v&agrave;<br />\r\ncung cấp thiết bị sản xuất rượu với hơn 10 năm kinh nghiệm, xứng đ&aacute;ng l&agrave; lựa chọn tin cậy, bạn<br />\r\nc&oacute; thể xem Bảng b&aacute;o gi&aacute; th&ugrave;ng gỗ sồi c&ugrave;ng những C&ocirc;ng dụng bất ngờ của th&ugrave;ng gỗ sồi tại<br />\r\nwebsite www. maythucphamkag . com.<br />\r\n<br />\r\nTH&Ocirc;NG TIN SẢN PHẨM<br />\r\n- T&ecirc;n sản phẩm: Th&ugrave;ng Gỗ Sồi KAG Việt Nam/ Oakwood Barrel<br />\r\n- Dung t&iacute;ch: 10L, 20L, 50L, 100L,&hellip;<br />\r\n- Nguy&ecirc;n liệu: sồi Nga, sồi Mỹ<br />\r\n- Đai th&eacute;p mạ kẽm<br />\r\n- M&agrave;u sắc: sồi trắng, sồi đỏ<br />\r\n- Th&iacute;ch hợp dung cho rượu nấu, whiskey, rum, tequila<br />\r\n- Khắc chữ hoặc h&igrave;nh vẽ theo y&ecirc;u cầu của kh&aacute;ch h&agrave;ng<br />\r\n<br />\r\nLI&Ecirc;N HỆ ĐỂ ĐƯỢC TƯ VẤN<br />\r\n- Hotline: 0904.68.5252<br />\r\n- Địa chỉ tham quan sản phẩm: Số 115, Ng&otilde; 509, Vũ T&ocirc;ng Phan, Thanh Xu&acirc;n, H&agrave; Nội<br />\r\n- Email: info@kagvietnam.com<br />\r\n- Website www. maythucphamkag.com/thung-dung-rượu-go-soi<br />\r\n- Website : www. thunggosoi. com</p>', 'Thùng gỗ sồi chuẩn', '[\"noi_that_go.jpg\",\"noi_that_go_2.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:37:48', '2020-06-22 13:37:48'),
(9, 2, 8, 170, 51, 1279, 'Giày nữ tăng chiều cao tphcm', 1450000, 'Đôi', 'Đ', '<p>Gi&agrave;y da nữ tăng chiều cao 7cm<br />\r\nM&agrave;u sắc: trắng<br />\r\nChiều cao: tăng trong gi&agrave;y<br />\r\nKiểu d&aacute;ng đơn giản, sang trọng<br />\r\nMẫu gi&agrave;y ph&ugrave; hợp phối với nhiều loại trang<br />\r\nphục kh&aacute;c nhau như đầm, quần jean, short,<br />\r\nch&acirc;n v&aacute;y tạo<br />\r\nn&ecirc;n phong c&aacute;ch trẻ trung, thanh lịch<br />\r\nD&aacute;ng gi&agrave;y thon gọn, si&ecirc;u nhẹ, thoải m&aacute;i khi di<br />\r\nchuyển. Gi&agrave;y th&iacute;ch hợp mang đi du lịch, dạo<br />\r\nphố hay<br />\r\nđi l&agrave;m,...<br />\r\nC&oacute; nhiều mẫu tại website: giaycaomaxi.com<br />\r\nĐịa chỉ: 154 Điện Bi&ecirc;n Phủ, phường 6, quận 3, tpHCM (gần ng&atilde; tư Hai B&agrave; Trưng)<br />\r\nHotline: 0938274912</p>', 'Giày nữ tăng chiều cao', '[\"giay_nu.jpg\",\"giay_nu_2.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:40:52', '2020-06-22 13:40:52'),
(10, 2, 8, 174, 65, 719, 'Đàn Piano Yamaha U3M thanh lý giá rẻ', 54990000, 'Chiếc', 'Đ', '<p>Đ&agrave;n Piano Yamaha U3M vừa mua về 65tr vợ kh&ocirc;ng th&iacute;ch, chưa kịp d&ugrave;ng đ&atilde; phải b&aacute;n thanh l&yacute;. Ai ưng em để gi&aacute; rẻ 54tr990k cho ai cần, đỡ phải ra cửa h&agrave;ng l&agrave;m g&igrave; đắt hơn chục triệu.</p>', 'Piano', '[\"piano.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:43:53', '2020-06-22 13:43:53'),
(11, 2, 8, 180, 51, 1280, 'MÁY IN MÀU EPSON T60', 1900000, 'Cái', 'Đ', '<p>In m&agrave;u v&agrave; trắng đen khổ A4 A5... In h&igrave;nh ảnh chuy&ecirc;n nghiệp C&oacute; thể in mực chuyển nhiệt l&ecirc;n &aacute;o thun C&oacute; gắn hệ thống mực li&ecirc;n tục n&ecirc;n in rất nhiều mới nạp mực Đầu phun bền in được nhiều Bảo h&agrave;nh 3 th&aacute;ng Xem m&aacute;y tại 324 T&acirc;n Phước F7 Q10 TPHCM</p>', 'Máy In', '[\"van_phong_may_in.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:47:04', '2020-06-22 13:47:04'),
(12, 4, 8, 182, 51, 1269, 'Dịch vu ban nhạc vip cho du lịch galateam building toàn quốc', 1000000, 'Giờ', 'Đ', '<p>C&Ocirc;NG TY TNHH GIẢI TR&Iacute; THANH T&Ugrave;NG<br />\r\nTUMBADORA BAND<br />\r\nMST: 0314283937<br />\r\nBAND FLAMENCO TUMBADORA - BAN<br />\r\nNHẠC TPHCM (SAIGON)<br />\r\nMr: THANH T&Ugrave;NG<br />\r\nPHONE 0908232718<br />\r\nGiới thiệu cung cấp ban nhạc<br />\r\nLựa chọn một ban nhạc ph&ugrave; hợp c&aacute;c ti&ecirc;u&nbsp;ch&iacute;<br />\r\nvề chất lượng biểu diễn, kh&ocirc;ng qu&aacute; ồn &agrave;o để<br />\r\nquan<br />\r\nkh&aacute;ch vừa nghe nhạc vừa đ&agrave;m đạo, nhưng<br />\r\ncũng kh&ocirc;ng qu&aacute; &ecirc;m dịu buồn tẻ, kh&ocirc;ng sử<br />\r\ndụng đĩa<br />\r\nCD hay USB organ ph&aacute;t nhạc nền. Ca kh&uacute;c<br />\r\nbiểu diễn được lựa chọn kỹ c&agrave;ng đ&uacute;ng chủ đề<br />\r\nph&ugrave;<br />\r\nhợp cả kh&aacute;ch quốc tế lẫn Việt Nam, ph&ugrave; hợp<br />\r\nvới mọi tầng lớp x&atilde; hội từ Đại gia đến C&ocirc;ng<br />\r\nnh&acirc;n,<br />\r\nTr&iacute; thức, N&ocirc;ng d&acirc;n v&agrave; ph&ugrave; hợp mọi lứa tuổi từ<br />\r\ncao ni&ecirc;n, trung ni&ecirc;n, thanh thiếu ni&ecirc;n. Phong<br />\r\nc&aacute;ch<br />\r\nbiểu diễn chuy&ecirc;n nghiệp trung thực, h&ograve;a &acirc;m<br />\r\nphối kh&iacute; trẻ trung sinh động, trang phục đ&uacute;ng<br />\r\nchủ đề<br />\r\ncủa sự kiện, đ&uacute;ng tone m&agrave;u của tiệc cưới<br />\r\nsang trọng l&atilde;ng mạn v&agrave; cuối c&ugrave;ng l&agrave; gi&aacute; dịch<br />\r\nvụ ban<br />\r\nnhạc phải hợp l&yacute; nhất trong thời buổi cạnh<br />\r\ntranh &ldquo;Kinh Tế Thị Trường&rdquo;, những ti&ecirc;u ch&iacute; đ&oacute;<br />\r\nlu&ocirc;n l&agrave;<br />\r\nmối quan t&acirc;m h&agrave;ng đầu với người l&agrave;m c&ocirc;ng<br />\r\nviệc Tổ Chức Sự Kiện (Event) cho c&aacute;c c&ocirc;ng<br />\r\nty, Tổ<br />\r\nchức tiệc cưới (Wedding planner) cho c&aacute;c<br />\r\ncặp đ&ocirc;i chuẩn bị h&ocirc;n lễ trọng đại<br />\r\nCHỈ C&Oacute; Ở CH&Uacute;NG T&Ocirc;I &ndash; BAN NHẠC<br />\r\nFLAMENCO TUMBADORA THANH T&Ugrave;NG- Uy<br />\r\nt&iacute;n tạo<br />\r\nn&ecirc;nThương hiệu đ&atilde; được khẳng định qua<br />\r\nnhiều năm tr&ecirc;n c&aacute;c diễn đ&agrave;n ban nhạc cho<br />\r\nEvents v&agrave;<br />\r\ntiệc cưới<br />\r\nBan nhạc FLAMENCO TUMBADORA th&agrave;nh<br />\r\nlập ng&agrave;y 16/04/2007, với 4 th&agrave;nh vi&ecirc;n ban<br />\r\nđầu<br />\r\nchuy&ecirc;n h&ograve;a tấu nhạc cổ điển, b&aacute;n cổ điển<br />\r\ncho c&aacute;c event khai trương showroom , ra mắt<br />\r\nmẫu xe<br />\r\nhơi mới, khai trương bất động sản mới, tiệc<br />\r\ncưới đại gia tại c&aacute;c kh&aacute;ch sạn 5 sao.<br />\r\nQua nhiều năm h&igrave;nh th&agrave;nh v&agrave; ph&aacute;t triển hiện<br />\r\nnay ban nhạc ch&uacute;ng t&ocirc;i đ&atilde; chuyển đổi ph&aacute;p<br />\r\nnh&acirc;n<br />\r\nDN l&ecirc;n C&ocirc;ng Ty TNHH với gần 20 th&agrave;nh vi&ecirc;n<br />\r\nbao gồm nhạc c&ocirc;ng v&agrave; ca sĩ c&oacute; chuy&ecirc;n m&ocirc;n<br />\r\ncao, tốt<br />\r\nnghiệp c&aacute;c trường đại học v&agrave; Nhạc Viện<br />\r\nTh&agrave;nh Phố . C&aacute;c th&agrave;nh vi&ecirc;n lu&acirc;n phi&ecirc;n biểu<br />\r\ndiển trong<br />\r\nc&aacute;c sự kiện lớn<br />\r\nChuy&ecirc;n đảm nh&acirc;n c&aacute;c show:<br />\r\nKhai trương Showroom, S&acirc;n Golf ,khai trương<br />\r\nc&ocirc;ng ty, Khai trương Bất động sản, Ra mắt<br />\r\nsản<br />\r\nphẩm, Thương hiệu mới, Kỷ niệm ng&agrave;y th&agrave;nh<br />\r\nlập, Lễ Đ&oacute;n Nhận Hu&acirc;n Chương, Huy Chương,<br />\r\nMở<br />\r\nB&aacute;n Căn Hộ Cao Cấp, Li&ecirc;n Hoan Tất ni&ecirc;n,<br />\r\nT&acirc;nni&ecirc;n,Gala Dinner, Hội nghị tổng kết, Tiệc<br />\r\ncưới,<br />\r\nRoad show&hellip;tại c&aacute;c kh&aacute;chsạn, resort 5 sao<br />\r\ntr&ecirc;n cả nước<br />\r\nLi&ecirc;n Hệ<br />\r\nMr: Thanh T&ugrave;ng<br />\r\nPhone: 0908232718- 028 22413990<br />\r\nM&atilde; Số Thuế: 0314283937<br />\r\nWeb site: https://chothuebannhac.net<br />\r\n<br />\r\nhttps://bannhacflamenco.net</p>', 'ban nhạc vip', '[\"dich_vu_1.jpg\",\"dich_vu_2.jpg\",\"dich_vu_3.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:50:38', '2020-06-22 13:50:38'),
(13, 2, 6, 198, 65, 714, 'Xả kho Bộ Quần Áo trẻ em. Combo 5 bộ', 75000, 'Bộ', 'Đ', '<p>Xả kho nhiệt t&igrave;nh lu&ocirc;n, b&aacute;n v&igrave; đam m&ecirc; ko cần lợi nhuận :)) Combo 5 bộ gi&aacute; chỉ 75k Set bộ cotton chất đẹp &aacute;o ba lỗ quần đ&ugrave;i Mẫu mới về chất coton xịn nh&eacute;, họa tiết th&igrave; qu&aacute; y&ecirc;u lu&ocirc;n ạ, b&eacute; trai b&eacute; g&aacute;i mặc đều đẹp hết nh&eacute;. Chi tiết size số: Số 2 : từ 0-3 th&aacute;ng: 4-6kg Số 3 : từ 3-6 th&aacute;ng: 6-8kg Số 4 : từ 6-9 th&aacute;ng: 8-10kg Số 5 : từ 9-12 th&aacute;ng:10-12kg Số 6 : từ 12-14 th&aacute;ng: 12-14kg Sản phẩm ph&ugrave; hợp họa tiết cho cả b&eacute; trai v&agrave; b&eacute; g&aacute;i mặc rất dễ thương c&aacute;c mẹ nh&eacute;.</p>', 'Bộ Quần Áo trẻ em', '[\"tre_em.jpg\",\"tre_em_2.jpg\"]', 1, NULL, 0, 0, '2020-06-22 13:59:09', '2020-06-22 13:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_type_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_types`
--

INSERT INTO `post_types` (`id`, `post_type_name`, `created_at`, `updated_at`) VALUES
(1, 'Cần mua', '2020-06-07 03:52:23', '2020-06-07 03:52:23'),
(2, 'Cần bán', '2020-06-07 03:52:28', '2020-06-07 03:52:28'),
(3, 'Hợp tác - Cộng tác', '2020-06-07 03:52:33', '2020-06-07 03:52:33'),
(4, 'Quảng cáo', '2020-06-07 03:52:42', '2020-06-07 03:52:42'),
(5, 'Rao vặt', '2020-06-07 03:52:47', '2020-06-07 03:52:47'),
(6, 'Sang nhượng', '2020-06-07 03:52:52', '2020-06-07 03:52:52'),
(7, 'Thuê - Cho thuê', '2020-06-07 03:53:09', '2020-06-07 03:53:09'),
(8, 'Việc làm', '2020-06-07 03:53:15', '2020-06-07 03:53:15');

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `province_name`, `created_at`, `updated_at`) VALUES
(2, 'Thành phố Hà Nội', NULL, NULL),
(3, 'Tỉnh Hà Giang', NULL, NULL),
(4, 'Tỉnh Cao Bằng', NULL, NULL),
(5, 'Tỉnh Bắc Kạn', NULL, NULL),
(6, 'Tỉnh Tuyên Quang', NULL, NULL),
(7, 'Tỉnh Lào Cai', NULL, NULL),
(8, 'Tỉnh Điện Biên', NULL, NULL),
(9, 'Tỉnh Lai Châu', NULL, NULL),
(10, 'Tỉnh Sơn La', NULL, NULL),
(11, 'Tỉnh Yên Bái', NULL, NULL),
(12, 'Tỉnh Hoà Bình', NULL, NULL),
(13, 'Tỉnh Thái Nguyên', NULL, NULL),
(14, 'Tỉnh Lạng Sơn', NULL, NULL),
(15, 'Tỉnh Quảng Ninh', NULL, NULL),
(16, 'Tỉnh Bắc Giang', NULL, NULL),
(17, 'Tỉnh Phú Thọ', NULL, NULL),
(18, 'Tỉnh Vĩnh Phúc', NULL, NULL),
(19, 'Tỉnh Bắc Ninh', NULL, NULL),
(20, 'Tỉnh Hải Dương', NULL, NULL),
(21, 'Thành phố Hải Phòng', NULL, NULL),
(22, 'Tỉnh Hưng Yên', NULL, NULL),
(23, 'Tỉnh Thái Bình', NULL, NULL),
(24, 'Tỉnh Hà Nam', NULL, NULL),
(25, 'Tỉnh Nam Định', NULL, NULL),
(26, 'Tỉnh Ninh Bình', NULL, NULL),
(27, 'Tỉnh Thanh Hóa', NULL, NULL),
(28, 'Tỉnh Nghệ An', NULL, NULL),
(29, 'Tỉnh Hà Tĩnh', NULL, NULL),
(30, 'Tỉnh Quảng Bình', NULL, NULL),
(31, 'Tỉnh Quảng Trị', NULL, NULL),
(32, 'Tỉnh Thừa Thiên Huế', NULL, NULL),
(33, 'Thành phố Đà Nẵng', NULL, NULL),
(34, 'Tỉnh Quảng Nam', NULL, NULL),
(35, 'Tỉnh Quảng Ngãi', NULL, NULL),
(36, 'Tỉnh Bình Định', NULL, NULL),
(37, 'Tỉnh Phú Yên', NULL, NULL),
(38, 'Tỉnh Khánh Hòa', NULL, NULL),
(39, 'Tỉnh Ninh Thuận', NULL, NULL),
(40, 'Tỉnh Bình Thuận', NULL, NULL),
(41, 'Tỉnh Kon Tum', NULL, NULL),
(42, 'Tỉnh Gia Lai', NULL, NULL),
(43, 'Tỉnh Đắk Lắk', NULL, NULL),
(44, 'Tỉnh Đắk Nông', NULL, NULL),
(45, 'Tỉnh Lâm Đồng', NULL, NULL),
(46, 'Tỉnh Bình Phước', NULL, NULL),
(47, 'Tỉnh Tây Ninh', NULL, NULL),
(48, 'Tỉnh Bình Dương', NULL, NULL),
(49, 'Tỉnh Đồng Nai', NULL, NULL),
(50, 'Tỉnh Bà Rịa - Vũng Tàu', NULL, NULL),
(51, 'Thành phố Hồ Chí Minh', NULL, NULL),
(52, 'Tỉnh Long An', NULL, NULL),
(53, 'Tỉnh Tiền Giang', NULL, NULL),
(54, 'Tỉnh Bến Tre', NULL, NULL),
(55, 'Tỉnh Trà Vinh', NULL, NULL),
(56, 'Tỉnh Vĩnh Long', NULL, NULL),
(57, 'Tỉnh Đồng Tháp', NULL, NULL),
(58, 'Tỉnh An Giang', NULL, NULL),
(59, 'Tỉnh Kiên Giang', NULL, NULL),
(60, 'Thành phố Cần Thơ', NULL, NULL),
(61, 'Tỉnh Hậu Giang', NULL, NULL),
(62, 'Tỉnh Sóc Trăng', NULL, NULL),
(63, 'Tỉnh Bạc Liêu', NULL, NULL),
(64, 'Tỉnh Cà Mau', NULL, NULL),
(65, 'Thành phố Hà Nội', '2020-06-16 03:00:01', '2020-06-16 03:00:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `number_money` double(8,2) DEFAULT NULL,
  `slug` varchar(252) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level_id`, `fullname`, `username`, `email`, `verifyToken`, `verify`, `email_verified_at`, `password`, `remember_token`, `sex`, `birthday`, `phone`, `address`, `avatar`, `google_id`, `facebook_id`, `activation_token`, `number_money`, `slug`, `created_at`, `updated_at`) VALUES
(6, 1, 'Nguyễn Văn Tuấn', 'tuantkd', 'tuanb1607138@student.ctu.edu.vn', NULL, 0, NULL, '$2y$10$4eOzsG/vz27Sul.Bpht1eun4I.D/we49/qiENOlwsfj4IVPfarOm2', NULL, 'Nam', '1998-01-25', '0326827373', 'Hậu Giang - Vị Thủy', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-18 05:52:08', '2020-06-18 05:52:08'),
(8, 2, NULL, 'Tuan Tkd', 'nguyenvantuan9a7@gmail.com', 'EAAEPxT4VpRIBAPLgIjVN1m4NH6SrlWTq4Wmd95gxZClJQmI5OnwdXtBDsxeM1uw7DfomVxBMzxCzK4aNm8GfTBmMJsQrsfe5z6WZBii7yeZCmVeD0yPZBcQHxRNRbxwtX6rMiantMrcJtnTvpkoids3gYTa4WC9FL4V6sGso4wZDZD', 1, NULL, NULL, 'JEHaHD3EPmnmry6X6B3QQJvAEVaZ9OJuo5HmskqsIh6zEG9GERJJ2LHScySc', NULL, NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/2484322845186561/picture?type=normal', NULL, '2484322845186561', NULL, NULL, 'tuan-tkd', '2020-06-18 06:02:05', '2020-06-18 06:02:05'),
(9, 1, 'Huỳnh Mi Nết', 'huynhnet', 'huynhnet72@gmail.com', NULL, 0, NULL, '$2y$10$O7fzQ2gBj5suTAQAa4gRIOweUfjqSZrBwvcO/HuoD.lLmzxZcc5zm', NULL, 'Nam', '1998-01-25', '0326827596', 'Cà Mau', NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-23 02:39:13', '2020-06-23 02:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `banners_post_id_foreign` (`post_id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_child_firsts`
--
ALTER TABLE `category_child_firsts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_child_firsts_category_id_foreign` (`category_id`);

--
-- Indexes for table `category_child_seconds`
--
ALTER TABLE `category_child_seconds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_child_seconds_category_first_id_foreign` (`category_first_id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_province_id_foreign` (`province_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_news`
--
ALTER TABLE `post_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_news_post_type_id_foreign` (`post_type_id`),
  ADD KEY `post_news_user_id_foreign` (`user_id`),
  ADD KEY `post_news_category_first_id_foreign` (`category_first_id`),
  ADD KEY `post_news_province_id_foreign` (`province_id`),
  ADD KEY `post_news_district_id_foreign` (`district_id`);

--
-- Indexes for table `post_types`
--
ALTER TABLE `post_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `category_child_firsts`
--
ALTER TABLE `category_child_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `category_child_seconds`
--
ALTER TABLE `category_child_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1427;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_news`
--
ALTER TABLE `post_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banners`
--
ALTER TABLE `banners`
  ADD CONSTRAINT `banners_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `post_news` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_child_firsts`
--
ALTER TABLE `category_child_firsts`
  ADD CONSTRAINT `category_child_firsts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `category_child_seconds`
--
ALTER TABLE `category_child_seconds`
  ADD CONSTRAINT `category_child_seconds_category_first_id_foreign` FOREIGN KEY (`category_first_id`) REFERENCES `category_child_firsts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_news`
--
ALTER TABLE `post_news`
  ADD CONSTRAINT `post_news_category_first_id_foreign` FOREIGN KEY (`category_first_id`) REFERENCES `category_child_firsts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
