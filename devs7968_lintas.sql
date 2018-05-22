-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 11:19 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devs7968_lintas`
--

-- --------------------------------------------------------

--
-- Table structure for table `datalead`
--

CREATE TABLE `datalead` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `perusahaan` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `no_hp` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL,
  `create_date` datetime NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datalead`
--

INSERT INTO `datalead` (`id`, `nama`, `perusahaan`, `jabatan`, `no_hp`, `email`, `kebutuhan`, `create_date`, `type`) VALUES
(1, 'Yayan', 'Kuli Bangunan ', 'Kuli', '08213808101', 'yaniarpradhigda@gmail.com', 'colocation', '2018-04-09 03:46:25', 1),
(2, 'Yayan', 'Kuli Bangunan ', 'Kuli', '08213808101', 'yaniarpradhigda@gmail.com', 'colocation', '2018-04-09 03:47:32', 1),
(5, 'ieojdoiewjdew', 'oihdoiewhd', 'oidhewoidhew', '0812380810', 'oiwdoihewd@gmail.com', 'disaster_recovery', '2018-04-09 04:09:55', 2),
(4, 'test', 'oiewjdoiew', 'oidewoidh', '0821380181', 'whdiuwed@gmail.com', 'media_analytics', '2018-04-09 04:04:16', 2),
(6, 'barusan ', 'oiewjdiewjd', 'oidewoidjew', '0821380811', 'iohewoidhew@gmail.com', 'private_cloud', '2018-04-09 04:21:55', 2),
(7, 'Lala', 'Neo Digital', 'Karyawan', '0812765434527', 'desyaalathifaa@gmail.com', 'colocation', '2018-04-09 04:21:58', 1),
(8, 'lala', 'Neo Digital', 'Karyawan', '0812765434527', 'desyaalathifaa@gmail.com', 'managed_mail', '2018-04-09 04:25:07', 2),
(9, '', '', '', '', '', '', '2018-04-10 03:07:52', 2),
(10, '', '', '', '', '', '', '2018-04-10 03:07:53', 1),
(11, '', '', '', '', '', '', '2018-04-12 01:54:37', 2),
(12, '', '', '', '', '', '', '2018-04-12 01:54:38', 1),
(13, '', '', '', '', '', '', '2018-04-12 11:20:45', 2),
(14, '', '', '', '', '', '', '2018-04-12 11:20:47', 1),
(15, '', '', '', '', '', '', '2018-04-17 05:54:50', 2),
(16, '', '', '', '', '', '', '2018-04-27 08:09:01', 2),
(17, '', '', '', '', '', '', '2018-04-27 08:09:02', 1),
(18, 'ddewoidew', 'oiewoidhew', 'dhowehd', '08213018301', 'whdoiwd@gmail.com', 'managed_mail', '2018-05-14 10:58:01', 2),
(19, 'ddewoidew', 'oiewoidhew', 'dhowehd', '08213018301', 'whdoiwd@gmail.com', 'managed_mail', '2018-05-14 11:08:31', 2),
(20, '', '', '', '', '', '', '2018-05-14 11:13:16', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datalead`
--
ALTER TABLE `datalead`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datalead`
--
ALTER TABLE `datalead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
