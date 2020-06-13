-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2019 pada 09.33
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hutang`
--

CREATE TABLE `hutang` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `hp` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hutang`
--

INSERT INTO `hutang` (`id`, `nama`, `jumlah`, `hp`) VALUES
(5, 'Andi', '50000', '321312'),
(6, 'Andi 2', '50000', '0851029123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nohp` varchar(256) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `userdata`
--

INSERT INTO `userdata` (`id`, `nama`, `email`, `password`, `nohp`, `status`) VALUES
(1, 'Anggi Dwi Putra', 'admin@panel.com', 'Cacad556', '089651848575', 1),
(2, 'Anggi Dwi Putra', 'mediatek567@gmail.com', 'Cacad556', '0896-5184-8575', 0),
(3, 'Anggi Dwi Putra', 'tampanmenawan22@gmail.com', 'Cacad556', '0896-5184-8572', 0),
(4, 'Anggi Dwi Putra', 'aryanif773@gmail.com', 'Cacad556', '0896-5184-8571', 0),
(5, 'Anggi Dwi Putra', 'aryanif@gmil.com', 'yayaya', '0896-5184-8570', 0),
(6, 'Anggi Dwi Putra', 'ndaru@gmail.com', 'Cacad556', '12312331232', 0),
(7, 'Anggi Dwi Putra', 'yas@mail.com', 'Cacad556', '39219321321', 0),
(8, 'Anggi Dwi Putra', '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hutang`
--
ALTER TABLE `hutang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hutang`
--
ALTER TABLE `hutang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
