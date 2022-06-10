-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 17, 2021 lúc 08:55 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mydb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `name`
--

CREATE TABLE `name` (
  `use_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `name`
--

INSERT INTO `name` (`use_id`, `username`, `password`) VALUES
(1, 'quang', '1111'),
(2, 'minh', '11112'),
(3, 'trinh', '11113'),
(4, 'admin', '1115'),
(5, 'Lan', '33333'),
(6, 'Loc', '2222');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(200) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `product description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `product description`) VALUES
(1, 'hoodie', '400.000', 'images/ao.jpg', 'Oversize blue hoodie \r\n4 size : S M L XL\r\n'),
(2, 'T-shrit', '400.000đ', 'images/phong.jpg', 'Doodle Tee\r\nColor: black\r\nSize: S M L XL '),
(3, 'T-shirt', '400.000đ', 'images/pp.jpg', 'T-shirt\r\nColor:White/black\r\nsize:SS M L XL'),
(4, 'Hoodie', '450.000đ', 'images/hoodie.jpg\r\n', 'Hoodie\r\ncolor: blue\r\nsize:S M L XL'),
(5, 'Jean', '400.000đ', 'images/jean.jpg', 'jean\r\ncolor:blue\r\nsize:S M L XL'),
(6, 'Jean', '300.000đ', 'images/images.jpg', 'jean\r\ncolor: blue \r\nsize: M L XL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`use_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
