-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Nov 2019 pada 08.03
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelita_resto`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(255) NOT NULL,
  `nm_makanan` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nm_makanan`, `jenis`, `harga`) VALUES
(2, 'French Fries', 'Western Food', 10000),
(4, 'Hot Risotto', 'Western Food', 50000),
(7, 'Nasi Megono', 'Indonesian Food', 9000),
(9, 'Pindang Tetel', 'Indonesian Food', 25000),
(12, 'Big Kebab', 'Arabian Food', 20000),
(14, 'Mutabaq', 'Arabian Food', 50000),
(15, 'Luqaimat', 'Arabian Food', 45000),
(16, 'Hummus', 'Arabian Food', 50000),
(17, 'Kushori', 'Arabian Food', 65000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `minuman`
--

CREATE TABLE `minuman` (
  `id_minuman` int(255) NOT NULL,
  `nm_minuman` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `jenis` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `harga` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `minuman`
--

INSERT INTO `minuman` (`id_minuman`, `nm_minuman`, `jenis`, `harga`) VALUES
(3, 'Wedang Bajigur', 'Indonesian Drinks', 18000),
(4, 'Wedang Ronde', 'Indonesian Drinks', 15000),
(6, 'Wedang Kamijoro', 'Indonesian Drinks', 7500),
(8, 'Chai Masala', 'Arabian Drinks', 10000),
(10, 'Kopi Arab', 'Arabian Drinks', 15000),
(11, 'Sahi Niknak', 'Arabian Drinks', 25000),
(13, 'Jus Jeruk', 'Western Drinks', 10000),
(14, 'Cranberry Juice', 'Western Drinks', 10000),
(16, 'Clamato Juice', 'Western Drinks', 50000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`);

--
-- Indeks untuk tabel `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_minuman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_minuman` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
