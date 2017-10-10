-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2017 at 04:51 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(8) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_tlp` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat`, `no_tlp`) VALUES
(101, 'dr. Rosdiana, Sp.Rad', 'Jl. Padjajaran no 156 Bandung', 2147483647),
(102, 'dr. Galuh Nugraha, Sp.Rad', 'Batununggal Indah no 58', 891223100),
(103, 'dr. Agita Purnamasari, Sp.Rad', 'Jl. Soekarno Hatta No 368, Bandung', 812453682),
(104, 'dr. Zeffry Irwanto, Sp.M', 'Jl. Permata Regency Blok 4 no 18 Bandung', 871171710),
(105, 'dr. Arifin Muhammad, Sp.S.Mkes', 'Jl. Cikutra Barat bl B-3 Bandung', 2147483647),
(106, 'dr. Jaidi, Sp.A', 'Jl. Permata Raya 9/13 Bandung', 89981818),
(107, 'dr. Pranata Audy, Sp.B', 'Jl. Riung Bandung Raya no 39 Bandung', 892822221),
(108, 'dr. Anugrah Pratama, Sp.PD', 'Jl. Cipamokolan Village barat no 24 Bandung', 982872788);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tindakan`
--

CREATE TABLE IF NOT EXISTS `jenis_tindakan` (
  `kode_tindakan` int(8) NOT NULL,
  `jenis_tindakan` varchar(20) NOT NULL,
  `tarif` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tindakan`
--

INSERT INTO `jenis_tindakan` (`kode_tindakan`, `jenis_tindakan`, `tarif`) VALUES
(1, 'Thorax', 62000),
(2, 'USG', 720000),
(3, 'RONGENT', 150000),
(4, 'CT-SCAN', 180000);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_bayar` int(8) NOT NULL,
  `cara_bayar` varchar(100) NOT NULL,
  `tarif` int(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_bayar`, `cara_bayar`, `tarif`) VALUES
(1, 'ASKES', 271000),
(2, 'BPJS', 200000),
(3, 'UMUM', 240000),
(4, 'JAMKESMAS', 210000);

-- --------------------------------------------------------

--
-- Table structure for table `pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `pemeriksaan` (
  `no_rm` int(8) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `hasil` varchar(500) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `kode_tindakan` int(11) NOT NULL,
  `jml_tindakan` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemeriksaan`
--

INSERT INTO `pemeriksaan` (`no_rm`, `nama_petugas`, `nama_pasien`, `hasil`, `tgl_daftar`, `kode_tindakan`, `jml_tindakan`) VALUES
(2, '2', '0', '2017-08-01', '0000-00-00', 0, 1),
(2, '1', '0', '2017-08-01', '0000-00-00', 0, 1),
(0, '0', '0', '2017-08-04', '0000-00-00', 0, 2),
(0, '0', '0', '2017-08-04', '0000-00-00', 0, 2),
(446001, 'andi', 'Yunanda Eka Pratiwi', 'hernia ombiciolis', '2017-08-01', 1, 1),
(446001, 'andi', 'Yunanda Eka Pratiwi', 'hernia ombiciolis', '2017-08-01', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `id_pasien` int(8) NOT NULL,
  `no_rm` int(8) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jenis_pelayanan` varchar(80) NOT NULL,
  `jenis_pasien` varchar(80) NOT NULL,
  `jenis_tindakan` varchar(80) NOT NULL,
  `tempat_daftar` varchar(20) NOT NULL,
  `ukuran` varchar(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pasien`, `no_rm`, `nama_pasien`, `tgl_daftar`, `jenis_pelayanan`, `jenis_pasien`, `jenis_tindakan`, `tempat_daftar`, `ukuran`) VALUES
(10, 446001, 'Yunanda Eka Pratiwi', '2017-08-01', 'Rawat Jalan', 'UMUM', 'USG', 'Poli Umum', '30x40cm'),
(11, 446002, 'Ikwan Fauzi', '2017-08-02', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x40cm'),
(12, 446003, 'Ricky Budiman', '2017-08-02', 'Rawat Inap', 'Keluarga (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x40cm'),
(13, 446004, 'Sarah Ardelia', '2017-08-03', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'USG', 'Poli Umum', '30x40cm'),
(14, 446005, 'Risa Williani', '2017-08-04', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(15, 446006, 'Joshua Windarto', '2017-08-04', 'IGD', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x40cm'),
(16, 446007, 'Lisnawati', '2017-08-05', 'Rawat Inap', 'Anak (PT.Pindad)', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(17, 446008, 'Lusi Herawati', '2017-08-05', 'IGD', 'Karyawan (PT.CMP)', 'RONGENT', 'Poli Umum', '30x40cm'),
(18, 446009, 'Uswatun Khasanah', '2017-08-05', 'Rawat Jalan', 'ASKES', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(19, 446010, 'Feti Astuti', '2017-08-05', 'Rawat Jalan', 'Anak (PT.CMP)', 'RONGENT', 'Poli Umum', '30x40cm'),
(20, 446011, 'Muhammad Ilyas Firdaus', '2017-08-05', 'Rawat Inap', 'UMUM', 'THORAX', 'Poli Umum', '30x40cm'),
(21, 446012, 'Bayu Nugroho', '2017-08-05', 'Rawat Jalan', 'ASKES', 'THORAX', 'Poli Umum', '30x40cm'),
(22, 446013, 'Ivan Setiawan', '2017-08-06', 'Rawat Inap', 'ASKES', 'RONGENT', 'Poli Umum', '30x40cm'),
(23, 446014, 'Feni Anggraini', '2017-08-06', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'USG', 'Poli Umum', '30x40cm'),
(24, 446015, 'Silviana Penariska', '2017-08-06', 'Rawat Jalan', 'Anak (PT.CMP)', 'CT-SCAN', 'Poli Umum', '20x20cm'),
(25, 446016, 'Firda Fauziah', '2017-08-06', 'Rawat Jalan', 'ASKES', 'THORAX', 'Poli Umum', '30x20cm'),
(26, 446017, 'Nugraha', '2017-08-06', 'Rawat Inap', 'UMUM', 'RONGENT', 'Poli Umum', '30x30cm'),
(27, 446018, 'Rafie Subagyo', '2017-08-07', 'Rawat Inap', 'Anak (PT.CMP)', 'RONGENT', 'Poli Umum', '30x20cm'),
(28, 446019, 'Rindu Sejati', '2017-08-07', 'IGD', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x30cm'),
(29, 446020, 'Verawati', '2017-08-07', 'Rawat Inap', 'Anak (PT.CMP)', 'USG', 'Poli Umum', '30x40cm'),
(30, 446021, 'Yayang Herlan', '2017-08-07', 'IGD', 'Karyawan (PT.CMP)', 'RONGENT', 'Poli Umum', '30x30cm'),
(31, 446022, 'Oktaviana', '2017-08-07', 'IGD', 'Karyawan (PT.CMP)', 'THORAX', 'Poli Umum', '30x40cm'),
(32, 446023, 'Adi Muhammad', '2017-08-07', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'RONGENT', 'Poli Umum', '30x40cm'),
(33, 446024, 'Septi ayu', '2017-08-08', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'USG', 'Poli Umum', '30x30cm'),
(34, 446025, 'Silviana Siti', '2017-08-08', 'Rawat Jalan', 'Anak (PT Pindad)', 'CT-SCAN', 'Poli Umum', '30x20cm'),
(35, 446026, 'Rayendra Anggraini', '2017-08-09', 'Rawat Jalan', 'Anak (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x30cm'),
(36, 446027, 'Siti Koridah', '2017-10-09', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'USG', 'Poli Umum', '30x30cm'),
(37, 446028, 'Suci Hidayah', '2017-08-10', 'Rawat Inap', 'Keluarga (PT.Pindad)', 'THORAX', 'Poli Umum', '30x20cm'),
(38, 446029, 'Sifa fauziah', '2017-08-10', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x40cm'),
(39, 446030, 'Irwan Herdiansyah', '2017-08-11', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Poli Umum', '30x20cm'),
(40, 446031, 'Purnama Wening', '2017-08-11', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Poli umum', '30x30cm'),
(41, 446032, 'Ledya Purnama', '2017-08-11', 'Rawat Jalan', 'Keluarga (PT.Pindad)', 'USG', 'Poli  umum', '15x15cm'),
(42, 446033, 'Chaidir', '2017-08-13', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'poli umum', '20x20cm'),
(43, 446034, 'Wiwin Widaningsih', '2017-08-14', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'USG', 'poli umum', '30x30cm'),
(44, 446035, 'Yudi Lesmana', '2017-08-15', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'poli umum', '20x20cm'),
(45, 446036, 'Herayanti', '2017-08-16', 'IGD', 'Karyawan (PT.CMP)', 'USG', 'poli umum', '30x30cm'),
(46, 446037, 'Riffka Saepurrohman', '2017-08-17', 'Rawat Jalan', 'ANak (PT.Pindad)', 'CT-SCAN', 'poli umum', '20x20cm'),
(47, 446038, 'Rini Wulandari', '2017-08-18', 'IGD', 'UMUM', 'USG', 'poli umum', '30x30'),
(48, 446039, 'Roswati', '2017-08-18', 'Rawat Jalan', 'UMUM', 'CT-SCAN', 'Poli Umum', '30x30cm'),
(49, 446040, 'Mumu Wahab', '2017-08-19', 'IGD', 'UMUM', 'THORAX', 'Poli Umum', '30x20cm'),
(50, 446041, 'Riska Yuliani', '2017-08-19', 'Rawat Inap', 'UMUM', 'USG', 'Poli umum', '20x20cm'),
(51, 446042, 'Juanda', '2017-08-20', 'IGD', 'UMUM', 'THORAX', 'Poli  umum', '15x15cm'),
(52, 446043, 'Gita Agustina', '2017-08-20', 'Rawat Jalan', 'Keluarga (PT.Pindad)', 'USG', 'poli umum', '20x20cm'),
(53, 446044, 'Meiriska', '2017-08-21', 'Rawat Inap', 'UMUM ', 'CT-SCAN', 'poli umum', '30x30cm'),
(54, 446045, 'Dadang Sumarsana', '2017-08-21', 'IGD', 'UMUM', 'THORAX', 'poli umum', '20x20cm'),
(55, 446046, 'Hariyanto', '2017-08-21', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'poli umum', '30x30cm'),
(56, 446047, 'Heryandi', '2017-08-22', 'IGD', 'Karyawan (PT.CMP)', 'THORAX', 'poli umum', '20x20cm'),
(57, 446048, 'Vicky Segoro', '2017-08-22', 'Rawat Jalan', 'Keluarga (PT.Pindad)', 'CT-SCAN', 'poli umum', '30x30'),
(58, 446049, 'Desy Susilawati', '2017-08-23', 'Rawat Inap', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x30cm'),
(59, 446050, 'Galih Ginanjar', '2017-08-23', 'IGD', 'UMUM', 'RONGENT', 'Poli Umum', '30x20cm'),
(60, 446051, 'Ana Aprilia', '2017-10-24', 'IGD', 'UMUM', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(61, 446052, 'Novi Indayanti', '2017-08-25', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x40cm'),
(62, 446053, 'Vini Utami', '2017-08-25', 'IGD', 'Keluarga (PT.Pindad)', 'USG', 'Poli umum', '20x20cm'),
(63, 446054, 'Wijaya Setiawan', '2017-08-26', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Poli  umum', '15x15cm'),
(64, 446055, 'Deni Riswanto', '2017-08-27', 'Rawat Jalan', 'Karyawan (PT.CMP)', 'THORAX', 'poli umum', '20x20cm'),
(65, 446056, 'Annisa khofifah', '2017-08-28', 'Rawat Inap', 'Keluarga (PT.Pindad)', 'USG', 'poli umum', '30x30cm'),
(66, 446057, 'Nadia Felynza', '2017-08-29', 'IGD', 'Keluarga (PT.CMP)', 'CT-SCAN', 'poli umum', '20x20cm'),
(67, 446058, 'Andreas Budi', '2017-08-30', 'IGD', 'UMUM', 'RONGENT', 'poli umum', '30x30cm'),
(68, 446059, 'Muhammad Zaeni', '2017-08-31', 'IGD', 'UMUM', 'THORAX', 'poli umum', '30x30cm'),
(69, 446060, 'Ika Purnianti', '2017-08-31', 'Rawat Jalan', 'UMUM', 'CT-SCAN', 'poli umum', '30x30'),
(70, 446061, 'Rindi Usmayanti', '2017-09-01', 'IGD', 'Anak (PT.Pindad)', 'CT-SCAN', 'Poli Umum', '30x30cm'),
(71, 446062, 'Cecep Barkah', '2017-09-01', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x20cm'),
(72, 446063, 'Windi setiani', '2017-09-02', 'Rawat Inap', 'Keluarga (PT.CMP)', 'USG', 'Poli Umum', '30x30cm'),
(73, 446064, 'Esa Kurniawan', '2017-09-02', 'IGD', 'Karyawan (PT.CMP)', 'THORAX', 'Poli Umum', '30x20cm'),
(74, 446065, 'Wildan Fahreza', '2017-09-03', 'Rawat Jalan', 'Anak (PT.CMP)', 'RONGENT', 'Poli umum', '20x20cm'),
(75, 446066, 'Susilowati', '2017-09-03', 'Rawat Inap', 'Karyawan (PT.CMP)', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(76, 446067, 'Citrawati', '2017-09-04', 'IGD', 'Anak (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x30cm'),
(77, 446068, 'Sintia rawza', '2017-09-04', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'USG', 'Poli Umum', '30x20cm'),
(78, 446069, 'Tina Kusumayati', '2017-09-04', 'Rawat Inap', 'Keluarga (PT.Pindad)', 'RONGENT', 'Poli umum', '20x20cm'),
(79, 446070, 'Wisnu Nugraha', '2017-09-05', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'THORAX', 'Poli  umum', '15x15cm'),
(80, 446071, 'Elvira Viernanda', '2017-09-05', 'IGD', 'UMUM', 'RONGENT', 'poli umum', '20x20cm'),
(81, 446072, 'Siti Umi ', '2017-09-05', 'Rawat Inap', 'UMUM', 'USG', 'Poli Umum', '30x30cm'),
(82, 446073, 'Iwan Ardiansyah', '2017-09-06', 'Rawat Inap', 'UMUM', 'CT-SCAN', 'Poli Umum', '30x40cm'),
(83, 446074, 'Tommy wicaksono', '2017-09-07', 'IGD', 'Anak (PT.Pindad)', 'RONGENT', 'Poli umum', '20x20cm'),
(84, 446075, 'Surya nugraha', '2017-09-08', 'Rawat Jalan', 'UMUM', 'CT-SCAN', 'Poli  umum', '15x15cm'),
(85, 446076, 'Intan Kurnia', '2017-09-09', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'USG', 'poli umum', '20x20cm'),
(86, 466077, 'Kurnia sari', '2017-08-06', 'Rawat Inap', 'Keluarga (PT.CMP)', 'RONGENT', 'Poli Umum', '30x30cm'),
(87, 466078, 'Setiadi', '2017-09-07', 'Rawat Inap', 'Karyawan (PT.CMP)', 'THORAX', 'Poli Umum', '30x20cm'),
(88, 446079, 'Melinda', '2017-09-09', 'IGD', 'Karyawan (PT.CMP)', 'RONGENT', 'Poli umum', '20x20cm'),
(89, 446080, 'Indrawan', '2017-09-10', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Poli  umum', '15x15cm'),
(90, 446081, 'Yunita', '2017-09-11', 'Rawat Jalan', 'Anak (PT.Pindad)', 'RONGENT', 'poli umum', '20x20cm'),
(91, 446082, 'Resty Mulyani', '2017-09-12', 'IGD', 'Karyawan (PT. Pindad)', 'USG', 'Poli Umum', '30x30cm'),
(92, 446083, 'Irfa Julia', '2017-09-13', 'Rawat Inap', 'Anak (PT.CMP)', 'RONGENT', 'Poli Umum', '30x20cm'),
(93, 446084, 'rengganis Parahyangan', '2017-09-14', 'Rawat Jalan', 'Anak (PT.CMP)', 'CT-SCAN', 'Poli umum', '20x20cm'),
(94, 446085, 'Milya Rosanti', '2017-09-15', 'IGD', 'Anak (PT.Pindad)', 'RONGENT', 'Poli  umum', '15x15cm'),
(95, 446086, 'Aan Mulyana', '2017-09-16', 'Rawat Inap', 'Karyawan (PT.CMP)', 'THORAX', 'poli umum', '20x20cm'),
(96, 446087, 'Siti Maesyaroh', '2017-09-17', 'IGD', 'Karyawan (PT.Pindad)', 'USG', 'poli umum', '30x30cm'),
(97, 446088, 'Irfan Rahman', '2017-09-18', 'Rawat Jalan', 'Keluarga (PT.CMP)', 'THORAX', 'poli umum', '20x20cm'),
(98, 446089, 'Shella Andreana', '2018-09-19', 'IGD', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'poli umum', '30x30cm'),
(99, 446090, 'Juliana', '2017-08-20', 'Rawat Inap', 'UMUM', 'USG', 'poli umum', '20x20cm'),
(100, 446091, 'Anis Purnamasari', '2017-09-21', 'Rawat Jalan', 'UMUM', 'THORAX', 'poli umum', '30x30'),
(101, 446092, 'Sherli Januar', '2017-09-21', 'Rawat Jalan', 'Anak (PT.Pindad)', 'RONGENT', 'Poli Umum', '30x30cm'),
(102, 446093, 'Arifin', '2017-09-23', 'Rawat Inap', 'Karyawan (PT.Pindad)', 'THORAX', 'Poli Umum', '30x20cm'),
(103, 446094, 'Mestika', '2017-09-24', 'Rawat Inap', 'Karyawan (PT.CMP)', 'USG', 'Poli umum', '20x20cm'),
(104, 446095, 'Widaningsih', '2017-09-25', 'IGD', 'Karyawan (PT.Pindad)', 'USG', 'Poli  umum', '15x15cm'),
(105, 446096, 'Elsawati', '2017-09-26', 'Rawat Jalan', 'Keluarga (PT.Pindad)', 'RONGENT', 'poli umum', '20x20cm'),
(106, 446097, 'Rosalina', '2017-09-27', 'Rawat Jalan', 'Anak (PT.CMP)', 'RONGENT', 'poli umum', '30x30cm'),
(107, 446098, 'Indri Meriyanti', '2017-09-28', 'Rawat Jalan', 'Keluarga (PT.Pindad)', 'USG', 'poli umum', '20x20cm'),
(108, 446099, 'Engkus Kuswara', '2017-09-28', 'Rawat Inap', 'Karyawan (PT.CMP)', 'CT-SCAN', 'poli umum', '30x30cm'),
(109, 446100, 'Ade Wiyatno', '2017-09-29', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'RONGENT', 'poli umum', '20x20cm'),
(110, 446101, 'Pipit Wulandari', '2017-09-29', 'Rawat Inap', 'UMUM', 'CT-SCAN', 'poli umum', '30x30'),
(111, 446102, 'Ahmad Husein', '2017-09-30', 'IGD', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x30cm'),
(112, 446103, 'Firman Hidayat', '2017-09-30', 'Rawat Inap', 'Keluarga (PT.CMP)', 'THORAX', 'Poli Umum', '30x20cm'),
(113, 446104, 'Virniati', '2017-10-01', 'Rawat Jalan', 'UMUM', 'USG', 'poli umum', '20x20cm'),
(114, 446105, 'Rismayanti', '2017-10-01', 'Rawat Inap', 'Anak (PT.CMP)', 'THORAX', 'poli umum', '30x30cm'),
(115, 446106, 'Asep Kurniawan', '2017-10-01', 'Rawat Jalan', 'UMUM', 'THORAX', 'poli umum', '20x20cm'),
(116, 446107, 'Andy Prasetyo', '2017-10-02', 'Rawat Inap', 'Anak (PT.CMP)', 'RONGENT', 'poli umum', '30x30cm'),
(117, 446108, 'Aldi Prabowo', '2017-10-02', 'Rawat Jalan', 'Karyawan (PT.CMP)', 'RONGENT', 'poli umum', '20x20cm'),
(118, 446109, 'Dini Purwanti', '2017-09-03', 'Rawat Inap', 'Keluarga (PT.CMP)', 'USG', 'poli umum', '30x30cm'),
(119, 446110, 'Eva Restanti', '2017-10-03', 'Rawat Jalan', 'Karyawan (PT.CMP)', 'RONGENT', 'poli umum', '30x30cm'),
(120, 446111, 'Deden Rahmad', '2017-10-04', 'Rawat Inap', 'Keluarga (PT.CMP)', 'THORAX', 'poli umum', '20x20cm'),
(121, 446112, 'Elsa Yulia', '2017-10-04', 'Rawat Jalan', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'poli umum', '30x30cm'),
(122, 446113, 'Triana Faisal', '2017-10-05', 'Rawat Jalan', 'UMUM', 'THORAX', 'poli umum', '20x20cm');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_radiografer`
--

CREATE TABLE IF NOT EXISTS `petugas_radiografer` (
  `nip_radiografer` int(8) NOT NULL,
  `kode_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(15) NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `no_tlp` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7121 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas_radiografer`
--

INSERT INTO `petugas_radiografer` (`nip_radiografer`, `kode_petugas`, `nama_petugas`, `pendidikan`, `no_tlp`) VALUES
(7110, '002', 'Andi Nurahman', 'D3-RMIK', 2147483647),
(7111, '003', 'Nita', 'D3-RMIK', 812637291),
(7112, '004', 'Ringgo', 'D4-IRM', 89811127),
(7113, '001', 'Wina', 'D3-RMIK', 891634251),
(7114, '005', 'Andre', 'D4-IRM', 821237432),
(7115, '006', 'Ayu', 'D3-RMIK', 981723647),
(7116, '007', 'Hendri', 'D4-IRM', 918374627),
(7117, '008', 'Rita', 'D3-RMIK', 81237483),
(7118, '009', 'Mike', 'D4-IRM', 81637261),
(7119, '010', 'Cecep', 'D3-RMIK', 981634251),
(7120, '011', 'Intan', 'D3-RMIK', 87625142);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dokter`
--

CREATE TABLE IF NOT EXISTS `tbl_dokter` (
  `id_user` int(5) NOT NULL,
  `nama_dokter` varchar(30) NOT NULL,
  `departemen` varchar(30) NOT NULL,
  `jadwal_praktik` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1015 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id_user`, `nama_dokter`, `departemen`, `jadwal_praktik`) VALUES
(1001, 'dr. Irsyad Muhammad, Sp.Rad', 'Umum', 'Senin - Kamis | 08.00 - 15.00'),
(1002, 'dr.Pranata Audy, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1003, 'dr. Jaidi, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1004, 'dr. Anugrah Pratama, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1005, 'dr. Dendi Abdul Rohim, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1006, 'dr. Kurniawan Aditya, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1007, 'dr. Arifin Muhammad, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1008, 'dr. Gyats Haitsam, Sp.Rad', 'Kulit dan Kelamin', 'Senin - Kamis | 08.00 - 15.00'),
(1009, 'dr. Dono Aditia, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1010, 'dr. Zeffry Irwanto, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1011, 'dr. Gustian M, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1012, 'dr. Septianti Amalia, Sp.Radi', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1013, 'dr. Setyaningsih D, Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00'),
(1014, 'dr. Bayu, H. Sp.Rad', 'Radiologi', 'Senin - Kamis | 08.00 - 15.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pasien`
--

CREATE TABLE IF NOT EXISTS `tbl_pasien` (
  `no_rm` int(6) NOT NULL,
  `nama_pasien` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_pasien` varchar(80) NOT NULL,
  `jenis_tindakan` varchar(80) NOT NULL,
  `jenis_pelayanan` varchar(80) NOT NULL,
  `cara_bayar` varchar(80) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=446114 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pasien`
--

INSERT INTO `tbl_pasien` (`no_rm`, `nama_pasien`, `alamat`, `jenis_kelamin`, `no_telepon`, `tgl_lahir`, `jenis_pasien`, `jenis_tindakan`, `jenis_pelayanan`, `cara_bayar`, `keterangan`, `waktu`) VALUES
(446001, 'Yunanda Eka Pratiwi', 'Jl. Merkuri Tengah Blok 3 no 21, Bandung', 'P', '08126252153', '1982-04-04', 'UMUM', 'USG', 'Rawat Jalan', 'ASKES', 'belum pernah periksa, pasien baru ', '2017-10-03 20:05:18'),
(446002, 'Ikwan Fauzi', 'Jl. Antapani No 40 Bandung', 'L', '081245672931', '1976-10-06', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Jalan', 'UMUM', 'pemeriksaan ke-2', '2017-10-03 20:05:18'),
(446003, 'Ricky Budiman', 'Jl. Babakan Jeruk III Blok E ,Bandung', 'L', '08235235235', '1965-06-14', 'Keluarga (PT Pindad)', 'RONGENT', 'Rawat Inap', 'BPJS', 'Penanganan pemeriksaan Lanjut', '2017-10-03 20:05:18'),
(446004, 'Sarah Ardelia', 'Jl.Pinus Raya Barat,Geger Kalong , Sukasari', 'P', '0812524124', '1985-05-09', 'Keluarga (PT.CMP)', 'USG', 'Rawat Jalan', 'JAMKESMAS', 'Pemeriksaan USG yangke-3', '2017-10-03 20:05:18'),
(446005, 'Risa Williani', 'Jl. Blok Sukamaju,Cimahi, Bandung', 'P', '08124124412', '1993-02-21', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'ASKES', 'Penanganan dari Poli dalam', '2017-10-03 20:05:18'),
(446006, 'Joshua Windarto', 'Jl. Cihampelas No 198,Bandung', 'L', '08123122353', '1967-01-01', 'Keluarga (PT.CMP)', 'THORAX', 'IGD', 'BPJS', 'pemeriksaan lanjut dari poli bedah', '2017-10-03 20:05:18'),
(446007, 'Lisnawati', 'Jl. Margahayu Raya Barat Blok S No 2/91-A, Bandung', 'P', '08098999', '1999-03-08', 'Anak (PT. Pindad)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'pemeriksaan lanjut dari poli dalam', '2017-10-03 20:05:18'),
(446008, 'Lusi Herawati', 'Jl. Wayang 9, Ciwastra, Bandung', 'P', '0212312415', '1994-07-14', 'Karyawan (PT.CMP)', 'RONGENT', 'IGD', 'ASKES', 'pemeriksaan ke-2', '2017-10-03 20:05:18'),
(446009, 'Uswatun Khasanah', 'Kompi Sentraduta Blok K-8/28, Turangga, Bandung', 'P', '082416242', '1996-04-24', 'Anak (PT.Pindad)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'hasil kurang sempurna, dr poli inap minta hasil secepatnya', '2017-10-03 20:05:18'),
(446010, 'Feti Astuti', 'Jl. Maulanan Yusuf 1,Bandung', 'P', '08172352412', '1997-04-10', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'BPJS', 'pasien belum pernah pemeriksaan radiologi', '2017-10-03 20:05:18'),
(446011, 'Muhammad Ilyas Firdaus', 'Jl. Surya SUmantri 86-C,Bandung', 'L', '081264162123', '1992-04-08', 'UMUM', 'THORAX', 'Rawat Inap', 'UMUM', 'pemeriksaan ke-2', '2017-10-03 20:05:18'),
(446012, 'Bayu Nugroho', 'Jl. Dursasana 18 Margacinta,Bandung', 'L', '081223456789', '1991-11-04', 'Karyawan (PT.CMP)', 'THORAX', 'Rawat Jalan', 'JAMKESMAS', 'pemeriksaan pertama', '2017-10-03 20:05:18'),
(446013, 'Ivan Setiawan', 'Jl. Kembar I no 48, Cisarua, Bandung', 'L', '085771293781', '1983-10-17', 'Keluarga (PT.CPM)', 'RONGENT', 'Rawat Inap', 'JAMKESMAS', 'pemriksaan ulang', '2017-10-03 20:05:18'),
(446014, 'Feni Anggraini', 'Komplek Griya Bandung Asri III Blok O-13 Bandung', 'P', '081372839041', '1992-01-04', 'Karyawan (PT.Pindad)', 'USG', 'Rawat Jalan', 'ASKES', 'pemeriksaan tidak jelas', '2017-10-03 20:05:18'),
(446015, 'Silviana Penariska', 'Jl. Cibereum Gg Mawar No 12,Bandung', 'P', '087712110190', '1993-09-04', 'Anak (PT.CMP)', 'CT-SCAN', 'Rawat Jalan', 'BPJS', 'pemeriksaan lanjut', '2017-10-03 20:05:18'),
(446016, 'Firda Fauziah', 'Jl. Kopo Selatan 5 No 121, Bandung', 'P', '08117281910', '1996-07-02', 'Anak (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'Pemeriksaan lanjut', '2017-10-03 20:05:18'),
(446017, 'Nugraha', 'Jl. Cibaduyut Selatan No 34,Bandung', 'L', '087265271829', '1994-09-04', 'UMUM', 'RONGENT', 'Rawat Inap', 'UMUM', 'Keluhan nyeri dada sakit', '2017-10-03 20:05:18'),
(446018, 'Rafie Subagyo', 'Jl. Mekarsari Raya no 171 Bandung', 'L', '08716253672', '1997-10-03', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Inap', 'ASKES', 'Adanya benjolan di kepala, pemriksaan lanjut', '2017-10-05 08:35:58'),
(446019, 'Rindu Sejati', 'Jl. Perum Margahayu Regency Blok Bagong No 121, Bandung', 'P', '08977118291', '1968-07-18', 'Keluarga (PT.CMP)', 'THORAX', 'IGD', 'JAMKESMAS', 'Pemeriksaan ke-2', '2017-10-05 08:35:58'),
(446020, 'Verawati', 'Jl. Kopo 165, Bandung', 'P', '08771532426111', '1991-03-07', 'Anak (PT.CMP)', 'USG', 'Rawat Inap', 'BPJS\r\n	', 'pemeriksaan lanjut', '2017-10-04 11:03:04'),
(446021, 'Yayang Herlan', 'Jl. Pasir Salam IV 3-A, Bandung', 'L', '0987361678391', '1991-02-22', 'Karyawan (PT.CMP)', 'RONGENT', 'IGD', 'BPJS\r\n	', 'pemeriksaan ke-2', '2017-10-04 11:05:01'),
(446022, 'Oktaviana ', 'Jl. Jl. Raya Cimindi 106 rt 001/05 Bandung', 'P', '0812218171738', '1995-08-17', 'Karyawan (PT.CMP)', 'THORAX', 'IGD', 'BPJS\r\n	', 'Pemeriksaan lanjut ke-3', '2017-10-04 19:12:33'),
(446023, 'Adi Muhammad', 'Jl. Hasan Mustofa 18 rt001/05 Bandung', 'L', '08162272828', '1994-10-03', 'Keluarga (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'JAMKESMAS\r\n	', 'Pemeriksaan rongent usulan dr Poli dalam', '2017-10-04 19:14:53'),
(446024, 'Septi ayu', 'Jl. Dr. Setiabudi no 307 ,Bandung', 'P', '0987262554161', '1990-07-11', 'Karyawan (PT. Pindad)', 'USG', 'Rawat Inap', 'BPJS', 'Pemeriksaan lagi yg ke-4', '2017-10-05 09:11:46'),
(446025, 'Silviana Siti', 'Jl. Plesiran 17, Bandung', 'P', '08976151555', '1995-06-13', 'Anak (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'BPJS', 'Pemeriksaan Baru', '2017-10-05 09:11:46'),
(446026, 'Rayendra Anggraini', 'Jl.Dago Timur 33 Bandung', 'P', '087872625626', '1996-05-08', 'Anak (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'Rujukan dari Puskesmas, ', '2017-10-05 09:16:05'),
(446027, 'Siti Koridah', 'Jl. Cikondang 2 rt001/12, Bandung', 'P', '087887718817', '1992-11-10', 'Karyawan (PT.Pindad)', 'USG', 'Rawat Jalan', 'JAMKESMAS', 'awal pemeriksaan dikehamilan ke-1', '2017-10-05 09:16:05'),
(446028, 'Suci Hidayah', 'Jl. Terusan Jakarta Barat no 90 bandung', 'P', '089726726151', '1970-07-16', 'Keluarga (PT.Pindad)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan yg ke-2', '2017-10-05 09:18:42'),
(446029, 'Sifa fauziah', 'Komplek KPAD 27 Bandung', 'P', '089726251511', '1969-12-13', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Jalan', 'BPJS', 'Pemeriksaan pertama', '2017-10-05 09:24:32'),
(446030, 'Irwan Herdiansyah', 'Jl. Saluyu Indah VII no 363, Bandung', 'L', '089726267171', '1993-10-09', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Inap', 'ASKES', 'Pemeriksaan ct-scan kepala', '2017-10-05 09:24:32'),
(446031, 'Purnama wening', 'Jl. Terusan Bubat, Gg Pesantren rt002/10, Bandung ', 'L', '0892872652671', '1992-06-06', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'pemeriksaan ct-scan posisi di luar kepala', '2017-10-05 09:31:01'),
(446032, 'Ledya purnama', 'Jl. Pasirluyu VIII/8 Bandung', 'P', '081231515728', '1981-07-10', 'Keluarga (PT.Pindad)', 'USG', 'Rawat Jalan', 'BPJS', 'Pemeriksaan USG kehamilan yg ke-3', '2017-10-05 09:31:01'),
(446033, 'Chaidir', 'Jl.Soekarnohatta 476, Bandung', 'L', '089718282322', '1991-05-11', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'BPJS', 'pemeriksaan ct-scan di dada atas perut', '2017-10-05 09:35:50'),
(446034, 'Wiwin Widaningsih', 'Jl. Karasak II no 5 Bandung', 'P', '081325261781', '1992-10-23', 'Keluarga (PT.CMP)', 'USG', 'Rawat Jalan', 'BPJS', 'USG anak kehamilan ke-3', '2017-10-05 09:35:50'),
(446035, 'Yudi Lesmana', 'Jl.Lembayung 1 Komplek Kopo Elok Bandung', 'L', '0812324566666', '1981-09-19', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'Pemeriksaan ct scan ke-2, luar kepala', '2017-10-05 09:40:52'),
(446036, 'Herayanti', 'Jl. Cibuntu Gg Jumena Blok 25-C/81 rt001/03 Bandung', 'P', '087917162562', '1991-06-06', 'Karyawan (PT.CMP)', 'USG', 'IGD', 'BPJS', 'Pemeriksaan ke-1', '2017-10-05 09:40:52'),
(446037, 'Riffka Saepurrohman', 'Jl. Pendawa 2 Bnadung', 'L', '08772552671', '1996-06-07', 'Anak (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'ASKES', 'pemeriksaan ct scan dada', '2017-10-05 09:45:03'),
(446038, 'Rini wulandari', 'Jl. Telaga Bodas 33 Bandung', 'P', '089826278111', '1983-10-29', 'UMUM', 'USG', 'IGD', 'UMUM', 'pemeriksaan ke-2', '2017-10-05 09:45:03'),
(446039, 'Roswati', 'Jl. Permata Arcamanik Blok E/2 Bandung', 'P', '08111211111', '1993-08-15', 'UMUM', 'CT-SCAN', 'Rawat jalan', 'UMUM', 'pemeriksaan ct scand di bagian dada kiri bawah nyeri', '2017-10-05 09:50:06'),
(446040, 'Mumu Wahab', 'Jl. Sabang 26 Bandung', 'L', '081172679090', '1992-04-03', 'UMUM', 'THORAX', 'IGD', 'UMUM', 'pemriksaan lenjutan', '2017-10-05 09:50:06'),
(446041, 'Riska Yuliani', 'Jl. Lengkong Kecil 50 Bandung', 'P', '09282373839', '1981-07-10', 'UMUM', 'USG', 'Rawat Inap', 'UMUM', 'pemriksaan ulang', '2017-10-05 09:56:28'),
(446042, 'Juanda', 'Jl.Jend Gatot Subroto no 237 Bandung', 'L', '082372828882', '1951-11-04', 'UMUM', 'THORAX', 'IGD', 'UMUM', 'Pemeriksaan ke-2', '2017-10-05 09:56:28'),
(446043, 'Gita Agustina', 'Jl. Karapitan 109 Bandung', 'P', '098826278811', '1995-02-14', 'Keluarga (PT.Pindad)', 'USG', 'Rawat Jalan', 'BPJS', 'pemeriksaan anak ke -2', '2017-10-05 10:07:54'),
(446044, 'Meiriska', 'Jl. Abd Rachman Saleh 68 Bandung', 'P', '0827253445556', '1968-07-02', 'UMUM', 'CT-SCAN', 'Rawat Inap', 'UMUM', 'pemeriksaan kepala', '2017-10-05 10:07:54'),
(446045, 'Dadang Sumarsana', 'Jl. Pesantren Cigadug II-3 Bandung', 'L', '0898266552111', '1987-01-01', 'UMUM', 'THORAX', 'IGD', 'UMUM', 'Pemeriksaan ulang', '2017-10-05 10:07:54'),
(446046, 'Hariyanto', 'Jl. Babakan Jeruk IV-9 Bandung', 'L', '089165255222', '1982-02-04', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'Keterangan pemeriksaan lanjut', '2017-10-05 10:07:54'),
(446047, 'Heryandi', 'Jl. Tikukur no 2 Bandung', 'L', '0867253677722', '1985-09-01', 'Karyawan (PT.CMP)', 'THORAX', 'IGD', 'JAMKESMAS', 'pemeriksaan ke-2', '2017-10-05 10:07:54'),
(446048, 'Vicky segoro', 'Jl. Merah Delima 12 Bandung', 'L', '081220092828', '1991-10-03', 'Keluarga(PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'ASKES', 'pemeriksaan ke-2', '2017-10-05 10:15:40'),
(446049, 'Desy Susilawati', 'Jl. Nengla Utara 14 Bandung', 'P', '089273773333', '1971-08-10', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Inap', 'JAMKESMAS', 'pemeriksaan ulang ', '2017-10-05 10:15:40'),
(446050, 'Galih Ginanjar', 'Jl. Jend A Yani 889 Bandung', 'L', '08978778792', '1961-09-08', 'UMUM', 'RONGENT', 'IGD', 'UMUM', 'Pemeriksaan nyeri di pinggan', '2017-10-05 10:15:40'),
(446051, 'Ana Aprilia', 'Jl.Sukakarya 13 rt004/01 Bandung', 'P', '08972627282', '1992-02-10', 'UMUM', 'CT-SCAN', 'IGD', 'UMUM', 'pemeriksaan lanjut', '2017-10-05 14:09:25'),
(446052, 'Novi Indayanti', 'Jl. Boegenville 7-1 Bandung', 'P', '082928767770', '1993-01-17', 'Karyawan (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'Pemeriksaan rutin', '2017-10-05 14:09:25'),
(446053, 'Vini Utami', 'Jl. Teraso 6 rt 005/05 Bandung', 'P', '09882827367', '1992-09-21', 'Keluarga (PT.Pindad)', 'USG', 'IGD', 'BPJS', 'pemeriksaan ke-2', '2017-10-05 14:09:25'),
(446054, 'Wijaya Setiawan', 'Jl. Pajagalan 49 Bandung', 'L', '086829209652', '1985-09-29', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'JAMKESMAS', 'pemeriksaan ulang', '2017-10-05 14:09:25'),
(446055, 'Deni Riswanto', 'Jl. BKR No 16 Bandung', 'L', '085728999901', '1989-09-29', 'Karyawan (PT.CMP)', 'THORAX', 'Rawat Jalan', 'ASKES', 'pemeriksaan yg ke-2', '2017-10-05 14:09:25'),
(446056, 'Annisa khofifah', 'Jl. Rajawali Barat 89 Bandung', 'P', '08366812999', '1988-09-15', 'Keluarga (PT.Pindad)', 'USG', 'Rawat Inap', 'BPJS', 'pemeriksaan kandungan', '2017-10-05 14:09:25'),
(446057, 'Nadia Felynza', 'Jl. Kalpataru Bl C/13 Kompl Bumi Asri Bandung', 'P', '08677789191', '1993-07-13', 'Keluarga (PT.CMP)', 'CT-SCAN', 'IGD', 'ASKES', 'penanganan pemeriksaan lanjut', '2017-10-05 14:09:25'),
(446058, 'Andreas Budi', 'Jl. Margaasih Selatan  Bl F/28 Bandung', 'L', '089999272t52', '1988-04-18', 'UMUM', 'RONGENT', 'Rawat Jalan', 'UMUM', 'pemeriksaan pertama', '2017-10-05 14:09:25'),
(446059, 'Muhammad Zaeni', 'Jl. Gemi 6 Bandung', 'L', '08566282222', '1988-09-23', 'UMUM', 'THORAX', 'IGD', 'UMUM', 'pemeriksaan thorax di kepala', '2017-10-05 14:09:25'),
(446060, 'Ika Purnianti', 'Jl. Cipamokolan rt 004/01 Bandung', 'P', '08222611100', '1987-08-12', 'UMUM', 'CT-SCAN', 'Rawat Jalan', 'UMUM', 'pemeriksaan lanjut', '2017-10-05 14:09:25'),
(446061, 'Rindi Usmayanti', 'Jl. Margacinta Barat No 9 Bandung', 'P', '089910011919', '1995-07-04', 'Anak (PT.Pindad)', 'CT-SCAN', 'IGD', 'BPJS', 'rujukan dari dokter keluarga', '2017-10-05 16:24:40'),
(446062, 'Cecep Barkah', 'Jl.Cibaduyut Selatan Gg Mekarwangi 121 Bandung', 'L', '098819283292', '1986-10-23', 'Karyawan (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-05 16:24:40'),
(446063, 'Windi setiani', 'Komplek Taman Cibaduyut Indah Blok R/22-24, Bandung', 'P', '08926226672', '1984-07-10', 'Keluarga (PT.CMP)', 'USG', 'Rawat Inap', 'ASKES', 'pemeriksaan anak ke-2', '2017-10-06 10:09:17'),
(446064, 'Esa Kurniawan', 'Jl. Tamblong 46 Margaasih Bandung', 'L', '08917111617', '1982-02-10', 'Karyawan (PT.CMP)', 'THORAX', 'IGD', 'BPJS', 'pemeriksaan lanjut', '2017-10-06 10:09:17'),
(446065, 'Wildan Fahreza', 'Jl. Sukajadi no 166 A Bandung', 'L', '08973273672', '1995-01-10', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'Pemeriksaan ke-2', '2017-10-06 18:30:48'),
(446066, 'Susilowati', 'Jl. Kencana Wangi II Kompi Pandan Wangi Bl F/8 Bandung', 'P', '09836728823', '1987-02-19', 'Karyawan (PT.CMP)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'pemeriksaan lanjutan', '2017-10-06 18:30:48'),
(446067, 'Citrawati', 'Jl. Cibogo Atas 136 Bandung', 'P', '08953394954', '1996-01-18', 'Anak (PT.Pindad)', 'RONGENT', 'IGD', 'JAMKESMAS', 'pasien rujukan dari sebelumnya pernah melakukan pemeriksaan ', '2017-10-06 18:30:48'),
(446068, 'Sintia Rawza', 'Jl. Cibogo Atas 136 Bandung', 'P', '08347492392', '1986-04-19', 'Karyawan (PT.Pindad)', 'USG', 'Rawat Jalan', 'BPJS', 'pemeriksaan anak ke-2', '2017-10-06 18:30:48'),
(446069, 'Tina Kusumayati', 'Jl. Reog 17-A Bandung', 'P', '08798263673', '0197-01-20', 'Keluarga (PT.Pindad)', 'RONGENT', 'Rawat Inap', 'JAMKESMAS', 'pemeriksaan lanjut', '2017-10-06 18:30:48'),
(446070, 'Wisnu Nugraha', 'Jl. Imam Bonjol 16 Bandung', 'L', '08563738292', '1982-03-17', 'Karyawan (PT.Pindad)', 'THORAX', 'Rawat Jalan', 'JAMKESMAS', 'pasien rujukan', '2017-10-06 18:30:48'),
(446071, 'Elvira Viernanda', 'Jl. Jendral Gatot Subroto no 94 Bandung', 'P', '083638238829', '1998-09-03', 'UMUM', 'RONGENT', 'IGD', 'UMUM', 'pemeriksaan pertama', '2017-10-06 18:30:48'),
(446072, 'Siti Umi', 'Jl. Cipaganti 84 Bandung', 'P', '0893736367283', '1986-09-26', 'UMUM', 'USG', 'Rawat Inap', 'UMUM', 'pemeriksaan kehamilan anak ke-3', '2017-10-06 18:30:48'),
(446073, 'Iwan Ardiansyah', 'Jl Komplek Griya Mukti Mas C-14 Bandung', 'L', '082738273822', '1982-01-18', 'UMUM', 'CT-SCAN', 'Rawat Inap', 'UMUM', 'diagnosis mengharuskan pemeriksaan lanjut', '2017-10-06 18:30:48'),
(446074, 'Tommy Wicaksono', 'Jl. Laswi 144 Bandung', 'L', '0892839382392', '1997-02-10', 'Anak (PT.Pindad)', 'RONGENT', 'IGD', 'ASKES', 'pemeriksaan ke 1', '2017-10-06 18:30:48'),
(446075, 'Surya Nugraha', 'Jl. Malabar 41 Bandung', 'L', '089736367272', '1987-01-29', 'UMUM', 'CT-SCAN', 'Rawat Jalan', 'UMUM', 'pemeriksaan lanjut', '2017-10-06 18:49:59'),
(446076, 'Intan Kurnia', 'Jl. Laswi 1G Bandung', 'P', '098376363672', '1982-01-27', 'Karyawan (PT.Pindad)', 'USG', 'Rawat Inap', 'JAMKESMAS', 'pemeriksaan anak ke 2', '2017-10-06 18:49:59'),
(446077, 'Kurnia Sari', 'Jl. Jl Siti 7 Bandung', 'P', '08937463432', '1987-01-29', 'Karyawan (PT.Pindad)', 'USG', 'Rawat Inap', 'ASKES', 'pemeriksaan anak ke-3', '2017-10-06 18:49:59'),
(446078, 'Setiadi', 'Jl. Indramayu 64 Bandung', 'L', '08966678373', '1983-03-17', 'Karyawan (PT.CMP)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjutan', '2017-10-06 18:49:59'),
(446079, 'Melinda', 'Jl. Natuna 5 Bandung', 'P', '087222262222', '1982-04-16', 'Karyawan (PT.CMP)', 'RONGENT', 'IGD', 'ASKES', 'Pemeriksaan lanjut', '2017-10-06 18:49:59'),
(446080, 'Indrawan', 'Jl. Cibaduyut Raya no 96 Bandung', 'L', '081736327111', '1985-01-27', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-06 18:49:59'),
(446081, 'Yunita', 'Jl. Komplek Cibolerang Indah Blok K-14 Bandung', 'P', '08221162526', '1999-01-28', 'Anak (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-06 18:49:59'),
(446082, 'Resty Mulyani', 'Jl. Rancamanyar III 1 rt 003/08 Bandung', 'P', '08118236362', '1993-04-18', 'Karyawan (PT.Pindad)', 'USG', 'IGD', 'ASKES', 'pemeriksaan anak ke-4', '2017-10-06 18:49:59'),
(446083, 'Irfa Julia', 'Jl. Soekarno Hatta no 138 Bandung', 'P', '08927363333', '1994-04-12', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjut', '2017-10-06 18:49:59'),
(446084, 'Rengganis Parahyangan', 'Jl. Sukanagara 28 Bandung', 'P', '08273633300', '1996-03-17', 'Anak (PT.CMP)', 'CT-SCAN', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-06 18:49:59'),
(446085, 'Milya Rosanti', 'Jl. Binong Kulon 167 Bandung', 'P', '08577162229', '1997-05-18', 'Anak (PT.Pindad)', 'RONGENT', 'IGD', 'ASKES', 'Pemeriksaan lanjutan', '2017-10-06 19:06:28'),
(446086, 'Aan Mulyana', 'Jl. Sari Asih Blok 7 no 17 Bandung', 'L', '089117339899', '1982-10-12', 'Karyawan (PT.CMP)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjutan', '2017-10-06 19:06:28'),
(446087, 'Siti Maesyaroh', 'Jl. Muara Baru 21 Bandung', 'P', '08911999373', '1987-10-13', 'Karyawan (PT.Pindad)', 'USG', 'IGD', 'JAMKESMAS', 'pemeriksaan anak ke -2', '2017-10-06 19:06:28'),
(446088, 'Irfan Rahman', 'Jl. Terusan Jakarta VI no 21 Bandung', 'L', '0877865566', '1988-01-21', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-06 19:06:28'),
(446089, 'Shella Andreana', 'Komplek Griya Bandung Asri II Blok H-9 Bandung', 'P', '08162561672', '1985-12-13', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'IGD', 'ASKES', 'pemeriksaan pertama', '2017-10-06 19:06:28'),
(446090, 'Juliana', 'Jl. Kalianak Barat 68 Bandung', 'P', '0898889261', '1989-07-19', 'UMUM', 'USG', 'Rawat Inap', 'UMUM', 'pemeriksaan anak ke-2', '2017-10-06 19:06:28'),
(446091, 'Anis Purnamasari', 'Jl. Binong Kulon 167 Bandung', 'P', '09871665211', '1978-01-18', 'UMUM', 'THORAX', 'Rawat Jalan', 'UMUM', 'pemeriksaan pertama', '2017-10-06 19:06:28'),
(446092, 'Sherli Januar', 'Jl. Kasturi kav 8 no 28 Bandung', 'P', '08911889287', '1998-03-10', 'Anak (PT.Pindad)', 'RONGENT ', 'Rawat Jalan', 'ASKES', 'pemeriksaan pertama', '2017-10-06 19:06:28'),
(446093, 'Arifin', 'Jl. Cimbeleuit no 18 Bandung', 'L', '0981100726', '1982-10-21', 'Karyawan (PT.Pindad)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjut', '2017-10-06 19:06:28'),
(446094, 'Mestika', 'Jl. Binong Utara no 13 Bandung', 'P', '08911002625', '1987-10-12', 'Karyawan (PT.CMP)', 'USG', 'Rawat Inap', 'ASKES', 'pemeriksaan anak ke-1', '2017-10-06 19:06:28'),
(446095, 'Widaningsih', 'Jl. Kiaracondong Barat no 6 Bandung', 'P', '0877616622', '1987-10-16', 'Karyawan (PT.Pindad)', 'USG', 'IGD', 'ASKES', 'pemeriksaan pertama', '2017-10-06 19:31:51'),
(446096, 'Elsawati', 'Jl. Jendral Gatot Subroto 12 Bandung', 'P', '08111723222', '1986-11-16', 'Keluarga (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'JAMKESMAS', 'pemeriksaan lanjutan', '2017-10-06 19:31:51'),
(446097, 'Rosalina', 'Jl. Gemuruh Utara Blok V no 19 Bandung', 'P', '098726262511', '1996-11-15', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'ASKES', 'Pemeriksaan pertama', '2017-10-06 19:31:51'),
(446098, 'Indri Meriyanti', 'Jl. Maleer selatan  no 14 Bandung', 'P', '08911221122', '1985-11-24', 'Keluarga (PT.Pindad)', 'USG', 'Rawat Jalan', 'ASKES', 'pemeriksaan anak pertama', '2017-10-06 19:31:51'),
(446099, 'Engkus Kuswara', 'Jl. Kiaracondong Gg.Melati no 5 Bandung', 'L', '08112200112', '1987-12-19', 'Karyawan (PT.CMP)', 'CT-SCAN', 'Rawat Inap', 'BPJS', 'pemeriksaan lanjut', '2017-10-06 19:31:51'),
(446100, 'Ade Wiyatno', 'Kiaracondong Gg Mekarwangi rt 003/01 Bandung', 'L', '0891311231', '1986-10-27', 'Karyawan (PT.Pindad)', 'RONGENT', 'Rawat Jalan', 'BPJS', 'pemeriksaan pertama', '2017-10-06 19:31:51'),
(446101, 'Pipit Wulandari', 'Jl. Margahayu Raya Barat no 17 Bandung', 'P', '0891162781', '1981-10-19', 'UMUM', 'CT-SCAN', 'Rawat Inap', 'UMUM', 'pemeriksaan lanjut', '2017-10-06 19:31:51'),
(446102, 'Ahmad Husein', 'Jl. Cihampelas VII Blok A-4 Bandung', 'L', '08917662525', '1981-11-17', 'Keluarga (PT.CMP)', 'THORAX', 'IGD', 'ASKES', 'perlu tindakan pemeriksaan ulang', '2017-10-06 19:31:51'),
(446103, 'Firman Hidayat', 'Jl. Margacinta Raya No 171 Bandung', 'L', '0881716111', '1967-07-16', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjut', '2017-10-06 19:31:51'),
(446104, 'Virniati', 'Jl. Teuku Umar Blok H no 18 Bandung', 'P', '0877100981', '1988-04-16', 'UMUM', 'USG', 'Rawat Jalan', 'UMUM', 'pemeriksaan anak ke-4', '2017-10-06 19:31:51'),
(446105, 'Rismayanti', 'Gg Mekarwangi 5 rt 001/01 Kiaracondong, Bandung', 'P', '089119365542', '1997-03-14', 'Anak (PT.CMP)', 'THORAX', 'Rawat Inap', 'BPJS', 'pemeriksaan lanjut', '2017-10-06 19:31:51'),
(446106, 'Asep Kurniawan', 'Jl. Pemerkaran 5 rt 003/02 Kiaracondong Bandung', 'L', '08112446578', '1981-04-18', 'UMUM', 'THORAX', 'Rawat Jalan', 'UMUM', 'pemeriksaan pertama', '2017-10-06 19:31:51'),
(446107, 'Andy Prasetyo', 'Jl. Gemuruh Utara no 13 Bandung', 'L', '08817262362', '1983-11-15', 'Anak (PT.CMP)', 'RONGENT', 'Rawat Inap', 'ASKES', 'perlu adanya pemeriksaan lanjut', '2017-10-06 19:31:51'),
(446108, 'Aldi Prabowo', 'Jl. Kiaracondong Selatan 6 Bandung', 'L', '08124461521', '1993-04-13', 'Karyawan (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'JAMKESMAS', 'pemeriksaan pertama', '2017-10-06 19:31:51'),
(446109, 'Dini Purwanti', 'Jl. Riung bandung 6 blok A no 14 Bandung', 'P', '0821166710', '1989-05-17', 'Keluarga (PT.CMP)', 'USG', 'Rawat Inap', 'BPJS', 'pemeriksaan anak ke-2', '2017-10-06 19:31:51'),
(446110, 'Eva Restanti', 'Jl. Cibaduyut Raya no 181 Bandung', 'P', '0821145161', '1993-08-19', 'Karyawan (PT.CMP)', 'RONGENT', 'Rawat Jalan', 'BPJS', 'pemeriksaan pertama', '2017-10-06 19:36:27'),
(446111, 'Deden Rahmad', 'Jl. Pemekaran Utara Blok U no 9 Bandung', 'L', '0988812721', '1991-09-12', 'Keluarga (PT.CMP)', 'THORAX', 'Rawat Inap', 'ASKES', 'pemeriksaan lanjut', '2017-10-06 19:36:27'),
(446112, 'Elsa Yulia', 'Jl. Cibereum Raya no 171 Bandung', 'P', '0821199018', '1987-08-19', 'Karyawan (PT.Pindad)', 'CT-SCAN', 'Rawat Jalan', 'BPJS', 'pemeriksaan pertama', '2017-10-06 19:39:54'),
(446113, 'Triana Faisal', 'Jl. Cibaduyut ni 181 Bandung', 'L', '098991991', '1993-10-11', 'UMUM', 'THORAX', 'Rawat Jalan', 'UMUM', 'pemeriksaan pertama', '2017-10-06 19:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(1) NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `grup` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1018 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `status`, `hak_akses`, `grup`, `alamat`, `no_telp`) VALUES
(3, 'dendi', 'dendi', 0, 'Front Office', '', 'jl.cihampelas no 316 Bandung', '081246489362'),
(6, 'umum', 'umum', 0, 'Departemen', 'Radiografer', 'Jl. cikutra no 327, Bandung', '085771277021'),
(1001, 'irsyad', 'irsyad', 0, 'Dokter', 'dr. Irsyad Muhammad, Sp.Rad', 'Jl. Dr. Setiabudi 46 ,SUkasari, Bandung', '081331980133'),
(1002, 'vaksi', 'vaksi', 0, 'Dokter', 'dr. Pranata Audy, Sp.Rad', 'Jl. Merkuri Utara XV No 11, Bandung', '085177190891'),
(1003, 'rafdi', 'rafdi', 0, 'Dokter', 'dr. Jaidi, Sp.Rad', 'Jl.Moh Toha No 306, Bandung', '087720019311'),
(1004, 'adit', 'adit', 0, 'Dokter', 'dr. Anugrah Pratama, dr.Sp.Rad', 'Jl. Suplir 2 No 8 Rancaekek Kencana', '085718901244'),
(1007, 'ipin', 'ipin', 0, 'Dokter', 'dr. Arifin Muhammad, Sp.Rad', 'Jl. Soekarno Hatta 58 Bandung', '087712273834'),
(1010, 'zeffry', 'zeffry', 0, 'Dokter', 'dr. Zeffry Irwanto, Sp.Rad', 'Jl. Pungkur 92 Bandung', '087726172782'),
(1017, 'admin', 'admin', 0, 'admin', 'admin', 'Jl. Raya Batujajar , cimerang no 8', '<br /><b>Notice</b>:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jenis_tindakan`
--
ALTER TABLE `jenis_tindakan`
  ADD PRIMARY KEY (`kode_tindakan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `petugas_radiografer`
--
ALTER TABLE `petugas_radiografer`
  ADD PRIMARY KEY (`nip_radiografer`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  ADD PRIMARY KEY (`no_rm`), ADD KEY `waktu` (`waktu`) COMMENT 'where waktu';

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_tindakan`
--
ALTER TABLE `jenis_tindakan`
  MODIFY `kode_tindakan` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_bayar` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pasien` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `petugas_radiografer`
--
ALTER TABLE `petugas_radiografer`
  MODIFY `nip_radiografer` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7121;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1015;
--
-- AUTO_INCREMENT for table `tbl_pasien`
--
ALTER TABLE `tbl_pasien`
  MODIFY `no_rm` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=446114;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1018;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
