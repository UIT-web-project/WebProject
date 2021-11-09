-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 05:38 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_dienthoai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `MaBL` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL,
  `NoiDung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`MaHD`, `MaSP`, `SoLuong`) VALUES
(1, 1, 1),
(2, 1, 1),
(2, 2, 1),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ctpn`
--

CREATE TABLE `ctpn` (
  `MaPN` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `GiaNhap` int(11) NOT NULL,
  `SoLuong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dattruoc`
--

CREATE TABLE `dattruoc` (
  `MaSP` int(10) UNSIGNED NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `NgayDat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaohang`
--

CREATE TABLE `giaohang` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaNV` int(10) UNSIGNED NOT NULL,
  `TinhTrangGH` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `MaSP` int(10) UNSIGNED NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`MaSP`, `SoLuong`, `MaKH`) VALUES
(1, 10, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanhlq`
--

CREATE TABLE `hinhanhlq` (
  `MaHALQ` int(10) UNSIGNED NOT NULL,
  `MaSP` int(10) UNSIGNED NOT NULL,
  `Anh` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(10) UNSIGNED NOT NULL,
  `MaKH` int(10) UNSIGNED NOT NULL,
  `MaKM` int(10) UNSIGNED DEFAULT NULL,
  `TongTienTT` int(11) NOT NULL,
  `TinhTrangTT` int(1) NOT NULL,
  `SoTienNhan` int(11) NOT NULL,
  `SoTienTra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `MaKH`, `MaKM`, `TongTienTT`, `TinhTrangTT`, `SoTienNhan`, `SoTienTra`) VALUES
(1, 2, 2, 5000000, 1, 5000000, 0),
(2, 4, 2, 9999000, 1, 10000000, 1000),
(3, 2, 2, 3990000, 1, 4000000, 10000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` int(10) UNSIGNED NOT NULL,
  `TenKH` varchar(50) NOT NULL,
  `GioiTinh` char(10) NOT NULL,
  `SDT` char(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `MatKhau` varchar(30) NOT NULL,
  `CMND` char(12) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `LoaiKH` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `TenKH`, `GioiTinh`, `SDT`, `Email`, `MatKhau`, `CMND`, `DiaChi`, `LoaiKH`) VALUES
(1, 'Nguyễn Anh Dũng', 'Nam', '000011112222', 'AnhDung@gmail.com', '123456', '272811122', 'Thủ đức, HCM', 'Thân thiết'),
(2, 'Nguyễn Đăng Khoa', 'Nam', '033112223', 'DangKhoa@gmail.com', '123456', '271829304', 'Q1, HCM', 'Bình thường'),
(3, 'Hoàng Anh', 'Nữ', '031112233', 'hoanganh@gmail.com', '123456', '271112223', 'Q9, HCM', 'Thân thiết'),
(4, 'Đỗ Thị Mỹ Duyên', 'Nữ', '09811112223', 'MyDuyen@gmail.com', '123456', '291112233', 'Q8, HCM', 'Bình thường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kho`
--

CREATE TABLE `kho` (
  `makho` int(10) UNSIGNED NOT NULL,
  `tenkho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `vitri` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`makho`, `tenkho`, `vitri`) VALUES
(1, 'Vũ Phong', 'Mê Linh, Hà Nội'),
(2, 'Số 11', 'Cầu Giấy, Hà Nội'),
(3, 'Quận 3', 'Quận 3, Hồ Chí Minh'),
(4, 'Nam Điền', 'Củ Chi, Hồ Chí Minh'),
(5, 'Tân Định', 'Quận 1, Hồ Chí Minh'),
(6, 'Đinh Tiên Hoàng', 'Bình Thạnh, Hồ Chí Minh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(10) UNSIGNED NOT NULL,
  `SoPTKM` tinyint(4) NOT NULL,
  `TuNgay` date NOT NULL,
  `DenNgay` date NOT NULL,
  `TTienToiThieu` int(100) DEFAULT NULL,
  `MaSP` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `SoPTKM`, `TuNgay`, `DenNgay`, `TTienToiThieu`, `MaSP`) VALUES
(1, 10, '2021-11-01', '2021-10-30', 100000, NULL),
(2, 12, '2021-12-10', '2021-10-26', 2000000, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoaiSP` int(10) UNSIGNED NOT NULL,
  `TenLoaiSP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoaiSP`, `TenLoaiSP`) VALUES
(1, 'Điện thoại'),
(2, 'Máy tính bảng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacc`
--

CREATE TABLE `nhacc` (
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `TenNCC` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `SDT` char(12) NOT NULL,
  `DiaChi` varchar(50) DEFAULT NULL,
  `Website` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhacc`
--

INSERT INTO `nhacc` (`MaNCC`, `TenNCC`, `Email`, `SDT`, `DiaChi`, `Website`) VALUES
(1, 'Apple', 'apple@gmail.com', '123456666', '32 Cách Mạng Tháng 8, P. 6, Quận 3, TP HCM', 'https://www.apple.com/vn/'),
(2, 'Samsung', 'samsung@gmail.com', '0123456777', '49 Nguyễn Văn Bá, KP3, P. Bình Thọ, Q. Thủ Đức', 'https://www.samsung.com/vn/'),
(3, 'Xiaomi', 'xiaomi@gmail.com', '123456888', '65A Hồ Xuân Hương, Phường 6, Quận 3, Tp.HCM', 'https://www.xiaomi.com/vn/'),
(4, 'OPPO', 'oppo@gmail.com', '0123456999', '32 Cách Mạng Tháng 8, P. 6, Quận 3, TP HCM', 'https://www.oppo.com/vn/');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` int(10) UNSIGNED NOT NULL,
  `TenNV` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `NgayVL` date NOT NULL,
  `Luong` int(11) NOT NULL,
  `SDT` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiNV` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `TenNV`, `NgayVL`, `Luong`, `SDT`, `Email`, `MatKhau`, `CMND`, `DiaChi`, `LoaiNV`) VALUES
(1, 'Nguyễn Quang Hải', '2020-11-10', 10000000, '0332845988', 'NQH@gmail.com', '11111111', '0345567789', 'Thủ Dức - Tp HCM', 'Quản lý'),
(2, 'Mai Văn Tiến', '2020-11-12', 7000000, '0339004003', 'MVT@gmail.com', '22222222', '0455634579', 'Thủ Dức - Tp HCM', 'Bán hàng'),
(3, 'Nguyễn Thị Mai', '2020-11-15', 7000000, '0339004345', 'NTM@gmail.com', '33333333', '0345942456', ' Quận 9 - Tp HCM', 'Tiếp tân'),
(4, 'Nguyễn Thị Thu', '2020-11-20', 7000000, '0339493345', 'NTT@gmail.com', '44444444', '0445310024', ' Quận 9 - Tp HCM', 'Bán hàng'),
(5, 'Nguyễn Văn Quang', '2020-12-02', 6000000, '0945600342', 'NVQ@gmail.com', '55555555', '0542247211', ' Quận 2 - Tp HCM', 'Giao hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MaPN` int(10) UNSIGNED NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  `TinhTrangTT` int(1) NOT NULL,
  `MaNCC` int(10) UNSIGNED NOT NULL,
  `MaNV` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(10) UNSIGNED NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL,
  `maloaisp` int(10) UNSIGNED NOT NULL,
  `math` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `hinhanh`, `mota`, `maloaisp`, `math`) VALUES
(1, '1280', 'https://cdn.tgdd.vn/Products/Images/42/22701/dien-thoai-di-dong-Nokia-1280-dienmay.com-l.jpg', 'Thiết kế nhỏ gọn, dùng cực bền', 1, 9),
(2, 'IPhone 13', 'https://images.fpt.shop/unsafe/fit-in/585x390/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/9/15/637673230237572519_iphone-13-mini-xanh-1.jpg', 'iPhone 13 256GB Màn hình: OLED 6.7', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongtinsp`
--

CREATE TABLE `thongtinsp` (
  `mattsp` int(10) UNSIGNED NOT NULL,
  `masp` int(10) UNSIGNED NOT NULL,
  `MaKho` int(10) UNSIGNED NOT NULL,
  `Gia` int(100) NOT NULL,
  `GiaKM` int(100) NOT NULL,
  `SoLuong` int(5) NOT NULL,
  `mausac` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ram` tinyint(10) NOT NULL,
  `bonhotrong` tinyint(10) NOT NULL,
  `pin` tinyint(10) NOT NULL,
  `kichthuongmanhinh` float NOT NULL,
  `cameratruoc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `camerasau` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpu` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thongtinsp`
--

INSERT INTO `thongtinsp` (`mattsp`, `masp`, `MaKho`, `Gia`, `GiaKM`, `SoLuong`, `mausac`, `ram`, `bonhotrong`, `pin`, `kichthuongmanhinh`, `cameratruoc`, `camerasau`, `cpu`) VALUES
(1, 1, 1, 200000, 18000, 10, 'black', 1, 4, 127, 3, '0', '0', 'Intel Xeon E3'),
(2, 2, 2, 32000000, 30999999, 12, 'pink', 8, 127, 127, 5, '24', '48', 'A15 Bionic'),
(3, 1, 1, 200000, 20000, 5, 'yellow', 4, 64, 127, 5, '8', '13', 'Krait 400, 2500 MHz');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuonghieu`
--

CREATE TABLE `thuonghieu` (
  `MaTH` int(10) UNSIGNED NOT NULL,
  `TenTH` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thuonghieu`
--

INSERT INTO `thuonghieu` (`MaTH`, `TenTH`) VALUES
(1, 'Apple'),
(2, 'SamSung'),
(3, 'Xiaomi'),
(4, 'Huawei'),
(5, 'Oppo'),
(6, 'LG'),
(7, 'Vivo'),
(8, 'Sony'),
(9, 'Nokia'),
(10, 'Realme');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`MaBL`),
  ADD KEY `fk_bl_kh` (`MaKH`),
  ADD KEY `fk_bl_sp` (`MaSP`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`MaHD`,`MaSP`),
  ADD KEY `fk_cthd_sp` (`MaSP`);

--
-- Chỉ mục cho bảng `ctpn`
--
ALTER TABLE `ctpn`
  ADD PRIMARY KEY (`MaPN`,`MaSP`),
  ADD KEY `fk_ctpn_sp` (`MaSP`);

--
-- Chỉ mục cho bảng `dattruoc`
--
ALTER TABLE `dattruoc`
  ADD PRIMARY KEY (`MaSP`,`MaKH`),
  ADD KEY `fk_dt_kh` (`MaKH`);

--
-- Chỉ mục cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`MaHD`,`MaNV`),
  ADD KEY `fk_giaohang_nv` (`MaNV`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk_gh_kh` (`MaKH`);

--
-- Chỉ mục cho bảng `hinhanhlq`
--
ALTER TABLE `hinhanhlq`
  ADD PRIMARY KEY (`MaHALQ`),
  ADD KEY `fk_halq_sp` (`MaSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `fk_hd_kh` (`MaKH`),
  ADD KEY `fk_hd_km` (`MaKM`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Chỉ mục cho bảng `kho`
--
ALTER TABLE `kho`
  ADD PRIMARY KEY (`makho`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`),
  ADD KEY `fk_km_sp` (`MaSP`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoaiSP`);

--
-- Chỉ mục cho bảng `nhacc`
--
ALTER TABLE `nhacc`
  ADD PRIMARY KEY (`MaNCC`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MaPN`),
  ADD KEY `fk_pn_ncc` (`MaNCC`),
  ADD KEY `fk_pn_nv` (`MaNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `fk_sp_lsp` (`maloaisp`),
  ADD KEY `fk_sp_th` (`math`);

--
-- Chỉ mục cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD PRIMARY KEY (`mattsp`),
  ADD KEY `fk_ttsp_sp` (`masp`);

--
-- Chỉ mục cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  ADD PRIMARY KEY (`MaTH`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `MaBL` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `MaSP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hinhanhlq`
--
ALTER TABLE `hinhanhlq`
  MODIFY `MaHALQ` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MaKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `kho`
--
ALTER TABLE `kho`
  MODIFY `makho` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `MaLoaiSP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `nhacc`
--
ALTER TABLE `nhacc`
  MODIFY `MaNCC` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `MaNV` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  MODIFY `MaPN` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  MODIFY `mattsp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `thuonghieu`
--
ALTER TABLE `thuonghieu`
  MODIFY `MaTH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `fk_bl_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `fk_cthd_hd` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `fk_cthd_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `ctpn`
--
ALTER TABLE `ctpn`
  ADD CONSTRAINT `fk_ctpn_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`),
  ADD CONSTRAINT `fk_pn` FOREIGN KEY (`MaPN`) REFERENCES `phieunhap` (`MaPN`);

--
-- Các ràng buộc cho bảng `dattruoc`
--
ALTER TABLE `dattruoc`
  ADD CONSTRAINT `fk_dt_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `fk_dt_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `fk_giaohang_hd` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`),
  ADD CONSTRAINT `fk_giaohang_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Các ràng buộc cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `fk_gh_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `fk_gh_sp` FOREIGN KEY (`MaSP`) REFERENCES `thongtinsp` (`mattsp`);

--
-- Các ràng buộc cho bảng `hinhanhlq`
--
ALTER TABLE `hinhanhlq`
  ADD CONSTRAINT `fk_halq_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hd_kh` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `fk_hd_km` FOREIGN KEY (`MaKM`) REFERENCES `khuyenmai` (`MaKM`);

--
-- Các ràng buộc cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD CONSTRAINT `fk_km_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`masp`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `fk_pn_ncc` FOREIGN KEY (`MaNCC`) REFERENCES `nhacc` (`MaNCC`),
  ADD CONSTRAINT `fk_pn_nv` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`MaNV`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_lsp` FOREIGN KEY (`maloaisp`) REFERENCES `loaisp` (`MaLoaiSP`),
  ADD CONSTRAINT `fk_sp_th` FOREIGN KEY (`math`) REFERENCES `thuonghieu` (`MaTH`);

--
-- Các ràng buộc cho bảng `thongtinsp`
--
ALTER TABLE `thongtinsp`
  ADD CONSTRAINT `fk_ttsp_sp` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
