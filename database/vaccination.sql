-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 01:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IDAD` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `identity_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IDAD`, `fullname`, `dob`, `identity_card`, `username`, `password`, `created_at`, `updated_at`) VALUES
('AD01', 'Phan Thái Tâm', '2001-06-28', '206308688', 'tampt', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 08:32:22', '2021-07-01 08:32:22'),
('AD02', 'Vũ Thuỳ Dương', '2001-09-18', '079301020017', 'thduongvu', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 08:32:22', '2021-07-01 08:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `immunizer`
--

CREATE TABLE `immunizer` (
  `IDIM` int(10) NOT NULL,
  `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `identity_card` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `past_medical_history` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `immunizer`
--

INSERT INTO `immunizer` (`idIM`, `fullname`, `sex`, `dob`, `identity_card`, `phone`, `mail`, `permanent_address`, `ward`, `district`, `city`, `past_medical_history`, `created_at`, `updated_at`) VALUES
(1, 'Phan Thái Tâm', 'Nam', '2001-06-28', '206308688', '0764853497', 'thaitam2806@gmail.com', 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(2, 'Vũ Thuỳ Dương', 'Nữ', '2001-09-18', '079301020017', '0366866701', 'thduong.sarah@gmail.com', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(3, 'Phan Thái Thịnh', 'Nam', '1999-11-04', '206308786', '0764853497', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(4, 'Phan Thái Sơn', 'Nam', '1970-01-15', '205308104', '0768462294', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(5, 'Nguyễn Thị Trọng', 'Nữ', '1972-02-03', '205334917', '0768462294', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(6, 'Vũ Văn Đức', 'Nam', '1979-05-29', '205334918', '0908379784', NULL, '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(7, 'Ngô Thị Sơn', 'Nữ', '1978-12-18', '205334919', '0938223929', NULL, '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(8, 'Thái Ngọc Cường', 'Nam', '1999-09-25', '206301935', '0868292509', NULL, 'Lam Phụng, Xã Đại Đồng, Huyện Đại Lộc, tỉnh Quảng Nam', 'Xã Đại Đồng', 'Huyện Đại Lộc', 'Quảng Nam', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(9, 'Trần Cao Thu Thuỷ', 'Nữ', '1985-04-08', '036185003063', '0982996168', NULL, '67/29 Khu phố Bình Phước A, Phường Bình Chuẩn, Thành phố Thuận An, Tỉnh Bình Dương', 'Phường Bình Chuẩn', 'Thành phố Thuận An', 'Bình Dương', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(10, 'Võ Thị Kim Ngân', 'Nữ', '2001-05-17', '241751038', '0706202008', NULL, '41/3 Lê Hồng Phong, Phường Tân Tiến, Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk', 'Phường Tân Tiến ', 'Thành phố Buôn Ma Thuột ', 'Đắk Lắk', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(11, 'Nguyễn Phượng Minh Hằng', 'Nữ', '1999-01-23', '312383031', '0357212589', NULL, '390/3 Trần Văn Khuê, Tổ 20, Ấp Long Tường, Xã Long An, Huyện Châu Thành, Tỉnh Tiền Giang', 'Xã Long An', 'Huyện Châu Thành', 'Tiền Giang', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(12, 'Trần Thiên Thư', 'Nữ', '1998-10-12', '251162523', '0399987741', NULL, '78 Thanh Bình 2, Xã Bình Thạnh, Huyện Đức Trọng, Tỉnh Lâm Đồng', 'Xã Bình Thạnh', 'Huyện Đức Trọng ', 'Lâm Đồng ', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(13, 'Nguyễn Huỳnh Thanh Tuyền', 'Nữ', '2002-07-20', '272921781', '0797306408', NULL, '401/3 Khu phố Tam Hoà, Phường Hiệp Hoà, Thành phố Biên Hoà, Tỉnh Đồng Nai', 'Phường Hiệp Hoà', 'Thành phố Biên Hoà', 'Đồng Nai', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(14, 'Hoàng Thị Hà Thu', 'Nữ', '2000-10-20', '231293389', '0977521047', NULL, 'Tổ 11, Thị Trấn Phú Thiện, Huyện Phú Thiện, Tỉnh Gia Lai ', 'Thị Trấn Phú Thiện', 'Huyện Phú Thiện', 'Gia Lai ', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(15, 'Hà Thị Minh Trâm', 'Nữ', '2002-08-18', '312491049', '0828350137', NULL, '291 Nguyễn Quân, Ấp 3A, Phường 6, Thành phố Mỹ Tho, Tỉnh Tiền Giang ', 'Phường 6', 'Thành phố Mỹ Tho', 'Tiền Giang ', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(16, 'Lê Ngọc Bảo Trâm', 'Nữ', '2002-08-26', '281338145', '0889449159', NULL, '109 Khu phố Tân Long, Phường Tân Hiệp, Thị xã Tân Uyên, Tỉnh Bình Dương ', 'Phường Tân Hiệp', 'Thị xã Tân Uyên', 'Bình Dương ', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(17, 'Đỗ Thị Thanh Huyền', 'Nữ', '2001-02-19', '095301000038', '0334643328', NULL, '59 Trần Văn Mười, Ấp Xuân Thới Đông 1, Xã Xuân Thới Đông, Huyện Hóc Môn, Thành phố Hồ Chí Minh', 'Xã Xuân Thới Đông', 'Huyện Hóc Môn', 'Hồ Chí Minh', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(18, 'Nguyễn Thảo Bảo Trân', 'Nữ', '2000-02-19', '312416972', '0837345939', NULL, '208A Nguyễn Hữu Cảnh, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh', 'Phường 25', 'Quận Bình Thạnh', 'Hồ Chí Minh', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(19, 'Nguyễn Thị Phương Thảo', 'Nữ', '2000-10-06', '285759386', '0973405413', NULL, 'Tổ 8, Khu phố 3, Phường Tân Đồng, Thành phố Đồng Xoài, Tỉnh Bình Phước', 'Phường Tân Đồng', 'Thành phố Đồng Xoài', 'Bình Phước', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54'),
(20, 'Nguyễn Thị Thanh Hường', 'Nữ', '2000-10-28', '215498463', '0395890807', NULL, 'Tổ 10, Thôn Định Xuân, Xã Vĩnh Quang, Huyện Vĩnh Thạnh, Tỉnh Bình Định', 'Xã Vĩnh Quang', 'Huyện Vĩnh Thạnh', 'Bình Định', NULL, '2021-07-01 11:32:54', '2021-07-01 11:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `immunizerchild`
--

CREATE TABLE `immunizerchild` (
  `IDIMC` int(10) NOT NULL,
  `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `past_medical_history` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDIM` int(10) NOT NULL,
  `rela` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `immunizerchild`
--

INSERT INTO `immunizerchild` (`idIMC`, `fullname`, `sex`, `dob`, `phone`, `permanent_address`, `ward`, `district`, `city`, `past_medical_history`, `idIM`, `rela`, `created_at`, `updated_at`) VALUES
(1, 'Vũ Lan Anh', 'Nữ', '2008-06-28', '0917719784', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', '6', 'Gò Vấp', 'Hồ Chí Minh', '', 7, 'Mẹ', '2021-07-01 11:33:14', '2021-07-01 11:33:14'),
(2, 'Vũ Đức Anh', 'Nam', '2015-05-29', '0917719784', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', '6', 'Gò Vấp', 'Hồ Chí Minh', '', 7, 'Mẹ', '2021-07-01 11:33:14', '2021-07-01 11:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinationcentre`
--

CREATE TABLE `vaccinationcentre` (
  `IDCENTRE` int(10) NOT NULL,
  `IDSYSTEM` int(10) NOT NULL,
  `centre_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `centre_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaccinationcentre`
--

INSERT INTO `vaccinationcentre` (`IDCENTRE`, `IDSYSTEM`, `centre_name`, `centre_address`, `region`, `city`, `created_at`, `updated_at`) VALUES
(1, 2, 'Viện Pasteur Thành Phố Hồ Chí Minh', '252 Nam Kỳ Khởi Nghĩa, Phường Võ Thị Sáu, Quận 3, Thành phố Hồ Chí Minh', 'Miền Nam', 'Hồ Chí Minh', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(2, 1, 'VNVC Cantavil An Phú', 'Tầng 1, Trung tâm thương mại Cantavil An Phú - 1 Song Hành, Phường An Phú, Quận 2, Thành phố Hồ Chí Minh', 'Miền Nam', 'Hồ Chí Minh', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(3, 1, 'VNVC Thủ Đức', 'Tầng 2, Cao ốc chung cư Moonlight Residences - 102 Đặng Văn Bi, Phường Bình Thọ, Quận Thủ Đức, Thành phố Hồ Chí Minh', 'Miền Nam', 'Hồ Chí Minh', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(4, 1, 'VNVC Trường Chinh', '180 Trường Chinh, Phường Khương Thượng, Quận Đống Đa, Thành phố Hà Nội', 'Miền Bắc', 'Hà Nội', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(5, 1, 'VNVC ICON 4 Cầu Giấy', 'Tòa nhà Icon 4 - 3 Cầu Giấy, Phường Láng Thượng, Quận Đống Đa, Thành phố Hà Nội (Cạnh ĐH Giao Thông Vận Tải)', 'Miền Bắc', 'Hà Nội', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(6, 1, 'VNVC Tam Kỳ', '01 Trần Quý Cáp, Phường Tân Thạnh, Thành phố Tam Kỳ, Tỉnh Quảng Nam', 'Miền Trung', 'Quảng Nam', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(7, 1, 'VNVC Vĩnh Yên - Vĩnh Phúc', '777 Nguyễn Tất Thành, Phường Tích Sơn, Thành phố Vĩnh Yên, Tỉnh Vĩnh Phúc', 'Miền Bắc', 'Vĩnh Phúc', '2021-07-01 09:36:24', '2021-07-01 09:36:24'),
(8, 3, 'Trung Tâm Tiêm Chủng HAPPY SKY', 'Số 6 - BT1 , Bùi Xuân Phái, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Thành phố Hà Nội', 'Miền Bắc', 'Hà Nội', '2021-07-01 09:42:22', '2021-07-01 09:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinationsystem`
--

CREATE TABLE `vaccinationsystem` (
  `IDSYSTEM` int(10) NOT NULL,
  `system_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `international_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviations` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `legal_representative` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `business_code` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `founding` date NOT NULL,
  `registered_office_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `management_unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaccinationsystem`
--

INSERT INTO `vaccinationsystem` (`IDSYSTEM`, `system_name`, `international_name`, `abbreviations`, `legal_representative`, `business_code`, `founding`, `registered_office_address`, `management_unit`, `created_at`, `updated_at`) VALUES
(1, 'CÔNG TY CỔ PHẦN VACXIN VIỆT NAM', 'VIETNAM VACCINE JOINT STOCK COMPANY', 'VNVC,.JSC', 'Ngô Chí Dũng', '0107631488', '2016-11-11', '180 Trường Chinh, Phường Khương Thượng, Quận Đống Đa, Thành phố Hà Nội, Việt Nam', 'Chi cục Thuế Quận Đống Đa', '2021-07-01 09:22:42', '2021-07-01 09:22:42'),
(2, 'VIỆN PASTEUR THÀNH PHỐ HỒ CHÍ MINH', 'PASTEUR INSTITUTE IN HO CHI MINH CITY', 'PIHCMC', 'Phan Trọng Lân', '0301225896', '1998-10-05', '167 Pasteur, phường 8, quận 3, Thành phố Hồ Chí Minh, Việt Nam', 'Cục Thuế Thành phố Hồ Chí Minh', '2021-07-01 09:22:42', '2021-07-01 09:22:42'),
(3, 'CÔNG TY CỔ PHẦN HAPPY SKY VIỆT NAM', 'VIET NAM HAPPY SKY JOINT STOCK COMPANY', 'VNHS.,JSC', 'Nguyễn Đức Phương', '0108325116', '2018-06-14', 'Ô số 6, Lô BT1 Khu đô thị Mỹ Đình II, Phường Mỹ Đình 2, Quận Nam Từ Liêm, Thành phố Hà Nội, Việt Nam', 'Chi cục Thuế Quận Nam Từ Liêm', '2021-07-01 09:41:23', '2021-07-01 09:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine`
--

CREATE TABLE `vaccine` (
  `IDVACCINE` int(10) NOT NULL,
  `vaccine_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IDPARENT` int(1) NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` int(10) DEFAULT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `important_note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaccine`
--

INSERT INTO `vaccine` (`IDVACCINE`, `vaccine_name`, `IDPARENT`, `status`, `amount`, `image`, `important_note`, `created_at`, `updated_at`) VALUES
(1, 'PHÒNG BỆNH VIÊM ĐƯỜNG HÔ HẤP CẤP DO COVID-19', 0, NULL, NULL, NULL, NULL, '2021-07-01 10:37:59', '2021-07-01 10:37:59'),
(2, 'VẮC XIN 6 TRONG 1', 0, NULL, NULL, NULL, NULL, '2021-07-01 10:37:59', '2021-07-01 10:37:59'),
(3, 'AstraZeneca', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 10:38:40', '2021-07-01 10:38:40'),
(4, 'Infanrix Hexa', 2, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 10:38:40', '2021-07-01 10:38:40'),
(5, 'Hexaxim', 2, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 10:38:40', '2021-07-01 10:38:40'),
(6, 'VẮC XIN 5 TRONG 1', 0, NULL, NULL, NULL, NULL, '2021-07-01 10:38:40', '2021-07-01 10:38:40'),
(7, 'Pentaxim', 6, 'Đang sử dụng', 200, NULL, NULL, '2021-07-01 10:42:03', '2021-07-01 10:42:03'),
(8, 'Infanrix IPV+Hib', 6, 'Đang sử dụng', 115, NULL, NULL, '2021-07-01 10:42:03', '2021-07-01 10:42:03'),
(9, 'PHÒNG TIÊU CHẢY CẤP DO ROTA VIRUS', 0, NULL, NULL, NULL, NULL, '2021-07-01 10:42:03', '2021-07-01 10:42:03'),
(10, 'Rotateq', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 10:45:50', '2021-07-01 10:45:50'),
(11, 'Rotarix', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 10:45:50', '2021-07-01 10:45:50'),
(12, 'Nanocovax', 1, 'Đang chờ cấp phép', NULL, NULL, NULL, '2021-07-01 10:53:41', '2021-07-01 10:53:41'),
(13, 'Novavax', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 10:53:41', '2021-07-01 10:53:41'),
(14, 'Pfizer-BioNTech', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 10:53:41', '2021-07-01 10:53:41'),
(15, 'Moderna', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 10:53:41', '2021-07-01 10:53:41'),
(16, 'PHÒNG BỆNH UNG THƯ CỔ TỬ CUNG', 0, NULL, NULL, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 10:56:08', '2021-07-01 10:56:08'),
(17, 'Gardasil', 16, 'Đang sử dụng', 126, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 11:00:09', '2021-07-01 11:00:09'),
(18, 'Cervarix', 16, 'Ngưng sử dụng', 126, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 11:00:09', '2021-07-01 11:00:09'),
(19, 'PHÒNG BỆNH THỦY ĐẬU', 0, NULL, NULL, NULL, NULL, '2021-07-01 11:00:09', '2021-07-01 11:00:09'),
(20, 'Varivax', 19, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 11:01:55', '2021-07-01 11:01:55'),
(21, 'Varicella', 19, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 11:01:55', '2021-07-01 11:01:55'),
(22, 'PHÒNG BỆNH CÚM', 0, NULL, NULL, NULL, NULL, '2021-07-01 11:01:55', '2021-07-01 11:01:55'),
(23, 'GC Flu', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 11:05:16', '2021-07-01 11:05:16'),
(24, 'Influvac 0.5ml', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 11:05:16', '2021-07-01 11:05:16'),
(25, 'Ivacflu-S 0,5ml', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 11:05:16', '2021-07-01 11:05:16'),
(26, 'Rotavin M1', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 11:05:16', '2021-07-01 11:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `vaccinedetail`
--

CREATE TABLE `vaccinedetail` (
  `IDDETAIL` int(10) NOT NULL,
  `vaccine_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `designate` text COLLATE utf8_unicode_ci NOT NULL,
  `usage` text COLLATE utf8_unicode_ci NOT NULL,
  `immunizer` text COLLATE utf8_unicode_ci NOT NULL,
  `undesignated` text COLLATE utf8_unicode_ci NOT NULL,
  `vaccination_schedule` text COLLATE utf8_unicode_ci NOT NULL,
  `side_effects` text COLLATE utf8_unicode_ci NOT NULL,
  `storage_conditions` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vaccinedetail`
--

INSERT INTO `vaccinedetail` (`IDDETAIL`, `vaccine_name`, `origin`, `country`, `designate`, `usage`, `immunizer`, `undesignated`, `vaccination_schedule`, `side_effects`, `storage_conditions`, `created_at`, `updated_at`) VALUES
(1, 'AstraZeneca', 'Vắc xin phòng Covid-19 của AstraZeneca được nghiên cứu và phát triển bởi Đại học Oxford và hãng dược nổi tiếng thế giới AstraZeneca (Vương quốc Anh).', 'Anh', 'Vắc xin phòng Covid-19 của AstraZeneca là vắc xin được chỉ định tạo miễn dịch chủ động để phòng bệnh Covid-19 gây ra do virus SARS-CoV-2.', 'Vắc xin phòng Covid-19 của AstraZeneca được chỉ định tiêm vào bắp (thường ở cánh tay trên) với liều 0,5ml.', 'Vắc xin phòng Covid-19 của AstraZeneca được chỉ định tiêm phòng cho những người từ 18 tuổi trở lên.', 'Chống chỉ định vắc xin với các trường hợp có phản ứng dị ứng với bất kì thành phần nào của vắc xin.\r\nChống chỉ định tiêm cho những người mắc hội chứng Guillain-Barré hoặc bất cứ bệnh lý nào có tình trạng hủy myelin.', 'Lịch tiêm gồm 2 mũi:\r\nMũi 1: Lần đầu tiên tiêm.\r\nMũi 2: Sau mũi đầu tiên từ 4 – 12 tuần.', 'Phản ứng tại chỗ tiêm: Nổi ban đỏ, chai cứng, sưng đau, ngứa, tăng nhạy cảm tại chỗ tiêm.\r\nCác phản ứng toàn thân khác: Sốt, mệt mỏi, ớn lạnh, đau đầu, đau cơ hoặc đau khớp, buồn ngủ, giảm cảm giác thèm ăn, nôn mửa, tiêu chảy, hội chứng giống cúm.', 'Bảo quản ở nhiệt độ lạnh (từ 2 đến 8oC), tránh ánh sáng. Đây là vắc xin nhiều liều trong cùng 1 lọ nên sau khi mở nắp, sử dụng càng sớm càng tốt và trong vòng 6 giờ.', '2021-07-01 11:48:07', '2021-07-01 11:48:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDAD`);

--
-- Indexes for table `immunizer`
--
ALTER TABLE `immunizer`
  ADD PRIMARY KEY (`idIM`),
  ADD UNIQUE KEY `identity_card` (`identity_card`);

--
-- Indexes for table `immunizerchild`
--
ALTER TABLE `immunizerchild`
  ADD PRIMARY KEY (`idIMC`),
  ADD KEY `fk_child_guardian` (`idIM`);

--
-- Indexes for table `vaccinationcentre`
--
ALTER TABLE `vaccinationcentre`
  ADD PRIMARY KEY (`IDCENTRE`),
  ADD KEY `fk_centre_system` (`IDSYSTEM`);

--
-- Indexes for table `vaccinationsystem`
--
ALTER TABLE `vaccinationsystem`
  ADD PRIMARY KEY (`IDSYSTEM`);

--
-- Indexes for table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`IDVACCINE`),
  ADD UNIQUE KEY `vaccine_name` (`vaccine_name`);

--
-- Indexes for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD PRIMARY KEY (`IDDETAIL`),
  ADD KEY `fk_detail_type` (`vaccine_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `immunizer`
--
ALTER TABLE `immunizer`
  MODIFY `idIM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `immunizerchild`
--
ALTER TABLE `immunizerchild`
  MODIFY `idIMC` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vaccinationcentre`
--
ALTER TABLE `vaccinationcentre`
  MODIFY `IDCENTRE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vaccinationsystem`
--
ALTER TABLE `vaccinationsystem`
  MODIFY `IDSYSTEM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `IDVACCINE` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  MODIFY `IDDETAIL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `immunizerchild`
--
ALTER TABLE `immunizerchild`
  ADD CONSTRAINT `fk_child_guardian` FOREIGN KEY (`idIM`) REFERENCES `immunizer` (`idIM`);

--
-- Constraints for table `vaccinationcentre`
--
ALTER TABLE `vaccinationcentre`
  ADD CONSTRAINT `fk_centre_system` FOREIGN KEY (`IDSYSTEM`) REFERENCES `vaccinationsystem` (`IDSYSTEM`);

--
-- Constraints for table `vaccinedetail`
--
ALTER TABLE `vaccinedetail`
  ADD CONSTRAINT `fk_detail_type` FOREIGN KEY (`vaccine_name`) REFERENCES `vaccine` (`vaccine_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
