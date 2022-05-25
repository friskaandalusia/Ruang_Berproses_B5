-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2022 pada 15.58
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
-- Database: `db_rb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `layanan` varchar(255) NOT NULL,
  `isi_testi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testi`, `nama`, `layanan`, `isi_testi`) VALUES
(11, '-R.A.B (21 tahun, Mahasiswa psikologi)', 'Psytalk', '\"Pembicaranya asik dan moderatornya juga keren. Disetiap pembicara selesai menjawab pertanyaan peserta, moderator selalu menyimpulkan jawaban pembicara\"'),
(12, '-S.E.A (42 tahun, Konselor sekolah)', 'Kelas Berproses', '\"Kesan webinar sangat baik. Saya mendapat wawasan lebih luas dan mendalam mengenai journaling serta manfaatnya secara spesifik terhadap kesehatan mental, karena saya belum pernah mendalami mengenai journaling\"'),
(15, '-N', 'Counseling Profesional', '\"Menurutku gak terlalu mahal dan Psikolog RB yang konseling aku waktu itu juga baik & bisa menghangatkan suasana, ngga canggung juga, yang jelas aku bisa mengatasi masalahku.\"'),
(16, '-M', 'Support Group', '\"Seru bangetttt menjadi pengalaman dalam hidup saya karena dengan adanya sesi ini saya dapat bercerita apa yang dialami oleh saya sehingga saya mendapatkan kesempatan untuk bercerita pada sesi ini\"'),
(17, '-S', 'Peer Counseling', '\"Awalnya saya merasa takut dan ragu untuk bercerita pada orang lain. Namun setelah saya melakukan sesi konseling saya merasa lega, nyaman, dan seperti menemukan hal yang saya cari selama ini. Bukan sekedar omongan motivasi melainkan ilmu dan solusi.\"');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
