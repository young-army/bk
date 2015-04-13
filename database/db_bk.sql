-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2015 at 06:49 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_bk`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `event` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activities`
--


-- --------------------------------------------------------

--
-- Table structure for table `background`
--

CREATE TABLE IF NOT EXISTS `background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `kode` varchar(75) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `background`
--


-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `pelanggan` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `industri` int(5) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `detail` text NOT NULL,
  `cover` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `clients`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_menu`
--

CREATE TABLE IF NOT EXISTS `content_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(125) NOT NULL,
  `sub` varchar(65) NOT NULL,
  `detail` text NOT NULL,
  `background` varchar(65) NOT NULL,
  `menu` char(1) NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `link` varchar(65) NOT NULL,
  `target` varchar(65) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `start` varchar(25) NOT NULL,
  `end` varchar(25) NOT NULL,
  `perihal` varchar(25) NOT NULL,
  `uraian` text NOT NULL,
  `detail` text NOT NULL,
  `cover` varchar(65) NOT NULL,
  `flayer` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `events`
--


-- --------------------------------------------------------

--
-- Table structure for table `expertise`
--

CREATE TABLE IF NOT EXISTS `expertise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `expertise`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyek` int(11) NOT NULL,
  `foto` varchar(25) NOT NULL,
  `keterangan` text NOT NULL,
  `judul` varchar(125) NOT NULL,
  `status` char(1) NOT NULL,
  `created` varchar(25) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `innovation`
--

CREATE TABLE IF NOT EXISTS `innovation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `event` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `innovation`
--


-- --------------------------------------------------------

--
-- Table structure for table `inspirator`
--

CREATE TABLE IF NOT EXISTS `inspirator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(125) NOT NULL,
  `foto` varchar(65) NOT NULL,
  `keahlian` text NOT NULL,
  `uraian` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `inspirator`
--


-- --------------------------------------------------------

--
-- Table structure for table `market _analytics`
--

CREATE TABLE IF NOT EXISTS `market _analytics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `market _analytics`
--


-- --------------------------------------------------------

--
-- Table structure for table `master_data`
--

CREATE TABLE IF NOT EXISTS `master_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(5) NOT NULL,
  `kategori` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `icon` varchar(25) NOT NULL,
  `urut` varchar(5) NOT NULL,
  `kode` varchar(25) NOT NULL,
  `spesifik` char(1) NOT NULL,
  `target` varchar(65) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `master_data`
--


-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sub` int(5) NOT NULL,
  `kategori` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `target` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `urut` char(3) NOT NULL,
  `file` varchar(65) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `sumber` varchar(125) NOT NULL,
  `tanggal` date NOT NULL,
  `ringkasan` text NOT NULL,
  `uraian` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `news`
--


-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE IF NOT EXISTS `proyek` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `proyek` text NOT NULL,
  `penjelasan` text NOT NULL,
  `lokasi` varchar(65) NOT NULL,
  `waktu` text NOT NULL,
  `file` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `case_study` text NOT NULL,
  `testimoni` text NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `proyek`
--


-- --------------------------------------------------------

--
-- Table structure for table `request_user`
--

CREATE TABLE IF NOT EXISTS `request_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `nama` varchar(65) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telp` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `jawaban` text NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `request_user`
--


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(225) NOT NULL,
  `author` varchar(65) NOT NULL,
  `keterangan` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `services`
--


-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perusahaan` varchar(125) NOT NULL,
  `email` varchar(65) NOT NULL,
  `telp` varchar(65) NOT NULL,
  `fb` varchar(65) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `youtube` varchar(125) NOT NULL,
  `logo` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `setting`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `email` varchar(65) NOT NULL,
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `kategori` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(65) NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_admin`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_akses`
--

CREATE TABLE IF NOT EXISTS `user_akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `akses` text NOT NULL,
  `status` char(1) NOT NULL,
  `created_by` varchar(65) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_akses`
--

