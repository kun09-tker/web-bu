-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 07, 2021 lúc 12:19 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `typing`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `evaluate`
--

CREATE TABLE `evaluate` (
  `id_user` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `evaluate`
--

INSERT INTO `evaluate` (`id_user`, `id_list`, `value`) VALUES
(42, 1, 1),
(42, 2, 0),
(42, 3, 0),
(42, 4, 0),
(42, 5, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `content` varchar(100) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `content`) VALUES
(0, 'fj'),
(1, 'f j'),
(2, 'dk'),
(3, 'sl'),
(4, 'a;'),
(5, 'a sdfjkl;'),
(6, 'asdf'),
(7, 'jkl;'),
(8, 'hg'),
(9, 'a sdfghjkl;'),
(10, 'ru'),
(11, 'ei'),
(12, 'wo'),
(13, 'qp'),
(14, 'q weruiop'),
(15, 'qwer'),
(16, 'uiop'),
(17, 'ty'),
(18, 'q wertyuiop'),
(19, 'q werasdftg'),
(20, 'y uiophjkl;'),
(21, 'q wertyuiopasdfghjkl;'),
(22, 'vm'),
(23, 'c,'),
(24, 'x.'),
(25, 'z/'),
(26, 'z xcvm,./'),
(27, 'zxcv'),
(28, 'm,./'),
(29, 'bn'),
(30, 'z xcvbnm,./'),
(31, 'q wertasdfghzxcvb'),
(32, 'q wertasdfghzxcvb'),
(33, 'qwertyuiopasdfghjkl;zxcvbnm,./'),
(34, 'FJjf'),
(35, 'DKkd'),
(36, 'SLsl'),
(37, 'A:a;'),
(38, 'A SDFJKL:asdfjkl;'),
(39, 'GHgh'),
(40, 'A SDFGHJKL:asdfghjkl;'),
(41, 'RUru'),
(42, 'EIei'),
(43, 'WOwo'),
(44, 'QPqp'),
(45, 'Q WERUIOPqweruiop'),
(46, 'TYty'),
(47, 'Q WERTYUIOPqwertyuiop'),
(48, 'VMvm'),
(49, 'Cc ,<'),
(50, 'X> x.'),
(51, 'Z? z/'),
(52, 'Z XCV>?zxcvm,./M<'),
(53, 'BNbn'),
(54, 'Z XCVBN>?zxbncvm,./M<'),
(55, '47'),
(56, '38'),
(57, '29'),
(58, '10'),
(59, '1234'),
(60, '7890'),
(61, '12347890'),
(62, '56'),
(63, '1 234567890'),
(64, '$&47'),
(65, '#*38'),
(66, '@(29'),
(67, '!)10'),
(68, '! @#$&*()12347890'),
(69, '%^56'),
(70, '!@#$%^&*()123 456 7890'),
(71, '1 234567890!@#$%^&*()qwertyuiopQWERTYUIOPasdfghjkl;ASDFGHJKL:zxcvbnm,./ZXCVBNM>?<');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `list_test`
--

CREATE TABLE `list_test` (
  `id` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `Name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `Content` varchar(10000) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `thich` int(11) NOT NULL,
  `khong_thich` int(11) NOT NULL,
  `day` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `list_test`
--

INSERT INTO `list_test` (`id`, `id_user`, `Name`, `Content`, `thich`, `khong_thich`, `day`) VALUES
(1, 42, 'DF', 'about above add after again air all almost along also always America an and animal another answer any are around as ask at away back be because been before began begin being below between big book both boy but by call came can car carry change children city close come could country cut day did different don\'t does down each earth eat end enough even every example eye face family far father feet few find first follow food for form found four from get girl give go good got great group grow had home have hope hat hate', 7, 0, '12/5/2021'),
(2, 42, 'tmp', 'In this part you will have the chance of practicing how to have a conversation with someone you have just met You will learn new vocabulary which will help you in knowing how to confidently introduce yourself You should be able to provide information about your job explain where you live and give other simple details about your life in order to make new friends. Good luck!', 2, 6, '16/5/2021'),
(3, 42, 'haha', 'Xe tăng Tiếng Anh là Tank thường được gọi tắt là tăng là loại xe chiến đấu bọc thép được trang bị pháo lớn di chuyển bằng bánh xích được thiết kế cho tấn công và phòng thủ độc lập hoặc cùng các đơn vị chiến đấu khác Hỏa lực này thường được cung cấp bởi 1 pháo chính cỡ nòng lớn với súng máy trong 1 tháp pháo quay có giáp hạng nặng và có khả năng di chuyển trên nhiều loại địa hình nhằm cung cấp sự bảo vệ cho xe tăng và tổ lái cho phép thực hiện tất cả các nhiệm vụ chiến đấu trên chiến trường Nó có thể di chuyển trên nhiều loại địa hình và di chuyển bằng xích', 3, 6, '18/5/2021'),
(4, 42, 'Otaku', 'Otaku là một từ lóng trong tiếng Nhật dùng ám chỉ một ai đó quá yêu thích, say mê anime, manga, Vocaloid, cosplay, những thứ 2D. Chữ này theo thế giới lại được hiểu chung là những người thích đọc truyện tranh và xem phim hoạt hình, phần lớn mang nghĩa tiêu cực. Theo các nghiên cứu được công bố vào năm 2013, cụm từ này đã trở nên ít tiêu cực hơn và ngày càng có nhiều người bây giờ tự coi mình là otaku, kể cả ở Nhật Bản hay bất cứ nơi nào trên thế giới. Trong một cuộc khảo sát vào năm 2013 với sự tham gia của hơn 137,734 thanh thiếu niên, có 42,2% tự nhận mình là một dạng của otaku. Văn hóa otaku là một chủ đề chính của nhiều anime và các tác phẩm manga, cũng như tài liệu và nghiên cứu học thuật. Thuật ngữ Otaku bắt đầu vào những năm 1980, như một sự chuyển biến trong tâm lý xã hội và nuôi dưỡng những đặc điểm của otaku tại các trường học Nhật Bản, kết hợp với việc những cá nhân như vậy tự rút lui để trở thành những kẻ bị xã hội ruồng bỏ. Sự ra đời của nhóm văn hóa này cùng với sự bùng nổ anime sau khi phát hành tựa phim như Mobile Suit Gundam trước khi nó được phân nhánh thành Comic Market. Tiểu văn hóa otaku tiếp tục phát triển song song với sự bành trướng của Internet và phương tiện thông tin truyền thông, cũng như ngày càng nhiều anime, trò chơi điện tử, chương trình truyền hình và truyện tranh được ra đời.[2] Định nghĩa otaku sau đó đã trở nên phức tạp hơn, và nhiều phân loại của otaku nổi lên. Năm 2005, học viện nghiên cứu Nomura chia otaku thành mười hai nhóm, sau đó ước tính quy mô và tác động của thị trường đối với mỗi nhóm này. Các tổ chức khác đã chia tách nó chi tiết hơn hoặc tập trung vào một mối quan tâm otaku duy nhất. Những ấn bản này, phân loại các nhóm otaku khác nhau, bao gồm anime, manga, máy ảnh, ô tô, thần tượng và otaku điện tử. Tác động kinh tế của otaku đã được ước tính cao tới 2 nghìn tỷ yên (18 tỷ USD)', 0, 2, '19/5/2021'),
(5, 42, 'Miku', 'Miku is an emotionless looking girl with medium-length brown hair that has strands of hair hanging over the right side of her face . Her notable accessory is a set of wireless headphones that have a triangle-shaped logo on the ear cups (Audio-Technica) [6]. Like her sisters, she has dark blue eyes, an average height, a well-endowed figure and large breasts.\n\nMiku usually wears a long-sleeved sweater that covers her uniform. She also wears black tights and puts on her headphones around her neck. Most of the time, she has part of her bangs cover her right eye. She wears a ranzel', 3, 5, '19/5/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pass_lesson`
--

CREATE TABLE `pass_lesson` (
  `id_user` int(11) NOT NULL,
  `id_lesson` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `accuracy` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `day` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `pass_lesson`
--

INSERT INTO `pass_lesson` (`id_user`, `id_lesson`, `time`, `accuracy`, `day`) VALUES
(42, 0, 14, '97.83', '26/5/2021'),
(42, 1, 24, '89.13', '17/5/2021'),
(42, 2, 24, '80.43', '29/5/2021'),
(42, 3, 15, '89', '6/5/2021'),
(42, 4, 23, '93.48', '8/5/2021'),
(42, 10, 18, '100', '7/5/2021'),
(42, 34, 39, '80.43', '8/5/2021'),
(42, 35, 40, '82.61', '6/6/2021'),
(42, 36, 24, '89.13', '6/6/2021'),
(42, 38, 38, '78.26', '17/5/2021'),
(42, 42, 19, '93.48', '8/5/2021'),
(48, 0, 8, '100', '7/5/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `practice`
--

CREATE TABLE `practice` (
  `id_user` int(11) NOT NULL,
  `day` varchar(11) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `wpm` int(4) NOT NULL,
  `acc` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `practice`
--

INSERT INTO `practice` (`id_user`, `day`, `wpm`, `acc`) VALUES
(42, '4/6/2021', 18, 75.41),
(42, '6/6/2021', 32, 93.6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(36) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `is_verified` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'no verified',
  `first_name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `wpm` int(11) NOT NULL DEFAULT 0,
  `acc` float NOT NULL,
  `avt` varchar(100) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '../public/avt/df.txt',
  `tel` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '-',
  `address` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '-',
  `bir` text COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `is_verified`, `first_name`, `last_name`, `wpm`, `acc`, `avt`, `tel`, `address`, `bir`) VALUES
(38, '4501104135', 'bcbd678e09ac5d3a2fc4039c1a986fb3', '97o1241521141@gmail.com', 'no verified', 'Lê', 'Tuệ', 0, 0, '../public/avt/df.txt', '-', '-', '-'),
(40, 'vinhlehp', '4b7b46a212821cccdb43e158df95753f', 'aduthangzinh@gmail.com', 'no verified', 'Quốc Vinh', 'Lê', 0, 0, '../public/avt/df.txt', '-', '-', '-'),
(42, 'Takumi_kun', 'b98e37166af49dc560697e5c4eab4806', 'ah09program@gmail.com', 'no verified', 'Tấn Lộc', 'Lê', 32, 93.6, '../public/avt/42.txt', '0785607050', '44B/3 tổ 3', '2001-02-13'),
(43, 'eweq34', 'bcbd678e09ac5d3a2fc4039c1a986fb3', 'takumihoshi0186@gmail.com', 'no verified', 'Lê', 'Lộc', 0, 0, '../public/avt/df.txt', '-', '-', '-'),
(45, 'dinhle', 'bcbd678e09ac5d3a2fc4039c1a986fb3', 'lehpvinh@gmail.com', 'no verified', 'Vinh', 'Lê', 0, 0, '../public/avt/df.txt', '-', '-', '-'),
(48, 'mandat110', '6380b8504dadf95a9b9e6b41c0d27e0f', 'JuniorKevin110@gmail.com', 'no verified', 'Đạt', 'Huỳnh', 0, 0, '../public/avt/df.txt', '-', '-', '-');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD PRIMARY KEY (`id_user`,`id_list`),
  ADD KEY `id_list` (`id_list`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `list_test`
--
ALTER TABLE `list_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `pass_lesson`
--
ALTER TABLE `pass_lesson`
  ADD PRIMARY KEY (`id_user`,`id_lesson`),
  ADD KEY `id_lesson` (`id_lesson`);

--
-- Chỉ mục cho bảng `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id_user`,`day`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `list_test`
--
ALTER TABLE `list_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `evaluate`
--
ALTER TABLE `evaluate`
  ADD CONSTRAINT `evaluate_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `evaluate_ibfk_2` FOREIGN KEY (`id_list`) REFERENCES `list_test` (`id`);

--
-- Các ràng buộc cho bảng `list_test`
--
ALTER TABLE `list_test`
  ADD CONSTRAINT `list_test_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `pass_lesson`
--
ALTER TABLE `pass_lesson`
  ADD CONSTRAINT `pass_lesson_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pass_lesson_ibfk_2` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id`);

--
-- Các ràng buộc cho bảng `practice`
--
ALTER TABLE `practice`
  ADD CONSTRAINT `practice_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
