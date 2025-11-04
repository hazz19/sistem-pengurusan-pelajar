-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2025 at 04:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-pelajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumatbpm`
--

CREATE TABLE `maklumatbpm` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumatbpm`
--

INSERT INTO `maklumatbpm` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MBPM008', 'asas', '071119040359', '2024-10-02', 'Malaysia', 'Johor', '2021', '1');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatbpp`
--

CREATE TABLE `maklumatbpp` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumatbpp`
--

INSERT INTO `maklumatbpp` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MBPP009', 'TEST', '123456789012', '2024-10-02', 'Malaysia', 'Pahang', '2021', '1');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatbpr`
--

CREATE TABLE `maklumatbpr` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumatbpr`
--

INSERT INTO `maklumatbpr` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MBPR008', 'TEST', '071119040359', '2024-10-02', 'Malaysia', 'Melaka', '2022', '2');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatctp`
--

CREATE TABLE `maklumatctp` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumatctp`
--

INSERT INTO `maklumatctp` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MCTP008', 'TEST', '123456789012', '2024-10-02', 'asa', 'Melaka', '2021', '2');

-- --------------------------------------------------------

--
-- Table structure for table `maklumathbp`
--

CREATE TABLE `maklumathbp` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumathbp`
--

INSERT INTO `maklumathbp` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MHBP008', 'TEST', '123456789012', '2024-10-02', 'Malaysia', 'Melaka', '2024', '3');

-- --------------------------------------------------------

--
-- Table structure for table `maklumathsk`
--

CREATE TABLE `maklumathsk` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumathsk`
--

INSERT INTO `maklumathsk` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MHSK008', 'asas', '123456789012', '2024-10-02', 'Malaysia', 'Pahang', '2021', '3');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatipd`
--

CREATE TABLE `maklumatipd` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maklumatipd`
--

INSERT INTO `maklumatipd` (`no_angka_giliran`, `nama`, `no_ic`, `tarikh_lahir`, `warganegara`, `negeri_kelahiran`, `batch`, `sem`) VALUES
('K381MKPD001', 'AHMAD FITRI BIN ASRAR', '071019010451', '2007-10-19', 'Malaysia', 'Johor', '2023', '3'),
('K381MKPD002', 'DANISH AMSYAR BIN YUSOF', '070426011465', '2007-04-26', 'Malaysia', 'Johor', '2023', '3'),
('K381MKPD003', 'DAYINI SAKINAH BINTI NOOR IRWANIZAM', '070618010600', '2007-06-18', 'Malaysia', 'Johor', '2023', '3'),
('K381MKPD004', 'FAZRY ARASH BIN AZLAN', '071006010751', '2007-10-06', 'Malaysia', 'Johor', '2023', '3'),
('K381MKPD005', 'IKHWAN IKLILUDDIN BIN MOHD ZUZAIDDIE', '071017110475', '2007-10-17', 'Malaysia', 'Terengganu', '2023', '3'),
('K381MKPD006', 'ILMI MUNIRAH BINTI ROSLI', '070718101438', '2007-07-18', 'Malaysia', 'Selangor', '2023', '3'),
('K381MKPD007', 'IRFAN ISKANDAR BIN MOHD AFFANDEY', '070324140311', '2007-03-24', 'Malaysia', 'Kuala Lumpur', '2023', '3'),
('K381MKPD008', 'MUHAMMAD HAZIM LAY BIN MOHAMMAD ARIF LAY', '071119040359', '2007-11-19', 'Malaysia', 'Melaka', '2023', '3'),
('K381MKPD009', 'MUHAMMAD IQBAL AQMAR BIN ZULKARNAIN', '070722110425', '2007-07-22', 'Malaysia', 'Terengganu', '2023', '3'),
('K381MKPD010', 'NUR ADRIANA BATRISYIA BINTI MOHD RADZI', '071113140674', '2007-11-13', 'Malaysia', 'Kuala Lumpur', '2023', '3'),
('K381MKPD011', 'NUR ATHIRAH QASHRINA BINTI MOHD SYAZLI', '070118100466', '2007-01-18', 'Malaysia', 'Selangor', '2023', '3'),
('K381MKPD012', 'NUR DANISHA AMIRAH BINTI FARID', '070516040104', '2007-05-16', 'Malaysia', 'Melaka', '2023', '3'),
('K381MKPD013', 'NUR MIRRAH BALQIS BINTI AZMAN', '070806100056', '2007-08-06', 'Malaysia', 'Selangor', '2023', '3'),
('K381MKPD014', 'NUR SYUHADA ARISSA BINTI MOHD HADZIR', '071114140262', '2007-11-14', 'Malaysia', 'Kuala Lumpur', '2023', '3'),
('K381MKPD015', 'NURSYAZWINA IZZATI BINTI NORHAMLY', '070206011754', '2007-02-06', 'Malaysia', 'Johor', '2023', '3'),
('K381MKPD016', 'NURUL NAQEEBAH BINTI AHMAD ZUBIR', '071015870016', '2007-10-15', 'Malaysia', '', '2023', '3'),
('K381MKPD017', 'NURZAFRY DANIEL BIN ZAIRIE ZULKARNAIN', '071104020195', '2007-11-10', 'Malaysia', 'Kedah', '2023', '3'),
('K381MKPD018', 'SITI FATIHAH BINTI MARZUKI', '070615040150', '2007-06-15', 'Malaysia', 'Melaka', '2023', '3'),
('K381MKPD019', 'UWAIS FITRISYA BINTI SAHRIZAN', '070818050068', '2007-08-18', 'Malaysia', 'Negeri Sembilan', '2023', '3'),
('K381MKPD020', 'WAN AMIIN SYAHMI BIN WAN AHMAD TAJUDDIN', '071114060545', '2007-11-14', 'Malaysia', 'Pahang', '2023', '3');

-- --------------------------------------------------------

--
-- Table structure for table `maklumatisk`
--

CREATE TABLE `maklumatisk` (
  `no_angka_giliran` varchar(11) NOT NULL,
  `nama` text NOT NULL,
  `no_ic` varchar(12) NOT NULL,
  `tarikh_lahir` date NOT NULL,
  `warganegara` text NOT NULL,
  `negeri_kelahiran` text NOT NULL,
  `batch` text NOT NULL,
  `sem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `level`) VALUES
('hazim@gmail.com', '1234', 'Admin'),
('pengguna@gmail.com', '1234', 'Pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumatbpm`
--
ALTER TABLE `maklumatbpm`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumatbpp`
--
ALTER TABLE `maklumatbpp`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumatbpr`
--
ALTER TABLE `maklumatbpr`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumatctp`
--
ALTER TABLE `maklumatctp`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumathbp`
--
ALTER TABLE `maklumathbp`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumathsk`
--
ALTER TABLE `maklumathsk`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumatipd`
--
ALTER TABLE `maklumatipd`
  ADD PRIMARY KEY (`no_angka_giliran`);

--
-- Indexes for table `maklumatisk`
--
ALTER TABLE `maklumatisk`
  ADD PRIMARY KEY (`no_angka_giliran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
