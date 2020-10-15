-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 08:42 AM
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
(1, 1, 'Sejarah Desa Petulu', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>&nbsp;Ada berbagai cerita rakyat yang menyatakan bahwa petulu gunung merupakan gunung dari wilayah kekuasaan Raja Sukawati. Nama ini diberikan oleh Cokorda Gunung, anak raja sukawat,i kira-kira abad ke-15. Raja Sukawati menempatkan soroh (warga) bendesa untuk bermukim dan membangun Desa petulu gunung. Karena wilayah sangat lebar atau bet, maka wilayah itu dibesebut bet dulu, kemudian menjadi petulu. Wilayah yang paling utara diberi nama Petulu Gunung. Disebut Gunung karena letaknya di ujung dan datarannya paling tinggi.</strong></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Wilayah petulu gunung sangat terisolir, jalannya buntu dan sulit dijangkau. Kehidupan masyarakatnya sangat miskin karena kurangnya pekerjaan serta sempitnya lahan sawah yang digarap masyarakat. Sehingga dalam usaha untuk melangsukan kehidupan, masyarakat petulu gunung banyak merantau keluar wilayah untuk mendapat pekerjaan maupun sumber pangan seperti, beras, kopi, dan ketela. Mereka banyak pergi kewilayah Singaraja untuk ngorek kopi dan ke wilayah Tabanan untuk munuh padi serta wilayah Bangli untuk munuh ketela. Tiga wilayah ini selalu mereka datangi setelah musim panen tiba. Mereka akan kembali setelah mendapatkan hasil atau pada waktu piodalan maupun hari raya Galungan dan kuningan.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Melihat fenomena ini masyarakat petulu gunung berfikir bahwa apa yang dialami merupakan suatu kejadian yang disebabkan oleh kurangnya yadnya yang dihaturkan pada Hyang Maha Kuasa. Untuk menanggulangi keadaan tersebut, masyarakat berencana untuk melaksanakan upacara besar di Pura Desa yaitu : mependem, mepedagingan, mebalik sumpah, dan ngenteg linggih. Mereka sangat percaya dengan melaksanakan upacara besar ini masyarakat petulu gunung akan hidup damai dan sejahtera.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Dengan dukungan yang sangat besar dari Puri Ubud, maka ditetapkannya upacara tersebut pada hari sabtu kliwon landep. Masyarakat mulai ngayah untuk mempersiapkan segala sesuatu yang berkaitan dengan keperluan upacara seperti : rerampe (janur, bambu), pedagingan (beras, telur), dan wewalungan (binatang kurban). Ketika masyarakat ngayah, beberapa orang diantara mereka melihat empat ekor burung kokokan di atas pohon di depan rumah mangku desa. Mereka tidak mempunyai firasat apa-apa bahwa burung itu akan menjadi penghuni desanya.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tanggal 25 Oktober 1965 merupakan puncak acara ngenteg linggih di pura desa yang tentunya diawali terlebih dahulu dengan upacara besar seperti : melasti, mepedanan, mepedagingan, mepada. Upacara dapat terlaksana dengan khusuk, khidmat, damai, dan lancar walaupun pada masa persiapan diliputi dengan suasana yang sangat tegang karena suhu politik yang sedang memanas yaitu G30S/PKI yang sering disebut dengan GESTAPU/GESTOK. Tapi berkat kuasa Hyang Widhi mereka dapat melaksanakan yadnya yang besar itu dengan lancar.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Tepat tanggal 7 November 1965, upacara berakhir dan Ida Bhatara mesineb. Bersamaan dengan itu datanglah segerombolan burung kokokan bertengger dan bersarang di atas pepohonan yang tumbuh di ambal-ambal rumah penduduk. Melihat banyaknya burung kokokan yang datang, masyarakat mempercayai bahwa burung tersebut merupakan pica Ida Bhatara Desa. Burung kokokan ini merupakan salah satu peliharaan dari Pura Desa yang patut dipelihara dan disucikan. Akhirnya burung kokokan tersebut dijemput (dipendak) oleh seluruh masyarakat dengan upacara khusus di Pura Desa. Dari keyakinan&nbsp;&nbsp;tersebut masyarakat petulu gunung memelihara burung kokokan tersebut dengan taat dan tidak ada yang berani mengganggunya. Mereka percaya apabila mereka mengganggu burung kokokan akan berakibat fatal bagi kehidupan dirinya maupun kehidupan tanamannya yang ada di sawah. Kejadian ini sudah sering dibuktikan dengan adanya tanaman padi yang dirusak burung kokokan, orang jatuh pingsan karena menembak burung kokokan, orang yang minta maaf (neduh) karena mengambil anak kokokan tanpa permisi. Maka untuk menjaga keamanan dan kelestarian burung kokokan masyarakat petulu gunung membuat hukum (awig-awig) khusus yang berkaitan dengan keberadaan burung kokokan yang harus ditaati oleh seluruh masyarakat.&nbsp;</p>\r\n', 'petulu.jpg', '2020-10-15 09:21:47');

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
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
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
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
