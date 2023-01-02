-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2023 at 02:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teluesports`
--

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `id` int(10) NOT NULL,
  `division_name` varchar(50) NOT NULL,
  `division_achievement` longtext NOT NULL,
  `division_requirement` longtext NOT NULL,
  `division_image` varchar(255) NOT NULL,
  `division_create_at` datetime NOT NULL,
  `division_update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`id`, `division_name`, `division_achievement`, `division_requirement`, `division_image`, `division_create_at`, `division_update_at`) VALUES
(1, 'PUBG MOBILE', '• Grand Finalist PUBG Mobile Campus Championship (PMCC) 2019<br>• Juara 1 Indonesia Esports League (IEL) Season 3<br>• Grand Finalist Liga Mahasiswa 2021', '• Mahasiswa aktif Telkom University<br>• Memahami game PUBG Mobile dan memiliki jiwa yang kompetitif<br>• Setuju dengan syarat dan ketentuan yang telah di tentukan oleh UKM', 'pubg.png', '2022-12-13 07:52:14', '2022-12-22 03:22:03'),
(2, 'VALORANT', '• PVP Esports Campus International Championship<br>• PVP Esports Campus Championship Indonesia Qualifier<br>• WeKa Style - PERAGA E-SPORT 2020 FIK', '• Mahasiswa aktif Telkom University<br>• Memahami game Valorant dan memiliki jiwa yang kompetitif<br>• Setuju dengan syarat dan ketentuan yang telah di tentukan oleh UKM', 'valorant.png', '2022-12-13 07:52:14', '2022-12-22 03:22:13'),
(3, 'MOBILE LEGENDS', '• MLCC Favourite Team 2019<br>• MLCC West Java Region Finalist<br>• PIALA MENPORA ESPORTS 2020 (6th Place)<br>• Telkom University - ESPORTS EXHIBITION GemasTIK XIII (Juara 2)', '• Mahasiswa aktif Telkom University<br>• Memahami game Mobile Legends dan memiliki jiwa yang kompetitif<br>• Setuju dengan syarat dan ketentuan yang telah di tentukan oleh UKM', 'ml.png', '2022-12-13 07:54:54', '2022-12-27 07:55:28');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `division_id` int(10) NOT NULL,
  `event_name` varchar(75) NOT NULL,
  `event_description` longtext NOT NULL,
  `event_image` varchar(255) NOT NULL,
  `event_date_start` datetime NOT NULL,
  `event_date_end` datetime NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `division_id`, `event_name`, `event_description`, `event_image`, `event_date_start`, `event_date_end`, `create_at`, `update_at`) VALUES
(1, 1, 'TEL-U ESPORTS CHAMPIONSHIP 2023', 'Kami TEL-U ESPORTS mengadakan kompetisi tingkat nasional untuk semua universitas di Indonesia yang puncaknya akan berada pada bulan Agustus. Segera hubungi komunitas esports kampus kalian untuk mendaftarkan diri agar dapat ikut serta dalan kompetisi TELKOM UNIVERSITY ESPORTS CHAMPIONSHIP.', 'tec', '2023-01-19 07:54:54', '2023-01-25 13:54:54', '2022-12-22 07:54:54', '2022-12-22 07:54:54'),
(17, 1, 'gj', 'Kamgvg', 'tec', '2023-01-10 07:54:54', '2023-01-25 13:54:54', '2022-12-22 07:54:54', '2022-12-22 07:54:54');

-- --------------------------------------------------------

--
-- Table structure for table `partnership`
--

CREATE TABLE `partnership` (
  `id` int(11) NOT NULL,
  `partnership_fname` varchar(50) NOT NULL,
  `partnership_lname` varchar(50) NOT NULL,
  `partnership_email` varchar(50) NOT NULL,
  `partnership_contact` varchar(20) NOT NULL,
  `partnership_message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `division` varchar(75) NOT NULL,
  `file_url` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `division`, `file_url`, `create_at`) VALUES
(1, 'admin', '', 'admin', 'admin', '', '6a927c7c0ff3ee9db6cad6b4c55350.jpg', '2022-12-17 07:38:46'),
(2, 'Handoko Tejo Atmoko', '', 'handokota', 'handokota', '', '6a927c7c0ff3ee9db6cad6b4c55355.jpg', '2022-12-17 07:38:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partnership`
--
ALTER TABLE `partnership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `partnership`
--
ALTER TABLE `partnership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
