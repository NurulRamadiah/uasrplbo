-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 10:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_barang`
--

CREATE TABLE `order_barang` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_order` varchar(20) NOT NULL,
  `status_order` int(2) NOT NULL,
  `tgl_order` date NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `kode_pesan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_barang`
--

INSERT INTO `order_barang` (`id_order`, `id_user`, `id_produk`, `jumlah_order`, `status_order`, `tgl_order`, `total_bayar`, `kode_pesan`) VALUES
(31, 5599, 3, '2', 1, '2021-12-17', '500000', '2'),
(32, 5599, 3, '3', 0, '2021-12-17', '750000', '2'),
(33, 5599, 5, '3', 0, '2021-12-17', '150000', '3');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi`, `foto`) VALUES
(3, 'Nasi', '250000', '-', '2.PNG'),
(4, 'Nasi mie', '30000', '-', '1.PNG'),
(5, 'mi nas', '50000', '-', 'Screenshot_20180423-094506.jpg'),
(6, 'Donsis BIG', '35000', '-', '41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `email`, `level`, `no_hp`, `jenis_kelamin`) VALUES
(5599, 'nurul', '827ccb0eea8a706c4c34a16891f84e7b', 'nurul', 'nurul@gamil.com', 1, '082387042701', 'Laki-Laki'),
(5603, 'karyawan', '827ccb0eea8a706c4c34a16891f84e7b', 'Anis', 'anis@gmail.com', 3, '08222', 'Laki-Laki'),
(5604, 'fadli', '827ccb0eea8a706c4c34a16891f84e7b', 'Fadli', 'anis@gmail.com', 1, '0845444', 'Laki-Laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_barang`
--
ALTER TABLE `order_barang`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_barang`
--
ALTER TABLE `order_barang`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5605;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_barang`
--
ALTER TABLE `order_barang`
  ADD CONSTRAINT `order_barang_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_barang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
