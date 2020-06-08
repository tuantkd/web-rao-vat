-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2020 at 03:54 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

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
  `title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Nhà cửa - Đất đai', '2020-06-07 06:00:07', '2020-06-07 06:00:07'),
(2, 'Việc làm - Tuyển sinh', '2020-06-07 06:03:29', '2020-06-07 06:03:29'),
(3, 'Cơ khí - Máy móc', '2020-06-07 06:04:17', '2020-06-07 06:04:17'),
(4, 'Điện máy - Điện tử', '2020-06-07 06:04:32', '2020-06-07 06:04:32'),
(5, 'Thời trang - Làm đẹp', '2020-06-07 06:04:50', '2020-06-07 06:04:50'),
(6, 'Đời sống -  Xã hội', '2020-06-07 06:05:06', '2020-06-07 06:05:06'),
(7, 'Ô tô - Xe máy', '2020-06-07 06:05:20', '2020-06-07 06:05:20'),
(8, 'Máy tính - Linh kiện', '2020-06-07 06:05:38', '2020-06-07 06:05:38'),
(9, 'Dịch vụ', '2020-06-07 06:05:48', '2020-06-07 06:05:48'),
(10, 'Kinh doanh', '2020-06-07 06:05:56', '2020-06-07 06:05:56'),
(11, 'Hàng hóa - Vật liệu', '2020-06-07 06:06:12', '2020-06-07 06:06:12'),
(12, 'Công nghệ thông tin', '2020-06-07 06:06:24', '2020-06-07 06:06:24'),
(13, 'Điện thoại - Phụ kiện', '2020-06-07 06:06:39', '2020-06-07 06:06:39'),
(14, 'Mỹ thuật - Thiết kế', '2020-06-07 06:06:57', '2020-06-07 06:06:57'),
(15, 'Ẩm thực - Thực phẩm', '2020-06-07 06:07:12', '2020-06-07 06:07:12');

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
(1, 1, 'Mua nhà, bán nhà', '2020-06-07 06:37:17', '2020-06-07 06:37:17'),
(2, 1, 'Thuê và cho thuê nhà', '2020-06-07 06:37:50', '2020-06-07 06:37:50'),
(3, 1, 'Mua đất, bán đất', '2020-06-07 06:38:09', '2020-06-07 06:38:09'),
(4, 1, 'Vật liệu xây dựng', '2020-06-07 06:38:23', '2020-06-07 06:38:23'),
(5, 1, 'Thi công xây dựng', '2020-06-07 06:38:40', '2020-06-07 06:38:40'),
(6, 1, 'Sang nhượng QSD', '2020-06-07 06:38:59', '2020-06-07 06:38:59'),
(7, 1, 'Nội thất', '2020-06-07 06:39:10', '2020-06-07 06:39:10'),
(8, 1, 'Ngoại thất', '2020-06-07 06:39:20', '2020-06-07 06:39:20'),
(9, 1, 'Kiến trúc', '2020-06-07 06:39:56', '2020-06-07 06:39:56'),
(10, 1, 'Các loại khác', '2020-06-07 06:40:27', '2020-06-07 06:40:27'),
(11, 2, 'Tuyển sinh', '2020-06-07 06:44:40', '2020-06-07 06:44:40'),
(12, 2, 'Dạy kèm', '2020-06-07 06:44:59', '2020-06-07 06:44:59'),
(13, 2, 'Học hành', '2020-06-07 06:45:12', '2020-06-07 06:45:12'),
(14, 2, 'Người tìm việc', '2020-06-07 06:45:26', '2020-06-07 06:45:26'),
(15, 2, 'Giáo dục, đào tạo', '2020-06-07 06:45:45', '2020-06-07 06:45:45'),
(16, 2, 'Dịch vụ lao động', '2020-06-07 06:45:57', '2020-06-07 06:45:57'),
(17, 3, 'Thiết bị văn phòng', '2020-06-07 06:48:01', '2020-06-07 06:48:01'),
(18, 3, 'Thiết bị bảo an, bảo vệ', '2020-06-07 06:48:18', '2020-06-07 06:48:18'),
(19, 3, 'Cơ khí', '2020-06-07 06:48:29', '2020-06-07 06:48:29'),
(20, 3, 'Điện lạnh', '2020-06-07 06:48:40', '2020-06-07 06:48:40'),
(21, 3, 'Kỹ thuật, ứng dụng', '2020-06-07 06:48:54', '2020-06-07 06:48:54'),
(22, 4, 'Điện tử', '2020-06-07 06:49:27', '2020-06-07 06:49:27'),
(23, 4, 'Điện gia dụng', '2020-06-07 06:49:39', '2020-06-07 06:49:39'),
(24, 4, 'Điện lạnh', '2020-06-07 06:49:49', '2020-06-07 06:49:49'),
(25, 4, 'Thiết bị số khác', '2020-06-07 06:50:05', '2020-06-07 06:50:05'),
(26, 4, 'Thiết bị trình chiếu', '2020-06-07 06:50:18', '2020-06-07 06:50:18'),
(27, 4, 'Máy nghe nhạc', '2020-06-07 06:50:33', '2020-06-07 06:50:33'),
(28, 4, 'Máy ảnh số', '2020-06-07 06:50:42', '2020-06-07 06:50:42'),
(29, 4, 'Máy chơi game', '2020-06-07 06:50:56', '2020-06-07 06:50:56'),
(30, 5, 'Mỹ phẩm', '2020-06-07 06:51:23', '2020-06-07 06:51:23'),
(31, 5, 'Giày dép', '2020-06-07 06:51:33', '2020-06-07 06:51:33'),
(32, 5, 'Đồng hồ, mắt kính', '2020-06-07 06:51:51', '2020-06-07 06:51:51'),
(33, 5, 'Trang sức', '2020-06-07 06:52:04', '2020-06-07 06:52:04'),
(34, 5, 'Khác', '2020-06-07 06:52:21', '2020-06-07 06:52:21'),
(35, 6, 'Trong nước', '2020-06-07 06:52:41', '2020-06-07 06:52:41'),
(36, 6, 'Văn phòng luật', '2020-06-07 06:52:56', '2020-06-07 06:52:56'),
(37, 6, 'Đồ chơi', '2020-06-07 06:53:11', '2020-06-07 06:53:11'),
(38, 6, 'Gift shop', '2020-06-07 06:53:22', '2020-06-07 06:53:22'),
(39, 6, 'Ngoài nước', '2020-06-07 06:53:37', '2020-06-07 06:53:37'),
(40, 6, 'Thông báo, tin nhắn', '2020-06-07 06:53:49', '2020-06-07 06:53:49'),
(41, 6, 'Cá kiểng, cây cảnh', '2020-06-07 06:54:16', '2020-06-07 06:54:16'),
(42, 6, 'Sách, truyện, báo', '2020-06-07 06:54:30', '2020-06-07 06:54:30'),
(43, 6, 'Ngữ văn, dịch thuật', '2020-06-07 06:54:45', '2020-06-07 06:54:45'),
(44, 6, 'Kết bạn', '2020-06-07 06:54:58', '2020-06-07 06:54:58'),
(45, 6, 'Hoa tươi', '2020-06-07 06:55:09', '2020-06-07 06:55:09'),
(46, 6, 'CD, DVD, phim ảnh', '2020-06-07 06:55:24', '2020-06-07 06:55:24'),
(47, 6, 'Rơi giấy tờ', '2020-06-07 06:55:37', '2020-06-07 06:55:37'),
(48, 6, 'Y khoa, y tế', '2020-06-07 06:55:55', '2020-06-07 06:55:55'),
(49, 6, 'Luật', '2020-06-07 06:56:06', '2020-06-07 06:56:06'),
(50, 6, 'Thông tin, quảng cáo', '2020-06-07 06:56:19', '2020-06-07 06:56:19'),
(51, 6, 'Games', '2020-06-07 06:56:27', '2020-06-07 06:56:27'),
(52, 6, 'Thể dục, thể thao', '2020-06-07 06:56:40', '2020-06-07 06:56:40'),
(53, 6, 'Văn phòng phẩm', '2020-06-07 06:56:53', '2020-06-07 06:56:53'),
(54, 6, 'Thú nuôi, vật nuôi', '2020-06-07 06:57:12', '2020-06-07 06:57:12'),
(55, 7, 'Ô tô', '2020-06-07 06:57:36', '2020-06-07 06:57:36'),
(56, 7, 'Xe tải', '2020-06-07 06:57:45', '2020-06-07 06:57:45'),
(57, 7, 'Nộ thất, đồ chơi ô tô', '2020-06-07 06:58:02', '2020-06-07 06:58:02'),
(58, 7, 'Xe máy', '2020-06-07 06:58:09', '2020-06-07 06:58:09'),
(59, 7, 'Xe đạp điện', '2020-06-07 06:58:23', '2020-06-07 06:58:23'),
(60, 7, 'Mũ bảo hiểm', '2020-06-07 06:58:36', '2020-06-07 06:58:36'),
(61, 8, 'Laptop, notebook', '2020-06-07 06:59:09', '2020-06-07 06:59:09'),
(62, 8, 'Máy in, mực in', '2020-06-07 06:59:20', '2020-06-07 06:59:20'),
(63, 8, 'Máy bộ, Desktop PC', '2020-06-07 06:59:42', '2020-06-07 06:59:42'),
(64, 8, 'Hàng thanh lý', '2020-06-07 06:59:53', '2020-06-07 06:59:53'),
(65, 8, 'Thiết bị mạng', '2020-06-07 07:00:04', '2020-06-07 07:00:04'),
(66, 9, 'Tổ chức sự kiện', '2020-06-07 07:00:26', '2020-06-07 07:00:26'),
(67, 9, 'Dịch vụ vận chuyển', '2020-06-07 07:00:48', '2020-06-07 07:00:48'),
(68, 9, 'Dịch vụ chuyển phát', '2020-06-07 07:00:58', '2020-06-07 07:00:58'),
(69, 9, 'An ninh, bảo vệ', '2020-06-07 07:01:12', '2020-06-07 07:01:12'),
(70, 9, 'Du lịch', '2020-06-07 07:01:23', '2020-06-07 07:01:23'),
(71, 9, 'Sửa chữa, bảo chì', '2020-06-07 07:01:35', '2020-06-07 07:01:35'),
(72, 9, 'Vận tải, vận chuyển', '2020-06-07 07:01:55', '2020-06-07 07:01:55'),
(73, 10, 'Hợp tác, cộng tác', '2020-06-07 07:02:53', '2020-06-07 07:02:53'),
(74, 10, 'Doanh nghiệp', '2020-06-07 07:03:05', '2020-06-07 07:03:05'),
(75, 10, 'Mua bán qua mạng', '2020-06-07 07:03:16', '2020-06-07 07:03:16'),
(76, 10, 'Chứng khoán, cổ phiếu', '2020-06-07 07:03:33', '2020-06-07 07:03:33'),
(77, 10, 'Tài chính, kế toán', '2020-06-07 07:03:48', '2020-06-07 07:03:48'),
(78, 11, 'Hoàng hóa, vật liệu', '2020-06-07 07:05:01', '2020-06-07 07:05:01'),
(79, 11, 'Thanh lý, khuyến mãi', '2020-06-07 07:05:16', '2020-06-07 07:05:16'),
(80, 11, 'Nông, lâm, thủy sản', '2020-06-07 07:05:32', '2020-06-07 07:05:32'),
(81, 11, 'Đồ gỗ cao cấp', '2020-06-07 07:05:46', '2020-06-07 07:05:46'),
(82, 11, 'Vàng bạc, đá quý', '2020-06-07 07:05:58', '2020-06-07 07:05:58'),
(83, 11, 'Đồ cổ, hàng hiếm', '2020-06-07 07:06:18', '2020-06-07 07:06:18'),
(84, 11, 'Dệt may, vải sợi', '2020-06-07 07:06:45', '2020-06-07 07:06:45'),
(85, 11, 'Hóa chất, sinh học', '2020-06-07 07:06:58', '2020-06-07 07:06:58'),
(86, 12, 'Phần mềm', '2020-06-07 07:07:33', '2020-06-07 07:07:33'),
(87, 12, 'Giới thiệu Website', '2020-06-07 07:07:46', '2020-06-07 07:07:46'),
(88, 12, 'Dịch vụ tin học', '2020-06-07 07:07:58', '2020-06-07 07:07:58'),
(89, 12, 'Viễn thông', '2020-06-07 07:08:08', '2020-06-07 07:08:08'),
(90, 12, 'Điện thoại VoIP', '2020-06-07 07:08:37', '2020-06-07 07:08:37'),
(91, 12, 'Internet', '2020-06-07 07:08:49', '2020-06-07 07:08:49'),
(92, 12, 'Domain, Web, Hosting', '2020-06-07 07:09:17', '2020-06-07 07:09:17'),
(93, 12, 'Dịch vụ khác', '2020-06-07 07:09:30', '2020-06-07 07:09:30'),
(94, 13, 'Điện thoại di động', '2020-06-07 07:09:53', '2020-06-07 07:09:53'),
(95, 13, 'Linh kiện', '2020-06-07 07:10:04', '2020-06-07 07:10:04'),
(96, 13, 'Sim, card, thẻ', '2020-06-07 07:10:18', '2020-06-07 07:10:18'),
(97, 13, 'Phần mềm ĐTDĐ', '2020-06-07 07:10:45', '2020-06-07 07:10:45'),
(98, 14, 'In ấn, thiết kế', '2020-06-07 07:11:04', '2020-06-07 07:11:04'),
(99, 14, 'Trang trí nội thất', '2020-06-07 07:11:22', '2020-06-07 07:11:22'),
(100, 14, 'Tranh ảnh nghệ thuât', '2020-06-07 07:11:41', '2020-06-07 07:11:41'),
(101, 14, 'Mỹ thuật, kiến trúc', '2020-06-07 07:11:55', '2020-06-07 07:11:55'),
(102, 14, 'Thủ công, mỹ nghệ', '2020-06-07 07:12:13', '2020-06-07 07:12:13'),
(103, 15, 'Thực phẩm dinh dưỡng', '2020-06-07 07:12:36', '2020-06-07 07:12:36'),
(104, 15, 'Tiệc cưới', '2020-06-07 07:12:48', '2020-06-07 07:12:48'),
(105, 15, 'Ẩm thực khác', '2020-06-07 07:12:59', '2020-06-07 07:12:59'),
(106, 2, 'Việc tìm người', '2020-06-07 07:14:05', '2020-06-07 07:14:05'),
(107, 3, 'Thiết bị sản xuất', '2020-06-07 07:14:31', '2020-06-07 07:14:31'),
(108, 5, 'Quần áo, thời trang', '2020-06-07 07:15:10', '2020-06-07 07:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `category_child_seconds`
--

CREATE TABLE `category_child_seconds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_first_id` bigint(20) UNSIGNED NOT NULL,
  `type_property` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `project_name` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `land_area` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `floor` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `bathroom` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `area_used` int(11) NOT NULL,
  `juridical` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `type_work` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `year_old` int(11) NOT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `certificate` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `foreign_anguage` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `position` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `job` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `experience` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `level_salary` int(11) NOT NULL,
  `manufacture` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `color_item` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `new_percent_item` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `year_manufacture` int(11) NOT NULL,
  `manufacture_item` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `fuel` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `model_line_item` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `expiration_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(6, '2020_06_05_072227_create_categorys_table', 1),
(7, '2020_06_05_072525_create_banners_table', 1),
(8, '2020_06_05_072554_create_news_table', 1),
(9, '2020_06_05_072632_create_category_child_firsts_table', 1),
(12, '2020_06_05_072905_create_post_news_table', 1),
(13, '2014_10_12_000000_create_users_table', 2),
(14, '2020_06_05_072710_create_districts_table', 3),
(15, '2020_06_05_072650_create_category_child_seconds_table', 4);

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
-- Table structure for table `post_news`
--

CREATE TABLE `post_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `title` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `currency` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `tag_search` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `duration` double(8,2) NOT NULL,
  `hide_new` double(8,2) NOT NULL,
  `category_new` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(64, 'Tỉnh Cà Mau', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level_id` int(11) NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8_unicode_ci,
  `number_money` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level_id`, `fullname`, `username`, `email`, `verifyToken`, `verify`, `email_verified_at`, `password`, `remember_token`, `sex`, `birthday`, `phone`, `address`, `image`, `number_money`, `created_at`, `updated_at`) VALUES
(1, 1, 'Huỳnh Mi Nết', 'HuynhNet', 'huynhnet72@gmail.com', NULL, 1, NULL, '$2y$10$Vsxj0w55a.ZHoEiXSiToce0s1PBrIdXVp.pt7Elm8egqRfqktQyaO', NULL, 'Nam', '1999-08-19', '0859134539', 'Cà Mau', NULL, NULL, '2020-06-06 01:32:25', '2020-06-06 01:32:25'),
(3, 1, 'Huỳnh Văn Tuấn', 'TuanTKD', 'nguyenvantuan9a7@gmail.com', NULL, NULL, NULL, '$2y$10$pKP3e6ihL0M3MfjTEf3ACe.oNUMGAsH97xpay0DC9YP2hQNXKhPGG', NULL, 'Nam', '1997-11-13', '0326827373', 'Hậu Giang', NULL, NULL, '2020-06-06 01:46:06', '2020-06-06 01:46:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `post_news`
--
ALTER TABLE `post_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_news_post_type_id_foreign` (`post_type_id`),
  ADD KEY `post_news_user_id_foreign` (`user_id`),
  ADD KEY `post_news_category_id_foreign` (`category_id`),
  ADD KEY `post_news_province_id_foreign` (`province_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category_child_firsts`
--
ALTER TABLE `category_child_firsts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `category_child_seconds`
--
ALTER TABLE `category_child_seconds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_news`
--
ALTER TABLE `post_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_types`
--
ALTER TABLE `post_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

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
  ADD CONSTRAINT `post_news_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_post_type_id_foreign` FOREIGN KEY (`post_type_id`) REFERENCES `post_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
