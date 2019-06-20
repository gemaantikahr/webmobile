-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 01:13 AM
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
-- Database: `db_webmobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hari`
--

CREATE TABLE `tbl_hari` (
  `id_hari` int(11) NOT NULL,
  `nama_hari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hari`
--

INSERT INTO `tbl_hari` (`id_hari`, `nama_hari`) VALUES
(1, 'Sunday'),
(2, 'Monday'),
(3, 'Tuesday'),
(4, 'Wednesday'),
(5, 'Thursday'),
(6, 'Friday'),
(7, 'Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kegiatan`
--

CREATE TABLE `tbl_kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `status_kegiatan` enum('belum','selesai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kegiatan`
--

INSERT INTO `tbl_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `tanggal`, `tempat`, `jam_mulai`, `jam_selesai`, `status_kegiatan`) VALUES
(1, 'Uji Kompetensi', '2019-02-23', 'Hotel Dafan', '08:30:00', '00:00:00', 'selesai'),
(2, 'Kumpul Asisten', '2019-02-23', 'Kampus 4', '14:00:00', '16:00:00', 'selesai'),
(3, 'Cuci baju', '2019-02-24', 'Kost', '09:00:00', '10:00:00', 'selesai'),
(4, 'grahatama', '2019-02-24', 'Grahatama', '12:03:00', '15:30:00', 'selesai'),
(5, 'Liburan sambil take video', '2019-03-03', 'Gumuk Pasir', '15:00:00', '18:00:00', 'selesai'),
(6, 'Daftarr praktikum', '2019-02-24', 'Tif.uad.ac.id', '13:00:00', '15:00:00', 'selesai'),
(7, 'Olahraga', '2019-03-20', 'Jec', '06:00:00', '19:30:00', 'selesai'),
(8, 'Istirahat', '2019-03-20', 'Kosan', '14:30:00', '16:00:00', 'selesai'),
(9, 'Kumpul APPL', '2019-03-20', 'Kosan', '19:30:00', '21:30:00', 'selesai'),
(10, 'Kumpul MTP', '2019-03-24', 'Rumah fifi', '15:30:00', '21:00:00', 'selesai'),
(11, 'Demoin Sistem', '2019-03-25', 'PWM', '12:30:00', '13:30:00', 'selesai'),
(12, 'UK machine Learning', '2019-04-06', 'Basic Computation Laboratory', '10:30:00', '12:00:00', 'selesai'),
(13, 'Presentation Machine Learning paper #7', '2019-04-08', '4.1.3.28', '08:45:00', '10:25:00', 'selesai'),
(14, 'Kumpul MTP', '2019-04-02', 'Rumah fifi', '18:00:00', '22:00:00', 'selesai'),
(15, 'Ngelayat Aldin', '2019-03-31', 'Kebumen', '08:00:00', '18:00:00', 'selesai'),
(16, 'UK APPL', '2019-04-05', 'Ruang kelas', '13:00:00', '14:10:00', 'selesai'),
(17, 'Latihan ujian ilmu dakwah', '2019-04-05', 'Ruang kelas', '14:00:00', '16:00:00', 'selesai'),
(18, 'Jogging 22 menit', '2019-04-02', 'Jalan', '17:30:00', '18:30:00', 'selesai'),
(19, 'Daftarr tbq ', '2019-04-02', 'Kampus 1', '22:50:00', '12:00:00', 'selesai'),
(20, 'Metopen', '2019-04-02', 'Kampus', '15:30:00', '18:00:00', 'selesai'),
(21, 'UK NLP', '2019-04-05', 'Kosan', '20:00:00', '21:00:00', 'selesai'),
(22, 'Kumpul machine learning', '2019-04-05', 'Ekspresso', '18:00:00', '21:00:00', 'selesai'),
(23, 'Dss practice Postest', '2019-04-11', 'Kos', '00:00:00', '18:00:00', 'selesai'),
(24, 'Jogging 22 menit', '2019-04-07', 'Ugm', '06:30:00', '09:00:00', 'selesai'),
(25, 'Jogging 22 menit', '2019-04-07', 'Ugm', '06:30:00', '09:00:00', 'selesai'),
(26, 'Jogging 22 menit', '2019-04-07', 'Ugm', '06:30:00', '09:00:00', 'selesai'),
(27, 'Penelitian schnorr', '2019-04-07', 'Kosan', '12:30:00', '14:30:00', 'selesai'),
(28, 'Responsi PBA', '2019-05-24', 'Lab komdas', '07:30:00', '09:00:00', 'belum'),
(29, 'Responsi appl', '2019-05-29', 'Lab Basis Data', '09:00:00', '10:30:00', 'belum'),
(30, 'Responsi pmesin', '2019-05-26', 'Lab komdas', '12:30:00', '13:45:00', 'belum'),
(31, 'Presentasi APPL ', '2019-05-27', 'Lab Basis Data', '09:00:00', '00:00:00', 'belum'),
(32, 'Mentor premier pro', '2019-05-26', 'Ruang fkm', '09:00:00', '12:00:00', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matakuliah`
--

CREATE TABLE `tbl_matakuliah` (
  `id_matkul` int(11) NOT NULL,
  `nama_matkul` varchar(100) NOT NULL,
  `kelas` char(5) NOT NULL,
  `sks_matkul` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `nama_dosen` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matakuliah`
--

INSERT INTO `tbl_matakuliah` (`id_matkul`, `nama_matkul`, `kelas`, `sks_matkul`, `semester`, `nama_dosen`, `hari`, `jam_mulai`, `jam_selesai`, `tempat`) VALUES
(1, 'Religion Science', 'B', 0, 8, 'Dr. Uki Sukiman, M.Ag', 'Friday', '14:15:00', '16:05:00', '4.1.3.25'),
(3, 'Machine Learning', 'A', 3, 6, 'Dewi Pramudi Ismi, S.T., M.CompSc', 'Monday', '08:45:00', '10:25:00', '4.1.3.28'),
(4, 'Natural Processing Language', 'A', 3, 6, ' 	Dewi Soyusiowaty, S.T., M.T.', 'Wednesday', '10:30:00', '12:10:00', '4.1.3.26'),
(5, 'Analysis And Design of Software', 'B', 3, 6, 'Murein Miksa Mardhia, S.T., M.T.', 'Friday', '12:30:00', '14:10:00', '4.1.3.20'),
(6, 'Management of Project Job', 'B', 3, 6, 'Lisna Zahrotun, S.T., M.Cs.', 'Wednesday', '16:10:00', '17:50:00', '4.1.3.27'),
(7, 'Management of Data and Information', 'H', 3, 6, 'Lisna Zahrotun, S.T., M.Cs.', 'Thursday', '12:00:00', '15:00:00', '4.1.3.27'),
(8, 'Decision Support System', 'B', 3, 6, 'Dwi Normawati, S.T., M.Eng.', 'Wednesday', '12:30:00', '14:10:00', '4.1.3.25'),
(10, 'Web Changes', 'A', 3, 6, 'Supriyanto, S.T., M.T.', 'Thursday', '10:30:00', '12:10:00', '4.1.3.29');

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
(15, 'Gaji uji kompetensi', 220000, 'Di kasi UAD', '2019-02-23');

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
(50, 'Makan ayam ', 15000, 'Lima sekawan', '', '2019-02-23'),
(51, 'Makan nasi burjo', 10000, 'Burjo alfamart', '', '2019-02-23'),
(52, 'Cilok', 5000, 'Alfamart', '', '2019-02-23'),
(53, 'Es dawet 2', 10000, 'Pak herman', '', '2019-02-24'),
(54, 'Nasi padang lele', 11009, 'Lima sekawan', '', '2019-02-24'),
(55, 'Air minum galon', 5000, 'Samping famela', '', '2019-02-24'),
(56, 'Nasi goreng', 10000, 'Perempatan glagah', '', '2019-02-24'),
(57, 'Bakso paijo', 5000, 'Paijo', '', '2019-02-24'),
(58, 'Gorengan ', 2000, 'Angkringan', '', '2019-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_praktikum`
--

CREATE TABLE `tbl_praktikum` (
  `id_praktikum` int(11) NOT NULL,
  `nama_praktikum` varchar(100) NOT NULL,
  `nama_asisten` varchar(100) NOT NULL,
  `hari` varchar(100) NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tempat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_praktikum`
--

INSERT INTO `tbl_praktikum` (`id_praktikum`, `nama_praktikum`, `nama_asisten`, `hari`, `jam_mulai`, `jam_selesai`, `tempat`) VALUES
(2, 'Practice of Analysis And Design Of Software', 'Mrs. Murien', 'Wednesday', '09:00:00', '10:30:00', 'Database Laboratory'),
(5, 'Practice of Machine Learning', 'Dewi Pramudi', 'Saturday', '10:30:00', '12:00:00', 'Basic Computation Laboratory'),
(6, 'Practice of Natural Processung Language', 'Dewi Soyusiowati', 'Friday', '07:30:00', '09:00:00', 'Basic Computation Laboratory'),
(7, 'Practice of Web Changes', 'Mr. Supriyanto', 'Thursday', '09:00:00', '10:30:00', 'Database Laboratory'),
(8, 'Practice of Decision Support System', 'Mrs. Dwi Normawati', 'Thursday', '15:00:00', '16:30:00', 'Database Laboratory'),
(9, 'Practice of Strategi Algorithm', 'Gema Antika Hariadi', 'Saturday', '13:30:00', '15:00:00', 'Database Laboratory'),
(10, 'Practice of Strategi Algorithm #1', 'Gema Antika Hariadi', 'Thursday', '12:00:00', '13:30:00', 'Database Laboratory'),
(11, 'Practice of MATHDIS #1', 'Gema Antika Hariadi', 'Monday', '12:00:00', '15:00:00', 'Basic Computation Laboratory'),
(12, 'Practice of Web Programming #1', 'Gema Antika Hariadi', 'Tuesday', '07:30:00', '10:30:00', 'Network Laboratory'),
(13, 'Practice of MATHDIS #2', 'Gema Antika Hariadi', 'Tuesday', '12:00:00', '15:00:00', 'Basic Computation Laboratory');

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
(58, 220000, '2019-02-23'),
(59, -15000, '2019-02-23'),
(60, -10000, '2019-02-23'),
(61, -5000, '2019-02-23'),
(62, -10000, '2019-02-24'),
(63, -11009, '2019-02-24'),
(64, -5000, '2019-02-24'),
(65, -10000, '2019-02-24'),
(66, -5000, '2019-02-24'),
(67, -2000, '2019-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tugas`
--

CREATE TABLE `tbl_tugas` (
  `id_tugas` int(11) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `status_tugas` enum('selesai','belum') NOT NULL DEFAULT 'belum',
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tugas`
--

INSERT INTO `tbl_tugas` (`id_tugas`, `nama_tugas`, `deadline`, `status_tugas`, `keterangan`, `tanggal`) VALUES
(1, 'Ismuba', '2019-03-08', 'selesai', 'Selesaikan Customer Ismuba', '2019-02-22'),
(2, 'Ismuba', '2019-02-24', 'selesai', 'Upload foto', '2019-02-22'),
(3, 'NPL', '2019-03-10', 'selesai', 'Berikan contoh kasus dalam bahasa Indonesia tiap analisis bahasa alamai yang Ada di setiap tahapan (', '2019-03-06'),
(4, 'NPL', '2019-03-12', 'selesai', '3 paper judul, 1 paper resume 1-10 slide', '2019-03-06'),
(7, 'Analysis And Design Of Software', '2019-03-20', 'selesai', 'Kerjakan tugas minggu 1 Dan 2', '2019-03-19'),
(8, 'NPL', '2019-03-25', 'selesai', 'Tugas : 1.  Uraikan algoritma Nazief dan Adriani 2.  Jelaskan perbedaan algoritma Porter dan Nazief ', '2019-03-23'),
(9, 'Postest NLP', '2019-03-26', 'selesai', 'Buatlah kalimat tersebut , lihat Aja di galery', '2019-03-23'),
(10, 'Postest DSS', '2019-03-26', 'selesai', 'Lihat di gallery', '2019-03-23'),
(11, 'Machine Learning', '2019-03-27', 'selesai', 'Mencari jurnal tentang naive Bayes atau BBN (kelompok 2 orang)', '2019-03-25'),
(12, 'Postest NLP', '2019-04-09', 'belum', 'Ada di foto atau Google drive', '2019-04-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

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
-- Indexes for table `tbl_praktikum`
--
ALTER TABLE `tbl_praktikum`
  ADD PRIMARY KEY (`id_praktikum`);

--
-- Indexes for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  ADD PRIMARY KEY (`id_saldo`);

--
-- Indexes for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
  ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kegiatan`
--
ALTER TABLE `tbl_kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_matakuliah`
--
ALTER TABLE `tbl_matakuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_pemasukan`
--
ALTER TABLE `tbl_pemasukan`
  MODIFY `id_pemasukan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_praktikum`
--
ALTER TABLE `tbl_praktikum`
  MODIFY `id_praktikum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_saldo`
--
ALTER TABLE `tbl_saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_tugas`
--
ALTER TABLE `tbl_tugas`
  MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
