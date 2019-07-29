-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 Mei 2019 pada 01.28
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.0.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tutor_pdo`
--
CREATE DATABASE IF NOT EXISTS `db_tutor_pdo` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `db_tutor_pdo`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

DROP TABLE IF EXISTS `anggota`;
CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL COMMENT 'Berisikan ID Anggota terbuat secara otomatis',
  `nama_anggota` varchar(40) COLLATE latin1_general_ci NOT NULL COMMENT 'berisikan nama anggota',
  `jenis_kelamin` enum('Pria','Wanita') COLLATE latin1_general_ci DEFAULT NULL COMMENT 'berisikan jenis kelamin anggota'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci COMMENT='Tabel Tutor PDO' ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `jenis_kelamin`) VALUES
(1, 'Saya', 'Pria'),
(2, 'aku', 'Pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Berisikan ID Anggota terbuat secara otomatis', AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
