-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2019 at 06:21 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10588140_pelabuhan`
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
-- Table structure for table `grafik`
--

CREATE TABLE `grafik` (
  `idGrafik` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grafik`
--

INSERT INTO `grafik` (`idGrafik`, `jumlah`, `hari`) VALUES
(1, 4, 'Senin'),
(2, 15, 'Selasa'),
(3, 12, 'Rabu'),
(4, 5, 'Kamis'),
(5, 15, 'Jumat'),
(6, 5, 'Sabtu'),
(7, 10, 'Minggu');

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `idKapal` int(11) NOT NULL,
  `jenisKapal` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `SNI` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`idKapal`, `jenisKapal`, `jumlah`, `SNI`) VALUES
(1, 'Dayak baru', 4, 'TIDAK SNI'),
(2, 'Pole and line', 9, 'SNI'),
(3, 'Purse Seine', 12, 'SNI'),
(4, 'Long Line', 7, 'SNI'),
(5, 'Kapal Trawl', 15, 'TIDAK SNI'),
(6, 'Gill Net', 5, 'SNI'),
(7, 'Bubu dan Perangkap', 10, 'TIDAK SNI');

-- --------------------------------------------------------

--
-- Table structure for table `nelayan`
--

CREATE TABLE `nelayan` (
  `idNelayan` varchar(12) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `umur` varchar(2) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `noTelp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nelayan`
--

INSERT INTO `nelayan` (`idNelayan`, `nama`, `umur`, `alamat`, `noTelp`) VALUES
('10304116128', 'Rizki Alifian', '21', 'Sancang dalam', '0896103128'),
('10304117057', 'Sela Nurjanah', '19', 'Bantarjati', '0896103057'),
('10304117062', 'Raisa Sabila', '13', 'Kalibata city', '0896103062'),
('10304117088', 'Reza Anjasmoro', '41', 'Kebon Kelapa', '0896103088'),
('10304117099', 'Dede Rifqi Maulana', '22', 'Bantargebang', '0896103099'),
('10304117111', 'Evan Maulana Ibrahim', '20', 'Cilendek ujung', '0896103111'),
('10304117145', 'Faiz Nur Izzudin', '40', 'Bogor Baru Taman', '0896103145'),
('10304117158', 'Andini Sekar', '20', 'Jakarta Selatan skkrrtttt', '0896103158'),
('10304117199', 'Mohamad Syaefudin', '23', 'Bantarjati luar', '0896103199'),
('10304217192', 'Ilham Maulana', '42', 'Segitiga Malabar', '0896103192');

-- --------------------------------------------------------

--
-- Table structure for table `pemantauan`
--

CREATE TABLE `pemantauan` (
  `idPemantauan` int(11) NOT NULL,
  `idNelayan` varchar(12) NOT NULL,
  `tglPemantauan` date NOT NULL,
  `jamKeluar` time NOT NULL,
  `Pembayaran` decimal(7,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemantauan`
--

INSERT INTO `pemantauan` (`idPemantauan`, `idNelayan`, `tglPemantauan`, `jamKeluar`, `Pembayaran`) VALUES
(20, '10304117111', '2019-11-15', '13:12:36', 3500),
(21, '10304117145', '2019-11-15', '13:12:58', 3500),
(22, '10304117088', '2019-11-15', '13:17:26', 3500),
(23, '10304117111', '2019-11-18', '21:33:06', 3500),
(24, '10304117158', '2019-11-18', '22:03:01', 3500),
(25, '10304117199', '2019-11-18', '22:03:29', 3500),
(26, '10304117088', '2019-11-18', '22:04:27', 3500),
(27, '10304117057', '2019-11-18', '22:04:49', 3500),
(28, '10304217192', '2019-11-18', '22:05:19', 3500),
(29, '10304117145', '2019-11-18', '22:12:01', 3500),
(30, '10304117111', '2019-11-19', '01:03:10', 3500),
(31, '10304117199', '2019-11-19', '01:45:23', 3500),
(32, '10304117158', '2019-11-19', '01:47:44', 3500),
(33, '10304217192', '2019-11-19', '02:35:15', 3500),
(34, '10304117088', '2019-11-19', '03:06:10', 3500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grafik`
--
ALTER TABLE `grafik`
  ADD PRIMARY KEY (`idGrafik`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`idKapal`);

--
-- Indexes for table `nelayan`
--
ALTER TABLE `nelayan`
  ADD PRIMARY KEY (`idNelayan`);

--
-- Indexes for table `pemantauan`
--
ALTER TABLE `pemantauan`
  ADD PRIMARY KEY (`idPemantauan`),
  ADD KEY `FK_idNelayan` (`idNelayan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grafik`
--
ALTER TABLE `grafik`
  MODIFY `idGrafik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `idKapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemantauan`
--
ALTER TABLE `pemantauan`
  MODIFY `idPemantauan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pemantauan`
--
ALTER TABLE `pemantauan`
  ADD CONSTRAINT `FK_idNelayan` FOREIGN KEY (`idNelayan`) REFERENCES `nelayan` (`idNelayan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
