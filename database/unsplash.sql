-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2019 pada 17.42
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
  `username` varchar(255) NOT NULL,
  `keyword` varchar(20) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `photoUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `photo`
--

INSERT INTO `photo` (`id_photo`, `first_name`, `last_name`, `username`, `keyword`, `photo`, `photoUser`) VALUES
(99, 'Ahmad Habib', 'Fitriansyah', 'ahmadhabib', 'flower', 'IMG_0023.JPG', 'IMG_20150503_141406.jpg'),
(100, 'Ahmad Habib', 'Fitriansyah', 'ahmadhabib', 'beach', 'IMG_20170312_120147_HDR.jpg', 'IMG_20150503_141406.jpg'),
(101, 'Ahmad Habib', 'Fitriansyah', 'ahmadhabib', 'flower', 'IMG_0142.JPG', 'IMG_20150503_141406.jpg'),
(102, 'Ahmad Habib', 'Fitriansyah', 'ahmadhabib', 'forest', 'IMG_20170521_101605.jpg', 'IMG_20150503_141406.jpg'),
(103, 'Bayu Tresna', 'Ariesta', 'bayutresna', 'mountain', 'hugues-de-buyer-mimeure-335733.jpg', 'Tes.jpg'),
(104, 'Bayu Tresna', 'Ariesta', 'bayutresna', 'mist', 'rucksack-magazine-315961.jpg', 'Tes.jpg'),
(105, 'Savira', 'Agustin', 'savidut', 'leaf', 'jessie-bell-16912.jpg', 'IMG00672-20110531-1233.jpg'),
(106, 'Savira', 'Agustin', 'savidut', 'glass', 'glass_neon_light_117456_1920x1080.jpg', 'IMG00672-20110531-1233.jpg'),
(107, 'Savira', 'Agustin', 'savidut', 'mist', 'zoltan-kovacs-282195.jpg', 'IMG00672-20110531-1233.jpg'),
(108, 'Rifki', 'Rizaldi', 'mew', 'binary code', 'binary-code-9004-1366x768.jpg', 'Cyber_Project.jpg'),
(109, 'Rifki', 'Rizaldi', 'mew', 'triagle', 'triangle_background_dark_spots_88544_1920x1080.jpg', 'Cyber_Project.jpg');

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
(21, 'Bayu Tresna', 'Ariesta', 'bayutresna@gmail.com', 'bayutresna', '', '', '', '', '', '', '123456', 'Tes.jpg'),
(22, 'Rizka Vio', 'Sudiro', 'rizkavio21@gmail.com', 'rizkavio', 'viosudiro.wordpress.com', 'Lampung', 'rizkavioo', 'rizkavioo', 'Tidak ada yg bego, adanya goblok', 'reading', '123456', '189.JPG'),
(23, 'Savira', 'Agustin', 'savidut@gmail.com', 'savidut', '', '', '', '', '', '', '123456', 'IMG00672-20110531-1233.jpg'),
(24, 'Rifki', 'Rizaldi', 'mew@gmail.com', 'mew', 'http://ahmadhabib.com', 'Bandung', 'rfkirs', 'rfkirs', 'Tiada tuhan selain Allah', 'women', '123456', 'Cyber_Project.jpg');

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
  MODIFY `id_photo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
