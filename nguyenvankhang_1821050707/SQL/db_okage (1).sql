-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2020 lúc 03:50 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_okage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `ID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`ID`, `user`, `pass`, `ngay`) VALUES
(1, 'huyen1245', '1', '0000-00-00'),
(2, 'ngochuyen', '123', '0000-00-00'),
(4, 'admin123', '1', '0000-00-00'),
(5, 'huyen123456', '1234', '0000-00-00'),
(6, 'huyen67', '1', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `ID` int(11) NOT NULL,
  `image` varchar(80) NOT NULL,
  `tin` varchar(2000) NOT NULL,
  `ngay` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_khuyenmai`
--

INSERT INTO `tbl_khuyenmai` (`ID`, `image`, `tin`, `ngay`) VALUES
(1, 'o1.jpg', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '11-20-2000'),
(2, 'k2.jpg', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '2020-11-28'),
(3, 'k1.png', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '2020-11-28'),
(4, 'o3.jpg', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '2020-11-28'),
(5, 's3.png', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '11/13/2020'),
(6, 'k5.jpg', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '2020-12-05'),
(7, 'k2.jpg', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '2020-11-21'),
(8, 's3.png', 'Các sản phẩm vay mua xe Toyota đáp ứng đa dạng các nhu cầu ', '11/13/2020');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_kiemtraxe`
--

CREATE TABLE `tbl_kiemtraxe` (
  `ID` int(11) NOT NULL,
  `VIN` varchar(50) NOT NULL,
  `so_khung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_kiemtraxe`
--

INSERT INTO `tbl_kiemtraxe` (`ID`, `VIN`, `so_khung`) VALUES
(33, 'vin12a56', '124fy45e'),
(34, 'vin12a56', '124fy45e'),
(35, '1y3547g3', '1335436df2323'),
(36, 'hg1234h232', '2345edgry4346'),
(37, 'sdsgdh2345', '123454feg23'),
(38, 'ad1343vdsfd113', '2134feg233435'),
(39, 'kkh1234fđ132', '123453cdf234'),
(40, 'hdj1234dsfs', 'dsg2343asdf'),
(41, '1k2434k2342', '3225fd45465');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `ID` int(11) NOT NULL,
  `image` char(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `news1` varchar(300) NOT NULL,
  `new2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`ID`, `image`, `name`, `price`, `news1`, `new2`) VALUES
(1, 'sanpham4.png', 'COROLLA CROSS 1.8HV', 830000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(3, 'sanpham.png', 'COROLLA CROSS 1.8HV', 820000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(4, 'sanpham1.png', 'COROLLA CROSS 1.8HV', 750000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(5, 'sanpham.png', 'COROLLA CROSS 1.8HV', 438000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(6, 'sanpham4.png', 'COROLLA CROSS 1.8HV', 1120000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(8, 'sanpham5.png', 'COROLLA CROSS 1.8HV', 1200000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(9, 'sanpham.png', 'COROLLA CROSS 1.8HV', 2147483647, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(11, 'sanpham1.png', 'LAND CRUISER PRADO VX', 237900000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu ', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3 '),
(12, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV', '• Thông tin khác: + Số tự động 6 cấp'),
(14, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác: \r\n+ Số tự động 6 cấp'),
(15, 'sanpham1.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác:\r\n + Số tự động 6 cấp'),
(16, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác: \r\n+ Số tự động 6 cấp'),
(17, 'sanpham1.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác:\r\n + Số tự động 6 cấp'),
(18, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác: \r\n+ Số tự động 6 cấp'),
(19, 'sanpham1.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác:\r\n + Số tự động 6 cấp'),
(20, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác: \r\n+ Số tự động 6 cấp'),
(21, 'sanpham1.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác:\r\n + Số tự động 6 cấp'),
(22, 'sanpham2.png', 'LAND CRUISER PRADO VX', 237900000, '• Số chỗ ngồi : 7 chỗ • Kiểu dáng : SUV • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Thông tin khác: \r\n+ Số tự động 6 cấp'),
(23, 'sanpham5.png', 'COROLLA CROSS 1.8HV', 1230000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3 '),
(24, 'sanpham4.png', 'LAND CRUISER', 1325000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu • Nhiên liệu : Xăng • Xuất xứ : Xe nhập khẩu', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3'),
(25, 'sanpham1.png', 'LAND CRUISER', 650000000, '• 5 chỗ  • SUV  • xăng  • xe nhập khẩu • Nhiên liệu : Xăng', '• Hộp số tự động cấp CVT  • Dung tích 1798cm3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sukien`
--

CREATE TABLE `tbl_sukien` (
  `ID` int(11) NOT NULL,
  `image` char(50) NOT NULL,
  `tin` varchar(2000) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sukien`
--

INSERT INTO `tbl_sukien` (`ID`, `image`, `tin`, `ngay`) VALUES
(12, 'o4.jpg', 'Tất cả các phụ tùng, phụ kiện chính hãng, được nhập khẩu từ Nhật Bản, Thái Lan và', '2020-11-27'),
(19, 's2.jpg', ' anh em ta phối hợp cùng Bộ Công Thương tổ chức lễ bàn giao...', '2020-11-28'),
(20, 's4.png', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-11-28'),
(21, 'o3.jpg', 'LỊCH LÁI THỬ XE THÁNG 5', '2020-05-22'),
(22, 'o1.jpg', 'ĐẠI LÝ OKGE TẠI MIỀN TRUNG TẠM THỜI ĐIỀU CHỈNH HOẠT ĐỘNG DO LŨ LỤT', '2020-11-28'),
(23, 'o4.jpg', 'CHƯƠNG TRÌNH TRIỆU HỒI ĐỂ SIẾT CHẶT BU LÔNG KẾT NỐI GIỮA ĐĨA DẪN ĐỘNG VÀ BIẾN MÔ ĐÃ ĐƯỢC CỤC ĐĂNG KIỂM VIỆT NAM TIẾP NHẬN', '2020-11-28'),
(24, 'k5.jpg', 'CHƯƠNG TRÌNH TRIỆU HỒI ĐỂ SIẾT CHẶT BU LÔNG KẾT NỐI GIỮA ĐĨA DẪN ĐỘNG VÀ BIẾN MÔ ĐÃ ĐƯỢC CỤC ĐĂNG KIỂM VIỆT NAM TIẾP NHẬN', '2020-12-05'),
(25, 'o3.jpg', 'VIỆT NAM CHÍNH THỨC GIỚI THIỆU FORTUNER 2020 VÀ ÁP DỤNG MỨC GIÁ BÁN LẺ MỚI CHO MẪU XE TOYOTA RUSH', '2020-11-21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `ID` int(11) NOT NULL,
  `image` char(50) NOT NULL,
  `tin` varchar(2000) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`ID`, `image`, `tin`, `ngay`) VALUES
(4, 'k3.jpg', 'OKAGE Việt Nam phối hợp cùng Bộ Công Thương tổ chức lễ bàn giao...', '2020-11-18'),
(5, 'k2.jpg', ' anh em ta phối hợp cùng Bộ Công Thương tổ chức lễ bàn giao...', '2020-11-18'),
(14, 's4.png', 'CHƯƠNG TRÌNH TRIỆU HỒI ĐỂ SIẾT CHẶT BU LÔNG KẾT NỐI GIỮA ĐĨA DẪN ĐỘNG VÀ BIẾN MÔ ĐÃ ĐƯỢC CỤC ĐĂNG KIỂM VIỆT NAM TIẾP NHẬN', '2020-11-20'),
(15, 's2.jpg', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-11-28'),
(17, 'o4.jpg', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-12-05'),
(18, 's3.png', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-11-27'),
(19, 'o4.jpg', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-11-23'),
(20, 'k1.png', 'TOYOTA INNOVA VÀ TOYOTA YARIS 2020 TĂNG TIỆN NGHI GIÁ HỢP LÝ', '2020-11-17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID_TK` int(11) NOT NULL,
  `Ten_TK` varchar(50) NOT NULL,
  `mat_khau` varchar(20) NOT NULL,
  `ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`ID_TK`, `Ten_TK`, `mat_khau`, `ngay`) VALUES
(4, 'namkhang', '1', '2020-11-03'),
(6, 'minhduc123', '123', '2020-11-18'),
(8, 'vuhuyen', '123', '2020-11-06'),
(13, 'khang1234', '123', '2020-11-13'),
(14, 'adas', '1', '2020-11-19'),
(17, 'khang123', '123', '2020-11-03'),
(18, 'khang12', '12', '2020-11-20'),
(19, 'khang34', '123', '2020-11-29'),
(20, '1', '1', '2020-11-26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_kiemtraxe`
--
ALTER TABLE `tbl_kiemtraxe`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_sukien`
--
ALTER TABLE `tbl_sukien`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID_TK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_kiemtraxe`
--
ALTER TABLE `tbl_kiemtraxe`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `tbl_sukien`
--
ALTER TABLE `tbl_sukien`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID_TK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
