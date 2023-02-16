-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2023 pada 21.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_knn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_testing`
--

CREATE TABLE `data_testing` (
  `Id_testing` int(11) NOT NULL,
  `NPM` varchar(100) NOT NULL,
  `IPK` varchar(50) NOT NULL,
  `status_bekerja` varchar(100) NOT NULL,
  `cuti_semester` varchar(50) NOT NULL,
  `jumlah_mk_diulang` varchar(100) NOT NULL,
  `jumlah_organisasi` varchar(100) NOT NULL,
  `ket_lulus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_testing`
--

INSERT INTO `data_testing` (`Id_testing`, `NPM`, `IPK`, `status_bekerja`, `cuti_semester`, `jumlah_mk_diulang`, `jumlah_organisasi`, `ket_lulus`) VALUES
(516, '13.2018.1.00749', '3.72', '1', '0', '0', '0', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `Id_training` int(11) NOT NULL,
  `NPM` varchar(25) NOT NULL,
  `IPK` varchar(50) NOT NULL,
  `status_bekerja` varchar(100) NOT NULL,
  `cuti_semester` varchar(50) NOT NULL,
  `jumlah_mk_diulang` varchar(100) NOT NULL,
  `jumlah_organisasi` int(100) NOT NULL,
  `ket_lulus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`Id_training`, `NPM`, `IPK`, `status_bekerja`, `cuti_semester`, `jumlah_mk_diulang`, `jumlah_organisasi`, `ket_lulus`) VALUES
(90, '13.2014.1.00399', '3.68', '1', '0', '3', 1, '2'),
(91, '13.2014.1.00406', '3.64', '1', '0', '1', 1, '1'),
(92, '13.2014.1.00437', '3.42', '1', '0', '0', 0, '1'),
(93, '13.2014.1.00408', '3.51', '0', '0', '1', 3, '2'),
(94, '13.2008.1.00092', '3.50', '0', '0', '2', 1, '1'),
(95, '13.2010.1.00218', '3.71', '0', '0', '0', 1, '1'),
(96, '13.2016.1.00315', '3.34', '0', '0', '1', 2, '1'),
(97, '13.2016.1.00488', '3.62', '0', '0', '0', 6, '1'),
(98, '13.2016.1.00493', '3.71', '0', '0', '0', 1, '1'),
(99, '13.2016.1.00494', '3.72', '0', '0', '0', 2, '1'),
(100, '13.2016.1.00502', '3.55', '0', '0', '0', 1, '1'),
(101, '13.2016.1.00503', '3.34', '1', '0', '1', 1, '1'),
(102, '13.2016.1.00505', '3.55', '1', '0', '0', 1, '1'),
(103, '13.2016.1.00506', '3.50', '0', '0', '0', 1, '1'),
(104, '13.2016.1.00508', '3.45', '0', '0', '0', 1, '1'),
(105, '13.2016.1.00514', '3.55', '0', '0', '0', 1, '1'),
(106, '13.2016.1.00515', '3.59', '1', '0', '0', 1, '1'),
(107, '13.2016.1.00519', '3.53', '0', '0', '0', 2, '1'),
(108, '13.2016.1.00521', '3.44', '0', '0', '1', 0, '1'),
(109, '13.2016.1.00523', '3.68', '0', '0', '0', 0, '1'),
(110, '13.2016.1.00524', '3.52', '0', '0', '0', 1, '1'),
(111, '13.2016.1.00528', '3.51', '1', '0', '0', 1, '1'),
(112, '13.2016.1.00530', '3.32', '1', '1', '1', 0, '1'),
(113, '13.2016.1.00496', '3.41', '1', '0', '2', 0, '2'),
(114, '13.2016.1.00511', '3.73', '1', '0', '1', 1, '2'),
(115, '13.2016.1.00498', '3.43', '1', '1', '1', 0, '2'),
(116, '13.2016.1.00517', '3.29', '1', '0', '1', 0, '2'),
(117, '13.2016.1.00522', '3.31', '1', '0', '1', 2, '2'),
(118, '13.2016.1.00525', '3.28', '1', '1', '3', 4, '2'),
(119, '13.2017.1.00532', '3.73', '1', '0', '0', 1, '1'),
(120, '13.2017.1.00574', '3.65', '0', '0', '0', 1, '1'),
(121, '13.2017.1.00594', '3.5', '0', '0', '0', 1, '1'),
(122, '13.2017.1.00600', '3.73', '0', '0', '0', 1, '1'),
(123, '13.2017.1.00605', '3.39', '0', '0', '0', 0, '1'),
(124, '13.2017.1.00618', '3.51', '0', '0', '0', 2, '1'),
(125, '13.2017.1.00619', '3.77', '1', '0', '0', 2, '1'),
(126, '13.2017.1.00635', '3.7', '1', '0', '0', 1, '1'),
(127, '13.2017.1.00643', '3.57', '0', '0', '0', 2, '1'),
(128, '13.2017.1.00653', '3.5', '0', '0', '0', 0, '1'),
(129, '13.2017.1.00544', '3.42', '1', '0', '1', 1, '2'),
(130, '13.2017.1.00546', '3.38', '0', '0', '0', 3, '2'),
(131, '13.2017.1.00562', '3.31', '1', '0', '1', 0, '2'),
(132, '13.2017.1.00563', '3.57', '1', '0', '2', 1, '2'),
(133, '13.2017.1.00564', '3.41', '1', '0', '1', 1, '2'),
(134, '13.2017.1.00566', '3.66', '1', '0', '2', 1, '2'),
(135, '13.2017.1.00567', '3.6', '1', '0', '1', 0, '2'),
(136, '13.2017.1.00568', '3.55', '1', '0', '0', 0, '2'),
(137, '13.2017.1.00579', '3.49', '1', '0', '0', 1, '2'),
(138, '13.2017.1.00581', '3.61', '1', '0', '0', 1, '2'),
(139, '13.2017.1.00593', '3.68', '1', '0', '2', 0, '2'),
(140, '13.2017.1.00595', '3.45', '0', '0', '2', 1, '2'),
(141, '13.2017.1.00599', '3.72', '1', '0', '1', 2, '2'),
(142, '13.2017.1.00601', '3.55', '0', '0', '1', 1, '2'),
(143, '13.2017.1.00647', '3.59', '0', '0', '0', 0, '2'),
(144, '13.2015.1.00450', '3.89', '0', '0', '0', 1, '1'),
(145, '13.2015.1.00474', '3.56', '0', '0', '0', 0, '1'),
(146, '13.2015.1.00451', '3.79', '0', '0', '0', 1, '1'),
(147, '13.2015.1.00460', '3.47', '0', '0', '0', 0, '1'),
(148, '13.2015.1.00463', '3.72', '0', '0', '0', 0, '1'),
(149, '13.2015.1.00466', '3.76', '0', '0', '0', 1, '1'),
(150, '13.2015.1.00469', '3.43', '0', '0', '0', 2, '1'),
(151, '13.2015.1.00472', '3.52', '0', '0', '0', 1, '1'),
(152, '13.2015.1.00473', '3.53', '0', '0', '0', 3, '1'),
(153, '13.2015.1.00482', '3.42', '0', '0', '0', 2, '1'),
(154, '13.2015.1.00452', '3.46', '1', '0', '1', 1, '2'),
(155, '13.2015.1.00458', '3.35', '0', '0', '2', 1, '2'),
(156, '13.2015.1.00459', '3.48', '0', '0', '1', 1, '2'),
(157, '13.2015.1.00461', '3.35', '0', '0', '1', 1, '2'),
(158, '13.2015.1.00462', '3.38', '0', '0', '0', 1, '2'),
(159, '13.2015.1.00465', '3.8', '0', '0', '1', 1, '2'),
(160, '13.2015.1.00477', '3.3', '0', '0', '1', 2, '2'),
(161, '13.2015.1.00478', '3.36', '0', '0', '1', 0, '2'),
(162, '13.2015.1.00479', '3.46', '1', '0', '1', 0, '2'),
(163, '13.2015.1.00481', '3.38', '1', '0', '1', 0, '2'),
(164, '13.2015.1.00453', '3.33', '1', '0', '2', 1, '2'),
(165, '13.2015.1.00464', '3.56', '1', '0', '2', 1, '2'),
(166, '13.2015.1.00476', '3.53', '1', '0', '0', 2, '2'),
(167, '13.2015.1.00483', '3.45', '1', '0', '1', 1, '2'),
(168, '13.2015.1.00449', '3.4', '1', '1', '1', 2, '2'),
(169, '13.2015.1.00456', '3.14', '0', '0', '1', 1, '2'),
(170, '13.2015.1.00454', '3.51', '1', '0', '4', 0, '2'),
(171, '13.2015.1.00475', '3.07', '1', '0', '2', 1, '2'),
(172, '13.2015.1.00487', '3.83', '1', '0', '3', 2, '2'),
(173, '13.2015.1.00457', '3.06', '1', '1', '6', 6, '2'),
(174, '13.2017.1.00543', '3.56', '0', '0', '1', 1, '2'),
(175, '13.2017.1.00558', '3.61', '0', '0', '1', 1, '2'),
(176, '13.2017.1.00565', '3.61', '0', '0', '1', 1, '2'),
(177, '13.2017.1.00613', '3368', '1', '0', '1', 1, '2'),
(178, '13.2017.1.00629', '3.27', '1', '0', '2', 1, '2'),
(179, '13.2017.1.00650', '3.3', '1', '0', '2', 2, '2'),
(180, '13.2014.1.00416', '3.45', '1', '0', '1', 1, '2'),
(181, '13.2014.1.00431', '3.52', '0', '0', '0', 0, '1'),
(182, '13.2014.1.00440 ', '3.33', '1', '0', '2', 1, '2'),
(183, '13.2016.1.90108', '3.55', '0', '0', '1', 0, '2'),
(184, '13.2014.1.00425', '3.62', '0', '0', '0', 2, '1'),
(185, '13.2014.1.00410', '3.71', '0', '0', '0', 1, '1'),
(186, '13.2016.1.90109', '3.2', '1', '0', '1', 1, '1'),
(187, '13.2014.1.00414', '3.42', '1', '0', '1', 2, '1'),
(188, '13.2014.1.00409', '3.14', '0', '0', '1', 0, '1'),
(189, '13.2016.1.90110', '3.6', '0', '0', '0', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `Nip` varchar(100) NOT NULL,
  `Id_jurusan` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Jenis_Kelamin` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `No_telp` varchar(18) NOT NULL,
  `id_login` int(11) NOT NULL,
  `Id_Matkul` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`Nip`, `Id_jurusan`, `Nama`, `Jenis_Kelamin`, `Alamat`, `No_telp`, `id_login`, `Id_Matkul`) VALUES
('03434', 1, 'Test', 'Pria', 'Testing', '', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `Id_Fakultas` int(11) NOT NULL,
  `Kode_Fakultas` varchar(6) NOT NULL,
  `Nama_Fakultas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`Id_Fakultas`, `Kode_Fakultas`, `Nama_Fakultas`) VALUES
(1, 'FTETI', 'FAKULTAS TEKNIK ELEKTRO DAN TEKNOLOGI INFORMASI'),
(2, 'FTIF', 'FAKULTAS TEKNIK ELEKTRO DAN TEKNOLOGI INFORMASI');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `Id_jurusan` int(11) NOT NULL,
  `Id_Fakultas` int(11) NOT NULL,
  `Nama_Jurusan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`Id_jurusan`, `Id_Fakultas`, `Nama_Jurusan`) VALUES
(1, 1, 'Sistem Informasi'),
(2, 1, 'Teknik Elektro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `Id_login` int(11) NOT NULL,
  `NPM` varchar(100) NOT NULL,
  `NIP` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`Id_login`, `NPM`, `NIP`, `Username`, `Password`, `Status`) VALUES
(3, '', '', 'phyranyansen', '$2y$10$9Av02H2zsERj/09hZVy7Q..7m3L2FkZw5o27oBiG3uVtG1/VcK3Ka', 1),
(4, '', '', 'OrieneSativa', '$2y$10$QKkcy3OoWl4Qr8oDKctiE.s8jButGeAb8VQIWkiWSZHCMllNsszea', 1),
(7, '', '', 'lukysechan', '$2y$10$wGCNPa58sjaYQYGj.aknMuoYrwQvYUwbE69dkA7ekRQ7wlWaGAu2q', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NPM` varchar(100) NOT NULL,
  `Id_jurusan` int(11) NOT NULL,
  `Id_login` int(11) NOT NULL,
  `Id_Matkul` int(11) NOT NULL,
  `Nama` varchar(150) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`NPM`, `Id_jurusan`, `Id_login`, `Id_Matkul`, `Nama`, `jenis_kelamin`, `Alamat`) VALUES
('13.2018.1.00668', 1, 0, 0, 'Test', 'Pria', 'Tes'),
('13.2018.1.00689', 1, 0, 0, '', '', ''),
('13.2018.1.00693', 1, 0, 0, '', '', ''),
('13.2018.1.00714', 1, 0, 0, '', '', ''),
('13.2018.1.00749', 1, 0, 0, '', '', ''),
('13.2018.1.00764', 1, 0, 0, '', '', ''),
('13.2018.1.00765', 1, 0, 0, '', '', ''),
('13.2019.1.90148', 1, 0, 0, '', '', ''),
('13.2019.1.90149', 1, 0, 0, '', '', ''),
('13.2019.1.90157', 1, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `Id_Matkul` int(11) NOT NULL,
  `Nama_Matkul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`Id_Matkul`, `Nama_Matkul`) VALUES
(2, 'testing1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `Id_Nilai` int(11) NOT NULL,
  `Id_Matkul` int(11) NOT NULL,
  `NIP` varchar(50) NOT NULL,
  `NPM` varchar(100) NOT NULL,
  `Nilai` varchar(50) NOT NULL,
  `Grade` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`Id_Nilai`, `Id_Matkul`, `NIP`, `NPM`, `Nilai`, `Grade`) VALUES
(2, 2, '03434', '13.2018.1.00668', '3.00', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `kode_report` varchar(10) NOT NULL,
  `nama_report` varchar(150) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `report`
--

INSERT INTO `report` (`id_report`, `kode_report`, `nama_report`, `keterangan`) VALUES
(1, 'RP_MHS', 'Laporan Mahasiswa', 'Laporan List Mahasiswa'),
(3, 'RP_KNN', 'Laporan Hasil Pengujian', 'Laporan Hasil Pengujian Metode KNN'),
(6, 'RP_DSN', 'Laporan Dosen', 'Laporan List Data Dosen'),
(7, 'RP_DTU', 'Laporan Data Uji', 'Laporan Data Uji');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_testing`
--
ALTER TABLE `data_testing`
  ADD PRIMARY KEY (`Id_testing`);

--
-- Indeks untuk tabel `data_training`
--
ALTER TABLE `data_training`
  ADD PRIMARY KEY (`Id_training`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`Nip`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`Id_Fakultas`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`Id_jurusan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id_login`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NPM`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`Id_Matkul`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id_Nilai`);

--
-- Indeks untuk tabel `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_testing`
--
ALTER TABLE `data_testing`
  MODIFY `Id_testing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=517;

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `Id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `Id_Fakultas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `Id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `Id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `Id_Matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id_Nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
