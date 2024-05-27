-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukl`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `ID_PIC` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `rating` varchar(250) NOT NULL,
  `Image_path` varchar(250) DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`ID_PIC`, `Nama`, `rating`, `Image_path`, `Price`) VALUES
(2, 'Call Of Duty', '5.5', 'Call Of Duty.jpg', 10000.00),
(3, 'Flapy Bird', '5.7', 'Flapy Bird.png', 15000.00),
(5, 'Growtopia', '6.5', 'Growtopia.jpg', 12000.00),
(6, 'Genshin Impact', '7.5', 'Genshin Impact.jpeg', 35000.00),
(7, 'Geometry Dash', '5.4', 'Geometry Dash.png', 50000.00),
(9, 'Mobile Legends', '7.5', 'Mobile Legend.png', 25000.00),
(10, 'Resident Evil The Final Chapter', '6.5', 'Resident Evil The Final Chapter.jpg', 50000.00),
(11, 'PUBG', '7.7', 'PUBG.png', 45000.00),
(12, 'Subway Surfers', '6.7', 'Subway Surfers.png', 5000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `Level` varchar(50) DEFAULT NULL,
  `Tanggal_Register` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `Username`, `Password`, `Email`, `Level`, `Tanggal_Register`) VALUES
(1, 'Admin', 'Admin', NULL, 'admin', NULL),
(2, 'User', 'User', NULL, 'user', NULL),
(21, 'BaraAdmin', '$2y$10$SlO2QUwgxYx89CmgIjFmH.bShfQsBmd82ktf2hahRmTFqCFK1xNYC', 'nikendewiagrr@gmail.com', 'admin', '2024-05-20 09:57:19'),
(29, 'asss', '$2y$10$tbCUiuGdDPfKOuLcA64NeOtCEGtWpZaChpgfIUklz2ew7h5dG3rKm', 'asss@gmail.com', 'user', '2024-05-22 08:58:34'),
(30, 'ass', '$2y$10$z2.iC7rYId2XZO3LR31MHORPN868JVybJIBxzP/31B44j5Ej6wSfG', 'as@gmail.com', 'user', '2024-05-22 09:03:24'),
(31, 'ffffffffff', '$2y$10$Wp9jbj3gPhIJDNxpJ9wjOuqBoLTg6Dcb.IIqg6JUonfSfBUw2yjbC', 'barass@gmail.com', 'user', '2024-05-22 09:04:04'),
(32, 'igladla', '123', 'adsadad@gmail.com', 'user', '2024-05-22 09:06:51'),
(35, 'sadsadasdas', '123', 'asdad@gmail.com', 'user', '2024-05-26 21:50:59'),
(36, 'BaraUser', '123', 'bintass@gmail.com', 'user', '2024-05-26 21:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `ID_TOPUP` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `User_ID` int(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Image_path` varchar(255) DEFAULT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Quantity` varchar(10) NOT NULL,
  `Tanggal_Pembelian` date NOT NULL DEFAULT current_timestamp(),
  `ID` int(11) DEFAULT NULL,
  `ID_PIC` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topup`
--

INSERT INTO `topup` (`ID_TOPUP`, `Nama`, `User_ID`, `Email`, `Image_path`, `Price`, `Quantity`, `Tanggal_Pembelian`, `ID`, `ID_PIC`) VALUES
(42, 'Geometry Dash', 1313132, 'newpro1239@gmail.com', 'Geometry Dash.png', 1150000.00, '23', '2024-05-26', NULL, NULL),
(43, 'Flapy Bird', 0, 'baminyanmin@jatim.polri.go.id', 'Flapy Bird.png', 30000.00, '2', '2024-05-26', NULL, NULL),
(44, 'Genshin Impact', 0, 'baras@gmail.com', 'Genshin Impact.jpeg', 420000.00, '12', '2024-05-26', NULL, NULL),
(45, 'Genshin Impact', 2442342, 'baras@gmail.com', 'Genshin Impact.jpeg', 70000.00, '2', '2024-05-26', NULL, NULL),
(46, 'Mobile Legends', 1231313, 'Bintangbaraadyasta@gmail.com', 'Mobile Legend.png', 50000.00, '2', '2024-05-26', NULL, NULL),
(48, 'Geometry Dash', 1231313, 'newpro1239@gmail.com', 'Geometry Dash.png', 650000.00, '13', '2024-05-27', NULL, 7),
(52, 'Geometry Dash', 243242, 'baras@gmail.com', 'Geometry Dash.png', 100000.00, '2', '2024-05-27', NULL, 7),
(53, 'Mobile Legends', 1231313, 'newpro1239@gmail.com', 'Mobile Legend.png', 125000.00, '5', '2024-05-27', NULL, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`ID_PIC`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `topup`
--
ALTER TABLE `topup`
  ADD PRIMARY KEY (`ID_TOPUP`),
  ADD KEY `ID` (`ID`),
  ADD KEY `ID_PIC` (`ID_PIC`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `ID_PIC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `topup`
--
ALTER TABLE `topup`
  MODIFY `ID_TOPUP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `topup_ibfk_3` FOREIGN KEY (`ID`) REFERENCES `pengguna` (`ID`),
  ADD CONSTRAINT `topup_ibfk_4` FOREIGN KEY (`ID_PIC`) REFERENCES `images` (`ID_PIC`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
