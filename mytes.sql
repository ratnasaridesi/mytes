-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 26, 2019 at 09:49 AM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mytes`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_nasabah`
--

CREATE TABLE `data_nasabah` (
  `no_nasabah` int(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `no_rekening` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nasabah`
--

INSERT INTO `data_nasabah` (`no_nasabah`, `alamat`, `hp`, `email`, `tempat`, `no_rekening`) VALUES
(1, 'Jl Veteran Gg Barjo', '851664715', 'desiratnasari866@gmail.com', 'Bogor', '12121211212121'),
(2, 'jl batutapak', '0819298198', 'email', 'Bandung', 'no_rekening');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `nik_nasabah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pinjaman` double NOT NULL,
  `jangka_waktu` varchar(300) NOT NULL,
  `bunga` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`nik_nasabah`, `tanggal`, `jumlah_pinjaman`, `jangka_waktu`, `bunga`) VALUES
(2, '2019-02-12', 2000000, 'Januari', '20'),
(2, '2019-02-25', 30000, '2', '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD PRIMARY KEY (`no_nasabah`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `nik_nasabah` (`nik_nasabah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  MODIFY `no_nasabah` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`nik_nasabah`) REFERENCES `data_nasabah` (`no_nasabah`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
