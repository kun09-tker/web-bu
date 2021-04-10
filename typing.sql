-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 10, 2021 lúc 12:03 PM
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
-- Cấu trúc bảng cho bảng `friend`
--

CREATE TABLE `friend` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_friend` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lesson`
--

CREATE TABLE `lesson` (
  `id` int(11) NOT NULL,
  `content` varchar(50) COLLATE utf8mb4_vietnamese_ci DEFAULT NULL,
  `numberoftesst` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `lesson`
--

INSERT INTO `lesson` (`id`, `content`, `numberoftesst`) VALUES
(1, 'ffffffffffjjjjjjjjjj', 2),
(2, 'jjjjj     fffff     fjfjf', 1),
(3, 'dddddddd    kkkkkkkk', 2),
(4, 'ssssslllll          ', 2),
(5, 'aaaaaaaa    ;;;;;;;;', 2),
(6, 'a;sl  dkjfa;sl  dkjf', 2),
(7, 'a sdfa sdfa sdfa sdf', 0),
(8, 'jk l;jk l;jk l;jk l;', 0),
(9, 'g hg hg hg hg hg h h', 2),
(10, 'as dfghjkl;as dfhkl;', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pass_lesson`
--

CREATE TABLE `pass_lesson` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lesson` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `daytime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `password` varchar(36) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `OTP` int(6) NOT NULL DEFAULT 0,
  `is_verified` varchar(12) COLLATE utf8mb4_vietnamese_ci NOT NULL DEFAULT 'no verified',
  `first_name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `last_name` varchar(20) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `wpm` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `OTP`, `is_verified`, `first_name`, `last_name`, `wpm`) VALUES
(18, '4501104135', 'Loc0123456789', '97o1241521141@gmail.com', 319453, 'no verified', 'Lê', 'Lộc', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser1` (`id_user`),
  ADD KEY `iduser2` (`id_friend`);

--
-- Chỉ mục cho bảng `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pass_lesson`
--
ALTER TABLE `pass_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`id_user`),
  ADD KEY `idlesson` (`id_lesson`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `friend`
--
ALTER TABLE `friend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `pass_lesson`
--
ALTER TABLE `pass_lesson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `friend`
--
ALTER TABLE `friend`
  ADD CONSTRAINT `iduser1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `iduser2` FOREIGN KEY (`id_friend`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `pass_lesson`
--
ALTER TABLE `pass_lesson`
  ADD CONSTRAINT `idlesson` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id`),
  ADD CONSTRAINT `iduser` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
