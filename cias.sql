-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2018 at 05:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cias`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daftar_paket_pariwisata`
--

CREATE TABLE `tbl_daftar_paket_pariwisata` (
  `id_paket` int(11) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `tujuan_wisata` varchar(100) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_daftar_paket_pariwisata`
--

INSERT INTO `tbl_daftar_paket_pariwisata` (`id_paket`, `paket`, `tujuan_wisata`, `durasi`, `jam_berangkat`, `mobil`, `harga`) VALUES
(1, 'Malang 1', 'Pantai Balaikambang, Pantai Ngliyep, BNS', '24 Jam', '08:00:00', 'Elf Long', 1400000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_mobil`
--

CREATE TABLE `tbl_data_mobil` (
  `kd_mobil` int(11) NOT NULL,
  `produsen_mobil` varchar(20) NOT NULL,
  `nama_mobil` varchar(20) NOT NULL,
  `no_kendaraan` varchar(20) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `fasilitas` varchar(20) NOT NULL,
  `deskripsi` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `ac` enum('Ya','Tidak') NOT NULL,
  `harga` int(11) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data_mobil`
--

INSERT INTO `tbl_data_mobil` (`kd_mobil`, `produsen_mobil`, `nama_mobil`, `no_kendaraan`, `no_rangka`, `fasilitas`, `deskripsi`, `kapasitas`, `ac`, `harga`, `kondisi`, `status`, `foto`) VALUES
(1, 'Honda', 'Ayla', 'N 2226 TAZ', '24626562', 'dvd', 'manual', 6, 'Ya', 300000, 'Mulus', '0', 'rental-ayla8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal_travel`
--

CREATE TABLE `tbl_jadwal_travel` (
  `id_jadwal` int(11) NOT NULL,
  `kota_asal` varchar(20) NOT NULL,
  `kota_tujuan` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(11) NOT NULL,
  `nama_mobil` varchar(20) NOT NULL,
  `nama_supir` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal_travel`
--

INSERT INTO `tbl_jadwal_travel` (`id_jadwal`, `kota_asal`, `kota_tujuan`, `jam`, `tanggal`, `harga`, `nama_mobil`, `nama_supir`) VALUES
(1, 'Pasuruan', 'Malang', '14:00:00', '2018-01-31', 50000, 'Ayla', 'Mirzha'),
(2, 'Malang', 'Surabaya', '06:00:00', '2018-02-01', 100000, 'brio', 'Wahyu'),
(3, 'Surabaya', 'Malang', '02:00:00', '2018-01-31', 100000, 'Avanza', 'Nur');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keberangkatan`
--

CREATE TABLE `tbl_keberangkatan` (
  `id_keberangkatan` varchar(20) NOT NULL,
  `id_jadwal` varchar(20) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `kota_tujuan` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `nama_supir` varchar(20) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `nama_penumpang` varchar(20) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `kursi` varchar(10) NOT NULL,
  `status_pesan` enum('belum','sudah') NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kendaraan_travel`
--

CREATE TABLE `tbl_kendaraan_travel` (
  `id_mobil` int(11) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `nama_pemilik` varchar(20) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `status_mobil` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kendaraan_travel`
--

INSERT INTO `tbl_kendaraan_travel` (`id_mobil`, `no_polisi`, `nama_pemilik`, `merk`, `tipe`, `warna`, `no_rangka`, `status_mobil`) VALUES
(2, 'N 225 VW', 'Mirzha', 'Daihatsu', 'Ayla', 'Putih', '2222456565', '1'),
(3, 'N 1927 PSBY', 'Green Force', 'Daihatsu', 'Xenia', 'Hitam', '2768627627', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pariwisata`
--

CREATE TABLE `tbl_pariwisata` (
  `kd_pariwisata` int(11) NOT NULL,
  `kd_bus` varchar(20) NOT NULL,
  `paket` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `fasilitas` varchar(200) NOT NULL,
  `tour_guide` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesan_travel`
--

CREATE TABLE `tbl_pemesan_travel` (
  `id_pemesan` varchar(20) NOT NULL,
  `id_jadwal` varchar(20) NOT NULL,
  `nama_pemesan` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kota_asal` varchar(20) NOT NULL,
  `kota_tujuan` varchar(20) NOT NULL,
  `jam` time NOT NULL,
  `status_pesan` enum('Lunas','Belum') NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi_pariwisata`
--

CREATE TABLE `tbl_reservasi_pariwisata` (
  `id_reservasi` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `paket` varchar(20) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservasi_pariwisata`
--

INSERT INTO `tbl_reservasi_pariwisata` (`id_reservasi`, `nama`, `email`, `no_telp`, `tgl_pesan`, `paket`, `mobil`, `status`) VALUES
(1, 'Pangestu Nur Mirzha', 'mirzhasembilane@gmail.com', '085755214080', '2018-02-10', 'Malang 1', 'Elf 17 Seats', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi_rental`
--

CREATE TABLE `tbl_reservasi_rental` (
  `id_reservasi` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `paket` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservasi_rental`
--

INSERT INTO `tbl_reservasi_rental` (`id_reservasi`, `nama`, `email`, `no_telp`, `tgl_pesan`, `mobil`, `paket`, `status`) VALUES
(4, 'Pangestu Nur Mirzha', 'mirzhasembilane@gmai', '085755214080', '2018-01-31', 'Ayla', 'Lepas_kunci', '1'),
(5, 'Pangestu Nur Mirzha', 'admin@codeinsect.com', '083833253926', '2018-02-21', 'Innova', 'Mobil_supir_bbm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservasi_travel`
--

CREATE TABLE `tbl_reservasi_travel` (
  `id_reservasi` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `kota_asal` varchar(20) NOT NULL,
  `kota_tujuan` varchar(20) NOT NULL,
  `mobil` varchar(20) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservasi_travel`
--

INSERT INTO `tbl_reservasi_travel` (`id_reservasi`, `nama`, `email`, `no_telp`, `tanggal`, `jam`, `kota_asal`, `kota_tujuan`, `mobil`, `status`) VALUES
(1, 'mirzha', 'mirzhasembilane@gmai', '085755214080', '2018-01-31', '02:00:00', 'Surabaya', 'Malang', 'Avanza', '1'),
(2, 'Pangestu Nur Mirzha', 'mirzhasembilane@gmail.com', '085755214080', '2018-01-31', '02:00:00', 'Surabaya', 'Malang', 'Avanza', '1'),
(3, 'Pangestu Nur Mirzha', 'mirzhasembilane@gmail.com', '085755214080', '2018-02-10', '02:00:00', 'Surabaya', 'Malang', 'Avanza', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` bigint(20) NOT NULL DEFAULT '1',
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@codeinsect.com', 'FNPrmJWJvU1AQkb', 'Chrome 63.0.3239.84', '0.0.0.0', 0, 1, '2018-01-03 07:09:53', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran_user`
--

CREATE TABLE `tbl_saran_user` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_saran_user`
--

INSERT INTO `tbl_saran_user` (`id_pesan`, `nama`, `email`, `no_telp`, `pesan`) VALUES
(1, 'Mirzha', 'mirzhasembilane@gmai', '085755214080', 'Pelayanan bagus'),
(2, 'Lina', 'linaamaliyah@gmail.c', '082828282822', 'Pelayanan disini cukup bagus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sewa_mobil`
--

CREATE TABLE `tbl_sewa_mobil` (
  `kd_sewa` varchar(20) NOT NULL,
  `kd_mobil` varchar(20) NOT NULL,
  `tanggal_sewa` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `supir` enum('Ya','Tidak') NOT NULL,
  `jenis_service` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supir_travel`
--

CREATE TABLE `tbl_supir_travel` (
  `id_supir` varchar(20) NOT NULL,
  `nama_supir` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT '0',
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@codeinsect.com', '$2y$10$WQQRBQDkxV/98bqK.24Dp.uMVS6KcztVqdwwTrOBLIWLSeSqE2gii', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-03-03 12:08:39'),
(2, 'manager@codeinsect.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-02-10 17:23:53'),
(3, 'employee@codeinsect.com', '$2y$10$M3ttjnzOV2lZSigBtP0NxuCtKRte70nc8TY5vIczYAQvfG/8syRze', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', NULL, NULL),
(4, 'mirzhasembilane@gmail.com', '$2y$10$CQVaGRAiR0WTL9IgtsA8U.80/nGGqyRNxUrCzlYe1s2qd0MyBy4Xa', 'Mirzha', '0857552140', 2, 0, 1, '2018-01-09 13:09:44', NULL, NULL);

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
-- Indexes for table `tbl_daftar_paket_pariwisata`
--
ALTER TABLE `tbl_daftar_paket_pariwisata`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `tbl_data_mobil`
--
ALTER TABLE `tbl_data_mobil`
  ADD PRIMARY KEY (`kd_mobil`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_jadwal_travel`
--
ALTER TABLE `tbl_jadwal_travel`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kendaraan_travel`
--
ALTER TABLE `tbl_kendaraan_travel`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `tbl_reservasi_pariwisata`
--
ALTER TABLE `tbl_reservasi_pariwisata`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tbl_reservasi_rental`
--
ALTER TABLE `tbl_reservasi_rental`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tbl_reservasi_travel`
--
ALTER TABLE `tbl_reservasi_travel`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_saran_user`
--
ALTER TABLE `tbl_saran_user`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_daftar_paket_pariwisata`
--
ALTER TABLE `tbl_daftar_paket_pariwisata`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_data_mobil`
--
ALTER TABLE `tbl_data_mobil`
  MODIFY `kd_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_jadwal_travel`
--
ALTER TABLE `tbl_jadwal_travel`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_kendaraan_travel`
--
ALTER TABLE `tbl_kendaraan_travel`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_reservasi_pariwisata`
--
ALTER TABLE `tbl_reservasi_pariwisata`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_reservasi_rental`
--
ALTER TABLE `tbl_reservasi_rental`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_reservasi_travel`
--
ALTER TABLE `tbl_reservasi_travel`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_saran_user`
--
ALTER TABLE `tbl_saran_user`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
