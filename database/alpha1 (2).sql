-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 03:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha1`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(16) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `Tgl_lahir` date NOT NULL,
  `tmpt_lahir` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `Jabatan` enum('Desainer','Admin','Kasir','') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `nama`, `username`, `pass`, `Tgl_lahir`, `tmpt_lahir`, `hp`, `Jabatan`) VALUES
('001', 'Ahmad Firman', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2021-10-05', 'loktuan', '08122222', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` varchar(10) NOT NULL,
  `judul_pemesanan` varchar(50) NOT NULL,
  `NIP` varchar(5) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `status_pengerjaan` enum('Belum Dikerjakan','Desain','Revisi','Selesai') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `judul_pemesanan`, `NIP`, `tgl_pemesanan`, `deskripsi`, `status_pengerjaan`) VALUES
('1', 'pembuatan spanduk', '00004', '2020-07-22', 'Desain spanduk dengan ukuran 2 x 1 meter \r\ntulisannya Rumah Makan \r\nDitambahkan gAMBAR', 'Belum Dikerjakan'),
('111', 'sfasg', '001', '2020-07-23', 'sfasg', 'Belum Dikerjakan'),
('2222', 'rsafg', '', '2020-07-23', 'tdsgs', 'Belum Dikerjakan');

-- --------------------------------------------------------

--
-- Table structure for table `username`
--

CREATE TABLE `username` (
  `username` varchar(15) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `username`
--

INSERT INTO `username` (`username`, `pass`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `username`
--
ALTER TABLE `username`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
