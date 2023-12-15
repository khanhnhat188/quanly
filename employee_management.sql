-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 15, 2023 lúc 03:41 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `employee_management`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(1, 'IT'),
(3, 'Kế toán'),
(7, 'Tên_Mới 7A1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `birthday` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `district` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `ward` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `full_address` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `phone`, `email`, `city`, `district`, `ward`, `full_address`) VALUES
(7, 'Thiện', 'Anh', '2023-12-06', 'Nữ', '012345', 'a@av.vn', 'Tỉnh Bình Định', 'Huyện An Lão', 'Thị trấn An Lão', 'Ấp 2'),
(9, 'Nhật', 'Khánh', '12/15/2023', 'Female', '0358854764', 'nhat@a.vn', 'Tỉnh Hậu Giang', 'Thành phố Ngã Bảy', 'Phường Ngã Bảy', '123 Khu vực 1'),
(11, 'John', 'Doe', '1990-05-15', 'Nam', '+123456789', 'john.doe@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(12, 'Jane', 'Smith', '1985-08-20', 'Nữ', '+987654321', 'jane.smith@email.com', 'Tỉnh Bạc Liêu', 'Huyện Vĩnh Lợi', 'Xã Vĩnh Hưng', '256 Nguyễn Huệ'),
(13, 'Michael', 'Johnson', '1992-02-28', 'Nam', '+111222333', 'michael.johnson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(14, 'Emily', 'Williams', '1988-11-10', 'Nữ', '+444555666', 'emily.williams@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(15, 'Daniel', 'Brown', '1995-07-03', 'Nam', '+777888999', 'daniel.brown@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(16, 'Sophia', 'Davis', '1991-04-18', 'Nữ', '+333444555', 'sophia.davis@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(17, 'Ryan', 'Miller', '1987-09-25', 'Nam', '+666777888', 'ryan.miller@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(18, 'Olivia', 'Moore', '1993-12-05', 'Nữ', '+222333444', 'olivia.moore@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(19, 'Ethan', 'Anderson', '1986-06-14', 'Nam', '+555666777', 'ethan.anderson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(20, 'Ava', 'Taylor', '1994-03-08', 'Nữ', '+888999000', 'ava.taylor@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(21, 'Liam', 'Wilson', '1997-01-21', 'Nam', '+111222333', 'liam.wilson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(22, 'Mia', 'Martinez', '1989-10-12', 'Nữ', '+444555666', 'mia.martinez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(23, 'Noah', 'Hernandez', '1996-08-02', 'Nam', '+777888999', 'noah.hernandez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(24, 'Emma', 'Garcia', '1990-05-15', 'Nữ', '+123456789', 'emma.garcia@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(25, 'Jackson', 'Lopez', '1985-08-20', 'Nam', '+987654321', 'jackson.lopez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(26, 'Chloe', 'Clark', '1992-02-28', 'Nữ', '+111222333', 'chloe.clark@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(27, 'Aiden', 'Young', '1988-11-10', 'Nam', '+444555666', 'aiden.young@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(28, 'Isabella', 'Lewis', '1995-07-03', 'Nữ', '+777888999', 'isabella.lewis@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(29, 'Carter', 'Adams', '1991-04-18', 'Nam', '+333444555', 'carter.adams@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ'),
(30, 'Lily', 'Hall', '1987-09-25', 'Nữ', '+666777888', 'lily.hall@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee_departments`
--

DROP TABLE IF EXISTS `employee_departments`;
CREATE TABLE IF NOT EXISTS `employee_departments` (
  `employee_id` int DEFAULT NULL,
  `department_id` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  KEY `FK_employee` (`employee_id`),
  KEY `Fk_department` (`department_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employee_roles`
--

DROP TABLE IF EXISTS `employee_roles`;
CREATE TABLE IF NOT EXISTS `employee_roles` (
  `employee_id` int DEFAULT NULL,
  `role_id` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  KEY `Fk_role` (`role_id`),
  KEY `Fk_employee_id` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int NOT NULL AUTO_INCREMENT,
  `employee_id` int NOT NULL DEFAULT '0',
  `salary` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `start_date` date NOT NULL,
  PRIMARY KEY (`salary_id`),
  KEY `FK_employee_salary` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL,
  `employee_id` int NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `password` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `image_url` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`),
  KEY `Fk_employee_user` (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `employee_departments`
--
ALTER TABLE `employee_departments`
  ADD CONSTRAINT `Fk_department` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `FK_employee` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Các ràng buộc cho bảng `employee_roles`
--
ALTER TABLE `employee_roles`
  ADD CONSTRAINT `Fk_employee_id` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`),
  ADD CONSTRAINT `Fk_role` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `FK_employee_salary` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Fk_employee_user` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
