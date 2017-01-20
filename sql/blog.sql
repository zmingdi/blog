-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2017 at 04:54 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `forex_strategy`
--

CREATE TABLE `forex_strategy` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `item` int(11) NOT NULL,
  `direction` int(11) NOT NULL DEFAULT '0',
  `entry` float NOT NULL,
  `sl` float NOT NULL,
  `tp1` float NOT NULL,
  `tp2` float NOT NULL,
  `term` int(11) NOT NULL DEFAULT '0',
  `result` float NOT NULL,
  `entry_time` datetime NOT NULL,
  `unload_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `forex_strategy`
--

INSERT INTO `forex_strategy` (`id`, `date`, `item`, `direction`, `entry`, `sl`, `tp1`, `tp2`, `term`, `result`, `entry_time`, `unload_time`) VALUES
(1, '0000-00-00', 2017, 0, 6, 5, 4, 2, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '0000-00-00', 2017, 0, 6, 5, 4, 2, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '0000-00-00', 2017, 0, 6, 5, 4, 2, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '0000-00-00', 2017, 0, 8, 7, 6, 5, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` text COLLATE utf8_bin NOT NULL,
  `content` text COLLATE utf8_bin NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `content`, `post_date`) VALUES
(8, '11', '<p>This is the test content for the blog.</p>\r\n<p>View with test concept please.</p>', '2017-01-03'),
(9, 'hhh', '<p>çŽ©22ss</p>\r\n<p>iiii</p>', '2017-01-03'),
(10, 'vvv', '<p>asaasxx</p>', '2017-01-05'),
(11, '2017å¹´1æœˆ5æ—¥', '<p>è¿™æ˜¯ç¬¬ä¸€ç¯‡æµ‹è¯•æ–‡æ¡£ã€‚</p>', '2017-01-05'),
(12, 'bbb', '<p>333</p>', '2017-01-06'),
(13, 'vvvvvvvvvvvvvvvvvvv', '<p>asasdasd</p>\r\n<p>asdasdasda</p>\r\n<p>cccvvcszx</p>', '2017-01-07'),
(14, 'fffffffffffffffff', '<p>asasda</p>\r\n<p>asdasd</p>\r\n<p>asdadvvasdasda</p>\r\n<p>&nbsp;</p>', '2017-01-07'),
(15, 'fffffffffffffffff', '<p>asasda</p>\r\n<p>asdasd</p>\r\n<p>asdadvvasdasda</p>\r\n<p>&nbsp;</p>', '2017-01-07'),
(16, '', '', '0000-00-00'),
(17, 'vvxcxcvxxxzx', '<p>xczxvsadfasdfbb</p>\r\n<p>&nbsp;</p>\r\n<p>baaaaa</p>', '2017-01-07'),
(18, 'vasasdad', '<p>xvxcvxcv</p>', '2017-01-07'),
(19, '', '', '0000-00-00'),
(20, '', '', '0000-00-00'),
(21, '', '', '0000-00-00'),
(22, '', '', '0000-00-00'),
(23, '', '', '2017-01-07'),
(24, '', '', '0000-00-00'),
(25, '', '', '0000-00-00'),
(26, '', '', '0000-00-00'),
(27, '', '', '0000-00-00'),
(28, '', '', '0000-00-00'),
(29, '', '', '0000-00-00'),
(30, '', '', '0000-00-00'),
(31, '', '', '0000-00-00'),
(32, '', '', '0000-00-00'),
(33, '', '', '0000-00-00'),
(34, '', '', '0000-00-00'),
(35, '', '', '0000-00-00'),
(36, '', '', '0000-00-00'),
(37, '', '', '0000-00-00'),
(38, '', '', '0000-00-00'),
(39, '', '', '0000-00-00'),
(40, '', '', '0000-00-00'),
(41, '', '', '0000-00-00'),
(42, '', '', '0000-00-00'),
(43, '', '', '0000-00-00'),
(44, '', '', '0000-00-00'),
(45, '', '', '0000-00-00'),
(46, '', '', '0000-00-00'),
(47, '', '', '0000-00-00'),
(48, '', '', '0000-00-00'),
(49, '', '', '0000-00-00'),
(50, '', '', '0000-00-00'),
(51, '', '', '0000-00-00'),
(52, '', '', '0000-00-00'),
(53, '', '', '0000-00-00'),
(54, 'vvvvvvvvvvvvvvvv', '<p>adadfsadfasdf<img src="http://www.sinaimg.cn/cj/2015/0429/U10832P31DT20150429120038.png" alt="asasdad" width="645" height="75" /></p>', '2017-01-09'),
(55, '', '', '0000-00-00'),
(56, '', '', '0000-00-00'),
(57, '', '', '0000-00-00'),
(58, '', '', '0000-00-00'),
(59, 'aasdaxzxczxc', '<p>vbcx</p>\r\n<p>&nbsp;</p>\r\n<p>b</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>cv</p>\r\n<p>b</p>\r\n<p>cv</p>\r\n<p>bc</p>\r\n<p>vb</p>\r\n<p>c</p>\r\n<p>v</p>\r\n<p>b</p>\r\n<p>cv</p>\r\n<p>b</p>\r\n<p>cv</p>\r\n<p>b</p>', '2017-01-19'),
(60, '32333', '<p>ddddd</p>', '2017-01-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forex_strategy`
--
ALTER TABLE `forex_strategy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item` (`item`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forex_strategy`
--
ALTER TABLE `forex_strategy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
