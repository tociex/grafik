-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 25, 2019 at 10:25 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grafik`
--

-- --------------------------------------------------------

--
-- Table structure for table `mau`
--

CREATE TABLE IF NOT EXISTS `mau` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(20) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `total` float NOT NULL,
  `new` float NOT NULL,
  `rte` float NOT NULL,
  `retention` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mau`
--

INSERT INTO `mau` (`id`, `jenis`, `bulan`, `total`, `new`, `rte`, `retention`) VALUES
(1, 'cash-in', 'JAN', 61247, 24725, 36521, 60),
(2, 'cash-in', 'FEB', 56947, 24044, 32903, 58),
(3, 'cash-in', 'MAR', 48980, 21669, 27310, 56),
(4, 'cash-in', 'APR', 145718, 138669, 7048, 5),
(5, 'cash-in', 'MAY', 101468, 52407, 49060, 48),
(6, 'cash-in', 'JUN', 95621, 43401, 52220, 55),
(7, 'cash-in', 'JUL', 79307, 37358, 41949, 53),
(8, 'cash-in', 'AUG', 86938, 40815, 46123, 53),
(9, 'cash-in', 'SEP', 139471, 47178, 92293, 66),
(10, 'cash-in', 'OCT', 164735, 103351, 61384, 37),
(11, 'purchase', 'JAN', 61247, 24725, 36521, 60),
(12, 'purchase', 'FEB', 56947, 24044, 32903, 58),
(13, 'purchase', 'MAR', 48980, 21669, 27310, 56),
(14, 'purchase', 'APR', 145718, 138669, 7048, 5),
(15, 'purchase', 'MAY', 101468, 52407, 49060, 48),
(16, 'purchase', 'JUN', 95621, 43401, 52220, 55),
(17, 'purchase', 'JUL', 79307, 37358, 41949, 53),
(18, 'purchase', 'AUG', 86938, 40815, 46123, 53),
(19, 'purchase', 'SEP', 139471, 47178, 92293, 66),
(20, 'purchase', 'OCT', 164735, 103351, 61384, 37);

-- --------------------------------------------------------

--
-- Table structure for table `merchant`
--

CREATE TABLE IF NOT EXISTS `merchant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `merchant`
--

INSERT INTO `merchant` (`id`, `name`, `jenis`, `tipe`, `value`, `date`) VALUES
(1, 'indomaret', 'cash-in', 'OUTLET', 3063, '2019-09-13'),
(2, 'indomaret', 'cash-in', 'OUTLET', 2312, '2019-09-14'),
(3, 'indomaret', 'cash-in', 'OUTLET', 3411, '2019-09-15'),
(4, 'indomaret', 'cash-in', 'USER', 2013, '2019-09-13'),
(5, 'indomaret', 'cash-in', 'USER', 2423, '2019-09-14'),
(6, 'indomaret', 'cash-in', 'USER', 5012, '2019-09-15'),
(7, 'indomaret', 'cash-in', 'TRX', 3012, '2019-09-13'),
(8, 'indomaret', 'cash-in', 'TRX', 4011, '2019-09-14'),
(9, 'indomaret', 'cash-in', 'TRX', 1002, '2019-09-15'),
(10, 'indomaret', 'cash-in', 'GTV', 103121233, '2019-09-13'),
(11, 'indomaret', 'cash-in', 'GTV', 123121233, '2019-09-14'),
(12, 'indomaret', 'cash-in', 'GTV', 153433312, '2019-09-15'),
(13, 'alfamart', 'cash-in', 'OUTLET', 1129, '2019-09-13'),
(14, 'alfamart', 'cash-in', 'OUTLET', 3212, '2019-09-14'),
(15, 'alfamart', 'cash-in', 'OUTLET', 6641, '2019-09-15'),
(16, 'alfamart', 'cash-in', 'USER', 1232, '2019-09-13'),
(17, 'alfamart', 'cash-in', 'USER', 4212, '2019-09-14'),
(18, 'alfamart', 'cash-in', 'USER', 7754, '2019-09-15'),
(19, 'alfamart', 'cash-in', 'USER', 3214, '2019-09-13'),
(20, 'alfamart', 'cash-in', 'TRX', 5312, '2019-09-14'),
(21, 'alfamart', 'cash-in', 'TRX', 1232, '2019-09-15'),
(22, 'alfamart', 'cash-in', 'GTV', 231233123, '2019-09-13'),
(23, 'alfamart', 'cash-in', 'GTV', 193311111, '2019-09-14'),
(24, 'alfamart', 'cash-in', 'GTV', 201923221, '2019-09-15'),
(25, 'alfamart', 'cash-in', 'OUTLET', 2400, '2019-09-20'),
(26, 'indomaret', 'cash-in', 'OUTLET', 3211, '2019-09-20'),
(27, 'indomaret', 'purchase', 'OUTLET', 3063, '2019-09-13'),
(28, 'indomaret', 'purchase', 'OUTLET', 2312, '2019-09-14'),
(29, 'indomaret', 'purchase', 'OUTLET', 3411, '2019-09-15'),
(30, 'indomaret', 'purchase', 'USER', 2013, '2019-09-13'),
(31, 'indomaret', 'purchase', 'USER', 2423, '2019-09-14'),
(32, 'indomaret', 'purchase', 'USER', 5012, '2019-09-15'),
(33, 'indomaret', 'purchase', 'TRX', 3012, '2019-09-13'),
(34, 'indomaret', 'purchase', 'TRX', 4011, '2019-09-14'),
(35, 'indomaret', 'purchase', 'TRX', 1002, '2019-09-15'),
(36, 'indomaret', 'purchase', 'GTV', 103121233, '2019-09-13'),
(37, 'indomaret', 'purchase', 'GTV', 123121233, '2019-09-14'),
(38, 'indomaret', 'purchase', 'GTV', 153433312, '2019-09-15'),
(39, 'alfamart', 'purchase', 'OUTLET', 1129, '2019-09-13'),
(40, 'alfamart', 'purchase', 'OUTLET', 3212, '2019-09-14'),
(41, 'alfamart', 'purchase', 'OUTLET', 6641, '2019-09-15'),
(42, 'alfamart', 'purchase', 'USER', 1232, '2019-09-13'),
(43, 'alfamart', 'purchase', 'USER', 4212, '2019-09-14'),
(44, 'alfamart', 'purchase', 'USER', 7754, '2019-09-15'),
(45, 'alfamart', 'purchase', 'USER', 3214, '2019-09-13'),
(46, 'alfamart', 'purchase', 'TRX', 5312, '2019-09-14'),
(47, 'alfamart', 'purchase', 'TRX', 1232, '2019-09-15'),
(48, 'alfamart', 'purchase', 'GTV', 231233123, '2019-09-13'),
(49, 'alfamart', 'purchase', 'GTV', 193311111, '2019-09-14'),
(50, 'alfamart', 'purchase', 'GTV', 201923221, '2019-09-15'),
(51, 'alfamart', 'purchase', 'OUTLET', 2400, '2019-09-20'),
(52, 'indomaret', 'purchase', 'OUTLET', 3211, '2019-09-20');

-- --------------------------------------------------------

--
-- Table structure for table `mtd`
--

CREATE TABLE IF NOT EXISTS `mtd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(20) NOT NULL,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mtd`
--

INSERT INTO `mtd` (`id`, `jenis`, `outlet`, `user`, `trx`, `volume`, `date`) VALUES
(1, 'cash-in', 11508, 70690, 147707, 26726668522, '2019-09-13'),
(2, 'cash-in', 11808, 50690, 157707, 23726668522, '2019-09-12'),
(3, 'cash-in', 10000, 2000, 4300, 29800000000, '2019-11-24'),
(4, 'purchase', 10000, 2000, 4300, 29800000000, '2019-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `m_estimasi`
--

CREATE TABLE IF NOT EXISTS `m_estimasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_estimasi`
--

INSERT INTO `m_estimasi` (`id`, `outlet`, `user`, `trx`, `volume`, `date`, `jenis`) VALUES
(1, 15980, 170138, 256085, 43070364188, '2019-11-24', 'cash-in'),
(2, 15980, 170138, 256085, 43070364188, '2019-11-24', 'purchase');

-- --------------------------------------------------------

--
-- Table structure for table `m_target`
--

CREATE TABLE IF NOT EXISTS `m_target` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `month` float NOT NULL,
  `year` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `m_target`
--

INSERT INTO `m_target` (`id`, `outlet`, `user`, `trx`, `volume`, `month`, `year`, `jenis`) VALUES
(1, 12000, 90500, 162000, 29800000000, 11, 2019, 'cash-in'),
(2, 12000, 90500, 162000, 29800000000, 11, 2019, 'purchase');

-- --------------------------------------------------------

--
-- Table structure for table `pencapaian`
--

CREATE TABLE IF NOT EXISTS `pencapaian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bulan` varchar(20) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `target` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `pencapaian`
--

INSERT INTO `pencapaian` (`id`, `bulan`, `jenis`, `tipe`, `total`, `target`) VALUES
(1, 'JAN', 'cash-in', 'USER', 62026, 58225),
(2, 'FEB', 'cash-in', 'USER', 58307, 69036),
(3, 'MAR', 'cash-in', 'USER', 49631, 69597),
(4, 'APR', 'cash-in', 'USER', 137017, 74383),
(5, 'MAY', 'cash-in', 'USER', 101527, 75127),
(6, 'JUN', 'cash-in', 'USER', 103314, 75878),
(7, 'JUL', 'cash-in', 'USER', 89153, 81000),
(8, 'AUG', 'cash-in', 'USER', 96763, 90500),
(9, 'SEP', 'cash-in', 'USER', 151696, 101000),
(10, 'JAN', 'cash-in', 'TRX', 129562, 118099),
(11, 'FEB', 'cash-in', 'TRX', 117448, 123946),
(12, 'MAR', 'cash-in', 'TRX', 123620, 142366),
(13, 'APR', 'cash-in', 'TRX', 224966, 143224),
(14, 'MAY', 'cash-in', 'TRX', 196015, 144656),
(15, 'JAN', 'cash-in', 'GTV', 24511700000, 23619700000),
(16, 'FEB', 'cash-in', 'GTV', 21258400000, 24789300000),
(17, 'MAR', 'cash-in', 'GTV', 23589800000, 28473200000),
(18, 'APR', 'cash-in', 'GTV', 30289300000, 28644800000),
(19, 'MAY', 'cash-in', 'GTV', 32578200000, 28931300000),
(20, 'JAN', 'cash-in', 'OUTLET', 11397, 10000),
(21, 'FEB', 'cash-in', 'OUTLET', 10234, 10000),
(22, 'MAR', 'cash-in', 'OUTLET', 9589, 10250),
(23, 'APR', 'cash-in', 'OUTLET', 16621, 10500),
(24, 'MAY', 'cash-in', 'OUTLET', 13657, 10750),
(25, 'JAN', 'purchase', 'USER', 62026, 58225),
(26, 'FEB', 'purchase', 'USER', 58307, 69036),
(27, 'MAR', 'purchase', 'USER', 49631, 69597),
(28, 'APR', 'purchase', 'USER', 137017, 74383),
(29, 'MAY', 'purchase', 'USER', 101527, 75127),
(30, 'JUN', 'purchase', 'USER', 103314, 75878),
(31, 'JUL', 'purchase', 'USER', 89153, 81000),
(32, 'AUG', 'purchase', 'USER', 96763, 90500),
(33, 'SEP', 'purchase', 'USER', 151696, 101000),
(34, 'JAN', 'purchase', 'TRX', 129562, 118099),
(35, 'FEB', 'purchase', 'TRX', 117448, 123946),
(36, 'MAR', 'purchase', 'TRX', 123620, 142366),
(37, 'APR', 'purchase', 'TRX', 224966, 143224),
(38, 'MAY', 'purchase', 'TRX', 196015, 144656),
(39, 'JAN', 'purchase', 'GTV', 24511700000, 23619700000),
(40, 'FEB', 'purchase', 'GTV', 21258400000, 24789300000),
(41, 'MAR', 'purchase', 'GTV', 23589800000, 28473200000),
(42, 'APR', 'purchase', 'GTV', 30289300000, 28644800000),
(43, 'MAY', 'purchase', 'GTV', 32578200000, 28931300000),
(44, 'JAN', 'purchase', 'OUTLET', 11397, 10000),
(45, 'FEB', 'purchase', 'OUTLET', 10234, 10000),
(46, 'MAR', 'purchase', 'OUTLET', 9589, 10250),
(47, 'APR', 'purchase', 'OUTLET', 16621, 10500),
(48, 'MAY', 'purchase', 'OUTLET', 13657, 10750);

-- --------------------------------------------------------

--
-- Table structure for table `p_analisa`
--

CREATE TABLE IF NOT EXISTS `p_analisa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(20) NOT NULL,
  `p_analisa` varchar(255) NOT NULL,
  `d_analisa` varchar(255) NOT NULL,
  `ma_analisa` varchar(255) NOT NULL,
  `mr_analisa` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `p_analisa`
--

INSERT INTO `p_analisa` (`id`, `jenis`, `p_analisa`, `d_analisa`, `ma_analisa`, `mr_analisa`) VALUES
(1, 'cash-in', 'ganti dasfdsftanya', 'daaaddgdgdg', 'ganti maunya', 'asddasdad'),
(2, 'purchase', 'purchase', 'hasil purchase', 'ganti maunya', 'asddasdad');

-- --------------------------------------------------------

--
-- Table structure for table `v_pilar`
--

CREATE TABLE IF NOT EXISTS `v_pilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `volume` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `v_pilar`
--

INSERT INTO `v_pilar` (`id`, `kategori`, `jenis`, `name`, `volume`) VALUES
(1, 'merchant', 'cash-in', 'Indomaret', 29800000000),
(2, 'merchant', 'cash-in', 'Alfamaret', 26726700000),
(3, 'merchant', 'cash-in', 'Alfamidi', 43070400000),
(4, 'merchant', 'cash-in', 'Other', 3073330000),
(5, 'multifinances', 'cash-in', 'Best Finance', 29800000000),
(6, 'multifinances', 'cash-in', 'Kredit Plus', 26726700000),
(7, 'multifinances', 'cash-in', 'Jiwasraya', 43070400000),
(8, 'multifinances', 'cash-in', 'Other', 3073330000),
(9, 'BUMN', 'cash-in', 'Kantor Pos', 29800000000),
(10, 'BUMN', 'cash-in', 'Pegadaian', 26726700000),
(11, 'BUMN', 'cash-in', 'Kimia Farma', 43070400000),
(12, 'BUMN', 'cash-in', 'Other', 3073330000),
(13, 'apps', 'cash-in', 'Mobile Pulsa', 29800000000),
(14, 'apps', 'cash-in', 'Sepulsa', 26726700000),
(15, 'apps', 'cash-in', 'Anilo', 43070400000),
(16, 'apps', 'cash-in', 'Other', 3073330000),
(17, 'merchant', 'purchase', 'Indomaret', 29800000000),
(18, 'merchant', 'purchase', 'Alfamaret', 26726700000),
(19, 'merchant', 'purchase', 'Alfamidi', 43070400000),
(20, 'merchant', 'purchase', 'Other', 3073330000),
(21, 'multifinances', 'purchase', 'Best Finance', 29800000000),
(22, 'multifinances', 'purchase', 'Kredit Plus', 26726700000),
(23, 'multifinances', 'purchase', 'Jiwasraya', 43070400000),
(24, 'multifinances', 'purchase', 'Other', 3073330000),
(25, 'BUMN', 'purchase', 'Kantor Pos', 29800000000),
(26, 'BUMN', 'purchase', 'Pegadaian', 26726700000),
(27, 'BUMN', 'purchase', 'Kimia Farma', 43070400000),
(28, 'BUMN', 'purchase', 'Other', 3073330000),
(29, 'apps', 'purchase', 'Mobile Pulsa', 29800000000),
(30, 'apps', 'purchase', 'Sepulsa', 26726700000),
(31, 'apps', 'purchase', 'Anilo', 43070400000),
(32, 'apps', 'purchase', 'Other', 3073330000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
