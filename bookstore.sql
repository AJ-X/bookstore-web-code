-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-11 13:50:07
-- 服务器版本： 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- 表的结构 `bookstore_admin`
--

CREATE TABLE `bookstore_admin` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `Email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `bookstore_admin`
--

INSERT INTO `bookstore_admin` (`id`, `username`, `password`, `Email`) VALUES
(1, 'admin', 'admin', 'admin@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `bookstore_pro`
--

CREATE TABLE `bookstore_pro` (
  `id` int(11) NOT NULL,
  `pName` varchar(50) COLLATE utf8_bin NOT NULL,
  `pDesc` text COLLATE utf8_bin NOT NULL,
  `pAuthor` varchar(20) COLLATE utf8_bin NOT NULL,
  `aDesc` text COLLATE utf8_bin NOT NULL,
  `pPrice` decimal(10,2) NOT NULL,
  `pNum` smallint(6) NOT NULL,
  `pImg` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `bookstore_pro`
--

INSERT INTO `bookstore_pro` (`id`, `pName`, `pDesc`, `pAuthor`, `aDesc`, `pPrice`, `pNum`, `pImg`) VALUES
(1, '林清玄作品：玫瑰海岸（2017年新版）', '林清玄谈情爱 细致与温柔 宽容与坦然', '林清玄', '当代著名散文家，小学三年级想成为作家，17岁开始发表作品。20岁出版第一本书，30岁前得遍台湾所有文学大奖。32岁与佛结缘，入山修行，深研经藏。35岁出山，四处参学。40岁成为最具影响力作家之一。连续十年被评为台湾十大畅销书作家。', '36.00', 0, 'shu.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `bookstore_user`
--

CREATE TABLE `bookstore_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(32) COLLATE utf8_bin NOT NULL,
  `address` varchar(50) COLLATE utf8_bin NOT NULL,
  `pName` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `bookstore_user`
--

INSERT INTO `bookstore_user` (`id`, `username`, `password`, `address`, `pName`) VALUES
(1, '111', '111', '浙江', '林清玄作品：玫瑰海岸（2017年新版）'),
(2, '3232', '123', '1321', '林清玄作品：天边有一颗星星（2017年新版）'),
(6, '55555', '55555', '浙江', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookstore_admin`
--
ALTER TABLE `bookstore_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bookstore_pro`
--
ALTER TABLE `bookstore_pro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pName` (`pName`);

--
-- Indexes for table `bookstore_user`
--
ALTER TABLE `bookstore_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `bookstore_admin`
--
ALTER TABLE `bookstore_admin`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `bookstore_pro`
--
ALTER TABLE `bookstore_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `bookstore_user`
--
ALTER TABLE `bookstore_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
