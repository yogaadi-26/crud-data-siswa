-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 05:30 AM
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
-- Database: `tugas_akhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_p` varchar(20) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `ttl1` date NOT NULL,
  `alamat_rmh` varchar(200) NOT NULL,
  `telepon_rmh` varchar(20) NOT NULL,
  `kodepos_rmh` varchar(10) NOT NULL,
  `alamat_lbr` varchar(200) NOT NULL,
  `telepon_lbr` varchar(20) NOT NULL,
  `kodepos_lbr` varchar(10) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `ekskul` varchar(50) NOT NULL,
  `goldar` enum('A','B','O','AB') NOT NULL,
  `agama` enum('Islam','Protestan','Katholik','Hindu','Budha') DEFAULT NULL,
  `asal_smp` varchar(100) NOT NULL,
  `anak` varchar(10) NOT NULL,
  `saudara` varchar(10) NOT NULL,
  `nama_a` varchar(100) NOT NULL,
  `umur_a` varchar(10) NOT NULL,
  `pekerjaan_a` varchar(50) NOT NULL,
  `penghasilan_a` varchar(50) NOT NULL,
  `agama_a` enum('Islam','Protestan','Katholik','Hindu','Budha') DEFAULT NULL,
  `alamat_a` varchar(200) NOT NULL,
  `telepon_a` varchar(20) NOT NULL,
  `kodepos_a` varchar(10) NOT NULL,
  `nama_i` varchar(100) NOT NULL,
  `umur_i` varchar(10) NOT NULL,
  `pekerjaan_i` varchar(50) NOT NULL,
  `penghasilan_i` varchar(50) NOT NULL,
  `agama_i` enum('Islam','Protestan','Katholik','Hindu','Budha') DEFAULT NULL,
  `alamat_i` varchar(200) NOT NULL,
  `telepon_i` varchar(20) NOT NULL,
  `kodepos_i` varchar(10) NOT NULL,
  `nama_w` varchar(100) DEFAULT NULL,
  `umur_w` varchar(10) DEFAULT NULL,
  `pekerjaan_w` varchar(50) DEFAULT NULL,
  `hubungan_w` varchar(20) DEFAULT NULL,
  `agama_w` enum('Islam','Protestan','Katholik','Hindu','Budha') DEFAULT NULL,
  `alamat_w` varchar(200) DEFAULT NULL,
  `telepon_w` varchar(20) DEFAULT NULL,
  `kodepos_w` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Yoga Adi Putra', 'yoga', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
