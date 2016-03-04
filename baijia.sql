-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-02-26 06:20:46
-- 服务器版本： 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsbaidu`
--

-- --------------------------------------------------------

--
-- 表的结构 `baijia`
--

CREATE TABLE `baijia` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `time` date NOT NULL,
  `img` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `cat` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `baijia`
--

INSERT INTO `baijia` (`id`, `title`, `content`, `time`, `img`, `cat`) VALUES
(2, 'first page2111', 'contene2', '2016-02-23', 'http://a.hiphotos.baidu.com/image/h%3D200/sign=dd48609bd6c8a786a12a4d0e5708c9c7/a50f4bfbfbedab64fb188da1f036afc379311e6d.jpg', 0),
(3, 'first page3', 'im3', '2016-02-24', 'http://f.hiphotos.baidu.com/image/h%3D200/sign=8526aa2fbda1cd111ab675208913c8b0/eac4b74543a98226b20665388d82b9014b90ebee.jpg', 0),
(5, 'second page1', 'content', '2016-02-04', 'http://img0.imgtn.bdimg.com/it/u=966019619,3537283481&fm=206&gp=0.jpg', 1),
(6, 'second page3', 'content', '2016-02-18', 'http://img3.imgtn.bdimg.com/it/u=2133368745,701114940&fm=206&gp=0.jpg', 1),
(7, 'second page4', 'content', '2016-02-18', 'http://img3.imgtn.bdimg.com/it/u=2133368745,701114940&fm=206&gp=0.jpg', 1),
(8, 'third page', 'content', '2016-02-09', 'http://img3.imgtn.bdimg.com/it/u=2484202869,2302280260&fm=206&gp=0.jpg', 2),
(9, 'third page', 'content', '2016-02-09', 'http://img3.imgtn.bdimg.com/it/u=2484202869,2302280260&fm=206&gp=0.jpg', 2),
(10, 'third page1', 'content', '2016-02-09', 'http://img3.imgtn.bdimg.com/it/u=2484202869,2302280260&fm=206&gp=0.jpg', 2),
(11, 'this is new', '112', '2016-02-25', 'C:fakepath604e48d0jw1evkdhcg8ovg206y03xu0x.gif', 0),
(13, '这是新的百家新闻', '这是新闻内容', '2016-02-25', 'C:fakepath6种数据类型.png', 1),
(14, '111', '2222', '2016-02-26', '', 1),
(17, '这是新加的哦', '这是新加的哦', '2016-02-25', '', 0),
(18, '11', '22', '0000-00-00', '', 0),
(19, 'IM baijia 3', '2211122', '2016-02-26', 'C:fakepathQQ截图20151227140557.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baijia`
--
ALTER TABLE `baijia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baijia`
--
ALTER TABLE `baijia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
