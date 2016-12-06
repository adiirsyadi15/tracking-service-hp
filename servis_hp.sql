-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Nov 2015 pada 02.46
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `servis_hp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(3, 'admin', 'admin'),
(4, 'adi', 'adi'),
(5, 'amikom', 'amikom'),
(6, 'pc', 'pc'),
(7, 'kontrakan', 'kontrakan'),
(9, 'logo', 'logo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_cs_seq`
--

CREATE TABLE IF NOT EXISTS `auto_cs_seq` (
`id_cs` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `auto_cs_seq`
--

INSERT INTO `auto_cs_seq` (`id_cs`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_customer_seq`
--

CREATE TABLE IF NOT EXISTS `auto_customer_seq` (
`id` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `auto_customer_seq`
--

INSERT INTO `auto_customer_seq` (`id`) VALUES
(11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_pelayanan_seq`
--

CREATE TABLE IF NOT EXISTS `auto_pelayanan_seq` (
`id_pelayanan` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `auto_pelayanan_seq`
--

INSERT INTO `auto_pelayanan_seq` (`id_pelayanan`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_sparepart_seq`
--

CREATE TABLE IF NOT EXISTS `auto_sparepart_seq` (
`id_sparepart` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `auto_sparepart_seq`
--

INSERT INTO `auto_sparepart_seq` (`id_sparepart`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auto_teknisi_seq`
--

CREATE TABLE IF NOT EXISTS `auto_teknisi_seq` (
`id_teknisi` int(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `auto_teknisi_seq`
--

INSERT INTO `auto_teknisi_seq` (`id_teknisi`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cusomer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` varchar(5) NOT NULL DEFAULT '0',
  `id_hp` char(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cusomer`
--

INSERT INTO `customer` (`id_customer`, `id_hp`, `nama`, `nomor_hp`) VALUES
('C0008', '319324242412524', 'adi', '084556667666'),
('C0010', '123141894271974', 'h', '009978656556'),
('C0011', '462624352626262', 'udin', '084444444444');

--
-- Trigger `cusomer`
--
DELIMITER //
CREATE TRIGGER `tg_customer_id` BEFORE INSERT ON `cusomer`
 FOR EACH ROW BEGIN
INSERT INTO auto_customer_seq VALUES (NULL);
SET NEW.id_customer = CONCAT('C', LPAD(LAST_INSERT_ID(), 4,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer_service`
--

CREATE TABLE IF NOT EXISTS `customer_service` (
  `id_cs` char(5) NOT NULL DEFAULT '0',
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nomor_hp` char(12) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer_service`
--

INSERT INTO `customer_service` (`id_cs`, `nama`, `alamat`, `jk`, `nomor_hp`, `status`) VALUES
('CS001', 'Jono', 'derepan', 'L', '084232323424', 'aktif'),
('CS002', 'Ulya', 'salaman, magelang', 'P', '087231111111', 'aktif'),
('CS003', 'Lilis', 'derepan, menoreh, salaman', 'P', '083444232323', 'aktif');

--
-- Trigger `customer_service`
--
DELIMITER //
CREATE TRIGGER `tg_cs_id` BEFORE INSERT ON `customer_service`
 FOR EACH ROW BEGIN
INSERT INTO auto_cs_seq VALUES (NULL);
SET NEW.id_cs = CONCAT('CS', LPAD(LAST_INSERT_ID(), 3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `deteail_pelayanan`
--

CREATE TABLE IF NOT EXISTS `detail_pelayanan` (
  `id_pelayanan` char(6) NOT NULL,
  `id_customer` char(5) NOT NULL,
  `id_sparepart` char(5) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hp`
--

CREATE TABLE IF NOT EXISTS `hp` (
  `imei` varchar(15) NOT NULL,
  `merek` varchar(15) NOT NULL,
  `tipe_hp` varchar(15) NOT NULL,
  `keterangan` text,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hp`
--

INSERT INTO `hp` (`imei`, `merek`, `tipe_hp`, `keterangan`, `status`) VALUES
('123141894271974', 'samsung', 'j1', 'layar blank', 'fix'),
('314515135151213', 'andromax', 'U2', 'rusak bagian sinyal', 'rusak'),
('314515135151313', 'sony', 'z3', 'rusak bagian batre', 'rusak'),
('319324242412524', 'snsv', 'zenfone 2', 'tidak ada sinyal', 'rusak'),
('462624352626262', 'ASUS', 'zenfone 5', 'tidak ada sinyal', 'rusak'),
('526246462352324', 'ASUS', 'zenfone 5', 'rusak bagian layar', 'rusak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelayanan`
--

CREATE TABLE IF NOT EXISTS `pelayanan` (
  `id_pelayanan` char(6) NOT NULL DEFAULT '0',
  `tanggal_masuk` date NOT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `id_cs` char(5) NOT NULL,
  `id_teknisi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `tanggal_masuk`, `tanggal_selesai`, `id_cs`, `id_teknisi`) VALUES
('P00002', '2015-11-26', NULL, 'CS001', '2'),
('P00003', '2015-11-26', NULL, 'CS002', 'TK001');

--
-- Trigger `pelayanan`
--
DELIMITER //
CREATE TRIGGER `tg_pelayanan_id` BEFORE INSERT ON `pelayanan`
 FOR EACH ROW BEGIN
INSERT INTO auto_pelayanan_seq VALUES (NULL);
SET NEW.id_pelayanan = CONCAT('P', LPAD(LAST_INSERT_ID(), 5,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sparepart`
--

CREATE TABLE IF NOT EXISTS `sparepart` (
  `id_sparepart` char(5) NOT NULL DEFAULT '0',
  `nama` varchar(10) NOT NULL,
  `seri` varchar(10) NOT NULL,
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sparepart`
--

INSERT INTO `sparepart` (`id_sparepart`, `nama`, `seri`, `harga`) VALUES
('Sp001', 'LCD', 'A2121', 400000),
('Sp002', 'LCDmito', 'Q2123', 400000),
('SP003', 'Touchscree', 'ewq2rd', 600000),
('SP004', 'Touchscree', 'AA533', 124111),
('SP005', 'Toucpad', '311A1', 30000);

--
-- Trigger `sparepart`
--
DELIMITER //
CREATE TRIGGER `tg_sparepart_seq` BEFORE INSERT ON `sparepart`
 FOR EACH ROW BEGIN
INSERT INTO auto_sparepart_seq VALUES (NULL);
SET NEW.id_sparepart = CONCAT('SP', LPAD(LAST_INSERT_ID(), 3,'0'));
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE IF NOT EXISTS `teknisi` (
  `id_teknisi` char(5) NOT NULL DEFAULT '0',
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `alamat`, `nomor_hp`, `status`) VALUES
('TK001', 'uli', 'sleman', '000002222223', 'aktif'),
('TK002', 'Adi', 'Derepan', '085666121111', 'aktif'),
('TK003', 'Ulum', 'derepan salaman', '08712000000', 'tidak aktif');

--
-- Trigger `teknisi`
--
DELIMITER //
CREATE TRIGGER `tg_teknisi` BEFORE INSERT ON `teknisi`
 FOR EACH ROW BEGIN
INSERT INTO auto_teknisi_seq VALUES (NULL);
SET NEW.id_teknisi = CONCAT('TK', LPAD(LAST_INSERT_ID(), 3,'0'));
END
//
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `auto_cs_seq`
--
ALTER TABLE `auto_cs_seq`
 ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `auto_customer_seq`
--
ALTER TABLE `auto_customer_seq`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_pelayanan_seq`
--
ALTER TABLE `auto_pelayanan_seq`
 ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `auto_sparepart_seq`
--
ALTER TABLE `auto_sparepart_seq`
 ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `auto_teknisi_seq`
--
ALTER TABLE `auto_teknisi_seq`
 ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `cusomer`
--
ALTER TABLE `cusomer`
 ADD PRIMARY KEY (`id_customer`), ADD UNIQUE KEY `id_hp` (`id_hp`);

--
-- Indexes for table `customer_service`
--
ALTER TABLE `customer_service`
 ADD PRIMARY KEY (`id_cs`), ADD FULLTEXT KEY `jk` (`jk`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
 ADD PRIMARY KEY (`imei`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
 ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `sparepart`
--
ALTER TABLE `sparepart`
 ADD PRIMARY KEY (`id_sparepart`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
 ADD PRIMARY KEY (`id_teknisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `auto_cs_seq`
--
ALTER TABLE `auto_cs_seq`
MODIFY `id_cs` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `auto_customer_seq`
--
ALTER TABLE `auto_customer_seq`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `auto_pelayanan_seq`
--
ALTER TABLE `auto_pelayanan_seq`
MODIFY `id_pelayanan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `auto_sparepart_seq`
--
ALTER TABLE `auto_sparepart_seq`
MODIFY `id_sparepart` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `auto_teknisi_seq`
--
ALTER TABLE `auto_teknisi_seq`
MODIFY `id_teknisi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
