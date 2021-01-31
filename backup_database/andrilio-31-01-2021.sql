-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2021 pada 07.57
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(10, '10.jpg', NULL),
(11, '11.jpg', NULL),
(12, '12.jpg', NULL),
(13, '13.jpg', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `judul_kontak` varchar(100) NOT NULL,
  `no_telepon_kontak` varchar(25) NOT NULL,
  `alamat_kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id_log`, `isi_log`, `date_log`, `id_user`) VALUES
(1, 'berhasil menambahkan foto <b>Array</b>', 1611935982, 1),
(2, 'berhasil mengubah foto <b>corridor1.jpg</b>', 1611935999, 1),
(3, 'Pengguna <b>Andrilio</b> berhasil Login', 1612001814, 1),
(4, 'Pengguna <b>Andrilio</b> berhasil Login', 1612002806, 1),
(5, 'Pengguna <b>Andrilio</b> berhasil Login', 1612003836, 1),
(6, 'Section <b>Tentang</b> berhasil diubah', 1612004308, 1),
(7, 'Pengguna <b>Andrilio</b> berhasil Login', 1612014132, 1),
(8, 'Pengguna <b>Andrilio</b> berhasil Login', 1612014448, 1),
(9, 'Pengguna <b>Andrilio</b> berhasil Login', 1612015228, 1),
(10, 'Pengguna <b>Andrilio</b> berhasil Login', 1612015273, 1),
(11, 'Pengguna <b>Andrilio</b> berhasil Login', 1612015396, 1),
(12, 'Pengguna <b>Andrilio</b> berhasil Login', 1612015474, 1),
(13, 'Pengguna <b>Andrilio</b> gagal login, salah memasukkan password', 1612076114, 0),
(14, 'Pengguna <b>Andrilio</b> berhasil Login', 1612076120, 0),
(15, 'Pengguna <b>Andrilio</b> berhasil Login', 1612076161, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `email_pengirim`, `wa_pengirim`, `pesan_pengirim`) VALUES
(1, 'Andri Firman Saputra', 'andrifirmansaputra1@gmail.com', '087808675313', 'Hai'),
(2, 'Andri Firman Saputra', 'andrifirmansaputra1@gmail.com', '087808675313', 'Save'),
(3, 'Andri Firman Saputra', 'andrifirmansaputra1@gmail.com', '087808675313', 'Hallo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int(11) NOT NULL,
  `img_favicon` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `img_navbar_brand` text NOT NULL,
  `img_profile` text NOT NULL,
  `img_jumbotron` text NOT NULL,
  `heading_1` text NOT NULL,
  `heading_2` text NOT NULL,
  `footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `img_favicon`, `title`, `img_navbar_brand`, `img_profile`, `img_jumbotron`, `heading_1`, `heading_2`, `footer`) VALUES
(1, 'favicon.png', 'AndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndrilioAndr', 'img_navbar_brand.png', 'profile.jpg', 'bg-jumbotron.png', 'Andrilio', 'Andri Portfolio', '© 2020 Andrilio.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `section`
--

INSERT INTO `section` (`id_section`, `nama_section`, `konten_section`) VALUES
(1, 'Tentang', '<p class=\"text-center text-pink\">Saya hanyalah seorang mahasiswa yang penasaran dengan dunia pemrograman</p>'),
(2, 'Skill', '<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-android\"></i> Android Studio</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>\r\n	</div>\r\n</div>\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-html5\"></i> HTML</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 99%;\" aria-valuenow=\"99\" aria-valuemin=\"0\" aria-valuemax=\"100\">99%</div>\r\n	</div>\r\n</div>\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-css3-alt\"></i> CSS</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-js-square\"></i> JavaScript</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-php\"></i> PHP 7 (PDO, Native, Framework(CodeIgniter 3))</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fas fa-fw fa-image\"></i> Photoshop</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fas fa-fw fa-photo-video\"></i> Premiere Pro</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-unity\"></i> Unity 3D Games</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">85%</div>\r\n	</div>\r\n</div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosial_media`
--

CREATE TABLE `sosial_media` (
  `id_sosial_media` int(11) NOT NULL,
  `nama_sosial_media` varchar(100) NOT NULL,
  `icon_sosial_media` text NOT NULL,
  `link_sosial_media` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `password`, `id_role`, `date_created`, `is_active`) VALUES
(1, 'Andrilio', 'andrilio9999@gmail.com', '$2y$10$YpR9y0EmPo4bnwbX4TYfCe88v3j5p0qRmC2EaAQzV5FKXEiLvFDHW', 1, 0, 1),
(4, 'irgi', 'irgibungsu@gmail.com', '$2y$10$dTBCKUyDKnuEJYRKkfUX5e1tJgV4/lIY46A45DUD0YuB7h7YJZRwa', 2, 1611739351, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id_user_token` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id_user_token`, `email`, `token`, `date_created`) VALUES
(1, 'andrilio9999@gmail.com', 'yfSrq80r5/sJ36aFShKl+JENK7MDBnlufM8gfDF/hwY=', 1611690779),
(2, 'andrilio9999@gmail.com', 'fRcGhyx1IQfW7oUOSsGcBNFfrlUByQ3R4CvA/Q3de7o=', 1611690881),
(3, 'andrilio9999@gmail.com', 'kVifury4oFLGD1g/8lsAIwMHn2sGvKZ2+rccUZbxh38=', 1611693357),
(4, 'irgibungsu@gmail.com', '0IP6HfcVlyYFERbcn1TJs/zXK0IQj7QKbopZQIXAyk8=', 1612002408),
(5, 'andrilio9999@gmail.com', 'peTT2PNyEagQcKzjon7w+psU0Neru0I7A7UfN9HFcU8=', 1612002646);

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
