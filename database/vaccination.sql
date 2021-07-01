-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 01, 2021 at 07:53 PM
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
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `IDAPPOINMENT` int(10) NOT NULL,
  `IDIM` int(10) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `centre_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `immunizer`
--

CREATE TABLE `immunizer` (
  `IDIM` int(10) NOT NULL,
  `IDPARENT` int(10) NOT NULL,
  `fullname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `identity_card` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ward` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `district` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `past_medical_history` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rela` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `immunizer`
--

INSERT INTO `immunizer` (`IDIM`, `IDPARENT`, `fullname`, `username`, `sex`, `dob`, `identity_card`, `phone`, `mail`, `permanent_address`, `ward`, `district`, `city`, `past_medical_history`, `rela`, `created_at`, `updated_at`) VALUES
(1, 0, 'Phan Thái Tâm', 'tampth', 'Nam', '2001-06-28', '206308688', '0764853497', 'thaitam2806@gmail.com', 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(2, 0, 'Vũ Thuỳ Dương', 'thduongvu', 'Nữ', '2001-09-18', '079301020017', '0366866701', 'thduong.sarah@gmail.com', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(3, 0, 'Phan Thái Thịnh', 'IM0001', 'Nam', '1999-11-04', '206308786', '0764853497', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(4, 0, 'Phan Thái Sơn', 'IM0002', 'Nam', '1970-01-15', '205308104', '0768462294', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(5, 0, 'Nguyễn Thị Trọng', 'IM0003', 'Nữ', '1972-02-03', '205334917', '0768462294', NULL, 'Thôn 7B, Phường Điện Nam Đông, Thị xã Điện Bản, Tỉnh Quảng Nam', 'Phường Điện Nam Đông', 'Thị xã Điện Bàn', 'Quảng Nam', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(6, 0, 'Vũ Văn Đức', 'IM0004', 'Nam', '1979-05-29', '205334918', '0908379784', NULL, '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(7, 0, 'Ngô Thị Sơn', 'IM0005', 'Nữ', '1978-12-18', '205334919', '0938223929', NULL, '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', 'Phường 6', 'Quận Gò Vấp', 'Hồ Chí Minh', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(8, 0, 'Thái Ngọc Cường', 'IM0006', 'Nam', '1999-09-25', '206301935', '0868292509', NULL, 'Lam Phụng, Xã Đại Đồng, Huyện Đại Lộc, tỉnh Quảng Nam', 'Xã Đại Đồng', 'Huyện Đại Lộc', 'Quảng Nam', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(9, 0, 'Trần Cao Thu Thuỷ', 'IM0007', 'Nữ', '1985-04-08', '036185003063', '0982996168', NULL, '67/29 Khu phố Bình Phước A, Phường Bình Chuẩn, Thành phố Thuận An, Tỉnh Bình Dương', 'Phường Bình Chuẩn', 'Thành phố Thuận An', 'Bình Dương', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(10, 0, 'Võ Thị Kim Ngân', 'IM0008', 'Nữ', '2001-05-17', '241751038', '0706202008', NULL, '41/3 Lê Hồng Phong, Phường Tân Tiến, Thành phố Buôn Ma Thuột, Tỉnh Đắk Lắk', 'Phường Tân Tiến ', 'Thành phố Buôn Ma Thuột ', 'Đắk Lắk', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(11, 0, 'Nguyễn Phượng Minh Hằng', 'IM0009', 'Nữ', '1999-01-23', '312383031', '0357212589', NULL, '390/3 Trần Văn Khuê, Tổ 20, Ấp Long Tường, Xã Long An, Huyện Châu Thành, Tỉnh Tiền Giang', 'Xã Long An', 'Huyện Châu Thành', 'Tiền Giang', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(12, 0, 'Trần Thiên Thư', 'IM0010', 'Nữ', '1998-10-12', '251162523', '0399987741', NULL, '78 Thanh Bình 2, Xã Bình Thạnh, Huyện Đức Trọng, Tỉnh Lâm Đồng', 'Xã Bình Thạnh', 'Huyện Đức Trọng ', 'Lâm Đồng ', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(13, 0, 'Nguyễn Huỳnh Thanh Tuyền', 'IM0011', 'Nữ', '2002-07-20', '272921781', '0797306408', NULL, '401/3 Khu phố Tam Hoà, Phường Hiệp Hoà, Thành phố Biên Hoà, Tỉnh Đồng Nai', 'Phường Hiệp Hoà', 'Thành phố Biên Hoà', 'Đồng Nai', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(14, 0, 'Hoàng Thị Hà Thu', 'IM0012', 'Nữ', '2000-10-20', '231293389', '0977521047', NULL, 'Tổ 11, Thị Trấn Phú Thiện, Huyện Phú Thiện, Tỉnh Gia Lai ', 'Thị Trấn Phú Thiện', 'Huyện Phú Thiện', 'Gia Lai ', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(15, 0, 'Hà Thị Minh Trâm', 'IM0013', 'Nữ', '2002-08-18', '312491049', '0828350137', NULL, '291 Nguyễn Quân, Ấp 3A, Phường 6, Thành phố Mỹ Tho, Tỉnh Tiền Giang ', 'Phường 6', 'Thành phố Mỹ Tho', 'Tiền Giang ', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(16, 0, 'Lê Ngọc Bảo Trâm', 'IM0014', 'Nữ', '2002-08-26', '281338145', '0889449159', NULL, '109 Khu phố Tân Long, Phường Tân Hiệp, Thị xã Tân Uyên, Tỉnh Bình Dương ', 'Phường Tân Hiệp', 'Thị xã Tân Uyên', 'Bình Dương ', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(17, 0, 'Đỗ Thị Thanh Huyền', 'IM0015', 'Nữ', '2001-02-19', '095301000038', '0334643328', NULL, '59 Trần Văn Mười, Ấp Xuân Thới Đông 1, Xã Xuân Thới Đông, Huyện Hóc Môn, Thành phố Hồ Chí Minh', 'Xã Xuân Thới Đông', 'Huyện Hóc Môn', 'Hồ Chí Minh', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(18, 0, 'Nguyễn Thảo Bảo Trân', 'IM0016', 'Nữ', '2000-02-19', '312416972', '0837345939', NULL, '208A Nguyễn Hữu Cảnh, Phường 25, Quận Bình Thạnh, Thành phố Hồ Chí Minh', 'Phường 25', 'Quận Bình Thạnh', 'Hồ Chí Minh', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(19, 0, 'Nguyễn Thị Phương Thảo', 'IM0017', 'Nữ', '2000-10-06', '285759386', '0973405413', NULL, 'Tổ 8, Khu phố 3, Phường Tân Đồng, Thành phố Đồng Xoài, Tỉnh Bình Phước', 'Phường Tân Đồng', 'Thành phố Đồng Xoài', 'Bình Phước', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(20, 0, 'Nguyễn Thị Thanh Hường', 'IM0018', 'Nữ', '2000-10-28', '215498463', '0395890807', NULL, 'Tổ 10, Thôn Định Xuân, Xã Vĩnh Quang, Huyện Vĩnh Thạnh, Tỉnh Bình Định', 'Xã Vĩnh Quang', 'Huyện Vĩnh Thạnh', 'Bình Định', NULL, NULL, '2021-07-01 04:32:54', '2021-07-01 04:32:54'),
(21, 7, 'Vũ Lan Anh', 'IM0019', 'Nữ', '2008-06-28', '', '0917719784', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', '6', 'Gò Vấp', 'Hồ Chí Minh', '', '7', 'Mẹ', '2021-07-01 04:33:14', '2021-07-01 04:33:14'),
(22, 7, 'Vũ Đức Anh', 'IM0020', 'Nam', '2015-05-29', '', '0917719784', '321 Dương Quảng Hàm, Phường 6, Quận Gò Vấp, Thành phố Hồ Chí Minh', '6', 'Gò Vấp', 'Hồ Chí Minh', '', '7', 'Mẹ', '2021-07-01 04:33:14', '2021-07-01 04:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `IDNEWS` int(10) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `IDCATEGORY` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`IDNEWS`, `title`, `content`, `image`, `IDCATEGORY`, `created_at`, `updated_at`) VALUES
(1, 'Khám sàng lọc trước tiêm chủng', '1. Tại sao cần khám sàng lọc trước khi tiêm chủng\r\n\r\nKhám sàng lọc trước khi tiêm chủng là việc rất cần thiết nhằm phát hiện những bất thường cần lưu ý để quyết định cho trẻ (người được tiêm) tiêm chủng, tạm hoãn việc tiêm chủng hay không được tiêm một loại vắc xin nào đó.\r\n\r\nVì vậy, người nhà của trẻ hay người đi tiêm chủng và bác sĩ cần hợp tác với nhau để đảm bảo việc tiêm chủng là đúng thời điểm, hiệu quả và an toàn.\r\n\r\nKết quả khám sàng lọc trước tiêm chủng được căn cứ trên những thông tin người nhà hay người đi tiêm chủng cung cấp cho bác sĩ và những thông tin bác sĩ phát hiện sau khi thăm khám.', NULL, 2, '2021-07-01 17:50:04', '2021-07-01 17:50:04'),
(2, 'Theo dõi sau tiêm chủng\r\n', '1. Trẻ em và người lớn đều cần được theo dõi tối thiểu 30 phút tại cơ sở tiêm chủng. Nếu phát hiện các biểu hiện bất thường, nôn trớ, thở nhanh hay ngắt quãng, thở khò khè, da mẩn đỏ,… cần báo ngay cho nhân viên y tế gần nhất.\r\n\r\nTrẻ em cần tiếp tục được theo dõi trong 24 – 48 giờ sau khi tiêm bao gồm:\r\n\r\nThân nhiệt, nhịp thở\r\nSự tỉnh táo (chơi đùa), ăn, ngủ\r\nQuan sát da toàn thân và vùng tiêm (sưng, mẩm đỏ, phát ban)\r\n\r\n2. Chăm sóc trẻ sau tiêm chủng\r\n\r\nCho trẻ mặc quần áo thoáng mát\r\nDuy trì chế độ dinh dưỡng hàng ngày, cho trẻ bú mẹ và uống nước nhiều hơn\r\nCó thể dùng thuốc hạ sốt thông thường (paracetamol, ibuprofen) với liều phù hợp cân nặng khi trẻ sốt > 38.5oC, quấy khóc.\r\nNếu tại vết tiêm sưng, đỏ, có thể chườm lạnh để giúp giảm đau và giảm sưng cho trẻ\r\nKhi bế trẻ tránh chạm vào vết tiêm, không xoa dầu, chườm nóng, nặn chanh, đắp khoai tây hay bôi đắp bất cứ thứ gì lên vết tiêm vì có thể gây nhiễm trùng vết tiêm\r\nKhông dùng aspirin, không dùng thêm các thuốc ho và hạ sốt khác vì các chế phẩm này có thể làm tăng liều paracetamol ở trẻ', NULL, 3, '2021-07-01 17:50:04', '2021-07-01 17:50:04'),
(3, 'Khoảng 30 triệu liều vắc xin phòng COVID-19 sẽ về Việt Nam trong Quý III/2021', 'Theo Bộ trưởng Bộ Y tế Nguyễn Thanh Long, dự kiến từ quý III/2021, số lượng vắc xin phòng COVID-19 về Việt Nam tương đối lớn (khoảng 30 triệu liều trong quý III). Các bộ, cơ quan đang tiếp tục đẩy mạnh việc nghiên cứu, chuyển giao công nghệ và sản xuất vắc xiin trong nước.\r\n\r\nNgày 1/7, dưới sự chủ trì của Thủ tướng Phạm Minh Chính, Chính phủ họp phiên thường kỳ tháng 6/2021, thảo luận về tình hình kinh tế-xã hội 6 tháng đầu năm và phương hướng, nhiệm vụ 6 tháng cuối năm 2021.\r\n\r\nTại phiên họp, Chính phủ sẽ nghe và thảo luận 6 báo cáo về các vấn đề, nhóm vấn đề gồm: Tình hình kinh tế-xã hội tháng 6 và 6 tháng đầu năm 2021; kiểm điểm công tác chỉ đạo, điều hành của Chính phủ 6 tháng đầu năm 2021; tình hình thực hiện những nhiệm vụ, giải pháp chủ yếu cải thiện môi trường kinh doanh, nâng cao năng lực cạnh tranh quốc gia 6 tháng đầu năm và nhiệm vụ, giải pháp chủ yếu 6 tháng cuối năm 2021; \r\n\r\nTình hình thực hiện chương trình cắt giảm, đơn giản hóa quy định liên quan đến hoạt động kinh doanh 6 tháng đầu năm và nhiệm vụ, giải pháp chủ yếu 6 tháng cuối năm 2021; rà soát các quy định của luật, pháp lệnh đang gây khó khăn, vướng mắc cho công tác phòng, chống dịch COVID-19;\r\n\r\nDự thảo quyết định về tiêu chí phân loại doanh nghiệp nhà nước, doanh nghiệp có vốn nhà nước thực hiện chuyển đổi sở hữu, sắp xếp lại, thoái vốn giai đoạn 2021-2025, và một số vấn đề quan trọng khác.\r\n\r\nPhát biểu khai mạc phiên họp, Thủ tướng Phạm Minh Chính nhấn mạnh, phiên họp lần này có ý nghĩa quan trọng, đánh giá tình hình kinh tế - xã hội, công tác điều hành của Chính phủ trong 6 tháng đầu năm và bàn các nhiệm vụ, giải pháp cho 6 tháng cuối năm 2021; đồng thời bàn nhiều vấn đề quan trọng, cấp bách hiện nay như phòng, chống dịch COVID-19, tháo gỡ khó khăn thúc đẩy sản xuất, kinh doanh...\r\n\r\nThủ tướng yêu cầu các đại biểu dự phiên họp tập trung thảo luận có trọng tâm, trọng điểm, ngắn gọn, cụ thể với tinh thần có những vấn đề cần kế thừa, ổn định, nhưng cũng có những vấn đề cần đổi mới, phát triển; việc thảo luận cần tập trung vào những vấn đề thuộc chức năng, nhiệm vụ chung của Chính phủ, không sa đà vào các nhiệm vụ của bộ, ngành, cơ quan.', NULL, 1, '2021-07-01 17:51:42', '2021-07-01 17:51:42'),
(4, 'Thủ tướng Chính phủ bổ sung hơn 7.650 tỷ đồng mua 61 triệu liều vắc xin phòng COVID-19', 'Ngày 30/6, Thủ tướng Chính phủ đã ban hành Quyết định 1022/QĐ-TTg về bổ sung kinh phí hơn 7.650 tỷ đồng để mua và sử dụng 61 triệu liều vắc xin phòng COVID-19.\r\n\r\nQuyết định nêu rõ, bổ sung 7.650,776 tỷ đồng cho Bộ Y tế để mua và sử dụng 61 triệu liều vắc xin phòng COVID-19 do AstraZeneca sản xuất của Công ty cổ phần vắc xin Việt Nam (30 triệu liều) và do Pfizer sản xuất (31 triệu liều) như đề nghị của Bộ Tài chính và Bộ Y tế.\r\n\r\nTrong đó: 5.100,517 tỷ đồng bổ sung dự toán chi ngân sách nhà nước năm 2021 của Bộ Y tế từ nguồn kinh phí 12.100 tỷ đồng tiết kiệm chi năm 2020 chuyển nguồn sang năm 2021 đã được Ủy ban Thường vụ Quốc hội quyết định tại Nghị quyết số 1271/NQ-UBTVQH ngày 18/5/2021 và 2.550,259 tỷ đồng chi từ nguồn Quỹ vắc xin phòng COVID-19 Việt Nam thành lập theo Quyết định số 779/QĐ-TTg ngày 26/5/2021 của Thủ tướng Chính phủ.\r\n\r\nThủ tướng Chính phủ đồng ý sử dụng 37 tỷ đồng trong tổng số 1.237 tỷ đồng đã bổ sung cho Bộ Y tế theo Quyết định số 507/QĐ-TTg ngày 31/3/2021 của Thủ tướng Chính phủ để chi đối ứng cho việc tiếp nhận, vận chuyển, phân phối, thuê kho bảo quản vắc xin, mua vật tư tiêm chủng cho các lô vắc xin phòng COVID-19 do COVAX Facility hỗ trợ, vắc xin viện trợ, tài trợ của nước ngoài.\r\n\r\nThủ tướng Chính phủ giao Bộ Tài chính, Bộ Y tế chịu trách nhiệm về tính chính xác của nội dung và số liệu báo cáo.\r\n\r\nBộ Y tế chịu trách nhiệm tổ chức mua và sử dụng vắc xin phòng COVID-19 theo đúng quy định của pháp luật về đấu thầu, pháp luật về tài sản công và các quy định của pháp luật có liên quan; chủ trì, phối hợp với Bộ Tài chính báo cáo Thủ tướng Chính phủ kết quả sử dụng số kinh phí được bổ sung nêu trên.\r\n\r\nViệc quản lý, sử dụng, thanh quyết toán số kinh phí được bổ sung bảo đảm đúng quy định, công khai, minh bạch, tiết kiệm, hiệu quả.\r\n', NULL, 1, '2021-07-01 17:51:42', '2021-07-01 17:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `IDCATEGORY` int(10) NOT NULL,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notes` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`IDCATEGORY`, `category_name`, `notes`, `created_at`, `updated_at`) VALUES
(1, 'CẬP NHẬT TIN TỨC VỀ COVID - 19', 'Cập nhật các thông tin liên quan đến dịch COVID - 19', '2021-07-01 17:45:36', '2021-07-01 17:45:36'),
(2, 'NHỮNG THÔNG TIN CẦN BIẾT TRƯỚC KHI TIÊM CHỦNG', 'Các lưu ý trước khi thực hiện tiêm chủng', '2021-07-01 17:47:25', '2021-07-01 17:47:25'),
(3, 'NHỮNG THÔNG TIN CẦN BIẾT SAU KHI TIÊM CHỦNG', 'Những thông tin cần lưu ý sau khi tiêm chủng, phản ứng bình thường, tiêu cực ...', '2021-07-01 17:47:25', '2021-07-01 17:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `IDUSER` int(10) NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`IDUSER`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tampth', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(2, 'thduongvu', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(3, 'IM0001', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(4, 'IM0002', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(5, 'IM0003', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(6, 'IM0004', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(7, 'IM0005', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(8, 'IM0006', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(9, 'IM0007', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(10, 'IM0008', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(11, 'IM0009', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(12, 'IM0010', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(13, 'IM0011', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(14, 'IM0012', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(15, 'IM0013', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(16, 'IM0014', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(17, 'IM0015', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(18, 'IM0016', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(19, 'IM0017', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(20, 'IM0018', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(21, 'IM0019', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15'),
(22, 'IM0020', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2021-07-01 17:17:15', '2021-07-01 17:17:15');

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
(1, 'PHÒNG BỆNH VIÊM ĐƯỜNG HÔ HẤP CẤP DO COVID-19', 0, NULL, NULL, NULL, NULL, '2021-07-01 03:37:59', '2021-07-01 03:37:59'),
(2, 'VẮC XIN 6 TRONG 1', 0, NULL, NULL, NULL, NULL, '2021-07-01 03:37:59', '2021-07-01 03:37:59'),
(3, 'AstraZeneca', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 03:38:40', '2021-07-01 03:38:40'),
(4, 'Infanrix Hexa', 2, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 03:38:40', '2021-07-01 03:38:40'),
(5, 'Hexaxim', 2, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 03:38:40', '2021-07-01 03:38:40'),
(6, 'VẮC XIN 5 TRONG 1', 0, NULL, NULL, NULL, NULL, '2021-07-01 03:38:40', '2021-07-01 03:38:40'),
(7, 'Pentaxim', 6, 'Đang sử dụng', 200, NULL, NULL, '2021-07-01 03:42:03', '2021-07-01 03:42:03'),
(8, 'Infanrix IPV+Hib', 6, 'Đang sử dụng', 115, NULL, NULL, '2021-07-01 03:42:03', '2021-07-01 03:42:03'),
(9, 'PHÒNG TIÊU CHẢY CẤP DO ROTA VIRUS', 0, NULL, NULL, NULL, NULL, '2021-07-01 03:42:03', '2021-07-01 03:42:03'),
(10, 'Rotateq', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 03:45:50', '2021-07-01 03:45:50'),
(11, 'Rotarix', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 03:45:50', '2021-07-01 03:45:50'),
(12, 'Nanocovax', 1, 'Đang chờ cấp phép', NULL, NULL, NULL, '2021-07-01 03:53:41', '2021-07-01 03:53:41'),
(13, 'Novavax', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 03:53:41', '2021-07-01 03:53:41'),
(14, 'Pfizer-BioNTech', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 03:53:41', '2021-07-01 03:53:41'),
(15, 'Moderna', 1, 'Đang chờ nhập khẩu', NULL, NULL, NULL, '2021-07-01 03:53:41', '2021-07-01 03:53:41'),
(16, 'PHÒNG BỆNH UNG THƯ CỔ TỬ CUNG', 0, NULL, NULL, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 03:56:08', '2021-07-01 03:56:08'),
(17, 'Gardasil', 16, 'Đang sử dụng', 126, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 04:00:09', '2021-07-01 04:00:09'),
(18, 'Cervarix', 16, 'Ngưng sử dụng', 126, NULL, 'Chỉ dành cho giới tính nữ', '2021-07-01 04:00:09', '2021-07-01 04:00:09'),
(19, 'PHÒNG BỆNH THỦY ĐẬU', 0, NULL, NULL, NULL, NULL, '2021-07-01 04:00:09', '2021-07-01 04:00:09'),
(20, 'Varivax', 19, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 04:01:55', '2021-07-01 04:01:55'),
(21, 'Varicella', 19, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 04:01:55', '2021-07-01 04:01:55'),
(22, 'PHÒNG BỆNH CÚM', 0, NULL, NULL, NULL, NULL, '2021-07-01 04:01:55', '2021-07-01 04:01:55'),
(23, 'GC Flu', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 04:05:16', '2021-07-01 04:05:16'),
(24, 'Influvac 0.5ml', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 04:05:16', '2021-07-01 04:05:16'),
(25, 'Ivacflu-S 0,5ml', 22, 'Đang sử dụng', 286, NULL, NULL, '2021-07-01 04:05:16', '2021-07-01 04:05:16'),
(26, 'Rotavin M1', 9, 'Đang sử dụng', 126, NULL, NULL, '2021-07-01 04:05:16', '2021-07-01 04:05:16');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IDAD`);

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`IDAPPOINMENT`),
  ADD KEY `fk_appoinment_immunizier` (`IDIM`),
  ADD KEY `fk_appoinment_centre` (`centre_name`);

--
-- Indexes for table `immunizer`
--
ALTER TABLE `immunizer`
  ADD PRIMARY KEY (`IDIM`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`IDNEWS`),
  ADD KEY `fk_news_category` (`IDCATEGORY`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`IDCATEGORY`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`IDUSER`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `vaccinationcentre`
--
ALTER TABLE `vaccinationcentre`
  ADD PRIMARY KEY (`IDCENTRE`),
  ADD UNIQUE KEY `centre_name` (`centre_name`),
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
  MODIFY `IDIM` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `IDNEWS` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `IDCATEGORY` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `IDUSER` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `appoinment_ibfk_1` FOREIGN KEY (`IDIM`) REFERENCES `immunizer` (`IDIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `appoinment_ibfk_2` FOREIGN KEY (`centre_name`) REFERENCES `vaccinationcentre` (`centre_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`IDCATEGORY`) REFERENCES `news_category` (`IDCATEGORY`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`username`) REFERENCES `immunizer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

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
