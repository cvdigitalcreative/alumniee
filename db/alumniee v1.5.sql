-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 03:57 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumniee`
--

-- --------------------------------------------------------

--
-- Table structure for table `broadcast_campaign`
--

CREATE TABLE `broadcast_campaign` (
  `bc_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `talent_id` int(11) NOT NULL,
  `matching_persentase` int(11) NOT NULL,
  `jadwal_wawancara` date DEFAULT NULL,
  `via_wawancara` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `broadcast_campaign`
--

INSERT INTO `broadcast_campaign` (`bc_id`, `campaign_id`, `talent_id`, `matching_persentase`, `jadwal_wawancara`, `via_wawancara`, `status`) VALUES
(11, 11, 1, 100, '0000-00-00', '', 3),
(17, 11, 2, 100, '2019-06-04', 'Online', 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `campaign_id` int(11) NOT NULL,
  `campaign_status` int(11) NOT NULL,
  `nama_pekerjaan` varchar(150) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `companyd` text,
  `roledc` text,
  `salary` varchar(50) DEFAULT NULL,
  `ipk` varchar(30) DEFAULT NULL,
  `jenis_pekerjaan` varchar(100) DEFAULT NULL,
  `lokasi` varchar(200) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `bahasa` varchar(100) DEFAULT NULL,
  `skillLanguage` varchar(100) DEFAULT NULL,
  `skillDatabase` varchar(100) DEFAULT NULL,
  `skillFramework` varchar(100) DEFAULT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`campaign_id`, `campaign_status`, `nama_pekerjaan`, `url`, `companyd`, `roledc`, `salary`, `ipk`, `jenis_pekerjaan`, `lokasi`, `jurusan`, `bahasa`, `skillLanguage`, `skillDatabase`, `skillFramework`, `company_id`) VALUES
(10, 0, 'sadasdada', 'www.sss', 'sada', 'ada', '4000000', '4', 'Hardware Engineer;', 'Palembang;Jakarta;', 'Sistem Komputer;', 'English;Indonesian;', 'C++;', 'Oracle;PostgreSQL;', 'Angular;Spring;', 1),
(11, 0, 'Puji', 'www.sss', 'sada', 'ada', '4000000', '4', 'Hardware Engineer;', 'Palembang;Jakarta;', 'Sistem Komputer;', 'English;Indonesian;', 'C++;', 'Oracle;PostgreSQL;', 'Angular;Spring;', 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nama_company` varchar(100) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `nama`, `nama_company`, `no_hp`, `email`, `password`, `tanggal`) VALUES
(1, 'Puji Company', 'Digital Creative', '2313131', 'admin@digitalcreative.web.id', '123456', '2019-06-12 13:22:18');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `question1` varchar(10) DEFAULT NULL,
  `question2` varchar(10) DEFAULT NULL,
  `question3` varchar(10) DEFAULT NULL,
  `question4` varchar(10) DEFAULT NULL,
  `question5` varchar(10) DEFAULT NULL,
  `jenis_pekerjaan` varchar(100) DEFAULT NULL,
  `salary` varchar(30) DEFAULT NULL,
  `universitas` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_lulus` varchar(100) DEFAULT NULL,
  `ipk` varchar(20) DEFAULT NULL,
  `lokasi` varchar(1000) DEFAULT NULL,
  `bahasa` varchar(50) DEFAULT NULL,
  `skillLanguage` varchar(100) DEFAULT NULL,
  `skillDatabase` varchar(100) DEFAULT NULL,
  `skillFramework` varchar(100) DEFAULT NULL,
  `nama_perusahaan` varchar(50) DEFAULT NULL,
  `pekerjaan_experience` varchar(50) DEFAULT NULL,
  `lamanya_berkerja` varchar(50) DEFAULT NULL,
  `talent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `question1`, `question2`, `question3`, `question4`, `question5`, `jenis_pekerjaan`, `salary`, `universitas`, `jurusan`, `tahun_lulus`, `ipk`, `lokasi`, `bahasa`, `skillLanguage`, `skillDatabase`, `skillFramework`, `nama_perusahaan`, `pekerjaan_experience`, `lamanya_berkerja`, `talent_id`) VALUES
(1, 'b', 'b', 'b', 'c', 'c', 'Hardware Engineer;IT Support;', '1000000', 'Sriwijaya', 'sistem komputer', '2010', '4', 'Palembang;Jakarta;', 'English;', 'C++;', 'Oracle;', 'Spring;', 'Digital Creative;', 'teknik informatika;', '2 tahun;', 1),
(2, 'a', 'c', 'c', 'b', 'c', 'Hardware Engineer;', '1000000', '', 'sistem komputer', '2010', '2', 'Semarang;Samarinda;', 'English;', 'PHP, HTML, CSS;', 'PostgreSQL;', 'Spring;', 'Puji;', 'sistem komputer;', '2 tahun;', 3),
(3, 'a', 'a', 'b', 'c', 'd', 'Hardware Engineer;', '1000000', '', 'sistem komputer', '2010', '3.5', 'Yogyakarta;Banjarmasin;', 'Indonesian;', 'Java;', 'MySQL;', 'CodeIgniter;React;', 'DC;', 'sistem komputer;', '2;', 2);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `pertanyaan` text,
  `jawaban` text,
  `talent_id` int(11) DEFAULT NULL,
  `campaign_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `pertanyaan`, `jawaban`, `talent_id`, `campaign_id`) VALUES
(2, 'Puji ya ya?', 'asdas', 1, 11),
(3, 'Nanannanananana', 'sadasd', 1, 11),
(4, 'bla bla bla bla', 'asdasd', 1, 11),
(5, 'Puji ya ya?', 'asdas', 1, 10),
(6, 'Nanannanananana', 'sadasd', 1, 10),
(7, 'bla bla bla bla', 'asdasd', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `talent`
--

CREATE TABLE `talent` (
  `talent_id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `talent`
--

INSERT INTO `talent` (`talent_id`, `nama`, `email`, `password`, `tanggal`) VALUES
(1, 'M.Puji Lesmana', 'muhammadpuji63@gmail.com', '123456', '2019-06-12 08:56:19'),
(2, 'Zikri', 'pujilesmana23@gmail.com', '123456', '2019-06-16 10:31:56'),
(3, 'Irfan', 'irfan@gmail.com', '123456', '2019-06-16 10:32:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `broadcast_campaign`
--
ALTER TABLE `broadcast_campaign`
  ADD PRIMARY KEY (`bc_id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`campaign_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`talent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `broadcast_campaign`
--
ALTER TABLE `broadcast_campaign`
  MODIFY `bc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `campaign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `talent`
--
ALTER TABLE `talent`
  MODIFY `talent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
