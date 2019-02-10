-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2019 at 07:36 AM
-- Server version: 10.3.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id8181632_webmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemasukan`
--

CREATE TABLE `tbl_pemasukan` (
  `id_pemasukan` int(11) NOT NULL,
  `nama_pemasukan` varchar(100) NOT NULL,
  `jumlah_pemasukan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pemasukan`
--

INSERT INTO `tbl_pemasukan` (`id_pemasukan`, `nama_pemasukan`, `jumlah_pemasukan`, `keterangan`, `waktu`) VALUES
(8, 'Uang bulanan', 3700000, 'Di Kasi orang tua', '2019-02-04'),
(9, 'Uang alvin', 100000, 'Rejeki', '2019-02-04'),
(10, 'Ibu arfiani', 300000, 'Rejeki alhamdulillah', '2019-02-08'),
(11, 'Rejeki irfan', 500000, 'Alhamdulillah', '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(11) NOT NULL,
  `nama_pengeluaran` varchar(100) NOT NULL,
  `jumlah_pengeluaran` int(11) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran`
--

INSERT INTO `tbl_pengeluaran` (`id_pengeluaran`, `nama_pengeluaran`, `jumlah_pengeluaran`, `tempat`, `keterangan`, `waktu`) VALUES
(21, 'Makan buka puasa', 10000, 'Olala', '', '2019-02-04'),
(22, 'Bubur kajo', 6500, 'Jln babaran', '', '2019-02-04'),
(23, 'Cilok', 3500, 'Jln babaran', '', '2019-02-04'),
(24, 'Beli Stella matic', 29300, 'Pamela', '', '2019-02-05'),
(25, 'Sarapan lotek', 10000, 'Lotek banu', '', '2019-02-05'),
(26, 'Makan nasi lombok', 16000, 'Warlom', '', '2019-02-05'),
(27, 'Makan mi ayam afui', 16000, 'Afui', '', '2019-02-05'),
(28, 'Beli botol air', 19000, 'Dazzle', '', '2019-02-05'),
(29, 'Makan lotek', 10000, 'Bu de glagah', '', '2019-02-06'),
(30, 'Bayar kuliah s-6', 2350000, 'Bank Uad', '', '2019-02-06'),
(31, 'Belanja', 30000, 'Rs', '', '2019-02-06'),
(32, 'Makan bebek', 45000, 'Samping ugm', '', '2019-02-06'),
(33, 'Beli bensin', 9500, 'Samping ugm', '', '2019-02-06'),
(34, 'Tiket nobar elclasico', 25000, 'Dafam hotel', '', '2019-02-06'),
(35, 'Makan sahur', 14000, 'Burjo', '', '2019-02-06'),
(36, 'Makan buka puasa', 12000, 'Olala', '', '2019-02-07'),
(37, 'Print x banner', 65000, 'Centra printing', '', '2019-02-07'),
(38, 'Mcflurry ', 23000, 'Mcd', '', '2019-02-08'),
(39, 'Makan angkringan', 14500, 'Depan alfamart', '', '2019-02-08'),
(40, 'Burjo ', 6500, 'Jln babaran', '', '2019-02-09'),
(41, 'Cilok', 3500, 'Jln babaran', '', '2019-02-09'),
(42, 'Trans jogja', 7000, 'Jogja', '', '2019-02-09'),
(43, 'Sate ayam', 16000, 'Jln batikan', '', '2019-02-10'),
(44, 'Makan nasi ayam', 18000, 'Burjo alfamart', '', '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saldo`
--

CREATE TABLE `tbl_saldo` (
  `id_saldo` int(11) NOT NULL,
  `jumlah_saldo` int(11) NOT NULL,
  `waktu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_saldo`
--

INSERT INTO `tbl_saldo` (`id_saldo`, `jumlah_saldo`, `waktu`) VALUES
(22, 3700000, '2019-02-04'),
(23, -10000, '2019-02-04'),
(24, 100000, '2019-02-04'),
(25, -6500, '2019-02-04'),
(26, -3500, '2019-02-04'),
(27, -29300, '2019-02-05'),
(28, -10000, '2019-02-05'),
(29, -16000, '2019-02-05'),
(30, -16000, '2019-02-05'),
(31, -19000, '2019-02-05'),
(32, -10000, '2019-02-06'),
(33, -2350000, '2019-02-06'),
(34, -30000, '2019-02-06'),
(35, -45000, '2019-02-06'),
(36, -9500, '2019-02-06'),
(37, -25000, '2019-02-06'),
(38, -14000, '2019-02-06'),
(39, -12000, '2019-02-07'),
(40, -65000, '2019-02-07'),
(41, -23000, '2019-02-08'),
(42, 300000, '2019-02-08'),
(43, -14500, '2019-02-08'),
(44, -6500, '2019-02-09'),
(45, -3500, '2019-02-09'),
(46, -7000, '2019-02-09'),
(47, -16000, '2019-02-10'),
(48, -18000, '2019-02-10'),
(49, 500000, '2019-02-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  ADD PRIMARY KEY (`id_pemasukan`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
