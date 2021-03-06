-- MySQL dump 10.13  Distrib 8.0.22, for Linux (x86_64)
--
-- Host: localhost    Database: andrilio
-- ------------------------------------------------------
-- Server version	8.0.22-0ubuntu0.20.04.3

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `galeri`
--

DROP TABLE IF EXISTS `galeri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL AUTO_INCREMENT,
  `img_galeri` text NOT NULL,
  `kolom_galeri` int DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galeri`
--

LOCK TABLES `galeri` WRITE;
/*!40000 ALTER TABLE `galeri` DISABLE KEYS */;
INSERT INTO `galeri` VALUES (1,'1.jpg',NULL),(2,'2.jpg',NULL),(3,'3.jpg',NULL),(4,'4.jpg',NULL),(5,'5.jpg',NULL),(6,'6.jpg',NULL),(7,'7.jpg',NULL),(8,'8.jpg',NULL),(9,'9.jpg',NULL),(10,'10.jpg',NULL),(11,'11.jpg',NULL),(12,'12.jpg',NULL);
/*!40000 ALTER TABLE `galeri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kontak`
--

DROP TABLE IF EXISTS `kontak`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `kontak` (
  `id_kontak` int NOT NULL AUTO_INCREMENT,
  `judul_kontak` varchar(100) NOT NULL,
  `no_telepon_kontak` varchar(25) NOT NULL,
  `alamat_kontak` text NOT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kontak`
--

LOCK TABLES `kontak` WRITE;
/*!40000 ALTER TABLE `kontak` DISABLE KEYS */;
INSERT INTO `kontak` VALUES (1,'Kontak Kami','087808675313','Jl. AMD Babakan Pocis No. 100 RT02/02');
/*!40000 ALTER TABLE `kontak` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log` (
  `id_log` int NOT NULL AUTO_INCREMENT,
  `isi_log` text NOT NULL,
  `date_log` int NOT NULL,
  `id_user` int NOT NULL,
  PRIMARY KEY (`id_log`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pesan` (
  `id_pesan` int NOT NULL AUTO_INCREMENT,
  `nama_pengirim` varchar(100) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `wa_pengirim` varchar(25) NOT NULL,
  `pesan_pengirim` text NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan`
--

LOCK TABLES `pesan` WRITE;
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
INSERT INTO `pesan` VALUES (1,'Andri Firman Saputra','andrifirmansaputra1@gmail.com','087808675313','Hai'),(2,'Andri Firman Saputra','andrifirmansaputra1@gmail.com','087808675313','Save'),(3,'Andri Firman Saputra','andrifirmansaputra1@gmail.com','087808675313','Hallo');
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `portfolio` (
  `id_portfolio` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `img_navbar_brand` text NOT NULL,
  `img_profile` text NOT NULL,
  `img_jumbotron` text NOT NULL,
  `heading_1` text NOT NULL,
  `heading_2` text NOT NULL,
  `footer` text NOT NULL,
  PRIMARY KEY (`id_portfolio`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `portfolio`
--

LOCK TABLES `portfolio` WRITE;
/*!40000 ALTER TABLE `portfolio` DISABLE KEYS */;
INSERT INTO `portfolio` VALUES (1,'Andrilio','img_navbar_brand.png','profile.jpg','bg-jumbotron.png','Andrilio','Andri Portfolio','© 2020 Andrilio.');
/*!40000 ALTER TABLE `portfolio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nama_role` varchar(100) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'administrator'),(2,'pengelola');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `section` (
  `id_section` int NOT NULL AUTO_INCREMENT,
  `nama_section` varchar(100) NOT NULL,
  `konten_section` text NOT NULL,
  PRIMARY KEY (`id_section`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `section`
--

LOCK TABLES `section` WRITE;
/*!40000 ALTER TABLE `section` DISABLE KEYS */;
INSERT INTO `section` VALUES (1,'Tentang','<p class=\"text-center\">Saya hanyalah seorang mahasiswa yang penasaran dengan dunia pemrograman</p>'),(2,'Skill','<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-android\"></i> Android Studio</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\">50%</div>\r\n	</div>\r\n</div>\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-html5\"></i> HTML</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 99%;\" aria-valuenow=\"99\" aria-valuemin=\"0\" aria-valuemax=\"100\">99%</div>\r\n	</div>\r\n</div>\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-css3-alt\"></i> CSS</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-js-square\"></i> JavaScript</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 70%;\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\">70%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-php\"></i> PHP 7 (PDO, Native, Framework(CodeIgniter 3))</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\">90%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fas fa-fw fa-image\"></i> Photoshop</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fas fa-fw fa-photo-video\"></i> Premiere Pro</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 80%;\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">80%</div>\r\n	</div>\r\n</div>\r\n\r\n<div class=\"form-group\">\r\n	<label><i class=\"fab fa-fw fa-unity\"></i> Unity 3D Games</label>\r\n	<div class=\"progress\">\r\n		<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\">85%</div>\r\n	</div>\r\n</div>');
/*!40000 ALTER TABLE `section` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sosial_media`
--

DROP TABLE IF EXISTS `sosial_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sosial_media` (
  `id_sosial_media` int NOT NULL AUTO_INCREMENT,
  `nama_sosial_media` varchar(100) NOT NULL,
  `icon_sosial_media` text NOT NULL,
  `link_sosial_media` text NOT NULL,
  PRIMARY KEY (`id_sosial_media`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sosial_media`
--

LOCK TABLES `sosial_media` WRITE;
/*!40000 ALTER TABLE `sosial_media` DISABLE KEYS */;
INSERT INTO `sosial_media` VALUES (1,'Instagram','<i class=\"fab fa-2x fa-instagram\"></i>','https://www.instagram.com/andri_firman_975'),(2,'Facebook','<i class=\"fab fa-2x fa-facebook\"></i>','https://web.facebook.com/hako975'),(3,'Twitter','<i class=\"fab fa-2x fa-twitter\"></i>','https://twitter.com/HausCoding'),(7,'GitHub','<i class=\"fab fa-2x fa-github\"></i>','https://github.com/hako-975');
/*!40000 ALTER TABLE `sosial_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_role` int NOT NULL,
  `date_created` int NOT NULL,
  `is_active` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_user`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Andrilio','andrilio9999@gmail.com','$2y$10$YpR9y0EmPo4bnwbX4TYfCe88v3j5p0qRmC2EaAQzV5FKXEiLvFDHW',1,0,1),(4,'irgi','irgi@gmail.com','$2y$10$dTBCKUyDKnuEJYRKkfUX5e1tJgV4/lIY46A45DUD0YuB7h7YJZRwa',2,1611739351,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_token`
--

DROP TABLE IF EXISTS `user_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_token` (
  `id_user_token` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int NOT NULL,
  PRIMARY KEY (`id_user_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_token`
--

LOCK TABLES `user_token` WRITE;
/*!40000 ALTER TABLE `user_token` DISABLE KEYS */;
INSERT INTO `user_token` VALUES (1,'andrilio9999@gmail.com','yfSrq80r5/sJ36aFShKl+JENK7MDBnlufM8gfDF/hwY=',1611690779),(2,'andrilio9999@gmail.com','fRcGhyx1IQfW7oUOSsGcBNFfrlUByQ3R4CvA/Q3de7o=',1611690881),(3,'andrilio9999@gmail.com','kVifury4oFLGD1g/8lsAIwMHn2sGvKZ2+rccUZbxh38=',1611693357);
/*!40000 ALTER TABLE `user_token` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-29 18:48:22
