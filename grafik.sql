-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 10:39 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `grafik`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `m_estimasi`
-- 

CREATE TABLE `m_estimasi` (
  `id` int(11) NOT NULL auto_increment,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

-- 
-- Dumping data for table `m_estimasi`
-- 

INSERT INTO `m_estimasi` VALUES (24, 13830, 309300, 361050, 58108515000, '2019-11-01', 'cash-in');
INSERT INTO `m_estimasi` VALUES (2, 18885, 300585, 365220, 59363878500, '2019-11-02', 'cash-in');
INSERT INTO `m_estimasi` VALUES (3, 21260, 286690, 357860, 58101826000, '2019-11-03', 'cash-in');
INSERT INTO `m_estimasi` VALUES (4, 21758, 278618, 353175, 58290906000, '2019-11-04', 'cash-in');
INSERT INTO `m_estimasi` VALUES (5, 22758, 284160, 368268, 60402762000, '2019-11-05', 'cash-in');
INSERT INTO `m_estimasi` VALUES (6, 23505, 272580, 362065, 59968968000, '2019-11-06', 'cash-in');
INSERT INTO `m_estimasi` VALUES (7, 23469, 268423, 364984, 60330910286, '2019-11-07', 'cash-in');
INSERT INTO `m_estimasi` VALUES (8, 23603, 263636, 367838, 60805947375, '2019-11-08', 'cash-in');
INSERT INTO `m_estimasi` VALUES (9, 23480, 255103, 363633, 60420799000, '2019-11-09', 'cash-in');
INSERT INTO `m_estimasi` VALUES (10, 23124, 250752, 363207, 60382043700, '2019-11-10', 'cash-in');
INSERT INTO `m_estimasi` VALUES (11, 22715, 244822, 361762, 60829573909, '2019-11-11', 'cash-in');
INSERT INTO `m_estimasi` VALUES (12, 22545, 241835, 363250, 61229661250, '2019-11-12', 'cash-in');
INSERT INTO `m_estimasi` VALUES (13, 22108, 238756, 364198, 61375131000, '2019-11-13', 'cash-in');
INSERT INTO `m_estimasi` VALUES (14, 21846, 236166, 367166, 61678529786, '2019-11-14', 'cash-in');
INSERT INTO `m_estimasi` VALUES (15, 21742, 233532, 369190, 62272502600, '2019-11-15', 'cash-in');
INSERT INTO `m_estimasi` VALUES (16, 21591, 229434, 370521, 62866469813, '2019-11-16', 'cash-in');
INSERT INTO `m_estimasi` VALUES (17, 21023, 222969, 366634, 62630079095, '2019-11-17', 'cash-in');
INSERT INTO `m_estimasi` VALUES (18, 20702, 218370, 366077, 63016595590, '2019-11-18', 'cash-in');
INSERT INTO `m_estimasi` VALUES (19, 20466, 214734, 368106, 63669985348, '2019-11-19', 'cash-in');
INSERT INTO `m_estimasi` VALUES (20, 20250, 211334, 370419, 64461504081, '2019-11-20', 'cash-in');
INSERT INTO `m_estimasi` VALUES (21, 19929, 207873, 370820, 64708025649, '2019-11-21', 'cash-in');
INSERT INTO `m_estimasi` VALUES (22, 19797, 205812, 374971, 65335263210, '2019-11-22', 'cash-in');
INSERT INTO `m_estimasi` VALUES (23, 19563, 202981, 375490, 65851065853, '2019-11-23', 'cash-in');

-- --------------------------------------------------------

-- 
-- Table structure for table `m_target`
-- 

CREATE TABLE `m_target` (
  `id` int(11) NOT NULL auto_increment,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `month` float NOT NULL,
  `year` int(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `m_target`
-- 

INSERT INTO `m_target` VALUES (1, 14000, 121000, 198000, 32000000000, 11, 2019, 'cash-in');
INSERT INTO `m_target` VALUES (2, 12000, 90500, 162000, 29800000000, 11, 2019, 'purchase');
INSERT INTO `m_target` VALUES (3, 13000, 110000, 185000, 31000000000, 10, 2019, 'cash-in');

-- --------------------------------------------------------

-- 
-- Table structure for table `mau`
-- 

CREATE TABLE `mau` (
  `id` int(11) NOT NULL auto_increment,
  `jenis` varchar(20) NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `total` float NOT NULL,
  `new` float NOT NULL,
  `rte` float NOT NULL,
  `retention` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

-- 
-- Dumping data for table `mau`
-- 

INSERT INTO `mau` VALUES (1, 'cash-in', 'JAN', 61247, 24725, 36521, 60);
INSERT INTO `mau` VALUES (2, 'cash-in', 'FEB', 56947, 24044, 32903, 58);
INSERT INTO `mau` VALUES (3, 'cash-in', 'MAR', 48980, 21669, 27310, 56);
INSERT INTO `mau` VALUES (4, 'cash-in', 'APR', 145718, 138669, 7048, 5);
INSERT INTO `mau` VALUES (5, 'cash-in', 'MAY', 101468, 52407, 49060, 48);
INSERT INTO `mau` VALUES (6, 'cash-in', 'JUN', 95621, 43401, 52220, 55);
INSERT INTO `mau` VALUES (7, 'cash-in', 'JUL', 79307, 37358, 41949, 53);
INSERT INTO `mau` VALUES (8, 'cash-in', 'AUG', 86938, 40815, 46123, 53);
INSERT INTO `mau` VALUES (9, 'cash-in', 'SEP', 139471, 47178, 92293, 66);
INSERT INTO `mau` VALUES (10, 'cash-in', 'OCT', 164735, 103351, 61384, 37);
INSERT INTO `mau` VALUES (11, 'purchase', 'JAN', 61247, 24725, 36521, 60);
INSERT INTO `mau` VALUES (12, 'purchase', 'FEB', 56947, 24044, 32903, 58);
INSERT INTO `mau` VALUES (13, 'purchase', 'MAR', 48980, 21669, 27310, 56);
INSERT INTO `mau` VALUES (14, 'purchase', 'APR', 145718, 138669, 7048, 5);
INSERT INTO `mau` VALUES (15, 'purchase', 'MAY', 101468, 52407, 49060, 48);
INSERT INTO `mau` VALUES (16, 'purchase', 'JUN', 95621, 43401, 52220, 55);
INSERT INTO `mau` VALUES (17, 'purchase', 'JUL', 79307, 37358, 41949, 53);
INSERT INTO `mau` VALUES (18, 'purchase', 'AUG', 86938, 40815, 46123, 53);
INSERT INTO `mau` VALUES (19, 'purchase', 'SEP', 139471, 47178, 92293, 66);
INSERT INTO `mau` VALUES (20, 'purchase', 'OCT', 164735, 103351, 61384, 37);

-- --------------------------------------------------------

-- 
-- Table structure for table `merchant`
-- 

CREATE TABLE `merchant` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `value` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=369 ;

-- 
-- Dumping data for table `merchant`
-- 

INSERT INTO `merchant` VALUES (1, 'indomaret', 'cash-in', 'outlet', 6632, '2019-11-01');
INSERT INTO `merchant` VALUES (2, 'indomaret', 'cash-in', 'outlet', 6911, '2019-11-02');
INSERT INTO `merchant` VALUES (3, 'indomaret', 'cash-in', 'outlet', 3662, '2019-11-03');
INSERT INTO `merchant` VALUES (4, 'indomaret', 'cash-in', 'outlet', 3782, '2019-11-04');
INSERT INTO `merchant` VALUES (5, 'indomaret', 'cash-in', 'outlet', 3481, '2019-11-05');
INSERT INTO `merchant` VALUES (6, 'indomaret', 'cash-in', 'outlet', 3606, '2019-11-06');
INSERT INTO `merchant` VALUES (7, 'indomaret', 'cash-in', 'outlet', 3493, '2019-11-07');
INSERT INTO `merchant` VALUES (8, 'indomaret', 'cash-in', 'outlet', 3798, '2019-11-08');
INSERT INTO `merchant` VALUES (9, 'indomaret', 'cash-in', 'outlet', 3510, '2019-11-09');
INSERT INTO `merchant` VALUES (10, 'indomaret', 'cash-in', 'outlet', 3874, '2019-11-10');
INSERT INTO `merchant` VALUES (11, 'indomaret', 'cash-in', 'outlet', 3840, '2019-11-11');
INSERT INTO `merchant` VALUES (12, 'indomaret', 'cash-in', 'outlet', 3445, '2019-11-12');
INSERT INTO `merchant` VALUES (13, 'indomaret', 'cash-in', 'outlet', 3322, '2019-11-13');
INSERT INTO `merchant` VALUES (14, 'indomaret', 'cash-in', 'outlet', 3583, '2019-11-14');
INSERT INTO `merchant` VALUES (15, 'indomaret', 'cash-in', 'outlet', 4010, '2019-11-15');
INSERT INTO `merchant` VALUES (16, 'indomaret', 'cash-in', 'outlet', 4035, '2019-11-16');
INSERT INTO `merchant` VALUES (17, 'indomaret', 'cash-in', 'outlet', 4033, '2019-11-17');
INSERT INTO `merchant` VALUES (18, 'indomaret', 'cash-in', 'outlet', 3872, '2019-11-18');
INSERT INTO `merchant` VALUES (19, 'indomaret', 'cash-in', 'outlet', 3919, '2019-11-19');
INSERT INTO `merchant` VALUES (20, 'indomaret', 'cash-in', 'outlet', 4138, '2019-11-20');
INSERT INTO `merchant` VALUES (21, 'indomaret', 'cash-in', 'outlet', 4006, '2019-11-21');
INSERT INTO `merchant` VALUES (22, 'indomaret', 'cash-in', 'outlet', 4265, '2019-11-22');
INSERT INTO `merchant` VALUES (23, 'indomaret', 'cash-in', 'outlet', 4182, '2019-11-23');
INSERT INTO `merchant` VALUES (24, 'indomaret', 'cash-in', 'user', 6632, '2019-11-01');
INSERT INTO `merchant` VALUES (25, 'indomaret', 'cash-in', 'user', 6911, '2019-11-02');
INSERT INTO `merchant` VALUES (26, 'indomaret', 'cash-in', 'user', 7092, '2019-11-03');
INSERT INTO `merchant` VALUES (27, 'indomaret', 'cash-in', 'user', 6947, '2019-11-04');
INSERT INTO `merchant` VALUES (28, 'indomaret', 'cash-in', 'user', 6619, '2019-11-05');
INSERT INTO `merchant` VALUES (29, 'indomaret', 'cash-in', 'user', 6178, '2019-11-06');
INSERT INTO `merchant` VALUES (30, 'indomaret', 'cash-in', 'user', 6139, '2019-11-07');
INSERT INTO `merchant` VALUES (31, 'indomaret', 'cash-in', 'user', 6378, '2019-11-08');
INSERT INTO `merchant` VALUES (32, 'indomaret', 'cash-in', 'user', 5915, '2019-11-09');
INSERT INTO `merchant` VALUES (33, 'indomaret', 'cash-in', 'user', 6693, '2019-11-10');
INSERT INTO `merchant` VALUES (34, 'indomaret', 'cash-in', 'user', 6806, '2019-11-11');
INSERT INTO `merchant` VALUES (35, 'indomaret', 'cash-in', 'user', 6291, '2019-11-12');
INSERT INTO `merchant` VALUES (36, 'indomaret', 'cash-in', 'user', 5551, '2019-11-13');
INSERT INTO `merchant` VALUES (37, 'indomaret', 'cash-in', 'user', 6266, '2019-11-14');
INSERT INTO `merchant` VALUES (38, 'indomaret', 'cash-in', 'user', 6980, '2019-11-15');
INSERT INTO `merchant` VALUES (39, 'indomaret', 'cash-in', 'user', 7080, '2019-11-16');
INSERT INTO `merchant` VALUES (40, 'indomaret', 'cash-in', 'user', 7355, '2019-11-17');
INSERT INTO `merchant` VALUES (41, 'indomaret', 'cash-in', 'user', 7378, '2019-11-18');
INSERT INTO `merchant` VALUES (42, 'indomaret', 'cash-in', 'user', 7561, '2019-11-19');
INSERT INTO `merchant` VALUES (43, 'indomaret', 'cash-in', 'user', 7674, '2019-11-20');
INSERT INTO `merchant` VALUES (44, 'indomaret', 'cash-in', 'user', 7568, '2019-11-21');
INSERT INTO `merchant` VALUES (45, 'indomaret', 'cash-in', 'user', 7, '2019-11-22');
INSERT INTO `merchant` VALUES (46, 'indomaret', 'cash-in', 'user', 7, '2019-11-23');
INSERT INTO `merchant` VALUES (47, 'indomaret', 'cash-in', 'trx', 7279, '2019-11-01');
INSERT INTO `merchant` VALUES (48, 'indomaret', 'cash-in', 'trx', 7591, '2019-11-02');
INSERT INTO `merchant` VALUES (49, 'indomaret', 'cash-in', 'trx', 7729, '2019-11-03');
INSERT INTO `merchant` VALUES (50, 'indomaret', 'cash-in', 'trx', 7620, '2019-11-04');
INSERT INTO `merchant` VALUES (51, 'indomaret', 'cash-in', 'trx', 7224, '2019-11-05');
INSERT INTO `merchant` VALUES (52, 'indomaret', 'cash-in', 'trx', 6922, '2019-11-06');
INSERT INTO `merchant` VALUES (53, 'indomaret', 'cash-in', 'trx', 6812, '2019-11-07');
INSERT INTO `merchant` VALUES (54, 'indomaret', 'cash-in', 'trx', 7215, '2019-11-08');
INSERT INTO `merchant` VALUES (55, 'indomaret', 'cash-in', 'trx', 6668, '2019-11-09');
INSERT INTO `merchant` VALUES (56, 'indomaret', 'cash-in', 'trx', 7500, '2019-11-10');
INSERT INTO `merchant` VALUES (57, 'indomaret', 'cash-in', 'trx', 7605, '2019-11-11');
INSERT INTO `merchant` VALUES (58, 'indomaret', 'cash-in', 'trx', 7029, '2019-11-12');
INSERT INTO `merchant` VALUES (59, 'indomaret', 'cash-in', 'trx', 6232, '2019-11-13');
INSERT INTO `merchant` VALUES (60, 'indomaret', 'cash-in', 'trx', 6993, '2019-11-14');
INSERT INTO `merchant` VALUES (61, 'indomaret', 'cash-in', 'trx', 7916, '2019-11-15');
INSERT INTO `merchant` VALUES (62, 'indomaret', 'cash-in', 'trx', 8087, '2019-11-16');
INSERT INTO `merchant` VALUES (63, 'indomaret', 'cash-in', 'trx', 8258, '2019-11-17');
INSERT INTO `merchant` VALUES (64, 'indomaret', 'cash-in', 'trx', 8197, '2019-11-18');
INSERT INTO `merchant` VALUES (65, 'indomaret', 'cash-in', 'trx', 8311, '2019-11-19');
INSERT INTO `merchant` VALUES (66, 'indomaret', 'cash-in', 'trx', 8492, '2019-11-20');
INSERT INTO `merchant` VALUES (67, 'indomaret', 'cash-in', 'trx', 8409, '2019-11-21');
INSERT INTO `merchant` VALUES (68, 'indomaret', 'cash-in', 'trx', 8933, '2019-11-22');
INSERT INTO `merchant` VALUES (69, 'indomaret', 'cash-in', 'trx', 8712, '2019-11-23');
INSERT INTO `merchant` VALUES (70, 'indomaret', 'cash-in', 'gtv', 1442580000, '2019-11-01');
INSERT INTO `merchant` VALUES (71, 'indomaret', 'cash-in', 'gtv', 1482140000, '2019-11-02');
INSERT INTO `merchant` VALUES (72, 'indomaret', 'cash-in', 'gtv', 1439820000, '2019-11-03');
INSERT INTO `merchant` VALUES (73, 'indomaret', 'cash-in', 'gtv', 1550660000, '2019-11-04');
INSERT INTO `merchant` VALUES (74, 'indomaret', 'cash-in', 'gtv', 1484220000, '2019-11-05');
INSERT INTO `merchant` VALUES (75, 'indomaret', 'cash-in', 'gtv', 1438390000, '2019-11-06');
INSERT INTO `merchant` VALUES (76, 'indomaret', 'cash-in', 'gtv', 1419210000, '2019-11-07');
INSERT INTO `merchant` VALUES (77, 'indomaret', 'cash-in', 'gtv', 1511530000, '2019-11-08');
INSERT INTO `merchant` VALUES (78, 'indomaret', 'cash-in', 'gtv', 1397480000, '2019-11-09');
INSERT INTO `merchant` VALUES (79, 'indomaret', 'cash-in', 'gtv', 1506310000, '2019-11-10');
INSERT INTO `merchant` VALUES (80, 'indomaret', 'cash-in', 'gtv', 1723700000, '2019-11-11');
INSERT INTO `merchant` VALUES (81, 'indomaret', 'cash-in', 'gtv', 1534680000, '2019-11-12');
INSERT INTO `merchant` VALUES (82, 'indomaret', 'cash-in', 'gtv', 1401350000, '2019-11-13');
INSERT INTO `merchant` VALUES (83, 'indomaret', 'cash-in', 'gtv', 1504190000, '2019-11-14');
INSERT INTO `merchant` VALUES (84, 'indomaret', 'cash-in', 'gtv', 1706790000, '2019-11-15');
INSERT INTO `merchant` VALUES (85, 'indomaret', 'cash-in', 'gtv', 1835290000, '2019-11-16');
INSERT INTO `merchant` VALUES (86, 'indomaret', 'cash-in', 'gtv', 1731140000, '2019-11-17');
INSERT INTO `merchant` VALUES (87, 'indomaret', 'cash-in', 'gtv', 1847590000, '2019-11-18');
INSERT INTO `merchant` VALUES (88, 'indomaret', 'cash-in', 'gtv', 1895770000, '2019-11-19');
INSERT INTO `merchant` VALUES (89, 'indomaret', 'cash-in', 'gtv', 2069510000, '2019-11-20');
INSERT INTO `merchant` VALUES (90, 'indomaret', 'cash-in', 'gtv', 1850970000, '2019-11-21');
INSERT INTO `merchant` VALUES (91, 'indomaret', 'cash-in', 'gtv', 1942620000, '2019-11-22');
INSERT INTO `merchant` VALUES (92, 'indomaret', 'cash-in', 'gtv', 2031830000, '2019-11-23');
INSERT INTO `merchant` VALUES (93, 'alfamart', 'cash-in', 'outlet', 1846, '2019-11-01');
INSERT INTO `merchant` VALUES (94, 'alfamart', 'cash-in', 'outlet', 1901, '2019-11-02');
INSERT INTO `merchant` VALUES (95, 'alfamart', 'cash-in', 'outlet', 1325, '2019-11-03');
INSERT INTO `merchant` VALUES (96, 'alfamart', 'cash-in', 'outlet', 914, '2019-11-04');
INSERT INTO `merchant` VALUES (97, 'alfamart', 'cash-in', 'outlet', 1973, '2019-11-05');
INSERT INTO `merchant` VALUES (98, 'alfamart', 'cash-in', 'outlet', 1858, '2019-11-06');
INSERT INTO `merchant` VALUES (99, 'alfamart', 'cash-in', 'outlet', 1817, '2019-11-07');
INSERT INTO `merchant` VALUES (100, 'alfamart', 'cash-in', 'outlet', 1795, '2019-11-08');
INSERT INTO `merchant` VALUES (101, 'alfamart', 'cash-in', 'outlet', 1838, '2019-11-09');
INSERT INTO `merchant` VALUES (102, 'alfamart', 'cash-in', 'outlet', 1248, '2019-11-10');
INSERT INTO `merchant` VALUES (103, 'alfamart', 'cash-in', 'outlet', 1285, '2019-11-11');
INSERT INTO `merchant` VALUES (104, 'alfamart', 'cash-in', 'outlet', 1835, '2019-11-12');
INSERT INTO `merchant` VALUES (105, 'alfamart', 'cash-in', 'outlet', 1840, '2019-11-13');
INSERT INTO `merchant` VALUES (106, 'alfamart', 'cash-in', 'outlet', 1825, '2019-11-14');
INSERT INTO `merchant` VALUES (107, 'alfamart', 'cash-in', 'outlet', 1911, '2019-11-15');
INSERT INTO `merchant` VALUES (108, 'alfamart', 'cash-in', 'outlet', 1947, '2019-11-16');
INSERT INTO `merchant` VALUES (109, 'alfamart', 'cash-in', 'outlet', 724, '2019-11-17');
INSERT INTO `merchant` VALUES (110, 'alfamart', 'cash-in', 'outlet', 1631, '2019-11-18');
INSERT INTO `merchant` VALUES (111, 'alfamart', 'cash-in', 'outlet', 2027, '2019-11-19');
INSERT INTO `merchant` VALUES (112, 'alfamart', 'cash-in', 'outlet', 1777, '2019-11-20');
INSERT INTO `merchant` VALUES (113, 'alfamart', 'cash-in', 'outlet', 1530, '2019-11-21');
INSERT INTO `merchant` VALUES (114, 'alfamart', 'cash-in', 'outlet', 2, '2019-11-22');
INSERT INTO `merchant` VALUES (115, 'alfamart', 'cash-in', 'outlet', 2, '2019-11-23');
INSERT INTO `merchant` VALUES (116, 'alfamart', 'cash-in', 'user', 2499, '2019-11-01');
INSERT INTO `merchant` VALUES (117, 'alfamart', 'cash-in', 'user', 2712, '2019-11-02');
INSERT INTO `merchant` VALUES (118, 'alfamart', 'cash-in', 'user', 1868, '2019-11-03');
INSERT INTO `merchant` VALUES (119, 'alfamart', 'cash-in', 'user', 1063, '2019-11-04');
INSERT INTO `merchant` VALUES (120, 'alfamart', 'cash-in', 'user', 3212, '2019-11-05');
INSERT INTO `merchant` VALUES (121, 'alfamart', 'cash-in', 'user', 2713, '2019-11-06');
INSERT INTO `merchant` VALUES (122, 'alfamart', 'cash-in', 'user', 2582, '2019-11-07');
INSERT INTO `merchant` VALUES (123, 'alfamart', 'cash-in', 'user', 2685, '2019-11-08');
INSERT INTO `merchant` VALUES (124, 'alfamart', 'cash-in', 'user', 2611, '2019-11-09');
INSERT INTO `merchant` VALUES (125, 'alfamart', 'cash-in', 'user', 1617, '2019-11-10');
INSERT INTO `merchant` VALUES (126, 'alfamart', 'cash-in', 'user', 1701, '2019-11-11');
INSERT INTO `merchant` VALUES (127, 'alfamart', 'cash-in', 'user', 2604, '2019-11-12');
INSERT INTO `merchant` VALUES (128, 'alfamart', 'cash-in', 'user', 2474, '2019-11-13');
INSERT INTO `merchant` VALUES (129, 'alfamart', 'cash-in', 'user', 2663, '2019-11-14');
INSERT INTO `merchant` VALUES (130, 'alfamart', 'cash-in', 'user', 2734, '2019-11-15');
INSERT INTO `merchant` VALUES (131, 'alfamart', 'cash-in', 'user', 2654, '2019-11-16');
INSERT INTO `merchant` VALUES (132, 'alfamart', 'cash-in', 'user', 854, '2019-11-17');
INSERT INTO `merchant` VALUES (133, 'alfamart', 'cash-in', 'user', 2074, '2019-11-18');
INSERT INTO `merchant` VALUES (134, 'alfamart', 'cash-in', 'user', 2777, '2019-11-19');
INSERT INTO `merchant` VALUES (135, 'alfamart', 'cash-in', 'user', 2367, '2019-11-20');
INSERT INTO `merchant` VALUES (136, 'alfamart', 'cash-in', 'user', 2187, '2019-11-21');
INSERT INTO `merchant` VALUES (137, 'alfamart', 'cash-in', 'user', 3, '2019-11-22');
INSERT INTO `merchant` VALUES (138, 'alfamart', 'cash-in', 'user', 2, '2019-11-23');
INSERT INTO `merchant` VALUES (139, 'alfamart', 'cash-in', 'trx', 2901, '2019-11-01');
INSERT INTO `merchant` VALUES (140, 'alfamart', 'cash-in', 'trx', 3215, '2019-11-02');
INSERT INTO `merchant` VALUES (141, 'alfamart', 'cash-in', 'trx', 2301, '2019-11-03');
INSERT INTO `merchant` VALUES (142, 'alfamart', 'cash-in', 'trx', 1237, '2019-11-04');
INSERT INTO `merchant` VALUES (143, 'alfamart', 'cash-in', 'trx', 3816, '2019-11-05');
INSERT INTO `merchant` VALUES (144, 'alfamart', 'cash-in', 'trx', 3151, '2019-11-06');
INSERT INTO `merchant` VALUES (145, 'alfamart', 'cash-in', 'trx', 3048, '2019-11-07');
INSERT INTO `merchant` VALUES (146, 'alfamart', 'cash-in', 'trx', 3145, '2019-11-08');
INSERT INTO `merchant` VALUES (147, 'alfamart', 'cash-in', 'trx', 3165, '2019-11-09');
INSERT INTO `merchant` VALUES (148, 'alfamart', 'cash-in', 'trx', 1901, '2019-11-10');
INSERT INTO `merchant` VALUES (149, 'alfamart', 'cash-in', 'trx', 2043, '2019-11-11');
INSERT INTO `merchant` VALUES (150, 'alfamart', 'cash-in', 'trx', 3150, '2019-11-12');
INSERT INTO `merchant` VALUES (151, 'alfamart', 'cash-in', 'trx', 2994, '2019-11-13');
INSERT INTO `merchant` VALUES (152, 'alfamart', 'cash-in', 'trx', 3216, '2019-11-14');
INSERT INTO `merchant` VALUES (153, 'alfamart', 'cash-in', 'trx', 3331, '2019-11-15');
INSERT INTO `merchant` VALUES (154, 'alfamart', 'cash-in', 'trx', 3247, '2019-11-16');
INSERT INTO `merchant` VALUES (155, 'alfamart', 'cash-in', 'trx', 1030, '2019-11-17');
INSERT INTO `merchant` VALUES (156, 'alfamart', 'cash-in', 'trx', 2589, '2019-11-18');
INSERT INTO `merchant` VALUES (157, 'alfamart', 'cash-in', 'trx', 3498, '2019-11-19');
INSERT INTO `merchant` VALUES (158, 'alfamart', 'cash-in', 'trx', 3014, '2019-11-20');
INSERT INTO `merchant` VALUES (159, 'alfamart', 'cash-in', 'trx', 2660, '2019-11-21');
INSERT INTO `merchant` VALUES (160, 'alfamart', 'cash-in', 'trx', 3802, '2019-11-22');
INSERT INTO `merchant` VALUES (161, 'alfamart', 'cash-in', 'trx', 3444, '2019-11-23');
INSERT INTO `merchant` VALUES (162, 'alfamart', 'cash-in', 'gtv', 324010000, '2019-11-01');
INSERT INTO `merchant` VALUES (163, 'alfamart', 'cash-in', 'gtv', 373700000, '2019-11-02');
INSERT INTO `merchant` VALUES (164, 'alfamart', 'cash-in', 'gtv', 260280000, '2019-11-03');
INSERT INTO `merchant` VALUES (165, 'alfamart', 'cash-in', 'gtv', 143440000, '2019-11-04');
INSERT INTO `merchant` VALUES (166, 'alfamart', 'cash-in', 'gtv', 474320000, '2019-11-05');
INSERT INTO `merchant` VALUES (167, 'alfamart', 'cash-in', 'gtv', 364000000, '2019-11-06');
INSERT INTO `merchant` VALUES (168, 'alfamart', 'cash-in', 'gtv', 353060000, '2019-11-07');
INSERT INTO `merchant` VALUES (169, 'alfamart', 'cash-in', 'gtv', 361090000, '2019-11-08');
INSERT INTO `merchant` VALUES (170, 'alfamart', 'cash-in', 'gtv', 377870000, '2019-11-09');
INSERT INTO `merchant` VALUES (171, 'alfamart', 'cash-in', 'gtv', 217760000, '2019-11-10');
INSERT INTO `merchant` VALUES (172, 'alfamart', 'cash-in', 'gtv', 249650000, '2019-11-11');
INSERT INTO `merchant` VALUES (173, 'alfamart', 'cash-in', 'gtv', 389280000, '2019-11-12');
INSERT INTO `merchant` VALUES (174, 'alfamart', 'cash-in', 'gtv', 388380000, '2019-11-13');
INSERT INTO `merchant` VALUES (175, 'alfamart', 'cash-in', 'gtv', 380980000, '2019-11-14');
INSERT INTO `merchant` VALUES (176, 'alfamart', 'cash-in', 'gtv', 415460000, '2019-11-15');
INSERT INTO `merchant` VALUES (177, 'alfamart', 'cash-in', 'gtv', 412670000, '2019-11-16');
INSERT INTO `merchant` VALUES (178, 'alfamart', 'cash-in', 'gtv', 127390000, '2019-11-17');
INSERT INTO `merchant` VALUES (179, 'alfamart', 'cash-in', 'gtv', 352450000, '2019-11-18');
INSERT INTO `merchant` VALUES (180, 'alfamart', 'cash-in', 'gtv', 470050000, '2019-11-19');
INSERT INTO `merchant` VALUES (181, 'alfamart', 'cash-in', 'gtv', 406220000, '2019-11-20');
INSERT INTO `merchant` VALUES (182, 'alfamart', 'cash-in', 'gtv', 334680000, '2019-11-21');
INSERT INTO `merchant` VALUES (183, 'alfamart', 'cash-in', 'gtv', 487880000, '2019-11-22');
INSERT INTO `merchant` VALUES (184, 'alfamart', 'cash-in', 'gtv', 448780000, '2019-11-23');
INSERT INTO `merchant` VALUES (185, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 161, '2019-11-01');
INSERT INTO `merchant` VALUES (186, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 168, '2019-11-02');
INSERT INTO `merchant` VALUES (187, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 180, '2019-11-03');
INSERT INTO `merchant` VALUES (188, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 192, '2019-11-04');
INSERT INTO `merchant` VALUES (189, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 207, '2019-11-05');
INSERT INTO `merchant` VALUES (190, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 172, '2019-11-06');
INSERT INTO `merchant` VALUES (191, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 156, '2019-11-07');
INSERT INTO `merchant` VALUES (192, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 163, '2019-11-08');
INSERT INTO `merchant` VALUES (193, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 163, '2019-11-09');
INSERT INTO `merchant` VALUES (194, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 190, '2019-11-10');
INSERT INTO `merchant` VALUES (195, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 176, '2019-11-11');
INSERT INTO `merchant` VALUES (196, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 172, '2019-11-12');
INSERT INTO `merchant` VALUES (197, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 148, '2019-11-13');
INSERT INTO `merchant` VALUES (198, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 163, '2019-11-14');
INSERT INTO `merchant` VALUES (199, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 185, '2019-11-15');
INSERT INTO `merchant` VALUES (200, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 182, '2019-11-16');
INSERT INTO `merchant` VALUES (201, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 193, '2019-11-17');
INSERT INTO `merchant` VALUES (202, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 183, '2019-11-18');
INSERT INTO `merchant` VALUES (203, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 190, '2019-11-19');
INSERT INTO `merchant` VALUES (204, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 156, '2019-11-20');
INSERT INTO `merchant` VALUES (205, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 131, '2019-11-21');
INSERT INTO `merchant` VALUES (206, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 183, '2019-11-22');
INSERT INTO `merchant` VALUES (207, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'outlet', 165, '2019-11-23');
INSERT INTO `merchant` VALUES (208, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 201, '2019-11-01');
INSERT INTO `merchant` VALUES (209, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 203, '2019-11-02');
INSERT INTO `merchant` VALUES (210, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 231, '2019-11-03');
INSERT INTO `merchant` VALUES (211, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 273, '2019-11-04');
INSERT INTO `merchant` VALUES (212, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 254, '2019-11-05');
INSERT INTO `merchant` VALUES (213, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 222, '2019-11-06');
INSERT INTO `merchant` VALUES (214, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 203, '2019-11-07');
INSERT INTO `merchant` VALUES (215, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 202, '2019-11-08');
INSERT INTO `merchant` VALUES (216, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 204, '2019-11-09');
INSERT INTO `merchant` VALUES (217, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 232, '2019-11-10');
INSERT INTO `merchant` VALUES (218, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 215, '2019-11-11');
INSERT INTO `merchant` VALUES (219, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 213, '2019-11-12');
INSERT INTO `merchant` VALUES (220, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 202, '2019-11-13');
INSERT INTO `merchant` VALUES (221, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 206, '2019-11-14');
INSERT INTO `merchant` VALUES (222, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 250, '2019-11-15');
INSERT INTO `merchant` VALUES (223, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 236, '2019-11-16');
INSERT INTO `merchant` VALUES (224, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 268, '2019-11-17');
INSERT INTO `merchant` VALUES (225, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 257, '2019-11-18');
INSERT INTO `merchant` VALUES (226, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 243, '2019-11-19');
INSERT INTO `merchant` VALUES (227, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 193, '2019-11-20');
INSERT INTO `merchant` VALUES (228, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 174, '2019-11-21');
INSERT INTO `merchant` VALUES (229, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 230, '2019-11-22');
INSERT INTO `merchant` VALUES (230, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'user', 213, '2019-11-23');
INSERT INTO `merchant` VALUES (231, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 253, '2019-11-01');
INSERT INTO `merchant` VALUES (232, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 260, '2019-11-02');
INSERT INTO `merchant` VALUES (233, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 281, '2019-11-03');
INSERT INTO `merchant` VALUES (234, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 325, '2019-11-04');
INSERT INTO `merchant` VALUES (235, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 306, '2019-11-05');
INSERT INTO `merchant` VALUES (236, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 277, '2019-11-06');
INSERT INTO `merchant` VALUES (237, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 256, '2019-11-07');
INSERT INTO `merchant` VALUES (238, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 244, '2019-11-08');
INSERT INTO `merchant` VALUES (239, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 243, '2019-11-09');
INSERT INTO `merchant` VALUES (240, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 281, '2019-11-10');
INSERT INTO `merchant` VALUES (241, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 274, '2019-11-11');
INSERT INTO `merchant` VALUES (242, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 266, '2019-11-12');
INSERT INTO `merchant` VALUES (243, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 276, '2019-11-13');
INSERT INTO `merchant` VALUES (244, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 264, '2019-11-14');
INSERT INTO `merchant` VALUES (245, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 309, '2019-11-15');
INSERT INTO `merchant` VALUES (246, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 321, '2019-11-16');
INSERT INTO `merchant` VALUES (247, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 327, '2019-11-17');
INSERT INTO `merchant` VALUES (248, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 306, '2019-11-18');
INSERT INTO `merchant` VALUES (249, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 351, '2019-11-19');
INSERT INTO `merchant` VALUES (250, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 269, '2019-11-20');
INSERT INTO `merchant` VALUES (251, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 228, '2019-11-21');
INSERT INTO `merchant` VALUES (252, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 327, '2019-11-22');
INSERT INTO `merchant` VALUES (253, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'trx', 270, '2019-11-23');
INSERT INTO `merchant` VALUES (254, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 34970000, '2019-11-01');
INSERT INTO `merchant` VALUES (255, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 33420000, '2019-11-02');
INSERT INTO `merchant` VALUES (256, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 35060000, '2019-11-03');
INSERT INTO `merchant` VALUES (257, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 42760000, '2019-11-04');
INSERT INTO `merchant` VALUES (258, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 41360000, '2019-11-05');
INSERT INTO `merchant` VALUES (259, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 36650000, '2019-11-06');
INSERT INTO `merchant` VALUES (260, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 33860000, '2019-11-07');
INSERT INTO `merchant` VALUES (261, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 31520000, '2019-11-08');
INSERT INTO `merchant` VALUES (262, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 30780000, '2019-11-09');
INSERT INTO `merchant` VALUES (263, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 36780000, '2019-11-10');
INSERT INTO `merchant` VALUES (264, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 37290000, '2019-11-11');
INSERT INTO `merchant` VALUES (265, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 34610000, '2019-11-12');
INSERT INTO `merchant` VALUES (266, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 39210000, '2019-11-13');
INSERT INTO `merchant` VALUES (267, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 32240000, '2019-11-14');
INSERT INTO `merchant` VALUES (268, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 45430000, '2019-11-15');
INSERT INTO `merchant` VALUES (269, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 45040000, '2019-11-16');
INSERT INTO `merchant` VALUES (270, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 43520000, '2019-11-17');
INSERT INTO `merchant` VALUES (271, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 39220000, '2019-11-18');
INSERT INTO `merchant` VALUES (272, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 51340000, '2019-11-19');
INSERT INTO `merchant` VALUES (273, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 40820000, '2019-11-20');
INSERT INTO `merchant` VALUES (274, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 34070000, '2019-11-21');
INSERT INTO `merchant` VALUES (275, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 45800000, '2019-11-22');
INSERT INTO `merchant` VALUES (276, 'PT. MIDI UTAMA INDONESIA Tbk', 'cash-in', 'gtv', 35500000, '2019-11-23');
INSERT INTO `merchant` VALUES (277, 'PT POS Indonesia', 'cash-in', 'outlet', 13, '2019-11-01');
INSERT INTO `merchant` VALUES (278, 'PT POS Indonesia', 'cash-in', 'outlet', 17, '2019-11-02');
INSERT INTO `merchant` VALUES (279, 'PT POS Indonesia', 'cash-in', 'outlet', 2, '2019-11-03');
INSERT INTO `merchant` VALUES (280, 'PT POS Indonesia', 'cash-in', 'outlet', 25, '2019-11-04');
INSERT INTO `merchant` VALUES (281, 'PT POS Indonesia', 'cash-in', 'outlet', 28, '2019-11-05');
INSERT INTO `merchant` VALUES (282, 'PT POS Indonesia', 'cash-in', 'outlet', 1, '2019-11-06');
INSERT INTO `merchant` VALUES (283, 'PT POS Indonesia', 'cash-in', 'outlet', 21, '2019-11-07');
INSERT INTO `merchant` VALUES (284, 'PT POS Indonesia', 'cash-in', 'outlet', 24, '2019-11-08');
INSERT INTO `merchant` VALUES (285, 'PT POS Indonesia', 'cash-in', 'outlet', 2, '2019-11-09');
INSERT INTO `merchant` VALUES (286, 'PT POS Indonesia', 'cash-in', 'outlet', 5, '2019-11-10');
INSERT INTO `merchant` VALUES (287, 'PT POS Indonesia', 'cash-in', 'outlet', 13, '2019-11-11');
INSERT INTO `merchant` VALUES (288, 'PT POS Indonesia', 'cash-in', 'outlet', 16, '2019-11-12');
INSERT INTO `merchant` VALUES (289, 'PT POS Indonesia', 'cash-in', 'outlet', 12, '2019-11-13');
INSERT INTO `merchant` VALUES (290, 'PT POS Indonesia', 'cash-in', 'outlet', 25, '2019-11-14');
INSERT INTO `merchant` VALUES (291, 'PT POS Indonesia', 'cash-in', 'outlet', 18, '2019-11-15');
INSERT INTO `merchant` VALUES (292, 'PT POS Indonesia', 'cash-in', 'outlet', 27, '2019-11-16');
INSERT INTO `merchant` VALUES (293, 'PT POS Indonesia', 'cash-in', 'outlet', 3, '2019-11-17');
INSERT INTO `merchant` VALUES (294, 'PT POS Indonesia', 'cash-in', 'outlet', 24, '2019-11-18');
INSERT INTO `merchant` VALUES (295, 'PT POS Indonesia', 'cash-in', 'outlet', 0, '2019-11-19');
INSERT INTO `merchant` VALUES (296, 'PT POS Indonesia', 'cash-in', 'outlet', 23, '2019-11-20');
INSERT INTO `merchant` VALUES (297, 'PT POS Indonesia', 'cash-in', 'outlet', 19, '2019-11-21');
INSERT INTO `merchant` VALUES (298, 'PT POS Indonesia', 'cash-in', 'outlet', 24, '2019-11-22');
INSERT INTO `merchant` VALUES (299, 'PT POS Indonesia', 'cash-in', 'outlet', 19, '2019-11-23');
INSERT INTO `merchant` VALUES (300, 'PT POS Indonesia', 'cash-in', 'user', 753, '2019-11-01');
INSERT INTO `merchant` VALUES (301, 'PT POS Indonesia', 'cash-in', 'user', 746, '2019-11-02');
INSERT INTO `merchant` VALUES (302, 'PT POS Indonesia', 'cash-in', 'user', 726, '2019-11-03');
INSERT INTO `merchant` VALUES (303, 'PT POS Indonesia', 'cash-in', 'user', 1388, '2019-11-04');
INSERT INTO `merchant` VALUES (304, 'PT POS Indonesia', 'cash-in', 'user', 1794, '2019-11-05');
INSERT INTO `merchant` VALUES (305, 'PT POS Indonesia', 'cash-in', 'user', 29, '2019-11-06');
INSERT INTO `merchant` VALUES (306, 'PT POS Indonesia', 'cash-in', 'user', 1688, '2019-11-07');
INSERT INTO `merchant` VALUES (307, 'PT POS Indonesia', 'cash-in', 'user', 1453, '2019-11-08');
INSERT INTO `merchant` VALUES (308, 'PT POS Indonesia', 'cash-in', 'user', 582, '2019-11-09');
INSERT INTO `merchant` VALUES (309, 'PT POS Indonesia', 'cash-in', 'user', 1673, '2019-11-10');
INSERT INTO `merchant` VALUES (310, 'PT POS Indonesia', 'cash-in', 'user', 1016, '2019-11-11');
INSERT INTO `merchant` VALUES (311, 'PT POS Indonesia', 'cash-in', 'user', 983, '2019-11-12');
INSERT INTO `merchant` VALUES (312, 'PT POS Indonesia', 'cash-in', 'user', 1469, '2019-11-13');
INSERT INTO `merchant` VALUES (313, 'PT POS Indonesia', 'cash-in', 'user', 1474, '2019-11-14');
INSERT INTO `merchant` VALUES (314, 'PT POS Indonesia', 'cash-in', 'user', 835, '2019-11-15');
INSERT INTO `merchant` VALUES (315, 'PT POS Indonesia', 'cash-in', 'user', 133, '2019-11-16');
INSERT INTO `merchant` VALUES (316, 'PT POS Indonesia', 'cash-in', 'user', 29, '2019-11-17');
INSERT INTO `merchant` VALUES (317, 'PT POS Indonesia', 'cash-in', 'user', 143, '2019-11-18');
INSERT INTO `merchant` VALUES (318, 'PT POS Indonesia', 'cash-in', 'user', 0, '2019-11-19');
INSERT INTO `merchant` VALUES (319, 'PT POS Indonesia', 'cash-in', 'user', 40, '2019-11-20');
INSERT INTO `merchant` VALUES (320, 'PT POS Indonesia', 'cash-in', 'user', 43, '2019-11-21');
INSERT INTO `merchant` VALUES (321, 'PT POS Indonesia', 'cash-in', 'user', 70, '2019-11-22');
INSERT INTO `merchant` VALUES (322, 'PT POS Indonesia', 'cash-in', 'user', 34, '2019-11-23');
INSERT INTO `merchant` VALUES (323, 'PT POS Indonesia', 'cash-in', 'trx', 914, '2019-11-01');
INSERT INTO `merchant` VALUES (324, 'PT POS Indonesia', 'cash-in', 'trx', 1004, '2019-11-02');
INSERT INTO `merchant` VALUES (325, 'PT POS Indonesia', 'cash-in', 'trx', 1016, '2019-11-03');
INSERT INTO `merchant` VALUES (326, 'PT POS Indonesia', 'cash-in', 'trx', 1651, '2019-11-04');
INSERT INTO `merchant` VALUES (327, 'PT POS Indonesia', 'cash-in', 'trx', 2140, '2019-11-05');
INSERT INTO `merchant` VALUES (328, 'PT POS Indonesia', 'cash-in', 'trx', 32, '2019-11-06');
INSERT INTO `merchant` VALUES (329, 'PT POS Indonesia', 'cash-in', 'trx', 2221, '2019-11-07');
INSERT INTO `merchant` VALUES (330, 'PT POS Indonesia', 'cash-in', 'trx', 1980, '2019-11-08');
INSERT INTO `merchant` VALUES (331, 'PT POS Indonesia', 'cash-in', 'trx', 760, '2019-11-09');
INSERT INTO `merchant` VALUES (332, 'PT POS Indonesia', 'cash-in', 'trx', 2074, '2019-11-10');
INSERT INTO `merchant` VALUES (333, 'PT POS Indonesia', 'cash-in', 'trx', 1281, '2019-11-11');
INSERT INTO `merchant` VALUES (334, 'PT POS Indonesia', 'cash-in', 'trx', 1380, '2019-11-12');
INSERT INTO `merchant` VALUES (335, 'PT POS Indonesia', 'cash-in', 'trx', 1711, '2019-11-13');
INSERT INTO `merchant` VALUES (336, 'PT POS Indonesia', 'cash-in', 'trx', 1772, '2019-11-14');
INSERT INTO `merchant` VALUES (337, 'PT POS Indonesia', 'cash-in', 'trx', 1061, '2019-11-15');
INSERT INTO `merchant` VALUES (338, 'PT POS Indonesia', 'cash-in', 'trx', 155, '2019-11-16');
INSERT INTO `merchant` VALUES (339, 'PT POS Indonesia', 'cash-in', 'trx', 0, '2019-11-17');
INSERT INTO `merchant` VALUES (340, 'PT POS Indonesia', 'cash-in', 'trx', 163, '2019-11-18');
INSERT INTO `merchant` VALUES (341, 'PT POS Indonesia', 'cash-in', 'trx', 0, '2019-11-19');
INSERT INTO `merchant` VALUES (342, 'PT POS Indonesia', 'cash-in', 'trx', 59, '2019-11-20');
INSERT INTO `merchant` VALUES (343, 'PT POS Indonesia', 'cash-in', 'trx', 75, '2019-11-21');
INSERT INTO `merchant` VALUES (344, 'PT POS Indonesia', 'cash-in', 'trx', 106, '2019-11-22');
INSERT INTO `merchant` VALUES (345, 'PT POS Indonesia', 'cash-in', 'trx', 46, '2019-11-23');
INSERT INTO `merchant` VALUES (346, 'PT POS Indonesia', 'cash-in', 'gtv', 89992000, '2019-11-01');
INSERT INTO `merchant` VALUES (347, 'PT POS Indonesia', 'cash-in', 'gtv', 97312000, '2019-11-02');
INSERT INTO `merchant` VALUES (348, 'PT POS Indonesia', 'cash-in', 'gtv', 99158000, '2019-11-03');
INSERT INTO `merchant` VALUES (349, 'PT POS Indonesia', 'cash-in', 'gtv', 162298000, '2019-11-04');
INSERT INTO `merchant` VALUES (350, 'PT POS Indonesia', 'cash-in', 'gtv', 209830000, '2019-11-05');
INSERT INTO `merchant` VALUES (351, 'PT POS Indonesia', 'cash-in', 'gtv', 2916000, '2019-11-06');
INSERT INTO `merchant` VALUES (352, 'PT POS Indonesia', 'cash-in', 'gtv', 215948000, '2019-11-07');
INSERT INTO `merchant` VALUES (353, 'PT POS Indonesia', 'cash-in', 'gtv', 193690000, '2019-11-08');
INSERT INTO `merchant` VALUES (354, 'PT POS Indonesia', 'cash-in', 'gtv', 74200000, '2019-11-09');
INSERT INTO `merchant` VALUES (355, 'PT POS Indonesia', 'cash-in', 'gtv', 202732000, '2019-11-10');
INSERT INTO `merchant` VALUES (356, 'PT POS Indonesia', 'cash-in', 'gtv', 124938000, '2019-11-11');
INSERT INTO `merchant` VALUES (357, 'PT POS Indonesia', 'cash-in', 'gtv', 135350000, '2019-11-12');
INSERT INTO `merchant` VALUES (358, 'PT POS Indonesia', 'cash-in', 'gtv', 167178000, '2019-11-13');
INSERT INTO `merchant` VALUES (359, 'PT POS Indonesia', 'cash-in', 'gtv', 173606000, '2019-11-14');
INSERT INTO `merchant` VALUES (360, 'PT POS Indonesia', 'cash-in', 'gtv', 103788000, '2019-11-15');
INSERT INTO `merchant` VALUES (361, 'PT POS Indonesia', 'cash-in', 'gtv', 15370000, '2019-11-16');
INSERT INTO `merchant` VALUES (362, 'PT POS Indonesia', 'cash-in', 'gtv', 2652000, '2019-11-17');
INSERT INTO `merchant` VALUES (363, 'PT POS Indonesia', 'cash-in', 'gtv', 15014000, '2019-11-18');
INSERT INTO `merchant` VALUES (364, 'PT POS Indonesia', 'cash-in', 'gtv', 0, '2019-11-19');
INSERT INTO `merchant` VALUES (365, 'PT POS Indonesia', 'cash-in', 'gtv', 5792000, '2019-11-20');
INSERT INTO `merchant` VALUES (366, 'PT POS Indonesia', 'cash-in', 'gtv', 6070000, '2019-11-21');
INSERT INTO `merchant` VALUES (367, 'PT POS Indonesia', 'cash-in', 'gtv', 8988000, '2019-11-22');
INSERT INTO `merchant` VALUES (368, 'PT POS Indonesia', 'cash-in', 'gtv', 4658000, '2019-11-23');

-- --------------------------------------------------------

-- 
-- Table structure for table `mtd`
-- 

CREATE TABLE `mtd` (
  `id` int(11) NOT NULL auto_increment,
  `jenis` varchar(20) NOT NULL,
  `outlet` bigint(20) NOT NULL,
  `user` bigint(20) NOT NULL,
  `trx` bigint(20) NOT NULL,
  `volume` bigint(20) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- 
-- Dumping data for table `mtd`
-- 

INSERT INTO `mtd` VALUES (1, 'cash-in', 461, 10310, 12035, 1936950500, '2019-11-01');
INSERT INTO `mtd` VALUES (2, 'cash-in', 1259, 20039, 24348, 3957591900, '2019-11-02');
INSERT INTO `mtd` VALUES (3, 'cash-in', 2126, 28669, 35786, 5810182600, '2019-11-03');
INSERT INTO `mtd` VALUES (4, 'cash-in', 2901, 37149, 47090, 7772120800, '2019-11-04');
INSERT INTO `mtd` VALUES (5, 'cash-in', 3793, 47360, 61378, 10067127000, '2019-11-05');
INSERT INTO `mtd` VALUES (6, 'cash-in', 4701, 54516, 72413, 11993793600, '2019-11-06');
INSERT INTO `mtd` VALUES (7, 'cash-in', 5476, 62632, 85163, 14077212400, '2019-11-07');
INSERT INTO `mtd` VALUES (8, 'cash-in', 6294, 70303, 98090, 16214919300, '2019-11-08');
INSERT INTO `mtd` VALUES (9, 'cash-in', 7044, 76531, 109090, 18126239700, '2019-11-09');
INSERT INTO `mtd` VALUES (10, 'cash-in', 7708, 83584, 121069, 20127347900, '2019-11-10');
INSERT INTO `mtd` VALUES (11, 'cash-in', 8329, 89768, 132646, 22304177100, '2019-11-11');
INSERT INTO `mtd` VALUES (12, 'cash-in', 9018, 96734, 145300, 24491864500, '2019-11-12');
INSERT INTO `mtd` VALUES (13, 'cash-in', 9580, 103461, 157819, 26595890100, '2019-11-13');
INSERT INTO `mtd` VALUES (14, 'cash-in', 10195, 110211, 171344, 28783313900, '2019-11-14');
INSERT INTO `mtd` VALUES (15, 'cash-in', 10871, 116766, 184595, 31136251300, '2019-11-15');
INSERT INTO `mtd` VALUES (16, 'cash-in', 11515, 122365, 197611, 33528783900, '2019-11-16');
INSERT INTO `mtd` VALUES (17, 'cash-in', 11913, 126349, 207759, 35490378154, '2019-11-17');
INSERT INTO `mtd` VALUES (18, 'cash-in', 12421, 131022, 219646, 37809957354, '2019-11-18');
INSERT INTO `mtd` VALUES (19, 'cash-in', 12962, 135998, 233134, 40324324054, '2019-11-19');
INSERT INTO `mtd` VALUES (20, 'cash-in', 13500, 140889, 246946, 42974336054, '2019-11-20');
INSERT INTO `mtd` VALUES (21, 'cash-in', 13950, 145511, 259574, 45295617954, '2019-11-21');
INSERT INTO `mtd` VALUES (22, 'cash-in', 14518, 150929, 274979, 47912526354, '2019-11-22');
INSERT INTO `mtd` VALUES (23, 'cash-in', 14998, 155619, 287876, 50485817154, '2019-11-23');
INSERT INTO `mtd` VALUES (24, 'purchase', 244, 4767, 6306, 314767248, '2019-11-01');
INSERT INTO `mtd` VALUES (25, 'purchase', 478, 8973, 12628, 676682604, '2019-11-02');
INSERT INTO `mtd` VALUES (26, 'purchase', 731, 13115, 19454, 1046638049, '2019-11-03');
INSERT INTO `mtd` VALUES (27, 'purchase', 960, 16514, 25510, 1337058053, '2019-11-04');
INSERT INTO `mtd` VALUES (28, 'purchase', 1217, 19964, 31727, 1667043365, '2019-11-05');
INSERT INTO `mtd` VALUES (29, 'purchase', 1528, 22820, 38013, 1968216760, '2019-11-06');
INSERT INTO `mtd` VALUES (30, 'purchase', 1846, 25774, 44581, 2294193818, '2019-11-07');
INSERT INTO `mtd` VALUES (31, 'purchase', 2321, 29194, 53665, 2694113165, '2019-11-08');
INSERT INTO `mtd` VALUES (32, 'purchase', 2733, 32421, 62581, 3106700638, '2019-11-09');
INSERT INTO `mtd` VALUES (33, 'purchase', 3178, 35992, 72058, 3540488618, '2019-11-10');
INSERT INTO `mtd` VALUES (34, 'purchase', 3482, 38956, 78949, 3865827043, '2019-11-11');
INSERT INTO `mtd` VALUES (35, 'purchase', 3776, 42048, 86623, 4248783761, '2019-11-12');
INSERT INTO `mtd` VALUES (36, 'purchase', 4032, 44597, 92422, 4520394188, '2019-11-13');
INSERT INTO `mtd` VALUES (37, 'purchase', 4330, 47249, 98677, 4816002354, '2019-11-14');
INSERT INTO `mtd` VALUES (38, 'purchase', 4826, 50658, 108500, 5270565108, '2019-11-15');
INSERT INTO `mtd` VALUES (39, 'purchase', 5268, 53349, 118583, 5729115038, '2019-11-16');
INSERT INTO `mtd` VALUES (40, 'purchase', 5708, 55956, 129165, 6223471878, '2019-11-17');
INSERT INTO `mtd` VALUES (41, 'purchase', 5978, 58129, 136205, 6573977722, '2019-11-18');
INSERT INTO `mtd` VALUES (42, 'purchase', 6242, 60491, 143638, 6936708932, '2019-11-19');
INSERT INTO `mtd` VALUES (43, 'purchase', 6510, 63017, 151221, 7297379121, '2019-11-20');
INSERT INTO `mtd` VALUES (44, 'purchase', 6796, 65626, 159158, 7673084948, '2019-11-21');
INSERT INTO `mtd` VALUES (45, 'purchase', 7259, 68826, 171974, 8253110521, '2019-11-22');
INSERT INTO `mtd` VALUES (46, 'purchase', 7666, 71969, 185305, 8876540898, '2019-11-23');

-- --------------------------------------------------------

-- 
-- Table structure for table `p_analisa`
-- 

CREATE TABLE `p_analisa` (
  `id` int(11) NOT NULL auto_increment,
  `jenis` varchar(20) NOT NULL,
  `p_analisa` varchar(255) NOT NULL,
  `d_analisa` varchar(255) NOT NULL,
  `ma_analisa` varchar(255) NOT NULL,
  `mr_analisa` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `p_analisa`
-- 

INSERT INTO `p_analisa` VALUES (1, 'cash-in', 'ganti dasfdsftanya', 'daaaddgdgdg', 'ganti maunya', 'asddasdad');
INSERT INTO `p_analisa` VALUES (2, 'purchase', 'purchase', 'hasil purchase', 'ganti maunya', 'asddasdad');

-- --------------------------------------------------------

-- 
-- Table structure for table `pencapaian`
-- 

CREATE TABLE `pencapaian` (
  `id` int(11) NOT NULL auto_increment,
  `bulan` varchar(20) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `total` float NOT NULL,
  `target` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- 
-- Dumping data for table `pencapaian`
-- 

INSERT INTO `pencapaian` VALUES (1, 'januari', 'cash-in', 'user', 62026, 58225);
INSERT INTO `pencapaian` VALUES (2, 'februari', 'cash-in', 'user', 58307, 69036);
INSERT INTO `pencapaian` VALUES (3, 'maret', 'cash-in', 'user', 49631, 69597);
INSERT INTO `pencapaian` VALUES (4, 'april', 'cash-in', 'user', 137017, 74383);
INSERT INTO `pencapaian` VALUES (5, 'mei', 'cash-in', 'user', 101527, 75127);
INSERT INTO `pencapaian` VALUES (6, 'juni', 'cash-in', 'user', 103314, 75878);
INSERT INTO `pencapaian` VALUES (7, 'juli', 'cash-in', 'user', 89153, 81000);
INSERT INTO `pencapaian` VALUES (8, 'agustus', 'cash-in', 'user', 96763, 90500);
INSERT INTO `pencapaian` VALUES (9, 'september', 'cash-in', 'user', 151696, 101000);
INSERT INTO `pencapaian` VALUES (10, 'october', 'cash-in', 'user', 175038, 110000);
INSERT INTO `pencapaian` VALUES (11, 'januari', 'cash-in', 'outlet', 11397, 10000);
INSERT INTO `pencapaian` VALUES (12, 'februari', 'cash-in', 'outlet', 10234, 10000);
INSERT INTO `pencapaian` VALUES (13, 'maret', 'cash-in', 'outlet', 9589, 10250);
INSERT INTO `pencapaian` VALUES (14, 'april', 'cash-in', 'outlet', 16621, 10500);
INSERT INTO `pencapaian` VALUES (15, 'mei', 'cash-in', 'outlet', 13657, 10750);
INSERT INTO `pencapaian` VALUES (16, 'juni', 'cash-in', 'outlet', 15191, 11000);
INSERT INTO `pencapaian` VALUES (17, 'juli', 'cash-in', 'outlet', 13956, 11500);
INSERT INTO `pencapaian` VALUES (18, 'agustus', 'cash-in', 'outlet', 14020, 12000);
INSERT INTO `pencapaian` VALUES (19, 'september', 'cash-in', 'outlet', 14937, 12500);
INSERT INTO `pencapaian` VALUES (20, 'october', 'cash-in', 'outlet', 26488, 13000);
INSERT INTO `pencapaian` VALUES (21, 'januari', 'cash-in', 'trx', 129562, 118099);
INSERT INTO `pencapaian` VALUES (22, 'februari', 'cash-in', 'trx', 117448, 123946);
INSERT INTO `pencapaian` VALUES (23, 'maret', 'cash-in', 'trx', 123620, 142366);
INSERT INTO `pencapaian` VALUES (24, 'april', 'cash-in', 'trx', 224966, 143224);
INSERT INTO `pencapaian` VALUES (25, 'mei', 'cash-in', 'trx', 196015, 144656);
INSERT INTO `pencapaian` VALUES (26, 'juni', 'cash-in', 'trx', 213480, 146103);
INSERT INTO `pencapaian` VALUES (27, 'juli', 'cash-in', 'trx', 186258, 151500);
INSERT INTO `pencapaian` VALUES (28, 'agustus', 'cash-in', 'trx', 198865, 162000);
INSERT INTO `pencapaian` VALUES (29, 'september', 'cash-in', 'trx', 277188, 175000);
INSERT INTO `pencapaian` VALUES (30, 'october', 'cash-in', 'trx', 311336, 185000);
INSERT INTO `pencapaian` VALUES (31, 'januari', 'cash-in', 'gtv', 2.45117e+010, 2.36197e+010);
INSERT INTO `pencapaian` VALUES (32, 'februari', 'cash-in', 'gtv', 2.12584e+010, 2.47893e+010);
INSERT INTO `pencapaian` VALUES (33, 'maret', 'cash-in', 'gtv', 2.35898e+010, 2.84732e+010);
INSERT INTO `pencapaian` VALUES (34, 'april', 'cash-in', 'gtv', 3.02893e+010, 2.86448e+010);
INSERT INTO `pencapaian` VALUES (35, 'mei', 'cash-in', 'gtv', 3.25782e+010, 2.89313e+010);
INSERT INTO `pencapaian` VALUES (36, 'juni', 'cash-in', 'gtv', 2.81043e+010, 2.92206e+010);
INSERT INTO `pencapaian` VALUES (37, 'juli', 'cash-in', 'gtv', 3.29512e+010, 2.95e+010);
INSERT INTO `pencapaian` VALUES (38, 'agustus', 'cash-in', 'gtv', 3.54142e+010, 2.98e+010);
INSERT INTO `pencapaian` VALUES (39, 'september', 'cash-in', 'gtv', 4.54559e+010, 3.04e+010);
INSERT INTO `pencapaian` VALUES (40, 'october', 'cash-in', 'gtv', 5.0773e+010, 3.1e+010);

-- --------------------------------------------------------

-- 
-- Table structure for table `v_pilar`
-- 

CREATE TABLE `v_pilar` (
  `id` int(11) NOT NULL auto_increment,
  `kategori` varchar(50) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `volume` float NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

-- 
-- Dumping data for table `v_pilar`
-- 

INSERT INTO `v_pilar` VALUES (1, 'merchant', 'cash-in', 'Indomaret', 2.98e+010);
INSERT INTO `v_pilar` VALUES (2, 'merchant', 'cash-in', 'Alfamaret', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (3, 'merchant', 'cash-in', 'Alfamidi', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (4, 'merchant', 'cash-in', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (5, 'multifinances', 'cash-in', 'Best Finance', 2.98e+010);
INSERT INTO `v_pilar` VALUES (6, 'multifinances', 'cash-in', 'Kredit Plus', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (7, 'multifinances', 'cash-in', 'Jiwasraya', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (8, 'multifinances', 'cash-in', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (9, 'BUMN', 'cash-in', 'Kantor Pos', 2.98e+010);
INSERT INTO `v_pilar` VALUES (10, 'BUMN', 'cash-in', 'Pegadaian', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (11, 'BUMN', 'cash-in', 'Kimia Farma', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (12, 'BUMN', 'cash-in', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (13, 'apps', 'cash-in', 'Mobile Pulsa', 2.98e+010);
INSERT INTO `v_pilar` VALUES (14, 'apps', 'cash-in', 'Sepulsa', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (15, 'apps', 'cash-in', 'Anilo', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (16, 'apps', 'cash-in', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (17, 'merchant', 'purchase', 'Indomaret', 2.98e+010);
INSERT INTO `v_pilar` VALUES (18, 'merchant', 'purchase', 'Alfamaret', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (19, 'merchant', 'purchase', 'Alfamidi', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (20, 'merchant', 'purchase', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (21, 'multifinances', 'purchase', 'Best Finance', 2.98e+010);
INSERT INTO `v_pilar` VALUES (22, 'multifinances', 'purchase', 'Kredit Plus', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (23, 'multifinances', 'purchase', 'Jiwasraya', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (24, 'multifinances', 'purchase', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (25, 'BUMN', 'purchase', 'Kantor Pos', 2.98e+010);
INSERT INTO `v_pilar` VALUES (26, 'BUMN', 'purchase', 'Pegadaian', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (27, 'BUMN', 'purchase', 'Kimia Farma', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (28, 'BUMN', 'purchase', 'Other', 3.07333e+009);
INSERT INTO `v_pilar` VALUES (29, 'apps', 'purchase', 'Mobile Pulsa', 2.98e+010);
INSERT INTO `v_pilar` VALUES (30, 'apps', 'purchase', 'Sepulsa', 2.67267e+010);
INSERT INTO `v_pilar` VALUES (31, 'apps', 'purchase', 'Anilo', 4.30704e+010);
INSERT INTO `v_pilar` VALUES (32, 'apps', 'purchase', 'Other', 3.07333e+009);
