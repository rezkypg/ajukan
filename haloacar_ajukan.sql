-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2017 at 12:54 AM
-- Server version: 10.0.30-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `haloacar_ajukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `dekorasi`
--

CREATE TABLE IF NOT EXISTS `dekorasi` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `id_jenis_dekorasi` int(255) unsigned NOT NULL,
  `jenis_acara` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `lama_pengerjaan` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desain` varchar(255) NOT NULL,
  `lokasi` varchar(7) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`,`id_jenis_dekorasi`),
  KEY `id_pesanan` (`id_pesanan`),
  KEY `id_jenis_dekorasi` (`id_jenis_dekorasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dekorasi`
--

INSERT INTO `dekorasi` (`id_pesanan`, `id_jenis_dekorasi`, `jenis_acara`, `jumlah`, `lama_pengerjaan`, `budget`, `keterangan`, `desain`, `lokasi`) VALUES
(2, 0, '-', 0, 0, 0, '-', '-', '0'),
(3, 0, '-', 0, 0, 0, '-', '-', '0'),
(42, 0, '-', 0, 0, 0, '-', '', '0'),
(46, 0, '-', 0, 0, 0, '-', '', '0'),
(47, 0, '-', 0, 0, 0, '-', '', '0'),
(54, 0, '-', 0, 0, 0, '-', '', '0'),
(55, 0, '-', 0, 0, 0, '-', '', '0'),
(56, 0, '-', 0, 0, 0, '-', '', '0'),
(59, 0, '-', 0, 0, 0, '-', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `detail_acara`
--

CREATE TABLE IF NOT EXISTS `detail_acara` (
  `id_pengaju` int(255) unsigned NOT NULL,
  `tema` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `budget` int(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  KEY `id_pengaju` (`id_pengaju`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_acara`
--

INSERT INTO `detail_acara` (`id_pengaju`, `tema`, `jenis`, `budget`, `deskripsi`) VALUES
(2, '-', 'Gathering dan Inaugurasi', 120, 'Acara berkumpul dan peresmian pengurus baru Klub Peminatan Fakultas Psikologi UI'),
(3, 'Ultah', 'Ultah', 100000, 'Acara'),
(4, 'Kontz', 'Kontz', 1111111, 'ajah'),
(6, 'Kontz', 'Kontz', 1111111, 'ajah'),
(11, 'klent', 'klent', 1000000, 'jembat'),
(12, 'klent', 'klent', 1000000, 'jembat'),
(13, 'klent', 'klent', 1000000, 'jembat'),
(14, 'klent', 'klent', 1000000, 'jembat'),
(15, 'klent', 'klent', 1000000, 'jembat'),
(16, 'klent', 'klent', 1000000, 'jembat'),
(17, 'klent', 'klent', 1000000, 'jembat'),
(18, 'klent', 'klent', 1000000, 'jembat'),
(19, 'klent', 'klent', 1000000, 'jembat'),
(20, 'klent', 'klent', 1000000, 'jembat'),
(21, 'klent', 'klent', 1000000, 'jembat'),
(22, 'klent', 'klent', 1000000, 'jembat'),
(23, 'klent', 'klent', 1000000, 'jembat'),
(24, 'klent', 'klent', 1000000, 'jembat'),
(25, 'klent', 'klent', 1000000, 'jembat'),
(26, 'klent', 'klent', 1000000, 'jembat'),
(27, 'klent', 'klent', 1000000, 'jembat'),
(28, 'klent', 'klont', 19292929, 'Susu'),
(29, 'klent', 'klont', 19292929, 'Susu'),
(30, 'klent', 'klont', 19292929, 'Susu'),
(31, 'klent', 'klont', 19292929, 'Susu'),
(32, 'klent', 'klont', 19292929, 'Susu'),
(33, 'klent', 'klont', 19292929, 'Susu'),
(34, 'klent', 'klont', 19292929, 'Susu'),
(35, 'klent', 'klont', 19292929, 'Susu'),
(36, 'klent', 'klont', 19292929, 'Susu'),
(37, 'klent', 'klont', 19292929, 'Susu'),
(38, 'klent', 'klont', 19292929, 'Susu'),
(39, 'klent', 'klont', 19292929, 'Susu'),
(40, 'klent', 'klont', 19292929, 'Susu'),
(41, 'klent', 'klont', 19292929, 'Susu'),
(42, 'klent', 'klont', 19292929, 'Susu'),
(43, 'asdf', 'asdf', 200000, 'asdf asdfa sdfa'),
(44, 'asdf', 'asdf', 200000, 'asdf asdfa sdfa'),
(45, 'asdf', 'asdf', 1200000, 'asfasf asdf'),
(46, 'asf', 'asdf', 1200000, 'asdlkfa sf'),
(47, 'asdf', 'asdf', 2300000, 'asdf asdf'),
(48, 'Pesta bujang', 'bujang party', 12000, 'ya pokoknya senang senang'),
(49, 'asdf', 'asdf', 2000000, 'asdf asdf'),
(50, 'asdf', 'asdf', 320000, 'asf asdf'),
(51, 'asdf', 'asf', 1200000, 'asf asdf'),
(52, 'asdf', 'asdf', 1200000, 'asdf asdf'),
(53, 'asdf asf', 'asdf', 1200000, 'sadsfasdf asfd'),
(54, 'asdf', 'asdf', 1200000, 'asdfasdf'),
(55, 'asdf', 'asdf', 12000000, 'asdf asdf'),
(56, 'asdf', 'asdf', 2300000, 'asdf asdf'),
(57, 'pesta bujang', 'bujang party', 12000, 'hehehe'),
(58, 'pesta bujang', 'bujang party', 12000, 'hehehe'),
(59, 'pesta bujang', 'bujang party', 12000, 'hehehe');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id_tempat_pesanan` int(10) unsigned NOT NULL,
  `id_nama_fasilitas` int(10) unsigned NOT NULL,
  KEY `id_tempat_pesanan` (`id_tempat_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_pengaju`
--

CREATE TABLE IF NOT EXISTS `identitas_pengaju` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomo` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `identitas_pengaju`
--

INSERT INTO `identitas_pengaju` (`id`, `nama`, `email`, `nomo`) VALUES
(2, 'Departemen Orasi BEM Psiko UI 2017', 'deporasi.bempsikoui2017@gmail.com', '081584241197'),
(3, 'Rpg', 'def.dhefiz@gmail.com', '085780368760'),
(4, 'Tester', 'test@test.com', '018282'),
(6, 'Tester', 'test@test.com', '018282'),
(11, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(12, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(13, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(14, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(15, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(16, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(17, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(18, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(19, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(20, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(21, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(22, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(23, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(24, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(25, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(26, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(27, 'Akbar Sriyonggo', 'antokurnianto82@gmail.com', '02028108'),
(28, 'Testos', 'test@k.com', '0128102901'),
(29, 'Testos', 'test@k.com', '0128102901'),
(30, 'Testos', 'test@k.com', '0128102901'),
(31, 'Testos', 'test@k.com', '0128102901'),
(32, 'Testos', 'test@k.com', '0128102901'),
(33, 'Testos', 'test@k.com', '0128102901'),
(34, 'Testos', 'test@k.com', '0128102901'),
(35, 'Testos', 'test@k.com', '0128102901'),
(36, 'Testos', 'test@k.com', '0128102901'),
(37, 'Testos', 'test@k.com', '0128102901'),
(38, 'Testos', 'test@k.com', '0128102901'),
(39, 'Testos', 'test@k.com', '0128102901'),
(40, 'Testos', 'test@k.com', '0128102901'),
(41, 'Testos', 'test@k.com', '0128102901'),
(42, 'Testos', 'test@k.com', '0128102901'),
(43, 'asdf', 'sadf@asdf.com', '08999273664'),
(44, 'asdf', 'sadf@asdf.com', '08999273664'),
(45, 'asfdasdf', 'asdf@asdf.com', '08994874663'),
(46, 'adsf', 'asdf@asdf.com', '08999485774'),
(47, 'asdf asdf', 'asdf@asdf.com', '089993433434'),
(48, 'Bambang Adi', 'donidoni@doni.com', '68283687'),
(49, 'asdf asdf', 'asdf@asdf.com', '089994355341'),
(50, 'asdf', 'asdf@asfd.com', '08999384773'),
(51, 'adf adf', 'asdf@asf.com', '08999343341'),
(52, 'asdf asdf', 'asdf@asdf.com', '08999343343'),
(53, 'asdf asdf', 'asdf@asf.com', '08999233323'),
(54, 'adfasdf', 'asf@asdf.com', '08999476654'),
(55, 'asdf', 'asdf@asdf.com', '08999435534'),
(56, 'asdf asdf', 'asdf@asdf.com', '08999342234'),
(57, 'Danilla', 'danila@donidoni.com', '198391829'),
(58, 'Danilla', 'danila@donidoni.com', '198391829'),
(59, 'Danilla', 'danila@donidoni.com', '198391829');

-- --------------------------------------------------------

--
-- Table structure for table `id_pesanan`
--

CREATE TABLE IF NOT EXISTS `id_pesanan` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `id_pengaju` int(255) unsigned NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pengaju` (`id_pengaju`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `id_pesanan`
--

INSERT INTO `id_pesanan` (`id`, `id_pengaju`, `status`) VALUES
(2, 2, 'Waiting'),
(3, 3, 'Waiting'),
(4, 4, 'Waiting'),
(6, 6, 'Waiting'),
(11, 11, 'Waiting'),
(12, 12, 'Waiting'),
(13, 13, 'Waiting'),
(14, 14, 'Waiting'),
(15, 15, 'Waiting'),
(16, 16, 'Waiting'),
(17, 17, 'Waiting'),
(18, 18, 'Waiting'),
(19, 19, 'Waiting'),
(20, 20, 'Waiting'),
(21, 21, 'Waiting'),
(22, 22, 'Waiting'),
(23, 23, 'Waiting'),
(24, 24, 'Waiting'),
(25, 25, 'Waiting'),
(26, 26, 'Waiting'),
(27, 27, 'Waiting'),
(28, 28, 'Waiting'),
(29, 29, 'Waiting'),
(30, 30, 'Waiting'),
(31, 31, 'Waiting'),
(32, 32, 'Waiting'),
(33, 33, 'Waiting'),
(34, 34, 'Waiting'),
(35, 35, 'Waiting'),
(36, 36, 'Waiting'),
(37, 37, 'Waiting'),
(38, 38, 'Waiting'),
(39, 39, 'Waiting'),
(40, 40, 'Waiting'),
(41, 41, 'Waiting'),
(42, 42, 'Waiting'),
(43, 43, 'Waiting'),
(44, 44, 'Waiting'),
(45, 45, 'Waiting'),
(46, 46, 'Waiting'),
(47, 47, 'Waiting'),
(48, 48, 'Waiting'),
(49, 49, 'Waiting'),
(50, 50, 'Waiting'),
(51, 51, 'Waiting'),
(52, 52, 'Waiting'),
(53, 53, 'Waiting'),
(54, 54, 'Waiting'),
(55, 55, 'Waiting'),
(56, 56, 'Waiting'),
(57, 57, 'Waiting'),
(58, 58, 'Waiting'),
(59, 59, 'Waiting');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_dekorasi`
--

CREATE TABLE IF NOT EXISTS `jenis_dekorasi` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `jenis_dekorasi`
--

INSERT INTO `jenis_dekorasi` (`id`, `jenis`) VALUES
(0, 'Pilih Jenis Dekorasi'),
(1, 'Pita'),
(2, 'Lampu'),
(3, 'Balon'),
(4, 'Craft');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_merchandise`
--

CREATE TABLE IF NOT EXISTS `jenis_merchandise` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `jenis_merchandise`
--

INSERT INTO `jenis_merchandise` (`id`, `jenis`) VALUES
(0, 'Pilih Jenis Merchandise'),
(1, 'Bunga'),
(2, 'Boneka'),
(3, 'Gantungan Kunci'),
(4, 'PIN'),
(5, 'Balon');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pakaian`
--

CREATE TABLE IF NOT EXISTS `jenis_pakaian` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `jenis_pakaian`
--

INSERT INTO `jenis_pakaian` (`id`, `jenis`) VALUES
(0, 'Pilih Jenis Pakaian'),
(1, 'Jaket'),
(2, 'Kaos 20s Combed'),
(3, 'Kaos 30s Combed'),
(4, 'Parka'),
(5, 'Hoodie'),
(6, 'Celana'),
(7, 'Sepatu'),
(8, 'Polo Shirt');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_percetakan`
--

CREATE TABLE IF NOT EXISTS `jenis_percetakan` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `jenis_percetakan`
--

INSERT INTO `jenis_percetakan` (`id`, `jenis`) VALUES
(0, 'Pilih Jenis Percetakan'),
(1, 'Spanduk'),
(2, 'X-Banner'),
(3, 'Y-Banner'),
(4, 'Bantal'),
(5, 'Kartu Nama'),
(6, 'Notes'),
(7, 'Kartu Panitia'),
(8, 'Sertifikat'),
(9, 'Plakat');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_sound_lighting`
--

CREATE TABLE IF NOT EXISTS `jenis_sound_lighting` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `jenis` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jenis_sound_lighting`
--

INSERT INTO `jenis_sound_lighting` (`id`, `jenis`) VALUES
(0, 'Pilih Jenis Sound & Lighting'),
(1, 'Sound Besar'),
(2, 'Speaker Besar'),
(3, 'Mic'),
(4, 'Mixer'),
(5, 'Lighting Panggung'),
(6, 'Peralatan Panggung');

-- --------------------------------------------------------

--
-- Table structure for table `konveksi_pakaian`
--

CREATE TABLE IF NOT EXISTS `konveksi_pakaian` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `id_jenis_pakaian` int(255) unsigned NOT NULL,
  `lama_pesanan` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desain` varchar(255) NOT NULL,
  `s` varchar(255) NOT NULL,
  `m` varchar(255) NOT NULL,
  `l` varchar(255) NOT NULL,
  `xl` varchar(255) NOT NULL,
  `xxl` varchar(255) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`,`id_jenis_pakaian`),
  KEY `id_pesanan` (`id_pesanan`),
  KEY `id_jenis_pakaian` (`id_jenis_pakaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konveksi_pakaian`
--

INSERT INTO `konveksi_pakaian` (`id_pesanan`, `id_jenis_pakaian`, `lama_pesanan`, `budget`, `keterangan`, `desain`, `s`, `m`, `l`, `xl`, `xxl`) VALUES
(44, 3, 0, 100000, '-', 'storage/app/44_asdf_desainBaju.png', '12', '12', '-', '-', '-'),
(45, 3, 0, 1000000, '-', 'storage/app/45_asfdasdf_desainBaju.png', '10', '-', '-', '-', '-'),
(46, 6, 0, 100000, '-', 'storage/app/46_adsf_desainBaju.png', '-', '10', '-', '-', '-'),
(47, 4, 0, 1200000, '-', 'storage/app/47_asdf asdf_desainBaju.png', '12', '10', '-', '-', '-'),
(47, 7, 0, 1000000, '-', 'storage/app/47_asdf asdf_desainBaju.png', '-', '-', '10', '-', '-'),
(48, 0, 0, 0, '-', 'storage/app/48_0_Bambang Adi_desainBaju.jpg', '-', '-', '-', '-', '-'),
(49, 0, 0, 100000, '-', 'storage/app/49_0_asdf asdf_desainBaju.jpg', '12', '-', '-', '-', '-'),
(50, 0, 0, 0, '-', 'storage/app/50_0_asdf_desainBaju.jpg', '-', '12', '-', '-', '-'),
(51, 0, 0, 0, '-', 'storage/app/51_adf adf_desainBaju.jpg', '-', '10', '-', '-', '-'),
(52, 0, 0, 0, '-', 'storage/app/52_asdf asdf_desainBaju.jpg', '10', '-', '-', '-', '-'),
(53, 0, 0, 0, '-', 'storage/app/53_asdf asdf_desainBaju.jpg', '-', '10', '-', '-', '-'),
(54, 2, 0, 0, '-', 'storage/app/54_adfasdf_desainBaju.jpg', '-', '10', '-', '-', '-'),
(54, 7, 0, 0, '-', 'storage/app/54_adfasdf_desainBaju.jpg', '-', '-', '-', '10', '-'),
(55, 0, 0, 0, '-', 'storage/app/55_0_asdf_desainBaju.jpg', '-', '-', '-', '-', '-'),
(56, 0, 0, 0, '-', 'storage/app/56_1_asdf asdf_desainBaju.jpg', '-', '-', '-', '-', '-'),
(56, 2, 0, 0, '-', 'storage/app/56_0_asdf asdf_desainBaju.jpg', '-', '-', '-', '-', '-'),
(57, 0, 0, 0, '-', 'storage/app/57_0_Danilla_desainBaju.jpg', '-', '-', '-', '-', '-'),
(58, 1, 0, 0, '-', 'storage/app/58_0_Danilla_desainBaju.jpg', '-', '-', '-', '-', '-'),
(59, 0, 0, 0, '-', 'storage/app/59_1_Danilla_desainBaju.jpg', '-', '-', '-', '-', '-'),
(59, 1, 0, 0, '-', 'storage/app/59_0_Danilla_desainBaju.jpg', '-', '-', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE IF NOT EXISTS `merchandise` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `id_jenis_merchandise` int(255) unsigned NOT NULL,
  `jumlah` int(255) NOT NULL,
  `lama_pengerjaan` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desain` varchar(255) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`,`id_jenis_merchandise`),
  KEY `id_pesanan` (`id_pesanan`),
  KEY `id_jenis_merchandise` (`id_jenis_merchandise`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nama_fasilitas`
--

CREATE TABLE IF NOT EXISTS `nama_fasilitas` (
  `id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nama_fasilitas`
--

INSERT INTO `nama_fasilitas` (`id`, `nama`) VALUES
(1, 'Bangku Input'),
(2, 'AC Input'),
(3, 'Blower'),
(4, 'Panggung');

-- --------------------------------------------------------

--
-- Table structure for table `percetakan`
--

CREATE TABLE IF NOT EXISTS `percetakan` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `id_jenis_percetakan` int(255) unsigned NOT NULL,
  `acara` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `lama_pesanan` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `desain` varchar(255) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`,`id_jenis_percetakan`),
  KEY `id_pesanan` (`id_pesanan`),
  KEY `id_jenis_percetakan` (`id_jenis_percetakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `percetakan`
--

INSERT INTO `percetakan` (`id_pesanan`, `id_jenis_percetakan`, `acara`, `jumlah`, `lama_pesanan`, `budget`, `keterangan`, `desain`) VALUES
(2, 1, '-', 1, 1, 120, 'Spanduk dicetak ukuran 2x3m, akan digunakan sebagai latar belakang photobooth. Apabila resolusi tidak sesuai, atau hasil buram, harap hubungi kami kembali.', '-'),
(3, 1, '-', 1, 1, 12580, 'Good', '-'),
(42, 1, '-', 1, 1, 12222222, 'ga ada', 'storage/app/42_Testos_desainPercetakan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sound_lighting`
--

CREATE TABLE IF NOT EXISTS `sound_lighting` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `id_jenis_sound_lighting` int(255) unsigned NOT NULL,
  `kapasitas_listrik_watt` int(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `lama_sewa` int(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`,`id_jenis_sound_lighting`),
  KEY `id_pesanan` (`id_pesanan`),
  KEY `id_jenis_sound_lighting` (`id_jenis_sound_lighting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE IF NOT EXISTS `tempat` (
  `id_pesanan` int(255) unsigned NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kapasitas_tamu` int(255) unsigned NOT NULL,
  `sewa_jam` int(255) unsigned NOT NULL,
  `kapasitas_listrik_watt` int(255) NOT NULL,
  `budget` int(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `j_bangku` varchar(255) NOT NULL,
  `j_ac` varchar(255) NOT NULL,
  `j_blower` varchar(255) NOT NULL,
  UNIQUE KEY `id_pesanan_2` (`id_pesanan`),
  KEY `id_pesanan` (`id_pesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `remember_token` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`) VALUES
(1, 'ironmaiden', '$2y$10$H4ScX08do6qewiK1ddztuO3silT2ZFjdzmbN/rxUvYTkoVL3IjqVe', 'Admin', '7zmw7Eq5k6ddf5igAbeL6TQFwcfgaGqapZi9ea7IS3khagD1iZZmB0l4VkXf');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dekorasi`
--
ALTER TABLE `dekorasi`
  ADD CONSTRAINT `idPesanan_dekorasi` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jenisDekorasi_dekorasi` FOREIGN KEY (`id_jenis_dekorasi`) REFERENCES `jenis_dekorasi` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detail_acara`
--
ALTER TABLE `detail_acara`
  ADD CONSTRAINT `pengaju_acara` FOREIGN KEY (`id_pengaju`) REFERENCES `identitas_pengaju` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `namaFasilitas_fasilitas` FOREIGN KEY (`id_tempat_pesanan`) REFERENCES `nama_fasilitas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `id_pesanan`
--
ALTER TABLE `id_pesanan`
  ADD CONSTRAINT `pengaju_idPesanan` FOREIGN KEY (`id_pengaju`) REFERENCES `identitas_pengaju` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `konveksi_pakaian`
--
ALTER TABLE `konveksi_pakaian`
  ADD CONSTRAINT `idPesanan_konveksi` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jenisPesanan_konveksi` FOREIGN KEY (`id_jenis_pakaian`) REFERENCES `jenis_pakaian` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD CONSTRAINT `idPesanan_merchandise` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jenisMerchandise_merchandise` FOREIGN KEY (`id_jenis_merchandise`) REFERENCES `jenis_merchandise` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `percetakan`
--
ALTER TABLE `percetakan`
  ADD CONSTRAINT `idPesanan_percetakan` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jenisPercetakan_percetakan` FOREIGN KEY (`id_jenis_percetakan`) REFERENCES `jenis_percetakan` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sound_lighting`
--
ALTER TABLE `sound_lighting`
  ADD CONSTRAINT `idPesanan_soundLighting` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jenisSoundLighting_soundLighting` FOREIGN KEY (`id_jenis_sound_lighting`) REFERENCES `jenis_sound_lighting` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tempat`
--
ALTER TABLE `tempat`
  ADD CONSTRAINT `idPesanan_tempat` FOREIGN KEY (`id_pesanan`) REFERENCES `id_pesanan` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
