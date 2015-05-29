-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2015 at 11:40 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `img` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `category`, `content`, `img`, `created_at`, `updated_at`) VALUES
(40, 'Pengertian JSON', 'UID', 'JSON  merupakan singkatan dari JavaScript Object Notation. JSON sendiri diciptakan oleh Douglas Crockford pada tahun 2001.\r\nPengertian JSON sendiri menurut json.org adalah : \r\nJSON adalah format pertukaran data yang ringan, mudah dibaca dan ditulis oleh manusia, serta mudah diterjemahkan dan dibuat (generate) oleh komputer. Format ini dibuat berdasarkan bagian dari Bahasa Pemprograman JavaScript.\r\nSetelah dijelaskan diatas pengertian dari JSON, berikutnya dibawah ini adalah kelebihannya.\r\nKarena kesederhanaan penulisan JSON, ukuran file yang dihasilkanpun menjadi lebih ramping (karena terus mengulangi kata yang sama dalam tag-tag yang digunakan).\r\nHal ini berimbas pada kecepatan loading transfer data, pertukaran data JSON jadi lebih cepat.', 'g9HqskDDM2ASh9vcV1RG.gif', '2015-05-29 01:23:16', '2015-05-29 01:23:16'),
(42, 'Ionic Framework', 'UID', 'Apa itu Ionic Framework?\r\nmungkin sebagian dari anda bertanya-tanya akan hal itu. Yap, disini saya akan menjelaskan apa itu Ionic Framework.\r\n\r\njika dilihat dari namanya, Ionic Framework mengandung kata Framework. Framework sendiri merupakan suatu Kerangka Kerja yang dapat membuat pekerjaan kita bisa lebih mudah dari sebelumnya (ketika tidak menggunakan Framework). bisa juga, untuk mempermudah pemahaman, Framework merupakan suatu Template. jadi, dengan menggunakan Framework ini, kita hanya memanggil fungsi-fungsi yang sudah ada di dalamnya (yang sudah dibuatkan sebelumnya oleh pembuat Framework tersebut).\r\n\r\nLalu, apa itu Ionic. Ionic merupakan Framework yang digunakan untuk membuat aplikasi mobile Android, iOS dan Windows Phone. Ionic Framework mematahkan pernyataan "membuat aplikasi mobile itu susah!". karena dengan menggunakan Ionic Framework ini, kita hanya dituntut bisa HTML5, CSS dan JavaScript, kita tidak diharuskan mengerti bahasa Java yang biasa digunakan orang-orang untuk membuat aplikasi mobile. sehingga dengan Ionic Framework ini, membuat aplikasi mobile akan lebih mudah.', '4QaEYbRriGYO3UE9PeXe.jpg', '2015-05-29 01:41:24', '2015-05-29 01:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `asisstants`
--

CREATE TABLE IF NOT EXISTS `asisstants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `angkatan` int(11) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `divisi` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `asisstants`
--

INSERT INTO `asisstants` (`id`, `nim`, `nama`, `jurusan`, `angkatan`, `hp`, `email`, `divisi`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(3, '1104120136', 'Muhammad Ilhamsyah', 'Teknik Komputer', 2012, '0987654', 'muhammadilhamsyah78@gmail.com', 'UID', 'rajin baik ganteng soleh tapi jomblo', 'ibCUgBHkOrL9qZIkkDgx.JPG', '2015-05-29 05:59:51', '2015-05-27 06:32:32'),
(4, '1104120999', 'Recito Gigih Prasida', 'Teknik Komputer', 2012, '098765498898', 'recitogigih9@gmail.com', 'UID', 'apa aja deskipsinya', 'XM9UTBPYoZie0LUuRNzC.jpg', '2015-05-29 01:07:12', '2015-05-29 01:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE IF NOT EXISTS `loans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `tlp` varchar(100) NOT NULL,
  `keperluan` text NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `alat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(100) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `remember_token` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`password`, `created_at`, `updated_at`, `name`, `id`, `email`, `remember_token`) VALUES
('$2y$10$dFNQMqGSBVrVwcxYfiP0RuhNufGeU2MSsA9Y6oS5H3xKnBDlgDwWi', '2015-05-29 04:14:02', '2015-05-28 21:14:02', 'Ilham', 1, 'muhammadilhamsyah78@gmail.com', 'ZxGqIBg3KijtE2udyW40cv3xCbbOhSaAtT6naUhIXxmd5dI7lY7xaKvIaJdv'),
('$2y$10$fSeKpNu5Vsobh5Hfyhpyp.joY6ccB2tV1qtos01y.SpbQmk42ur/O', '2015-05-29 09:24:32', '2015-05-29 02:24:32', 'admin', 2, 'admin@access.com', '3AXT6TMIFGbzHrhtb5gxEhG4P04SmjZqYxeJHToU022aJvdVNxNV6iBIe2HE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
