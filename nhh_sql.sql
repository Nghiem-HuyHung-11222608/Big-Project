-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2025 at 08:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhh_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `anhsp`
--

CREATE TABLE `anhsp` (
  `MaSP` int(11) NOT NULL,
  `Anh1` varchar(500) DEFAULT NULL,
  `Anh2` varchar(500) DEFAULT NULL,
  `Anh3` varchar(500) DEFAULT NULL,
  `Anh4` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `anhsp`
--

INSERT INTO `anhsp` (`MaSP`, `Anh1`, `Anh2`, `Anh3`, `Anh4`) VALUES
(155, 'SMD0100_!.jpg', 'SMD0100_2.jpg', 'SMD0100_3.jpg', 'SMD0100_4.jpg'),
(157, 'QTA0033_1.jpg', 'QTA0033_2.jpg', 'QTA0033_3.jpg', 'QTA0033_4.jpg'),
(158, 'ATN0165_1.jpg', 'ATN0165_2.jpg', 'ATN0165_3.jpg', 'ATN0165_4.jpg'),
(159, 'AKD0045_1.jpg', 'AKD0045_2.jpg', 'AKD0045_3.jpg', 'AKD0045_4.jpg'),
(160, 'AKN0116_!.jpg', 'AKN0116_2.jpg', 'AKN0116_3.jpg', 'AKN0116_4.jpg'),
(161, 'AKJ0013_1.jpg', 'AKJ0013_2.jpg', 'AKJ0013_3.jpg', 'AKJ0013_4.jpg'),
(162, 'AVE0004_1.jpg', 'AVE0004_2.jpg', 'AVE0004_3.jpg', 'AVE0004_4.jpg'),
(163, 'ATN0151_!.jpg', 'ATN0151_2.jpg', 'ATN0151_3.jpg', 'ATN0151_4.jpg'),
(164, 'ATD0011_1.jpg', 'ATD0011_2.jpg', 'ATD0011_3.jpg', 'ATD0011_4.jpg'),
(165, 'ATP0042_!.jpg', 'ATP0042_2.jpg', 'ATP0042_3.jpg', 'ATP0042_4.jpg'),
(166, 'SMD0099_!.jpg', 'SMD0099_2.jpg', 'SMD0099_3.jpg', 'SMD0099_4.jpg'),
(167, 'SMN0079_1.jpg', 'SMN0079_2.jpg', 'SMN0079_3.jpg', 'SMN0079_4.jpg'),
(168, 'SMN0093_1.jpg', 'SMN0093_2.jpg', 'SMN0093_3.jpg', 'SMN0093_4.jpg'),
(169, 'QSK0065_1.jpg', 'QSK0065_2.jpg', 'QSK0065_3.jpg', 'QSK0065_4.jpg'),
(170, 'QTA0042_1.jpg', 'QTA0042_2.jpg', 'QTA0042_3.jpg', 'QTA0042_4.jpg'),
(171, 'QTA0045_1.jpg', 'QTA0045_2.jpg', 'QTA0045_3.jpg', 'QTA0045_4.jpg'),
(172, 'QJD0053_1.jpg', 'QJD0053_2.jpg', 'QJD0053_3.jpg', 'QJD0053_4.jpg'),
(173, 'QSK0066_1.jpg', 'QSK0066_2.jpg', 'QSK0066_3.jpg', 'QSK0066_4.jpg'),
(174, 'QSJ0023_1.jpg', 'QSJ0023_2.jpg', 'QSJ0023_3.jpg', 'QSJ0023_4.jpg'),
(175, 'QSL0059_1.jpg', 'QSL0059_2.jpg', 'QSL0059_3.jpg', 'QSL0059_4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `NoiDung` text NOT NULL,
  `ThoiGian` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`MaBL`, `MaSP`, `MaKH`, `NoiDung`, `ThoiGian`) VALUES
(21, 119, 16, 'rất đẹp', '2025-01-18 15:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `ThanhTien` decimal(10,0) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `MaMau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `DonGia`, `ThanhTien`, `Size`, `MaMau`) VALUES
(94, 121, 1, 499000, 499000, 'L', 'Xám'),
(94, 127, 1, 335000, 335000, 'L', 'Trắng'),
(95, 127, 1, 335000, 335000, 'L', 'Trắng'),
(95, 144, 1, 199000, 199000, 'M', 'Nâu'),
(99, 160, 1, 350000, 350000, 'L ', 'Xanh'),
(100, 170, 1, 350000, 350000, 'M', 'Kem'),
(101, 167, 2, 250000, 500000, 'XL', 'Trắng');

-- --------------------------------------------------------

--
-- Table structure for table `chitietsanpham`
--

CREATE TABLE `chitietsanpham` (
  `MaSP` int(11) NOT NULL,
  `MaSize` varchar(50) NOT NULL,
  `MaMau` varchar(20) NOT NULL DEFAULT 'null',
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `chitietsanpham`
--

INSERT INTO `chitietsanpham` (`MaSP`, `MaSize`, `MaMau`, `SoLuong`) VALUES
(155, 'L', 'Kem', 20),
(155, 'M', 'Kem', 20),
(155, 'S', 'Kem', 20),
(155, 'XL', 'Kem', 20),
(157, 'L', 'Đen ', 20),
(157, 'M', 'Đen ', 20),
(158, 'L ', 'Trắng', 20),
(158, 'M', 'Trắng', 20),
(159, 'L ', 'Đen ', 20),
(159, 'M', 'Đen ', 20),
(159, 'XL', 'Đen ', 20),
(160, 'L ', 'Xanh', 19),
(160, 'M', 'Xanh', 20),
(160, 'XL', 'Xanh', 20),
(161, 'L ', 'Đen ', 20),
(161, 'M', 'Đen ', 20),
(161, 'XL', 'Đen ', 20),
(162, 'L ', 'Đen ', 20),
(162, 'XL', 'Đen ', 20),
(163, 'L ', 'Kem', 20),
(164, 'L ', 'Đỏ', 20),
(164, 'M', 'Đỏ', 20),
(164, 'XL', 'Đỏ', 20),
(165, 'L ', 'Đen ', 20),
(165, 'M', 'Đen ', 20),
(165, 'XL', 'Đen ', 20),
(166, 'L ', 'Xanh', 20),
(166, 'M', 'Xanh', 20),
(166, 'XL', 'Xanh', 20),
(167, 'L ', 'Trắng', 20),
(167, 'M', 'Trắng', 20),
(167, 'XL', 'Trắng', 18),
(168, 'L ', 'Xanh', 20),
(168, 'M', 'Xanh', 20),
(168, 'XL', 'Xanh', 20),
(169, 'L ', 'Đen ', 20),
(169, 'M', 'Đen ', 20),
(169, 'XL', 'Đen ', 20),
(170, 'L ', 'Kem', 60),
(170, 'M', 'Kem', 59),
(170, 'S', 'Kem', 60),
(170, 'XL', 'Kem', 60),
(171, 'L ', 'Xám', 60),
(171, 'M', 'Xám', 60),
(171, 'S', 'Xám', 60),
(171, 'XL', 'Xám', 60),
(172, 'L ', 'Đen ', 50),
(172, 'M', 'Đen ', 50),
(172, 'S', 'Đen ', 50),
(172, 'XL', 'Đen ', 50),
(174, 'L ', 'Đen ', 60),
(174, 'M', 'Đen ', 60),
(174, 'S', 'Đen ', 60),
(174, 'XL', 'Đen ', 60),
(175, 'L ', 'Xám', 60),
(175, 'M', 'Xám', 60),
(175, 'S', 'Xám', 60),
(175, 'XL', 'Xám', 60);

--
-- Triggers `chitietsanpham`
--
DELIMITER $$
CREATE TRIGGER `tongsl` AFTER UPDATE ON `chitietsanpham` FOR EACH ROW UPDATE sanpham SET SoLuong= (SELECT SUM(SoLuong) from chitietsanpham WHERE MaSP = NEW.MaSP) WHERE MaSP = NEW.MaSP
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tongsl_del` AFTER DELETE ON `chitietsanpham` FOR EACH ROW UPDATE sanpham SET SoLuong= (SELECT SUM(SoLuong) from chitietsanpham WHERE MaSP = OLD.MaSP) WHERE MaSP = OLD.MaSP
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tongsl_insert` AFTER INSERT ON `chitietsanpham` FOR EACH ROW UPDATE sanpham SET SoLuong= (SELECT SUM(SoLuong) from chitietsanpham WHERE MaSP = NEW.MaSP) WHERE MaSP = NEW.MaSP
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` int(11) NOT NULL,
  `TenDM` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
(1, 'Sản Phẩm Nổi Bật'),
(2, 'Sản Phẩm Mới'),
(3, 'Sản Phẩm bán chạy');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `MaNV` int(11) DEFAULT NULL,
  `NgayDat` datetime DEFAULT current_timestamp(),
  `NgayGiao` datetime DEFAULT NULL,
  `TinhTrang` varchar(20) DEFAULT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `MaNVGH` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaNV`, `NgayDat`, `NgayGiao`, `TinhTrang`, `TongTien`, `MaNVGH`) VALUES
(96, 16, 3, '2025-03-30 18:49:05', '0000-00-00 00:00:00', 'hoàn thành', 350000, '3'),
(97, 16, 3, '2025-03-30 18:50:28', '0000-00-00 00:00:00', 'hoàn thành', 350000, '3'),
(98, 16, 3, '2025-03-30 18:51:28', '0000-00-00 00:00:00', 'hoàn thành', 350000, '3'),
(99, 16, 3, '2025-03-30 18:52:16', '0000-00-00 00:00:00', 'hoàn thành', 350000, '3'),
(100, 17, 3, '2025-04-27 11:55:16', '2025-04-28 11:58:15', 'hoàn thành', 350000, '3'),
(101, 17, 3, '2025-04-27 11:56:45', '2025-04-28 11:58:12', 'hoàn thành', 500000, '3');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(11) NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` bigint(12) NOT NULL,
  `DiaChi` text NOT NULL,
  `MatKhau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `Email`, `SDT`, `DiaChi`, `MatKhau`) VALUES
(17, 'Demo', 'demo@gmail.com', 90999999, 'demo', '123456'),
(16, 'Phạm Thị Việt Hoa', 'hoapham1968@gmail.com', 348008939, 'Quận Hai Bà Trưng - HN', 'abc123'),
(6, 'Nguyễn Văn A', 'Nguyenvana@gmail.com', 1228923743, 'diachi', '123456'),
(1, 'Trần Văn B', 'Tranvanb@gmail.com', 778923743, '207 Giải Phóng - Hai Bà Trưng -HN', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(50) DEFAULT NULL,
  `MoTa` varchar(11) DEFAULT NULL,
  `KM_PT` int(5) DEFAULT NULL,
  `TienKM` decimal(10,0) DEFAULT NULL,
  `NgayBD` date DEFAULT NULL,
  `NgayKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `MoTa`, `KM_PT`, `TienKM`, `NgayBD`, `NgayKT`) VALUES
(1, 'Tri Ân Khách Hàng', 'sale', 0, 50000, '2020-01-01', '2025-03-31'),
(3, 'Vui Xuân - Đón Tết ', NULL, 0, 100000, '2019-12-19', '2020-02-29'),
(4, 'Khuyến Mãi Đặc Biệt', NULL, 0, 100000, '2019-12-19', '2030-01-31'),
(5, 'khuyễn mãi đặc biệt trị giá 500.000 đ', 'ok', 1, 500000, '2020-01-02', '2027-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE `mau` (
  `MaMau` varchar(50) NOT NULL DEFAULT 'none'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`MaMau`) VALUES
('Đen '),
('Đen - Trắng'),
('Đỏ'),
('Hồng'),
('Kem'),
('Nâu'),
('Tím'),
('Trắng'),
('Trắng -Xanh'),
('Xám'),
('Xanh');

-- --------------------------------------------------------

--
-- Table structure for table `nguoinhan`
--

CREATE TABLE `nguoinhan` (
  `MaHD` int(11) NOT NULL,
  `TenNN` varchar(50) NOT NULL,
  `DiaChiNN` text NOT NULL,
  `SDTNN` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nguoinhan`
--

INSERT INTO `nguoinhan` (`MaHD`, `TenNN`, `DiaChiNN`, `SDTNN`) VALUES
(70, 'Nguyễn Văn A', 'diachi', 1228923743),
(86, 'Trần Văn B', '207 Giải Phóng - Hai Bà Trưng -HN', 778923743),
(87, 'Trần Văn B', '207 Giải Phóng - Hai Bà Trưng -HN', 778923743),
(88, 'Trần Văn B', '207 Giải Phóng - Hai Bà Trưng -HN', 778923743),
(89, 'Trần Văn B', '207 Giải Phóng - Hai Bà Trưng -HN', 778923743),
(92, 'Phạm Thị Việt Hoa', 'Quận Hai Bà Trưng - HN', 348008939),
(93, 'Phạm Thị Việt Hoa', 'Quận Hai Bà Trưng - HN', 348008939),
(94, 'Phạm Thị Việt Hoa', 'Quận Hai Bà Trưng - HN', 348008939),
(95, 'Phạm Thị Việt Hoa', 'Quận Hai Bà Trưng - HN', 348008939),
(99, 'Phạm Thị Việt Hoa', 'Quận Hai Bà Trưng - HN', 348008939),
(100, 'Demo', 'demo', 90999999),
(101, 'Demo', 'demo', 90999999);

-- --------------------------------------------------------

--
-- Table structure for table `nhacc`
--

CREATE TABLE `nhacc` (
  `MaNCC` int(11) NOT NULL,
  `TenNCC` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhacc`
--

INSERT INTO `nhacc` (`MaNCC`, `TenNCC`) VALUES
(1, 'ÁO KHOÁC'),
(2, 'ÁO SƠ MI'),
(8, 'ÁO THUN'),
(9, 'QUẦN DÀI'),
(11, 'QUẦN SHORT');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(11) NOT NULL,
  `TenNV` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` int(12) NOT NULL,
  `DiaChi` text NOT NULL,
  `MatKhau` varchar(50) NOT NULL,
  `Quyen` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `Email`, `SDT`, `DiaChi`, `MatKhau`, `Quyen`) VALUES
(3, 'Admin', 'admin@gmail.com', 905027527, 'Số 459 Bạch Mai - Thành phố Hà Nội', 'admin', 1),
(2, 'Nhân Viên Bán Hàng ', 'NVBH@gmail.com', 123456789, 'Hà Nội', '123456', 4),
(4, 'Skibidi', 'skibidi@gmail.com', 132465798, 'Số 459 Bạch Mai - Thành phố Hà Nội', '123456', 3),
(1, 'Quản Lý', 'Vodanhfx29102004@gmail.com', 778923743, '207 Giải Phóng - Thành phố Hà Nội', '123456', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phieugiamgia`
--

CREATE TABLE `phieugiamgia` (
  `id` varchar(200) NOT NULL,
  `TenPhieu` varchar(200) NOT NULL,
  `SoTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phieugiamgia`
--

INSERT INTO `phieugiamgia` (`id`, `TenPhieu`, `SoTien`) VALUES
('dinhtri', 'phiếu của đình trí ', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) DEFAULT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `NgayNhap` datetime NOT NULL DEFAULT current_timestamp(),
  `Note` varchar(100) DEFAULT NULL,
  `Size` varchar(50) NOT NULL,
  `Mau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieuxuat`
--

CREATE TABLE `phieuxuat` (
  `MaPX` int(11) NOT NULL,
  `MaNV` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `Mau` varchar(100) NOT NULL,
  `Size` varchar(50) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `TongTien` decimal(10,0) NOT NULL,
  `Note` varchar(500) NOT NULL,
  `NgayXuat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `phieuxuat`
--

INSERT INTO `phieuxuat` (`MaPX`, `MaNV`, `MaSP`, `Mau`, `Size`, `SoLuong`, `DonGia`, `TongTien`, `Note`, `NgayXuat`) VALUES
(5, 3, 4, 'none', '36', 40, 1000000, 40000000, 'test', '2020-01-10 21:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `id` int(11) NOT NULL,
  `Ten` varchar(100) NOT NULL,
  `MoTa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`id`, `Ten`, `MoTa`) VALUES
(1, 'Manager', 'chủ cửa hàng'),
(2, 'Project Manager', 'quản trị viên'),
(3, 'Quản lý Kho', ''),
(4, 'Nhân viên Bán Hàng', ''),
(5, 'Nhân viên giao hàng', '');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `MaDM` int(11) DEFAULT NULL,
  `MaNCC` int(11) NOT NULL,
  `SoLuong` int(11) DEFAULT 0,
  `MoTa` text DEFAULT NULL,
  `DonGia` decimal(10,0) NOT NULL,
  `AnhNen` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `MaDM`, `MaNCC`, `SoLuong`, `MoTa`, `DonGia`, `AnhNen`) VALUES
(155, 'Sơ Mi Nam Kem Vải Lụa Dày SMD0100', 2, 2, 80, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế nhăn ra co rút và kháng khuẩn. Form dáng Slimfit ôm nhẹ, vừa vặn và tôn dáng tối đa khi mặc. \r\n\r\nChất liệu vải lụa mango dày dặn: Giữ form dáng tốt, ít nhăn.Thân thiện với làn da. Mau khô ', 295000, 'SMD0100.jpg'),
(157, 'Quần tây nam slimfit viền túi QTA0033', 1, 9, 40, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh tế, với mức giá bán cực kì hợp lý. Hiếu được nhu cầu của khách hàng, mặt trong của sản phẩm, các bạn có thể chỉnh sửa lại cho phù hợp với mọi vóc dáng. ', 350000, 'QTA0033.jpg'),
(158, 'Áo Thun Body Cotton Siêu Mát ATN0165', 3, 8, 40, 'Áo Thun Body Trơn Cotton - Đơn Giản, Thoải Mái, Vừa Vặn. Chất liệu 100% cotton mềm mại, thoáng khí, mang lại cảm giác dễ chịu suốt cả ngày. Thiết kế ôm body, vừa vặn hoàn hảo, giúp tôn lên vóc dáng nam tính. Đơn giản mà vẫn nổi bật, dễ dàng kết hợp với mọi trang phục từ quần Jeans đến quần Short.', 195000, 'ATN0165.jpg'),
(159, 'Áo Khoác Dù Nón Tháo Rời, 2 Lớp AKD0045', 1, 1, 60, 'Áo khoác Dù 2 lớp, nón tháo rời. Chất liệu vải dù mềm mịn, lót trong thoáng mát, có túi trong và ngoài. Nón có thể tháo rời phần cổ, gọn gàng và linh động mọi thời tiết, dây kéo YKK cao cấp. Form regular rộng rãi, phù hợp với mọi vóc dáng. Kín đáo và thoáng mát trong mọi hoạt động, diện đi nắng hoặc mưa nhỏ đều đẹp.', 450000, 'AKD0045.jpg'),
(160, 'Áo Khoác Nỉ Có Nón Regular AKN0116', 1, 1, 59, 'Áo khoác thun nỉ, đơn giản và năng động. Túi ngoài có dây kéo, mặt trong có túi tiện dụng. Mặc đi nắng hoặc trời se lạnh cực tốt. Phiên bản mới cải tiến với form dáng Regular rộng rãi, bo thun cotton ở cổ tay và eo tăng thêm sự thoải mái khi mặc.\r\n\r\nChất liệu: vải nỉ da cá cao cấp', 350000, 'AKN0116.jpg'),
(161, 'Áo Khoác Jean Nam AKJ0013', 2, 1, 60, 'Áo khoác Jean mạnh mẽ và cá tính, phong cách vintage và hiện đại. Chất vải vải dày dặn cùng nút bấm chắc chắn cùng đường may tỉ mỉ, mặt trong có thêm túi trong để vật dụng kín đáo. Item không chỉ giữ ấm cho cơ thể mà còn là điểm nhấn cho bộ trang phục của bạn.', 525000, 'AKJ0013.jpg'),
(162, 'Áo Khoác Blazer Nam Premium AVE0004', 3, 1, 40, 'Áo khoác Blazer là một trong nhưng món đồ không thể thiếu trong tủ đồ của các chàng trai thời trang. Ngoài việc dễ mặc, mẫu áo này còn cực kì dễ mix trong mọi dịp. Khác với áo Vest, Blazer sẽ có form dáng trẻ trung hơn, form thường qua eo một tí, nên dễ phối với nhiều loại quần tây, kaki và quần Jean. Sản phẩm được may thủ công từng chi tiết, đường may sắc nét và tỉ mỉ. Áo được may 1 lớp dễ phù hợp với thời tiết, nên độ tinh xảo rất cao ở phía trong. Túi ngực có thể để khăn hoặc cài hoa, mặt trong có 3 túi mổ để vật dụng quan trọng. Chất vải cao cấp, mềm mịn và ít nhăn, mau khô và thoáng mát. Form trẻ trung cực đẹp khi mặc. ', 950000, 'AVE0004.jpg'),
(163, 'Áo Thun Raglan Form Boxy ATN0151', 2, 8, 20, 'Áo thun Raglan Vibee Summer \r\n- Chất liệu 100% cotton tự nhiên, vải dày dặn 280gsm, đã được wash xử lý bền màu.\r\n- Form boxy năng động, thấm hút tốt, mặc siêu thoáng và thoải mái, độ bền cao.\r\n- Công nghệ in chữ nổi hiện đại, bo cổ bản to cao cấp, đường may sắc nét từng chi tiết.', 295000, 'ATN0151.jpg'),
(164, 'Áo Thun Tay Dài ATD0011', 3, 8, 60, 'Áo thun tay dài chất vải hiệu ứng tổ ong dày dặn, đơn giản nhưng lịch thiệp cho những ngày chuyển lạnh cuối năm. Bo cổ và bo tay cotton, mát lạnh và thoải mái, form dáng chuẩn đẹp.', 280000, 'ATD0011.jpg'),
(165, 'Áo Thun Polo Cotton 100% ATP0042', 1, 8, 60, 'Ra mắt dòng áo thun Polo chất liệu cotton 100%, co giãn 4 chiều, bo cổ dệt kim cao cấp. Đảm bảo thoáng mát và thoải mái cả ngày dài. Form slimfit vừa vặn, mix match theo nhiều phong cách và item khác nhau, đến Kenta thử ngay để cảm nhận chất liệu.', 320000, 'ATP0042.jpg'),
(166, 'Sơ Mi Nam Xanh Vải Lụa Dày SMD0099', 2, 2, 60, 'Sơ mi tay dài luôn sang trọng, lịch lãm. Chất vải lụa dày mango thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng nhưng mặc lên cực mát. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế nhăn ra co rút và kháng khuẩn. Form dáng Slimfit ôm nhẹ, vừa vặn và tôn dáng tối đa khi mặc. \r\n\r\nChất liệu vải lụa mango dày dặn: Giữ form dáng tốt, ít nhăn.Thân thiện với làn da. Mau khô ', 295000, 'SMD0099.jpg'),
(167, 'Sơ Mi Nam Tay Ngắn Trắng vải lụa SMN0079', 3, 2, 58, 'Sơ mi tay ngắn luôn sang trọng và thoải mái. Chất vải lụa chéo thoáng mát và chất lượng, thấm hút cực tốt, định lượng vải dày dặn chất lượng. Đường may cuốn sườn tinh tế, form cực chuẩn. Chất vải ít nhăn, mềm mại tuyệt đối, hạn chế nhăn ra co rút và kháng khuẩn. Form dáng Slimfit ôm nhẹ, vừa vặn và tôn dáng tối đa khi mặc.', 250000, 'SMN0079.jpg'),
(168, 'Sơ Mi Họa Tiết SMN0093', 2, 2, 60, '\r\nSơ mi họa tiết năng động và phóng khoáng, họa tiết độc lạ. Diện đi chơi, du lịch cực cool. Chất vải sapo mát lạnh, họa tiết sắc nét và đẹp mịn.\r\n\r\nChất vải thoáng mát và ít nhăn, thấm hút cực tốt.', 210000, 'SMN0093.jpg'),
(169, 'Quần Short Kaki Nam QSK0065', 2, 11, 60, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng trong từng phong cách.\r\n\r\nChất liệu: vải kaki co giãn, bền màu, vải siêu mát và ít nhăn khi mặc.', 220000, 'QSK0065.jpg'),
(170, 'Quần tây nam slimfit viền túi QTA0042', 1, 9, 239, 'Quần Tây nam Kenta với form dáng vừa vặn, sang trọng đầy lịch lãm, điểm nhấn viền ở túi trước và túi sau. Thích hợp mặc đi làm, đi chơi, lót trong sắc nét, tạo cảm giác thoải mái khi di chuyển, làm việc. Với ưu vải co giãn nhẹ, lót trong sắc nét và tinh tế, với mức giá bán cực kì hợp lý. Hiếu được nhu cầu của khách hàng, mặt trong của sản phẩm, các bạn có thể chỉnh sửa lại cho phù hợp với mọi vóc dáng. ', 350000, 'QTA0042.jpg'),
(171, 'Quần Tây Phối Eo Thun QTA0045', 2, 9, 240, 'Quần tây lưng eo thun chất lượng cao cùng thiết kế hiện đại, điểm mạnh của thiết kế với bên hông quần có phần thun ẩn co giãn kín đáo tạo sự thoải mái, nhưng không mất đi sự thanh lịch của quần tây', 380000, 'QTA0045.jpg'),
(172, 'Quần Jean nam đen slimfit cơ bản QJD0053', 3, 9, 200, 'Quần Jean Nam Kenta cơ bản với chất lượng cao cấp, đường may sắc nét từng chi tiết, form slimfit vừa vặn và thoải mái, nhẹ nhàng khi mặc. Dễ dàng phối với mọi trang phục, chiếc quần Jean Kenta sẽ tạo cho bạn cảm giác tự tin nhất khi mặc với mức giá cực kì hợp lý.\r\n\r\nChất liệu: denim co giãn thoải mái, mịn mát, bền màu.', 395000, 'QJD0053.jpg'),
(173, '  Quần Short Kaki Nam QSK0066', 1, 11, 0, 'Quần Short Kaki nam năng động trẻ trung, from slim vừa vặn tôn dáng và không quá ôm sát, tạo sự thoải mái cho người mặc. Lót trong may hoàn thiện sắc nét, dây kéo YKK bền bỉ trong quá trình sử dụng. Quần short kaki dễ dàng phối với áo thun, polo đa dạng trong từng phong cách.\r\n\r\nChất liệu: vải kaki co giãn, bền màu, vải siêu mát và ít nhăn khi mặc.', 220000, 'QSK0066.jpg'),
(174, 'Quần Short Jean Cotton QSJ0023', 2, 11, 240, 'Quần Shorts Jean Nam Kenta cơ bản với chất lượng cao cấp, đường may sắc nét từng chi tiết. Form trên gối, nhẹ nhàng khi mặc. Dễ dàng phối với mọi trang phục, tạo cho bạn cảm giác tự tin nhất khi mặc với mức giá cực kì hợp lý.\r\n\r\nChất liệu: denim cotton co giãn thoải mái, mịn mát, bền màu.', 350000, 'QSJ0023.jpg'),
(175, 'Quần Short Tây Lưng Thun QSL0059', 2, 11, 240, 'Quần short tây lưng thun co giãn, chất liệu vải mát lạnh và ít nhăn. Thoải mái và dễ chịu cả ngày dài', 245000, 'QSL0059.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sanphamkhuyenmai`
--

CREATE TABLE `sanphamkhuyenmai` (
  `MaSP` int(11) NOT NULL,
  `MaKM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `sanphamkhuyenmai`
--

INSERT INTO `sanphamkhuyenmai` (`MaSP`, `MaKM`) VALUES
(119, 1),
(127, 1),
(129, 1),
(131, 1),
(134, 3),
(136, 3),
(138, 3),
(141, 3),
(155, 1),
(166, 1),
(167, 1),
(168, 1);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE `size` (
  `MaSize` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`MaSize`) VALUES
('L '),
('M'),
('S'),
('XL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anhsp`
--
ALTER TABLE `anhsp`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`,`MaSP`,`MaKH`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MaHD`,`MaSP`,`Size`,`MaMau`),
  ADD KEY `MaSP` (`MaSP`),
  ADD KEY `Size` (`Size`),
  ADD KEY `MaMau` (`MaMau`);

--
-- Indexes for table `chitietsanpham`
--
ALTER TABLE `chitietsanpham`
  ADD PRIMARY KEY (`MaSP`,`MaSize`,`MaMau`),
  ADD KEY `MaSize` (`MaSize`),
  ADD KEY `MaMau` (`MaMau`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaKH`),
  ADD KEY `MaNV` (`MaNV`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `MaKH` (`MaKH`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Indexes for table `mau`
--
ALTER TABLE `mau`
  ADD PRIMARY KEY (`MaMau`);

--
-- Indexes for table `nguoinhan`
--
ALTER TABLE `nguoinhan`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `MaNV` (`MaNV`),
  ADD KEY `Quyen` (`Quyen`);

--
-- Indexes for table `phieugiamgia`
--
ALTER TABLE `phieugiamgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  ADD PRIMARY KEY (`MaPX`),
  ADD KEY `MaNV` (`MaNV`),
  ADD KEY `MauSP` (`MaSP`),
  ADD KEY `Mau` (`Mau`),
  ADD KEY `Size` (`Size`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `MaNCC` (`MaNCC`),
  ADD KEY `MaDM` (`MaDM`);

--
-- Indexes for table `sanphamkhuyenmai`
--
ALTER TABLE `sanphamkhuyenmai`
  ADD PRIMARY KEY (`MaSP`,`MaKM`),
  ADD KEY `MaKH` (`MaKM`);

--
-- Indexes for table `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`MaSize`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `MaDM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nhacc`
--
ALTER TABLE `nhacc`
  MODIFY `MaNCC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;

--
-- AUTO_INCREMENT for table `phieuxuat`
--
ALTER TABLE `phieuxuat`
  MODIFY `MaPX` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
