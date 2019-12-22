-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 10:33 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jr`
--

-- --------------------------------------------------------

--
-- Table structure for table `jr_data`
--

CREATE TABLE `jr_data` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nopol` varchar(35) NOT NULL,
  `pemilik` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(35) NOT NULL,
  `kondisi` text NOT NULL,
  `status` enum('Belum Diproses','Sudah Diproses','Selesai') NOT NULL,
  `masa_awal` date NOT NULL,
  `masa_akhir` date NOT NULL,
  `tarif` varchar(35) NOT NULL,
  `ttd` varchar(255) DEFAULT NULL,
  `regional` varchar(35) NOT NULL,
  `keterangan` text NOT NULL,
  `janji_bayar` date NOT NULL,
  `tanggal_pelaksanaan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_data`
--

INSERT INTO `jr_data` (`id`, `id_user`, `nopol`, `pemilik`, `alamat`, `no_telpon`, `kondisi`, `status`, `masa_awal`, `masa_akhir`, `tarif`, `ttd`, `regional`, `keterangan`, `janji_bayar`, `tanggal_pelaksanaan`) VALUES
(124962, 0, 'BM-7906-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-05-31', '2019-07-31', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124963, 0, 'BM-1604-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-12', '2019-09-12', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124964, 0, 'BM-1411-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-25', '2019-08-25', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124965, 0, 'BM-1621-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-07-26', '2019-09-26', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124966, 0, 'BM-1446-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-27', '2019-09-27', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124967, 0, 'BM-1437-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124968, 0, 'BM-7010-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-25', '2019-09-25', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124969, 0, 'BM-7954-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-06', '2019-08-06', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124970, 0, 'BM-1227-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124971, 0, 'BM-1740-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-21', '2019-09-21', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124972, 0, 'BM-1591-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-07-31', '2019-07-31', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124973, 0, 'BM-1405-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-25', '2019-08-25', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124974, 0, 'BM-1076-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124975, 0, 'BM-7335-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-10-25', '2019-09-25', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124976, 0, 'BM-1147-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124977, 0, 'BM-1435-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124978, 0, 'BM-7122-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-31', '2019-08-31', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124979, 0, 'BM-7107-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-08', '2019-09-08', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124980, 0, 'BM-1018-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-10', '2019-08-10', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124981, 0, 'BM-1521-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-03-25', '2019-08-25', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124982, 0, 'BM-1280-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124983, 0, 'BM-1439-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-27', '2019-09-27', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124984, 0, 'BM-1143-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124985, 0, 'BM-7496-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-05-14', '2019-08-14', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124986, 0, 'BM-7471-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-07', '2019-08-07', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124987, 0, 'BM-1433-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124988, 0, 'BM-1203-AW', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-01-31', '2019-08-31', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124989, 0, 'BM-1525-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-01', '2019-09-01', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124990, 0, 'BM-1675-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-15', '2019-09-15', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124991, 0, 'BM-1451-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-12', '2019-09-12', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124992, 0, 'BM-1410-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-29', '2019-08-29', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124993, 0, 'BM-7062-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-08-30', '2019-08-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124994, 0, 'BM-7037-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-08-30', '2019-08-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124995, 0, 'BM-1028-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2019-08-31', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124996, 0, 'BM-1766-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-20', '2019-08-20', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124997, 0, 'BM-1285-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124998, 0, 'BM-1436-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(124999, 0, 'BM-1768-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-20', '2019-09-20', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125000, 0, 'BM-7761-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-02', '2019-08-02', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125001, 0, 'BM-7026-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-08-31', '2019-08-31', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125002, 0, 'BM-1769-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-19', '2019-09-19', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125003, 0, 'BM-1767-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-19', '2019-09-19', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125004, 0, 'BM-1197-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125005, 0, 'BM-7108-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-08', '2019-09-08', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125006, 0, 'BM-1230-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125007, 0, 'BM-7166-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-01', '2019-09-01', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125008, 0, 'BM-1426-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125009, 0, 'BM-1289-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125010, 0, 'BM-1208-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125011, 0, 'BM-1605-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-14', '2019-09-14', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125012, 0, 'BM-1647-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-17', '2019-08-17', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125013, 0, 'BM-7046-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-08-30', '2019-08-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125014, 0, 'BM-1431-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125015, 0, 'BM-1137-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125016, 0, 'BM-1191-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125017, 0, 'BM-1173-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-10-19', '2019-09-19', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125018, 0, 'BM-1266-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-07-07', '2019-08-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125019, 0, 'BM-1703-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-12', '2019-09-12', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125020, 0, 'BM-1096-AW', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-06', '2019-09-06', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125021, 0, 'BM-1438-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-22', '2019-09-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125022, 0, 'BM-1753-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-08-16', '2019-09-16', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125023, 0, 'BM-1287-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125024, 0, 'BM-1282-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125025, 0, 'BM-1541-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2019-05-31', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125026, 0, 'BM-1145-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-04-07', '2019-05-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125027, 0, 'BM-1192-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-19', '2019-05-19', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125028, 0, 'BM-1689-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-19', '2019-05-19', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125029, 0, 'BM-7315-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-04', '2019-05-04', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125030, 0, 'BM-7123-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-07-12', '2019-07-12', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125031, 0, 'BM-7913-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-29', '2019-04-29', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125032, 0, 'BM-7314-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-04-22', '2019-05-22', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125033, 0, 'BM-7192-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-05-04', '2019-05-04', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125034, 0, 'BM-7452-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-15', '2019-07-15', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125035, 0, 'BM-1596-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-04-17', '2019-04-17', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125036, 0, 'BM-1622-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-09', '2019-05-09', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125037, 0, 'BM-7410-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-12', '2019-04-12', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125038, 0, 'BM-1237-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-05-03', '2019-06-03', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125039, 0, 'BM-7058-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-19', '2019-06-19', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125040, 0, 'BM-1571-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-01-14', '2019-04-14', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125041, 0, 'BM-7495-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-12-29', '2019-06-29', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125042, 0, 'BM-7839-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-05-30', '2019-06-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125043, 0, 'BM-1659-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-08-06', '2019-07-06', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125044, 0, 'BM-1516-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-21', '2019-06-21', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125045, 0, 'BM-7638-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-01', '2019-05-01', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125046, 0, 'BM-7300-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-06-01', '2019-07-01', '75000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125047, 0, 'BM-7907-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2019-06-29', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125048, 0, 'BM-7784-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-05-30', '2019-06-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125049, 0, 'BM-1568-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-06', '2019-05-06', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125050, 0, 'BM-1238-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-04-07', '2019-05-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125051, 0, 'BM-1238-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-04-07', '2019-05-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125052, 0, 'BM-1961-AO', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-10-22', '2019-04-22', '20000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125053, 0, 'BM-1148-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-04-07', '2019-05-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125054, 0, 'BM-7054-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-18', '2019-05-18', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125055, 0, 'BM-7319-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-11', '2019-05-11', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125056, 0, 'BM-7210-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-09', '2019-05-09', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125057, 0, 'BM-1105-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-03', '2019-07-03', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125058, 0, 'BM-1670-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-18', '2019-07-18', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125059, 0, 'BM-7101-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-23', '2019-05-23', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125060, 0, 'BM-7498-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-03', '2019-07-03', '45000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125061, 0, 'BM-7173-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-03-16', '2019-05-16', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125062, 0, 'BM-1714-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-12-03', '2019-06-03', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125063, 0, 'BM-7945-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-03', '2019-07-03', '45000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125064, 0, 'BM-7408-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-01-08', '2019-07-08', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125065, 0, 'BM-7909-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-03', '2019-07-03', '45000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125066, 0, 'BM-7236-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-13', '2019-06-13', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125067, 0, 'BM-7318-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-21', '2019-05-21', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125068, 0, 'BM-7411-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-12', '2019-04-12', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125069, 0, 'BM-1693-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-05-04', '2019-06-04', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125070, 0, 'BM-7497-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-01', '2019-06-01', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125071, 0, 'BM-1719-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2019-04-17', '2019-05-17', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125072, 0, 'BM-7603-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-10', '2019-06-10', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125073, 0, 'BM-7665-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-01-11', '2019-04-11', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125074, 0, 'BM-7071-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-08-30', '2019-05-30', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125075, 0, 'BM-7999-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-28', '2019-04-28', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125076, 0, 'BM-7048-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-28', '2019-06-28', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125077, 0, 'BM-7309-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2019-06-30', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125078, 0, 'BM-7836-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-05-30', '2019-06-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125079, 0, 'BM-7211-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-09', '2019-05-09', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125080, 0, 'BM-7783-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-05-30', '2019-06-30', '60000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125081, 0, 'BM-1575-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-29', '2019-06-29', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125082, 0, 'BM-1654-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-12', '2019-05-12', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125083, 0, 'BM-7115-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-07', '2019-06-07', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125084, 0, 'BM-7769-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-03', '2019-07-03', '45000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125085, 0, 'BM-1146-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-04-11', '2019-04-11', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125086, 0, 'BM-1539-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-12-15', '2019-04-15', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125087, 0, 'BM-7478-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-18', '2019-07-18', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125088, 0, 'BM-7194-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-12', '2019-03-12', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125089, 0, 'BM-1681-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-11-11', '2018-11-11', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125090, 0, 'BM-7905-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-06', '2018-12-06', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125091, 0, 'BM-7402-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-01', '2018-12-01', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125092, 0, 'BM-1139-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-24', '2019-03-24', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125093, 0, 'BM-1609-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-05', '2018-10-05', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125094, 0, 'BM-1648-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-08-22', '2018-11-22', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125095, 0, 'BM-1762-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-08', '2018-10-08', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125096, 0, 'BM-1566-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-04-07', '2019-01-07', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125097, 0, 'BM-1508-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-11-02', '2018-11-02', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125098, 0, 'BM-7888-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-09-30', '2018-11-30', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125099, 0, 'BM-7488-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-29', '2019-02-28', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125100, 0, 'BM-7232-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-02-02', '2018-11-02', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125101, 0, 'BM-7195-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-12', '2019-03-12', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125102, 0, 'BM-1251-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-05-22', '2019-01-22', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125103, 0, 'BM-1796-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-11-09', '2018-11-09', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125104, 0, 'BM-1545-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-05-02', '2018-11-02', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125105, 0, 'BM-1640-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-04', '2019-02-04', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125106, 0, 'BM-7148-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-01-16', '2019-01-16', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125107, 0, 'BM-1264-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-09-18', '2019-02-18', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125108, 0, 'BM-7495-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-01-16', '2019-01-16', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125109, 0, 'BM-1538-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-19', '2019-03-19', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125110, 0, 'BM-7260-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-12-23', '2018-12-23', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125111, 0, 'BM-1403-AW', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-31', '2018-11-30', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125112, 0, 'BM-1505-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2018-12-31', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125113, 0, 'BM-7896-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-01-15', '2019-01-15', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125114, 0, 'BM-7404-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-18', '2019-03-18', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125115, 0, 'BM-7090-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-10-25', '2018-11-25', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125116, 0, 'BM-1510-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2019-01-31', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125117, 0, 'BM-7825-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-12-07', '2018-12-07', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125118, 0, 'BM-1140-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-03-14', '2019-01-14', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125119, 0, 'BM-7418-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-08-23', '2018-12-23', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125120, 0, 'BM-7140-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-07-25', '2019-01-25', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125121, 0, 'BM-1684-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-09', '2019-02-09', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125122, 0, 'BM-7691-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-28', '2019-02-28', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125123, 0, 'BM-1742-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-09-06', '2018-09-06', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125124, 0, 'BM-7274-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-06-05', '2018-06-05', '48000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125125, 0, 'BM-1701-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-04-29', '2018-04-29', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125126, 0, 'BM-1425-AU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-06-29', '2018-07-29', '20000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125127, 0, 'BM-1684-AO', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2018-05-29', '20000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125128, 0, 'BM-7279-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-07-02', '2018-07-02', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125129, 0, 'BM-1708-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-06-06', '2018-06-06', '27000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125130, 0, 'BM-1743-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-09-14', '2018-09-14', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125131, 0, 'BM-7183-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-02-12', '2018-08-12', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125132, 0, 'BM-1756-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-08-23', '2018-08-23', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125133, 0, 'BM-1660-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-03-04', '2018-04-04', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125134, 0, 'BM-1726-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-12-19', '2017-12-19', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125135, 0, 'BM-7456-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2016-01-21', '2016-04-21', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125136, 0, 'BM-1560-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-05-01', '2018-07-01', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125137, 0, 'BM-1103-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-07-27', '2018-07-27', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125138, 0, 'BM-1057-QU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2018-02-07', '2018-03-07', '17000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125139, 0, 'BM-7221-TU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-08-05', '2018-08-05', '32000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125140, 0, 'BM-1552-JU', '', 'pekanbaru', '', 'beroperasi', 'Belum Diproses', '2017-09-13', '2018-09-21', '30000', NULL, 'pekanbaru', '', '0000-00-00', NULL),
(125141, 0, 'BM-7812-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-09-23', '2019-09-23', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125142, 0, 'BM-7818-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-09-21', '2019-09-21', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125143, 0, 'BM-7028-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2016-08-28', '2019-08-28', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125144, 0, 'BM-7020-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-05-31', '2019-08-31', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125145, 0, 'BM-7850-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2019-03-27', '2019-09-27', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125146, 0, 'BM-7733-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-10-15', '2019-06-15', '48000', NULL, 'inhu', '', '0000-00-00', NULL),
(125147, 0, 'BM-7689-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2019-02-22', '2019-05-22', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125148, 0, 'BM-7808-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-07-06', '2019-07-06', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125149, 0, 'BM-7832-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-07-14', '2019-07-14', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125150, 0, 'BM-7037-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-04-24', '2019-04-24', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125151, 0, 'BM-7709-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-02-28', '2019-04-28', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125152, 0, 'BM-7495-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-06-28', '2019-06-28', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125153, 0, 'BM-7626-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-04-16', '2019-04-16', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125154, 0, 'BM-7036-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-10-14', '2019-04-14', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125155, 0, 'BM-7835-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-11-08', '2018-11-08', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125156, 0, 'BM-7593-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-03-26', '2019-03-26', '60000', NULL, 'inhu', '', '0000-00-00', NULL),
(125157, 0, 'BM-7807-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-12-16', '2018-12-16', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125158, 0, 'BM-7526-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2019-01-11', '2019-03-11', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125159, 0, 'BM-7889-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-09-17', '2018-12-17', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125160, 0, 'BM-7026-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2014-02-27', '2019-02-27', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125161, 0, 'BM-7839-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-03-11', '2019-03-11', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125162, 0, 'BM-7463-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2018-12-30', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125163, 0, 'BM-7714-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2016-09-25', '2018-09-25', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125164, 0, 'BM-7668-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-08-15', '2018-08-15', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125165, 0, 'BM-7821-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-08-05', '2018-08-05', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125166, 0, 'BM-7867-BU', '', 'indragiri hulu', '', 'beroperasi', 'Belum Diproses', '2017-09-15', '2018-09-15', '32000', NULL, 'inhu', '', '0000-00-00', NULL),
(125167, 0, 'BM-7145-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-09-06', '2019-09-06', '48000', NULL, 'kampar', '', '0000-00-00', NULL),
(125168, 0, 'BM-7827-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-08-16', '2019-08-16', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125169, 0, 'BM-1329-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-07-30', '2019-08-30', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125170, 0, 'BM-591-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-02-28', '2019-08-28', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125171, 0, 'BM-7781-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-05-28', '2019-08-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125172, 0, 'BM-7640-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-07-28', '2019-07-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125173, 0, 'BM-7159-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-08-03', '2019-09-03', '30000', NULL, 'kampar', '', '0000-00-00', NULL),
(125174, 0, 'BM-1003-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-03-30', '2019-07-30', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125175, 0, 'BM-7508-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-11-30', '2019-09-01', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125176, 0, 'BM-7878-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-06-16', '2019-06-16', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125177, 0, 'BM-7611-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-08-31', '2019-04-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125178, 0, 'BM-7701-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-04-26', '2019-04-26', '48000', NULL, 'kampar', '', '0000-00-00', NULL),
(125179, 0, 'BM-7576-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-04-27', '2019-04-27', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125180, 0, 'BM-7807-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2019-01-02', '2019-04-02', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125181, 0, 'BM-7598-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-01-30', '2019-06-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125182, 0, 'BM-1509-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-06-28', '2019-03-28', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125183, 0, 'BM-7336-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-01-28', '2019-05-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125184, 0, 'BM-7541-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-06-12', '2019-06-12', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125185, 0, 'BM-7853-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2019-05-29', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125186, 0, 'BM-7579-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-05-17', '2019-04-17', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125187, 0, 'BM-7563-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-10-29', '2018-10-29', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125188, 0, 'BM-7027-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-02-28', '2019-02-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125189, 0, 'BM-7665-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-11-12', '2018-12-12', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125190, 0, 'BM-7881-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2015-12-15', '2018-12-15', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125191, 0, 'BM-7253-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-09-30', '2018-12-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125192, 0, 'BM-1004-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-01-20', '2019-02-20', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125193, 0, 'BM-7874-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2018-12-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125194, 0, 'BM-7071-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-05-28', '2018-10-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125195, 0, 'BM-7663-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-12-23', '2019-03-23', '48000', NULL, 'kampar', '', '0000-00-00', NULL),
(125196, 0, 'BM-7215-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-07-18', '2019-03-18', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125197, 0, 'BM-7604-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-01-30', '2019-01-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125198, 0, 'BM-7693-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2018-01-28', '2019-02-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125199, 0, 'BM-7886-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-03-31', '2018-10-31', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125200, 0, 'BM-7087-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-11-28', '2018-11-28', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125201, 0, 'BM-7024-ZU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-05-27', '2018-12-27', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125202, 0, 'BM-1478-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-06-03', '2018-06-03', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125203, 0, 'BM-7583-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-02-28', '2018-06-30', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125204, 0, 'BM-7862-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2016-03-15', '2018-07-15', '32000', NULL, 'kampar', '', '0000-00-00', NULL),
(125205, 0, 'BM-1397-FU', '', 'kampar', '', 'beroperasi', 'Belum Diproses', '2017-09-19', '2018-09-19', '20000', NULL, 'kampar', '', '0000-00-00', NULL),
(125206, 0, 'BM-7003-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-03-06', '2019-08-06', '32000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125207, 0, 'BM-7017-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-09-06', '2019-09-06', '48000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125208, 0, 'BM-7015-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2017-12-22', '2019-06-22', '48000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125209, 0, 'BM-1127-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-07-11', '2019-07-11', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125210, 0, 'BM-1182-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2019-03-04', '2019-07-04', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125211, 0, 'BM-1068-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-11-24', '2019-05-24', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125212, 0, 'BM-1720-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2017-11-30', '2019-01-30', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125213, 0, 'BM-1039-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-01-09', '2019-02-09', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125214, 0, 'BM-7025-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2017-11-28', '2018-11-28', '32000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125215, 0, 'BM-1197-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2017-01-09', '2019-01-09', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125216, 0, 'BM-1174-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2018-02-24', '2019-02-24', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125217, 0, 'BM-1164-CU', '', 'pelalawan', '', 'beroperasi', 'Belum Diproses', '2017-03-31', '2019-01-31', '20000', NULL, 'pelalawan', '', '0000-00-00', NULL),
(125218, 0, 'BM-7011-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2016-11-16', '2019-09-16', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125219, 0, 'BM-7090-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-09-08', '2019-09-08', '60000', NULL, 'inhil', '', '0000-00-00', NULL),
(125220, 0, 'BM-7712-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-09-23', '2019-09-23', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125221, 0, 'BM-7009-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-09-26', '2019-09-26', '48000', NULL, 'inhil', '', '0000-00-00', NULL),
(125222, 0, 'BM-1400-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2016-06-30', '2019-07-30', '30000', NULL, 'inhil', '', '0000-00-00', NULL),
(125223, 0, 'BM-7660-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-09-25', '2019-09-25', '75000', NULL, 'inhil', '', '0000-00-00', NULL),
(125224, 0, 'BM-7708-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-09-09', '2019-09-09', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125225, 0, 'BM-7104-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-08-27', '2019-08-27', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125226, 0, 'BM-7113-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2017-08-23', '2019-08-23', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125227, 0, 'BM-7639-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2017-12-07', '2019-09-07', '30000', NULL, 'inhil', '', '0000-00-00', NULL),
(125228, 0, 'BM-7701-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-06-02', '2019-06-02', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125229, 0, 'BM-7019-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2019-06-30', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125230, 0, 'BM-7106-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2017-02-09', '2019-05-09', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125231, 0, 'BM-7703-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-05-01', '2019-05-01', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125232, 0, 'BM-7124-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2019-03-29', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125233, 0, 'BM-1051-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-07-02', '2019-07-02', '20000', NULL, 'inhil', '', '0000-00-00', NULL),
(125234, 0, 'BM-7693-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-01-28', '2019-01-28', '60000', NULL, 'inhil', '', '0000-00-00', NULL),
(125235, 0, 'BM-7025-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-02-09', '2019-02-09', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125236, 0, 'BM-7012-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2018-01-19', '2019-01-19', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125237, 0, 'BM-7609-GU', '', 'indragiri hilir', '', 'beroperasi', 'Belum Diproses', '2017-12-30', '2018-06-30', '32000', NULL, 'inhil', '', '0000-00-00', NULL),
(125238, 0, 'BM-7188-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-03-31', '2019-07-31', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125239, 0, 'BM-7200-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-07-30', '2019-07-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125240, 0, 'BM-7123-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-08-09', '2019-08-09', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125241, 0, 'BM-7181-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-03-20', '2019-09-20', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125242, 0, 'BM-7182-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-31', '2019-08-31', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125243, 0, 'BM-7149-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-16', '2019-08-16', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125244, 0, 'BM-7186-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-04-30', '2019-08-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125245, 0, 'BM-7189-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-06-26', '2019-09-26', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125246, 0, 'BM-7191-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-02-23', '2019-08-23', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125247, 0, 'BM-7168-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-06-12', '2019-08-12', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125248, 0, 'BM-7046-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-06-29', '2019-08-29', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125249, 0, 'BM-7148-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-06-27', '2019-08-27', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125250, 0, 'BM-7187-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-31', '2019-08-31', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125251, 0, 'BM-7167-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-07-12', '2019-09-12', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125252, 0, 'BM-7194-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-27', '2019-08-27', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125253, 0, 'BM-7173-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-31', '2019-08-31', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125254, 0, 'BM-7116-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-02-03', '2019-08-03', '32000', NULL, 'rohil', '', '0000-00-00', NULL),
(125255, 0, 'BM-1140-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-02-25', '2019-09-25', '20000', NULL, 'rohil', '', '0000-00-00', NULL),
(125256, 0, 'BM-7000-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-03-31', '2019-03-31', '60000', NULL, 'rohil', '', '0000-00-00', NULL),
(125257, 0, 'BM-7134-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-12-31', '2019-06-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125258, 0, 'BM-7154-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-10-16', '2019-06-16', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125259, 0, 'BM-7151-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-12-31', '2019-06-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125260, 0, 'BM-7190-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-03-22', '2019-05-22', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125261, 0, 'BM-7125-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-12-31', '2019-06-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125262, 0, 'BM-7204-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-01-12', '2019-04-12', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125263, 0, 'BM-7138-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-01', '2019-07-01', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125264, 0, 'BM-7164-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-01', '2019-07-01', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125265, 0, 'BM-7155-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-04-12', '2019-07-12', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125266, 0, 'BM-7163-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-02-01', '2019-05-01', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125267, 0, 'BM-7052-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-07-10', '2019-07-10', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125268, 0, 'BM-7129-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-05-01', '2019-07-01', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125269, 0, 'BM-7157-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-04-30', '2019-06-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125270, 0, 'BM-7156-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2019-04-15', '2019-07-15', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125271, 0, 'BM-7039-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-06-02', '2019-06-02', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125272, 0, 'BM-7139-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2019-03-29', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125273, 0, 'BM-7127-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-12-31', '2019-06-30', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125274, 0, 'BM-7178-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2016-05-28', '2019-05-28', '32000', NULL, 'rohil', '', '0000-00-00', NULL),
(125275, 0, 'BM-1569-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-03-24', '2019-03-24', '20000', NULL, 'rohil', '', '0000-00-00', NULL),
(125276, 0, 'BM-1560-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-01-31', '2019-01-31', '20000', NULL, 'rohil', '', '0000-00-00', NULL),
(125277, 0, 'BM-1564-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-01-17', '2019-01-17', '20000', NULL, 'rohil', '', '0000-00-00', NULL);
INSERT INTO `jr_data` (`id`, `id_user`, `nopol`, `pemilik`, `alamat`, `no_telpon`, `kondisi`, `status`, `masa_awal`, `masa_akhir`, `tarif`, `ttd`, `regional`, `keterangan`, `janji_bayar`, `tanggal_pelaksanaan`) VALUES
(125278, 0, 'BM-7047-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2018-02-20', '2019-02-20', '48000', NULL, 'rohil', '', '0000-00-00', NULL),
(125279, 0, 'BM-7043-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2017-09-22', '2018-09-22', '32000', NULL, 'rohil', '', '0000-00-00', NULL),
(125280, 0, 'BM-1519-PU', '', 'rokan hilir', '', 'beroperasi', 'Belum Diproses', '2016-10-31', '2017-10-31', '20000', NULL, 'rohil', '', '0000-00-00', NULL),
(125281, 0, 'BM-1775-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-05-07', '2019-08-07', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125282, 0, 'BM-1522-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-07-07', '2019-08-07', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125283, 0, 'BM-1038-SO', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-08-04', '2019-08-04', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125284, 0, 'BM-1502-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2019-06-08', '2019-09-08', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125285, 0, 'BM-7404-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-04-30', '2019-04-30', '60000', NULL, 'siak', '', '0000-00-00', NULL),
(125286, 0, 'BM-7032-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2019-03-28', '2019-04-28', '32000', NULL, 'siak', '', '0000-00-00', NULL),
(125287, 0, 'BM-1501-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-04-09', '2019-04-09', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125288, 0, 'BM-1826-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2013-07-05', '2019-07-05', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125289, 0, 'BM-1565-SO', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-05-13', '2019-05-13', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125290, 0, 'BM-7407-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2016-01-18', '2019-05-18', '60000', NULL, 'siak', '', '0000-00-00', NULL),
(125291, 0, 'BM-1029-SO', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-07-04', '2019-07-04', '60000', NULL, 'siak', '', '0000-00-00', NULL),
(125292, 0, 'BM-7410-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-03-30', '2019-03-30', '32000', NULL, 'siak', '', '0000-00-00', NULL),
(125293, 0, 'BM-7030-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-07-15', '2019-07-15', '32000', NULL, 'siak', '', '0000-00-00', NULL),
(125294, 0, 'BM-7203-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2018-11-18', '2019-02-18', '48000', NULL, 'siak', '', '0000-00-00', NULL),
(125295, 0, 'BM-7417-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2017-03-18', '2019-03-18', '60000', NULL, 'siak', '', '0000-00-00', NULL),
(125296, 0, 'BM-1798-SU', '', 'siak', '', 'beroperasi', 'Belum Diproses', '2017-12-05', '2018-12-05', '20000', NULL, 'siak', '', '0000-00-00', NULL),
(125297, 0, 'BM-7307-KU', '', 'kuantan singingi', '', 'beroperasi', 'Belum Diproses', '2014-08-15', '2019-08-15', '32000', NULL, 'kuansing', '', '0000-00-00', NULL),
(125298, 0, 'BM-7264-KU', '', 'kuantan singingi', '', 'beroperasi', 'Belum Diproses', '2018-07-28', '2019-07-28', '32000', NULL, 'kuansing', '', '0000-00-00', NULL),
(125299, 0, 'BM-7306-KU', '', 'kuantan singingi', '', 'beroperasi', 'Belum Diproses', '2017-11-17', '2018-11-17', '32000', NULL, 'kuansing', '', '0000-00-00', NULL),
(125300, 0, 'BM-7311-KU', '', 'kuantan singingi', '', 'beroperasi', 'Belum Diproses', '2018-01-21', '2019-01-21', '32000', NULL, 'kuansing', '', '0000-00-00', NULL),
(125301, 0, 'BM-7396-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-09-15', '2019-09-15', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125302, 0, 'BM-7556-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-09-27', '2019-09-27', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125303, 0, 'BM-1541-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-31', '2019-08-31', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125304, 0, 'BM-7488-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2019-06-15', '2019-09-15', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125305, 0, 'BM-7370-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-29', '2019-08-29', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125306, 0, 'BM-1007-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2015-02-28', '2019-07-28', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125307, 0, 'BM-7533-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-09-20', '2019-09-20', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125308, 0, 'BM-7366-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-07-29', '2019-07-29', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125309, 0, 'BM-1656-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-01-30', '2019-09-23', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125310, 0, 'BM-7523-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-10', '2019-08-10', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125311, 0, 'BM-7765-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-21', '2019-08-21', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125312, 0, 'BM-7222-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-01-05', '2019-08-05', '32000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125313, 0, 'BM-1329-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-09-20', '2019-09-20', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125314, 0, 'BM-1267-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-31', '2019-08-31', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125315, 0, 'BM-1519-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-12-31', '2019-07-31', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125316, 0, 'BM-1638-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2019-02-08', '2019-09-08', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125317, 0, 'BM-7410-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2019-03-14', '2019-08-14', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125318, 0, 'BM-1730-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-08', '2019-08-08', '30000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125319, 0, 'BM-1711-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-05-25', '2019-05-25', '30000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125320, 0, 'BM-7605-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-04-03', '2019-04-03', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125321, 0, 'BM-1382-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-05', '2019-06-05', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125322, 0, 'BM-7387-D U', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2016-01-19', '2019-07-19', '30000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125323, 0, 'BM-7471-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-17', '2019-06-17', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125324, 0, 'BM-1810-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-30', '2019-03-30', '30000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125325, 0, 'BM-1613-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-31', '2019-03-31', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125326, 0, 'BM-1355-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-05-19', '2019-05-19', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125327, 0, 'BM-1302-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2019-06-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125328, 0, 'BM-7446-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-07-23', '2019-07-23', '32000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125329, 0, 'BM-7631-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-07-27', '2019-07-27', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125330, 0, 'BM-7588-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-19', '2019-06-19', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125331, 0, 'BM-7271-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-07-15', '2019-07-15', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125332, 0, 'BM-1269-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-04-30', '2019-04-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125333, 0, 'BM-1434-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2019-06-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125334, 0, 'BM-7288-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-05-18', '2019-05-18', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125335, 0, 'BM-7360-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-05-11', '2019-05-11', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125336, 0, 'BM-1040-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-07-25', '2019-07-25', '32000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125337, 0, 'BM-7491-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2019-01-20', '2019-07-20', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125338, 0, 'BM-1008-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-30', '2019-06-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125339, 0, 'BM-7372-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-12-29', '2019-06-29', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125340, 0, 'BM-7639-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2019-05-02', '2019-07-02', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125341, 0, 'BM-1348-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2015-04-15', '2019-07-15', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125342, 0, 'BM-1298-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2016-03-01', '2019-03-01', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125343, 0, 'BM-7493-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-02-10', '2019-02-10', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125344, 0, 'BM-1530-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-08-19', '2018-10-19', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125345, 0, 'BM-7674-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-02-03', '2019-02-03', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125346, 0, 'BM-7405-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-17', '2019-03-17', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125347, 0, 'BM-7424-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-17', '2019-03-17', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125348, 0, 'BM-1648-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-03-17', '2019-03-17', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125349, 0, 'BM-1568-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-12-30', '2018-12-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125350, 0, 'BM-1602-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-01-30', '2019-02-28', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125351, 0, 'BM-7586-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-17', '2019-03-17', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125352, 0, 'BM-7569-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-12-06', '2018-12-06', '48000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125353, 0, 'BM-1383-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-02-28', '2019-02-28', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125354, 0, 'BM-7406-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-03-17', '2019-03-17', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125355, 0, 'BM-7464-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-06-01', '2019-03-01', '60000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125356, 0, 'BM-1607-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2018-01-17', '2019-01-17', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125357, 0, 'BM-1496-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-10-18', '2018-10-18', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125358, 0, 'BM-1617-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-06-30', '2018-06-30', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125359, 0, 'BM-7221-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-08-31', '2018-08-31', '32000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125360, 0, 'BM-1364-DU', '', 'bengkalis', '', 'beroperasi', 'Belum Diproses', '2017-07-13', '2018-07-13', '20000', NULL, 'bengkalis', '', '0000-00-00', NULL),
(125361, 0, 'BM-7162-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2019-06-12', '2019-08-12', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125362, 0, 'BM-7165-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2017-03-16', '2019-09-16', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125363, 0, 'BM-1132-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2016-12-27', '2019-09-27', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125364, 0, 'BM-7201-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2017-09-16', '2019-08-16', '60000', NULL, 'dumai', '', '0000-00-00', NULL),
(125365, 0, 'BM-7237-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2019-04-24', '2019-08-24', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125366, 0, 'BM-7246-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2019-05-30', '2019-07-30', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125367, 0, 'BM-7105-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2016-11-08', '2019-07-29', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125368, 0, 'BM-7151-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2019-06-16', '2019-08-16', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125369, 0, 'BM-1529-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-05-30', '2019-05-30', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125370, 0, 'BM-7270-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2019-04-28', '2019-05-28', '60000', NULL, 'dumai', '', '0000-00-00', NULL),
(125371, 0, 'BM-7124-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-12-28', '2019-06-28', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125372, 0, 'BM-1091-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-07-13', '2019-07-13', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125373, 0, 'BM-7183-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-04-16', '2019-04-16', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125374, 0, 'BM-1114-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-05-18', '2019-05-18', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125375, 0, 'BM-7204-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-07-04', '2019-07-04', '48000', NULL, 'dumai', '', '0000-00-00', NULL),
(125376, 0, 'BM-1528-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-05-30', '2019-05-30', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125377, 0, 'BM-1508-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2017-07-04', '2019-07-04', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125378, 0, 'BM-7259-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-07-24', '2019-07-24', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125379, 0, 'BM-1527-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-05-30', '2019-05-30', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125380, 0, 'BM-1525-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-05-30', '2019-05-30', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125381, 0, 'BM-1113-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-03-31', '2019-04-30', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125382, 0, 'BM-7117-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-03-28', '2019-03-28', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125383, 0, 'BM-7048-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-02-28', '2019-02-28', '32000', NULL, 'dumai', '', '0000-00-00', NULL),
(125384, 0, 'BM-1102-RO', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2018-06-18', '2018-12-18', '30000', NULL, 'dumai', '', '0000-00-00', NULL),
(125385, 0, 'BM-7109-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2017-10-07', '2018-10-07', '3000', NULL, 'dumai', '', '0000-00-00', NULL),
(125386, 0, 'BM-7059-RU', '', 'dumai', '', 'beroperasi', 'Belum Diproses', '2017-12-14', '2018-12-14', '32000', NULL, 'dumai', '', '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jr_gambar`
--

CREATE TABLE `jr_gambar` (
  `id` int(11) NOT NULL,
  `id_data` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_gambar`
--

INSERT INTO `jr_gambar` (`id`, `id_data`, `foto`) VALUES
(97, 124193, 'designmahkota1.png'),
(99, 124197, 'king.png');

-- --------------------------------------------------------

--
-- Table structure for table `jr_konfigurasi`
--

CREATE TABLE `jr_konfigurasi` (
  `id` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_konfigurasi`
--

INSERT INTO `jr_konfigurasi` (`id`, `nama_instansi`, `gambar`, `alamat`, `no_telpon`) VALUES
(1, 'Jasa Raharja Riau', 'jasaraharja.png', 'Jl. Jend. Sudirman No. 285, Simpang Empat, Kec. Pekanbaru Kota, Kota Pekanbaru, Riau 28121', '(0761) 42851');

-- --------------------------------------------------------

--
-- Table structure for table `jr_level`
--

CREATE TABLE `jr_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_level`
--

INSERT INTO `jr_level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'kasubag'),
(3, 'staff'),
(4, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `jr_log`
--

CREATE TABLE `jr_log` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `keterangan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_log`
--

INSERT INTO `jr_log` (`id`, `waktu`, `username`, `password`, `keterangan`) VALUES
(14, '2019-08-21 10:39:15', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(15, '2019-08-21 10:39:37', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(16, '2019-08-21 10:40:11', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(17, '2019-08-21 10:41:00', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(18, '2019-08-21 10:53:31', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(19, '2019-08-21 12:30:22', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(20, '2019-08-21 12:32:11', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(21, '2019-08-21 12:50:06', 'supervisor', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(22, '2019-08-22 09:07:20', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(23, '2019-08-22 09:07:42', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(24, '2019-08-22 09:36:50', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(25, '2019-08-22 09:36:57', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(26, '2019-08-22 09:55:30', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(27, '2019-08-22 11:26:02', 'soony', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(28, '2019-08-22 11:26:10', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(29, '2019-08-22 12:08:48', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(30, '2019-08-22 12:09:52', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(31, '2019-08-22 12:19:35', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(32, '2019-08-22 12:19:47', 'zaheed', '827ccb0eea8a706c4c34a16891f84e7b', 'gagal'),
(33, '2019-08-22 12:19:53', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(34, '2019-08-22 12:35:25', 'sonny ', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(35, '2019-08-22 12:35:31', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(36, '2019-08-22 12:51:22', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(37, '2019-08-22 12:51:49', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(38, '2019-08-22 12:53:21', 'zaheed', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(39, '2019-08-22 12:53:28', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(40, '2019-08-22 12:54:33', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(41, '2019-08-22 13:30:35', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(42, '2019-08-22 13:50:14', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(43, '2019-08-22 13:50:27', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(44, '2019-08-22 13:51:08', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(45, '2019-08-22 14:13:44', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(46, '2019-08-22 14:13:50', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(47, '2019-08-22 20:25:29', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(48, '2019-08-23 19:33:19', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(49, '2019-08-23 19:33:56', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(50, '2019-08-25 09:50:12', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(51, '2019-08-25 09:56:59', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(52, '2019-08-25 10:51:23', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(53, '2019-08-25 13:03:57', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(54, '2019-08-25 13:04:11', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(55, '2019-08-26 09:24:43', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(56, '2019-08-26 09:25:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(57, '2019-08-26 10:26:46', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(58, '2019-08-26 14:38:57', 'zaheed', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(59, '2019-08-26 14:53:49', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(60, '2019-08-26 14:54:40', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(61, '2019-08-26 16:42:24', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(62, '2019-08-26 16:42:38', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(63, '2019-08-26 16:42:44', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(64, '2019-08-26 16:45:25', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(65, '2019-08-26 16:45:57', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(66, '2019-08-26 20:03:38', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(67, '2019-08-26 20:09:46', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(68, '2019-08-26 20:09:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(69, '2019-08-26 20:11:13', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(70, '2019-08-26 20:12:29', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(71, '2019-08-26 20:12:38', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(72, '2019-08-26 20:16:10', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(73, '2019-08-26 20:16:25', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(74, '2019-08-26 20:17:09', 'sonny', '202cb962ac59075b964b07152d234b70', 'gagal'),
(75, '2019-08-26 20:18:54', 'sonny', '202cb962ac59075b964b07152d234b70', 'sukses'),
(76, '2019-08-26 20:19:04', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(77, '2019-08-26 20:29:39', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(78, '2019-08-26 20:43:22', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(79, '2019-08-26 20:43:29', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(80, '2019-08-26 20:43:58', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(81, '2019-08-26 20:44:06', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(82, '2019-08-26 20:44:12', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(83, '2019-08-26 20:44:28', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(84, '2019-08-26 22:01:36', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(85, '2019-08-26 22:02:20', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(86, '2019-08-26 22:05:43', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(87, '2019-08-26 22:05:49', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(88, '2019-08-27 08:46:15', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(89, '2019-08-27 09:19:52', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(90, '2019-08-27 09:20:04', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(91, '2019-08-27 09:20:10', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(92, '2019-08-27 13:08:44', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(93, '2019-08-27 13:08:49', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(94, '2019-08-28 08:36:11', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(95, '2019-08-28 09:37:34', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(96, '2019-08-28 09:40:57', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(97, '2019-08-28 09:41:20', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(98, '2019-08-28 09:55:52', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(99, '2019-08-28 10:32:02', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(100, '2019-08-28 10:44:04', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(101, '2019-08-28 14:04:38', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(102, '2019-08-28 14:04:44', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(103, '2019-08-28 14:04:54', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(104, '2019-09-12 09:10:57', 'dxfddgdg', '33babc15a465c80b64a7d529953ccf8e', 'gagal'),
(105, '2019-09-15 20:30:23', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(106, '2019-09-15 20:30:28', 'admin', '202cb962ac59075b964b07152d234b70', 'gagal'),
(107, '2019-09-15 20:30:34', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(108, '2019-09-15 20:53:01', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(109, '2019-09-15 20:55:50', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(110, '2019-09-15 20:55:55', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(111, '2019-09-15 22:06:29', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(112, '2019-09-19 08:46:44', '2019', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(113, '2019-09-19 08:47:01', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(114, '2019-09-19 15:50:09', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(115, '2019-09-19 16:49:08', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(116, '2019-09-20 10:43:56', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(117, '2019-09-20 12:26:27', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(118, '2019-09-20 16:17:52', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(119, '2019-09-20 16:52:27', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(120, '2019-09-20 17:21:37', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(121, '2019-09-20 18:13:02', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(122, '2019-09-21 18:46:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(123, '2019-09-22 10:45:37', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(124, '2019-09-22 11:11:19', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(125, '2019-09-22 11:18:43', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(126, '2019-09-22 11:18:59', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(127, '2019-09-22 11:20:57', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(128, '2019-09-22 11:25:22', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(129, '2019-09-22 11:31:23', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(130, '2019-09-22 11:31:31', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(131, '2019-09-22 11:31:55', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(132, '2019-09-22 11:32:19', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(133, '2019-09-22 11:32:59', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(134, '2019-09-22 11:34:27', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(135, '2019-09-22 11:35:36', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(136, '2019-09-22 11:35:51', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(137, '2019-09-22 11:38:07', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(138, '2019-09-22 11:38:40', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(139, '2019-09-22 11:38:58', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(140, '2019-09-22 11:39:10', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(141, '2019-09-22 11:52:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(142, '2019-09-22 11:58:26', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(143, '2019-09-22 11:59:26', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(144, '2019-09-22 12:13:45', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(145, '2019-09-22 12:13:56', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(146, '2019-09-22 12:14:03', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(147, '2019-09-22 15:37:11', 'dimas', '202cb962ac59075b964b07152d234b70', 'sukses'),
(148, '2019-09-22 15:37:29', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(149, '2019-09-22 16:07:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(150, '2019-09-22 16:39:35', 'admin', 'e807f1fcf82d132f9bb018ca6738a19f', 'gagal'),
(151, '2019-09-22 16:39:40', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(152, '2019-09-22 16:40:00', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(153, '2019-09-22 16:40:07', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(154, '2019-09-22 16:40:15', 'sonny\'', '202cb962ac59075b964b07152d234b70', 'gagal'),
(155, '2019-09-22 16:40:35', 'sonny\'--+', '17f83f724f242bbba2b12f85f6091d1f', 'gagal'),
(156, '2019-09-22 16:40:42', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(157, '2019-09-22 16:41:12', 'sonny', '202cb962ac59075b964b07152d234b70', 'gagal'),
(158, '2019-09-22 16:41:16', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(159, '2019-09-22 18:53:05', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(160, '2019-09-22 18:53:21', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(161, '2019-09-22 18:53:26', 'sonny', '202cb962ac59075b964b07152d234b70', 'gagal'),
(162, '2019-09-22 18:53:30', 'sonny', '202cb962ac59075b964b07152d234b70', 'gagal'),
(163, '2019-09-22 18:53:34', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(164, '2019-09-23 09:57:22', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(165, '2019-09-23 11:05:43', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(166, '2019-09-23 11:45:18', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(167, '2019-09-23 11:59:02', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(168, '2019-09-23 11:59:08', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(169, '2019-09-23 12:00:09', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(170, '2019-09-23 12:17:07', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(171, '2019-09-23 12:17:25', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(172, '2019-09-23 12:32:26', 'dimas', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(173, '2019-09-23 12:32:31', 'dimas', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(174, '2019-09-23 12:32:35', 'dimas', '202cb962ac59075b964b07152d234b70', 'gagal'),
(175, '2019-09-23 12:32:41', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(176, '2019-09-23 12:52:23', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(177, '2019-09-23 12:52:40', 'tes1', 'fa3fb6e0dccc657b57251c97db271b05', 'gagal'),
(178, '2019-09-23 12:52:45', 'tes1', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(179, '2019-09-23 12:52:51', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(180, '2019-09-23 12:53:50', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(181, '2019-09-23 12:55:47', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(182, '2019-09-23 12:59:50', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(183, '2019-09-23 13:23:54', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(184, '2019-09-23 16:38:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(185, '2019-09-23 16:41:05', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(186, '2019-09-23 17:02:00', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(187, '2019-09-23 17:14:05', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(188, '2019-09-23 18:55:34', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(189, '2019-09-23 19:00:19', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(190, '2019-09-23 19:00:24', 'tes1', '202cb962ac59075b964b07152d234b70', 'sukses'),
(191, '2019-09-28 11:11:00', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(192, '2019-09-28 11:45:36', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(193, '2019-09-28 12:04:11', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(194, '2019-09-28 12:06:56', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(195, '2019-09-29 18:41:43', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(196, '2019-10-02 09:00:26', 'sonny', '25d55ad283aa400af464c76d713c07ad', 'gagal'),
(197, '2019-10-02 09:00:32', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(198, '2019-10-02 10:09:36', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(199, '2019-10-05 16:46:09', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(200, '2019-10-05 16:47:36', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(201, '2019-10-05 17:24:18', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(202, '2019-10-07 14:36:59', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(203, '2019-10-14 19:41:32', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(204, '2019-10-14 19:41:38', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(205, '2019-10-14 19:41:44', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(206, '2019-10-14 19:41:49', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(207, '2019-10-14 19:41:52', 'admin', '202cb962ac59075b964b07152d234b70', 'gagal'),
(208, '2019-10-14 19:42:00', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(209, '2019-10-14 19:42:07', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'gagal'),
(210, '2019-10-14 19:42:42', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(211, '2019-10-14 19:42:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(212, '2019-10-14 19:43:19', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(213, '2019-10-14 19:44:21', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(214, '2019-10-14 19:50:52', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(215, '2019-10-14 19:50:57', 'barkah', '202cb962ac59075b964b07152d234b70', 'gagal'),
(216, '2019-10-14 19:51:03', 'barkah', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(217, '2019-10-14 19:51:28', 'barkah', '6ebe76c9fb411be97b3b0d48b791a7c9', 'gagal'),
(218, '2019-10-14 19:53:23', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(219, '2019-10-14 19:53:28', 'admin', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(220, '2019-10-14 19:53:35', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(221, '2019-10-14 19:56:31', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(222, '2019-10-14 20:08:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(223, '2019-10-23 07:35:22', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(224, '2019-10-24 20:58:30', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(225, '2019-10-24 22:23:19', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(226, '2019-10-27 12:28:43', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(227, '2019-11-03 10:11:15', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'gagal'),
(228, '2019-11-03 10:11:22', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(229, '2019-11-06 19:52:59', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(230, '2019-11-07 20:43:35', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(231, '2019-11-08 16:16:20', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(232, '2019-11-08 16:40:36', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(233, '2019-11-09 11:50:19', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(234, '2019-11-09 12:49:15', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(235, '2019-11-10 11:51:07', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(236, '2019-11-10 18:30:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(237, '2019-11-10 20:17:06', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(238, '2019-11-11 10:45:40', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(239, '2019-11-11 14:05:03', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(240, '2019-11-11 15:15:45', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(241, '2019-11-11 15:21:10', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(242, '2019-11-11 15:54:15', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(243, '2019-11-11 15:54:24', 'barkah', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(244, '2019-11-11 15:54:31', 'barkah', '202cb962ac59075b964b07152d234b70', 'gagal'),
(245, '2019-11-11 15:54:52', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(246, '2019-11-11 15:55:44', 'barkah', 'e0c25b00c8dada7191d233e6d7b51ede', 'gagal'),
(247, '2019-11-11 15:55:53', 'barkah', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(248, '2019-11-11 15:56:05', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(249, '2019-11-11 15:57:11', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(250, '2019-11-11 15:58:30', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(251, '2019-11-11 15:59:21', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(252, '2019-11-11 19:08:43', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(253, '2019-11-11 19:10:38', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(254, '2019-11-11 19:13:26', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(255, '2019-11-11 19:14:45', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(256, '2019-11-11 20:02:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(257, '2019-11-12 07:57:21', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(258, '2019-11-12 19:16:41', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(259, '2019-11-17 12:41:37', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(260, '2019-11-20 15:00:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(261, '2019-11-20 20:09:09', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(262, '2019-11-24 12:46:30', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(263, '2019-11-24 13:41:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(264, '2019-11-24 14:05:22', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(265, '2019-11-24 14:08:27', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(266, '2019-11-24 14:37:53', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(267, '2019-11-24 18:10:40', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(268, '2019-11-24 20:31:09', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(269, '2019-11-24 20:49:30', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(270, '2019-11-24 20:49:38', 'barkah', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(271, '2019-11-24 20:49:50', 'barkah', '87d0cd00468f134b7ee95ab1a97cc30b', 'gagal'),
(272, '2019-11-24 20:49:55', 'barkah', '202cb962ac59075b964b07152d234b70', 'gagal'),
(273, '2019-11-24 20:51:08', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(274, '2019-11-24 20:51:41', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(275, '2019-11-24 20:52:12', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(276, '2019-11-24 20:54:32', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(277, '2019-11-24 20:56:20', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(278, '2019-11-24 20:57:06', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(279, '2019-11-24 20:59:23', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(280, '2019-11-24 21:22:32', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(281, '2019-11-25 18:16:07', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(282, '2019-11-26 10:06:38', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(283, '2019-11-26 14:15:38', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'gagal'),
(284, '2019-11-26 14:15:43', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(285, '2019-11-26 17:20:02', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(286, '2019-11-27 07:15:57', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(287, '2019-11-27 07:34:33', 'tes2', '202cb962ac59075b964b07152d234b70', 'sukses'),
(288, '2019-11-27 07:42:33', 'tes2', '202cb962ac59075b964b07152d234b70', 'sukses'),
(289, '2019-11-27 07:51:33', 'tes2', '202cb962ac59075b964b07152d234b70', 'sukses'),
(290, '2019-11-27 08:11:05', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(291, '2019-11-27 15:58:26', 'admin', '25d55ad283aa400af464c76d713c07ad', 'gagal'),
(292, '2019-11-27 15:58:42', 'admin', '25d55ad283aa400af464c76d713c07ad', 'gagal'),
(293, '2019-11-27 15:58:52', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(294, '2019-11-27 16:00:18', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(295, '2019-11-27 16:01:36', 'sonny', '25f9e794323b453885f5181f1b624d0b', 'gagal'),
(296, '2019-11-27 16:01:40', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(297, '2019-11-27 18:36:10', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(298, '2019-11-27 18:37:20', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(299, '2019-11-27 18:56:19', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(300, '2019-11-27 19:02:39', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(301, '2019-11-27 19:02:52', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(302, '2019-11-27 19:56:50', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(303, '2019-11-27 20:24:59', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(304, '2019-11-27 20:36:08', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(305, '2019-11-27 20:42:20', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(306, '2019-11-27 21:14:10', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(307, '2019-11-27 22:07:44', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(308, '2019-11-27 22:09:20', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(309, '2019-11-28 10:29:25', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(310, '2019-11-28 11:28:23', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(311, '2019-11-28 11:35:05', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(312, '2019-11-28 11:38:04', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(313, '2019-11-28 11:41:01', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(314, '2019-11-28 11:44:52', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(315, '2019-11-28 11:59:00', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'sukses'),
(316, '2019-11-28 19:45:46', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(317, '2019-11-29 09:08:36', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses'),
(318, '2019-11-29 14:18:52', 'admin', '25f9e794323b453885f5181f1b624d0b', 'sukses');

-- --------------------------------------------------------

--
-- Table structure for table `jr_regional`
--

CREATE TABLE `jr_regional` (
  `regional` varchar(35) NOT NULL,
  `nama_regional` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_regional`
--

INSERT INTO `jr_regional` (`regional`, `nama_regional`) VALUES
('bengkalis', 'Kabupaten Bengkalis'),
('dumai', 'Kota Dumai'),
('inhil', 'Kabupaten Indragiri Hilir'),
('inhu', 'Kabupaten Indragiri Hulu'),
('kampar', 'Kabupaten Kampar'),
('kuansing', 'Kabupaten Kuantan Singingi'),
('meranti', 'Kabupaten Kepulauan Meranti'),
('pekanbaru', 'Kota Pekanbaru'),
('pelalawan', 'Kabupaten Pelalawan'),
('rohil', 'Kabupaten Rokan Hilir'),
('rohul', 'Kabupaten Rokan Hulu'),
('siak', 'Kabupaten Siak');

-- --------------------------------------------------------

--
-- Table structure for table `jr_status`
--

CREATE TABLE `jr_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_status`
--

INSERT INTO `jr_status` (`id_status`, `status`) VALUES
(1, 'Belum Diproses'),
(2, 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `jr_user`
--

CREATE TABLE `jr_user` (
  `id` int(11) NOT NULL,
  `kode_samsat` int(11) DEFAULT NULL,
  `cabang` varchar(35) DEFAULT NULL,
  `nama_samsat` varchar(50) DEFAULT NULL,
  `alamat` text,
  `username` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telpon` varchar(50) NOT NULL,
  `id_level` int(11) NOT NULL,
  `jabatan` varchar(35) DEFAULT NULL,
  `regional` varchar(35) DEFAULT NULL,
  `status` enum('Aktif','Nonaktif') NOT NULL,
  `ttd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jr_user`
--

INSERT INTO `jr_user` (`id`, `kode_samsat`, `cabang`, `nama_samsat`, `alamat`, `username`, `password`, `nama`, `no_telpon`, `id_level`, `jabatan`, `regional`, `status`, `ttd`) VALUES
(1, 0, '', '', '', 'admin', '25f9e794323b453885f5181f1b624d0b', 'Admin', '08', 1, '', NULL, 'Aktif', '5d32fea06e50cf6a39daefe917344c14.jpeg'),
(2, 1600001, 'Cabang Riau', NULL, 'Jl. Pattimura', 'barkah', 'e10adc3949ba59abbe56e057f20f883e', 'Barkah', '0', 1, NULL, NULL, 'Aktif', ''),
(3, NULL, 'Cabang Riau', NULL, 'Jl. Sudirman', 'sonny', 'e10adc3949ba59abbe56e057f20f883e', 'Sonny', '082268186048', 2, 'KASUBAG IW', 'pekanbaru', 'Aktif', ''),
(4, NULL, 'Cabang Riau', NULL, 'Jl. Purwodadi\r\nPerumahan Primkopad, Blok C No.38', 'dimas', 'e10adc3949ba59abbe56e057f20f883e', 'Dimas', '082268186048', 3, 'Staff ', 'pekanbaru', 'Aktif', ''),
(5, NULL, 'Cabang Riau', NULL, 'Jl. Paus', 'tes1', 'e10adc3949ba59abbe56e057f20f883e', 'tes1', '082268186048', 4, 'Petugas Samsat Paus', 'pekanbaru', 'Aktif', ''),
(6, NULL, NULL, NULL, NULL, 'kepalacabang', '25f9e794323b453885f5181f1b624d0b', 'Herry Kesuma', '084574836581', 1, 'Kepala Cabang', NULL, 'Aktif', '5d32fea06e50cf6a39daefe917344c29.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jr_data`
--
ALTER TABLE `jr_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jr_gambar`
--
ALTER TABLE `jr_gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jr_konfigurasi`
--
ALTER TABLE `jr_konfigurasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jr_level`
--
ALTER TABLE `jr_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `jr_log`
--
ALTER TABLE `jr_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jr_regional`
--
ALTER TABLE `jr_regional`
  ADD PRIMARY KEY (`regional`) USING BTREE;

--
-- Indexes for table `jr_status`
--
ALTER TABLE `jr_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `jr_user`
--
ALTER TABLE `jr_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jr_data`
--
ALTER TABLE `jr_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125387;

--
-- AUTO_INCREMENT for table `jr_gambar`
--
ALTER TABLE `jr_gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `jr_konfigurasi`
--
ALTER TABLE `jr_konfigurasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jr_level`
--
ALTER TABLE `jr_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jr_log`
--
ALTER TABLE `jr_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `jr_status`
--
ALTER TABLE `jr_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jr_user`
--
ALTER TABLE `jr_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
