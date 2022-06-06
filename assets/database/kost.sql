-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:44 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku-tamu`
--

CREATE TABLE `buku-tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `penilaian` varchar(128) NOT NULL,
  `komentar` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_kost`
--

CREATE TABLE `data_kost` (
  `id` int(11) NOT NULL,
  `lokasi` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `subalamat` text NOT NULL,
  `harga` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kost`
--

INSERT INTO `data_kost` (`id`, `lokasi`, `alamat`, `subalamat`, `harga`, `image`) VALUES
(1, 'Jakarta Barat', 'Blanca Kost Bandengan Selatan', 'jl.Bandengan Selatan No.90 Jakarta-Barat', 'Rp. 1.800.000', 'jakbar1.jpg'),
(2, 'Jakarta Barat', 'Kost Excexutive Tanjung Duren Selatan', 'Gang Delima 1 NO.21 Tanjung Duren Barat-Gerogol', 'Rp. 1.800.000', 'jakbar2.jpg'),
(3, 'Jakarta Barat', 'Patra Tomang Residence', 'Jl, Patra Tomang I No.15, Rt6/2 Duri Kepa', 'Rp. 2.200.000', 'jakbar3.jpg'),
(4, 'Jakarta Barat', 'JJ Kost', 'Tanjung Duren Selatan Jl. Delima Raya No.3', 'Rp. 2.100.000', 'jakbar4.jpg'),
(5, 'Jakarta Barat', 'Patra Tomang Residence', 'Jl, Patra Tomang I No.15, Rt6/2 Duri Kepa', 'Rp. 2.200.000', 'jakbar5.jpg'),
(6, 'Jakarta Barat', 'The Grand Place Residence', 'jl, Tomang Asli No.35 Kel.Jati Pulo Kec-Palmerah', 'Rp. 2.000.000', 'jakbar6.jpg'),
(7, 'Jakarta Barat', 'Salak Residence', 'jl, Salak Barat 8 No.21 Tanjung Duren, Jakarta Barat', 'Rp. 1.300.000', 'jakbar7.jpg'),
(8, 'Jakarta Timur', 'Kost Exclusive Central Jakarta Timur', 'jl. Kemuning Raya No.1 Rt12/02 Kelurahan Utan Bambu', 'Rp. 1.500.000', 'jaktim1.jpg'),
(9, 'Jakarta Timur', 'Kost Putri Berlian House', 'jl. Berlian No.23 Rt009/011 Kel. Bidara Cina', 'Rp. 2.000.000', 'jaktim2.jpg'),
(10, 'Jakarta Timur', 'KOST29 KLENNDER', 'Jl. Pahlawan Revolusi KP Kapuk II Jakarta Timur', 'Rp.1.000.000', 'jaktim3.jpg'),
(11, 'Jakarta Timur', 'Sewa Kamar Kost Karyawan dan Kaeryawati', 'Cipinang Muara', 'Rp.950.000', 'jaktim4.jpg'),
(12, 'Jakarta Timur', 'Rumah Kost Nyaman dalam klaster', 'jl. Raya Bekasi Timur no.222 D belakang mini market', 'Rp.1.200.000', 'jaktim5.jpg'),
(13, 'Jakarta Timur', 'kost eksklusif dan strategis', 'jl duren 2 no.9 rt03/09 kec-utan kayu Jakarta Utara', 'Rp.2.000.000', 'jaktim6.jpg'),
(14, 'Jakarta timur', 'Ayub15', 'jl.Ayub no.15 Otista,Bidaracina, Jakarta Timur', 'Rp.1.650.000', 'jaktim7.jpg'),
(15, 'Jakarta Selatan', 'Kost Eksklusif Lapangan Ros Tebet', 'Jl. Lapangan Ros 3 no.34 Bukit Duri, tebet Jakart-Selatan', 'Rp.1.300.000', 'jaksel1.jpg'),
(16, 'Jakarta Selatan', 'Casa Permata hijau-Deluxe Room', 'jl. Biduri No.39 Permata Hijau, kel-Grogol Uatara', 'Rp.7.000.000', 'jaksel2.jpg'),
(17, 'Jakarta Selatan', 'kost Campur lengkap furniture', 'jl. Agung raya I-39D lenteng agung jakarta selatan', 'Rp.1.600.000', 'jaksel3.jpg'),
(18, 'Jakarta Selatan', 'DD Kos TB Simatupang Belakang gedung antam', 'TB Simatupang Belakang gedung antam', 'Rp.2.000.000', 'jaksel4.jpg'),
(19, 'Jakarta Selatan', 'Sewa Kost Murah', 'jl.Mampang Prapatan I, Gg. Haji Marzuki', 'Rp.850.000', 'jaksel5.jpg'),
(20, 'Jakarta Selatan', 'Kost Wanita sekitar Setia Budi, Sudirman', 'jl.Slak Kel-guntur kec-Setia Budi jakarta-Selatan', 'Rp.1.400.000', 'jaksel6.jpg'),
(21, 'Jakarta Selatan', 'KOST JAKARTA SELATAN SENOPATI TENDEAN SCBD', 'JL. Pecandran bawah no.11a Kebayoran baru Jaksel', 'Rp.1.000.000', 'jaksel7.jpg'),
(22, 'Jakarta Utara', 'Kost Prtia Murah', 'Jl. Papanggo 3B Rt12/005 no.7 jakarta utara', 'Rp.700.000', 'jakut1.jpg'),
(23, 'Jakarta Utara', 'Kost Sunter Karyawan Fasilitas Lengkap', 'Sunter Paradise tahap II Sunter Paradise 13', 'Rp.1.400.000', 'jakut2.jpg'),
(24, 'Jakarta Utara', 'Kost baru Kelapa Gading', 'jl.Gading Elok Timur III, Kelapa Gading Jakarta Utara', 'Rp.2.100.000', 'jakut3.jpg'),
(25, 'Jakarta Utara', 'Kost Kelapa Gading - Kost Pria/Wanita', 'jl. Raya Kelapa Cengkir, Kelapa-Gading', 'Rp.1.800.000', 'jakut4.jpg'),
(26, 'Jakarta Utara', 'Kost Angke Indah', 'jl. Muara Angke, Komplek Bermis Blok D no.1', 'Rp.1.100.000', 'jakut5.jpg'),
(27, 'Jakarta Utara', 'WTC Kost', 'Jl. Budi Mulya Dalam (Samping pom bensin ampera)', 'Rp.850.000', 'jakut6.jpg'),
(28, 'Jakarta Utara', 'Oemah Kost Kelapa Gading', 'jl. Kelapa Hibrida V', 'Rp.1.600.000', 'jakut7.jpg'),
(29, 'Jakarta Pusat', 'Kos Salemba-Kramat-Cikini', 'jl. Kramat sawah IX, no.11 rt09/07', 'Rp.1.000.000', 'jakpus1.jpg'),
(30, 'Jakarta Pusat', 'Kost Kemayoran', 'jl.Kepu dalam 1 no.243 Jakarta-Pusat', 'Rp.800.000', 'jakpus2.jpg'),
(31, 'Jakarta Pusat', 'kosan Ihsan-Wisma Naelah', 'jl. Kebon Kacang III No..80i, Kebon-Kacang Jakarta-Pusat', 'Rp.1.400.000', 'jakpus3.jpg'),
(32, 'Jakarta Pusat', 'Kost Putri tanah abang', 'jl. Petojo Sabangan 3 No.31', 'Rp.1.200.000', 'jakpus4.jpg'),
(33, 'Jakarta Pusat', 'kost Pria Salemba paseban', 'jl. Salemba tengah 3 gang 6 Jakarta Pusat', 'Rp.1.750.000', 'jakpus5.jpg'),
(34, 'Jakarta Pusat', 'Kost Nyonya Besar', 'jl. H Awaludin 1 no.9, Kebon melati, tanah abang', 'Rp.2.000.000', 'jakpus6.jpg'),
(35, 'Jakarta Pusat', 'Kost Kartini VI', 'jl. Kartini 6 No.5 Jakarta-Pusat', 'Rp.2.250.000', 'jakpus7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `nama`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'Arip', 'Arip Budiman', 'arip24.ab@gmail.com', 'pro1654371014.jpg', '$2y$10$c/pyC74uk.fEQVW6GdDUv.D/7/JApbFNwuN4z7bjPho4Thi5ZKIm6', 1, 1, 1654249536),
(2, 'malla', 'Dwimalla', 'malla123@gmail.com', 'default.jpg', '$2y$10$BOPcGicacypVK5yYjfLm3OUMAeIqAygPulLD2kPvdZOYk/40DGcN6', 2, 1, 1654256583),
(3, 'bizar', 'Abizar', 'Abizar123@gmail.com', 'default.jpg', '$2y$10$Az81r4zOTaSWl2aZT3Ugfe8f0tbnljh2NqFO3OhUbXdJi2LqugkzO', 2, 0, 1654273575);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku-tamu`
--
ALTER TABLE `buku-tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kost`
--
ALTER TABLE `data_kost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku-tamu`
--
ALTER TABLE `buku-tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_kost`
--
ALTER TABLE `data_kost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
