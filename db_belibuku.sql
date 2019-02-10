-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 05:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_belibuku`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `harga_buku` int(11) NOT NULL,
  `tanggal_tambah` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `nama_buku`, `penulis_buku`, `harga_buku`, `tanggal_tambah`) VALUES
(8, 'Terlalu lama sendiris', 'Peterpan', 35000, '2019-01-20'),
(11, 'asdfasdfasd', 'asdfasdfasdfasdf', 234234, '2019-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_buku` varchar(100) NOT NULL,
  `kelas_buku` varchar(100) DEFAULT NULL,
  `harga_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_buku`, `kelas_buku`, `harga_buku`) VALUES
(11, 'Al Islam', '1', 25000),
(12, 'Al Islama', '3', 23000),
(13, 'Al Islam', '3', 23000),
(14, 'Al Islam', '4', 25000),
(15, 'Al Islam', '6', 23000),
(16, 'Kemuhammadiyahan', '3', 15000),
(17, 'Kemuhammadiyahan', '4', 18000),
(18, 'Kemuhammadiyahan', '5', 20000),
(19, 'Kemuhammadiyahan', '6', 15000),
(20, 'Bahasa Arab', '4', 25000),
(21, 'Bahasa Arab', '5', 25000),
(22, 'Bahasa Arab', '6', 18000),
(23, 'PPI', '1', 16000),
(24, 'Fikih MI', '1', 10000),
(25, 'Fikih MI', '2', 15000),
(26, 'Fikih MI', '3', 15000),
(27, 'Fikih MI', '4', 12000),
(28, 'Fikih MI', '5', 15000),
(29, 'Fikih MI', '6', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kabupaten`
--

CREATE TABLE `tbl_kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kabupaten`
--

INSERT INTO `tbl_kabupaten` (`id_kabupaten`, `nama_kabupaten`, `provinsi`) VALUES
(1, 'Lombok Timur', 'Nusa Tenggara Barat'),
(2, 'Solo', 'Jawa Tengah'),
(3, 'Bandung', 'Jawa Barat'),
(4, 'Surabaya', 'Jawa Timur'),
(5, 'Jogja', 'Daerah Istimewa Jogjakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat_sekolah`, `id_kabupaten`) VALUES
(5, 'SD Muhammadiyah Sapen', 'Jalan Bimo Kurdo No.33, Demangan, Gondokusuman, Demangan, Gondokusuman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55221', 5),
(6, 'SD Muhammadiyah Sokonandi 2', 'Jl. Notowinatan, Gunungketur, Pakualaman, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55166', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_kabupaten`
--
ALTER TABLE `tbl_kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
