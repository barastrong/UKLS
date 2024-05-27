-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2024 at 04:00 AM
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
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `ID_Game` int(11) NOT NULL,
  `Judul_Game` varchar(250) DEFAULT NULL,
  `JadwalPerilisan` varchar(50) DEFAULT NULL,
  `Jumlah_Pengguna` varchar(25) DEFAULT NULL,
  `Rating` varchar(25) DEFAULT NULL,
  `Ulasan` varchar(200) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(250) DEFAULT NULL,
  'Email' varchar(150) DEFAULT NULL,
  'Level' varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`ID`, `Username`, `Password`, `Email`, `Level`) VALUES
(1, 'Admin', 'Admin', NULL, 'admin'),
(2, 'User', 'User', NULL, 'user'),
(3, 'BintangAdminasdada', 'adadadada', 'user', 'admin'),
(5, 'BintangAdmin', 'bintang290908', 'baminyanmin@jatim.polri.go.id', 'user'),
(6, 'BintangAdmin', 'bintang290908', 'bintangbaraadyasta@gmail.com', 'user'),
(7, 'justwait', 'contact', 'bintangbaraadyasta@gmail.com', 'user'),
(8, 'Admin', 'Admin', 'bintangbaraadyasta@gmail.com', 'user'),
(9, 'BintangAdmin', 'bintang290908', 'bintangbaraadyasta@gmail.com', 'user'),
(10, 'BintangAdmin', 'bintang290908', 'bintangbaraadyasta@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `topup`
--

CREATE TABLE `topup` (
  `ID_TOPUP` int(11) NOT NULL,
  `Username` varchar(250) DEFAULT NULL,
  `Tanggal_pembayaran` date DEFAULT NULL,
  `Nominal` int(11) DEFAULT NULL,
  `Product` varchar(150) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `ID_Game` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`ID_Game`),
  ADD KEY `ID` (`ID`);

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
  ADD KEY `topup` (`ID`),
  ADD KEY `game` (`ID_Game`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game`
--
ALTER TABLE `game`
  MODIFY `ID_Game` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `game_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `pengguna` (`ID`);

--
-- Constraints for table `topup`
--
ALTER TABLE `topup`
  ADD CONSTRAINT `game` FOREIGN KEY (`ID_Game`) REFERENCES `game` (`ID_Game`),
  ADD CONSTRAINT `topup` FOREIGN KEY (`ID`) REFERENCES `pengguna` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
