-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 01:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `judul` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `judul`) VALUES
(1, 'Nur Anisah', '200170015', 'Pengembangan jaringan perumahan.'),
(2, 'Erlina', '200111002', 'Analisis perbandingan framework CodeIgniter dan framework Laravel'),
(3, 'Marliani', '201529470', 'Pemberlakuan Sistem Filtering Terhadap Berita Hoax dengan Memakai Metode Berbasis Browser Extensions'),
(4, 'Muhammad Hilmi', '24017001', 'Perancangan dan Pemberlakuan Aplikasi Point of Sales dengan Memakai Metode Berbasis Jaringan Aplikasi Android.'),
(5, 'Falyathat Yunis', '24017002', 'Penyusunan dan Pembuatan Sistem Email Automation dengan Memanfaatkan Metode Berbasis PHP Sebagai Pengelolaan Pelanggan CV Kurnia Indah'),
(6, 'Fatahillah Akbar', '240170003', 'Analisa Penyusunan dan Implementasi Sistem Pengaduan dan Pelayanan Masyarakat dengan Teknologi Berbasis aplikasi Mobile');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
