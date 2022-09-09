-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2022 at 08:39 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `write` varchar(255) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `id_user`, `title`, `write`, `description`, `created_at`, `updated_at`) VALUES
(1, 11, 'Bunga Mawar', 'lola reghita', 'Mawar[1] atau ros[2] (Rosa) adalah tumbuhan perdu, pohonnya berduri, bunganya berbau wangi dan berwarna indah, terdiri atas daun bunga yang bersusun;[2] meliputi ratusan jenis, tumbuh tegak atau memanjat, batangnya berduri, bunganya beraneka warna, seperti merah, putih, merah jambu, merah tua, dan berbau harum.[1] Mawar liar terdiri dari 100 spesies lebih, kebanyakan tumbuh di belahan bumi utara yang berudara sejuk. Spesies mawar umumnya merupakan tanaman semak yang berduri atau tanaman memanjat yang tingginya bisa mencapai 2 sampai 5 meter. Walaupun jarang ditemui, tinggi tanaman mawar yang merambat di tanaman lain bisa mencapai 20 meter.', '2022-08-30 07:32:49', '2022-08-30 07:32:49'),
(2, 12, 'Bunga Tulip', 'lolaaa', 'Tulip merupakan nama genus untuk 100 spesies tumbuhan berbunga yang termasuk ke dalam keluarga Liliaceae. Tulip berasal dari Asia Tengah, tumbuh liar di kawasan pegunungan Pamir dan pegunungan Hindu Kush dan stepa di Kazakhstan. Negeri Belanda terkenal sebagai negeri bunga tulip', '2022-08-30 07:36:04', '2022-08-30 07:46:24'),
(3, 11, 'Edelweiss jawa', 'lola reghita', 'Anaphalis javanica, yang dikenal secara populer sebagai Edelweiss jawa (Javanese edelweiss) atau Bunga Senduro, adalah tumbuhan endemik zona alpina/montana di berbagai pegunungan tinggi Nusantara.[1] Tumbuhan ini dapat mencapai ketinggian 8 meter dan dapat memiliki batang sebesar kaki manusia walaupun umumnya tidak melebihi 1 meter. Tumbuhan ini sekarang dikategorikan sebagai langka.\r\n\r\nbiasanya edelweiss berkembangbiak dengan cara generatif karena Serbuk-serbuk bunga generatif Edelweiss memiliki massa yang ringan, sehingga mudah terbawa oleh angin. Saat serbuk-serbuk menemukan tempat yang cocok untuk tumbuh, maka Edelweiss akan dapat tumbuh dengan baik', '2022-08-30 07:43:52', '2022-08-30 07:43:52'),
(4, 12, 'bunga kembang sepatu', 'lolaaa', 'Bunga jenis ini terdiri dari 5 helai daun kelopak, yang dilindungi oleh kelopak tambahan (epicalyx), sehingga terlihat seperti dua lapis kelopak bunga. Mahkota bunga terdiri dari 5 lembar atau lebih jika merupakan hibrida. Tangkai putik berbentuk silinder panjang dikelilingi tangkai sari berbentuk oval yang bertaburan serbuk sari. Biji terdapat di dalam buah berbentuk kapsul berbilik lima.', '2022-08-30 07:45:46', '2022-08-30 07:45:46');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `isi` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `isi`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'req bunga edelwis dong', 'anggun', '2022-08-30 07:33:44', '2022-08-30 07:33:44'),
(2, 'no comen', 'anggun', '2022-08-30 07:44:25', '2022-08-30 07:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `nama`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'lolareghita', 'lolareghita@gmail.com', 'lola reghita', '$2y$10$IUR0PsoE1rqAriMIOitCcuVTabNpq7bb5713gprVwhb1Fa.PYRB.a', NULL, '2022-08-30 06:47:49', '2022-08-30 06:47:49'),
(12, 'lolaaa', 'lolaaa@gmail.com', 'lola', '$2y$10$kxHBdlTCFxLsteM96PMEmObffWyAfUVeDJGcYN5.j6mupj44ucXmK', NULL, '2022-08-30 07:34:44', '2022-08-30 07:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `no_handphone` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `id_user`, `no_handphone`, `created_at`, `updated_at`) VALUES
(6, 8, '081290034449', '2021-12-11 22:09:30', '2021-12-11 22:09:30'),
(8, 10, '081290034449', '2022-01-09 09:57:22', '2022-01-09 09:57:22'),
(9, 11, '08127007735', '2022-08-30 06:47:49', '2022-08-30 06:47:49'),
(10, 12, '081290034449', '2022-08-30 07:34:44', '2022-08-30 07:34:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
