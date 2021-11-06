-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 06, 2021 lúc 01:23 AM
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
-- Cơ sở dữ liệu: `database`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsuphien`
--

CREATE TABLE `lichsuphien` (
  `MaPhien` int(11) NOT NULL,
  `TenSP` varchar(99) NOT NULL,
  `idNguoiban` int(11) NOT NULL,
  `NguoiMua` varchar(99) NOT NULL,
  `GiaKĐ` int(11) NOT NULL,
  `GiaCuoi` int(11) NOT NULL,
  `TGbd` date NOT NULL,
  `TGkt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Máy tính'),
(2, 'Laptop');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `HoTen` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `TenDangNhap` text NOT NULL,
  `MatKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`Id`, `HoTen`, `Email`, `TenDangNhap`, `MatKhau`) VALUES
(1, 'Việt Đức', 'duc@gmail.com', 'ducipvp', 'duc123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phiendaugia`
--

CREATE TABLE `phiendaugia` (
  `MaPhien` int(11) NOT NULL,
  `TenSP` varchar(11) DEFAULT NULL,
  `HinhAnh` text DEFAULT NULL,
  `MaLoaiSP` int(11) DEFAULT NULL,
  `GiaKĐ` int(50) DEFAULT NULL,
  `MoTaSP` text DEFAULT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `phiendaugia`
--

INSERT INTO `phiendaugia` (`MaPhien`, `TenSP`, `HinhAnh`, `MaLoaiSP`, `GiaKĐ`, `MoTaSP`, `Id`) VALUES
(24, 'macbook', '../img/sanpham/macbook pro.jpeg', 2, 1000, 'thiết bị mỏng nhẹ, bền , đẹp', 0),
(25, 'dell', '../img/sanpham/dell.jfif', 2, 1000, 'core i5 chơi game tốt', 0),
(26, 'asus', '../img/sanpham/asus.jfif', 2, 1000, 'hàng 2021', 0),
(27, 'macbook1', '../img/sanpham/macbook.jfif', 2, 1000, 'hàng 2021', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `qlytaikhoanadmin`
--

CREATE TABLE `qlytaikhoanadmin` (
  `idad` int(11) NOT NULL,
  `HoTen` varchar(99) NOT NULL,
  `TenDangNhap` text NOT NULL,
  `MatKhau` text NOT NULL,
  `adminlv` int(11) NOT NULL,
  `Work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `qlytaikhoanadmin`
--

INSERT INTO `qlytaikhoanadmin` (`idad`, `HoTen`, `TenDangNhap`, `MatKhau`, `adminlv`, `Work`) VALUES
(1, 'Phùng Việt Đức', 'vietduc', 'duc123', 4, 'Admin quản lí hệ thống'),
(3, 'Trần Nam Quang', 'namquang', 'quang123', 1, 'Admin quản lí sản phẩm'),
(5, 'Trịnh Khắc Hảo', 'trinhhao', 'hao123', 2, 'Admin quản lí người dùng'),
(6, 'Nguyễn Văn A', 'admin', 'admin', 3, 'Admin quản lí phiên đấu giá');

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
  ADD KEY `loaihang` (`MaLoaiSP`),
  ADD KEY `idban` (`Id`);

--
-- Chỉ mục cho bảng `qlytaikhoanadmin`
--
ALTER TABLE `qlytaikhoanadmin`
  ADD PRIMARY KEY (`idad`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MaLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `phiendaugia`
--
ALTER TABLE `phiendaugia`
  MODIFY `MaPhien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `qlytaikhoanadmin`
--
ALTER TABLE `qlytaikhoanadmin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10010;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phiendaugia`
--
ALTER TABLE `phiendaugia`
  ADD CONSTRAINT `loaihang` FOREIGN KEY (`MaLoaiSP`) REFERENCES `loaisp` (`MaLoaiSP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
