-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2020 pada 09.53
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `desaparhitean`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id_cart` bigint(20) NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `pesanan_khusus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_produk` bigint(20) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pesanan_khusus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_produk`, `jumlah`, `pesanan_khusus`) VALUES
(321, 28, 1, ''),
(322, 28, 1, ''),
(323, 28, 1, ''),
(324, 27, 1, ''),
(325, 27, 17, ''),
(325, 28, 1, ''),
(326, 27, 1, ''),
(328, 27, 2, 'merah'),
(335, 27, 1, ''),
(337, 27, 1, ''),
(338, 28, 1, ''),
(339, 27, 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id_kategori` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_produk`
--

INSERT INTO `kategori_produk` (`id_kategori`, `nama`) VALUES
(1, 'paket rafting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_aduan` bigint(20) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `subjek` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `tanggapan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_aduan`, `nama_user`, `subjek`, `isi`, `tanggapan`) VALUES
(19, 'Revi', 'Pelayanan', 'saya merasa puas karena pelayanannya yang sangat bagus dan mantap', 'thankyou'),
(20, 'Revi', 'Pelayanan Rafting', 'Mantap sanagat bahh', 'hehehe mauliate kak'),
(21, 'Yohana Sihombing', 'Komunikasi', 'Komunikasi dengan petugas sangat lah adem bikin hati senang', 'Terimakasih atas sarannya. kami akan memperbaiki dan melakukan yang terbaik'),
(22, 'Revi', 'Objek Wisata', 'Wisata nya bagus', 'ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` bigint(20) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  `id_transaksi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kategori` bigint(20) NOT NULL,
  `harga` double NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `kategori`, `harga`, `stock`, `gambar`, `keterangan`) VALUES
(27, 'Extreme Rafting', 1, 350000, 10, 'Extreme Rafting.jpg', 'tersedia'),
(28, 'Fun Rafting', 1, 300000, 13, 'Fun Rafting.jpg', 'Rafting Sejauh 5KM dengan kapasitas penumpang sebanyak 7 orang ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama`) VALUES
(1, 'administrator'),
(2, 'costumer'),
(3, 'petugas_gudang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_transaksi`
--

CREATE TABLE `status_transaksi` (
  `id_status` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_transaksi`
--

INSERT INTO `status_transaksi` (`id_status`, `nama`, `keterangan`) VALUES
(1, 'Open', 'Transaksi baru dilakukan, dan permintaan pesanan belum di konfirmasi.'),
(2, 'Dikonfirmasi', 'Request pesanan telah dikonfirmasi'),
(4, 'Selesai', 'Pesanan telah dikirimkan pada penerima dan seudah selesai.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL,
  `identitas_penerima` varchar(30) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `total_pembayaran` double NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `bukti` varchar(300) NOT NULL,
  `status_transaksi` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `alamat_tujuan`, `identitas_penerima`, `nomor_telepon`, `total_pembayaran`, `tanggal_transaksi`, `bukti`, `status_transaksi`) VALUES
(321, 23, 'sitoluama', 'revi baik', '082178220744', 300000, '2020-05-27', 'rev.jpg', 1),
(322, 26, 'sitoluama', 'M1', '082178220744', 300000, '2020-05-30', 'mikael.jpg', 2),
(323, 23, 'nndca', '6', '082278210744', 300000, '2020-05-30', 'NULL', 1),
(324, 23, 'sitoluama', 'R1', '082178220744', 350000, '2020-06-08', 'NULL', 1),
(325, 23, 'sitoluama', 'R1', '082178220744', 650000, '2020-06-08', 'NULL', 1),
(326, 23, 'sitoluama', 'R1', '082178220744', 10150000, '2020-06-11', 'NULL', 1),
(327, 23, 'sitoluama', 'R1', '082178220744', 0, '2020-06-11', 'NULL', 1),
(328, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(329, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(330, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(331, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(332, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(333, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(334, 23, 'sitoluama', 'R6', '082178220744', 700000, '2020-06-12', 'NULL', 1),
(335, 27, 'sitoluama', 'R25', '082178220744', 350000, '2020-06-13', 'Bukti Transaksi Pemesanan Extreme rafting.jpg', 4),
(337, 23, 'balige', 'revi', '081260826280', 350000, '2020-06-14', 'NULL', 1),
(338, 23, 'balige', 'revi', '081260826280', 300000, '2020-06-14', 'bukti.jpg', 4),
(339, 23, 'balige', 'revia', '081260826280', 350000, '2020-06-14', 'NULL', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `tanggal_lahir`, `alamat`, `username`, `password`, `email`, `role`) VALUES
(23, 'Revi', '2020-05-01', 'sitoluama', 'revi', 'revi', 'revi@gmail.com', 2),
(24, 'Arijona', '2001-06-07', 'Nagaraja', 'arijona', 'admin', 'arijonapurba10@gmail.com', 1),
(26, 'mikael', '2020-05-03', 'Balige', 'mikael', 'mikael', 'mikael@gmail.com', 2),
(27, 'Yohana Sihombing', '2020-06-24', 'Balige', 'yohana', 'yohana', 'yohana@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `idprdkfk` (`id_produk`),
  ADD KEY `userfkcart` (`id_user`);

--
-- Indeks untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_transaksi`,`id_produk`),
  ADD KEY `transfk` (`id_transaksi`),
  ADD KEY `profk` (`id_produk`);

--
-- Indeks untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_aduan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `idtranfk` (`id_transaksi`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategorifk` (`kategori`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `status_transaksi`
--
ALTER TABLE `status_transaksi`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `userfk` (`id_user`),
  ADD KEY `statusfk` (`status_transaksi`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rolefk` (`role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT untuk tabel `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_aduan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_transaksi`
--
ALTER TABLE `status_transaksi`
  MODIFY `id_status` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=340;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `idprdkfk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `userfkcart` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `profk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `transfk` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategorifk` FOREIGN KEY (`kategori`) REFERENCES `kategori_produk` (`id_kategori`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `statusfk` FOREIGN KEY (`status_transaksi`) REFERENCES `status_transaksi` (`id_status`),
  ADD CONSTRAINT `userfk` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `rolefk` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
