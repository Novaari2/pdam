-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jul 2021 pada 16.22
-- Versi server: 5.7.24
-- Versi PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor_masyarakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `masyarakat`
--

CREATE TABLE `masyarakat` (
  `nik` varchar(16) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `masyarakat`
--

INSERT INTO `masyarakat` (`nik`, `nama`, `username`, `password`, `telp`) VALUES
('3374072012970004', 'Nova Ariyanto', 'nova', 'admin', '03839473'),
('34252525252', 'coba', 'coba', 'coba', '83739273645'),
('982398232', 'andre', 'andre', 'admin', '2827382739273');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_pendaftaran` date NOT NULL,
  `nik` varchar(25) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `jumlah_penghuni` varchar(100) NOT NULL,
  `jenis_bangunan` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `kk` varchar(200) NOT NULL,
  `status` enum('proses','ditanggapi','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_pendaftaran`, `nik`, `nama`, `alamat`, `pekerjaan`, `jumlah_penghuni`, `jenis_bangunan`, `foto`, `kk`, `status`) VALUES
(6, '2021-06-22', '3374072012970004', 'Nova Ariyanto', 'Semarang', 'Programmer', '3', 'Rumah Tangga', 'bumi.jpg', '', 'selesai'),
(7, '2021-07-01', '982398232', 'andre andre', 'Semarang', 'Barista', '5', 'Rumah Tangga', 'gundam.jpg', 'doraemon.jpg', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_pengaduan` int(11) NOT NULL,
  `tgl_pengaduan` date NOT NULL,
  `nik` varchar(20) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` enum('0','proses','selesai','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaduan`
--

INSERT INTO `pengaduan` (`id_pengaduan`, `tgl_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(4, '2021-06-22', '3374072012970004', 'kenapa lama sekali', '52.jpg', 'selesai'),
(5, '2021-06-27', '982398232', 'pipa rusak', 'bumi.jpg', 'selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `telp`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '4983848274', 'admin'),
(2, 'petugas', 'petugas', 'admin', '4983848274', 'petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_pengaduan` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tgl_tanggapan`, `tanggapan`, `id_petugas`) VALUES
(1, 4, '2021-06-22', 'pemasangan dilakukan pada hari kerja', 1),
(2, 5, '2021-06-27', 'oke segera diperbaiki', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan_pendaftaran`
--

CREATE TABLE `tanggapan_pendaftaran` (
  `id_tanggapan_pendaftaran` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_tanggapan` date NOT NULL,
  `tanggapan` text NOT NULL,
  `nama_petugas` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan_pendaftaran`
--

INSERT INTO `tanggapan_pendaftaran` (`id_tanggapan_pendaftaran`, `id_pendaftaran`, `tgl_tanggapan`, `tanggapan`, `nama_petugas`) VALUES
(6, 6, '2021-06-22', 'oke segera dilakukan pemasangan', 'admin'),
(7, 7, '2021-07-01', 'Segera Dilakukan Survey', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indeks untuk tabel `tanggapan_pendaftaran`
--
ALTER TABLE `tanggapan_pendaftaran`
  ADD PRIMARY KEY (`id_tanggapan_pendaftaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tanggapan_pendaftaran`
--
ALTER TABLE `tanggapan_pendaftaran`
  MODIFY `id_tanggapan_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
