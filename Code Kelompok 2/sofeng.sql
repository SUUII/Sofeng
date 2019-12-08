-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 09:30 AM
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
-- Database: `sofeng`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `kode` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`kode`, `username`, `password`, `nama`) VALUES
('aaaaaaaa', 'a', 'a', 'joko'),
('zxc', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `token` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telp` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `statktp` int(11) NOT NULL,
  `statslip` int(11) NOT NULL,
  `statkk` int(11) NOT NULL,
  `statjaminan` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `hutang` bigint(255) NOT NULL,
  `lama` int(11) NOT NULL,
  `bunga` bigint(255) NOT NULL,
  `tangal_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `kode` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `nominal` bigint(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `kode_pegawai` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
