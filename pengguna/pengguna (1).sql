-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2022 pada 12.47
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(20) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `username_pengguna` varchar(50) NOT NULL,
  `password_pengguna` varchar(255) NOT NULL,
  `email_pengguna` varchar(200) NOT NULL,
  `role` int(2) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `aktif` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username_pengguna`, `password_pengguna`, `email_pengguna`, `role`, `token`, `aktif`) VALUES
(1, 'Admin RB', 'adminrb', '$2y$10$sEW.YPGTTfbGHr16MXnOQO3Vqx8LcZ07lAIR35bw0KNy09COcjHZW', 'ruangberproses.id@gmail.com', 1, NULL, 0),
(4, 'Alifa Hafida', 'alifa', '$2y$10$Z1InWENZm27SfHkLXpJr5uYutLvBNarwC6xQtdvDOJm5XrQegwRpO', 'alifahafida@gmail.com', 1, NULL, 0),
(7, 'tes', 'anjayy', '$2y$10$4565rCFwLTDk4ZG9v2iOG.47eLOxKhSPE7olWQJKZ/aWAJTdXNPhq', 'tes@gmail.com', 0, NULL, 0),
(8, 'Friska Andalusia', 'friska', '$2y$10$VR1NZhbj6XYQ4aCXsOUC2OjYcN0kaQSDOR4x/JJxehuLLm4cR9Kyy', 'andalusialusy@gmail.com', 0, NULL, 0),
(10, 'Leni Suryani', 'leni', '$2y$10$Dzr5i.bTRuxyetJMFq53ou.sPdmIFL9oEc3Yq/REvpW0M4Lwe84k2', 'lenisur@gmail.com', 0, NULL, 0),
(11, 'Nurul Rahmawati', 'nurul', '$2y$10$RTTX8bCx4O6xSrTrAlq98.QKVJ4Und32SRYKssqmCZNr8.4ovTxie', 'nurulrahma@gmail.com', 0, NULL, 0),
(18, 'Syahnaz Loemongga Putri ', 'olgasyhnz', '$2y$10$.Vo9LHABOuf8ANOLRe0Y3ubkVZWpCrguB.0ZkRNeW8RxPTqj2BDQi', 'paneolga03@gmail.com', 0, NULL, 0),
(19, 'Friska Andalusia', 'friskalusy', '$2y$10$NrWoxxUNhtlff/eIJDAese2WHoU5zFQrOZrzmHStbxQpuoNDf3efa', 'friskalusy655@gmail.com', 0, NULL, 0),
(20, 'Putri Ainur Fitri', 'putriaf', '$2y$10$atbWtmdc0yJ9Fa6GqSUe/.D6uMmCn5P01hGqGQKhag9POkpWggoPa', 'putriainurf18@gmail.com', 0, NULL, 0),
(21, 'Eri Ita Agustina', 'erita', '$2y$10$8eXCTvJoYFWU17XSoUWs5e5kQKp2JUGOMVbm/1COv8MDNP7opZ0va', 'eritaa7@gmail.com', 0, NULL, 0),
(22, 'Kartika Diva', 'kardiv', '$2y$10$VsxN6LYi5vxtC5cZXGKzq.uKoW6JxO2xzl7KRxrWjOdGtPnlTHfUC', 'kartikadiv@gmail.com', 0, NULL, 0),
(23, 'LUSI SUMINAR', 'ucilusi', '$2y$10$p2iDCJgc0qQyotDFQhKiCuv7v4uoZGk5T4.oQvw5e7fIS2qnOXnVm', 'azalusi8@gmail.com', 0, NULL, 0),
(24, 'alifa', 'alifa123', '$2y$10$OGvxn9tpptlriWOnHvcUY.9mDQeVW6Ut6ccu7f.4aeyWX2xNRQB32', 'andalusialusy@gmail.com', 0, '', 0),
(25, 'dinda', 'dinda', '$2y$10$4NsfaWPQrAlLtdxbFAdtmOq0FEyo9.x.HgAQ58YUFLVp0DlbTAHo2', 'talitha@gmail.com', 0, '', 0),
(26, 'soleh', 'soleh', '$2y$10$ybyfZphgvFE2GNNzSho7T.rsbdBygH58JQGGqIv5AgY5MDxvewXE2', 'friskalusy655@gmail.com', 0, '', 0),
(27, 'adit', 'adit', '$2y$10$N6PMbzS0XSQS/Qqi54UgvOjfb1FepublP4F73MPGCc0b/6ESO3ge6', 'friskalusy@gmail.com', 0, '', 0),
(28, 'endah', 'endah', '$2y$10$LPe/OcOjTj.lVPCkvhDmz.ziRm4/CaFWH2xQ059gR1O1BR6SN8lHG', 'endah@gmail.com', 0, '', 0),
(29, 'rega', 'rega', '$2y$10$76EGgGFE.CLbvn/c7WuxCeh/AxM7qihfx3gl2zkTkh.wlyhrz0.BG', 'rega@gmail.com', 0, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
