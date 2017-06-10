-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2017 at 04:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project0`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(10) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `bahan` varchar(20) NOT NULL,
  `file` varchar(30) NOT NULL,
  `panjang` int(11) DEFAULT NULL,
  `lebar` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(50) NOT NULL,
  `telepon` int(14) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `tipe`, `nama`, `bahan`, `file`, `panjang`, `lebar`, `jumlah`, `harga`, `telepon`, `keterangan`) VALUES
(1, '', 'tetstsst', 'KoreaTipis', 'tetstsst.jpg', 23, 58, 12, 80400000, 2147483647, 'teststs'),
(2, 'document', 'asdsa', 'CinaTipis', 'asdsa.pdf', NULL, NULL, 1, 0, 2147483647, 'asdasda'),
(3, 'banner', 'fajfkaa', 'KoreaTipis', 'fajfkaa1.jpg', 2, 2, 2, 100000, 853973, 'Keterangan'),
(4, 'banner', 'jdaka', 'KoreaTebal', 'jdaka.png', 1, 1, 4, 180000, 4, '4');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'HVS A4 B/w 70 g', 'Deskripsi Produk', 400, 'paper-480538_960_720.jpg'),
(2, 'HVS A4 Color 80 g', 'Deskripsi Produk', 1500, 'paper-480538_960_7201.jpg'),
(3, 'HVS A3 Color 80 g', 'Deskripsi Produk', 3000, 'paper-480538_960_7202.jpg'),
(4, 'Art Paper A3 150 g', 'Deskripsi Produk', 4000, 'paper-480538_960_7203.jpg'),
(5, 'Glossy Photo Paper A4 230 g', 'Deskripsi Produk', 3000, 'paper-480538_960_7204.jpg'),
(6, 'Flexi China', 'Bahan jenis ini agak halus dan agak tipis. Umumnya dipakai untuk mencetak Spanduk, Baliho, Umbul-Umbul, X-Banner, Roll Up, Y-Banner, I-Banner, Photowall, Mini X-Banner, Wallpaper, Backdrop, Billboard, maupun Backwall. Bahan jenis ini seratnya agak halus dan cocok untuk posisi iklan didalam ruangan (Indoor) maupun diluar ruangan (Outdoor).\r\ngramasi yang umum dipakai 230 s/d 400 gr. Untuk Lebar gulungan bahan untuk proses cetak diantara lebar 220cm, 250cm, 320cm dan 550cm.', 10000, 'Wrdq-flexi-china_(1).jpg'),
(7, 'Flexi Korea', 'Bahan jenis ini agak kasar agak tebal. Umumnya dipakai untuk mencetak Spanduk, Baliho, Umbul-Umbul, X-Banner, Roll Up, Y-Banner, I-Banner, Photowall, Mini X-Banner, Backwall maupun Wallpaper.. Bahan jenis ini seratnya agak kasar agak tebal dan cocok untuk posisi iklan didalam ruangan (Indoor) maupun diluar ruangan (Outdoor).\r\ngramasi yang umum dipakai 230 s/d 350 gr. Untuk Lebar gulungan bahan untuk proses cetak diantara lebar 250cm, 320cm dan 550cm.', 20000, 'flexi1.jpg'),
(8, 'Flexi Jerman', 'Bahan jenis ini lumayan kasar dan halus, dan bahannya ini juga lumayan tebal dari yang lainnya. Umumnya dipakai untuk mencetak Spanduk, Baliho, X-Banner, Mini X-Banner,  Roll Up, Y-Banner, I-Banner. Bahan jenis ini seratnya lumayan kasar dan halus dan cocok untuk posisi iklan didalam ruangan (Indoor) maupun diluar ruangan (Outdoor) karena bahannya yang lebih tebal..\r\ngramasi yang umum dipakai 230 s/d 400 gr. \r\nUntuk Lebar gulungan bahan untuk proses cetak diantara lebar 220cm, 250cm, 320cm dan 550cm.', 30000, '8Cob-flexi-jerman1.jpg'),
(10, 'Luster', 'Bahan jenis ini agak kasar, lumayan tipis dan mengkilap. Umumnya dipakai untuk mencetak X-Banner, Roll Up, Y-Banner, I-Banner, Poster. Bahan jenis ini seratnya agak halus dan cocok untuk posisi iklan didalam ruangan (Indoor) tidak perlu ditambahkan hasil finishing seperti laminating DOFF / GLOSSY karena seratnya yang kasar laminating tidak akan dapat menempel pada permukaanya. Gramasi yang umum dipakai standar. Untuk Lebar gulungan bahan untuk proses cetak diantara lebar 90cm, 125cm, 150cm.', 30000, '8g9x-bahan-luster1.jpg'),
(11, 'Glossy Paper', 'Bahan jenis ini halus, tebal dan berwarna putih. Umumnya dipakai untuk mencetak X-Banner, Roll Up, Y-Banner, I-Banner, Poster dan Foto. Bahan jenis ini seratnya halus dan cocok untuk posisi iklan didalam ruangan (Indoor) dengan ditambahkan hasil finishing seperti laminating DOFF / GLOSSY supaya hasilnya lebih memuaskan. Gramasi yang umum dipakai standar. Untuk Lebar gulungan bahan untuk proses cetak diantara lebar 90cm, 125cm, 150cm.', 30000, '150gsm-font-b-glossy-b-font-photo-font-b-paper-b-font-with-self-adhensive-for1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project_sessions`
--

CREATE TABLE `project_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_sessions`
--

INSERT INTO `project_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('81d8l40e8rfrt5dkum9tmab9v7kdpcbc', '::1', 1495845621, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834353632313b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a353a2261646d696e223b),
('ppa2283d9l4kd9gn028nlbc1kp1qen89', '::1', 1495845777, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834353632313b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a353a2261646d696e223b),
('ovfd35hvaqnlmeenaj21jvfr5r34nic2', '::1', 1495846158, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834363135383b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a353a2261646d696e223b),
('ufua8oiqq3nvi7h68qqkvl0rrm55jpjj', '::1', 1495846231, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834363231393b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a353a2261646d696e223b),
('9uvh21t6gna3gk1j2l6avmts4u583i92', '::1', 1495846547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834363534373b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a363a226d656d626572223b6c6576656c7c733a363a226d656d626572223b),
('cgm9ncioh2bjfn8d1jjh4ud09dkggr3m', '::1', 1495846672, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834363534373b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a353a2261646d696e223b6c6576656c7c733a353a2261646d696e223b),
('jibag4bhrgf78a9qckbu3ftss668i9l4', '::1', 1495846833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353834363737373b6c6f676765645f696e7c733a31323a225375646168204c6f6767696e223b69647c4e3b757365726e616d657c733a363a226d656d626572223b6c6576656c7c733a363a226d656d626572223b);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_product` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `Bahan` varchar(100) NOT NULL,
  `Panjang` double NOT NULL,
  `Lebar` double NOT NULL,
  `Jumlah` int(20) NOT NULL,
  `Harga` double NOT NULL,
  `No_Telepon` varchar(50) NOT NULL,
  `Keterangan` text NOT NULL,
  `status_pembayaran` int(11) NOT NULL,
  `kode_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `username`, `nama_product`, `image`, `Bahan`, `Panjang`, `Lebar`, `Jumlah`, `Harga`, `No_Telepon`, `Keterangan`, `status_pembayaran`, `kode_pembayaran`) VALUES
(9, 16, 'candra', 'Art Paper 2', '180px-Bali_Ca2.png', '', 0, 0, 0, 0, '', '', 0, ''),
(10, 16, 'candra', 'HVS', '180px-Bali_Ca3.png', 'Flexi China', 2, 2, 2, 60000, '22324243', 'wsdsds', 0, ''),
(11, 16, 'candra', 'Print Baliho', '180px-Bali_Ta2.png', 'Flexi Korea', 2, 3, 2, 100000, '35343', 'redfdfd', 0, ''),
(12, 17, 'wienduadi', 'Print Baliho', '180px-Bali_Pa1.png', 'Flexi Korea', 2, 2, 100, 4000000, '1234', 'Antar Jemput', 0, ''),
(13, 17, 'wienduadi', 'Print Baliho Lagi', '180px-Bali_Ca.jpg', 'Glossy Paper', 2, 2, 12, 720000, '123', 'Antar jemput', 0, ''),
(14, 1, 'admin', 'Print Baru', '180px-Bali_Ca4.png', 'Glossy Paper', 2, 3, 2, 140000, '123456', 'ree', 0, ''),
(15, 1, 'admin', 'Print Baru', '180px-Bali_Ca5.png', 'Glossy Paper', 2, 3, 2, 140000, '123456', 'ree', 0, ''),
(16, 13, 'member', 'wewe', '180px-Bali_Ga.jpg', 'Flexi Korea', 4, 4, 2, 200000, '121324', 'erere', 1, ''),
(17, 13, 'member', 's;lgka;lsjgg', 't.png', 'Flexi China', 2, 3, 3, 120000, '32432', '4343', 0, ''),
(18, 13, 'member', 'Print Spanduk', 't1.png', 'Flexi China', 2, 3, 5, 200000, '12345', 'fegdd', 0, ''),
(19, 13, 'member', 'llal', 't2.png', 'Flexi Korea', 2, 3, 23, 1150000, '1235', 'retet', 1, ''),
(20, 13, 'member', 'print baru nih', 't3.png', 'Flexi China', 3, 3, 2, 110000, '1235', 'jg,cmvc', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `level` enum('admin','member') NOT NULL,
  `saldo` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `nama`, `email`, `notelepon`, `password`, `group`, `level`, `saldo`) VALUES
(2, '', 'andre', 'andre', 'andre', 'andre', 0, 'admin', 0),
(3, '', 'ayu', 'ayu@gmail.c', '12345', '25f9e794323b453885f5181f1b624d0b', 0, 'admin', 0),
(4, '', 'candra', 'aaa@gmail.c', '123456789', '25f9e794323b453885f5181f1b624d0b', 0, 'admin', 0),
(5, '', 'jtgf', 'jfjgc', 'gcnjgcf', 'fhj', 0, 'admin', 0),
(6, '', 'Made Erna S', 'ernasusanti', '081916544885', 'ernaaaa', 0, 'admin', 0),
(7, '', 'gfgh', 'ngng', 'hgcngj', 'hngc', 0, 'admin', 0),
(8, '', 'gfsrgf', 'hfdxhf', 'xfhx', 'xgv', 0, 'admin', 0),
(9, '', 'fdh', 'gdch', 'fvcd', 'gbncf', 0, 'admin', 0),
(10, '', 'erna', 'jhjmh', 'jhjmhv', 'hv mjhvj', 0, 'admin', 0),
(11, '', 'juliandika', 'juuliandika', '12345', '12345', 2, 'admin', 0),
(12, '', 'juli andika', 'juli', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'admin', 0),
(13, 'member', 'member', '3', '3', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'member', 6940000),
(14, '', 'erna', 'jhfv', 'jmhvj', 'vjm', 0, 'admin', 0),
(15, '', 'wiendu', 'wienduadi04', '082247973051', 'a1cedb591a45b7348f71c3624ea56375', 0, 'admin', 0),
(16, 'candra', 'candra', 'candra', '', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'member', 0),
(17, 'wienduadi', 'wiendu adi', 'wiendu', '123', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'member', 0),
(18, 'ernasusanti', 'Erna', 'Erna', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'member', 0),
(19, 'admin', 'admin', 'admin', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'admin', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sessions`
--
ALTER TABLE `project_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
