-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2019 pada 11.37
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catwash`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chatting`
--

CREATE TABLE `chatting` (
  `chat_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `pesan` text NOT NULL,
  `waktu` text NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chatting`
--

INSERT INTO `chatting` (`chat_id`, `user_id`, `pesan`, `waktu`, `status`) VALUES
(123, 123, 'asdasdasdsda', '11:36', '1'),
(123, 123, 'sdasadasdasd', '11:36', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `periode` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`email`, `password`, `nama`, `alamat`, `gender`, `tanggal_lahir`, `no_hp`, `periode`) VALUES
('adminku', 'ppppp', 'adminku', 'sdfsdfsdf', 'Wanita', '2019-09-11', 'e345345345', 0),
('email', 'password', 'nama', 'alamat', '', '0000-00-00', 'no_hp', 0),
('lulu@email.com', 'ppppp', 'Lulu Iwana', 'Jalan Merak', 'Wanita', '2000-09-03', '928372893', 0),
('lulukiw@gmail.com', 'an snas', 'jaksa', 'smanmsa', '', '2019-09-03', 'smasma', 0),
('saya', 'ppppp', 'lsal sajbs', 'sdbjhas sajdb', 'Pria', '2019-09-14', '93829832', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(5) NOT NULL,
  `estimasi` varchar(5) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`nama_paket`, `harga`, `estimasi`, `deskripsi`) VALUES
('Cuci Manual', 50000, '40', 'Mencuci kendaraan dengan menggunakan alat semprot air yang berkekuatan 1 PK, dengan tarif Rp 50 Ribu maka konsumen sudah mendapatkan pelayanan terbaik diantaranya mendapatkan Snow Wash, semir, vakum interior, dan juga dapat karpet kertas. '),
('Cuci Hidrolik', 100000, '30', 'Proses mencuci kendaraan menggunakan hidrolik. Ada hidrolik yang khusus untuk motor dan ada juga khusus untuk mobil, menggunakan alat hidrolik ini proses pencucian biasanya lebih cepat, karena petugasnyapun sangat terbantu dengan alat tersebut. Termasuk sudah difasilitasi seperti vakum Interior, semir ban dan cuci mesin. '),
('Mesin Otomatis', 160000, '20', 'Mencuci kendaraan menggunakan mesin otomatis bisa menjadi pilihan baru, seiring dengan perkembangan teknologi dibuatlah alat dengan sedemikian rupa sehingga bermanfaat, biasaya Konsumen akan mendapatkan perlindungan cat yang dilakukan secara manual oleh petugas, dan juga pembersihan interior vakum. '),
('Tenaga Robot', 250000, '10', 'Dalam proses cucian mobil menggunakan robot, si pemilik kendaraan tidak perlu keluar dari mobilnya, cukup di tutup rapat seluruh kaca mobil dan menunggu sampai bersih. Jika bagian dalam mobil ingin di bersihkan juga, maka pemilik kendaraan keluar dari mobilnya. Keunggulan mencuci pakai robot yaitu lebih cepat sehingga menghemat waktu . ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id_history` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `jenis_kendaraan` enum('Mobil','Motor') NOT NULL,
  `no_plat` char(10) NOT NULL,
  `waktu_datang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id_history`, `email`, `paket`, `jenis_kendaraan`, `no_plat`, `waktu_datang`) VALUES
(1, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:01:55'),
(2, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:05:03'),
(3, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:05:31'),
(4, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:12:51'),
(5, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:13:03'),
(6, 'lulu@email.com', 'Cuci Hidrolik', 'Mobil', 'js878', '2019-09-25 04:20:09'),
(7, 'lulukiw@gmail.com', 'Tenaga Robot', '', 'ds', '2019-09-25 04:22:30'),
(8, 'lulukiw@gmail.com', 'Tenaga Robot', '', 'ds', '2019-09-25 04:22:57'),
(9, 'lulu@email.com', 'Cuci Manual', '', 'k8867j', '2019-09-25 04:26:49'),
(10, 'email', 'Mesin otomatis', '', 'kj 98987 h', '2019-09-25 04:29:52'),
(11, 'lulu@email.com', 'Tenaga Robot', 'Motor', 'lkji 7867t', '2019-09-25 04:30:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_history`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_history` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
