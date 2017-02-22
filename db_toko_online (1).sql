-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22 Feb 2017 pada 19.43
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13
=======
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2017 at 06:41 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30
>>>>>>> origin/master

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_online`
--

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_admin`
=======
-- Table structure for table `tb_admin`
>>>>>>> origin/master
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `username` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
=======
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
>>>>>>> origin/master
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_barang`
=======
-- Table structure for table `tb_barang`
>>>>>>> origin/master
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `kode_barang` text NOT NULL,
  `nama_barang` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_detail_transaksi`
=======
-- Table structure for table `tb_detail_transaksi`
>>>>>>> origin/master
--

CREATE TABLE `tb_detail_transaksi` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `data_barang` text NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_kategori_barang`
=======
-- Table structure for table `tb_kategori_barang`
>>>>>>> origin/master
--

CREATE TABLE `tb_kategori_barang` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_metode_pembayaran`
=======
-- Table structure for table `tb_metode_pembayaran`
>>>>>>> origin/master
--

CREATE TABLE `tb_metode_pembayaran` (
  `id` int(11) NOT NULL,
  `metode_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_pelanggan`
=======
-- Table structure for table `tb_pelanggan`
>>>>>>> origin/master
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
<<<<<<< HEAD
  `username` varchar(20) NOT NULL,
  `password` char(64) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(12) NOT NULL
=======
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` int(12) NOT NULL,
  `user_id` int(11) NOT NULL
>>>>>>> origin/master
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_pembayaran`
=======
-- Table structure for table `tb_pembayaran`
>>>>>>> origin/master
--

CREATE TABLE `tb_pembayaran` (
  `id` int(11) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `metode_id` int(11) NOT NULL,
  `total_keseluruhan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_status_pembayaran`
=======
-- Table structure for table `tb_role_user`
--

CREATE TABLE `tb_role_user` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_status_pembayaran`
>>>>>>> origin/master
--

CREATE TABLE `tb_status_pembayaran` (
  `id` int(11) NOT NULL,
  `status_pembayaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Struktur dari tabel `tb_transaksi`
=======
-- Table structure for table `tb_transaksi`
>>>>>>> origin/master
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `alamat_pengiriman` text NOT NULL,
  `kode_unik` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

<<<<<<< HEAD
=======
-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

>>>>>>> origin/master
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id` (`transaksi_id`);

--
-- Indexes for table `tb_kategori_barang`
--
ALTER TABLE `tb_kategori_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_metode_pembayaran`
--
ALTER TABLE `tb_metode_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
<<<<<<< HEAD
  ADD PRIMARY KEY (`id`);
=======
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`),
  ADD KEY `user_id` (`user_id`);
>>>>>>> origin/master

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `metode_id` (`metode_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status` (`status`);

--
<<<<<<< HEAD
=======
-- Indexes for table `tb_role_user`
--
ALTER TABLE `tb_role_user`
  ADD PRIMARY KEY (`id`);

--
>>>>>>> origin/master
-- Indexes for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
<<<<<<< HEAD
=======
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
>>>>>>> origin/master
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_detail_transaksi`
--
ALTER TABLE `tb_detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kategori_barang`
--
ALTER TABLE `tb_kategori_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_metode_pembayaran`
--
ALTER TABLE `tb_metode_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
<<<<<<< HEAD
=======
-- AUTO_INCREMENT for table `tb_role_user`
--
ALTER TABLE `tb_role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
>>>>>>> origin/master
-- AUTO_INCREMENT for table `tb_status_pembayaran`
--
ALTER TABLE `tb_status_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
<<<<<<< HEAD
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_admin`
=======
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
>>>>>>> origin/master
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `admin_user` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Ketidakleluasaan untuk tabel `tb_barang`
=======
-- Constraints for table `tb_barang`
>>>>>>> origin/master
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `tb_kategori_barang` (`id`);

--
<<<<<<< HEAD
-- Ketidakleluasaan untuk tabel `tb_detail_transaksi`
=======
-- Constraints for table `tb_detail_transaksi`
>>>>>>> origin/master
--
ALTER TABLE `tb_detail_transaksi`
  ADD CONSTRAINT `tb_detail_transaksi_ibfk_1` FOREIGN KEY (`transaksi_id`) REFERENCES `tb_transaksi` (`id`);

--
<<<<<<< HEAD
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
=======
-- Constraints for table `tb_pelanggan`
>>>>>>> origin/master
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `pelanggan_user` FOREIGN KEY (`id`) REFERENCES `tb_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
<<<<<<< HEAD
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
=======
-- Constraints for table `tb_pembayaran`
>>>>>>> origin/master
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_2` FOREIGN KEY (`transaksi_id`) REFERENCES `tb_transaksi` (`id`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_3` FOREIGN KEY (`metode_id`) REFERENCES `tb_metode_pembayaran` (`id`),
<<<<<<< HEAD
  ADD CONSTRAINT `tb_pembayaran_ibfk_4` FOREIGN KEY (`status`) REFERENCES `tb_status_pembayaran` (`id`);
=======
  ADD CONSTRAINT `tb_pembayaran_ibfk_4` FOREIGN KEY (`status`) REFERENCES `tb_status_pembayaran` (`id`),
  ADD CONSTRAINT `tb_pembayaran_ibfk_5` FOREIGN KEY (`user_id`) REFERENCES `tb_pelanggan` (`user_id`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_pelanggan` (`user_id`);

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tb_role_user` (`id`);
>>>>>>> origin/master

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
