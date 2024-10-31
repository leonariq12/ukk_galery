-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2024 pada 07.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leon_galery`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `penulis` varchar(255) DEFAULT NULL,
  `penerbit` varchar(255) DEFAULT NULL,
  `tahun_terbit` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorit`
--

CREATE TABLE `favorit` (
  `id_peminjaman` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `tanggal_peminjaman` varchar(255) DEFAULT NULL,
  `tanggal_pengembalian` varchar(255) DEFAULT NULL,
  `status_peminjaman` enum('dipinjam','dikembalikan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `favorit`
--

INSERT INTO `favorit` (`id_peminjaman`, `id_user`, `id_buku`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(1, 5, 14, '2024-08-23', '2024-08-09', 'dikembalikan'),
(2, 5, 13, '', '', 'dikembalikan'),
(3, 5, 18, '2024-09-06', '2024-10-01', 'dipinjam'),
(4, 5, 20, '2024-09-06', '2024-09-13', 'dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_buku` int(11) DEFAULT NULL,
  `ulasan` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_user`, `id_buku`, `ulasan`, `rating`) VALUES
(6, 5, 20, 'Buku nya sangat bagus', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telepon` varchar(255) DEFAULT NULL,
  `level` enum('admin','petugas','peminjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `alamat`, `no_telepon`, `level`) VALUES
(3, 'Administator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'bogor', '081212', 'admin'),
(4, 'Petugas 1', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas@gmail.com', 'bogor', '081313', 'petugas'),
(5, 'Siswa 1', 'peminjam', '55f3894bc5fc71fead8412d321c2952c', 'peminjam@gmail.com', 'bogor', '081414', 'peminjam'),
(6, 'Peminjam 2', 'peminjam2', '53c00c96141e24cfff921a36ce962dd6', 'peminjam2@gmail.com', 'Bogor ', '0812121212', 'peminjam'),
(7, 'Admin 2', 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2@gmail.com', 'Bogor Utara', '0813131313', 'admin'),
(8, 'Nagitha Syahiranie Suryadi', 'Admin', '21eed4f2e9ab214fdbf00a2a091d63c4', 'nagithasyahiranie@gmail.com', 'Jl.Raya Tajur', '0813131313', 'admin'),
(9, 'ghuril', 'ghuril', '827ccb0eea8a706c4c34a16891f84e7b', 'rw.xo.ot.d@gmail.com', 'buntar', '088888', 'admin'),
(10, 'Alif Rizqi Famkhu', 'Alif', '827ccb0eea8a706c4c34a16891f84e7b', 'alifrzqif123@gmail.com', '', '', 'admin'),
(11, 'ariqathallah', 'Ariq', '827ccb0eea8a706c4c34a16891f84e7b', 'ariq7701@gmail.com', '', '', 'admin'),
(12, 'Leon', 'Leon Henry', '6531401f9a6807306651b87e44c05751', 'leon@gmail.com', '', '', 'admin'),
(13, 'Leon Henry', 'Leon', '827ccb0eea8a706c4c34a16891f84e7b', 'leonhenry1601@gmail.com', '', '', 'admin'),
(14, 'Leon Henry', 'Leon', '827ccb0eea8a706c4c34a16891f84e7b', 'leonhenry1601@gmail.com', '', '', 'peminjam'),
(15, 'Leon Henry', 'Leon16', '827ccb0eea8a706c4c34a16891f84e7b', 'leonhenry1601@gmail.com', '', '', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `album`
--
ALTER TABLE `album`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `favorit`
--
ALTER TABLE `favorit`
  ADD CONSTRAINT `favorit_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
