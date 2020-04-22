-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Apr 2020 pada 21.04
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040037`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id` int(11) NOT NULL,
  `Nama_Makanan` char(50) DEFAULT NULL,
  `Asal_Makanan` char(30) DEFAULT NULL,
  `Bahan_Makanan` char(90) DEFAULT NULL,
  `Jenis` char(30) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `Nama_Makanan`, `Asal_Makanan`, `Bahan_Makanan`, `Jenis`, `Harga`, `Gambar`) VALUES
(1, 'Es Krim', 'China', 'Susu, Gula, Telur, Vanili', 'Basah', 5000, 'eskrim.jpeg'),
(2, 'Bolu Kukus', 'Indonesia', 'Terigu, Gula Pasir, Susu', 'Kering', 2000, 'bolu.jpg'),
(3, 'Kol Goreng', 'Indonesia', 'Kol', 'Kering', 2000, 'kol.jpg'),
(4, 'Jus Alpukat', 'Meksiko', 'Alpukat, Air, Susu, Gula', 'Minuman', 10000, 'alpukat.jpg'),
(5, 'Susu', 'Eropa', 'Susu', 'Minuman', 5000, 'susu.jpg'),
(6, 'Nasi Goreng', 'Indonesia', 'Nasi, Kecap, Sosis, Baso, Ayam, Sayuran, Garam', 'Kering', 13000, 'nasi.jpg'),
(7, 'Yogurt', 'India', 'Susu, Bakteri Baik', 'Basah', 20, 'Yogurt'),
(8, 'Sambal', 'Indonesia', 'Cabe, Gula, Tomat, Garam', 'Basah', 2000, 'sambal.jpg'),
(9, 'Keju', 'Italia', 'Susu', 'Kering', 15, 'keju.jpg'),
(10, 'Kopi', 'Abbysinia', 'Biji Kopi', 'Minuman', 20000, 'kopi.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
