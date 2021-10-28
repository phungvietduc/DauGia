-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2021 lúc 07:31 PM
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
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `Id` int(11) NOT NULL,
  `HoTen` varchar(99) NOT NULL,
  `DiaChi` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Sdt` text NOT NULL,
  `cmnd` int(11) NOT NULL,
  `TenDangNhap` text NOT NULL,
  `MatKhau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`Id`, `HoTen`, `DiaChi`, `Email`, `Sdt`, `cmnd`, `TenDangNhap`, `MatKhau`) VALUES
(4, 'Nguyễn Văn B', 'Minh Quang- Tam Đảo- Vĩnh Phúc', 'a@gmail.com', '0987654321', 2147483647, 'aaaa', 'a123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phiendaugia`
--

CREATE TABLE `phiendaugia` (
  `MaPhien` int(11) NOT NULL,
  `TGTao` date NOT NULL,
  `TGBatDau` date NOT NULL,
  `TGKetThuc` date NOT NULL,
  `MaSP` int(11) NOT NULL,
  `NguoiBan` varchar(99) NOT NULL,
  `TrangThai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Phùng Việt Đức', 'vietduc', 'ducjnatd123', 1, ''),
(3, 'Trần Nam Quang', 'namquang', 'quang123', 1, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(99) NOT NULL,
  `ThongTinSP` text NOT NULL,
  `HinhAnhSP` varbinary(8000) NOT NULL,
  `GiaSP` text NOT NULL,
  `DonViTinh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `qlytaikhoanadmin`
--
ALTER TABLE `qlytaikhoanadmin`
  ADD PRIMARY KEY (`idad`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `qlytaikhoanadmin`
--
ALTER TABLE `qlytaikhoanadmin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
