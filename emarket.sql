-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2018-06-19 04:59:50
-- 伺服器版本: 10.1.13-MariaDB
-- PHP 版本： 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `emarket`
--

-- --------------------------------------------------------

--
-- 資料表結構 `advertisement`
--

CREATE TABLE `advertisement` (
  `ad_id` int(32) NOT NULL,
  `ad_photo` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(12) NOT NULL,
  `token` varchar(40) NOT NULL,
  `authorize` int(1) NOT NULL DEFAULT '0',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member`
--

INSERT INTO `member` (`ID`, `email`, `PASSWORD`, `token`, `authorize`, `time`) VALUES
(1, 's1015346@gm.pu.edu.tw', '123', 'c8d393aa8e3524ecf3a23ef3d81d84a8', 1, '2018-06-05 04:51:59'),
(2, 's1012517@gm.pu.edu.tw', '123', '37feb6c4c45dba589aba5ef4fef42926', 1, '2018-06-05 04:52:21'),
(3, '101789@gmail.com', '123', '136c7a0301fd1497ad3b5f146a7204a7', 1, '2018-06-05 04:52:23'),
(5, '101789852@gmail.com', '123', '832eabe01e9551284a42b62628deb87b', 1, '2018-06-05 04:52:25'),
(6, '789456@gmail.com', '123', '953eb99a2a22e589a65cc6844bf68c9f', 1, '2018-06-05 04:52:27');

-- --------------------------------------------------------

--
-- 資料表結構 `member_information`
--

CREATE TABLE `member_information` (
  `member_ID` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `member_information`
--

INSERT INTO `member_information` (`member_ID`, `sex`, `Name`, `birthday`, `address`, `phone`) VALUES
(1, '女', 'Grace', '1993-12-26', 'Taichang', '0912123456'),
(2, '男', 'tttt', '1994-01-02', 'Keelung', '0912123456');

-- --------------------------------------------------------

--
-- 資料表結構 `merchandise`
--

CREATE TABLE `merchandise` (
  `merchandise_id` int(32) NOT NULL,
  `status` varchar(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `introduction` text NOT NULL,
  `price` int(10) NOT NULL,
  `remain_count` int(10) NOT NULL,
  `specification` varchar(50) NOT NULL,
  `photo_path` text NOT NULL,
  `member_id` int(32) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `merchandise`
--

INSERT INTO `merchandise` (`merchandise_id`, `status`, `name`, `introduction`, `price`, `remain_count`, `specification`, `photo_path`, `member_id`, `created_at`, `updated_at`) VALUES
(1, '1', '金冠 K88 小海螺 原廠 ( 正品 )優質好音色 絕美外型 數量有限 欲購從速 特價 799元', '金冠小海螺 K88 限量販售 售完為止', 799, 10, 'None', '../upload/user/1/luna1.jpg', 1, '2018-06-10 13:32:00', '2018-06-11 13:32:00'),
(2, '1', '韓國訂單 實拍赫本氣質法式優雅水鑽釘珠不對稱魚尾半身裙及膝裙2色現貨', '這款真的好美好精緻\r\n\r\n紅色很亮 藍色有點宮廷味\r\n\r\n扣子是很特別的釘珠 水鑽 很有特色的圓扣哦\r\n\r\n簡約的一款\r\n\r\n上身很容易搭配的\r\n\r\n腰圍是鬆緊的\r\n\r\n搭配短靴好時髦\r\n\r\n腰60~80 臀92長78-68\r\n\r\n現貨紅色', 950, 7, 'None', '../upload/user/1/luna2.jpg', 1, '2018-06-10 14:00:00', '2018-06-10 14:00:00'),
(3, '', '123', '<p>QQ</p>', 10000, 0, '', '../upload/user/1/1200px-National_Chung_Cheng_University_logo.svg.png', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 資料表結構 `merchandise_type`
--

CREATE TABLE `merchandise_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `merchandise_type`
--

INSERT INTO `merchandise_type` (`type_id`, `name`) VALUES
(1, '女生衣著'),
(2, '美妝保健'),
(3, '嬰幼童與母親'),
(4, '居家生活');

-- --------------------------------------------------------

--
-- 資料表結構 `review`
--

CREATE TABLE `review` (
  `review_id` int(32) NOT NULL,
  `context` text NOT NULL,
  `evaluation_score` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `seller`
--

CREATE TABLE `seller` (
  `member_id` int(32) NOT NULL,
  `name` varchar(80) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `introduction` text NOT NULL,
  `statement` text NOT NULL,
  `reminder` text NOT NULL,
  `merchandise_count` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `seller`
--

INSERT INTO `seller` (`member_id`, `name`, `photo`, `introduction`, `statement`, `reminder`, `merchandise_count`) VALUES
(1, 'Grace''s Shop', 'seller_photo.jpg', 'I love make-up.', 'Nothing', 'Nothing', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(32) NOT NULL,
  `status` varchar(10) NOT NULL,
  `member_id` int(32) NOT NULL,
  `merchandise_id` int(32) NOT NULL,
  `price` int(10) NOT NULL,
  `buy_count` int(10) NOT NULL,
  `total_price` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ad_id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- 資料表索引 `member_information`
--
ALTER TABLE `member_information`
  ADD PRIMARY KEY (`member_ID`);

--
-- 資料表索引 `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`merchandise_id`);

--
-- 資料表索引 `merchandise_type`
--
ALTER TABLE `merchandise_type`
  ADD PRIMARY KEY (`type_id`);

--
-- 資料表索引 `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- 資料表索引 `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`member_id`);

--
-- 資料表索引 `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `ad_id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用資料表 AUTO_INCREMENT `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `merchandise_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用資料表 AUTO_INCREMENT `merchandise_type`
--
ALTER TABLE `merchandise_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用資料表 AUTO_INCREMENT `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `seller`
--
ALTER TABLE `seller`
  MODIFY `member_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用資料表 AUTO_INCREMENT `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(32) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
