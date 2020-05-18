-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 08.01
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
-- Database: `pw_193040037`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` char(30) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` char(30) NOT NULL,
  `jurusan` char(30) NOT NULL,
  `gambar` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Renal Mutaqin', '193040037', 'renalmutaqin8@gmail.com', 'Teknik Informatika', 'renal.jpg'),
(2, 'Faujan Kamal', '193040031', 'faujan@gmail.com', 'Teknik Informatika', 'faujan.jpg'),
(3, 'Farhan', '193040017', 'farhan@gmail.com', 'Teknik Informatika', 'farhan@gmail.com'),
(4, 'Anya', '153040076', 'anya@gmail.com', 'Teknik Informatika', 'anya.jpg'),
(5, 'Cimoy Montok', '203040056', 'cimoy@gmail.com', 'Seni Tiktok', 'cimoy.jpg'),
(6, 'Bowo Alpenlibe', '203040057', 'bowo@gmail.com', 'Seni Tiktok', 'bowo.jpg'),
(7, 'Dadang Naser', '203040076', 'dadang@gmail.com', 'Ilmu Sosial', 'dadang@gmail.com'),
(8, 'Aji', '193040012', 'aji@gmail.com', 'Teknik Informatika', 'aji.jpg'),
(9, 'Kris', '193040007', 'kris@gmail.com', 'Teknik Informatika', 'kris.jpg'),
(10, 'Rendi', '194050067', 'rendi@gmail.com', 'Teknik Mesin', 'rendi.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
