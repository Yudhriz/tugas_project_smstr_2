-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbproduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `nama`) VALUES
(1, 'makanan'),
(2, 'minuman'),
(3, 'spesial');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemesan` varchar(45) NOT NULL,
  `alamat_pemesan` varchar(45) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `jumlah_pesanan` int(11) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `nama_pemesan`, `alamat_pemesan`, `no_hp`, `email`, `jumlah_pesanan`, `deskripsi`, `produk_id`) VALUES
(1, '2023-04-18', 'Rita', 'jl. Duren', '088214787091', 'Rita@jo.com', 1, 'tes', 1),
(2, '2023-04-19', 'Yudha', 'jl. mangga', '088214787191', 'riskyyudha678@hotmail.com', 2, 'lengkap', 2),
(3, '2023-04-19', 'budi', 'jl. bori', '088214757191', 'Budi8@hotmail.com', 1, 'lengkap', 3),
(5, '2023-04-21', 'Daffa', 'Rusun', '087874008767', 'daffa@gmail.com', 1, 'manis', 9),
(6, '2023-04-26', 'Wisnu', 'Jl.Rudal', '087874008767', 'Ok@gmail.com', 1, 'Lengkap', 2),
(7, '2023-05-09', 'test', 'jl buah', '088214757191', 'test@gmail.com', 6, 'test', 4);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga_jual`, `harga_beli`, `stok`, `min_stok`, `deskripsi`, `kategori_produk_id`, `gambar`) VALUES
(1, 'MK001', 'Lobster Bisque', 300000, 250000, 100, 1, 'This soup can be made using lobster, langoustine, crab, shrimp, or crayfish.', 1, 'lobster-bisque.jpg'),
(2, 'MK002', 'Crab Cake', 125000, 100000, 100, 1, 'A delicate crab cake served on a toasted roll with lettuce and tartar sauce', 1, 'cake.jpg'),
(3, 'MK003', 'Bread Barrel', 50000, 30000, 10, 1, 'Bread', 1, 'bread-barrel.jpg'),
(4, 'SP001', 'Martabak Merah Putih', 250000, 250000, 10, 1, 'Martabak bernuansa merah putih ini melambangkan semangat merdeka dan juga bisa turut memeriahkan HUT RI di rumah bareng keluarga. Tak cuma cantik dengan topping stroberi dan parutan keju, rasa martabak ini juga sangat lezat dan mantap dengan tekstur yang lembut.', 3, 'specials-1.jpg'),
(5, 'SP002', 'Nasi Tim Ayam', 225000, 223000, 10, 1, 'Salah satu menu favorit berbagai kalangan. Selain rasanya nikmat, kandungan gizinya pun sangat bagus untuk masa tumbuh kembang si buah hati.', 3, 'specials-2.png'),
(6, 'SP003', 'Ayam Kristal', 345000, 345000, 100, 1, 'Olahan ayam tepung ini memiliki tekstur butiran renyah layaknya kristal', 3, 'specials-3.png'),
(7, 'SP004', 'Sup Labu Kacang Hijau', 450000, 450000, 1000, 1, 'Rasa segar buah labu menyatu dengan manisnya rebusan kacang hijau yang meleleh ketika dikunyah. Ditambah dengan rebusan daging dan kaldu nya yang tidak perlu diragukan lagi kelezatannya!', 3, 'specials-4.png'),
(8, 'SP005', 'Waffle Tempe Kriuk', 200000, 200000, 66666, 1, 'kekinian yang enak dan renyah abis. Selain praktis, kreasi tempe waffle atau disingkat temffle ini juga lebih sehat karena proses masaknya yang tanpa minyak goreng.', 3, 'specials-5.png'),
(9, 'MI001', 'Es Teh Manis', 20000, 20000, 10000, 1, 'Es Teh manis', 2, 'es-teh-manis.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'Demo Account'),
(2, 'yudha', 'yudha', 'Owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
