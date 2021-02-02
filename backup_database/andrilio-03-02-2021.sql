-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Feb 2021 pada 21.10
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
(2, '2.jpg', 0),
(3, 'set_move.PNG', 0),
(4, '4.jpg', 0),
(5, 'hasil.PNG', 0),
(6, '6.jpg', 0),
(7, 'blender-mentahan.png', 0),
(8, '8.jpg', 0),
(9, 'setting_animasi.PNG', 0),
(10, '10.jpg', 0),
(11, '11.jpg', 0),
(12, 'Screenshot_(22).png', 0),
(13, '13.jpg', 0),
(14, 'fa95a2674d825193153c10c6d471080f.png', 0),
(15, '4575c3826b051e485129c7d8608310ac.jpg', 0),
(16, '38b11a6f3df820a9cf8d80c2938ae6e9.jpg', 0),
(17, '970ec27f18c57a8593725fd7901456bb.png', 0);

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
(1, 'Pengguna <b>Andrilio</b> berhasil Login', 1612083170, 1),
(2, 'Pengguna <b>Andrilio</b> gagal login, salah memasukkan password', 1612116015, 0),
(3, 'Pengguna <b>Andrilio</b> berhasil Login', 1612116023, 1),
(4, 'Section <b>Tentang</b> berhasil diubah', 1612116359, 1),
(5, 'Section <b>Tentang</b> berhasil diubah', 1612116531, 1),
(6, 'berhasil mengubah foto <b>hasil.PNG</b>', 1612117302, 1),
(7, 'berhasil mengubah foto <b>setting_animasi.PNG</b>', 1612117333, 1),
(8, 'berhasil mengubah foto <b>set_move.PNG</b>', 1612117343, 1),
(9, 'berhasil mengubah foto <b>blender-mentahan.png</b>', 1612117647, 1),
(10, 'berhasil menambahkan foto <b>Array</b>', 1612117661, 1),
(11, 'Pengguna <b>Andrilio</b> berhasil Login', 1612117910, 1),
(12, 'Pengguna <b>Andrilio</b> berhasil Login', 1612121589, 1),
(13, 'Pengguna <b>Andrilio</b> berhasil Login', 1612216459, 1),
(14, 'berhasil menambahkan foto <b>Array</b>', 1612216480, 1),
(15, 'berhasil menghapus foto <b>1.jpg</b>', 1612216537, 1),
(16, 'berhasil menambahkan foto <b>Array</b>', 1612216549, 1),
(17, 'berhasil mengubah foto <b>Screenshot_(22).png</b>', 1612216753, 1),
(18, 'Pengguna <b>Andrilio</b> berhasil Login', 1612217447, 1),
(19, 'Pengguna <b>Andrilio</b> berhasil Login', 1612217717, 1),
(20, 'Pengguna <b>Andrilio</b> berhasil Login', 1612219310, 1),
(21, 'Pengguna <b>Andrilio</b> gagal login, salah memasukkan password', 1612220380, 0),
(22, 'Pengguna <b>Andrilio</b> berhasil Login', 1612220385, 1),
(23, 'Pengguna <b>Andrilio</b> berhasil Login', 1612221949, 1),
(24, 'berhasil mengubah title <b>Andrilios</b> dan mengubah favicon <b>hr-red-brown.png</b>', 1612222101, 1),
(25, 'berhasil mengubah title <b>Andrilios</b> dan mengubah favicon <b></b>', 1612222150, 1),
(26, 'berhasil mengubah title <b>Andrilio</b> dan mengubah favicon <b>favicon.png</b>', 1612222160, 1),
(27, 'berhasil mengubah title <b>Andrilios</b> dan mengubah favicon <b>img_navbar_brand.png</b>', 1612222236, 1),
(28, 'berhasil mengubah title <b>Andrilio</b> dan mengubah favicon <b>favicon.png</b>', 1612222252, 1),
(29, 'berhasil mengubah title <b>Andrilioa</b>', 1612222264, 1),
(30, 'berhasil mengubah title <b>Andrilio</b>', 1612222273, 1),
(31, 'Pengguna <b>Andrilio</b> berhasil Login', 1612222745, 1),
(32, 'Pengguna <b>Andrilio</b> berhasil Login', 1612224003, 1),
(33, 'Pengguna <b>Andrilio</b> berhasil Login', 1612224167, 1),
(34, 'berhasil mengubah navbar brand <b></b>', 1612224468, 1),
(35, 'berhasil mengubah navbar brand <b>favicon.png</b>', 1612224511, 1),
(36, 'berhasil mengubah navbar brand <b>img_navbar_brand.png</b>', 1612224524, 1),
(37, 'Pengguna <b>Andrilio</b> berhasil Login', 1612226496, 1),
(38, 'berhasil mengubah foto profil <b>favicon.png</b>', 1612226503, 1),
(39, 'berhasil mengubah foto profil <b>c2b21bf1-6b36-45f0-81fc-95e30e208889.jpg</b>', 1612226527, 1),
(40, 'Pengguna <b>Andrilio</b> berhasil Login', 1612226823, 1),
(41, 'berhasil mengubah background jumbotron <b>kartu-pelajar-andri-firman-saputra.png</b>', 1612226933, 1),
(42, 'berhasil mengubah background jumbotron <b>bg-jumbotron.png</b>', 1612226952, 1),
(43, 'berhasil mengubah navbar brand <b>favicon.png</b>', 1612226985, 1),
(44, 'berhasil mengubah navbar brand <b>img_navbar_brand.png</b>', 1612227004, 1),
(45, 'berhasil mengubah title <b>Andrilio</b> dan mengubah favicon <b>img_navbar_brand.png</b>', 1612227025, 1),
(46, 'berhasil mengubah title <b>Andrilio</b> dan mengubah favicon <b>favicon.png</b>', 1612227032, 1),
(47, 'berhasil mengubah background jumbotron <b>hr-red-brown.png</b>', 1612227045, 1),
(48, 'berhasil mengubah background jumbotron <b>bg-jumbotron.png</b>', 1612227051, 1),
(49, 'berhasil mengubah foto profil <b>favicon.png</b>', 1612227056, 1),
(50, 'berhasil mengubah foto profil <b>c2b21bf1-6b36-45f0-81fc-95e30e208889.jpg</b>', 1612227069, 1),
(51, 'berhasil mengubah heading 1 <b>Andrilios</b>', 1612229046, 1),
(52, 'berhasil mengubah heading 1 <b>Andrilio</b>', 1612229050, 1),
(53, 'berhasil mengubah heading 2 <b>Andri Portfolios</b>', 1612229054, 1),
(54, 'berhasil mengubah heading 2 <b>Andri Portfolio</b>', 1612229058, 1),
(55, 'berhasil mengubah footer <b>© 2020 Andrilios.</b>', 1612229279, 1),
(56, 'berhasil mengubah footer <b>© 2020 Andrilio.</b>', 1612229286, 1),
(57, 'Pengguna <b>Andrilio</b> berhasil Login', 1612229998, 1),
(58, 'Pengguna <b>Andrilio</b> berhasil Login', 1612230233, 1),
(59, 'Pengguna <b>Andrilio</b> berhasil Login', 1612287656, 1),
(60, 'berhasil mengubah kontak <b>Contact US, 087808675313, Jl. AMD Babakan Pocis No. 100 RT02/02</b>', 1612294545, 1),
(61, 'berhasil mengubah kontak <b>Kontak Kami, 0878086753132, Jl. AMD Babakan Pocis No. 100 RT02/022</b>', 1612294560, 1),
(62, 'berhasil mengubah kontak <b>Kontak Kami, 087808675313, Jl. AMD Babakan Pocis No. 100 RT02/02</b>', 1612294572, 1),
(63, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612295238, 1),
(64, 'berhasil mengubah Tata Letak Galeri <b>02</b>', 1612295251, 1),
(65, 'berhasil mengubah Tata Letak Galeri <b>01</b>', 1612295270, 1),
(66, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612295296, 1),
(67, 'berhasil mengubah Tata Letak Galeri <b>2</b>', 1612295353, 1),
(68, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612295474, 1),
(69, 'Pengguna <b>Andrilio</b> berhasil Login', 1612295703, 1),
(70, 'berhasil mengubah Tata Letak Galeri <b>02</b>', 1612295881, 1),
(71, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612295941, 1),
(72, 'berhasil mengubah Tata Letak Galeri <b>2</b>', 1612295947, 1),
(73, 'Pengguna <b>Andrilio</b> berhasil Login', 1612296238, 1),
(74, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612296344, 1),
(75, 'Pengguna <b>Andrilio</b> berhasil Login', 1612296387, 1),
(76, 'berhasil mengubah Tata Letak Galeri <b>02</b>', 1612296398, 1),
(77, 'berhasil mengubah Tata Letak Galeri <b>1</b>', 1612296409, 1),
(78, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612296592, 1),
(79, 'berhasil mengubah Tata Letak Galeri <b>02</b>', 1612296597, 1),
(80, 'berhasil mengubah Tata Letak Galeri <b>3</b>', 1612296604, 1),
(81, 'berhasil mengubah Tata Letak Galeri <b>10</b>', 1612296611, 1),
(82, 'berhasil mengubah Tata Letak Galeri <b>0</b>', 1612296620, 1);

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
(1, 'favicon.png', 'Andrilio', 'img_navbar_brand.png', 'c2b21bf1-6b36-45f0-81fc-95e30e208889.jpg', 'bg-jumbotron.png', 'Andrilio', 'Andri Portfolio', '© 2020 Andrilio.');

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
(1, 'Tentang', '<p class=\"text-center text-pink\">Saya hanyalah seorang mahasiswa yang penasaran dengan dunia pemrograman, tetapi tidak hanya itu saja semakin majunya perkembangan teknologi, mungkin saya memiliki potensi untuk membuat perangkat-perangkat yang belum ditemukan. Seperti yang kita ketahui komputer, smartphone, smartwatch dan lain-lain sudah ditemukan.  Saya memiliki asumsi bahwa dimasa yang akan datang mungkin kita dapat melakukan <em>command</em> kepada alat-alat disekitar kita (mirip smarthome) dan bahkan bisa memanipulasi mimpi kita sendiri (seperti simulasi pada VR).</p>'),
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
(4, 'GitHub', '<i class=\"fab fa-2x fa-github\"></i>', 'https://github.com/hako-975');

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
(1, 'Andrilio', 'andrilio9999@gmail.com', '$2y$10$YpR9y0EmPo4bnwbX4TYfCe88v3j5p0qRmC2EaAQzV5FKXEiLvFDHW', 1, 1611737351, 1),
(2, 'irgi', 'irgibungsu@gmail.com', '$2y$10$dTBCKUyDKnuEJYRKkfUX5e1tJgV4/lIY46A45DUD0YuB7h7YJZRwa', 2, 1611739351, 1);

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
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

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
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `section`
--
ALTER TABLE `section`
  MODIFY `id_section` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sosial_media`
--
ALTER TABLE `sosial_media`
  MODIFY `id_sosial_media` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id_user_token` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
