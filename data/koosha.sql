-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 12:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `koosha`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `codemeli` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `family` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `phone` text COLLATE utf8_persian_ci NOT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`codemeli`, `name`, `family`, `email`, `phone`, `create_at`) VALUES
(1, 'منا', 'یاری', 'yari.m@chmail.ir', '09187305979', '0000-00-00 00:00:00'),
(3, 'سارا', 'رضایی', 'sa.re45@gmail.com', '09181452526', '0000-00-00 00:00:00'),
(4, 'فاطی', 'احمدی', 'yari.m@gmail.com', '0918756355', '0000-00-00 00:00:00'),
(11, 'رضا', 'یاری', 'sa.re45@gmail.com', '09184071624', '0000-00-00 00:00:00'),
(15, 'mona', 'ahmadi', 'yari.m@gmail.com', '09101433695', '0000-00-00 00:00:00'),
(16, 'mona', 'yarizalani', 'yari.mona67@gmail.com', '09187305979', '0000-00-00 00:00:00'),
(18, 'طاهره', 'اکبری', 'yari.m@gmail.com', '09104557689', '0000-00-00 00:00:00'),
(19, 'زهرا', 'تنهایی', 'z.tanhaei1996@gmail.com', '09101463696', '0000-00-00 00:00:00'),
(20, 'مبینا', 'سلطانی', 'mobina.soltani1996@gmail.com', '09184567981', '0000-00-00 00:00:00'),
(21, 'فاطمه', 'عبدالهی', 'fateme.abdolahi8446@gmail.com', '09184639652', '0000-00-00 00:00:00'),
(22, 'مونا', 'یاری', 'sa.re45@gmail.com', '09187305979', '1400-09-15 12:53:20'),
(23, 'سمیرا', 'یزدانی', 'yari.m@gmail.com', '09181452526', '1400-09-15 12:53:37'),
(24, 'وحید', 'یاری', 'sa.re45@gmail.com', '09181452526', '1400-09-15 21:55:01'),
(25, 'سارا', 'محمدی', 'sa.re45@gmail.com', '09181452526', '1400-09-16 12:57:09'),
(29, 'ایمان ', 'مرادی', 'sa.ahmadi@gmail.com', '09187463698', '2021-12-07 17:32:15'),
(30, 'ایمان ', 'مرادی', 'sa.ahmadi@gmail.com', '09187463698', '2021-12-07 17:32:15'),
(31, 'علی', 'نریمانی', 'eyman.moradi@gmail.com', '09187695236', '2021-12-07 14:41:26'),
(32, 'لیلی', 'صیدی', 'l.sayedy1995@gmail.com', '09182653138', '2021-12-07 19:48:14'),
(39, 'mandana', 'ahmadi', 'eyman.moradi@gmail.com', '09104569875', '2021-12-14 02:11:12'),
(40, 'ali', 'yarizalani', 'ali.yari4546@gmail.com', '09126154003', '2021-12-14 15:17:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`codemeli`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `codemeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
