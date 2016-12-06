-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 04:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kantor`
--
CREATE DATABASE IF NOT EXISTS `db_kantor` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kantor`;

-- --------------------------------------------------------

--
-- Table structure for table `db_add_barang_pending`
--

CREATE TABLE `db_add_barang_pending` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `harga_total` int(11) NOT NULL,
  `satuan` varchar(70) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_add_penjualan_pending`
--

CREATE TABLE `db_add_penjualan_pending` (
  `id_add_penjualan_pending` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_add_stock_pending`
--

CREATE TABLE `db_add_stock_pending` (
  `id_add_stock_pending` int(11) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_barang`
--

CREATE TABLE `db_barang` (
  `kode_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `qty_barang` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_user_add_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_barang`
--

INSERT INTO `db_barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `qty_barang`, `harga`, `satuan`, `tanggal`, `id_user`, `id_user_add_stock`) VALUES
('007', 'neurobion', 'Sparepart', 60, 5000, 'Bungkus', '2016-12-04', '1', 1),
('01', 'LCD ACCER', '0', 120, 20000, 'Bungkus', '2016-11-30', '1', 1),
('011221212', 'coba', 'Sparepart', 10, 800000, 'Bungkus', '2016-12-03', '1', 0),
('0123', 'IC POWER', 'Sparepart', 10, 20000, 'Saset', '2016-12-02', '1', 0),
('02', 'LCD SAMSUNG', '0', 25, 400000, '', '2016-11-30', '1', 1),
('03', 'LCD Nexus 4752', '0', 205, 18000000, '', '2016-11-30', '1', 1),
('04', 'LCD Assus 4752', '0', 0, 500000, '', '2016-11-30', '1', 0),
('05', 'LCD Accer 4752', '0', 3, 500000, '', '2016-11-30', '1', 0),
('06', 'es kelapaa', '0', 12, 8000, '', '2016-11-30', '1', 0),
('08', 'es kelapa', '0', 12, 5000, '', '2016-11-30', '1', 0),
('11', 'cacadwd', 'Casing', 10, 5000, 'Bungkus', '2016-12-02', '1', 0),
('12', 'cacadwda', 'Casing', 10, 5000, 'Bungkus', '2016-12-02', '1', 0),
('123', 'mentos', '0', 10, 1000, '', '2016-12-02', '1', 0),
('1234', '3', '0', 1, 1000, '', '2016-12-02', '1', 0),
('12345', '31', '0', 1, 1000, '', '2016-12-02', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `db_customer`
--

CREATE TABLE `db_customer` (
  `id_customer` int(11) NOT NULL,
  `nama_costomer` varchar(50) NOT NULL,
  `alamat_customer` text NOT NULL,
  `no_telp` int(11) NOT NULL,
  `jenis_customer` varchar(60) NOT NULL,
  `keuntungan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_customer`
--

INSERT INTO `db_customer` (`id_customer`, `nama_costomer`, `alamat_customer`, `no_telp`, `jenis_customer`, `keuntungan`) VALUES
(31, 'User', 'jln.merak jingga', 1021021, 'User', 10),
(32, 'uwak tai licung', 'jln.mana aja sal dia senang kimak itu', 2147483647, 'User', 100);

-- --------------------------------------------------------

--
-- Table structure for table `db_info_kantor`
--

CREATE TABLE `db_info_kantor` (
  `id_info_kantor` int(11) NOT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `db_jenis_barang`
--

CREATE TABLE `db_jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_jenis_barang`
--

INSERT INTO `db_jenis_barang` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Sparepart'),
(2, 'Casing');

-- --------------------------------------------------------

--
-- Table structure for table `db_jenis_customer`
--

CREATE TABLE `db_jenis_customer` (
  `id_jenis_customer` int(11) NOT NULL,
  `jenis_customer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_jenis_customer`
--

INSERT INTO `db_jenis_customer` (`id_jenis_customer`, `jenis_customer`) VALUES
(1, 'User'),
(2, 'Distributor'),
(3, 'Toko');

-- --------------------------------------------------------

--
-- Table structure for table `db_jenis_satuan`
--

CREATE TABLE `db_jenis_satuan` (
  `id_jenis_satuan` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_jenis_satuan`
--

INSERT INTO `db_jenis_satuan` (`id_jenis_satuan`, `satuan`) VALUES
(1, 'Bungkus'),
(2, 'Saset');

-- --------------------------------------------------------

--
-- Table structure for table `db_jenis_transaksi`
--

CREATE TABLE `db_jenis_transaksi` (
  `id_jenis_transaksi` int(11) NOT NULL,
  `nama_transaksi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_jenis_transaksi`
--

INSERT INTO `db_jenis_transaksi` (`id_jenis_transaksi`, `nama_transaksi`) VALUES
(1, 'Penjualan'),
(2, 'Pembelian');

-- --------------------------------------------------------

--
-- Table structure for table `db_transaksi`
--

CREATE TABLE `db_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_bon` int(11) NOT NULL,
  `kode_barang` varchar(200) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jenis_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_transaksi`
--

INSERT INTO `db_transaksi` (`id_transaksi`, `id_bon`, `kode_barang`, `nama_barang`, `qty`, `harga`, `jenis_transaksi`, `tanggal_transaksi`, `id_user`) VALUES
(1, 1, '01', 'LCD ACCER', 10, 25000, 2, '2016-12-04 16:14:05', 1),
(2, 1, '03', 'LCD Nexus 4752', 1, 200000, 2, '2016-12-04 16:14:05', 1),
(3, 1, '02', 'LCD SAMSUNG', 10, 345000, 2, '2016-12-04 16:14:05', 1),
(4, 2, '03', 'LCD Nexus 4752', 95, 19000000, 2, '2016-12-04 16:16:02', 1),
(5, 3, '01', 'LCD ACCER', 10, 111, 2, '2016-12-04 16:18:56', 1),
(6, 4, '01', 'LCD ACCER', 20, 5000, 1, '2016-12-04 17:48:01', 1),
(7, 5, '01', 'LCD ACCER', 9, 5000, 1, '2016-12-04 17:50:22', 1),
(8, 6, '01', 'LCD ACCER', 1, 200000, 1, '2016-12-04 17:51:45', 1),
(9, 7, '01', 'LCD ACCER', 100, 20000, 2, '2016-12-05 08:12:53', 1),
(10, 7, '02', 'LCD SAMSUNG', 10, 500000, 2, '2016-12-05 08:12:53', 1),
(11, 8, '02', 'LCD SAMSUNG', 10, 5000, 1, '2016-12-05 08:13:13', 1),
(12, 8, '04', 'LCD Assus 4752', 3, 1600000, 1, '2016-12-05 08:13:14', 1),
(13, 9, '02', 'LCD SAMSUNG', 5, 400000, 2, '2016-12-06 21:08:25', 1),
(14, 9, '03', 'LCD Nexus 4752', 5, 18000000, 2, '2016-12-06 21:08:25', 1),
(15, 10, '01', 'LCD ACCER', 20, 20000, 2, '2016-12-06 21:09:18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pas` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `user_name`, `pas`, `status`) VALUES
(1, 'Admin', 'admin', '66b65567cedbc743bda3417fb813b9ba ', 'Admin'),
(2, 'Admin', 'admin1', '66b65567cedbc743bda3417fb813b9ba ', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_add_barang_pending`
--
ALTER TABLE `db_add_barang_pending`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `db_add_penjualan_pending`
--
ALTER TABLE `db_add_penjualan_pending`
  ADD PRIMARY KEY (`id_add_penjualan_pending`);

--
-- Indexes for table `db_add_stock_pending`
--
ALTER TABLE `db_add_stock_pending`
  ADD PRIMARY KEY (`id_add_stock_pending`);

--
-- Indexes for table `db_barang`
--
ALTER TABLE `db_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `db_customer`
--
ALTER TABLE `db_customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `db_info_kantor`
--
ALTER TABLE `db_info_kantor`
  ADD PRIMARY KEY (`id_info_kantor`);

--
-- Indexes for table `db_jenis_barang`
--
ALTER TABLE `db_jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `db_jenis_customer`
--
ALTER TABLE `db_jenis_customer`
  ADD PRIMARY KEY (`id_jenis_customer`);

--
-- Indexes for table `db_jenis_satuan`
--
ALTER TABLE `db_jenis_satuan`
  ADD PRIMARY KEY (`id_jenis_satuan`);

--
-- Indexes for table `db_jenis_transaksi`
--
ALTER TABLE `db_jenis_transaksi`
  ADD PRIMARY KEY (`id_jenis_transaksi`);

--
-- Indexes for table `db_transaksi`
--
ALTER TABLE `db_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_add_penjualan_pending`
--
ALTER TABLE `db_add_penjualan_pending`
  MODIFY `id_add_penjualan_pending` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `db_add_stock_pending`
--
ALTER TABLE `db_add_stock_pending`
  MODIFY `id_add_stock_pending` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `db_customer`
--
ALTER TABLE `db_customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `db_info_kantor`
--
ALTER TABLE `db_info_kantor`
  MODIFY `id_info_kantor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `db_jenis_barang`
--
ALTER TABLE `db_jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `db_jenis_customer`
--
ALTER TABLE `db_jenis_customer`
  MODIFY `id_jenis_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `db_jenis_satuan`
--
ALTER TABLE `db_jenis_satuan`
  MODIFY `id_jenis_satuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `db_jenis_transaksi`
--
ALTER TABLE `db_jenis_transaksi`
  MODIFY `id_jenis_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `db_transaksi`
--
ALTER TABLE `db_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
