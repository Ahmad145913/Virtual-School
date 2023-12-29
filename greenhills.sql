-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 08:39 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `greenhills`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `file_path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `filename`, `file_path`) VALUES
(4, 'dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].jpg', 'assets/images/dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].'),
(3, 'dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].jpg', 'assets/images/dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].'),
(5, 'dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].jpg', 'assets/images/dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].'),
(6, 'dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].jpg', 'assets/images/dexter.s07e02.720p.bluray.x265.10bit-pahe.in.mkv_snapshot_15.16_[2022.04.27_00.52.27].'),
(7, 'Capture.PNG', 'assets/images/Capture.PNG'),
(8, 'FireShot Capture 007 - Tint and Shade Generator - maketintsandshades.com.png', 'assets/images/FireShot Capture 007 - Tint and Shade Generator - maketintsandshades.com.png'),
(9, 'p5.png', 'assets/images/p5.png'),
(10, 'story1_img.png', 'assets/images/story1_img.png'),
(11, 'story2_img.png', 'assets/images/story2_img.png');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pdff`
--

CREATE TABLE `pdff` (
  `id` int(11) NOT NULL,
  `namefill` varchar(100) CHARACTER SET latin1 NOT NULL,
  `fillpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pdff`
--

INSERT INTO `pdff` (`id`, `namefill`, `fillpath`) VALUES
(1, 'Error Broken Robot.pdf', 'assets/pdf/Error Broken Robot.pdf'),
(2, 'Error Broken Robot.pdf', 'assets/pdf/Error Broken Robot.pdf'),
(3, 'BSP_F21.pdf', 'assets/pdf/BSP_F21.pdf'),
(4, 'BSP_F21.pdf', 'assets/pdf/BSP_F21.pdf'),
(5, 'BSP_F21.pdf', 'assets/pdf/BSP_F21.pdf'),
(6, 'BSP_F21.pdf', 'assets/pdf/BSP_F21.pdf'),
(7, '???-?-??????-??????.pdf', 'assets/pdf/جحا-و-الحمار-الناقص.pdf'),
(8, 'story1.pdf', 'assets/pdf/story1.pdf'),
(9, 'story2.pdf', 'assets/pdf/story2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `imge` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Pdf_Name` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `Type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `name`, `Pdf_Name`, `image_name`, `Type`) VALUES
(5, 'الربان الصغير', 'story1.pdf', 'story1_img.png', 'fun stories'),
(6, 'ياسمين والهواء', 'story2.pdf', 'story2_img.png', 'fun stories');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dateOfBirth` datetime NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `homeAddress` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `languageToLearn` varchar(255) NOT NULL,
  `levelAtLanguage` varchar(255) NOT NULL,
  `canSpeakTheLang` varchar(255) NOT NULL,
  `didStudyTheLang` varchar(255) NOT NULL,
  `guardian` varchar(255) NOT NULL,
  `userId` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userId` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `userId`, `email`, `password`, `role`) VALUES
(1, 'admin1', 'admin', '123', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdff`
--
ALTER TABLE `pdff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_user_id_fk` (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pdff`
--
ALTER TABLE `pdff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_user_id_fk` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
