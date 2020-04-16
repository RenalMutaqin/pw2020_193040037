-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 08.02
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
  `id` char(30) NOT NULL,
  `Nama_Makanan` char(50) DEFAULT NULL,
  `Asal_Makanan` char(30) DEFAULT NULL,
  `Bahan_Makanan` char(90) DEFAULT NULL,
  `Jenis_Makanan` char(30) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  `Gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id`, `Nama_Makanan`, `Asal_Makanan`, `Bahan_Makanan`, `Jenis_Makanan`, `Harga`, `Gambar`) VALUES
('001', 'Bolu Kukus', 'Indonesia', 'Terigu, Gula Pasir, Susu', 'Kering', 2000, 'Bolu.jpg'),
('002', ' Kol Goreng', 'Indonesia', 'Kol', 'Kering', 2000, 'kol.jpg'),
('003', 'Susu', 'Eropa', 'Susu', 'Minuman', 5000, 'susu.jpg'),
('004', 'Nasi Goreng', 'Indonesia', 'Nasi, Kecap, Telur, Sosis/Baso, Sayuran, Garam', 'Kering', 15000, 'nasi.jpg'),
('005', 'Sambal', 'Indonesia', 'Tomat, Gula, Cabe, Garam', 'Basah', 2000, 'sambal.jpg'),
('006', 'Mie Aceh', 'Indonesia (Aceh)', 'Mie dan Bahan Lain', 'Basah & Berkuah', 15000, 'mie.jpg'),
('007', 'Lontong', 'Indonesia', 'Beras', 'Kering', 1000, 'lontong.jpg'),
('008', 'Pisang Aroma', 'Indonesia', 'Kulit Lumpia, Pisang, Gula', 'Kering', 1000, 'pisang.jpg'),
('009', 'Bakwan', 'Indonesia', 'Terigu, Sayuran, Garam', 'Kering', 1000, 'bakwan.jpg'),
('010', 'Bubur', 'Indonesia', 'Beras, Ayam, Kacang, Kari', 'Basah', 5000, 'bubur.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
