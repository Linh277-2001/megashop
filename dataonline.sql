-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 03, 2023 lúc 06:13 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dataonline`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `iddonhang` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`iddonhang`, `idsp`, `soluong`, `gia`) VALUES
(1, 17, 2, '899000'),
(2, 16, 1, '999000'),
(3, 13, 1, '500000'),
(4, 6, 1, '999000'),
(5, 7, 1, '999000'),
(5, 6, 1, '999000'),
(6, 2, 1, '699000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `iduser`, `diachi`, `sodienthoai`, `email`, `soluong`, `tongtien`, `trangthai`) VALUES
(1, 14, 'Thanh Trì - Hà Nội', '0123456789', 'mayer@gmail.com', 2, '1798000', 2),
(2, 14, 'Sơn La', '0123456789', 'mayer@gmail.com', 1, '999000', 0),
(3, 14, 'Sơn La', '0123456789', 'mayer@gmail.com', 1, '500000', 3),
(4, 14, 'Hải Phòng', '0123456789', 'mayer@gmail.com', 1, '999000', 1),
(5, 14, 'Lạng Sơn', '0123456789', 'mayer@gmail.com', 2, '1998000', 1),
(6, 14, 'Hà Nội', '0123456789', 'mayer@gmail.com', 1, '699000', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `tensanpham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensanpham`, `hinhanh`) VALUES
(1, 'Áo', 'https://simg.nicepng.com/png/small/13-131873_home-icons-png-transparent-home-icon-green-png.png'),
(2, 'Quần', 'https://i.pinimg.com/originals/83/39/74/833974bd6b20d7bbac2cd0123cbafb41.png'),
(3, 'Giày', 'https://i.pinimg.com/originals/8f/7f/1d/8f7f1daf3270815dad3256544b37f823.png'),
(4, 'Phụ Kiện', 'https://muicamau.vn/wp-content/uploads/2019/05/don-hang.jpg'),
(5, 'Mũ & Nón', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTB58u7avqp-FJaggI87xctKv4VIey3O_jb5Q&usqp=CAU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanphammoi`
--

CREATE TABLE `sanphammoi` (
  `id` int(11) NOT NULL,
  `tensp` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `giasp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `loai` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanphammoi`
--

INSERT INTO `sanphammoi` (`id`, `tensp`, `giasp`, `hinhanh`, `mota`, `loai`) VALUES
(1, 'Áo Graphic Tee', '122000', 'https://i.pinimg.com/564x/ec/b5/30/ecb5309a8b39e0360c2e99b3717aa801.jpg', '100% cotton thoải mái. Lót cọc thấm hút ở eo', 1),
(2, 'Áo Mushroom', '699000', 'https://i.pinimg.com/564x/32/27/7c/32277c9a61e0ea719e5d91c265dbdd69.jpg', 'Thoải mái không chỉ đẹp mắt mà còn phong cách và thời trang', 1),
(3, 'Hooddi Jemma', '899000', 'https://i.pinimg.com/564x/b5/4b/d3/b54bd3bf3e685b2a53b11490c00da2bd.jpg', 'Áo nỉ thời trang với kiểu dáng đẹp, tinh tế. Thắt lưng có gân và viền giúp tôn dáng cho đôi chân.', 1),
(4, 'Áo thum Oversized', '600000', 'https://i.pinimg.com/564x/fd/51/b6/fd51b6abbdb9e4eea7db95a7b799240f.jpg', 'Chiếc áo thun polo thoải mái này sẽ giúp bạn luôn cảm thấy tươi mới. Được thiết kế tỉ mỉ để có kiểu dáng đẹp.', 1),
(5, 'Áo Bee festival', '195000', 'https://i.pinimg.com/564x/9b/2e/66/9b2e66559f0809e856a9b661f41e4219.jpg', 'Thiết kế kẻ sọc vui nhộn với màu sắc tương phản. Đã cập nhật đường cắt cho một phong cách bình thường hơn.', 1),
(6, 'Áo thun Butterfly', '999000', 'https://i.pinimg.com/564x/d6/42/df/d642df068f5eb5d123db2641ffbf4c89.jpg', 'Áo thun giúp vận động dễ dàng. Thiết kế đơn giản, đa năng.', 1),
(7, 'Áo Snoopdogg', '999000', 'https://i.pinimg.com/564x/18/2b/c0/182bc059d54626bea4464ef5721e3dbe.jpg', 'Áo thun đa năng giúp vận động dễ dàng. Thiết kế đơn giản, đa năng.', 1),
(8, 'Mũ Stone Adidas', '699000', 'https://i.pinimg.com/564x/b1/04/25/b1042540826188b08080bb63240e1cf0.jpg', 'Mũ màu sắc độc đáo, chất lượng và tỉ mỉ trong từng chi tiết', 2),
(9, 'Sneakers New York', '539000', 'https://i.pinimg.com/564x/52/1b/19/521b19781c55a4dca66e208f9c708c94.jpg', 'Thiết kế mới thể thao năng động, hợp xu hướng thời trang', 2),
(10, 'Giày Boston', '499000', 'https://i.pinimg.com/564x/91/5f/24/915f242b71f8f4ff8eec25cb23c94734.jpg', 'Chất liệu bền đẹp. Vừa vặn để tạo sự thoải mái.', 2),
(11, 'Giày Yanker', '500000', 'https://i.pinimg.com/564x/cb/71/0a/cb710ae81e92d26b85d98166fc4388fc.jpg', 'Giày giúp vận động dễ dàng. Thiết kế đơn giản, đa năng.', 2),
(12, 'Mũ Nike Ultral', '999000', 'https://i.pinimg.com/564x/82/08/f3/8208f32368c0aaf7ac390d8704a36955.jpg', 'Cực kỳ nhẹ, co giãn và nhanh khô. Độ co giãn cao mang lại cảm giác vừa vặn thoải mái hơn.', 2),
(13, 'Holdall Bag', '500000', 'https://i.pinimg.com/564x/59/22/2a/59222a3ff83af57948fc7c799b90d55d.jpg', 'Cực kỳ nhẹ, co giãn và nhanh khô. Độ co giãn cao mang lại cảm giác vừa vặn thoải mái hơn.', 2),
(14, 'Mũ Redbull ', '499000', 'https://i.pinimg.com/564x/1b/f7/c1/1bf7c18c2bcd97e436f165f3d9008b60.jpg', 'Our 100% premium cotton shirt. Designed to wear on its own or as an outer layer.', 2),
(15, 'Túi Dior Christian', '139900', 'https://i.pinimg.com/564x/74/08/00/7408005bcceb9f63d0bfbd7e88ec2878.jpg', 'Cực kỳ nhẹ, co giãn và nhanh khô. Độ co giãn cao mang lại cảm giác vừa vặn thoải mái hơn.', 2),
(16, 'Cargo Shorts', '999000', 'https://i.pinimg.com/564x/57/9e/03/579e0394cfe4db2632277733172bd35c.jpg', 'Quần chất lượng cao vô cùng thoải mái. Kiểu dáng thời thượng thích hợp khi mặc ở văn phòng.', 1),
(17, 'Áo Teady Bear', '899000', 'https://i.pinimg.com/564x/d5/fb/74/d5fb74853fac510ec29242d222a3e98e.jpg', 'Kiểu dáng đẹp và co giãn. Quần thoải mái, đa năng thích hợp mặc ở nhà hoặc đi làm.', 1),
(18, 'Sản phẩm demo', '60000', '18.jpg', 'Sản phẩm demo', 1),
(19, 'Sản phẩm demo 2', '60000', '19.jpg', 'mô tả sản phẩm', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `uid` text COLLATE utf8_unicode_ci NOT NULL,
  `diachi` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `username`, `mobile`, `uid`, `diachi`, `status`) VALUES
(13, 'john@gmail.com', '0123456', 'John', '0147258369', 'FnNZb4nbRtXAUpkWYaEOdmD5r673', 'Hải Dương', 0),
(14, 'mayer@gmail.com', '0123456', 'Mayer', '0123456789', 'VMOri7rZTchPg0Wnq4WnGEx1MgD2', 'Sơn La', 0),
(15, 'admin@gmail.com', '123456', 'Admin', '0981031106', 'Q5D0z2y7v9ZX8jUZ37szEfNYWs22', 'Hà Nội', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanphammoi`
--
ALTER TABLE `sanphammoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `sanphammoi`
--
ALTER TABLE `sanphammoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
