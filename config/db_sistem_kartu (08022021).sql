-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2021 pada 10.14
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem_kartu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas` varchar(50) NOT NULL,
  `id_usulan` int(5) NOT NULL,
  `nama_berkas` varchar(50) NOT NULL,
  `jenis_berkas` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id_berkas`, `id_usulan`, `nama_berkas`, `jenis_berkas`, `path`, `tgl_upload`) VALUES
('202102040000', 47, 'surat pengantar', 'karpeg_baru', 'berkas_karpeg/suratpengantar202102040000.pdf', '2021-02-04'),
('202102040001', 47, 'SK CPNS', 'karpeg_baru', 'berkas_karpeg/skcpns202102040001.pdf', '2021-02-04'),
('202102040002', 47, 'SK PNS', 'karpeg_baru', 'berkas_karpeg/skpns202102040002.pdf', '2021-02-04'),
('202102040003', 47, 'STTPP', 'karpeg_baru', 'berkas_karpeg/sttpp202102040003.pdf', '2021-02-04'),
('202102040004', 47, 'FOTO', 'karpeg_baru', 'berkas_karpeg/foto202102040004.jpg', '2021-02-04'),
('202102080000', 51, 'surat pengantar', 'karpeg_pengganti', 'berkas_karpeg/suratpengantar202102080000.pdf', '2021-02-08'),
('202102080001', 51, 'SK CPNS', 'karpeg_pengganti', 'berkas_karpeg/skcpns202102080001.pdf', '2021-02-08'),
('202102080002', 51, 'SK PNS', 'karpeg_pengganti', 'berkas_karpeg/skpns202102080002.pdf', '2021-02-08'),
('202102080003', 51, 'STTPP', 'karpeg_pengganti', 'berkas_karpeg/sttpp202102080003.pdf', '2021-02-08'),
('202102080004', 51, 'FOTO', 'karpeg_pengganti', 'berkas_karpeg/foto202102080004.jpg', '2021-02-08'),
('202102080005', 51, 'Lampiran X', 'karpeg_pengganti', 'berkas_karpeg/lampiranx202102080005.pdf', '2021-02-08'),
('202102080006', 51, 'Lampiran XI', 'karpeg_pengganti', 'berkas_karpeg/lampiranxi202102080006.pdf', '2021-02-08'),
('202102080007', 51, 'Surat Kehilangan', 'karpeg_pengganti', 'berkas_karpeg/kehilangan202102080007.pdf', '2021-02-08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karis`
--

CREATE TABLE `karis` (
  `id_karis` int(5) NOT NULL,
  `id_usulan` varchar(5) NOT NULL,
  `nama_istri` varchar(50) NOT NULL,
  `no_karis` varchar(50) NOT NULL,
  `tempat_penetapan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_karis` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karpeg`
--

CREATE TABLE `karpeg` (
  `id_karpeg` int(5) NOT NULL,
  `id_usulan` int(5) NOT NULL,
  `no_karpeg` varchar(50) NOT NULL,
  `no_keputusan` varchar(50) NOT NULL,
  `tempat_penetapan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_karpeg` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karpeg`
--

INSERT INTO `karpeg` (`id_karpeg`, `id_usulan`, `no_karpeg`, `no_keputusan`, `tempat_penetapan`, `tgl_penetapan`, `status_karpeg`) VALUES
(14, 47, '', '', '', '0000-00-00', 0),
(18, 51, '', '', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karsu`
--

CREATE TABLE `karsu` (
  `id_karsu` int(5) NOT NULL,
  `id_usulan` int(5) NOT NULL,
  `nama_suami` varchar(50) NOT NULL,
  `no_karsu` varchar(50) NOT NULL,
  `tempat_penetapan` date NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_karsu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `level` int(3) NOT NULL DEFAULT 1,
  `nip` varchar(20) NOT NULL,
  `opd` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `kontak` varchar(12) DEFAULT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `level`, `nip`, `opd`, `tempat_lahir`, `tgl_lahir`, `tmt_cpns`, `kontak`, `password`, `status`) VALUES
(1, 'Aprian', 1, '1234', 'BKPP Tangerang Selatan', 'kuningan', '2021-02-06', '2021-02-07', '087858', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int(10) NOT NULL,
  `id_user` int(20) NOT NULL,
  `jenis_usulan` varchar(20) NOT NULL,
  `tgl_usulan` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id_usulan`, `id_user`, `jenis_usulan`, `tgl_usulan`, `status`) VALUES
(47, 1, 'karpeg_baru', '2021-02-04', 3),
(51, 1, 'karpeg_pengganti', '2021-02-04', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `karis`
--
ALTER TABLE `karis`
  ADD PRIMARY KEY (`id_karis`);

--
-- Indeks untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  ADD PRIMARY KEY (`id_karpeg`);

--
-- Indeks untuk tabel `karsu`
--
ALTER TABLE `karsu`
  ADD PRIMARY KEY (`id_karsu`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`nip`);

--
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `karis`
--
ALTER TABLE `karis`
  MODIFY `id_karis` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  MODIFY `id_karpeg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `karsu`
--
ALTER TABLE `karsu`
  MODIFY `id_karsu` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
