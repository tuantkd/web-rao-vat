-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 03:31 AM
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
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `post_id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 13, 'Đại lý xả hàng, mua xe Toyota Wigo chỉ từ 315 triệu đồng', 'banner_2.png', '2020-06-24 13:10:15', '2020-06-24 13:10:15'),
(4, 15, 'Điện thoại Iphone X', 'banner_3.png', '2020-07-01 07:41:54', '2020-07-01 07:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `category_child_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `estate_category` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_name_project` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_land_area` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_floor` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_bedroom` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_bathroom` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_area_used` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estate_juridical` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_color` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_version` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_origin` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_produce_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_model_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_register_year` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_image_register_paper` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_category` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_number_kilometer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_fuel` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electron_manufacturer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electron_model_machine` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electron_color` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electron_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_type` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_old` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_sex` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_certificate` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_foreign_language` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_position` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_job` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_experience` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_salary_level` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_origin` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `food_expiration` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refrigerator_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refrigerator_manufacturer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `furniture_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fashion_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fashion_type_product` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sport_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_furniture_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type_work` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_experience_work` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mom_baby_status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mom_baby_type_product` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_child_seconds`
--

INSERT INTO `category_child_seconds` (`id`, `category_first_id`, `estate_category`, `estate_address`, `estate_name_project`, `estate_land_area`, `estate_floor`, `estate_bedroom`, `estate_bathroom`, `estate_area_used`, `estate_juridical`, `car_color`, `car_version`, `car_origin`, `car_status`, `car_produce_name`, `car_model_name`, `car_register_year`, `car_image_register_paper`, `car_category`, `car_number_kilometer`, `car_fuel`, `electron_manufacturer`, `electron_model_machine`, `electron_color`, `electron_status`, `work_type`, `work_old`, `work_sex`, `work_certificate`, `work_foreign_language`, `work_position`, `work_job`, `work_experience`, `work_salary_level`, `food_origin`, `food_expiration`, `refrigerator_status`, `refrigerator_manufacturer`, `furniture_status`, `fashion_status`, `fashion_type_product`, `sport_status`, `office_furniture_status`, `service_type_work`, `service_experience_work`, `mom_baby_status`, `mom_baby_type_product`, `created_at`, `updated_at`) VALUES
(10, 191, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Việt Nam', '6 tháng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-22 13:30:55', '2020-06-22 13:30:55'),
(17, 198, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', 'Đồ cho bé', '2020-06-22 13:59:09', '2020-06-22 13:59:09'),
(22, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Samsung', 'Galaxy S9 Plus', 'Đen', 'Đã sử dụng (chưa sửa chữa)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-25 06:51:31', '2020-06-25 06:51:31'),
(23, 146, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dell', 'XPS 7390 Core i7', 'Đen', 'Mới', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-26 07:27:50', '2020-06-26 07:27:50'),
(25, 110, 'Khác', 'Mễ Trì, Nam Từ Liêm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-29 05:15:54', '2020-06-29 05:15:54'),
(27, 187, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khác', NULL, NULL, NULL, '2020-06-29 13:06:42', '2020-06-29 13:06:42'),
(28, 111, 'Nhà chung cư, tập thể', 'CHÍNH CHỦ BÁN CĂN HỘ ĐƯỜNG SẮT 590 CMT8, P11,Q3. DT 79m2, giá 3tỷ', NULL, '79', NULL, '2', NULL, '79', 'Cần bán chung cư Đường Sắt. (590 CMT8, Quận 3).- 79m2 bao gồm 2 phòng ngủ, 2toilet, có để lại nội thất.- Giá bán 3 tỷ.- Sổ hồng chính chủ đầy đủ.- Căn hộ hướng Đông gió mát, yên tĩnh. Các chi phí ở đây rất rẻ.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-30 09:36:09', '2020-06-30 09:36:09'),
(29, 109, 'Nhà mặt tiền, mặt phố', '219 Trung Kính, Trung Hoà, Cầu Giấy, Hà Nội, Việt Nam', 'Đất xanh CTT', '65', '5', '4', '4', '65', 'sổ đỏ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-30 10:54:32', '2020-06-30 10:54:32'),
(30, 188, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Khác', NULL, NULL, NULL, '2020-07-01 06:03:10', '2020-07-01 06:03:10'),
(31, 157, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Đã sử dụng', 'Thương hiệu khác', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-01 07:47:53', '2020-07-01 07:47:53'),
(32, 120, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trắng', 'Tôi không rõ', 'Việt Nam', 'Mới', 'Thaco', 'Kia K200', '2020', NULL, 'Xe số', NULL, 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-02 08:32:41', '2020-07-02 08:32:41'),
(33, 127, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toàn thời gian cố định', '18 tuổi đến 40 tuổi', 'Nam', 'Không cần bằng cấp', 'Không cần', 'Nhân Viên bán hàng', 'Lao động phổ thông khác', 'Không cần kinh nghiệm', '8000000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-02 09:25:45', '2020-07-02 09:25:45'),
(34, 140, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Canon', 'X5 Kiss 600D + Lens 700D', 'Đen', 'Đã sử dụng (chưa sửa chữa)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-02 10:48:39', '2020-07-02 10:48:39'),
(35, 122, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Trắng', NULL, 'Nhật Bản', 'Đã sử dụng', 'Honda', 'Tay ga', '2007', 'đang-ky-xe.jpg', 'Tay ga', '1456', 'Xăng', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-07 01:55:37', '2020-07-07 01:55:37'),
(36, 169, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Mới', 'Đồ Nam', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-07 09:49:01', '2020-07-07 09:49:01'),
(37, 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Samsung', 'A7 2018 128GB', 'Đen', 'Đã sử dụng (chưa sửa chữa)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-11 10:25:45', '2020-07-11 10:25:45'),
(38, 149, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-11 13:13:21', '2020-07-11 13:13:21'),
(39, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 03:56:52', '2020-07-16 03:56:52'),
(40, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 05:47:30', '2020-07-16 05:47:30'),
(41, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 05:52:00', '2020-07-16 05:52:00'),
(42, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 05:54:35', '2020-07-16 05:54:35'),
(43, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:23:22', '2020-07-16 06:23:22'),
(44, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:29:00', '2020-07-16 06:29:00'),
(45, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:31:04', '2020-07-16 06:31:04'),
(46, 131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Toàn thời gian cố định', NULL, NULL, NULL, NULL, NULL, 'An ninh, bảo vệ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:34:13', '2020-07-16 06:34:13'),
(47, 151, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-16 06:35:22', '2020-07-16 06:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `devvn_tinhthanhpho`
--

CREATE TABLE `devvn_tinhthanhpho` (
  `matp` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

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
  `district_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `connection` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discribe` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(30, '2020_06_05_072650_create_category_child_seconds_table', 14),
(31, '2020_06_27_033429_create_reports_table', 15),
(32, '2020_06_05_072905_create_post_news_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_short` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `title_short`, `image`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Mazda6 2020 đứng ở đâu trong phân khúc sedan hạng D tại VN?', 'Với giá từ 889 triệu đồng đến 1,05 tỷ đồng, Mazda6 2020 là dòng sedan có giá bán cạnh tranh trong phân khúc sedan hạng D tại VN, bên cạnh Kia Optima.', 'dai-ly-xa-hang-mua-xe-toyota.jpg', '<p><img alt=\"Mazda6 2020 co gia re thu 2 trong phan khuc anh 2\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_02/IMG_1915_zing.jpg\" style=\"height:100%; width:100%\" title=\"Mazda6 2020 có giá rẻ thứ 2 trong phân khúc ảnh 2\" /></p>\r\n\r\n<p>Kia Optima l&agrave; mẫu xe c&oacute; gi&aacute; thấp nhất ph&acirc;n kh&uacute;c sedan hạng D.</p>\r\n\r\n<p>Kia Optima 2.0 GAT Luxury sử dụng động cơ xăng Nu 2.0L, c&ocirc;ng suất 152 m&atilde; lực, m&ocirc;-men xoắn 194 Nm. Trong khi bản cao cấp nhất sử dụng động cơ 2.4L cho c&ocirc;ng suất 176 m&atilde; lực v&agrave; m&ocirc;-men xoắn 228 Nm. Cả 2 động cơ đều đi k&egrave;m hộp số tự động 6 cấp v&agrave; hệ dẫn động cầu trước.</p>\r\n\r\n<p>D&ugrave; c&oacute; gi&aacute; rẻ nhất ph&acirc;n kh&uacute;c, nhưng thiết kế kh&ocirc;ng qu&aacute; ấn tượng l&agrave; nguy&ecirc;n nh&acirc;n khiến doanh số của Kia Optima thường xuy&ecirc;n nằm ở top dưới trong ph&acirc;n kh&uacute;c.</p>\r\n\r\n<h3>Mazda6 (889-1.049 triệu đồng)</h3>\r\n\r\n<p>Thế hệ mới của Mazda6 đ&atilde; ch&iacute;nh thức ra mắt tại thị trường Việt Nam, xe c&oacute; 3 phi&ecirc;n bản gồm 2.0L Luxury, 2.0L Premium v&agrave; 2.5L Signature Premium, gi&aacute; b&aacute;n lần lượt l&agrave; 889 triệu đồng, 949 triệu đồng v&agrave;&nbsp;1,049 tỷ đồng.</p>\r\n\r\n<p>So với thế hệ cũ (819 triệu đồng -&nbsp;1,019 tỷ đồng), xe c&oacute; gi&aacute; b&aacute;n cao hơn đ&ocirc;i ch&uacute;t. Tuy nhi&ecirc;n đ&acirc;y vẫn l&agrave; gi&aacute; b&aacute;n kh&aacute; cạnh tranh trong ph&acirc;n kh&uacute;c, chỉ cao hơn Kia Optima. Phi&ecirc;n bản thấp nhất của mẫu xe n&agrave;y thậm ch&iacute; c&oacute; gi&aacute; thấp hơn c&aacute;c mẫu xe hạng C kh&aacute;c như Mazda3 2.0L Premium,&nbsp;<a href=\"https://zingnews.vn/tieu-diem/honda.html\" title=\"Tin tức Honda\">Honda</a>&nbsp;Civic RS hay&nbsp;<a href=\"https://zingnews.vn/tieu-diem/toyota.html\" title=\"Tin tức Toyota\">Toyota</a>&nbsp;Corolla Altis 2.0V Sport.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mazda6 2020 co gia re thu 2 trong phan khuc anh 3\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_02/1AC07583.jpeg\" style=\"height:100%; width:100%\" title=\"Mazda6 2020 có giá rẻ thứ 2 trong phân khúc ảnh 3\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Gi&aacute; b&aacute;n của Mazda6 mới cao hơn thế hệ cũ nhưng vẫn c&oacute; t&iacute;nh cạnh tranh.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tổng thể, kiểu d&aacute;ng của Mazda6 2020 vẫn dựa tr&ecirc;n nền tảng ng&ocirc;n ngữ KODO - ng&ocirc;n ngữ thiết kế đ&atilde; mang đến sự th&agrave;nh c&ocirc;ng cho Mazda trong những năm gần đ&acirc;y.</p>\r\n\r\n<p>Mazda6 2020 được kỳ vọng tăng t&iacute;nh cạnh tranh trong ph&acirc;n kh&uacute;c với gi&aacute; b&aacute;n tương đối mềm, ph&ugrave; hợp với những kh&aacute;ch h&agrave;ng muốn l&ecirc;n đời từ những ph&acirc;n kh&uacute;c thấp hơn.</p>\r\n\r\n<h3><a href=\"https://zingnews.vn/tieu-diem/toyota-camry.html\" title=\"Tin tức Toyota Camry\">Toyota Camry</a>&nbsp;(1,029-1,235 tỷ đồng)</h3>\r\n\r\n<p>Thế hệ mới của Toyota Camry ra mắt tại Việt Nam từ th&aacute;ng 4/2019 với gi&aacute; b&aacute;n 1,029-1,235 tỷ đồng&nbsp;cho 2 phi&ecirc;n bản l&agrave; 2.0G v&agrave; 2.5Q. Mẫu xe n&agrave;y đ&atilde; từ bỏ kiểu thiết kế vu&ocirc;ng vắn, trung ni&ecirc;n. Thay v&agrave;o đ&oacute; l&agrave; c&aacute;c đường n&eacute;t sắc cạnh đậm t&iacute;nh thể thao v&agrave; trẻ trung hơn.</p>\r\n\r\n<p>Bản 2.0G d&ugrave;ng động cơ 2.0L, c&ocirc;ng suất 165 m&atilde; lực, m&ocirc;-men xoắn cực đại 199 Nm. Bản 2.5Q d&ugrave;ng động cơ 2.5L, c&ocirc;ng suất 178 m&atilde; lực, m&ocirc;-men xoắn 235 Nm.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mazda6 2020 co gia re thu 2 trong phan khuc anh 4\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_02/toyota_camry_zing_2_2.jpg\" style=\"height:100%; width:100%\" title=\"Mazda6 2020 có giá rẻ thứ 2 trong phân khúc ảnh 4\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Toyota Camry đang dần thất thế về doanh số trong ph&acirc;n kh&uacute;c.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Cả 2 phi&ecirc;n bản của Toyota Camry đều được nhập khẩu từ Th&aacute;i Lan, trong khi 3 phi&ecirc;n bản của thế hệ cũ được lắp r&aacute;p trong nước. Với việc lệ ph&iacute; trước bạ &ocirc;t&ocirc; lắp r&aacute;p giảm 50% được &aacute;p dụng từ 1/7, Toyota Camry phần n&agrave;o gặp bất lợi trước c&aacute;c đối thủ kh&aacute;c. Trong th&aacute;ng 5, mẫu xe n&agrave;y cũng đ&aacute;nh mất vị thế dẫn đầu doanh số v&agrave;o tay đối thủ&nbsp;<a href=\"https://zingnews.vn/tieu-diem/vinfast%20lux%20a2.0.html\" title=\"Tin tức VinFast Lux A2.0\">VinFast Lux A2.0</a>.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, Toyota Camry chấp nhận hi sinh nh&oacute;m kh&aacute;ch h&agrave;ng lớn tuổi để dồn sức cho đối tượng kh&aacute;ch h&agrave;ng trẻ. Trong bối cảnh ph&acirc;n kh&uacute;c sedan hạng D đang dần b&atilde;o h&ograve;a v&agrave; nhường bước cho SUV/crossover. Nh&igrave;n xa hơn, Toyota Camry c&ograve;n phải cạnh tranh với nhiều đối thủ đ&aacute;ng gờm tr&ecirc;n thị trường với c&ugrave;ng tầm gi&aacute; 1-1,2 tỷ đồng.</p>\r\n\r\n<h3>VinFast Lux A2.0 (1,040-1,289 tỷ đồng)</h3>\r\n\r\n<p>VinFast Lux A2.0 l&agrave; mẫu xe c&oacute; gi&aacute; cao thứ 2 trong nh&oacute;m sedan hạng D, từ 1,040-1,289 tỷ đồng. Trong th&aacute;ng 5, mẫu xe n&agrave;y lọt top 10 xe ăn kh&aacute;ch nhất với doanh số 682 xe, đồng thời dẫn đầu ph&acirc;n kh&uacute;c. Tuy nhi&ecirc;n vị tr&iacute; n&agrave;y đến từ đợt khuyến m&atilde;i &quot;khủng&quot; của thương hiệu xe Việt.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mazda6 2020 co gia re thu 2 trong phan khuc anh 5\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_02/Lux_A_zing.jpg\" style=\"height:100%; width:100%\" title=\"Mazda6 2020 có giá rẻ thứ 2 trong phân khúc ảnh 5\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>VinFast Lux A2.0 c&oacute; lợi thế lớn khi lệ ph&iacute; trước bạ xe lắp r&aacute;p giảm 50%.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>VinFast Lux A2.0 trang bị động cơ trang bị khối động cơ 2.0L tăng &aacute;p với c&ocirc;ng suất 228 m&atilde; lực, 350 Nm tr&ecirc;n bản cao cấp, trong khi bản ti&ecirc;u chuẩn c&oacute; c&ocirc;ng suất 174 m&atilde; lực v&agrave; m&ocirc;-men xoắn 300 Nm. Tất cả phi&ecirc;n bản đều sử dụng hệ thống dẫn động cầu sau v&agrave; hộp số tự động ZF 8 cấp.</p>\r\n\r\n<p>Kiểu d&aacute;ng do Pininfarina thiết kế kh&aacute;c lạ so với phần c&ograve;n lại l&agrave; một điểm cộng của VinFast Lux A2.0.</p>\r\n\r\n<h3>Honda Accord (1,319-1,329 tỷ đồng)</h3>\r\n\r\n<p>Honda Accord thế hệ mới ra mắt tại Việt Nam từ th&aacute;ng 10 năm ngo&aacute;i. Xe chỉ c&oacute; 1 phi&ecirc;n bản động cơ nhưng c&oacute; 2 gi&aacute; b&aacute;n l&agrave; 1,319 v&agrave;&nbsp;1,329 tỷ đồng&nbsp;t&ugrave;y v&agrave;o m&agrave;u sơn. Với mức gi&aacute; n&agrave;y, Honda Accord l&agrave; mẫu xe c&oacute; gi&aacute; b&aacute;n cao nhất nh&oacute;m sedan hạng D. Đ&aacute;ng tiếc l&agrave; mẫu xe n&agrave;y chưa sở hữu c&ocirc;ng nghệ an to&agrave;n chủ động Honda Sensing.</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Mazda6 2020 co gia re thu 2 trong phan khuc anh 6\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_02/Honda_Accord_Zing_17_1.jpg\" style=\"height:100%; width:100%\" title=\"Mazda6 2020 có giá rẻ thứ 2 trong phân khúc ảnh 6\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Honda Accord c&oacute; gi&aacute; b&aacute;n tỷ lệ nghịch với doanh số.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Honda Accord thế hệ thứ 10 tại Việt Nam c&oacute; duy nhất bản động cơ tăng &aacute;p 1.5L, sản sinh c&ocirc;ng suất tối đa 188 m&atilde; lực tại 5.500 v&ograve;ng/ph&uacute;t v&agrave; m&ocirc;-men xoắn cực đại 260 Nm tại 1.600-5.500 v&ograve;ng/ph&uacute;t. Xe trang bị hộp số v&ocirc; cấp CVT v&agrave; hệ dẫn động cầu trước.</p>\r\n\r\n<p>Gi&aacute; b&aacute;n cao cũng khiến mẫu xe n&agrave;y gặp kh&oacute; về mặt doanh số. Trong th&aacute;ng 5, chỉ c&oacute; 10 chiếc Honda Accord được b&aacute;n ra, thấp nhất ph&acirc;n kh&uacute;c sedan hạng D. B&ecirc;n cạnh đ&oacute;, xe được nhập khẩu từ Th&aacute;i Lan n&ecirc;n kh&ocirc;ng được hưởng mức giảm 50% lệ ph&iacute; trước bạ.</p>\r\n\r\n<p>&quot;&gt;</p>', '2020-06-25 06:56:09', '2020-07-05 03:00:55'),
(4, 'Nissan X-Trail thêm phiên bản nâng cấp tại Malaysia', 'Tại thị trường Malaysia, Nissan X-Trail vừa được bổ sung phiên bản nâng cấp có tên gọi Impul. So với bản tiêu chuẩn, X-Trail Impul được nâng cấp về thiết kế nội/ngoại thất.', '01_Nissan_X_Trail_Tuned_by_IMPUL_Front_e1593765068418.jpg', '<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p>Phi&ecirc;n bản Impul của mẫu Nissan X-Trail được ph&aacute;t triển dựa tr&ecirc;n thế hệ thứ 3 của d&ograve;ng crossover đến từ Nhật Bản. Nissan X-Trail Impul tạo kh&aacute;c biệt với g&oacute;i n&acirc;ng cấp thiết kế nội/ngoại thất thể thao. Mẫu X-Trail Impul từng được trưng b&agrave;y tại triển l&atilde;m Tokyo Auto Salon 2019.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 2\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/02_Nissan_X_Trail_Tuned_by_IMPUL_Rear_e1593765036596.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 2\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>G&oacute;i n&acirc;ng cấp n&agrave;y bao gồm bộ Impul Aerokit, với phần đầu, đu&ocirc;i v&agrave; h&ocirc;ng xe sử dụng c&aacute;c chi tiết ốp g&oacute;c cạnh v&agrave; hầm hố. Lưới tản nhiệt v&agrave; c&aacute;nh gi&oacute; ph&iacute;a sau được sơn đen.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 3\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_13.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 3\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nissan X-Trail Impul trang bị bộ la-zăng Impul Aura SX-50 18 inch, đi k&egrave;m lốp Continental ContiMaxContact MC6, k&iacute;ch thước 235/55. Để cải thiện cảm gi&aacute;c l&aacute;i, Nissan X-Trail Impul đ&atilde; được n&acirc;ng cấp hệ thống treo thể thao Impul Sport Spring.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 4\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Nissan_X_Trail_Tuned_By_Impul_interior_1.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 4\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Kh&ocirc;ng chỉ n&acirc;ng cấp ngoại h&igrave;nh, phi&ecirc;n bản X-Trail Impul cũng đ&atilde; được tinh chỉnh kh&aacute; nhiều ở thiết kế nội thất. Một số chi tiết trong xe được bọc da Maroon Nappa, gi&uacute;p tăng vẻ sang trọng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 5\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Nissan_X_Trail_Tuned_By_Impul_interior_2_e1593766687658.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 5\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tại Malaysia, Nissan X-Trail c&oacute; 4 biến thể gồm 2.0L Hybrid, 2.5L 4WD, 2.0L 2WD MID v&agrave; 2.0L 2WD. Cả 4 biến thể đều c&oacute; thể &aacute;p dụng g&oacute;i n&acirc;ng cấp Impul với gi&aacute; 11.000 RM, tương đương&nbsp;2.565 USD.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 6\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_9_2.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 6\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Kh&aacute;ch h&agrave;ng cũng c&oacute; thể mua ri&ecirc;ng từng trang bị trong g&oacute;i n&acirc;ng cấp n&agrave;y. Bộ Impul Aerokit bao gồm c&aacute;nh gi&oacute; cản trước/sau, ốp sườn c&oacute; gi&aacute;&nbsp;1.306 USD, m&acirc;m xe Aura SX-50 18 inch c&oacute; gi&aacute;&nbsp;1.352 USD, lốp Continental ContiMaxContact MC6 c&oacute; gi&aacute;&nbsp;653 USD, phuộc l&ograve; xo thể thao Impul Sport Sring gi&aacute;&nbsp;256 USD, c&aacute;nh gi&oacute; sau gi&aacute;&nbsp;187 USD&nbsp;v&agrave; ốp tản nhiệt m&agrave;u đen c&oacute; gi&aacute;&nbsp;163 USD.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 7\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_5_2.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 7\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nissan X-Trail Impul sẽ được b&aacute;n ra tại Malaysia từ ng&agrave;y 18/7. Trong khi đ&oacute; tại Việt Nam, Nissan X-Trail đang được b&aacute;n với 2 phi&ecirc;n bản gồm 2.0 SL 2WD v&agrave; 2.5 SV 4WD, với gi&aacute; lần lượt l&agrave; 913-993 triệu đồng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 8\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_6_2.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 8\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Được biết, hệ thống động cơ 2.0L c&oacute; c&ocirc;ng suất 142 m&atilde; lực v&agrave; m&ocirc;-men xoắn 200 Nm, c&ograve;n động cơ 2.5L c&oacute; c&ocirc;ng suất 169 m&atilde; lực v&agrave; m&ocirc;-men xoắn 233 Nm. Xe được trang bị hộp số v&ocirc; cấp Xtronic-CVT.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 9\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_1_2.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 9\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Với việc bổ sung g&oacute;i n&acirc;ng cấp ngoại h&igrave;nh, Nissan X-Trail phần n&agrave;o l&agrave;m mới h&igrave;nh ảnh vốn đang dần lỗi thời, tăng t&iacute;nh cạnh tranh với c&aacute;c mẫu xe như Mazda CX-5,&nbsp;<a href=\"https://zingnews.vn/tieu-diem/honda.html\" title=\"Tin tức Honda\">Honda</a>&nbsp;CR-V, Hyundai Tucson hay Mitsubishi Outlander.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nissan X-Trail nang cap ngoai hinh dau Honda CR-V anh 10\" src=\"https://znews-photo.zadn.vn/w1024/Uploaded/neg_estpyge/2020_07_04/Impul_Nissan_X_Trail_TAS_5_2.jpg\" style=\"height:100%; width:100%\" title=\"Nissan X-Trail nâng cấp ngoại hình đấu Honda CR-V ảnh 10\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Trong khi đ&oacute;, thế hệ thứ 4 của mẫu xe n&agrave;y vừa ra mắt tại Mỹ với thiết kế ho&agrave;n to&agrave;n mới v&agrave; được n&acirc;ng cấp rất nhiều trang bị. Xe sẽ được b&aacute;n ra trong qu&yacute; III, gi&aacute; b&aacute;n chưa được c&ocirc;ng bố.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', '2020-07-05 09:56:35', '2020-07-05 09:56:35');

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
-- Table structure for table `post_news`
--

CREATE TABLE `post_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_first_id` bigint(20) UNSIGNED DEFAULT NULL,
  `province_id` bigint(20) UNSIGNED DEFAULT NULL,
  `district_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_second_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `unit_price` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_search` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_date_expired` int(11) DEFAULT NULL,
  `hidden_new` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `save_post` int(11) DEFAULT NULL,
  `user_saved_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_news`
--

INSERT INTO `post_news` (`id`, `post_type_id`, `user_id`, `category_first_id`, `province_id`, `district_id`, `category_second_id`, `title`, `price`, `unit_price`, `currency`, `content`, `tag_search`, `images`, `number_date_expired`, `hidden_new`, `status`, `save_post`, `user_saved_id`, `created_at`, `updated_at`) VALUES
(13, 2, 16, 198, 65, 716, 17, 'Xả kho Bộ Quần Áo trẻ em', 75000, 'Bộ', 'Đ', '<p>Xả kho nhiệt t&igrave;nh lu&ocirc;n, b&aacute;n v&igrave; đam m&ecirc; ko cần lợi nhuận :)) Combo 5 bộ gi&aacute; chỉ 75k Set bộ cotton chất đẹp &aacute;o ba lỗ quần đ&ugrave;i Mẫu mới về chất coton xịn nh&eacute;, họa tiết th&igrave; qu&aacute; y&ecirc;u lu&ocirc;n ạ, b&eacute; trai b&eacute; g&aacute;i mặc đều đẹp hết nh&eacute;. Chi tiết size số: Số 2 : từ 0-3 th&aacute;ng: 4-6kg Số 3 : từ 3-6 th&aacute;ng: 6-8kg Số 4 : từ 6-9 th&aacute;ng: 8-10kg Số 5 : từ 9-12 th&aacute;ng:10-12kg Số 6 : từ 12-14 th&aacute;ng: 12-14kg Sản phẩm ph&ugrave; hợp họa tiết cho cả b&eacute; trai v&agrave; b&eacute; g&aacute;i mặc rất dễ thương c&aacute;c mẹ nh&eacute;.</p>', 'Bộ Quần Áo trẻ em', '[\"tre_em.jpg\",\"tre_em_2.jpg\"]', 7, NULL, 2, 0, NULL, '2020-06-22 06:59:09', '2020-06-28 09:28:39'),
(14, 2, 11, 144, 51, 1274, 22, '[ Giá Sốc ]Samsung Galaxy S9 Plus Có Trả Góp', 6190000, 'Chiếc', 'Đ', '<p>SHOP C&Oacute; B&Aacute;N TRẢ G&Oacute;P</p>\r\n\r\n<p>🌎Điện thoại : Samsung Galaxy S9 Plus</p>\r\n\r\n<p>💰 Gi&aacute; chỉ từ : 6tr190K - 6tr590K Bản 2 Sim +400K Ngo&agrave;i ra Shop c&ograve;n bản New 100%</p>\r\n\r\n<p>🔥Vio Store cam kết chỉ b&aacute;n h&agrave;ng nguy&ecirc;n bản :</p>\r\n\r\n<p>👉🏾 Main Zin , M&agrave;n zin ,chưa sửa chữa</p>\r\n\r\n<p>👉🏾 Kh&ocirc;ng b&aacute;n h&agrave;ng sửa main thay m&agrave;n k&eacute;m chất lượng</p>\r\n\r\n<p>☎️Li&ecirc;n lạc với ch&uacute;ng t&ocirc;i</p>\r\n\r\n<p>👉🏾 Địa chỉ :</p>\r\n\r\n<p>🏠CN1: Số 97 L&ecirc; Đức Thọ - Phường 7 - G&ograve; Vấp - TP.HCM</p>\r\n\r\n<p>🏠CN2: Số 55 Nguyễn Thiện Thuật - P2 -Q3 - TP.HCM</p>\r\n\r\n<p>⛔️Ch&iacute;nh s&aacute;ch Bảo H&agrave;nh :</p>\r\n\r\n<p>👉🏾 Bao đổi 1 đổi 1 trong 15 ng&agrave;y sử dụng</p>\r\n\r\n<p>👉🏾 Bảo h&agrave;nh 6 th&aacute;ng PHẦN CỨNG ( Nhiều nơi đăng bảo h&agrave;nh 12 th&aacute;ng nhưng chỉ BH phần mềm th&ocirc;i )</p>\r\n\r\n<p>👉🏾 Hỗ trợ phần mềm trọn đời m&aacute;y</p>\r\n\r\n<p>💡Hỗ trợ thanh to&aacute;n</p>\r\n\r\n<p>👉🏾 Trả g&oacute;p 0% với thẻ t&iacute;n Dụng của hơn 20 Ng&acirc;n h&agrave;ng trong nước v&agrave; Quốc Tế</p>\r\n\r\n<p>👉🏾 Hỗ trợ trả g&oacute;p l&atilde;i suất thấp ,X&eacute;t duyệt nhanh , thủ tục đơn giản ( Chứng minh thư v&agrave; Bằng l&aacute;i Hoặc CMT V&agrave; Sổ hộ khẩu)</p>\r\n\r\n<p>👉🏾 Hỗ trợ Quẹt thẻ thanh to&aacute;n Với mọi Loại thẻ ATM ,V&iacute;a, Master...</p>\r\n\r\n<p>🎂Phụ kiện</p>\r\n\r\n<p>👉🏾 Sạc C&aacute;p tặng (trị gi&aacute; 150K)</p>\r\n\r\n<p>👉🏾 Tặng tai nghe trị gi&aacute; 150K</p>\r\n\r\n<p>👉🏾 Giảm 30% gi&aacute; linh phụ kiện</p>\r\n\r\n<p>🚚Vận chuyển , Giao h&agrave;ng</p>\r\n\r\n<p>👉🏾 Giao h&agrave;ng tận nơi nội th&agrave;nh TP.HCM</p>\r\n\r\n<p>👉🏾 Giao h&agrave;ng COD tận nơi 64 Tỉnh th&agrave;nh - Click v&agrave;o cửa h&agrave;ng để xem th&ecirc;m nhiều sản phẩm hơn</p>', 'Samsung', '[\"phone-1.jpg\",\"phone-2.jpg\",\"phone-3.jpg\"]', 5, NULL, 2, 0, 16, '2020-06-24 23:51:31', '2020-06-29 03:01:33'),
(15, 2, 16, 146, 65, 904, 23, 'Laptop Dell XPS 7390 Core i7', 36990000, 'Cái', 'Đ', '<p>CPU : Intel, Core i7 RAM : 16 GB, LPDDR3 Ổ cứng : SSD, 512 GB M&agrave;n h&igrave;nh : 13.3 inchs, 3840 x<br />\r\n2160 Pixel Card m&agrave;n h&igrave;nh : Intel UHD Graphics 620, T&iacute;ch hợp Cổng kết nối : LAN : 10/100/1000<br />\r\nMbps, WIFI : Wifi 6 (802.11ax) Hệ điều h&agrave;nh : windows 10 home single language Trọng lượng : 1.21<br />\r\nkg K&iacute;ch thước : 302 x 199 x 7.8-11.6 mm (W x D x H) Xuất xứ : Trung Quốc Năm sản xuất : 2019<br />\r\nDell XPS 13 7390 l&agrave; chiếc laptop 13 inch cao cấp nhất hiện nay với m&agrave;n h&igrave;nh 4K HDR tuyệt đẹp, bộ<br />\r\nvi xử l&yacute; Intel Core i7 thế hệ thứ 10 si&ecirc;u mạnh mẽ v&agrave; thiết kế sang trọng, thể hiện sự ho&agrave;n hảo của<br />\r\nmột sản phẩm c&ocirc;ng nghệ.</p>', 'dell', '[\"laptop_dell.png\"]', 6, NULL, 2, 0, 11, '2020-06-26 00:27:50', '2020-06-29 02:37:11'),
(16, 2, 11, 109, 51, 1269, 29, 'Bán nhà hẻm đường Trần Quang Khải, Quận 1', 180000000, 'Nền', 'Đ', '<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#333333\"><span style=\"font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:medium\"><span style=\"color:#000000\">Do gia đ&igrave;nh kh&ocirc;ng c&ograve;n c&oacute; nhu cầu ở tại TpHCM, cần b&aacute;n lại 1 căn nh&agrave; nhỏ tại 68/166D Trần Quang Khải, P. T&acirc;n Định, Quận 1, TpHCM, gần cầu Ho&agrave;ng Hoa Th&aacute;m.<br />\r\n<br />\r\n<strong>Vị tr&iacute; đẹp:</strong><br />\r\n- C&aacute;ch bờ k&egrave; - cầu Ho&agrave;ng Hoa Th&aacute;m 1 căn nh&agrave; (khoảng 5m).<br />\r\n- Nh&agrave; thuộc quận 1 nhưng qua cầu (v&agrave;i trăm m) l&agrave; tới khu Rạch Miễu, Phan X&iacute;ch Long, Ph&uacute;<br />\r\nNhuận, đi đ&acirc;u cũng thuận tiện.<br />\r\n- Hiếm khi n&agrave;o bị ngập nước<br />\r\n- Tập trung nhiều ng&acirc;n h&agrave;ng, t&ograve;a nh&agrave; văn ph&ograve;ng, kh&aacute;ch sạn nh&agrave; h&agrave;ng, kinh doanh bu&ocirc;n b&aacute;n mọi ng&agrave;nh nghề. Khai th&aacute;c gi&aacute; trị cho thu&ecirc; cao, giữ tiền tốt, thanh khoản cao.</span></span></span></span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#333333\"><span style=\"font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><strong>Diện t&iacute;ch :&nbsp;</strong>24,1m2</span></span></span></span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#333333\"><span style=\"font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:medium\"><span style=\"color:#000000\"><strong>Gi&aacute; b&aacute;n:&nbsp;</strong>180tr/m2 , 4,32 tỷ (c&oacute; thương lượng, ch&iacute;nh chủ b&aacute;n, giấy tờ đầy đủ)</span></span></span></span></span></span><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:start\"><span style=\"font-size:14px\"><span style=\"color:#333333\"><span style=\"font-family:&quot;Helvetica Neue&quot;,Helvetica,Arial,sans-serif\"><span style=\"background-color:#ffffff\"><span style=\"font-size:medium\"><span style=\"color:#0000ff\"><strong>Li&ecirc;n hệ: Mr Bảo 0913732102 (Viber, Zalo)</strong></span></span></span></span></span></span></p>', 'Bán nhà hẻm đường Trần Quang Khải', '[\"image-1.jpg\"]', 3, NULL, 1, 0, 6, '2020-06-28 22:12:07', '2020-06-29 23:11:16'),
(17, 7, 11, 110, 65, 1408, 25, 'Cho thuê căn hộ vinhome Greenbay 1 ngủ, đầy đủ tiện nghi', 9000000, 'Tháng', 'Đ', '<p>M&igrave;nh đang c&oacute; mấy căn studio 1 ph&ograve;ng ngủ ở c&aacute;c tầng 16,18,20,21 trong vinhome Greenbay. bạn n&agrave;o c&oacute; nhu cầu thu&ecirc; th&igrave; li&ecirc;n hệ theo số 0971779333 để được xem ph&ograve;ng nh&eacute;.</p>', 'Cho thuê căn hộ vinhome Greenbay', '[\"image-2.jpg\",\"image-3.jpg\"]', 3, NULL, 1, 1, 6, '2020-06-28 22:15:54', '2020-06-28 22:15:54'),
(18, 2, 16, 191, 51, 1275, 10, 'Sữa Bắp Nếp Thái Sơn khuyến mãi tại các siêu thị FamilyMart', 15000, 'Chai', 'Đ', '<p>Sữa Bắp Nếp Th&aacute;i Sơn l&agrave; loại nước giải kh&aacute;t dinh dưỡng độc đ&aacute;o.<br />\r\nSữa Bắp với th&agrave;nh phần ch&iacute;nh l&agrave; Bắp tươi tự nhi&ecirc;n vừa thu hoạch gi&uacute;p bổ sung<br />\r\ncho cơ thể nguồn dinh dưỡng dồi d&agrave;o. Bạn c&oacute;&nbsp;thể coi Sữa Bắp Nếp Th&aacute;i Sơn<br />\r\nnhư một bữa ăn l&oacute;t dạ v&agrave;o bất cứ thời gian n&agrave;o trong ng&agrave;y.<br />\r\n<br />\r\nSữa Bắp Nếp Th&aacute;i Sơn chứa th&agrave;nh phần chủ yếu l&agrave; Bắp tươi vừa thu hoạch.<br />\r\nBắp l&agrave; 1 trong 5 loại ngũ cốc được nhiều d&acirc;n tộc tr&ecirc;n thế giới d&ugrave;ng l&agrave;m<br />\r\nnguồn thực phẩm từ ng&agrave;n xưa (gồm l&uacute;a nước, l&uacute;a mạch, hạt k&ecirc;, hạt đậu v&agrave; Bắp).<br />\r\nTrong Bắp chứa rất nhiều th&agrave;nh phần dinh dưỡng c&oacute; &iacute;ch cho cơ thể như<br />\r\nVitamin A,B,C v&agrave; nhiều hoạt chất dinh dưỡng kh&aacute;c.<br />\r\n<br />\r\nSữa Bắp Nếp Th&aacute;i Sơn đ&atilde; c&oacute; mặt tại hệ thống c&aacute;c si&ecirc;u thị: Circle K, MiniStop,<br />\r\nFamilyMart, B&rsquo;sMart, Cheers, Satra Foods, Vissan, AEON Citimart, 7- Eleven,<br />\r\nB&aacute;ch H&oacute;a Xanh, Coop Food, Coop Mart, Coop Smile, Coop Xtra,...<br />\r\n<br />\r\nChương tr&igrave;nh khuyến m&atilde;i của Sữa Bắp Nếp Th&aacute;i Sơn đang diễn ra tại hệ thống<br />\r\nc&aacute;c si&ecirc;u thị FamilyMart từ ng&agrave;y 29/06/2020 - 26/07/2020 giảm 2.000 đồng tr&ecirc;n<br />\r\nmỗi chai sản phẩm. H&atilde;y c&ugrave;ng gh&eacute; si&ecirc;u thị gần nhất mang hương vị thi&ecirc;n nhi&ecirc;n<br />\r\nvề nh&agrave; bạn nh&eacute;!<br />\r\n<br />\r\n&gt;&gt;&gt; Xem th&ecirc;m tại:<br />\r\nFanpage: facebook.com/suabapnepthaison<br />\r\nWebsite: thaisonfoods.vn</p>', 'Sữa Bắp Nếp Thái Sơn', '[\"bap.jpg\"]', NULL, NULL, 1, 1, 11, '2020-06-29 05:52:36', '2020-06-29 05:52:36'),
(19, 5, 16, 187, 51, 1273, 27, 'Thay thế vật liệu lọc nước huyện Nhà Bè TP HCM-0911.847.117', 100000, 'Thù lao', 'Đ', '<p>1. GIỚI THIỆU VỀ CH&Uacute;NG T&Ocirc;I<br />\r\nC&ocirc;ng ty TNHH M&ocirc;i trường Xuy&ecirc;n Việt được th&agrave;nh lập c&aacute;ch đ&acirc;y gần 10 năm. Trong suốt thời gian<br />\r\nqua, ch&uacute;ng t&ocirc;i l&agrave; đơn vị đi đầu trong lĩnh vực thi c&ocirc;ng cũng như cung cấp tất&nbsp;cả c&aacute;c loại vật liệu<br />\r\nđể xử l&yacute; nước sinh hoạt.<br />\r\nLĩnh vực hoạt động:<br />\r\n- Cung cấp vật liệu lọc nước: than hoạt t&iacute;nh, c&aacute;t sỏi thạch anh, vật liệu lọc nước nhiễm ph&egrave;n, vật<br />\r\nliệu xử l&yacute; nước cứng<br />\r\n- Cung cấp thiết bị lọc nước: m&aacute;y lọc nước, l&otilde;i lọc nước, cột lọc Composite, cột lọc Inox...<br />\r\n- Cung cấp vật liệu lọc kh&iacute;<br />\r\n- Thi c&ocirc;ng xử l&yacute; nước thải, kh&iacute; thải<br />\r\n- Cung cấp vật liệu xử l&yacute; nước thải: Men vi sinh, h&oacute;a chất m&ocirc;i trường<br />\r\n- Cung cấp vật liệu lọc kh&iacute;: than hoạt t&iacute;nh lọc kh&iacute;, t&uacute;i than lọc kh&iacute;<br />\r\n<br />\r\n2. VẬT LIỆU LỌC NƯỚC GỒM NHỮNG LOẠI N&Agrave;O?<br />\r\nHiện nay, nguồn nước sinh hoạt thường bị nhiễm ph&egrave;n hoặc nhiễm nước cứng<br />\r\nl&agrave; chủ yếu. Những loại vật liệu được d&ugrave;ng để xử l&yacute; những nguồn nước như vậy thường l&agrave;: than<br />\r\nhoạt t&iacute;nh, c&aacute;t sỏi thạch anh, c&aacute;t mangan khử ph&egrave;n, hạt birm khử ph&egrave;n, ..., hạt nhựa trao đổi ion<br />\r\nxử l&yacute; nước cứng...<br />\r\nNhững loại vật liệu nầy đều c&oacute; tuổi thọ nhất định của n&oacute; t&ugrave;y vảo c&ocirc;ng suất sử dụng v&agrave; chất lượng<br />\r\nnước đầu v&agrave;o. V&igrave; thế, sau một thời gian sử dụng th&igrave; ch&uacute;ng ta cần thay thế n&oacute; để đạt được chất<br />\r\nlượng nguồn nước tốt hơn.<br />\r\n<br />\r\n3. QUY TR&Igrave;NH THAY THẾ VẬT LIỆU LỌC NƯỚC.<br />\r\n- Bước 1: Tiếp nhận điện thoại kh&aacute;ch h&agrave;ng.<br />\r\nKh&aacute;ch h&agrave;ng m&ocirc; tả về bồn lọc, cột lọc nước gia đ&igrave;nh của kh&aacute;ch h&agrave;ng.<br />\r\n- Bước 2: T&iacute;nh to&aacute;n vật liệu lọc cần thay thế<br />\r\n- Bước 3: B&aacute;o gi&aacute; tổng chi ph&iacute; vật liệu lọc v&agrave; c&ocirc;ng thay thế cho kh&aacute;ch h&agrave;ng.<br />\r\n<br />\r\n4. NHU CẦU THAY THẾ VẬT LIỆU LỌC NƯỚC TẠI HUYỆN CỦ CHI TP HCM<br />\r\nHiện nay do t&iacute;nh chất c&ocirc;ng việc bận rộn m&agrave; nhiều gia đ&igrave;nh tại Huyện Nh&agrave; B&egrave; TP HCM kh&ocirc;ng c&oacute;<br />\r\nthời gian để chăm lo cho nguồn nước của gia đ&igrave;nh m&igrave;nh.<br />\r\nVới những kh&aacute;ch h&agrave;ng tại Huyện Nh&agrave; B&egrave; TP HCM c&oacute; nhu cầu:<br />\r\n- Mua than hoạt t&iacute;nh tại huyện Nh&agrave; B&egrave;.<br />\r\n- Mua vật liệu lọc nước tại huyện Nh&agrave; B&egrave;.<br />\r\n- Thay thế vật liệu lọc nước tại huyện Nh&agrave; B&egrave;.<br />\r\nH&atilde;y li&ecirc;n hệ ngay với ch&uacute;ng t&ocirc;i:<br />\r\nC&ocirc;ng ty TNHH M&ocirc;i trường Xuy&ecirc;n Việt<br />\r\nĐ/C: 537/18/4 Nguyễn Oanh, Phường 17, Quận G&ograve; Vấp, TP HCM<br />\r\nHotline: 0911.847.117<br />\r\nWebsite: vatlieuloc.net<br />\r\nmoitruongxuyenviet.com<br />\r\nEmail: marketing.moitruongxuyenviet@gmail.com<br />\r\n&nbsp;</p>', NULL, '[\"vat_lieu.jpg\",\"vat_lieu-1.jpg\"]', NULL, NULL, 2, 0, 16, '2020-06-29 06:06:42', '2020-06-29 07:02:23'),
(20, 2, 17, 111, 51, 1279, 28, 'chính chủ bán căn hộ đường sắt 590 cmt8', 2147483647, 'nền', 'Đ', '<p>Cần b&aacute;n chung cư Đường Sắt. (590 CMT8, Quận 3).<br />\r\n- 79m2 bao gồm 2 ph&ograve;ng ngủ, 2toilet, c&oacute; để lại nội thất.<br />\r\n- Gi&aacute; b&aacute;n 3 tỷ.<br />\r\n- Sổ hồng ch&iacute;nh chủ đầy đủ.<br />\r\n- Căn hộ hướng Đ&ocirc;ng gi&oacute; m&aacute;t, y&ecirc;n tĩnh. C&aacute;c chi ph&iacute; ở đ&acirc;y rất rẻ.</p>', NULL, '[\"image-4.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-06-30 02:36:09', '2020-06-30 02:36:09'),
(22, 4, 16, 188, 51, 1270, 30, 'Nhận làm phù hiệu xe tải giá tốt', 800000, NULL, 'Đ', '<p>Nhận l&agrave;m ph&ugrave; hiệu to&agrave;n quốc gi&aacute; tốt tr&ecirc;n thị trường<br />\r\n<br />\r\nL&agrave;m to&agrave;n quốc<br />\r\n<br />\r\nNhanh: trong 3 ng&agrave;y l&agrave; c&oacute;<br />\r\n<br />\r\nGi&aacute; tốt thị trường<br />\r\n<br />\r\nHotline: 0974 809 720 Mr Minh</p>', NULL, '[\"image-6.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-06-30 23:03:10', '2020-06-30 23:03:10'),
(23, 2, 6, 157, 65, 720, 31, 'Điều hòa mini bãi nhật corona', 3400000, 'Cái', 'Đ', '<p>C&oacute; l&ocirc; điều h&ograve;a mini b&atilde;i nhật rất tiện lợi kh&ocirc;ng c&oacute; thể di chuyển từ ph&ograve;ng n&agrave;y qua ph&ograve;ng kh&aacute;c điều h&ograve;a nhật b&atilde;i với c&ocirc;ng suất l&ecirc;n tới 7000 đến 8000 btu về cả l&ocirc; nguy&ecirc;n bản zin đẹp ph&ugrave; hợp với diện t&iacute;ch ph&ograve;ng 15 16 m&eacute;t vu&ocirc;ng tiện lợi gi&aacute; rẻ tiết kiệm điện năng</p>', NULL, '[\"tu-lanh.jpg\",\"tu-lanh-1.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-01 00:47:53', '2020-07-01 00:47:53'),
(24, 2, 6, 120, 21, 931, 32, 'Bán Xe Tải Kia 1.9 Tấn Thùng Lửng - Sẵn Xe Giao Ngay', 352000000, 'Chiếc', 'Đ', '<p>Xe tải Thaco Kia l&agrave; thương hiệu xe tải đ&atilde; v&agrave; đang được tin d&ugrave;ng suốt nhiều năm qua bởi c&oacute;<br />\r\nnhiều ưu điểm vượt trội. D&ograve;ng sản phẩm xe tải Kia K200 New tải trọng 1.9 tấn được ph&aacute;t triển từ<br />\r\nxe tải K190 trước đ&acirc;y c&ugrave;ng với nhiều cải tiến mới.<br />\r\n<br />\r\n* Cabin thiết kế ho&agrave;n to&agrave;n mới<br />\r\n<br />\r\n* C&ocirc;ng nghệ sơn mitallic s&aacute;ng b&oacute;ng v&agrave; bền m&agrave;u<br />\r\n<br />\r\n* Động cơ D4CB H&agrave;n Quốc mạnh mẽ v&agrave; bền bỉ<br />\r\n<br />\r\n* K&iacute;ch thước l&ograve;ng th&ugrave;ng h&agrave;ng: 3.200 x 1.670 x 1.830mm<br />\r\n<br />\r\n* Dung t&iacute;ch xy lanh: 2497 cm3<br />\r\n<br />\r\n* Thể t&iacute;ch th&ugrave;ng nhi&ecirc;n liệu: 65 l&iacute;t</p>', NULL, '[\"xe.jpg\",\"xe-1.png\"]', NULL, NULL, 1, 0, NULL, '2020-07-02 01:32:42', '2020-07-02 01:32:42'),
(25, 8, 6, 127, 51, 1283, 33, 'Shop Mỹ Phẩm Cao Cấp Tuyển 2 Nhân Viên Bán Hàng', 8000000, 'Tháng', 'Đ', '<p>Shop Mỹ Ph&acirc;̉m Cao C&acirc;́p Tuy&ecirc;̉n 2 Nh&acirc;n Vi&ecirc;n Bán<br />\r\nHàng<br />\r\n<br />\r\n👨&zwj;💻👨&zwj;💻👨&zwj;💻🏋️&zwj;♀️🏋️&zwj;♀️C&ocirc;ng Vi&ecirc;̣c:<br />\r\n+ Sắp s&ecirc;́p hàng hóa l&ecirc;n k&ecirc;̣, dọn dẹp ngăn nắp<br />\r\n+ Đóng gói sản ph&acirc;̉m, Thu&nbsp;Ng&acirc;n, Đóng gói<br />\r\n⏰🕜🧭🕰 Thời Gian Làm Vi&ecirc;̣c: có xoay ca<br />\r\n+ Sáng: 7h30 - 11h30<br />\r\n+ Chi&ecirc;̀u: 13h00 - 17h00<br />\r\n💎💎 LƯƠNG:<br />\r\n+ Ca 4h: 3.600.000<br />\r\n+ Ca 8h: 7.200.000<br />\r\n🏖🏖🛀🛀 Được nghĩ m&ocirc;̣t ngày trong tu&acirc;̀n<br />\r\n+ Làm l&acirc;u dài được hưởng lương tháng 13<br />\r\n+ Làm 2 tháng tăng lương<br />\r\n+ Được hưởng các ch&ecirc;́ đ&ocirc;̣ theo quy định<br />\r\ncủa nhà nước<br />\r\n❤❤Y&ecirc;u C&acirc;̀u:<br />\r\n+ Nam nữ từ 18t đ&ecirc;́n 40t có cmnd vs H&ocirc;̀ sơ xin<br />\r\nvi&ecirc;̣c<br />\r\n+ Vui vẻ hòa đ&ocirc;̀ng và có trách nhi&ecirc;̣m trong c&ocirc;ng<br />\r\nvi&ecirc;̣c<br />\r\n+ Si&ecirc;ng năng gọn gàng sạch sẽ và trung thực<br />\r\n❤❤ Quyền lợi<br />\r\n+ Được nghỉ một ng&agrave;y trong tuần v&agrave; ng&agrave;y lễ<br />\r\n📞☎️☎️☎️ Li&ecirc;n H&ecirc;: 0927549709 hoặc<br />\r\n0706538090 (c&ograve;n tin l&agrave; c&ograve;n tuyển)</p>', NULL, '[\"ban-hang.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-02 02:25:45', '2020-07-02 02:25:45'),
(26, 2, 6, 140, 51, 1285, 34, 'HCM Cần bán máy ảnh Canon X5 Kiss 600D + Lens 700D', 4100000, 'Máy', 'Đ', '<p>Cần b&aacute;n m&aacute;y ảnh Canon X5 Kiss của nhật, việt nam k&yacute; hiệu l&agrave; 600D k&egrave;m theo Lens m&aacute;y canon 700d, M&aacute;y e chụp khoảng 40k shoot E x&agrave;i kỹ n&ecirc;n chưa trầy g&igrave; hết M&aacute;y đầy đủ c&aacute;p kết nối m&aacute;y t&iacute;nh, sạc pin zin theo m&aacute;y, Tặng k&egrave;m bao đựng xịn cho m&aacute;y như h&igrave;nh anh chị n&agrave;o quan t&acirc;m li&ecirc;n hệ sđt (). m&igrave;nh ở Hcm ạ C&aacute;m ơn đ&atilde; xem tin</p>', NULL, '[\"may-anh.jpg\",\"may-anh-1.jpg\",\"may-anh-3.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-02 10:48:39', '2020-07-02 10:48:39'),
(27, 2, 16, 122, 51, 1275, 35, 'Cần bán gấp HONDA PS 150 nhập khẩu ý', 36500000, 'Chiếc', 'Đ', '<p>Cần b&aacute;n gấp HONDA PS 150 nhập khẩu &yacute; 2007 bstp. xe nữ sử dụng kỹ,r&aacute;n keo nguy&ecirc;n xe. m&aacute;y zin<br />\r\nnguy&ecirc;n bản, xem xe l&agrave; ưng &yacute; b&aacute;n gi&aacute;; 36,5tr c&ocirc;ng chứng sang t&ecirc;n ngay sau khi mua. mọi th&ocirc;ng tin<br />\r\nlh; 0964.557.303 mr giang t&acirc;n b&igrave;nh tphcm</p>', NULL, '[\"xe-tay-ga.jpg\"]', NULL, NULL, 1, 1, 11, '2020-07-07 01:55:37', '2020-07-07 01:55:37'),
(28, 2, 6, 169, 51, 1271, 36, 'Longines Automatic Vàng đúc nguyên khối 18k fullbox New 99%', 38000000, 'Cái', 'Đ', '<p>Longines Automatic V&agrave;ng đ&uacute;c nguy&ecirc;n khối 18k fullbox<br />\r\n✔️ Hiện trạng : New 99.9% , Ch&iacute;nh h&atilde;ng nguy&ecirc;n zin nguy&ecirc;n bản<br />\r\n✔️ Chất liệu vỏ : Vỏ v&agrave;ng đ&uacute;c nguy&ecirc;n khối 18K<br />\r\n✔️ Mặt k&iacute;nh: K&iacute;nh sapphire chống trầy<br />\r\n✔️ Chất liệu d&acirc;y: d&acirc;y da nguy&ecirc;n zin của ĐH<br />\r\n✔️ Gồm c&oacute; : Đồng hồ, s&aacute;ch hướng dẫn...<br />\r\n✔️ Độ chống nước : 50m<br />\r\n✔️ Size : 34.5 mm<br />\r\n___________________________________________<br />\r\n___________________________________________<br />\r\n<br />\r\n✔️ Gi&aacute; New Store VN đang b&aacute;n gần 80 triệu<br />\r\nhttps://donghochinhhang.com/products/dong-ho-longines-l4-778-8-12-0<br />\r\nB&aacute;n Gi&aacute; : 3x triệu<br />\r\nTel : 0942.063.063 - Nguyễn Chương ( Call/Zalo/Viber/Imess )</p>', 'Longines Automatic', '[\"dong-ho.jpg\",\"dong-ho-1.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-07 09:49:01', '2020-07-07 09:49:01'),
(29, 2, 11, 144, 51, 1276, 37, 'Samsung A7 2018 128GB chính hãng SSVN likenew', 3150000, 'Chiếc', 'Đ', '<p>VIỆT KH&Aacute;NH MOBILE<br />\r\nCHUY&Ecirc;N MUA B&Aacute;N TRAO ĐỔI C&Aacute;C LOẠI SMARTPHONE CH&Iacute;NH H&Atilde;NG - BẢO H&Agrave;NH CHU<br />\r\nĐ&Aacute;O CHO C&Aacute;C BẠN Y&Ecirc;N T&Acirc;M SỬ DỤNG.<br />\r\n------------------------------*******************-----------------------------<br />\r\nĐC: 66/3 Nguyễn Đỗ Cung - P. T&acirc;y Thạnh - Q. T&acirc;n Ph&uacute; (Gần Trường ĐH C&ocirc;ng Nghiệp Thực<br />\r\nPhẩm Đường L&ecirc; Trọng Tấn)<br />\r\nĐT: 0909.338823 - 0939.338823<br />\r\nWebsite: http://vietkhanhmobile.gianhangvn.com/<br />\r\n<br />\r\nSản phẩm: Samsung Galaxy A7 2018<br />\r\nM&agrave;n h&igrave;nh 6.0 in<br />\r\nCPU Exynos 7885 8 nh&acirc;n 64-bit 2 nh&acirc;n 2.2 GHz Cortex-A73 &amp; 6 nh&acirc;n 1.6 GHz Cortex-A53<br />\r\nRam 4GB &amp; 6GB<br />\r\nRom 64GB &amp; 128GB<br />\r\nCamera sau 24MP &amp; 8MP &amp; 5MP - Trước 24 MP<br />\r\nThẻ sim: 2 sim<br />\r\nT&igrave;nh trạng m&aacute;y cty ch&iacute;nh h&atilde;ng Samsung đẹp likenew c&oacute; sẵn tiếng việt chỉ việc bỏ sim v&agrave;o l&agrave; x&agrave;i<br />\r\nvi vu (kh&ocirc;ng phải h&agrave;ng Trung quốc nh&aacute;i - Ph&aacute;t hiện h&agrave;ng nh&aacute;i tặng nguy&ecirc;n c&aacute;i m&aacute;y lu&ocirc;n nh&eacute; cả<br />\r\nnh&agrave;)<br />\r\n<br />\r\nGi&aacute;: 3.150.000đ (bản Ram 4/64GB m&aacute;y đẹp 98%)<br />\r\nGi&aacute;: 3.500.000đ (bản Ram 4/64GB m&aacute;y đẹp như mới)<br />\r\nGi&aacute;: 3.999.000đ (bản Ram 6/128GB )<br />\r\nSản phẩm được bảo h&agrave;nh 03 th&aacute;ng (Tiền n&agrave;o của đ&oacute; nha c&aacute;c bạn - b&aacute;n đ&uacute;ng gi&aacute;, qu&yacute; kh&aacute;ch vui<br />\r\nl&ograve;ng kh&ocirc;ng trả gi&aacute;)<br />\r\n<br />\r\nQ&Uacute;Y KH&Aacute;CH LƯU &Yacute;: T&Igrave;NH TRẠNG M&Aacute;Y, GI&Aacute; CẢ, PHỤ KIỆN ĐI K&Egrave;M, THỜI GIAN BẢO H&Agrave;NH<br />\r\nĐ&Atilde; ĐƯỢC GHI R&Otilde; Ở TR&Ecirc;N. GI&Aacute; CẢ ĐƯỢC CẬP NHẬT H&Agrave;NG NG&Agrave;Y, TIN C&Ograve;N ĐĂNG L&Agrave;<br />\r\nC&Ograve;N H&Agrave;NG. B&Ecirc;N M&Igrave;NH NHẬN TRAO ĐỔI M&Aacute;Y LU&Ocirc;N NH&Eacute; C&Aacute;C BẠN. CẢM ƠN C&Aacute;C BẠN Đ&Atilde;<br />\r\nXEM TIN</p>', NULL, '[\"dt-samsung.jpg\",\"dt-samsung-1.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-11 10:25:45', '2020-07-11 10:25:45'),
(32, 2, 16, 151, 51, 1280, 45, 'TRẠI PDLE SỈ LẼ UY TÍN TPHCM Q10', 3900000, 'con', 'Đ', 'Chuyên cung cấp sỉ và lẽ dòng chó poodle đẹp,xinh khỏe mạnh uy tin.ship nội ngoại thành.ai cần lhe Sài gòn Q 10', NULL, '[\"cho-long-xu.jpg\",\"cho-long-xu-1.jpg\"]', NULL, NULL, 1, 0, NULL, '2020-07-16 06:31:04', '2020-07-16 06:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_types`
--

CREATE TABLE `post_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_new_id` bigint(20) UNSIGNED DEFAULT NULL,
  `report_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `post_new_id`, `report_name`, `username`, `email`, `created_at`, `updated_at`) VALUES
(1, 15, 'Tin lặp lại nội dung', 'tuantkd', '+840326827373', '2020-06-27 08:06:09', '2020-06-27 08:06:09'),
(2, 24, 'Tin lặp lại nội dung', 'Phạm Tấn Nhất', '0326827373', '2020-07-05 05:51:49', '2020-07-05 05:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` int(11) DEFAULT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `activation_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number_money` double(8,2) DEFAULT NULL,
  `number_of_posting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level_id`, `fullname`, `username`, `email`, `verifyToken`, `verify`, `email_verified_at`, `password`, `remember_token`, `sex`, `birthday`, `phone`, `address`, `avatar`, `google_id`, `facebook_id`, `activation_token`, `number_money`, `number_of_posting`, `created_at`, `updated_at`) VALUES
(6, 1, 'Nguyễn Văn Tuấn', 'tuantkd', 'tuanb1607138@student.ctu.edu.vn', NULL, 0, NULL, '$2y$10$Yj2v.zMlutNhXIu4tMuwsOLWfb7kqiaklbc5jObtWzUI2LXA.fpyi', NULL, 'Nam', '1998-01-25', '0326827373', 'Ấp 3, Xã Vị Thủy, Huyện Vị Thủy, Tỉnh Hậu Giang', 'bap.jpg', NULL, NULL, NULL, 40000.00, 10, '2020-06-18 05:52:08', '2020-07-04 06:23:25'),
(11, 2, 'Nguyễn Văn Tùng', 'tung01', 'agrimate.vn@gmail.com', '', 1, NULL, '$2y$10$wEB.pcheW2SyV/wL/TWJ9ekmfN/uPgPC.aV0q2p60JZSyuO5kA.Pi', NULL, 'Nam', '2020-06-25', '0859134539', 'Cần Thơ', 'Thu_cung.jpg', NULL, NULL, NULL, 150000.00, 10, '2020-06-25 04:43:36', '2020-07-09 12:15:19'),
(16, 2, NULL, 'Tuan Tkd', 'nguyenvantuan9a7@gmail.com', 'EAAEPxT4VpRIBAFrJ3AcgeWSF25hcEUUxArz1On52yntgB9VGZBL6bHL80RqsKtDI6HxvZBYGUSOigqqxwnIHYnAONhEA1ZAnVfdfzgqhYmkSXimqIpZCVVYGDIiTh9RKUeucrDKTSSextYZCZBFMOOd50vlZBGZCEkZCQbXNvPntqTAZDZD', 1, NULL, NULL, 'NrFFhK9Y00Hp08ayaalDCWhkjKJqirBaMuR4IfmN4wlvfZ09mIPqSXJfs0Ew', 'Nam', NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/2484322845186561/picture?type=normal', NULL, '2484322845186561', '535463', 81000.00, 9, '2020-06-25 18:11:50', '2020-08-04 18:09:35'),
(17, 2, NULL, 'Tran Thi Xiu B1801861', 'xiub1801861@student.ctu.edu.vn', 'ya29.a0AfH6SMAuKFDdzXOjPqHKlZFGRzstXC4oIwi7BGBbOixLtJeur6OYTkNjD1GPbQK1x6Wd8nIsY3SKy6cKa-TFNnl-09mqD0qAE-IaxZyEj1MdOUSpPjxl5G5kdfqfBqMEgMfYmx7lORMGTzqnRbJM2EqsPQIaqN-4XJY', 1, NULL, NULL, '3kdsVPFlc4mB3H5LZ8J9mj90xC5wfl09LJd5iPdk2HIzH3dbII4ncDF5NXy1', NULL, NULL, NULL, NULL, 'https://lh6.googleusercontent.com/-Fj9HV03BDtw/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucmm8YYHCAutx6c9tajCt0s5cKtR2Q/photo.jpg', '103794355000564956927', NULL, NULL, 520000.00, 10, '2020-06-30 09:30:48', '2020-06-30 09:30:48'),
(19, 1, 'Phạm tấn nhất', 'nhatbinhduong', 'buithianh3379@gmail.com', NULL, 0, NULL, '$2y$10$4yr7bq3LgCL4Vdy5SRYUuu4uU5gqoghgd.MomCLGxw0mxFylA37RO', NULL, 'Nam', '1979-01-31', '0886912799', 'Tân thiện - Đồng xoài - Bình phước', 'nhat.jpg', NULL, NULL, NULL, NULL, 10, '2020-07-04 11:12:02', '2020-07-05 00:23:35'),
(22, 2, 'Lê Ái Trinh', 'trinhai', 'cho24gio.net@gmail.com', '', 1, NULL, '$2y$10$QtcL3Y6ytbvRbDYwpRAFTuflYt1knyQpZNmV7q.I/rYQaXoqWrJaq', NULL, NULL, NULL, '0326827379', NULL, NULL, NULL, NULL, NULL, 50000.00, 10, '2020-07-09 01:28:08', '2020-07-09 02:13:05');

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
  ADD KEY `post_news_district_id_foreign` (`district_id`),
  ADD KEY `post_news_category_second_id_foreign` (`category_second_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_post_new_id_foreign` (`post_new_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_news`
--
ALTER TABLE `post_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  ADD CONSTRAINT `post_news_category_second_id_foreign` FOREIGN KEY (`category_second_id`) REFERENCES `category_child_seconds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_post_new_id_foreign` FOREIGN KEY (`post_new_id`) REFERENCES `post_news` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
