-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 08.13
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

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
('202102010001', 44, 'surat pengantar', 'karpeg_baru', 'berkas_karpeg/suratpengantar202102010001.jpg', '2021-02-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karpeg`
--

CREATE TABLE `karpeg` (
  `id_karpeg` int(5) NOT NULL,
  `id_usulan` int(5) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `tmt_cpns` date NOT NULL,
  `no_karpeg` varchar(50) NOT NULL,
  `no_keputusan` varchar(50) NOT NULL,
  `tempat_penetapan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_karpeg` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karpeg`
--

INSERT INTO `karpeg` (`id_karpeg`, `id_usulan`, `kontak`, `tempat_lahir`, `tgllahir`, `tmt_cpns`, `no_karpeg`, `no_keputusan`, `tempat_penetapan`, `tgl_penetapan`, `status_karpeg`) VALUES
(1, 44, '0857668484', 'Tangerang', '1993-04-29', '2020-11-07', '', '', '', '0000-00-00', 0),
(2, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(3, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(4, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(5, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(6, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(7, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(8, 44, '', '', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', 0),
(9, 44, '0857668484', 'TANGERANG', '2021-02-17', '2021-02-26', '', '', '', '0000-00-00', 0),
(10, 44, '0857668484', 'TANGERANG', '2021-02-17', '2021-02-12', '', '', '', '0000-00-00', 0);

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
  `password` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `level`, `nip`, `opd`, `password`, `status`) VALUES
(1, 'Aprian', 1, '1234', 'BKPP Tangerang Selatan', '81dc9bdb52d04dc20036dbd8313ed055', 1);

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
(44, 1, 'karpeg_baru', '2021-01-29', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indeks untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  ADD PRIMARY KEY (`id_karpeg`);

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
-- AUTO_INCREMENT untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  MODIFY `id_karpeg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
