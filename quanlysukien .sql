-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2023 at 03:00 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quanlysukien`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietsinhvien`
--

CREATE TABLE `chitietsinhvien` (
  `MaChiTiet` int(11) NOT NULL,
  `MaLop` int(11) DEFAULT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `DiemRenLuyen` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chitietsinhvien`
--

INSERT INTO `chitietsinhvien` (`MaChiTiet`, `MaLop`, `MaNguoiDung`, `DiemRenLuyen`) VALUES
(2, 2, 4, NULL),
(3, 1, 6, NULL),
(4, 1, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhsachdangky`
--

CREATE TABLE `danhsachdangky` (
  `MaDanhSach` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `MaSuKien` int(11) DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diadiem`
--

CREATE TABLE `diadiem` (
  `MaDiaDiem` int(11) NOT NULL,
  `TenDiaDiem` varchar(500) DEFAULT NULL,
  `KinhDo` varchar(20) DEFAULT NULL,
  `ViDo` varchar(20) DEFAULT NULL,
  `MoTa` varchar(5000) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `diadiem`
--

INSERT INTO `diadiem` (`MaDiaDiem`, `TenDiaDiem`, `KinhDo`, `ViDo`, `MoTa`, `TrangThai`) VALUES
(2, 'Đại học bình dương', '105.89721679687501', '1.125682884211204', 'zzzzzz', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `hocky`
--

CREATE TABLE `hocky` (
  `MaHocKy` int(11) NOT NULL,
  `TenHocKy` varchar(500) DEFAULT NULL,
  `MoTa` varchar(500) DEFAULT NULL,
  `MaNamHoc` int(11) DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hocky`
--

INSERT INTO `hocky` (`MaHocKy`, `TenHocKy`, `MoTa`, `MaNamHoc`, `NgayBatDau`, `NgayKetThuc`) VALUES
(1, 'Học kỳ 2 2023-2024', 'sz1111111111', 3, '2023-10-17', '2023-11-11'),
(2, '1111', '111', 3, '2023-10-26', '2023-10-03');

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `MaKhoa` int(11) NOT NULL,
  `TenKhoa` varchar(500) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL,
  `LuuY` varchar(2000) DEFAULT NULL,
  `HinhAnh` varchar(2000) DEFAULT NULL,
  `MoTa` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`MaKhoa`, `TenKhoa`, `TrangThai`, `LuuY`, `HinhAnh`, `MoTa`) VALUES
(2, 'CNTT', b'1', NULL, '6543578ec5e05_375869356_284446477676171_3793748357856829478_n.jpg', 'FIRA');

-- --------------------------------------------------------

--
-- Table structure for table `lichsudiemdanh`
--

CREATE TABLE `lichsudiemdanh` (
  `MaLichSu` int(11) NOT NULL,
  `MaNguoiDung` int(11) DEFAULT NULL,
  `MaSuKien` int(11) DEFAULT NULL,
  `ThoiGian` datetime DEFAULT NULL,
  `DuongDanAnh` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `MaLichTrinh` int(11) NOT NULL,
  `TenLichTrinh` varchar(200) DEFAULT NULL,
  `NoiDung` varchar(2000) DEFAULT NULL,
  `GioBatDau` time DEFAULT NULL,
  `GioKetThuc` time DEFAULT NULL,
  `MaSuKien` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loaisukien`
--

CREATE TABLE `loaisukien` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(500) DEFAULT NULL,
  `MoTa` varchar(5000) DEFAULT NULL,
  `HinhAnh` varchar(1000) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `loaisukien`
--

INSERT INTO `loaisukien` (`MaLoai`, `TenLoai`, `MoTa`, `HinhAnh`, `TrangThai`) VALUES
(1, 'Bắt buộc', 'Đây là các sự kiện bắt buộc phải tham gia để đảm bảo điểm rèn luyện.', '6539e5f5f1f82_312217805_667514488137741_371624366043102075_n.jpg', b'1'),
(2, 'IT Workshop', 'Dành cho các sự kiện liên quan tới công nghệ, phổ biến kiến thức, kỹ năng IT,..\r\n', NULL, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `MaLop` int(11) NOT NULL,
  `MaKhoa` int(11) DEFAULT NULL,
  `TenLop` varchar(200) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL,
  `LuuY` varchar(500) DEFAULT NULL,
  `MoTa` varchar(5000) DEFAULT NULL,
  `NamBatDau` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`MaLop`, `MaKhoa`, `TenLop`, `TrangThai`, `LuuY`, `MoTa`, `NamBatDau`) VALUES
(1, 2, '21TH01', b'1', NULL, 'Lớp K21 tin học', '2021'),
(2, 2, '22TH01', b'1', NULL, 'z', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `namhoc`
--

CREATE TABLE `namhoc` (
  `MaNamHoc` int(11) NOT NULL,
  `TenNamHoc` varchar(500) DEFAULT NULL,
  `MoTa` varchar(2000) DEFAULT NULL,
  `NgayBatDau` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `namhoc`
--

INSERT INTO `namhoc` (`MaNamHoc`, `TenNamHoc`, `MoTa`, `NgayBatDau`, `NgayKetThuc`) VALUES
(3, 'Năm học 2023 - 2024', 'eqưeqưeqưe11111111', '2023-12-12', '2024-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaNguoiDung` int(11) NOT NULL,
  `Ho` varchar(100) DEFAULT NULL,
  `Ten` varchar(100) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MatKhau` varchar(200) DEFAULT NULL,
  `VaiTro` int(11) DEFAULT NULL,
  `TrangThai` bit(1) DEFAULT NULL,
  `GioiTinh` bit(1) DEFAULT NULL,
  `SoDienThoai` varchar(45) DEFAULT NULL,
  `DiaChi` varchar(1000) DEFAULT NULL,
  `AnhDaiDien` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaNguoiDung`, `Ho`, `Ten`, `Email`, `MatKhau`, `VaiTro`, `TrangThai`, `GioiTinh`, `SoDienThoai`, `DiaChi`, `AnhDaiDien`) VALUES
(2, 'Admin', 'D', 'admin', '123', 1, b'1', NULL, NULL, NULL, NULL),
(4, 'Trầnz', 'Thanh Bìnhz', 's2kirbys2@gmail.com', '123zz', 0, b'0', b'1', '1111zz', '1111zz', '653a746d3392c_312177698_1154323108780697_3896222740615400861_n.jpg'),
(5, 'Nguyễn', 'Hoàng Sương', '312312', '312312zzz', 2, b'1', b'0', '312312zz', '213213zzz', NULL),
(6, 'Hoàng', 'Thế Bảo', 'zz@zz.com', '1111', 0, b'1', b'0', '111111', '111', NULL),
(7, 'Trần', 'Thị Hà', 'zz@zz.comzz', '1111zz', 0, b'1', b'0', '111111zz', '111zzz', '653a398d17725_270186941_439313524588125_6179789939017743554_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sukien`
--

CREATE TABLE `sukien` (
  `MaSuKien` int(11) NOT NULL,
  `TenSuKien` varchar(500) DEFAULT NULL,
  `MoTa` varchar(5000) DEFAULT NULL,
  `TrangThai` int(11) DEFAULT NULL,
  `GioBatDau` time DEFAULT NULL,
  `GioKetThuc` time DEFAULT NULL,
  `NgayDienRa` date DEFAULT NULL,
  `NgayKetThuc` date DEFAULT NULL,
  `MaHocKy` int(11) DEFAULT NULL,
  `MaDiaDiem` int(11) DEFAULT NULL,
  `MaLoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietsinhvien`
--
ALTER TABLE `chitietsinhvien`
  ADD PRIMARY KEY (`MaChiTiet`),
  ADD KEY `fk_ChiTietSinhVien_Lop1_idx` (`MaLop`),
  ADD KEY `fk_ChiTietSinhVien_NguoiDung1_idx` (`MaNguoiDung`);

--
-- Indexes for table `danhsachdangky`
--
ALTER TABLE `danhsachdangky`
  ADD PRIMARY KEY (`MaDanhSach`),
  ADD KEY `fk_DanhSachDangKy_NguoiDung1_idx` (`MaNguoiDung`),
  ADD KEY `fk_DanhSachDangKy_SuKien1_idx` (`MaSuKien`);

--
-- Indexes for table `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`MaDiaDiem`);

--
-- Indexes for table `hocky`
--
ALTER TABLE `hocky`
  ADD PRIMARY KEY (`MaHocKy`),
  ADD KEY `fk_HocKy_NamHoc1_idx` (`MaNamHoc`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`MaKhoa`);

--
-- Indexes for table `lichsudiemdanh`
--
ALTER TABLE `lichsudiemdanh`
  ADD PRIMARY KEY (`MaLichSu`),
  ADD KEY `fk_LichSuDiemDanh_SuKien1_idx` (`MaSuKien`),
  ADD KEY `fk_LichSuDiemDanh_NguoiDung1_idx` (`MaNguoiDung`);

--
-- Indexes for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`MaLichTrinh`),
  ADD KEY `fk_LichTrinh_SuKien1_idx` (`MaSuKien`);

--
-- Indexes for table `loaisukien`
--
ALTER TABLE `loaisukien`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`MaLop`),
  ADD KEY `fk_Lop_Khoa_idx` (`MaKhoa`);

--
-- Indexes for table `namhoc`
--
ALTER TABLE `namhoc`
  ADD PRIMARY KEY (`MaNamHoc`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaNguoiDung`);

--
-- Indexes for table `sukien`
--
ALTER TABLE `sukien`
  ADD PRIMARY KEY (`MaSuKien`),
  ADD KEY `fk_SuKien_HocKy1_idx` (`MaHocKy`),
  ADD KEY `fk_SuKien_DiaDiem1_idx` (`MaDiaDiem`),
  ADD KEY `fk_SuKien_LoaiSuKien1_idx` (`MaLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietsinhvien`
--
ALTER TABLE `chitietsinhvien`
  MODIFY `MaChiTiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhsachdangky`
--
ALTER TABLE `danhsachdangky`
  MODIFY `MaDanhSach` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `MaDiaDiem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hocky`
--
ALTER TABLE `hocky`
  MODIFY `MaHocKy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `MaKhoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lichsudiemdanh`
--
ALTER TABLE `lichsudiemdanh`
  MODIFY `MaLichSu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `MaLichTrinh` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaisukien`
--
ALTER TABLE `loaisukien`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `MaLop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `namhoc`
--
ALTER TABLE `namhoc`
  MODIFY `MaNamHoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaNguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sukien`
--
ALTER TABLE `sukien`
  MODIFY `MaSuKien` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietsinhvien`
--
ALTER TABLE `chitietsinhvien`
  ADD CONSTRAINT `fk_ChiTietSinhVien_Lop1` FOREIGN KEY (`MaLop`) REFERENCES `lop` (`MaLop`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietSinhVien_NguoiDung1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `danhsachdangky`
--
ALTER TABLE `danhsachdangky`
  ADD CONSTRAINT `fk_DanhSachDangKy_NguoiDung1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DanhSachDangKy_SuKien1` FOREIGN KEY (`MaSuKien`) REFERENCES `sukien` (`MaSuKien`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `hocky`
--
ALTER TABLE `hocky`
  ADD CONSTRAINT `fk_HocKy_NamHoc1` FOREIGN KEY (`MaNamHoc`) REFERENCES `namhoc` (`MaNamHoc`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lichsudiemdanh`
--
ALTER TABLE `lichsudiemdanh`
  ADD CONSTRAINT `fk_LichSuDiemDanh_NguoiDung1` FOREIGN KEY (`MaNguoiDung`) REFERENCES `nguoidung` (`MaNguoiDung`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LichSuDiemDanh_SuKien1` FOREIGN KEY (`MaSuKien`) REFERENCES `sukien` (`MaSuKien`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD CONSTRAINT `fk_LichTrinh_SuKien1` FOREIGN KEY (`MaSuKien`) REFERENCES `sukien` (`MaSuKien`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `fk_Lop_Khoa` FOREIGN KEY (`MaKhoa`) REFERENCES `khoa` (`MaKhoa`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `sukien`
--
ALTER TABLE `sukien`
  ADD CONSTRAINT `fk_SuKien_DiaDiem1` FOREIGN KEY (`MaDiaDiem`) REFERENCES `diadiem` (`MaDiaDiem`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SuKien_HocKy1` FOREIGN KEY (`MaHocKy`) REFERENCES `hocky` (`MaHocKy`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SuKien_LoaiSuKien1` FOREIGN KEY (`MaLoai`) REFERENCES `loaisukien` (`MaLoai`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
