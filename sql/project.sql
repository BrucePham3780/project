-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2018 lúc 05:16 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `proc_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `num-product` int(11) DEFAULT NULL,
  `tt_price` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Cloth', '2018-11-21 09:22:30', '2018-11-21 09:22:30'),
(2, 'Books', '2018-11-21 09:23:34', '2018-11-21 09:23:34'),
(3, 'Computers', '2018-11-21 09:23:44', '2018-11-21 09:23:44'),
(4, 'Electronics ', '2018-11-21 09:24:07', '2018-11-21 09:24:07'),
(5, 'Movies and Television', '2018-11-21 09:25:23', '2018-11-21 09:25:23'),
(6, 'Baby', '2018-11-21 09:25:35', '2018-11-21 09:25:35'),
(7, 'Home & Kitchen', '2018-11-21 10:22:58', '2018-11-21 10:22:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tt_price` float DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `proc_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `num-product` int(11) DEFAULT NULL,
  `tt_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `procDimen` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `voteStar` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `images`, `price`, `procDimen`, `color`, `desc`, `status`, `voteStar`, `created`, `modified`, `cate_id`) VALUES
(7, 'Gravity Falls: Journal 3', 'book1.jpg', 10.91, '7.9 x 1.2 x 9.8 inches', '', NULL, 'Exist', 5, '2018-11-21 13:58:55', '2018-11-22 08:31:06', 2),
(8, 'Star vs. the Forces of Evil The Magic Book of Spells', 'book2.jpg', 9.28, '8.8 x 1.2 x 10.5 inches', '', NULL, 'Exist', 4, '2018-11-21 14:02:35', '2018-11-21 14:02:35', 2),
(10, 'Admin', '43419405_1550327838446908_8197571943482785792_n.jpg', NULL, '', '', NULL, '', NULL, '2018-11-26 09:12:55', '2018-11-26 09:12:55', 6),
(11, 'Moderator', 'dubai.jpg', NULL, '', '', NULL, '', NULL, '2018-11-26 09:36:17', '2018-11-26 09:36:17', 6),
(12, '1515', '43419405_1550327838446908_8197571943482785792_n.jpg', NULL, '', '', NULL, '', NULL, '2018-11-26 09:59:19', '2018-11-26 09:59:19', 4),
(13, 'Logo', 'logo1.jpg', 123456, '12x25', 'pink', NULL, '', 5, '2018-11-28 08:28:11', '2018-11-28 08:28:11', 2),
(14, 'User', 'logo.png', 123, '', '', NULL, '', NULL, '2018-12-04 08:52:27', '2018-12-04 08:52:27', 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `descr` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`, `descr`, `created`, `modified`) VALUES
(1, 'Admin', 'Manage all function and user', '2018-11-21 09:13:37', '2018-11-21 09:13:37'),
(2, 'Moderator', 'Staff', '2018-11-21 09:13:58', '2018-11-21 09:13:58'),
(3, 'Customer', 'Guest', '2018-11-21 09:14:16', '2018-11-21 09:14:16'),
(4, 'Customer', 'Guest', '2018-11-26 15:38:09', '2018-11-26 15:38:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipping`
--

CREATE TABLE `shipping` (
  `id` int(11) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `ship_date` varchar(255) DEFAULT NULL,
  `ship_method` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phoneNum` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `images`, `name`, `email`, `password`, `address`, `phoneNum`, `created`, `modified`, `role_id`) VALUES
(4, 'avatar.jpg', 'Thăng', 'thangpham123@gmail.com', '$2y$10$2wYDHoVD0dhLBCSrVxhzaO0mHOfs6rOHiIv1LLxnOSWhYxpO3BkUO', 'số nhà 61, ngách 21/34, Kẻ Vẽ, Đông Ngạc, Bắc Từ Liêm, Hà Nội', '0167 757 3780', '2018-12-03 15:27:55', '2018-12-04 11:39:16', 1),
(5, 'admin.png', 'Thăng', 'thangpham1@gmail.com', '$2y$10$NI69LGWe4/93Y3qmna0YIuXFQ479//oRMLVdseo8CdC0IME9CoMg6', 'số nhà 61, ngách 21/34, Kẻ Vẽ, Đông Ngạc, Bắc Từ Liêm, Hà Nội', '0167 757 3780', '2018-12-04 08:51:34', '2018-12-04 09:04:11', 1),
(6, 'discover.png', 'Thăng', 'thangpham71@gmail.com', '$2y$10$I94FNdRY1FCHVvK2C4VJH.Znb4QK8K7lzc3QKQYEv2gDUmnTzKbNu', 'số nhà 61, ngách 21/34, Kẻ Vẽ, Đông Ngạc, Bắc Từ Liêm, Hà Nội', '0167 757 3780', '2018-12-04 09:33:31', '2018-12-04 09:33:31', 2),
(7, 'logo.png', 'Thăng', 'thangpham7123@gmail.com', '$2y$10$AUXrLb0Rggqe0f0ND7Heq.XMzARTfNShVPPj4jDkZQocihDD6ll0S', 'số nhà 61, ngách 21/34, Kẻ Vẽ, Đông Ngạc, Bắc Từ Liêm, Hà Nội', '0167 757 3780', '2018-12-04 09:34:45', '2018-12-04 09:34:45', 2),
(9, 'avatar.jpg', 'Thăng', 'thang@gmail.com', '$2y$10$mIu5/AZeJsMFusQLGLMak.kwsIAeK13zAmCBUPRuKtYm.t5yDatkW', 'số nhà 61, ngách 21/34, Kẻ Vẽ, Đông Ngạc, Bắc Từ Liêm, Hà Nội', '0167 757 3780', '2018-12-04 11:18:15', '2018-12-04 11:31:40', 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proc_id` (`proc_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proc_id` (`proc_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`proc_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`proc_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`);

--
-- Các ràng buộc cho bảng `shipping`
--
ALTER TABLE `shipping`
  ADD CONSTRAINT `shipping_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `shipping_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
