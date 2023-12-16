-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 16, 2023 lúc 01:35 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `departments`
--

INSERT INTO `departments` (`id`, `name`) VALUES
(3, 'Kế toán'),
(11, 'Kinh doanh'),
(12, 'Nhân sự'),
(13, 'Tài chính'),
(14, 'Kỹ thuật'),
(15, 'Quảng cáo'),
(16, 'Marketing'),
(17, 'Nghiên cứu và phát triển'),
(18, 'Hỗ trợ khách hàng');

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
  `departments` int DEFAULT NULL,
  `roles` int DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `FK_departments` (`departments`),
  KEY `FK_roles` (`roles`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `phone`, `email`, `city`, `district`, `ward`, `full_address`, `departments`, `roles`) VALUES
(7, 'Thiện', 'Anh', '2023-12-06', 'Nữ', '012345', 'a@av.vn', 'Tỉnh Bắc Ninh', 'Thị xã Quế Võ', 'Xã Mộ Đạo', 'Ấp 2', 13, 6),
(9, 'Nhật', 'Khánh', '12/15/2023', 'Female', '0358854764', 'nhat@a.vn', 'Tỉnh Hậu Giang', 'Thành phố Ngã Bảy', 'Phường Ngã Bảy', '123 Khu vực 1', NULL, NULL),
(11, 'John', 'Doe', '1990-05-15', 'Nam', '+123456789', 'john.doe@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(12, 'Jane', 'Smith', '1985-08-20', 'Nữ', '+987654321', 'jane.smith@email.com', 'Tỉnh Bạc Liêu', 'Huyện Vĩnh Lợi', 'Xã Vĩnh Hưng', '256 Nguyễn Huệ', NULL, NULL),
(13, 'Michael', 'Johnson', '1992-02-28', 'Nam', '+111222333', 'michael.johnson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(14, 'Emily', 'Williams', '1988-11-10', 'Nữ', '+444555666', 'emily.williams@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(15, 'Daniel', 'Brown', '1995-07-03', 'Nam', '+777888999', 'daniel.brown@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(16, 'Sophia', 'Davis', '1991-04-18', 'Nữ', '+333444555', 'sophia.davis@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(17, 'Ryan', 'Miller', '1987-09-25', 'Nam', '+666777888', 'ryan.miller@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(18, 'Olivia', 'Moore', '1993-12-05', 'Nữ', '+222333444', 'olivia.moore@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(19, 'Ethan', 'Anderson', '1986-06-14', 'Nam', '+555666777', 'ethan.anderson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(20, 'Ava', 'Taylor', '1994-03-08', 'Nữ', '+888999000', 'ava.taylor@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(21, 'Liam', 'Wilson', '1997-01-21', 'Nam', '+111222333', 'liam.wilson@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(22, 'Mia', 'Martinez', '1989-10-12', 'Nữ', '+444555666', 'mia.martinez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(23, 'Noah', 'Hernandez', '1996-08-02', 'Nam', '+777888999', 'noah.hernandez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(24, 'Emma', 'Garcia', '1990-05-15', 'Nữ', '+123456789', 'emma.garcia@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(25, 'Jackson', 'Lopez', '1985-08-20', 'Nam', '+987654321', 'jackson.lopez@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(26, 'Chloe', 'Clark', '1992-02-28', 'Nữ', '+111222333', 'chloe.clark@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(27, 'Aiden', 'Young', '1988-11-10', 'Nam', '+444555666', 'aiden.young@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(28, 'Isabella', 'Lewis', '1995-07-03', 'Nữ', '+777888999', 'isabella.lewis@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(29, 'Carter', 'Adams', '1991-04-18', 'Nam', '+333444555', 'carter.adams@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(30, 'Lily', 'Hall', '1987-09-25', 'Nữ', '+666777888', 'lily.hall@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL),
(35, 'Demo', '16', '2023-12-20', 'Nam', '123456788', 'abc@ab.vn', '', '', '', '12B', 15, 1),
(36, 'Nguyen', 'Van A', '1990-01-01', 'Nam', '0987654321', 'nguyenvana@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(37, 'Tran', 'Thi B', '1995-02-15', 'Nữ', '0987123456', 'tranthib@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(38, 'Hoang', 'Van C', '1988-03-20', 'Nam', '0912345678', 'hoangvanc@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3),
(39, 'Le', 'Thi D', '1992-04-25', 'Nữ', '0978901234', 'lethid@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 4),
(40, 'Tran', 'Van E', '1985-05-30', 'Nam', '0965432109', 'tranvane@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 5),
(41, 'Nguyen', 'Thi F', '1993-06-05', 'Nữ', '0956789012', 'nguyenthif@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(42, 'Pham', 'Van G', '1991-07-10', 'Nam', '0945678901', 'phamvang@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(43, 'Le', 'Thi H', '1989-08-15', 'Nữ', '0934567890', 'lethih@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3),
(44, 'Tran', 'Van I', '1987-09-20', 'Nam', '0923456789', 'tranvani@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 4),
(45, 'Nguyen', 'Thi J', '1996-10-25', 'Nữ', '0912345678', 'nguyenthij@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 5),
(46, 'Hoang', 'Van K', '1994-11-30', 'Nam', '0901234567', 'hoangvank@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(47, 'Le', 'Thi L', '1998-12-05', 'Nữ', '0998765432', 'lethil@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(48, 'Tran', 'Van M', '1999-01-10', 'Nam', '0987654321', 'tranvanm@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3),
(49, 'Nguyen', 'Thi N', '1997-02-15', 'Nữ', '0987123456', 'nguyenthin@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 4),
(50, 'Hoang', 'Van O', '1986-03-20', 'Nam', '0912345678', 'hoangvano@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 5),
(51, 'Le', 'Thi P', '1990-04-25', 'Nữ', '0978901234', 'lethip@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(52, 'Tran', 'Van Q', '1988-05-30', 'Nam', '0965432109', 'tranvanq@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(53, 'Nguyen', 'Thi R', '1985-06-05', 'Nữ', '0956789012', 'nguyenthir@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3),
(54, 'Pham', 'Van S', '1993-07-10', 'Nam', '0945678901', 'phamvans@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 4),
(55, 'Le', 'Thi T', '1991-08-15', 'Nữ', '0934567890', 'lethit@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 5),
(56, 'Tran', 'Van U', '1989-09-20', 'Nam', '0923456789', 'tranvanu@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(57, 'Nguyen', 'Thi V', '1996-10-25', 'Nữ', '0912345678', 'nguyenthiv@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(58, 'Hoang', 'Van W', '1994-11-30', 'Nam', '0901234567', 'hoangvanw@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3),
(59, 'Le', 'Thi X', '1998-12-05', 'Nữ', '0998765432', 'lethix@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 4),
(60, 'Tran', 'Van Y', '1999-01-10', 'Nam', '0987654321', 'tranvany@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 5),
(61, 'Nguyen', 'Thi Z', '1997-02-15', 'Nữ', '0987123456', 'nguyenthiz@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 1),
(62, 'Hoang', 'Van AA', '1986-03-20', 'Nam', '0912345678', 'hoangvanaa@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 2),
(63, 'Le', 'Thi BB', '1990-04-25', 'Nữ', '0978901234', 'lethibb@email.com', 'Cao Bằng', 'Bảo Lâm', 'Đức Hạnh', '123 Quang Trung', 18, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Quản lý'),
(2, 'Nhân viên'),
(3, 'Kế toán'),
(4, 'IT Support'),
(5, 'Marketing'),
(6, 'Nhân sự'),
(7, 'Bảo vệ'),
(8, 'Kỹ thuật'),
(9, 'Tổ chức sự kiện'),
(10, 'Dịch vụ khách hàng');

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
  `user_id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `user_name` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  `image_url` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_name`, `password`, `image_url`) VALUES
(3, 'Quang Thiện', 'admin', '$2y$10$JwPxu2xaJ7.2yluB9xgAj.epMy3QBPsFko.eJV/qOjfgfVGcXv5fa', 'a.jpg');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `FK_departments` FOREIGN KEY (`departments`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `FK_roles` FOREIGN KEY (`roles`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `FK_employee_salary` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
