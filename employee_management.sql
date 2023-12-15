-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 15, 2023 lúc 06:03 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

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

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

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

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `birthday` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `ward` varchar(50) DEFAULT NULL,
  `full_address` varchar(50) DEFAULT NULL,
  `departments` int(11) DEFAULT NULL,
  `roles` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `first_name`, `last_name`, `birthday`, `gender`, `phone`, `email`, `city`, `district`, `ward`, `full_address`, `departments`, `roles`) VALUES
(7, 'Thiện', 'Anh', '2023-12-06', 'Nữ', '012345', 'a@av.vn', 'Tỉnh Bình Định', 'Huyện An Lão', 'Thị trấn An Lão', 'Ấp 2', NULL, NULL),
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
(30, 'Lily', 'Hall', '1987-09-25', 'Nữ', '+666777888', 'lily.hall@email.com', 'Tỉnh Cao Bằng', 'Huyện Bảo Lâm', 'Xã Đức Hạnh', '256 Nguyễn Huệ', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL DEFAULT 0,
  `salary` decimal(20,6) NOT NULL DEFAULT 0.000000,
  `start_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL DEFAULT '',
  `user_name` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `image_url` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `full_name`, `user_name`, `password`, `image_url`) VALUES
(3, 'Quang Thiện', 'admin', '$2y$10$JwPxu2xaJ7.2yluB9xgAj.epMy3QBPsFko.eJV/qOjfgfVGcXv5fa', 'a.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `FK_departments` (`departments`),
  ADD KEY `FK_roles` (`roles`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `FK_employee_salary` (`employee_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `FK_departments` FOREIGN KEY (`departments`) REFERENCES `departments` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_roles` FOREIGN KEY (`roles`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `FK_employee_salary` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
