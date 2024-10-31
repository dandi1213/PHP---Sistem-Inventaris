-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2023 pada 04.25
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inven`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(4) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `nama_barang`, `jumlah`) VALUES
(1, 'Mouse', '5'),
(2, 'Keyboard', '4'),
(3, 'laptop', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inventaris`
--

CREATE TABLE `tbl_inventaris` (
  `id_barang` int(11) NOT NULL,
  `kode_lab` int(11) NOT NULL,
  `kekurangan` int(11) NOT NULL,
  `kelayakan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_lab`
--

CREATE TABLE `tbl_lab` (
  `kode_lab` int(2) NOT NULL,
  `nama_lab` varchar(50) NOT NULL,
  `nip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_lab`
--

INSERT INTO `tbl_lab` (`kode_lab`, `nama_lab`, `nip`) VALUES
(80, 'Lab Mekanik', 888),
(90, 'Lab Informatika', 999);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `role` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`role`, `username`, `password`) VALUES
('mahasiswa', 'farhan', '222443011'),
('sekjur', 'dandi', '123'),
('mahasiswa', 'adam', '222443001'),
('admin', 'dandi', '123'),
('sekjur', 'tio', '456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `kelas` int(11) NOT NULL,
  `kode_lab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`nim`, `nama_mhs`, `kelas`, `kode_lab`) VALUES
(222443001, 'Adam Nibros', 3, 80),
(222443011, 'Moh Farhan Zaenuri', 2, 90);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pj_inventaris`
--

CREATE TABLE `tbl_pj_inventaris` (
  `nip` int(10) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `kode_lab` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pj_inventaris`
--

INSERT INTO `tbl_pj_inventaris` (`nip`, `nama_pj`, `kode_lab`) VALUES
(888, 'Hafiz', 80),
(999, 'Ihsan Kamaludin', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `kode_lab` (`kode_lab`);

--
-- Indexes for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD PRIMARY KEY (`kode_lab`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_lab` (`kode_lab`);

--
-- Indexes for table `tbl_pj_inventaris`
--
ALTER TABLE `tbl_pj_inventaris`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_lab`
--
ALTER TABLE `tbl_lab`
  MODIFY `kode_lab` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `tbl_pj_inventaris`
--
ALTER TABLE `tbl_pj_inventaris`
  MODIFY `nip` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD CONSTRAINT `tbl_inventaris_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbl_barang` (`id_barang`),
  ADD CONSTRAINT `tbl_inventaris_ibfk_2` FOREIGN KEY (`kode_lab`) REFERENCES `tbl_lab` (`kode_lab`);

--
-- Ketidakleluasaan untuk tabel `tbl_lab`
--
ALTER TABLE `tbl_lab`
  ADD CONSTRAINT `tbl_lab_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_pj_inventaris` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD CONSTRAINT `tbl_mahasiswa_ibfk_1` FOREIGN KEY (`kode_lab`) REFERENCES `tbl_lab` (`kode_lab`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
