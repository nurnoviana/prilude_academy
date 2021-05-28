-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2019 at 02:43 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prilude_academy`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda_pertemuan`
--

CREATE TABLE `agenda_pertemuan` (
  `id_agenda_pertemuan` int(11) NOT NULL,
  `pertemuan_ke` tinyint(2) NOT NULL,
  `judul_materi` varchar(200) NOT NULL,
  `deskripsi_materi` text NOT NULL,
  `link_modul` varchar(200) NOT NULL,
  `tanggal_dibuat` date NOT NULL,
  `terakhir_diubah` date NOT NULL,
  `kode_kursus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agenda_pertemuan`
--

INSERT INTO `agenda_pertemuan` (`id_agenda_pertemuan`, `pertemuan_ke`, `judul_materi`, `deskripsi_materi`, `link_modul`, `tanggal_dibuat`, `terakhir_diubah`, `kode_kursus`) VALUES
(10, 4, 'Basis Data Lanjutan 2', 'MongoDB', 'http://ebook-dl.com/dlbook/27978', '2019-02-28', '2019-03-01', 'K06'),
(11, 2, 'Pemrograman Berbasis Objek', 'Java', '', '2019-03-01', '2019-03-01', 'K90');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_bayar`
--

CREATE TABLE `bukti_bayar` (
  `id_bukti_bayar` int(11) NOT NULL,
  `bank_asal` varchar(50) NOT NULL,
  `nama_pemilik_rekening` varchar(30) NOT NULL,
  `tanggal_transfer` date NOT NULL,
  `bukti_transfer` varchar(100) NOT NULL,
  `no_tagihan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bukti_bayar`
--

INSERT INTO `bukti_bayar` (`id_bukti_bayar`, `bank_asal`, `nama_pemilik_rekening`, `tanggal_transfer`, `bukti_transfer`, `no_tagihan`) VALUES
(11, 'BNI', 'Test1', '2019-02-26', '1280px-BNI_logo_svg.png', '5'),
(12, 'BTN', 'Test1', '2019-02-28', '100407014-java-map-island-silhouette-icon-isolated-java-black-map-outline-vector-illustration-2.jpg', '2'),
(13, 'BCA', 'AAAAAA', '2019-03-01', '203b2e2f4fcd7da5c6d070cee86396da.jpg', '20');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengguna`
--

CREATE TABLE `jenis_pengguna` (
  `id_jenis_pengguna` int(11) NOT NULL,
  `jenis_pengguna` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengguna`
--

INSERT INTO `jenis_pengguna` (`id_jenis_pengguna`, `jenis_pengguna`) VALUES
(1, 'Siswa'),
(2, 'Pengajar');

-- --------------------------------------------------------

--
-- Table structure for table `kehadiran`
--

CREATE TABLE `kehadiran` (
  `id_kehadiran` int(11) NOT NULL,
  `tanggal` varchar(45) NOT NULL,
  `status_kehadiran` enum('Hadir','Absen','Izin','Sakit') NOT NULL,
  `id_agenda_pertemuan` int(11) NOT NULL,
  `id_kursus_saya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kehadiran`
--

INSERT INTO `kehadiran` (`id_kehadiran`, `tanggal`, `status_kehadiran`, `id_agenda_pertemuan`, `id_kursus_saya`) VALUES
(1, '2019-03-21', 'Absen', 10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `kode_kursus` varchar(5) NOT NULL,
  `nama_kursus` varchar(100) NOT NULL,
  `alokasi_waktu` varchar(5) NOT NULL,
  `deskripsi_singkat` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga_per_bulan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`kode_kursus`, `nama_kursus`, `alokasi_waktu`, `deskripsi_singkat`, `deskripsi`, `harga_per_bulan`) VALUES
('K03', 'Kursus Apaa', '2', 'Test2', 'aaaa', 210000),
('K06', 'Database', '4', 'Basis Data', '', 400000),
('K90', 'Mobile Programming', '8', 'Java Android', '', 350000);

-- --------------------------------------------------------

--
-- Table structure for table `kursus_saya`
--

CREATE TABLE `kursus_saya` (
  `id_kursus_saya` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tangal_selesai` date NOT NULL,
  `no_pengguna` int(10) NOT NULL,
  `kode_kursus` varchar(5) NOT NULL,
  `id_jenis_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus_saya`
--

INSERT INTO `kursus_saya` (`id_kursus_saya`, `tanggal_mulai`, `tangal_selesai`, `no_pengguna`, `kode_kursus`, `id_jenis_pengguna`) VALUES
(4, '2019-02-23', '2019-03-31', 16, 'K03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode_pembayaran` int(11) NOT NULL,
  `nama_metode` varchar(100) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `logo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metode_pembayaran`
--

INSERT INTO `metode_pembayaran` (`id_metode_pembayaran`, `nama_metode`, `deskripsi`, `logo`) VALUES
(1, 'Transfer Bank', 'Transfer Biasa we', ''),
(2, 'Cash', 'Bayar Kontan', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `no_pengguna` int(10) NOT NULL,
  `alamat_email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_identitas` enum('KTP','Kartu Pelajar') NOT NULL,
  `no_identitas` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `desa` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `id_jenis_pengguna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`no_pengguna`, `alamat_email`, `password`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_identitas`, `no_identitas`, `alamat`, `jenis_kelamin`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `id_jenis_pengguna`) VALUES
(16, 'siswa@siswa.com', '7363a0d0604902af7b70b271a0b96480', 'Siswa', 'Jakarta', '2000-12-31', 'Kartu Pelajar', 'KM098801', 'Tasikmalaya', 'P', 'Cikunir', 'Singaparna', 'Tasikmalaya', 'Jawa Barat', 1),
(19, 'guru@guru.com', '77e69c137812518e359196bb2f5e9bb9', 'Guruku', 'Jakarta', '1995-12-04', 'KTP', '3208765443210008', 'Perum', 'P', 'Cikunir', 'Singaparna', 'Tasikmalaya', 'Jawa Barat', 2),
(21, 'aku@murid.com', '89ccfac87d8d06db06bf3211cb2d69ed', 'aaaa', 'aaaa', '2019-02-23', 'Kartu Pelajar', 'KTM009', 'Tasikmalaya', 'L', '', '', '', '', 1),
(22, 'dia@siswa.com', '465b1f70b50166b6d05397fca8d600b0', 'Dia Siswa', 'Cianjur', '1999-03-26', 'KTP', '3209847781990006', 'Perum', 'P', '', '', '', '', 1),
(23, 'kami@siswa.com', '36fa64a76908b8489e7a89d5c72857c0', 'kami siswa', 'Tasikmalaya', '1999-03-29', 'Kartu Pelajar', 'KT567004', 'prilude', 'L', '', '', '', '', 1),
(24, 'gurusaya@guru.com', '77e69c137812518e359196bb2f5e9bb9', 'guru saya', 'Tasikmalaya', '1998-11-11', 'KTP', '32098178870007', 'Cipedes', 'L', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `status_pembayaran`
--

CREATE TABLE `status_pembayaran` (
  `id_status_pembayaran` int(11) NOT NULL,
  `status_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pembayaran`
--

INSERT INTO `status_pembayaran` (`id_status_pembayaran`, `status_pembayaran`) VALUES
(1, 'Belum dibayar'),
(2, 'Telah dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `no_tagihan` varchar(13) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_jatuh_tempo` datetime NOT NULL,
  `tanggal_lunas` datetime NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `jumlah_tagihan` int(11) NOT NULL,
  `diskon` int(3) NOT NULL,
  `tagihan_setelah_diskon` int(11) NOT NULL,
  `id_status_pembayaran` int(11) NOT NULL,
  `no_pengguna` int(10) NOT NULL,
  `kode_kursus` varchar(5) NOT NULL,
  `id_metode_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`no_tagihan`, `tanggal_dibuat`, `tanggal_jatuh_tempo`, `tanggal_lunas`, `deskripsi`, `jumlah_tagihan`, `diskon`, `tagihan_setelah_diskon`, `id_status_pembayaran`, `no_pengguna`, `kode_kursus`, `id_metode_pembayaran`) VALUES
('1', '2019-02-28 04:51:33', '2019-03-13 11:00:00', '0000-00-00 00:00:00', '', 300000, 29, 213000, 1, 16, 'K03', 1),
('10', '2019-02-28 04:50:18', '2019-02-27 00:00:00', '0000-00-00 00:00:00', '', 1500000, 25, 1125000, 1, 21, 'K03', 1),
('2', '2019-02-28 03:07:50', '2019-03-31 14:00:00', '2019-02-28 03:09:21', 'cccc', 250000, 9, 227500, 2, 21, 'K03', 2),
('20', '2019-03-01 10:34:24', '2019-03-27 16:00:00', '2019-03-01 10:35:30', '', 250000, 12, 220000, 2, 21, 'K90', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `email_admin` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_admin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`email_admin`, `password`, `nama_admin`) VALUES
('admin.prilude@admin.com', 'admin1234', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_pertemuan`
--
ALTER TABLE `agenda_pertemuan`
  ADD PRIMARY KEY (`id_agenda_pertemuan`),
  ADD KEY `kode_kursus` (`kode_kursus`);

--
-- Indexes for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
  ADD PRIMARY KEY (`id_bukti_bayar`),
  ADD KEY `no_tagihan` (`no_tagihan`);

--
-- Indexes for table `jenis_pengguna`
--
ALTER TABLE `jenis_pengguna`
  ADD PRIMARY KEY (`id_jenis_pengguna`);

--
-- Indexes for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD PRIMARY KEY (`id_kehadiran`),
  ADD KEY `id_agenda_pertemuan` (`id_agenda_pertemuan`),
  ADD KEY `id_kursus_saya` (`id_kursus_saya`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`kode_kursus`);

--
-- Indexes for table `kursus_saya`
--
ALTER TABLE `kursus_saya`
  ADD PRIMARY KEY (`id_kursus_saya`),
  ADD KEY `kode_kursus` (`kode_kursus`),
  ADD KEY `id_jenis_pengguna` (`id_jenis_pengguna`),
  ADD KEY `no_pengguna` (`no_pengguna`);

--
-- Indexes for table `metode_pembayaran`
--
ALTER TABLE `metode_pembayaran`
  ADD PRIMARY KEY (`id_metode_pembayaran`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`no_pengguna`),
  ADD KEY `id_jenis_pengguna` (`id_jenis_pengguna`);

--
-- Indexes for table `status_pembayaran`
--
ALTER TABLE `status_pembayaran`
  ADD PRIMARY KEY (`id_status_pembayaran`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`no_tagihan`),
  ADD KEY `id_status_pembayaran` (`id_status_pembayaran`),
  ADD KEY `kode_kursus` (`kode_kursus`),
  ADD KEY `id_metode_pembayaran` (`id_metode_pembayaran`),
  ADD KEY `no_pengguna` (`no_pengguna`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`email_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_pertemuan`
--
ALTER TABLE `agenda_pertemuan`
  MODIFY `id_agenda_pertemuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `bukti_bayar`
--
ALTER TABLE `bukti_bayar`
  MODIFY `id_bukti_bayar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `kehadiran`
--
ALTER TABLE `kehadiran`
  MODIFY `id_kehadiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `no_pengguna` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `agenda_pertemuan`
--
ALTER TABLE `agenda_pertemuan`
  ADD CONSTRAINT `agenda_pertemuan_ibfk_1` FOREIGN KEY (`kode_kursus`) REFERENCES `kursus` (`kode_kursus`) ON DELETE CASCADE;

--
-- Constraints for table `kehadiran`
--
ALTER TABLE `kehadiran`
  ADD CONSTRAINT `kehadiran_ibfk_2` FOREIGN KEY (`id_kursus_saya`) REFERENCES `kursus_saya` (`id_kursus_saya`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kehadiran_ibfk_3` FOREIGN KEY (`id_agenda_pertemuan`) REFERENCES `agenda_pertemuan` (`id_agenda_pertemuan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kursus_saya`
--
ALTER TABLE `kursus_saya`
  ADD CONSTRAINT `kursus_saya_ibfk_2` FOREIGN KEY (`kode_kursus`) REFERENCES `kursus` (`kode_kursus`) ON DELETE CASCADE,
  ADD CONSTRAINT `kursus_saya_ibfk_3` FOREIGN KEY (`no_pengguna`) REFERENCES `pengguna` (`no_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_status_pembayaran`) REFERENCES `status_pembayaran` (`id_status_pembayaran`),
  ADD CONSTRAINT `tagihan_ibfk_2` FOREIGN KEY (`id_status_pembayaran`) REFERENCES `status_pembayaran` (`id_status_pembayaran`),
  ADD CONSTRAINT `tagihan_ibfk_4` FOREIGN KEY (`kode_kursus`) REFERENCES `kursus` (`kode_kursus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihan_ibfk_5` FOREIGN KEY (`id_metode_pembayaran`) REFERENCES `metode_pembayaran` (`id_metode_pembayaran`),
  ADD CONSTRAINT `tagihan_ibfk_6` FOREIGN KEY (`no_pengguna`) REFERENCES `pengguna` (`no_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
