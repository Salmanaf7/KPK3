-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 05:32 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelabuhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Posisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`, `Posisi`) VALUES
(1, 'salman', '115', 'Programmer'),
(2, 'anis', '190', 'Manajer'),
(3, 'cindy', '065', 'Analis');

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `idKapal` int(11) NOT NULL,
  `jenisKapal` varchar(50) NOT NULL,
  `usia` int(11) NOT NULL,
  `SNI` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`idKapal`, `jenisKapal`, `usia`, `SNI`) VALUES
(0, '', 0, 'SNI'),
(1, 'Dayak baru', 44, 'TIDAK SNI'),
(2, 'Long long line', 66, 'TIDAK SNI'),
(3, 'Purse Seine', 40, 'TIDAK SNI'),
(4, 'deci', 99, 'TIDAK SNI'),
(5, 'Kapal Perangkap', 25, 'SNI'),
(6, 'RAHMAN', 99, 'TIDAK SNI');

-- --------------------------------------------------------

--
-- Table structure for table `nelayan`
--

CREATE TABLE `nelayan` (
  `idNelayan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `idKapal` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nelayan`
--

INSERT INTO `nelayan` (`idNelayan`, `nama`, `umur`, `idKapal`, `alamat`, `noTelp`) VALUES
(6, 'salman', '06', 1, 'bogor', '08912312312');

-- --------------------------------------------------------

--
-- Table structure for table `pemantauan`
--

CREATE TABLE `pemantauan` (
  `idPemantauan` int(11) NOT NULL,
  `tglPemantauan` date NOT NULL,
  `jamMasuk` time NOT NULL,
  `jamKeluar` time NOT NULL,
  `idNelayan` int(11) NOT NULL,
  `Pembayaran` text NOT NULL,
  `Keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemantauan`
--

INSERT INTO `pemantauan` (`idPemantauan`, `tglPemantauan`, `jamMasuk`, `jamKeluar`, `idNelayan`, `Pembayaran`, `Keterangan`) VALUES
(2, '2019-09-01', '20:05:00', '10:02:00', 6, '40000000', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`idKapal`);

--
-- Indexes for table `nelayan`
--
ALTER TABLE `nelayan`
  ADD PRIMARY KEY (`idNelayan`),
  ADD KEY `idKapal` (`idKapal`);

--
-- Indexes for table `pemantauan`
--
ALTER TABLE `pemantauan`
  ADD PRIMARY KEY (`idPemantauan`),
  ADD KEY `idNelayan` (`idNelayan`),
  ADD KEY `idNelayan_2` (`idNelayan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemantauan`
--
ALTER TABLE `pemantauan`
  MODIFY `idPemantauan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
