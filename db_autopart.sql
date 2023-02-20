-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2022 pada 15.25
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_autopart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` bigint(100) NOT NULL,
  `jenis_mobil` varchar(100) NOT NULL,
  `merek_mobil` varchar(100) NOT NULL,
  `no_part` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` varchar(100) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `harga_sales` varchar(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `jenis_mobil`, `merek_mobil`, `no_part`, `jenis_barang`, `nama_barang`, `jumlah_barang`, `nama_sales`, `harga_sales`, `harga_jual`) VALUES
(18, 'Toyota', 'Avanza', '15601 - 87702', 'Filter Oli', 'Filter Oli Avanza Xenia', '100', 'Hino Part', '10000', '20000'),
(19, 'Toyota', 'Avanza All New ', '43512-BZ020', 'Disc Brake', 'Disc Brake', '5', 'Hino Part', '190000', '280000'),
(20, 'Toyota', 'All Toyota', 'TMO', 'Oli', 'Oli Mesin TMO', '100', 'Cappela Part', '45000', '50000'),
(21, 'Mitsubishi', 'L300', 'MD372250', 'OIL SEAL', 'OS-Crankshaft-R', '5', 'Mitsubishi Part', '40000', '50000'),
(23, 'Mitsubishi', 'L300', 'MD069782', 'Filter Oli', 'F/O L300', '5', 'Mitsubishi Part', '100000', '135000'),
(24, 'Toyota', 'Avanza Rush', '11213-97401', 'Gasket Cylinder', 'Packing T.Klep', '5', 'Cappela Part', '100000', '135000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_customer` bigint(100) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat_customer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_customer`
--

INSERT INTO `tb_customer` (`id_customer`, `nama_customer`, `no_hp`, `alamat_customer`) VALUES
(1, 'Customer 1', '0912', 'Jakarta'),
(2, 'Customer 2', '09', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_pembelian`
--

CREATE TABLE `tb_jurnal_pembelian` (
  `id_jurnal_pembelian` bigint(100) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` bigint(100) NOT NULL,
  `harga_satuan` bigint(100) NOT NULL,
  `jumlah_pembelian` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurnal_pembelian`
--

INSERT INTO `tb_jurnal_pembelian` (`id_jurnal_pembelian`, `tanggal_pembelian`, `nama_sales`, `nama_barang`, `jumlah_barang`, `harga_satuan`, `jumlah_pembelian`) VALUES
(12, '2022-10-01', 'Mitsubishi Part', 'F/O L300', 10, 100000, 1000000),
(13, '2022-10-01', 'Mitsubishi Part', 'OS-CRANKSHAFT,RR', 5, 40000, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal_penjualan`
--

CREATE TABLE `tb_jurnal_penjualan` (
  `id_jurnal_penjualan` bigint(100) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah_barang` bigint(100) NOT NULL,
  `harga_satuan` bigint(100) NOT NULL,
  `total_penjualan` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jurnal_penjualan`
--

INSERT INTO `tb_jurnal_penjualan` (`id_jurnal_penjualan`, `tanggal_penjualan`, `nama_customer`, `nama_barang`, `jumlah_barang`, `harga_satuan`, `total_penjualan`) VALUES
(3, '2022-10-02', 'Customer 1', 'F/O L300', 5, 135000, 675000),
(4, '2022-10-29', 'Customer 1', 'Packing T.Klep', 1, 135000, 135000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sales`
--

CREATE TABLE `tb_sales` (
  `id_sales` bigint(100) NOT NULL,
  `nama_sales` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `alamat_sales` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sales`
--

INSERT INTO `tb_sales` (`id_sales`, `nama_sales`, `no_hp`, `alamat_sales`) VALUES
(0, 'Mitsubishi Part', '0123', 'Jakarta'),
(1, 'Honda Part', '0812', 'Jakarta'),
(2, 'Cappela Part', '081221', 'Jakarta'),
(3, 'Hyundai Part', '10', 'Jakarta'),
(4, 'Mazda Part', '01', 'Jakarta'),
(5, 'Hino Part', '0812', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` bigint(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `level_user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user_name`, `password_user`, `level_user`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin2', 'admin2', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_customer`),
  ADD UNIQUE KEY `nama_customer` (`nama_customer`) USING BTREE;

--
-- Indeks untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  ADD PRIMARY KEY (`id_jurnal_pembelian`),
  ADD KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  ADD PRIMARY KEY (`id_jurnal_penjualan`),
  ADD KEY `nama_customer` (`nama_customer`);

--
-- Indeks untuk tabel `tb_sales`
--
ALTER TABLE `tb_sales`
  ADD PRIMARY KEY (`id_sales`),
  ADD UNIQUE KEY `nama_sales` (`nama_sales`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  MODIFY `id_jurnal_pembelian` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  MODIFY `id_jurnal_penjualan` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`nama_sales`) REFERENCES `tb_sales` (`nama_sales`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal_pembelian`
--
ALTER TABLE `tb_jurnal_pembelian`
  ADD CONSTRAINT `tb_jurnal_pembelian_ibfk_1` FOREIGN KEY (`nama_sales`) REFERENCES `tb_sales` (`nama_sales`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_jurnal_penjualan`
--
ALTER TABLE `tb_jurnal_penjualan`
  ADD CONSTRAINT `tb_jurnal_penjualan_ibfk_1` FOREIGN KEY (`nama_customer`) REFERENCES `tb_customer` (`nama_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
