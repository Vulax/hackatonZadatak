-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2019 at 09:39 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `listadogadjaja2`
--
CREATE DATABASE IF NOT EXISTS `listadogadjaja2` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `listadogadjaja2`;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(100) NOT NULL,
  `Tema_id` varchar(100) NOT NULL,
  `Slika` varchar(100) NOT NULL,
  `Opis` varchar(100) NOT NULL,
  `Mesto` varchar(100) NOT NULL,
  `Datum` date NOT NULL,
  `Cena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`ID`, `Ime`, `Tema_id`, `Slika`, `Opis`, `Mesto`, `Datum`, `Cena`) VALUES
(39, 'IT development', 'Radionica', 'https://i.ibb.co/7KQdPCp/1-w-MOt-Pw-RPga-Nf-KWi-SKPAw-JQ.jpg', 'Ovo je dobro.', 'Sabac', '2021-11-25', 200);

-- --------------------------------------------------------

--
-- Table structure for table `teme`
--

CREATE TABLE `teme` (
  `tema_id` varchar(21) NOT NULL,
  `Tema` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teme`
--

INSERT INTO `teme` (`tema_id`, `Tema`) VALUES
('1', 'Umetnost'),
('2', 'Komedija'),
('3', 'Radionica'),
('4', 'Ples'),
('5', 'Nocni provod'),
('6', 'Film'),
('7', 'Fitness'),
('8', 'Hrana'),
('9', 'Video igrice'),
('10', 'Vrticarstvo'),
('11', 'Zdravlje'),
('12', 'Literatura'),
('13', 'Muzika'),
('14', 'Umrezavanje'),
('15', 'Zurka'),
('16', 'Religija'),
('17', 'Kupovina'),
('18', 'Sport'),
('19', 'Pozoriste'),
('20', 'Nesto drugo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
