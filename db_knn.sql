-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Feb 2023 pada 18.51
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
(1124, '13.2019.1.00823', '3.7', '1', '0', '0', '1', ''),
(1125, '13.2019.1.00812', '3.69', '1', '0', '1', '3', ''),
(1126, '13.2019.1.00797', '3.6', '0', '0', '0', '1', ''),
(1127, '13.2019.1.00816', '3.6', '0', '0', '0', '2', ''),
(1128, '13.2019.1.00774', '3.75', '0', '0', '0', '2', ''),
(1129, '13.2019.1.00832', '3.29', '0', '0', '0', '1', ''),
(1130, '13.2019.1.00837', '3.02', '0', '0', '1', '0', ''),
(1131, '13.2019.1.00781', '3.61', '0', '0', '0', '0', ''),
(1133, '13.2019.1.00842', '3.64', '1', '0', '1', '3', ''),
(1147, '13.2019.1 00825', '3.16', '0', '0', '1', '1', '');

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
(1683, '13.2015.1.00450', '3.89', '0', '0', '0', 1, '1'),
(1684, '13.2015.1.00474', '3.56', '0', '0', '0', 0, '1'),
(1685, '13.2015.1.00451', '3.79', '0', '0', '0', 1, '1'),
(1686, '13.2015.1.00460', '3.47', '0', '0', '0', 0, '1'),
(1687, '13.2015.1.00463', '3.72', '0', '0', '0', 0, '1'),
(1688, '13.2015.1.00466', '3.76', '0', '0', '0', 1, '1'),
(1689, '13.2015.1.00469', '3.43', '0', '0', '0', 2, '1'),
(1690, '13.2015.1.00472', '3.52', '0', '0', '0', 1, '1'),
(1691, '13.2015.1.00473', '3.53', '0', '0', '0', 3, '1'),
(1692, '13.2015.1.00482', '3.42', '0', '0', '0', 2, '1'),
(1693, '13.2015.1.00452', '3.46', '1', '0', '1', 1, '2'),
(1694, '13.2015.1.00458', '3.35', '0', '0', '2', 1, '2'),
(1695, '13.2015.1.00459', '3.48', '0', '0', '1', 1, '2'),
(1696, '13.2015.1.00461', '3.35', '0', '0', '1', 1, '2'),
(1697, '13.2015.1.00462', '3.38', '0', '0', '0', 1, '2'),
(1698, '13.2015.1.00465', '3.8', '0', '0', '1', 1, '2'),
(1699, '13.2015.1.00477', '3.3', '0', '0', '1', 2, '2'),
(1700, '13.2015.1.00478', '3.36', '0', '0', '1', 0, '2'),
(1701, '13.2015.1.00479', '3.46', '1', '0', '1', 0, '2'),
(1702, '13.2015.1.00481', '3.38', '1', '0', '1', 0, '2'),
(1703, '13.2015.1.00453', '3.33', '1', '0', '2', 1, '2'),
(1704, '13.2015.1.00464', '3.56', '1', '0', '2', 1, '2'),
(1705, '13.2015.1.00476', '3.53', '1', '0', '0', 2, '2'),
(1706, '13.2015.1.00483', '3.45', '1', '0', '1', 1, '2'),
(1707, '13.2015.1.00449', '3.4', '1', '1', '1', 2, '2'),
(1708, '13.2015.1.00456', '3.14', '0', '0', '1', 1, '2'),
(1709, '13.2015.1.00454', '3.51', '1', '0', '4', 0, '2'),
(1710, '13.2015.1.00475', '3.07', '1', '0', '2', 1, '2'),
(1711, '13.2015.1.00487', '3.83', '1', '0', '3', 2, '2'),
(1712, '13.2015.1.00457', '3.06', '1', '1', '6', 6, '2'),
(1713, '13.2014.1.00408', '3.51', '0', '0', '1', 3, '2'),
(1714, '14.2016.1.00315', '3.34', '0', '0', '1', 2, '1'),
(1715, '13.2016.1.00488', '3.62', '0', '0', '0', 6, '1'),
(1716, '13.2016.1.00493', '3.71', '0', '0', '0', 1, '1'),
(1717, '13.2016.1.00494', '3.72', '0', '0', '0', 2, '1'),
(1718, '13.2016.1.00502', '3.55', '0', '0', '0', 1, '1'),
(1719, '13.2016.1.00503', '3.34', '1', '0', '1', 1, '1'),
(1720, '13.2016.1.00505', '3.55', '1', '0', '0', 1, '1'),
(1721, '13.2016.1.00506', '3.5', '0', '0', '0', 1, '1'),
(1722, '13.2016.1.00508', '3.45', '0', '0', '0', 1, '1'),
(1723, '13.2016.1.00514', '3.55', '0', '0', '0', 1, '1'),
(1724, '13.2016.1.00515', '3.59', '1', '0', '0', 1, '1'),
(1725, '13.2016.1.00519', '3.53', '0', '0', '0', 2, '1'),
(1726, '13.2016.1.00521', '3.44', '0', '0', '1', 0, '1'),
(1727, '13.2016.1.00523', '3.68', '0', '0', '0', 0, '1'),
(1728, '13.2016.1.00524', '3.52', '0', '0', '0', 1, '1'),
(1729, '13.2016.1.00528', '3.51', '1', '0', '0', 1, '1'),
(1730, '13.2016.1.00530', '3.32', '1', '1', '1', 0, '1'),
(1731, '13.2016.1.00496', '3.41', '1', '0', '2', 0, '2'),
(1732, '13.2016.1.00511', '3.73', '1', '0', '1', 1, '2'),
(1733, '13.2016.1.00498', '3.43', '1', '1', '1', 0, '2'),
(1734, '13.2016.1.00517', '3.29', '1', '0', '1', 0, '2'),
(1735, '13.2016.1.00522', '3.31', '1', '0', '1', 2, '2'),
(1736, '13.2016.1.00525', '3.28', '1', '1', '3', 4, '2'),
(1737, '13.2016.1.00489', '3.59', '1', '0', '3', 2, '2'),
(1738, '13.2016.1.00490', '3.12', '1', '0', '2', 0, '2'),
(1739, '13.2016.1.00491', '3.36', '1', '0', '2', 1, '2'),
(1740, '13.2016.1.00495', '3.66', '1', '1', '3', 0, '2'),
(1741, '13.2016.1.00509', '2.96', '1', '0', '3', 1, '2'),
(1742, '13.2016.1.00529', '3.35', '1', '0', '4', 1, '2'),
(1743, '13.2017.1.00532', '3.73', '1', '0', '0', 1, '1'),
(1744, '13.2017.1.00574', '3.65', '0', '0', '0', 1, '1'),
(1745, '13.2017.1.00594', '3.5', '0', '0', '0', 1, '1'),
(1746, '13.2017.1.00600', '3.73', '0', '0', '0', 1, '1'),
(1747, '13.2017.1.00605', '3.39', '0', '0', '0', 0, '1'),
(1748, '13.2017.1.00618', '3.51', '0', '0', '0', 2, '1'),
(1749, '13.2017.1.00619', '3.77', '1', '0', '0', 2, '1'),
(1750, '13.2017.1.00635', '3.7', '1', '0', '0', 1, '1'),
(1751, '13.2017.1.00643', '3.57', '0', '0', '0', 2, '1'),
(1752, '13.2017.1.00653', '3.5', '0', '0', '0', 0, '1'),
(1753, '13.2017.1.00544', '3.42', '1', '0', '1', 1, '2'),
(1754, '13.2017.1.00546', '3.38', '0', '0', '0', 3, '2'),
(1755, '13.2017.1.00562', '3.31', '1', '0', '1', 0, '2'),
(1756, '13.2017.1.00563', '3.57', '1', '0', '2', 1, '2'),
(1757, '13.2017.1.00564', '3.41', '1', '0', '1', 1, '2'),
(1758, '13.2017.1.00566', '3.66', '1', '0', '2', 1, '2'),
(1759, '13.2017.1.00567', '3.6', '1', '0', '1', 0, '2'),
(1760, '13.2017.1.00568', '3.55', '1', '0', '0', 0, '2'),
(1761, '13.2017.1.00579', '3.49', '1', '0', '0', 1, '2'),
(1762, '13.2017.1.00581', '3.61', '1', '0', '0', 1, '2'),
(1763, '13.2017.1.00593', '3.68', '1', '0', '2', 0, '2'),
(1764, '13.2017.1.00595', '3.45', '0', '0', '2', 1, '2'),
(1765, '13.2017.1.00599', '3.72', '1', '0', '1', 2, '2'),
(1766, '13.2017.1.00601', '3.55', '0', '0', '1', 1, '2'),
(1767, '13.2017.1.00647', '3.59', '0', '0', '0', 0, '2'),
(1768, '13.2017.1.00533', '3.62', '1', '0', '2', 0, '2'),
(1769, '13.2017.1.00535', '3.45', '1', '0', '1', 4, '2'),
(1770, '13.2017.1.00536', '3.5', '0', '0', '2', 0, '2'),
(1771, '13.2017.1.00539', '3.32', '1', '0', '0', 0, '2'),
(1772, '13.2017.1.00543', '3.56', '0', '0', '1', 1, '2'),
(1773, '13.2017.1.00549', '3.74', '1', '0', '1', 0, '2'),
(1774, '13.2017.1.00553', '3.24', '1', '0', '2', 0, '2'),
(1775, '13.2017.1.00554', '3.36', '1', '0', '3', 0, '2'),
(1776, '13.2017.1.00556', '3.03', '1', '1', '3', 0, '2'),
(1777, '13.2017.1.00557', '3.24', '1', '0', '1', 1, '2'),
(1778, '13.2017.1.00558', '3.61', '0', '0', '1', 1, '2'),
(1779, '13.2017.1.00565', '3.61', '0', '0', '1', 1, '2'),
(1780, '13.2017.1.00569', '3.78', '0', '0', '1', 1, '2'),
(1781, '13.2017.1.00572', '3.32', '1', '0', '1', 0, '2'),
(1782, '13.2017.1.00575', '3.42', '1', '0', '0', 0, '2'),
(1783, '13.2017.1.00576', '3.4', '1', '0', '0', 0, '2'),
(1784, '13.2017.1.00577', '3.31', '0', '0', '4', 2, '2'),
(1785, '13.2017.1.00580', '3.77', '1', '0', '0', 1, '2'),
(1786, '13.2017.1.00583', '3.48', '1', '0', '1', 2, '2'),
(1787, '13.2017.1.00586', '3.67', '1', '0', '1', 0, '2'),
(1788, '13.2017.1.00587', '3.51', '0', '0', '2', 1, '2'),
(1789, '13.2017.1.00588', '3.61', '1', '0', '2', 2, '2'),
(1790, '13.2017.1.00591', '3.08', '1', '1', '3', 0, '2'),
(1791, '13.2017.1.00602', '3.49', '1', '0', '1', 1, '2'),
(1792, '13.2017.1.00604', '3.24', '1', '0', '2', 0, '2'),
(1793, '13.2017.1.00610', '3.37', '1', '0', '2', 3, '2'),
(1794, '13.2017.1.00612', '3.28', '1', '0', '0', 0, '2'),
(1795, '13.2017.1.00613', '3.36', '1', '0', '1', 1, '2'),
(1796, '13.2017.1.00614', '3.41', '1', '0', '2', 1, '2'),
(1797, '13.2017.1.00615', '3.06', '1', '0', '1', 2, '2'),
(1798, '13.2017.1.00616', '3.37', '1', '0', '1', 0, '2'),
(1799, '13.2017.1.00617', '3.31', '0', '0', '0', 1, '2'),
(1800, '13.2017.1.00620', '3.7', '1', '0', '4', 0, '2'),
(1801, '13.2017.1.00626', '3.26', '1', '0', '2', 0, '2'),
(1802, '13.2017.1.00628', '3.21', '1', '1', '4', 1, '2'),
(1803, '13.2017.1.00629', '3.27', '1', '0', '2', 1, '2'),
(1804, '13.2017.1.00631', '3.44', '1', '0', '1', 0, '2'),
(1805, '13.2017.1.00632', '3.29', '0', '0', '3', 1, '2'),
(1806, '13.2017.1.00634', '3.13', '1', '0', '1', 2, '2'),
(1807, '13.2017.1.00638', '3.13', '0', '0', '1', 0, '2'),
(1808, '13.2017.1.00640', '3.37', '1', '0', '2', 0, '2'),
(1809, '13.2017.1.00642', '3.18', '1', '0', '3', 2, '2'),
(1810, '13.2017.1.00644', '2.67', '1', '1', '2', 10, '2'),
(1811, '13.2017.1.00649', '3.33', '0', '0', '2', 0, '2'),
(1812, '13.2017.1.00650', '3.3', '1', '0', '2', 2, '2'),
(1813, '13.2017.1.00651', '3.31', '1', '0', '1', 1, '2'),
(1814, '13.2017.1.00655', '3.28', '1', '0', '2', 0, '2'),
(1815, '13.2017.1.00656', '3.41', '1', '0', '1', 1, '2'),
(1816, '13.2017.1.00657', '3.19', '1', '1', '1', 1, '2'),
(1817, '13.2014.1.00416', '3.45', '1', '0', '1', 1, '2'),
(1818, '13.2014.1.00431', '3.52', '0', '0', '0', 0, '1'),
(1819, '13.2014.1.00440', '3.33', '1', '0', '2', 1, '2'),
(1820, '13.2016.1.90108', '3.55', '0', '0', '1', 0, '2'),
(1821, '13.2014.1.00425', '3.62', '0', '0', '0', 2, '1'),
(1822, '13.2014.1.00410', '3.71', '0', '0', '0', 1, '1'),
(1823, '13.2016.1.90109', '3.2', '1', '0', '1', 1, '1'),
(1824, '13.2014.1.00414', '3.42', '1', '0', '1', 2, '1'),
(1825, '13.2014.1.00409', '3.14', '0', '0', '1', 0, '1'),
(1826, '13.2016.1.90110', '3.6', '0', '0', '0', 1, '1');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `Id_Universitas` int(11) NOT NULL,
  `Nama_Universitas` varchar(150) NOT NULL,
  `Alias` varchar(150) NOT NULL,
  `Alamat` text NOT NULL,
  `Logo` text NOT NULL,
  `Telp` varchar(20) NOT NULL,
  `Kode_Pos` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`Id_Universitas`, `Nama_Universitas`, `Alias`, `Alamat`, `Logo`, `Telp`, `Kode_Pos`, `Email`) VALUES
(1, 'Institut Teknologi Adhi Tama Surabaya', 'ITATS', 'Jl. Arief Rahman Hakim No.100, Klampis Ngasem, Kec. Sukolilo, Kota SBY, Jawa Timur 60117', '', '(031) 5997244', '60117', '');

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
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`Id_Universitas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_testing`
--
ALTER TABLE `data_testing`
  MODIFY `Id_testing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1148;

--
-- AUTO_INCREMENT untuk tabel `data_training`
--
ALTER TABLE `data_training`
  MODIFY `Id_training` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1827;

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

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `Id_Universitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
