-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 18, 2023 lúc 01:49 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `msg_id` int NOT NULL,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `unique_id` int NOT NULL,
  `fname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `img` varchar(400) COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb3_unicode_ci NOT NULL,
  `role_of_chat` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `role_of_chat`) VALUES
(1, 1688109512, 'luan', 'tran', 'luan@gmail.com', 'dd960d42bb47da21af3b3b0c31684540', '1699611472mymony.png', 'Offline now', 'user'),
(3, 1661897963, 'nghia', 'mai', 'nghia@gmail.com', '9e87373408a6cd425ae9b19bf870d893', '1699611699image-removebg-preview (1).png', 'Offline now', 'user'),
(4, 1223205097, 'am', 'y', 'yam@gmail.com', '806ad1e1a4aa6498a4b7adaed7639293', '1699619524icon_mail.png', 'Offline now', 'user'),
(5, 1557119071, 'sinh', 'dang', 'sinhdang@gmail.com', 'a7cd83fe6a92873f5118a3dd9edeff2d', '1699619676green.png', 'Offline now', 'user'),
(6, 731661203, 'tuyen', 'nguyen', 'tuyennguyen@gmail.com', 'c1bff3a8456c2b98101a66980ced2dde', '1699620297about_1.png', 'Offline now', 'user'),
(7, 436940230, 'mental health care', '', 'mentalhealthcare@gmail.com', 'd0df4800ed10a5578facd1d505522867', '1699697406tải xuống.jpg', 'Offline now', 'health_expert'),
(9, 375124689, 'Hằng', 'Trương Thu', 'hang.truongmentalhealthcare@gmail.com', '8aaf938064ccbc2f6989eb543beeaca5', '1699963807cohang.jpg', 'Offline now', 'health_expert'),
(10, 1115537575, 'Hải', 'Nguyễn Long', 'hai.longmentalhealthcare@gmail.com', '42810cb02db3bb2cbb428af0d8b0376e', '1699964344thayhai.jpg', 'Offline now', 'health_expert'),
(11, 810833149, 'Nhài ', 'Hồ Thị Ngọc', 'nhai.homentalhealthcare@gmail.com', '8b93955ebd658905578b4e58a1598377', '1699964452conhai.jpg', 'Offline now', 'health_expert'),
(12, 142249053, 'Ngọc', 'Châu Mỹ ', 'ngoc.chaumentalhealthcare@gmail.com', '63b63159b50d87d00baabfb3f679fe23', '1699964545congoc.jpg', 'Offline now', 'health_expert');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
