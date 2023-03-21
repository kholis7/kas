-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 11:44 AM
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
-- Database: `spp_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_bebas`
--

CREATE TABLE `tb_bebas` (
  `id_bebas` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `bebas_biaya` int(11) NOT NULL,
  `bebas_bayar` int(11) NOT NULL,
  `bebas_tgl_bayar` date NOT NULL,
  `bebas_tgl_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_bebas`
--

INSERT INTO `tb_bebas` (`id_bebas`, `id_siswa`, `id_transaksi`, `bebas_biaya`, `bebas_bayar`, `bebas_tgl_bayar`, `bebas_tgl_update`) VALUES
(12, 9, 17, 1500000, 0, '2023-01-17', '2023-01-17'),
(13, 2, 18, 200000, 150000, '2023-01-17', '2023-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bebas_transaksi`
--

CREATE TABLE `tb_bebas_transaksi` (
  `id_bebas_transaksi` int(11) NOT NULL,
  `id_bebas` int(11) NOT NULL,
  `bebas_transaksi_nomor` int(15) NOT NULL,
  `bebas_transaksi_jml` int(11) NOT NULL,
  `bebas_transaksi_ket` varchar(25) NOT NULL,
  `bebas_tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kejuruan`
--

CREATE TABLE `tb_kejuruan` (
  `id_kejuruan` int(11) NOT NULL,
  `nama_kejuruan` varchar(55) NOT NULL,
  `alias_kejur` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kejuruan`
--

INSERT INTO `tb_kejuruan` (`id_kejuruan`, `nama_kejuruan`, `alias_kejur`) VALUES
(1, 'Rekayasa Perangkat Lunak', 'RPL'),
(2, 'Teknik dan Bisnis Sepeda Motor', 'TBSM');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `tingkat_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(55) NOT NULL,
  `id_kejuruan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `tingkat_kelas`, `nama_kelas`, `id_kejuruan`) VALUES
(2, 10, 'X TBSM', 2),
(3, 11, 'XI RPL', 1),
(4, 11, 'XI TBSM', 2),
(5, 12, 'XII TBSM', 1),
(6, 12, 'XII RPL', 2),
(7, 10, 'X RPL', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengaturan`
--

CREATE TABLE `tb_pengaturan` (
  `id_pengaturan` int(11) NOT NULL,
  `set_nama` text NOT NULL,
  `set_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengaturan`
--

INSERT INTO `tb_pengaturan` (`id_pengaturan`, `set_nama`, `set_value`) VALUES
(1, 'YAYASAN', 'YAYASAM KEBANGKITAN PELAJAR ISLAM'),
(2, 'NPSN', '69754418'),
(3, 'NAMA SEKOLAH', 'SMK YAPIIM INDRAMAYU'),
(4, 'ALAMAT', 'JL. KAPUAN JAYA NO. 175 DESA DUKUH'),
(5, 'KECAMATAN', 'INDRAMAYU'),
(6, 'KABUPATEN', 'INDRAMAYU');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE `tb_periode` (
  `id_periode` int(11) NOT NULL,
  `periode_start` year(4) NOT NULL,
  `periode_end` year(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`id_periode`, `periode_start`, `periode_end`, `status`) VALUES
(1, 2021, 2022, 0),
(2, 2022, 2023, 1),
(3, 2020, 2021, 0),
(4, 2023, 2024, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pos`
--

CREATE TABLE `tb_pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(55) NOT NULL,
  `ket` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pos`
--

INSERT INTO `tb_pos` (`id_pos`, `nama_pos`, `ket`) VALUES
(6, 'PRAKERIN RPL', 'Praktek Kerja Industri'),
(7, 'PRAKERIN TBSM', 'Praktek Kerja Industri');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` text NOT NULL,
  `nipd` text NOT NULL,
  `nama_siswa` varchar(55) NOT NULL,
  `jk` varchar(55) NOT NULL,
  `tmp_lahir` varchar(55) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_kejuruan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nisn`, `nipd`, `nama_siswa`, `jk`, `tmp_lahir`, `tgl_lahir`, `id_kelas`, `id_kejuruan`) VALUES
(2, '0074848197', '2021010002', 'RIDWAN', 'L', 'Indramayu', '2004-03-15', 4, 2),
(9, '3068248980', '2021010012', 'DARSEM SADA', 'L', 'Indramayu', '1970-01-01', 6, 1),
(12, '', '', '', '', '', '0000-00-00', 0, 0),
(13, '', '', '', '', '', '0000-00-00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `jenis_transaksi` enum('BEBAS','BULAN') NOT NULL,
  `id_periode` int(11) NOT NULL,
  `id_pos` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `jenis_transaksi`, `id_periode`, `id_pos`, `tgl_transaksi`) VALUES
(17, 'BEBAS', 1, 6, '2023-01-17'),
(18, 'BEBAS', 1, 7, '2023-01-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bebas`
--
ALTER TABLE `tb_bebas`
  ADD PRIMARY KEY (`id_bebas`);

--
-- Indexes for table `tb_bebas_transaksi`
--
ALTER TABLE `tb_bebas_transaksi`
  ADD PRIMARY KEY (`id_bebas_transaksi`);

--
-- Indexes for table `tb_kejuruan`
--
ALTER TABLE `tb_kejuruan`
  ADD PRIMARY KEY (`id_kejuruan`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  ADD PRIMARY KEY (`id_pengaturan`);

--
-- Indexes for table `tb_periode`
--
ALTER TABLE `tb_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indexes for table `tb_pos`
--
ALTER TABLE `tb_pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bebas`
--
ALTER TABLE `tb_bebas`
  MODIFY `id_bebas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_bebas_transaksi`
--
ALTER TABLE `tb_bebas_transaksi`
  MODIFY `id_bebas_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kejuruan`
--
ALTER TABLE `tb_kejuruan`
  MODIFY `id_kejuruan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_pengaturan`
--
ALTER TABLE `tb_pengaturan`
  MODIFY `id_pengaturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_periode`
--
ALTER TABLE `tb_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pos`
--
ALTER TABLE `tb_pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
