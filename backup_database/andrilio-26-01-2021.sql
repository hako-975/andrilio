-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jan 2021 pada 01.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andrilio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `img_galeri` text NOT NULL,
  `kolom_galeri` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `img_galeri`, `kolom_galeri`) VALUES
(1, '1.jpg', NULL),
(2, '2.jpg', NULL),
(3, '3.jpg', NULL),
(4, '4.jpg', NULL),
(5, '5.jpg', NULL),
(6, '6.jpg', NULL),
(7, '7.jpg', NULL),
(8, '8.jpg', NULL),
(9, '9.jpg', NULL),
(10, '10.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `judul_kontak` varchar(100) NOT NULL,
  `no_telepon_kontak` varchar(25) NOT NULL,
  `alamat_kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `judul_kontak`, `no_telepon_kontak`, `alamat_kontak`) VALUES
(1, 'Kontak Kami', '087808675313', 'Jl. AMD Babakan Pocis No. 100 RT02/02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `isi_log` text NOT NULL,
  `date_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `wa_pengirim` varchar(25) NOT NULL,
  `pesan_pengirim` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `wa_pengirim`, `pesan_pengirim`) VALUES
(1, 'Andri Firman Saputra', 'andrifirmansaputra1@gmail.com', '087808675313', 'Hai'),
(2, 'Andri Firman Saputra', 'andrifirmansaputra1@gmail.com', '087808675313', 'Save');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img_navbar_brand` text NOT NULL,
  `img_profile` text NOT NULL,
  `img_jumbotron` text NOT NULL,
  `heading_1` text NOT NULL,
  `heading_2` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `title`, `img_navbar_brand`, `img_profile`, `img_jumbotron`, `heading_1`, `heading_2`, `footer`) VALUES
(1, 'Andrilio', 'img_navbar_brand.png', 'profile.jpg', 'bg-jumbotron.png', 'Andrilio', 'Andri Portfolio', '© 2020 Andrilio.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `nama_role`) VALUES
(1, 'administrator'),
(2, 'pengelola');

-- --------------------------------------------------------

--
-- Struktur dari tabel `section`
--

CREATE TABLE `section` (
  `id_section` int(11) NOT NULL,
  `nama_section` varchar(100) NOT NULL,
  `konten_section` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `section`
--

INSERT INTO `section` (`id_section`, `nama_section`, `konten_section`) VALUES
(1, 'Tentang', 'orem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odio modi est aperiam ab magni, ratione recusandae aliquid voluptatem dignissimos reprehenderit, architecto corporis, placeat soluta ipsum doloremque earum asperiores, delectus expedita dicta tempore veritatis dolores quas! Ad nisi esse iusto sapiente cumque officiis dicta aut, maiores quo accusamus, magnam quam possimus deserunt! Aspernatur ea ipsum adipisci doloremque, molestiae nisi nostrum ullam esse suscipit minus sit excepturi doloribus quia rem. Cum at nemo sit adipisci, natus ea ad in veniam architecto cupiditate sapiente cumque hic.'),
(2, 'Skill', '						Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti odio modi est aperiam ab magni, ratione recusandae aliquid voluptatem dignissimos reprehenderit, architecto corporis, placeat soluta ipsum doloremque earum asperiores, delectus expedita dicta tempore veritatis dolores quas! Ad nisi esse iusto sapiente cumque officiis dicta aut, maiores quo accusamus, magnam quam possimus deserunt! Aspernatur ea ipsum adipisci doloremque, molestiae nisi nostrum ullam esse suscipit minus sit excepturi doloribus quia rem. Cum at nemo sit adipisci, natus ea ad in veniam architecto cupiditate sapiente cumque hic, reprehenderit ipsam voluptates modi temporibus accusantium odio vel voluptatem iusto aspernatur aut fuga facilis. Non, ex.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id_sosial_media` int(11) NOT NULL,
  `nama_sosial_media` varchar(100) NOT NULL,
  `icon_sosial_media` text NOT NULL,
  `link_sosial_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sosial_media`
--

INSERT INTO `sosial_media` (`id_sosial_media`, `nama_sosial_media`, `icon_sosial_media`, `link_sosial_media`) VALUES
(1, 'Instagram', '<i class=\"fab fa-2x fa-instagram\"></i>', 'https://www.instagram.com/andri_firman_975'),
(2, 'Facebook', '<i class=\"fab fa-2x fa-facebook\"></i>', 'https://web.facebook.com/hako975'),
(3, 'Twitter', '<i class=\"fab fa-2x fa-twitter\"></i>', 'https://twitter.com/HausCoding'),
(7, 'GitHub', '<i class=\"fab fa-2x fa-github\"></i>', 'https://github.com/hako-975');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_role` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `id_role`, `date_created`, `is_active`) VALUES
(1, 'Andrilio', 'andrilio9999@gmail.com', '$2y$10$YpR9y0EmPo4bnwbX4TYfCe88v3j5p0qRmC2EaAQzV5FKXEiLvFDHW', 1, 0, 1),
(4, 'irgi', 'irgi@gmail.com', '$2y$10$dTBCKUyDKnuEJYRKkfUX5e1tJgV4/lIY46A45DUD0YuB7h7YJZRwa', 2, 1611739351, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id_user_token` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id_user_token`, `email`, `token`, `date_created`) VALUES
(1, 'andrilio9999@gmail.com', 'yfSrq80r5/sJ36aFShKl+JENK7MDBnlufM8gfDF/hwY=', 1611690779),
(2, 'andrilio9999@gmail.com', 'fRcGhyx1IQfW7oUOSsGcBNFfrlUByQ3R4CvA/Q3de7o=', 1611690881),
(3, 'andrilio9999@gmail.com', 'kVifury4oFLGD1g/8lsAIwMHn2sGvKZ2+rccUZbxh38=', 1611693357);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id_section`);

--
-- Indeks untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  ADD PRIMARY KEY (`id_sosial_media`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id_user_token`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id_sosial_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
