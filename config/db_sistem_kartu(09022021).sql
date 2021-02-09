-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Feb 2021 pada 09.31
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
  `id_usulan` int(10) NOT NULL,
  `nama_berkas` varchar(50) NOT NULL,
  `jenis_berkas` varchar(20) NOT NULL,
  `path` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ctln`
--

CREATE TABLE `ctln` (
  `id_ctln` int(10) NOT NULL,
  `id_usulan` int(10) NOT NULL,
  `alasan_cuti` varchar(100) NOT NULL,
  `alasan_perpanjangcuti` varchar(100) NOT NULL,
  `no_keputusan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `tempat_penetapan` date NOT NULL,
  `status_ctln` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `idcard`
--

CREATE TABLE `idcard` (
  `id_idcard` int(10) NOT NULL,
  `id_usulan` int(10) NOT NULL,
  `tempat_penetapan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_idcard` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karis`
--

CREATE TABLE `karis` (
  `id_karis` int(10) NOT NULL,
  `id_usulan` int(10) NOT NULL,
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
  `id_karpeg` int(10) NOT NULL,
  `id_usulan` int(10) NOT NULL,
  `no_karpeg` varchar(50) NOT NULL,
  `no_keputusan` varchar(50) NOT NULL,
  `tempat_penetapan` varchar(50) NOT NULL,
  `tgl_penetapan` date NOT NULL,
  `status_karpeg` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karsu`
--

CREATE TABLE `karsu` (
  `id_karsu` int(10) NOT NULL,
  `id_usulan` int(10) NOT NULL,
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
  `nip` varchar(20) NOT NULL,
  `nama_user` varchar(128) NOT NULL,
  `level` int(3) NOT NULL DEFAULT 1,
  `opd` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tmt_cpns` date DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  `eselon` varchar(3) DEFAULT NULL,
  `golongan_darah` varchar(3) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kontak` varchar(12) DEFAULT NULL,
  `password` text NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip`, `nama_user`, `level`, `opd`, `tempat_lahir`, `tgl_lahir`, `tmt_cpns`, `jabatan`, `eselon`, `golongan_darah`, `alamat`, `kontak`, `password`, `status`) VALUES
(1, '1234', 'Aprian Karisman', 1, 'BKPP Tangerang Selatan', 'kuningan', '2021-02-01', '2021-02-10', 'Pelaksana', '-', 'A', 'fgdg', '087858', '81dc9bdb52d04dc20036dbd8313ed055', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` int(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_usulan` varchar(20) NOT NULL,
  `tgl_usulan` date NOT NULL,
  `tgl_kirimusulan` date NOT NULL,
  `tgl_serahterima` date NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `ctln`
--
ALTER TABLE `ctln`
  ADD PRIMARY KEY (`id_ctln`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `idcard`
--
ALTER TABLE `idcard`
  ADD PRIMARY KEY (`id_idcard`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `karis`
--
ALTER TABLE `karis`
  ADD PRIMARY KEY (`id_karis`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  ADD PRIMARY KEY (`id_karpeg`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `karsu`
--
ALTER TABLE `karsu`
  ADD PRIMARY KEY (`id_karsu`),
  ADD KEY `id_usulan` (`id_usulan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ctln`
--
ALTER TABLE `ctln`
  MODIFY `id_ctln` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `idcard`
--
ALTER TABLE `idcard`
  MODIFY `id_idcard` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karis`
--
ALTER TABLE `karis`
  MODIFY `id_karis` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  MODIFY `id_karpeg` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `karsu`
--
ALTER TABLE `karsu`
  MODIFY `id_karsu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `usulan`
--
ALTER TABLE `usulan`
  MODIFY `id_usulan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD CONSTRAINT `berkas_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ctln`
--
ALTER TABLE `ctln`
  ADD CONSTRAINT `ctln_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `idcard`
--
ALTER TABLE `idcard`
  ADD CONSTRAINT `idcard_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karis`
--
ALTER TABLE `karis`
  ADD CONSTRAINT `karis_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karpeg`
--
ALTER TABLE `karpeg`
  ADD CONSTRAINT `karpeg_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `karsu`
--
ALTER TABLE `karsu`
  ADD CONSTRAINT `karsu_ibfk_1` FOREIGN KEY (`id_usulan`) REFERENCES `usulan` (`id_usulan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `usulan`
--
ALTER TABLE `usulan`
  ADD CONSTRAINT `usulan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
