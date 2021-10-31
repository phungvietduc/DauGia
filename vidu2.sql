-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 09:33 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vidu2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoaiSP` int(11) NOT NULL,
  `TenLoaiSP` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoaiSP`, `TenLoaiSP`) VALUES
(1, 'Điện thoại thông minh'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `HoTen` varchar(99) NOT NULL,
  `DiaChi` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Sdt` text NOT NULL,
  `cmnd` int(11) NOT NULL,
  `TenDangNhap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phiendaugia`
--

CREATE TABLE `phiendaugia` (
  `MaPhien` int(11) NOT NULL,
  `TGconlai` time NOT NULL,
  `TenSP` varchar(11) NOT NULL,
  `HinhAnh` text NOT NULL,
  `MaLoaiSP` int(11) NOT NULL,
  `GiaKĐ` int(50) NOT NULL,
  `MoTaSP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(99) NOT NULL,
  `HinhAnh` text NOT NULL,
  `ThongTinSP` varchar(555) NOT NULL,
  `id` int(11) NOT NULL,
  `MaLoaiSP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'qyauqq12', 'hmai@gmai.com', '1'),
(2, 'admin', 'hkamai@gmai.com', '1'),
(3, 'quangok', 'namquangsaki@gmail.com', '1'),
(4, 'quangok', '1@gmail.com', '1'),
(5, 'ádasdasd', 'adsasdsa@gmail.com', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `phiendaugia`
--
ALTER TABLE `phiendaugia`
  ADD PRIMARY KEY (`MaPhien`),
  ADD KEY `loaihang` (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `banhang` (`id`),
  ADD KEY `loaihangb` (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `phiendaugia`
--
ALTER TABLE `phiendaugia`
  MODIFY `MaPhien` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phiendaugia`
--
ALTER TABLE `phiendaugia`
  ADD CONSTRAINT `loaihang` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `banhang` FOREIGN KEY (`id`) REFERENCES `nguoidung` (`Id`),
  ADD CONSTRAINT `loaihangb` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
