-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2024 pada 12.56
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbberita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblberita`
--

CREATE TABLE `tblberita` (
  `idberita` varchar(20) NOT NULL,
  `idkategori` varchar(20) NOT NULL,
  `judulberita` varchar(20) NOT NULL,
  `isiberita` varchar(200) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tgldipublish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblberita`
--

INSERT INTO `tblberita` (`idberita`, `idkategori`, `judulberita`, `isiberita`, `penulis`, `tgldipublish`) VALUES
('B01', 'A01', 'Revolusi Mental', 'Buku ini mengangkat isu-isu sosial dan politik di Indonesia, dengan fokus pada perubahan mental dan budaya dalam menciptakan transformasi positif dalam masyarakat', 'Nadiem Makarim', '2024-05-19'),
('B02', 'A02', 'The Malay Archipelag', 'Buku klasik ini mengeksplorasi keanekaragaman budaya di wilayah Nusantara. Alfred Russel Wallace, seorang naturalis Inggris, memberikan gambaran tentang budaya-budaya yang berbeda di Indonesia dan sek', 'Alfred Russel Wallac', '2024-05-19'),
('B03', 'A03', 'Connectivity and Div', 'Buku ini mengulas tentang dampak teknologi digital terhadap sosial, budaya, dan ekonomi di Indonesia.', 'Edwin Jurriëns', '2024-05-19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblkategori`
--

CREATE TABLE `tblkategori` (
  `idkategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tblkategori`
--

INSERT INTO `tblkategori` (`idkategori`, `nama_kategori`) VALUES
('A01', 'SOSIAL'),
('A02', 'BUDAYA'),
('A03', 'TEKNOLOGI'),
('A04', 'NEGARA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tblberita`
--
ALTER TABLE `tblberita`
  ADD PRIMARY KEY (`idberita`),
  ADD UNIQUE KEY `idkategori` (`idkategori`);

--
-- Indeks untuk tabel `tblkategori`
--
ALTER TABLE `tblkategori`
  ADD PRIMARY KEY (`idkategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
