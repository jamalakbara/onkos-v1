-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2018 pada 13.23
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onkos_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `username` char(12) NOT NULL,
  `password` char(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenisKelamin` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `noId` char(16) NOT NULL,
  `alamat` text NOT NULL,
  `jenisAkun` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`username`, `password`, `nama`, `jenisKelamin`, `email`, `noId`, `alamat`, `jenisAkun`) VALUES
('balagendirsh', 'telkom', 'Keong Racun', 'Laki-Laki', 'Keong@gmail.com', '1301160000', 'kertosari', 'Penyewa'),
('jamalakbara', 'telkom', 'Jamal Akbar Alam', 'Laki-Laki', 'jamalakbara@student.telkomuniversity.ac.id', '1301160436', 'antapani', 'Pemilik Kos'),
('shafwany', 'ngantukberat', 'opan', 'Laki-Laki', 'opan@gmail.com', '1301164110', 'awawawawaw', 'Pemilik Kos'),
('tukinibojone', 'tunduh', 'Sanji', 'Laki-Laki', 'asdasdas@live.com', '1301164444', 'Jln.', 'Penyewa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kosan`
--

CREATE TABLE `kosan` (
  `idKosan` char(10) NOT NULL,
  `namaKosan` varchar(50) NOT NULL,
  `harga` float NOT NULL,
  `deskripsi` text NOT NULL,
  `fasKamar` text NOT NULL,
  `luasKamar` varchar(5) NOT NULL,
  `fasUmum` text NOT NULL,
  `parkir` text NOT NULL,
  `idIbuKos` char(16) NOT NULL,
  `alamatKosan` text NOT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kosan`
--

INSERT INTO `kosan` (`idKosan`, `namaKosan`, `harga`, `deskripsi`, `fasKamar`, `luasKamar`, `fasUmum`, `parkir`, `idIbuKos`, `alamatKosan`, `gambar`) VALUES
('BIOR-005', 'Biore Koz', 6500000, 'Kosan Murah tapi dilengkapi dengan sabun muka biore sehingga Koser tidak perlu beli biore lagi', 'Kasur, Lemari Pakaian, Sabun Muka Biore', '5x6', 'Kamar Mandi Luar', 'Motor', '1301160436', 'Jln. Pegangsaan Timur No.56', 'kos-biore.jpg'),
('BLGR-005', 'The Balagendir Kos', 7000000, 'Mirip dengan YokYow Kos karena satu management Kos ini sangat handal memuaskan Konsumen', 'Kasur, Lemari Pakaian', '3x4', 'Kamar Mandi Luar', 'Motor', '1301160436', 'Jln. Makan Konate, Manchester', 'kos-balagendir.jpg'),
('DRSR-005', 'Dressrosa Kos', 10000000, 'Menyajikan Kamar yang mirip dengan pulau Dresrossa di One Piece yang dirajai oleh Donquixote Doflamingo', 'Kasur, Lemari Pakaian, Kamar Mandi Dalam, Meja Belajar, Laptop', '5x6', 'Kamar Mandi Luar', 'Motor, Mobil, Helikopter Syahrini', '1301160436', 'Jln. Jalan Ma Pacar', 'kos-dresrosa.jpg'),
('TCOL-005', 'Too Cool Kos', 11000000, 'Dimiliki oleh salah satu artis terkenal, Kos ini pastinya menyediakan berbagai fasilitas menarik', 'Kasur , Lemari Pakaian, Kamar Mandi Dalam', '5x6', 'Kamar Mandi Luar, Ping Pong Field, GOR', 'Motor, Mobil', '1301160436', 'Jln. Tukul Arwana', 'kos-toocool.jpg'),
('WRNT-005', 'Warnet Kos', 11500000, 'Dilengkapi dengan fasilitas warnet yang ada di lingkungan kos, Warnet kos menjadi Kosan terhebat', 'Kasur , Lemari Pakaian, Kamar Mandi Dalam', '5x6', 'Kamar Mandi Luar, Warnet', 'Motor, Mobil', '1301160436', 'Jln. OP Warnet, Buenos Aires', 'kos-warnet.jpg'),
('YKYW-115', 'Yokyow Kos', 8000000, 'Berlokasi sangat strategis, dekat dengan mall kampus dan juga dengan pasar tradisional', 'Kasur, Lemari Pakaian, Kamar Mandi Dalam', '4x5', 'Kamar Mandi Luar', 'Mobil, Motor', '1301160436', 'Jln. Codeigniter ejet pisan ke tuls, California', 'kos-yokyow.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilikkos`
--

CREATE TABLE `pemilikkos` (
  `idIbuKos` char(16) NOT NULL,
  `namaIbuKos` varchar(50) NOT NULL,
  `alamatIbuKos` text NOT NULL,
  `phone` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilikkos`
--

INSERT INTO `pemilikkos` (`idIbuKos`, `namaIbuKos`, `alamatIbuKos`, `phone`) VALUES
('1301160000', 'Keong Racun', 'kertosari', NULL),
('1301160436', 'Jamal Akbar Alam', 'antapani', NULL),
('1301164110', 'opan', 'awawawawaw', NULL),
('1301164444', 'Sanji', 'Jln.', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `idPenyewa` char(16) NOT NULL,
  `namaPenyewa` int(50) NOT NULL,
  `noTelp` char(12) NOT NULL,
  `alamatPenyewa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`idKosan`);

--
-- Indexes for table `pemilikkos`
--
ALTER TABLE `pemilikkos`
  ADD PRIMARY KEY (`idIbuKos`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`idPenyewa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
