-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 06:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doland_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus_elf`
--

CREATE TABLE `bus_elf` (
  `id_bus_elf` int(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `biaya_sewa` int(11) NOT NULL,
  `status` enum('ready','jalan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_elf`
--

INSERT INTO `bus_elf` (`id_bus_elf`, `jenis`, `kapasitas`, `biaya_sewa`, `status`) VALUES
(1, 'Bus Besar', 60, 1800000, 'ready'),
(2, 'Bus Besar', 60, 700000, 'ready'),
(3, 'Bus Besar', 61, 700000, 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `biaya_sewa` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` enum('ready','jalan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `jenis_mobil`, `biaya_sewa`, `kapasitas`, `status`) VALUES
(2, 'Avanza', 600000, 7, 'ready'),
(3, 'Inova', 600000, 6, 'ready');

-- --------------------------------------------------------

--
-- Table structure for table `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `id_paket_wisata` int(20) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `biaya_paket` int(20) NOT NULL,
  `kapasitas` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_wisata`
--

INSERT INTO `paket_wisata` (`id_paket_wisata`, `nama_paket`, `biaya_paket`, `kapasitas`) VALUES
(1, 'jogja', 800000, 40),
(2, 'Jogja', 700000, 30);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_bus_elf`
--

CREATE TABLE `transaksi_bus_elf` (
  `id_trans_bus_elf` int(20) NOT NULL,
  `pilihan` varchar(30) NOT NULL,
  `nama_penyewa` varchar(80) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jml_hari` int(40) NOT NULL,
  `tujuan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_bus_elf`
--

INSERT INTO `transaksi_bus_elf` (`id_trans_bus_elf`, `pilihan`, `nama_penyewa`, `no_hp`, `tgl_sewa`, `tgl_kembali`, `jml_hari`, `tujuan`) VALUES
(1, 'Bus Besar', 'Novi', 2147483647, '2018-10-27', '2018-10-28', 2, 'Surabaya'),
(2, 'Bus Sedang', 'mirzha', 2147483647, '2018-10-29', '2018-10-30', 2, 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_mobil`
--

CREATE TABLE `transaksi_mobil` (
  `id_transaksi_mobil` int(20) NOT NULL,
  `pilihan` varchar(20) NOT NULL,
  `nama_penyewa` varchar(80) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `jml_hari` int(40) NOT NULL,
  `tujuan` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_mobil`
--

INSERT INTO `transaksi_mobil` (`id_transaksi_mobil`, `pilihan`, `nama_penyewa`, `no_hp`, `tgl_sewa`, `tgl_kembali`, `jml_hari`, `tujuan`) VALUES
(1, 'Avanza', 'mirzha', 2147483647, '2018-11-10', '2018-11-15', 6, 'Malang'),
(2, 'Avanza', 'mirzha', 2147483647, '2018-10-25', '2018-10-26', 2, 'Pasuruan'),
(3, 'Avanza', 'defANDY', 2147483647, '2018-10-26', '2018-10-27', 2, 'Malang'),
(4, 'Avanza', 'mirzha', 2147483647, '2018-10-25', '2018-10-27', 3, 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_paket`
--

CREATE TABLE `transaksi_paket` (
  `id_trans_paket` int(20) NOT NULL,
  `pilihan` varchar(30) NOT NULL,
  `nama_penyewa` varchar(80) NOT NULL,
  `no_hp` int(20) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jml_hari` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_paket`
--

INSERT INTO `transaksi_paket` (`id_trans_paket`, `pilihan`, `nama_penyewa`, `no_hp`, `tgl_sewa`, `jml_hari`) VALUES
(1, 'Jogja', 'mirzha', 2147483647, '2018-10-27', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('member','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'mirzha', '2be08dedbed7aa17f9186fbf09220e18', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_elf`
--
ALTER TABLE `bus_elf`
  ADD PRIMARY KEY (`id_bus_elf`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`id_paket_wisata`);

--
-- Indexes for table `transaksi_bus_elf`
--
ALTER TABLE `transaksi_bus_elf`
  ADD PRIMARY KEY (`id_trans_bus_elf`);

--
-- Indexes for table `transaksi_mobil`
--
ALTER TABLE `transaksi_mobil`
  ADD PRIMARY KEY (`id_transaksi_mobil`);

--
-- Indexes for table `transaksi_paket`
--
ALTER TABLE `transaksi_paket`
  ADD PRIMARY KEY (`id_trans_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus_elf`
--
ALTER TABLE `bus_elf`
  MODIFY `id_bus_elf` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_wisata`
--
ALTER TABLE `paket_wisata`
  MODIFY `id_paket_wisata` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_bus_elf`
--
ALTER TABLE `transaksi_bus_elf`
  MODIFY `id_trans_bus_elf` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_mobil`
--
ALTER TABLE `transaksi_mobil`
  MODIFY `id_transaksi_mobil` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi_paket`
--
ALTER TABLE `transaksi_paket`
  MODIFY `id_trans_paket` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
