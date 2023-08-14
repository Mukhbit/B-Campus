-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 06:40 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE `data_diri` (
  `id` int(11) NOT NULL,
  `batch` varchar(128) NOT NULL,
  `tgl_mulai_belajar` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `agama` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL,
  `jenkel` varchar(128) NOT NULL,
  `alamat_ktp` text NOT NULL,
  `alamat_domisili` text NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `warna_kulit` varchar(128) NOT NULL,
  `bentuk_muka` varchar(128) NOT NULL,
  `jenis_rambut` varchar(128) NOT NULL,
  `warna_rambut` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id`, `batch`, `tgl_mulai_belajar`, `tempat_lahir`, `tgl_lahir`, `agama`, `status`, `jenkel`, `alamat_ktp`, `alamat_domisili`, `tinggi_badan`, `berat_badan`, `warna_kulit`, `bentuk_muka`, `jenis_rambut`, `warna_rambut`, `email_id`, `user_id`, `date_create`) VALUES
(1, '2', '2023', 'dad', '2023-05-24', 'islam', 'lajang', 'pria', 'fdsfdgffg', 'fsgfsggrgb bbgr', 123, 23, 'kuning', 'bulat', 'lurus', 'hitam', 'Sarah2023@gmail.com', 3, 1684912211),
(2, '1', '2023', 'add', '2014-01-01', 'islam', 'lajang', 'pria', 'dad fsdfdf grefv', 'kacjpi je iiha hjeh ouhdo', 176, 68, 'kuning', 'bulat', 'lurus', 'hitam', 'Sarah2023@gmail.com', 3, 1684912502),
(3, '1', '2023-05-14', 'rere', '2007-01-01', 'islam', 'lajang', 'pria', 'bfs ufoudsvhb snf', 'f sisbvs visvsksv dnsfk', 158, 45, 'kuning', 'bulat', 'lurus', 'hitam', 'Sarah2023@gmail.com', 3, 1684914279),
(4, 'tesasd', '2023-05-10', 'dfsf', '2023-05-23', 'islam', 'lajang', 'pria', 'dfsdfsfd', 'sfdsfdsf', 156, 34, 'kuning', 'bulat', 'lurus', 'hitam', 'dody2023@gmail.com', 4, 1685427754);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id` int(11) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `alamat_ibu` text NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir_ibu` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `alamat_ayah` text NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `tempat_lahir_ayah` varchar(128) NOT NULL,
  `tgl_lahir_ayah` varchar(128) NOT NULL,
  `nama_saudara1` varchar(128) NOT NULL,
  `pekerjaan_saudara1` varchar(128) NOT NULL,
  `tempat_lahir_saudara1` varchar(128) NOT NULL,
  `tgl_lahir_saudara1` varchar(128) NOT NULL,
  `nama_saudara2` varchar(128) NOT NULL,
  `pekerjaan_saudara2` varchar(128) NOT NULL,
  `tempat_lahir_saudara2` varchar(128) NOT NULL,
  `tgl_lahir_saudara2` varchar(128) NOT NULL,
  `nama_pasangan` varchar(128) NOT NULL,
  `tgl_lahir_pasangan` varchar(128) NOT NULL,
  `tempat_lahir_pasangan` varchar(128) NOT NULL,
  `alamat_pasangan` text NOT NULL,
  `pekerjaan_pasangan` varchar(128) NOT NULL,
  `nama_anak` varchar(128) NOT NULL,
  `tempat_lahir_anak` varchar(128) NOT NULL,
  `tgl_lahir_anak` varchar(128) NOT NULL,
  `no_tlp_anak` varchar(128) NOT NULL,
  `pekerjaan_anak` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`id`, `nama_ibu`, `alamat_ibu`, `pekerjaan_ibu`, `tempat_lahir`, `tgl_lahir_ibu`, `nama_ayah`, `alamat_ayah`, `pekerjaan_ayah`, `tempat_lahir_ayah`, `tgl_lahir_ayah`, `nama_saudara1`, `pekerjaan_saudara1`, `tempat_lahir_saudara1`, `tgl_lahir_saudara1`, `nama_saudara2`, `pekerjaan_saudara2`, `tempat_lahir_saudara2`, `tgl_lahir_saudara2`, `nama_pasangan`, `tgl_lahir_pasangan`, `tempat_lahir_pasangan`, `alamat_pasangan`, `pekerjaan_pasangan`, `nama_anak`, `tempat_lahir_anak`, `tgl_lahir_anak`, `no_tlp_anak`, `pekerjaan_anak`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'dffs', 'sdfdfdsf', 'fdsfdsf', 'dfdsfs', '2023-05-02', 'dsfdsf', 'dsfdsfds', 'dfds', 'dsfdsf', '2023-05-16', 'sfsdfd', 'sdfdsf', 'dsfdsf', '2023-05-02', 'sfdsf', 'dsfdsf', 'fdsfd', '2023-05-11', 'fsdfdfs', '2023-05-02', 'dsfdsf', 'sfdsfs', 'dsfdsf', 'sfdsf', 'sfdsf', '2023-05-15', 'fssdfdsf', 'sfdsf', 'Sarah2023@gmail.com', 3, 1684986459);

-- --------------------------------------------------------

--
-- Table structure for table `histori_program`
--

CREATE TABLE `histori_program` (
  `id` int(11) NOT NULL,
  `program` varchar(256) NOT NULL,
  `sub_program` varchar(256) NOT NULL,
  `batch` varchar(256) NOT NULL,
  `periode_program` varchar(255) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `histori_program`
--

INSERT INTO `histori_program` (`id`, `program`, `sub_program`, `batch`, `periode_program`, `tanggal`, `status`) VALUES
(2, 'Basic Avsec', 'Initial', 'Batch 1', '', 1684729468, 2),
(4, 'Basic Cargo', 'Initial', 'Batch 1', '', 1684731620, 1),
(6, 'Awareness', 'Recurrent', 'Batch 2', '25 Mei S/D 25 Juni', 1685346930, 1),
(7, 'Dangerous Goods', 'Initial', '3', '25 Juni S/D 25 Juli', 1686021810, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenjang_pendidikan`
--

CREATE TABLE `jenjang_pendidikan` (
  `id` int(11) NOT NULL,
  `nama_sd` varchar(256) NOT NULL,
  `alamat_sd` text NOT NULL,
  `tahun_lulus_sd` varchar(128) NOT NULL,
  `kepsek_sd` varchar(128) NOT NULL,
  `nama_smp` varchar(256) NOT NULL,
  `alamat_smp` text NOT NULL,
  `tahun_lulus_smp` varchar(128) NOT NULL,
  `kepsek_smp` varchar(128) NOT NULL,
  `nama_sma` varchar(256) NOT NULL,
  `alamat_sma` text NOT NULL,
  `tahun_lulus_sma` varchar(128) NOT NULL,
  `kepsek_sma` varchar(128) NOT NULL,
  `nama_univ` varchar(256) NOT NULL,
  `alamat_univ` text NOT NULL,
  `tahun_lulus_univ` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `nama_rektor` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenjang_pendidikan`
--

INSERT INTO `jenjang_pendidikan` (`id`, `nama_sd`, `alamat_sd`, `tahun_lulus_sd`, `kepsek_sd`, `nama_smp`, `alamat_smp`, `tahun_lulus_smp`, `kepsek_smp`, `nama_sma`, `alamat_sma`, `tahun_lulus_sma`, `kepsek_sma`, `nama_univ`, `alamat_univ`, `tahun_lulus_univ`, `jurusan`, `nama_rektor`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'dsadas', 'dasdsa', 'dsadsa', 'sadsad', 'dsadsa', 'sdsad', 'dsadsa', 'dsadasd', 'dsadad', 'sdads', 'dwsd', 'dsda', 'qdd', 'qwddsd', 'assa', 'dqdasd', 'dd', 'Sarah2023@gmail.com', 3, 1684992457);

-- --------------------------------------------------------

--
-- Table structure for table `pengalaman_kerja`
--

CREATE TABLE `pengalaman_kerja` (
  `id` int(11) NOT NULL,
  `nama_perusahaan` varchar(256) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `periode_kerja` varchar(128) NOT NULL,
  `nama_organisasi` varchar(256) NOT NULL,
  `jabatan_organisasi` varchar(256) NOT NULL,
  `periode` varchar(256) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengalaman_kerja`
--

INSERT INTO `pengalaman_kerja` (`id`, `nama_perusahaan`, `alamat_perusahaan`, `jabatan`, `periode_kerja`, `nama_organisasi`, `jabatan_organisasi`, `periode`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'sdsad', 'sdadsdsad', 'sdasdsd', 'fsfsffds', 'fdssfd', 'dfsdfs', 'dfsdf', 'Sarah2023@gmail.com', 3, 1684998863),
(2, 'fdsfdsqfdsd', 'fdfd', 'fdfsfsd', 'dfsdd', 'fdsfs', 'fdfs', 'fdfsdf', 'Sarah2023@gmail.com', 3, 1684998899);

-- --------------------------------------------------------

--
-- Table structure for table `program_pelatihan`
--

CREATE TABLE `program_pelatihan` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `status_program` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_pelatihan`
--

INSERT INTO `program_pelatihan` (`id`, `nama_program`, `status_program`) VALUES
(1, 'Basic Avsec', '1'),
(2, 'Junior Avsec', '1'),
(3, 'Senior Avsec', '1'),
(4, 'Dangerous Goods', '1'),
(5, 'Basic Cargo', '1'),
(6, 'Awareness', '1'),
(7, 'Training of Trainer', '1'),
(8, 'Inspektor Keamanan Penerbangan', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikate`
--

CREATE TABLE `sertifikate` (
  `id` int(11) NOT NULL,
  `no_regis` varchar(100) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `alamat` text NOT NULL,
  `pelatihan` varchar(255) NOT NULL,
  `email` varchar(125) NOT NULL,
  `image` varchar(128) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sertifikate`
--

INSERT INTO `sertifikate` (`id`, `no_regis`, `nama`, `alamat`, `pelatihan`, `email`, `image`, `batch_id`, `status`, `date_create`) VALUES
(1, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'BASIC AVSEC', 'Test2023@gmail.com', 'default.png', 4, 1, 1684209124),
(2, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'PILOT', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1682662414),
(74, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', '', 2, 1, 1684918679),
(75, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1684986482),
(76, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1684986657),
(77, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1684986662),
(78, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1684987171),
(79, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1684987176),
(80, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'login_bc.png', 2, 1, 1684987567),
(81, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'login_bc.png', 2, 1, 1684987570),
(82, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'bc_eksport.png', 2, 1, 1684987752),
(83, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'bc_eksport.png', 2, 1, 1684987753),
(84, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'screen_bdl.jpg', 2, 1, 1684997959),
(85, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1685068257),
(86, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1685070602),
(87, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1685070642),
(88, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1685072120),
(89, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', 'Basic Avsec', 'Sarah2023@gmail.com', 'default.png', 2, 1, 1685072195),
(90, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348089),
(91, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348339),
(92, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348349),
(93, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348488),
(94, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348517),
(95, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348617),
(96, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348636),
(97, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'default.png', 2, 1, 1685348800),
(98, '001/BAT/REG/V/2023', 'Test Register', 'Jl. Test Dulu', 'Basic Avsec', 'Test2023@gmail.com', 'bia.png', 2, 1, 1685349054),
(99, '003/BAT/REG/V/2023', 'Dody Cahyadi', 'Jl. Adress ada ajah no. 16 jaksel Indonesia', 'Awareness', 'dody2023@gmail.com', 'approved_PNG54.png', 6, 1, 1685437534);

-- --------------------------------------------------------

--
-- Table structure for table `sub_program_pelatihan`
--

CREATE TABLE `sub_program_pelatihan` (
  `id` int(11) NOT NULL,
  `nama_sub_program` varchar(255) NOT NULL,
  `status_program` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_program_pelatihan`
--

INSERT INTO `sub_program_pelatihan` (`id`, `nama_sub_program`, `status_program`) VALUES
(1, 'Initial', '1'),
(2, 'Recurrent', '1'),
(3, 'Duty Security Awareness', '1'),
(4, 'Dangerous Goods', '1'),
(5, 'Human Factor', '1'),
(6, 'Safety Management System', '1'),
(7, 'Ramp Safety', '1');

-- --------------------------------------------------------

--
-- Table structure for table `survei`
--

CREATE TABLE `survei` (
  `id` int(11) NOT NULL,
  `pertanyaan1` text NOT NULL,
  `pertanyaan2` text NOT NULL,
  `pertanyaan3` text NOT NULL,
  `pertanyaan4` text NOT NULL,
  `pertanyaan5` text NOT NULL,
  `pertanyaan6` text NOT NULL,
  `pertanyaan7` text NOT NULL,
  `pertanyaan8` text NOT NULL,
  `pertanyaan9` text NOT NULL,
  `pertanyaan10` text NOT NULL,
  `link_fb` varchar(256) NOT NULL,
  `link_insta` varchar(256) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survei`
--

INSERT INTO `survei` (`id`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `pertanyaan6`, `pertanyaan7`, `pertanyaan8`, `pertanyaan9`, `pertanyaan10`, `link_fb`, `link_insta`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'dasd', 'dsfdsf', 'cdsfds', 'qfdsfs', 'fdsfsf', 'fdfs', 'fsfds', 'fdsf', 'fdsfs', 'ddfs', 'fdsf', 'dfds', 'Sarah2023@gmail.com', 3, 1685009489);

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_id`, `created`) VALUES
(1, '44bf5aad3860818ac007f01df8995b', 3, '2023-05-16'),
(2, '3ac6634ecc1d87fdbd41656bcf8e35', 3, '2023-05-16'),
(3, '7274cda8a051cc28c94b07ffc526e0', 6, '2023-05-16'),
(4, 'abfaeab4a0b5c74917459607345057', 3, '2023-05-19'),
(5, '87f9cdc9285bb2f88a7333a8f4f2e4', 5, '2023-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `upload_nilai`
--

CREATE TABLE `upload_nilai` (
  `id` int(11) NOT NULL,
  `materi_satu` varchar(255) NOT NULL,
  `materi_dua` varchar(255) NOT NULL,
  `materi_tiga` varchar(255) NOT NULL,
  `materi_empat` varchar(255) NOT NULL,
  `jam_ajar_satu` varchar(25) NOT NULL,
  `jam_ajar_dua` varchar(25) NOT NULL,
  `jam_ajar_tiga` varchar(25) NOT NULL,
  `jam_ajar_empat` varchar(25) NOT NULL,
  `nilai_teori` varchar(12) NOT NULL,
  `nilai_praktek` varchar(12) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upload_nilai`
--

INSERT INTO `upload_nilai` (`id`, `materi_satu`, `materi_dua`, `materi_tiga`, `materi_empat`, `jam_ajar_satu`, `jam_ajar_dua`, `jam_ajar_tiga`, `jam_ajar_empat`, `nilai_teori`, `nilai_praktek`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'sddfdfre', 'dcvxdrw', 'vfvszczsa', 'csfdsfdsg25', '12', '23', '12', '25', '87', '89', 'dody2023@gmail.com', 99, 1685952520);

-- --------------------------------------------------------

--
-- Table structure for table `urgent_call`
--

CREATE TABLE `urgent_call` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(128) NOT NULL,
  `hubungan` varchar(128) NOT NULL,
  `email_id` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urgent_call`
--

INSERT INTO `urgent_call` (`id`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `hubungan`, `email_id`, `user_id`, `date_create`) VALUES
(1, 'fsfds', 'fsdfdsf', '2023-05-09', 'fdfdsfds', 'fdsfdsf', 'dsfds', 'Sarah2023@gmail.com', 3, 1684999589);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `no_bat` int(11) NOT NULL,
  `no_registrasi` varchar(100) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `nama_org` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `foto_ktp` varchar(256) NOT NULL,
  `foto_ijasah` varchar(256) NOT NULL,
  `foto_skck` varchar(256) NOT NULL,
  `surat_dokter` varchar(256) NOT NULL,
  `surat_lisensi` varchar(256) NOT NULL,
  `sertifikate` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `no_bat`, `no_registrasi`, `nama`, `email`, `image`, `password`, `no_hp`, `nik`, `alamat`, `golongan`, `nama_org`, `role_id`, `is_active`, `date_created`, `foto_ktp`, `foto_ijasah`, `foto_skck`, `surat_dokter`, `surat_lisensi`, `sertifikate`) VALUES
(1, 0, '', 'Mukhbit Abdul Hakim', 'Mukhbit97@gmail.com', 'daging-sapi.jpg', '$2y$10$pP17Y9b03x4FILXiLO.HM.9ryrI4TpC06Ak95FS96XT67tvo63fsG', '085717210630', '3254679805060009', 'Jl. Gelatik 2 No. 71 Kel. Depok jaya Kec. Pancoran Mas Kota Depok', '1', '', 1, 1, 1682571290, 'LOGO_BDT_8x3cm.jpg', 'slip jagi.jpg', 'hasil_cek.png', 'void.jpg', 'daging-sapi.jpg', 'WhatsApp_Image_2023-05-03_at_17_30_16.jpg'),
(3, 2, '002/BAT/REG/V/2023', 'Sarah Sehan', 'Sarah2023@gmail.com', 'default1.png', '$2y$10$OXIqk.HPZujHt7rZsN8HpO4h/K5sFpJLBOEVzekmMWob5puRkq8DG', '085779811211', '3245678902030009', 'Jl. Kecubung 2 No. 81 Kel. Sawangan Kec. Hegarsari Kota Bekasi', '2', 'PT. Fornax Sejahtera Abadi', 2, 1, 1682662414, 'flow2.jpg', 'slip jagi.jpg', 'f9b35167-f295-476e-a0dd-97f491815207.jpg', 'void.jpg', 'error.jpg', 'daging-sapi.jpg'),
(4, 3, '003/BAT/REG/V/2023', 'Dody Cahyadi', 'dody2023@gmail.com', 'daging-sapi2.jpg', '$2y$10$DM4OJfzwitNASfKFMoy2jOmDXitzscQw66nMpxz2hpjPVK1QrlPRi', '085779811211', '3276894501020008', 'Jl. Adress ada ajah no. 16 jaksel Indonesia', '2', 'CV. BAT Indonesia', 2, 1, 1682677043, 'aan.jpeg', 'ttd_arfan.jpeg', 'ttd_bharata.jpeg', 'ttd_diaz.jpeg', 'ttd_huda.jpeg', 'ttd_fajar.jpeg'),
(5, 0, '', 'Admin BeCampus', 'Admin2023@gmail.com', 'default.png', '$2y$10$JdObMaPjzsl2TUnm5fTnQevyIBIv7ZyFSMWXUBDUOv3pcwZQpHhG2', '0000000000', '00000000000', 'Bandes Group', '2', 'PT. Bangun Desa Teknologi', 4, 1, 1683952744, '', '', '', '', '', ''),
(6, 1, '001/BAT/REG/V/2023', 'Test Register', 'Test2023@gmail.com', 'bia.png', '$2y$10$8jXoBN5xA4nC/0br3EJ.b.91SHBPwnoAlNNHE4U8UK8EilK9QeGEu', '085735690203', '324509871234', 'Jl. Test Dulu', '1', '', 2, 1, 1684209124, 'LOGO_BDT_8x3cm.jpg', 'IT CENTER.png', 'hasil_cek.png', 'freight-17666_960_720.jpg', 'WhatsApp_Image_2023-05-03_at_17_30_16.jpg', 'aan.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(6, 1, 3),
(7, 4, 2),
(10, 1, 12),
(11, 4, 12),
(12, 6, 2),
(13, 6, 3),
(16, 8, 2),
(17, 2, 13),
(18, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(12, 'Evaluation');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(4, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profil', 'user/edit', 'fas ra-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-cog', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 3, 'Role', 'menu/role', 'fas fa-fw fa-user-tie', 1),
(10, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(11, 2, 'Sertifikate', 'user/sertifikate', 'fas fa-fw fa-certificate', 1),
(12, 12, 'Daftar Siswa', 'evaluation', 'fas fa-fw fa-user-graduate', 1),
(13, 12, 'Program Pelatihan', 'evaluation/program', 'fas fa-fw fa-chalkboard-teacher', 1),
(14, 3, 'Add Staff', 'menu/addstaff', 'fas fa-fw fa-user-shield', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histori_program`
--
ALTER TABLE `histori_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_pelatihan`
--
ALTER TABLE `program_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sertifikate`
--
ALTER TABLE `sertifikate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_program_pelatihan`
--
ALTER TABLE `sub_program_pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `survei`
--
ALTER TABLE `survei`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_nilai`
--
ALTER TABLE `upload_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urgent_call`
--
ALTER TABLE `urgent_call`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `histori_program`
--
ALTER TABLE `histori_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenjang_pendidikan`
--
ALTER TABLE `jenjang_pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengalaman_kerja`
--
ALTER TABLE `pengalaman_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_pelatihan`
--
ALTER TABLE `program_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sertifikate`
--
ALTER TABLE `sertifikate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sub_program_pelatihan`
--
ALTER TABLE `sub_program_pelatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `survei`
--
ALTER TABLE `survei`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `upload_nilai`
--
ALTER TABLE `upload_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `urgent_call`
--
ALTER TABLE `urgent_call`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
