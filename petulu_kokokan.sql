-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:18 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petulu_kokokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_burung_id` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama`, `jenis_burung_id`, `deskripsi`, `image`, `date_created`) VALUES
(24, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0007.JPG', '2020-10-30 13:18:50'),
(25, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0017.JPG', '2020-10-30 13:19:06'),
(26, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0197.JPG', '2020-10-30 13:23:24'),
(27, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0199.JPG', '2020-10-30 13:23:43'),
(28, 'Bangau-Bangau', '2', '<p>Tubuh sedikit lebih kecil dibanding kokokan, jambul dan punggungnya ada warna kuning</p>', '_MG_0014.JPG', '2020-10-30 13:26:50'),
(29, 'Bangau-Bangau', '2', '<p>Tubuh sedikit lebih kecil dibanding kokokan, jambul dan punggungnya ada warna kuning</p>', '_MG_0024.JPG', '2020-10-30 13:27:06'),
(30, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0038.JPG', '2020-10-30 13:27:38'),
(31, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0045.JPG', '2020-10-30 13:29:04'),
(32, 'Bangau-Bangau', '2', '<p>Tubuh sedikit lebih kecil dibanding kokokan, jambul dan punggungnya ada warna kuning</p>', '_MG_0055.JPG', '2020-10-30 13:29:29'),
(33, 'Bangau-Bangau', '2', '<p>Tubuh sedikit lebih kecil dibanding kokokan, jambul dan punggungnya ada warna kuning</p>', '_MG_0056.JPG', '2020-10-30 13:29:42'),
(34, 'Bangau-Bangau', '2', '<p>Tubuh sedikit lebih kecil dibanding kokokan, jambul dan punggungnya ada warna kuning</p>', '_MG_9864.JPG', '2020-10-30 13:29:54'),
(35, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0207.JPG', '2020-10-30 13:30:14'),
(36, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0241.JPG', '2020-10-30 13:30:27'),
(37, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0257.JPG', '2020-10-30 13:30:43'),
(38, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0046.JPG', '2020-10-30 13:31:07'),
(39, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_0077.JPG', '2020-10-30 13:31:35'),
(40, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_9880.JPG', '2020-11-08 15:01:58'),
(41, 'Kokokan', '1', '<p>Leher panjang, tubuh agak besar dan berwarna putih mulus tidak ada warna lain</p>', '_MG_9996.JPG', '2020-11-08 15:02:08'),
(42, 'Blekok', '3', '<p>Tubuh kecil mirip seperti ayam kampung betina, punggung berwarna hitam</p>', '_MG_0258.JPG', '2020-11-08 15:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_desa`
--

CREATE TABLE `galeri_desa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_galeri_desa_id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date_created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri_desa`
--

INSERT INTO `galeri_desa` (`id`, `nama`, `jenis_galeri_desa_id`, `deskripsi`, `image`, `date_created`) VALUES
(15, 'Bali Creative Warung', 2, '<p>-</p>', '_MG_9849.jpg', '2020-11-16'),
(16, 'Girendra Villa', 1, '<p>-</p>', '_MG_9852.jpg', '2020-11-16'),
(17, 'Desa', 3, '<p>-</p>', '_MG_9885.JPG', '2020-11-16'),
(18, 'Bungsil Guest House', 1, '<p>-</p>', 'IMG_0392.JPG', '2020-11-16'),
(19, 'Villa', 1, '<p>-</p>', 'IMG_5359_2.jpg', '2020-11-16'),
(20, 'Klub Kokos', 2, '<p>-</p>', 'IMG_5361.jpg', '2020-11-16'),
(21, 'Desa', 3, '<p>-</p>', 'IMG_5362.jpg', '2020-11-16'),
(22, 'Lebah Warung', 2, '<p>-</p>', 'IMG_5369.jpg', '2020-11-16'),
(23, 'Karsa Kafe', 2, '<p>-</p>', 'IMG_5370.jpg', '2020-11-16'),
(24, 'Villa', 1, '<p>-</p>', 'IMG_5371.jpg', '2020-11-16'),
(25, 'Villa', 1, '<p>-</p>', 'IMG_5375.jpg', '2020-11-16'),
(26, 'Desa', 3, '<p>-</p>', 'IMG_5379.jpg', '2020-11-16'),
(27, 'Villa', 1, '<p>-</p>', 'IMG_5385.jpg', '2020-11-16'),
(28, 'Villa', 1, '<p>-</p>', 'IMG_5387.jpg', '2020-11-16'),
(29, 'Villa', 1, '<p>-</p>', 'IMG_5389.jpg', '2020-11-16'),
(30, 'Villa', 1, '<p>-</p>', 'IMG_5391.JPG', '2020-11-16'),
(31, 'Villa', 1, '<p>-</p>', 'IMG_5394.JPG', '2020-11-16'),
(32, 'Desa', 3, '<p>-</p>', 'IMG_9083.JPG', '2020-11-16'),
(33, 'Desa', 3, '<p>-</p>', 'IMG_9094.JPG', '2020-11-16'),
(34, 'Kokokan Warung', 2, '<p>-</p>', 'IMG_9161.JPG', '2020-11-16'),
(35, 'Desa', 3, '<p>-</p>', 'IMG_9716.JPG', '2020-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_burung`
--

CREATE TABLE `jenis_burung` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_burung`
--

INSERT INTO `jenis_burung` (`id`, `jenis`) VALUES
(1, 'Kokokan'),
(2, 'Bangau-Bangau'),
(3, 'Blekok');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_galeri_desa`
--

CREATE TABLE `jenis_galeri_desa` (
  `id` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_galeri_desa`
--

INSERT INTO `jenis_galeri_desa` (`id`, `jenis`) VALUES
(1, 'Villa'),
(2, 'Cafe'),
(3, 'Desa');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `user_id`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `latitude`, `longitude`, `date`) VALUES
(1, 1, 'Bali', 'Gianyar', 'Tegallalang', 'Petulu', -8.491532, 115.274563, '2020-10-15 11:19:03');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(11) NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `provinsi_id`, `nama_provinsi`, `jumlah`, `tanggal`, `bulan`, `tahun`) VALUES
(22, 51, 'Bali', 400, '2019-01-31', 'January', 2019),
(23, 51, 'Bali', 230, '2019-02-28', 'February', 2019),
(24, 51, 'Bali', 239, '2019-03-31', 'March', 2019),
(25, 51, 'Bali', 371, '2019-04-30', 'April', 2019),
(26, 51, 'Bali', 348, '2019-05-31', 'May', 2019),
(27, 51, 'Bali', 370, '2019-06-30', 'June', 2019),
(28, 51, 'Bali', 364, '2019-07-31', 'July', 2019),
(29, 51, 'Bali', 509, '2019-08-31', 'August', 2019),
(30, 51, 'Bali', 394, '2019-09-30', 'September', 2019),
(31, 51, 'Bali', 354, '2019-10-31', 'October', 2019),
(32, 51, 'Bali', 250, '2019-11-30', 'November', 2019),
(33, 51, 'Bali', 229, '2019-12-31', 'December', 2019);

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` char(2) NOT NULL,
  `nama_provinsi` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`) VALUES
('11', 'Aceh'),
('12', 'Sumatera Utara'),
('13', 'Sumatera Barat'),
('14', 'Riau'),
('15', 'Jambi'),
('16', 'Sumatera Selatan'),
('17', 'Bengkulu'),
('18', 'Lampung'),
('19', 'Kepulauan Bangka Belitung'),
('21', 'Kepulauan Riau'),
('31', 'DKI Jakarta'),
('32', 'Jawa Barat'),
('33', 'Jawa Tengah'),
('34', 'DI Yogyakarta'),
('35', 'Jawa Timur'),
('36', 'Banten'),
('51', 'Bali'),
('52', 'Nusa Tenggara Barat'),
('53', 'Nusa Tenggara Timur'),
('61', 'Kalimantan Barat'),
('62', 'Kalimantan Tengah'),
('63', 'Kalimantan Selatan'),
('64', 'Kalimantan Timur'),
('65', 'Kalimantan Utara'),
('71', 'Sulawesi Utara'),
('72', 'Sulawesi Tengah'),
('73', 'Sulawesi Selatan'),
('74', 'Sulawesi Tenggara'),
('75', 'Gorontalo'),
('76', 'Sulawesi Barat'),
('81', 'Maluku'),
('82', 'Maluku Utara'),
('91', 'Papua Barat'),
('92', 'Papua');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `user_id`, `judul`, `deskripsi`, `image`, `date`) VALUES
(1, 1, 'Sejarah Desa Petulu', '<p>-</p>\r\n', '_MG_99961.JPG', '2020-10-15 09:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `image`, `role`, `date_created`) VALUES
(1, 'Administrator', 'admin@gmail.com', '$2y$10$DN4z6M.chg9E5iOG.490AOOGezV.2AVKBJFOqVBekjEeIF0dI66ya', 'default.png', 'Admin', 1602683248),
(2, 'Pegawai', 'pegawai@gmail.com', '$2y$10$3g.VZtVDdBYxx9e00AKHD.xQgJOlxiF9Iaf3WFQxt/di5oD7yJGD.', 'default.png', 'Admin', 1602683963);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_desa`
--
ALTER TABLE `galeri_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_burung`
--
ALTER TABLE `jenis_burung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_galeri_desa`
--
ALTER TABLE `jenis_galeri_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
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
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `galeri_desa`
--
ALTER TABLE `galeri_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `jenis_burung`
--
ALTER TABLE `jenis_burung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_galeri_desa`
--
ALTER TABLE `jenis_galeri_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
