-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 05:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan-ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(2) NOT NULL,
  `produk_nama` varchar(55) NOT NULL,
  `produk_harga` int(11) NOT NULL,
  `produk_deskripsi` longtext NOT NULL,
  `produk_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_deskripsi`, `produk_foto`) VALUES
(1, 'Makanan Kocheng', 250000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque sodales ut etiam sit. Vestibulum lectus mauris ultrices eros in cursus. Bibendum neque egestas congue quisque. Convallis convallis tellus id interdum. Sed nisi lacus sed viverra tellus in. Tempor orci eu lobortis elementum nibh. At augue eget arcu dictum varius duis at consectetur. Eros donec ac odio tempor. Non odio euismod lacinia at quis risus sed vulputate. Sed odio morbi quis commodo odio.', '1375426658_1204488030_produk-3.jpg'),
(2, 'Makanan Kucing', 70000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Id faucibus nisl tincidunt eget nullam non. Sem fringilla ut morbi tincidunt augue. Quam vulputate dignissim suspendisse in est ante in nibh.', '116404536_1313983456_produk-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(2) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'pelanggan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `phone`, `role`) VALUES
(1, 'pelanggan', '7f78f06d2d1262a0a222ca9834b15d9d', 'pelanggan', '08123456789', 'pelanggan'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '081234567891', 'admin'),
(5, 'customer', '91ec1f9324753048c0096d036a694f86', 'customer', '08976543212', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
