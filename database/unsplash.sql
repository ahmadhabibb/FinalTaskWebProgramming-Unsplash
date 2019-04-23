-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2019 pada 16.21
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unsplash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id_photo`, `first_name`, `last_name`, `keyword`, `photo`) VALUES
(48, 'Ahmad Habib', 'Fitriansyah', 'born', 'Born_to_be_a_Leader.jpg'),
(49, 'Ahmad Habib', 'Fitriansyah', 'a', 'Tes.jpg'),
(50, 'Ahmad Habib', 'Fitriansyah', 'sf', 'IMG_20151021_145548.jpg'),
(53, 'Ahmad Habib', 'Fitriansyah', 'haha', 'IMG-20170710-WA0038.jpg'),
(54, 'Ahmad Habib', 'Fitriansyah', 'septi', '10256840_397469217061515_6222734769038315488_o.jpg'),
(57, 'Ahmad Habib', 'Fitriansyah', 'study tour', 'IMG_20150503_141406.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `site` varchar(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `instagram` varchar(20) NOT NULL,
  `twitter` varchar(20) NOT NULL,
  `bio` varchar(50) NOT NULL,
  `interest` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `username`, `site`, `location`, `instagram`, `twitter`, `bio`, `interest`, `password`, `photo`) VALUES
(20, 'Ahmad Habib', 'Fitriansyah', 'id.ahmadhabib@gmail.com', 'ahmadhabib', 'http://ahmadhabib.com', 'Bandung', 'ahmadhabibb_', 'ahmadhabibb_', 'Hanya allah yang tau', 'wanita', 'pamungkas123', 'IMG_20150503_141406.jpg'),
(21, 'Bayu Tresna', 'Ariesta', 'bayutresna@gmail.com', 'bayutresna', '', '', '', '', '', '', '123456', 'Tes.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `photo`
--
ALTER TABLE `photo`
  MODIFY `id_photo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
