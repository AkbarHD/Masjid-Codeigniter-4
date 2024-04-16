-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2024 at 08:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simasjid-ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `id_agenda` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`id_agenda`, `nama_kegiatan`, `tanggal`, `jam`) VALUES
(1, 'Kajian Bersama Ustad Adi Hidayat', '2024-01-08', '14:00:00'),
(2, 'Kajian Bersama Ustad A', '2022-08-25', '14:00:00'),
(3, 'Kajian Bersama Ustad B', '2022-08-07', '14:00:00'),
(4, 'Wirid', '2022-08-26', '17:00:00'),
(6, 'Kajian Bersama Ustad D', '2022-08-02', '14:00:00'),
(7, 'Kajain Rutin', '2022-08-22', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id_donasi` int(11) NOT NULL,
  `tgl` date DEFAULT NULL,
  `id_rekening` int(11) DEFAULT NULL,
  `nama_bank` varchar(50) NOT NULL,
  `no_rek` varchar(50) DEFAULT NULL,
  `nama_pengirim` varchar(50) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jenis_donasi` varchar(10) DEFAULT NULL,
  `bukti` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id_donasi`, `tgl`, `id_rekening`, `nama_bank`, `no_rek`, `nama_pengirim`, `jumlah`, `jenis_donasi`, `bukti`) VALUES
(1, '2022-08-27', 3, 'Bank Mandiri', '2222-111-232-111', 'Mahmudin', 150000, 'Masjid', '1661598588_3c28b3f7e20418a94586.jpg'),
(2, '2022-08-27', 2, 'Bank Mandiri', '2222-111-232-111', 'Mahmudin', 200000, 'Sosial', '1661599846_415f763f867bd2c4fd76.png'),
(3, '2024-01-03', 1, 'BCA', '32424234234', 'Akbar', 1000000, 'Masjid', '1704270668_03bdc90b3e0d8b69c3de.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kas_masjid`
--

CREATE TABLE `tbl_kas_masjid` (
  `id_kas_masjid` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kas_masuk` int(11) DEFAULT NULL,
  `kas_keluar` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kas_masjid`
--

INSERT INTO `tbl_kas_masjid` (`id_kas_masjid`, `tanggal`, `ket`, `kas_masuk`, `kas_keluar`, `status`) VALUES
(1, '2024-01-05', 'Saldo Awal', 10000000, 0, 'Masuk'),
(2, '2024-01-05', 'Pembbayaran PDAM', 0, 150000, 'Keluar'),
(3, '2024-01-05', 'Pembayaran Tagihan Listrik ', 0, 250000, 'Keluar'),
(13, '2024-01-04', 'Dapet dari orang kaya', 1000000, 0, 'Masuk'),
(14, '2024-01-04', 'kehilangan kotak amal', 0, 1000000, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kas_sosial`
--

CREATE TABLE `tbl_kas_sosial` (
  `id_kas_sosial` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `kas_masuk` int(11) DEFAULT NULL,
  `kas_keluar` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kas_sosial`
--

INSERT INTO `tbl_kas_sosial` (`id_kas_sosial`, `tanggal`, `ket`, `kas_masuk`, `kas_keluar`, `status`) VALUES
(1, '2024-01-05', 'Kas Sosial Awal', 5600000, 0, 'Masuk'),
(2, '2024-01-05', 'Sumbangan Warga', 475000, 0, 'Masuk'),
(4, '2024-01-05', 'Membeli Beras 50 Kg Untuk Duafa', 0, 635000, 'Keluar'),
(5, '2024-01-05', 'membantu anak yatim', 0, 300000, 'Keluar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelompok`
--

CREATE TABLE `tbl_kelompok` (
  `id_kelompok` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `nama_kelompok` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_kelompok`
--

INSERT INTO `tbl_kelompok` (`id_kelompok`, `id_tahun`, `nama_kelompok`) VALUES
(1, 1, 'Kelompok 1'),
(2, 1, 'Kelompok 2'),
(5, 2, 'Kelompok 1'),
(9, 2, 'Kelompok 2'),
(10, 2, 'Kelompok 3'),
(11, 3, 'Kelompok 1'),
(13, 5, 'Kelompok 1 2024');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peserta_kelompok`
--

CREATE TABLE `tbl_peserta_kelompok` (
  `id_peserta` int(11) NOT NULL,
  `id_kelompok` int(11) DEFAULT NULL,
  `nama_peserta` varchar(100) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_peserta_kelompok`
--

INSERT INTO `tbl_peserta_kelompok` (`id_peserta`, `id_kelompok`, `nama_peserta`, `biaya`) VALUES
(1, 1, 'Wawan', 2200000),
(2, 1, 'Marwan', 2200000),
(3, 1, 'Mahmudin', 2200000),
(4, 2, 'Maimuna', 2200000),
(5, 2, 'Maimun', 2200000),
(8, 2, 'Hamdan', 2200000),
(9, 5, 'Ani', 2500000),
(10, 5, 'Hana', 2500000),
(11, 11, 'Akbar', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rekening`
--

CREATE TABLE `tbl_rekening` (
  `id_rekening` int(11) NOT NULL,
  `nama_bank` varchar(50) DEFAULT NULL,
  `no_rek` varchar(25) DEFAULT NULL,
  `atas_nama` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_rekening`
--

INSERT INTO `tbl_rekening` (`id_rekening`, `nama_bank`, `no_rek`, `atas_nama`) VALUES
(1, 'Bank BRI', '2345-4584-1111-111', 'Masjid Ar-Rahman\r\n'),
(2, 'Bank BSI', '1111-4584-2222-1234', 'Masjid Ar-Rahman'),
(3, 'Bank Mandiri', '4837-111-232-111', 'Masjid Ar-Rahman');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(1) NOT NULL,
  `nama_masjid` varchar(100) NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_masjid`, `id_kota`, `alamat`) VALUES
(1, 'Ar-Rahman', '1301', 'Griya Serpong Asri Suradita, Cisauk Tangerang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun_h` varchar(4) DEFAULT NULL,
  `tahun_m` year(4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `tahun_h`, `tahun_m`) VALUES
(1, '1443', 2022),
(2, '1444', 2023),
(3, '1445', 2024),
(5, '1446', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email`, `password`, `level`) VALUES
(1, 'Akbar Hossam', 'admin@gmail.com', '1234', 0),
(2, 'Bahrudin', 'bahrudin@gmail.com', '1234', 1),
(3, 'Mahmudin', 'mahmudin@gmail.com', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`id_agenda`) USING BTREE;

--
-- Indexes for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id_donasi`) USING BTREE;

--
-- Indexes for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
  ADD PRIMARY KEY (`id_kas_masjid`) USING BTREE;

--
-- Indexes for table `tbl_kas_sosial`
--
ALTER TABLE `tbl_kas_sosial`
  ADD PRIMARY KEY (`id_kas_sosial`) USING BTREE;

--
-- Indexes for table `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  ADD PRIMARY KEY (`id_kelompok`) USING BTREE;

--
-- Indexes for table `tbl_peserta_kelompok`
--
ALTER TABLE `tbl_peserta_kelompok`
  ADD PRIMARY KEY (`id_peserta`) USING BTREE;

--
-- Indexes for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  ADD PRIMARY KEY (`id_rekening`) USING BTREE;

--
-- Indexes for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`) USING BTREE;

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kas_masjid`
--
ALTER TABLE `tbl_kas_masjid`
  MODIFY `id_kas_masjid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_kas_sosial`
--
ALTER TABLE `tbl_kas_sosial`
  MODIFY `id_kas_sosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kelompok`
--
ALTER TABLE `tbl_kelompok`
  MODIFY `id_kelompok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_peserta_kelompok`
--
ALTER TABLE `tbl_peserta_kelompok`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_rekening`
--
ALTER TABLE `tbl_rekening`
  MODIFY `id_rekening` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
