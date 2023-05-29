-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2023 pada 11.54
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kurban`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurban`
--

CREATE TABLE `tb_kurban` (
  `id_kurban` int(11) NOT NULL,
  `kurban_id_pengkurban` int(11) NOT NULL,
  `jenis_kurban` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kurban`
--

INSERT INTO `tb_kurban` (`id_kurban`, `kurban_id_pengkurban`, `jenis_kurban`, `jenis_pembayaran`) VALUES
(1, 1, 'Sapi', 'Perminggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelaksanaan`
--

CREATE TABLE `tb_pelaksanaan` (
  `id_pelaksanaan` int(11) NOT NULL,
  `pelaksanaan_id_kurban` int(11) NOT NULL,
  `pembayaran` varchar(100) NOT NULL,
  `tgl_pelaksanaan` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelaksanaan`
--

INSERT INTO `tb_pelaksanaan` (`id_pelaksanaan`, `pelaksanaan_id_kurban`, `pembayaran`, `tgl_pelaksanaan`) VALUES
(1, 1, 'Lunas', '2023-06-28 16:53:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pengkurban`
--

CREATE TABLE `tb_pengkurban` (
  `id_pengkurban` int(11) NOT NULL,
  `nama_pengkurban` varchar(100) NOT NULL,
  `alamat_pengkurban` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pengkurban`
--

INSERT INTO `tb_pengkurban` (`id_pengkurban`, `nama_pengkurban`, `alamat_pengkurban`) VALUES
(1, 'Putrawan', 'Jln. Yos Sudarso LK I');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kurban`
--
ALTER TABLE `tb_kurban`
  ADD PRIMARY KEY (`id_kurban`),
  ADD KEY `kurban_id_pengkurban` (`kurban_id_pengkurban`);

--
-- Indeks untuk tabel `tb_pelaksanaan`
--
ALTER TABLE `tb_pelaksanaan`
  ADD PRIMARY KEY (`id_pelaksanaan`),
  ADD KEY `pelaksanaan_id_kurban` (`pelaksanaan_id_kurban`);

--
-- Indeks untuk tabel `tb_pengkurban`
--
ALTER TABLE `tb_pengkurban`
  ADD PRIMARY KEY (`id_pengkurban`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kurban`
--
ALTER TABLE `tb_kurban`
  MODIFY `id_kurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pelaksanaan`
--
ALTER TABLE `tb_pelaksanaan`
  MODIFY `id_pelaksanaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pengkurban`
--
ALTER TABLE `tb_pengkurban`
  MODIFY `id_pengkurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kurban`
--
ALTER TABLE `tb_kurban`
  ADD CONSTRAINT `tb_kurban_ibfk_1` FOREIGN KEY (`kurban_id_pengkurban`) REFERENCES `tb_pengkurban` (`id_pengkurban`);

--
-- Ketidakleluasaan untuk tabel `tb_pelaksanaan`
--
ALTER TABLE `tb_pelaksanaan`
  ADD CONSTRAINT `tb_pelaksanaan_ibfk_1` FOREIGN KEY (`pelaksanaan_id_kurban`) REFERENCES `tb_kurban` (`id_kurban`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
