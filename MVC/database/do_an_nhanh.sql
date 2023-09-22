-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 22, 2023 lúc 04:55 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `do_an_nhanh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `anh` varchar(50) DEFAULT NULL,
  `tendangnhap` varchar(50) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `hovaten` varchar(50) DEFAULT NULL,
  `gioitinh` varchar(20) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ngaythemadmin` timestamp NOT NULL DEFAULT current_timestamp(),
  `chucvu` varchar(50) DEFAULT NULL,
  `cap` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `anh`, `tendangnhap`, `matkhau`, `hovaten`, `gioitinh`, `diachi`, `sodienthoai`, `email`, `ngaythemadmin`, `chucvu`, `cap`) VALUES
(2, '', 'admin_pro', '210b48b542659fb951a80a15c5997513', 'Nguyễn Văn A', 'Nam', 'Hà Nội', '388937608', 'nguyenvana123@gmail.com', '2023-09-12 01:02:16', 'Nhân viên', 2),
(3, NULL, 'admin', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Đức Hoàng', 'Nam', '[value-7]', '12345678', '[value-9]', '2023-09-12 01:02:12', 'Quản Lý', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `anh` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `anh`) VALUES
(1, 'img/baner_pizza.jpg'),
(2, 'img/banner_bbq.jpg'),
(3, 'img/banner-salad.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan_danhgia`
--

CREATE TABLE `binhluan_danhgia` (
  `id` int(11) NOT NULL,
  `khachhang_id` int(11) DEFAULT NULL,
  `sanpham_id` int(11) DEFAULT NULL,
  `danhgia` varchar(30) DEFAULT NULL,
  `noidungbinhluan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan_danhgia`
--

INSERT INTO `binhluan_danhgia` (`id`, `khachhang_id`, `sanpham_id`, `danhgia`, `noidungbinhluan`) VALUES
(24, 25, 60, '5', 'test'),
(25, 25, 2, '4', 'fdgsdag');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) DEFAULT NULL,
  `sanpham_id` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `tongtien` decimal(15,2) DEFAULT NULL,
  `diachi_chitiet` varchar(200) NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT current_timestamp(),
  `ghichu` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `donhang_id`, `sanpham_id`, `soluong`, `tongtien`, `diachi_chitiet`, `ngaydathang`, `ghichu`) VALUES
(271, 0, 7, 9, 1440000.00, '', '2023-09-22 02:40:42', ''),
(272, 181, 6, 1, 160000.00, '', '2023-09-22 02:41:05', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Pizza'),
(2, 'Sườn BBQ'),
(3, 'Mì Ý'),
(4, 'Salad'),
(5, 'Đồ uống'),
(6, 'Khác'),
(7, '[value-2]');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `khachhang_id` int(11) NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `sodienthoai` varchar(11) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `tinh_thanh` varchar(50) NOT NULL,
  `diachichitiet` varchar(500) NOT NULL,
  `tongtien` decimal(15,2) DEFAULT NULL,
  `trangthai` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`id`, `khachhang_id`, `hovaten`, `sodienthoai`, `email`, `tinh_thanh`, `diachichitiet`, `tongtien`, `trangthai`) VALUES
(180, 25, 'Nguyễn Đức Hoàng', '', 'nguyenduchoangasjhdhvhashjd', '', '', 1440000.00, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(11) NOT NULL,
  `anh` varchar(50) DEFAULT NULL,
  `tendangnhap` varchar(50) DEFAULT NULL,
  `matkhau` varchar(100) DEFAULT NULL,
  `hovaten` varchar(50) DEFAULT NULL,
  `gioitinh` varchar(20) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sodienthoai` varchar(12) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `anh`, `tendangnhap`, `matkhau`, `hovaten`, `gioitinh`, `diachi`, `sodienthoai`, `email`, `ngaytao`) VALUES
(25, 'img/mi_y.jpg', 'client', '25d55ad283aa400af464c76d713c07ad', 'Nguyễn Đức Hoàng', '', 'HÀ Nội', '1233456789', 'nguyenvana237@gmail.com', '2023-09-11 13:28:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `id` int(11) NOT NULL,
  `tennhacungcap` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhacungcap`
--

INSERT INTO `nhacungcap` (`id`, `tennhacungcap`) VALUES
(1, 'Cửa hàng thịt bò'),
(2, 'Cửa hàng rau sạch'),
(3, 'Cửa hàng gia vị'),
(4, 'Cửa hàng bánh ngọt'),
(5, 'Cửa hàng tạp hóa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `nhacungcap_id` int(11) DEFAULT NULL,
  `danhmuc_id` int(11) DEFAULT NULL,
  `tensanpham` varchar(50) DEFAULT NULL,
  `anhsanpham` varchar(50) DEFAULT NULL,
  `giamoi` decimal(15,2) DEFAULT NULL,
  `giacu` decimal(15,2) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL,
  `nguyenlieu` varchar(500) NOT NULL,
  `ngaythemsanpham` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `nhacungcap_id`, `danhmuc_id`, `tensanpham`, `anhsanpham`, `giamoi`, `giacu`, `soluong`, `mota`, `nguyenlieu`, `ngaythemsanpham`) VALUES
(1, 1, 1, 'Pizza', 'img/pizza_raucu.jpg', 70000.00, 90000.00, 123, 'pizza ngon quá chừng', 'ádgs', '2023-08-16 21:33:20'),
(2, 2, 1, 'Pizza Xúc Xích', 'img/pizza_xucxich.jpg', 79000.00, 89000.00, 123, 'pizaa ngon quá', 'sdgsd', '2023-08-17 06:08:53'),
(3, 3, 1, 'Pizza Nấm', 'img/pizza_nam.jpg', 79000.00, 89000.00, 123, 'pizaa ngon quá', 'xcvxcv', '2023-08-17 06:08:59'),
(4, 4, 1, 'Pizza Phô mai', 'img/pizza_phomai.jpg', 79000.00, 89000.00, 123, 'pizaa ngon quá', 'xvczv', '2023-08-17 06:09:03'),
(5, 1, 2, 'Sườn BBQ', 'img/suon_bbq.jpg', 160000.00, 145000.00, 123, 'Sườn ngon quá', 'dfhvcb', '2023-08-17 06:09:06'),
(6, 2, 2, 'Sườn BBQ 1', 'img/suon_bbq_nuongngo.jpeg', 160000.00, 145000.00, 123, 'Sườn ngon quá', 'xcvxc', '2023-08-17 06:09:09'),
(7, 3, 2, 'Sườn BBQ 2', 'img/suon_bbq1.jpg', 160000.00, 145000.00, 123, 'Sườn ngon quá', 'cvbvc', '2023-08-17 06:09:17'),
(8, 4, 2, 'Cơm Sườn', 'img/com-suon-nuong-bbq.png', 160000.00, 145000.00, 123, 'Sườn ngon quá', 'cvb xc', '2023-08-17 06:09:21'),
(9, 1, 3, 'Mì Ý', 'img/humberger.jpg', 80000.00, 90000.00, 12345, 'tesstcsbf', 'xzzxa', '2023-08-16 21:33:44'),
(10, 2, 3, 'Mì Ý Sốt Cà Chua', 'img/mi_y_sotcachua.jpeg', 110000.00, 120000.00, 123, 'Mì ý ngon quá', 'dfhvc', '2023-08-17 06:09:25'),
(11, 3, 3, 'Mì Ý Xúc Xích', 'img/mi-y-xuc-xich.webp', 90000.00, 100000.00, 123, 'Mì ý ngon quá', 'xcbvxzcs', '2023-08-17 06:09:29'),
(12, 4, 3, 'Mì Ý Sốt Bò', 'img/mi_y_sotbobam.jpg', 160000.00, 145000.00, 123, 'Mì Ý ngon quá', 'dfhcv', '2023-08-17 06:09:32'),
(13, 1, 4, 'Salad Nấm', 'img/salad_nam.jpg', 110000.00, 120000.00, 123, 'Salad ý ngon quá', 'xcvx', '2023-08-17 06:09:35'),
(14, 2, 4, 'Salad Rau Củ', 'img/salad_raucu.jpg', 90000.00, 100000.00, 123, 'Salad ngon quá', 'fgndc', '2023-08-17 06:09:38'),
(15, 3, 4, 'Salad Thịt Bò', 'img/salad_thitbo.jpg', 160000.00, 145000.00, 123, 'Salad ngon quá', 'cvngf', '2023-08-17 06:09:41'),
(16, 4, 4, 'Salad Tôm', 'img/salad_tom.webp', 160000.00, 145000.00, 123, 'Salad ngon quá', 'fgncx', '2023-08-17 06:09:45'),
(17, 1, 5, 'Trà Sữa Dâu Tây', 'img/sua-vi-dau.jpg', 110000.00, 120000.00, 123, 'Trà sữa ngon quá', 'cvbfg', '2023-08-17 06:09:48'),
(18, 2, 5, 'Trà Sữa Matcha', 'img/tra-sua-matcha.jpg', 90000.00, 100000.00, 123, 'Trà sữa ngon quá', 'fdsc', '2023-08-17 06:09:50'),
(19, 3, 5, 'Trà sữa Đường đen', 'img/ts_tranchauduongden.jpeg', 160000.00, 145000.00, 123, 'Trà sữa ngon quá', 'cbsd', '2023-08-17 06:09:55'),
(20, 1, 6, 'Phô Mai Que', 'img/phomaique.jpg', 110000.00, 120000.00, 123, 'Phô mai ngon quá', 'dfhgre', '2023-08-17 06:09:58'),
(21, 2, 6, 'Khoai Tây Chiên', 'img/khoataychien.webp', 90000.00, 100000.00, 123, 'Khoai tây ngon quá', 'dfha', '2023-08-17 06:10:01'),
(22, 3, 6, 'Đế Pizza', 'img/de_pizza.jpg', 160000.00, 145000.00, 123, 'Đế ngon quá', 'xcbad', '2023-08-17 06:10:03'),
(60, 4, 6, 'Trà sữatrà 6', 'img/de_pizza.jpg', 25000.00, 30000.00, 208, 'tets', 'ágsedrh', '2023-08-19 01:53:31');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan_danhgia`
--
ALTER TABLE `binhluan_danhgia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_khachhang` (`khachhang_id`,`sanpham_id`),
  ADD KEY `id_sanpham` (`sanpham_id`);

--
-- Chỉ mục cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  -- ADD UNIQUE KEY `donhang_id` (`donhang_id`,`sanpham_id`),
  ADD KEY `id_sanpham` (`sanpham_id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `chitietdonhang_id` (`chitietdonhang_id`);
  -- ADD UNIQUE KEY `id_khachhang` (`khachhang_id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_nhacungcap` (`nhacungcap_id`,`danhmuc_id`),
  ADD KEY `id_danhmuc` (`danhmuc_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `binhluan_danhgia`
--
ALTER TABLE `binhluan_danhgia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan_danhgia`
--
ALTER TABLE `binhluan_danhgia`
  ADD CONSTRAINT `binhluan_danhgia_ibfk_1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `binhluan_danhgia_ibfk_2` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`sanpham_id`) REFERENCES `sanpham` (`id`);

--
-- Các ràng buộc cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`khachhang_id`) REFERENCES `khachhang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`nhacungcap_id`) REFERENCES `nhacungcap` (`id`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
