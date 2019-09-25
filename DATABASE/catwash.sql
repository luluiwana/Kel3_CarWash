-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 05:13 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `gender` enum('Pria','Wanita') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `periode` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email`, `password`, `nama`, `alamat`, `gender`, `tanggal_lahir`, `no_hp`, `periode`) VALUES
('adminku', 'ppppp', 'adminku', 'sdfsdfsdf', 'Wanita', '2019-09-11', 'e345345345', 0),
('email', 'password', 'nama', 'alamat', '', '0000-00-00', 'no_hp', 0),
('lulu@email.com', 'ppppp', 'Lulu Iwana', 'Jalan Merak', 'Wanita', '2000-09-03', '928372893', 0),
('lulukiw@gmail.com', 'an snas', 'jaksa', 'smanmsa', '', '2019-09-03', 'smasma', 0),
('saya', 'ppppp', 'lsal sajbs', 'sdbjhas sajdb', 'Pria', '2019-09-14', '93829832', 0);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `nama_paket` varchar(100) NOT NULL,
  `harga` int(5) NOT NULL,
  `estmasi` varchar(5) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`nama_paket`, `harga`, `estmasi`, `deskripsi`) VALUES
('Cuci Manual', 50000, '40', 'Mencuci kendaraan dengan menggunakan alat semprot air yang berkekuatan 1 PK, dengan tarif Rp 50 Ribu maka konsumen sudah mendapatkan pelayanan terbaik diantaranya mendapatkan Snow Wash, semir, vakum interior, dan juga dapat karpet kertas. '),
('Cuci Hidrolik', 100000, '30', 'Proses mencuci kendaraan menggunakan hidrolik. Ada hidrolik yang khusus untuk motor dan ada juga khusus untuk mobil, menggunakan alat hidrolik ini proses pencucian biasanya lebih cepat, karena petugasnyapun sangat terbantu dengan alat tersebut. Termasuk sudah difasilitasi seperti vakum Interior, semir ban dan cuci mesin. '),
('Mesin Otomatis', 160000, '20', 'Mencuci kendaraan menggunakan mesin otomatis bisa menjadi pilihan baru, seiring dengan perkembangan teknologi dibuatlah alat dengan sedemikian rupa sehingga bermanfaat, biasaya Konsumen akan mendapatkan perlindungan cat yang dilakukan secara manual oleh petugas, dan juga pembersihan interior vakum. '),
('Tenaga Robot', 250000, '10', 'Dalam proses cucian mobil menggunakan robot, si pemilik kendaraan tidak perlu keluar dari mobilnya, cukup di tutup rapat seluruh kaca mobil dan menunggu sampai bersih. Jika bagian dalam mobil ingin di bersihkan juga, maka pemilik kendaraan keluar dari mobilnya. Keunggulan mencuci pakai robot yaitu lebih cepat sehingga menghemat waktu . ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
