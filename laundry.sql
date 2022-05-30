-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2022 pada 13.36
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$UZNFbI4V.HI8zQFPRC6b8ukZVmflkYpy1HVAKBiwjTvPN73JTw8pS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga`
--

CREATE TABLE `harga` (
  `harga_per_kilo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `harga`
--

INSERT INTO `harga` (`harga_per_kilo`) VALUES
(12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakaian`
--

CREATE TABLE `pakaian` (
  `pakaian_id` int(11) NOT NULL,
  `pakaian_transaksi` varchar(100) NOT NULL,
  `pakaian_jenis` varchar(100) NOT NULL,
  `pakaian_jumlah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pakaian`
--

INSERT INTO `pakaian` (`pakaian_id`, `pakaian_transaksi`, `pakaian_jenis`, `pakaian_jumlah`) VALUES
(3, '1', 'baju', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `pelanggan_id` int(11) NOT NULL,
  `pelanggan_nama` varchar(100) NOT NULL,
  `pelanggan_hp` varchar(100) NOT NULL,
  `pelanggan_alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`pelanggan_id`, `pelanggan_nama`, `pelanggan_hp`, `pelanggan_alamat`) VALUES
(1, 'Pamungkass', '081746378432', 'Jakarta, Indonesia'),
(2, 'Neida Aledia', '081278476374', 'Bandung, Indonesia'),
(4, 'Eva Cellia', '081327678982', 'Jakarta Selatan, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(11) NOT NULL,
  `transaksi_tgl` date NOT NULL,
  `transaksi_pelanggan` int(11) NOT NULL,
  `transaksi_harga` int(11) NOT NULL,
  `transaksi_berat` int(11) NOT NULL,
  `transaksi_tgl_selesai` date NOT NULL,
  `transaksi_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `transaksi_tgl`, `transaksi_pelanggan`, `transaksi_harga`, `transaksi_berat`, `transaksi_tgl_selesai`, `transaksi_status`) VALUES
(1, '2022-05-30', 2, 20000, 2, '2022-06-01', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`pakaian_id`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`pelanggan_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `pakaian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `pelanggan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
