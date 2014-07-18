-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 13 Des 2012 pada 11.06
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `tokoroti`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `blokir` enum('Y','N') NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`, `blokir`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Bung Koko', 'joko.purwanto18@gmail.com', '085268690818', 'admin', 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE IF NOT EXISTS `hubungi` (
  `id_hubungi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=33 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mod_bank`
--

CREATE TABLE IF NOT EXISTS `mod_bank` (
  `id_bank` int(5) NOT NULL AUTO_INCREMENT,
  `nama_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_bank`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `mod_bank`
--

INSERT INTO `mod_bank` (`id_bank`, `nama_bank`, `no_rekening`, `pemilik`, `gambar`) VALUES
(4, 'Mandiri', '1892334888', 'Basuki', 'mandiri.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id_orders` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kustomer` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `alamat` text COLLATE latin1_general_ci NOT NULL,
  `telpon` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status_order` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT 'Baru',
  `tgl_order` date NOT NULL,
  `jam_order` time NOT NULL,
  `id_kota` int(3) NOT NULL,
  PRIMARY KEY (`id_orders`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_orders`, `nama_kustomer`, `alamat`, `telpon`, `email`, `status_order`, `tgl_order`, `jam_order`, `id_kota`) VALUES
(48, 'Bung', 'Janti', '0899433499', 'eja@yahoo.co.id', 'Lunas/Terkirim', '2012-12-10', '21:24:49', 0),
(47, 'Joko ', 'Klaten ', '085268690818', 'joko.purwanto18@gmail.com', 'Lunas/Terkirim', '2012-12-06', '00:41:01', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE IF NOT EXISTS `orders_detail` (
  `id_orders` int(5) NOT NULL,
  `id_produk` int(5) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`) VALUES
(2, 16, 1),
(3, 17, 1),
(0, 56, 1),
(0, 58, 1),
(0, 60, 1),
(0, 50, 1),
(0, 51, 1),
(0, 55, 1),
(0, 61, 1),
(0, 58, 1),
(0, 60, 1),
(0, 56, 1),
(4, 44, 1),
(5, 53, 1),
(0, 58, 1),
(0, 47, 1),
(0, 58, 1),
(0, 61, 1),
(0, 58, 1),
(6, 61, 1),
(7, 58, 1),
(8, 43, 1),
(9, 58, 1),
(11, 43, 1),
(12, 44, 1),
(13, 43, 1),
(13, 58, 1),
(16, 58, 1),
(17, 50, 1),
(18, 45, 1),
(19, 41, 1),
(20, 59, 1),
(31, 58, 1),
(31, 42, 2),
(35, 59, 1),
(35, 54, 1),
(35, 61, 2),
(0, 54, 1),
(0, 59, 1),
(38, 54, 1),
(39, 59, 1),
(40, 61, 1),
(41, 54, 1),
(42, 54, 1),
(42, 55, 1),
(43, 61, 1),
(43, 58, 1),
(45, 87, 1),
(46, 92, 50),
(47, 98, 1),
(47, 109, 1),
(47, 106, 1),
(48, 108, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_temp`
--

CREATE TABLE IF NOT EXISTS `orders_temp` (
  `id_orders_temp` int(5) NOT NULL AUTO_INCREMENT,
  `id_produk` int(5) NOT NULL,
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `jumlah` int(5) NOT NULL,
  `tgl_order_temp` date NOT NULL,
  `jam_order_temp` time NOT NULL,
  `stok_temp` int(5) NOT NULL,
  PRIMARY KEY (`id_orders_temp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=252 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id_produk` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `produk_seo` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `dibeli` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_produk`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `produk_seo`, `deskripsi`, `harga`, `stok`, `tgl_masuk`, `gambar`, `dibeli`) VALUES
(105, 0, 'Pisang Keju', 'pisang-keju', '', 40000, 10, '2012-12-06', '12PISANG KEJU.png', 1),
(106, 0, 'Roti Gulung', 'roti-gulung', '', 30000, 9, '2012-12-06', '78roti gulung.png', 2),
(107, 0, 'Tart Black Forest Oven', 'tart-black-forest-oven', '', 38000, 10, '2012-12-06', '79tart black forest oven.png', 1),
(108, 0, 'Tart Pernikahan', 'tart-pernikahan', '', 300000, 5, '2012-12-06', '24tart pernikahan.png', 1),
(109, 0, 'Tart Black Forest', 'tart-black-forest', '', 225000, 4, '2012-12-06', '84tart Ultah.png', 2),
(93, 0, 'Bakpia Kacang Hijau', 'bakpia-kacang-hijau', '', 1500, 1000, '2012-12-06', '7bakpia kacang hijau.png', 1),
(94, 0, 'Brownies', 'brownies', '', 64000, 10, '2012-12-06', '2brownies.png', 1),
(95, 0, 'Cake Gula Palem', 'cake-gula-palem', '', 36000, 10, '2012-12-06', '33cake_gula.png', 1),
(96, 0, 'Cake Kombinasi', 'cake-kombinasi', '', 38000, 10, '2012-12-06', '10cake_kombinasi.png', 1),
(97, 0, 'Cake Marmer', 'cake-marmer', '', 30000, 10, '2012-12-06', '11cake_marmer.png', 1),
(98, 0, 'Cake Pandan', 'cake-pandan', '', 32000, 9, '2012-12-06', '27cake_pandan.png', 2),
(99, 0, 'Karamel', 'karamel', '', 36000, 10, '2012-12-06', '25karamel.png', 1),
(100, 0, 'Kenari Kismis', 'kenari-kismis', '', 36000, 10, '2012-12-06', '87kenari kismis.png', 1),
(101, 0, 'Krumpul 5 Rasa', 'krumpul-5-rasa', '', 15000, 10, '2012-12-06', '37krumpul 5 rasa.png', 1),
(102, 0, 'Krumpul 1 Rasa', 'krumpul-1-rasa', '', 20000, 10, '2012-12-06', '26Krupul 1 rasa.png', 1),
(103, 0, 'Mandarin Pelangi', 'mandarin-pelangi', '', 68000, 10, '2012-12-06', '16mandarin pelangi.png', 1),
(104, 0, 'Mandarin', 'mandarin', '', 51000, 10, '2012-12-06', '9mandarin.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('127.0.0.1', '2011-01-23', 406, '1295797934'),
('127.0.0.1', '2011-01-22', 199, '1295712739'),
('127.0.0.1', '2011-01-20', 18, '1295484485'),
('127.0.0.1', '2011-01-19', 10, '1295452438'),
('127.0.0.1', '2011-01-25', 2, '1295961873'),
('127.0.0.1', '2011-01-26', 4, '1296050267'),
('127.0.0.1', '2011-01-27', 7, '1296110326'),
('127.0.0.1', '2011-01-28', 7, '1296233314'),
('127.0.0.1', '2011-01-29', 574, '1296320383'),
('127.0.0.1', '2011-01-30', 290, '1296393287'),
('127.0.0.1', '2011-01-31', 133, '1296493024'),
('127.0.0.1', '2011-02-01', 79, '1296521132'),
('110.138.43.143', '2011-02-01', 31, '1296540211'),
('66.249.71.118', '2011-02-01', 1, '1296528448'),
('67.195.115.24', '2011-02-01', 6, '1296538036'),
('125.161.211.231', '2011-02-01', 1, '1296529398'),
('222.124.98.187', '2011-02-01', 3, '1296531520'),
('66.249.71.77', '2011-02-01', 1, '1296532249'),
('66.249.71.20', '2011-02-01', 1, '1296534199'),
('117.20.62.233', '2011-02-01', 13, '1296537677'),
('110.137.200.121', '2011-02-01', 24, '1296540049'),
('127.0.0.1', '2011-02-16', 179, '1297875502'),
('127.0.0.1', '2011-02-17', 301, '1297961988'),
('127.0.0.1', '2011-02-18', 54, '1297990124'),
('127.0.0.1', '2011-02-22', 118, '1298393910'),
('127.0.0.1', '2011-02-23', 77, '1298479971'),
('127.0.0.1', '2011-02-24', 1, '1298510525'),
('127.0.0.1', '2011-03-13', 225, '1300027455'),
('127.0.0.1', '2011-03-14', 44, '1300115678'),
('127.0.0.1', '2011-03-15', 121, '1300195187'),
('127.0.0.1', '2011-03-16', 116, '1300292361'),
('127.0.0.1', '2011-03-17', 4, '1300331607'),
('127.0.0.1', '2011-03-18', 52, '1300422211'),
('127.0.0.1', '2011-03-27', 75, '1301234016'),
('127.0.0.1', '2011-03-28', 16, '1301307056'),
('127.0.0.1', '2011-03-29', 77, '1301409884'),
('::1', '2012-11-23', 11, '1353669910'),
('::1', '2012-11-26', 9, '1353922295'),
('::1', '2012-11-29', 11, '1354201367');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password1` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktivasi` int(6) NOT NULL DEFAULT '0',
  `cek_aktivasi` int(6) NOT NULL DEFAULT '0',
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
